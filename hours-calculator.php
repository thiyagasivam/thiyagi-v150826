<?php include 'header.php';?>


<?php
// Function to calculate time difference
function calculateTimeDifference($start_time, $end_time, $break_time = 0) {
    $start = new DateTime($start_time);
    $end = new DateTime($end_time);
    
    if ($start > $end) {
        return ['error' => 'End time must be after start time'];
    }
    
    $interval = $start->diff($end);
    $total_minutes = ($interval->h * 60) + $interval->i;
    $total_minutes -= $break_time;
    
    if ($total_minutes < 0) {
        return ['error' => 'Break time cannot be greater than total time'];
    }
    
    $hours = floor($total_minutes / 60);
    $minutes = $total_minutes % 60;
    
    return [
        'hours' => $hours,
        'minutes' => $minutes,
        'total_hours' => round($total_minutes / 60, 2)
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $start_time = $_POST['start_time'] ?? '';
    $end_time = $_POST['end_time'] ?? '';
    $break_time = (int)($_POST['break_time'] ?? 0);
    
    if (!empty($start_time) && !empty($end_time)) {
        $result = calculateTimeDifference($start_time, $end_time, $break_time);
    }
}
?>

    <title>Free Hours Calculator 2026 - Track Work Time & Calculate Payroll</title>
<meta name="description" content="Calculate total hours, overtime, and breaks instantly (2026). Perfect for employees, freelancers, and payroll managers - Convert minutes to decimal hours easily!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .time-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .result-box {
            transition: all 0.3s ease;
        }
        .floating-label {
            transition: all 0.2s ease;
            transform-origin: left top;
        }
        input:focus + .floating-label,
        input:not(:placeholder-shown) + .floating-label {
            transform: translateY(-1.25rem) scale(0.85);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Hours Calculator</h1>
            <p class="text-gray-600">Calculate the duration between two times with break deduction</p>
        </header>

        <main class="bg-white rounded-lg shadow-md p-6">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="relative">
                        <input 
                            type="time" 
                            name="start_time" 
                            id="start_time" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 time-input" 
                            placeholder=" "
                            value="<?= htmlspecialchars($_POST['start_time'] ?? '') ?>"
                            required
                        >
                        <label for="start_time" class="floating-label absolute left-4 top-3 text-gray-500 pointer-events-none">Start Time</label>
                    </div>
                    
                    <div class="relative">
                        <input 
                            type="time" 
                            name="end_time" 
                            id="end_time" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 time-input" 
                            placeholder=" "
                            value="<?= htmlspecialchars($_POST['end_time'] ?? '') ?>"
                            required
                        >
                        <label for="end_time" class="floating-label absolute left-4 top-3 text-gray-500 pointer-events-none">End Time</label>
                    </div>
                </div>
                
                <div class="relative">
                    <input 
                        type="number" 
                        name="break_time" 
                        id="break_time" 
                        min="0" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                        placeholder=" "
                        value="<?= htmlspecialchars($_POST['break_time'] ?? '0') ?>"
                    >
                    <label for="break_time" class="floating-label absolute left-4 top-3 text-gray-500 pointer-events-none">Break Time (minutes)</label>
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200"
                >
                    Calculate Hours
                </button>
            </form>
            
            <?php if ($result !== null): ?>
                <div class="mt-8 result-box bg-gray-50 border border-gray-200 rounded-lg p-6">
                    <?php if (isset($result['error'])): ?>
                        <div class="text-red-600 font-medium text-center">
                            <?= htmlspecialchars($result['error']) ?>
                        </div>
                    <?php else: ?>
                        <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">Calculation Result</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="text-3xl font-bold text-blue-600"><?= $result['hours'] ?></div>
                                <div class="text-gray-500 mt-1">Hours</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="text-3xl font-bold text-blue-600"><?= $result['minutes'] ?></div>
                                <div class="text-gray-500 mt-1">Minutes</div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm">
                                <div class="text-3xl font-bold text-blue-600"><?= $result['total_hours'] ?></div>
                                <div class="text-gray-500 mt-1">Total Hours</div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Use the Hours Calculator</h2>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>Enter your start time in the first field</li>
                <li>Enter your end time in the second field</li>
                <li>Optionally add break time in minutes</li>
                <li>Click "Calculate Hours" to see the result</li>
            </ol>
        </section>
    </div>

    
</body>
<?php include 'footer.php';?>

</html>
