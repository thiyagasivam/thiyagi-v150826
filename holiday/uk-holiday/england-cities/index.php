<?php 
// England Cities Holidays - Index Page
$page_title = "England Cities Holidays 2026 - Complete Local Events Guide | 25+ Years Experience";
$page_description = "Complete holiday calendar 2026 for all major English cities. Find local events, festivals, and celebrations in London, Manchester, Birmingham, and more. Professional guide with 25+ years of holiday planning expertise.";
$page_keywords = "England cities holidays 2026, London events, Manchester festivals, Birmingham celebrations, English city holidays, UK local events 2026";
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');

include '../../../header.php'; 
?>

<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_description; ?>">
<meta name="keywords" content="<?php echo $page_keywords; ?>">

<style>
:root {
    --england-primary: #CE1124;
    --england-secondary: #B31427;
}
.bg-england-primary { background-color: var(--england-primary); }
.text-england-primary { color: var(--england-primary); }
.bg-england-secondary { background-color: var(--england-secondary); }

/* Ensure icons are visible */
.fas, .fa-solid {
    font-weight: 900 !important;
    font-family: "Font Awesome 6 Free" !important;
}

/* Ensure content sections are visible */
.bg-white {
    background-color: #ffffff !important;
    color: #374151 !important;
}

.bg-gray-50 {
    background-color: #f9fafb !important;
    color: #374151 !important;
}

/* City card hover effects */
.city-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
}
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../../" class="text-blue-600 hover:text-blue-800">
                Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../" class="text-blue-600 hover:text-blue-800">
                UK Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../england-holidays.php" class="text-blue-600 hover:text-blue-800">
                England
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">England Cities</span>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-gradient-to-r from-england-primary to-england-secondary text-white shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-12 relative z-10">
        <div class="text-center">
            <div class="flex justify-center items-center space-x-4 mb-4">
                <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
                    <div class="absolute inset-0 bg-white"></div>
                    <div class="absolute h-full w-1 bg-red-600 left-1/2 transform -translate-x-1/2"></div>
                    <div class="absolute w-full h-1 bg-red-600 top-1/2 transform -translate-y-1/2"></div>
                </div>
                <i class="fas fa-city text-6xl text-white drop-shadow-lg"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">England Cities Holidays 2026</h1>
            <p class="text-xl opacity-90 mb-6">Local Events & Festivals in Major English Cities</p>
            <div class="flex justify-center space-x-8 text-sm">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-check text-yellow-300"></i>
                    <span>Local Events</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-music text-yellow-300"></i>
                    <span>Festivals</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-building text-yellow-300"></i>
                    <span>20 Cities</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
</header>

