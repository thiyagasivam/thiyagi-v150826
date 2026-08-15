<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define Gujarat DISCOMs
$discos = [
    'UGVCL' => 'Uttar Gujarat Vij Company Limited',
    'DGVCL' => 'Dakshin Gujarat Vij Company Limited',
    'MGVCL' => 'Madhya Gujarat Vij Company Limited',
    'PGVCL' => 'Paschim Gujarat Vij Company Limited',
    'TORRENT' => 'Torrent Power Limited'
];

// Tariff slabs (2026 rates)
$slabs = [
    ['min' => 0, 'max' => 100, 'rate' => 0.00],
    ['min' => 101, 'max' => 200, 'rate' => 2.35],
    ['min' => 201, 'max' => 400, 'rate' => 4.70],
    ['min' => 401, 'max' => 500, 'rate' => 6.30],
    ['min' => 501, 'max' => 600, 'rate' => 8.40],
    ['min' => 601, 'max' => 800, 'rate' => 9.45],
    ['min' => 801, 'max' => 1000, 'rate' => 10.50],
    ['min' => 1001, 'max' => PHP_FLOAT_MAX, 'rate' => 11.55]
];

// Initialize variables
$discom = isset($_POST['discom']) ? $_POST['discom'] : 'UGVCL';
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$total = 0;
$breakdown = [];
$validInput = true;

