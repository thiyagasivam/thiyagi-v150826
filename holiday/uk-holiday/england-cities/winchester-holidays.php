<?php 
// Winchester Holidays 2026 - Page specific head content
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');

include '../../../header.php'; 
?>

<!-- Page specific meta tags -->
<title>Winchester Holidays 2026 | Complete Calendar | Local Events | Bank Holidays</title>
<meta name="description" content="Complete Winchester Holiday Calendar 2026. Find all bank holidays, local events, festivals, and observances. Plan your year with our comprehensive Winchester holiday guide.">
<meta name="keywords" content="Winchester holidays 2026, Winchester events, Winchester festivals, England holidays, Winchester calendar">
<style>
:root {
    --city-primary: #8B0000;
    --city-secondary: #DC143C;
}
.bg-city-primary { background-color: var(--city-primary); }
.text-city-primary { color: var(--city-primary); }
.border-city-primary { border-color: var(--city-primary); }
.bg-city-secondary { background-color: var(--city-secondary); }
.hover\:bg-city-secondary:hover { background-color: var(--city-secondary); }
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="../../../" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../../" class="text-blue-600 hover:text-blue-800">
                Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../" class="text-blue-600 hover:text-blue-800">
                UK Holidays
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <a href="../england-holidays.php" class="text-blue-600 hover:text-blue-800">
                England
            </a>
            <i class="fas fa-chevron-right text-gray-400"></i>
            <span class="text-gray-600 font-medium">Winchester Holidays 2026</span>
        </div>
    </div>
</nav>

