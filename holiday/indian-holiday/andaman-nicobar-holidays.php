<?php include '../../header.php'; ?>

    <title>Andaman & Nicobar Holidays 2026 | Complete Calendar | Island Festivals | National Holidays</title>
    <meta name="description" content="Complete Andaman & Nicobar Holiday Calendar 2026. Find island festivals, national & regional holidays, bank holidays and cultural events.">
    <meta name="keywords" content="Andaman holidays 2026, Nicobar festivals, Andaman and Nicobar calendar, island holidays, India holidays 2026, Nicobar holidays 2026, island festivals 2026, local bank holidays Andaman, Nicobar calendar 2026">
    <meta name="author" content="Andaman & Nicobar Holiday Calendar">
        <meta property="og:title" content="Andaman & Nicobar Holidays 2026 - Complete Calendar">
    <meta property="og:description" content="Complete Andaman & Nicobar Holiday Calendar 2026 with national, regional and bank holidays.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="https://via.placeholder.com/1200x630/00BFA5/FFFFFF?text=Andaman+%26+Nicobar+Holidays+2026">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Andaman & Nicobar Holidays 2026">
    <meta name="twitter:description" content="Complete Andaman & Nicobar Holiday Calendar 2026 with national, regional and bank holidays.">
    <meta name="language" content="English, Hindi">
    <meta name="geo.region" content="IN-AN">
    <meta name="geo.placename" content="Andaman and Nicobar Islands, India">
    <link rel="icon" href="/favicon.ico">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Andaman & Nicobar Holidays 2026",
        "description": "Complete Andaman & Nicobar Holiday Calendar 2026 with national, regional and bank holidays",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "mainEntity": {
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main island-specific observances in Andaman & Nicobar for 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Andaman-specific observances include regional commemorations and cultural island festivals alongside national holidays. Check the calendar for dates such as Andaman Day."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Which national holidays apply to Andaman & Nicobar in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Standard national holidays like Republic Day (Jan 26), Independence Day (Aug 15) and Gandhi Jayanti (Oct 2) apply to the islands."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are bank holidays different in Andaman & Nicobar?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Banks observe national holidays and some regional bank holidays. Refer to the Bank Holidays section for details."
                    }
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Andaman & Nicobar Holiday Calendar"
        },
        "datePublished": "2026-01-01",
        "dateModified": "<?php echo date('Y-m-d'); ?>"
    }
    </script>

        <!-- FAQ schema (JSON-LD) matching the on-page FAQ section -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What are the main island-specific observances in Andaman & Nicobar for 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Andaman-specific observances include regional commemorations and cultural island festivals such as Andaman Day alongside national holidays. Local event dates are listed in the calendar and holiday list on this page."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Which national holidays apply to Andaman & Nicobar in 2026?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Standard national holidays like Republic Day (Jan 26), Independence Day (Aug 15) and Gandhi Jayanti (Oct 2) apply to the islands and are shown in the calendar above."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Are bank holidays different in Andaman & Nicobar?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Banks observe national holidays and sometimes regional bank holidays. Refer to the Bank Holidays entries in the holiday list for details on bank closures."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How can I navigate to a specific month?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Use the Prev / Next controls above the calendar, or click holiday entries to view the month. You can also pass month and year as URL parameters (e.g. ?month=3&year=2026)."
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
                        'an-cyan': '#00BFA5',
                        'an-teal': '#00897B',
                        'an-blue': '#0288D1',
                        'an-sand': '#F5DEB3'
                    }
                }
            }
        }
    </script>

<body class="bg-gradient-to-br from-cyan-50 to-emerald-100 min-h-screen">
<?php
// Add icon mapping helper (fallbacks for non-standard icon names)
$icon_map = [
    'fa-island' => 'fa-umbrella-beach',
    'fa-peace' => 'fa-hand-holding-heart' // fallback if original not present
];
function get_icon_class($icon) {
    global $icon_map;
    if (isset($icon_map[$icon])) $icon = $icon_map[$icon];
    // default to star if empty
    if (empty($icon)) return 'fas fa-star';
    // Prefix with FontAwesome solid class for consistency
    return (strpos($icon, 'fa-') === 0) ? "fas $icon" : "fas fa-star";
}

