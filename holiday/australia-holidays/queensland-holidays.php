<?php include '../../header.php'; ?>

<title>Queensland Holidays 2026 | QLD Public Holiday Calendar | Brisbane Holidays</title>
<meta name="description" content="Complete Queensland Holiday Calendar 2026. Find all QLD public holidays, Royal Queensland Show (Ekka), Labour Day, and state-specific observances for Brisbane and Queensland.">
<meta name="keywords" content="Queensland holidays 2026, QLD public holidays, Brisbane holidays, Ekka holiday, Royal Queensland Show, Labour Day Queensland">
<meta name="author" content="Queensland Holiday Calendar">
<meta property="og:title" content="Queensland Holidays 2026 - Complete Calendar">
<meta property="og:description" content="Complete Queensland Holiday Calendar 2026 with Royal Queensland Show (Ekka) and all public holidays.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?') ?>">
<meta name="language" content="English">
<meta name="geo.region" content="AU-QLD">
<meta name="geo.placename" content="Queensland, Australia">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'qld-maroon': '#8B0000',
                    'qld-gold': '#FFD700',
                    'qld-blue': '#0047AB',
                    'qld-sun': '#FDB813'
                }
            }
        }
    }
</script>

<style>
:root {
    --qld-maroon: #8B0000;
    --qld-gold: #FFD700;
    --qld-sun: #FDB813;
}
.bg-qld-maroon { background-color: var(--qld-maroon); }
.text-qld-maroon { color: var(--qld-maroon); }
.border-qld-maroon { border-color: var(--qld-maroon); }
.qld-gradient { background: linear-gradient(135deg, var(--qld-maroon) 0%, var(--qld-sun) 50%, var(--qld-maroon) 100%); }
</style>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Queensland Holidays 2026 Data
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
        '2026-05-05' => [
            'name' => 'Labour Day',
            'type' => 'QLD State Holiday',
            'description' => 'First Monday in May - Queensland celebrates workers\' rights',
            'icon' => 'fa-hammer',
            'bank_holiday' => true
        ],
        '2026-08-13' => [
            'name' => 'Royal Queensland Show (Ekka)',
            'type' => 'QLD State Holiday',
            'description' => 'Brisbane area only - Queensland\'s largest annual agricultural show',
            'icon' => 'fa-ferris-wheel',
            'bank_holiday' => true
        ],
        '2026-10-06' => [
            'name' => 'Queen\'s Birthday',
            'type' => 'QLD State Holiday',
            'description' => 'First Monday in October in Queensland',
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

    // Input validation and sanitization
    $current_month = isset($_GET['month']) ? max(1, min(12, (int)$_GET['month'])) : (int)date('n');
    $current_year = isset($_GET['year']) ? max(2020, min(2030, (int)$_GET['year'])) : 2026;

    $month_names = [
        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
    ];
    ?>

    <header class="qld-gradient text-white shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-yellow-400 rounded-full -translate-x-16 -translate-y-16 animate-pulse"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full animate-bounce"></div>
            <div class="absolute bottom-10 left-1/3 w-16 h-16 bg-yellow-400 rounded-full animate-pulse"></div>
        </div>
        <div class="container mx-auto px-4 py-8 relative z-10">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <i class="fas fa-calendar-alt text-6xl text-yellow-400 drop-shadow-2xl"></i>
                        <i class="fas fa-ferris-wheel text-yellow-300 text-2xl absolute -top-3 -right-3 animate-spin"></i>
                    </div>
                    <div>
                        <h1 class="text-5xl font-bold flex items-center space-x-4 mb-2">
                            <span>Queensland Holidays 2026</span>
                            <i class="fas fa-sun text-3xl text-yellow-400 animate-pulse"></i>
                        </h1>
                        <p class="text-xl opacity-90 flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-yellow-400"></i>
                            <span>Brisbane & QLD Public Holiday Calendar</span>
                            <span class="bg-yellow-400 text-red-800 px-3 py-1 rounded-full text-sm font-bold">2026</span>
                        </p>
                    </div>
                </div>
                <div class="text-right bg-white bg-opacity-20 rounded-lg p-4 border border-white border-opacity-30">
                    <div class="flex items-center space-x-3 mb-3">
                        <i class="fas fa-clock text-3xl text-yellow-400"></i>
                        <p class="text-2xl font-bold"><?= htmlspecialchars(date('F Y'), ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-calendar-check text-yellow-400"></i>
                        <span class="text-lg font-semibold"><?= count($holidays_2026) ?> Total Holidays</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-8 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="/" class="hover:text-blue-600 flex items-center transition-colors"><i class="fas fa-home mr-2"></i>Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/" class="hover:text-blue-600 transition-colors">Holidays</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li><a href="/holiday/australia-holidays/" class="hover:text-blue-600 transition-colors">Australia</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">Queensland Holidays 2026</li>
            </ol>
        </nav>

        <!-- Hero Section -->
        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 border-l-4 border-red-800 shadow-lg">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-6 flex items-center justify-center space-x-4">
                    <i class="fas fa-calendar-alt text-red-800"></i>
                    <span>Complete Queensland Holiday Calendar 2026</span>
                    <i class="fas fa-star text-yellow-500 animate-pulse"></i>
                </h2>
                <p class="text-xl text-gray-700 mb-6 leading-relaxed">
                    Welcome to the comprehensive Queensland Holiday Calendar 2026! Featuring the Royal Queensland Show (Ekka),
                    Labour Day, Queen's Birthday, and all public holidays for Brisbane and Queensland.
                </p>
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-white p-6 rounded-xl shadow-md border border-blue-200">
                        <i class="fas fa-flag text-3xl text-red-500 mb-4"></i>
                        <h3 class="font-bold text-gray-800 mb-3 text-lg">National Holidays</h3>
                        <p class="text-gray-600">Australia Day, ANZAC Day, Christmas</p>
                        <div class="mt-3 bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-semibold inline-block">
                            <?= count(array_filter($holidays_2026, fn($h) => $h['type'] === 'National Holiday')) ?> holidays
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border border-blue-200">
                        <i class="fas fa-ferris-wheel text-3xl text-red-800 mb-4"></i>
                        <h3 class="font-bold text-gray-800 mb-3 text-lg">QLD State Holidays</h3>
                        <p class="text-gray-600">Ekka, Labour Day, Queen's Birthday</p>
                        <div class="mt-3 bg-red-800 text-white px-3 py-1 rounded-full text-sm font-semibold inline-block">
                            <?= count(array_filter($holidays_2026, fn($h) => $h['type'] === 'QLD State Holiday')) ?> holidays
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border border-blue-200">
                        <i class="fas fa-university text-3xl text-green-500 mb-4"></i>
                        <h3 class="font-bold text-gray-800 mb-3 text-lg">Bank Holidays</h3>
                        <p class="text-gray-600">All public holidays + closures</p>
                        <div class="mt-3 bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold inline-block">
                            <?= count($holidays_2026) ?> holidays
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search and Filter Section -->
        <div class="mb-8 bg-white rounded-2xl shadow-lg p-6 border-l-4 border-red-800">
            <div class="flex flex-col lg:flex-row items-center justify-between space-y-4 lg:space-y-0 lg:space-x-6">
                <div class="flex-1 w-full lg:w-auto">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-search text-red-800 text-xl"></i>
                        </div>
                        <input type="text" id="searchInput" placeholder=" Search Queensland holidays..."
                               class="block w-full pl-14 pr-4 py-4 border-2 border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-red-200 focus:border-red-800 text-lg transition-all"
                               onkeyup="searchHolidays()" autocomplete="off">
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <select id="filterType" class="pl-10 pr-6 py-4 border-2 border-gray-300 rounded-xl bg-white text-lg focus:outline-none focus:ring-4 focus:ring-red-200 focus:border-red-800 transition-all" onchange="filterHolidays()">
                        <option value=""> All Types</option>
                        <option value="National Holiday"> National</option>
                        <option value="QLD State Holiday"> QLD State</option>
                    </select>
                    <button onclick="clearSearch()" class="px-6 py-4 bg-red-500 hover:bg-red-600 text-white rounded-xl font-semibold transition-all">
                        <i class="fas fa-times-circle mr-2"></i>Clear
                    </button>
                </div>
            </div>
        </div>

        <!-- Search Results -->
        <div id="searchResults" class="mb-8 bg-white rounded-2xl shadow-lg p-6 hidden">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-search text-red-800 mr-3"></i>Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-4"></div>
        </div>

        <!-- Holiday List -->
        <div class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-blue-500 mb-8">
            <h3 class="text-3xl font-bold mb-6">
                <i class="fas fa-list text-blue-500 mr-3"></i>
                Queensland Public Holidays 2026
            </h3>
            <div class="space-y-4">
                <?php
                foreach ($holidays_2026 as $date => $holiday) {
                    $is_qld = ($holiday['type'] === 'QLD State Holiday');
                    $bg_class = $is_qld ? 'bg-gradient-to-r from-red-800 to-red-900 text-white' : 'bg-blue-50 border border-blue-200';
                    $formatted_date = htmlspecialchars(date('l, F j, Y', strtotime($date)), ENT_QUOTES, 'UTF-8');
                    
                    echo '<div class="flex items-center justify-between p-6 ' . $bg_class . ' rounded-xl shadow-md hover:shadow-lg transition-all">';
                    echo '<div class="flex items-center space-x-4">';
                    echo '<i class="fas ' . htmlspecialchars($holiday['icon'], ENT_QUOTES, 'UTF-8') . ' text-2xl ' . ($is_qld ? 'text-yellow-400' : 'text-red-800') . '"></i>';
                    echo '<div>';
                    echo '<div class="font-bold text-xl">' . htmlspecialchars($holiday['name'], ENT_QUOTES, 'UTF-8') . '</div>';
                    echo '<div class="text-sm ' . ($is_qld ? 'text-yellow-200' : 'text-gray-600') . ' font-semibold">' . $formatted_date . '</div>';
                    echo '<div class="text-xs ' . ($is_qld ? 'text-yellow-300' : 'text-gray-500') . '">' . htmlspecialchars($holiday['description'], ENT_QUOTES, 'UTF-8') . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="text-right">';
                    echo '<div class="px-4 py-2 ' . ($is_qld ? 'bg-yellow-400 text-red-800' : 'bg-red-100 text-red-800') . ' rounded-full text-sm font-bold">';
                    echo htmlspecialchars($holiday['type'], ENT_QUOTES, 'UTF-8');
                    echo '</div>';
                    if ($holiday['bank_holiday']) {
                        echo '<div class="text-xs mt-2 ' . ($is_qld ? 'text-yellow-300' : 'text-gray-500') . '">Bank Holiday</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <!-- Queensland FAQ Section -->
        <section class="bg-white rounded-2xl shadow-lg p-8 border-l-4 border-red-800 mb-8">
            <h2 class="text-4xl font-bold text-center mb-8">
                <i class="fas fa-question-circle text-red-800 mr-3"></i>
                Queensland Holidays FAQ
            </h2>
            <div class="space-y-6 max-w-5xl mx-auto">
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-ferris-wheel text-yellow-500 mr-3"></i>
                        What is the Royal Queensland Show (Ekka)?
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">The Royal Queensland Show, known as the Ekka, is Queensland's largest annual agricultural show held in August. It's a public holiday in the Brisbane area only (August 13, 2026) and features agricultural displays, entertainment, and the famous showbags.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-hammer text-blue-500 mr-3"></i>
                        When is Labour Day in Queensland?
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">Queensland observes Labour Day on the first Monday in May (May 5, 2026), which is different from most other Australian states. This day celebrates workers' rights and the eight-hour working day movement.</p>
                </div>
                <div class="bg-gray-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-crown text-yellow-500 mr-3"></i>
                        When is Queen's Birthday in Queensland?
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">Queensland celebrates Queen's Birthday on the first Monday in October (October 6, 2026), unlike most other states which observe it in June. This timing is unique to Queensland and provides a long weekend in spring.</p>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Secure and optimized JavaScript
        const holidaysData = <?= json_encode($holidays_2026, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>;
        
        function searchHolidays() {
            try {
                const term = document.getElementById('searchInput').value.toLowerCase().trim();
                const filter = document.getElementById('filterType').value;
                const results = document.getElementById('searchResults');
                const content = document.getElementById('searchResultsContent');
                
                if (!term && !filter) { 
                    results.classList.add('hidden'); 
                    return; 
                }
                
                const matches = Object.entries(holidaysData).filter(([date, h]) => {
                    const searchMatch = !term || 
                        h.name.toLowerCase().includes(term) || 
                        h.type.toLowerCase().includes(term) ||
                        h.description.toLowerCase().includes(term);
                    const filterMatch = !filter || h.type === filter;
                    return searchMatch && filterMatch;
                });
                
                if (matches.length > 0) {
                    content.innerHTML = matches.map(([date, h]) => {
                        const isQLD = h.type === 'QLD State Holiday';
                        const bgClass = isQLD ? 'bg-gradient-to-r from-red-800 to-red-900 text-white' : 'bg-blue-50 border border-blue-200';
                        const textClass = isQLD ? 'text-yellow-200' : 'text-gray-600';
                        
                        return <div class="p-6 ${bgClass} rounded-xl hover:shadow-md transition-all">
                            <div class="flex items-center space-x-3 mb-2">
                                <i class="fas ${h.icon} text-xl ${isQLD ? 'text-yellow-400' : 'text-red-600'}"></i>
                                <div class="font-bold text-lg">${h.name}</div>
                            </div>
                            <div class="text-sm ${textClass} mb-1">${new Date(date).toDateString()}</div>
                            <div class="text-xs ${textClass}">${h.type}</div>
                        </div>;
                    }).join('');
                } else {
                    content.innerHTML = '<div class="text-center py-12"><i class="fas fa-search text-4xl text-gray-400 mb-4"></i><p class="text-xl text-gray-500">No holidays found matching your search.</p></div>';
                }
                
                results.classList.remove('hidden');
                results.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } catch (error) {
                console.error('Search error:', error);
            }
        }
        
        function filterHolidays() { 
            searchHolidays(); 
        }
        
        function clearSearch() { 
            document.getElementById('searchInput').value = ''; 
            document.getElementById('filterType').value = ''; 
            document.getElementById('searchResults').classList.add('hidden'); 
        }
        
        // Auto-hide search results when clicking outside
        document.addEventListener('click', function(event) {
            const searchResults = document.getElementById('searchResults');
            const searchInput = document.getElementById('searchInput');
            const filterType = document.getElementById('filterType');
            
            if (!searchResults.contains(event.target) && 
                !searchInput.contains(event.target) && 
                !filterType.contains(event.target)) {
                if (!searchInput.value.trim() && !filterType.value) {
                    searchResults.classList.add('hidden');
                }
            }
        });
        
        // Keyboard shortcuts
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey || event.metaKey) {
                if (event.key === 'f') {
                    event.preventDefault();
                    document.getElementById('searchInput').focus();
                }
            }
        });
    </script>

<?php include '../../footer.php'; ?>
</body>
</html>