<?php
// Winchester Holidays 2026 Data
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
  '2026-04-23' => 
  array (
    'name' => 'St. George\'s Day',
    'type' => 'Patron Saint Day',
    'icon' => 'fa-solid fa-dragon',
    'bank_holiday' => false,
  ),
  '2026-05-05' => 
  array (
    'name' => 'Early May Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-calendar',
    'bank_holiday' => true,
  ),
  '2026-05-26' => 
  array (
    'name' => 'Spring Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-leaf',
    'bank_holiday' => true,
  ),
  '2026-07-15' => 
  array (
    'name' => 'St. Swithun\'s Day',
    'type' => 'Patron Saint Day',
    'icon' => 'fa-solid fa-cloud-rain',
  ),
  '2026-08-25' => 
  array (
    'name' => 'Summer Bank Holiday',
    'type' => 'Bank Holiday',
    'icon' => 'fa-solid fa-sun',
    'bank_holiday' => true,
  ),
  '2026-09-06' => 
  array (
    'name' => 'Winchester Hat Fair',
    'type' => 'Street Festival',
    'icon' => 'fa-solid fa-hat-wizard',
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
<header class="bg-gradient-to-r from-city-primary to-city-secondary text-gray-100 shadow-lg relative overflow-hidden">
    <div class="container mx-auto px-4 py-6 relative z-10">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <i class="fas fa-calendar-alt text-5xl text-gray-100 drop-shadow-lg"></i>
                    <i class="fas fa-star text-yellow-300 text-xl absolute -top-2 -right-2 animate-pulse"></i>
                </div>
                <div>
                    <div class="flex items-center space-x-3 mb-2">
                        <div class="w-12 h-12 bg-white rounded border-2 border-white/20 shadow-lg flex items-center justify-center">
                        <i class="fa-solid fa-chess-rook text-2xl text-emerald-600"></i>
                    </div>
                        <h1 class="text-4xl font-bold">Winchester Holidays 2026</h1>
                    </div>
                    <p class="text-lg opacity-90">Hampshire • Bank Holidays • Local Events • Festivals</p>
                    <p class="text-sm opacity-75">Patron Saint: St. Swithun • Mayor of Winchester</p>
                </div>
            </div>
            <div class="text-right">
                <div class="flex items-center space-x-2 mb-2">
                    <i class="fas fa-clock text-2xl text-yellow-200"></i>
                    <p class="text-xl font-semibold"><?php echo date('F Y'); ?></p>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                    <i class="fas fa-gift text-yellow-200"></i>
                    <span class="text-sm opacity-75"><?php echo count($holidays_2026); ?> Total Events</span>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute -top-4 -right-4 w-32 h-32 bg-white opacity-10 rounded-full"></div>
</header>

<!-- Quick Info Bar -->
<div class="bg-gray-100 py-3">
    <div class="container mx-auto px-4">
        <div class="flex justify-center space-x-8 text-sm text-gray-700">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-city-primary"></i>
                <span>Hampshire</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-church text-city-primary"></i>
                <span>St. Swithun</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-user-tie text-city-primary"></i>
                <span>Mayor of Winchester</span>
            </div>
        </div>
    </div>
</div>

<!-- Navigation Controls -->
<div class="bg-gray-50 py-4">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <a href="?month=<?php echo $prev_month[0]; ?>&year=<?php echo $prev_month[1]; ?>" class="flex items-center space-x-3 bg-city-primary hover:bg-city-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
                <i class="fas fa-chevron-left"></i>
                <span><?php echo date('F Y', mktime(0, 0, 0, $prev_month[0], 1, $prev_month[1])); ?></span>
            </a>
            
            <div class="text-center">
                <h2 class="text-2xl font-bold text-city-primary"><?php echo date('F Y', mktime(0, 0, 0, $current_month, 1, $current_year)); ?></h2>
                <p class="text-gray-600">Select a month to view holidays & events</p>
            </div>
            
            <a href="?month=<?php echo $next_month[0]; ?>&year=<?php echo $next_month[1]; ?>" class="flex items-center space-x-3 bg-city-primary hover:bg-city-secondary text-gray-100 px-6 py-3 rounded-lg transition-all">
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
                <h2 class="text-2xl font-bold mb-6 text-city-primary flex items-center">
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
                            $class .= "bg-city-primary text-white ";
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
                            echo '<span class="bg-city-primary text-gray-100 text-xs px-2 py-1 rounded-full">Today</span>';
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
            <!-- Upcoming Events -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold mb-4 text-city-primary flex items-center">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Upcoming Events
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
                            echo '<div class="bg-city-primary text-gray-100 rounded-full w-10 h-10 flex items-center justify-center"><i class="fas ' . $holiday['icon'] . '"></i></div>';
                            echo '<div class="flex-1">';
                            echo '<div class="font-semibold text-city-primary">' . $holiday['name'] . '</div>';
                            echo '<div class="text-xs text-gray-600">' . $day_name . ', ' . $formatted_date . '</div>';
                            echo '</div>';
                            echo '</div>';
                            $upcoming_count++;
                        }
                    }
                    ?>
                </div>
            </div>
            
            <!-- Event Categories -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold mb-4 text-city-primary flex items-center">
                    <i class="fas fa-chart-pie mr-2"></i>
                    Event Categories
                </h3>
                <div class="space-y-3">
                    <?php
                    $bank_holidays = array_filter($holidays_2026, function($holiday) {
                        return isset($holiday['bank_holiday']) && $holiday['bank_holiday'];
                    });
                    $cultural_events = array_filter($holidays_2026, function($holiday) {
                        return in_array($holiday['type'], ['Cultural Festival', 'Music Festival', 'Arts Festival']);
                    });
                    $local_events = array_filter($holidays_2026, function($holiday) {
                        return in_array($holiday['type'], ['City Celebration', 'Sporting Event', 'Food Festival']);
                    });
                    ?>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Total Events:</span>
                        <span class="font-bold text-city-primary"><?php echo count($holidays_2026); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Bank Holidays:</span>
                        <span class="font-bold text-green-600"><?php echo count($bank_holidays); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Cultural Events:</span>
                        <span class="font-bold text-blue-600"><?php echo count($cultural_events); ?></span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Local Events:</span>
                        <span class="font-bold text-purple-600"><?php echo count($local_events); ?></span>
                    </div>
                </div>
            </div>
            
            <!-- Winchester Quick Facts -->
            <div class="bg-gradient-to-br from-city-primary to-city-secondary text-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-bold mb-4 flex items-center">
                    <i class="fas fa-info-circle mr-2"></i>
                    Winchester Info
                </h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span>County:</span>
                        <span class="font-semibold">Hampshire</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Patron Saint:</span>
                        <span class="font-semibold">St. Swithun</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Leadership:</span>
                        <span class="font-semibold">Mayor of Winchester</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Holiday Planning Tips Section -->
