<?php include 'header.php';?>

<?php
// Advanced Age Calculator Class
class AdvancedAgeCalculator {
    
    public static function calculateAge($birthDate, $targetDate = null) {
        $targetDate = $targetDate ? new DateTime($targetDate) : new DateTime();
        $birthDate = new DateTime($birthDate);
        
        if ($birthDate > $targetDate) {
            throw new Exception("Birth date cannot be in the future!");
        }
        
        $age = $targetDate->diff($birthDate);
        return $age;
    }
    
    public static function calculateDetailedAge($birthDate, $targetDate = null) {
        $age = self::calculateAge($birthDate, $targetDate);
        $birth = new DateTime($birthDate);
        $target = $targetDate ? new DateTime($targetDate) : new DateTime();
        
        // Calculate additional metrics
        $totalDays = $age->days;
        $totalHours = $totalDays * 24;
        $totalMinutes = $totalHours * 60;
        $totalSeconds = $totalMinutes * 60;
        $totalWeeks = floor($totalDays / 7);
        $totalMonths = ($age->y * 12) + $age->m;
        
        // Calculate next birthday
        $nextBirthday = clone $birth;
        $currentYear = (int)$target->format('Y');
        $nextBirthday->setDate($currentYear, (int)$birth->format('m'), (int)$birth->format('d'));
        
        if ($nextBirthday <= $target) {
            $nextBirthday->modify('+1 year');
        }
        
        $daysToNextBirthday = $target->diff($nextBirthday)->days;
        
        // Calculate zodiac sign
        $zodiacSign = self::getZodiacSign($birth->format('m'), $birth->format('d'));
        
        // Calculate Chinese zodiac
        $chineseZodiac = self::getChineseZodiac($birth->format('Y'));
        
        return [
            'years' => $age->y,
            'months' => $age->m,
            'days' => $age->d,
            'total_days' => $totalDays,
            'total_weeks' => $totalWeeks,
            'total_months' => $totalMonths,
            'total_hours' => $totalHours,
            'total_minutes' => $totalMinutes,
            'total_seconds' => $totalSeconds,
            'next_birthday' => $nextBirthday->format('Y-m-d'),
            'days_to_next_birthday' => $daysToNextBirthday,
            'zodiac_sign' => $zodiacSign,
            'chinese_zodiac' => $chineseZodiac,
            'birth_day_of_week' => $birth->format('l'),
            'birth_day_of_year' => $birth->format('z') + 1
        ];
    }
    
    public static function getZodiacSign($month, $day) {
        $month = (int)$month;
        $day = (int)$day;
        
        $signs = [
            ['name' => 'Capricorn', 'symbol' => '♑', 'dates' => 'Dec 22 - Jan 19'],
            ['name' => 'Aquarius', 'symbol' => '♒', 'dates' => 'Jan 20 - Feb 18'],
            ['name' => 'Pisces', 'symbol' => '♓', 'dates' => 'Feb 19 - Mar 20'],
            ['name' => 'Aries', 'symbol' => '♈', 'dates' => 'Mar 21 - Apr 19'],
            ['name' => 'Taurus', 'symbol' => '♉', 'dates' => 'Apr 20 - May 20'],
            ['name' => 'Gemini', 'symbol' => '♊', 'dates' => 'May 21 - Jun 20'],
            ['name' => 'Cancer', 'symbol' => '♋', 'dates' => 'Jun 21 - Jul 22'],
            ['name' => 'Leo', 'symbol' => '♌', 'dates' => 'Jul 23 - Aug 22'],
            ['name' => 'Virgo', 'symbol' => '♍', 'dates' => 'Aug 23 - Sep 22'],
            ['name' => 'Libra', 'symbol' => '♎', 'dates' => 'Sep 23 - Oct 22'],
            ['name' => 'Scorpio', 'symbol' => '♏', 'dates' => 'Oct 23 - Nov 21'],
            ['name' => 'Sagittarius', 'symbol' => '♐', 'dates' => 'Nov 22 - Dec 21']
        ];
        
        // Determine zodiac sign based on month and day
        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return $signs[1];
        if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return $signs[2];
        if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return $signs[3];
        if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return $signs[4];
        if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return $signs[5];
        if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return $signs[6];
        if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return $signs[7];
        if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return $signs[8];
        if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return $signs[9];
        if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return $signs[10];
        if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return $signs[11];
        return $signs[0]; // Capricorn
    }
    