// Calculate bill if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($units < 0 || $units === '') {
        $validInput = false;
    } else {
        foreach ($slabs as $slab) {
            if ($units > $slab['min']) {
                $slabUnits = min($units, $slab['max']) - $slab['min'];
                $slabCost = $slabUnits * $slab['rate'];
                $total += $slabCost;
                
                $breakdown[] = [
                    'range' => ($slab['max'] === PHP_FLOAT_MAX) ? 
                               $slab['min'] . '+' : 
                               $slab['min'] . ' - ' . $slab['max'],
                    'units' => $slabUnits,
                    'rate' => $slab['rate'],
                    'cost' => $slabCost
                ];
            }
        }
    }
}
?>
    <title>Gujarat Electricity Bill Calculator 2026 – Torrent, UGVCL, DGVCL, MGVCL, PGVCL</title>
    <meta name="description" content="Calculate your 2026 electricity bill for Torrent Power, UGVCL, DGVCL, and other Gujarat DISCOMs with our accurate online calculator.">
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            600: '#2563eb',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome for icons -->
    
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
        
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .state-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }
        
        .state-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .state-card h3 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        .state-card a {
            display: inline-block;
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 14px;
            transition: background 0.3s;
        }
        
        .state-card a:hover {
            background: #2980b9;
        }
        
        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
        
        .dark .state-card {
            background: #374151;
        }
        
        .dark .state-card h3 {
            color: #e5e7eb;
            border-bottom-color: #4b5563;
        }
    </style>
    
    <script>
        // Initialize dark mode
        document.addEventListener('DOMContentLoaded', function() {
            // Check for saved dark mode preference
            if (localStorage.getItem('darkMode') === 'true') {
                document.documentElement.classList.add('dark');
            }
            
            // Initialize live calculation
            initCalculator();
        });

        // Toggle dark mode
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Calculator functionality
        function initCalculator() {
            const unitInput = document.getElementById('units');
            const discomSelect = document.getElementById('discom');
            const liveResult = document.getElementById('live-result');
            const resetBtn = document.getElementById('reset-btn');
            const form = document.querySelector('form');
            
            // Live calculation function
            function calculateLiveEstimate() {
                const units = parseInt(unitInput.value) || 0;
                const discom = discomSelect.value;
                
                if (units < 0) {
                    liveResult.textContent = 'Invalid input';
                    return;
                }
                
                let total = 0;
                const slabs = [
                    {min: 0, max: 100, rate: 0.00},
                    {min: 101, max: 200, rate: 2.35},
                    {min: 201, max: 400, rate: 4.70},
                    {min: 401, max: 500, rate: 6.30},
                    {min: 501, max: 600, rate: 8.40},
                    {min: 601, max: 800, rate: 9.45},
                    {min: 801, max: 1000, rate: 10.50},
                    {min: 1001, max: Infinity, rate: 11.55}
                ];
                
                slabs.forEach(slab => {
                    if (units > slab.min) {
                        const slabUnits = Math.min(units, slab.max) - slab.min;
                        total += slabUnits * slab.rate;
                    }
                });
                
                liveResult.textContent = '₹' + total.toFixed(2);
                
                // Show/hide live preview based on input
                const livePreview = document.getElementById('live-preview');
                if (units > 0) {
                    livePreview.classList.remove('hidden');
                } else {
                    livePreview.classList.add('hidden');
                }
            }
            
            // Event listeners
            if (unitInput && liveResult) {
                unitInput.addEventListener('input', calculateLiveEstimate);
                discomSelect.addEventListener('change', calculateLiveEstimate);
            }
            
            if (resetBtn) {
                resetBtn.addEventListener('click', function() {
                    form.reset();
                    unitInput.value = '';
                    liveResult.textContent = '₹0.00';
                    document.getElementById('live-preview').classList.add('hidden');
                });
            }
            
            // Initial calculation
            calculateLiveEstimate();
        }

        // Print functionality
        function printBill() {
            window.print();
        }

        // Share functionality
        function shareBill() {
            const units = document.getElementById('units').value || 0;
            const discomSelect = document.getElementById('discom');
            const discomText = discomSelect.options[discomSelect.selectedIndex].text;
            const total = document.getElementById('live-result').textContent;
            
            const text = `My ${discomText} Electricity Bill Calculation: ${units} units = ${total} (2026 rates)`;
            const url = window.location.href;
            
            if (navigator.share) {
                navigator.share({
                    title: 'Gujarat Electricity Bill Calculation',
                    text: text,
                    url: url
                }).catch(err => {
                    console.log('Error sharing:', err);
                    fallbackShare(text, url);
                });
            } else {
                fallbackShare(text, url);
            }
        }
        
        function fallbackShare(text, url) {
            const textToCopy = `${text}\nCalculate yours: ${url}`;
            
            // Try clipboard API first
            if (navigator.clipboard) {
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert('Calculation copied to clipboard! You can paste it anywhere.');
                }).catch(err => {
                    console.log('Could not copy text: ', err);
                    prompt('Copy this link to share:', url);
                });
            } else {
                // Fallback for browsers without clipboard API
                prompt('Copy this link to share:', url);
            }
        }
    </script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-primary-600 dark:text-primary-400 mb-2">Gujarat Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600 dark:text-gray-300 text-lg">Calculate your exact electricity bill in seconds – no confusion, no surprises</p>
            <p class="text-gray-500 dark:text-gray-400 mt-2">For UGVCL, DGVCL, MGVCL, PGVCL & Torrent Power</p>
            
            <div class="flex justify-center mt-4 no-print">
                <button onclick="toggleDarkMode()" class="px-3 py-1 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 text-sm">
                    <i class="fas fa-moon dark:fa-sun mr-1"></i>
                    <span class="dark:hidden">Dark Mode</span>
                    <span class="hidden dark:inline">Light Mode</span>
                </button>
            </div>
        </header>
        
        <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <form method="post" class="mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="discom" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">
                                Select DISCOM:
                            </label>
                            <select id="discom" name="discom" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white">
                                <?php foreach ($discos as $code => $name): ?>
                                    <option value="<?= $code ?>" <?= $discom === $code ? 'selected' : '' ?>>
                                        <?= $code ?> (<?= $name ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div>
                            <label for="units" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">
                                Units Consumed:
                            </label>
                            <div class="relative">
                                <input type="number" id="units" name="units" 
                                       value="<?= $units > 0 ? htmlspecialchars($units) : '' ?>" 
                                       min="0" step="1"
                                       class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                       placeholder="e.g., 350" required>
                                <span class="absolute right-3 top-2 text-gray-500 dark:text-gray-400">units</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex items-center justify-between no-print">
                        <div>
                            <button type="submit" 
                                    class="bg-primary-600 hover:bg-primary-700 text-white font-medium py-2 px-6 rounded-md transition duration-300 mr-2">
                                Calculate Bill
                            </button>
                            <button type="button" id="reset-btn"
                                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-gray-200 font-medium py-2 px-4 rounded-md transition duration-300">
                                Reset
                            </button>
                        </div>
                        
                        <div id="live-preview" class="text-gray-700 dark:text-gray-300 hidden md:block <?= $units > 0 ? '' : 'hidden' ?>">
                            <span class="font-medium">Estimated Bill:</span>
                            <span id="live-result" class="ml-2 font-bold">₹<?= number_format($total, 2) ?></span>
                        </div>
                    </div>
                </form>
                
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput && $units > 0): ?>
                    <div class="border-t dark:border-gray-700 pt-6">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Bill Calculation Result</h2>
                        
                        <div class="bg-blue-50 dark:bg-blue-900/30 p-4 rounded-lg mb-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600 dark:text-gray-300">For <span class="font-medium"><?= $units ?></span> units under</p>
                                    <p class="text-gray-600 dark:text-gray-300"><span class="font-medium"><?= $discom ?></span> (<?= $discos[$discom] ?>)</p>
                                </div>
                                <div class="text-3xl font-bold text-primary-600 dark:text-primary-400">₹<?= number_format($total, 2) ?></div>
                            </div>
                        </div>
                        
                        <h3 class="font-medium text-gray-700 dark:text-gray-300 mb-2">Breakdown by Slabs:</h3>
                        <div class="overflow-x-auto mb-6">
                            <table class="min-w-full bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-600">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Slab Range</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Units</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate (₹/unit)</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Cost (₹)</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php foreach ($breakdown as $item): ?>
                                        <tr class="bg-white dark:bg-gray-800">
                                            <td class="px-4 py-2 whitespace-nowrap text-gray-700 dark:text-gray-300"><?= $item['range'] ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right text-gray-700 dark:text-gray-300"><?= $item['units'] ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right text-gray-700 dark:text-gray-300"><?= number_format($item['rate'], 2) ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right font-medium text-gray-900 dark:text-gray-100"><?= number_format($item['cost'], 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr class="bg-gray-50 dark:bg-gray-600 font-semibold">
                                        <td class="px-4 py-2 whitespace-nowrap text-gray-900 dark:text-gray-100">Total</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right text-gray-900 dark:text-gray-100"><?= $units ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right text-gray-900 dark:text-gray-100">-</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right text-gray-900 dark:text-gray-100">₹<?= number_format($total, 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-6 flex flex-wrap gap-3 justify-center no-print">
                            <button onclick="printBill()" class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-800 dark:text-gray-200 py-2 px-4 rounded-md flex items-center">
                                <i class="fas fa-print mr-2"></i> Print Bill
                            </button>
                            <button onclick="shareBill()" class="bg-blue-100 hover:bg-blue-200 dark:bg-blue-900/50 dark:hover:bg-blue-900 text-blue-800 dark:text-blue-200 py-2 px-4 rounded-md flex items-center">
                                <i class="fas fa-share-alt mr-2"></i> Share
                            </button>
                        </div>
                    </div>
                <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
                    <div class="border-t dark:border-gray-700 pt-6">
                        <div class="bg-red-100 dark:bg-red-900/30 border border-red-400 dark:border-red-700 text-red-700 dark:text-red-200 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Invalid Input!</strong>
                            <span class="block sm:inline">Please enter a positive number of units.</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="max-w-2xl mx-auto mt-8 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Current Gujarat Electricity Tariff Slabs (2026)</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-600">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Slab Range (units)</th>
                                <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate (₹/unit)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                            <?php foreach ($slabs as $slab): ?>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="px-4 py-2 whitespace-nowrap text-gray-700 dark:text-gray-300">
                                        <?= ($slab['max'] === PHP_FLOAT_MAX) ? 
                                            $slab['min'] . ' and above' : 
                                            $slab['min'] . ' - ' . $slab['max'] ?>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-right text-gray-700 dark:text-gray-300">₹<?= number_format($slab['rate'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">* Rates are subject to change by respective DISCOMs.</p>
            </div>
        </div>
        
        <div class="max-w-4xl mx-auto mt-12 bg-white dark:bg-gray-800 rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Frequently Asked Questions</h2>
            
            <div class="space-y-4">
                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>How accurate is this calculator?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">This calculator uses the official 2026 tariff rates from Gujarat DISCOMs and calculates bills using the same slab method used by electricity boards.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Why is my actual bill different from this estimate?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Your actual bill includes additional charges like fixed charges, meter rent, electricity duty, and applicable taxes which vary by DISCOM and connection type.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Which DISCOMs are covered?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">This calculator covers all major Gujarat electricity distribution companies: UGVCL, DGVCL, MGVCL, PGVCL, and Torrent Power Limited.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What do the slab rates mean?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Electricity rates increase as you consume more units. The first 100 units are free, then rates progressively increase for each slab of consumption.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>How do I read my electricity meter?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Note your current meter reading and subtract your previous reading. The difference is the units consumed during the billing period.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Are the first 100 units really free?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes, under the current Gujarat tariff structure, domestic consumers pay ₹0 per unit for the first 100 units consumed each month.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What if I consume more than 1000 units?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Units above 1000 are charged at ₹11.55 per unit. The calculator handles any consumption level and shows the complete breakdown.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Can I use this for commercial connections?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">This calculator is designed for residential connections. Commercial and industrial tariffs differ significantly from domestic rates.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>How often do tariff rates change?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Electricity tariffs are typically revised annually by the Gujarat Electricity Regulatory Commission based on various factors.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Why do I see different rates for the same consumption?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Your bill is calculated progressively. Different portions of your consumption fall into different slabs, each charged at its own rate.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Can I save money by monitoring my usage?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes. Staying within lower slabs significantly reduces your bill. Use this calculator to see how reducing usage by a few units affects your total cost.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What are fixed charges?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Fixed charges are monthly fees based on your sanctioned load or connection type, charged regardless of consumption. These vary by DISCOM.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Do rates differ between urban and rural areas?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Residential tariffs are generally uniform within each DISCOM's service area, though some subsidies may apply in specific cases.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Can I calculate bills for multiple months?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Enter the total units consumed over any period. The calculator works for monthly, bi-monthly, or any billing cycle your DISCOM uses.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What is electricity duty?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Electricity duty is a state tax applied to your energy charges, typically calculated as a percentage of your bill amount.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>How do I reduce my electricity bill?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Use energy-efficient appliances, unplug devices when not in use, use LED bulbs, and monitor consumption to stay within lower tariff slabs.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Is my data safe when I use this calculator?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes. All calculations happen in your browser. We don't store or transmit your consumption data to any server.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What is the difference between units and kWh?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">They're the same. One unit equals one kilowatt-hour (kWh) of electricity consumed.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Why does my bill seem high compared to my neighbor?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Bills vary based on actual consumption, connection load, billing cycle duration, pending dues, and specific DISCOM charges.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Can I challenge my bill if it seems wrong?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes. Use this calculator to verify the energy charge portion. If there's a discrepancy, contact your DISCOM with your calculation evidence.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What happens if I exceed 200 units by just a few units?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Only the excess units are charged at the higher rate. Your first 100 units remain free, and units 101-200 are charged at ₹2.35 per unit.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>How can I estimate next month's bill?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Check your current meter reading mid-cycle, estimate total monthly usage based on daily average, and enter that number in the calculator.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Does this work for prepaid meters?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes. Enter your total units to see how much you'll pay. Prepaid meters use the same tariff structure as postpaid connections.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>Can I share my calculation with someone?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">Yes. After calculating, use the Share button to copy your result or share via social media or messaging apps.</p>
                </details>

                <details class="group">
                    <summary class="font-medium text-gray-800 dark:text-gray-200 cursor-pointer list-none flex justify-between items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <span>What should I do if rates change?</span>
                        <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                    </summary>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 px-4">We update rates as soon as new tariffs are officially notified by the Gujarat Electricity Regulatory Commission.</p>
                </details>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mt-8">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">Indian State Electricity Bill Calculators</h2>
            
            <div class="grid-container">
                 <div class="state-card">
            <h3>Bihar</h3>
            <a href="https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator" target="_blank">Bihar Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Goa</h3>
            <a href="https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator" target="_blank">Goa Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Delhi</h3>
            <a href="https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator" target="_blank">Delhi Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Himachal Pradesh</h3>
            <a href="https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator" target="_blank">HPSEBL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Kerala</h3>
            <a href="https://www.thiyagi.com/electricity-board/kseb-bill-calculator" target="_blank">KSEB Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Uttar Pradesh</h3>
            <a href="https://www.thiyagi.com/electricity-board/uppcl-bill-calculator" target="_blank">UPPCL Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Karnataka</h3>
            <a href="https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator" target="_blank">Karnataka Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Haryana</h3>
            <a href="https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator" target="_blank">Haryana Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Nagaland</h3>
            <a href="https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator" target="_blank">Nagaland Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Jharkhand</h3>
            <a href="https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator" target="_blank">JBVNL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Uttarakhand</h3>
            <a href="https://www.thiyagi.com/electricity-board/upcl-electricity-bill-calculator-uttarakhand" target="_blank">UPCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Assam</h3>
            <a href="https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator" target="_blank">APDCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Andaman</h3>
            <a href="https://www.thiyagi.com/electricity-board/andaman-electricity-bill-calculator" target="_blank">Andaman Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Ladakh</h3>
            <a href="https://www.thiyagi.com/electricity-board/ladakh-electricity-bill-calculator" target="_blank">Ladakh Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>West Bengal</h3>
            <a href="https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator" target="_blank">WBSEDCL Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Tripura</h3>
            <a href="https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator" target="_blank">TSECL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Telangana</h3>
            <a href="https://www.thiyagi.com/electricity-board/tsspdcl-electricity-bill-calculator" target="_blank">TSSPDCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Tamil Nadu</h3>
            <a href="https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator" target="_blank">TNEB Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Manipur</h3>
            <a href="https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator" target="_blank">Manipur Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Chhattisgarh</h3>
            <a href="https://www.thiyagi.com/electricity-board/cspdcl-electricity-bill-calculator" target="_blank">CSPDCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Madhya Pradesh</h3>
            <a href="https://www.thiyagi.com/electricity-board/mp-electricity-bill-calculator" target="_blank">MP Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Punjab</h3>
            <a href="https://www.thiyagi.com/electricity-board/pspcl-bill-calculator" target="_blank">PSPCL Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Sikkim</h3>
            <a href="https://www.thiyagi.com/electricity-board/sikkim-electricity-bill-calculator" target="_blank">Sikkim Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Odisha</h3>
            <a href="https://www.thiyagi.com/electricity-board/odisha-electricity-bill-calculator" target="_blank">Odisha Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Rajasthan</h3>
            <a href="https://www.thiyagi.com/electricity-board/rajasthan-electricity-bill-calculator" target="_blank">Rajasthan Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Gujarat</h3>
            <a href="https://www.thiyagi.com/electricity-board/gujarat-electricity-bill-calculator" target="_blank">Gujarat Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Meghalaya</h3>
            <a href="https://www.thiyagi.com/electricity-board/meghalaya-electricity-bill-calculator" target="_blank">Meghalaya Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Andhra Pradesh</h3>
            <a href="https://www.thiyagi.com/electricity-board/apspdcl-electricity-bill-calculator" target="_blank">APSPDCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Jammu & Kashmir</h3>
            <a href="https://www.thiyagi.com/electricity-board/jpdcl-electricity-bill-calculator-kashmir" target="_blank">JPDCL Electricity Bill Calculator</a>
        </div>
        
        <div class="state-card">
            <h3>Mizoram</h3>
            <a href="https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator" target="_blank">Mizoram Electricity Bill Calculator</a>
        </div>
            </div>
        </div>
    </div>
<?php include '../footer.php';?>
</html>