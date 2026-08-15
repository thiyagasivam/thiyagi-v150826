<?php include 'header.php';?>


<?php
// Function to calculate EMI
function calculateEMI($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $termInMonths = $tenure * 12;
    
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $termInMonths)) / 
           (pow(1 + $monthlyRate, $termInMonths) - 1);
    
    return round($emi, 2);
}

// Function to calculate total payment
function calculateTotalPayment($emi, $tenure) {
    return round($emi * $tenure * 12, 2);
}

// Function to calculate total interest
function calculateTotalInterest($totalPayment, $principal) {
    return round($totalPayment - $principal, 2);
}

// Handle form submission
$emi = $totalPayment = $totalInterest = 0;
$principal = isset($_POST['principal']) ? (float)$_POST['principal'] : 2000000;
$rate = isset($_POST['rate']) ? (float)$_POST['rate'] : 8.5;
$tenure = isset($_POST['tenure']) ? (int)$_POST['tenure'] : 20;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emi = calculateEMI($principal, $rate, $tenure);
    $totalPayment = calculateTotalPayment($emi, $tenure);
    $totalInterest = calculateTotalInterest($totalPayment, $principal);
}
?>

    <title>Free Home Loan EMI Calculator 2026 - Calculate Monthly Payments & Interest</title>