<!-- Quick Search -->
<div class="bg-gray-50 py-6">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <div class="relative">
                <input type="text" id="citySearch" placeholder="Search for your city..." 
                       class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    
    <!-- Major Cities -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Major Cities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- London -->
            <a href="london-holidays.php" data-city="london" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-red-700 p-6 text-white text-center relative">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-landmark text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">London</h3>
                    <p class="text-sm opacity-80">Capital City • Greater London</p>
                    <div class="absolute top-2 right-2">
                        <i class="fas fa-crown text-yellow-300 text-lg"></i>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Lord Mayor's Show, Notting Hill Carnival, London Marathon, New Year's Parade</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Manchester -->
            <a href="manchester-holidays.php" data-city="manchester" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-yellow-600 to-yellow-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-futbol text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Manchester</h3>
                    <p class="text-sm opacity-80">Greater Manchester</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Manchester Day, Manchester Pride, Christmas Markets</p>
                    <div class="flex items-center text-yellow-600 group-hover:text-yellow-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Birmingham -->
            <a href="birmingham-holidays.php" data-city="birmingham" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-industry text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Birmingham</h3>
                    <p class="text-sm opacity-80">West Midlands</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Birmingham Pride, Diwali Celebrations</p>
                    <div class="flex items-center text-blue-600 group-hover:text-blue-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Liverpool -->
            <a href="liverpool-holidays.php" data-city="liverpool" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-blue-600 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-ship text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Liverpool</h3>
                    <p class="text-sm opacity-80">Merseyside</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Liverpool Day, Music Festival, Hillsborough Memorial</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- All Cities Grid -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">All English Cities</h2>
        <div id="citiesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            
            <!-- Leeds -->
            <a href="leeds-holidays.php" data-city="leeds" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leeds</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Sheffield -->
            <a href="sheffield-holidays.php" data-city="sheffield" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Sheffield</h3>
                        <p class="text-xs text-gray-600">South Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Bristol -->
            <a href="bristol-holidays.php" data-city="bristol" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bristol</h3>
                        <p class="text-xs text-gray-600">Gloucestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Newcastle -->
            <a href="newcastle-holidays.php" data-city="newcastle" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Newcastle</h3>
                        <p class="text-xs text-gray-600">Tyne and Wear</p>
                    </div>
                </div>
            </a>
            
            <!-- Nottingham -->
            <a href="nottingham-holidays.php" data-city="nottingham" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-bow-arrow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Nottingham</h3>
                        <p class="text-xs text-gray-600">Nottinghamshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Plymouth -->
            <a href="plymouth-holidays.php" data-city="plymouth" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-ship text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Plymouth</h3>
                        <p class="text-xs text-gray-600">Devon</p>
                    </div>
                </div>
            </a>
            
            <!-- Leicester -->
            <a href="leicester-holidays.php" data-city="leicester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-candle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leicester</h3>
                        <p class="text-xs text-gray-600">Leicestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Coventry -->
            <a href="coventry-holidays.php" data-city="coventry" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-dove text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Coventry</h3>
                        <p class="text-xs text-gray-600">West Midlands</p>
                    </div>
                </div>
            </a>
            
            <!-- Bradford -->
            <a href="bradford-holidays.php" data-city="bradford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-globe text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bradford</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- York -->
            <a href="york-holidays.php" data-city="york" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-helmet-battle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">York</h3>
                        <p class="text-xs text-gray-600">North Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Cambridge -->
            <a href="cambridge-holidays.php" data-city="cambridge" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Cambridge</h3>
                        <p class="text-xs text-gray-600">Cambridgeshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Oxford -->
            <a href="oxford-holidays.php" data-city="oxford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-university text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Oxford</h3>
                        <p class="text-xs text-gray-600">Oxfordshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Canterbury -->
            <a href="canterbury-holidays.php" data-city="canterbury" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-church text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Canterbury</h3>
                        <p class="text-xs text-gray-600">Kent</p>
                    </div>
                </div>
            </a>
            
            <!-- Bath -->
            <a href="bath-holidays.php" data-city="bath" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-spa text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bath</h3>
                        <p class="text-xs text-gray-600">Somerset</p>
                    </div>
                </div>
            </a>
            
            <!-- Winchester -->
            <a href="winchester-holidays.php" data-city="winchester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-cloud-rain text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Winchester</h3>
                        <p class="text-xs text-gray-600">Hampshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Brighton -->
            <a href="brighton-holidays.php" data-city="brighton" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center">
                        <i class="fas fa-rainbow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Brighton</h3>
                        <p class="text-xs text-gray-600">East Sussex</p>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- Common Bank Holidays -->
    <section class="bg-gray-50 rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Common England Bank Holidays 2026</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-champagne-glasses text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">New Year's Day</h3>
                <p class="text-sm text-gray-600">January 1, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-cross text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Good Friday</h3>
                <p class="text-sm text-gray-600">April 18, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-egg text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Easter Monday</h3>
                <p class="text-sm text-gray-600">April 21, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-dragon text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">St. George's Day</h3>
                <p class="text-sm text-gray-600">April 23, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-calendar text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Early May Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 5, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-leaf text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Spring Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 26, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-sun text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Summer Bank Holiday</h3>
                <p class="text-sm text-gray-600">August 25, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-tree text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Christmas Day</h3>
                <p class="text-sm text-gray-600">December 25, 2026</p>
            </div>
        </div>
    </section>
    
</div>

