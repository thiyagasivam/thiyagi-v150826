<?php
$pageTitle = 'Free FD Calculator 2026 - Fixed Deposit Interest & Maturity Calculator';
$pageDescription = 'Calculate fixed deposit returns with our free 2026 FD calculator. Estimate interest earnings, maturity amounts and compare rates for banks and NBFCs in seconds.';
include 'header.php';
?>

<?php
// Function to calculate FD maturity amount
function calculateFD($principal, $rate, $tenure, $compounding) {
    $rate = $rate / 100;
    $time = $tenure / 12; // Convert months to years
    
    if ($compounding == 'monthly') {
        $n = 12;
    } elseif ($compounding == 'quarterly') {
        $n = 4;
    } elseif ($compounding == 'half-yearly') {
        $n = 2;
    } else { // yearly
        $n = 1;
    }
    
    $amount = $principal * pow(1 + ($rate / $n), $n * $time);
    $interest = $amount - $principal;
    
    return [
        'maturity' => round($amount, 2),
        'interest' => round($interest, 2)
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = floatval($_POST['principal']);
    $rate = floatval($_POST['rate']);
    $tenure = intval($_POST['tenure']);
    $compounding = $_POST['compounding'];
    
    $result = calculateFD($principal, $rate, $tenure, $compounding);
}
?>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .input-range {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            outline: none;
        }
        .input-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #3b82f6;
            border-radius: 50%;
            cursor: pointer;
        }
        .input-range::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #3b82f6;
            border-radius: 50%;
            cursor: pointer;
        }
        .tab-active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">Fixed Deposit Calculator</h1>
                <p class="text-gray-600">Calculate your FD maturity amount and interest earnings</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Calculator Form -->
            <div class="bg-white rounded-xl shadow-md p-6 md:col-span-2">
                <form method="POST">
                    <div class="mb-6">
                        <label for="principal" class="block text-gray-700 font-medium mb-2">Investment Amount (₹)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                            <input type="number" id="principal" name="principal" min="1000" step="1000" value="<?= isset($_POST['principal']) ? $_POST['principal'] : '10000' ?>" 
                                   class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                        <input type="range" min="1000" max="1000000" step="1000" value="<?= isset($_POST['principal']) ? $_POST['principal'] : '10000' ?>" 
                               class="input-range mt-2" id="principalRange" oninput="updatePrincipal(this.value)">
                    </div>

                    <div class="mb-6">
                        <label for="rate" class="block text-gray-700 font-medium mb-2">Interest Rate (% p.a.)</label>
                        <div class="relative">
                            <input type="number" id="rate" name="rate" min="1" max="15" step="0.1" value="<?= isset($_POST['rate']) ? $_POST['rate'] : '6.5' ?>" 
                                   class="w-full pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">%</span>
                        </div>
                        <input type="range" min="1" max="15" step="0.1" value="<?= isset($_POST['rate']) ? $_POST['rate'] : '6.5' ?>" 
                               class="input-range mt-2" id="rateRange" oninput="updateRate(this.value)">
                    </div>

                    <div class="mb-6">
                        <label for="tenure" class="block text-gray-700 font-medium mb-2">Tenure (Months)</label>
                        <div class="relative">
                            <input type="number" id="tenure" name="tenure" min="1" max="120" value="<?= isset($_POST['tenure']) ? $_POST['tenure'] : '12' ?>" 
                                   class="w-full pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">months</span>
                        </div>
                        <input type="range" min="1" max="120" value="<?= isset($_POST['tenure']) ? $_POST['tenure'] : '12' ?>" 
                               class="input-range mt-2" id="tenureRange" oninput="updateTenure(this.value)">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-2">Compounding Frequency</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <button type="button" class="compounding-btn py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                    onclick="selectCompounding('monthly')">Monthly</button>
                            <button type="button" class="compounding-btn py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                    onclick="selectCompounding('quarterly')">Quarterly</button>
                            <button type="button" class="compounding-btn py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                    onclick="selectCompounding('half-yearly')">Half-Yearly</button>
                            <button type="button" class="compounding-btn py-2 px-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                    onclick="selectCompounding('yearly')">Yearly</button>
                        </div>
                        <input type="hidden" id="compounding" name="compounding" value="<?= isset($_POST['compounding']) ? $_POST['compounding'] : 'quarterly' ?>">
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Calculate Maturity Amount
                    </button>
                </form>
            </div>

            <!-- Results Section -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">FD Calculation Results</h2>
                
                <?php if ($result): ?>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Principal Amount</span>
                            <span class="font-semibold">₹<?= number_format($_POST['principal'], 2) ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Interest Earned</span>
                            <span class="font-semibold text-green-600">₹<?= number_format($result['interest'], 2) ?></span>
                        </div>
                        <div class="border-t border-gray-200 my-2"></div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-medium">Maturity Amount</span>
                            <span class="font-bold text-blue-600 text-xl">₹<?= number_format($result['maturity'], 2) ?></span>
                        </div>
                    </div>

                    <div class="mt-6 bg-blue-50 rounded-lg p-4">
                        <h3 class="font-medium text-blue-800 mb-2">Summary</h3>
                        <ul class="text-sm text-gray-700 space-y-1">
                            <li>Tenure: <?= $_POST['tenure'] ?> months</li>
                            <li>Rate of Interest: <?= $_POST['rate'] ?>% p.a.</li>
                            <li>Compounding: <?= ucfirst($_POST['compounding']) ?></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="text-center py-8">
                        <i class="fas fa-calculator text-4xl text-gray-300 mb-3"></i>
                        <p class="text-gray-500">Enter your FD details to calculate maturity amount</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="bg-white rounded-xl shadow-md p-6 mt-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About Fixed Deposits</h2>
            <div class="prose max-w-none text-gray-700">
                <p>A Fixed Deposit (FD) is a financial instrument that provides investors with a higher interest rate than a regular savings account, until the given maturity date.</p>
                <p class="mt-2">Key features:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Higher interest rates than savings accounts</li>
                    <li>Flexible tenure options from 7 days to 10 years</li>
                    <li>Interest can be paid monthly, quarterly or at maturity</li>
                    <li>Safe investment with guaranteed returns</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        // Update input fields when sliders are moved
        function updatePrincipal(val) {
            document.getElementById('principal').value = val;
        }
        function updateRate(val) {
            document.getElementById('rate').value = val;
        }
        function updateTenure(val) {
            document.getElementById('tenure').value = val;
        }

        // Handle compounding frequency selection
        function selectCompounding(freq) {
            document.getElementById('compounding').value = freq;
            document.querySelectorAll('.compounding-btn').forEach(btn => {
                btn.classList.remove('bg-blue-100', 'border-blue-300', 'text-blue-700');
            });
            event.target.classList.add('bg-blue-100', 'border-blue-300', 'text-blue-700');
        }

        // Initialize compounding button states
        document.addEventListener('DOMContentLoaded', function() {
            const currentFreq = document.getElementById('compounding').value;
            document.querySelectorAll('.compounding-btn').forEach(btn => {
                if (btn.textContent.toLowerCase().includes(currentFreq)) {
                    btn.classList.add('bg-blue-100', 'border-blue-300', 'text-blue-700');
                }
            });
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
