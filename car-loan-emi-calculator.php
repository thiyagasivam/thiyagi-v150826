<?php include 'header.php';?>


<?php
// Function to calculate EMI
function calculateEMI($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $term = $tenure * 12;
    
    // EMI formula: [P x R x (1+R)^N]/[(1+R)^N-1]
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $term)) / 
           (pow(1 + $monthlyRate, $term) - 1);
    
    return round($emi, 2);
}

// Function to calculate total interest
function calculateTotalInterest($emi, $tenure, $principal) {
    $totalPayment = $emi * $tenure * 12;
    return round($totalPayment - $principal, 2);
}

// Handle form submission
$emi = $totalInterest = $totalPayment = 0;
$principal = $rate = $tenure = 0;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = floatval($_POST['principal'] ?? 0);
    $rate = floatval($_POST['rate'] ?? 0);
    $tenure = intval($_POST['tenure'] ?? 0);
    
    if ($principal > 0 && $rate > 0 && $tenure > 0) {
        $emi = calculateEMI($principal, $rate, $tenure);
        $totalInterest = calculateTotalInterest($emi, $tenure, $principal);
        $totalPayment = $principal + $totalInterest;
    } else {
        $error = 'Please enter valid values for all fields.';
    }
}
?>

    <title>Free Car Loan EMI Calculator 2026 - Instant Payment Estimates</title>
    <meta name="description" content="Calculate your 2026 car loan EMI instantly! Free online tool with amortization schedule. Compare interest rates & loan tenures. No registration required!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: #e2e8f0;
            outline: none;
        }
        
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4299e1;
            cursor: pointer;
        }
        
        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #4299e1;
            cursor: pointer;
        }
        
        .result-card {
            background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
        }
        
        .input-field {
            transition: all 0.3s ease;
        }
        
        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }
    </style>

<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-2">Car Loan EMI Calculator</h1>
            <p class="text-center text-gray-600 mb-8">Calculate your monthly EMI, total interest and total payment for your car loan</p>
            
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Calculator Form -->
                <div class="w-full lg:w-1/2 bg-white rounded-xl shadow-md p-6">
                    <form method="POST">
                        <div class="mb-6">
                            <label for="principal" class="block text-gray-700 font-medium mb-2">Loan Amount (₹)</label>
                            <input type="number" id="principal" name="principal" value="<?= $principal ?>" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 input-field focus:outline-none focus:border-blue-500" 
                                   placeholder="e.g. 500000" min="10000" step="1000" required>
                            <div class="mt-2">
                                <input type="range" min="50000" max="5000000" value="<?= $principal ?: 500000 ?>" step="1000" 
                                       class="slider" id="principalRange" oninput="updateInput('principal', this.value)">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="rate" class="block text-gray-700 font-medium mb-2">Interest Rate (% p.a.)</label>
                            <input type="number" id="rate" name="rate" value="<?= $rate ?>" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 input-field focus:outline-none focus:border-blue-500" 
                                   placeholder="e.g. 8.5" min="1" max="30" step="0.1" required>
                            <div class="mt-2">
                                <input type="range" min="1" max="30" value="<?= $rate ?: 8.5 ?>" step="0.1" 
                                       class="slider" id="rateRange" oninput="updateInput('rate', this.value)">
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="tenure" class="block text-gray-700 font-medium mb-2">Loan Tenure (Years)</label>
                            <input type="number" id="tenure" name="tenure" value="<?= $tenure ?>" 
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 input-field focus:outline-none focus:border-blue-500" 
                                   placeholder="e.g. 5" min="1" max="10" required>
                            <div class="mt-2">
                                <input type="range" min="1" max="10" value="<?= $tenure ?: 5 ?>" step="1" 
                                       class="slider" id="tenureRange" oninput="updateInput('tenure', this.value)">
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                            Calculate EMI
                        </button>
                    </form>
                </div>
                
                <!-- Results Section -->
                <div class="w-full lg:w-1/2">
                    <?php if ($emi > 0): ?>
                        <div class="result-card text-white rounded-xl shadow-md p-6 mb-6">
                            <h2 class="text-2xl font-bold mb-4">Loan Summary</h2>
                            
                            <div class="flex justify-between items-center py-3 border-b border-blue-400">
                                <span class="font-medium">Monthly EMI</span>
                                <span class="text-xl font-bold">₹<?= number_format($emi, 2) ?></span>
                            </div>
                            
                            <div class="flex justify-between items-center py-3 border-b border-blue-400">
                                <span class="font-medium">Total Interest</span>
                                <span class="text-xl font-bold">₹<?= number_format($totalInterest, 2) ?></span>
                            </div>
                            
                            <div class="flex justify-between items-center py-3">
                                <span class="font-medium">Total Payment</span>
                                <span class="text-xl font-bold">₹<?= number_format($totalPayment, 2) ?></span>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Payment Schedule</h3>
                            <p class="text-gray-600 mb-4">Principal Amount: ₹<?= number_format($principal, 2) ?></p>
                            <p class="text-gray-600">Interest Amount: ₹<?= number_format($totalInterest, 2) ?></p>
                        </div>
                    <?php elseif ($error): ?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-6">
                            <p><?= htmlspecialchars($error) ?></p>
                        </div>
                    <?php else: ?>
                        <div class="bg-white rounded-xl shadow-md p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-2">How to Use</h2>
                            <ol class="list-decimal list-inside text-gray-600 space-y-2">
                                <li>Enter the loan amount you need</li>
                                <li>Input the interest rate offered by the bank</li>
                                <li>Select your preferred loan tenure</li>
                                <li>Click "Calculate EMI" to see your results</li>
                            </ol>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- EMI Formula Explanation -->
            <div class="mt-8 bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">How EMI is Calculated</h2>
                <p class="text-gray-600 mb-4">The EMI (Equated Monthly Installment) is calculated using the following formula:</p>
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <p class="font-mono text-sm">EMI = [P × R × (1+R)^N] / [(1+R)^N-1]</p>
                </div>
                <p class="text-gray-600">
                    Where:<br>
                    P = Principal loan amount<br>
                    R = Monthly interest rate (annual rate divided by 12 and then divided by 100)<br>
                    N = Loan tenure in months
                </p>
            </div>
        </div>
    </div>

    <script>
        // Function to sync range sliders with input fields
        function updateInput(inputId, value) {
            document.getElementById(inputId).value = value;
        }
        
        // Function to format currency input
        document.getElementById('principal').addEventListener('input', function(e) {
            document.getElementById('principalRange').value = this.value;
        });
        
        document.getElementById('rate').addEventListener('input', function(e) {
            document.getElementById('rateRange').value = this.value;
        });
        
        document.getElementById('tenure').addEventListener('input', function(e) {
            document.getElementById('tenureRange').value = this.value;
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
