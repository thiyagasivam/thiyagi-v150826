<?php include '../../header.php'; ?>

<title>Western Australia Holidays 2026 | WA Public Holiday Calendar | Perth Holidays</title>
<meta name="description" content="Complete Western Australia Holiday Calendar 2026. Find all WA public holidays, Western Australia Day, Labour Day, and state-specific observances for Perth and Western Australia.">
<meta name="keywords" content="Western Australia holidays 2026, WA public holidays, Perth holidays, Western Australia Day, Labour Day WA, WA Day">
<meta name="author" content="Western Australia Holiday Calendar">
<meta property="og:title" content="Western Australia Holidays 2026 - Complete Calendar">
<meta property="og:description" content="Complete Western Australia Holiday Calendar 2026 with WA Day, Labour Day, and all public holidays.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>">
<meta name="language" content="English">
<meta name="geo.region" content="AU-WA">
<meta name="geo.placename" content="Western Australia, Australia">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'wa-gold': '#FFD700',
                    'wa-black': '#000000',
                    'wa-blue': '#0066CC',
                    'wa-red': '#DC143C'
                }
            }
        }
    }
</script>

<style>
:root {
    --wa-gold: #FFD700;
    --wa-black: #000000;
    --wa-red: #DC143C;
}
.bg-wa-gold { background-color: var(--wa-gold); }
.text-wa-gold { color: var(--wa-gold); }
.border-wa-gold { border-color: var(--wa-gold); }
.wa-gradient { background: linear-gradient(135deg, var(--wa-black) 0%, var(--wa-gold) 50%, var(--wa-red) 100%); }
</style>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Western Australia Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'First day of the year celebration',
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
            'description' => 'Observed on Monday as Australia Day falls on Sunday',
            'icon' => 'fa-flag',
            'bank_holiday' => true
        ],
        '2026-03-03' => [
            'name' => 'Labour Day',
            'type' => 'WA State Holiday',
            'description' => 'First Monday in March - Western Australia workers\' rights',
            'icon' => 'fa-hammer',
            'bank_holiday' => true
        ],
        '2026-04-18' => [
            'name' => 'Good Friday',
            'type' => 'National Holiday',
            'description' => 'Christian holy day commemorating crucifixion',
            'icon' => 'fa-cross',
            'bank_holiday' => true
        ],
        '2026-04-19' => [
            'name' => 'Easter Saturday',
            'type' => 'National Holiday',
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
        '2026-06-02' => [
            'name' => 'Western Australia Day',
            'type' => 'WA State Holiday',
            'description' => 'First Monday in June - WA foundation day celebration',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ],
        '2026-09-29' => [
            'name' => 'Queen\'s Birthday',
            'type' => 'WA State Holiday',
            'description' => 'Last Monday in September in Western Australia',
            'icon' => 'fa-crown',
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

    $current_month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
    $current_year = isset($_GET['year']) ? (int)$_GET['year'] : 2026;

    $month_names = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];

    $first_day = mktime(0, 0, 0, $current_month, 1, $current_year);
    $first_day_of_week = date('w', $first_day);
    $days_in_month = date('t', $first_day);

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

    <header class="wa-gradient text-white shadow-lg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-wa-gold rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-10 left-1/3 w-16 h-16 bg-wa-gold rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 py-6 relative z-10">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-calendar-alt text-5xl text-wa-gold drop-shadow-lg"></i>
                        <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span>Western Australia Holidays 2026</span>
                            <i class="fas fa-sun text-2xl text-wa-gold animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90 flex items-center space-x-2">
                            <i class="fas fa-building text-wa-gold"></i>
                            <span>Perth & WA Public Holiday Calendar</span>
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="flex items-center space-x-2 mb-2">
                        <i class="fas fa-clock text-2xl text-wa-gold"></i>
                        <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                    </div>
                    <div class="mt-2 flex items-center space-x-2">
                        <i class="fas fa-gift text-wa-gold"></i>
                        <span class="text-sm opacity-75"><?php echo count($holidays_2026); ?> Total Holidays</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <nav class="mb-6 text-sm text-gray-600">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-blue-600 flex items-center"><i class="fas fa-home mr-1"></i>Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/" class="hover:text-blue-600">Holidays</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/australia-holidays/" class="hover:text-blue-600">Australia</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Western Australia Holidays 2026</li>
            </ol>
        </nav>

        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-wa-gold">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-wa-gold"></i>
                    <span>Complete Western Australia Holiday Calendar 2026</span>
                    <i class="fas fa-star text-wa-gold"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Welcome to the comprehensive Western Australia Holiday Calendar 2026! Featuring Western Australia Day (first Monday in June),
                    Labour Day (first Monday in March), Queen's Birthday (last Monday in September), and all public holidays for Perth and Western Australia.
                </p>
                <div class="grid md:grid-cols-3 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-flag text-2xl text-red-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">National Holidays</h3>
                        <p class="text-sm text-gray-600">Australia Day, ANZAC Day, Christmas</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-star text-2xl text-wa-gold mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">WA State Holidays</h3>
                        <p class="text-sm text-gray-600">WA Day, Labour Day March, Queen's Birthday Sept</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-blue-200">
                        <i class="fas fa-university text-2xl text-green-500 mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Bank Holidays</h3>
                        <p class="text-sm text-gray-600">All public holidays + closures</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-wa-gold">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-wa-gold text-lg"></i>
                        </div>
                        <input type="text" id="searchInput" placeholder="🔍 Search WA holidays..."
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-wa-gold text-lg"
                               onkeyup="searchHolidays()">
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <select id="filterType" class="pl-8 pr-4 py-2 border rounded-lg bg-white" onchange="filterHolidays()">
                        <option value="">🎯 All Types</option>
                        <option value="National Holiday">🇦🇺 National</option>
                        <option value="WA State Holiday">🏛️ WA State</option>
                    </select>
                    <button onclick="clearSearch()" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg">
                        <i class="fas fa-times-circle"></i> Clear
                    </button>
                </div>
            </div>
        </div>

        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden">
            <h3 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-search text-wa-gold mr-3"></i>Search Results</h3>
            <div id="searchResultsContent" class="space-y-3"></div>
        </div>

        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-wa-black to-gray-900 text-white px-6 py-3 rounded-lg shadow-lg">
                <i class="fas fa-chevron-left"></i>
                <div><div class="text-sm">Previous</div><div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div></div>
            </a>
            <div class="text-center">
                <div class="flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-4xl text-wa-gold"></i>
                    <div>
                        <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
                        <p class="text-gray-600">Western Australia</p>
                    </div>
                </div>
            </div>
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>"
               class="flex items-center space-x-3 bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-lg shadow-lg">
                <div><div class="text-sm">Next</div><div class="font-semibold"><?php echo $month_names[$next_month[0]] . ' ' . $next_month[1]; ?></div></div>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="grid grid-cols-7 bg-gradient-to-r from-gray-100 to-gray-200 border-b">
                <?php
                $weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                for ($i = 0; $i < 7; $i++) {
                    echo '<div class="p-4 text-center font-semibold text-gray-700 border-r">' . $weekdays[$i] . '</div>';
                }
                ?>
            </div>
            <div class="grid grid-cols-7">
                <?php
                for ($i = 0; $i < $first_day_of_week; $i++) {
                    echo '<div class="p-4 border-r border-b bg-gray-50 min-h-[100px]"></div>';
                }
                for ($day = 1; $day <= $days_in_month; $day++) {
                    $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                    $is_holiday = isset($holidays_2026[$date]);
                    $is_today = ($day == date('j') && $current_month == date('n') && $current_year == date('Y'));
                    
                    $cell_classes = 'p-4 border-r border-b min-h-[100px] relative';
                    if ($is_today) $cell_classes .= ' bg-yellow-100';
                    elseif ($is_holiday) $cell_classes .= ' bg-blue-50';
                    
                    echo '<div class="' . $cell_classes . '">';
                    echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                    
                    if ($is_holiday) {
                        $holiday = $holidays_2026[$date];
                        $is_state = ($holiday['type'] === 'WA State Holiday');
                        echo '<div class="' . ($is_state ? 'bg-gradient-to-r from-wa-black to-gray-800 text-white' : 'bg-red-100 border-red-500 border-l-4') . ' p-2 rounded shadow-sm">';
                        echo '<div class="flex items-center space-x-2 mb-1">';
                        echo '<i class="fas ' . $holiday['icon'] . ' text-lg ' . ($is_state ? 'text-wa-gold' : '') . '"></i>';
                        echo '<span class="text-sm font-semibold">' . $holiday['name'] . '</span>';
                        echo '</div>';
                        echo '<div class="text-xs ' . ($is_state ? 'text-wa-gold' : 'text-gray-600') . '">' . $holiday['type'] . '</div>';
                        echo '</div>';
                    }
                    
                    if ($is_today) {
                        echo '<span class="absolute top-2 right-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">Today</span>';
                    }
                    echo '</div>';
                }
                $total_cells = $first_day_of_week + $days_in_month;
                $remaining = 7 - ($total_cells % 7);
                if ($remaining < 7) {
                    for ($i = 0; $i < $remaining; $i++) {
                        echo '<div class="p-4 border-r border-b bg-gray-50 min-h-[100px]"></div>';
                    }
                }
                ?>
            </div>
        </div>

        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
                <h3 class="text-2xl font-bold mb-4"><i class="fas fa-clock text-blue-500 mr-3"></i>Upcoming Holidays</h3>
                <div class="space-y-3">
                    <?php
                    $today = date('Y-m-d');
                    $count = 0;
                    foreach ($holidays_2026 as $date => $holiday) {
                        if ($date >= $today && $count < 5) {
                            $days = ceil((strtotime($date) - strtotime($today)) / 86400);
                            $is_wa = ($holiday['type'] === 'WA State Holiday');
                            echo '<div class="flex items-center justify-between p-4 ' . ($is_wa ? 'bg-gradient-to-r from-wa-black to-gray-800 text-white' : 'bg-blue-50') . ' rounded-lg border">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-xl ' . ($is_wa ? 'text-wa-gold' : 'text-wa-gold') . '"></i>';
                            echo '<div><div class="font-semibold">' . $holiday['name'] . '</div>';
                            echo '<div class="text-sm ' . ($is_wa ? 'text-wa-gold' : 'text-gray-600') . '">' . date('M d, Y', strtotime($date)) . '</div></div>';
                            echo '</div><div class="text-sm ' . ($is_wa ? 'text-wa-gold' : 'text-blue-600') . '">' . $days . ' days</div></div>';
                            $count++;
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
                <h3 class="text-2xl font-bold mb-4"><i class="fas fa-chart-pie text-green-500 mr-3"></i>Statistics</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="text-center p-4 bg-blue-50 rounded-lg">
                        <div class="text-3xl font-bold text-blue-600"><?php echo count($holidays_2026); ?></div>
                        <div class="text-sm">Total Holidays</div>
                    </div>
                    <div class="text-center p-4 bg-red-50 rounded-lg">
                        <div class="text-3xl font-bold text-red-600"><?php echo count(array_filter($holidays_2026, fn($h) => $h['type'] === 'National Holiday')); ?></div>
                        <div class="text-sm">National</div>
                    </div>
                    <div class="text-center p-4 bg-gradient-to-br from-wa-black to-gray-800 text-white rounded-lg">
                        <div class="text-3xl font-bold text-wa-gold"><?php echo count(array_filter($holidays_2026, fn($h) => $h['type'] === 'WA State Holiday')); ?></div>
                        <div class="text-sm">WA State</div>
                    </div>
                    <div class="text-center p-4 bg-green-50 rounded-lg">
                        <div class="text-3xl font-bold text-green-600"><?php echo count($holidays_2026); ?></div>
                        <div class="text-sm">Bank Holidays</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500">
            <h3 class="text-2xl font-bold mb-4"><i class="fas fa-tools text-purple-500 mr-3"></i>Quick Actions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button onclick="printCalendar()" class="p-6 bg-blue-100 hover:bg-blue-200 rounded-lg">
                    <i class="fas fa-print text-3xl text-blue-600 mb-3"></i>
                    <div class="text-sm font-medium">Print</div>
                </button>
                <button onclick="downloadCalendar()" class="p-6 bg-green-100 hover:bg-green-200 rounded-lg">
                    <i class="fas fa-download text-3xl text-green-600 mb-3"></i>
                    <div class="text-sm font-medium">Download</div>
                </button>
                <button onclick="shareCalendar()" class="p-6 bg-purple-100 hover:bg-purple-200 rounded-lg">
                    <i class="fas fa-share-alt text-3xl text-purple-600 mb-3"></i>
                    <div class="text-sm font-medium">Share</div>
                </button>
                <button onclick="resetToCurrent()" class="p-6 bg-orange-100 hover:bg-orange-200 rounded-lg">
                    <i class="fas fa-home text-3xl text-orange-600 mb-3"></i>
                    <div class="text-sm font-medium">Today</div>
                </button>
            </div>
        </div>

        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-wa-gold">
            <h2 class="text-3xl font-bold text-center mb-8"><i class="fas fa-question-circle text-wa-gold mr-3"></i>Western Australia Holidays FAQ</h2>
            <div class="space-y-6 max-w-4xl mx-auto">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3"><i class="fas fa-star text-wa-gold mr-2"></i>What is Western Australia Day?</h3>
                    <p class="text-gray-700">Western Australia Day is held on the first Monday in June (June 2, 2026) and celebrates the foundation of the Western Australia colony in 1829.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3"><i class="fas fa-hammer text-blue-500 mr-2"></i>When is Labour Day in Western Australia?</h3>
                    <p class="text-gray-700">Western Australia observes Labour Day on the first Monday in March (March 3, 2026), celebrating workers' rights and the eight-hour working day.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3"><i class="fas fa-crown text-yellow-500 mr-2"></i>When is Queen's Birthday in Western Australia?</h3>
                    <p class="text-gray-700">Western Australia celebrates Queen's Birthday on the last Monday in September (September 29, 2026), which is unique timing among Australian states.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3"><i class="fas fa-clock text-green-500 mr-2"></i>How does WA's calendar differ from other states?</h3>
                    <p class="text-gray-700">WA has unique holiday timing: Labour Day in March (vs May/October elsewhere), Queen's Birthday in September (vs June), and WA Day in June (unique to WA).</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-3"><i class="fas fa-building text-purple-500 mr-2"></i>Are banks closed on WA public holidays?</h3>
                    <p class="text-gray-700">Yes, banks are typically closed on all national and Western Australia state public holidays. Online banking and ATMs remain available 24/7.</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        const holidaysData = <?php echo json_encode($holidays_2026); ?>;
        function searchHolidays() {
            const term = document.getElementById('searchInput').value.toLowerCase();
            const filter = document.getElementById('filterType').value;
            const results = document.getElementById('searchResults');
            const content = document.getElementById('searchResultsContent');
            
            if (!term && !filter) { results.classList.add('hidden'); return; }
            
            const matches = Object.entries(holidaysData).filter(([date, h]) => {
                const searchMatch = !term || h.name.toLowerCase().includes(term) || h.type.toLowerCase().includes(term);
                const filterMatch = !filter || h.type === filter;
                return searchMatch && filterMatch;
            });
            
            content.innerHTML = matches.length ? matches.map(([date, h]) => 
                `<div class="p-4 ${h.type === 'WA State Holiday' ? 'bg-gradient-to-r from-wa-black to-gray-800 text-white' : 'bg-blue-50'} rounded-lg border-l-4 border-wa-gold">
                    <div class="font-semibold">${h.name}</div>
                    <div class="text-sm ${h.type === 'WA State Holiday' ? 'text-wa-gold' : 'text-gray-600'}">${new Date(date).toDateString()}</div>
                </div>`
            ).join('') : '<p class="text-center text-gray-500 py-8">No holidays found</p>';
            
            results.classList.remove('hidden');
        }
        function filterHolidays() { searchHolidays(); }
        function clearSearch() { document.getElementById('searchInput').value = ''; document.getElementById('filterType').value = ''; document.getElementById('searchResults').classList.add('hidden'); }
        function printCalendar() { window.print(); }
        function downloadCalendar() {
            const content = Object.entries(holidaysData).map(([d, h]) => new Date(d).toDateString() + ': ' + h.name).join('\n');
            const blob = new Blob(['Western Australia Holidays 2026\n\n' + content], {type: 'text/plain'});
            const a = document.createElement('a');
            a.href = URL.createObjectURL(blob);
            a.download = 'wa-holidays-2026.txt';
            a.click();
        }
        function shareCalendar() {
            if (navigator.share) navigator.share({title: 'WA Holidays 2026', url: location.href});
            else navigator.clipboard.writeText(location.href).then(() => alert('URL copied!'));
        }
        function resetToCurrent() { location.href = location.pathname; }
    </script>

<?php include '../../footer.php'; ?>
</body>
</html>