<meta name="description" content="Estimate your home loan EMIs with principal, interest rate, and tenure (2026). Compare SBI, HDFC, LIC rates and get amortization schedule instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-thumb::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(59, 130, 246, 0.3);
        }
        .slider-thumb::-moz-range-thumb {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(59, 130, 246, 0.3);
        }
        .slider-thumb {
            background: linear-gradient(90deg, #3b82f6 0%, #e5e7eb 0%);
            height: 6px;
            border-radius: 3px;
        }
        .chart-container {
            height: 300px;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 400px;
            }
        }
        .faq-item {
            border-bottom: 1px solid #e5e7eb;
            padding: 1.5rem 0;
        }
        .faq-item:last-child {
            border-bottom: none;
        }
        .faq-question {
            cursor: pointer;
            transition: color 0.2s ease;
        }
        .faq-question:hover {
            color: #3b82f6;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-answer.open {
            max-height: 500px;
        }
        .input-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .input-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .result-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Home Loan EMI Calculator</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Calculate your monthly EMI, total payment and interest for home loans</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Calculator Form -->
            <div class="w-full lg:w-1/2 bg-white p-6 rounded-xl shadow-md input-card">
                <form method="POST" id="emiForm">
                    <!-- Loan Amount -->
                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-home text-blue-600 text-xl mr-3"></i>
                            <label for="principal" class="block text-gray-700 font-medium text-lg">Loan Amount</label>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-900 font-bold text-2xl">₹ 
                                <input type="number" id="principalDisplay" class="w-32 border-0 p-0 text-right font-bold focus:ring-0 text-2xl" value="<?php echo number_format($principal, 0); ?>" readonly>
                            </span>
                        </div>
                        <input type="range" id="principal" name="principal" min="500000" max="50000000" step="100000" 
                               value="<?php echo $principal; ?>" class="w-full slider-thumb">
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>₹5L</span>
                            <span>₹50L</span>
                            <span>₹1Cr</span>
                            <span>₹2Cr</span>
                            <span>₹5Cr</span>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-percent text-blue-600 text-xl mr-3"></i>
                            <label for="rate" class="block text-gray-700 font-medium text-lg">Interest Rate</label>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-900 font-bold text-2xl">
                                <input type="number" id="rateDisplay" class="w-20 border-0 p-0 text-right font-bold focus:ring-0 text-2xl" value="<?php echo $rate; ?>" readonly> %
                            </span>
                        </div>
                        <input type="range" id="rate" name="rate" min="5" max="20" step="0.1" 
                               value="<?php echo $rate; ?>" class="w-full slider-thumb">
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>5%</span>
                            <span>8%</span>
                            <span>12%</span>
                            <span>16%</span>
                            <span>20%</span>
                        </div>
                    </div>

                    <!-- Loan Tenure -->
                    <div class="mb-8">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-calendar-alt text-blue-600 text-xl mr-3"></i>
                            <label for="tenure" class="block text-gray-700 font-medium text-lg">Loan Tenure</label>
                        </div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-900 font-bold text-2xl">
                                <input type="number" id="tenureDisplay" class="w-20 border-0 p-0 text-right font-bold focus:ring-0 text-2xl" value="<?php echo $tenure; ?>" readonly> Yrs
                            </span>
                        </div>
                        <input type="range" id="tenure" name="tenure" min="1" max="30" step="1" 
                               value="<?php echo $tenure; ?>" class="w-full slider-thumb">
                        <div class="flex justify-between text-xs text-gray-500 mt-2">
                            <span>1Yr</span>
                            <span>5Yrs</span>
                            <span>10Yrs</span>
                            <span>20Yrs</span>
                            <span>30Yrs</span>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg transition duration-300 text-lg flex items-center justify-center">
                        <i class="fas fa-calculator mr-2"></i>
                        Calculate EMI
                    </button>
                </form>
            </div>

            <!-- Results -->
            <div class="w-full lg:w-1/2">
                <div class="result-card p-6 rounded-xl shadow-md mb-6">
                    <h2 class="text-xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-chart-pie mr-3"></i>
                        EMI Breakdown
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center mb-6">
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg backdrop-blur-sm">
                            <div class="text-white text-sm font-medium mb-2 flex items-center justify-center">
                                <i class="fas fa-calendar-check mr-2"></i>
                                Monthly EMI
                            </div>
                            <div class="text-2xl font-bold text-white">₹<?php echo number_format($emi, 0); ?></div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg backdrop-blur-sm">
                            <div class="text-white text-sm font-medium mb-2 flex items-center justify-center">
                                <i class="fas fa-percent mr-2"></i>
                                Total Interest
                            </div>
                            <div class="text-2xl font-bold text-white">₹<?php echo number_format($totalInterest, 0); ?></div>
                        </div>
                        <div class="bg-white bg-opacity-20 p-4 rounded-lg backdrop-blur-sm">
                            <div class="text-white text-sm font-medium mb-2 flex items-center justify-center">
                                <i class="fas fa-money-bill-wave mr-2"></i>
                                Total Payment
                            </div>
                            <div class="text-2xl font-bold text-white">₹<?php echo number_format($totalPayment, 0); ?></div>
                        </div>
                    </div>

                    <!-- Pie Chart Placeholder -->
                    <div class="chart-container">
                        <canvas id="emiChart"></canvas>
                    </div>
                </div>

                <!-- Amortization Table -->
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-table mr-3 text-blue-600"></i>
                        Amortization Schedule
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr class="bg-gray-100 text-gray-600 text-sm">
                                    <th class="py-3 px-4 text-left">Year</th>
                                    <th class="py-3 px-4 text-right">Principal</th>
                                    <th class="py-3 px-4 text-right">Interest</th>
                                    <th class="py-3 px-4 text-right">Balance</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    $balance = $principal;
                                    $monthlyRate = ($rate / 12) / 100;
                                    $termInMonths = $tenure * 12;
                                    
                                    for ($year = 1; $year <= $tenure; $year++) {
                                        $yearlyPrincipal = 0;
                                        $yearlyInterest = 0;
                                        
                                        for ($month = 1; $month <= 12; $month++) {
                                            $interest = $balance * $monthlyRate;
                                            $principalPaid = $emi - $interest;
                                            
                                            $yearlyPrincipal += $principalPaid;
                                            $yearlyInterest += $interest;
                                            $balance -= $principalPaid;
                                            
                                            if ($balance < 0) $balance = 0;
                                        }
                                        
                                        echo '<tr class="border-t border-gray-200 hover:bg-gray-50 transition-colors">';
                                        echo '<td class="py-3 px-4 font-medium">Year ' . $year . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($yearlyPrincipal, 0) . '</td>';
                                        echo '<td class="py-3 px-4 text-right">₹' . number_format($yearlyInterest, 0) . '</td>';
                                        echo '<td class="py-3 px-4 text-right font-semibold">₹' . number_format($balance, 0) . '</td>';
                                        echo '</tr>';
                                    }
                                } else {
                                    echo '<tr><td colspan="4" class="py-6 text-center text-gray-500">Enter loan details to see amortization schedule</td></tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQs Section -->
        <div class="mt-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center">
                    <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Get answers to common questions about home loan EMIs and calculations</p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-8">
                <!-- FAQ 1 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-home text-blue-600 mr-3"></i>
                            What is a Home Loan EMI?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p>EMI (Equated Monthly Installment) is the fixed amount you pay each month towards your home loan. It consists of both principal repayment and interest payment. The EMI amount remains constant throughout the loan tenure, but the proportion of principal and interest changes over time.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-calculator text-blue-600 mr-3"></i>
                            How is EMI calculated?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p>EMI is calculated using the formula: EMI = [P x R x (1+R)^N] / [(1+R)^N-1], where:<br>
                        • P = Principal loan amount<br>
                        • R = Monthly interest rate (annual rate ÷ 12 ÷ 100)<br>
                        • N = Loan tenure in months</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-percent text-blue-600 mr-3"></i>
                            What factors affect my EMI amount?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p>Three main factors affect your EMI:<br>
                        1. <strong>Loan Amount</strong>: Higher principal = Higher EMI<br>
                        2. <strong>Interest Rate</strong>: Higher rate = Higher EMI<br>
                        3. <strong>Loan Tenure</strong>: Longer tenure = Lower EMI (but more total interest paid)</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-money-bill-wave text-blue-600 mr-3"></i>
                            Should I choose a longer or shorter tenure?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p><strong>Shorter tenure</strong>: Higher EMI but less total interest paid<br>
                        <strong>Longer tenure</strong>: Lower EMI but more total interest paid<br>
                        Choose based on your monthly repayment capacity. Generally, opt for the shortest tenure you can comfortably afford.</p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-chart-line text-blue-600 mr-3"></i>
                            Can I prepay my home loan?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p>Yes, most banks allow prepayment of home loans. Prepaying reduces your principal amount, which can:<br>
                        • Reduce your EMI amount<br>
                        • Reduce your loan tenure<br>
                        • Save on total interest paid<br>
                        Check with your bank for any prepayment charges or conditions.</p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item">
                    <div class="faq-question flex items-center justify-between text-lg font-semibold text-gray-800">
                        <span class="flex items-center">
                            <i class="fas fa-file-invoice-dollar text-blue-600 mr-3"></i>
                            What is an amortization schedule?
                        </span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600">
                        <p>An amortization schedule is a table showing the breakup of each EMI payment into principal and interest components over the loan tenure. It helps you understand:<br>
                        • How much principal you're paying off each month<br>
                        • How much interest you're paying<br>
                        • Your outstanding loan balance after each payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js for visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Update slider display values
        document.getElementById('principal').addEventListener('input', function() {
            document.getElementById('principalDisplay').value = parseInt(this.value).toLocaleString('en-IN');
        });
        document.getElementById('rate').addEventListener('input', function() {
            document.getElementById('rateDisplay').value = this.value;
        });
        document.getElementById('tenure').addEventListener('input', function() {
            document.getElementById('tenureDisplay').value = this.value;
        });

        // Initialize chart if EMI is calculated
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $emi > 0): ?>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('emiChart').getContext('2d');
            const emiChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Principal', 'Interest'],
                    datasets: [{
                        data: [<?php echo $principal; ?>, <?php echo $totalInterest; ?>],
                        backgroundColor: ['#3b82f6', '#93c5fd'],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += '₹' + context.raw.toLocaleString('en-IN');
                                    return label;
                                }
                            }
                        }
                    },
                    cutout: '70%'
                }
            });
        });
        <?php endif; ?>

        // FAQ toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.nextElementSibling;
                    const icon = this.querySelector('.fa-chevron-down');
                    
                    // Toggle answer visibility
                    answer.classList.toggle('open');
                    
                    // Rotate chevron icon
                    icon.classList.toggle('rotate-180');
                    
                    // Close other FAQs
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== question) {
                            const otherAnswer = otherQuestion.nextElementSibling;
                            const otherIcon = otherQuestion.querySelector('.fa-chevron-down');
                            otherAnswer.classList.remove('open');
                            otherIcon.classList.remove('rotate-180');
                        }
                    });
                });
            });
        });

        // Dynamic slider progress
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = document.querySelectorAll('.slider-thumb');
            
            sliders.forEach(slider => {
                // Set initial gradient
                updateSliderProgress(slider);
                
                slider.addEventListener('input', function() {
                    updateSliderProgress(this);
                });
            });
            
            function updateSliderProgress(slider) {
                const value = (slider.value - slider.min) / (slider.max - slider.min) * 100;
                slider.style.background = `linear-gradient(90deg, #3b82f6 ${value}%, #e5e7eb ${value}%)`;
            }
        });
    </script>

    <style>
        .rotate-180 {
            transform: rotate(180deg);
        }
        .transition-transform {
            transition: transform 0.3s ease;
        }
    </style>
</body>

<?php include 'footer.php';?>

</html>
