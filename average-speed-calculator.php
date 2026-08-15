<?php include 'header.php';?>

<?php
// Initialize variables
$distance = '';
$time_h = '';
$time_m = '';
$time_s = '';
$speed = '';
$unit = 'kmh';
$error = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form values
    $distance = filter_input(INPUT_POST, 'distance', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $time_h = filter_input(INPUT_POST, 'time_h', FILTER_SANITIZE_NUMBER_INT);
    $time_m = filter_input(INPUT_POST, 'time_m', FILTER_SANITIZE_NUMBER_INT);
    $time_s = filter_input(INPUT_POST, 'time_s', FILTER_SANITIZE_NUMBER_INT);
    $unit = filter_input(INPUT_POST, 'unit', FILTER_SANITIZE_STRING);

    // Validate inputs
    if (empty($distance) || $distance <= 0) {
        $error = 'Please enter a valid distance greater than 0';
    } elseif (($time_h == 0 && $time_m == 0 && $time_s == 0) || ($time_h < 0 || $time_m < 0 || $time_s < 0)) {
        $error = 'Please enter valid time values';
    } else {
        // Calculate total time in hours
        $total_hours = $time_h + ($time_m / 60) + ($time_s / 3600);

        // Calculate speed
        if ($total_hours > 0) {
            $speed = $distance / $total_hours;

            // Convert to mph if needed
            if ($unit === 'mph') {
                $speed = $speed * 0.621371;
            }
        } else {
            $error = 'Total time cannot be zero';
        }
    }
}
?>

    <title>Free Average Speed Calculator 2026 - Find MPH/KPH Instantly</title>
    <meta name="description" content="Calculate average speed (2026) for trips, workouts & more! Free online tool computes MPH/KPH from distance & time. No sign-up - get results in seconds!">
    <style>
        .calculator-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f8f9fa; /* bg-gray-100 */
            border-radius: 10px; /* rounded-lg */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* shadow-lg */
        }
        .result-box {
            background-color: #e9ecef; /* bg-gray-200 */
            border-radius: 8px; /* rounded */
            padding: 15px; /* p-4 */
            margin-top: 20px; /* mt-5 */
        }
        /* .form-label { font-weight: 500; } - Handled by Tailwind's font-medium */
        .time-inputs {
            display: flex;
            gap: 10px; /* gap-2.5 or gap-3 */
        }
        .time-inputs .form-control {
            flex: 1;
        }
        h1 {
            color: #0d6efd; /* text-blue-600 */
            margin-bottom: 20px; /* mb-5 */
            font-size: 2rem; /* text-3xl */
        }
        @media (max-width: 576px) {
            .time-inputs {
                flex-direction: column;
                gap: 5px; /* gap-1.5 or gap-2 */
            }
            h1 {
                font-size: 1.5rem; /* sm:text-2xl */
            }
        }
    </style>

<body class="bg-gray-50">
    <div class="calculator-container">
        <h1 class="text-center text-blue-600 mb-5 text-3xl sm:text-2xl">Average Speed Calculator</h1>

        <form method="post">
            <div class="mb-4">
                <label for="distance" class="block mb-2 font-medium">Distance</label>
                <div class="flex">
                    <input type="number" step="0.01" class="flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500" id="distance" name="distance"
                           value="<?php echo htmlspecialchars($distance); ?>" required>
                    <select class="border border-gray-300 rounded-r px-2 focus:outline-none focus:ring-2 focus:ring-blue-500" name="unit" style="max-width: 100px;">
                        <option value="kmh" <?php echo $unit === 'kmh' ? 'selected' : ''; ?>>km</option>
                        <option value="mph" <?php echo $unit === 'mph' ? 'selected' : ''; ?>>miles</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium">Time Taken</label>
                <div class="time-inputs">
                    <div>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="time_h"
                               value="<?php echo htmlspecialchars($time_h); ?>" placeholder="Hours" min="0">
                    </div>
                    <div>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="time_m"
                               value="<?php echo htmlspecialchars($time_m); ?>" placeholder="Minutes" min="0" max="59">
                    </div>
                    <div>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" name="time_s"
                               value="<?php echo htmlspecialchars($time_s); ?>" placeholder="Seconds" min="0" max="59">
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                Calculate Average Speed
            </button>
        </form>

        <?php if (!empty($error)): ?>
            <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php elseif ($speed !== ''): ?>
            <div class="result-box mt-5">
                <h3 class="text-center text-xl font-semibold mb-2">Result</h3>
                <p class="text-center text-2xl">
                    Average Speed: <strong><?php echo number_format($speed, 2); ?></strong>
                    <?php echo $unit === 'kmh' ? 'km/h' : 'mph'; ?>
                </p>
                <p class="text-gray-600 text-center mt-2">
                    Calculated for <?php echo htmlspecialchars($distance); ?> <?php echo $unit === 'kmh' ? 'km' : 'miles'; ?> in
                    <?php
                    $time_parts = [];
                    if ($time_h > 0) $time_parts[] = $time_h . ' hour' . ($time_h > 1 ? 's' : '');
                    if ($time_m > 0) $time_parts[] = $time_m . ' minute' . ($time_m > 1 ? 's' : '');
                    if ($time_s > 0) $time_parts[] = $time_s . ' second' . ($time_s > 1 ? 's' : '');
                    echo implode(', ', $time_parts);
                    ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="mt-6">
            <h2 class="text-xl font-semibold mb-2">How to Calculate Average Speed</h2>
            <p class="mb-2">Average speed is calculated by dividing the total distance traveled by the total time taken.</p>
            <p class="mb-2">The formula is: <strong>Average Speed = Total Distance / Total Time</strong></p>
            <p>Example: If you travel 120 kilometers in 2 hours, your average speed is 60 km/h.</p>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
</body>
<?php include 'footer.php';?>
</html>
