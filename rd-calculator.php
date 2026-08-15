<?php
$pageTitle = '2026 RD Calculator - Free Recurring Deposit Interest & Maturity Tool';
$pageDescription = 'Calculate your RD returns in 2026 for free. Estimate interest earnings, maturity value, and compare recurring deposit schemes easily with our online tool.';
include 'header.php';
?>


<?php
// Function to calculate RD maturity amount
function calculateRD($principal, $rate, $tenure, $compoundingFrequency = 4) {
    // Convert annual rate to quarterly (since most RDs compound quarterly)
    $rate = $rate / 100;
    $n = $compoundingFrequency; // compounding frequency (quarterly = 4)
    $quarters = $tenure * $compoundingFrequency / 12; // convert months to quarters
    
    // RD formula: M = R * [(1+i)^n - 1]/(1-(1+i)^(-1/3))
    $i = $rate / $n;
    $maturity = $principal * (pow(1 + $i, $quarters)) - 1;
    $maturity = $maturity / (1 - pow(1 + $i, -1/3));
    
    $totalInvestment = $principal * $tenure;
    $interestEarned = $maturity - $totalInvestment;
    
    return [
        'maturity' => round($maturity),
        'investment' => $totalInvestment,
        'interest' => round($interestEarned)
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = (float)$_POST['principal'];
    $rate = (float)$_POST['rate'];
    $tenure = (int)$_POST['tenure'];
    
    if ($principal > 0 && $rate > 0 && $tenure > 0) {
        $result = calculateRD($principal, $rate, $tenure);
    }
}
?>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
        .result-card {
            background: linear-gradient(135deg, #f6f7f9 0%, #e9ebee 100%);
        }
        .tenure-tabs .active {
            background-color: #3b82f6;
            color: white;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Recurring Deposit Calculator</h1>
            <p class="text-gray-600">Estimate your RD maturity amount with interest</p>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="md:flex">
                <!-- Input Form -->
                <div class="p-6 md:w-1/2">
                    <form method="POST" class="space-y-6">
                        <div>
                            <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">Monthly Deposit (₹)</label>
                            <input type="number" id="principal" name="principal" min="500" step="500" 
                                   class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" 
                                   placeholder="e.g. 5000" required value="<?= isset($_POST['principal']) ? htmlspecialchars($_POST['principal']) : '5000' ?>">
                        </div>

                        <div>
                            <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Interest Rate (% p.a.)</label>
                            <input type="number" id="rate" name="rate" min="1" max="20" step="0.1" 
                                   class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" 
                                   placeholder="e.g. 6.5" required value="<?= isset($_POST['rate']) ? htmlspecialchars($_POST['rate']) : '6.5' ?>">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tenure</label>
                            <div class="tenure-tabs flex border border-gray-300 rounded-md overflow-hidden">
                                <button type="button" class="flex-1 py-2 px-4 text-center border-r border-gray-300 active" data-months="6">6 Months</button>
                                <button type="button" class="flex-1 py-2 px-4 text-center border-r border-gray-300" data-months="12">1 Year</button>
                                <button type="button" class="flex-1 py-2 px-4 text-center border-r border-gray-300" data-months="24">2 Years</button>
                                <button type="button" class="flex-1 py-2 px-4 text-center" data-months="60">5 Years</button>
                            </div>
                            <input type="hidden" id="tenure" name="tenure" value="<?= isset($_POST['tenure']) ? htmlspecialchars($_POST['tenure']) : '12' ?>">
                        </div>

                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">
                            Calculate
                        </button>
                    </form>
                </div>

                <!-- Results -->
                <div class="p-6 md:w-1/2 result-card">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">RD Calculation Results</h2>
                    
                    <?php if ($result): ?>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                                <span class="text-gray-600">Maturity Value</span>
                                <span class="text-2xl font-bold text-gray-800">₹<?= number_format($result['maturity']) ?></span>
                            </div>
                            <div class="flex justify-between items-center pb-2 border-b border-gray-200">
                                <span class="text-gray-600">Total Investment</span>
                                <span class="text-lg font-medium text-gray-700">₹<?= number_format($result['investment']) ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-600">Interest Earned</span>
                                <span class="text-lg font-medium text-green-600">₹<?= number_format($result['interest']) ?></span>
                            </div>
                        </div>

                        <div class="mt-6 bg-blue-50 p-4 rounded-lg">
                            <h3 class="font-medium text-blue-800 mb-2">Summary</h3>
                            <p class="text-sm text-gray-700">
                                Your investment of ₹<?= number_format($_POST['principal']) ?> per month at <?= htmlspecialchars($_POST['rate']) ?>% p.a. for <?= floor($_POST['tenure']/12) ?> years will grow to ₹<?= number_format($result['maturity']) ?>.
                            </p>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="mt-2 text-gray-500">Enter your RD details to see calculations</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Recurring Deposit Calculator</h2>
            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-medium text-gray-800">What is a Recurring Deposit (RD)?</h3>
                    <p class="mt-1 text-gray-600">A Recurring Deposit is a special type of term deposit where you deposit a fixed amount every month for a predetermined period. The bank pays interest on these deposits, typically compounded quarterly.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-medium text-gray-800">How is RD interest calculated?</h3>
                    <p class="mt-1 text-gray-600">The interest on RDs is compounded quarterly. The formula used is: M = R × [(1+i)^n - 1]/(1-(1+i)^(-1/3)), where M is maturity amount, R is monthly deposit, i is quarterly interest rate, and n is number of quarters.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tenure tab functionality
        document.querySelectorAll('.tenure-tabs button').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.tenure-tabs button').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Update hidden input value
                document.getElementById('tenure').value = this.dataset.months;
            });
        });

        // Initialize active tab based on current value
        const currentTenure = document.getElementById('tenure').value;
        document.querySelector(`.tenure-tabs button[data-months="${currentTenure}"]`).classList.add('active');
    </script>
</body>

<?php include 'footer.php';?>
</html>
