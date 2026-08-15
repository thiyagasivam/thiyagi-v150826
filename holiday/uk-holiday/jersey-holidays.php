<?php 
// Jersey Holidays 2026 - Page specific head content
$page_title = "Jersey Holidays 2026 - Complete Calendar & Bank Holidays | 25+ Years Experience";
$page_description = "Complete Jersey Holiday Calendar 2026 with all bank holidays, cultural events, and observances. Professional holiday planning guide with 25+ years of expertise. Plan your year with our comprehensive Jersey holiday directory.";
$page_keywords = "Jersey holidays 2026, Jersey bank holidays, UK holidays, Jersey festivals, Jersey calendar, holidays Jersey, festival dates 2026, 25 years experience";
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include '../../header.php'; 
?>

<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_description; ?>">
<meta name="keywords" content="<?php echo $page_keywords; ?>">

<style>
:root {
    --state-primary: #CE1124;
    --state-secondary: #B31427;
}
.bg-state-primary { background-color: var(--state-primary); }
.text-state-primary { color: var(--state-primary); }
.border-state-primary { border-color: var(--state-primary); }
.bg-state-secondary { background-color: var(--state-secondary); }
.hover\:bg-state-secondary:hover { background-color: var(--state-secondary); }
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="./" class="text-blue-600 hover:text-blue-800">
                UK Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">Jersey Holidays 2026</span>
        </div>
    </div>
</nav>

<?php
// Jersey Holidays 2026 Data
$holidays_2026 = array (
  '2026-01-01' => 
  array (
    'name' => 'New Year\'s Day',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-champagne-glasses',
    'bank_holiday' => true,
  ),
  '2026-02-14' => 
  array (
    'name' => 'Valentine\'s Day',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-heart',
    'bank_holiday' => false,
  ),
  '2026-04-18' => 
  array (
    'name' => 'Good Friday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-cross',
    'bank_holiday' => true,
  ),
  '2026-04-21' => 
  array (
    'name' => 'Easter Monday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-egg',
    'bank_holiday' => true,
  ),
  '2026-05-05' => 
  array (
    'name' => 'Early May Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-calendar',
    'bank_holiday' => true,
  ),
  '2026-05-09' => 
  array (
    'name' => 'Liberation Day',
    'type' => 'National Day',
    'icon' => 'fa-solid fa-dove',
  ),
  '2026-05-26' => 
  array (
    'name' => 'Spring Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-leaf',
    'bank_holiday' => true,
  ),
  '2026-08-25' => 
  array (
    'name' => 'Summer Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-sun',
    'bank_holiday' => true,
  ),
  '2026-10-31' => 
  array (
    'name' => 'Halloween',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-ghost',
    'bank_holiday' => false,
  ),
  '2026-11-05' => 
  array (
    'name' => 'Guy Fawkes Night',
    'type' => 'Cultural Holiday',
    'icon' => 'fa-solid fa-fire',
    'bank_holiday' => false,
  ),
  '2026-11-11' => 
  array (
    'name' => 'Remembrance Day',
    'type' => 'Commemorative Day',
    'icon' => 'fa-solid fa-poppy',
    'bank_holiday' => false,
  ),
  '2026-12-25' => 
  array (
    'name' => 'Christmas Day',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-tree',
    'bank_holiday' => true,
  ),
  '2026-12-26' => 
  array (
    'name' => 'Boxing Day',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-gift',
    'bank_holiday' => true,
  ),
);

// Get current month and year for calendar display
$current_month = isset($_GET['month']) ? (int)$_GET['month'] : date('n');
$current_year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');

// Function to get previous month
function get_prev_month($month, $year) {
    if ($month == 1) {
        return [12, $year - 1];
    }
    return [$month - 1, $year];
}

// Function to get next month  
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
                        <div class="w-12 h-8 bg-white rounded shadow-lg flex items-center justify-center border">
            <span class="text-red-600 font-bold text-xs">JE</span>
        </div>
                        <span>Jersey Holidays 2026</span>
                    </div></h1>
                    <p class="text-lg opacity-90">Bank Holidays, Cultural Events, Observances</p>
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
    <div class="absolute inset-0 bg-black opacity-10"></div>
    <div class="absolute -top-4 -right-4 w-32 h-32 bg-white opacity-5 rounded-full"></div>
</header>