<!-- Holiday Planning Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            Holiday Planning Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-800 flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Plan Ahead
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book city accommodations early for events</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check each city's local event calendars</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider school holidays for family visits</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Research city-specific transport options</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-green-800 flex items-center">
                    <i class="fas fa-piggy-bank mr-2"></i>
                    Save Money
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Compare prices between cities</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Use city transport day passes</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Look for city-specific holiday deals</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book attraction bundles in advance</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-england-primary to-england-secondary text-white p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    City Events
                </h3>
                <ul class="space-y-2 text-sm">
                    <li><i class="fas fa-check mr-2"></i>London: West End shows & festivals</li>
                    <li><i class="fas fa-check mr-2"></i>Manchester: Music & football events</li>
                    <li><i class="fas fa-check mr-2"></i>Birmingham: Cultural celebrations</li>
                    <li><i class="fas fa-check mr-2"></i>Bath: Heritage & arts festivals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Banking Holiday Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-university text-blue-600 mr-3"></i>
            Banking Holiday Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>
                    Important Reminders
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-blue-500"></i>
                        <span>All city banks close on UK bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-mobile-alt mt-1 mr-3 text-blue-500"></i>
                        <span>Online banking works in all cities 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-credit-card mt-1 mr-3 text-blue-500"></i>
                        <span>Card payments accepted throughout England</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-blue-500"></i>
                        <span>Emergency banking helplines remain open</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-tasks mr-2 text-green-500"></i>
                    City Banking Tips
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-money-bill mt-1 mr-3 text-green-500"></i>
                        <span>Withdraw cash before holiday weekends</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-500"></i>
                        <span>Locate ATMs near city centers and attractions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-exchange-alt mt-1 mr-3 text-green-500"></i>
                        <span>Plan international transfers in advance</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-green-500"></i>
                        <span>Post offices in cities offer banking services</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Frequently Asked Questions -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8" style="background-color: #f9fafb !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Frequently Asked Questions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which English cities have the best holiday events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">London offers world-class theatre and festivals, Manchester has vibrant music scenes, Birmingham hosts multicultural celebrations, and Bath features heritage festivals throughout the year.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I travel between English cities during holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Train services connect all major English cities efficiently. Book in advance for better prices during holiday periods. Many cities also have excellent bus connections.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Are city attractions open during bank holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Most major attractions in English cities remain open during bank holidays, though hours may vary. Museums, galleries, and tourist sites typically maintain regular schedules.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">What's the best way to find local city events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Check each city council's official website, visit local tourism information centers, follow city social media accounts, and subscribe to local event newsletters for up-to-date information.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I plan a multi-city holiday tour?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Plan your route geographically, book accommodations in advance, check local event calendars, purchase rail passes for multiple journeys, and allow time for city-specific experiences.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which cities are best for family holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">York offers historical attractions, Cambridge has beautiful colleges, Brighton features seaside fun, and London provides world-class museums and entertainment suitable for all ages.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// City search functionality