    public static function getChineseZodiac($year) {
        $animals = [
            'Rat', 'Ox', 'Tiger', 'Rabbit', 'Dragon', 'Snake',
            'Horse', 'Goat', 'Monkey', 'Rooster', 'Dog', 'Pig'
        ];
        
        $symbols = ['🐀', '🐂', '🐅', '🐇', '🐉', '🐍', '🐎', '🐐', '🐒', '🐓', '🐕', '🐷'];
        
        $index = ((int)$year - 1900) % 12;
        
        return [
            'name' => $animals[$index],
            'symbol' => $symbols[$index],
            'year' => $year
        ];
    }
    
    public static function calculateBirthYear($currentAge) {
        $currentYear = (int)date('Y');
        return $currentYear - $currentAge;
    }
    
    public static function calculateDateDifference($startDate, $endDate) {
        $start = new DateTime($startDate);
        $end = new DateTime($endDate);
        
        if ($start > $end) {
            // Swap dates if start is after end
            $temp = $start;
            $start = $end;
            $end = $temp;
        }
        
        $diff = $end->diff($start);
        
        return [
            'years' => $diff->y,
            'months' => $diff->m,
            'days' => $diff->d,
            'total_days' => $diff->days,
            'total_hours' => $diff->days * 24,
            'total_minutes' => $diff->days * 24 * 60,
            'direction' => 'forward'
        ];
    }
}

// Handle form submission
$result = null;
$error = null;
$calculation_type = 'age';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $calculation_type = $_POST['calc_type'] ?? 'age';
        
        if ($calculation_type === 'age') {
            $birthDate = $_POST['birth_date'] ?? '';
            $targetDate = $_POST['target_date'] ?? null;
            
            if (!empty($birthDate)) {
                $result = AdvancedAgeCalculator::calculateDetailedAge($birthDate, $targetDate);
                $result['birth_date'] = $birthDate;
                $result['target_date'] = $targetDate ?: date('Y-m-d');
            }
        } elseif ($calculation_type === 'birth_year') {
            $currentAge = $_POST['current_age'] ?? 0;
            if ($currentAge > 0) {
                $result = ['birth_year' => AdvancedAgeCalculator::calculateBirthYear($currentAge)];
            }
        } elseif ($calculation_type === 'date_diff') {
            $startDate = $_POST['start_date'] ?? '';
            $endDate = $_POST['end_date'] ?? '';
            
            if (!empty($startDate) && !empty($endDate)) {
                $result = AdvancedAgeCalculator::calculateDateDifference($startDate, $endDate);
                $result['start_date'] = $startDate;
                $result['end_date'] = $endDate;
            }
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}

