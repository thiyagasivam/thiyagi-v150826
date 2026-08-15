<?php
/**
 * Dynamic Pincode Page Generator
 * Handles URL pattern: tamil-nadu/pudukkottai/puthambur-pincode-622501
 */

// Include API configuration
require_once 'api_config.php';

class DynamicPincodeGenerator {
    private $fallbackData = [];
    
    public function __construct() {
        $this->loadFallbackData();
    }
    
    public function generatePage($state, $district, $area, $pincode) {
        // Sanitize inputs
        $state = $this->sanitizeSlug($state);
        $district = $this->sanitizeSlug($district);
        $area = $this->sanitizeSlug($area);
        $pincode = $this->sanitizePincode($pincode);
        
        // Get pincode data
        $pincodeData = $this->getPincodeData($pincode);
        
        // Generate page content
        return $this->renderPage($state, $district, $area, $pincode, $pincodeData);
    }
    
    private function sanitizeSlug($slug) {
        return preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));
    }
    
    private function sanitizePincode($pincode) {
        return preg_replace('/[^0-9]/', '', $pincode);
    }
    
    private function getPincodeData($pincode) {
        // Try primary API
        $data = $this->fetchFromAPI($pincode);
        
        if (!$data || empty($data)) {
            // Try fallback APIs
            $data = $this->fetchFromFallbackAPIs($pincode);
        }
        
        if (!$data || empty($data)) {
            // Use fallback data
            $data = $this->getFallbackData($pincode);
        }
        
        return $data;
    }
    
    private function fetchFromAPI($pincode) {
        // Primary API: postalpincode.in (Most reliable for Indian pincodes)
        $primaryUrl = "https://api.postalpincode.in/pincode/{$pincode}";
        $response = $this->makeAPIRequest($primaryUrl);
        
        if ($response && $this->isValidPostalResponse($response)) {
            return $this->normalizePostalPincodeResponse($response);
        }
        
        // Fallback APIs
        $fallbackAPIs = [
            'zippopotam' => "https://api.zippopotam.us/in/{$pincode}",
            'geocode_xyz' => "https://geocode.xyz/{$pincode}?json=1&region=IN"
        ];
        
        foreach ($fallbackAPIs as $apiName => $url) {
            $response = $this->makeAPIRequest($url);
            if ($response && !empty($response)) {
                $normalized = $this->normalizeAPIResponse($response, $apiName);
                if ($normalized && isset($normalized['Name'])) {
                    return $normalized;
                }
            }
        }
        
        // Try premium APIs if configured
        $premiumAPIs = ['data_gov', 'rapidapi', 'opencage'];
        
        foreach ($premiumAPIs as $apiName) {
            if (PincodeAPIConfig::isAPIKeyConfigured($apiName)) {
                $url = PincodeAPIConfig::getAPIUrl($apiName, $pincode);
                if ($url) {
                    $response = $this->makeAPIRequest($url, PincodeAPIConfig::getAPIHeaders($apiName));
                    if ($response && !empty($response)) {
                        $normalized = $this->normalizeAPIResponse($response, $apiName);
                        if ($normalized && isset($normalized['Name'])) {
                            return $normalized;
                        }
                    }
                }
            }
        }
        
        return null;
    }
    
    private function fetchFromFallbackAPIs($pincode) {
        // Additional fallback with different format attempts
        $fallbackUrls = [
            "https://zippopotam.us/IN/{$pincode}",
            "https://api.zippopotam.us/IN/{$pincode}",
            "https://geocode.xyz/{$pincode}?json=1&region=IN"
        ];
        
        foreach ($fallbackUrls as $url) {
            $response = $this->makeAPIRequest($url);
            if ($response && !empty($response)) {
                return $this->normalizeAPIResponse($response);
            }
        }
        
        return null;
    }
    
    private function makeAPIRequest($url, $headers = []) {
        $defaultHeaders = [
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
            'Accept: application/json',
            'Content-Type: application/json'
        ];
        
        $allHeaders = array_merge($defaultHeaders, $headers);
        
        // Try cURL first
        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeaders);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if ($httpCode === 200 && $response) {
                return json_decode($response, true);
            }
        }
        
        // Fallback to file_get_contents
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'header' => implode("\r\n", $allHeaders)
            ]
        ]);
        
        $response = @file_get_contents($url, false, $context);
        return $response ? json_decode($response, true) : null;
    }
    
    private function isValidPostalResponse($response) {
        // Check if the postalpincode.in API returned valid data
        if (!is_array($response) || empty($response)) {
            return false;
        }
        
        // Check for successful response structure
        if (isset($response[0]['Status']) && $response[0]['Status'] === 'Success') {
            return isset($response[0]['PostOffice']) && !empty($response[0]['PostOffice']);
        }
        
        return false;
    }
    
    private function normalizePostalPincodeResponse($response) {
        // Normalize postalpincode.in API response
        if (isset($response[0]['PostOffice'][0])) {
            $postOffice = $response[0]['PostOffice'][0];
            
            // Return normalized data structure
            return [
                'Name' => $postOffice['Name'] ?? '',
                'Description' => $postOffice['Description'] ?? '',
                'BranchType' => $postOffice['BranchType'] ?? '',
                'DeliveryStatus' => $postOffice['DeliveryStatus'] ?? '',
                'Circle' => $postOffice['Circle'] ?? '',
                'District' => $postOffice['District'] ?? '',
                'Division' => $postOffice['Division'] ?? '',
                'Region' => $postOffice['Region'] ?? '',
                'Block' => $postOffice['Block'] ?? '',
                'State' => $postOffice['State'] ?? '',
                'Country' => $postOffice['Country'] ?? 'India',
                'Pincode' => $postOffice['Pincode'] ?? $postOffice['PINCode'] ?? '',
                'Latitude' => $postOffice['Latitude'] ?? '',
                'Longitude' => $postOffice['Longitude'] ?? '',
                'Taluk' => $postOffice['Taluk'] ?? '',
                'Telephone' => $postOffice['Telephone'] ?? '',
                'Related SubOffice' => $postOffice['Related SubOffice'] ?? '',
                'Related HeadOffice' => $postOffice['Related HeadOffice'] ?? ''
            ];
        }
        
        return null;
    }
    
    private function normalizeAPIResponse($response, $apiName = '') {
        // Handle different API response formats
        switch ($apiName) {
            case 'zippopotam':
                if (isset($response['places'][0])) {
                    $place = $response['places'][0];
                    return [
                        'Name' => $place['place name'] ?? '',
                        'District' => $place['state'] ?? '',
                        'State' => $place['state'] ?? '',
                        'Country' => $response['country'] ?? 'India',
                        'Pincode' => $response['post code'] ?? '',
                        'Latitude' => $place['latitude'] ?? '',
                        'Longitude' => $place['longitude'] ?? ''
                    ];
                }
                break;
                
            case 'geocode_xyz':
                if (isset($response['standard'])) {
                    return [
                        'Name' => $response['standard']['city'] ?? '',
                        'District' => $response['standard']['region'] ?? '',
                        'State' => $response['standard']['prov'] ?? '',
                        'Country' => $response['standard']['countryname'] ?? 'India',
                        'Pincode' => $response['standard']['postal'] ?? '',
                        'Latitude' => $response['latt'] ?? '',
                        'Longitude' => $response['longt'] ?? ''
                    ];
                }
                break;
                
            default:
                // Legacy format handling
                if (isset($response[0]['PostOffice'][0])) {
                    return $response[0]['PostOffice'][0];
                } elseif (isset($response['PostOffice'][0])) {
                    return $response['PostOffice'][0];
                } elseif (isset($response['places'][0])) {
                    return [
                        'Name' => $response['places'][0]['place name'],
                        'District' => $response['places'][0]['state abbreviation'],
                        'State' => $response['country'],
                        'Pincode' => $response['post code']
                    ];
                }
        }
        
        return $response;
    }
    
    private function getFallbackData($pincode) {
        return isset($this->fallbackData[$pincode]) ? $this->fallbackData[$pincode] : null;
    }
    
    private function loadFallbackData() {
        $this->fallbackData = [
            // Tamil Nadu
            '622501' => [
                'Name' => 'Puthambur',
                'District' => 'Pudukkottai',
                'State' => 'Tamil Nadu',
                'Pincode' => '622501',
                'Country' => 'India',
                'Division' => 'Pudukkottai',
                'Region' => 'Tiruchirappalli'
            ],
            '600001' => [
                'Name' => 'Fort St George',
                'District' => 'Chennai',
                'State' => 'Tamil Nadu',
                'Pincode' => '600001',
                'Country' => 'India',
                'Division' => 'Chennai City',
                'Region' => 'Chennai'
            ],
            
            // Karnataka
            '583101' => [
                'Name' => 'Ballari',
                'District' => 'Ballari',
                'State' => 'Karnataka',
                'Pincode' => '583101',
                'Country' => 'India',
                'Division' => 'Ballari',
                'Region' => 'Gulbarga'
            ],
            '560001' => [
                'Name' => 'Bangalore GPO',
                'District' => 'Bangalore Urban',
                'State' => 'Karnataka',
                'Pincode' => '560001',
                'Country' => 'India',
                'Division' => 'Bangalore City',
                'Region' => 'Bangalore'
            ],
            
            // Delhi
            '110001' => [
                'Name' => 'New Delhi GPO',
                'District' => 'New Delhi',
                'State' => 'Delhi',
                'Pincode' => '110001',
                'Country' => 'India',
                'Division' => 'New Delhi GPO',
                'Region' => 'Delhi'
            ],
            
            // Maharashtra
            '400001' => [
                'Name' => 'Mumbai GPO',
                'District' => 'Mumbai',
                'State' => 'Maharashtra',
                'Pincode' => '400001',
                'Country' => 'India',
                'Division' => 'Mumbai City',
                'Region' => 'Mumbai'
            ],
            
            // West Bengal
            '700001' => [
                'Name' => 'Kolkata GPO',
                'District' => 'Kolkata',
                'State' => 'West Bengal',
                'Pincode' => '700001',
                'Country' => 'India',
                'Division' => 'Kolkata',
                'Region' => 'Kolkata'
            ],
            
            // Uttar Pradesh
            '110001' => [
                'Name' => 'Lucknow GPO',
                'District' => 'Lucknow',
                'State' => 'Uttar Pradesh',
                'Pincode' => '226001',
                'Country' => 'India',
                'Division' => 'Lucknow',
                'Region' => 'Lucknow'
            ],
            
            // Add more major city pincodes for better coverage
            '500001' => [
                'Name' => 'Hyderabad GPO',
                'District' => 'Hyderabad',
                'State' => 'Telangana',
                'Pincode' => '500001',
                'Country' => 'India',
                'Division' => 'Hyderabad City',
                'Region' => 'Hyderabad'
            ],
            '380001' => [
                'Name' => 'Ahmedabad GPO',
                'District' => 'Ahmedabad',
                'State' => 'Gujarat',
                'Pincode' => '380001',
                'Country' => 'India',
                'Division' => 'Ahmedabad City',
                'Region' => 'Ahmedabad'
            ],
            '600019' => [
                'Name' => 'Ariyalur',
                'District' => 'Ariyalur',
                'State' => 'Tamil Nadu',
                'Pincode' => '621704',
                'Country' => 'India',
                'Division' => 'Perambalur',
                'Region' => 'Tiruchirappalli'
            ]
        ];
    }
    
    private function renderPage($state, $district, $area, $pincode, $data) {
        $stateName = ucwords(str_replace('-', ' ', $state));
        $districtName = ucwords(str_replace('-', ' ', $district));
        $areaName = ucwords(str_replace('-', ' ', str_replace('-pincode-' . $pincode, '', $area)));
        
        $title = "{$areaName} Pincode {$pincode} - {$districtName}, {$stateName}";
        $description = "Complete details of {$areaName} area with pincode {$pincode} in {$districtName} district, {$stateName}. Find postal information, nearby areas, and location details.";
        
        ob_start();
        ?>
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($areaName); ?> pincode, <?php echo $pincode; ?>, <?php echo htmlspecialchars($districtName); ?> pincode, <?php echo htmlspecialchars($stateName); ?> pincode, postal code, India post">
    <meta name="author" content="Thiyagi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/pincode/<?php echo $state; ?>/<?php echo $district; ?>/<?php echo $area; ?>-pincode-<?php echo $pincode; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/pincode/<?php echo $state; ?>/<?php echo $district; ?>/<?php echo $area; ?>-pincode-<?php echo $pincode; ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    <meta property="twitter:creator" content="@thiyagi">
    <meta property="twitter:site" content="@thiyagi">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="IN-<?php echo strtoupper(substr($state, 0, 2)); ?>">
    <meta name="geo.placename" content="<?php echo htmlspecialchars($areaName); ?>, <?php echo htmlspecialchars($districtName); ?>, <?php echo htmlspecialchars($stateName); ?>">
    <meta name="ICBM" content="<?php echo isset($data['Latitude']) ? $data['Latitude'] : ''; ?>, <?php echo isset($data['Longitude']) ? $data['Longitude'] : ''; ?>">
    <meta name="geo.position" content="<?php echo isset($data['Latitude']) ? $data['Latitude'] : ''; ?>;<?php echo isset($data['Longitude']) ? $data['Longitude'] : ''; ?>">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "PostalAddress",
        "addressLocality": "<?php echo htmlspecialchars($areaName); ?>",
        "addressRegion": "<?php echo htmlspecialchars($stateName); ?>",
        "postalCode": "<?php echo $pincode; ?>",
        "addressCountry": {
            "@type": "Country",
            "name": "India"
        },
        "name": "<?php echo htmlspecialchars($title); ?>",
        "description": "<?php echo htmlspecialchars($description); ?>",
        "url": "https://www.thiyagi.com/pincode/<?php echo $state; ?>/<?php echo $district; ?>/<?php echo $area; ?>-pincode-<?php echo $pincode; ?>"
    }
    </script>

    <!-- CSS Framework -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-blue': '#1e40af',
                        'custom-green': '#059669',
                        'custom-red': '#dc2626'
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<body class="bg-gray-50">
    <?php include_once '../header.php'; ?>
    
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode" class="hover:text-blue-600">Pincode</a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode/<?php echo $state; ?>" class="hover:text-blue-600"><?php echo $stateName; ?></a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li><a href="/pincode/<?php echo $state; ?>/<?php echo $district; ?>" class="hover:text-blue-600"><?php echo $districtName; ?></a></li>
                <li><i class="fas fa-chevron-right text-gray-400"></i></li>
                <li class="text-gray-900"><?php echo $areaName; ?></li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2"><?php echo htmlspecialchars($title); ?></h1>
            <p class="text-gray-600 text-lg"><?php echo htmlspecialchars($description); ?></p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="md:col-span-2 space-y-6">
                
                <!-- Pincode Details Card -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-map-marker-alt text-blue-600 text-2xl mr-3"></i>
                        <h2 class="text-2xl font-bold text-gray-900">Pincode Details</h2>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">Area Name:</span>
                                <span class="text-gray-900"><?php echo htmlspecialchars($areaName); ?></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">Pincode:</span>
                                <span class="text-gray-900 font-mono text-lg"><?php echo $pincode; ?></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">District:</span>
                                <span class="text-gray-900"><?php echo htmlspecialchars($districtName); ?></span>
                            </div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">State:</span>
                                <span class="text-gray-900"><?php echo htmlspecialchars($stateName); ?></span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">Country:</span>
                                <span class="text-gray-900">India</span>
                            </div>
                            <div class="flex justify-between border-b pb-2">
                                <span class="font-semibold text-gray-700">Division:</span>
                                <span class="text-gray-900"><?php echo isset($data['Division']) ? $data['Division'] : 'N/A'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <?php if ($data && isset($data['Name'])): ?>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        Additional Information
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <?php if (isset($data['Block'])): ?>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold text-gray-700">Block:</span>
                            <span class="text-gray-900"><?php echo htmlspecialchars($data['Block']); ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($data['Region'])): ?>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold text-gray-700">Region:</span>
                            <span class="text-gray-900"><?php echo htmlspecialchars($data['Region']); ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($data['Circle'])): ?>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold text-gray-700">Circle:</span>
                            <span class="text-gray-900"><?php echo htmlspecialchars($data['Circle']); ?></span>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($data['Taluk'])): ?>
                        <div class="flex justify-between border-b pb-2">
                            <span class="font-semibold text-gray-700">Taluk:</span>
                            <span class="text-gray-900"><?php echo htmlspecialchars($data['Taluk']); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Related Pincodes -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">
                        <i class="fas fa-list text-blue-600 mr-2"></i>
                        Nearby Pincodes in <?php echo htmlspecialchars($districtName); ?>
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        <?php
                        // Generate related pincodes (example)
                        $basePincode = intval($pincode);
                        for ($i = -2; $i <= 2; $i++) {
                            if ($i !== 0) {
                                $relatedPincode = $basePincode + $i;
                                if ($relatedPincode > 100000 && $relatedPincode < 999999) {
                                    echo '<a href="/pincode/search/' . $relatedPincode . '" class="bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-3 text-center transition-colors">';
                                    echo '<div class="font-mono text-blue-900">' . $relatedPincode . '</div>';
                                    echo '</a>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- SEO Content -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">
                        <i class="fas fa-newspaper text-blue-600 mr-2"></i>
                        About <?php echo htmlspecialchars($areaName); ?>
                    </h3>
                    <div class="prose max-w-none text-gray-700">
                        <p class="mb-4">
                            <?php echo htmlspecialchars($areaName); ?> is located in <?php echo htmlspecialchars($districtName); ?> district of <?php echo htmlspecialchars($stateName); ?> state, India. 
                            The area is served by the postal code <?php echo $pincode; ?> which is managed by India Post.
                        </p>
                        <p class="mb-4">
                            This pincode covers various localities and neighborhoods in the <?php echo htmlspecialchars($areaName); ?> area. 
                            Residents and businesses in this area use <?php echo $pincode; ?> as their postal code for mail and package deliveries.
                        </p>
                        <p>
                            For any postal services, courier deliveries, or address verification in <?php echo htmlspecialchars($areaName); ?>, 
                            the pincode <?php echo $pincode; ?> should be used to ensure accurate and timely delivery.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                
                <!-- Quick Search -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-search text-blue-600 mr-2"></i>
                        Search Other Pincodes
                    </h3>
                    <form action="/pincode" method="GET" class="space-y-3">
                        <input type="text" name="search" placeholder="Enter pincode or area name" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">
                            <i class="fas fa-search mr-2"></i>Search
                        </button>
                    </form>
                </div>

                <!-- State Quick Links -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-map text-blue-600 mr-2"></i>
                        Popular States
                    </h3>
                    <div class="space-y-2">
                        <?php
                        $popularStates = [
                            'tamil-nadu' => 'Tamil Nadu',
                            'karnataka' => 'Karnataka',
                            'kerala' => 'Kerala',
                            'andhra-pradesh' => 'Andhra Pradesh',
                            'telangana' => 'Telangana',
                            'maharashtra' => 'Maharashtra'
                        ];
                        foreach ($popularStates as $slug => $name) {
                            echo '<a href="/pincode/' . $slug . '" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">';
                            echo '<i class="fas fa-chevron-right text-xs mr-2"></i>' . $name;
                            echo '</a>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Tools & Resources -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">
                        <i class="fas fa-tools text-blue-600 mr-2"></i>
                        Related Tools
                    </h3>
                    <div class="space-y-2">
                        <a href="/distance-calculator" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">
                            <i class="fas fa-route text-xs mr-2"></i>Distance Calculator
                        </a>
                        <a href="/area-converter" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">
                            <i class="fas fa-calculator text-xs mr-2"></i>Area Converter
                        </a>
                        <a href="/currency-converter" class="block text-blue-600 hover:text-blue-800 hover:bg-blue-50 p-2 rounded transition-colors">
                            <i class="fas fa-exchange-alt text-xs mr-2"></i>Currency Converter
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include_once '../footer.php'; ?>
    
    <!-- Analytics and Tracking -->
    <script>
        // Add any analytics tracking code here
        if (typeof gtag !== 'undefined') {
            gtag('config', 'GA_MEASUREMENT_ID', {
                page_title: '<?php echo htmlspecialchars($title); ?>',
                page_location: window.location.href
            });
        }
    </script>
</body>
</html>
        <?php
        return ob_get_clean();
    }
}

// Handle the request
if (isset($_GET['state'], $_GET['district'], $_GET['area'], $_GET['pincode'])) {
    $generator = new DynamicPincodeGenerator();
    echo $generator->generatePage($_GET['state'], $_GET['district'], $_GET['area'], $_GET['pincode']);
} else {
    // Redirect to main pincode page if parameters are missing
    header('Location: /pincode');
    exit;
}
?>