document.getElementById('citySearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const cityCards = document.querySelectorAll('.city-card');
    
    cityCards.forEach(card => {
        const cityName = card.dataset.city || card.textContent.toLowerCase();
        if (cityName.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>

<?php include '../../../footer.php'; ?>
SERVER['HTTP_HOST'] . strtok(<?php 
// England Cities Holidays - Index Page
$page_title = "England Cities Holidays 2026 | Local Events | All Major Cities";
$page_description = "Complete holiday calendar for all major English cities. Find local events, festivals, and celebrations in London, Manchester, Birmingham, and more.";
$page_keywords = "England cities holidays, London events, Manchester festivals, Birmingham celebrations, English city holidays";
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include '../../../header.php'; 
?>

<style>
:root {
    --england-primary: #CE1124;
    --england-secondary: #B31427;
}
.bg-england-primary { background-color: var(--england-primary); }
.text-england-primary { color: var(--england-primary); }
.bg-england-secondary { background-color: var(--england-secondary); }

/* Ensure icons are visible */
.fas, .fa-solid {
    font-weight: 900 !important;
    font-family: "Font Awesome 6 Free" !important;
}

/* Ensure content sections are visible */
.bg-white {
    background-color: #ffffff !important;
    color: #374151 !important;
}

.bg-gray-50 {
    background-color: #f9fafb !important;
    color: #374151 !important;
}

/* City card hover effects */
.city-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
}
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../../" class="text-blue-600 hover:text-blue-800">
                Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../" class="text-blue-600 hover:text-blue-800">
                UK Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../england-holidays.php" class="text-blue-600 hover:text-blue-800">
                England
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">England Cities</span>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-gradient-to-r from-england-primary to-england-secondary text-white shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-12 relative z-10">
        <div class="text-center">
            <div class="flex justify-center items-center space-x-4 mb-4">
                <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
                    <div class="absolute inset-0 bg-white"></div>
                    <div class="absolute h-full w-1 bg-red-600 left-1/2 transform -translate-x-1/2"></div>
                    <div class="absolute w-full h-1 bg-red-600 top-1/2 transform -translate-y-1/2"></div>
                </div>
                <i class="fas fa-city text-6xl text-white drop-shadow-lg"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">England Cities Holidays 2026</h1>
            <p class="text-xl opacity-90 mb-6">Local Events & Festivals in Major English Cities</p>
            <div class="flex justify-center space-x-8 text-sm">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-check text-yellow-300"></i>
                    <span>Local Events</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-music text-yellow-300"></i>
                    <span>Festivals</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-building text-yellow-300"></i>
                    <span>20 Cities</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
</header>

<!-- Quick Search -->
<div class="bg-gray-50 py-6">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <div class="relative">
                <input type="text" id="citySearch" placeholder="Search for your city..." 
                       class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    
    <!-- Major Cities -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Major Cities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- London -->
            <a href="london-holidays.php" data-city="london" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-red-700 p-6 text-white text-center relative">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-landmark text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">London</h3>
                    <p class="text-sm opacity-80">Capital City • Greater London</p>
                    <div class="absolute top-2 right-2">
                        <i class="fas fa-crown text-yellow-300 text-lg"></i>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Lord Mayor's Show, Notting Hill Carnival, London Marathon, New Year's Parade</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Manchester -->
            <a href="manchester-holidays.php" data-city="manchester" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-yellow-600 to-yellow-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-futbol text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Manchester</h3>
                    <p class="text-sm opacity-80">Greater Manchester</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Manchester Day, Manchester Pride, Christmas Markets</p>
                    <div class="flex items-center text-yellow-600 group-hover:text-yellow-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Birmingham -->
            <a href="birmingham-holidays.php" data-city="birmingham" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-industry text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Birmingham</h3>
                    <p class="text-sm opacity-80">West Midlands</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Birmingham Pride, Diwali Celebrations</p>
                    <div class="flex items-center text-blue-600 group-hover:text-blue-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Liverpool -->
            <a href="liverpool-holidays.php" data-city="liverpool" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-blue-600 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-ship text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Liverpool</h3>
                    <p class="text-sm opacity-80">Merseyside</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Liverpool Day, Music Festival, Hillsborough Memorial</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- All Cities Grid -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">All English Cities</h2>
        <div id="citiesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            
            <!-- Leeds -->
            <a href="leeds-holidays.php" data-city="leeds" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leeds</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Sheffield -->
            <a href="sheffield-holidays.php" data-city="sheffield" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Sheffield</h3>
                        <p class="text-xs text-gray-600">South Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Bristol -->
            <a href="bristol-holidays.php" data-city="bristol" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bristol</h3>
                        <p class="text-xs text-gray-600">Gloucestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Newcastle -->
            <a href="newcastle-holidays.php" data-city="newcastle" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Newcastle</h3>
                        <p class="text-xs text-gray-600">Tyne and Wear</p>
                    </div>
                </div>
            </a>
            
            <!-- Nottingham -->
            <a href="nottingham-holidays.php" data-city="nottingham" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-bow-arrow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Nottingham</h3>
                        <p class="text-xs text-gray-600">Nottinghamshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Plymouth -->
            <a href="plymouth-holidays.php" data-city="plymouth" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-ship text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Plymouth</h3>
                        <p class="text-xs text-gray-600">Devon</p>
                    </div>
                </div>
            </a>
            
            <!-- Leicester -->
            <a href="leicester-holidays.php" data-city="leicester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-candle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leicester</h3>
                        <p class="text-xs text-gray-600">Leicestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Coventry -->
            <a href="coventry-holidays.php" data-city="coventry" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-dove text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Coventry</h3>
                        <p class="text-xs text-gray-600">West Midlands</p>
                    </div>
                </div>
            </a>
            
            <!-- Bradford -->
            <a href="bradford-holidays.php" data-city="bradford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-globe text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bradford</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- York -->
            <a href="york-holidays.php" data-city="york" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-helmet-battle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">York</h3>
                        <p class="text-xs text-gray-600">North Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Cambridge -->
            <a href="cambridge-holidays.php" data-city="cambridge" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Cambridge</h3>
                        <p class="text-xs text-gray-600">Cambridgeshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Oxford -->
            <a href="oxford-holidays.php" data-city="oxford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-university text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Oxford</h3>
                        <p class="text-xs text-gray-600">Oxfordshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Canterbury -->
            <a href="canterbury-holidays.php" data-city="canterbury" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-church text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Canterbury</h3>
                        <p class="text-xs text-gray-600">Kent</p>
                    </div>
                </div>
            </a>
            
            <!-- Bath -->
            <a href="bath-holidays.php" data-city="bath" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-spa text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bath</h3>
                        <p class="text-xs text-gray-600">Somerset</p>
                    </div>
                </div>
            </a>
            
            <!-- Winchester -->
            <a href="winchester-holidays.php" data-city="winchester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-cloud-rain text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Winchester</h3>
                        <p class="text-xs text-gray-600">Hampshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Brighton -->
            <a href="brighton-holidays.php" data-city="brighton" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center">
                        <i class="fas fa-rainbow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Brighton</h3>
                        <p class="text-xs text-gray-600">East Sussex</p>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- Common Bank Holidays -->
    <section class="bg-gray-50 rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Common England Bank Holidays 2026</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-champagne-glasses text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">New Year's Day</h3>
                <p class="text-sm text-gray-600">January 1, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-cross text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Good Friday</h3>
                <p class="text-sm text-gray-600">April 18, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-egg text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Easter Monday</h3>
                <p class="text-sm text-gray-600">April 21, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-dragon text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">St. George's Day</h3>
                <p class="text-sm text-gray-600">April 23, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-calendar text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Early May Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 5, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-leaf text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Spring Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 26, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-sun text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Summer Bank Holiday</h3>
                <p class="text-sm text-gray-600">August 25, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-tree text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Christmas Day</h3>
                <p class="text-sm text-gray-600">December 25, 2026</p>
            </div>
        </div>
    </section>
    
</div>

<!-- Holiday Planning Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            Holiday Planning Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-800 flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Plan Ahead
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book city accommodations early for events</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check each city's local event calendars</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider school holidays for family visits</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Research city-specific transport options</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-green-800 flex items-center">
                    <i class="fas fa-piggy-bank mr-2"></i>
                    Save Money
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Compare prices between cities</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Use city transport day passes</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Look for city-specific holiday deals</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book attraction bundles in advance</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-england-primary to-england-secondary text-white p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    City Events
                </h3>
                <ul class="space-y-2 text-sm">
                    <li><i class="fas fa-check mr-2"></i>London: West End shows & festivals</li>
                    <li><i class="fas fa-check mr-2"></i>Manchester: Music & football events</li>
                    <li><i class="fas fa-check mr-2"></i>Birmingham: Cultural celebrations</li>
                    <li><i class="fas fa-check mr-2"></i>Bath: Heritage & arts festivals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Banking Holiday Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-university text-blue-600 mr-3"></i>
            Banking Holiday Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>
                    Important Reminders
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-blue-500"></i>
                        <span>All city banks close on UK bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-mobile-alt mt-1 mr-3 text-blue-500"></i>
                        <span>Online banking works in all cities 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-credit-card mt-1 mr-3 text-blue-500"></i>
                        <span>Card payments accepted throughout England</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-blue-500"></i>
                        <span>Emergency banking helplines remain open</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-tasks mr-2 text-green-500"></i>
                    City Banking Tips
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-money-bill mt-1 mr-3 text-green-500"></i>
                        <span>Withdraw cash before holiday weekends</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-500"></i>
                        <span>Locate ATMs near city centers and attractions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-exchange-alt mt-1 mr-3 text-green-500"></i>
                        <span>Plan international transfers in advance</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-green-500"></i>
                        <span>Post offices in cities offer banking services</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Frequently Asked Questions -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8" style="background-color: #f9fafb !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Frequently Asked Questions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which English cities have the best holiday events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">London offers world-class theatre and festivals, Manchester has vibrant music scenes, Birmingham hosts multicultural celebrations, and Bath features heritage festivals throughout the year.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I travel between English cities during holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Train services connect all major English cities efficiently. Book in advance for better prices during holiday periods. Many cities also have excellent bus connections.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Are city attractions open during bank holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Most major attractions in English cities remain open during bank holidays, though hours may vary. Museums, galleries, and tourist sites typically maintain regular schedules.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">What's the best way to find local city events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Check each city council's official website, visit local tourism information centers, follow city social media accounts, and subscribe to local event newsletters for up-to-date information.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I plan a multi-city holiday tour?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Plan your route geographically, book accommodations in advance, check local event calendars, purchase rail passes for multiple journeys, and allow time for city-specific experiences.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which cities are best for family holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">York offers historical attractions, Cambridge has beautiful colleges, Brighton features seaside fun, and London provides world-class museums and entertainment suitable for all ages.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// City search functionality
document.getElementById('citySearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const cityCards = document.querySelectorAll('.city-card');
    
    cityCards.forEach(card => {
        const cityName = card.dataset.city || card.textContent.toLowerCase();
        if (cityName.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>

<?php include '../../../footer.php'; ?>
SERVER['REQUEST_URI'], '?');

include '../../../header.php'; 
?>

<style>
:root {
    --england-primary: #CE1124;
    --england-secondary: #B31427;
}
.bg-england-primary { background-color: var(--england-primary); }
.text-england-primary { color: var(--england-primary); }
.bg-england-secondary { background-color: var(--england-secondary); }

/* Ensure icons are visible */
.fas, .fa-solid {
    font-weight: 900 !important;
    font-family: "Font Awesome 6 Free" !important;
}

/* Ensure content sections are visible */
.bg-white {
    background-color: #ffffff !important;
    color: #374151 !important;
}

.bg-gray-50 {
    background-color: #f9fafb !important;
    color: #374151 !important;
}

/* City card hover effects */
.city-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
}
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../../" class="text-blue-600 hover:text-blue-800">
                Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../" class="text-blue-600 hover:text-blue-800">
                UK Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../england-holidays.php" class="text-blue-600 hover:text-blue-800">
                England
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">England Cities</span>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-gradient-to-r from-england-primary to-england-secondary text-white shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-12 relative z-10">
        <div class="text-center">
            <div class="flex justify-center items-center space-x-4 mb-4">
                <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
                    <div class="absolute inset-0 bg-white"></div>
                    <div class="absolute h-full w-1 bg-red-600 left-1/2 transform -translate-x-1/2"></div>
                    <div class="absolute w-full h-1 bg-red-600 top-1/2 transform -translate-y-1/2"></div>
                </div>
                <i class="fas fa-city text-6xl text-white drop-shadow-lg"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">England Cities Holidays 2026</h1>
            <p class="text-xl opacity-90 mb-6">Local Events & Festivals in Major English Cities</p>
            <div class="flex justify-center space-x-8 text-sm">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-check text-yellow-300"></i>
                    <span>Local Events</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-music text-yellow-300"></i>
                    <span>Festivals</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-building text-yellow-300"></i>
                    <span>20 Cities</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
</header>

<!-- Quick Search -->
<div class="bg-gray-50 py-6">
    <div class="container mx-auto px-4">
        <div class="max-w-md mx-auto">
            <div class="relative">
                <input type="text" id="citySearch" placeholder="Search for your city..." 
                       class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500">
                <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    
    <!-- Major Cities -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Major Cities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- London -->
            <a href="london-holidays.php" data-city="london" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-red-700 p-6 text-white text-center relative">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-landmark text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">London</h3>
                    <p class="text-sm opacity-80">Capital City • Greater London</p>
                    <div class="absolute top-2 right-2">
                        <i class="fas fa-crown text-yellow-300 text-lg"></i>
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Lord Mayor's Show, Notting Hill Carnival, London Marathon, New Year's Parade</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Manchester -->
            <a href="manchester-holidays.php" data-city="manchester" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-yellow-600 to-yellow-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-futbol text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Manchester</h3>
                    <p class="text-sm opacity-80">Greater Manchester</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Manchester Day, Manchester Pride, Christmas Markets</p>
                    <div class="flex items-center text-yellow-600 group-hover:text-yellow-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Birmingham -->
            <a href="birmingham-holidays.php" data-city="birmingham" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-industry text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Birmingham</h3>
                    <p class="text-sm opacity-80">West Midlands</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Birmingham Pride, Diwali Celebrations</p>
                    <div class="flex items-center text-blue-600 group-hover:text-blue-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Liverpool -->
            <a href="liverpool-holidays.php" data-city="liverpool" class="city-card group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-blue-600 p-6 text-white text-center">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-ship text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">Liverpool</h3>
                    <p class="text-sm opacity-80">Merseyside</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm mb-3">Liverpool Day, Music Festival, Hillsborough Memorial</p>
                    <div class="flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Events</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- All Cities Grid -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">All English Cities</h2>
        <div id="citiesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            
            <!-- Leeds -->
            <a href="leeds-holidays.php" data-city="leeds" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leeds</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Sheffield -->
            <a href="sheffield-holidays.php" data-city="sheffield" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Sheffield</h3>
                        <p class="text-xs text-gray-600">South Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Bristol -->
            <a href="bristol-holidays.php" data-city="bristol" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bristol</h3>
                        <p class="text-xs text-gray-600">Gloucestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Newcastle -->
            <a href="newcastle-holidays.php" data-city="newcastle" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center">
                        <i class="fas fa-city text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Newcastle</h3>
                        <p class="text-xs text-gray-600">Tyne and Wear</p>
                    </div>
                </div>
            </a>
            
            <!-- Nottingham -->
            <a href="nottingham-holidays.php" data-city="nottingham" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-bow-arrow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Nottingham</h3>
                        <p class="text-xs text-gray-600">Nottinghamshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Plymouth -->
            <a href="plymouth-holidays.php" data-city="plymouth" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-ship text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Plymouth</h3>
                        <p class="text-xs text-gray-600">Devon</p>
                    </div>
                </div>
            </a>
            
            <!-- Leicester -->
            <a href="leicester-holidays.php" data-city="leicester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-candle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Leicester</h3>
                        <p class="text-xs text-gray-600">Leicestershire</p>
                    </div>
                </div>
            </a>
            
            <!-- Coventry -->
            <a href="coventry-holidays.php" data-city="coventry" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-dove text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Coventry</h3>
                        <p class="text-xs text-gray-600">West Midlands</p>
                    </div>
                </div>
            </a>
            
            <!-- Bradford -->
            <a href="bradford-holidays.php" data-city="bradford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-globe text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bradford</h3>
                        <p class="text-xs text-gray-600">West Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- York -->
            <a href="york-holidays.php" data-city="york" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-helmet-battle text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">York</h3>
                        <p class="text-xs text-gray-600">North Yorkshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Cambridge -->
            <a href="cambridge-holidays.php" data-city="cambridge" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Cambridge</h3>
                        <p class="text-xs text-gray-600">Cambridgeshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Oxford -->
            <a href="oxford-holidays.php" data-city="oxford" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-900 rounded-full flex items-center justify-center">
                        <i class="fas fa-university text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Oxford</h3>
                        <p class="text-xs text-gray-600">Oxfordshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Canterbury -->
            <a href="canterbury-holidays.php" data-city="canterbury" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-church text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Canterbury</h3>
                        <p class="text-xs text-gray-600">Kent</p>
                    </div>
                </div>
            </a>
            
            <!-- Bath -->
            <a href="bath-holidays.php" data-city="bath" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-yellow-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-spa text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Bath</h3>
                        <p class="text-xs text-gray-600">Somerset</p>
                    </div>
                </div>
            </a>
            
            <!-- Winchester -->
            <a href="winchester-holidays.php" data-city="winchester" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-red-800 rounded-full flex items-center justify-center">
                        <i class="fas fa-cloud-rain text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Winchester</h3>
                        <p class="text-xs text-gray-600">Hampshire</p>
                    </div>
                </div>
            </a>
            
            <!-- Brighton -->
            <a href="brighton-holidays.php" data-city="brighton" class="city-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-blue-400 rounded-full flex items-center justify-center">
                        <i class="fas fa-rainbow text-white"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Brighton</h3>
                        <p class="text-xs text-gray-600">East Sussex</p>
                    </div>
                </div>
            </a>
            
        </div>
    </section>
    
    <!-- Common Bank Holidays -->
    <section class="bg-gray-50 rounded-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Common England Bank Holidays 2026</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-champagne-glasses text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">New Year's Day</h3>
                <p class="text-sm text-gray-600">January 1, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-cross text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Good Friday</h3>
                <p class="text-sm text-gray-600">April 18, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-egg text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Easter Monday</h3>
                <p class="text-sm text-gray-600">April 21, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-dragon text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">St. George's Day</h3>
                <p class="text-sm text-gray-600">April 23, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-calendar text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Early May Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 5, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-leaf text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Spring Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 26, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-sun text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Summer Bank Holiday</h3>
                <p class="text-sm text-gray-600">August 25, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-tree text-2xl text-england-primary mb-2"></i>
                <h3 class="font-bold">Christmas Day</h3>
                <p class="text-sm text-gray-600">December 25, 2026</p>
            </div>
        </div>
    </section>
    
</div>

<!-- Holiday Planning Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            Holiday Planning Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-800 flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Plan Ahead
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book city accommodations early for events</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check each city's local event calendars</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider school holidays for family visits</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Research city-specific transport options</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-green-800 flex items-center">
                    <i class="fas fa-piggy-bank mr-2"></i>
                    Save Money
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Compare prices between cities</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Use city transport day passes</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Look for city-specific holiday deals</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book attraction bundles in advance</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-england-primary to-england-secondary text-white p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    City Events
                </h3>
                <ul class="space-y-2 text-sm">
                    <li><i class="fas fa-check mr-2"></i>London: West End shows & festivals</li>
                    <li><i class="fas fa-check mr-2"></i>Manchester: Music & football events</li>
                    <li><i class="fas fa-check mr-2"></i>Birmingham: Cultural celebrations</li>
                    <li><i class="fas fa-check mr-2"></i>Bath: Heritage & arts festivals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Banking Holiday Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-university text-blue-600 mr-3"></i>
            Banking Holiday Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>
                    Important Reminders
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-blue-500"></i>
                        <span>All city banks close on UK bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-mobile-alt mt-1 mr-3 text-blue-500"></i>
                        <span>Online banking works in all cities 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-credit-card mt-1 mr-3 text-blue-500"></i>
                        <span>Card payments accepted throughout England</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-blue-500"></i>
                        <span>Emergency banking helplines remain open</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-tasks mr-2 text-green-500"></i>
                    City Banking Tips
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-money-bill mt-1 mr-3 text-green-500"></i>
                        <span>Withdraw cash before holiday weekends</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-green-500"></i>
                        <span>Locate ATMs near city centers and attractions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-exchange-alt mt-1 mr-3 text-green-500"></i>
                        <span>Plan international transfers in advance</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-green-500"></i>
                        <span>Post offices in cities offer banking services</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Frequently Asked Questions -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8" style="background-color: #f9fafb !important; color: #374151 !important;">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800" style="color: #1f2937 !important;">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Frequently Asked Questions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which English cities have the best holiday events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">London offers world-class theatre and festivals, Manchester has vibrant music scenes, Birmingham hosts multicultural celebrations, and Bath features heritage festivals throughout the year.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I travel between English cities during holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Train services connect all major English cities efficiently. Book in advance for better prices during holiday periods. Many cities also have excellent bus connections.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Are city attractions open during bank holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Most major attractions in English cities remain open during bank holidays, though hours may vary. Museums, galleries, and tourist sites typically maintain regular schedules.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">What's the best way to find local city events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Check each city council's official website, visit local tourism information centers, follow city social media accounts, and subscribe to local event newsletters for up-to-date information.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I plan a multi-city holiday tour?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Plan your route geographically, book accommodations in advance, check local event calendars, purchase rail passes for multiple journeys, and allow time for city-specific experiences.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Which cities are best for family holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">York offers historical attractions, Cambridge has beautiful colleges, Brighton features seaside fun, and London provides world-class museums and entertainment suitable for all ages.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// City search functionality
document.getElementById('citySearch').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const cityCards = document.querySelectorAll('.city-card');
    
    cityCards.forEach(card => {
        const cityName = card.dataset.city || card.textContent.toLowerCase();
        if (cityName.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>

<?php include '../../../footer.php'; ?>