<div class="bg-gray-50 py-12" style="background-color: #f9fafb !important; color: #374151 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4" style="color: #111827 !important;">
                Holiday Planning Tips
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" style="color: #4b5563 !important;">
                Make the most of your Winchester holidays with our expert planning advice
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                <div class="flex items-center mb-4">
                    <i class="fas fa-calendar-check text-2xl text-city-primary mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800" style="color: #1f2937 !important;">Plan Early</h3>
                </div>
                <p class="text-gray-600" style="color: #4b5563 !important;">Book accommodations and attractions in advance, especially during Winchester Cathedral events and Hampshire festivals.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                <div class="flex items-center mb-4">
                    <i class="fas fa-map-marked-alt text-2xl text-city-primary mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800" style="color: #1f2937 !important;">Local Transport</h3>
                </div>
                <p class="text-gray-600" style="color: #4b5563 !important;">Winchester has excellent rail connections and local bus services. Check South Western Railway for holiday schedules.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow" style="background-color: #ffffff !important; color: #374151 !important;">
                <div class="flex items-center mb-4">
                    <i class="fas fa-umbrella text-2xl text-city-primary mr-3"></i>
                    <h3 class="text-lg font-semibold text-gray-800" style="color: #1f2937 !important;">Weather Ready</h3>
                </div>
                <p class="text-gray-600" style="color: #4b5563 !important;">Winchester weather can be unpredictable. Pack layers and waterproofs for outdoor cathedral and castle visits.</p>
            </div>
        </div>
    </div>
</div>

<!-- Bank Holidays 2026 Section -->
<div class="bg-white py-12" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4" style="color: #111827 !important;">
                Bank Holidays 2026
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" style="color: #4b5563 !important;">
                Official UK bank holidays observed in Winchester throughout 2026
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Jan 1</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">New Year's Day</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Apr 18</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Good Friday</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Apr 21</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Easter Monday</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">May 5</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Early May</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">May 26</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Spring Bank Holiday</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Aug 25</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Summer Bank Holiday</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Dec 25</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Christmas Day</div>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg text-center" style="background-color: #f9fafb !important; color: #374151 !important;">
                <div class="text-2xl font-bold text-city-primary">Dec 26</div>
                <div class="text-sm text-gray-600 mt-1" style="color: #4b5563 !important;">Boxing Day</div>
            </div>
        </div>
    </div>
</div>

<!-- Banking Holiday Tips Section -->
<div class="bg-gray-50 py-12" style="background-color: #f9fafb !important; color: #374151 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4" style="color: #111827 !important;">
                Banking Holiday Tips
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto" style="color: #4b5563 !important;">
                Essential banking and business information for Winchester holidays
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <div class="flex items-start">
                    <i class="fas fa-university text-city-primary text-xl mt-1 mr-3"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2" style="color: #1f2937 !important;">Bank Services</h3>
                        <p class="text-gray-600" style="color: #4b5563 !important;">Major banks in Winchester close on bank holidays. Use ATMs or online banking for transactions.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-shopping-cart text-city-primary text-xl mt-1 mr-3"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2" style="color: #1f2937 !important;">Shopping</h3>
                        <p class="text-gray-600" style="color: #4b5563 !important;">Most Winchester shops have reduced hours on bank holidays. Check individual store opening times.</p>
                    </div>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <i class="fas fa-bus text-city-primary text-xl mt-1 mr-3"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2" style="color: #1f2937 !important;">Transport</h3>
                        <p class="text-gray-600" style="color: #4b5563 !important;">Stagecoach buses operate Sunday schedules on bank holidays. Plan extra travel time.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-utensils text-city-primary text-xl mt-1 mr-3"></i>
                    <div>
                        <h3 class="font-semibold text-gray-800 mb-2" style="color: #1f2937 !important;">Dining</h3>
                        <p class="text-gray-600" style="color: #4b5563 !important;">Many Winchester restaurants stay open during holidays, but booking is recommended.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Frequently Asked Questions -->
<div class="bg-white py-12" style="background-color: #ffffff !important; color: #374151 !important;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-4" style="color: #111827 !important;">
                Frequently Asked Questions
            </h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">What are Winchester's major holiday attractions?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Winchester Cathedral, Winchester Castle's Great Hall, and the historic city center offer year-round attractions with special holiday events.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">When is Winchester Christmas Market?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Winchester's Christmas Market typically runs from late November through December around the Cathedral and city center.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Are there special summer events?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Summer brings outdoor concerts, art festivals, and guided heritage walks throughout Winchester's historic streets.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">How do I get to Winchester during holidays?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Winchester has direct rail links to London and the South Coast. Check South Western Railway for holiday timetables and potential service changes.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">What about parking during busy periods?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Use Park & Ride services during peak holiday times. City center parking fills quickly during events and festivals.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg" style="background-color: #f9fafb !important; color: #374151 !important;">
                    <h3 class="font-bold text-lg mb-2 text-gray-800" style="color: #1f2937 !important;">Are there family-friendly holiday activities?</h3>
                    <p class="text-gray-600" style="color: #4b5563 !important;">Winchester offers family trails, interactive museum experiences, and seasonal activities at the Cathedral and surrounding parks.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../../footer.php'; ?>
