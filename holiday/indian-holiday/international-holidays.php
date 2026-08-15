<?php include '../../header.php'; ?>
    <title>International Holidays 2026 | Global Observances Calendar</title>
    <meta name="description" content="Complete list of International Holidays 2026. Find dates for Valentine's Day, International Women's Day, Labour Day, and other global observances.">
    <meta name="keywords" content="International holidays 2026, global holidays, Valentine's Day, Women's Day, Labour Day, Children's Day, worldwide celebrations">
    <meta name="author" content="Global Holiday Calendar">
        <meta property="og:title" content="International Holidays 2026 - Global Observances Calendar">
    <meta property="og:description" content="Complete list of International Holidays 2026 including Valentine's Day, Women's Day, Labour Day, and more.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/4B0082/FFFFFF?text=International+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="International Holidays 2026">
    <meta name="twitter:description" content="Complete list of International Holidays 2026.">
    <meta name="language" content="English">
    <meta name="geo.region" content="GLOBAL">
    <meta name="geo.placename" content="Worldwide">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "International Holidays 2026",
        "description": "Complete list of International Holidays 2026 including Valentine's Day, Women's Day, Labour Day, and more.",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are some major international holidays in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Major international holidays in 2026 include Valentine's Day (February 14), International Women's Day (March 8), Labour Day (May 1), Children's Day (November 14), and Christmas (December 25)."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Is Valentine's Day celebrated worldwide?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Yes, Valentine's Day (February 14, 2026) is celebrated in many countries around the world as a day of love and affection, although the traditions and level of celebration can vary."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Global Holiday Calendar"
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
                        'intl-purple': '#4B0082', // Indigo for international theme
                        'intl-pink': '#FF69B4',   // HotPink for Valentine's
                        'intl-blue': '#1E90FF',   // DodgerBlue for Women's Day
                        'intl-yellow': '#FFD700'  // Gold for Labour Day
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-purple-50 to-indigo-100 min-h-screen">
    <?php
    // --- Simulate the data structure from the original file ---
    // In a real scenario, you might include a data file or fetch from a database
    $holidays_2026_simulated = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'International',
            'description' => 'Celebration of the new year worldwide',
            'icon' => 'fa-calendar-day',
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
        '2026-03-20' => [
            'name' => 'International Day of Happiness',
            'type' => 'International',
            'description' => 'UN recognized day promoting happiness and well-being',
            'icon' => 'fa-smile',
            'bank_holiday' => false
        ],
        '2026-04-22' => [
            'name' => 'Earth Day',
            'type' => 'International',
            'description' => 'Global environmental awareness day',
            'icon' => 'fa-globe-americas',
            'bank_holiday' => false
        ],
        '2026-05-01' => [
            'name' => 'Labour Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'bank_holiday' => true
        ],
        '2026-06-05' => [
            'name' => 'World Environment Day',
            'type' => 'International',
            'description' => 'UN day for encouraging worldwide awareness',
            'icon' => 'fa-leaf',
            'bank_holiday' => false
        ],
        '2026-06-21' => [
            'name' => 'International Yoga Day',
            'type' => 'International',
            'description' => 'Global day for yoga practice and awareness',
            'icon' => 'fa-spa',
            'bank_holiday' => false
        ],
        '2026-09-21' => [
            'name' => 'International Day of Peace',
            'type' => 'International',
            'description' => 'UN sanctioned day devoted to world peace',
            'icon' => 'fa-dove',
            'bank_holiday' => false
        ],
        '2026-10-16' => [
            'name' => 'World Food Day',
            'type' => 'International',
            'description' => 'Day of action against hunger',
            'icon' => 'fa-utensils',
            'bank_holiday' => false
        ],
        '2026-11-14' => [
            'name' => 'Children\'s Day',
            'type' => 'International',
            'description' => 'Universal Children\'s Day',
            'icon' => 'fa-child',
            'bank_holiday' => false
        ],
        '2026-12-10' => [
            'name' => 'Human Rights Day',
            'type' => 'International',
            'description' => 'Commemorating the Universal Declaration of Human Rights',
            'icon' => 'fa-balance-scale',
            'bank_holiday' => false
        ],
        '2026-12-25' => [
            'name' => 'Christmas',
            'type' => 'International',
            'description' => 'Celebration of Jesus Christ\'s birth worldwide',
            'icon' => 'fa-star',
            'bank_holiday' => true
        ]
    ];

    // Filter to get only International Holidays
    $international_holidays_2026 = array_filter($holidays_2026_simulated, function($holiday) {
        return $holiday['type'] === 'International';
    });

    // Sort holidays by date
    ksort($international_holidays_2026);

    ?>
    <!-- Header -->
    <header class="bg-gradient-to-r from-intl-purple to-purple-800 text-white shadow-lg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-10 left-1/4 w-16 h-16 bg-white rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 py-6 relative z-10">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-globe-americas text-5xl text-white drop-shadow-lg"></i>
                        <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold flex items-center space-x-3">
                            <span>International Holidays 2026</span>
                            <i class="fas fa-earth-americas text-2xl animate-bounce"></i>
                        </h1>
                        <p class="text-lg opacity-90">Global Observances & Celebrations</p>
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
                        <span class="text-sm opacity-75"><?php echo count($international_holidays_2026); ?> International Holidays</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fas fa-heart text-2xl text-intl-pink"></i>
                <i class="fas fa-venus text-2xl text-intl-blue"></i>
                <i class="fas fa-hard-hat text-2xl text-intl-yellow"></i>
                <i class="fas fa-child text-2xl text-green-300"></i>
                <i class="fas fa-star text-2xl text-yellow-200"></i>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2">
                <li><a href="#" class="hover:text-purple-600 transition-colors">Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-800 font-medium">International Holidays 2026</li>
            </ol>
        </nav>

        <!-- SEO Introduction Section -->
        <section class="mb-8 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg p-6 border-l-4 border-intl-purple">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center space-x-3">
                    <i class="fas fa-calendar-alt text-intl-purple"></i>
                    <span>Global Celebrations in 2026</span>
                    <i class="fas fa-star text-yellow-500"></i>
                </h2>
                <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                    Explore the key international holidays and observances happening throughout 2026. This calendar highlights globally recognized events like Valentine's Day, International Women's Day, Labour Day, and more. Whether you're planning for a special occasion or simply curious about worldwide celebrations, this guide provides the essential dates.
                </p>
                <div class="grid md:grid-cols-2 gap-4 mt-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-purple-200">
                        <i class="fas fa-heart text-2xl text-intl-pink mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Cultural Observances</h3>
                        <p class="text-sm text-gray-600">Holidays like Valentine's Day and Christmas celebrated internationally.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm border border-purple-200">
                        <i class="fas fa-users text-2xl text-intl-blue mb-2"></i>
                        <h3 class="font-semibold text-gray-800 mb-2">Awareness Days</h3>
                        <p class="text-sm text-gray-600">Important global awareness days like International Women's Day.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Search Bar -->
        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-intl-purple">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
                <div class="flex-1 w-full md:w-96">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-intl-purple text-lg"></i>
                        </div>
                        <input type="text"
                               id="searchInput"
                               placeholder="🔍 Search international holidays..."
                               class="block w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-intl-purple focus:border-intl-purple text-lg"
                               onkeyup="searchHolidays()">
                    </div>
                </div>
                 <button onclick="clearSearch()"
                            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg transition-colors flex items-center space-x-2 shadow-md">
                        <i class="fas fa-times-circle"></i>
                        <span>Clear</span>
                    </button>
            </div>
        </div>

        <!-- Search Results -->
        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-search text-intl-purple mr-3"></i>
                Search Results
            </h3>
            <div id="searchResultsContent" class="space-y-3">
                <!-- Search results will be populated here -->
            </div>
        </div>

        <!-- Holiday List -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-gray-100 to-gray-200 p-4 border-b">
                <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                    <i class="fas fa-list text-intl-purple mr-3"></i>
                    <span>List of International Holidays 2026</span>
                </h2>
            </div>
            <div class="divide-y divide-gray-200">
                <?php if (empty($international_holidays_2026)): ?>
                    <div class="p-6 text-center text-gray-500">
                        No international holidays found for 2026.
                    </div>
                <?php else: ?>
                    <?php foreach ($international_holidays_2026 as $date => $holiday): ?>
                        <div class="p-6 hover:bg-purple-50 transition-colors">
                            <div class="flex flex-col md:flex-row md:items-center justify-between space-y-4 md:space-y-0">
                                <div class="flex items-start space-x-4">
                                    <div class="mt-1">
                                        <i class="fas <?php echo $holiday['icon']; ?> text-2xl text-intl-purple"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800"><?php echo htmlspecialchars($holiday['name']); ?></h3>
                                        <p class="text-gray-600 mt-1"><?php echo htmlspecialchars($holiday['description']); ?></p>
                                        <div class="mt-2 flex items-center text-sm text-gray-500">
                                            <i class="fas fa-tag mr-1 text-intl-purple"></i>
                                            <span><?php echo htmlspecialchars($holiday['type']); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <div class="text-lg font-bold text-intl-purple">
                                        <?php echo date('F j, Y', strtotime($date)); ?>
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        <?php echo date('l', strtotime($date)); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
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
                <button onclick="printCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-purple-100 to-purple-200 hover:from-purple-200 hover:to-purple-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-purple-300">
                    <i class="fas fa-print text-3xl text-purple-600 mb-3"></i>
                    <span class="text-sm font-medium text-purple-800">Print</span>
                    <div class="text-xs text-purple-600 mt-1">🖨️ Calendar</div>
                </button>
                <button onclick="downloadCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-green-100 to-green-200 hover:from-green-200 hover:to-green-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-green-300">
                    <i class="fas fa-download text-3xl text-green-600 mb-3"></i>
                    <span class="text-sm font-medium text-green-800">Download</span>
                    <div class="text-xs text-green-600 mt-1">💾 Save</div>
                </button>
                <button onclick="shareCalendar()" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-100 to-blue-200 hover:from-blue-200 hover:to-blue-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-blue-300">
                    <i class="fas fa-share-alt text-3xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-blue-800">Share</span>
                    <div class="text-xs text-blue-600 mt-1">📤 Social</div>
                </button>
                 <button onclick="window.location.href='tamil-nadu-holidays-2026.php'" class="flex flex-col items-center p-6 bg-gradient-to-br from-blue-100 to-blue-200 hover:from-blue-200 hover:to-blue-300 rounded-lg transition-all transform hover:scale-105 shadow-md border border-blue-300">
                    <i class="fas fa-arrow-left text-3xl text-blue-600 mb-3"></i>
                    <span class="text-sm font-medium text-blue-800">Back to TN</span>
                    <div class="text-xs text-blue-600 mt-1">📅 Holidays</div>
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
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-heart text-intl-pink"></i>
                            <span>Is Valentine's Day a public holiday?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Valentine's Day (February 14, 2026) is widely celebrated around the world as a day of love and romance.
                            However, it is generally not a public or bank holiday in most countries. Businesses and schools typically operate on normal hours.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-venus text-intl-blue"></i>
                            <span>What is the significance of International Women's Day?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            International Women's Day (March 8, 2026) is a global day celebrating women's social, economic, cultural, and political achievements.
                             It also calls for gender equality and women's rights. Many organizations host events, and it's recognized by the United Nations.
                             While not always a public holiday, it's widely observed.
                        </p>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-hard-hat text-intl-yellow"></i>
                            <span>Is Labour Day celebrated the same way everywhere?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Labour Day, or International Workers' Day (May 1, 2026), is celebrated globally, but the nature of celebrations varies.
                            In many countries, it's a significant public holiday with parades, rallies, and events organized by labor unions.
                            In others, it might be more low-key or combined with other local holidays.
                        </p>
                    </div>
                     <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 flex items-center space-x-2">
                            <i class="fas fa-globe text-purple-500"></i>
                            <span>Are all these holidays official in every country?</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            No, the status of international holidays varies greatly by country. Some, like Christmas (December 25, 2026) and New Year's Day (January 1, 2026),
                            are widely recognized public holidays, while others like Valentine's Day or International Women's Day are cultural or awareness observances.
                            They might be celebrated but not necessarily result in a day off work or school.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // JavaScript functionality
        // Holiday data for search functionality
        const holidaysData = <?php echo json_encode($international_holidays_2026); ?>;
        function searchHolidays() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const searchResults = document.getElementById('searchResults');
            const searchResultsContent = document.getElementById('searchResultsContent');
            if (searchTerm === '') {
                searchResults.classList.add('hidden');
                return;
            }
            const results = [];
            Object.entries(holidaysData).forEach(([date, holiday]) => {
                const matchesSearch = searchTerm === '' ||
                    holiday.name.toLowerCase().includes(searchTerm) ||
                    holiday.description.toLowerCase().includes(searchTerm);
                if (matchesSearch) {
                    results.push({ date, ...holiday });
                }
            });
            displaySearchResults(results);
        }

        function displaySearchResults(results) {
            const searchResults = document.getElementById('searchResults');
            const searchResultsContent = document.getElementById('searchResultsContent');
            if (results.length === 0) {
                searchResultsContent.innerHTML = `
                    <div class="text-center py-8 text-gray-500">
                        <i class="fas fa-search text-4xl mb-4"></i>
                        <p class="text-lg">No international holidays found matching your search criteria.</p>
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
                        <div class="flex items-center justify-between p-4 bg-purple-50 rounded-lg border-l-4 border-purple-500 hover:bg-purple-100 transition-colors">
                            <div class="flex items-center space-x-3">
                                <i class="fas ${icon} text-purple-600 text-xl"></i>
                                <div>
                                    <div class="font-semibold text-gray-800 text-lg">${name}</div>
                                    <div class="text-sm text-gray-600">${type}</div>
                                    <div class="text-xs text-gray-500">${description}</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-sm font-medium text-purple-600">${formattedDate}</div>
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
            document.getElementById('searchResults').classList.add('hidden');
        }

        function printCalendar() {
            window.print();
        }

        function downloadCalendar() {
            // Create a simple text version for download
            let content = `International Holidays 2026\n========================\n\n`;
            <?php foreach ($international_holidays_2026 as $date => $holiday): ?>
            content += `<?php echo date('F j, Y', strtotime($date)) . " - " . $holiday['name'] . " (" . $holiday['type'] . ")\n"; ?>`;
            content += `  <?php echo $holiday['description'] . "\n\n"; ?>`;
            <?php endforeach; ?>
            const blob = new Blob([content], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'international-holidays-2026.txt';
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'International Holidays 2026',
                    text: 'Check out the International Holiday calendar for 2026!',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                navigator.clipboard.writeText(window.location.href).then(() => {
                    alert('Calendar URL copied to clipboard!');
                });
            }
        }

        // Add smooth scrolling and animations
        document.addEventListener('DOMContentLoaded', function() {
            // Add fade-in animation to list items
            const items = document.querySelectorAll('.divide-y > div');
            items.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.5s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
<?php include '../../footer.php'; ?>
</body>
</html>