<!-- Navigation Controls -->
<div class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" class="flex items-center space-x-3 bg-state-primary hover:bg-state-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
                <i class="fas fa-chevron-left"></i>
                <span><?php echo date('F Y', mktime(0, 0, 0, $prev_month[0], 1, $prev_month[1])); ?></span>
            </a>
            
            <div class="text-center">
                <h2 class="text-2xl font-bold text-state-primary"><?php echo date('F Y', mktime(0, 0, 0, $current_month, 1, $current_year)); ?></h2>
                <p class="text-gray-600">Select a month to view holidays</p>
            </div>
            
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" class="flex items-center space-x-3 bg-state-primary hover:bg-state-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
                <span><?php echo date('F Y', mktime(0, 0, 0, $next_month[0], 1, $next_month[1])); ?></span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Calendar Section -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-state-primary flex items-center">
                    <i class="fas fa-calendar mr-3"></i>
                    <?php echo date('F Y', mktime(0, 0, 0, $current_month, 1, $current_year)); ?> Calendar
                </h2>
                
                <?php
                // Calendar generation logic
                $first_day = mktime(0, 0, 0, $current_month, 1, $current_year);
                $days_in_month = date('t', $first_day);
                $start_day = date('w', $first_day);
                $today = date('Y-m-d');
                ?>
                
                <div class="grid grid-cols-7 gap-1 mb-4">
                    <div class="text-center font-semibold py-2 text-red-600">Sun</div>
                    <div class="text-center font-semibold py-2">Mon</div>
                    <div class="text-center font-semibold py-2">Tue</div>
                    <div class="text-center font-semibold py-2">Wed</div>
                    <div class="text-center font-semibold py-2">Thu</div>
                    <div class="text-center font-semibold py-2">Fri</div>
                    <div class="text-center font-semibold py-2 text-blue-600">Sat</div>
                </div>
                
                <div class="grid grid-cols-7 gap-1">
                    <?php
                    // Empty cells for days before month starts
                    for ($i = 0; $i < $start_day; $i++) {
                        echo '<div class="h-20 bg-gray-50"></div>';
                    }
                    
                    // Days of the month
                    for ($day = 1; $day <= $days_in_month; $day++) {
                        $date = sprintf('%04d-%02d-%02d', $current_year, $current_month, $day);
                        $is_holiday = array_key_exists($date, $holidays_2026);
                        $is_today = ($date === $today);
                        $is_weekend = (date('w', mktime(0, 0, 0, $current_month, $day, $current_year)) == 0 || 
                                      date('w', mktime(0, 0, 0, $current_month, $day, $current_year)) == 6);
                        
                        $class = "h-20 p-1 border relative ";
                        if ($is_holiday) {
                            $class .= "bg-state-primary text-white ";
                        } elseif ($is_weekend) {
                            $class .= "bg-gray-100 ";
                        } else {
                            $class .= "bg-white hover:bg-gray-50 ";
                        }
                        
                        echo "<div class=\"$class\">";
                        echo "<span class=\"text-sm font-medium\">$day</span>";
                        
                        if ($is_holiday) {
                            echo '<div class="text-xs mt-1 truncate">' . $holidays_2026[$date]['name'] . '</div>';
                        }
                        
                        if ($is_today) {
                            echo '<div class="absolute top-2 right-2">';
                            echo '<span class="bg-state-primary text-gray-100 text-xs px-2 py-1 rounded-full">Today</span>';
                            echo '</div>';
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Upcoming Holidays -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold mb-4 text-state-primary flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Upcoming Holidays
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
            
            <!-- Quick Stats -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold mb-4 text-state-primary flex items-center">
                    <i class="fas fa-chart-bar mr-2"></i>
                    Holiday Statistics
                </h3>
                <div class="space-y-3">
                    <?php
                    $bank_holidays = array_filter($holidays_2026, function($holiday) {
                        return isset($holiday['bank_holiday']) && $holiday['bank_holiday'];
                    });
                    $cultural_holidays = array_filter($holidays_2026, function($holiday) {
                        return $holiday['type'] === 'Cultural Holiday';
                    });
                    ?>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Total Holidays:</span>
                        <span class="font-bold text-state-primary"><?php echo count($holidays_2026); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Bank Holidays:</span>
                        <span class="font-bold text-green-600"><?php echo count($bank_holidays); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Cultural Events:</span>
                        <span class="font-bold text-blue-600"><?php echo count($cultural_holidays); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Holiday Planning Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            Holiday Planning Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-blue-800 flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Plan Ahead
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book accommodations early for bank holiday weekends</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check local events calendars for festivals</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider school holidays when planning family trips</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Monitor public transport schedules during holidays</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-green-800 flex items-center">
                    <i class="fas fa-piggy-bank mr-2"></i>
                    Save Money
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Book travel and hotels well in advance</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Look for off-peak travel deals between holidays</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Consider staycations during popular holiday periods</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Use price comparison websites for best deals</li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4 text-purple-800 flex items-center">
                    <i class="fas fa-map-marked-alt mr-2"></i>
                    Local Events
                </h3>
                <ul class="text-gray-700 space-y-2 text-sm">
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Check local council websites for events</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Follow city tourism boards on social media</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Subscribe to local event newsletters</li>
                    <li><i class="fas fa-check text-green-500 mr-2"></i>Explore cultural festivals in your region</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Bank Holidays 2026 Section -->
<div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8">
            <i class="fas fa-calendar-alt mr-3"></i>
            Bank Holidays 2026
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-champagne-glasses text-2xl mb-2"></i>
                <h3 class="font-bold">New Year's Day</h3>
                <p class="text-sm opacity-90">January 1, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-cross text-2xl mb-2"></i>
                <h3 class="font-bold">Good Friday</h3>
                <p class="text-sm opacity-90">April 18, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-egg text-2xl mb-2"></i>
                <h3 class="font-bold">Easter Monday</h3>
                <p class="text-sm opacity-90">April 21, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-calendar text-2xl mb-2"></i>
                <h3 class="font-bold">Early May Bank Holiday</h3>
                <p class="text-sm opacity-90">May 5, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-leaf text-2xl mb-2"></i>
                <h3 class="font-bold">Spring Bank Holiday</h3>
                <p class="text-sm opacity-90">May 26, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-sun text-2xl mb-2"></i>
                <h3 class="font-bold">Summer Bank Holiday</h3>
                <p class="text-sm opacity-90">August 25, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-tree text-2xl mb-2"></i>
                <h3 class="font-bold">Christmas Day</h3>
                <p class="text-sm opacity-90">December 25, 2026</p>
            </div>
            <div class="bg-white bg-opacity-20 p-4 rounded-lg text-center">
                <i class="fas fa-gift text-2xl mb-2"></i>
                <h3 class="font-bold">Boxing Day</h3>
                <p class="text-sm opacity-90">December 26, 2026</p>
            </div>
        </div>
    </div>
</div>
<!-- Banking Holiday Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-university text-blue-600 mr-3"></i>
            Banking Holiday Tips
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-exclamation-triangle mr-2 text-yellow-500"></i>
                    Important Reminders
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-clock mt-1 mr-3 text-blue-500"></i>
                        <span>Banks are closed on all UK bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-mobile-alt mt-1 mr-3 text-blue-500"></i>
                        <span>Online banking and ATMs remain available 24/7</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-credit-card mt-1 mr-3 text-blue-500"></i>
                        <span>Card payments work normally during bank holidays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone mt-1 mr-3 text-blue-500"></i>
                        <span>Emergency banking helplines remain open</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-tasks mr-2 text-green-500"></i>
                    Plan Your Banking
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-money-bill mt-1 mr-3 text-green-500"></i>
                        <span>Withdraw cash before the holiday weekend</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-calendar-alt mt-1 mr-3 text-green-500"></i>
                        <span>Schedule payments to avoid delays</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-exchange-alt mt-1 mr-3 text-green-500"></i>
                        <span>International transfers may be delayed</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-green-500"></i>
                        <span>Check post office opening hours for banking services</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Frequently Asked Questions -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            Frequently Asked Questions
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What are UK Bank Holidays?</h3>
                    <p class="text-gray-600">Bank holidays are public holidays in the UK when banks and most businesses are closed. Different regions may have additional local holidays.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do businesses close on bank holidays?</h3>
                    <p class="text-gray-600">Many shops, restaurants, and entertainment venues remain open, though hours may be reduced. Essential services operate normally.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How do I plan for bank holiday weekends?</h3>
                    <p class="text-gray-600">Book accommodations and travel early, check opening hours for attractions, withdraw cash in advance, and expect higher prices during popular periods.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What about public transport on holidays?</h3>
                    <p class="text-gray-600">Public transport typically runs on Sunday schedules during bank holidays. Some services may be reduced or cancelled. Always check timetables.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do I get extra pay for working bank holidays?</h3>
                    <p class="text-gray-600">This depends on your employment contract. Many employers offer enhanced rates for bank holiday work, but it's not legally required.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">When are the next bank holidays?</h3>
                    <p class="text-gray-600">The next upcoming bank holidays are listed in the calendar above. Easter dates change each year, but most other bank holidays have fixed dates.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../footer.php'; ?>