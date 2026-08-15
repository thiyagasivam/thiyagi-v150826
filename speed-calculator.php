<?php include 'header.php';?>

<?php
// Handle form submission
$distance = isset($_POST['distance']) ? floatval($_POST['distance']) : null;
$time_h = isset($_POST['time_h']) ? intval($_POST['time_h']) : 0;
$time_m = isset($_POST['time_m']) ? intval($_POST['time_m']) : 0;
$time_s = isset($_POST['time_s']) ? intval($_POST['time_s']) : 0;
$unit = isset($_POST['unit']) ? $_POST['unit'] : 'km';

$speed = null;
$pace = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate inputs
    if ($distance === null || $distance <= 0) {
        $error = "Distance must be a positive number";
    } elseif ($time_h === 0 && $time_m === 0 && $time_s === 0) {
        $error = "Please enter a valid time";
    } else {
        // Calculate total time in hours
        $total_hours = $time_h + ($time_m / 60) + ($time_s / 3600);
        $total_minutes = ($time_h * 60) + $time_m + ($time_s / 60);
        
        // Calculate speed (distance / time)
        if ($unit === 'km') {
            $speed = $distance / $total_hours; // km/h
            $pace = $total_minutes / $distance; // min/km
        } else {
            $speed = $distance / $total_hours; // mph
            $pace = $total_minutes / $distance; // min/mile
        }
    }
}
?>

    <title>Speed Calculator (2026) - Free Online Distance, Time & Speed Converter</title>
<meta name="description" content="Calculate speed, distance or time instantly. Free online tool for runners, drivers & students with multiple unit conversions (mph, km/h, knots) and pace calculations.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .input-group {
            transition: all 0.3s ease;
        }
        .input-group:focus-within {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .result-card {
            transition: all 0.3s ease;
        }
        .result-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Speed Calculator</h1>
            <p class="text-lg text-gray-600">Calculate speed, distance or time given any two values</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <form method="POST" class="p-6 md:p-8">
                <?php if ($error): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                        <p><?php echo htmlspecialchars($error); ?></p>
                    </div>
                <?php endif; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Distance Input -->
                    <div class="input-group bg-gray-50 p-4 rounded-lg">
                        <label for="distance" class="block text-sm font-medium text-gray-700 mb-2">Distance</label>
                        <div class="flex">
                            <input type="number" step="0.01" min="0" name="distance" id="distance" 
                                   class="flex-1 rounded-l-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                   placeholder="0.00" value="<?php echo $distance ?? ''; ?>" required>
                            <select name="unit" class="rounded-r-md border-gray-300 bg-white text-gray-700 focus:border-blue-500 focus:ring-blue-500">
                                <option value="km" <?php echo ($unit === 'km') ? 'selected' : ''; ?>>kilometers</option>
                                <option value="mi" <?php echo ($unit === 'mi') ? 'selected' : ''; ?>>miles</option>
                            </select>
                        </div>
                    </div>

                    <!-- Time Input -->
                    <div class="input-group bg-gray-50 p-4 rounded-lg">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Time</label>
                        <div class="grid grid-cols-3 gap-2">
                            <div>
                                <input type="number" name="time_h" id="time_h" min="0" 
                                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                       placeholder="Hours" value="<?php echo $time_h ?? ''; ?>">
                                <label for="time_h" class="block text-xs text-gray-500 mt-1 text-center">Hours</label>
                            </div>
                            <div>
                                <input type="number" name="time_m" id="time_m" min="0" max="59" 
                                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                       placeholder="Minutes" value="<?php echo $time_m ?? ''; ?>">
                                <label for="time_m" class="block text-xs text-gray-500 mt-1 text-center">Minutes</label>
                            </div>
                            <div>
                                <input type="number" name="time_s" id="time_s" min="0" max="59" 
                                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" 
                                       placeholder="Seconds" value="<?php echo $time_s ?? ''; ?>">
                                <label for="time_s" class="block text-xs text-gray-500 mt-1 text-center">Seconds</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        Calculate Speed
                    </button>
                </div>
            </form>
        </div>

        <?php if ($speed !== null): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Speed Result -->
                <div class="result-card bg-white p-6 rounded-xl shadow-md border-l-4 border-blue-500">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Speed</h3>
                    <p class="text-3xl font-bold text-blue-600">
                        <?php echo number_format($speed, 2); ?> 
                        <span class="text-xl"><?php echo ($unit === 'km') ? 'km/h' : 'mph'; ?></span>
                    </p>
                    <p class="text-gray-600 mt-2">Average speed over the distance</p>
                </div>

                <!-- Pace Result -->
                <div class="result-card bg-white p-6 rounded-xl shadow-md border-l-4 border-green-500">
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Pace</h3>
                    <p class="text-3xl font-bold text-green-600">
                        <?php 
                            $pace_min = floor($pace);
                            $pace_sec = round(($pace - $pace_min) * 60);
                            echo $pace_min . ':' . str_pad($pace_sec, 2, '0', STR_PAD_LEFT); 
                        ?> 
                        <span class="text-xl">min/<?php echo ($unit === 'km') ? 'km' : 'mile'; ?></span>
                    </p>
                    <p class="text-gray-600 mt-2">Time per unit distance</p>
                </div>
            </div>

            <div class="mt-8 bg-blue-50 p-6 rounded-xl">
                <h3 class="text-lg font-medium text-gray-900 mb-3">Calculation Details</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>• Distance: <?php echo number_format($distance, 2); ?> <?php echo ($unit === 'km') ? 'kilometers' : 'miles'; ?></li>
                    <li>• Time: <?php echo $time_h ?>h <?php echo $time_m ?>m <?php echo $time_s ?>s</li>
                    <li>• Total time: <?php echo number_format($total_hours, 4); ?> hours</li>
                    <li>• Formula: Speed = Distance / Time</li>
                </ul>
            </div>
        <?php endif; ?>

        <div class="mt-12 bg-white p-6 rounded-xl shadow-sm">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Use the Speed Calculator</h2>
            <div class="prose max-w-none text-gray-700">
                <ol class="list-decimal pl-5 space-y-2">
                    <li>Enter the distance traveled (in kilometers or miles)</li>
                    <li>Enter the time taken (hours, minutes, and seconds)</li>
                    <li>Click "Calculate Speed" to see your results</li>
                    <li>The calculator will show both speed (km/h or mph) and pace (min/km or min/mile)</li>
                </ol>
                <p class="mt-4">This calculator is useful for runners, cyclists, drivers, and anyone who needs to calculate speed based on distance and time.</p>
            </div>
        </div>
    </div>


</body>
<?php include 'footer.php';?>
</html>
