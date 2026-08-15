<?php include '../../header.php'; ?>
    <title>Gujarat Holidays 2026 | Complete Calendar | Gujarat Festivals | National Holidays</title>
    <meta name="description" content="Complete Gujarat Holiday Calendar 2026. Find all Gujarat festivals, national holidays, cultural events, and religious celebrations. Plan your year with our comprehensive holiday guide.">
    <meta name="keywords" content="Gujarat holidays 2026, Gujarat festivals, Navratri, Uttarayan, national holidays India, Gujarat cultural events, Gujarat calendar, holidays Gujarat, festival dates 2026">
    <meta name="author" content="Gujarat Holiday Calendar">
        <meta property="og:title" content="Gujarat Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Gujarat Holiday Calendar 2026 with all festivals, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/FFA500/FFFFFF?text=Gujarat+Holidays+2026"> <!-- Orange placeholder -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Gujarat Holidays 2026">
    <meta name="twitter:description" content="Complete Gujarat Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English, Gujarati">
    <meta name="geo.region" content="IN-GJ">
    <meta name="geo.placename" content="Gujarat, India">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Gujarat Holidays 2026",
        "description": "Complete Gujarat Holiday Calendar 2026 with all festivals, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main Gujarat festivals in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The main Gujarat festivals in 2026 include Navratri (September 29 - October 8), Uttarayan (January 14), and Rann Utsav (November - February)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How many national holidays are there in Gujarat 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "There are several national holidays in Gujarat 2026 including Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Navratri and why is it important?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Navratri is one of the most significant festivals in Gujarat, celebrated twice a year (Chaitra and Ashwin months). The Ashwin Navratri (September/October 2026) is the more prominent one, known for its vibrant Garba and Dandiya Raas dances."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is Independence Day celebrated in Gujarat?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Independence Day (August 15, 2026) is celebrated with great patriotic fervor across Gujarat. The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied by cultural programs."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are there any special holidays specific to Gujarat in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Gujarat has several state-specific holidays and festivals. Navratri, Uttarayan, and Rann Utsav are unique to Gujarat and are widely celebrated, with Navratri and Uttarayan being major state holidays."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Gujarat Holiday Calendar"
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
                        'gj-orange': '#FFA500', // Orange
                        'gj-green': '#008000',  // Green
                        'gj-blue': '#0000FF',   // Blue
                        'gj-white': '#FFFFFF'   // White
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-green-100 min-h-screen"> <!-- Changed background -->
    <?php
    // Gujarat Holidays 2026 Data
    // Note: Some dates are approximate based on traditional timings.
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of the new year',
            'icon' => 'fa-calendar-day',
            'bank_holiday' => true
        ],
        '2026-01-14' => [
            'name' => 'Uttarayan / Makar Sankranti',
            'type' => 'Gujarat Festival',
            'description' => 'Kite flying festival marking the sun\'s northward journey',
            'icon' => 'fa-wind', // Changed icon
            'bank_holiday' => true
        ],
        '2026-01-26' => [
            'name' => 'Republic Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of Indian Republic',
            'icon' => 'fa-flag',
            'bank_holiday' => true
        ],
        '2026-02-14' => [
            'name' => 'Valentine\'s Day',
            'type' => 'International',
            'description' => 'Day of love and affection',
            'icon' => 'fa-heart',
            'bank_holiday' => false
        ],
        '2026-02-24' => [ // Maha Shivratri - Approximate date
            'name' => 'Maha Shivratri',
            'type' => 'Religious',
            'description' => 'Night of Lord Shiva',
            'icon' => 'fa-moon', // Changed icon
            'bank_holiday' => true
        ],
        '2026-03-08' => [
            'name' => 'International Women\'s Day',
            'type' => 'International',
            'description' => 'Celebration of women\'s achievements',
            'icon' => 'fa-venus',
            'bank_holiday' => false
        ],
        '2026-03-29' => [ // Holi - Approximate date
            'name' => 'Holi',
            'type' => 'Religious',
            'description' => 'Festival of colors',
            'icon' => 'fa-spray-can-sparkles',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Ambedkar Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Dr. B.R. Ambedkar',
            'icon' => 'fa-graduation-cap',
            'bank_holiday' => true
        ],
        '2026-05-01' => [
            'name' => 'Labour Day / May Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'bank_holiday' => true
        ],
        '2026-06-16' => [ // Eid al-Fitr - Approximate date
            'name' => 'Eid al-Fitr',
            'type' => 'Religious',
            'description' => 'End of Ramadan',
            'icon' => 'fa-moon',
            'bank_holiday' => true
        ],
        '2026-07-17' => [ // Bakrid/Eid al-Adha - Approximate date
            'name' => 'Bakrid/Eid al-Adha',
            'type' => 'Religious',
            'description' => 'Festival of Sacrifice',
            'icon' => 'fa-mosque', // Changed icon
            'bank_holiday' => true
        ],
        '2026-08-15' => [
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Indian Independence Day',
            'icon' => 'fa-dove',
            'bank_holiday' => true
        ],
        '2026-08-26' => [ // Janmashtami - Approximate date
            'name' => 'Janmashtami',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Lord Krishna',
            'icon' => 'fa-baby',
            'bank_holiday' => true
        ],
        '2026-09-07' => [ // Ganesh Chaturthi - Approximate date
            'name' => 'Ganesh Chaturthi',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Lord Ganesha',
            'icon' => 'fa-gem',
            'bank_holiday' => true
        ],
        '2026-09-23' => [ // Maha Navami - Approximate date
            'name' => 'Maha Navami',
            'type' => 'Religious',
            'description' => 'Ninth day of Navratri',
            'icon' => 'fa-star', // Changed icon
            'bank_holiday' => true
        ],
        '2026-09-24' => [ // Vijaya Dashami/Dussehra - Approximate date
            'name' => 'Vijaya Dashami/Dussehra',
            'type' => 'Religious',
            'description' => 'Tenth day of Navratri, victory of good over evil',
            'icon' => 'fa-hand-fist', // Changed icon
            'bank_holiday' => true
        ],
        '2026-10-02' => [
            'name' => 'Gandhi Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-peace',
            'bank_holiday' => true
        ],
        '2026-10-28' => [ // Diwali - Approximate date
            'name' => 'Diwali',
            'type' => 'Religious',
            'description' => 'Festival of lights',
            'icon' => 'fa-lightbulb',
            'bank_holiday' => true
        ],
        '2026-11-14' => [
            'name' => 'Children\'s Day',
            'type' => 'National',
            'description' => 'Birth anniversary of Jawaharlal Nehru',
            'icon' => 'fa-child',
            'bank_holiday' => false
        ],
        '2026-12-25' => [
            'name' => 'Christmas',
            'type' => 'Religious',
            'description' => 'Celebration of Jesus Christ\'s birth',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ]
    ];

    // Bank Holidays 2026 - Additional holidays specific to banks or common closures
    $bank_holidays_2026 = [
        '2026-01-13' => [ // Uttarayan Eve - Approximate date
            'name' => 'Uttarayan Eve',
            'type' => 'Bank Holiday',
            'description' => 'Day before Uttarayan - Banks may close early',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-01-15' => [ // Uttarayan Holiday - Approximate date
            'name' => 'Uttarayan Holiday',
            'type' => 'Bank Holiday',
            'description' => 'Extended Uttarayan holiday - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-04-05' => [ // Good Friday - Approximate date
            'name' => 'Good Friday',
            'type' => 'Bank Holiday',
            'description' => 'Christian religious holiday - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-04-07' => [ // Easter Monday - Approximate date
            'name' => 'Easter Monday',
            'type' => 'Bank Holiday',
            'description' => 'Christian religious holiday - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-07-17' => [ // Muharram - Approximate date (Same as Bakrid here, but might be different)
            'name' => 'Muharram',
            'type' => 'Bank Holiday',
            'description' => 'Islamic New Year - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-29' => [ // Diwali Holiday - Approximate date
            'name' => 'Diwali Holiday',
            'type' => 'Bank Holiday',
            'description' => 'Day after Diwali - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-11-15' => [ // Guru Nanak Jayanti - Approximate date
            'name' => 'Guru Nanak Jayanti',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Guru Nanak Dev Ji',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-12-24' => [
            'name' => 'Christmas Eve',
            'type' => 'Bank Holiday',
            'description' => 'Day before Christmas - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ]
    ];

    // Merge all holidays
    $all_holidays_2026 = array_merge($holidays_2026, $bank_holidays_2026);

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
    <header class="bg-gradient-to-r from-gj-orange to-gj-green text-white shadow-lg relative overflow-hidden"> <!-- Changed colors -->
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
                            <span>Gujarat Holidays 2026</span>
                            <i class="fas fa-drum text-2xl animate-bounce"></i> <!-- Changed icon -->
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-orange-200"></i>
                            <span>ગુજરાત રજાઓ</span> <!-- Gujarati -->
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
                <i class="fas fa-wind text-2xl text-blue-200"></i> <!-- Changed icon -->
                <i class="fas fa-drum text-2xl text-orange-200"></i> <!-- Changed icon -->
                <i class="fas fa-star text-2xl text-yellow-200"></i>
                <i class="fas fa-heart text-2xl text-red-200"></i>
                <i class="fas fa-moon text-2xl text-purple-200"></i> <!-- Changed icon -->
                <i class="fas fa-hand-fist text-2xl text-green-200"></i> <!-- Changed icon -->
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
                <li><a href="#" class="hover:text-blue-600 transition-colors">Gujarat</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Holidays 2026</li>
            </ol>
        </nav>
        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-green-50 rounded-lg p-6 border-l-4 border-blue-500">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-blue-600"></i>
                    <span>Complete Gujarat Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Gujarat Holiday Calendar 2026! This detailed guide provides you with all the important dates,
                    festivals, and celebrations throughout the year. Whether you're planning a trip to the vibrant state of Gujarat, organizing events,
                    or simply want to stay informed about cultural celebrations, our calendar covers everything from the world-famous Navratri
                    to national holidays and international observances.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-drum text-2xl text-orange-500 mb-2"></i> <!-- Changed icon and color -->
                        <h3 class="font-semibold text-gray-800 mb-2">Gujarat Festivals</h3>
                        <p class="text-sm text-gray-600">Iconic celebrations like Navratri, Uttarayan, and Rann Utsav</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-star text-2xl text-yellow-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Republic Day, Independence Day, and other patriotic celebrations</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-globe text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">International Events</h3>
                        <p class="text-sm text-gray-600">Women's Day, Labour Day, and global observances</p>
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
                                <button onclick="quickSearch('Navratri')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-drum text-orange-500"></i> <!-- Changed icon -->
                                    <span>Navratri</span>
                                </button>
                                <button onclick="quickSearch('Uttarayan')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-wind text-blue-500"></i> <!-- Changed icon -->
                                    <span>Uttarayan</span>
                                </button>
                                <button onclick="quickSearch('Gujarat')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-flag text-green-500"></i> <!-- Changed icon -->
                                    <span>Gujarat Festivals</span>
                                </button>
                                <button onclick="quickSearch('National')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
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
                            <option value="Gujarat Festival">🪘 Gujarat Festival</option> <!-- Changed emoji -->
                            <option value="International">🌍 International</option>
                            <option value="Religious">⛪ Religious</option>
                            <option value="National">🇮🇳 National</option>
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
            <div class="mt-4 text-center bg-gradient-to-r from-blue-50 to-green-50 p-3 rounded-lg border border-blue-200">
                <p class="text-sm text-gray-700 flex items-center justify-center space-x-2">
                    <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                    <span>💡 Search tips: Try searching for "Navratri", "Uttarayan", "Gujarat", or specific holiday names</span>
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
                            <i class="fas fa-map-marker-alt text-orange-500"></i> <!-- Changed color -->
                            <span>ગુજરાતી મહિનો: <?php echo $month_names[$current_month]; ?></span> <!-- Gujarati -->
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-wind text-blue-500"></i> <!-- Changed icon -->
                        <span>Windy Days</span>
                    </span>
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-star text-orange-500"></i> <!-- Changed color -->
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
                $gujarati_weekdays = ['રવિવાર', 'સોમવાર', 'મંગળવાર', 'બુધવાર', 'ગુરુવાર', 'શુક્રવાર', 'શનિવાર']; // Gujarati
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-saturn'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
                    echo '<div class="text-xs text-gray-500">' . $gujarati_weekdays[$i] . '</div>';
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
                        $cell_classes .= ' bg-orange-50'; // Changed color for Gujarat
                    }
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    if ($is_holiday) {
                        $holiday = $all_holidays_2026[$date];
                        $border_color = $is_bank_holiday ? 'border-blue-500' : 'border-orange-500'; // Changed color for Gujarat
                        $bg_color = $is_bank_holiday ? 'bg-blue-100' : 'bg-orange-100'; // Changed color for Gujarat
                        $text_color = $is_bank_holiday ? 'text-blue-800' : 'text-orange-800'; // Changed color for Gujarat
                        $desc_color = $is_bank_holiday ? 'text-blue-700' : 'text-orange-700'; // Changed color for Gujarat
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_bank_holiday ? 'text-blue-600' : 'text-orange-600') . '"></i>'; // Changed color for Gujarat
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        if ($is_bank_holiday) {
                            echo '<i class="fas fa-university text-xs text-blue-500 ml-1"></i>';
                        }
                        echo '</div>';
                        echo '<div class="text-xs ' . $desc_color . ' flex items-center space-x-1">';
                        echo '<i class="fas fa-tag ' . ($is_bank_holiday ? 'text-blue-500' : 'text-orange-500') . '"></i>'; // Changed color for Gujarat
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
                            echo '<div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-green-50 rounded-lg border border-blue-200 hover:shadow-md transition-all transform hover:scale-105">';
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
                            <div class="text-3xl font-bold text-green-600"><?php echo count($holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-green-700 font-medium">Total Holidays</div>
                        <div class="text-xs text-green-600 mt-1"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?> Bank Holidays</div>
                        <div class="text-xs text-green-600 mt-1">🎉 Celebrations</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg border border-orange-200 hover:shadow-md transition-all"> <!-- Changed color -->
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-drum text-orange-600 text-xl"></i> <!-- Changed icon and color -->
                            <div class="text-3xl font-bold text-orange-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'Gujarat Festival'; })); ?></div>
                        </div>
                        <div class="text-sm text-orange-700 font-medium">Gujarat Festivals</div> <!-- Changed text -->
                        <div class="text-xs text-orange-600 mt-1">🪘 Cultural</div> <!-- Changed text and emoji -->
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-lg border border-yellow-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-star text-yellow-600 text-xl"></i>
                            <div class="text-3xl font-bold text-yellow-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'National Holiday'; })); ?></div>
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
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-university text-blue-600 text-xl"></i>
                            <div class="text-3xl font-bold text-blue-600"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?></div>
                        </div>
                        <div class="text-sm text-blue-700 font-medium">Bank Holidays</div>
                        <div class="text-xs text-blue-600 mt-1">🏦 Financial</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bank Holidays Section -->
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-university text-blue-500 mr-3 text-2xl"></i>
                <span>Bank Holidays 2026</span>
                <i class="fas fa-building-columns text-blue-400 ml-2"></i>
            </h3>
            <p class="text-gray-600 mb-6">All major banks in Gujarat will be closed on these dates. Plan your banking activities accordingly.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                $bank_holidays_displayed = 0;
                foreach ($all_holidays_2026 as $date => $holiday) {
                    if ($holiday['bank_holiday'] === true && $bank_holidays_displayed < 12) {
                        $formatted_date = date('M d, Y', strtotime($date));
                        $day_name = date('l', strtotime($date));
                        echo '<div class="bg-gradient-to-r from-blue-50 to-blue-100 p-4 rounded-lg border border-blue-200 hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-3 mb-2">';
                        echo '<i class="fas fa-university text-blue-600 text-lg"></i>';
                        echo '<div class="flex-1">';
                        echo '<div class="font-semibold text-blue-800 text-sm">' . $holiday['name'] . '</div>';
                        echo '<div class="text-xs text-blue-600">' . $day_name . ', ' . $formatted_date . '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="text-right">';
                        echo '<div class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded-full">Bank Closed</div>';
                        echo '</div>';
                        echo '</div>';
                        $bank_holidays_displayed++;
                    }
                }
                ?>
            </div>
            <div class="mt-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
                <h4 class="font-semibold text-blue-800 mb-2 flex items-center">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                    Important Bank Holiday Information
                </h4>
                <ul class="text-sm text-blue-700 space-y-1">
                    <li>• <strong>All Banks Closed:</strong> National holidays, major festivals, and religious observances</li>
                    <li>• <strong>Half Day:</strong> Some banks may operate with reduced hours on certain holidays</li>
                    <li>• <strong>Online Banking:</strong> Available 24/7 even on bank holidays</li>
                    <li>• <strong>ATM Services:</strong> Usually available unless there are technical issues</li>
                    <li>• <strong>Emergency Services:</strong> Some banks provide emergency banking services</li>
                </ul>
            </div>
            <!-- Major Banks in Gujarat -->
            <div class="mt-6 p-4 bg-white rounded-lg border border-blue-200">
                <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                    <i class="fas fa-building-columns text-blue-600 mr-2"></i>
                    Major Banks Affected in Gujarat
                </h4>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Public Sector Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• State Bank of India (SBI)</li>
                            <li>• Bank of India</li>
                            <li>• Bank of Baroda</li>
                            <li>• Punjab National Bank</li>
                            <li>• Canara Bank</li>
                            <li>• Union Bank of India</li>
                            <li>• Indian Bank</li>
                            <li>• Indian Overseas Bank</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Private Sector Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• HDFC Bank</li>
                            <li>• ICICI Bank</li>
                            <li>• Axis Bank</li>
                            <li>• Kotak Mahindra Bank</li>
                            <li>• IndusInd Bank</li>
                            <li>• Yes Bank</li>
                            <li>• Federal Bank</li>
                            <li>• Bandhan Bank</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Regional & Cooperative Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• Gujarat State Cooperative Bank</li>
                            <li>• Various District Central Cooperative Banks</li>
                            <li>• Primary Agricultural Credit Societies</li>
                            <li>• Urban Cooperative Banks</li>
                            <li>• Regional Rural Banks</li>
                            <li>• Foreign Banks (Branches in Gujarat)</li>
                        </ul>
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
                <button onclick="resetToCurrent()" class="flex flex-col items-center p-6 bg-gradient-to-br from-orange-100 to-orange-200 hover:from-orange-200 hover:to-orange-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-orange-300"> <!-- Changed color -->
                    <i class="fas fa-home text-3xl text-orange-600 mb-3"></i> <!-- Changed color -->
                    <span class="text-sm font-medium text-orange-800">Today</span> <!-- Changed color -->
                    <div class="text-xs text-orange-600 mt-1">🏠 Current</div> <!-- Changed color -->
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
                            <i class="fas fa-drum text-orange-500"></i> <!-- Changed icon and color -->
                            <span>What are the main Gujarat festivals in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main Gujarat festivals in 2026 include <strong>Navratri</strong> (September 29 - October 8) - the world-famous nine-night dance festival,
                            <strong>Uttarayan</strong> (January 14) - the vibrant kite flying festival, and
                            <strong>Rann Utsav</strong> (November - February) - a cultural festival in the white desert of Kutch.
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-green-500"></i> <!-- Changed color -->
                            <span>How many national holidays are there in Gujarat 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Gujarat observes several national holidays in 2026 including <strong>Republic Day</strong> (January 26),
                            <strong>Independence Day</strong> (August 15), and <strong>Gandhi Jayanti</strong> (October 2).
                            These are official government holidays when banks, schools, and government offices remain closed.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-wind text-blue-500"></i> <!-- Changed icon and color -->
                            <span>What is Uttarayan and why is it important?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Uttarayan</strong> (January 14, 2026), also known as Makar Sankranti, marks the sun's transition into the northern hemisphere.
                            It's celebrated with great enthusiasm in Gujarat through the traditional sport of kite flying (<em>Patangbazi</em>).
                            The sky fills with colorful kites, and people of all ages participate in this joyous event, making it one of Gujarat's most iconic festivals.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-drum text-orange-500"></i> <!-- Changed icon and color -->
                            <span>What is Navratri and its significance in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Navratri</strong> (September 29 - October 8, 2026) is a nine-night festival dedicated to the worship of the Divine Feminine.
                            In Gujarat, it's celebrated with the energetic folk dances of <em>Garba</em> and <em>Dandiya Raas</em>.
                            People wear traditional attire, gather in large groups called <em>Garba circles</em>, and dance to traditional music.
                            It's a time for community bonding, devotion, and cultural expression, attracting visitors from across the globe.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-heart text-pink-500"></i>
                            <span>Are international holidays like Valentine's Day celebrated in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Valentine's Day</strong> (February 14, 2026) and other international holidays like
                            <strong>International Women's Day</strong> (March 8, 2026) are celebrated in Gujarat, especially in
                            urban areas like Ahmedabad, Surat, and Vadodara. While these are not official holidays, they are widely observed by younger generations and
                            commercial establishments, reflecting the state's cosmopolitan culture.
                        </p>
                    </div>
                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-moon text-purple-500"></i> <!-- Changed icon and color -->
                            <span>What is Rann Utsav and when does it take place?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Rann Utsav</strong> (November 2026 - February 2026) is a unique cultural festival held in the Great Rann of Kutch.
                            It showcases the rich heritage of Kutch through folk dances, music, crafts, and cuisine.
                            Visitors can experience the stark beauty of the white salt desert, stay in traditional <em>Bhungas</em> (mud huts),
                            interact with local communities, and witness the full moon over the vast expanse of the Rann.
                        </p>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hard-hat text-yellow-500"></i>
                            <span>Is Labour Day a public holiday in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Labour Day / May Day</strong> (May 1, 2026) is a public holiday in Gujarat. Banks, government offices,
                            and many businesses typically remain closed. Trade unions and workers' organizations often organize rallies
                            and events to celebrate workers' rights and achievements.
                        </p>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-dove text-blue-500"></i>
                            <span>How is Independence Day celebrated in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Independence Day</strong> (August 15, 2026) is celebrated with great patriotic fervor across Gujarat.
                            The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied by cultural programs.
                            The main celebration usually takes place at the Sabarmati Ashram in Ahmedabad, where Mahatma Gandhi initiated the Quit India Movement.
                        </p>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-peace text-green-500"></i>
                            <span>What is the significance of Gandhi Jayanti in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Gandhi Jayanti</strong> (October 2, 2026) commemorates the birth anniversary of Mahatma Gandhi,
                            the Father of the Nation. Gujarat, particularly Ahmedabad, holds special significance as it was Gandhi's base for many years.
                            The day is observed with prayer meetings, seminars on Gandhian philosophy, and community service activities.
                            Schools organize special assemblies, and government offices remain closed.
                        </p>
                    </div>
                    <!-- FAQ Item 10 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-child text-orange-500"></i> <!-- Changed color -->
                            <span>How is Children's Day celebrated in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Children's Day</strong> (November 14, 2026) celebrates the birth anniversary of India's first
                            Prime Minister, Jawaharlal Nehru. In Gujarat, schools organize special programs, cultural activities, and competitions for children.
                            Many schools also distribute sweets and gifts to students, making it a memorable day for children across the state.
                        </p>
                    </div>
                    <!-- FAQ Item 11 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>Is Christmas celebrated in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Christmas</strong> (December 25, 2026) is celebrated with great enthusiasm in Gujarat,
                            especially in areas with significant Christian populations like Ahmedabad and Vadodara. Churches
                            are beautifully decorated, midnight masses are held, and communities come together for celebrations.
                            The festival promotes communal harmony and is celebrated by people of all faiths.
                        </p>
                    </div>
                    <!-- FAQ Item 12 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-venus text-pink-500"></i>
                            <span>What is the significance of International Women's Day in Gujarat?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>International Women's Day</strong> (March 8, 2026) is celebrated across Gujarat to recognize
                            women's achievements and promote gender equality. Various organizations, educational institutions, and
                            government bodies organize seminars, workshops, and cultural programs highlighting women's contributions
                            to society. The day also focuses on women's rights, empowerment, and addressing gender-based challenges.
                        </p>
                    </div>
                    <!-- FAQ Item 13 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-clock text-blue-500"></i>
                            <span>How far in advance should I plan for Gujarat festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For major festivals like <strong>Navratri</strong> and <strong>Uttarayan</strong>, it's recommended to
                            plan at least 2-3 months in advance, especially if you're planning to travel to Gujarat. These festivals
                            attract many visitors, so accommodations and transportation should be booked early. For smaller celebrations,
                            planning 2-4 weeks ahead is usually sufficient.
                        </p>
                    </div>
                    <!-- FAQ Item 14 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-green-500"></i> <!-- Changed color -->
                            <span>Which cities in Gujarat are best for experiencing festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Ahmedabad</strong> (capital city) hosts grand celebrations for Navratri and other festivals.
                            <strong>Surat</strong> is famous for its vibrant Uttarayan celebrations.
                            <strong>Bhuj</strong> in Kutch is the center of Rann Utsav.
                            <strong>Vadodara</strong> also has significant Navratri celebrations.
                            <strong>Rajkot</strong> and <strong>Jamnagar</strong> offer traditional cultural experiences.
                        </p>
                    </div>
                    <!-- FAQ Item 15 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-check text-green-500"></i>
                            <span>Are there any special holidays specific to Gujarat in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, Gujarat has several state-specific holidays and festivals. <strong>Navratri</strong>,
                            <strong>Uttarayan</strong>, and <strong>Rann Utsav</strong> are unique to Gujarat and are celebrated as major events.
                            The state government may also declare additional holidays for local events or significant anniversaries.
                        </p>
                    </div>
                    <!-- FAQ Item 16 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-utensils text-orange-500"></i> <!-- Changed color -->
                            <span>What traditional foods are associated with Gujarat festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Gujarat festivals feature a variety of traditional foods. <strong>Navratri</strong> sees a prevalence of
                            fasting foods and special dishes like <em>Sabudana Khichdi</em>, <em>Kuttu Ki Puri</em>, and <em>Rajgira Paratha</em>.
                            During <strong>Uttarayan</strong>, people enjoy snacks like <em>Chikki</em> (peanut brittle) and <em>Gulab Jamun</em>.
                            <strong>Rann Utsav</strong> features traditional Kutchi cuisine like <em>Bajra Rotla</em>, <em>Khichdi</em>, and <em>Ghee Roopafali</em>.
                        </p>
                    </div>
                    <!-- FAQ Item 17 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-music text-purple-500"></i>
                            <span>What cultural activities are organized during Gujarat festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Gujarat festivals feature rich cultural activities including classical music concerts, traditional dance
                            performances (Garba, Dandiya, Bhavai), folk music (like <em>Raabari</em> songs), and cultural competitions.
                            <strong>Navratri</strong> is centered around Garba and Dandiya Raas dances.
                            <strong>Rann Utsav</strong> showcases Kutchi folk dances and music.
                            Many festivals also feature traditional art exhibitions, craft demonstrations, and cultural workshops for visitors.
                        </p>
                    </div>
                    <!-- FAQ Item 18 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-bus text-blue-500"></i>
                            <span>How can tourists participate in Gujarat festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Tourists can participate in Gujarat festivals by attending public celebrations, visiting cultural centers during
                            festival times, and joining community events. Many hotels and tour operators offer special festival packages.
                            It's recommended to dress appropriately (traditional attire is appreciated during Navratri), respect local customs,
                            and participate in cultural activities. Learning basic Gujarati greetings can enhance the experience.
                        </p>
                    </div>
                    <!-- FAQ Item 19 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-camera text-green-500"></i>
                            <span>Are photography and videography allowed during festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Photography and videography are generally allowed during most Gujarat festivals, but it's important to
                            respect local customs and seek permission when necessary. Some religious ceremony areas may have restrictions,
                            and it's polite to ask before taking photos of people, especially during private moments. Many festivals offer
                            excellent opportunities for cultural photography, but always be respectful and avoid disrupting ceremonies or celebrations.
                        </p>
                    </div>
                    <!-- FAQ Item 20 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-blue-500"></i>
                            <span>Where can I get more information about specific festival dates and events?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For detailed information about Gujarat festivals, you can visit the official Gujarat Tourism website,
                            contact local tourism offices, or check with local cultural organizations and event organizers.
                            This calendar provides the main dates, but specific event schedules may vary by location and year.
                            Local newspapers and cultural magazines also publish detailed festival calendars and event information.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // JavaScript functionality
        // Holiday data for search functionality
        const holidaysData = <?php echo json_encode($all_holidays_2026); ?>;
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
            Object.entries(holidaysData).forEach(([date, holiday]) => {
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
                    const formattedDate = new Date(date).toLocaleDateString('en-US', {
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
            const date = new Date(dateString);
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
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
            // Create a simple text version for download
            const content = `Gujarat Holidays 2026
`;
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'gujarat-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Gujarat Holidays 2026',
                    text: 'Check out the Gujarat holiday calendar for 2026!',
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
                }, index * 50);
            });
            // Add hover effects to holiday items
            const holidayItems = document.querySelectorAll('.bg-orange-100'); // Changed selector
            holidayItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.02)';
                    this.style.transition = 'transform 0.2s ease';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            const currentUrl = new URL(window.location);
            const currentMonth = parseInt(currentUrl.searchParams.get('month')) || new Date().getMonth() + 1;
            const currentYear = parseInt(currentUrl.searchParams.get('year')) || new Date().getFullYear();
            if (e.key === 'ArrowLeft') {
                // Previous month
                const prevMonth = currentMonth === 1 ? 12 : currentMonth - 1;
                const prevYear = currentMonth === 1 ? currentYear - 1 : currentYear;
                window.location.href = `?month=${prevMonth}&year=${prevYear}`;
            } else if (e.key === 'ArrowRight') {
                // Next month
                const nextMonth = currentMonth === 12 ? 1 : currentMonth + 1;
                const nextYear = currentMonth === 12 ? currentYear + 1 : currentYear;
                window.location.href = `?month=${nextMonth}&year=${nextYear}`;
            } else if (e.key === 'Home') {
                // Go to current month
                window.location.href = window.location.pathname;
            }
        });
    </script>
<?php include '../../footer.php'; ?>
</body>
</html>