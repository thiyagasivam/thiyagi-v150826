<?php include '../../header.php'; ?>

<title>Victoria Holidays 2026 | VIC Public Holiday Calendar | Melbourne Holidays</title>
<meta name="description" content="Complete Victoria Holiday Calendar 2026. Find all VIC public holidays, Melbourne Cup Day, AFL Grand Final Friday, Labour Day, and state-specific observances for Melbourne and Victoria.">
<meta name="keywords" content="Victoria holidays 2026, VIC public holidays, Melbourne holidays, Melbourne Cup Day, AFL Grand Final Friday, Labour Day Victoria">
<meta name="author" content="Victoria Holiday Calendar">
<meta property="og:title" content="Victoria Holidays 2026 - Complete Calendar">
<meta property="og:description" content="Complete Victoria Holiday Calendar 2026 with Melbourne Cup Day, AFL Grand Final Friday, and all public holidays.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>">
<meta property="og:image" content="https://via.placeholder.com/1200x630/002654/FFFFFF?text=VIC+Holidays+2026">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Victoria Holidays 2026">
<meta name="twitter:description" content="Complete Victoria Holiday Calendar 2026 with all public holidays and bank holidays.">
<meta name="language" content="English">
<meta name="geo.region" content="AU-VIC">
<meta name="geo.placename" content="Victoria, Australia">

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Victoria Holidays 2026",
  "description": "Complete Victoria Holiday Calendar 2026 with all public holidays, Melbourne Cup Day, AFL Grand Final Friday, and state-specific observances.",
  "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
  "mainEntity": {
    "@type": "Event",
    "@id": "#vic-holidays-2026",
    "name": "Victoria Public Holidays 2026",
    "description": "Complete list of Victoria public holidays and bank holidays for 2026 including Melbourne Cup Day, AFL Grand Final Friday, Labour Day, and all state-specific observances for Melbourne and Victoria.",
    "startDate": "2026-01-01",
    "endDate": "2026-12-31",
    "eventStatus": "https://schema.org/EventScheduled",
    "image": {
      "@type": "ImageObject",
      "url": "https://via.placeholder.com/1200x630/002654/FFFFFF?text=VIC+Holidays+2026",
      "width": 1200,
      "height": 630
    },
    "location": {
      "@type": "Place",
      "name": "Victoria, Australia",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "VIC",
        "addressCountry": "AU"
      }
    },
    "organizer": {
      "@type": "GovernmentOrganization",
      "name": "Victoria Government",
      "url": "https://www.vic.gov.au",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.vic.gov.au/sites/default/files/2019-05/vic-logo.png"
      }
    },
    "performer": {
      "@type": "GovernmentOrganization",
      "name": "Victoria State Government",
      "url": "https://www.vic.gov.au"
    },
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "AUD",
      "availability": "https://schema.org/InStock",
      "description": "Free access to Victoria public holiday calendar and information"
    }
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://<?= $_SERVER['HTTP_HOST'] ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Holidays",
        "item": "https://<?= $_SERVER['HTTP_HOST'] ?>/holiday/"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Australia",
        "item": "https://<?= $_SERVER['HTTP_HOST'] ?>/holiday/australia-holidays/"
      },
      {
        "@type": "ListItem",
        "position": 4,
        "name": "Victoria Holidays 2026",
        "item": "https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>"
      }
    ]
  },
  "publisher": {
    "@type": "Organization",
    "name": "Victoria Holiday Calendar"
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
                    'vic-navy': '#002654',
                    'vic-silver': '#C0C0C0',
                    'vic-gold': '#FFD700',
                    'vic-blue': '#0047AB'
                }
            }
        }
    }
</script>

