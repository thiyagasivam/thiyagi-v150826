<?php include 'header.php';?>


<?php
// Function to calculate inflation-adjusted value
function calculateInflation($currentAmount, $inflationRate, $years) {
    $futureValue = $currentAmount * pow((1 + ($inflationRate / 100)), $years);
    return round($futureValue, 2);
}

// Handle form submission
$currentAmount = isset($_POST['current_amount']) ? (float)$_POST['current_amount'] : 100000;
$inflationRate = isset($_POST['inflation_rate']) ? (float)$_POST['inflation_rate'] : 7;
$years = isset($_POST['years']) ? (int)$_POST['years'] : 10;
$futureValue = calculateInflation($currentAmount, $inflationRate, $years);
?>

    <title>Free Inflation Calculator 2026 - Adjust Prices for Purchasing Power</title>
<meta name="description" content="Calculate how inflation affects money's value over time (2026). Compare historical and projected rates for 100+ countries - With CPI/RPI adjustment tools!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .slider-thumb::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .slider-thumb::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .result-card {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Inflation Calculator</h1>
            <p class="text-gray-600">Estimate the future value of your money considering inflation</p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Calculator Form -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <form method="POST" class="space-y-6">
                    <div>
                        <label for="current_amount" class="block text-sm font-medium text-gray-700 mb-1">
                            Current Amount (₹)
                        </label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₹</span>
                            </div>
                            <input type="number" name="current_amount" id="current_amount" 
                                   class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" 
                                   placeholder="100000" value="<?= htmlspecialchars($currentAmount) ?>" required>
                        </div>
                    </div>

                    <div>
                        <label for="inflation_rate" class="block text-sm font-medium text-gray-700 mb-1">
                            Expected Inflation Rate (%)
                        </label>
                        <input type="range" name="inflation_rate" id="inflation_rate" min="1" max="20" step="0.1" 
                               class="slider-thumb w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer" 
                               value="<?= htmlspecialchars($inflationRate) ?>">
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>1%</span>
                            <span id="inflation_rate_value"><?= htmlspecialchars($inflationRate) ?>%</span>
                            <span>20%</span>
                        </div>
                    </div>

                    <div>
                        <label for="years" class="block text-sm font-medium text-gray-700 mb-1">
                            Time Period (Years)
                        </label>
                        <input type="range" name="years" id="years" min="1" max="30" step="1" 
                               class="slider-thumb w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer" 
                               value="<?= htmlspecialchars($years) ?>">
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>1</span>
                            <span id="years_value"><?= htmlspecialchars($years) ?></span>
                            <span>30</span>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-300">
                        Calculate
                    </button>
                </form>
            </div>

            <!-- Results -->
            <div class="result-card text-white p-6 rounded-xl shadow-md">
                <h2 class="text-xl font-bold mb-4">Results</h2>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm opacity-80">Current Value</p>
                        <p class="text-2xl font-bold">₹<?= number_format($currentAmount) ?></p>
                    </div>
                    <div>
                        <p class="text-sm opacity-80">After <?= $years ?> years at <?= $inflationRate ?>% inflation</p>
                        <p class="text-3xl font-bold">₹<?= number_format($futureValue) ?></p>
                    </div>
                    <div class="pt-4 border-t border-blue-400">
                        <p class="text-sm opacity-80">You'll need ₹<?= number_format($futureValue) ?> in <?= $years ?> years to match ₹<?= number_format($currentAmount) ?> today</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About Inflation Calculator</h2>
            <div class="prose text-gray-700">
                <p>This calculator helps you understand how inflation affects the purchasing power of your money over time. Inflation reduces the value of money, meaning that the same amount of money will buy you less in the future than it does today.</p>
                <p class="mt-2"><strong>Formula used:</strong> Future Value = Current Amount × (1 + Inflation Rate)<sup>Years</sup></p>
                <p class="mt-2">For example, if inflation averages 7% per year, ₹100,000 today would be equivalent to approximately ₹196,715 in 10 years.</p>
            </div>
        </div>
    </div>

    <script>
        // Update slider value displays in real-time
        document.getElementById('inflation_rate').addEventListener('input', function() {
            document.getElementById('inflation_rate_value').textContent = this.value + '%';
        });
        
        document.getElementById('years').addEventListener('input', function() {
            document.getElementById('years_value').textContent = this.value;
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
