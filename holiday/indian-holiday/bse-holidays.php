<?php include '../../header.php'; ?>
    <title>BSE Holidays 2026 | Bombay Stock Exchange Calendar | Trading Holidays</title>
    <meta name="description" content="Complete BSE Holiday List 2026. Find all Bombay Stock Exchange trading holidays, clearing holidays, and special trading sessions like Muhurat Trading.">
    <meta name="keywords" content="BSE holidays 2026, Bombay Stock Exchange holidays, stock market holidays India, BSE calendar, trading holidays, Muhurat Trading 2026, BSE trading hours">
    <meta name="author" content="BSE Holiday Calendar">
        <meta property="og:title" content="BSE Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete BSE Holiday Calendar 2026 with trading holidays, clearing holidays, and special sessions. Plan your investments accordingly.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/000080/FFFFFF?text=BSE+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BSE Holidays 2026">
    <meta name="twitter:description" content="Complete BSE Holiday Calendar 2026 with all trading holidays and special sessions.">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Mumbai, India">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "BSE Holidays 2026",
        "description": "Complete BSE Holiday Calendar 2026 with trading holidays, clearing holidays, and special sessions like Muhurat Trading.",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "How many holidays does BSE have in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The BSE typically observes around 15-20 holidays in a year, including weekends, national holidays, and clearing holidays. The exact number for 2026 will be confirmed in the official calendar."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What is Muhurat Trading and when is it in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Muhurat Trading is a special, auspicious trading session held by the BSE and NSE on the occasion of Diwali. It usually takes place in the evening on the day of Diwali or the day before. The exact date and time for 2026 will be announced closer to Diwali."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is the BSE open on weekends?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "No, the Bombay Stock Exchange is closed on Saturdays and Sundays, which are regular weekly off days."
                    }
                },
                {
                    "@type": "Question",
                    "name": "What happens if a BSE holiday falls on a weekend?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If a scheduled BSE holiday falls on a Saturday or Sunday, it is usually not compensated by an additional holiday during the week. Trading resumes on the next regular business day."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Where can I find the official BSE holiday list for 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The official BSE holiday calendar for 2026 will be published on the Bombay Stock Exchange's official website (bseindia.com). This calendar is the most reliable source for trading and clearing holidays."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "BSE Holiday Calendar"
        },
        "datePublished": "2026-01-01",
        "dateModified": "<?php echo date('Y-m-d'); ?>"
    }
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bse-blue': '#000080', /* Dark Blue */
                        'bse-gold': '#FFD700', /* Gold */
                        'bse-light': '#E6F0FF' /* Light Blue */
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // BSE Holidays 2026 Data (Placeholder - Update with actual dates when available)
    $bse_holidays_2026 = [
        '2026-01-26' => [ // Republic Day - Sunday (Example)
            'name' => 'Republic Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of Indian Republic',
            'icon' => 'fa-flag',
            'category' => 'Trading & Clearing'
        ],
        '2026-03-04' => [ // Example Date
            'name' => 'Maha Shivratri',
            'type' => 'Religious Holiday',
            'description' => 'Hindu festival dedicated to Lord Shiva',
            'icon' => 'fa-spa',
            'category' => 'Trading & Clearing'
        ],
        '2026-04-14' => [ // Tamil New Year / Ambedkar Jayanti - Monday
            'name' => 'Tamil New Year / Ambedkar Jayanti',
            'type' => 'Regional / Observance',
            'description' => 'Tamil New Year / Birth Anniversary of Dr. B.R. Ambedkar',
            'icon' => 'fa-calendar-day',
            'category' => 'Trading & Clearing'
        ],
        '2026-04-18' => [ // Good Friday
            'name' => 'Good Friday',
            'type' => 'Religious Holiday',
            'description' => 'Christian religious holiday',
            'icon' => 'fa-cross',
            'category' => 'Trading & Clearing'
        ],
        '2026-05-01' => [ // Labour Day - Thursday
            'name' => 'Labour Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'category' => 'Trading & Clearing'
        ],
        '2026-06-16' => [ // Bakrid (Eid al-Adha) - Estimated
            'name' => 'Bakrid (Eid al-Adha)',
            'type' => 'Religious Holiday',
            'description' => 'Islamic festival of sacrifice',
            'icon' => 'fa-moon',
            'category' => 'Trading & Clearing'
        ],
        '2026-08-15' => [ // Independence Day - Friday
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Indian Independence Day',
            'icon' => 'fa-dove',
            'category' => 'Trading & Clearing'
        ],
        '2026-10-02' => [ // Gandhi Jayanti - Thursday
            'name' => 'Gandhi Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-peace',
            'category' => 'Trading & Clearing'
        ],
        '2026-10-31' => [ // Diwali (Lakshmi Puja) - Friday
            'name' => 'Diwali (Lakshmi Puja)',
            'type' => 'Religious Holiday',
            'description' => 'Festival of Lights',
            'icon' => 'fa-lightbulb',
            'category' => 'Trading & Clearing'
        ],
        '2026-11-26' => [ // Guru Nanak Jayanti - Estimated
            'name' => 'Guru Nanak Jayanti',
            'type' => 'Religious Holiday',
            'description' => 'Birth anniversary of Guru Nanak Dev Ji',
            'icon' => 'fa-pray',
            'category' => 'Trading & Clearing'
        ],
        '2026-12-25' => [ // Christmas - Thursday
            'name' => 'Christmas',
            'type' => 'Religious Holiday',
            'description' => 'Celebration of Jesus Christ\'s birth',
            'icon' => 'fa-star',
            'category' => 'Trading & Clearing'
        ]
        // Add more holidays as officially announced
    ];

    // BSE Clearing Holidays 2026 Data (Placeholder - Update with actual dates when available)
    $bse_clearing_holidays_2026 = [
        '2026-01-26' => [ // Republic Day - Sunday (Example)
            'name' => 'Republic Day',
            'type' => 'National Holiday',
            'description' => 'Clearing operations closed',
            'icon' => 'fa-flag',
            'category' => 'Clearing Only'
        ],
        '2026-08-15' => [ // Independence Day - Friday
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Clearing operations closed',
            'icon' => 'fa-dove',
            'category' => 'Clearing Only'
        ]
        // Add more clearing holidays as officially announced
    ];

    // Merge all holidays for display
    $all_bse_holidays_2026 = array_merge($bse_holidays_2026, $bse_clearing_holidays_2026);

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
    <header class="bg-gradient-to-r from-bse-blue to-blue-900 text-white shadow-lg relative overflow-hidden">
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
                        <i class="fas fa-chart-line text-5xl text-white drop-shadow-lg"></i>
                        <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span>BSE Holidays 2026</span>
                            <i class="fas fa-building text-2xl animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-map-marker-alt text-blue-200"></i>
                            <span>Bombay Stock Exchange Calendar</span>
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
                        <span class="text-sm opacity-75"><?php echo count($all_bse_holidays_2026); ?> Total Holidays Listed</span>
                    </div>
                </div>
            </div>
            <!-- Decorative Icons Row -->
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fas fa-chart-line text-2xl text-blue-200"></i>
                <i class="fas fa-coins text-2xl text-yellow-200"></i>
                <i class="fas fa-star text-2xl text-yellow-200"></i>
                <i class="fas fa-building text-2xl text-white"></i>
                <i class="fas fa-lightbulb text-2xl text-yellow-200"></i>
                <i class="fas fa-calendar-alt text-2xl text-blue-200"></i>
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
                <li><a href="#" class="hover:text-blue-600 transition-colors">Finance</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">BSE Holidays 2026</li>
            </ol>
        </nav>

        <!-- H1 Title -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-2">BSE Holiday List 2026</h1>
        <p class="text-center text-gray-600 mb-8">Complete Calendar of Trading and Clearing Holidays</p>

        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-bse-blue">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-bse-blue"></i>
                    <span>BSE Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Stay informed with the comprehensive BSE Holiday Calendar for 2026. This guide lists all the important dates when the Bombay Stock Exchange (BSE) will be closed for trading or clearing operations. Plan your investment activities and ensure smooth transactions by checking this calendar regularly. Includes national holidays, religious observances, and special trading sessions like Muhurat Trading.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-exchange-alt text-2xl text-bse-blue mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Trading Holidays</h3>
                        <p class="text-sm text-gray-600">Days when the BSE market is closed for trading activities.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-file-invoice-dollar text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Clearing Holidays</h3>
                        <p class="text-sm text-gray-600">Days when clearing operations are suspended.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-lightbulb text-2xl text-yellow-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Special Sessions</h3>
                        <p class="text-sm text-gray-600">Muhurat Trading and other special market timings.</p>
                    </div>
                </div>
            </div>
        </section>

         <!-- About the Bombay Stock Exchange (BSE) -->
        <section class="mb-8 bg-white rounded-lg shadow-md p-6 border-l-4 border-bse-blue">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-building text-bse-blue mr-3"></i>
                About the Bombay Stock Exchange (BSE)
            </h2>
            <p class="text-gray-700 mb-4">
                The Bombay Stock Exchange (BSE), established in 1875, is Asia's first and the world's fastest stock exchange. Located on Dalal Street in Mumbai, it is the 10th largest stock exchange globally by market capitalization. The BSE provides a platform for trading in equity shares, debt instruments, mutual funds, derivatives, currency, and commodity derivatives. It plays a crucial role in the Indian financial market, offering price discovery, liquidity, and a regulated environment for investors.
            </p>
            <p class="text-gray-700 mb-4">
                The BSE is home to the S&P BSE SENSEX, India's first equity index, which serves as a benchmark for the overall performance of the Indian stock market. The exchange is committed to innovation, investor education, and promoting transparency in the capital markets.
            </p>

            <!-- Products of BSE -->
            <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-3 flex items-center">
                <i class="fas fa-boxes text-bse-blue mr-2"></i>
                Products of BSE
            </h3>
            <ul class="list-disc pl-5 text-gray-700 space-y-2">
                <li><strong>Equity:</strong> Trading in equity shares of listed companies.</li>
                <li><strong>Debt:</strong> Corporate bonds, government securities (G-Secs), treasury bills.</li>
                <li><strong>Mutual Funds:</strong> Units of mutual fund schemes listed on BSE.</li>
                <li><strong>Derivatives:</strong> Index futures and options (F&O) on SENSEX and other indices, stock futures and options.</li>
                <li><strong>Currency:</strong> Currency futures and options trading.</li>
                <li><strong>Commodity Derivatives:</strong> Futures trading in commodities.</li>
                <li><strong>Small and Medium Enterprises (SME) :</strong>Platform for SMEs to raise capital.</li>
                <li><strong>Indices:</strong> Over 6000 indices including S&P BSE SENSEX, BSE Midcap, BSE Smallcap, sectoral indices, and thematic indices.</li>
            </ul>

            <!-- BSE Trading Hours -->
            <h3 class="text-xl font-semibold text-gray-800 mt-6 mb-3 flex items-center">
                <i class="fas fa-clock text-bse-blue mr-2"></i>
                BSE Trading Hours
            </h3>
            <p class="text-gray-700 mb-2"><strong>Normal Trading Session:</strong></p>
            <ul class="list-disc pl-5 text-gray-700 space-y-1 mb-4">
                <li><strong>Pre-Open Session:</strong> 9:00 AM - 9:15 AM</li>
                <li><strong>Normal Market Session:</strong> 9:15 AM - 3:30 PM (Monday to Friday)</li>
                 <li><strong>Call Auction Session (CAS):</strong> Operates alongside the normal market session for illiquid securities.</li>
            </ul>
            <p class="text-gray-700">
                Please note that trading hours may vary for special sessions like Muhurat Trading.
            </p>
        </section>

        <!-- Muhurat Trading -->
        <section class="mb-8 bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
                Muhurat Trading
            </h2>
            <p class="text-gray-700 mb-4">
                Muhurat Trading is a special, auspicious trading session traditionally held by the Bombay Stock Exchange (BSE) and the National Stock Exchange (NSE) on the occasion of Diwali, the festival of lights. It is believed that participating in trading during this Muhurat (auspicious time) brings prosperity and good fortune for the upcoming year.
            </p>
            <p class="text-gray-700 mb-4">
                This session is purely symbolic and typically lasts for about an hour in the evening. It involves the trading of a select basket of stocks, often including major indices like SENSEX and NIFTY. The exact date and time for Muhurat Trading in 2026 will be announced by the exchanges closer to Diwali.
            </p>
            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 rounded">
                <p class="text-yellow-700 font-medium">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    <strong>Important:</strong> The official date and time for BSE Muhurat Trading 2026 will be confirmed by the exchange. Please check the BSE official website (bseindia.com) for updates.
                </p>
            </div>
        </section>

        <!-- Trading Timings in the BSE -->
        <section class="mb-8 bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-clock text-green-500 mr-3"></i>
                Trading Timings in the BSE
            </h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="py-3 px-4 border-b text-left text-gray-700 font-semibold">Session</th>
                            <th class="py-3 px-4 border-b text-left text-gray-700 font-semibold">Timings (IST)</th>
                            <th class="py-3 px-4 border-b text-left text-gray-700 font-semibold">Days</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        <tr>
                            <td class="py-3 px-4 border-b">Pre-Open Session</td>
                            <td class="py-3 px-4 border-b">09:00 AM - 09:15 AM</td>
                            <td class="py-3 px-4 border-b">Monday to Friday</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-3 px-4 border-b">Normal Market Session</td>
                            <td class="py-3 px-4 border-b">09:15 AM - 03:30 PM</td>
                            <td class="py-3 px-4 border-b">Monday to Friday</td>
                        </tr>
                         <tr>
                            <td class="py-3 px-4 border-b">Call Auction Session (CAS)</td>
                            <td class="py-3 px-4 border-b">09:15 AM - 03:30 PM</td>
                            <td class="py-3 px-4 border-b">Monday to Friday (Concurrent)</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="py-3 px-4 border-b">Muhurat Trading (Special)</td>
                            <td class="py-3 px-4 border-b">TBD (Evening Session)</td>
                            <td class="py-3 px-4 border-b">Diwali Day (Tentative)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="text-gray-700 mt-4">
                <strong>Note:</strong> The BSE is closed on Saturdays, Sundays, and declared holidays. Timings for special sessions like Muhurat Trading are announced separately.
            </p>
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
                                    <i class="fas fa-lightbulb text-yellow-500"></i>
                                    <span>Diwali</span>
                                </button>
                                <button onclick="quickSearch('Muhurat')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-star text-yellow-500"></i>
                                    <span>Muhurat Trading</span>
                                </button>
                                <button onclick="quickSearch('National')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-flag text-red-500"></i>
                                    <span>National Holiday</span>
                                </button>
                                 <button onclick="quickSearch('Clearing')" class="block w-full text-left px-3 py-2 hover:bg-blue-50 rounded text-sm flex items-center space-x-2">
                                    <i class="fas fa-file-invoice-dollar text-green-500"></i>
                                    <span>Clearing Holiday</span>
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
                            <option value="Religious Holiday">⛪ Religious Holiday</option>
                            <option value="Regional / Observance">📍 Regional / Observance</option>
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
                    <span>💡 Search tips: Try searching for "Diwali", "Muhurat", "National", or specific holiday names</span>
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
                            <i class="fas fa-building text-bse-blue"></i>
                            <span>BSE Holidays <?php echo $current_year; ?></span>
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-exchange-alt text-bse-blue"></i>
                        <span>Trading Closed</span>
                    </span>
                    <span class="flex items-center space-x-1">
                        <i class="fas fa-file-invoice-dollar text-green-500"></i>
                        <span>Clearing Closed</span>
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
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <!-- Calendar Header -->
            <div class="grid grid-cols-7 bg-gradient-to-r from-gray-100 to-gray-200 border-b">
                <?php
                $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-saturn'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r last:border-r-0 hover:bg-gray-200 transition-colors">';
                    echo '<div class="flex items-center justify-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $weekday_icons[$i] . ' text-lg text-gray-500"></i>';
                    echo '<div class="text-sm">' . $weekdays[$i] . '</div>';
                    echo '</div>';
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
                    $is_holiday = isset($all_bse_holidays_2026[$date]);
                    $is_clearing_holiday = isset($bse_clearing_holidays_2026[$date]);
                    $is_trading_holiday = isset($bse_holidays_2026[$date]);
                    $is_today = ($day == date('j') && $current_month == date('n') && $current_year == date('Y'));

                    $cell_classes = 'p-4 border-r border-b min-h-[100px] relative';
                    $cell_classes .= $is_today ? ' bg-yellow-100' : '';

                    if ($is_holiday) {
                        if ($is_clearing_holiday && $is_trading_holiday) {
                             $cell_classes .= ' bg-purple-100'; // Both closed
                        } elseif ($is_clearing_holiday) {
                            $cell_classes .= ' bg-green-100'; // Only clearing closed
                        } else {
                            $cell_classes .= ' bg-blue-100'; // Only trading closed
                        }
                    } elseif (date('w', mktime(0,0,0,$current_month,$day,$current_year)) == 0 || date('w', mktime(0,0,0,$current_month,$day,$current_year)) == 6) {
                         $cell_classes .= ' bg-gray-100'; // Weekend
                    }

                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    if ($is_holiday) {
                        $holiday = $all_bse_holidays_2026[$date];
                        $border_color = '';
                        $bg_color = '';
                        $text_color = '';
                        $desc_color = '';
                        $icon_color = '';

                        if ($is_clearing_holiday && $is_trading_holiday) {
                            $border_color = 'border-purple-500';
                            $bg_color = 'bg-purple-200';
                            $text_color = 'text-purple-800';
                            $desc_color = 'text-purple-700';
                            $icon_color = 'text-purple-600';
                        } elseif ($is_clearing_holiday) {
                            $border_color = 'border-green-500';
                            $bg_color = 'bg-green-200';
                            $text_color = 'text-green-800';
                            $desc_color = 'text-green-700';
                            $icon_color = 'text-green-600';
                        } else { // Trading Holiday
                            $border_color = 'border-blue-500';
                            $bg_color = 'bg-blue-200';
                            $text_color = 'text-blue-800';
                            $desc_color = 'text-blue-700';
                            $icon_color = 'text-blue-600';
                        }

                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . $icon_color . '"></i>';
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        echo '</div>';
                        echo '<div class="text-xs ' . $desc_color . ' flex items-center space-x-1">';
                        echo '<i class="fas fa-tag ' . $icon_color . '"></i>';
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
                    <span>Upcoming BSE Holidays</span>
                    <i class="fas fa-arrow-right text-blue-400 ml-2 animate-pulse"></i>
                </h3>
                <div class="space-y-3">
                    <?php
                    $today = date('Y-m-d');
                    $upcoming_count = 0;
                    foreach ($all_bse_holidays_2026 as $date => $holiday) {
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
                    if ($upcoming_count == 0) {
                         echo '<p class="text-gray-500 text-center py-4">No upcoming holidays found in the current list.</p>';
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
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-gift text-blue-600 text-xl"></i>
                            <div class="text-3xl font-bold text-blue-600"><?php echo count($bse_holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-blue-700 font-medium">Trading Holidays</div>
                        <div class="text-xs text-blue-600 mt-1">📉 Market Closed</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-lg border border-green-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-file-invoice-dollar text-green-600 text-xl"></i>
                            <div class="text-3xl font-bold text-green-600"><?php echo count($bse_clearing_holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-green-700 font-medium">Clearing Holidays</div>
                        <div class="text-xs text-green-600 mt-1">🧾 Operations Closed</div>
                    </div>
                     <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg border border-purple-200 hover:shadow-md transition-all col-span-2">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-calendar-alt text-purple-600 text-xl"></i>
                            <div class="text-3xl font-bold text-purple-600"><?php echo count($all_bse_holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-purple-700 font-medium">Total Holidays Listed</div>
                        <div class="text-xs text-purple-600 mt-1">📅 Includes Trading & Clearing</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs on BSE Holidays -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-purple-500">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                    <i class="fas fa-question-circle text-purple-600"></i>
                    <span>FAQs on BSE Holidays</span>
                    <i class="fas fa-lightbulb text-yellow-500"></i>
                </h2>
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-day text-blue-500"></i>
                            <span>How many holidays does BSE have in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The BSE typically observes around 15-20 holidays in a year, including weekends, national holidays, and clearing holidays. The exact number for 2026 will be confirmed in the official calendar. This list includes both Trading Holidays (when the market is closed) and Clearing Holidays (when clearing operations are suspended).
                        </p>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-star text-yellow-500"></i>
                            <span>What is Muhurat Trading and when is it in 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Muhurat Trading is a special, auspicious trading session held by the BSE and NSE on the occasion of Diwali. It usually takes place in the evening on the day of Diwali or the day before. The exact date and time for 2026 will be announced closer to Diwali by the respective stock exchanges. It's a symbolic session believed to bring good fortune for the financial year ahead.
                        </p>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-week text-red-500"></i>
                            <span>Is the BSE open on weekends?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            No, the Bombay Stock Exchange is closed on Saturdays and Sundays, which are regular weekly off days. Trading sessions only occur from Monday through Friday, barring declared holidays.
                        </p>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-sync-alt text-green-500"></i>
                            <span>What happens if a BSE holiday falls on a weekend?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            If a scheduled BSE holiday (like a gazetted national holiday) falls on a Saturday or Sunday, it is usually not compensated by an additional holiday during the week. Trading resumes on the next regular business day (Monday, unless Monday is also a holiday). The official BSE calendar will clarify any specific compensatory arrangements if needed.
                        </p>
                    </div>
                    <!-- FAQ Item 5 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-globe text-blue-500"></i>
                            <span>Where can I find the official BSE holiday list for 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The official BSE holiday calendar for 2026 will be published on the Bombay Stock Exchange's official website (<a href="https://www.bseindia.com" class="text-blue-600 hover:underline" target="_blank" rel="noopener">bseindia.com</a>). This calendar is the most reliable and up-to-date source for trading holidays, clearing holidays, and special sessions like Muhurat Trading. Always refer to the official website for confirmed dates.
                        </p>
                    </div>
                     <!-- FAQ Item 6 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-exchange-alt text-blue-500"></i>
                            <span>What is the difference between a Trading Holiday and a Clearing Holiday?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            A <strong>Trading Holiday</strong> is a day when the BSE market is completely closed, and no trading activities (buying or selling securities) take place. A <strong>Clearing Holiday</strong> is a day when the clearing and settlement operations are suspended, but the market might still be open for trading (though this is rare and usually both coincide). The key difference is that on a clearing holiday, trades placed on previous days are not settled.
                        </p>
                    </div>
                    <!-- FAQ Item 7 -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-clock text-yellow-500"></i>
                            <span>Do BSE trading hours change on holidays or special days?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, BSE trading hours can change for special sessions. The most notable example is <strong>Muhurat Trading</strong>, which occurs in the evening on Diwali and has a much shorter duration than the normal trading session. The exact timings for such special sessions are announced by the BSE in advance. Regular trading hours (9:15 AM - 3:30 PM IST) apply on normal business days.
                        </p>
                    </div>
                </div>
            </div>
        </section>


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

    </main>
    <script>
        // JavaScript functionality
        // Holiday data for search functionality
        const holidaysData = <?php echo json_encode($all_bse_holidays_2026); ?>;
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
            let content = `BSE Holidays 2026\n`;
            content += `====================\n\n`;
            <?php foreach ($all_bse_holidays_2026 as $date => $holiday): ?>
            content += `Date: <?php echo $date; ?> - <?php echo $holiday['name']; ?> (<?php echo $holiday['type']; ?>)\n`;
            content += `  Description: <?php echo $holiday['description']; ?>\n\n`;
            <?php endforeach; ?>
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'bse-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }
        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'BSE Holidays 2026',
                    text: 'Check out the BSE holiday calendar for 2026!',
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
            const holidayItems = document.querySelectorAll('.bg-blue-200, .bg-green-200, .bg-purple-200');
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