// Generate canonical URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');
$canonicalUrl = $protocol . "://" . $host . $uri;
?>

    <title>Advanced Age Calculator 2026 - Age, Zodiac, Birth Year & Date Difference Tool</title>
    <meta name="description" content="Complete age calculator with zodiac signs, Chinese zodiac, next birthday countdown, birth year finder & date difference calculator. Advanced features with instant results in 2026.">
    <meta name="keywords" content="age calculator, birth year calculator, zodiac sign calculator, Chinese zodiac, date difference calculator, birthday countdown, age in days hours minutes">
    
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Advanced Age Calculator 2026 - Complete Age Analysis Tool">
    <meta property="og:description" content="Calculate age, find zodiac signs, birth year, and date differences with advanced features.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thiyagi.com/age-calculator.php">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Age Calculator 2026">
    <meta name="twitter:description" content="Complete age calculator with zodiac signs and advanced date calculations.">
    
    <!-- Enhanced Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced Age Calculator",
        "description": "Complete age calculator with zodiac signs, Chinese zodiac, birth year finder, and date difference calculations",
        "url": "https://thiyagi.com/age-calculator.php",
        "applicationCategory": "UtilityApplication",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0"
        }
    }
    </script>
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#8b5cf6',
                        'primary-dark': '#7c3aed',
                        'age-purple': '#a855f7',
                        'zodiac-gold': '#f59e0b',
                    }
                }
            }
        }
    </script>
    <style>
        .age-card {
            transition: all 0.3s ease;
        }
        .age-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .zodiac-glow {
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }
        .countdown-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .tab-active {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
            color: white;
        }
        .tab-inactive {
            background: #f3f4f6;
            color: #6b7280;
        }
        .tab-inactive:hover {
            background: #e5e7eb;
            color: #374151;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .birthday-animate {
            animation: bounce 1s ease-in-out infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
    </style>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                🎂 Advanced Age Calculator
            </h1>
            <p class="text-xl text-gray-600 mb-6">
                Calculate age, find zodiac signs, birth year & date differences with precision
            </p>
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                <span class="px-3 py-1 bg-primary text-white text-sm rounded-full">Age Calculator</span>
                <span class="px-3 py-1 bg-zodiac-gold text-white text-sm rounded-full">Zodiac Signs</span>
                <span class="px-3 py-1 bg-green-500 text-white text-sm rounded-full">Birth Year</span>
                <span class="px-3 py-1 bg-blue-500 text-white text-sm rounded-full">Date Difference</span>
                <span class="px-3 py-1 bg-red-500 text-white text-sm rounded-full">Next Birthday</span>
            </div>
        </div>

        <!-- Calculation Type Tabs -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <div class="flex flex-wrap gap-2 mb-6">
                <button onclick="showTab('age')" id="age-tab" class="tab-active px-6 py-3 rounded-lg font-semibold transition-all duration-200">
                    🎂 Age Calculator
                </button>
                <button onclick="showTab('birth_year')" id="birth_year-tab" class="tab-inactive px-6 py-3 rounded-lg font-semibold transition-all duration-200">
                    📅 Birth Year Finder
                </button>
                <button onclick="showTab('date_diff')" id="date_diff-tab" class="tab-inactive px-6 py-3 rounded-lg font-semibold transition-all duration-200">
                    📊 Date Difference
                </button>
            </div>

            <form method="POST" class="space-y-6">
                <input type="hidden" name="calc_type" id="calc_type" value="<?= $calculation_type ?>">

                <!-- Age Calculator Tab -->
                <div id="age-content" class="tab-content">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">🎂 Date of Birth</label>
                            <input type="date" name="birth_date" id="birth_date" 
                                   value="<?= htmlspecialchars($_POST['birth_date'] ?? '') ?>"
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">📅 Calculate Age On (Optional)</label>
                            <input type="date" name="target_date" id="target_date" 
                                   value="<?= htmlspecialchars($_POST['target_date'] ?? '') ?>"
                                   placeholder="Leave empty for current date"
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                        </div>
                    </div>
                </div>

                <!-- Birth Year Finder Tab -->
                <div id="birth_year-content" class="tab-content hidden">
                    <div class="max-w-md mx-auto">
                        <label class="block text-gray-700 font-semibold mb-2">📊 Current Age (Years)</label>
                        <input type="number" name="current_age" id="current_age" 
                               value="<?= htmlspecialchars($_POST['current_age'] ?? '') ?>"
                               min="0" max="150" placeholder="Enter your current age"
                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                    </div>
                </div>

                <!-- Date Difference Tab -->
                <div id="date_diff-content" class="tab-content hidden">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">📅 Start Date</label>
                            <input type="date" name="start_date" id="start_date" 
                                   value="<?= htmlspecialchars($_POST['start_date'] ?? '') ?>"
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">📅 End Date</label>
                            <input type="date" name="end_date" id="end_date" 
                                   value="<?= htmlspecialchars($_POST['end_date'] ?? '') ?>"
                                   class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-primary transition-colors">
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-primary hover:bg-primary-dark text-white font-bold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105">
                        🔢 Calculate Now
                    </button>
                </div>
            </form>
        </div>

        <!-- Error Display -->
        <?php if ($error): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-8">
            <strong>Error:</strong> <?= htmlspecialchars($error) ?>
        </div>
        <?php endif; ?>

        <!-- Results Section -->
        <?php if ($result && !$error): ?>
        <div class="fade-in">
            
            <?php if ($calculation_type === 'age' && isset($result['years'])): ?>
            <!-- Age Results -->
            <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">🎉 Your Age Analysis</h2>
                    <p class="text-gray-600">Born on <?= date('F j, Y', strtotime($result['birth_date'])) ?> (<?= $result['birth_day_of_week'] ?>)</p>
                </div>

                <!-- Main Age Display -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                    <div class="age-card bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['years'] ?></div>
                        <div class="text-sm opacity-90">Years</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-blue-500 to-blue-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['months'] ?></div>
                        <div class="text-sm opacity-90">Months</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-green-500 to-green-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['days'] ?></div>
                        <div class="text-sm opacity-90">Days</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-red-500 to-red-600 text-white p-6 rounded-lg text-center countdown-pulse">
                        <div class="text-4xl font-bold mb-2"><?= $result['days_to_next_birthday'] ?></div>
                        <div class="text-sm opacity-90">Days to Birthday</div>
                    </div>
                </div>

                <!-- Detailed Statistics -->
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">⏰ Time Lived</h3>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span>Total Days:</span>
                                <span class="font-semibold"><?= number_format($result['total_days']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Weeks:</span>
                                <span class="font-semibold"><?= number_format($result['total_weeks']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Hours:</span>
                                <span class="font-semibold"><?= number_format($result['total_hours']) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span>Total Minutes:</span>
                                <span class="font-semibold"><?= number_format($result['total_minutes']) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Zodiac Information -->
                    <div class="zodiac-glow bg-gradient-to-br from-yellow-400 to-orange-500 text-white p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">⭐ Zodiac Sign</h3>
                        <div class="text-center">
                            <div class="text-4xl mb-2"><?= $result['zodiac_sign']['symbol'] ?></div>
                            <div class="font-bold text-xl"><?= $result['zodiac_sign']['name'] ?></div>
                            <div class="text-sm opacity-90"><?= $result['zodiac_sign']['dates'] ?></div>
                        </div>
                    </div>

                    <!-- Chinese Zodiac -->
                    <div class="bg-gradient-to-br from-red-500 to-pink-500 text-white p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-4">🐉 Chinese Zodiac</h3>
                        <div class="text-center">
                            <div class="text-4xl mb-2"><?= $result['chinese_zodiac']['symbol'] ?></div>
                            <div class="font-bold text-xl"><?= $result['chinese_zodiac']['name'] ?></div>
                            <div class="text-sm opacity-90">Year of the <?= $result['chinese_zodiac']['name'] ?></div>
                        </div>
                    </div>
                </div>

                <!-- Next Birthday Countdown -->
                <div class="bg-gradient-to-r from-pink-500 to-rose-500 text-white p-6 rounded-lg text-center">
                    <h3 class="text-xl font-bold mb-2 birthday-animate">🎉 Next Birthday</h3>
                    <p class="text-lg"><?= date('F j, Y', strtotime($result['next_birthday'])) ?></p>
                    <p class="text-sm opacity-90">Only <?= $result['days_to_next_birthday'] ?> days to go!</p>
                </div>
            </div>

            <?php elseif ($calculation_type === 'birth_year' && isset($result['birth_year'])): ?>
            <!-- Birth Year Result -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">📅 Birth Year Result</h2>
                <div class="text-6xl font-bold text-primary mb-4"><?= $result['birth_year'] ?></div>
                <p class="text-xl text-gray-600">You were likely born in the year <?= $result['birth_year'] ?></p>
            </div>

            <?php elseif ($calculation_type === 'date_diff' && isset($result['total_days'])): ?>
            <!-- Date Difference Result -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">📊 Date Difference Analysis</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                    <div class="age-card bg-gradient-to-br from-indigo-500 to-indigo-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['years'] ?></div>
                        <div class="text-sm opacity-90">Years</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-teal-500 to-teal-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['months'] ?></div>
                        <div class="text-sm opacity-90">Months</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-orange-500 to-orange-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= $result['days'] ?></div>
                        <div class="text-sm opacity-90">Days</div>
                    </div>
                    <div class="age-card bg-gradient-to-br from-purple-500 to-purple-600 text-white p-6 rounded-lg text-center">
                        <div class="text-4xl font-bold mb-2"><?= number_format($result['total_days']) ?></div>
                        <div class="text-sm opacity-90">Total Days</div>
                    </div>
                </div>
                
                <div class="text-center text-gray-600">
                    <p class="text-lg">From <?= date('F j, Y', strtotime($result['start_date'])) ?> to <?= date('F j, Y', strtotime($result['end_date'])) ?></p>
                </div>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gradient-to-r from-primary to-primary-dark px-6 py-4">
                <h2 class="text-2xl font-bold text-white">🚀 Calculator Features</h2>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">🎂</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Precise Age Calculation</h3>
                        <p class="text-gray-600 text-sm">Years, months, days, hours & minutes</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">⭐</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Zodiac Signs</h3>
                        <p class="text-gray-600 text-sm">Western & Chinese zodiac information</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">🎉</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Birthday Countdown</h3>
                        <p class="text-gray-600 text-sm">Days remaining until next birthday</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📅</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Birth Year Finder</h3>
                        <p class="text-gray-600 text-sm">Calculate birth year from current age</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📊</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Date Difference</h3>
                        <p class="text-gray-600 text-sm">Calculate time between any two dates</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-4xl mb-2">📱</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Mobile Friendly</h3>
                        <p class="text-gray-600 text-sm">Responsive design for all devices</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- How to Use Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gray-600 px-6 py-4">
                <h2 class="text-2xl font-bold text-white">📖 How to Use</h2>
            </div>
            <div class="p-6">
                <div class="grid md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">🎂 Age Calculator</h3>
                        <ol class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                Enter your birth date
                            </li>
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                Optionally set a target date
                            </li>
                            <li class="flex items-start">
                                <span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                Get detailed age analysis with zodiac signs
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">📅 Birth Year Finder</h3>
                        <ol class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                Enter your current age
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                Click calculate
                            </li>
                            <li class="flex items-start">
                                <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                Find your likely birth year
                            </li>
                        </ol>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">📊 Date Difference</h3>
                        <ol class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">1</span>
                                Select start and end dates
                            </li>
                            <li class="flex items-start">
                                <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">2</span>
                                Calculate the difference
                            </li>
                            <li class="flex items-start">
                                <span class="bg-blue-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 mt-0.5">3</span>
                                View detailed time analysis
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Functionality -->
    <script>
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected tab content
            document.getElementById(tabName + '-content').classList.remove('hidden');
            
            // Update tab buttons
            document.querySelectorAll('[id$="-tab"]').forEach(tab => {
                tab.className = 'tab-inactive px-6 py-3 rounded-lg font-semibold transition-all duration-200';
            });
            
            // Activate selected tab
            document.getElementById(tabName + '-tab').className = 'tab-active px-6 py-3 rounded-lg font-semibold transition-all duration-200';
            
            // Update hidden input
            document.getElementById('calc_type').value = tabName;
        }

        // Initialize the correct tab on page load
        document.addEventListener('DOMContentLoaded', function() {
            const activeType = '<?= $calculation_type ?>';
            showTab(activeType);
        });

        // Auto-fill current date for birth date
        document.addEventListener('DOMContentLoaded', function() {
            const birthDateInput = document.getElementById('birth_date');
            if (!birthDateInput.value) {
                // Set a default birth date (25 years ago)
                const defaultDate = new Date();
                defaultDate.setFullYear(defaultDate.getFullYear() - 25);
                birthDateInput.value = defaultDate.toISOString().split('T')[0];
            }
        });
    </script>

</body>

    <?php include 'footer.php';?>
</html>
