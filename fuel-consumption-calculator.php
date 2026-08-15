<?php include 'header.php';?>

<?php
// Fuel Consumption Calculator Logic
function calculateFuelConsumption($distance, $fuel_used, $unit_system) {
    if ($unit_system == 'metric') {
        // liters per 100km
        return ($fuel_used / $distance) * 100;
    } else {
        // miles per gallon (US)
        return $distance / $fuel_used;
    }
}

function calculateCost($distance, $fuel_consumption, $fuel_price, $unit_system) {
    if ($unit_system == 'metric') {
        // liters = (consumption/100) * distance
        $liters = ($fuel_consumption / 100) * $distance;
        return $liters * $fuel_price;
    } else {
        // gallons = distance / mpg
        $gallons = $distance / $fuel_consumption;
        return $gallons * $fuel_price;
    }
}

// Handle form submission
$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $unit_system = $_POST['unit_system'] ?? 'metric';
    $distance = floatval($_POST['distance']);
    $fuel_used = floatval($_POST['fuel_used']);
    $fuel_price = isset($_POST['fuel_price']) ? floatval($_POST['fuel_price']) : null;

    // Calculate consumption
    $consumption = calculateFuelConsumption($distance, $fuel_used, $unit_system);
    $results['consumption'] = round($consumption, 2);
    $results['unit'] = ($unit_system == 'metric') ? 'L/100km' : 'mpg';

    // Calculate trip cost if fuel price provided
    if ($fuel_price !== null) {
        $results['trip_cost'] = round(calculateCost($distance, $consumption, $fuel_price, $unit_system), 2);
        $results['fuel_price_unit'] = ($unit_system == 'metric') ? 'per liter' : 'per gallon';
    }
}
?>

    <title>Free Fuel Consumption Calculator 2026 - Calculate Your Vehicle's Mileage</title>
<meta name="description" content="Check your car or bike's fuel efficiency with our 2026 calculator. Calculate km/liter, miles/gallon (MPG) and track fuel consumption by distance or trip.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .switch-unit {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        .switch-unit input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #4299e1;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #2b6cb0;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        .slider-text {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 10px;
            font-weight: bold;
            color: white;
        }
        .metric-text {
            left: 8px;
        }
        .imperial-text {
            right: 6px;
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto p-4 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Fuel Consumption Calculator</h1>
            <p class="text-gray-600">Calculate your vehicle's fuel economy in miles per gallon (MPG) or liters per 100 kilometers (L/100km)</p>
        </header>

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST">
                <div class="flex justify-center mb-6">
                    <label class="switch-unit mr-2">
                        <input type="checkbox" name="unit_system" value="imperial" <?php echo ($_POST['unit_system'] ?? 'metric') == 'imperial' ? 'checked' : ''; ?>>
                        <span class="slider">
                            <span class="slider-text metric-text">Metric</span>
                            <span class="slider-text imperial-text">Imperial</span>
                        </span>
                    </label>
                    <span class="text-gray-700 font-medium self-center"><?php echo ($_POST['unit_system'] ?? 'metric') == 'metric' ? 'L/100km' : 'MPG'; ?></span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="distance" class="block text-gray-700 font-medium mb-2">
                            Distance traveled (<?php echo ($_POST['unit_system'] ?? 'metric') == 'metric' ? 'kilometers' : 'miles'; ?>)
                        </label>
                        <input type="number" step="0.01" min="0" name="distance" id="distance" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 150" required value="<?php echo $_POST['distance'] ?? ''; ?>">
                    </div>
                    <div>
                        <label for="fuel_used" class="block text-gray-700 font-medium mb-2">
                            Fuel used (<?php echo ($_POST['unit_system'] ?? 'metric') == 'metric' ? 'liters' : 'gallons'; ?>)
                        </label>
                        <input type="number" step="0.01" min="0" name="fuel_used" id="fuel_used" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 12" required value="<?php echo $_POST['fuel_used'] ?? ''; ?>">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="fuel_price" class="block text-gray-700 font-medium mb-2">
                        Fuel price (optional, <?php echo ($_POST['unit_system'] ?? 'metric') == 'metric' ? 'per liter' : 'per gallon'; ?>)
                    </label>
                    <input type="number" step="0.01" min="0" name="fuel_price" id="fuel_price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 1.50" value="<?php echo $_POST['fuel_price'] ?? ''; ?>">
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    Calculate Fuel Consumption
                </button>
            </form>
        </div>

        <?php if (!empty($results)): ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Results</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-medium text-gray-700 mb-1">Fuel Consumption</h3>
                        <p class="text-3xl font-bold text-blue-600"><?php echo $results['consumption']; ?> <span class="text-lg"><?php echo $results['unit']; ?></span></p>
                    </div>
                    <?php if (isset($results['trip_cost'])): ?>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-700 mb-1">Trip Cost</h3>
                            <p class="text-3xl font-bold text-green-600">$<?php echo $results['trip_cost']; ?> <span class="text-lg">(<?php echo $results['fuel_price_unit']; ?>)</span></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">How to Calculate Fuel Consumption</h2>
            <div class="prose max-w-none">
                <h3 class="font-medium text-gray-700">Metric System (L/100km)</h3>
                <p class="text-gray-600 mb-4">Fuel consumption = (Fuel used / Distance traveled) × 100</p>

                <h3 class="font-medium text-gray-700">Imperial System (MPG)</h3>
                <p class="text-gray-600 mb-4">Fuel consumption = Distance traveled / Fuel used</p>

                <h3 class="font-medium text-gray-700">Trip Cost Calculation</h3>
                <p class="text-gray-600">Total cost = (Distance × Fuel consumption × Fuel price) / 100 (metric) or Total cost = (Distance / Fuel consumption) × Fuel price (imperial)</p>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>
