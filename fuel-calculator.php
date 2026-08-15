<?php include 'header.php';?>

<?php
// Fuel Calculator Logic
function calculateFuelCost($distance, $consumption, $price) {
    $fuelNeeded = ($distance * $consumption) / 100;
    $totalCost = $fuelNeeded * $price;
    return [
        'fuel' => round($fuelNeeded, 2),
        'cost' => round($totalCost, 2)
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distance = floatval($_POST['distance']);
    $consumption = floatval($_POST['consumption']);
    $price = floatval($_POST['price']);

    if ($distance > 0 && $consumption > 0 && $price > 0) {
        $result = calculateFuelCost($distance, $consumption, $price);
    }
}
?>
    <title>⛽ Free Fuel Cost Calculator 2026 - Trip Gas/Petrol Estimates</title>
    <meta name="description" content="Calculate SUV/bike fuel expenses - Compare costs for Hyundai, Toyota, Royal Enfield etc. based on your mileage">
    <style>
        .calculator-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f8f9fa; /* bg-gray-100 */
            border-radius: 10px; /* rounded-lg */
            box-shadow: 0 0 15px rgba(0,0,0,0.1); /* shadow-lg */
        }
        .result-box {
            background: #e9f7ef; /* bg-green-50 */
            border-left: 4px solid #28a745; /* border-l-4 border-green-500 */
            padding: 15px; /* p-4 */
            margin-top: 20px; /* mt-5 */
            border-radius: 5px; /* rounded */
        }
        .unit-toggle {
            cursor: pointer;
            color: #0d6efd; /* text-blue-600 */
            text-decoration: underline; /* underline */
        }
        @media (max-width: 576px) {
            .calculator-container {
                padding: 15px; /* p-4 */
            }
            h1 {
                font-size: 1.8rem; /* text-2xl */
            }
        }
    </style>

<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8"> <!-- container py-5 -> max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 -->
        <div class="calculator-container">
            <h1 class="text-center text-3xl font-bold mb-6">Fuel Cost Calculator</h1> <!-- text-center mb-4 -> text-center text-3xl font-bold mb-6 -->

            <form method="post" id="fuelCalculator">
                <div class="mb-4"> <!-- mb-3 -> mb-4 -->
                    <label for="distance" class="block mb-2 font-medium">Trip Distance</label> <!-- form-label -> block mb-2 font-medium -->
                    <div class="flex"> <!-- input-group -> flex -->
                        <input type="number" step="0.1" class="flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500" id="distance" name="distance" required> <!-- form-control -> flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                        <span class="inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-50 text-gray-500">km</span> <!-- input-group-text -> inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-50 text-gray-500 -->
                    </div>
                </div>

                <div class="mb-4">
                    <label for="consumption" class="block mb-2 font-medium">Fuel Consumption</label>
                    <div class="flex">
                        <input type="number" step="0.1" class="flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none focus:ring-2 focus:ring-blue-500" id="consumption" name="consumption" required>
                        <span class="inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-50 text-gray-500">L/100km</span>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="price" class="block mb-2 font-medium">Fuel Price</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 rounded-l border border-r-0 border-gray-300 bg-gray-50 text-gray-500">$</span> <!-- input-group-text -> inline-flex items-center px-3 rounded-l border border-r-0 border-gray-300 bg-gray-50 text-gray-500 -->
                        <input type="number" step="0.01" class="px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" id="price" name="price" required> <!-- form-control -> px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                        <span class="inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-50 text-gray-500">per liter</span>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">Calculate</button> <!-- btn btn-primary w-100 -> w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 -->
            </form>

            <?php if ($result): ?>
            <div class="result-box mt-6"> <!-- mt-4 -> mt-6 -->
                <h3 class="text-lg font-semibold mb-2">Calculation Results:</h3> <!-- h5 -> text-lg font-semibold mb-2 -->
                <p class="mb-1"><strong>Fuel Needed:</strong> <?= $result['fuel'] ?> liters</p> <!-- mb-1 -->
                <p><strong>Total Cost:</strong> $<?= $result['cost'] ?></p>
            </div>
            <?php endif; ?>

            <div class="mt-6"> <!-- mt-4 -> mt-6 -->
                <h2 class="text-xl font-semibold mb-3">How to Use This Calculator</h2> <!-- h4 -> text-xl font-semibold mb-3 -->
                <ol class="list-decimal pl-5 space-y-1">
                    <li>Enter your trip distance in kilometers</li>
                    <li>Enter your vehicle's fuel consumption (L/100km)</li>
                    <li>Enter current fuel price per liter</li>
                    <li>Click "Calculate" to see results</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
    <script>
        // Unit conversion toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Add unit toggle functionality here if needed
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
