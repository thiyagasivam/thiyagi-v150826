<?php include 'header.php';?>
<?php
/**
 * Advanced What Is My IP Tool 2026
 */

// Enhanced function to get user's IP address with multiple sources
function getUserIP() {
    $ipKeys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_FORWARDED_FOR', 
        'HTTP_FORWARDED',
        'HTTP_X_REAL_IP',
        'REMOTE_ADDR'
    ];
    
    foreach ($ipKeys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];
            // Handle multiple IPs (comma-separated)
            if (strpos($ip, ',') !== false) {
                $ip = trim(explode(',', $ip)[0]);
            }
            // Validate IP format
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $ip;
            }
        }
    }
    
    return $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
}

// Enhanced function to get comprehensive IP information
function getIPDetails($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6) === false) {
        return ['error' => 'Invalid IP address format'];
    }
    
    // Check if it's a local/private IP
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        return [
            'ip' => $ip,
            'type' => 'Private/Local IP',
            'isLocal' => true,
            'error' => 'Location details are not available for private IP addresses'
        ];
    }
    
    $details = [
        'ip' => $ip,
        'type' => filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? 'IPv4' : 'IPv6',
        'isLocal' => false
    ];
    
    // Try multiple IP geolocation services for better accuracy
    $services = [
        'ipinfo' => "http://ipinfo.io/{$ip}/json",
        'ipapi' => "http://ip-api.com/json/{$ip}",
        'ipwhois' => "http://ipwho.is/{$ip}"
    ];
    
    foreach ($services as $service => $url) {
        $context = stream_context_create([
            'http' => [
                'timeout' => 5,
                'user_agent' => 'What-Is-My-IP-Tool-2026'
            ]
        ]);
        
        $response = @file_get_contents($url, false, $context);
        if ($response) {
            $data = json_decode($response, true);
            
            // Process different service responses
            switch ($service) {
                case 'ipinfo':
                    if (!empty($data['city'])) {
                        $details = array_merge($details, [
                            'city' => $data['city'] ?? 'Unknown',
                            'region' => $data['region'] ?? 'Unknown', 
                            'country' => $data['country'] ?? 'Unknown',
                            'coordinates' => $data['loc'] ?? 'Unknown',
                            'isp' => $data['org'] ?? 'Unknown',
                            'postal' => $data['postal'] ?? 'Unknown',
                            'timezone' => $data['timezone'] ?? 'Unknown',
                            'hostname' => $data['hostname'] ?? 'Unknown'
                        ]);
                        return $details;
                    }
                    break;
                    
                case 'ipapi':
                    if (!empty($data['city']) && $data['status'] === 'success') {
                        $details = array_merge($details, [
                            'city' => $data['city'] ?? 'Unknown',
                            'region' => $data['regionName'] ?? 'Unknown',
                            'country' => $data['country'] ?? 'Unknown',
                            'countryCode' => $data['countryCode'] ?? 'Unknown',
                            'coordinates' => ($data['lat'] ?? '') . ',' . ($data['lon'] ?? ''),
                            'isp' => $data['isp'] ?? 'Unknown',
                            'postal' => $data['zip'] ?? 'Unknown',
                            'timezone' => $data['timezone'] ?? 'Unknown'
                        ]);
                        return $details;
                    }
                    break;
                    
                case 'ipwhois':
                    if (!empty($data['city']) && $data['success'] === true) {
                        $details = array_merge($details, [
                            'city' => $data['city'] ?? 'Unknown',
                            'region' => $data['region'] ?? 'Unknown',
                            'country' => $data['country'] ?? 'Unknown',
                            'countryCode' => $data['country_code'] ?? 'Unknown',
                            'coordinates' => ($data['latitude'] ?? '') . ',' . ($data['longitude'] ?? ''),
                            'isp' => $data['connection']['isp'] ?? 'Unknown',
                            'postal' => $data['postal'] ?? 'Unknown',
                            'timezone' => $data['timezone']['id'] ?? 'Unknown'
                        ]);
                        return $details;
                    }
                    break;
            }
        }
    }
    
    $details['error'] = 'Unable to fetch location details from any service';
    return $details;
}

// Get user's IP and details
$userIP = getUserIP();
$ipDetails = getIPDetails($userIP);

