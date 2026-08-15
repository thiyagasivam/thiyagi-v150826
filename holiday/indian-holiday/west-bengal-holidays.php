<?php include '../../header.php'; ?>
    <title>West Bengal Holidays 2026 | Complete Calendar | Durga Puja | National Holidays</title>
    <meta name="description" content="Complete West Bengal Holiday Calendar 2026. Find all major festivals like Durga Puja, Poila Boishakh, Janmashtami, national holidays, cultural events, and religious celebrations. Plan your year with our comprehensive holiday guide.">
    <meta name="keywords" content="West Bengal holidays 2026, Durga Puja, Poila Boishakh, Janmashtami, national holidays India, cultural events West Bengal, West Bengal calendar, holidays West Bengal, festival dates 2026">
    <meta name="author" content="West Bengal Holiday Calendar">
        <meta property="og:title" content="West Bengal Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete West Bengal Holiday Calendar 2026 with all festivals like Durga Puja, Poila Boishakh, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/FF0000/FFFFFF?text=West+Bengal+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="West Bengal Holidays 2026">
    <meta name="twitter:description" content="Complete West Bengal Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English, Bengali">
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="West Bengal, India">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "West Bengal Holidays 2026",
        "description": "Complete West Bengal Holiday Calendar 2026 with all festivals like Durga Puja, Poila Boishakh, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main festivals in West Bengal in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The main festivals in West Bengal in 2026 include Durga Puja (October 2-6), Poila Boishakh (April 14), Janmashtami (August 26), and Rabindra Jayanti (May 7)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How many national holidays are there in West Bengal 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "There are several national holidays in West Bengal 2026 including Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Durga Puja and why is it important?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Durga Puja is the biggest and most significant festival in West Bengal, celebrating the victory of Goddess Durga over the demon Mahishasura. It usually falls in September or October and is a 5-day celebration involving elaborate pandals, cultural programs, and community gatherings."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is Independence Day celebrated in West Bengal?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Independence Day (August 15, 2026) is celebrated with great patriotic fervor across West Bengal. The day begins with flag hoisting ceremonies in schools, colleges, and government offices. Cultural programs, patriotic songs, and speeches highlighting India's freedom struggle are organized, especially at historic sites like the Victoria Memorial in Kolkata."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are there any special holidays specific to West Bengal in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, West Bengal has several state-specific holidays and festivals. Durga Puja, Poila Boishakh (Bengali New Year), and Rabindra Jayanti are major celebrations unique to the state and are often observed as state holidays."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "West Bengal Holiday Calendar"
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
                        'wb-green': '#228B22', // Green for Durga Puja
                        'wb-red': '#FF0000',   // Red for Bengali New Year
                        'wb-blue': '#0000CD',  // Blue for cultural
                        'wb-yellow': '#FFD700' // Yellow for celebrations
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // West Bengal Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of the new year',
            'icon' => 'fa-calendar-day',
            'bank_holiday' => true
        ],
        '2026-01-14' => [
            'name' => 'Makar Sankranti',
            'type' => 'Religious',
            'description' => 'Harvest festival marking the sun\'s northward journey',
            'icon' => 'fa-sun',
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
        '2026-03-08' => [
            'name' => 'International Women\'s Day',
            'type' => 'International',
            'description' => 'Celebration of women\'s achievements',
            'icon' => 'fa-venus',
            'bank_holiday' => false
        ],
        '2026-04-02' => [
            'name' => 'Good Friday',
            'type' => 'Religious',
            'description' => 'Christian religious holiday',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Poila Boishakh',
            'type' => 'State Festival',
            'description' => 'Bengali New Year celebration',
            'icon' => 'fa-calendar-plus',
            'bank_holiday' => true
        ],
        '2026-05-01' => [
            'name' => 'Labour Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'bank_holiday' => true
        ],
        '2026-05-07' => [
            'name' => 'Rabindra Jayanti',
            'type' => 'Cultural',
            'description' => 'Birth anniversary of Rabindranath Tagore',
            'icon' => 'fa-book-open',
            'bank_holiday' => true
        ],
        '2026-06-17' => [
            'name' => 'Bakrid/Eid al-Adha',
            'type' => 'Religious',
            'description' => 'Islamic festival',
            'icon' => 'fa-moon',
            'bank_holiday' => true
        ],
        '2026-07-17' => [
            'name' => 'Muharram',
            'type' => 'Religious',
            'description' => 'Islamic New Year',
            'icon' => 'fa-moon',
            'bank_holiday' => true
        ],
        '2026-08-15' => [
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Indian Independence Day',
            'icon' => 'fa-dove',
            'bank_holiday' => true
        ],
        '2026-08-26' => [
            'name' => 'Janmashtami',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Lord Krishna',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ],
        '2026-09-07' => [
            'name' => 'Ganesh Chaturthi',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Lord Ganesha',
            'icon' => 'fa-elephant',
            'bank_holiday' => true
        ],
        '2026-10-02' => [
            'name' => 'Gandhi Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-peace',
            'bank_holiday' => true
        ],
        '2026-10-06' => [
            'name' => 'Durga Puja (Last Day)',
            'type' => 'State Festival',
            'description' => 'Last day of the grand Durga Puja celebration',
            'icon' => 'fa-goddess',
            'bank_holiday' => true
        ],
        '2026-11-14' => [
            'name' => 'Children\'s Day',
            'type' => 'National',
            'description' => 'Birth anniversary of Jawaharlal Nehru',
            'icon' => 'fa-child',
            'bank_holiday' => false
        ],
        '2026-11-15' => [
            'name' => 'Guru Nanak Jayanti',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Guru Nanak Dev Ji',
            'icon' => 'fa-pray',
            'bank_holiday' => true
        ],
        '2026-12-25' => [
            'name' => 'Christmas',
            'type' => 'Religious',
            'description' => 'Celebration of Jesus Christ\'s birth',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ]
    ];
    // Bank Holidays 2026 - Additional holidays specific to banks
    $bank_holidays_2026 = [
        '2026-01-15' => [
            'name' => 'Pongal Holiday',
            'type' => 'Bank Holiday',
            'description' => 'Regional holiday observed by banks',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-03-25' => [
            'name' => 'Holi',
            'type' => 'Bank Holiday',
            'description' => 'Festival of colors - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-04-04' => [
            'name' => 'Easter Sunday',
            'type' => 'Bank Holiday',
            'description' => 'Christian religious holiday - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Ambedkar Jayanti',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Dr. B.R. Ambedkar',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-05-09' => [
            'name' => 'Buddha Purnima',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Lord Buddha',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-09-23' => [
            'name' => 'Maha Navami',
            'type' => 'Bank Holiday',
            'description' => 'Ninth day of Navratri - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-09-24' => [
            'name' => 'Vijaya Dashami/Dussehra',
            'type' => 'Bank Holiday',
            'description' => 'Tenth day of Navratri - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-31' => [
            'name' => 'Diwali',
            'type' => 'Bank Holiday',
            'description' => 'Festival of lights - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-11-01' => [
            'name' => 'Diwali Holiday',
            'type' => 'Bank Holiday',
            'description' => 'Day after Diwali - Banks closed',
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
    <header class="bg-gradient-to-r from-wb-green to-wb-red text-white shadow-lg relative overflow-hidden">
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
                            <span>West Bengal Holidays 2026</span>
                            <i class="fas fa-flag text-2xl animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-200"></i>
                            <span>পশ্চিমবঙ্গ ছুটির দিন</span>
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
                <i class="fas fa-sun text-2xl text-yellow-200"></i>
                <i class="fas fa-moon text-2xl text-blue-200"></i>
                <i class="fas fa-star text-2xl text-yellow-200"></i>
                <i class="fas fa-heart text-2xl text-red-200"></i>
                <i class="fas fa-leaf text-2xl text-green-200"></i>
                <i class="fas fa-fire text-2xl text-orange-200"></i>
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
                <li><a href="#" class="hover:text-blue-600 transition-colors">West Bengal</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Holidays 2026</li>
            </ol>
        </nav>
        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-blue-600"></i>
                    <span>Complete West Bengal Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive West Bengal Holiday Calendar 2026! This detailed guide provides you with all the important dates,
                    festivals, and celebrations throughout the year. Whether you're planning a trip to West Bengal, organizing events,
                    or simply want to stay informed about cultural celebrations, our calendar covers everything from grand festivals like Durga Puja
                    to national holidays and international observances.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-goddess text-2xl text-green-500 mb-2"></i> <!-- Assuming 'fa-goddess' exists or use a similar icon -->
                        <h3 class="font-semibold text-gray-800 mb-2">State Festivals</h3>
                        <p class="text-sm text-gray-600">Major celebrations like Durga Puja, Poila Boishakh, and cultural events</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-star text-2xl text-yellow-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Republic Day, Independence Day, and other patriotic celebrations</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-globe text-2xl text-blue-500 mb-2"></i>
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
                                <button onclick="quickSearch('Durga Puja')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-goddess text-green-500"></i> <!-- Assuming 'fa-goddess' exists or use a similar icon -->
                                    <span>Durga Puja</span>
                                </button>
                                <button onclick="quickSearch('New Year')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-calendar-plus text-green-500"></i>
                                    <span>New Year</span>
                                </button>
                                <button onclick="quickSearch('Bengali')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-flag text-red-500"></i>
                                    <span>Bengali Festivals</span>
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
                            <option value="State Festival">🎭 State Festival</option>
                            <option value="Cultural">📚 Cultural</option>
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
            <div class="mt-4 text-center bg-gradient-to-r from-blue-50 to-indigo-50 p-3 rounded-lg border border-blue-200">
                <p class="text-sm text-gray-700 flex items-center justify-center space-x-2">
                    <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                    <span>💡 Search tips: Try searching for "Durga Puja", "Bengali", "National", or specific holiday names</span>
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
                            <span>বাংলা মাস: <?php echo $month_names[$current_month]; ?></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-sun text-yellow-500"></i>
                        <span>Sunny Days</span>
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
                $bengali_weekdays = ['রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র', 'শনি']; // Approximate Bengali transliterations
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-saturn'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
                    echo '<div class="text-xs text-gray-500">' . $bengali_weekdays[$i] . '</div>';
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
                        $cell_classes .= ' bg-green-50'; // Changed color for WB holidays
                    }
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    if ($is_holiday) {
                        $holiday = $all_holidays_2026[$date];
                        $border_color = $is_bank_holiday ? 'border-blue-500' : 'border-green-500'; // Changed to green
                        $bg_color = $is_bank_holiday ? 'bg-blue-100' : 'bg-green-100'; // Changed to green
                        $text_color = $is_bank_holiday ? 'text-blue-800' : 'text-green-800'; // Changed to green
                        $desc_color = $is_bank_holiday ? 'text-blue-700' : 'text-green-700'; // Changed to green
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_bank_holiday ? 'text-blue-600' : 'text-green-600') . '"></i>'; // Changed to green
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        if ($is_bank_holiday) {
                            echo '<i class="fas fa-university text-xs text-blue-500 ml-1"></i>';
                        }
                        echo '</div>';
                        echo '<div class="text-xs ' . $desc_color . ' flex items-center space-x-1">';
                        echo '<i class="fas fa-tag ' . ($is_bank_holiday ? 'text-blue-500' : 'text-green-500') . '"></i>'; // Changed to green
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
                            <div class="text-3xl font-bold text-green-600"><?php echo count($holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-green-700 font-medium">Total Holidays</div>
                        <div class="text-xs text-green-600 mt-1"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?> Bank Holidays</div>
                        <div class="text-xs text-green-600 mt-1">🎉 Celebrations</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-goddess text-blue-600 text-xl"></i> <!-- Assuming 'fa-goddess' exists or use a similar icon -->
                            <div class="text-3xl font-bold text-blue-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'State Festival'; })); ?></div>
                        </div>
                        <div class="text-sm text-blue-700 font-medium">State Festivals</div>
                        <div class="text-xs text-blue-600 mt-1">🎭 Cultural</div>
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
            <p class="text-gray-600 mb-6">All major banks in West Bengal will be closed on these dates. Plan your banking activities accordingly.</p>
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
            <!-- Major Banks in West Bengal -->
            <div class="mt-6 p-4 bg-white rounded-lg border border-blue-200">
                <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                    <i class="fas fa-building-columns text-blue-600 mr-2"></i>
                    Major Banks Affected in West Bengal
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
                            <li>• Central Bank of India</li>
                            <li>• Allahabad Bank</li>
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
                            <li>• Bandhan Bank</li>
                            <li>• IDFC First Bank</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Regional & Cooperative Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• United Bank of India</li>
                            <li>• Andhra Bank</li>
                            <li>• Corporation Bank</li>
                            <li>• Oriental Bank of Commerce</li>
                            <li>• Punjab & Sind Bank</li>
                            <li>• UCO Bank</li>
                            <li>• Cooperative Banks</li>
                            <li>• Foreign Banks</li>
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
                            <i class="fas fa-goddess text-blue-500"></i> <!-- Assuming 'fa-goddess' exists or use a similar icon -->
                            <span>What are the main festivals in West Bengal in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main festivals in West Bengal in 2026 include <strong>Durga Puja</strong> (October 2-6) - the biggest and most significant festival,
                            <strong>Poila Boishakh</strong> (April 14) - Bengali New Year, <strong>Janmashtami</strong> (August 26) - celebrating Lord Krishna's birth,
                            and <strong>Rabindra Jayanti</strong> (May 7) - honoring the great poet Rabindranath Tagore.
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-red-500"></i>
                            <span>How many national holidays are there in West Bengal 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            West Bengal observes several national holidays in 2026 including <strong>Republic Day</strong> (January 26),
                            <strong>Independence Day</strong> (August 15), and <strong>Gandhi Jayanti</strong> (October 2).
                            These are official government holidays when banks, schools, and government offices remain closed.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-goddess text-orange-500"></i> <!-- Assuming 'fa-goddess' exists or use a similar icon -->
                            <span>What is Durga Puja and why is it important?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Durga Puja</strong> is the biggest and most significant festival in West Bengal, celebrating the victory of Goddess Durga over the demon Mahishasura.
                            It usually falls in September or October and is a 5-day celebration involving elaborate pandals, cultural programs, and community gatherings.
                            It's a time for socializing, feasting, and showcasing artistic creativity.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-book-open text-green-500"></i>
                            <span>What is Poila Boishakh and its significance?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Poila Boishakh</strong> (April 14, 2026) marks the Bengali New Year. It's a vibrant celebration involving traditional foods like 'panta ilish' and 'muri',
                            wearing new clothes, visiting temples, and participating in cultural events and fairs. It symbolizes new beginnings and hope for the year ahead.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-heart text-pink-500"></i>
                            <span>Are international holidays like Valentine's Day celebrated in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Valentine's Day</strong> (February 14, 2026) and other international holidays like
                            <strong>International Women's Day</strong> (March 8, 2026) are celebrated in West Bengal, especially in
                            urban areas. While these are not official holidays, they are widely observed by younger generations and
                            commercial establishments, reflecting the state's cosmopolitan culture.
                        </p>
                    </div>
                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-purple-500"></i>
                            <span>What is the significance of Rabindra Jayanti?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Rabindra Jayanti</strong> (May 7, 2026) celebrates the birth anniversary of Nobel laureate Rabindranath Tagore.
                            This day honors his immense contributions to literature, music, painting, and education. Cultural programs, recitations of his poetry,
                            and musical performances of his compositions (Rabindra Sangeet) are organized across the state.
                        </p>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hard-hat text-yellow-500"></i>
                            <span>Is Labour Day a public holiday in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Labour Day</strong> (May 1, 2026) is celebrated as <strong>International Workers' Day</strong>
                            in West Bengal. It is an official public holiday. Government offices, banks, and many private establishments remain closed.
                            Trade unions and workers' organizations organize rallies and events to celebrate workers' rights and achievements.
                        </p>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-dove text-blue-500"></i>
                            <span>How is Independence Day celebrated in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Independence Day</strong> (August 15, 2026) is celebrated with great patriotic fervor across West Bengal.
                            The day begins with flag hoisting ceremonies in schools, colleges, and government offices. Cultural programs,
                            patriotic songs, and speeches highlighting India's freedom struggle are organized, especially at historic sites like the Victoria Memorial in Kolkata.
                        </p>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-peace text-green-500"></i>
                            <span>What is the significance of Gandhi Jayanti in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Gandhi Jayanti</strong> (October 2, 2026) commemorates the birth anniversary of Mahatma Gandhi,
                            the Father of the Nation. In West Bengal, this day is observed with prayer meetings, seminars on Gandhian
                            philosophy, and community service activities. Schools organize special assemblies, and government offices
                            remain closed. The day promotes Gandhian values of non-violence, truth, and simplicity.
                        </p>
                    </div>
                    <!-- FAQ Item 10 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-child text-orange-500"></i>
                            <span>How is Children's Day celebrated in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Children's Day</strong> (November 14, 2026) celebrates the birth anniversary of India's first
                            Prime Minister, Jawaharlal Nehru, who was fondly called "Chacha Nehru" by children. In West Bengal, schools
                            organize special programs, cultural activities, and competitions for children. Many schools also distribute
                            sweets and gifts to students, making it a memorable day for children across the state.
                        </p>
                    </div>
                    <!-- FAQ Item 11 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>Is Christmas celebrated in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Christmas</strong> (December 25, 2026) is celebrated with great enthusiasm in West Bengal,
                            especially in areas with significant Christian populations like Kolkata, Darjeeling, and Kalimpong. Churches
                            are beautifully decorated, midnight masses are held, and communities come together for celebrations.
                            The festival promotes communal harmony and is celebrated by people of all faiths.
                        </p>
                    </div>
                    <!-- FAQ Item 12 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-venus text-pink-500"></i>
                            <span>What is the significance of International Women's Day in West Bengal?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>International Women's Day</strong> (March 8, 2026) is celebrated across West Bengal to recognize
                            women's achievements and promote gender equality. Various organizations, educational institutions, and
                            government bodies organize seminars, workshops, and cultural programs highlighting women's contributions
                            to society. The day also focuses on women's rights, empowerment, and addressing gender-based challenges.
                        </p>
                    </div>
                    <!-- FAQ Item 13 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-clock text-blue-500"></i>
                            <span>How far in advance should I plan for West Bengal festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For major festivals like <strong>Durga Puja</strong> and <strong>Poila Boishakh</strong>, it's recommended to
                            plan at least 2-3 months in advance, especially if you're planning to travel to West Bengal or attend events in Kolkata.
                            These festivals attract many visitors, so accommodations and transportation should be booked early. For smaller celebrations,
                            planning 2-4 weeks ahead is usually sufficient.
                        </p>
                    </div>
                    <!-- FAQ Item 14 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                            <span>Which cities in West Bengal are best for experiencing festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Kolkata</strong> (capital city) offers grand celebrations for all major festivals, especially Durga Puja.
                            <strong>Darjeeling</strong> is famous for its unique cultural festivals and Christmas celebrations.
                            <strong>Siliguri</strong> and <strong>Asansol</strong> also host significant regional festivals.
                            Each city has its unique way of celebrating and offers different cultural experiences.
                        </p>
                    </div>
                    <!-- FAQ Item 15 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-check text-green-500"></i>
                            <span>Are there any special holidays specific to West Bengal in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, West Bengal has several state-specific holidays and festivals. <strong>Durga Puja</strong>,
                            <strong>Poila Boishakh</strong>, and <strong>Rabindra Jayanti</strong> are major celebrations unique to West Bengal
                            and are often observed as state holidays. The state government may also declare additional holidays for local events.
                        </p>
                    </div>
                    <!-- FAQ Item 16 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-utensils text-orange-500"></i>
                            <span>What traditional foods are associated with West Bengal festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            West Bengal festivals feature a rich variety of traditional foods. <strong>Durga Puja</strong> is famous for
                            'bhog' (offering food), 'luchi', 'alur dom', and various sweets like 'rasgulla', 'sandesh', and 'mishti doi'.
                            During <strong>Poila Boishakh</strong>, people enjoy 'panta ilish' (fermented rice with hilsa fish) and 'muri' (puffed rice).
                            Most festivals include traditional Bengali rice dishes, fish curries, and an array of sweets.
                        </p>
                    </div>
                    <!-- FAQ Item 17 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-music text-purple-500"></i>
                            <span>What cultural activities are organized during West Bengal festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            West Bengal festivals feature rich cultural activities including classical music concerts (Rabindra Sangeet, Nazrul Geeti),
                            traditional dance performances (like Kathak), folk dances (like Baul, Jatra), poetry recitations, and cultural competitions.
                            <strong>Durga Puja</strong> includes elaborate cultural programs, art exhibitions, and community gatherings in pandals.
                            Many festivals also feature traditional craft demonstrations and cultural workshops for visitors.
                        </p>
                    </div>
                    <!-- FAQ Item 18 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-bus text-blue-500"></i>
                            <span>How can tourists participate in West Bengal festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Tourists can participate in West Bengal festivals by attending public celebrations, visiting pandals during Durga Puja,
                            and joining community events. Many hotels and tour operators offer special festival packages. It's recommended to
                            dress modestly, respect local customs, and participate in cultural activities. Learning basic Bengali greetings and
                            festival customs can enhance the experience significantly.
                        </p>
                    </div>
                    <!-- FAQ Item 19 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-camera text-green-500"></i>
                            <span>Are photography and videography allowed during festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Photography and videography are generally allowed during most West Bengal festivals, but it's important to
                            respect local customs and seek permission when necessary, especially inside temples or private pandals.
                            It's polite to ask before taking photos of people. Many festivals offer excellent opportunities for
                            cultural photography, but always be respectful and avoid disrupting ceremonies or celebrations.
                        </p>
                    </div>
                    <!-- FAQ Item 20 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-blue-500"></i>
                            <span>Where can I get more information about specific festival dates and events?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For detailed information about West Bengal festivals, you can visit the official West Bengal Tourism website,
                            contact local tourism offices, or check with local cultural organizations and temples. This calendar provides
                            the main dates, but specific event schedules may vary by location. Local newspapers and cultural magazines
                            also publish detailed festival calendars and event information throughout the year.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive West Bengal Holidays Guide -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Complete Guide to West Bengal Holidays and Festivals</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg">West Bengal's <strong>holiday calendar</strong> reflects the state's rich cultural heritage, religious diversity, and historical significance, blending Hindu festivals, Islamic observances, Christian celebrations, secular national holidays, and unique regional traditions. From the grandeur of Durga Puja captivating the entire state for days to intimate family celebrations of Poila Boishakh marking the Bengali New Year, West Bengal's festival calendar provides deep insights into Bengali culture, traditions, and social fabric. Understanding these holidays helps residents plan their year, tourists schedule visits during vibrant celebrations, and everyone appreciate the cultural richness making West Bengal one of India's most culturally significant states.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Durga Puja: Bengal's Biggest Festival</strong></h2>
                <p><strong>Durga Puja</strong> stands as West Bengal's most significant and elaborate festival, typically celebrated in September or October for five days honoring Goddess Durga's victory over the demon Mahishasura. The festival transforms Kolkata and cities across West Bengal into open-air art galleries with thousands of elaborately decorated pandals (temporary structures) housing artistic clay sculptures of Goddess Durga and her family. Each pandal competes in creativity, theme, lighting, and artistic excellence, with communities investing months of planning and substantial resources. Durga Puja represents more than religious observance—it's Bengal's grand cultural celebration bringing people together regardless of religion, caste, or class in shared festivities.</p>
                
                <p>The five days—Shashthi, Saptami, Ashtami, Navami, and Dashami—each hold specific rituals and significance. Mahalaya precedes Durga Puja by seven days, marking the beginning of Devi Paksha when the goddess descends to earth. Pandal hopping becomes a major activity as families and friends visit numerous pandals experiencing different themes and artistic expressions. Cultural programs including music, dance, theater performances fill days and nights. Traditional drums (dhak) create distinctive rhythmic beats accompanying rituals. New clothes (naboborsho) are worn, traditional Bengali foods prepared, and social bonds strengthened. Bijoya Dashami concludes festivities with the immersion (visarjan) of clay idols in rivers amidst emotional farewells promising return next year. For West Bengal, Durga Puja represents identity, artistry, community, and cultural pride rolled into five extraordinary days.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Poila Boishakh: Bengali New Year</strong></h2>
                <p><strong>Poila Boishakh</strong> (April 14 or 15) celebrates the Bengali New Year marking the first day of the Bengali calendar's first month, Boishakh. The festival embodies Bengali cultural identity, agricultural cycles, and fresh beginnings. Celebrations involve new clothes, traditional foods like panta bhat (fermented rice) with fried ilish (hilsa fish), cultural programs, and community gatherings. Kolkata's streets fill with processions, traditional music, and cultural performances showcasing Bengali heritage. Businesses start new account books (halkhata) inviting customers and distributing sweets. Rabindra Sangeet concerts honor Rabindranath Tagore's legacy through his timeless compositions celebrating Bengali identity and nature.</p>
                
                <p>Poila Boishakh transcends religious boundaries—Hindus, Muslims, Christians, and people of all faiths celebrate as cultural festival rather than religious observance. The day emphasizes Bengali linguistic and cultural pride, celebrating shared heritage over religious differences. Educational institutions organize cultural programs, competitions, and performances. Rural Bengal celebrates with melas (fairs) featuring traditional games, foods, handicrafts, and entertainment. The celebration reflects agricultural rhythms marking spring harvest season and renewed farming cycles. For Bengalis worldwide, Poila Boishakh represents connection to roots, cultural identity, and shared traditions binding the Bengali community across geographical and religious divides through common linguistic and cultural heritage.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Kali Puja and Diwali</strong></h2>
                <p><strong>Kali Puja</strong> coincides with Diwali (October/November) but holds distinct significance in West Bengal where Goddess Kali receives greater devotion than Lord Rama celebrated in northern India's Diwali. Kali Puja venerates the fierce form of Goddess Durga, with midnight rituals, animal sacrifices in some temples, and elaborate pujas. Homes and streets illuminate with diyas (clay lamps) and decorative lights. Firecrackers burst throughout the night despite increasing environmental concerns prompting calls for eco-friendly celebrations. The festival represents victory of good over evil, light over darkness, and knowledge over ignorance—themes common across Hindu tradition but expressed through Bengal's distinctive devotional practices.</p>
                
                <p>Kalighat Temple in Kolkata becomes pilgrimage destination during Kali Puja, drawing devotees seeking blessings. Community pujas organize elaborate celebrations rivaling Durga Puja's scale in some neighborhoods. The festival showcases Bengal's tantric traditions where Goddess Kali occupies central position in spiritual practices. Modern celebrations increasingly emphasize eco-friendly approaches—green crackers, LED lights replacing traditional diyas, and awareness campaigns promoting noise and air pollution reduction. The festival also serves commercial purposes with businesses, markets experiencing increased activity. For many Bengalis, Kali Puja represents deeper spiritual connection than Diwali's more widespread Indian celebration, reflecting regional devotional preferences and cultural distinctiveness within broader Hindu festival calendar.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Saraswati Puja: Worship of Knowledge</strong></h2>
                <p><strong>Saraswati Puja</strong> (January/February) honors Goddess Saraswati, deity of knowledge, music, arts, and wisdom. Particularly significant in educational institutions, schools and colleges organize elaborate pujas with students actively participating. The festival marks Basant Panchami celebrating spring's arrival with yellow symbolizing mustard flowers blooming across Bengal's countryside. Students place books, musical instruments, and study materials before Goddess Saraswati seeking blessings for academic success. White and yellow attire dominates dress codes reflecting seasonal and spiritual significance. Cultural programs, music recitals, and literary competitions complement religious observances emphasizing learning and arts.</p>
                
                <p>For Bengali students, Saraswati Puja represents annual milestone—a day celebrating education itself rather than academic pressure. The festival creates moments for students to relax, enjoy cultural activities, and seek divine blessings for studies. Traditional Bengali foods called bhog are prepared and distributed as prasad. The artistic preparation of Saraswati idols showcases Bengali sculptors' craftsmanship with beautiful white-adorned goddess sitting on lotus or swan. Schools decorate extensively creating festive atmospheres transforming educational spaces into celebration venues. The festival embodies Bengal's historical reverence for learning, arts, and intellectual pursuits—values deeply embedded in Bengali cultural consciousness through centuries of literary and artistic achievements producing luminaries like Tagore, Bankim, and countless others.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Eid Celebrations in West Bengal</strong></h2>
                <p>West Bengal's significant Muslim population celebrates <strong>Eid-ul-Fitr</strong> and <strong>Eid-ul-Adha</strong> with great enthusiasm demonstrating the state's religious harmony. Eid-ul-Fitr marks the end of Ramadan's month-long fasting with prayers at mosques, family gatherings, special meals, and charity (Zakat). Kolkata's historic neighborhoods like Park Circus, Metiabruz, and surrounding areas become celebration hubs with bustling markets selling traditional foods, clothes, and festive items. Semai (vermicelli pudding), biryani, kebabs, and regional delicacies feature prominently in Eid feasts. Eid namaz (prayers) at Red Road or Park Circus maidan draw thousands creating powerful visual displays of faith and community.</p>
                
                <p>Eid-ul-Adha commemorates Prophet Ibrahim's willingness to sacrifice his son, celebrating with animal sacrifice (qurbani) and meat distribution among family, friends, and poor. The festival emphasizes charity, sharing, and community solidarity. West Bengal's Eid celebrations reflect syncretic culture—non-Muslims often share in festivities, exchange greetings, and enjoy special foods. The government declares public holidays recognizing Muslim festivals, schools and offices close, and the state's secular character manifests in mutual celebration participation. Markets specializing in Eid preparations, tailors creating traditional outfits, and food vendors preparing special dishes contribute to festive economy. Bengali Muslims' cultural practices incorporate regional traditions alongside Islamic observances creating distinctive celebration styles reflecting Bengal's cultural amalgamation.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Rabindra Jayanti and Nazrul Jayanti</strong></h2>
                <p><strong>Rabindra Jayanti</strong> (May 7) celebrates Rabindranath Tagore's birth anniversary honoring Bengal's most celebrated poet, writer, composer, and philosopher. Schools, colleges, cultural organizations across West Bengal organize programs featuring Rabindra Sangeet concerts, dance performances, theatrical productions, poetry recitations, and discussions about Tagore's literary and philosophical contributions. Shantiniketan, Tagore's university town, becomes pilgrimage site for admirers. The day represents cultural rather than religious observance, celebrating Bengali intellectual heritage and artistic excellence. Tagore's compositions become national anthems for India and Bangladesh, making him uniquely significant figure in South Asian cultural history.</p>
                
                <p><strong>Nazrul Jayanti</strong> (May 24) honors Kazi Nazrul Islam, the "Rebel Poet" of Bengal whose revolutionary poetry, songs, and writings inspired independence movements. Though less universally celebrated than Rabindra Jayanti, Nazrul's birthday holds importance particularly in Muslim Bengali communities and among those appreciating his secular, revolutionary ideology. Cultural programs feature Nazrul geeti (Nazrul's songs), poetry readings, and scholarly discussions. Both celebrations reflect West Bengal's rich literary tradition and its reverence for poets and writers as cultural icons. These observances demonstrate how Bengal celebrates intellectual and artistic achievement alongside religious festivals, emphasizing knowledge, creativity, and cultural production as values worthy of collective celebration.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>National Holidays in West Bengal</strong></h2>
                <p>West Bengal observes <strong>national holidays</strong> including Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2). Republic Day commemorates India's Constitution adoption with flag hoisting ceremonies, parades, cultural programs, and patriotic activities in schools, government offices, and public spaces. Kolkata's Red Road hosts grand parade similar to Delhi's Rajpath celebrations showcasing Bengal's cultural heritage, military strength, and children's performances. Independence Day marks India's freedom from British rule with similar ceremonies emphasizing national pride, freedom struggle memories, and constitutional values.</p>
                
                <p>Gandhi Jayanti honors Mahatma Gandhi's birthday celebrating his philosophy of non-violence, truth, and social service. Schools organize cleanliness drives, discussions about Gandhi's teachings, and prayer meetings. These national holidays transcend regional identities creating moments of pan-Indian unity while West Bengal adds local flavor through Bengali cultural elements in celebrations. Government offices, banks, schools remain closed making these holidays periods for family time, recreation, and reflection on national values. The observances blend patriotic fervor with cultural celebrations reflecting West Bengal's integration into Indian national fabric while maintaining distinctive Bengali identity within broader national context.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Christmas and Christian Festivals</strong></h2>
                <p><strong>Christmas</strong> (December 25) receives enthusiastic celebration in West Bengal particularly in Kolkata with significant Christian population concentrated in areas like Bow Barracks, Park Street, and Tangra. Park Street transforms into dazzling display with illuminated decorations, Christmas trees, and festive atmosphere attracting crowds regardless of religious background. Churches hold midnight masses, carol singing, nativity plays, and special services. Plum cakes, traditional fruit cakes prepared months in advance, become seasonal delicacy shared across communities. Christmas celebrations exemplify West Bengal's pluralistic culture where festivals become occasions for cross-community participation and shared joy.</p>
                
                <p>Good Friday, Easter, and other Christian observances receive respect and recognition. Schools and offices in areas with Christian concentrations often declare local holidays. The celebrations showcase Bengal's historical Christian presence dating to colonial times while modern celebrations reflect contemporary multicultural society. Non-Christians participate in Christmas festivities enjoying decorations, special foods, and celebratory atmosphere. Bengali Christians contribute distinctively to state's cultural mosaic through churches' architectural heritage, musical traditions, educational institutions, and social service organizations. Their festivals add diversity to West Bengal's calendar demonstrating how multiple religious traditions coexist enriching collective cultural experience.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Buddha Purnima and Buddhist Heritage</strong></h2>
                <p><strong>Buddha Purnima</strong> celebrates Lord Buddha's birth, enlightenment, and death (parinirvana) on the full moon day of Vaisakh (April/May). Though Buddhist population in West Bengal is small, the festival receives recognition reflecting historical Buddhist heritage and secular respect for all religions. Buddhist temples and monasteries organize special prayers, meditation sessions, and cultural programs. Bodh Gaya in nearby Bihar attracts Bengali pilgrims during this period. The festival emphasizes Buddha's teachings of compassion, non-violence, and the middle path. Schools often organize lessons about Buddha's philosophy fostering religious tolerance and peace.</p>
                
                <p>West Bengal's Buddhist heritage includes ancient sites, monasteries in Darjeeling hills where Tibetan Buddhist communities reside, and historical connections to Buddhism's golden age in ancient Bengal. Modern celebrations connect present-day Bengal to this historical legacy. The government recognition through public holiday status demonstrates secular commitment to honoring all religious traditions. Buddha Purnima observances typically involve simple, peaceful celebrations reflecting Buddhist values—contrasting with more elaborate celebrations of other festivals but equally significant in multicultural calendar recognizing diverse religious paths and philosophical traditions contributing to India's spiritual heritage and West Bengal's pluralistic identity.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Janmashtami: Krishna's Birthday</strong></h2>
                <p><strong>Janmashtami</strong> (August/September) celebrates Lord Krishna's birth with midnight rituals, temple decorations, cultural programs, and devotional singing. Bengal's Vaishnavite tradition gives Janmashtami special significance with temples in Nabadwip, Mayapur, and across Bengal organizing elaborate celebrations. Devotees fast until midnight when Krishna's birth is celebrated with arati (ritual worship), rocking of cradle symbolizing baby Krishna, and distribution of prasad. Cultural programs feature Krishna leelas (plays depicting Krishna's life), dance performances, and devotional singing. Children dress as Krishna and Radha participating in fancy dress competitions and tableaux.</p>
                
                <p>ISKCON temples (International Society for Krishna Consciousness) in Kolkata and Mayapur become celebration hubs attracting devotees from across India and abroad. The festival emphasizes bhakti (devotion) with singing, dancing, and sharing stories about Krishna's playful childhood, divine love, and philosophical teachings from Bhagavad Gita. Traditional foods including curd, butter, sweets (Krishna's favorites) feature prominently. Janmashtami blends religious devotion with cultural celebration showcasing Bengal's Vaishnavite heritage dating to Chaitanya Mahaprabhu's 15th-century bhakti movement that profoundly influenced Bengali religious and cultural life. The festival demonstrates how ancient traditions remain vibrant in contemporary Bengal through continued devotional practices and cultural transmissions across generations.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Holi: Festival of Colors</strong></h2>
                <p>Though traditionally less prominent in West Bengal compared to northern India, <strong>Holi</strong> (March) receives increasing celebration particularly in cosmopolitan Kolkata and among Bengali youth embracing pan-Indian cultural practices. Basanta Utsav, Shantiniketan's spring festival organized on Holi's eve, showcases Bengali adaptation incorporating Tagore's vision of cultural celebration through music, dance, and symbolic color play. The festival marks winter's end and spring's arrival celebrating renewal, forgiveness, and social bonding. Color throwing, water play, special foods like gujiya, and social gatherings characterize celebrations.</p>
                
                <p>West Bengal's Holi celebrations often emphasize music and culture over traditional religious rituals, reflecting regional preferences. Dol Jatra or Dol Purnima celebrated simultaneously holds more traditional significance for Bengali Hindus, involving processions with Krishna and Radha idols, devotional singing, and abir (colored powder) playing. Urban youth increasingly celebrate Holi with private parties, community events, and commercial celebrations while rural areas maintain traditional Dol Jatra observances. The festival demonstrates cultural evolution—traditional practices coexisting with modern celebrations, pan-Indian influences blending with regional traditions, and younger generations creating contemporary celebration styles while maintaining connections to cultural heritage through adapted festivities reflecting changing social dynamics.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Lakshmi Puja and Kojagari Lokkhi Puja</strong></h2>
                <p><strong>Lakshmi Puja</strong> worships Goddess Lakshmi, deity of wealth and prosperity, celebrated particularly on Kojagari Purnima (full moon in October/November). Bengali households, especially those engaged in business, organize elaborate pujas seeking financial prosperity and well-being. Homes are cleaned, decorated with alpana (rice paste designs), and illuminated. Evening puja involves offering fruits, flowers, sweets, and coins to Goddess Lakshmi. The festival emphasizes cleanliness (Lakshmi favors clean homes), prosperity consciousness, and gratitude for material blessings. Kheer (rice pudding) prepared specially is offered as bhog and shared among family members.</p>
                
                <p>Kojagari tradition involves staying awake through the night as Goddess Lakshmi is believed to visit homes blessing those who remain awake. Families spend nights in devotional activities, singing, storytelling, and preparing special foods. The festival has commercial significance—businesses seek blessings for financial success, account books receive ritual worship, and merchants distribute sweets to customers strengthening business relationships. Lakshmi Puja reflects Bengali society's pragmatic approach balancing spiritual aspirations with material concerns, recognizing wealth's importance in dharmic context while emphasizing responsible, ethical wealth creation and sharing. The celebration demonstrates how religious practices integrate with economic activities creating comprehensive worldview addressing both spiritual and material aspects of life.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Muharram Observances</strong></h2>
                <p><strong>Muharram</strong> marks the Islamic New Year with the tenth day (Ashura) commemorating the martyrdom of Imam Hussain at Karbala. West Bengal's Shia Muslim community observes Muharram with solemn processions, majlis (religious gatherings), and mourning rituals. Tazia processions carrying replicas of Imam Hussain's tomb wind through streets accompanied by matam (chest-beating) and marsiya (elegiac poetry) expressing grief and devotion. Imambaras (Shia community centers) become focus points for gatherings where scholars recount Karbala events emphasizing sacrifice, justice, and standing against tyranny.</p>
                
                <p>While primarily Shia observance, West Bengal's syncretic culture means Sunni Muslims and even non-Muslims sometimes participate showing respect and solidarity. The processions showcase elaborate tazias reflecting artisanal skills and community devotion. Distribution of sherbet, water, and food to procession participants and observers embodies remembering Karbala tragedy where Imam Hussain's family faced water deprivation. Government provides security ensuring peaceful observances. Muharram demonstrates religious solemnity contrasting with celebratory festivals, showing diversity in religious expression within Bengal's cultural calendar. The observances emphasize moral lessons—resistance against oppression, sacrifice for principles, and unwavering faith—resonating beyond religious boundaries as universal ethical values relevant to contemporary society.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Chhath Puja and Migrant Communities</strong></h2>
                <p><strong>Chhath Puja</strong> traditionally associated with Bihar and eastern Uttar Pradesh has become significant in West Bengal due to large migrant populations from these regions working in Kolkata and industrial towns. The four-day festival worshiping Sun God involves rigorous fasting, holy bathing, and offering arghya (water offering) to setting and rising sun standing in water bodies. Riverbanks, tanks, and ponds become temporary ghats where devotees gather performing rituals. The festival showcases dedication with devotees fasting without water for extended periods demonstrating extraordinary devotion and physical endurance.</p>
                
                <p>West Bengal government and local authorities facilitate Chhath celebrations providing infrastructure, cleaning water bodies, ensuring safety, and organizing community spaces. The festival reflects West Bengal's absorption of migrants maintaining cultural identities while contributing to state's economy and cultural diversity. Bengali communities increasingly participate learning about Chhath traditions and joining celebrations demonstrating cultural exchange and respect. The festival highlights migration's cultural dimensions—people carrying traditions to new homes, adapting to local contexts while preserving heritage, and enriching destination communities through cultural diversity. Chhath's growing prominence in Bengal demonstrates pluralistic society's capacity to accommodate diverse practices creating inclusive cultural landscape where multiple traditions coexist and mutually influence each other.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Vishwakarma Puja: Worship of Architect God</strong></h2>
                <p><strong>Vishwakarma Puja</strong> (September) honors Lord Vishwakarma, divine architect and craftsman, celebrated particularly in factories, workshops, industrial establishments, and among artisans, mechanics, and technical workers. Machines, tools, vehicles, and equipment receive ritual worship seeking blessings for safety, productivity, and prosperity. The festival holds special significance in industrial Bengal with numerous factories, engineering units, and workshops organizing collective pujas. Workers often get half-day holidays, machinery stops for rituals, and prasad is distributed among workers fostering community spirit.</p>
                
                <p>Vishwakarma Puja reflects working-class spirituality—recognizing divine presence in labor, tools, and productive activities. The festival creates moments for industrial communities to celebrate collectively transcending hierarchies as management and workers participate together. Kite flying becomes traditional activity with skies filling with colorful kites symbolizing aspirations soaring high. Engineering colleges, technical institutions, and automobile workshops organize elaborate celebrations. The puja demonstrates how religious practices adapt to modern industrial contexts—ancient deity worship integrating with contemporary economic activities. It acknowledges technology and craftsmanship as divine gifts worthy of reverence while providing occasions for workers' rest and community building within industrial settings often characterized by routine and hierarchy.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Planning Around West Bengal Holidays</strong></h2>
                <p><strong>Strategic planning</strong> around holidays proves essential for businesses, tourists, and residents. Government offices, banks, schools follow official holiday calendars though businesses may have different schedules. Festival times see increased travel, hotel bookings, transportation demand requiring advance reservations. Businesses plan inventory, staffing, marketing around major festivals when consumer spending peaks. Educational institutions schedule exams and academic calendars considering festival interruptions. Healthcare services ensure emergency coverage during holidays when regular facilities may close.</p>
                
                <p>Tourists visiting during major festivals like Durga Puja experience cultural richness but face crowded venues, higher prices, fully-booked accommodations. Off-season visitors avoid crowds but miss festival atmospheres. Understanding holiday patterns helps optimize visit timing based on preferences. Residents plan vacations, family events, and personal commitments around public holidays. The calendar influences economic rhythms with retail, hospitality, transportation sectors experiencing seasonal fluctuations. Entertainment, cultural events, and social activities cluster around holidays creating vibrant periods followed by quieter intervals. Effective planning around holidays enhances experiences—whether attending festivals, avoiding crowds, optimizing business opportunities, or coordinating social and family obligations around predictable annual rhythms of West Bengal's cultural calendar.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Economic Impact of Festivals</strong></h2>
                <p>West Bengal's festivals generate significant <strong>economic activity</strong> across multiple sectors. Durga Puja alone generates thousands of crores in economic activity through pandal construction, idol making, decoration, lighting, cultural programs, food stalls, clothing sales, transportation, and hospitality. Artisans, craftsmen, decorators, electricians, caterers, performers earn substantial portions of annual income during festival season. Retail sectors experience sales spikes as new clothes, gifts, festival supplies see heightened demand. Real estate, event management, advertising, media industries benefit from festival-related activities.</p>
                
                <p>Tourism increases during major festivals bringing revenue to hotels, restaurants, transportation services, and local businesses. Employment generation through temporary festival-related work provides livelihood to thousands. Festival financing through sponsorships, community contributions, and government support creates complex economic ecosystems. However, environmental costs—waste generation, pollution, resource consumption—raise sustainability concerns prompting green festival initiatives. Economic benefits must balance with environmental responsibility through waste management, eco-friendly materials, noise control, and sustainable practices. Understanding festival economics reveals their role beyond cultural and spiritual significance as major contributors to state's economy, employment generation, and entrepreneurial opportunities while highlighting need for responsible management ensuring economic benefits don't compromise environmental and social well-being.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Safety and Security During Festivals</strong></h2>
                <p>Large <strong>festival gatherings</strong> require comprehensive safety arrangements preventing accidents, managing crowds, ensuring public order. Police deployment increases during major festivals with special traffic arrangements, crowd control measures, and emergency response preparations. Fire safety receives attention particularly during Kali Puja and Diwali when firecracker use heightens fire risks. Electrical safety in pandals with extensive lighting requires strict regulation and inspection. Medical facilities maintain emergency readiness handling injuries, health emergencies, and accident victims.</p>
                
                <p>Women's safety receives special focus with increased police presence, women help desks, and awareness campaigns against harassment. Lost-and-found centers help reunite separated family members in crowded venues. Food safety inspections ensure vendors meet hygiene standards preventing foodborne illnesses. Terrorism and security concerns necessitate vigilance with intelligence gathering, suspicious activity monitoring, and quick response capabilities. Public awareness campaigns educate citizens about safety precautions, emergency contacts, and responsible behavior. Despite challenges, West Bengal generally manages festival security effectively enabling millions to celebrate safely. Coordination between police, civic authorities, festival organizers, and communities creates security networks balancing festive freedom with safety imperatives. Effective security management remains ongoing challenge requiring continuous adaptation to evolving risks, growing crowd sizes, and changing security environments.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Environmental Concerns and Eco-Friendly Celebrations</strong></h2>
                <p><strong>Environmental sustainability</strong> emerges as critical concern with festivals generating massive waste, pollution, and ecological impacts. Idol immersion pollutes water bodies through non-biodegradable materials, toxic paints, and chemical decorations. Firecracker use during Diwali and Kali Puja creates air and noise pollution exacerbating respiratory problems and disturbing wildlife. Single-use plastics, festival decorations, and food waste overwhelm waste management systems. Electricity consumption for lighting creates carbon footprints while loudspeakers cause noise pollution affecting residents and animals.</p>
                
                <p>Growing awareness drives eco-friendly initiatives—biodegradable clay idols, natural dyes, artificial immersion tanks, green crackers, LED lighting, waste segregation, plastic-free celebrations, and reusable decorations. Environmental campaigns educate communities about sustainable practices. Some pandals adopt eco-themes highlighting environmental issues. Government regulations restrict firecrackers, mandate artificial immersion facilities, and promote green festivals. However, implementing changes faces resistance from traditions, commercial interests, and behavioral inertia. Balancing cultural practices with environmental responsibility requires gradual change, awareness building, accessible alternatives, and collective commitment. The challenge represents broader sustainability dilemma—maintaining cultural heritage while adapting to ecological realities ensuring festivals remain joyous celebrations rather than environmental disasters. Progress depends on individual choices, community initiatives, government policies, and cultural evolution prioritizing both tradition and planet.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Digital Transformation of Festival Celebrations</strong></h2>
                <p><strong>Technology increasingly shapes</strong> festival experiences and management in West Bengal. Social media platforms enable sharing festival experiences, pandal photos, cultural performances reaching global audiences and connecting diaspora Bengalis to home celebrations. Festival apps provide pandal guides, routes, reviews, and navigation helping visitors optimize pandal-hopping experiences. Online streaming allows remote participation in cultural programs, pujas, and celebrations. Digital payments facilitate donations, purchases, and transactions reducing cash handling. Virtual reality and augmented reality create immersive festival experiences and innovative pandal presentations.</p>
                
                <p>Online shopping changes festival preparation with e-commerce platforms delivering clothes, decorations, gifts, and festival supplies. Digital marketing transforms festival sponsorships and advertisements. However, digital transformation raises concerns about authentic experiences versus curated social media performances, privacy issues from constant photography and sharing, and digital divides excluding less tech-savvy populations. Balancing technology benefits with preserving festival authenticity, interpersonal connections, and inclusive participation requires thoughtful integration. Technology should enhance rather than replace genuine community bonding, spiritual experiences, and cultural transmissions making festivals meaningful beyond spectacle and performance. The digital transformation continues evolving as new technologies emerge, younger generations adopt digital-first approaches, and traditional practices adapt to contemporary digital landscape reshaping how festivals are experienced, shared, and remembered.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Future of West Bengal's Festival Calendar</strong></h2>
                <p>West Bengal's <strong>festival landscape continues evolving</strong> influenced by globalization, urbanization, environmental consciousness, and generational changes. Traditional festivals adapt to contemporary contexts—Durga Puja incorporates modern themes, fusion music, contemporary art while maintaining religious core. New celebrations emerge as migrant communities bring traditions like Chhath Puja. Environmental movements promote sustainable practices gradually shifting festival ecologies. Commercialization increases with corporate sponsorships, branded festivals, and economic motivations sometimes overshadowing spiritual and community aspects.</p>
                
                <p>Younger generations reinterpret traditions creating contemporary expression forms while maintaining cultural connections. Diaspora Bengalis celebrate festivals abroad adapting to new contexts, spreading Bengali culture internationally. Government policies balancing religious freedom, public order, environmental protection, and cultural preservation continue shaping festival landscapes. Economic development affects festival patterns—prosperity enables more elaborate celebrations but urbanization may erode traditional community bonds. Climate change impacts timing, agriculture-linked festivals, and outdoor celebrations. The future likely involves hybrid models—maintaining essential traditional elements while adapting expressions, incorporating sustainability, leveraging technology, and evolving social meanings. West Bengal's festivals will continue reflecting society's values, challenges, aspirations ensuring these cultural celebrations remain vibrant, relevant, and meaningful across generations while honoring heritage that makes Bengal unique.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Enhanced Frequently Asked Questions</strong></h2>
                
                <div class="space-y-4 mt-6">
                    <div class="border-l-4 border-red-500 pl-6">
                        <p class="font-bold text-gray-800">21. How many public holidays does West Bengal have in 2026?</p>
                        <p class="text-gray-600">West Bengal observes approximately 20-25 public holidays annually including national holidays, major religious festivals (Durga Puja, Eid, Diwali), state-specific observances, and restricted holidays.</p>
                    </div>

                    <div class="border-l-4 border-blue-500 pl-6">
                        <p class="font-bold text-gray-800">22. Are banks open during Durga Puja?</p>
                        <p class="text-gray-600">Banks remain closed during Durga Puja holidays (usually 4-5 days including weekends). Essential banking services may be available through ATMs and digital platforms.</p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <p class="font-bold text-gray-800">23. What is the economic impact of Durga Puja?</p>
                        <p class="text-gray-600">Durga Puja generates economic activity worth thousands of crores, benefiting artisans, retailers, hospitality, transportation, and numerous other sectors across West Bengal.</p>
                    </div>

                    <div class="border-l-4 border-purple-500 pl-6">
                        <p class="font-bold text-gray-800">24. How can tourists best experience West Bengal festivals?</p>
                        <p class="text-gray-600">Plan visits during major festivals like Durga Puja, book accommodations early, respect local customs, hire guides for authentic experiences, and explore both popular and neighborhood celebrations.</p>
                    </div>

                    <div class="border-l-4 border-orange-500 pl-6">
                        <p class="font-bold text-gray-800">25. Do school and college exams avoid festival dates?</p>
                        <p class="text-gray-600">Educational institutions typically schedule examinations avoiding major festival periods. However, minor festivals and restricted holidays may not affect exam schedules.</p>
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
            const content = `West Bengal Holidays 2026
`;
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'west-bengal-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'West Bengal Holidays 2026',
                    text: 'Check out the West Bengal holiday calendar for 2026!',
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
            const holidayItems = document.querySelectorAll('.bg-green-100'); // Changed to green for WB
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