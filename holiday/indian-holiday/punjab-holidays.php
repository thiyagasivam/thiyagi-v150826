<?php include '../../header.php'; ?>
    <title>Punjab Holidays 2026 | Complete Calendar | Punjabi Festivals | National Holidays</title>
    <meta name="description" content="Complete Punjab Holiday Calendar 2026. Find all Punjabi festivals, national holidays, cultural events, and religious celebrations. Plan your year with our comprehensive holiday guide.">
    <meta name="keywords" content="Punjab holidays 2026, Punjabi festivals, Baisakhi, Lohri, national holidays India, Punjabi cultural events, Punjab calendar, holidays Punjab, festival dates 2026">
    <meta name="author" content="Punjab Holiday Calendar">
        <meta property="og:title" content="Punjab Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Punjab Holiday Calendar 2026 with all festivals, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/FFD700/000000?text=Punjab+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Punjab Holidays 2026">
    <meta name="twitter:description" content="Complete Punjab Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English, Punjabi">
    <meta name="geo.region" content="IN-PB">
    <meta name="geo.placename" content="Punjab, India">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Punjab Holidays 2026",
        "description": "Complete Punjab Holiday Calendar 2026 with all festivals, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main Punjabi festivals in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The main Punjabi festivals in 2026 include Lohri (January 13), Maghi (January 14), Baisakhi (April 14), and Guru Nanak Jayanti (November 5)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How many national holidays are there in Punjab 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "There are several national holidays in Punjab 2026 including Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Baisakhi and why is it important?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Baisakhi, celebrated on April 14, 2026, is one of the most important festivals in Punjab. It marks the Sikh New Year and commemorates the formation of the Khalsa Panth by Guru Gobind Singh in 1699. It's also a harvest festival."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is Independence Day celebrated in Punjab?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Independence Day (August 15, 2026) is celebrated with great patriotic fervor across Punjab. The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied by cultural programs and parades."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are there any special holidays specific to Punjab in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Punjab has several state-specific holidays and festivals. Baisakhi (April 14) and Parkash Utsav (Guru Nanak Jayanti, November 5) are major celebrations unique to the state and are observed as state holidays."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Punjab Holiday Calendar"
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
                        'pb-gold': '#FFD700', // Gold
                        'pb-blue': '#000080', // Navy Blue
                        'pb-green': '#228B22', // Forest Green
                        'pb-orange': '#FF8C00' // Dark Orange
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Punjab Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of the new year',
            'icon' => 'fa-calendar-day',
            'bank_holiday' => true
        ],
        '2026-01-13' => [
            'name' => 'Lohri',
            'type' => 'Punjabi Festival',
            'description' => 'Harvest festival marking the end of winter',
            'icon' => 'fa-fire',
            'bank_holiday' => true
        ],
        '2026-01-14' => [
            'name' => 'Maghi',
            'type' => 'Punjabi Festival',
            'description' => 'Commemorates the martyrdom of the Chali Mukte',
            'icon' => 'fa-fire-burner',
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
        '2026-03-21' => [
            'name' => 'Holi',
            'type' => 'Hindu Festival',
            'description' => 'Festival of colors',
            'icon' => 'fa-spray-can-sparkles',
            'bank_holiday' => true
        ],
        '2026-04-02' => [
            'name' => 'Good Friday',
            'type' => 'Christian Holiday',
            'description' => 'Crucifixion of Jesus Christ',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Baisakhi / Vaisakhi',
            'type' => 'Punjabi Festival',
            'description' => 'Sikh New Year and harvest festival',
            'icon' => 'fa-spa',
            'bank_holiday' => true
        ],
        '2026-05-01' => [
            'name' => 'Labour Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'bank_holiday' => true
        ],
        '2026-06-17' => [
            'name' => 'Bakrid/Eid al-Adha',
            'type' => 'Muslim Holiday',
            'description' => 'Festival of Sacrifice',
            'icon' => 'fa-moon',
            'bank_holiday' => true
        ],
        '2026-07-17' => [
            'name' => 'Muharram',
            'type' => 'Muslim Holiday',
            'description' => 'Islamic New Year - Ashura',
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
        '2026-09-07' => [
            'name' => 'Ganesh Chaturthi',
            'type' => 'Hindu Festival',
            'description' => 'Birth anniversary of Lord Ganesha',
            'icon' => 'fa-elephant',
            'bank_holiday' => true
        ],
        '2026-09-24' => [
            'name' => 'Vijaya Dashami/Dussehra',
            'type' => 'Hindu Festival',
            'description' => 'Victory of Good over Evil',
            'icon' => 'fa-om',
            'bank_holiday' => true
        ],
        '2026-10-02' => [
            'name' => 'Gandhi Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-peace',
            'bank_holiday' => true
        ],
        '2026-10-31' => [
            'name' => 'Diwali',
            'type' => 'Hindu Festival',
            'description' => 'Festival of lights',
            'icon' => 'fa-lightbulb',
            'bank_holiday' => true
        ],
        '2026-11-01' => [
            'name' => 'Diwali Holiday',
            'type' => 'Hindu Festival',
            'description' => 'Second day of Diwali (Bhai Dooj)',
            'icon' => 'fa-lightbulb',
            'bank_holiday' => true
        ],
        '2026-11-05' => [
            'name' => 'Guru Nanak Jayanti',
            'type' => 'Sikh Festival',
            'description' => 'Birth anniversary of Guru Nanak Dev Ji',
            'icon' => 'fa-star-and-crescent',
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
            'type' => 'Christian Holiday',
            'description' => 'Celebration of Jesus Christ\'s birth',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ]
    ];
    // Bank Holidays 2026 - Additional holidays specific to banks (can overlap with main holidays)
    $bank_holidays_2026 = [
        // Many main holidays are also bank holidays. Adding a few more specific ones or regional ones if applicable.
        // Example: Some banks might close for regional/local festivals or specific observances.
        // For this example, we'll add a couple potentially relevant ones or just reiterate key ones.
        '2026-04-14' => [
            'name' => 'Baisakhi (Bank Holiday)',
            'type' => 'Bank Holiday',
            'description' => 'Baisakhi - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-11-05' => [
            'name' => 'Guru Nanak Jayanti (Bank Holiday)',
            'type' => 'Bank Holiday',
            'description' => 'Guru Nanak Jayanti - Banks closed',
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
        '2026-08-26' => [
            'name' => 'Janmashtami',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Lord Krishna',
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
        '2026-11-15' => [
            'name' => 'Guru Tegh Bahadur Martyrdom Day',
            'type' => 'Bank Holiday',
            'description' => 'Martyrdom Day of Guru Tegh Bahadur',
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
    // Merge all holidays, prioritizing main holidays if dates overlap (array_merge will overwrite)
    // Better to merge bank holidays first, then main holidays so main ones take precedence if keys (dates) are the same.
    $all_holidays_2026 = array_merge($bank_holidays_2026, $holidays_2026);

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
    <header class="bg-gradient-to-r from-pb-gold to-pb-blue text-white shadow-lg relative overflow-hidden">
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
                            <span>Punjab Holidays 2026</span>
                            <i class="fas fa-flag text-2xl animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-yellow-200"></i>
                            <span>ਪੰਜਾਬ ਵਿਟੂਮੁੱਰੇ ਦਿਨ</span>
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
                <i class="fas fa-fire text-2xl text-orange-200"></i>
                <i class="fas fa-spa text-2xl text-green-200"></i>
                <i class="fas fa-star text-2xl text-yellow-200"></i>
                <i class="fas fa-heart text-2xl text-red-200"></i>
                <i class="fas fa-star-and-crescent text-2xl text-blue-200"></i>
                <i class="fas fa-elephant text-2xl text-gray-200"></i>
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
                <li><a href="#" class="hover:text-blue-600 transition-colors">Punjab</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Holidays 2026</li>
            </ol>
        </nav>
        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-blue-600"></i>
                    <span>Complete Punjab Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Punjab Holiday Calendar 2026! This detailed guide provides you with all the important dates,
                    festivals, and celebrations throughout the year. Whether you're planning a trip to Punjab, organizing events,
                    or simply want to stay informed about cultural celebrations, our calendar covers everything from traditional Punjabi festivals
                    to national holidays and international observances.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-fire text-2xl text-orange-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Punjabi Festivals</h3>
                        <p class="text-sm text-gray-600">Traditional celebrations like Baisakhi, Lohri, Maghi, and cultural events</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-star text-2xl text-yellow-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Republic Day, Independence Day, and other patriotic celebrations</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-globe text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Religious & International Events</h3>
                        <p class="text-sm text-gray-600">Diwali, Eid, Christmas, Women's Day, Labour Day, and more</p>
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
                                <button onclick="quickSearch('Baisakhi')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-spa text-green-500"></i>
                                    <span>Baisakhi</span>
                                </button>
                                <button onclick="quickSearch('Lohri')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-fire text-orange-500"></i>
                                    <span>Lohri</span>
                                </button>
                                <button onclick="quickSearch('Guru Nanak')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-star-and-crescent text-blue-500"></i>
                                    <span>Guru Nanak Jayanti</span>
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
                            <option value="Punjabi Festival">🌾 Punjabi Festival</option>
                            <option value="Sikh Festival">🪔 Sikh Festival</option>
                            <option value="Hindu Festival">🕉️ Hindu Festival</option>
                            <option value="Muslim Holiday">☪️ Muslim Holiday</option>
                            <option value="Christian Holiday">✝️ Christian Holiday</option>
                            <option value="International">🌍 International</option>
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
                    <span>💡 Search tips: Try searching for "Baisakhi", "Lohri", "Guru Nanak", "National", or specific holiday names</span>
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
                            <i class="fas fa-map-marker-alt text-blue-500"></i>
                            <span>ਪੰਜਾਬੀ ਮਹੀਨਾ: <?php echo $month_names[$current_month]; ?></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-fire text-orange-500"></i>
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
                $punjabi_weekdays = ['ਐਤ.', 'ਸੋਮ.', 'ਮੰਗਲ.', 'ਬੁੱਧ.', 'ਵੀਰ.', 'ਸ਼ੁੱਕਰ.', 'ਸ਼ਨੀ.'];
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-saturn'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
                    echo '<div class="text-xs text-gray-500">' . $punjabi_weekdays[$i] . '</div>';
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
                        if ($is_bank_holiday && $holiday['type'] !== 'Bank Holiday') { // Avoid duplicate icon if type is already Bank Holiday
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
                            <div class="text-3xl font-bold text-green-600"><?php echo count($holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-green-700 font-medium">Total Holidays</div>
                        <div class="text-xs text-green-600 mt-1"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?> Bank Holidays</div>
                        <div class="text-xs text-green-600 mt-1">🎉 Celebrations</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-fire text-orange-600 text-xl"></i>
                            <div class="text-3xl font-bold text-orange-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'Punjabi Festival'; })); ?></div>
                        </div>
                        <div class="text-sm text-orange-700 font-medium">Punjabi Festivals</div>
                        <div class="text-xs text-orange-600 mt-1">🌾 Cultural</div>
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
                            <i class="fas fa-star-and-crescent text-purple-600 text-xl"></i>
                            <div class="text-3xl font-bold text-purple-600"><?php echo count(array_filter($all_holidays_2026, function($h) { return $h['type'] === 'Sikh Festival'; })); ?></div>
                        </div>
                        <div class="text-sm text-purple-700 font-medium">Sikh Festivals</div>
                        <div class="text-xs text-purple-600 mt-1">🪔 Spiritual</div>
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
            <p class="text-gray-600 mb-6">All major banks in Punjab will be closed on these dates. Plan your banking activities accordingly.</p>
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
            <!-- Major Banks in Punjab -->
            <div class="mt-6 p-4 bg-white rounded-lg border border-blue-200">
                <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                    <i class="fas fa-building-columns text-blue-600 mr-2"></i>
                    Major Banks Affected in Punjab
                </h4>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Public Sector Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• State Bank of India (SBI)</li>
                            <li>• Punjab National Bank (PNB)</li>
                            <li>• Bank of Baroda</li>
                            <li>• Punjab & Sind Bank</li>
                            <li>• Central Bank of India</li>
                            <li>• Canara Bank</li>
                            <li>• Union Bank of India</li>
                            <li>• Bank of India</li>
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
                            <li>• IDFC First Bank</li>
                            <li>• Federal Bank</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-medium text-blue-700 text-sm">Regional & Cooperative Banks</h5>
                        <ul class="text-xs text-blue-600 space-y-1">
                            <li>• Punjab State Cooperative Bank</li>
                            <li>• Central Cooperative Bank</li>
                            <li>• District Central Cooperative Banks</li>
                            <li>• Primary Agricultural Credit Societies (PACS)</li>
                            <li>• Local Area Banks</li>
                            <li>• Regional Rural Banks (RRBs)</li>
                            <li>• Foreign Banks (Branches)</li>
                            <li>• Small Finance Banks</li>
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
                            <i class="fas fa-fire text-orange-500"></i>
                            <span>What are the main Punjabi festivals in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main Punjabi festivals in 2026 include <strong>Lohri</strong> (January 13) - a winter harvest festival,
                            <strong>Maghi</strong> (January 14) - commemorating Sikh martyrs,
                            <strong>Baisakhi</strong> (April 14) - the Sikh New Year and harvest festival, and
                            <strong>Guru Nanak Jayanti</strong> (November 5) - celebrating the birth of the first Sikh Guru.
                            These festivals are deeply rooted in Punjabi culture and are celebrated with great enthusiasm.
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-red-500"></i>
                            <span>How many national holidays are there in Punjab 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Punjab observes several national holidays in 2026 including <strong>Republic Day</strong> (January 26),
                            <strong>Independence Day</strong> (August 15), and <strong>Gandhi Jayanti</strong> (October 2).
                            These are official government holidays when banks, schools, and government offices remain closed.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-spa text-green-500"></i>
                            <span>What is Baisakhi and why is it important?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Baisakhi</strong>, celebrated on April 14, 2026, is one of the most important festivals in Punjab.
                            It marks the Sikh New Year and commemorates the formation of the Khalsa Panth by Guru Gobind Singh in 1699.
                            It's also a significant harvest festival, celebrating the arrival of spring and the wheat harvest.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-fire text-orange-500"></i>
                            <span>What is the significance of Lohri?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Lohri</strong> (January 13, 2026) is a popular winter festival, especially in North India, and is
                            particularly significant in Punjab. It celebrates the end of winter and the arrival of longer days.
                            People gather around bonfires, sing folk songs, dance (especially Bhangra and Gidda), and offer prayers
                            for a good harvest. It's also associated with the birth of children and new beginnings.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-heart text-pink-500"></i>
                            <span>Are international holidays like Valentine's Day celebrated in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Valentine's Day</strong> (February 14, 2026) and other international holidays like
                            <strong>International Women's Day</strong> (March 8, 2026) are celebrated in Punjab, especially in
                            urban areas. While these are not official holidays, they are widely observed by younger generations and
                            commercial establishments, reflecting the state's cosmopolitan culture.
                        </p>
                    </div>
                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star-and-crescent text-blue-500"></i>
                            <span>What is Guru Nanak Jayanti?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Guru Nanak Jayanti</strong> (November 5, 2026) celebrates the birth anniversary of Guru Nanak Dev Ji,
                            the founder of Sikhism and the first of the ten Sikh Gurus. It's a major religious festival for Sikhs,
                            marked by prayers, hymn singing (Kirtan), processions (Nagar Kirtan), and community meals (Langar).
                        </p>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hard-hat text-yellow-500"></i>
                            <span>Is Labour Day a public holiday in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Labour Day</strong> (May 1, 2026) is celebrated as <strong>International Workers' Day</strong>
                            in Punjab. It is generally observed as a public holiday, with banks, government offices, and many businesses
                            remaining closed. Trade unions and workers' organizations often organize rallies and events.
                        </p>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-dove text-blue-500"></i>
                            <span>How is Independence Day celebrated in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Independence Day</strong> (August 15, 2026) is celebrated with great patriotic fervor across Punjab.
                            The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied
                            by cultural programs featuring Bhangra and Gidda, patriotic songs, and speeches. The main celebration in
                            Chandigarh (the capital) includes the Chief Minister's address.
                        </p>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-peace text-green-500"></i>
                            <span>What is the significance of Gandhi Jayanti in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Gandhi Jayanti</strong> (October 2, 2026) commemorates the birth anniversary of Mahatma Gandhi,
                            the Father of the Nation. In Punjab, this day is observed with prayer meetings, seminars on Gandhian
                            philosophy, and community service activities. Schools organize special assemblies, and government offices
                            remain closed. The day promotes Gandhian values of non-violence, truth, and simplicity.
                        </p>
                    </div>
                    <!-- FAQ Item 10 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-child text-orange-500"></i>
                            <span>How is Children's Day celebrated in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Children's Day</strong> (November 14, 2026) celebrates the birth anniversary of India's first
                            Prime Minister, Jawaharlal Nehru, who was fondly called "Chacha Nehru" by children. In Punjab, schools
                            organize special programs, cultural activities, and competitions for children. Many schools also distribute
                            sweets and gifts to students, making it a memorable day for children across the state.
                        </p>
                    </div>
                    <!-- FAQ Item 11 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>Is Christmas celebrated in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Christmas</strong> (December 25, 2026) is celebrated in Punjab, especially in areas with
                            Christian populations and in major cities like Chandigarh, Amritsar, and Jalandhar. Churches are beautifully
                            decorated, midnight masses are held, and communities come together for celebrations. The festival promotes
                            communal harmony and is often celebrated by people of all faiths.
                        </p>
                    </div>
                    <!-- FAQ Item 12 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-venus text-pink-500"></i>
                            <span>What is the significance of International Women's Day in Punjab?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>International Women's Day</strong> (March 8, 2026) is celebrated across Punjab to recognize
                            women's achievements and promote gender equality. Various organizations, educational institutions, and
                            government bodies organize seminars, workshops, and cultural programs highlighting women's contributions
                            to society. The day also focuses on women's rights, empowerment, and addressing gender-based challenges.
                        </p>
                    </div>
                    <!-- FAQ Item 13 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-clock text-blue-500"></i>
                            <span>How far in advance should I plan for Punjab festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For major festivals like <strong>Baisakhi</strong> and <strong>Lohri</strong>, it's recommended to
                            plan at least 2-3 months in advance, especially if you're planning to travel to Punjab. These festivals
                            attract many visitors, so accommodations and transportation should be booked early. For smaller celebrations,
                            planning 2-4 weeks ahead is usually sufficient.
                        </p>
                    </div>
                    <!-- FAQ Item 14 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                            <span>Which cities in Punjab are best for experiencing festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Amritsar</strong> (home to the Golden Temple) offers grand Sikh festival celebrations.
                            <strong>Ludhiana</strong> is known for its vibrant Baisakhi and Lohri celebrations.
                            <strong>Chandigarh</strong> (capital city) hosts official state celebrations and diverse cultural events.
                            <strong>Jalandhar</strong> and <strong>Patiala</strong> also have rich traditions and host significant
                            local festivals. Each city offers unique experiences.
                        </p>
                    </div>
                    <!-- FAQ Item 15 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-check text-green-500"></i>
                            <span>Are there any special holidays specific to Punjab in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, Punjab has several state-specific holidays and festivals. <strong>Baisakhi</strong> (April 14) and
                            <strong>Guru Nanak Jayanti</strong> (November 5) are major celebrations unique to Punjab and are observed
                            as state holidays. The state government may also declare additional holidays for local events or specific
                            observances.
                        </p>
                    </div>
                    <!-- FAQ Item 16 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-utensils text-orange-500"></i>
                            <span>What traditional foods are associated with Punjab festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Punjab festivals feature a variety of delicious foods. <strong>Lohri</strong> is celebrated with
                            sesame seeds (til), jaggery (gur), peanuts, and popcorn offered to the fire, followed by festive meals
                            like sarson da saag and makki di roti. <strong>Baisakhi</strong> includes special sweets like kheer and
                            preparations like chole bhature. <strong>Karva Chauth</strong> involves fasting and special foods.
                            Most festivals include generous servings of dairy products, breads, and sweets like laddu and jalebi.
                        </p>
                    </div>
                    <!-- FAQ Item 17 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-music text-purple-500"></i>
                            <span>What cultural activities are organized during Punjab festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Punjab festivals are known for their vibrant cultural activities including energetic folk dances like
                            <strong>Bhangra</strong> (men) and <strong>Gidda</strong> (women), traditional music (dhol, algoza),
                            poetry recitations (especially of Waris Shah's Heer), and cultural competitions. <strong>Baisakhi</strong>
                            features Nagar Kirtan processions. Many festivals also include fairs (melas), traditional games,
                            and craft demonstrations.
                        </p>
                    </div>
                    <!-- FAQ Item 18 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-bus text-blue-500"></i>
                            <span>How can tourists participate in Punjab festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Tourists can participate in Punjab festivals by attending public celebrations, visiting gurdwaras,
                            temples, or churches during festival times, and joining community events like Nagar Kirtan or Lohri
                            gatherings. Many hotels and tour operators offer special festival packages. It's recommended to dress
                            modestly (especially in religious places), respect local customs, and participate in cultural activities.
                            Learning basic Punjabi greetings and festival customs can enhance the experience significantly.
                        </p>
                    </div>
                    <!-- FAQ Item 19 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-camera text-green-500"></i>
                            <span>Are photography and videography allowed during festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Photography and videography are generally allowed during most Punjab festivals, but it's important to
                            respect local customs and seek permission when necessary, especially in religious places or when filming
                            individuals. Some areas within gurdwaras or during specific rituals may have restrictions. It's polite to
                            ask before taking photos of people. Many festivals offer excellent opportunities for cultural photography.
                        </p>
                    </div>
                    <!-- FAQ Item 20 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-blue-500"></i>
                            <span>Where can I get more information about specific festival dates and events?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For detailed information about Punjab festivals, you can visit the official Punjab Tourism website,
                            contact local tourism offices, or check with local gurdwaras, temples, and cultural organizations.
                            This calendar provides the main dates, but specific event schedules may vary by location. Local newspapers
                            and cultural magazines also publish detailed festival calendars and event information throughout the year.
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
            const content = `Punjab Holidays 2026
`;
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'punjab-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Punjab Holidays 2026',
                    text: 'Check out the Punjab holiday calendar for 2026!',
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
            const holidayItems = document.querySelectorAll('.bg-red-100');
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