<?php
$pageTitle = 'UK Holidays 2026 | Complete Calendar | All Regions | Bank Holidays';
$pageDescription = 'Complete UK Holiday Calendar 2026 for all regions. Find bank holidays, cultural events, and observances for England, Scotland, Wales, Northern Ireland, and Crown Dependencies.';
$pageKeywords = 'UK holidays 2026, British holidays, bank holidays UK, England holidays, Scotland holidays, Wales holidays, Northern Ireland holidays';
include '../../header.php';
?>

<style>
:root {
    --uk-primary: #C8102E;
    --uk-secondary: #012169;
}
.bg-uk-primary { background-color: var(--uk-primary); }
.text-uk-primary { color: var(--uk-primary); }
.bg-uk-secondary { background-color: var(--uk-secondary); }
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../" class="text-blue-600 hover:text-blue-800">
                Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">UK Holidays 2026</span>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-gradient-to-r from-uk-primary to-uk-secondary text-white shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-12 relative z-10">
        <div class="text-center">
            <div class="flex justify-center items-center space-x-4 mb-4">
                <div class="w-16 h-10 bg-blue-700 rounded shadow-lg flex items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-blue-800"></div>
            <span class="relative text-white font-bold text-xs">UK</span>
        </div>
                <i class="fas fa-calendar-alt text-6xl text-white drop-shadow-lg"></i>
            </div>
            <h1 class="text-5xl font-bold mb-4">UK Holidays 2026</h1>
            <p class="text-xl opacity-90 mb-6">Complete Holiday Calendar for All UK Regions</p>
            <div class="flex justify-center space-x-8 text-sm">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-check text-yellow-300"></i>
                    <span>Bank Holidays</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-star text-yellow-300"></i>
                    <span>Cultural Events</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map text-yellow-300"></i>
                    <span>7 Regions</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
</header>