// Additional network information
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
$referer = $_SERVER['HTTP_REFERER'] ?? 'Direct';
$acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'Unknown';
$serverTime = date('Y-m-d H:i:s T');
?>

    <title>What Is My IP Address 2026 - Check IP Location & Network Information</title>
    <meta name="description" content="Check your public IP address, location, ISP, and network information instantly. Professional IP lookup tool with geolocation, security analysis, and comprehensive network diagnostics for 2026.">
    <meta name="keywords" content="what is my IP, IP address checker, IP location, public IP, IP lookup tool 2026, geolocation, network diagnostics, ISP information">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/what-is-my-ip">
    <meta property="og:title" content="What Is My IP Address 2026 - IP Location Checker">
    <meta property="og:description" content="Check your public IP address, location, ISP, and network information instantly. Professional IP lookup and geolocation tool for 2026.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/what-is-my-ip">
    <meta property="twitter:title" content="What Is My IP Address 2026 - IP Location Checker">
    <meta property="twitter:description" content="Check your public IP address and location instantly. Professional IP lookup tool.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "What Is My IP Address 2026",
        "description": "Professional IP address checker and geolocation tool with comprehensive network diagnostics",
        "url": "https://www.thiyagi.com/what-is-my-ip",
        "applicationCategory": "UtilityApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .ip-card {
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .info-card {
            transition: all 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .copy-success {
            animation: copySuccess 0.5s ease;
        }
        @keyframes copySuccess {
            0% { background-color: #10B981; }
            100% { background-color: #3B82F6; }
        }
    </style>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Network Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">What Is My IP</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">🌐 What Is My IP Address 2026</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Instantly discover your public IP address, geolocation, ISP information, and comprehensive network details with our advanced IP lookup tool.</p>
        </header>

        <!-- Main IP Display -->
        <div class="mb-8">
            <div class="ip-card text-white rounded-lg shadow-2xl overflow-hidden pulse-animation">
                <div class="p-8 text-center">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold mb-4">🔍 Your Current IP Address</h2>
                        <div class="bg-white bg-opacity-20 rounded-lg p-6 mb-4">
                            <div class="text-4xl font-mono font-bold mb-2" id="ipAddress"><?= htmlspecialchars($ipDetails['ip']) ?></div>
                            <div class="text-lg opacity-90"><?= htmlspecialchars($ipDetails['type']) ?> Address</div>
                        </div>
                        <div class="flex flex-wrap justify-center gap-3">
                            <button onclick="copyIP()" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-6 rounded-lg transition-colors" id="copyBtn">
                                📋 Copy IP Address
                            </button>
                            <button onclick="refreshIP()" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                                🔄 Refresh Information
                            </button>
                            <button onclick="shareIP()" class="bg-white bg-opacity-20 hover:bg-opacity-30 text-white font-medium py-2 px-6 rounded-lg transition-colors">
                                📱 Share IP Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($ipDetails['error']) && !$ipDetails['isLocal']): ?>
        <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-yellow-500 text-2xl mr-3">⚠️</span>
                <div>
                    <h3 class="text-yellow-800 font-semibold">Limited Information Available</h3>
                    <p class="text-yellow-700 mt-1"><?= htmlspecialchars($ipDetails['error']) ?></p>
                </div>
            </div>
        </div>
        <?php elseif ($ipDetails['isLocal']): ?>
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-blue-500 text-2xl mr-3">🏠</span>
                <div>
                    <h3 class="text-blue-800 font-semibold">Private/Local IP Detected</h3>
                    <p class="text-blue-700 mt-1">You're using a private IP address. Geolocation services don't provide location data for private networks.</p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($ipDetails['city']) && !$ipDetails['isLocal']): ?>
        <!-- Location Information -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-green-500 to-blue-500 px-8 py-6">
                <h2 class="text-2xl font-bold text-white flex items-center">
                    <span class="mr-3">📍</span> Geolocation Information
                </h2>
            </div>
            
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Location Details -->
                    <div class="info-card bg-blue-50 p-6 rounded-lg border border-blue-200">
                        <div class="text-blue-600 text-3xl mb-3">🏙️</div>
                        <h3 class="font-semibold text-blue-800 mb-3">Location</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">City:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['city']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Region:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['region']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Country:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['country']) ?></span>
                            </div>
                            <?php if (!empty($ipDetails['postal'])): ?>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Postal:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['postal']) ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- ISP Information -->
                    <div class="info-card bg-green-50 p-6 rounded-lg border border-green-200">
                        <div class="text-green-600 text-3xl mb-3">🌐</div>
                        <h3 class="font-semibold text-green-800 mb-3">Network Details</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">ISP:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['isp']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">IP Type:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['type']) ?></span>
                            </div>
                            <?php if (!empty($ipDetails['hostname'])): ?>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Hostname:</span>
                                <span class="font-medium text-xs break-all"><?= htmlspecialchars($ipDetails['hostname']) ?></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Geographic Coordinates -->
                    <div class="info-card bg-purple-50 p-6 rounded-lg border border-purple-200">
                        <div class="text-purple-600 text-3xl mb-3">🗺️</div>
                        <h3 class="font-semibold text-purple-800 mb-3">Coordinates</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Location:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['coordinates']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Timezone:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['timezone']) ?></span>
                            </div>
                            <div class="text-center mt-4">
                                <a href="https://www.google.com/maps?q=<?= urlencode($ipDetails['coordinates']) ?>" 
                                   target="_blank" 
                                   class="inline-block bg-purple-600 text-white text-xs py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">
                                    🗺️ View on Map
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Technical Information -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white flex items-center">
                    <span class="mr-3">⚙️</span> Technical Information
                </h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Network Details -->
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="mr-2">🔌</span> Network Details
                        </h4>
                        <div class="bg-gray-50 p-4 rounded-lg space-y-3 text-sm">
                            <div class="flex justify-between">
                                <span class="text-gray-600">IP Address:</span>
                                <code class="bg-gray-200 px-2 py-1 rounded text-xs"><?= htmlspecialchars($ipDetails['ip']) ?></code>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">IP Version:</span>
                                <span class="font-medium"><?= htmlspecialchars($ipDetails['type']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Server Time:</span>
                                <span class="font-medium"><?= htmlspecialchars($serverTime) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Browser Information -->
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <span class="mr-2">🌏</span> Browser Information
                        </h4>
                        <div class="bg-gray-50 p-4 rounded-lg space-y-3 text-sm">
                            <div>
                                <span class="text-gray-600 block mb-1">User Agent:</span>
                                <code class="bg-gray-200 px-2 py-1 rounded text-xs break-all"><?= htmlspecialchars(substr($userAgent, 0, 80)) ?>...</code>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Language:</span>
                                <span class="font-medium"><?= htmlspecialchars(substr($acceptLanguage, 0, 20)) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Referrer:</span>
                                <span class="font-medium"><?= $referer === 'Direct' ? 'Direct Visit' : 'Referred' ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🔍 What Our IP Checker Reveals</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🌍</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Geolocation</h3>
                        <p class="text-gray-600 text-sm">Precise city, region, and country information</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🏢</div>
                        <h3 class="font-semibold text-gray-800 mb-2">ISP Details</h3>
                        <p class="text-gray-600 text-sm">Internet service provider and organization info</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🕐</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Timezone</h3>
                        <p class="text-gray-600 text-sm">Local timezone and time information</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🔒</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Security Info</h3>
                        <p class="text-gray-600 text-sm">IP type and network security details</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Use Cases -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-green-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">💡 Why Check Your IP Address</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                        <div class="text-blue-600 text-2xl mb-3">🔐</div>
                        <h4 class="font-semibold text-blue-800 mb-2">Security Monitoring</h4>
                        <p class="text-blue-700 text-sm">Monitor your network security and detect unauthorized access</p>
                    </div>
                    <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                        <div class="text-green-600 text-2xl mb-3">🌐</div>
                        <h4 class="font-semibold text-green-800 mb-2">VPN Verification</h4>
                        <p class="text-green-700 text-sm">Verify your VPN connection and location masking</p>
                    </div>
                    <div class="bg-purple-50 p-6 rounded-lg border border-purple-200">
                        <div class="text-purple-600 text-2xl mb-3">🛠️</div>
                        <h4 class="font-semibold text-purple-800 mb-2">Network Troubleshooting</h4>
                        <p class="text-purple-700 text-sm">Diagnose network issues and connectivity problems</p>
                    </div>
                    <div class="bg-orange-50 p-6 rounded-lg border border-orange-200">
                        <div class="text-orange-600 text-2xl mb-3">📍</div>
                        <h4 class="font-semibold text-orange-800 mb-2">Geo-Location Services</h4>
                        <p class="text-orange-700 text-sm">Configure location-based services and content</p>
                    </div>
                    <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                        <div class="text-red-600 text-2xl mb-3">🚫</div>
                        <h4 class="font-semibold text-red-800 mb-2">Access Control</h4>
                        <p class="text-red-700 text-sm">Manage IP-based access restrictions and firewalls</p>
                    </div>
                    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200">
                        <div class="text-indigo-600 text-2xl mb-3">📊</div>
                        <h4 class="font-semibold text-indigo-800 mb-2">Analytics & Tracking</h4>
                        <p class="text-indigo-700 text-sm">Website analytics and visitor tracking purposes</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-purple-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">❓ Frequently Asked Questions</h2>
            </div>
            <div class="p-8">
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: What is an IP address?</h4>
                        <p class="text-gray-700 text-sm">A: An IP address is a unique numerical label assigned to every device connected to the internet, allowing devices to communicate with each other.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Why does my IP address change?</h4>
                        <p class="text-gray-700 text-sm">A: Most ISPs assign dynamic IP addresses that change periodically. Static IP addresses remain the same but usually cost extra from your ISP.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Can someone track my location with my IP?</h4>
                        <p class="text-gray-700 text-sm">A: IP geolocation can provide approximate location (city/region) but not your exact address. Use a VPN for enhanced privacy protection.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Is it safe to share my IP address?</h4>
                        <p class="text-gray-700 text-sm">A: Your IP address is already visible to websites you visit. However, avoid sharing it unnecessarily, and use security measures like firewalls.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Copy IP address function
        function copyIP() {
            const ip = document.getElementById('ipAddress').textContent;
            const btn = document.getElementById('copyBtn');
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(ip).then(() => {
                    btn.textContent = '✅ Copied!';
                    btn.classList.add('copy-success');
                    setTimeout(() => {
                        btn.textContent = '📋 Copy IP Address';
                        btn.classList.remove('copy-success');
                    }, 2000);
                });
            } else {
                // Fallback for older browsers
                const textArea = document.createElement('textarea');
                textArea.value = ip;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                
                btn.textContent = '✅ Copied!';
                setTimeout(() => {
                    btn.textContent = '📋 Copy IP Address';
                }, 2000);
            }
        }

        // Refresh IP information
        function refreshIP() {
            window.location.reload();
        }

        // Share IP information
        function shareIP() {
            const ip = '<?= htmlspecialchars($ipDetails['ip']) ?>';
            const location = '<?= !empty($ipDetails['city']) ? htmlspecialchars($ipDetails['city'] . ', ' . $ipDetails['country']) : 'Unknown Location' ?>';
            
            if (navigator.share) {
                navigator.share({
                    title: 'My IP Address Information',
                    text: `My IP Address: ${ip}\nLocation: ${location}`,
                    url: window.location.href
                });
            } else {
                const shareText = `My IP Address: ${ip}\nLocation: ${location}\nCheck your IP: ${window.location.href}`;
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(shareText);
                    alert('IP information copied to clipboard!');
                } else {
                    prompt('Copy this information to share:', shareText);
                }
            }
        }

        // Auto-refresh every 5 minutes to detect IP changes
        setTimeout(() => {
            const refreshNotification = document.createElement('div');
            refreshNotification.className = 'fixed bottom-4 right-4 bg-blue-600 text-white p-4 rounded-lg shadow-lg z-50';
            refreshNotification.innerHTML = `
                <div class="flex items-center">
                    <span class="mr-2">🔄</span>
                    <span>IP information updated automatically</span>
                    <button onclick="this.parentElement.parentElement.remove()" class="ml-2 text-white hover:text-gray-200">✕</button>
                </div>
            `;
            document.body.appendChild(refreshNotification);
            
            setTimeout(() => {
                if (refreshNotification.parentElement) {
                    refreshNotification.remove();
                }
            }, 5000);
        }, 300000); // 5 minutes

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const cards = document.querySelectorAll('.info-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            });
            
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
