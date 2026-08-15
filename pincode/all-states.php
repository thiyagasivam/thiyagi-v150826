<?php
/**
 * All States and UTs Pincode Directory
 * Complete listing of all Indian states and union territories
 */

$statesData = [
    'states' => [
        'andhra-pradesh' => ['name' => 'Andhra Pradesh', 'districts' => 13, 'capital' => 'Amaravati'],
        'arunachal-pradesh' => ['name' => 'Arunachal Pradesh', 'districts' => 25, 'capital' => 'Itanagar'],
        'assam' => ['name' => 'Assam', 'districts' => 33, 'capital' => 'Dispur'],
        'bihar' => ['name' => 'Bihar', 'districts' => 38, 'capital' => 'Patna'],
        'chhattisgarh' => ['name' => 'Chhattisgarh', 'districts' => 28, 'capital' => 'Raipur'],
        'goa' => ['name' => 'Goa', 'districts' => 2, 'capital' => 'Panaji'],
        'gujarat' => ['name' => 'Gujarat', 'districts' => 33, 'capital' => 'Gandhinagar'],
        'haryana' => ['name' => 'Haryana', 'districts' => 22, 'capital' => 'Chandigarh'],
        'himachal-pradesh' => ['name' => 'Himachal Pradesh', 'districts' => 12, 'capital' => 'Shimla'],
        'jharkhand' => ['name' => 'Jharkhand', 'districts' => 24, 'capital' => 'Ranchi'],
        'karnataka' => ['name' => 'Karnataka', 'districts' => 30, 'capital' => 'Bengaluru'],
        'kerala' => ['name' => 'Kerala', 'districts' => 14, 'capital' => 'Thiruvananthapuram'],
        'madhya-pradesh' => ['name' => 'Madhya Pradesh', 'districts' => 52, 'capital' => 'Bhopal'],
        'maharashtra' => ['name' => 'Maharashtra', 'districts' => 36, 'capital' => 'Mumbai'],
        'manipur' => ['name' => 'Manipur', 'districts' => 16, 'capital' => 'Imphal'],
        'meghalaya' => ['name' => 'Meghalaya', 'districts' => 11, 'capital' => 'Shillong'],
        'mizoram' => ['name' => 'Mizoram', 'districts' => 11, 'capital' => 'Aizawl'],
        'nagaland' => ['name' => 'Nagaland', 'districts' => 12, 'capital' => 'Kohima'],
        'odisha' => ['name' => 'Odisha', 'districts' => 30, 'capital' => 'Bhubaneswar'],
        'punjab' => ['name' => 'Punjab', 'districts' => 22, 'capital' => 'Chandigarh'],
        'rajasthan' => ['name' => 'Rajasthan', 'districts' => 33, 'capital' => 'Jaipur'],
        'sikkim' => ['name' => 'Sikkim', 'districts' => 4, 'capital' => 'Gangtok'],
        'tamil-nadu' => ['name' => 'Tamil Nadu', 'districts' => 39, 'capital' => 'Chennai'],
        'telangana' => ['name' => 'Telangana', 'districts' => 33, 'capital' => 'Hyderabad'],
        'tripura' => ['name' => 'Tripura', 'districts' => 8, 'capital' => 'Agartala'],
        'uttar-pradesh' => ['name' => 'Uttar Pradesh', 'districts' => 75, 'capital' => 'Lucknow'],
        'uttarakhand' => ['name' => 'Uttarakhand', 'districts' => 13, 'capital' => 'Dehradun'],
        'west-bengal' => ['name' => 'West Bengal', 'districts' => 23, 'capital' => 'Kolkata']
    ],
    'union_territories' => [
        'andaman-nicobar-islands' => ['name' => 'Andaman and Nicobar Islands', 'districts' => 3, 'capital' => 'Port Blair'],
        'chandigarh' => ['name' => 'Chandigarh', 'districts' => 1, 'capital' => 'Chandigarh'],
        'dadra-nagar-haveli-daman-diu' => ['name' => 'Dadra and Nagar Haveli and Daman and Diu', 'districts' => 3, 'capital' => 'Daman'],
        'delhi' => ['name' => 'Delhi', 'districts' => 11, 'capital' => 'New Delhi'],
        'jammu-kashmir' => ['name' => 'Jammu and Kashmir', 'districts' => 20, 'capital' => 'Srinagar (Summer), Jammu (Winter)'],
        'ladakh' => ['name' => 'Ladakh', 'districts' => 2, 'capital' => 'Leh'],
        'lakshadweep' => ['name' => 'Lakshadweep', 'districts' => 1, 'capital' => 'Kavaratti'],
        'puducherry' => ['name' => 'Puducherry', 'districts' => 4, 'capital' => 'Puducherry']
    ]
];

$title = "Complete Pincode Directory - All Indian States & Union Territories";
$description = "Complete directory of pincodes for all 28 states and 8 union territories of India. Browse by state, district, or area to find postal codes and post office details.";

include '../header.php';
?>

    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <meta name="keywords" content="India pincode directory, all states pincode, union territories postal code, state wise pincode, district wise postal code">
    <meta name="author" content="Thiyagi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/pincode/all-states">
    <meta property="og:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/pincode/all-states">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($description); ?>">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- CSS Framework -->
    
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
    </style>

