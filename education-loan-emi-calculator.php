<?php include 'header.php';?>
<?php
// Function to calculate EMI
function calculateEMI($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $emi = $principal * $monthlyRate * pow(1 + $monthlyRate, $tenure) / (pow(1 + $monthlyRate, $tenure) - 1);
    return round($emi, 2);
}

// Function to generate amortization schedule
function generateSchedule($principal, $rate, $tenure, $emi) {
    $monthlyRate = ($rate / 12) / 100;
    $balance = $principal;
    $schedule = [];
    
    for ($month = 1; $month <= $tenure; $month++) {
        $interest = $balance * $monthlyRate;
        $principalComponent = $emi - $interest;
        $balance -= $principalComponent;
        
        $schedule[] = [
            'month' => $month,
            'emi' => $emi,
            'principal' => round($principalComponent, 2),
            'interest' => round($interest, 2),
            'balance' => round(abs($balance), 2)
        ];
    }
    
    return $schedule;
}

// Handle form submission
$emi = 0;
$totalInterest = 0;
$totalPayment = 0;
$schedule = [];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = (float)$_POST['principal'];
    $rate = (float)$_POST['rate'];
    $tenure = (int)$_POST['tenure'];
    
    if ($principal > 0 && $rate > 0 && $tenure > 0) {
        $emi = calculateEMI($principal, $rate, $tenure);
        $totalPayment = $emi * $tenure;
        $totalInterest = $totalPayment - $principal;
        $schedule = generateSchedule($principal, $rate, $tenure, $emi);
    } else {
        $error = 'Please enter valid values for all fields.';
    }
}
?>

    <title>Free Education Loan EMI Calculator 2026 - Calculate Monthly Payments Instantly</title>
<meta name="description" content="Calculate your education loan EMIs with our free 2026 calculator. Get accurate monthly payment estimates, interest breakdowns, and repayment schedules in seconds.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .calculator-box {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .result-card {
            transition: all 0.3s ease;
        }
        .result-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .schedule-row:nth-child(even) {
            background-color: #f8fafc;
        }
        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Education Loan EMI Calculator</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Calculate your monthly EMI, total interest and payment schedule for education loans</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Calculator Form -->
            <div class="bg-white p-6 rounded-xl calculator-box lg:col-span-1">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Loan Details</h2>
                <form method="POST">
                    <div class="mb-4">
                        <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">Loan Amount (₹)</label>
                        <input type="number" id="principal" name="principal" min="10000" max="5000000" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                               placeholder="e.g. 500000" required>
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>₹10,000</span>
                            <span>₹50,00,000</span>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Interest Rate (% p.a.)</label>
                        <input type="range" id="rate" name="rate" min="1" max="20" step="0.1" value="10" 
                               class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>1%</span>
                            <span id="rateValue">10%</span>
                            <span>20%</span>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="tenure" class="block text-sm font-medium text-gray-700 mb-1">Loan Tenure (years)</label>
                        <input type="range" id="tenure" name="tenure" min="1" max="20" value="5" 
                               class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                        <div class="flex justify-between text-xs text-gray-500 mt-1">
                            <span>1 year</span>
                            <span id="tenureValue">5 years</span>
                            <span>20 years</span>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300">
                        Calculate EMI
                    </button>
                </form>
            </div>

            <!-- Results Section -->
            <div class="lg:col-span-2">
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded">
                        <p><?php echo htmlspecialchars($error); ?></p>
                    </div>
                <?php endif; ?>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)): ?>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-white p-6 rounded-xl result-card shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium">Monthly EMI</h3>
                            <p class="text-2xl font-bold text-blue-600 mt-1">₹<?php echo number_format($emi, 2); ?></p>
                        </div>
                        <div class="bg-white p-6 rounded-xl result-card shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium">Total Interest</h3>
                            <p class="text-2xl font-bold text-blue-600 mt-1">₹<?php echo number_format($totalInterest, 2); ?></p>
                        </div>
                        <div class="bg-white p-6 rounded-xl result-card shadow-sm">
                            <h3 class="text-gray-500 text-sm font-medium">Total Payment</h3>
                            <p class="text-2xl font-bold text-blue-600 mt-1">₹<?php echo number_format($totalPayment, 2); ?></p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl calculator-box overflow-hidden">
                        <div class="p-4 border-b">
                            <h2 class="text-lg font-semibold text-gray-800">Payment Schedule</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Month</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">EMI (₹)</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Principal (₹)</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Interest (₹)</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Balance (₹)</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($schedule as $payment): ?>
                                        <tr class="schedule-row">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $payment['month']; ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($payment['emi'], 2); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($payment['principal'], 2); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($payment['interest'], 2); ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($payment['balance'], 2); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <!--<div class="bg-white p-8 rounded-xl calculator-box text-center">-->
                        <!--<img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" alt="Calculator" class="h-24 mx-auto mb-4 opacity-50">-->
                    <!--    <h3 class="text-lg font-medium text-gray-700 mb-2">Enter Loan Details</h3>-->
                    <!--    <p class="text-gray-500">Fill in the loan details on the left to calculate your EMI and payment schedule.</p>-->
                    <!--</div>-->
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Update slider values in real-time
        document.getElementById('rate').addEventListener('input', function() {
            document.getElementById('rateValue').textContent = this.value + '%';
        });
        
        document.getElementById('tenure').addEventListener('input', function() {
            const years = this.value;
            document.getElementById('tenureValue').textContent = years + (years == 1 ? ' year' : ' years');
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