<style>
:root {
    --vic-navy: #002654;
    --vic-silver: #C0C0C0;
    --vic-gold: #FFD700;
}
.bg-vic-navy { background-color: var(--vic-navy); }
.text-vic-navy { color: var(--vic-navy); }
.border-vic-navy { border-color: var(--vic-navy); }
.bg-vic-gold { background-color: var(--vic-gold); }
</style>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Victoria Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'First day of the year',
            'icon' => 'fa-calendar-day',
            'bank_holiday' => true
        ],
        '2026-01-26' => [
            'name' => 'Australia Day',
            'type' => 'National Holiday',
            'description' => 'National day of Australia',
            'icon' => 'fa-flag',
            'bank_holiday' => true
        ],
        '2026-01-27' => [
            'name' => 'Australia Day (observed)',
            'type' => 'National Holiday',
            'description' => 'Observed on Monday',
            'icon' => 'fa-flag',
            'bank_holiday' => true
        ],
        '2026-03-10' => [
            'name' => 'Labour Day',
            'type' => 'VIC State Holiday',
            'description' => 'Second Monday in March - Victoria specific',
            'icon' => 'fa-hammer',
            'bank_holiday' => true
        ],
        '2026-04-18' => [
            'name' => 'Good Friday',
            'type' => 'National Holiday',
            'description' => 'Christian holy day',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-19' => [
            'name' => 'Easter Saturday',
            'type' => 'VIC State Holiday',
            'description' => 'Day before Easter Sunday',
            'icon' => 'fa-egg',
            'bank_holiday' => true
        ],
        '2026-04-21' => [
            'name' => 'Easter Monday',
            'type' => 'National Holiday',
            'description' => 'Day after Easter Sunday',
            'icon' => 'fa-dove',
            'bank_holiday' => true
        ],
        '2026-04-25' => [
            'name' => 'ANZAC Day',
            'type' => 'National Holiday',
            'description' => 'Australian and New Zealand Army Corps Day',
            'icon' => 'fa-medal',
            'bank_holiday' => true
        ],
        '2026-06-09' => [
            'name' => 'Queen\'s Birthday',
            'type' => 'VIC State Holiday',
            'description' => 'Second Monday in June',
            'icon' => 'fa-crown',
            'bank_holiday' => true
        ],
        '2026-09-26' => [
            'name' => 'AFL Grand Final Friday',
            'type' => 'VIC State Holiday',
            'description' => 'Day before AFL Grand Final - VIC specific',
            'icon' => 'fa-football',
            'bank_holiday' => true
        ],
        '2026-11-04' => [
            'name' => 'Melbourne Cup Day',
            'type' => 'VIC State Holiday',
            'description' => 'First Tuesday in November - The race that stops a nation',
            'icon' => 'fa-horse',
            'bank_holiday' => true
        ],
        '2026-12-25' => [
            'name' => 'Christmas Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of Jesus Christ\'s birth',
            'icon' => 'fa-tree',
            'bank_holiday' => true
        ],
        '2026-12-26' => [
            'name' => 'Boxing Day',
            'type' => 'National Holiday',
            'description' => 'Day after Christmas',
            'icon' => 'fa-gift',
            'bank_holiday' => true
        ]
    ];

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
    <header class="bg-gradient-to-r from-vic-navy via-gray-100 to-vic-navy text-white shadow-lg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-vic-gold rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-10 left-1/4 w-16 h-16 bg-vic-gold rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 py-6 relative z-10">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-calendar-alt text-5xl text-vic-gold drop-shadow-lg"></i>
                        <i class="fas fa-trophy text-yellow-400 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span>Victoria Holidays 2026</span>
                            <i class="fas fa-horse text-2xl text-vic-gold animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-building text-vic-gold"></i>
                            <span>Melbourne & VIC Public Holiday Calendar</span>
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clock text-2xl text-vic-gold"></i>
                        <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                    </div>
                    <p class="opacity-90 flex items-center space-x-2">
                        <i class="fas fa-calendar-day text-sm"></i>
                        <span>Current Date</span>
                    </p>
                    <div class="mt-2 flex items-center space-x-2">
                        <i class="fas fa-gift text-vic-gold"></i>
                        <span class="text-sm opacity-75"><?php echo count($holidays_2026); ?> Total Holidays</span>
                    </div>
                </div>
            </div>
            <!-- Decorative Icons Row -->
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fas fa-football text-2xl text-vic-gold"></i>
                <i class="fas fa-horse text-2xl text-amber-400"></i>
                <i class="fas fa-trophy text-2xl text-yellow-300"></i>
                <i class="fas fa-building text-2xl text-gray-300"></i>
                <i class="fas fa-tram text-2xl text-green-400"></i>
                <i class="fas fa-coffee text-2xl text-amber-600"></i>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-blue-600 transition-colors flex items-center"><i class="fas fa-home mr-1"></i>Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/" class="hover:text-blue-600 transition-colors">Holidays</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/australia-holidays/" class="hover:text-blue-600 transition-colors">Australia</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Victoria Holidays 2026</li>
            </ol>
        </nav>

        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-vic-navy">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-vic-navy"></i>
                    <span>Complete Victoria Holiday Calendar 2026</span>
                    <i class="fas fa-star text-vic-gold"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Victoria Holiday Calendar 2026! This detailed guide provides you with
                    all public holidays, bank holidays, and VIC-specific observances including Melbourne Cup Day (the race that stops a nation),
                    AFL Grand Final Friday, and Labour Day (second Monday in March). Perfect for planning your year in Melbourne and across Victoria.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-flag text-2xl text-red-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Australia Day, ANZAC Day, Christmas</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-horse text-2xl text-vic-navy mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">VIC State Holidays</h3>
                        <p class="text-sm text-gray-600">Melbourne Cup, AFL Grand Final, Labour Day</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-university text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Bank Holidays</h3>
                        <p class="text-sm text-gray-600">All public holidays + additional closures</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search Bar -->
        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-vic-navy">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-vic-navy text-lg"></i>
                        </div>
                        <input type="text"
                               id="searchInput"
                               placeholder="🔍 Search holidays by name or type..."
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-vic-navy focus:border-vic-navy text-lg"
                               onkeyup="searchHolidays()">
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <i class="fas fa-filter text-vic-navy absolute left-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                        <select id="filterType"
                                class="pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-vic-navy focus:border-vic-navy bg-white"
                                onchange="filterHolidays()">
                            <option value="">🎯 All Types</option>
                            <option value="National Holiday">🇦🇺 National Holiday</option>
                            <option value="VIC State Holiday">🏛️ VIC State Holiday</option>
                        </select>
                    </div>
                    <button onclick="clearSearch()"
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors flex items-center space-x-2 shadow-md">
                        <i class="fas fa-times-circle"></i>
                        <span>Clear</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Search Results -->
        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-search text-vic-navy mr-3"></i>
                Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-3"></div>
        </div>

        <!-- Calendar Navigation -->
        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-vic-navy to-blue-700 hover:from-blue-700 hover:to-vic-navy text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                <i class="fas fa-chevron-left text-lg"></i>
                <div class="text-left">
                    <div class="text-sm opacity-90">Previous</div>
                    <div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div>
                </div>
            </a>
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-2">
                    <i class="fas fa-calendar-alt text-4xl text-vic-navy"></i>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
                        <p class="text-gray-600 flex items-center justify-center space-x-2">
                            <i class="fas fa-map-marker-alt text-vic-navy"></i>
                            <span>Victoria</span>
                        </p>
                    </div>
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
            <div class="grid grid-cols-7 bg-gradient-to-r from-gray-100 to-gray-200 border-b">
                <?php
                $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                $weekday_icons = ['fa-sun', 'fa-moon', 'fa-fire', 'fa-leaf', 'fa-star', 'fa-heart', 'fa-cloud'];
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
            <div class="grid grid-cols-7">
                <?php
                for ($i = 0; $i < $first_day_of_week; $i++) {
                    echo '<div class="p-4 border-r border-b bg-gray-50"></div>';
                }
                for ($day = 1; $day <= $days_in_month; $day++) {
                    $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                    $is_holiday = isset($holidays_2026[$date]);
                    $is_today = ($day == date('j') && $current_month == date('n') && $current_year == date('Y'));
                    
                    $cell_classes = 'p-4 border-r border-b min-h-[100px] relative';
                    if ($is_today) {
                        $cell_classes .= ' bg-yellow-100';
                    } elseif ($is_holiday) {
                        $cell_classes .= ' bg-blue-50';
                    }
                    
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    
                    if ($is_holiday) {
                        $holiday = $holidays_2026[$date];
                        $is_state_holiday = ($holiday['type'] === 'VIC State Holiday');
                        $border_color = $is_state_holiday ? 'border-vic-navy' : 'border-red-500';
                        $bg_color = $is_state_holiday ? 'bg-blue-100' : 'bg-red-100';
                        $text_color = $is_state_holiday ? 'text-vic-navy' : 'text-red-800';
                        
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_state_holiday ? 'text-vic-navy' : 'text-red-600') . '"></i>';
                        echo '<span class="text-sm font-semibold ' . $text_color . '">' . $holiday['name'] . '</span>';
                        echo '</div>';
                        echo '<div class="text-xs text-gray-600 flex items-center space-x-1">';
                        echo '<i class="fas fa-tag text-xs"></i>';
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

        <!-- Holiday List & Statistics -->
        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <!-- Upcoming Holidays -->
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-clock text-blue-500 mr-3 text-2xl"></i>
                    <span>Upcoming Holidays</span>
                </h3>
                <div class="space-y-3">
                    <?php
                    $today = date('Y-m-d');
                    $upcoming_count = 0;
                    foreach ($holidays_2026 as $date => $holiday) {
                        if ($date >= $today && $upcoming_count < 5) {
                            $days_until = (strtotime($date) - strtotime($today)) / (60 * 60 * 24);
                            echo '<div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-200 hover:shadow-md transition-all">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-vic-navy text-xl"></i>';
                            echo '<div>';
                            echo '<div class="font-semibold text-gray-800">' . $holiday['name'] . '</div>';
                            echo '<div class="text-sm text-gray-600">' . date('M d, Y', strtotime($date)) . '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="text-sm font-medium text-blue-600">' . round($days_until) . ' days</div>';
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
                </h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200">
                        <div class="text-3xl font-bold text-blue-600"><?php echo count($holidays_2026); ?></div>
                        <div class="text-sm text-blue-700 font-medium">Total Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-red-50 to-red-100 rounded-lg border border-red-200">
                        <div class="text-3xl font-bold text-red-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'National Holiday'; })); ?></div>
                        <div class="text-sm text-red-700 font-medium">National Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-vic-navy/20 to-vic-navy/30 rounded-lg border border-vic-navy">
                        <div class="text-3xl font-bold text-vic-navy"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'VIC State Holiday'; })); ?></div>
                        <div class="text-sm text-vic-navy font-medium">VIC State Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-lg border border-green-200">
                        <div class="text-3xl font-bold text-green-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?></div>
                        <div class="text-sm text-green-700 font-medium">Bank Holidays</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-tools text-purple-500 mr-3 text-2xl"></i>
                <span>Quick Actions</span>
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button onclick="printCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-100 to-blue-200 hover:from-blue-200 hover:to-blue-300 rounded-lg transition-all transform hover:scale-105 shadow-md">
                    <i class="fas fa-print text-3xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-blue-800">Print Calendar</span>
                </button>
                <button onclick="downloadCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-green-100 to-green-200 hover:from-green-200 hover:to-green-300 rounded-lg transition-all transform hover:scale-105 shadow-md">
                    <i class="fas fa-download text-3xl text-green-600 mb-3"></i>
                    <span class="text-sm font-medium text-green-800">Download</span>
                </button>
                <button onclick="shareCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-purple-100 to-purple-200 hover:from-purple-200 hover:to-purple-300 rounded-lg transition-all transform hover:scale-105 shadow-md">
                    <i class="fas fa-share-alt text-3xl text-purple-600 mb-3"></i>
                    <span class="text-sm font-medium text-purple-800">Share</span>
                </button>
                <button onclick="resetToCurrent()" class="flex flex-col items-center p-6 bg-gradient-to-br from-orange-100 to-orange-200 hover:from-orange-200 hover:to-orange-300 rounded-lg transition-all transform hover:scale-105 shadow-md">
                    <i class="fas fa-home text-3xl text-orange-600 mb-3"></i>
                    <span class="text-sm font-medium text-orange-800">Today</span>
                </button>
            </div>
        </div>

        <!-- Bank Holidays Section -->
        <section class="mt-12 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg shadow-lg p-8 border-l-4 border-green-500">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                    <i class="fas fa-university text-green-600"></i>
                    <span>Bank Holidays 2026</span>
                    <i class="fas fa-credit-card text-green-500"></i>
                </h2>
                
                <div class="mb-6 bg-white rounded-lg p-6 border border-green-200 shadow-sm">
                    <div class="flex items-center space-x-3 mb-4">
                        <i class="fas fa-info-circle text-blue-500 text-xl"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Important Banking Information</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Banks in Victoria are typically closed on national public holidays and Victoria-specific holidays including Melbourne Cup Day, AFL Grand Final Friday, and Labour Day. 
                        ATMs and online banking services remain available 24/7. Always check with your specific bank for their holiday schedule.
                    </p>
                </div>

                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- National Bank Holidays -->
                    <div class="bg-white rounded-lg shadow-md p-6 border border-blue-200">
                        <h3 class="text-2xl font-bold text-blue-700 mb-6 flex items-center space-x-3">
                            <i class="fas fa-flag text-blue-600"></i>
                            <span>National Bank Holidays</span>
                        </h3>
                        <div class="space-y-4">
                            <?php
                            foreach ($holidays_2026 as $date => $holiday) {
                                if ($holiday['type'] === 'National Holiday') {
                                    $formatted_date = date('l, M d, Y', strtotime($date));
                                    echo '<div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">';
                                    echo '<div class="flex items-center space-x-3">';
                                    echo '<div class="bg-blue-100 rounded-full p-2">';
                                    echo '<i class="fas ' . $holiday['icon'] . ' text-blue-600"></i>';
                                    echo '</div>';
                                    echo '<div>';
                                    echo '<div class="font-semibold text-gray-800">' . $holiday['name'] . '</div>';
                                    echo '<div class="text-sm text-gray-600">' . $formatted_date . '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Closed</span>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <!-- VIC State Bank Holidays -->
                    <div class="bg-white rounded-lg shadow-md p-6 border border-orange-200">
                        <h3 class="text-2xl font-bold text-orange-700 mb-6 flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-orange-600"></i>
                            <span>VIC State Bank Holidays</span>
                        </h3>
                        <div class="space-y-4">
                            <?php
                            foreach ($holidays_2026 as $date => $holiday) {
                                if ($holiday['type'] === 'VIC State Holiday') {
                                    $formatted_date = date('l, M d, Y', strtotime($date));
                                    echo '<div class="flex items-center justify-between p-4 bg-orange-50 rounded-lg border border-orange-100 hover:shadow-md transition-all">';
                                    echo '<div class="flex items-center space-x-3">';
                                    echo '<div class="bg-orange-100 rounded-full p-2">';
                                    echo '<i class="fas ' . $holiday['icon'] . ' text-orange-600"></i>';
                                    echo '</div>';
                                    echo '<div>';
                                    echo '<div class="font-semibold text-gray-800">' . $holiday['name'] . '</div>';
                                    echo '<div class="text-sm text-gray-600">' . $formatted_date . '</div>';
                                    if (strpos($holiday['description'], 'specific') !== false) {
                                        echo '<div class="text-xs text-gray-500 mt-1">VIC specific</div>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">Closed</span>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Bank Holiday Summary Stats -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                        <div class="text-3xl font-bold text-blue-600"><?php echo count($holidays_2026); ?></div>
                        <div class="text-sm text-gray-600">Total Bank Holidays</div>
                    </div>
                    <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                        <div class="text-3xl font-bold text-green-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'National Holiday'; })); ?></div>
                        <div class="text-sm text-gray-600">National Bank Holidays</div>
                    </div>
                    <div class="bg-white rounded-lg p-6 text-center shadow-md border border-gray-200">
                        <div class="text-3xl font-bold text-orange-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'VIC State Holiday'; })); ?></div>
                        <div class="text-sm text-gray-600">VIC State Bank Holidays</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-vic-navy">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                    <i class="fas fa-question-circle text-vic-navy"></i>
                    <span>Frequently Asked Questions</span>
                    <i class="fas fa-lightbulb text-yellow-500"></i>
                </h2>
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-horse text-vic-gold"></i>
                            <span>What is Melbourne Cup Day?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Melbourne Cup Day (November 4, 2026) is a public holiday in Victoria for the famous horse race known as "the race that stops a nation." It's held on the first Tuesday in November and is unique to Victoria.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-football text-orange-500"></i>
                            <span>What is AFL Grand Final Friday?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            AFL Grand Final Friday (September 26, 2026) is a public holiday in Victoria held on the day before the AFL Grand Final. It was introduced to create a long weekend and celebrate Victoria's sporting culture.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hammer text-blue-500"></i>
                            <span>When is Labour Day in Victoria?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Victoria observes Labour Day on the second Monday in March (March 10, 2026), which is earlier than most other Australian states that observe it in October or May.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-building text-purple-500"></i>
                            <span>Are banks and schools closed on Victoria public holidays?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Most banks, schools, and government offices are closed on both national and Victoria-specific public holidays, including Melbourne Cup Day and AFL Grand Final Friday.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-coins text-green-500"></i>
                            <span>Do employees get penalty rates for working on Victoria public holidays?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Under Australian employment law, eligible employees are generally entitled to penalty rates or time off in lieu for working on public holidays, including Victoria's unique sporting holidays.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-globe text-red-500"></i>
                            <span>Is Melbourne Cup Day observed outside Victoria?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Melbourne Cup Day is primarily a Victorian public holiday, though the race itself is celebrated nationwide. Some businesses in other states may give employees time off, but it's not an official public holiday elsewhere.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-week text-blue-500"></i>
                            <span>What happens if a public holiday falls on a weekend in Victoria?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            If a public holiday falls on a weekend, it's usually observed on the next Monday (or Tuesday if Monday is also a holiday), ensuring workers receive the benefit of a long weekend.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-egg text-pink-500"></i>
                            <span>Does Victoria observe Easter Saturday?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, Easter Saturday (April 19, 2026) is a public holiday in Victoria, giving residents a four-day Easter long weekend from Friday to Monday inclusive.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map text-orange-500"></i>
                            <span>Are there any regional public holidays in Victoria?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The main state holidays apply across Victoria. Some local areas may have additional local events or show days, but these are typically not official public holidays with penalty rates.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-purple-500"></i>
                            <span>How do Victoria holidays differ from other Australian states?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Victoria is unique in observing Melbourne Cup Day and AFL Grand Final Friday. Victoria also celebrates Labour Day in March, unlike NSW (October) or Western Australia (May).
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const holidaysData = <?php echo json_encode($holidays_2026); ?>;

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
            searchHolidays();
        }

        function displaySearchResults(results) {
            const searchResults = document.getElementById('searchResults');
            const searchResultsContent = document.getElementById('searchResultsContent');

            if (results.length === 0) {
                searchResultsContent.innerHTML = `
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-search text-4xl mb-4"></i>
                        <p class="text-lg">No holidays found matching your search criteria.</p>
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
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border-l-4 border-vic-navy hover:bg-blue-100 transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas ${icon} text-2xl text-vic-navy"></i>
                                <div>
                                    <div class="font-semibold text-gray-800">${name}</div>
                                    <div class="text-sm text-gray-600">${formattedDate}</div>
                                    <div class="text-xs text-gray-500 mt-1">${type}</div>
                                </div>
                            </div>
                            <button onclick="goToMonth('${date}')" class="bg-vic-navy hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition-colors">
                                View
                            </button>
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

        function printCalendar() {
            window.print();
        }

        function downloadCalendar() {
            const content = `Victoria Holidays 2026\n\n` +
                Object.entries(holidaysData).map(([date, holiday]) => 
                    `${new Date(date).toDateString()}: ${holiday.name} - ${holiday.type}`
                ).join('\n');
            
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'victoria-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Victoria Holidays 2026',
                    text: 'Check out the Victoria holiday calendar for 2026!',
                    url: window.location.href
                });
            } else {
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Calendar URL copied to clipboard!');
                });
            }
        }

        function resetToCurrent() {
            window.location.href = window.location.pathname;
        }

        document.addEventListener('keydown', function(e) {
            const currentUrl = new URL(window.location);
            const currentMonth = parseInt(currentUrl.searchParams.get('month')) || new Date().getMonth() + 1;
            const currentYear = parseInt(currentUrl.searchParams.get('year')) || new Date().getFullYear();
            
            if (e.key === 'ArrowLeft') {
                const prevMonth = currentMonth === 1 ? 12 : currentMonth - 1;
                const prevYear = currentMonth === 1 ? currentYear - 1 : currentYear;
                window.location.href = `?month=${prevMonth}&year=${prevYear}`;
            } else if (e.key === 'ArrowRight') {
                const nextMonth = currentMonth === 12 ? 1 : currentMonth + 1;
                const nextYear = currentMonth === 12 ? currentYear + 1 : currentYear;
                window.location.href = `?month=${nextMonth}&year=${nextYear}`;
            } else if (e.key === 'Home') {
                window.location.href = window.location.pathname;
            }
        });
    </script>

<?php include '../../footer.php'; ?>
</body>
</html>