<!-- Main Content -->
<div class="container mx-auto px-4 py-12">
    
    <!-- Regions Grid -->
    <section class="mb-12">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Select Your Region</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- England -->
            <a href="england-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-red-700 p-6 text-white text-center">
                    <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
            <div class="absolute inset-0 bg-white"></div>
            <div class="absolute h-full w-1 bg-red-600 left-1/2 transform -translate-x-1/2"></div>
            <div class="absolute w-full h-1 bg-red-600 top-1/2 transform -translate-y-1/2"></div>
        </div>
                    <h3 class="text-xl font-bold">England</h3>
                    <p class="text-sm opacity-80">St. George's Day • Bank Holidays</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm">View English holidays, bank holidays, and cultural celebrations including St. George's Day.</p>
                    <div class="mt-3 flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Holidays</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Scotland -->
            <a href="scotland-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-blue-600 to-blue-700 p-6 text-white text-center">
                    <div class="w-16 h-10 bg-blue-600 rounded shadow-lg flex items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-blue-600"></div>
            <div class="absolute w-full h-px bg-white top-1/2 transform -translate-y-1/2 rotate-45"></div>
            <div class="absolute w-full h-px bg-white top-1/2 transform -translate-y-1/2 -rotate-45"></div>
            <span class="relative text-white font-bold text-xs">SC</span>
        </div>
                    <h3 class="text-xl font-bold">Scotland</h3>
                    <p class="text-sm opacity-80">Burns Night • St. Andrew's Day</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm">Discover Scottish holidays including Burns Night, St. Andrew's Day, and New Year celebrations.</p>
                    <div class="mt-3 flex items-center text-blue-600 group-hover:text-blue-700">
                        <span class="font-medium">View Holidays</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Wales -->
            <a href="wales-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-green-600 to-green-700 p-6 text-white text-center">
                    <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-white to-green-600"></div>
            <span class="relative text-red-600 font-bold text-xs">WA</span>
        </div>
                    <h3 class="text-xl font-bold">Wales</h3>
                    <p class="text-sm opacity-80">St. David's Day • Welsh Culture</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm">Explore Welsh holidays and celebrations including St. David's Day and cultural festivals.</p>
                    <div class="mt-3 flex items-center text-green-600 group-hover:text-green-700">
                        <span class="font-medium">View Holidays</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Northern Ireland -->
            <a href="northern-ireland-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                <div class="bg-gradient-to-br from-red-600 to-red-700 p-6 text-white text-center">
                    <div class="w-16 h-10 bg-white rounded shadow-lg flex items-center justify-center relative overflow-hidden border">
            <div class="absolute inset-0 bg-white"></div>
            <div class="absolute h-full w-1 bg-red-600 left-1/2 transform -translate-x-1/2"></div>
            <div class="absolute w-full h-1 bg-red-600 top-1/2 transform -translate-y-1/2"></div>
            <span class="relative text-blue-600 font-bold text-xs">NI</span>
        </div>
                    <h3 class="text-xl font-bold">Northern Ireland</h3>
                    <p class="text-sm opacity-80">St. Patrick's Day • Orangemen's Day</p>
                </div>
                <div class="p-4">
                    <p class="text-gray-600 text-sm">Find Northern Ireland holidays including St. Patrick's Day and regional celebrations.</p>
                    <div class="mt-3 flex items-center text-red-600 group-hover:text-red-700">
                        <span class="font-medium">View Holidays</span>
                        <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- Crown Dependencies -->
            <div class="md:col-span-2 lg:col-span-3 xl:col-span-4">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Crown Dependencies</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    
                    <!-- Isle of Man -->
                    <a href="isle-of-man-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-red-600 to-red-700 p-4 text-white text-center">
                            <div class="w-12 h-8 bg-red-600 rounded shadow-lg flex items-center justify-center">
            <span class="text-white font-bold text-xs">IM</span>
        </div>
                            <h4 class="text-lg font-bold">Isle of Man</h4>
                            <p class="text-xs opacity-80">Tynwald Day</p>
                        </div>
                        <div class="p-3">
                            <p class="text-gray-600 text-xs">Unique Manx holidays and celebrations including Tynwald Day.</p>
                        </div>
                    </a>
                    
                    <!-- Jersey -->
                    <a href="jersey-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-red-600 to-red-700 p-4 text-white text-center">
                            <div class="w-12 h-8 bg-white rounded shadow-lg flex items-center justify-center border">
            <span class="text-red-600 font-bold text-xs">JE</span>
        </div>
                            <h4 class="text-lg font-bold">Jersey</h4>
                            <p class="text-xs opacity-80">Liberation Day</p>
                        </div>
                        <div class="p-3">
                            <p class="text-gray-600 text-xs">Jersey holidays including Liberation Day celebrations.</p>
                        </div>
                    </a>
                    
                    <!-- Guernsey -->
                    <a href="guernsey-holidays.php" class="group block bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-all transform hover:-translate-y-1">
                        <div class="bg-gradient-to-br from-red-600 to-red-700 p-4 text-white text-center">
                            <div class="w-12 h-8 bg-white rounded shadow-lg flex items-center justify-center border">
            <span class="text-red-600 font-bold text-xs">GU</span>
        </div>
                            <h4 class="text-lg font-bold">Guernsey</h4>
                            <p class="text-xs opacity-80">Liberation Day</p>
                        </div>
                        <div class="p-3">
                            <p class="text-gray-600 text-xs">Guernsey holidays and unique Channel Islands celebrations.</p>
                        </div>
                    </a>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    <!-- Bank Holidays 2026 Section -->
    <section class="bg-gray-50 rounded-lg p-8 mb-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Bank Holidays 2026</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-champagne-glasses text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">New Year's Day</h3>
                <p class="text-sm text-gray-600">January 1, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-cross text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Good Friday</h3>
                <p class="text-sm text-gray-600">April 18, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-egg text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Easter Monday</h3>
                <p class="text-sm text-gray-600">April 21, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-calendar text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Early May Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 5, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-leaf text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Spring Bank Holiday</h3>
                <p class="text-sm text-gray-600">May 26, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-sun text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Summer Bank Holiday</h3>
                <p class="text-sm text-gray-600">August 25, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-tree text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Christmas Day</h3>
                <p class="text-sm text-gray-600">December 25, 2026</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <i class="fas fa-gift text-2xl text-uk-primary mb-2"></i>
                <h3 class="font-bold">Boxing Day</h3>
                <p class="text-sm text-gray-600">December 26, 2026</p>
            </div>
        </div>
    </section>

    <!-- Holiday Planning Tips Section -->
    <section class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
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
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book accommodations early for bank holiday weekends</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check regional variations in Scotland and Northern Ireland</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider school holidays when planning family trips</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Monitor public transport schedules during holidays</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-green-800 flex items-center">
                    <i class="fas fa-piggy-bank mr-2"></i>
                    Save Money
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book travel and hotels well in advance</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Look for off-peak travel deals between holidays</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider staycations during popular holiday periods</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Use price comparison websites for best deals</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-purple-800 flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    Local Events
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check local council websites for events</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Follow city tourism boards on social media</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Subscribe to local event newsletters</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Explore cultural festivals in your region</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Banking Holiday Tips Section -->
    <section class="bg-gradient-to-r from-uk-primary to-uk-secondary text-white rounded-lg shadow-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-center mb-8">
            <i class="fas fa-university mr-3"></i>
            Banking Holiday Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-2 text-yellow-300"></i>
                    Important Reminders
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-yellow-300"></i>
                        <span>Banks are closed on all UK bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-mobile-alt mt-1 mr-3 text-yellow-300"></i>
                        <span>Online banking and ATMs remain available 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-credit-card mt-1 mr-3 text-yellow-300"></i>
                        <span>Card payments work normally during bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-yellow-300"></i>
                        <span>Emergency banking helplines remain open</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-tasks mr-2 text-yellow-300"></i>
                    Plan Your Banking
                </h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-money-bill mt-1 mr-3 text-yellow-300"></i>
                        <span>Withdraw cash before the holiday weekend</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-calendar-alt mt-1 mr-3 text-yellow-300"></i>
                        <span>Schedule payments to avoid delays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-exchange-alt mt-1 mr-3 text-yellow-300"></i>
                        <span>International transfers may be delayed</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-yellow-300"></i>
                        <span>Check post office opening hours for banking services</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="bg-gray-50 rounded-lg p-8 mb-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Frequently Asked Questions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What are UK Bank Holidays?</h3>
                    <p class="text-gray-600">Bank holidays are public holidays in the UK when banks and most businesses are closed. There are 8 bank holidays in England and Wales, 9 in Scotland, and 10 in Northern Ireland.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do bank holidays vary by region?</h3>
                    <p class="text-gray-600">Yes! Scotland has St. Andrew's Day and may substitute New Year's Day. Northern Ireland has St. Patrick's Day and Battle of the Boyne. Wales follows England's calendar.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Are shops open on bank holidays?</h3>
                    <p class="text-gray-600">Many shops remain open on bank holidays, especially supermarkets and retail stores. However, opening hours may be reduced. Check with individual stores.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What about public transport on holidays?</h3>
                    <p class="text-gray-600">Public transport typically runs on Sunday schedules during bank holidays. Some services may be reduced or cancelled entirely. Always check timetables in advance.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do I get extra pay for working bank holidays?</h3>
                    <p class="text-gray-600">This depends on your employment contract. Many employers offer time-and-a-half or double time for bank holiday work, but it's not legally required.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">When are the next bank holidays?</h3>
                    <p class="text-gray-600">The next upcoming bank holidays are listed above. Easter dates change each year, but most other bank holidays have fixed dates.</p>
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php include '../../footer.php'; ?>