<body class="bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 min-h-screen font-sans">
    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <div class="bg-white/20 backdrop-blur-lg rounded-lg p-3">
                <ol class="flex items-center space-x-2 text-sm text-white">
                    <li><a href="/" class="hover:text-yellow-300">Home</a></li>
                    <li><i class="fas fa-chevron-right text-white/70"></i></li>
                    <li><a href="/pincode" class="hover:text-yellow-300">Pincode</a></li>
                    <li><i class="fas fa-chevron-right text-white/70"></i></li>
                    <li class="text-yellow-300">All States & UTs</li>
                </ol>
            </div>
        </nav>

        <!-- Header -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-2xl overflow-hidden mb-6">
            <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white text-center py-8 px-6">
                <h1 class="text-4xl font-bold flex items-center justify-center">
                    <i class="fas fa-flag mr-3"></i>All Indian States & Union Territories
                </h1>
                <p class="mt-2 opacity-90 text-lg">Complete pincode directory for all 28 states and 8 union territories</p>
            </div>
        </div>

        <!-- States Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mb-6 overflow-hidden">
            <div class="p-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-map mr-3 text-green-500"></i>States (28)
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <?php foreach ($statesData['states'] as $slug => $state): ?>
                        <a href="/pincode/<?php echo $slug; ?>" 
                           class="block bg-gradient-to-br from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 border border-blue-200 rounded-xl p-4 transition-all duration-300 transform hover:scale-105 hover:shadow-lg group">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h3 class="font-bold text-blue-900 text-lg mb-1 group-hover:text-blue-800">
                                        <?php echo htmlspecialchars($state['name']); ?>
                                    </h3>
                                    <div class="text-blue-700 text-sm mb-2">
                                        <i class="fas fa-city mr-1"></i>
                                        Capital: <?php echo htmlspecialchars($state['capital']); ?>
                                    </div>
                                    <div class="text-blue-600 text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        <?php echo $state['districts']; ?> Districts
                                    </div>
                                </div>
                                <div class="text-blue-500 text-2xl group-hover:text-blue-600">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Union Territories Section -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mb-6 overflow-hidden">
            <div class="p-6">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-landmark mr-3 text-purple-500"></i>Union Territories (8)
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    <?php foreach ($statesData['union_territories'] as $slug => $ut): ?>
                        <a href="/pincode/<?php echo $slug; ?>" 
                           class="block bg-gradient-to-br from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 border border-purple-200 rounded-xl p-4 transition-all duration-300 transform hover:scale-105 hover:shadow-lg group">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <h3 class="font-bold text-purple-900 text-lg mb-1 group-hover:text-purple-800">
                                        <?php echo htmlspecialchars($ut['name']); ?>
                                    </h3>
                                    <div class="text-purple-700 text-sm mb-2">
                                        <i class="fas fa-city mr-1"></i>
                                        Capital: <?php echo htmlspecialchars($ut['capital']); ?>
                                    </div>
                                    <div class="text-purple-600 text-sm">
                                        <i class="fas fa-map-marker-alt mr-1"></i>
                                        <?php echo $ut['districts']; ?> District<?php echo $ut['districts'] > 1 ? 's' : ''; ?>
                                    </div>
                                </div>
                                <div class="text-purple-500 text-2xl group-hover:text-purple-600">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl mb-6 overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-chart-bar mr-3 text-orange-500"></i>Quick Statistics
                </h2>
                <div class="grid md:grid-cols-4 gap-6 text-center">
                    <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-xl p-6">
                        <i class="fas fa-flag text-4xl text-green-600 mb-3"></i>
                        <div class="text-3xl font-bold text-green-800">28</div>
                        <div class="text-green-700 font-medium">States</div>
                    </div>
                    <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl p-6">
                        <i class="fas fa-landmark text-4xl text-purple-600 mb-3"></i>
                        <div class="text-3xl font-bold text-purple-800">8</div>
                        <div class="text-purple-700 font-medium">Union Territories</div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl p-6">
                        <i class="fas fa-map-marker-alt text-4xl text-blue-600 mb-3"></i>
                        <div class="text-3xl font-bold text-blue-800">700+</div>
                        <div class="text-blue-700 font-medium">Districts</div>
                    </div>
                    <div class="bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl p-6">
                        <i class="fas fa-envelope text-4xl text-orange-600 mb-3"></i>
                        <div class="text-3xl font-bold text-orange-800">19,000+</div>
                        <div class="text-orange-700 font-medium">Pincodes</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Widget -->
        <div class="bg-white/95 backdrop-blur-lg rounded-2xl shadow-xl overflow-hidden">
            <div class="p-6 text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-search mr-2 text-blue-500"></i>
                    Search Specific Pincode
                </h3>
                <form action="/pincode" method="GET" class="max-w-md mx-auto">
                    <div class="flex gap-2">
                        <input type="text" name="search" placeholder="Enter pincode or area name" 
                               class="flex-1 px-4 py-3 border-2 border-gray-300 rounded-full focus:border-blue-500 focus:outline-none">
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium rounded-full hover:from-blue-600 hover:to-blue-700 transition-all">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                <p class="text-gray-600 text-sm mt-3">Search across all states and union territories</p>
            </div>
        </div>

    </div>

    <?php include '../footer.php'; ?>
</body>
</html>