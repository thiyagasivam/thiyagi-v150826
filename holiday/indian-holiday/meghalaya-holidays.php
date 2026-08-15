<?php include '../../header.php'; ?>
    <title>Meghalaya Holidays 2026 | Complete Calendar | Festivals | National Holidays</title>
    <meta name="description" content="Complete Meghalaya Holiday Calendar 2026. Find all major festivals like Wangala, Behdienkhlam, national holidays, cultural events, and religious celebrations in Meghalaya. Plan your year with our comprehensive guide.">
    <meta name="keywords" content="Meghalaya holidays 2026, Meghalaya festivals, Wangala, Behdienkhlam, national holidays India, cultural events Meghalaya, Meghalaya calendar, holidays Meghalaya, festival dates 2026">
    <meta name="author" content="Meghalaya Holiday Calendar">
        <meta property="og:title" content="Meghalaya Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Meghalaya Holiday Calendar 2026 with all festivals, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/228B22/FFFFFF?text=Meghalaya+Holidays+2026"> <!-- Forest Green -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Meghalaya Holidays 2026">
    <meta name="twitter:description" content="Complete Meghalaya Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-ML">
    <meta name="geo.placename" content="Meghalaya, India">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Meghalaya Holidays 2026",
        "description": "Complete Meghalaya Holiday Calendar 2026 with all festivals, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main festivals in Meghalaya in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The main festivals in Meghalaya in 2026 include Wangala (November 10), Behdienkhlam (July 12-14), and Shad Suk Mynsiem (April 14-16)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How many national holidays are there in Meghalaya 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "There are several national holidays in Meghalaya 2026 including Republic Day (January 26), Independence Day (August 15), and Gandhi Jayanti (October 2)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Wangala and why is it important?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Wangala, also known as the Hundred Drums Festival, is the most important post-harvest festival of the Garo tribe, usually held in November. It's a thanksgiving celebration for a successful harvest, featuring traditional dances, music, and elaborate costumes."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How is Independence Day celebrated in Meghalaya?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Independence Day (August 15, 2026) is celebrated with great patriotic fervor in Meghalaya. The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied by cultural programs showcasing the state's diverse heritage."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are there any special holidays specific to Meghalaya in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Meghalaya has several state-specific holidays and festivals. Wangala, Behdienkhlam, and Shad Suk Mynsiem are unique to Meghalaya and are celebrated as state holidays or widely observed events."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Meghalaya Holiday Calendar"
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
                        'ml-green': '#228B22', // Forest Green (Main)
                        'ml-teal': '#008080',   // Teal (Tribal Heritage)
                        'ml-blue': '#1E90FF',  // Dodger Blue (Sky)
                        'ml-orange': '#FF8C00' // Dark Orange (Sunset)
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-green-50 to-teal-100 min-h-screen">
    <?php
    // Meghalaya Holidays 2026 Data
    // Note: Festival dates are based on typical timing and may vary slightly year to year.
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of the new year',
            'icon' => 'fa-calendar-day',
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
        '2026-03-29' => [ // Holi - Approximate date
            'name' => 'Holi',
            'type' => 'Religious',
            'description' => 'Festival of colors',
            'icon' => 'fa-spray-can-sparkles',
            'bank_holiday' => false
        ],
        '2026-04-05' => [ // Good Friday - Approximate date
            'name' => 'Good Friday',
            'type' => 'Religious',
            'description' => 'Christian religious holiday',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Shad Suk Mynsiem (3-day)',
            'type' => 'Khasi Festival',
            'description' => 'Khasi Spring Festival - Dance of the blessed',
            'icon' => 'fa-seedling',
            'bank_holiday' => true
        ],
        '2026-04-15' => [
            'name' => 'Shad Suk Mynsiem (3-day)',
            'type' => 'Khasi Festival',
            'description' => 'Khasi Spring Festival - Dance of the blessed',
            'icon' => 'fa-seedling',
            'bank_holiday' => true
        ],
        '2026-04-16' => [
            'name' => 'Shad Suk Mynsiem (3-day)',
            'type' => 'Khasi Festival',
            'description' => 'Khasi Spring Festival - Dance of the blessed',
            'icon' => 'fa-seedling',
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
        '2026-07-12' => [ // Behdienkhlam Day 1 - Approximate date
            'name' => 'Behdienkhlam (Day 1)',
            'type' => 'Jaintia Festival',
            'description' => 'Jaintia monsoon festival - Driving away evil spirits',
            'icon' => 'fa-cloud-rain',
            'bank_holiday' => true
        ],
        '2026-07-13' => [ // Behdienkhlam Day 2 - Approximate date
            'name' => 'Behdienkhlam (Day 2)',
            'type' => 'Jaintia Festival',
            'description' => 'Jaintia monsoon festival - Driving away evil spirits',
            'icon' => 'fa-cloud-rain',
            'bank_holiday' => true
        ],
        '2026-07-14' => [ // Behdienkhlam Day 3 - Approximate date
            'name' => 'Behdienkhlam (Day 3)',
            'type' => 'Jaintia Festival',
            'description' => 'Jaintia monsoon festival - Driving away evil spirits',
            'icon' => 'fa-cloud-rain',
            'bank_holiday' => true
        ],
        '2026-08-15' => [
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Indian Independence Day',
            'icon' => 'fa-dove',
            'bank_holiday' => true
        ],
        '2026-09-07' => [ // Ganesh Chaturthi - Approximate date
            'name' => 'Ganesh Chaturthi',
            'type' => 'Religious',
            'description' => 'Birth anniversary of Lord Ganesha',
            'icon' => 'fa-gem',
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
        '2026-11-10' => [ // Wangala - Approximate date (Typically 2nd week of Nov)
            'name' => 'Wangala Festival',
            'type' => 'Garo Festival',
            'description' => 'Garo post-harvest festival - Hundred Drums Festival',
            'icon' => 'fa-drum',
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
        '2026-01-25' => [
            'name' => 'Republic Day Eve',
            'type' => 'Bank Holiday',
            'description' => 'Day before Republic Day - Banks may close early',
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
        '2026-04-13' => [ // Shad Suk Mynsiem Eve
            'name' => 'Shad Suk Mynsiem Eve',
            'type' => 'Bank Holiday',
            'description' => 'Day before Shad Suk Mynsiem - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-06-17' => [ // Bakrid/Eid al-Adha - Approximate date
            'name' => 'Bakrid/Eid al-Adha',
            'type' => 'Bank Holiday',
            'description' => 'Islamic festival - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-07-17' => [ // Muharram - Approximate date
            'name' => 'Muharram',
            'type' => 'Bank Holiday',
            'description' => 'Islamic New Year - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-08-26' => [ // Janmashtami - Approximate date
            'name' => 'Janmashtami',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Lord Krishna',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-09-24' => [ // Vijaya Dashami/Dussehra - Approximate date
            'name' => 'Vijaya Dashami/Dussehra',
            'type' => 'Bank Holiday',
            'description' => 'Tenth day of Navratri - Banks closed',
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
        '2026-11-09' => [ // Wangala Eve
            'name' => 'Wangala Eve',
            'type' => 'Bank Holiday',
            'description' => 'Day before Wangala Festival - Banks closed',
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
    <header class="bg-gradient-to-r from-ml-green to-ml-teal text-white shadow-lg relative overflow-hidden">
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
                            <span>Meghalaya Holidays 2026</span>
                            <i class="fas fa-mountain text-2xl animate-bounce"></i> <!-- Mountain icon -->
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-green-200"></i>
                            <span>মেঘালয় বাদলি দিনস</span> <!-- Khasi/Jaintia -->
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
                <i class="fas fa-mountain text-2xl text-green-200"></i> <!-- Mountain -->
                <i class="fas fa-cloud-rain text-2xl text-blue-200"></i> <!-- Rain -->
                <i class="fas fa-star text-2xl text-yellow-200"></i> <!-- Star -->
                <i class="fas fa-drum text-2xl text-orange-200"></i> <!-- Drum -->
                <i class="fas fa-seedling text-2xl text-green-200"></i> <!-- Seedling -->
                <i class="fas fa-cloud-rain text-2xl text-blue-200"></i> <!-- Rain -->
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
                <li><a href="#" class="hover:text-blue-600 transition-colors">Meghalaya</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Holidays 2026</li>
            </ol>
        </nav>
        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-green-50 to-teal-50 rounded-lg p-6 border-l-4 border-green-500">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-green-600"></i>
                    <span>Complete Meghalaya Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Meghalaya Holiday Calendar 2026! This detailed guide provides you with all the important dates,
                    festivals, and celebrations throughout the year. Whether you're planning a trip to the Abode of Clouds, organizing events,
                    or simply want to stay informed about cultural celebrations, our calendar covers everything from vibrant tribal festivals
                    like Wangala, Behdienkhlam, and Shad Suk Mynsiem to national holidays and international observances.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-green-200">
                        <i class="fas fa-mountain text-2xl text-green-500 mb-2"></i> <!-- Mountain -->
                        <h3 class="font-semibold text-gray-800 mb-2">Tribal Festivals</h3>
                        <p class="text-sm text-gray-600">Unique celebrations like Wangala, Behdienkhlam, and Shad Suk Mynsiem</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-green-200">
                        <i class="fas fa-star text-2xl text-yellow-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Republic Day, Independence Day, and other patriotic celebrations</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-green-200">
                        <i class="fas fa-globe text-2xl text-blue-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">International Events</h3>
                        <p class="text-sm text-gray-600">Women's Day, Labour Day, and global observances</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Bar -->
        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-green-500 text-lg"></i>
                        </div>
                        <input type="text"
                               id="searchInput"
                               placeholder="🔍 Search holidays by name, type, or description..."
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 text-lg"
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
                                <button onclick="quickSearch('Wangala')" class="block w-full text-left px-3 py-2 hover:bg-green-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-drum text-orange-500"></i> <!-- Drum -->
                                    <span>Wangala</span>
                                </button>
                                <button onclick="quickSearch('Behdienkhlam')" class="block w-full text-left px-3 py-2 hover:bg-green-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-cloud-rain text-blue-500"></i> <!-- Rain -->
                                    <span>Behdienkhlam</span>
                                </button>
                                <button onclick="quickSearch('Shad Suk Mynsiem')" class="block w-full text-left px-3 py-2 hover:bg-green-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-seedling text-green-500"></i> <!-- Seedling -->
                                    <span>Shad Suk Mynsiem</span>
                                </button>
                                <button onclick="quickSearch('National')" class="block w-full text-left px-3 py-2 hover:bg-green-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span>National Holidays</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <i class="fas fa-filter text-green-500 absolute left-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                        <select id="filterType"
                                class="pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 bg-white"
                                onchange="filterHolidays()">
                            <option value="">🎯 All Types</option>
                            <option value="National Holiday">🏛️ National Holiday</option>
                            <option value="Garo Festival">🥁 Garo Festival</option>
                            <option value="Jaintia Festival">🌧️ Jaintia Festival</option>
                            <option value="Khasi Festival">🌱 Khasi Festival</option>
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
            <div class="mt-4 text-center bg-gradient-to-r from-green-50 to-teal-50 p-3 rounded-lg border border-green-200">
                <p class="text-sm text-gray-700 flex items-center justify-center space-x-2">
                    <i class="fas fa-lightbulb text-yellow-500 text-lg"></i>
                    <span>💡 Search tips: Try searching for "Wangala", "Behdienkhlam", "Shad", or specific holiday names</span>
                    <i class="fas fa-magic text-purple-500 text-lg"></i>
                </p>
            </div>
        </div>
        <!-- Search Results -->
        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-search text-green-500 mr-3"></i>
                Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-3">
                <!-- Search results will be populated here -->
            </div>
        </div>
        <!-- Calendar Navigation -->
        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-500">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                <i class="fas fa-chevron-left text-lg"></i>
                <div class="text-left">
                    <div class="text-sm opacity-90">Previous</div>
                    <div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div>
                </div>
            </a>
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-2">
                    <i class="fas fa-calendar-alt text-4xl text-blue-600"></i>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
                        <p class="text-gray-600 flex items-center justify-center space-x-2">
                            <i class="fas fa-map-marker-alt text-green-500"></i>
                            <span>Meghalaya Month: <?php echo $month_names[$current_month]; ?></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-cloud-rain text-blue-500"></i> <!-- Rain -->
                        <span>Rainy Days</span>
                    </span>
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-star text-green-500"></i> <!-- Star -->
                        <span>Special Events</span>
                    </span>
                </div>
            </div>
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
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
                // Using English for simplicity, could use Khasi/Jaintia/Garo if available
                $tamil_weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-saturn'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
                    echo '<div class="text-xs text-gray-500">' . $tamil_weekdays[$i] . '</div>';
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
                        $cell_classes .= ' bg-green-50'; // Changed color for Meghalaya
                    }
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    if ($is_holiday) {
                        $holiday = $all_holidays_2026[$date];
                        $border_color = $is_bank_holiday ? 'border-blue-500' : 'border-green-500'; // Changed color for Meghalaya
                        $bg_color = $is_bank_holiday ? 'bg-blue-100' : 'bg-green-100'; // Changed color for Meghalaya
                        $text_color = $is_bank_holiday ? 'text-blue-800' : 'text-green-800'; // Changed color for Meghalaya
                        $desc_color = $is_bank_holiday ? 'text-blue-700' : 'text-green-700'; // Changed color for Meghalaya
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_bank_holiday ? 'text-blue-600' : 'text-green-600') . '"></i>'; // Changed color for Meghalaya
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        if ($is_bank_holiday) {
                            echo '<i class="fas fa-university text-xs text-blue-500 ml-1"></i>';
                        }
                        echo '</div>';
                        echo '<div class="text-xs ' . $desc_color . ' flex items-center space-x-1">';
                        echo '<i class="fas fa-tag ' . ($is_bank_holiday ? 'text-blue-500' : 'text-green-500') . '"></i>'; // Changed color for Meghalaya
                        echo '<span>' . $holiday['type'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                    }
                    if ($is_today) {
                        echo '<div class="absolute top-2 right-2">';
                        echo '<span class="bg-gradient-to-r from-green-500 to-green-600 text-white text-xs px-3 py-1 rounded-full flex items-center space-x-1 shadow-lg">';
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
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-clock text-green-500 mr-3 text-2xl"></i>
                    <span>Upcoming Holidays</span>
                    <i class="fas fa-arrow-right text-green-400 ml-2 animate-pulse"></i>
                </h3>
                <div class="space-y-3">
                    <?php
                    $today = date('Y-m-d');
                    $upcoming_count = 0;
                    foreach ($all_holidays_2026 as $date => $holiday) {
                        if ($date >= $today && $upcoming_count < 5) {
                            $days_until = (strtotime($date) - strtotime($today)) / (60 * 60 * 24);
                            echo '<div class="flex items-center justify-between p-4 bg-gradient-to-r from-green-50 to-teal-50 rounded-lg border border-green-200 hover:shadow-md transition-all transform hover:scale-105">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<div class="relative">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-green-600 text-xl"></i>';
                            echo '<i class="fas fa-circle text-green-400 text-xs absolute -top-1 -right-1 animate-pulse"></i>';
                            echo '</div>';
                            echo '<div>';
                            echo '<div class="font-semibold text-gray-800 text-lg">' . $holiday['name'] . '</div>';
                            echo '<div class="text-sm text-gray-600 flex items-center space-x-2">';
                            echo '<i class="fas fa-calendar-alt text-green-500"></i>';
                            echo '<span>' . date('M d, Y', strtotime($date)) . '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="text-right">';
                            echo '<div class="text-sm font-medium text-green-600 flex items-center space-x-1">';
                            echo '<i class="fas fa-hourglass-half text-green-500"></i>';
                            echo '<span>' . round($days_until) . ' days</span>';
                            echo '</div>';
                            echo '<div class="text-xs text-green-500 mt-1">⏰ Countdown</div>';
                            echo '</div>';
                            echo '</div>';
                            $upcoming_count++;
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- Holiday Statistics -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-blue-500 mr-3 text-2xl"></i>
                    <span>Holiday Statistics</span>
                    <i class="fas fa-chart-line text-blue-400 ml-2"></i>
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
                    <div class="text-center p-4 bg-gradient-to-br from-teal-50 to-teal-100 rounded-lg border border-teal-200 hover:shadow-md transition-all"> <!-- Changed color -->
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-mountain text-teal-600 text-xl"></i> <!-- Changed icon and color -->
                            <div class="text-3xl font-bold text-teal-600"><?php echo count(array_filter($holidays_2026, function($h) { return strpos($h['type'], 'Festival') !== false; })); ?></div>
                        </div>
                        <div class="text-sm text-teal-700 font-medium">Tribal Festivals</div> <!-- Changed text -->
                        <div class="text-xs text-teal-600 mt-1">🏞️ Cultural</div> <!-- Changed text -->
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
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-university text-green-500 mr-3 text-2xl"></i>
                <span>Bank Holidays 2026</span>
                <i class="fas fa-building-columns text-green-400 ml-2"></i>
            </h3>
            <p class="text-gray-600 mb-6">All major banks in Meghalaya will be closed on these dates. Plan your banking activities accordingly.</p>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php
                $bank_holidays_displayed = 0;
                foreach ($all_holidays_2026 as $date => $holiday) {
                    if ($holiday['bank_holiday'] === true && $bank_holidays_displayed < 12) {
                        $formatted_date = date('M d, Y', strtotime($date));
                        $day_name = date('l', strtotime($date));
                        echo '<div class="bg-gradient-to-r from-green-50 to-green-100 p-4 rounded-lg border border-green-200 hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-3 mb-2">';
                        echo '<i class="fas fa-university text-green-600 text-lg"></i>';
                        echo '<div class="flex-1">';
                        echo '<div class="font-semibold text-green-800 text-sm">' . $holiday['name'] . '</div>';
                        echo '<div class="text-xs text-green-600">' . $day_name . ', ' . $formatted_date . '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="text-right">';
                        echo '<div class="text-xs bg-green-200 text-green-800 px-2 py-1 rounded-full">Bank Closed</div>';
                        echo '</div>';
                        echo '</div>';
                        $bank_holidays_displayed++;
                    }
                }
                ?>
            </div>
            <div class="mt-6 p-4 bg-green-50 rounded-lg border border-green-200">
                <h4 class="font-semibold text-green-800 mb-2 flex items-center">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>
                    Important Bank Holiday Information
                </h4>
                <ul class="text-sm text-green-700 space-y-1">
                    <li>• <strong>All Banks Closed:</strong> National holidays, major festivals, and religious observances</li>
                    <li>• <strong>Half Day:</strong> Some banks may operate with reduced hours on certain holidays</li>
                    <li>• <strong>Online Banking:</strong> Available 24/7 even on bank holidays</li>
                    <li>• <strong>ATM Services:</strong> Usually available unless there are technical issues</li>
                    <li>• <strong>Emergency Services:</strong> Some banks provide emergency banking services</li>
                </ul>
            </div>
            <!-- Major Banks in Meghalaya -->
            <div class="mt-6 p-4 bg-white rounded-lg border border-green-200">
                <h4 class="font-semibold text-green-800 mb-3 flex items-center">
                    <i class="fas fa-building-columns text-green-600 mr-2"></i>
                    Major Banks Affected in Meghalaya
                </h4>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <h5 class="font-medium text-green-700 text-sm">Public Sector Banks</h5>
                        <ul class="text-xs text-green-600 space-y-1">
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
                        <h5 class="font-medium text-green-700 text-sm">Private Sector Banks</h5>
                        <ul class="text-xs text-green-600 space-y-1">
                            <li>• HDFC Bank</li>
                            <li>• ICICI Bank</li>
                            <li>• Axis Bank</li>
                            <li>• Kotak Mahindra Bank</li>
                            <li>• IndusInd Bank</li>
                            <li>• Yes Bank</li>
                            <li>• Federal Bank</li>
                            <li>• IDFC First Bank</li>
                        </ul>
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-medium text-green-700 text-sm">Regional & Cooperative Banks</h5>
                        <ul class="text-xs text-green-600 space-y-1">
                            <li>• Meghalaya Rural Bank</li>
                            <li>• North East Small Finance Bank</li>
                            <li>• Various District Central Cooperative Banks</li>
                            <li>• Primary Agricultural Credit Societies</li>
                            <li>• Urban Cooperative Banks</li>
                            <li>• Regional Rural Banks</li>
                            <li>• Foreign Banks (Branches in Shillong)</li>
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
                <button onclick="printCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-green-100 to-green-200 hover:from-green-200 hover:to-green-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-green-300">
                    <i class="fas fa-print text-3xl text-green-600 mb-3"></i>
                    <span class="text-sm font-medium text-green-800">Print</span>
                    <div class="text-xs text-green-600 mt-1">🖨️ Calendar</div>
                </button>
                <button onclick="downloadCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-100 to-blue-200 hover:from-blue-200 hover:to-blue-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-blue-300">
                    <i class="fas fa-download text-3xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-blue-800">Download</span>
                    <div class="text-xs text-blue-600 mt-1">💾 Save</div>
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
                            <span>What are the main festivals in Meghalaya in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main festivals in Meghalaya in 2026 include <strong>Wangala</strong> (November 10) - the Garo post-harvest festival,
                            <strong>Behdienkhlam</strong> (July 12-14) - the Jaintia monsoon festival, and
                            <strong>Shad Suk Mynsiem</strong> (April 14-16) - the Khasi spring festival.
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-red-500"></i>
                            <span>How many national holidays are there in Meghalaya 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Meghalaya observes several national holidays in 2026 including <strong>Republic Day</strong> (January 26),
                            <strong>Independence Day</strong> (August 15), and <strong>Gandhi Jayanti</strong> (October 2).
                            These are official government holidays when banks, schools, and government offices remain closed.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-drum text-orange-500"></i> <!-- Changed icon and color -->
                            <span>What is Wangala and why is it important?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Wangala</strong>, also known as the Hundred Drums Festival, is the most important post-harvest festival of the Garo tribe,
                            usually held in November (around November 10, 2026). It's a thanksgiving celebration for a successful harvest,
                            featuring traditional dances, music with drums and horns, and elaborate costumes. It's a time for communities to come together
                            and express gratitude to the Sun God for the bounty.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-cloud-rain text-blue-500"></i> <!-- Changed icon and color -->
                            <span>What is Behdienkhlam and its significance?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Behdienkhlam</strong> (July 12-14, 2026) is the biggest festival of the Jaintia (Pnar) tribe, celebrated in July during the monsoon.
                            It's a ritualistic festival aimed at driving away evil spirits and diseases to ensure good health and prosperity for the community.
                            The festival involves elaborate rituals, traditional dances, and the symbolic act of pushing away the "devils" (effigies) from the village.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-heart text-pink-500"></i>
                            <span>Are international holidays like Valentine's Day celebrated in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Valentine's Day</strong> (February 14, 2026) and other international holidays like
                            <strong>International Women's Day</strong> (March 8, 2026) are celebrated in Meghalaya, especially in
                            urban areas like Shillong. While these are not official holidays, they are widely observed by younger generations and
                            commercial establishments, reflecting the state's cosmopolitan culture.
                        </p>
                    </div>
                    <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-seedling text-green-500"></i> <!-- Changed icon and color -->
                            <span>What is Shad Suk Mynsiem and how is it celebrated?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Shad Suk Mynsiem</strong> (April 14-16, 2026) is a significant Khasi festival, also known as the "Dance of the blessed".
                            It's a spring festival celebrated to appease the gods for a good harvest and to drive away evil spirits.
                            The festival involves traditional dances performed by young Khasi women in colorful attire, accompanied by music.
                            It's a time for community bonding and cultural expression.
                        </p>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hard-hat text-yellow-500"></i>
                            <span>Is Labour Day a public holiday in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Labour Day / May Day</strong> (May 1, 2026) is a public holiday in Meghalaya. Banks, government offices,
                            and many businesses typically remain closed. Trade unions and workers' organizations often organize rallies
                            and events to celebrate workers' rights and achievements.
                        </p>
                    </div>
                    <!-- FAQ Item 8 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-dove text-blue-500"></i>
                            <span>How is Independence Day celebrated in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Independence Day</strong> (August 15, 2026) is celebrated with great patriotic fervor in Meghalaya.
                            The day begins with flag hoisting ceremonies in schools, colleges, and government offices, often accompanied by cultural programs
                            showcasing the state's diverse tribal heritage. The main celebration usually takes place in Shillong.
                        </p>
                    </div>
                    <!-- FAQ Item 9 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-peace text-green-500"></i>
                            <span>What is the significance of Gandhi Jayanti in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Gandhi Jayanti</strong> (October 2, 2026) commemorates the birth anniversary of Mahatma Gandhi,
                            the Father of the Nation. In Meghalaya, this day is observed with prayer meetings, seminars on Gandhian
                            philosophy, and community service activities. Schools organize special assemblies, and government offices
                            remain closed. The day promotes Gandhian values of non-violence, truth, and simplicity.
                        </p>
                    </div>
                    <!-- FAQ Item 10 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-child text-orange-500"></i> <!-- Changed color -->
                            <span>How is Children's Day celebrated in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Children's Day</strong> (November 14, 2026) celebrates the birth anniversary of India's first
                            Prime Minister, Jawaharlal Nehru. In Meghalaya, schools organize special programs, cultural activities, and competitions for children.
                            Many schools also distribute sweets and gifts to students, making it a memorable day for children across the state.
                        </p>
                    </div>
                    <!-- FAQ Item 11 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>Is Christmas celebrated in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, <strong>Christmas</strong> (December 25, 2026) is celebrated with great enthusiasm in Meghalaya,
                            especially in areas with significant Christian populations. Churches are beautifully decorated,
                            midnight masses are held, and communities come together for celebrations. The festival promotes
                            communal harmony and is celebrated by people of all faiths.
                        </p>
                    </div>
                    <!-- FAQ Item 12 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-venus text-pink-500"></i>
                            <span>What is the significance of International Women's Day in Meghalaya?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>International Women's Day</strong> (March 8, 2026) is celebrated across Meghalaya to recognize
                            women's achievements and promote gender equality. Various organizations, educational institutions, and
                            government bodies organize seminars, workshops, and cultural programs highlighting women's contributions
                            to society. The day also focuses on women's rights, empowerment, and addressing gender-based challenges.
                        </p>
                    </div>
                    <!-- FAQ Item 13 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-clock text-green-500"></i> <!-- Changed color -->
                            <span>How far in advance should I plan for Meghalaya festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For major festivals like <strong>Wangala</strong>, <strong>Behdienkhlam</strong>, and <strong>Shad Suk Mynsiem</strong>, it's recommended to
                            plan at least 2-3 months in advance, especially if you're planning to travel to Meghalaya. These festivals
                            attract many visitors, so accommodations and transportation should be booked early. For smaller celebrations,
                            planning 2-4 weeks ahead is usually sufficient.
                        </p>
                    </div>
                    <!-- FAQ Item 14 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-red-500"></i>
                            <span>Which areas in Meghalaya are best for experiencing festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            <strong>Shillong</strong> (capital city) hosts major official celebrations and Wangala.
                            <strong>Jowai</strong> is famous for Behdienkhlam. <strong>Cherrapunjee</strong> and <strong>Mawlynnong</strong>
                            offer unique cultural experiences. Garo Hills celebrate Wangala grandly. Each region has its unique way of celebrating
                            and offers different cultural experiences.
                        </p>
                    </div>
                    <!-- FAQ Item 15 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-check text-green-500"></i> <!-- Changed color -->
                            <span>Are there any special holidays specific to Meghalaya in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, Meghalaya has several state-specific holidays and festivals. <strong>Wangala</strong>,
                            <strong>Behdienkhlam</strong>, and <strong>Shad Suk Mynsiem</strong> are unique to Meghalaya and are celebrated as state holidays or widely observed events.
                            The state government may also declare additional holidays for local events.
                        </p>
                    </div>
                    <!-- FAQ Item 16 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-utensils text-orange-500"></i> <!-- Changed color -->
                            <span>What traditional foods are associated with Meghalaya festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Meghalaya festivals feature a variety of traditional foods. <strong>Wangala</strong> sees the preparation of rice beer (<em>Chubi</em>),
                            pork, and other traditional Garo dishes. <strong>Behdienkhlam</strong> includes special rice preparations and community feasts.
                            <strong>Shad Suk Mynsiem</strong> features traditional Khasi rice and meat dishes. Festivals are times for sharing
                            community meals (<em>Jia-Bit</em>) and enjoying local delicacies.
                        </p>
                    </div>
                    <!-- FAQ Item 17 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-music text-purple-500"></i>
                            <span>What cultural activities are organized during Meghalaya festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Meghalaya festivals feature rich cultural activities including traditional folk music and dances,
                            storytelling, archery competitions (Garo), and community rituals. <strong>Wangala</strong> is known for its drumming and traditional Garo dances.
                            <strong>Behdienkhlam</strong> features elaborate processions and symbolic rituals. <strong>Shad Suk Mynsiem</strong> showcases graceful Khasi dances.
                            Many festivals also include traditional art exhibitions, craft demonstrations, and cultural workshops for visitors.
                        </p>
                    </div>
                    <!-- FAQ Item 18 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-bus text-green-500"></i> <!-- Changed color -->
                            <span>How can tourists participate in Meghalaya festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Tourists can participate in Meghalaya festivals by attending public celebrations, visiting villages during
                            festival times, and joining community events. Many hotels and tour operators offer special festival packages.
                            It's recommended to dress respectfully, respect local customs, and participate in cultural activities with sensitivity.
                            Learning basic greetings in Khasi, Garo, or Jaintia can enhance the experience.
                        </p>
                    </div>
                    <!-- FAQ Item 19 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-camera text-blue-500"></i> <!-- Changed color -->
                            <span>Are photography and videography allowed during festivals?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Photography and videography are generally allowed during most Meghalaya festivals, but it's important to
                            respect local customs and seek permission when necessary. Some ritualistic areas may have restrictions, and
                            it's polite to ask before taking photos of people, especially during private moments. Many festivals offer
                            excellent opportunities for cultural photography, but always be respectful and avoid disrupting ceremonies or celebrations.
                        </p>
                    </div>
                    <!-- FAQ Item 20 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-green-500"></i> <!-- Changed color -->
                            <span>Where can I get more information about specific festival dates and events?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            For detailed information about Meghalaya festivals, you can visit the official Meghalaya Tourism website,
                            contact local tourism offices, or check with local cultural organizations and village councils.
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
                        <div class="flex items-center justify-between p-4 bg-green-50 rounded-lg border-l-4 border-green-500 hover:bg-green-100 transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas ${icon} text-green-600 text-xl"></i>
                                <div>
                                    <div class="font-semibold text-gray-800 text-lg">${name}</div>
                                    <div class="text-sm text-gray-600">${type}</div>
                                    <div class="text-xs text-gray-500">${description}</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium text-green-600">${formattedDate}</div>
                                <button onclick="goToMonth('${date}')"
                                        class="mt-2 px-3 py-1 bg-green-500 hover:bg-green-600 text-white text-xs rounded transition-colors">
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
            const content = `Meghalaya Holidays 2026
`;
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'meghalaya-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Meghalaya Holidays 2026',
                    text: 'Check out the Meghalaya holiday calendar for 2026!',
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
            const holidayItems = document.querySelectorAll('.bg-green-100'); // Changed selector
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