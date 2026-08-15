<?php include '../../header.php'; ?>

    <title>Delhi Holidays 2026 | Complete Calendar | Delhi Festivals | National Holidays</title>
    <meta name="description" content="Complete Delhi Holiday Calendar 2026. Find all Delhi festivals, national holidays, cultural events, and religious celebrations. Plan your year with our comprehensive holiday guide.">
    <meta name="keywords" content="Delhi holidays 2026, Delhi festivals, Diwali, Holi, national holidays India, Delhi cultural events, Delhi calendar, holidays Delhi, festival dates 2026">
    <meta name="author" content="Delhi Holiday Calendar">
        <meta property="og:title" content="Delhi Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Delhi Holiday Calendar 2026 with all festivals, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/00008B/FFFFFF?text=Delhi+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Delhi Holidays 2026">
    <meta name="twitter:description" content="Complete Delhi Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English, Hindi">
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Delhi, India">
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Delhi Holidays 2026",
        "description": "Complete Delhi Holiday Calendar 2026 with all festivals, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main festivals in Delhi in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The main festivals in Delhi in 2026 include Holi (March 14), Eid al-Fitr (March 31), Dussehra (October 2), and Diwali (October 21)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How many national holidays are there in Delhi 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "There are three national holidays in Delhi 2026: Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Diwali and why is it important in Delhi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Diwali, the festival of lights, is one of the most significant festivals in Delhi, celebrated on October 21, 2026. It symbolizes the victory of good over evil. The city is decorated with lights, and people celebrate with fireworks, feasts, and exchanging gifts."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is Republic Day celebrated in Delhi?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Republic Day (January 26, 2026) is celebrated with great grandeur in Delhi, the nation's capital. The main event is a large parade on Rajpath, showcasing India's military strength and cultural diversity."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are there any special holidays specific to Delhi in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Delhi, being the capital, primarily follows the central government's list of holidays. It observes all major national and religious festivals celebrated across India. There are no holidays exclusively for Delhi that are not observed elsewhere."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Delhi Holiday Calendar"
        },
        "datePublished": "2026-01-01",
        "dateModified": "<?php echo date('Y-m-d'); ?>"
    }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'theme-blue': '#00008B',
                        'theme-orange': '#FFA500',
                        'theme-green': '#006400',
                        'theme-red': '#D22B2B'
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Delhi Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => ['name' => 'New Year\'s Day', 'type' => 'Observance', 'description' => 'Celebration of the new year', 'icon' => 'fa-calendar-day', 'bank_holiday' => true],
        '2026-01-26' => ['name' => 'Republic Day', 'type' => 'National Holiday', 'description' => 'Celebration of Indian Republic', 'icon' => 'fa-flag', 'bank_holiday' => true],
        '2026-02-12' => ['name' => 'Guru Ravidas Jayanti', 'type' => 'Regional Holiday', 'description' => 'Birth anniversary of Guru Ravidas', 'icon' => 'fa-peace', 'bank_holiday' => true],
        '2026-02-26' => ['name' => 'Maha Shivaratri', 'type' => 'Religious', 'description' => 'Hindu festival dedicated to Lord Shiva', 'icon' => 'fa-om', 'bank_holiday' => true],
        '2026-03-14' => ['name' => 'Holi', 'type' => 'National Holiday', 'description' => 'Festival of colors', 'icon' => 'fa-palette', 'bank_holiday' => true],
        '2026-03-31' => ['name' => 'Eid-ul-Fitr', 'type' => 'Religious', 'description' => 'Marks the end of Ramadan', 'icon' => 'fa-moon', 'bank_holiday' => true],
        '2026-04-10' => ['name' => 'Mahavir Jayanti', 'type' => 'Religious', 'description' => 'Birth anniversary of Mahavir', 'icon' => 'fa-praying-hands', 'bank_holiday' => true],
        '2026-04-14' => ['name' => 'Ambedkar Jayanti', 'type' => 'National', 'description' => 'Birth anniversary of Dr. B.R. Ambedkar', 'icon' => 'fa-book-reader', 'bank_holiday' => true],
        '2026-04-18' => ['name' => 'Good Friday', 'type' => 'Religious', 'description' => 'Christian religious holiday', 'icon' => 'fa-cross', 'bank_holiday' => true],
        '2026-05-01' => ['name' => 'Labour Day', 'type' => 'International', 'description' => 'International Workers\' Day', 'icon' => 'fa-hard-hat', 'bank_holiday' => true],
        '2026-05-12' => ['name' => 'Buddha Purnima', 'type' => 'Religious', 'description' => 'Birth anniversary of Lord Buddha', 'icon' => 'fa-dot-circle', 'bank_holiday' => true],
        '2026-06-07' => ['name' => 'Eid-ul-Adha (Bakrid)', 'type' => 'Religious', 'description' => 'Islamic festival of sacrifice', 'icon' => 'fa-kaaba', 'bank_holiday' => true],
        '2026-07-06' => ['name' => 'Muharram', 'type' => 'Religious', 'description' => 'Islamic New Year', 'icon' => 'fa-calendar-alt', 'bank_holiday' => true],
        '2026-08-15' => ['name' => 'Independence Day', 'type' => 'National Holiday', 'description' => 'Indian Independence Day', 'icon' => 'fa-dove', 'bank_holiday' => true],
        '2026-08-16' => ['name' => 'Janmashtami', 'type' => 'Religious', 'description' => 'Birth anniversary of Lord Krishna', 'icon' => 'fa-flute', 'bank_holiday' => true],
        '2026-09-05' => ['name' => 'Milad-un-Nabi/Id-e-Milad', 'type' => 'Religious', 'description' => 'Birth anniversary of Prophet Muhammad', 'icon' => 'fa-mosque', 'bank_holiday' => true],
        '2026-10-02' => ['name' => 'Gandhi Jayanti', 'type' => 'National Holiday', 'description' => 'Birth anniversary of Mahatma Gandhi', 'icon' => 'fa-peace', 'bank_holiday' => true],
        '2026-10-02' => ['name' => 'Dussehra', 'type' => 'Religious', 'description' => 'Victory of good over evil', 'icon' => 'fa-archway', 'bank_holiday' => true],
        '2026-10-21' => ['name' => 'Diwali (Deepavali)', 'type' => 'National Holiday', 'description' => 'Festival of lights', 'icon' => 'fa-lightbulb', 'bank_holiday' => true],
        '2026-11-05' => ['name' => 'Guru Nanak Jayanti', 'type' => 'Religious', 'description' => 'Birth anniversary of Guru Nanak', 'icon' => 'fa-khanda', 'bank_holiday' => true],
        '2026-12-25' => ['name' => 'Christmas', 'type' => 'Religious', 'description' => 'Celebration of Jesus Christ\'s birth', 'icon' => 'fa-star', 'bank_holiday' => true]
    ];

    // Bank Holidays 2026 - Additional holidays specific to banks (Delhi follows the main list mostly)
    $bank_holidays_2026 = [
        '2026-04-01' => [
            'name' => 'Annual Closing of Accounts',
            'type' => 'Bank Holiday',
            'description' => 'Banks closed for annual accounting',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ]
    ];

    // Merge all holidays
    $all_holidays_2026 = array_merge($holidays_2026, $bank_holidays_2026);
    ksort($all_holidays_2026); // Sort by date

    // Get current month and year
    $current_month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
    $current_year = isset($_GET['year']) ? (int)$_GET['year'] : 2026;
    
    // Month names
    $month_names = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];

    // Get first day of month and number of days
    $first_day = mktime(0, 0, 0, $current_month, 1, $current_year);
    $first_day_of_week = date('w', $first_day);
    $days_in_month = date('t', $first_day);
    
    // Navigation functions
    function get_prev_month($month, $year) {
        if ($month == 1) {
            return [12, $year - 1];
        }
        return [$month - 1, $year];
    }
    
    function get_next_month($month, $year) {
        if ($month == 12) {
            return [1, $year + 1];
        }
        return [$month + 1, $year];
    }
    
    $prev_month = get_prev_month($current_month, $current_year);
    $next_month = get_next_month($current_month, $current_year);
    ?>

    <!-- Header -->
    <header class="bg-gradient-to-r from-theme-blue to-theme-orange text-white shadow-lg relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-10 left-1/4 w-16 h-16 bg-white rounded-full"></div>
        </div>
        
        <div class="container mx-auto px-4 py-6 relative z-10">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-calendar-alt text-5xl text-white drop-shadow-lg"></i>
                        <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span>Delhi Holidays 2026</span>
                            <i class="fas fa-flag-checkered text-2xl animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-200"></i>
                            <span>दिल्ली अवकाश सूची</span>
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clock text-2xl text-yellow-200"></i>
                        <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                    </div>
                    <p class="opacity-90 flex items-center space-x-2">
                        <i class="fas fa-calendar-day text-sm"></i>
                        <span>Current Date</span>
                    </p>
                    <div class="mt-2 flex items-center space-x-2">
                        <i class="fas fa-gift text-yellow-200"></i>
                        <span class="text-sm opacity-75"><?php echo count($all_holidays_2026); ?> Total Holidays</span>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Icons Row -->
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fas fa-lightbulb text-2xl text-yellow-200"></i>
                <i class="fas fa-moon text-2xl text-blue-200"></i>
                <i class="fas fa-palette text-2xl text-pink-200"></i>
                <i class="fas fa-om text-2xl text-orange-200"></i>
                <i class="fas fa-khanda text-2xl text-gray-200"></i>
                <i class="fas fa-cross text-2xl text-purple-200"></i>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="#" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">India</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Delhi</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Holidays 2026</li>
            </ol>
        </nav>

        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-blue-600"></i>
                    <span>Complete Delhi Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Delhi Holiday Calendar 2026! As the vibrant capital of India, Delhi is a melting pot of cultures, which is reflected in its festive calendar. This guide provides all important dates for national holidays, religious festivals, and cultural events. Whether you're planning your year, organizing events, or exploring Delhi's rich heritage, our calendar has you covered.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-palette text-2xl text-pink-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Regional Festivals</h3>
                        <p class="text-sm text-gray-600">Vibrant celebrations like Holi, Diwali, Eid, and Guru Nanak Jayanti.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-flag text-2xl text-orange-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Republic Day, Independence Day, and Gandhi Jayanti celebrations in the capital.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-globe text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Cultural Events</h3>
                        <p class="text-sm text-gray-600">From grand parades to religious observances, experience Delhi's diverse culture.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search Bar -->
        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-500">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-blue-500 text-lg"></i>
                        </div>
                        <input type="text" 
                               id="searchInput" 
                               placeholder="🔍 Search holidays by name, type, or description..." 
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg"
                               onkeyup="searchHolidays()"
                               onfocus="showSearchSuggestions()"
                               onblur="hideSearchSuggestions()">
                        
                        <!-- Search Suggestions -->
                        <div id="searchSuggestions" class="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-lg hidden">
                            <div class="p-3 text-xs text-gray-500 border-b bg-gray-50 flex items-center space-x-2">
                                <i class="fas fa-lightbulb text-yellow-500"></i>
                                <span>Quick Search Suggestions:</span>
                            </div>
                            <div class="p-2">
                                <button onclick="quickSearch('Diwali')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-lightbulb text-orange-500"></i>
                                    <span>Diwali</span>
                                </button>
                                <button onclick="quickSearch('Holi')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-palette text-pink-500"></i>
                                    <span>Holi</span>
                                </button>
                                <button onclick="quickSearch('Eid')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-moon text-green-500"></i>
                                    <span>Eid</span>
                                </button>
                                <button onclick="quickSearch('National Holiday')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span>National Holidays</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <i class="fas fa-filter text-blue-500 absolute left-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                        <select id="filterType" 
                                class="pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white"
                                onchange="filterHolidays()">
                            <option value="">🎯 All Types</option>
                            <option value="National Holiday">🏛️ National Holiday</option>
                            <option value="Religious">⛪ Religious</option>
                            <option value="Regional Holiday">🏞️ Regional Holiday</option>
                            <option value="Observance">👀 Observance</option>
                            <option value="International">🌍 International</option>
                        </select>
                    </div>
                    <button onclick="clearSearch()" 
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors flex items-center space-x-2 shadow-md">
                        <i class="fas fa-times-circle"></i>
                        <span>Clear</span>
                    </button>
                </div>
            </div>
            
            <!-- Search Tips -->
            <div class="mt-4 text-center bg-gradient-to-r from-blue-50 to-indigo-50 p-3 rounded-lg border border-blue-200">
                <p class="text-sm text-gray-700 flex items-center justify-center space-x-2">
                    <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                    <span>💡 Search tips: Try searching for "Diwali", "Holi", "National", or specific holiday names</span>
                    <i class="fas fa-magic text-purple-500 text-lg"></i>
                </p>
            </div>
        </div>

        <!-- Search Results -->
        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-search text-blue-500 mr-3"></i>
                Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-3">
                <!-- Search results will be populated here -->
            </div>
        </div>

        <!-- Calendar Navigation -->
        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" 
               class="flex items-center space-x-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                <i class="fas fa-chevron-left text-lg"></i>
                <div class="text-left">
                    <div class="text-sm opacity-90">Previous</div>
                    <div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div>
                </div>
            </a>
            
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-2">
                    <i class="fas fa-calendar-alt text-4xl text-green-600"></i>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
                        <p class="text-gray-600 flex items-center justify-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                            <span>माह: <?php echo $month_names[$current_month]; ?></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-sun text-yellow-500"></i>
                        <span>Festive Days</span>
                    </span>
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-star text-blue-500"></i>
                        <span>Special Events</span>
                    </span>
                </div>
            </div>
            
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" 
               class="flex items-center space-x-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                <div class="text-right">
                    <div class="text-sm opacity-90">Next</div>
                    <div class="font-semibold"><?php echo $month_names[$next_month[0]] . ' ' . $next_month[1]; ?></div>
                </div>
                <i class="fas fa-chevron-right text-lg"></i>
            </a>
        </div>

        <!-- Calendar Grid -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Calendar Header -->
            <div class="grid grid-cols-7 bg-gradient-to-r from-gray-100 to-gray-200 border-b">
                <?php
                $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                $hindi_weekdays = ['रवि', 'सोम', 'मंगल', 'बुध', 'गुरु', 'शुक्र', 'शनि'];
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-star-of-david'];
                
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
                    echo '<div class="text-xs text-gray-500">' . $hindi_weekdays[$i] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Calendar Days -->
            <div class="grid grid-cols-7">
                <?php
                // Empty cells for days before first day of month
                for ($i = 0; $i < $first_day_of_week; $i++) {
                    echo '<div class="p-4 border-r border-b bg-gray-50"></div>';
                }

                // Days of the month
                for ($day = 1; $day <= $days_in_month; $day++) {
                    $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                    $is_holiday = isset($all_holidays_2026[$date]);
                    $is_bank_holiday = isset($all_holidays_2026[$date]) && $all_holidays_2026[$date]['bank_holiday'] === true;
                    $is_today = ($day == date('j') && $current_month == date('n') && $current_year == date('Y'));
                    
                    $cell_classes = 'p-4 border-r border-b min-h-[100px] relative';
                    $cell_classes .= $is_today ? ' bg-yellow-100' : '';
                    if ($is_bank_holiday) {
                        $cell_classes .= ' bg-blue-50';
                    } elseif ($is_holiday) {
                        $cell_classes .= ' bg-red-50';
                    }
                    
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    
                    if ($is_holiday) {
                        $holiday = $all_holidays_2026[$date];
                        $border_color = $is_bank_holiday ? 'border-blue-500' : 'border-red-500';
                        $bg_color = $is_bank_holiday ? 'bg-blue-100' : 'bg-red-100';
                        $text_color = $is_bank_holiday ? 'text-blue-800' : 'text-red-800';
                        $desc_color = $is_bank_holiday ? 'text-blue-700' : 'text-red-700';
                        
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_bank_holiday ? 'text-blue-600' : 'text-red-600') . '"></i>';
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        if ($is_bank_holiday) {
                            echo '<i class="fas fa-university text-xs text-blue-500 ml-1"></i>';
                        }
                        echo '</div>';
                        echo '<div class="text-xs ' . $desc_color . ' flex items-center space-x-1">';
                        echo '<i class="fas fa-tag ' . ($is_bank_holiday ? 'text-blue-500' : 'text-red-500') . '"></i>';
                        echo '<span>' . $holiday['type'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                    }
                    
                    if ($is_today) {
                        echo '<div class="absolute top-2 right-2">';
                        echo '<span class="bg-gradient-to-r from-blue-500 to-blue-600 text-white text-xs px-3 py-1 rounded-full flex items-center space-x-1 shadow-lg">';
                        echo '<i class="fas fa-calendar-day text-xs"></i>';
                        echo '<span>Today</span>';
                        echo '</span>';
                        echo '</div>';
                    }
                    
                    echo '</div>';
                }

                // Empty cells for remaining days
                $total_cells = $first_day_of_week + $days_in_month;
                $remaining_cells = 7 - ($total_cells % 7);
                if ($remaining_cells < 7) {
                    for ($i = 0; $i < $remaining_cells; $i++) {
                        echo '<div class="p-4 border-r border-b bg-gray-50"></div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Holiday List -->
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <!-- Upcoming Holidays -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-clock text-blue-500 mr-3 text-2xl"></i>
                    <span>Upcoming Holidays</span>
                    <i class="fas fa-arrow-right text-blue-400 ml-2 animate-pulse"></i>
                </h3>
                <div class="space-y-3">
                    <?php
                    $today = date('Y-m-d');
                    $upcoming_count = 0;
                    
                    foreach ($all_holidays_2026 as $date => $holiday) {
                        if ($date >= $today && $upcoming_count < 5) {
                            $days_until = (strtotime($date) - strtotime($today)) / (60 * 60 * 24);
                            echo '<div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-200 hover:shadow-md transition-all transform hover:scale-105">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<div class="relative">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-blue-600 text-xl"></i>';
                            echo '<i class="fas fa-circle text-blue-400 text-xs absolute -top-1 -right-1 animate-pulse"></i>';
                            echo '</div>';
                            echo '<div>';
                            echo '<div class="font-semibold text-gray-800 text-lg">' . $holiday['name'] . '</div>';
                            echo '<div class="text-sm text-gray-600 flex items-center space-x-2">';
                            echo '<i class="fas fa-calendar-alt text-blue-500"></i>';
                            echo '<span>' . date('M d, Y', strtotime($date)) . '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="text-right">';
                            echo '<div class="text-sm font-medium text-blue-600 flex items-center space-x-1">';
                            echo '<i class="fas fa-hourglass-half text-blue-500"></i>';
                            echo '<span>' . round($days_until) . ' days</span>';
                            echo '</div>';
                            echo '<div class="text-xs text-blue-500 mt-1">⏰ Countdown</div>';
                            echo '</div>';
                            echo '</div>';
                            $upcoming_count++;
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Holiday Statistics -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-green-500 mr-3 text-2xl"></i>
                    <span>Holiday Statistics</span>
                    <i class="fas fa-chart-line text-green-400 ml-2"></i>
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-lg border border-green-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-gift text-green-600 text-xl"></i>
                            <div class="text-3xl font-bold text-green-600"><?php echo count($all_holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-green-700 font-medium">Total Holidays</div>
                        <div class="text-xs text-green-600 mt-1">🎉 Celebrations</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-university text-blue-600 text-xl"></i>
                            <div class="text-3xl font-bold text-blue-600"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?></div>
                        </div>
                        <div class="text-sm text-blue-700 font-medium">Bank Holidays</div>
                        <div class="text-xs text-blue-600 mt-1">🏦 Financial</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg border border-yellow-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-flag text-yellow-600 text-xl"></i>
                            <div class="text-3xl font-bold text-yellow-600"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['type'] === 'National Holiday'; })); ?></div>
                        </div>
                        <div class="text-sm text-yellow-700 font-medium">National Holidays</div>
                        <div class="text-xs text-yellow-600 mt-1">🇮🇳 Patriotic</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg border border-purple-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-pray text-purple-600 text-xl"></i>
                            <div class="text-3xl font-bold text-purple-600"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['type'] === 'Religious'; })); ?></div>
                        </div>
                        <div class="text-sm text-purple-700 font-medium">Religious</div>
                        <div class="text-xs text-purple-600 mt-1">⛪ Spiritual</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-tools text-purple-500 mr-3 text-2xl"></i>
                <span>Quick Actions</span>
                <i class="fas fa-magic text-purple-400 ml-2"></i>
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button onclick="printCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-100 to-blue-200 hover:from-blue-200 hover:to-blue-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-blue-300">
                    <i class="fas fa-print text-3xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-blue-800">Print</span>
                    <div class="text-xs text-blue-600 mt-1">🖨️ Calendar</div>
                </button>
                <button onclick="downloadCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-green-100 to-green-200 hover:from-green-200 hover:to-green-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-green-300">
                    <i class="fas fa-download text-3xl text-green-600 mb-3"></i>
                    <span class="text-sm font-medium text-green-800">Download</span>
                    <div class="text-xs text-green-600 mt-1">💾 Save</div>
                </button>
                <button onclick="shareCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-purple-100 to-purple-200 hover:from-purple-200 hover:to-purple-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-purple-300">
                    <i class="fas fa-share-alt text-3xl text-purple-600 mb-3"></i>
                    <span class="text-sm font-medium text-purple-800">Share</span>
                    <div class="text-xs text-purple-600 mt-1">📤 Social</div>
                </button>
                <button onclick="resetToCurrent()" class="flex flex-col items-center p-6 bg-gradient-to-br from-orange-100 to-orange-200 hover:from-orange-200 hover:to-orange-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-orange-300">
                    <i class="fas fa-home text-3xl text-orange-600 mb-3"></i>
                    <span class="text-sm font-medium text-orange-800">Today</span>
                    <div class="text-xs text-orange-600 mt-1">🏠 Current</div>
                </button>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-purple-500">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                    <i class="fas fa-question-circle text-purple-600"></i>
                    <span>Frequently Asked Questions</span>
                    <i class="fas fa-lightbulb text-yellow-500"></i>
                </h2>
                
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-lightbulb text-yellow-500"></i>
                            <span>What are the main festivals in Delhi in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main festivals celebrated with great enthusiasm in Delhi in 2026 include <strong>Holi</strong> (March 14), the festival of colors; <strong>Eid-ul-Fitr</strong> (March 31), marking the end of Ramadan; <strong>Dussehra</strong> (October 2), celebrating the victory of good over evil; and <strong>Diwali</strong> (October 21), the grand festival of lights.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-red-500"></i>
                            <span>How is Republic Day celebrated in Delhi?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                           As the capital of India, Delhi hosts the main Republic Day celebrations on January 26. The highlight is a grand parade that takes place on Kartavya Path (formerly Rajpath), showcasing India's military prowess and rich cultural diversity. It is a national holiday, and government offices and banks remain closed.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-palette text-pink-500"></i>
                            <span>What is Diwali and why is it important in Delhi?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Diwali</strong>, celebrated on October 21, 2026, is a vibrant five-day festival of lights. It is one of the most significant festivals in Delhi, symbolizing the victory of light over darkness and good over evil. The city is illuminated with diyas and lights, and people celebrate with fireworks, feasts, and exchanging gifts.
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                         <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-university text-blue-500"></i>
                            <span>Are banks closed on all public holidays in Delhi?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                           Yes, banks in Delhi remain closed on all National Holidays and major regional holidays listed in the calendar. This also includes the second and fourth Saturdays of every month. It is advisable to check the official bank holiday list to plan your financial transactions accordingly as some regional holidays might not be bank holidays.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <script>
        // JavaScript functionality
        
        // Holiday data for search functionality
        const holidaysData = <?php echo json_encode(array_values($all_holidays_2026)); ?>;
        
        function searchHolidays() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const filterType = document.getElementById('filterType').value;
            const searchResults = document.getElementById('searchResults');
            const searchResultsContent = document.getElementById('searchResultsContent');
            
            if (searchTerm === '' && filterType === '') {
                searchResults.classList.add('hidden');
                return;
            }
            
            const results = [];
            const allHolidays = <?php echo json_encode($all_holidays_2026); ?>;
            
            Object.entries(allHolidays).forEach(([date, holiday]) => {
                const matchesSearch = searchTerm === '' || 
                    holiday.name.toLowerCase().includes(searchTerm) ||
                    holiday.type.toLowerCase().includes(searchTerm) ||
                    holiday.description.toLowerCase().includes(searchTerm);
                
                const matchesFilter = filterType === '' || holiday.type === filterType;
                
                if (matchesSearch && matchesFilter) {
                    results.push({ date, ...holiday });
                }
            });
            
            displaySearchResults(results);
        }
        
        function filterHolidays() {
            searchHolidays(); // Re-run search with current filter
        }
        
        function displaySearchResults(results) {
            const searchResults = document.getElementById('searchResults');
            const searchResultsContent = document.getElementById('searchResultsContent');
            
            if (results.length === 0) {
                searchResultsContent.innerHTML = `
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-search text-4xl mb-4"></i>
                        <p class="text-lg">No holidays found matching your search criteria.</p>
                        <p class="text-sm">Try adjusting your search terms or filters.</p>
                    </div>
                `;
            } else {
                let html = '';
                results.forEach(({ date, name, type, description, icon }) => {
                    // JavaScript dates are 0-indexed for months, so we need to adjust
                    const dateParts = date.split('-');
                    const formattedDate = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]).toLocaleDateString('en-US', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });
                    
                    html += `
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border-l-4 border-blue-500 hover:bg-blue-100 transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas ${icon} text-blue-600 text-xl"></i>
                                <div>
                                    <div class="font-semibold text-gray-800 text-lg">${name}</div>
                                    <div class="text-sm text-gray-600">${type}</div>
                                    <div class="text-xs text-gray-500">${description}</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium text-blue-600">${formattedDate}</div>
                                <button onclick="goToMonth('${date}')" 
                                        class="mt-2 px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white text-xs rounded transition-colors">
                                    <i class="fas fa-calendar-alt mr-1"></i>View
                                </button>
                            </div>
                        </div>
                    `;
                });
                
                searchResultsContent.innerHTML = html;
            }
            
            searchResults.classList.remove('hidden');
        }
        
        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('filterType').value = '';
            document.getElementById('searchResults').classList.add('hidden');
        }
        
        function goToMonth(dateString) {
            const dateParts = dateString.split('-');
            const month = parseInt(dateParts[1], 10);
            const year = parseInt(dateParts[0], 10);
            window.location.href = `?month=${month}&year=${year}`;
        }
        
        function showSearchSuggestions() {
            const suggestions = document.getElementById('searchSuggestions');
            suggestions.classList.remove('hidden');
        }
        
        function hideSearchSuggestions() {
            // Delay hiding to allow button clicks
            setTimeout(() => {
                const suggestions = document.getElementById('searchSuggestions');
                suggestions.classList.add('hidden');
            }, 200);
        }
        
        function quickSearch(term) {
            document.getElementById('searchInput').value = term;
            searchHolidays();
            hideSearchSuggestions();
        }
        
        function printCalendar() {
            window.print();
        }

        function downloadCalendar() {
            let content = "Delhi Holidays 2026\n\n";
            const allHolidays = <?php echo json_encode($all_holidays_2026); ?>;
            Object.entries(allHolidays).forEach(([date, holiday]) => {
                content += `${date}: ${holiday.name} (${holiday.type})\n`;
            });
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'delhi-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Delhi Holidays 2026',
                    text: 'Check out the Delhi holiday calendar for 2026!',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Calendar URL copied to clipboard!');
                });
            }
        }

        function resetToCurrent() {
            window.location.href = window.location.pathname;
        }

        // Add smooth scrolling and animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation to calendar cells
            const cells = document.querySelectorAll('.grid > div');
            cells.forEach((cell, index) => {
                cell.style.opacity = '0';
                cell.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    cell.style.transition = 'all 0.5s ease';
                    cell.style.opacity = '1';
                    cell.style.transform = 'translateY(0)';
                }, index * 20);
            });
        });

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (document.activeElement.tagName === 'INPUT') return; // Don't navigate when typing in search
            const currentUrl = new URL(window.location);
            const currentMonth = parseInt(currentUrl.searchParams.get('month')) || new Date().getMonth() + 1;
            const currentYear = parseInt(currentUrl.searchParams.get('year')) || new Date().getFullYear();

            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                const prevMonth = currentMonth === 1 ? 12 : currentMonth - 1;
                const prevYear = currentMonth === 1 ? currentYear - 1 : currentYear;
                window.location.href = `?month=${prevMonth}&year=${prevYear}`;
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                const nextMonth = currentMonth === 12 ? 1 : currentMonth + 1;
                const nextYear = currentMonth === 12 ? currentYear + 1 : currentYear;
                window.location.href = `?month=${nextMonth}&year=${nextYear}`;
            } else if (e.key === 'Home') {
                e.preventDefault();
                window.location.href = window.location.pathname;
            }
        });
    </script>
    
<?php include '../../footer.php'; ?>
</body>
</html>