// Andaman & Nicobar Holidays 2026 Data
$holidays_2026 = [
    '2026-01-01' => [
        'name' => "New Year's Day",
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
        'name' => "Valentine's Day",
        'type' => 'International',
        'description' => "Day of love and affection",
        'icon' => 'fa-heart',
        'bank_holiday' => false
    ],
    '2026-03-05' => [
        'name' => 'Andaman Day',
        'type' => 'Regional Holiday',
        'description' => 'Local island commemoration and cultural events',
        'icon' => 'fa-island',
        'bank_holiday' => true
    ],
    '2026-03-21' => [
        'name' => 'Tamil New Year (observed)',
        'type' => 'Cultural',
        'description' => 'Observed by Tamil-speaking communities on the islands',
        'icon' => 'fa-calendar-plus',
        'bank_holiday' => true
    ],
    '2026-04-14' => [
        'name' => 'Ambedkar Jayanti',
        'type' => 'National Holiday',
        'description' => 'Birth anniversary of Dr. B.R. Ambedkar',
        'icon' => 'fa-university',
        'bank_holiday' => true
    ],
    '2026-04-18' => [
        'name' => 'Good Friday',
        'type' => 'Religious',
        'description' => 'Christian observance',
        'icon' => 'fa-cross',
        'bank_holiday' => true
    ],
    '2026-05-01' => [
        'name' => 'Labour Day',
        'type' => 'International',
        'description' => "International Workers' Day",
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
    '2026-11-14' => [
        'name' => "Children's Day",
        'type' => 'National',
        'description' => "Birth anniversary of Jawaharlal Nehru",
        'icon' => 'fa-child',
        'bank_holiday' => false
    ],
    '2026-12-25' => [
        'name' => 'Christmas',
        'type' => 'Religious',
        'description' => "Celebration of Jesus Christ's birth",
        'icon' => 'fa-star',
        'bank_holiday' => true
    ],
    '2026-07-01' => [
        'name' => 'Nicobar Day',
        'type' => 'Regional Holiday',
        'description' => 'Nicobar Islands regional observance and cultural events',
        'icon' => 'fa-flag', // simple flag icon for Nicobar Day
        'bank_holiday' => true
    ]
];

// Bank Holidays 2026 - Additional bank-specific entries for Andaman & Nicobar
$bank_holidays_2026 = [
    '2026-01-26' => [
        'name' => 'Republic Day',
        'type' => 'Bank Holiday',
        'description' => 'Banks closed for Republic Day',
        'icon' => 'fa-university',
        'bank_holiday' => true
    ],
    '2026-03-05' => [
        'name' => 'Andaman Day (Bank Holiday)',
        'type' => 'Bank Holiday',
        'description' => 'Regional bank holiday',
        'icon' => 'fa-university',
        'bank_holiday' => true
    ],
    '2026-04-18' => [
        'name' => 'Good Friday',
        'type' => 'Bank Holiday',
        'description' => 'Banks closed for Good Friday',
        'icon' => 'fa-university',
        'bank_holiday' => true
    ],
    '2026-06-17' => [
        'name' => 'Bakrid / Eid al-Adha',
        'type' => 'Bank Holiday',
        'description' => 'Islamic festival - banks may be closed',
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
    '2026-12-25' => [
        'name' => 'Christmas',
        'type' => 'Bank Holiday',
        'description' => 'Banks closed for Christmas',
        'icon' => 'fa-university',
        'bank_holiday' => true
    ]
];

// Merge
$all_holidays_2026 = array_merge($holidays_2026, $bank_holidays_2026);

// Ensure chronological order
ksort($all_holidays_2026);

// Get current month and year (default year 2026)
$current_month = isset($_GET['month']) ? (int)$_GET['month'] : (int)date('n');
$current_year = isset($_GET['year']) ? (int)$_GET['year'] : 2026;

// Month names
$month_names = [
    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
    5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
    9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
];

// First day & days in month
$first_day = mktime(0, 0, 0, $current_month, 1, $current_year);
$first_day_of_week = date('w', $first_day);
$days_in_month = date('t', $first_day);

// Helpers
function get_prev_month($month, $year) {
    if ($month == 1) return [12, $year - 1];
    return [$month - 1, $year];
}
function get_next_month($month, $year) {
    if ($month == 12) return [1, $year + 1];
    return [$month + 1, $year];
}
$prev_month = get_prev_month($current_month, $current_year);
$next_month = get_next_month($current_month, $current_year);
?>

<!-- Header -->
<header class="bg-gradient-to-r from-an-cyan to-an-teal text-white shadow-lg relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute top-20 right-20 w-24 h-24 bg-white rounded-full"></div>
        <div class="absolute bottom-10 left-1/4 w-16 h-16 bg-white rounded-full"></div>
    </div>

    <div class="container mx-auto px-4 py-6 relative z-10">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-anchor text-5xl text-white drop-shadow-lg"></i>
                    <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                </div>
                <div>
                    <h1 class="text-4xl font-bold flex items-center space-x-3">
                        <span>Andaman & Nicobar Holidays 2026</span>
                        <i class="fas fa-umbrella-beach text-2xl animate-bounce"></i>
                    </h1>
                    <p class="text-lg opacity-90 flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-white/70"></i>
                        <span>Island holiday calendar — national & regional</span>
                    </p>
                </div>
            </div>
            <div class="text-right">
                <div class="flex items-center space-x-2 mb-2">
                    <i class="fas fa-clock text-2xl text-yellow-200"></i>
                    <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                    <i class="fas fa-gift text-yellow-200"></i>
                    <span class="text-sm opacity-75"><?php echo count($all_holidays_2026); ?> Total Holidays</span>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-6 space-x-8 opacity-70">
            <i class="fas fa-water text-2xl text-sky-200"></i>
            <i class="fas fa-ship text-2xl text-teal-200"></i>
            <i class="fas fa-sun text-2xl text-yellow-200"></i>
            <i class="fas fa-tree text-2xl text-green-200"></i>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-6 text-sm text-gray-600" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
            <li><a href="#" class="hover:text-blue-600">Home</a></li>
            <li>/</li>
            <li><a href="#" class="hover:text-blue-600">India</a></li>
            <li>/</li>
            <li class="text-gray-800 font-medium">Andaman & Nicobar Holidays 2026</li>
        </ol>
    </nav>

    <!-- Intro -->
    <section class="mb-8 bg-white rounded-lg p-6 border-l-4 border-an-cyan shadow-sm">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-xl font-semibold mb-2">Plan your 2026 trips and observances in Andaman & Nicobar</h2>
            <p class="text-sm text-gray-700">Find national, regional and bank holidays for the Andaman & Nicobar Islands for 2026. Use the calendar below to navigate months and check holiday details.</p>
        </div>
    </section>

    <!-- Calendar Controls -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" class="px-3 py-2 bg-white rounded shadow border text-sm">‹ Prev</a>
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" class="ml-2 px-3 py-2 bg-white rounded shadow border text-sm">Next ›</a>
        </div>
        <div class="text-sm">
            <strong><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></strong>
        </div>
    </div>

    <!-- Calendar Grid (table style for compatibility) -->
    <div class="bg-white rounded-lg shadow-md p-4">
        <table class="w-full text-sm">
            <thead>
                <tr class="text-left text-gray-600">
                    <th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $day = 1;
                $week_day = 0;
                echo "<tr>";
                for ($i = 0; $i < $first_day_of_week; $i++) {
                    echo "<td class=\"p-3 text-gray-400\">&nbsp;</td>";
                    $week_day++;
                }

                while ($day <= $days_in_month) {
                    $date_key = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                    $cell_class = "p-3 align-top";
                    $holiday_html = '';

                    if (isset($all_holidays_2026[$date_key])) {
                        $h = $all_holidays_2026[$date_key];
                        // sanitize values
                        $h_name = htmlspecialchars($h['name'], ENT_QUOTES, 'UTF-8');
                        $h_type = htmlspecialchars($h['type'], ENT_QUOTES, 'UTF-8');
                        $icon_class = get_icon_class($h['icon'] ?? '');
                        $icon_html = '<i class="'.htmlspecialchars($icon_class, ENT_QUOTES, 'UTF-8').' text-an-teal mr-2" aria-hidden="true" title="'.$h_name.'"></i>';

                        $cell_class .= " bg-an-cyan-50 border-l-4 border-an-cyan";
                        $holiday_html = "<div class=\"text-sm font-medium flex items-center\">{$icon_html}<span>{$h_name}</span></div><div class=\"text-xs text-gray-600\">{$h_type}</div>";
                    } else {
                        $holiday_html = "<div class=\"text-xs text-gray-500\">&nbsp;</div>";
                    }

                    echo "<td class=\"$cell_class\" style=\"vertical-align:top;\">";
                    echo "<div class=\"text-sm font-semibold\">$day</div>";
                    echo $holiday_html;
                    echo "</td>";

                    $day++;
                    $week_day++;

                    if ($week_day == 7) {
                        echo "</tr>";
                        if ($day <= $days_in_month) echo "<tr>";
                        $week_day = 0;
                    }
                }

                if ($week_day > 0 && $week_day < 7) {
                    for ($i = $week_day; $i < 7; $i++) {
                        echo "<td class=\"p-3 text-gray-400\">&nbsp;</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Holiday List -->
    <section class="mt-8">
        <h3 class="text-lg font-semibold mb-3">All Holidays 2026 (Andaman & Nicobar)</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php foreach ($all_holidays_2026 as $date => $info): ?>
                <?php
                    // sanitize data and prepare icon
                    $safe_date = htmlspecialchars($date, ENT_QUOTES, 'UTF-8');
                    $name = htmlspecialchars($info['name'] ?? '', ENT_QUOTES, 'UTF-8');
                    $type = htmlspecialchars($info['type'] ?? '', ENT_QUOTES, 'UTF-8');
                    $desc = htmlspecialchars($info['description'] ?? '', ENT_QUOTES, 'UTF-8');
                    $ic = get_icon_class($info['icon'] ?? '');
                ?>
                <div role="button" tabindex="0" onclick="goToMonth('<?php echo $safe_date; ?>')" onkeypress="if(event.key==='Enter'){goToMonth('<?php echo $safe_date; ?>')}" class="bg-white p-4 rounded shadow-sm border-l-4 <?php echo (!empty($info['bank_holiday']) && $info['bank_holiday']) ? 'border-an-cyan' : 'border-slate-200'; ?> cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div>
                            <div class="text-sm text-gray-500"><?php echo date('d M, Y', strtotime($date)); ?></div>
                            <div class="text-md font-semibold flex items-center">
                                <i class="<?php echo htmlspecialchars($ic, ENT_QUOTES, 'UTF-8'); ?> text-an-teal mr-2" aria-hidden="true" title="<?php echo $name; ?>"></i>
                                <?php echo $name; ?>
                            </div>
                            <div class="text-xs text-gray-600"><?php echo $type; ?> — <?php echo $desc; ?></div>
                        </div>
                        <div class="text-right text-sm">
                            <?php if (!empty($info['bank_holiday']) && $info['bank_holiday']): ?>
                                <div class="text-an-teal font-medium">Bank Holiday</div>
                            <?php else: ?>
                                <div class="text-slate-500">Not Bank Holiday</div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- FAQ Section (added) -->
    <section id="faq" class="mt-10 bg-white rounded-lg p-6 border-l-4 border-an-sand shadow-sm">
        <h3 class="text-lg font-semibold mb-4">Frequently Asked Questions</h3>

        <div class="prose max-w-none">
            <details class="mb-3">
                <summary class="font-medium cursor-pointer">What are the main island-specific observances in Andaman & Nicobar for 2026?</summary>
                <p class="mt-2 text-sm text-gray-700">Andaman-specific observances include regional commemorations and cultural island festivals such as Andaman Day alongside national holidays. Local event dates are listed in the calendar and holiday list above.</p>
            </details>

            <details class="mb-3">
                <summary class="font-medium cursor-pointer">Which national holidays apply to Andaman & Nicobar in 2026?</summary>
                <p class="mt-2 text-sm text-gray-700">Standard national holidays like Republic Day (Jan 26), Independence Day (Aug 15) and Gandhi Jayanti (Oct 2) apply to the islands and are shown in the calendar.</p>
            </details>

            <details class="mb-3">
                <summary class="font-medium cursor-pointer">Are bank holidays different in Andaman & Nicobar?</summary>
                <p class="mt-2 text-sm text-gray-700">Banks observe national holidays and sometimes regional bank holidays. Check the Bank Holidays entries in the holiday list for bank closures.</p>
            </details>

            <details class="mb-3">
                <summary class="font-medium cursor-pointer">How can I navigate to a specific month?</summary>
                <p class="mt-2 text-sm text-gray-700">Use the Prev / Next controls above the calendar or click any holiday date in the list (use the browser controls if a direct link isn't present).</p>
            </details>
        </div>
    </section>
</main>

<script>
    // Basic search and utility scoped to Andaman list
    const holidaysData = <?php echo json_encode($all_holidays_2026); ?>;

    function goToMonth(dateString) {
        const date = new Date(dateString);
        const month = date.getMonth() + 1;
        const year = date.getFullYear();
        window.location.href = `?month=${month}&year=${year}`;
    }
</script>

<?php include '../../footer.php'; ?>
</body>
</html>