<?php include '../../header.php'; ?>

<title>New South Wales Holidays 2026 | NSW Public Holiday Calendar | Sydney Holidays</title>
<meta name="description" content="Complete New South Wales Holiday Calendar 2026. Find all NSW public holidays, bank holidays, Easter Saturday, Bank Holiday, Labour Day, and state-specific observances for Sydney and NSW.">
<meta name="keywords" content="NSW holidays 2026, New South Wales public holidays, Sydney holidays, Bank Holiday NSW, Queen's Birthday NSW, Easter Saturday, Labour Day NSW">
<meta name="author" content="NSW Holiday Calendar">
<meta property="og:title" content="New South Wales Holidays 2026 - Complete Calendar">
<meta property="og:description" content="Complete NSW Holiday Calendar 2026 with all public holidays, bank holidays, and state-specific observances.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>">
<meta property="og:image" content="https://via.placeholder.com/1200x630/003F87/FFFFFF?text=NSW+Holidays+2026">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="New South Wales Holidays 2026">
<meta name="twitter:description" content="Complete NSW Holiday Calendar 2026 with all public holidays and bank holidays.">
<meta name="language" content="English">
<meta name="geo.region" content="AU-NSW">
<meta name="geo.placename" content="New South Wales, Australia">

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "New South Wales Holidays 2026",
  "description": "Complete New South Wales Holiday Calendar 2026 with all public holidays, bank holidays, and state-specific observances.",
  "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
  "mainEntity": {
    "@type": "Event",
    "@id": "#nsw-holidays-2026",
    "name": "New South Wales Public Holidays 2026",
    "description": "Complete list of New South Wales public holidays and bank holidays for 2026 including Australia Day, ANZAC Day, Queen's Birthday, and all state-specific observances for Sydney and NSW.",
    "startDate": "2026-01-01",
    "endDate": "2026-12-31",
    "eventStatus": "https://schema.org/EventScheduled",
    "image": {
      "@type": "ImageObject",
      "url": "https://via.placeholder.com/1200x630/003087/FFFFFF?text=NSW+Holidays+2026",
      "width": 1200,
      "height": 630
    },
    "location": {
      "@type": "Place",
      "name": "New South Wales, Australia",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "NSW",
        "addressCountry": "AU"
      }
    },
    "organizer": {
      "@type": "GovernmentOrganization",
      "name": "New South Wales Government",
      "url": "https://www.nsw.gov.au",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.nsw.gov.au/sites/default/files/nsw-logo.png"
      }
    },
    "performer": {
      "@type": "GovernmentOrganization",
      "name": "NSW State Government",
      "url": "https://www.nsw.gov.au"
    },
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "AUD",
      "availability": "https://schema.org/InStock",
      "description": "Free access to New South Wales public holiday calendar and information"
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
        "name": "NSW Holidays 2026",
        "item": "https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>"
      }
    ]
  },
  "publisher": {
    "@type": "Organization",
    "name": "NSW Holiday Calendar"
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
                    'nsw-blue': '#003F87',
                    'nsw-red': '#E31837',
                    'nsw-white': '#FFFFFF',
                    'nsw-sky': '#0085CA'
                }
            }
        }
    }
</script>

