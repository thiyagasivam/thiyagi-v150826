<?php
$pageTitle = 'EMI Calculator - Calculate Loan EMI, Interest & Payment Schedule';
$pageDescription = 'Free online EMI calculator for home loan, personal loan, car loan and more. Calculate monthly EMI, total interest and payment schedule.';
include 'header.php';
?>

<?php
// EMI calculation function
function calculateEMI($principal, $interestRate, $tenureMonths) {
    $monthlyRate = ($interestRate / 100) / 12;
    
    if ($monthlyRate == 0) {
        $emi = $principal / $tenureMonths;
    } else {
        $emi = $principal * $monthlyRate * pow(1 + $monthlyRate, $tenureMonths) / (pow(1 + $monthlyRate, $tenureMonths) - 1);
    }
    
    $totalPayment = $emi * $tenureMonths;
    $totalInterest = $totalPayment - $principal;
    
    return [
        'emi' => round($emi, 2),
        'total_payment' => round($totalPayment, 2),
        'total_interest' => round($totalInterest, 2),
        'principal' => round($principal, 2)
    ];
}

// Handle form submission
$results = null;
$errors = [];
$defaultValues = [
    'principal' => '',
    'interest_rate' => '',
    'tenure_years' => '1',
    'tenure_months' => '0'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $principal = filter_input(INPUT_POST, 'principal', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $interestRate = filter_input(INPUT_POST, 'interest_rate', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $tenureYears = filter_input(INPUT_POST, 'tenure_years', FILTER_SANITIZE_NUMBER_INT);
    $tenureMonths = filter_input(INPUT_POST, 'tenure_months', FILTER_SANITIZE_NUMBER_INT);
    
    // Validate inputs
    if (empty($principal)) {
        $errors[] = "Loan amount is required";
    } elseif (!is_numeric($principal) || $principal <= 0) {
        $errors[] = "Please enter a valid positive loan amount";
    }
    
    if (empty($interestRate)) {
        $errors[] = "Interest rate is required";
    } elseif (!is_numeric($interestRate) || $interestRate < 0) {
        $errors[] = "Please enter a valid non-negative interest rate";
    }
    
    if ((empty($tenureYears) || $tenureYears < 0) && (empty($tenureMonths) || $tenureMonths < 0)) {
        $errors[] = "Please enter a valid loan tenure";
    }
    
    // Convert to proper types
    $principal = (float)$principal;
    $interestRate = (float)$interestRate;
    $tenureYears = max(0, (int)$tenureYears);
    $tenureMonths = max(0, (int)$tenureMonths);
    
    // Additional validation
    if ($tenureYears == 0 && $tenureMonths == 0 && empty($errors)) {
        $errors[] = "Loan tenure cannot be zero";
    }
    
    if ($tenureMonths >= 12) {
        $errors[] = "Months must be between 0-11";
    }
    
    // Calculate if no errors
    if (empty($errors)) {
        $tenureMonthsTotal = ($tenureYears * 12) + $tenureMonths;
        $results = calculateEMI($principal, $interestRate, $tenureMonthsTotal);
        
        // Generate amortization schedule
        $balance = $principal;
        $monthlyRate = ($interestRate / 100) / 12;
        $amortization = [];
        
        for ($i = 1; $i <= $tenureMonthsTotal; $i++) {
            $interest = $balance * $monthlyRate;
            $principalPayment = $results['emi'] - $interest;
            $balance -= $principalPayment;
            
            // Don't show negative balance
            if ($balance < 0) $balance = 0;
            
            $amortization[] = [
                'month' => $i,
                'payment' => $results['emi'],
                'principal' => $principalPayment,
                'interest' => $interest,
                'balance' => $balance
            ];
        }
        
        $results['amortization'] = $amortization;
    }
    
    // Store values for form repopulation
    $defaultValues = [
        'principal' => htmlspecialchars($_POST['principal'] ?? ''),
        'interest_rate' => htmlspecialchars($_POST['interest_rate'] ?? ''),
        'tenure_years' => htmlspecialchars($_POST['tenure_years'] ?? '1'),
        'tenure_months' => htmlspecialchars($_POST['tenure_months'] ?? '0')
    ];
}
?>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .input-group {
            @apply mb-4;
        }
        .input-label {
            @apply block text-gray-700 text-sm font-bold mb-2 flex items-center;
        }
        .input-field {
            @apply shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent;
        }
        .btn-primary {
            @apply bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg w-full transition duration-200 flex items-center justify-center;
        }
        .result-card {
            @apply bg-white p-6 rounded-lg shadow-md mt-6 border border-gray-200;
        }
        .result-title {
            @apply text-2xl font-bold text-gray-800 mb-4 flex items-center;
        }
        .result-value {
            @apply text-3xl font-bold text-green-600;
        }
        .error-message {
            @apply text-red-500 text-sm italic mt-1;
        }
        .summary-card {
            @apply bg-gradient-to-br from-green-50 to-green-100 p-4 rounded-lg border border-green-200;
        }
        .tab-content {
            @apply hidden;
        }
        .tab-content.active {
            @apply block;
        }
        .amortization-row:hover {
            @apply bg-green-50;
        }
        .tab-btn {
            @apply py-2 px-4 font-medium text-gray-500 hover:text-green-500 border-b-2 border-transparent;
        }
        .tab-btn.active {
            @apply text-green-600 border-green-600;
        }
        .slider-container {
            @apply mt-2;
        }
        .slider {
            @apply w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer;
        }
        .slider::-webkit-slider-thumb {
            @apply w-4 h-4 bg-green-600 rounded-full appearance-none cursor-pointer;
        }
    </style>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto p-4 max-w-3xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">
                <i class="fas fa-calculator text-green-500 mr-2"></i> EMI Calculator
            </h1>
            <p class="text-gray-600 max-w-md mx-auto">Calculate your Equated Monthly Installment (EMI) for loans</p>
        </div>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-6 border border-gray-200">
            <form method="POST" id="emi-form">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="input-group">
                        <label for="principal" class="input-label">
                            <i class="fas fa-rupee-sign text-green-500 mr-2"></i> Loan Amount
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                            <input type="number" id="principal" name="principal" class="input-field pl-8" 
                                   placeholder="1,00,000" step="1000" min="0" 
                                   value="<?= $defaultValues['principal'] ?>" required>
                        </div>
                        <div class="slider-container">
                            <input type="range" min="1000" max="10000000" value="<?= $defaultValues['principal'] ?: '100000' ?>" 
                                   class="slider" id="principal-slider" oninput="updatePrincipal(this.value)">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="interest_rate" class="input-label">
                            <i class="fas fa-percent text-green-500 mr-2"></i> Interest Rate
                        </label>
                        <div class="relative">
                            <input type="number" id="interest_rate" name="interest_rate" class="input-field pr-8" 
                                   placeholder="8.5" step="0.01" min="0" max="30" 
                                   value="<?= $defaultValues['interest_rate'] ?>" required>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">%</span>
                        </div>
                        <div class="slider-container">
                            <input type="range" min="0" max="30" step="0.1" value="<?= $defaultValues['interest_rate'] ?: '8.5' ?>" 
                                   class="slider" id="interest-slider" oninput="updateInterest(this.value)">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="tenure_years" class="input-label">
                            <i class="far fa-calendar-alt text-green-500 mr-2"></i> Loan Tenure (Years)
                        </label>
                        <input type="number" id="tenure_years" name="tenure_years" class="input-field" 
                               placeholder="5" min="0" max="30" 
                               value="<?= $defaultValues['tenure_years'] ?>">
                        <div class="slider-container">
                            <input type="range" min="0" max="30" value="<?= $defaultValues['tenure_years'] ?: '1' ?>" 
                                   class="slider" id="tenure-years-slider" oninput="updateTenureYears(this.value)">
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <label for="tenure_months" class="input-label">
                            <i class="far fa-calendar text-green-500 mr-2"></i> Loan Tenure (Months)
                        </label>
                        <input type="number" id="tenure_months" name="tenure_months" class="input-field" 
                               placeholder="6" min="0" max="11" 
                               value="<?= $defaultValues['tenure_months'] ?>">
                        <div class="slider-container">
                            <input type="range" min="0" max="11" value="<?= $defaultValues['tenure_months'] ?: '0' ?>" 
                                   class="slider" id="tenure-months-slider" oninput="updateTenureMonths(this.value)">
                        </div>
                    </div>
                </div>
                
                <?php if (!empty($errors)): ?>
                    <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <?php foreach ($errors as $error): ?>
                            <p class="error-message">
                                <i class="fas fa-exclamation-circle mr-2"></i><?= htmlspecialchars($error) ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <div class="mt-6">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-calculator mr-2"></i> Calculate EMI
                    </button>
                </div>
            </form>
        </div>
        
        <?php if ($results): ?>
            <div class="result-card">
                <h2 class="result-title">
                    <i class="fas fa-chart-pie text-green-500 mr-2"></i> EMI Summary
                </h2>
                
                <div class="summary-card mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center p-4">
                            <div class="text-gray-600 mb-1 flex items-center justify-center">
                                <i class="fas fa-calendar-check mr-2"></i> Monthly EMI
                            </div>
                            <div class="result-value">₹<?= number_format($results['emi'], 2) ?></div>
                        </div>
                        
                        <div class="text-center p-4">
                            <div class="text-gray-600 mb-1 flex items-center justify-center">
                                <i class="fas fa-money-bill-wave mr-2"></i> Total Interest
                            </div>
                            <div class="result-value">₹<?= number_format($results['total_interest'], 2) ?></div>
                        </div>
                        
                        <div class="text-center p-4">
                            <div class="text-gray-600 mb-1 flex items-center justify-center">
                                <i class="fas fa-coins mr-2"></i> Total Payment
                            </div>
                            <div class="result-value">₹<?= number_format($results['total_payment'], 2) ?></div>
                        </div>
                    </div>
                </div>
                
                <div class="mb-6">
                    <div class="flex border-b border-gray-200">
                        <button class="tab-btn active" data-tab="amortization">
                            <i class="fas fa-table mr-2"></i>Payment Schedule
                        </button>
                        <button class="tab-btn" data-tab="chart">
                            <i class="fas fa-chart-bar mr-2"></i>Breakdown
                        </button>
                    </div>
                    
                    <div id="amortization" class="tab-content active mt-4">
                        <h3 class="text-lg font-semibold mb-3 flex items-center">
                            <i class="fas fa-list-ol text-green-500 mr-2"></i> Amortization Schedule
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="py-3 px-4 text-left">Month</th>
                                        <th class="py-3 px-4 text-right">EMI</th>
                                        <th class="py-3 px-4 text-right">Principal</th>
                                        <th class="py-3 px-4 text-right">Interest</th>
                                        <th class="py-3 px-4 text-right">Balance</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php
                                    // Show first 5 and last 5 payments
                                    $totalPayments = count($results['amortization']);
                                    $showPayments = [];
                                    
                                    for ($i = 0; $i < min(5, $totalPayments); $i++) {
                                        $showPayments[] = $i;
                                    }
                                    
                                    if ($totalPayments > 10) {
                                        $showPayments[] = -1; // Marker for "..."
                                        for ($i = max(5, $totalPayments - 5); $i < $totalPayments; $i++) {
                                            $showPayments[] = $i;
                                        }
                                    } elseif ($totalPayments > 5) {
                                        for ($i = 5; $i < $totalPayments; $i++) {
                                            $showPayments[] = $i;
                                        }
                                    }
                                    
                                    foreach ($showPayments as $index) {
                                        if ($index == -1) {
                                            echo '<tr><td colspan="5" class="py-2 text-center text-gray-500">... ' . ($totalPayments - 10) . ' more payments ...</td></tr>';
                                            continue;
                                        }
                                        
                                        $payment = $results['amortization'][$index];
                                        echo '<tr class="amortization-row">';
                                        echo '<td class="py-3 px-4">' . $payment['month'] . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($payment['payment'], 2) . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($payment['principal'], 2) . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($payment['interest'], 2) . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($payment['balance'], 2) . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div id="chart" class="tab-content mt-4">
                        <canvas id="emiChart" height="300"></canvas>
                        <div class="mt-4 text-center text-sm text-gray-500">
                            <i class="fas fa-info-circle mr-1"></i> Visual breakdown of principal vs interest payments
                        </div>
                    </div>
                </div>
                
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <h3 class="font-semibold text-green-800 mb-2 flex items-center">
                        <i class="fas fa-lightbulb text-green-500 mr-2"></i> Tips to Reduce EMI
                    </h3>
                    <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                        <li><strong>Increase your down payment:</strong> A larger down payment means a smaller loan amount</li>
                        <li><strong>Opt for a longer tenure:</strong> Spread your payments over more months to reduce EMI</li>
                        <li><strong>Negotiate a lower interest rate:</strong> Good credit score can help get better rates</li>
                        <li><strong>Make prepayments:</strong> Reduce principal amount to lower interest burden</li>
                    </ul>
                </div>
                
                <script>
                    // Initialize chart when results are shown
                    document.addEventListener('DOMContentLoaded', function() {
                        const ctx = document.getElementById('emiChart').getContext('2d');
                        const emiChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: ['Principal', 'Interest'],
                                datasets: [{
                                    data: [<?= $results['principal'] ?>, <?= $results['total_interest'] ?>],
                                    backgroundColor: [
                                        'rgba(40, 167, 69, 0.8)',
                                        'rgba(220, 53, 69, 0.8)'
                                    ],
                                    borderColor: [
                                        'rgba(40, 167, 69, 1)',
                                        'rgba(220, 53, 69, 1)'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                let label = context.label || '';
                                                if (label) {
                                                    label += ': ';
                                                }
                                                label += '₹' + context.raw.toLocaleString();
                                                return label;
                                            }
                                        }
                                    }
                                }
                            }
                        });
                    });
                </script>
            </div>
        <?php endif; ?>
    </div>

    <script>
        // Tab functionality
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and content
                document.querySelectorAll('.tab-btn').forEach(b => {
                    b.classList.remove('active', 'text-green-600', 'border-green-600');
                    b.classList.add('text-gray-500');
                });
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                btn.classList.add('active', 'text-green-600', 'border-green-600');
                btn.classList.remove('text-gray-500');
                const tabId = btn.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
        
        // Slider functionality
        function updatePrincipal(value) {
            document.getElementById('principal').value = value;
        }
        
        function updateInterest(value) {
            document.getElementById('interest_rate').value = value;
        }
        
        function updateTenureYears(value) {
            document.getElementById('tenure_years').value = value;
        }
        
        function updateTenureMonths(value) {
            document.getElementById('tenure_months').value = value;
        }
        
        // Form validation
        document.getElementById('emi-form').addEventListener('submit', function(e) {
            const tenureYears = document.getElementById('tenure_years').value;
            const tenureMonths = document.getElementById('tenure_months').value;
            
            if (!tenureYears && !tenureMonths) {
                alert('Please enter either years or months for the loan tenure');
                e.preventDefault();
            }
            
            if (tenureMonths >= 12) {
                alert('Months must be between 0-11');
                e.preventDefault();
            }
        });
        
        // Sync input fields with sliders
        document.getElementById('principal').addEventListener('input', function() {
            document.getElementById('principal-slider').value = this.value;
        });
        
        document.getElementById('interest_rate').addEventListener('input', function() {
            document.getElementById('interest-slider').value = this.value;
        });
        
        document.getElementById('tenure_years').addEventListener('input', function() {
            document.getElementById('tenure-years-slider').value = this.value;
        });
        
        document.getElementById('tenure_months').addEventListener('input', function() {
            document.getElementById('tenure-months-slider').value = this.value;
        });
    </script>
</body>
<?php include 'footer.php'; ?>
</html>
