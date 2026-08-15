<?php include 'header.php';?>


<?php
// Function to calculate RD maturity amount
function calculateRDMaturity($monthlyDeposit, $interestRate, $tenureMonths) {
    $totalMonths = $tenureMonths;
    $monthlyRate = $interestRate / 100 / 4; // Quarterly compounding
    
    $totalAmount = 0;
    for ($i = 1; $i <= $totalMonths; $i++) {
        $monthsRemaining = $totalMonths - $i + 1;
        $quarters = $monthsRemaining / 3;
        $totalAmount += $monthlyDeposit * pow(1 + $monthlyRate, $quarters);
    }
    
    return [
        'totalDeposit' => $monthlyDeposit * $tenureMonths,
        'interestEarned' => $totalAmount - ($monthlyDeposit * $tenureMonths),
        'maturityAmount' => $totalAmount
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $monthlyDeposit = floatval($_POST['monthly_deposit'] ?? 0);
    $interestRate = floatval($_POST['interest_rate'] ?? 0);
    $tenureYears = intval($_POST['tenure_years'] ?? 0);
    
    // Validate inputs
    if ($monthlyDeposit > 0 && $interestRate > 0 && $tenureYears > 0) {
        $tenureMonths = $tenureYears * 12;
        $result = calculateRDMaturity($monthlyDeposit, $interestRate, $tenureMonths);
    }
}
?>

    <title>Post Office RD Calculator 2026 - Free Recurring Deposit Interest Calculator</title>
<meta name="description" content="Free online Post Office RD calculator for 2026. Calculate maturity amount, interest earnings & monthly deposits for India Post Recurring Deposit scheme with accurate results.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .calculator-box {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .calculator-box:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .input-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .input-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .result-item {
            border-left: 4px solid #3b82f6;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Post Office RD Calculator</h1>
            <p class="text-lg text-gray-600">Calculate your Post Office Recurring Deposit maturity amount with interest</p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Calculator Form -->
            <div class="bg-white rounded-xl p-6 calculator-box">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Calculate RD Returns</h2>
                <form method="POST">
                    <div class="mb-5">
                        <label for="monthly_deposit" class="block text-sm font-medium text-gray-700 mb-1">
                            Monthly Deposit (₹)
                        </label>
                        <input type="number" id="monthly_deposit" name="monthly_deposit" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               min="100" step="100" value="<?= isset($_POST['monthly_deposit']) ? htmlspecialchars($_POST['monthly_deposit']) : '1000' ?>" required>
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>₹100</span>
                            <span>₹1Lakh+</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="interest_rate" class="block text-sm font-medium text-gray-700 mb-1">
                            Interest Rate (% p.a.)
                        </label>
                        <input type="range" id="interest_rate" name="interest_rate" min="5" max="10" step="0.1" 
                               class="w-full input-range"
                               value="<?= isset($_POST['interest_rate']) ? htmlspecialchars($_POST['interest_rate']) : '6.5' ?>">
                        <div class="flex justify-between mt-1">
                            <input type="number" id="interest_rate_display" 
                                   class="w-24 px-2 py-1 border border-gray-300 rounded text-center"
                                   min="5" max="10" step="0.1" 
                                   value="<?= isset($_POST['interest_rate']) ? htmlspecialchars($_POST['interest_rate']) : '6.5' ?>">
                            <span class="text-sm text-gray-500 self-center">% per annum</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="tenure_years" class="block text-sm font-medium text-gray-700 mb-1">
                            Tenure (Years)
                        </label>
                        <select id="tenure_years" name="tenure_years" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                            <?php for($i=1; $i<=10; $i++): ?>
                                <option value="<?= $i ?>" <?= (isset($_POST['tenure_years']) && $_POST['tenure_years'] == $i) ? 'selected' : '' ?>>
                                    <?= $i ?> Year<?= $i>1?'s':'' ?> (<?= $i*12 ?> Months)
                                </option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Calculate Maturity Amount
                    </button>
                </form>
            </div>

            <!-- Results Section -->
            <div class="bg-white rounded-xl p-6 calculator-box">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">RD Calculation Results</h2>
                
                <?php if ($result): ?>
                    <div class="space-y-4">
                        <div class="result-item bg-blue-50 p-4 rounded-r-lg">
                            <h3 class="text-sm font-medium text-gray-500">Total Investment</h3>
                            <p class="text-2xl font-bold text-gray-800">₹<?= number_format($result['totalDeposit']) ?></p>
                        </div>
                        
                        <div class="result-item bg-blue-50 p-4 rounded-r-lg">
                            <h3 class="text-sm font-medium text-gray-500">Interest Earned</h3>
                            <p class="text-2xl font-bold text-green-600">₹<?= number_format($result['interestEarned']) ?></p>
                        </div>
                        
                        <div class="result-item bg-blue-100 p-4 rounded-r-lg border-l-4 border-blue-600">
                            <h3 class="text-sm font-medium text-gray-700">Maturity Amount</h3>
                            <p class="text-3xl font-bold text-blue-600">₹<?= number_format($result['maturityAmount']) ?></p>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="font-medium text-gray-800 mb-2">Year-wise Breakdown</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Deposits</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Interest</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Balance</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php
                                    $runningBalance = 0;
                                    $monthlyDeposit = floatval($_POST['monthly_deposit']);
                                    $tenureYears = intval($_POST['tenure_years']);
                                    
                                    for ($year = 1; $year <= $tenureYears; $year++) {
                                        $yearDeposit = $monthlyDeposit * 12;
                                        $yearInterest = calculateRDMaturity($monthlyDeposit, floatval($_POST['interest_rate']), $year * 12)['interestEarned'] - $runningBalance;
                                        $runningBalance = calculateRDMaturity($monthlyDeposit, floatval($_POST['interest_rate']), $year * 12)['maturityAmount'];
                                        ?>
                                        <tr class="<?= $year % 2 === 0 ? 'bg-gray-50' : 'bg-white' ?>">
                                            <td class="px-4 py-2 text-sm text-gray-700">Year <?= $year ?></td>
                                            <td class="px-4 py-2 text-sm text-gray-700">₹<?= number_format($yearDeposit) ?></td>
                                            <td class="px-4 py-2 text-sm text-green-600">₹<?= number_format($yearInterest) ?></td>
                                            <td class="px-4 py-2 text-sm font-medium text-gray-800">₹<?= number_format($runningBalance) ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-700">Enter RD Details</h3>
                        <p class="mt-1 text-sm text-gray-500">Fill in the monthly deposit, interest rate and tenure to calculate your RD returns.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Information Section -->
        <div class="mt-8 bg-white rounded-xl p-6 calculator-box">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About Post Office RD Calculator</h2>
            <div class="prose max-w-none text-gray-700">
                <p>This Post Office Recurring Deposit calculator helps you estimate the maturity amount you will receive from your RD investment with India Post.</p>
                
                <h3 class="text-lg font-medium text-gray-800 mt-4">How Post Office RD Works:</h3>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Minimum deposit: ₹100 per month (no maximum limit)</li>
                    <li>Tenure: 5 years (60 months)</li>
                    <li>Interest compounded quarterly</li>
                    <li>Current interest rate: 6.5% per annum (as of 2023)</li>
                </ul>

                <h3 class="text-lg font-medium text-gray-800 mt-4">Benefits of Post Office RD:</h3>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Government-backed, risk-free investment</li>
                    <li>Fixed returns with guaranteed interest rates</li>
                    <li>Tax benefits under Section 80C of Income Tax Act</li>
                    <li>Nomination facility available</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Sync range slider and number input for interest rate
        const interestRateSlider = document.getElementById('interest_rate');
        const interestRateDisplay = document.getElementById('interest_rate_display');
        
        interestRateSlider.addEventListener('input', function() {
            interestRateDisplay.value = this.value;
        });
        
        interestRateDisplay.addEventListener('input', function() {
            if (this.value > 10) this.value = 10;
            if (this.value < 5) this.value = 5;
            interestRateSlider.value = this.value;
        });
    </script>
</body>

<?php include 'footer.php';?>


</html>