<style>
:root {
    --nsw-blue: #003F87;
    --nsw-red: #E31837;
    --nsw-white: #FFFFFF;
}
.bg-nsw-blue { background-color: var(--nsw-blue); }
.text-nsw-blue { color: var(--nsw-blue); }
.border-nsw-blue { border-color: var(--nsw-blue); }
.bg-nsw-red { background-color: var(--nsw-red); }
.text-nsw-red { color: var(--nsw-red); }
</style>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // NSW Holidays 2026 Data
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
        '2026-04-18' => [
            'name' => 'Good Friday',
            'type' => 'National Holiday',
            'description' => 'Christian holy day',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-19' => [
            'name' => 'Easter Saturday',
            'type' => 'NSW State Holiday',
            'description' => 'NSW specific public holiday',
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
            'type' => 'NSW State Holiday',
            'description' => 'Second Monday in June',
            'icon' => 'fa-crown',
            'bank_holiday' => true
        ],
        '2026-08-04' => [
            'name' => 'Bank Holiday',
            'type' => 'NSW State Holiday',
            'description' => 'First Monday in August - NSW specific',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-06' => [
            'name' => 'Labour Day',
            'type' => 'NSW State Holiday',
            'description' => 'First Monday in October',
            'icon' => 'fa-hammer',
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
    <header class="bg-gradient-to-r from-nsw-blue via-white to-nsw-red text-gray-800 shadow-lg relative overflow-hidden">
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
                        <i class="fas fa-calendar-alt text-5xl text-nsw-blue drop-shadow-lg"></i>
                        <i class="fas fa-star text-yellow-500 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span class="text-nsw-blue">New South Wales Holidays 2026</span>
                            <i class="fas fa-map-marker-alt text-2xl text-nsw-red animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-building text-nsw-blue"></i>
                            <span>Sydney & NSW Public Holiday Calendar</span>
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clock text-2xl text-nsw-blue"></i>
                        <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                    </div>
                    <p class="opacity-90 flex items-center space-x-2">
                        <i class="fas fa-calendar-day text-sm"></i>
                        <span>Current Date</span>
                    </p>
                    <div class="mt-2 flex items-center space-x-2">
                        <i class="fas fa-gift text-yellow-500"></i>
                        <span class="text-sm opacity-75"><?php echo count($holidays_2026); ?> Total Holidays</span>
                    </div>
                </div>
            </div>
            <!-- Decorative Icons Row -->
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fas fa-opera-house text-2xl text-nsw-blue"></i>
                <i class="fas fa-bridge text-2xl text-gray-600"></i>
                <i class="fas fa-water text-2xl text-blue-400"></i>
                <i class="fas fa-sun text-2xl text-yellow-500"></i>
                <i class="fas fa-koala text-2xl text-gray-500"></i>
                <i class="fas fa-kangaroo text-2xl text-orange-500"></i>
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
                <li class="text-gray-800 font-medium">NSW Holidays 2026</li>
            </ol>
        </nav>

        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-nsw-blue">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-nsw-blue"></i>
                    <span>Complete NSW Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive New South Wales Holiday Calendar 2026! This detailed guide provides you with
                    all public holidays, bank holidays, and NSW-specific observances including Easter Saturday, Bank Holiday
                    (first Monday in August), and Labour Day (first Monday in October). Perfect for planning your year in Sydney and across NSW.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-flag text-2xl text-red-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Australia Day, ANZAC Day, Christmas</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-map-marker-alt text-2xl text-nsw-blue mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">NSW State Holidays</h3>
                        <p class="text-sm text-gray-600">Easter Saturday, Bank Holiday, Labour Day</p>
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
        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-nsw-blue">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-nsw-blue text-lg"></i>
                        </div>
                        <input type="text"
                               id="searchInput"
                               placeholder="🔍 Search holidays by name or type..."
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-nsw-blue focus:border-nsw-blue text-lg"
                               onkeyup="searchHolidays()">
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <i class="fas fa-filter text-nsw-blue absolute left-3 top-1/2 transform -translate-y-1/2 text-sm"></i>
                        <select id="filterType"
                                class="pl-8 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-nsw-blue focus:border-nsw-blue bg-white"
                                onchange="filterHolidays()">
                            <option value="">🎯 All Types</option>
                            <option value="National Holiday">🇦🇺 National Holiday</option>
                            <option value="NSW State Holiday">🏛️ NSW State Holiday</option>
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
                <i class="fas fa-search text-nsw-blue mr-3"></i>
                Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-3">
                <!-- Search results will be populated here -->
            </div>
        </div>

        <!-- Calendar Navigation -->
        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-nsw-blue to-blue-700 hover:from-blue-700 hover:to-nsw-blue text-white px-6 py-3 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                <i class="fas fa-chevron-left text-lg"></i>
                <div class="text-left">
                    <div class="text-sm opacity-90">Previous</div>
                    <div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div>
                </div>
            </a>
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3 mb-2">
                    <i class="fas fa-calendar-alt text-4xl text-nsw-blue"></i>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
                        <p class="text-gray-600 flex items-center justify-center space-x-2">
                            <i class="fas fa-map-marker-alt text-nsw-blue"></i>
                            <span>New South Wales</span>
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
            <!-- Calendar Header -->
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
                        $is_state_holiday = ($holiday['type'] === 'NSW State Holiday');
                        $border_color = $is_state_holiday ? 'border-nsw-blue' : 'border-red-500';
                        $bg_color = $is_state_holiday ? 'bg-blue-100' : 'bg-red-100';
                        $text_color = $is_state_holiday ? 'text-nsw-blue' : 'text-red-800';
                        
                        echo '<div class="' . $bg_color . ' border-l-4 ' . $border_color . ' p-2 rounded mb-2 shadow-sm hover:shadow-md transition-all">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_state_holiday ? 'text-nsw-blue' : 'text-red-600') . '"></i>';
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
                    foreach ($holidays_2026 as $date => $holiday) {
                        if ($date >= $today && $upcoming_count < 5) {
                            $days_until = (strtotime($date) - strtotime($today)) / (60 * 60 * 24);
                            echo '<div class="flex items-center justify-between p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg border border-blue-200 hover:shadow-md transition-all transform hover:scale-105">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<div class="relative">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-nsw-blue text-xl"></i>';
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
                            echo '</div>';
                            echo '</div>';
                            $upcoming_count++;
                        }
                    }
                    if ($upcoming_count == 0) {
                        echo '<p class="text-gray-500 text-center py-4">No upcoming holidays found for the rest of the year.</p>';
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
                    <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-gift text-blue-600 text-xl"></i>
                            <div class="text-3xl font-bold text-blue-600"><?php echo count($holidays_2026); ?></div>
                        </div>
                        <div class="text-sm text-blue-700 font-medium">Total Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-red-50 to-red-100 rounded-lg border border-red-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-flag text-red-600 text-xl"></i>
                            <div class="text-3xl font-bold text-red-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'National Holiday'; })); ?></div>
                        </div>
                        <div class="text-sm text-red-700 font-medium">National Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-nsw-blue/20 to-nsw-blue/30 rounded-lg border border-nsw-blue hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-map-marker-alt text-nsw-blue text-xl"></i>
                            <div class="text-3xl font-bold text-nsw-blue"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'NSW State Holiday'; })); ?></div>
                        </div>
                        <div class="text-sm text-nsw-blue font-medium">NSW State Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-lg border border-green-200 hover:shadow-md transition-all">
                        <div class="flex items-center justify-center space-x-2 mb-2">
                            <i class="fas fa-university text-green-600 text-xl"></i>
                            <div class="text-3xl font-bold text-green-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['bank_holiday'] === true; })); ?></div>
                        </div>
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
                        Banks in New South Wales are typically closed on national public holidays and NSW-specific holidays including Easter Saturday, Bank Holiday (first Monday in August), and Labour Day. 
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
                                    echo '<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">';
                                    echo '<i class="fas fa-times-circle mr-1"></i>Closed';
                                    echo '</span>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <!-- NSW State Bank Holidays -->
                    <div class="bg-white rounded-lg shadow-md p-6 border border-orange-200">
                        <h3 class="text-2xl font-bold text-orange-700 mb-6 flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-orange-600"></i>
                            <span>NSW State Bank Holidays</span>
                        </h3>
                        <div class="space-y-4">
                            <?php
                            foreach ($holidays_2026 as $date => $holiday) {
                                if ($holiday['type'] === 'NSW State Holiday') {
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
                                        echo '<div class="text-xs text-gray-500 mt-1">NSW specific</div>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                    echo '<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">';
                                    echo '<i class="fas fa-times-circle mr-1"></i>Closed';
                                    echo '</span>';
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
                        <div class="text-3xl font-bold text-orange-600"><?php echo count(array_filter($holidays_2026, function($h) { return $h['type'] === 'NSW State Holiday'; })); ?></div>
                        <div class="text-sm text-gray-600">NSW State Bank Holidays</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-nsw-blue">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                    <i class="fas fa-question-circle text-nsw-blue"></i>
                    <span>Frequently Asked Questions</span>
                    <i class="fas fa-lightbulb text-yellow-500"></i>
                </h2>
                <div class="space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-flag text-red-500"></i>
                            <span>What are the main public holidays in NSW 2026?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            NSW observes all national Australian public holidays plus state-specific holidays including Easter Saturday, Bank Holiday (first Monday in August), and Labour Day (first Monday in October).
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-egg text-blue-500"></i>
                            <span>Is Easter Saturday a public holiday in NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Yes, Easter Saturday is a public holiday unique to NSW and ACT. This gives NSW residents a four-day Easter long weekend from Friday to Monday inclusive.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-university text-green-500"></i>
                            <span>What is the Bank Holiday in NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            The Bank Holiday is observed on the first Monday in August (August 4, 2026) and is specific to NSW. It provides an additional long weekend during winter months.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hammer text-orange-500"></i>
                            <span>When is Labour Day in NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            NSW celebrates Labour Day on the first Monday in October (October 6, 2026), which differs from states like Victoria and Tasmania that celebrate it in March.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-building text-purple-500"></i>
                            <span>Are banks and schools closed on NSW public holidays?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Most banks, schools, and government offices are closed on both national and NSW-specific public holidays. Some retail businesses may remain open depending on the holiday.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-crown text-yellow-500"></i>
                            <span>When is Queen's Birthday celebrated in NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            NSW celebrates Queen's Birthday on the second Monday in June (June 9, 2026), which is the same as most Australian states except Western Australia and Queensland.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-coins text-green-500"></i>
                            <span>Do employees get penalty rates for working on NSW public holidays?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Under Australian employment law, eligible employees are generally entitled to penalty rates or time off in lieu for working on public holidays. Specific rates depend on awards and agreements.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-calendar-week text-blue-500"></i>
                            <span>What happens if a public holiday falls on a weekend in NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            If a public holiday falls on a weekend, it's usually observed on the next Monday (or Tuesday if Monday is also a holiday), ensuring workers receive the benefit of a long weekend.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-map text-red-500"></i>
                            <span>Are there any local council holidays in Sydney or NSW?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            While most holidays are state or national, some local councils may have specific observances or events. Check with your local council for any additional local holidays or closures.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-info-circle text-purple-500"></i>
                            <span>How do NSW holidays differ from other Australian states?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            NSW is unique in observing Easter Saturday and having its own Bank Holiday in August. NSW also celebrates Labour Day in October, unlike Victoria (March) or Western Australia (May).
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Holiday data for search functionality
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
                        <div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border-l-4 border-nsw-blue hover:bg-blue-100 transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas ${icon} text-2xl text-nsw-blue"></i>
                                <div>
                                    <div class="font-semibold text-gray-800">${name}</div>
                                    <div class="text-sm text-gray-600">${formattedDate}</div>
                                    <div class="text-xs text-gray-500 mt-1">${type}</div>
                                </div>
                            </div>
                            <button onclick="goToMonth('${date}')" class="bg-nsw-blue hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm transition-colors">
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
            const content = `New South Wales Holidays 2026\n\n` +
                Object.entries(holidaysData).map(([date, holiday]) => 
                    `${new Date(date).toDateString()}: ${holiday.name} - ${holiday.type}`
                ).join('\n');
            
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'nsw-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'NSW Holidays 2026',
                    text: 'Check out the New South Wales holiday calendar for 2026!',
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

        // Keyboard navigation
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
