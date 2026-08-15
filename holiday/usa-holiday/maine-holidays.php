<?php include '../../header.php'; ?>

<title>Maine Holidays 2026 | Complete Calendar | State & Federal Holidays | Festivals</title>
<meta name="description" content="Complete Maine Holiday Calendar 2026. Find all state holidays, federal holidays, cultural events, and observances. Plan your year with our comprehensive holiday guide.">
<meta name="keywords" content="Maine holidays 2026, Maine state holidays, US federal holidays, Maine festivals, Maine calendar, holidays Maine, festival dates 2026">

<style>
:root {
    --state-primary: #0066CC;
    --state-secondary: #0051a3;
}
.bg-state-primary { background-color: var(--state-primary); }
.text-state-primary { color: var(--state-primary); }
.border-state-primary { border-color: var(--state-primary); }
.bg-state-secondary { background-color: var(--state-secondary); }
.hover\:bg-state-secondary:hover { background-color: var(--state-secondary); }
</style>

<!-- Breadcrumb
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-3 text-sm">
                <a href="/" class="text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <a href="/holiday/usa-holiday/" class="text-blue-600 hover:text-blue-800">
                    USA Holidays
                </a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-600 font-medium">Maine Holidays 2026</span>
            </div>
        </div>
    </nav>

<?php
// Maine Holidays 2026 Data
$holidays_2026 = array (
  '2026-01-01' => 
  array (
    'name' => 'New Year\'s Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-champagne-glasses',
    'bank_holiday' => true,
  ),
  '2026-01-20' => 
  array (
    'name' => 'Martin Luther King Jr. Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-hands',
    'bank_holiday' => true,
  ),
  '2026-02-14' => 
  array (
    'name' => 'Valentine\'s Day',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-heart',
    'bank_holiday' => false,
  ),
  '2026-02-17' => 
  array (
    'name' => 'Presidents\' Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-landmark',
    'bank_holiday' => true,
  ),
  '2026-03-17' => 
  array (
    'name' => 'St. Patrick\'s Day',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-clover',
    'bank_holiday' => false,
  ),
  '2026-04-13' => 
  array (
    'name' => 'Easter Sunday',
    'type' => 'Religious Holiday',
    'icon' => 'fa-solid fa-cross',
    'bank_holiday' => false,
  ),
  '2026-05-11' => 
  array (
    'name' => 'Mother\'s Day',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-heart',
    'bank_holiday' => false,
  ),
  '2026-05-26' => 
  array (
    'name' => 'Memorial Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-flag-usa',
    'bank_holiday' => true,
  ),
  '2026-06-15' => 
  array (
    'name' => 'Father\'s Day',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-user',
    'bank_holiday' => false,
  ),
  '2026-06-19' => 
  array (
    'name' => 'Juneteenth',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-freedom',
    'bank_holiday' => true,
  ),
  '2026-07-04' => 
  array (
    'name' => 'Independence Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-fireworks',
    'bank_holiday' => true,
  ),
  '2026-09-01' => 
  array (
    'name' => 'Labor Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-hammer',
    'bank_holiday' => true,
  ),
  '2026-10-13' => 
  array (
    'name' => 'Columbus Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-ship',
    'bank_holiday' => true,
  ),
  '2026-10-31' => 
  array (
    'name' => 'Halloween',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-ghost',
    'bank_holiday' => false,
  ),
  '2026-11-11' => 
  array (
    'name' => 'Veterans Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-medal',
    'bank_holiday' => true,
  ),
  '2026-11-27' => 
  array (
    'name' => 'Thanksgiving Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-turkey',
    'bank_holiday' => true,
  ),
  '2026-12-24' => 
  array (
    'name' => 'Christmas Eve',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-star',
    'bank_holiday' => false,
  ),
  '2026-12-25' => 
  array (
    'name' => 'Christmas Day',
    'type' => 'Federal Holiday',
    'icon' => 'fa-solid fa-tree',
    'bank_holiday' => true,
  ),
  '2026-12-31' => 
  array (
    'name' => 'New Year\'s Eve',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-clock',
    'bank_holiday' => false,
  ),
);

// Month and navigation logic
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

