<?php
$pageTitle = 'SIP Calculator 2026 - Free Mutual Fund Returns Estimator';
$pageDescription = 'Calculate potential returns on your SIP investments. Free online tool to project wealth growth with monthly SIP contributions, interest rates and time period.';
include 'header.php';
?>


<?php
// Handle form submission
$investment = isset($_POST['investment']) ? floatval($_POST['investment']) : 5000;
$return_rate = isset($_POST['return_rate']) ? floatval($_POST['return_rate']) : 12;
$time_period = isset($_POST['time_period']) ? intval($_POST['time_period']) : 10;
$frequency = isset($_POST['frequency']) ? $_POST['frequency'] : 'monthly';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Calculate SIP returns
    $n = $frequency === 'monthly' ? 12 : ($frequency === 'quarterly' ? 4 : 1);
    $r = $return_rate / 100 / $n;
    $t = $time_period * $n;
    $p = $investment;
    
    if ($frequency === 'monthly') {
        $fv = $p * (((pow(1 + $r, $t) - 1) / $r) * (1 + $r));
    } else {
        $fv = $p * ((pow(1 + $r, $t) - 1) / $r);
    }
    
    $invested_amount = $p * $t;
    $estimated_returns = $fv - $invested_amount;
    $total_value = $fv;
    
    $result = [
        'invested_amount' => number_format($invested_amount, 2),
        'estimated_returns' => number_format($estimated_returns, 2),
        'total_value' => number_format($total_value, 2)
    ];
}
?>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-thumb::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            background: #4f46e5;
            cursor: pointer;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .slider-thumb::-moz-range-thumb {
            width: 24px;
            height: 24px;
            background: #4f46e5;
            cursor: pointer;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        .tab-active {
            background-color: #4f46e5;
            color: white;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-2">SIP Calculator</h1>
                <p class="text-gray-600 mb-6">Calculate returns on your Systematic Investment Plan (SIP)</p>
                
                <form method="POST" class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <label for="investment" class="block text-sm font-medium text-gray-700 mb-1">
                                Monthly Investment (₹)
                                <span class="text-lg font-semibold text-gray-900 ml-2">₹<?= number_format($investment) ?></span>
                            </label>
                            <input type="range" id="investment" name="investment" min="500" max="100000" step="500" 
                                   value="<?= $investment ?>" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider-thumb">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>₹500</span>
                                <span>₹1L</span>
                            </div>
                        </div>
                        
                        <div>
                            <label for="return_rate" class="block text-sm font-medium text-gray-700 mb-1">
                                Expected Return Rate (p.a.)
                                <span class="text-lg font-semibold text-gray-900 ml-2"><?= $return_rate ?>%</span>
                            </label>
                            <input type="range" id="return_rate" name="return_rate" min="1" max="30" step="0.1" 
                                   value="<?= $return_rate ?>" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider-thumb">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>1%</span>
                                <span>30%</span>
                            </div>
                        </div>
                        
                        <div>
                            <label for="time_period" class="block text-sm font-medium text-gray-700 mb-1">
                                Time Period (years)
                                <span class="text-lg font-semibold text-gray-900 ml-2"><?= $time_period ?> years</span>
                            </label>
                            <input type="range" id="time_period" name="time_period" min="1" max="40" step="1" 
                                   value="<?= $time_period ?>" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer slider-thumb">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>1 year</span>
                                <span>40 years</span>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Investment Frequency</label>
                            <div class="flex space-x-2">
                                <button type="button" onclick="setFrequency('monthly')" 
                                        class="px-4 py-2 rounded-lg font-medium <?= $frequency === 'monthly' ? 'tab-active' : 'bg-gray-100 text-gray-700' ?>">
                                    Monthly
                                </button>
                                <button type="button" onclick="setFrequency('quarterly')" 
                                        class="px-4 py-2 rounded-lg font-medium <?= $frequency === 'quarterly' ? 'tab-active' : 'bg-gray-100 text-gray-700' ?>">
                                    Quarterly
                                </button>
                                <button type="button" onclick="setFrequency('yearly')" 
                                        class="px-4 py-2 rounded-lg font-medium <?= $frequency === 'yearly' ? 'tab-active' : 'bg-gray-100 text-gray-700' ?>">
                                    Yearly
                                </button>
                                <input type="hidden" id="frequency" name="frequency" value="<?= $frequency ?>">
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
                        Calculate SIP Returns
                    </button>
                </form>
                
                <?php if ($result): ?>
                <div class="mt-8 bg-indigo-50 rounded-xl p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">SIP Projection</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Invested Amount</p>
                            <p class="text-2xl font-bold text-gray-800">₹<?= $result['invested_amount'] ?></p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Estimated Returns</p>
                            <p class="text-2xl font-bold text-green-600">₹<?= $result['estimated_returns'] ?></p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <p class="text-sm text-gray-500">Total Value</p>
                            <p class="text-2xl font-bold text-indigo-600">₹<?= $result['total_value'] ?></p>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="font-medium text-gray-700 mb-2">Yearly Breakdown</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Year</th>
                                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Invested</th>
                                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Returns</th>
                                        <th class="py-2 px-4 text-left text-sm font-medium text-gray-700">Total Value</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php
                                    $running_total = 0;
                                    $running_invested = 0;
                                    $yearly_investment = $frequency === 'monthly' ? $investment * 12 : 
                                                         ($frequency === 'quarterly' ? $investment * 4 : $investment);
                                    
                                    for ($year = 1; $year <= $time_period; $year++) {
                                        $running_invested += $yearly_investment;
                                        $yearly_return = $running_total * ($return_rate/100);
                                        $running_total = ($running_total + $yearly_investment) * (1 + $return_rate/100);
                                        
                                        echo '<tr class="hover:bg-gray-50">';
                                        echo '<td class="py-2 px-4 text-sm text-gray-700">' . $year . '</td>';
                                        echo '<td class="py-2 px-4 text-sm text-gray-700">₹' . number_format($running_invested, 2) . '</td>';
                                        echo '<td class="py-2 px-4 text-sm text-green-600">₹' . number_format($running_total - $running_invested, 2) . '</td>';
                                        echo '<td class="py-2 px-4 text-sm font-medium text-indigo-600">₹' . number_format($running_total, 2) . '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="mt-8 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">About SIP Calculator</h2>
                <div class="prose prose-indigo max-w-none">
                    <p>A SIP (Systematic Investment Plan) calculator helps you estimate the potential returns from your mutual fund investments made through SIP.</p>
                    <p>Key benefits of using our SIP calculator:</p>
                    <ul>
                        <li>Plan your financial goals with accurate projections</li>
                        <li>Understand the power of compounding</li>
                        <li>Compare different investment scenarios</li>
                        <li>Make informed investment decisions</li>
                    </ul>
                    <p>The calculator uses the compound interest formula to project your returns based on your monthly investment amount, expected annual return rate, and investment duration.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Update displayed values when sliders change
        document.getElementById('investment').addEventListener('input', function() {
            this.nextElementSibling.querySelector('span:nth-child(2)').textContent = '₹' + parseInt(this.value).toLocaleString('en-IN');
        });
        
        document.getElementById('return_rate').addEventListener('input', function() {
            this.nextElementSibling.querySelector('span:nth-child(2)').textContent = this.value + '%';
        });
        
        document.getElementById('time_period').addEventListener('input', function() {
            const years = this.value;
            this.nextElementSibling.querySelector('span:nth-child(2)').textContent = years + (years == 1 ? ' year' : ' years');
        });
        
        function setFrequency(freq) {
            document.getElementById('frequency').value = freq;
            // Update UI
            document.querySelectorAll('[onclick^="setFrequency"]').forEach(btn => {
                if (btn.getAttribute('onclick').includes(freq)) {
                    btn.classList.remove('bg-gray-100', 'text-gray-700');
                    btn.classList.add('bg-indigo-600', 'text-white');
                } else {
                    btn.classList.add('bg-gray-100', 'text-gray-700');
                    btn.classList.remove('bg-indigo-600', 'text-white');
                }
            });
        }
    </script>
</body>

<?php include 'footer.php';?>


</html>
