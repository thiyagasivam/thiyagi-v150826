<?php include '../../header.php'; ?>

    <title>Karnataka Holidays 2026 | Complete Calendar | Karnataka Festivals | National Holidays</title>
    <meta name="description" content="Complete Karnataka Holiday Calendar 2026. Find all Karnataka festivals, national holidays, cultural events, and religious celebrations. Plan your year with our comprehensive holiday guide.">
    <meta name="keywords" content="Karnataka holidays 2026, Karnataka festivals, Ugadi, Karnataka Rajyotsava, national holidays India, Karnataka cultural events, Karnataka calendar, holidays Karnataka, festival dates 2026">
    <meta name="author" content="Karnataka Holiday Calendar">
        <meta property="og:title" content="Karnataka Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Karnataka Holiday Calendar 2026 with all festivals, national holidays, and cultural events. Plan your year with our comprehensive guide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/1976D2/FFFFFF?text=Karnataka+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Karnataka Holidays 2026">
    <meta name="twitter:description" content="Complete Karnataka Holiday Calendar 2026 with all festivals and holidays.">
    <meta name="language" content="English, Kannada">
    <meta name="geo.region" content="IN-KA">
    <meta name="geo.placename" content="Karnataka, India">
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Karnataka Holidays 2026",
        "description": "Complete Karnataka Holiday Calendar 2026 with all festivals, national holidays, and cultural events",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "publisher": {
            "@type": "Organization",
            "name": "Karnataka Holiday Calendar"
        },
        "datePublished": "2026-01-01",
        "dateModified": "<?php echo date('Y-m-d'); ?>"
    }
    </script>
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What are the major public holidays in Karnataka in 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Major holidays include Ugadi, Makara Sankranti, Karnataka Rajyotsava, Deepavali, Independence Day, Republic Day, and Gandhi Jayanti."
            }
        },
        {
            "@type": "Question",
            "name": "Are all festivals bank holidays in Karnataka?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Not all festivals are bank holidays. Only select festivals and national holidays are observed as bank holidays."
            }
        },
        {
            "@type": "Question",
            "name": "When is Karnataka Rajyotsava in 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Karnataka Rajyotsava is on November 1, 2026."
            }
        },
        {
            "@type": "Question",
            "name": "How can I download the Karnataka holiday calendar?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Click the \"Download\" button above to save the holiday calendar for offline use."
            }
        },
        {
            "@type": "Question",
            "name": "Where can I find Kannada festival dates?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "All major Kannada festival dates are listed above in the holiday calendar and festival list."
            }
        }
    ]
}
</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ka-blue': '#1976D2',
                        'ka-yellow': '#FFD600',
                        'ka-green': '#388E3C',
                        'ka-red': '#D32F2F'
                    }
                }
            }
        }
    </script>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <?php
    // Karnataka Holidays 2026 Data
    $holidays_2026 = [
        '2026-01-01' => [
            'name' => 'New Year\'s Day',
            'type' => 'National Holiday',
            'description' => 'Celebration of the new year',
            'icon' => 'fa-calendar-day',
            'bank_holiday' => true
        ],
        '2026-01-14' => [
            'name' => 'Makara Sankranti',
            'type' => 'Karnataka Festival',
            'description' => 'Harvest festival celebrated in Karnataka',
            'icon' => 'fa-sun',
            'bank_holiday' => true
        ],
        '2026-03-29' => [
            'name' => 'Ugadi',
            'type' => 'Karnataka Festival',
            'description' => 'Kannada New Year festival',
            'icon' => 'fa-calendar-plus',
            'bank_holiday' => true
        ],
        '2026-04-14' => [
            'name' => 'Dr. Ambedkar Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Dr. B.R. Ambedkar',
            'icon' => 'fa-user-graduate',
            'bank_holiday' => true
        ],
        '2026-05-01' => [
            'name' => 'Labour Day',
            'type' => 'International',
            'description' => 'International Workers\' Day',
            'icon' => 'fa-hard-hat',
            'bank_holiday' => true
        ],
        '2026-08-15' => [
            'name' => 'Independence Day',
            'type' => 'National Holiday',
            'description' => 'Indian Independence Day',
            'icon' => 'fa-dove',
            'bank_holiday' => true
        ],
        '2026-10-02' => [
            'name' => 'Gandhi Jayanti',
            'type' => 'National Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-peace',
            'bank_holiday' => true
        ],
        '2026-11-01' => [
            'name' => 'Karnataka Rajyotsava',
            'type' => 'Karnataka Festival',
            'description' => 'Formation Day of Karnataka State',
            'icon' => 'fa-flag',
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
        '2026-03-14' => [
            'name' => 'Mahashivratri',
            'type' => 'Bank Holiday',
            'description' => 'Festival dedicated to Lord Shiva',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-04-18' => [
            'name' => 'Good Friday',
            'type' => 'Bank Holiday',
            'description' => 'Christian religious holiday - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-07-07' => [
            'name' => 'Bakrid/Eid al-Adha',
            'type' => 'Bank Holiday',
            'description' => 'Islamic festival - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-08-08' => [
            'name' => 'Varamahalakshmi Vrata',
            'type' => 'Bank Holiday',
            'description' => 'Festival for Goddess Lakshmi',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-09-06' => [
            'name' => 'Ganesh Chaturthi',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Lord Ganesha',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-02' => [
            'name' => 'Gandhi Jayanti',
            'type' => 'Bank Holiday',
            'description' => 'Birth anniversary of Mahatma Gandhi',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-03' => [
            'name' => 'Maha Navami',
            'type' => 'Bank Holiday',
            'description' => 'Ninth day of Navratri - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-04' => [
            'name' => 'Vijaya Dashami/Dussehra',
            'type' => 'Bank Holiday',
            'description' => 'Tenth day of Navratri - Banks closed',
            'icon' => 'fa-university',
            'bank_holiday' => true
        ],
        '2026-10-21' => [
            'name' => 'Deepavali',
            'type' => 'Bank Holiday',
            'description' => 'Festival of lights - Banks closed',
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
    <header class="bg-gradient-to-r from-ka-blue to-ka-yellow text-white shadow-lg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
            <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
            <div class="absolute bottom-10 left-1/4 w-16 h-16 bg-white rounded-full"></div>
        </div>
        <div class="container mx-auto px-4 py-6 relative z-10">
            <div class="flex items-center justify-between">
                <h1 class="text-3xl font-bold tracking-tight">Karnataka Holidays 2026 <span class="text-ka-yellow text-xl font-normal ml-2">ಕರ್ನಾಟಕ ರಜೆಗಳು</span></h1>
                <span class="text-lg"><i class="fa fa-calendar-alt mr-2"></i>2026</span>
            </div>
            <div class="flex justify-center mt-6 space-x-8 opacity-60">
                <i class="fa fa-flag fa-2x"></i>
                <i class="fa fa-sun fa-2x"></i>
                <i class="fa fa-star fa-2x"></i>
                <i class="fa fa-moon fa-2x"></i>
                <i class="fa fa-gem fa-2x"></i>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <nav class="mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
            <a href="/Live Pages/thiyagi/" class="hover:underline">Home</a> /
            <a href="/Live Pages/thiyagi/holiday/indian-holiday/" class="hover:underline">Indian Holidays</a> /
            <span class="font-semibold">Karnataka Holidays 2026</span>
        </nav>

        <section class="mb-8 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-ka-blue">
            <h2 class="text-2xl font-semibold mb-2">Karnataka Holiday Calendar 2026</h2>
            <p>
                Discover all public, bank, and festival holidays in Karnataka for 2026. This calendar includes major Kannada festivals like Ugadi, Karnataka Rajyotsava, Varamahalakshmi Vrata, and national holidays. Plan your year with our comprehensive list of holidays and cultural events.
            </p>
        </section>

        <div class="mb-6 bg-white rounded-lg shadow-md p-4 border-l-4 border-ka-blue flex items-center">
            <input type="text" id="holidaySearch" class="flex-1 border-none focus:ring-0 outline-none bg-transparent text-lg" placeholder="Search holidays, festivals, or dates..." oninput="searchHolidays()">
            <button onclick="clearSearch()" class="ml-2 text-ka-blue hover:text-ka-yellow"><i class="fa fa-times"></i></button>
        </div>
        <div id="searchResults" class="mb-6 bg-white rounded-lg shadow-md p-4 hidden"></div>

        <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4 border-l-4 border-ka-green">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" class="text-ka-blue hover:text-ka-yellow"><i class="fa fa-chevron-left"></i> Prev</a>
            <span class="font-semibold text-lg"><?php echo $month_names[$current_month] . " " . $current_year; ?></span>
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" class="text-ka-blue hover:text-ka-yellow">Next <i class="fa fa-chevron-right"></i></a>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <table class="w-full text-center">
                <thead>
                    <tr class="bg-ka-blue text-white">
                        <th class="py-2">Sun</th>
                        <th class="py-2">Mon</th>
                        <th class="py-2">Tue</th>
                        <th class="py-2">Wed</th>
                        <th class="py-2">Thu</th>
                        <th class="py-2">Fri</th>
                        <th class="py-2">Sat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $day = 1;
                    $started = false;
                    for ($i = 0; $i < 6; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < 7; $j++) {
                            if (!$started && $j == $first_day_of_week) $started = true;
                            if ($started && $day <= $days_in_month) {
                                $date_str = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                                $is_holiday = isset($all_holidays_2026[$date_str]);
                                echo '<td class="py-2 px-1 '.($is_holiday ? 'bg-ka-yellow font-bold text-ka-blue rounded shadow' : '').'">';
                                echo $day;
                                if ($is_holiday) {
                                    echo '<br><i class="fa '.$all_holidays_2026[$date_str]['icon'].'"></i>';
                                }
                                echo '</td>';
                                $day++;
                            } else {
                                echo '<td class="py-2 px-1"></td>';
                            }
                        }
                        echo "</tr>";
                        if ($day > $days_in_month) break;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-8 grid md:grid-cols-2 gap-6">
            <?php
            foreach ($holidays_2026 as $date => $holiday) {
                echo '<div class="bg-white rounded-lg shadow-md p-4 flex items-center border-l-4 '.($holiday['bank_holiday'] ? 'border-ka-green' : 'border-ka-blue').'">';
                echo '<div class="mr-4 text-2xl text-ka-blue"><i class="fa '.$holiday['icon'].'"></i></div>';
                echo '<div>';
                echo '<div class="font-semibold text-lg">'.$holiday['name'].'</div>';
                echo '<div class="text-sm text-gray-500">'.date('F d, Y', strtotime($date)).' &middot; '.$holiday['type'].'</div>';
                echo '<div class="text-gray-700">'.$holiday['description'].'</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-ka-blue">
            <h3 class="text-xl font-semibold mb-4">Karnataka Bank Holidays 2026</h3>
            <ul class="space-y-2">
                <?php
                foreach ($bank_holidays_2026 as $date => $holiday) {
                    echo '<li class="flex items-center">';
                    echo '<span class="mr-3 text-ka-blue"><i class="fa '.$holiday['icon'].'"></i></span>';
                    echo '<span class="font-semibold">'.$holiday['name'].'</span>';
                    echo '<span class="mx-2 text-gray-400">|</span>';
                    echo '<span class="text-gray-600">'.date('F d, Y', strtotime($date)).'</span>';
                    echo '<span class="mx-2 text-gray-400">|</span>';
                    echo '<span class="text-gray-500">'.$holiday['description'].'</span>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-lg p-6 border-l-4 border-ka-yellow flex flex-wrap gap-4">
            <button onclick="window.print()" class="bg-ka-blue text-white px-4 py-2 rounded hover:bg-ka-yellow hover:text-ka-blue transition"><i class="fa fa-print mr-2"></i>Print Calendar</button>
            <button onclick="downloadCalendar()" class="bg-ka-green text-white px-4 py-2 rounded hover:bg-ka-yellow hover:text-ka-green transition"><i class="fa fa-download mr-2"></i>Download</button>
            <button onclick="shareCalendar()" class="bg-ka-red text-white px-4 py-2 rounded hover:bg-ka-yellow hover:text-ka-red transition"><i class="fa fa-share-alt mr-2"></i>Share</button>
            <button onclick="window.location.href='?month=<?php echo date('n'); ?>&year=2026'" class="bg-ka-yellow text-ka-blue px-4 py-2 rounded hover:bg-ka-blue hover:text-white transition"><i class="fa fa-sync mr-2"></i>Current Month</button>
        </div>

        <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-ka-green">
            <h3 class="text-xl font-semibold mb-4">Frequently Asked Questions (FAQ) - Karnataka Holidays 2026</h3>
            <div class="space-y-4">
                <div>
                    <div class="font-semibold">Q: What are the major public holidays in Karnataka in 2026?</div>
                    <div class="text-gray-700">A: Major holidays include Ugadi, Makara Sankranti, Karnataka Rajyotsava, Deepavali, Independence Day, Republic Day, and Gandhi Jayanti.</div>
                </div>
                <div>
                    <div class="font-semibold">Q: Are all festivals bank holidays in Karnataka?</div>
                    <div class="text-gray-700">A: Not all festivals are bank holidays. Only select festivals and national holidays are observed as bank holidays.</div>
                </div>
                <div>
                    <div class="font-semibold">Q: When is Karnataka Rajyotsava in 2026?</div>
                    <div class="text-gray-700">A: Karnataka Rajyotsava is on November 1, 2026.</div>
                </div>
                <div>
                    <div class="font-semibold">Q: How can I download the Karnataka holiday calendar?</div>
                    <div class="text-gray-700">A: Click the "Download" button above to save the holiday calendar for offline use.</div>
                </div>
                <div>
                    <div class="font-semibold">Q: Where can I find Kannada festival dates?</div>
                    <div class="text-gray-700">A: All major Kannada festival dates are listed above in the holiday calendar and festival list.</div>
                </div>
            </div>
        </section>
    </main>

    
    <script>
        const holidaysData = <?php echo json_encode($all_holidays_2026); ?>;

        function searchHolidays() {
            const query = document.getElementById('holidaySearch').value.toLowerCase();
            const results = [];
            for (const [date, holiday] of Object.entries(holidaysData)) {
                if (
                    holiday.name.toLowerCase().includes(query) ||
                    holiday.type.toLowerCase().includes(query) ||
                    holiday.description.toLowerCase().includes(query) ||
                    date.includes(query)
                ) {
                    results.push({date, ...holiday});
                }
            }
            displaySearchResults(results);
        }

        function displaySearchResults(results) {
            const container = document.getElementById('searchResults');
            if (!results.length) {
                container.innerHTML = '<div class="text-gray-500">No holidays found.</div>';
                container.classList.remove('hidden');
                return;
            }
            let html = '<ul class="divide-y">';
            results.forEach(holiday => {
                html += `<li class="py-2 flex items-center">
                    <span class="mr-3 text-ka-blue"><i class="fa ${holiday.icon}"></i></span>
                    <span class="font-semibold">${holiday.name}</span>
                    <span class="mx-2 text-gray-400">|</span>
                    <span class="text-gray-600">${new Date(holiday.date).toLocaleDateString('en-IN', {year:'numeric', month:'long', day:'numeric'})}</span>
                    <span class="mx-2 text-gray-400">|</span>
                    <span class="text-gray-500">${holiday.description}</span>
                </li>`;
            });
            html += '</ul>';
            container.innerHTML = html;
            container.classList.remove('hidden');
        }

        function clearSearch() {
            document.getElementById('holidaySearch').value = '';
            document.getElementById('searchResults').classList.add('hidden');
        }

        function downloadCalendar() {
            alert('Download functionality coming soon! (Export as PDF/CSV)');
        }

        function shareCalendar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Karnataka Holidays 2026',
                    url: window.location.href
                });
            } else {
                prompt('Copy this link to share:', window.location.href);
            }
        }
    </script>
    
<?php include '../../footer.php'; ?>