<!-- Header -->
<header class="bg-gradient-to-r from-state-primary to-state-secondary text-gray-100 shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-6 relative z-10">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-calendar-alt text-5xl text-gray-100 drop-shadow-lg"></i>
                    <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                </div>
                <div>
                    <h1 class="text-4xl font-bold"><div class="flex items-center space-x-3">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/3/35/Flag_of_Maine.svg" alt="Maine Flag" class="w-12 h-8 object-cover rounded border-2 border-white/20 shadow-lg">
                        <span>Maine Holidays 2026</span>
                    </div></h1>
                    <p class="text-lg opacity-90">State & Federal Holidays, Festivals, Observances</p>
                </div>
            </div>
            <div class="text-right">
                <div class="flex items-center space-x-2 mb-2">
                    <i class="fas fa-clock text-2xl text-yellow-200"></i>
                    <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                    <i class="fas fa-gift text-yellow-200"></i>
                    <span class="text-sm opacity-75"><?php echo count($holidays_2026); ?> Total Holidays</span>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <!-- SEO Introduction Section -->
    <section class="mb-8 bg-white rounded-lg p-6 border-l-4 border-state-primary shadow-lg">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Complete Maine Holiday Calendar 2026</h2>
            <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                Welcome to the comprehensive Maine Holiday Calendar 2026! Plan your year with our up-to-date calendar including all federal holidays, state-specific celebrations, and cultural observances.
            </p>
        </div>
    </section>

    <!-- Calendar Navigation -->
    <div class="flex items-center justify-between mb-8 bg-white rounded-lg shadow-md p-4">
        <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" class="flex items-center space-x-3 bg-state-primary hover:bg-state-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
            <i class="fas fa-chevron-left"></i>
            <div>
                <div class="text-sm opacity-90">Previous</div>
                <div class="font-semibold"><?php echo $month_names[$prev_month[0]] . ' ' . $prev_month[1]; ?></div>
            </div>
        </a>
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800"><?php echo $month_names[$current_month]; ?> <?php echo $current_year; ?></h2>
        </div>
        <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" class="flex items-center space-x-3 bg-state-primary hover:bg-state-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
            <div class="text-right">
                <div class="text-sm opacity-90">Next</div>
                <div class="font-semibold"><?php echo $month_names[$next_month[0]] . ' ' . $next_month[1]; ?></div>
            </div>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    <!-- Calendar Grid -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
        <div class="grid grid-cols-7 bg-gray-100 border-b">
            <?php
            $weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            foreach ($weekdays as $day) {
                echo '<div class="p-4 text-center font-semibold text-gray-700">' . $day . '</div>';
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
                if ($is_today) $cell_classes .= ' bg-yellow-100';
                if ($is_holiday) $cell_classes .= ' bg-blue-50';
                
                echo '<div class="' . $cell_classes . '">';
                echo '<div class="text-lg font-semibold text-gray-800 mb-2">' . $day . '</div>';
                
                if ($is_holiday) {
                    $holiday = $holidays_2026[$date];
                    echo '<div class="bg-blue-100 border-l-4 border-state-primary p-2 rounded">';
                    echo '<div class="flex items-center space-x-2 mb-1">';
                    echo '<i class="fas ' . $holiday['icon'] . ' text-state-primary"></i>';
                    echo '<span class="text-sm font-semibold text-state-primary">' . $holiday['name'] . '</span>';
                    echo '</div>';
                    echo '<div class="text-xs text-state-primary">' . $holiday['type'] . '</div>';
                    echo '</div>';
                }
                
                if ($is_today) {
                    echo '<div class="absolute top-2 right-2">';
                    echo '<span class="bg-state-primary text-gray-100 text-xs px-2 py-1 rounded-full">Today</span>';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Holiday List -->
    <div class="mt-8 grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-state-primary">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-clock text-state-primary mr-3 text-2xl"></i>
                <span>Upcoming Holidays</span>
                <i class="fas fa-arrow-right text-orange-400 ml-2 animate-pulse"></i>
            </h3>
            <div class="space-y-3">
                <?php
                $today = date('Y-m-d');
                $upcoming_count = 0;
                foreach ($holidays_2026 as $date => $holiday) {
                    if ($date >= $today && $upcoming_count < 5) {
                        $formatted_date = date('M d, Y', strtotime($date));
                        $day_name = date('l', strtotime($date));
                        echo '<div class="flex items-center space-x-3">';
                        echo '<div class="bg-state-primary text-gray-100 rounded-full w-10 h-10 flex items-center justify-center"><i class="fas ' . $holiday['icon'] . '"></i></div>';
                        echo '<div class="flex-1">';
                        echo '<div class="font-semibold text-state-primary">' . $holiday['name'] . '</div>';
                        echo '<div class="text-xs text-gray-600">' . $day_name . ', ' . $formatted_date . '</div>';
                        echo '</div>';
                        echo '</div>';
                        $upcoming_count++;
                    }
                }
                ?>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                <i class="fas fa-chart-pie text-green-500 mr-3 text-2xl"></i>
                <span>Holiday Statistics</span>
                <i class="fas fa-chart-line text-green-400 ml-2"></i>
            </h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center p-4 bg-gradient-to-br from-green-50 to-green-100 rounded-lg border border-green-200 hover:shadow-md transition-all">
                    <div class="text-sm text-green-700 font-medium">Total Holidays</div>
                    <div class="text-xs text-green-600 mt-1"><?php echo count($holidays_2026); ?> Holidays</div>
                </div>
                <div class="text-center p-4 bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg border border-blue-200 hover:shadow-md transition-all">
                    <div class="text-sm text-blue-700 font-medium">Federal Holidays</div>
                    <div class="text-xs text-blue-600 mt-1">🇺🇸 USA</div>
                </div>
                <div class="text-center p-4 bg-gradient-to-br from-orange-50 to-orange-100 rounded-lg border border-orange-200 hover:shadow-md transition-all">
                    <div class="text-sm text-orange-700 font-medium">State Holidays</div>
                    <div class="text-xs text-orange-600 mt-1">fa-solid fa-lobster Maine</div>
                </div>
                <div class="text-center p-4 bg-gradient-to-br from-purple-50 to-purple-100 rounded-lg border border-purple-200 hover:shadow-md transition-all">
                    <div class="text-sm text-purple-700 font-medium">Cultural Events</div>
                    <div class="text-xs text-purple-600 mt-1">🎉 Festivals</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tips Section -->
    <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-yellow-500">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                <i class="fas fa-lightbulb text-yellow-500"></i>
                <span>Holiday Planning Tips</span>
            </h2>
            <ul class="list-disc pl-8 text-gray-700 space-y-2">
                <li>Book travel and accommodations early for major holidays like Thanksgiving and Christmas.</li>
                <li>Check local event calendars for parades, festivals, and public celebrations in Maine.</li>
                <li>Plan for possible closures of government offices and banks on state and federal holidays.</li>
                <li>Take advantage of long weekends for family trips to Maine's attractions.</li>
                <li>Be aware of school schedules and public transport changes during holidays.</li>
                <li>Consider local Maine traditions and customs when planning holiday activities.</li>
            </ul>
        </div>
    </section>
</main>

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
                    Banks in Maine are typically closed on federal holidays and select state holidays. ATMs and online banking services remain available 24/7. 
                    Always check with your specific bank for their holiday schedule as some may observe additional days.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8">
                <!-- Federal Bank Holidays -->
                <div class="bg-white rounded-lg shadow-md p-6 border border-blue-200">
                    <h3 class="text-2xl font-bold text-blue-700 mb-6 flex items-center space-x-3">
                        <i class="fas fa-flag-usa text-blue-600"></i>
                        <span>Federal Bank Holidays</span>
                    </h3>
                    <div class="space-y-4">
                        <?php
                        $federal_bank_holidays = [];
                        foreach ($holidays_2026 as $date => $holiday) {
                            if (isset($holiday['bank_holiday']) && $holiday['bank_holiday'] && ($holiday['type'] == 'Federal Holiday')) {
                                $federal_bank_holidays[$date] = $holiday;
                            }
                        }
                        foreach ($federal_bank_holidays as $date => $holiday) {
                            $formatted_date = date('M j, Y', strtotime($date));
                            $day_name = date('l', strtotime($date));
                            echo '<div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100 hover:shadow-md transition-all">';
                            echo '<div class="flex items-center space-x-3">';
                            echo '<div class="bg-blue-100 rounded-full p-2">';
                            echo '<i class="fas ' . $holiday['icon'] . ' text-blue-600"></i>';
                            echo '</div>';
                            echo '<div>';
                            echo '<div class="font-semibold text-gray-800">' . $holiday['name'] . '</div>';
                            echo '<div class="text-sm text-gray-600">' . $day_name . ', ' . $formatted_date . '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="text-right">';
                            echo '<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">';
                            echo '<i class="fas fa-times-circle mr-1"></i>Closed';
                            echo '</span>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>

                <!-- State & Additional Bank Holidays -->
                <div class="bg-white rounded-lg shadow-md p-6 border border-green-200">
                    <h3 class="text-2xl font-bold text-green-700 mb-6 flex items-center space-x-3">
                        <i class="fas fa-landmark text-green-600"></i>
                        <span>Additional Bank Holidays</span>
                    </h3>
                    <div class="space-y-4">
                        <?php
                        $other_bank_holidays = [];
                        foreach ($holidays_2026 as $date => $holiday) {
                            if (isset($holiday['bank_holiday']) && $holiday['bank_holiday'] && ($holiday['type'] != 'Federal Holiday')) {
                                $other_bank_holidays[$date] = $holiday;
                            }
                        }
                        if (empty($other_bank_holidays)) {
                            echo '<div class="text-center p-8 text-gray-500">';
                            echo '<i class="fas fa-info-circle text-4xl mb-4"></i>';
                            echo '<p>Most Maine banks follow federal holiday schedules. Some may observe additional local holidays.</p>';
                            echo '</div>';
                        } else {
                            foreach ($other_bank_holidays as $date => $holiday) {
                                $formatted_date = date('M j, Y', strtotime($date));
                                $day_name = date('l', strtotime($date));
                                echo '<div class="flex items-center justify-between p-4 bg-green-50 rounded-lg border border-green-100 hover:shadow-md transition-all">';
                                echo '<div class="flex items-center space-x-3">';
                                echo '<div class="bg-green-100 rounded-full p-2">';
                                echo '<i class="fas ' . $holiday['icon'] . ' text-green-600"></i>';
                                echo '</div>';
                                echo '<div>';
                                echo '<div class="font-semibold text-gray-800">' . $holiday['name'] . '</div>';
                                echo '<div class="text-sm text-gray-600">' . $day_name . ', ' . $formatted_date . '</div>';
                                echo '<div class="text-xs text-green-600 font-medium">' . $holiday['type'] . '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="text-right">';
                                echo '<span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-medium">';
                                echo '<i class="fas fa-exclamation-circle mr-1"></i>Limited';
                                echo '</span>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Bank Holiday Summary Stats -->
            <div class="mt-8 grid md:grid-cols-4 gap-4">
                <div class="bg-white rounded-lg p-6 text-center border border-blue-200 shadow-sm hover:shadow-md transition-all">
                    <div class="text-2xl font-bold text-blue-600 mb-2">
                        <?php echo count($federal_bank_holidays); ?>
                    </div>
                    <div class="text-sm text-gray-600">Federal Bank Holidays</div>
                    <i class="fas fa-flag-usa text-blue-400 mt-2"></i>
                </div>
                <div class="bg-white rounded-lg p-6 text-center border border-green-200 shadow-sm hover:shadow-md transition-all">
                    <div class="text-2xl font-bold text-green-600 mb-2">
                        <?php echo count($other_bank_holidays); ?>
                    </div>
                    <div class="text-sm text-gray-600">Additional Closures</div>
                    <i class="fas fa-building text-green-400 mt-2"></i>
                </div>
                <div class="bg-white rounded-lg p-6 text-center border border-purple-200 shadow-sm hover:shadow-md transition-all">
                    <div class="text-2xl font-bold text-purple-600 mb-2">
                        <?php echo count($federal_bank_holidays) + count($other_bank_holidays); ?>
                    </div>
                    <div class="text-sm text-gray-600">Total Bank Closures</div>
                    <i class="fas fa-calculator text-purple-400 mt-2"></i>
                </div>
                <div class="bg-white rounded-lg p-6 text-center border border-orange-200 shadow-sm hover:shadow-md transition-all">
                    <div class="text-2xl font-bold text-orange-600 mb-2">24/7</div>
                    <div class="text-sm text-gray-600">ATM & Online Banking</div>
                    <i class="fas fa-clock text-orange-400 mt-2"></i>
                </div>
            </div>

            <!-- Banking Tips -->
            <div class="mt-8 bg-white rounded-lg p-6 border border-yellow-200 shadow-sm">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center space-x-3">
                    <i class="fas fa-lightbulb text-yellow-500"></i>
                    <span>Banking Holiday Tips</span>
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center space-x-2">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span>What's Available</span>
                        </h4>
                        <ul class="text-sm text-gray-600 space-y-1 pl-6">
                            <li>• ATMs for cash withdrawals</li>
                            <li>• Online banking and mobile apps</li>
                            <li>• Credit and debit card transactions</li>
                            <li>• Automatic bill payments</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2 flex items-center space-x-2">
                            <i class="fas fa-times-circle text-red-500"></i>
                            <span>What's Not Available</span>
                        </h4>
                        <ul class="text-sm text-gray-600 space-y-1 pl-6">
                            <li>• In-person teller services</li>
                            <li>• Wire transfers (same-day)</li>
                            <li>• Check deposits at branches</li>
                            <li>• Customer service phone lines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mt-12 bg-white rounded-lg shadow-lg p-8 border-l-4 border-state-primary">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center flex items-center justify-center space-x-3">
                <i class="fas fa-question-circle text-state-primary"></i>
                <span>Frequently Asked Questions</span>
                <i class="fas fa-lightbulb text-yellow-500"></i>
            </h2>
            <div class="space-y-6">
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What are the main state holidays in Maine 2026?</h3>
                    <p class="text-gray-700 leading-relaxed">Maine observes all federal holidays plus any state-specific celebrations and observances.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Are Maine state holidays different from federal holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Maine follows federal holidays closely, with some state-specific additions and observances.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Is Juneteenth a holiday in Maine?</h3>
                    <p class="text-gray-700 leading-relaxed">Yes, Juneteenth is a federal holiday and is observed in Maine since 2021.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Are schools and banks closed on state holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Most schools and banks are closed on federal and state holidays, but some exceptions may apply. Always check with your local institution.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">How are holidays determined in Maine?</h3>
                    <p class="text-gray-700 leading-relaxed">Holidays are set by federal and state law. Maine follows federal guidelines with some state-specific observances.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Do all employers have to give paid time off for holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">No, private employers are not required by law to provide paid holidays, but many do as a benefit. State and federal employees generally receive paid holidays.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">What happens if a holiday falls on a weekend?</h3>
                    <p class="text-gray-700 leading-relaxed">If a holiday falls on a Saturday, it is often observed on the preceding Friday. If it falls on a Sunday, it is usually observed on the following Monday.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Does Maine have any unique holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Maine may observe certain state-specific holidays and commemorative days in addition to federal holidays.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Is Election Day a holiday in Maine?</h3>
                    <p class="text-gray-700 leading-relaxed">Election Day is not a state holiday in Maine, but employees may be entitled to time off to vote.</p>
                </div>
                <div class="bg-gray-50 rounded-lg p-6 hover:shadow-md transition-all">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">How can I find out about local city holidays?</h3>
                    <p class="text-gray-700 leading-relaxed">Check your city or county government website for information on local holidays and observances in Maine.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Maine Holiday Calendar - Thiyagi.com",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
        "sameAs": [
            "https://www.facebook.com/thiyagicom",
            "https://twitter.com/thiyagicom"
        ],
        "address": {
            "@type": "PostalAddress",
            "addressRegion": "ME",
            "addressCountry": "US"
        }
    }
    </script>

<?php include '../../footer.php'; ?>
</body>
</html>