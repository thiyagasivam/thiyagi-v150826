<?php include 'header.php';?>


<?php
// Function to calculate compound interest
function calculateCompoundInterest($principal, $rate, $time, $compoundingFrequency) {
    $amount = $principal * pow((1 + ($rate / (100 * $compoundingFrequency))), ($compoundingFrequency * $time));
    $interest = $amount - $principal;
    return [
        'amount' => $amount,
        'interest' => $interest,
        'total' => $amount
    ];
}

// Handle form submission
$results = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = floatval($_POST['principal'] ?? 0);
    $rate = floatval($_POST['rate'] ?? 0);
    $time = floatval($_POST['time'] ?? 0);
    $compoundingFrequency = intval($_POST['compounding'] ?? 1);
    
    if ($principal > 0 && $rate > 0 && $time > 0) {
        $results = calculateCompoundInterest($principal, $rate, $time, $compoundingFrequency);
    }
}
?>

    <title>Free Compound Interest Calculator 2026 - Grow Your Savings</title>
    <meta name="description" content="Calculate how your money grows with compound interest in 2026! Free online tool shows yearly/monthly projections. Perfect for investments & savings planning.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .input-group {
            transition: all 0.3s ease;
        }
        .input-group:focus-within {
            transform: translateY(-2px);
        }
        .result-card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .tab-active {
            background-color: #3b82f6;
            color: white;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Compound Interest Calculator</h1>
            <p class="text-gray-600">See how your investments can grow over time with compound interest</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <form method="POST" class="space-y-6">
                    <!-- Principal Amount -->
                    <div class="input-group">
                        <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">Principal Amount (₹)</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₹</span>
                            </div>
                            <input type="number" id="principal" name="principal" value="<?= isset($_POST['principal']) ? htmlspecialchars($_POST['principal']) : '10000' ?>" 
                                   class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" 
                                   placeholder="10,000" min="1" step="any" required>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div class="input-group">
                        <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Annual Interest Rate (%)</label>
                        <div class="relative rounded-md shadow-sm">
                            <input type="number" id="rate" name="rate" value="<?= isset($_POST['rate']) ? htmlspecialchars($_POST['rate']) : '8' ?>" 
                                   class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-3 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" 
                                   placeholder="8" min="0.01" step="0.01" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Time Period -->
                    <div class="input-group">
                        <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Time Period (years)</label>
                        <input type="number" id="time" name="time" value="<?= isset($_POST['time']) ? htmlspecialchars($_POST['time']) : '5' ?>" 
                               class="focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm" 
                               placeholder="5" min="1" step="1" required>
                    </div>

                    <!-- Compounding Frequency -->
                    <div class="input-group">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Compounding Frequency</label>
                        <div class="grid grid-cols-4 gap-2">
                            <?php 
                            $frequencies = [
                                'Annually' => 1,
                                'Quarterly' => 4,
                                'Monthly' => 12,
                                'Daily' => 365
                            ];
                            $selectedFrequency = isset($_POST['compounding']) ? intval($_POST['compounding']) : 1;
                            foreach ($frequencies as $label => $value): ?>
                                <button type="button" onclick="document.getElementById('compounding').value = <?= $value ?>; updateActiveTab(this)" 
                                        class="<?= $selectedFrequency === $value ? 'tab-active bg-blue-500 text-white' : 'bg-gray-100 text-gray-700' ?> py-2 px-3 text-sm rounded-md transition-colors">
                                    <?= $label ?>
                                </button>
                            <?php endforeach; ?>
                            <input type="hidden" id="compounding" name="compounding" value="<?= $selectedFrequency ?>">
                        </div>
                    </div>

                    <!-- Calculate Button -->
                    <div class="pt-2">
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition-colors duration-300">
                            Calculate
                        </button>
                    </div>
                </form>
            </div>

            <!-- Results Section -->
            <?php if ($results): ?>
                <div class="result-card bg-blue-50 border-t border-gray-200 p-6 md:p-8">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Investment Results</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Principal Amount</p>
                            <p class="text-2xl font-bold text-gray-800">₹<?= number_format($principal, 2) ?></p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Total Interest</p>
                            <p class="text-2xl font-bold text-green-600">₹<?= number_format($results['interest'], 2) ?></p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Total Value</p>
                            <p class="text-2xl font-bold text-blue-600">₹<?= number_format($results['total'], 2) ?></p>
                        </div>
                    </div>

                    <!-- Yearly Breakdown (simplified) -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-700 mb-3">Yearly Growth</h3>
                        <div class="bg-white p-4 rounded-lg shadow-sm overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Principal</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Interest</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php 
                                    $runningTotal = $principal;
                                    for ($year = 1; $year <= $time; $year++): 
                                        $yearlyInterest = $runningTotal * pow((1 + ($rate / (100 * $compoundingFrequency))), $compoundingFrequency) - $runningTotal;
                                        $runningTotal += $yearlyInterest;
                                    ?>
                                        <tr class="<?= $year % 2 === 0 ? 'bg-gray-50' : '' ?>">
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700"><?= $year ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">₹<?= number_format($principal, 2) ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm text-green-600">₹<?= number_format($yearlyInterest, 2) ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-blue-600">₹<?= number_format($runningTotal, 2) ?></td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Information Section -->
        <div class="mt-8 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">About Compound Interest</h2>
                <div class="prose prose-sm max-w-none text-gray-600">
                    <p>Compound interest is the addition of interest to the principal sum of a loan or deposit, or in other words, interest on interest. It's the result of reinvesting interest, rather than paying it out, so that interest in the next period is then earned on the principal sum plus previously accumulated interest.</p>
                    <p class="mt-3"><strong>Key benefits of compound interest:</strong></p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Your money grows faster than with simple interest</li>
                        <li>Small, regular investments can grow significantly over time</li>
                        <li>The longer your time horizon, the more powerful the effect</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update active tab styling
        function updateActiveTab(clickedTab) {
            document.querySelectorAll('[onclick*="updateActiveTab"]').forEach(tab => {
                tab.classList.remove('tab-active', 'bg-blue-500', 'text-white');
                tab.classList.add('bg-gray-100', 'text-gray-700');
            });
            clickedTab.classList.add('tab-active', 'bg-blue-500', 'text-white');
            clickedTab.classList.remove('bg-gray-100', 'text-gray-700');
        }
    </script>
</body>

<?php include 'footer.php';?>
</html>
