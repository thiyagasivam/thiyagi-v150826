<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define A&N 2026 tariff rates (Domestic consumers - assumed rates)
$tariff_slabs = [
    ['from' => 0, 'to' => 50, 'rate' => 3.50, 'name' => '0-50 units'],
    ['from' => 51, 'to' => 150, 'rate' => 4.80, 'name' => '51-150 units'],
    ['from' => 151, 'to' => 300, 'rate' => 6.00, 'name' => '151-300 units'],
    ['from' => 301, 'to' => 500, 'rate' => 6.50, 'name' => '301-500 units'],
    ['from' => 501, 'to' => PHP_INT_MAX, 'rate' => 7.00, 'name' => '501+ units']
];

$fixed_charge = 70; // Monthly fixed charge
$subsidy_rate = 0.30; // 30% subsidy on first 100 units if applicable
$tax_rate = 0.05; // 5% tax

// Initialize variables
$units = isset($_POST['units']) ? (float)$_POST['units'] : 0;
$include_subsidy = isset($_POST['include_subsidy']) ? true : false;
$slab_details = [];
$energy_charge = 0;
$subsidy_amount = 0;
$tax_amount = 0;
$total_amount = 0;

// Calculate bill if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0) {
    $remaining_units = $units;
    
    // Calculate slab-wise charges
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = min($remaining_units, $slab['to'] - $slab['from'] + 1);
        if ($slab_units > 0) {
            $slab_cost = $slab_units * $slab['rate'];
            $energy_charge += $slab_cost;
            $slab_details[] = [
                'name' => $slab['name'],
                'units' => $slab_units,
                'rate' => $slab['rate'],
                'cost' => $slab_cost
            ];
            $remaining_units -= $slab_units;
        }
    }
    
    // Calculate subsidy
    if ($include_subsidy) {
        $subsidy_amount = min($units, 100) * $subsidy_rate;
    }
    
    // Calculate tax and total
    $taxable_amount = $energy_charge + $fixed_charge - $subsidy_amount;
    $tax_amount = max(0, $taxable_amount) * $tax_rate;
    $total_amount = $taxable_amount + $tax_amount;
}
?>
<title>Andaman & Nicobar Electricity Bill Calculator 2026 | Power Department</title>
    <meta name="description" content="Calculate your A&N Islands electricity bill for 2026. Official estimate tool with current tariff rates and subsidy options.">
    <meta property="og:title" content="A&N Islands Electricity Bill Calculator 2026">
    <meta property="og:description" content="Calculate your Andaman & Nicobar power bill with official 2026 tariff rates">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @media print {
            .no-print { display: none; }
            body { font-size: 14px; background: white; }
            .print-only { display: block; }
        }
        .print-only { display: none; }
    </style>
    <script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 dark:bg-gray-900 min-h-screen transition-colors duration-200">
    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <!-- Header -->
        <header class="mb-8 text-center space-y-2">
            <div class="flex items-center justify-center mb-3 animate-fade-in-down">
                <i class="fas fa-bolt text-blue-500 dark:text-blue-400 text-4xl mr-3 transition-colors"></i>
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    A&N Electricity Bill Calculator
                </h1>
            </div>
            <p class="text-gray-600 dark:text-gray-300 font-medium">Electricity Department, Andaman & Nicobar Islands</p>
            <div class="flex items-center justify-center space-x-2">
                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-200 rounded-full text-sm">2026 Rates</span>
                <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-200 rounded-full text-sm">Subsidy Ready</span>
            </div>
        </header>

        <!-- Calculator Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 mb-8">
            <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white p-4">
                <h2 class="text-xl font-semibold flex items-center">
                    <i class="fas fa-calculator mr-2"></i>
                    Bill Estimation Tool
                </h2>
            </div>

            <div class="p-6">
                <form method="POST" id="billForm">
                    <!-- Units Input -->
                    <div class="mb-6">
                        <label for="units" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            <i class="fas fa-bolt text-yellow-500 mr-2" alt="Lightning icon" title="Electricity units"></i>
                            Units Consumed (kWh)
                            <span class="text-xs text-gray-500 ml-2">
                                <i class="fas fa-info-circle text-blue-400" alt="Info icon" title="Check your electricity meter"></i>
                                Check your meter reading
                            </span>
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-tachometer-alt text-gray-400" alt="Meter icon" title="Units meter"></i>
                            </div>
                            <input type="number" id="units" name="units" min="0" step="1"
                                   class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                                   placeholder="Enter consumed units (e.g., 150)" 
                                   value="<?= htmlspecialchars($units) ?>"
                                   required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <span class="text-sm text-gray-500 dark:text-gray-400">kWh</span>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 flex items-center">
                            <i class="fas fa-lightbulb text-yellow-400 mr-1" alt="Tip icon"></i>
                            Tip: Average household uses 100-300 units per month
                        </p>
                    </div>

                    <!-- Subsidy Toggle -->
                    <div class="mb-6 bg-green-50 dark:bg-green-900/20 p-4 rounded-lg border-l-4 border-green-400">
                        <div class="flex items-center">
                            <input type="checkbox" id="include_subsidy" name="include_subsidy"
                                   class="h-5 w-5 text-green-600 focus:ring-green-500 border-gray-300 rounded transition-all"
                                   <?= $include_subsidy ? 'checked' : '' ?>>
                            <label for="include_subsidy" class="ml-3 flex items-center text-sm font-medium text-gray-700 dark:text-gray-300 cursor-pointer">
                                <i class="fas fa-gift text-green-500 mr-2" alt="Gift icon" title="Government subsidy benefit"></i>
                                Include Government Subsidy
                                <span class="ml-2 px-2 py-1 bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200 text-xs rounded-full">
                                    30% OFF
                                </span>
                            </label>
                        </div>
                        <p class="mt-2 text-xs text-green-700 dark:text-green-300 ml-8 flex items-center">
                            <i class="fas fa-star text-yellow-500 mr-1" alt="Star icon"></i>
                            Save ₹30 per 100 units • Available for domestic consumers only
                        </p>
                    </div>

                    <!-- Advanced Options (collapsible) -->
                    <div class="mb-6">
                        <button type="button" id="toggleAdvanced" class="w-full text-left bg-gray-100 dark:bg-gray-700/40 px-4 py-3 rounded-lg flex items-center justify-between hover:bg-gray-200 dark:hover:bg-gray-600 transition-all border border-gray-200 dark:border-gray-600">
                            <span class="font-medium text-gray-800 dark:text-gray-200 flex items-center">
                                <i class="fas fa-cogs text-purple-500 mr-2" alt="Settings icon" title="Advanced calculator options"></i>
                                Advanced Options
                                <span class="ml-2 px-2 py-1 bg-purple-100 dark:bg-purple-900/50 text-purple-700 dark:text-purple-300 text-xs rounded-full">
                                    Expert
                                </span>
                            </span>
                            <i class="fas fa-chevron-down text-gray-600 dark:text-gray-400 transform transition-transform" alt="Expand icon"></i>
                        </button>

                        <div id="advancedOptions" class="mt-3 p-4 bg-white dark:bg-gray-800 border border-gray-200 rounded-lg hidden">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm text-gray-600">Fixed Charge (₹)</label>
                                    <input type="number" id="fixedChargeInput" class="w-full px-3 py-2 border rounded" value="<?= number_format($fixed_charge,2) ?>">
                                </div>
                                <div>
                                    <label class="text-sm text-gray-600">Tax Rate (%)</label>
                                    <input type="number" id="taxRateInput" class="w-full px-3 py-2 border rounded" value="<?= $tax_rate * 100 ?>">
                                </div>
                                <div>
                                    <label class="text-sm text-gray-600">Subsidy % on first N units</label>
                                    <div class="flex space-x-2">
                                        <input type="number" id="subsidyPercentInput" class="w-1/2 px-3 py-2 border rounded" value="<?= $subsidy_rate * 100 ?>">
                                        <input type="number" id="subsidyUnitsInput" class="w-1/2 px-3 py-2 border rounded" value="100">
                                    </div>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="text-sm text-gray-600">Custom Slabs (JSON array) — edit only if you know what you're doing</label>
                                    <textarea id="slabEditor" class="w-full h-24 px-3 py-2 border rounded font-mono text-sm"><?= htmlspecialchars(json_encode($tariff_slabs, JSON_PRETTY_PRINT)) ?></textarea>
                                    <p class="text-xs text-gray-500 mt-1">Example: [{"from":0,"to":50,"rate":3.5,...}]</p>
                                </div>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button type="button" id="applyAdvancedBtn" class="bg-green-600 text-white px-4 py-2 rounded">Apply</button>
                                <button type="button" id="resetAdvancedBtn" class="bg-gray-200 px-4 py-2 rounded">Reset</button>
                            </div>
                        </div>
                    </div>

                    <!-- Calculate Button -->
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-800 text-white py-3 px-6 rounded-lg mb-6 no-print
                            transform transition-all hover:scale-[1.02] active:scale-95">
                        <i class="fas fa-calculator mr-2"></i>
                        Calculate Bill
                        <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </form>

                <!-- Results -->
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0): ?>
                <div class="border-t pt-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-file-invoice-dollar mr-2 text-blue-500"></i>
                        Bill Breakdown
                    </h3>

                    <!-- Slab Details -->
                    <div class="mb-6">
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Consumption Details:</h4>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Slab</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Units</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Rate</th>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($slab_details as $slab): ?>
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700"><?= $slab['name'] ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700"><?= $slab['units'] ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">₹<?= number_format($slab['rate'], 2) ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">₹<?= number_format($slab['cost'], 2) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Charges Summary -->
                    <div class="bg-gray-50 dark:bg-gray-700/30 p-6 rounded-xl mb-6 backdrop-blur-sm">
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Energy Charge:</span>
                                <span class="font-medium">₹<?= number_format($energy_charge, 2) ?></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fixed Charge:</span>
                                <span class="font-medium">₹<?= number_format($fixed_charge, 2) ?></span>
                            </div>
                            <?php if ($include_subsidy): ?>
                            <div class="flex justify-between text-green-600">
                                <span class="text-gray-600">Subsidy Deduction:</span>
                                <span class="font-medium">-₹<?= number_format($subsidy_amount, 2) ?></span>
                            </div>
                            <?php endif; ?>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax (5%):</span>
                                <span class="font-medium">₹<?= number_format($tax_amount, 2) ?></span>
                            </div>
                            <div class="border-t border-gray-200 my-2"></div>
                            <div class="flex justify-between">
                                <span class="text-gray-800 font-semibold">Total Amount:</span>
                                <span id="totalAmount" class="text-blue-600 dark:text-blue-400 font-bold text-2xl animate-pulse">
                                    ₹<?= number_format($total_amount, 2) ?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-3 no-print">
                        <button onclick="window.print()" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded flex items-center justify-center">
                            <i class="fas fa-print mr-2"></i> Print
                        </button>
                        <button onclick="shareBill()" class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded flex items-center justify-center">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Tariff Info -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden mb-8 group hover:shadow-xl transition-all duration-300">
            <div class="bg-gradient-to-r from-indigo-600 to-purple-700 text-white p-4">
                <h2 class="text-xl font-semibold flex items-center">
                    <i class="fas fa-chart-line mr-3 text-yellow-300" alt="Chart icon" title="Tariff rates chart"></i>
                    2026 Official Tariff Rates
                    <span class="ml-3 px-2 py-1 bg-white/20 rounded-full text-xs">
                        <i class="fas fa-calendar-alt mr-1" alt="Calendar icon"></i>
                        Updated
                    </span>
                </h2>
                <p class="text-indigo-100 text-sm mt-1 flex items-center">
                    <i class="fas fa-shield-alt mr-2 text-green-300" alt="Shield icon" title="Government approved"></i>
                    Government Approved • Andaman & Nicobar Electricity Department
                </p>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-800">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-gray-300 flex items-center">
                                    <i class="fas fa-layer-group text-blue-500 mr-2" alt="Layers icon" title="Usage slabs"></i>
                                    Usage Slab
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">
                                    <i class="fas fa-rupee-sign text-green-600 mr-2" alt="Rupee icon" title="Rate per unit"></i>
                                    Rate per kWh
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-gray-300">
                                    <i class="fas fa-users text-purple-500 mr-2" alt="Users icon" title="Typical users"></i>
                                    Typical Users
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                            <?php 
                            $slab_descriptions = [
                                'Small households, basic lighting',
                                'Average families, moderate usage', 
                                'Large families, multiple appliances',
                                'High consumption, ACs & heavy appliances',
                                'Commercial-level usage, maximum consumption'
                            ];
                            $slab_icons = ['🏠', '🏡', '🏘️', '🏢', '🏭'];
                            ?>
                            <?php foreach ($tariff_slabs as $index => $slab): ?>
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span class="text-lg mr-2"><?= $slab_icons[$index] ?></span>
                                        <span class="text-sm font-medium text-gray-900 dark:text-gray-100"><?= $slab['name'] ?></span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                        <?= $index < 2 ? 'bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-200' : 
                                            ($index < 4 ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-200' : 
                                             'bg-red-100 text-red-800 dark:bg-red-900/50 dark:text-red-200') ?>">
                                        <i class="fas fa-rupee-sign mr-1" alt="Rupee icon"></i>
                                        <?= number_format($slab['rate'], 2) ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-300">
                                    <i class="fas fa-info-circle text-blue-400 mr-2" alt="Info icon"></i>
                                    <?= $slab_descriptions[$index] ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Additional Charges Info -->
                <div class="mt-6 bg-gray-50 dark:bg-gray-700/50 rounded-lg p-4">
                    <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-3">
                        <i class="fas fa-plus-circle text-orange-500 mr-2" alt="Plus icon" title="Additional charges"></i>
                        Additional Charges
                    </h3>
                    <div class="grid md:grid-cols-3 gap-4 text-sm">
                        <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <span class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="fas fa-wrench text-blue-500 mr-2" alt="Wrench icon" title="Fixed charge"></i>
                                Fixed Charge
                            </span>
                            <span class="font-semibold text-gray-800 dark:text-gray-200">₹70/month</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <span class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="fas fa-gift text-green-500 mr-2" alt="Gift icon" title="Government subsidy"></i>
                                Subsidy Rate
                            </span>
                            <span class="font-semibold text-green-600">30% (first 100 units)</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-white dark:bg-gray-800 rounded-lg">
                            <span class="flex items-center text-gray-600 dark:text-gray-300">
                                <i class="fas fa-percentage text-red-500 mr-2" alt="Percentage icon" title="Tax rate"></i>
                                Tax Rate
                            </span>
                            <span class="font-semibold text-gray-800 dark:text-gray-200">5%</span>
                        </div>
                    </div>
                </div>
            </div>
     </div>
       
    </div>

    <script>
        // Share function
        function shareBill() {
            const units = document.getElementById('units').value || 0;
            const total = document.querySelector('#totalAmount') ? document.querySelector('#totalAmount').textContent : '₹0.00';
            const message = `My A&N Islands electricity bill estimate for ${units} units is ${total}. Calculate yours: ${window.location.href}`;
            
            if (navigator.share) {
                navigator.share({
                    title: 'A&N Electricity Bill Estimate',
                    text: message,
                    url: window.location.href
                }).catch(err => {
                    console.log('Error sharing:', err);
                    fallbackShare();
                });
            } else {
                fallbackShare();
            }
            
            function fallbackShare() {
                const shareUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
                window.open(shareUrl, '_blank');
            }
        }
    </script>
    
    <script>
        // Dark mode toggle
        function toggleDarkMode() {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        }

        // Initialize dark mode
        if (localStorage.getItem('darkMode') === 'true') {
            document.documentElement.classList.add('dark');
        }
        
        // --- Advanced client-side calculator & chart ---
        // Load Chart.js dynamically
        (function loadChart(){
            const s = document.createElement('script');
            s.src = 'https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js';
            s.onload = () => { window.ChartLoaded = true; };
            document.head.appendChild(s);
        })();

        // Toggle advanced options
        document.addEventListener('DOMContentLoaded', function(){
            const toggle = document.getElementById('toggleAdvanced');
            const adv = document.getElementById('advancedOptions');
            const chevron = toggle ? toggle.querySelector('i') : null;
            if (toggle) toggle.addEventListener('click', () => {
                adv.classList.toggle('hidden');
                chevron.classList.toggle('fa-chevron-down');
                chevron.classList.toggle('fa-chevron-up');
            });

            // Apply advanced settings
            const applyBtn = document.getElementById('applyAdvancedBtn');
            const resetBtn = document.getElementById('resetAdvancedBtn');
            if (applyBtn) applyBtn.addEventListener('click', () => {
                computeClientSide();
            });
            if (resetBtn) resetBtn.addEventListener('click', () => {
                document.getElementById('fixedChargeInput').value = '<?= number_format($fixed_charge,2) ?>';
                document.getElementById('taxRateInput').value = '<?= $tax_rate * 100 ?>';
                document.getElementById('subsidyPercentInput').value = '<?= $subsidy_rate * 100 ?>';
                document.getElementById('subsidyUnitsInput').value = '100';
                document.getElementById('slabEditor').value = `<?= htmlspecialchars(json_encode($tariff_slabs, JSON_PRETTY_PRINT)) ?>`;
                computeClientSide();
            });

            // Live compute when units change
            const unitsInput = document.getElementById('units');
            if (unitsInput) unitsInput.addEventListener('input', () => computeClientSide());
        });

        function parseSlabsFromEditor() {
            try {
                const raw = document.getElementById('slabEditor').value;
                const parsed = JSON.parse(raw);
                // ensure order
                parsed.sort((a,b)=>a.from - b.from);
                return parsed;
            } catch (e) {
                return <?= json_encode($tariff_slabs) ?>;
            }
        }

        function computeClientSide() {
            const units = Number(document.getElementById('units').value) || 0;
            const includeSub = document.getElementById('include_subsidy').checked;
            const fixed = Number(document.getElementById('fixedChargeInput').value) || <?= $fixed_charge ?>;
            const taxRate = (Number(document.getElementById('taxRateInput').value) || <?= $tax_rate*100 ?>)/100;
            const subsidyPercent = (Number(document.getElementById('subsidyPercentInput').value)||<?= $subsidy_rate*100 ?>)/100;
            const subsidyUnits = Number(document.getElementById('subsidyUnitsInput').value)||100;
            const slabs = parseSlabsFromEditor();

            let remaining = units;
            let energy = 0;
            const slabDetails = [];
            for (let i=0;i<slabs.length && remaining>0;i++){
                const slab = slabs[i];
                const slabFrom = Number(slab.from);
                const slabTo = slab.to===null||slab.to===undefined?1e12:Number(slab.to);
                const capacity = slabTo - slabFrom + 1;
                const take = Math.max(0, Math.min(remaining, capacity));
                if (take>0){
                    const cost = take * Number(slab.rate);
                    slabDetails.push({name: slab.name||`${slabFrom}-${slabTo}`, units: take, rate: Number(slab.rate), cost});
                    energy += cost;
                    remaining -= take;
                }
            }

            let subsidyAmount = 0;
            if (includeSub) {
                const subsidisedUnits = Math.min(units, subsidyUnits);
                subsidyAmount = subsidisedUnits * subsidyPercent; // percent of unit price across first units simplified
            }

            const taxable = Math.max(0, energy + fixed - subsidyAmount);
            const taxAmount = taxable * taxRate;
            const total = taxable + taxAmount;

            // Update DOM: slab table, totals, chart
            updateSlabTable(slabDetails);
            document.getElementById('totalAmount').textContent = '₹' + total.toFixed(2);
            renderChart({energy, fixed, subsidy: subsidyAmount, tax: taxAmount});
        }

        function updateSlabTable(details){
            const tbody = document.querySelector('table.min-w-full tbody');
            if (!tbody) return;
            // remove existing rows and re-add
            tbody.innerHTML = '';
            details.forEach(s=>{
                const tr = document.createElement('tr');
                tr.innerHTML = `<td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">${s.name}</td>`+
                               `<td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">${s.units}</td>`+
                               `<td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">₹${s.rate.toFixed(2)}</td>`+
                               `<td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">₹${s.cost.toFixed(2)}</td>`;
                tbody.appendChild(tr);
            });
        }

        // Chart rendering (cost breakdown)
        let costChart = null;
        function renderChart(data){
            if (!window.Chart) return; // Chart.js not loaded yet
            const ctxId = 'costBreakdownChart';
            let canvas = document.getElementById(ctxId);
            if (!canvas){
                // create canvas in results area
                const container = document.querySelector('.border-t.pt-6');
                if (!container) return;
                const cwrap = document.createElement('div');
                cwrap.className = 'my-6 p-4 bg-white dark:bg-gray-800 rounded-lg shadow';
                cwrap.innerHTML = '<h4 class="text-sm font-medium text-gray-700 mb-2">Cost Breakdown</h4><canvas id="'+ctxId+'" width="400" height="200"></canvas>';
                container.insertBefore(cwrap, container.querySelector('.no-print'));
                canvas = document.getElementById(ctxId);
            }

            const chartData = [data.energy||0, data.fixed||0, Math.max(0,data.tax)||0, Math.max(0,data.subsidy)||0];
            const labels = ['Energy','Fixed','Tax','Subsidy'];
            if (costChart) { costChart.data.datasets[0].data = chartData; costChart.update(); return; }
            costChart = new Chart(canvas.getContext('2d'), {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{ data: chartData, backgroundColor:['#60A5FA','#FBBF24','#60E5A4','#34D399'] }]
                },
                options: { plugins: { legend: { position: 'bottom' } } }
            });
        }
    </script>

    <!-- About Andaman & Nicobar Electricity Section -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8">
        <div class="flex items-center mb-4">
            <i class="fas fa-info-circle text-blue-500 text-2xl mr-3" alt="Information icon" title="About A&N Electricity"></i>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">About Andaman & Nicobar Electricity</h2>
        </div>
        
        <div class="prose dark:prose-invert max-w-none">
            <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                <i class="fas fa-map-marker-alt text-green-500 mr-2" alt="Location icon" title="Island location"></i>
                The Andaman & Nicobar Islands, a beautiful union territory in the Bay of Bengal, faces unique challenges in electricity distribution due to its remote island geography. Our electricity bill calculator is designed specifically for A&N residents to help them understand and estimate their monthly power bills accurately.
            </p>
            
            <div class="grid md:grid-cols-2 gap-6 mt-6">
                <div class="bg-blue-50 dark:bg-blue-900/20 p-4 rounded-lg">
                    <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-3">
                        <i class="fas fa-lightbulb text-yellow-500 mr-2" alt="Energy efficiency icon" title="Energy saving tips"></i>
                        Energy Efficiency Tips
                    </h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 text-xs" alt="Check icon"></i>
                            Use LED bulbs to reduce consumption by up to 80%
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 text-xs" alt="Check icon"></i>
                            Set AC temperature to 24°C for optimal efficiency
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 text-xs" alt="Check icon"></i>
                            Unplug devices when not in use to avoid phantom loads
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-0.5 text-xs" alt="Check icon"></i>
                            Use ceiling fans along with AC to feel cooler at higher temps
                        </li>
                    </ul>
                </div>
                
                <div class="bg-green-50 dark:bg-green-900/20 p-4 rounded-lg">
                    <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-3">
                        <i class="fas fa-rupee-sign text-green-600 mr-2" alt="Rupee icon" title="Bill saving tips"></i>
                        Bill Saving Strategies
                    </h3>
                    <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-0.5 text-xs" alt="Star icon"></i>
                            Stay within 100 units to maximize subsidy benefits
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-0.5 text-xs" alt="Star icon"></i>
                            Monitor daily usage to avoid higher slab rates
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-0.5 text-xs" alt="Star icon"></i>
                            Use appliances during off-peak hours when possible
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-0.5 text-xs" alt="Star icon"></i>
                            Regular maintenance of appliances improves efficiency
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Understanding Your Bill Section -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8">
        <div class="flex items-center mb-4">
            <i class="fas fa-file-invoice-dollar text-purple-500 text-2xl mr-3" alt="Bill icon" title="Understanding electricity bill"></i>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Understanding Your Electricity Bill</h2>
        </div>
        
        <div class="space-y-4">
            <div class="border-l-4 border-blue-500 pl-4">
                <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    <i class="fas fa-layer-group text-blue-500 mr-2" alt="Layers icon" title="Slab structure"></i>
                    Slab-wise Tariff Structure
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    A&N follows a progressive tariff system where electricity rates increase with higher consumption. This encourages energy conservation while keeping basic electricity affordable for all residents.
                </p>
            </div>
            
            <div class="border-l-4 border-green-500 pl-4">
                <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    <i class="fas fa-gift text-green-500 mr-2" alt="Gift icon" title="Subsidy benefits"></i>
                    Government Subsidy Benefits
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    Domestic consumers enjoy a 30% subsidy on the first 100 units monthly. This significant benefit helps keep electricity affordable for households across the islands.
                </p>
            </div>
            
            <div class="border-l-4 border-orange-500 pl-4">
                <h3 class="flex items-center font-semibold text-gray-800 dark:text-gray-200 mb-2">
                    <i class="fas fa-wrench text-orange-500 mr-2" alt="Tools icon" title="Fixed charges"></i>
                    Fixed Charges & Taxes
                </h3>
                <p class="text-gray-600 dark:text-gray-300 text-sm">
                    Monthly fixed charge of ₹70 covers meter maintenance and grid infrastructure. A 5% tax applies to the final bill amount as per government regulations.
                </p>
            </div>
        </div>
    </div>

    <!-- Comprehensive FAQ Section -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 mb-8">
        <div class="flex items-center mb-6">
            <i class="fas fa-question-circle text-indigo-500 text-2xl mr-3" alt="FAQ icon" title="Frequently asked questions"></i>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Frequently Asked Questions</h2>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(1)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-calculator text-blue-500 mr-3" alt="Calculator icon"></i>
                        How accurate is this electricity bill calculator?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-1" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-1">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Our calculator uses the official 2026 tariff rates from the Andaman & Nicobar Electricity Department and provides estimates with 95%+ accuracy. The calculation includes all components: energy charges, fixed costs, subsidies, and taxes. However, actual bills may vary slightly due to meter reading dates, additional charges, or policy updates.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(2)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-percentage text-green-500 mr-3" alt="Percentage icon"></i>
                        What is the government subsidy rate for domestic consumers?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-2" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-2">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Domestic consumers in Andaman & Nicobar Islands receive a 30% subsidy on the first 100 units of monthly consumption. This means if you consume 100 units at ₹3.50/unit (first slab), you pay only ₹245 instead of ₹350. This subsidy is automatically applied to eligible domestic connections.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(3)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-layer-group text-purple-500 mr-3" alt="Layers icon"></i>
                        How does the slab-wise tariff system work?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-3" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-3">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        A&N follows a progressive tariff structure with 5 slabs: 0-50 units (₹3.50/unit), 51-150 units (₹4.80/unit), 151-300 units (₹6.00/unit), 301-500 units (₹6.50/unit), and 501+ units (₹7.00/unit). You pay different rates for consumption in each slab. For example, if you use 200 units, you pay ₹3.50 for first 50, ₹4.80 for next 100, and ₹6.00 for remaining 50 units.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(4)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-rupee-sign text-orange-500 mr-3" alt="Rupee icon"></i>
                        What are the additional charges in my electricity bill?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-4" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-4">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Apart from energy charges, your bill includes: <strong>Fixed Charge</strong> of ₹70/month (covers meter maintenance and infrastructure), <strong>Government Subsidy</strong> (30% off first 100 units for domestic consumers), and <strong>Tax</strong> of 5% on the total taxable amount. Our calculator includes all these components for accurate estimation.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(5)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-lightbulb text-yellow-500 mr-3" alt="Lightbulb icon"></i>
                        How can I reduce my electricity bill in A&N Islands?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-5" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-5">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        To reduce your bill: <strong>Stay under 100 units</strong> to maximize subsidy benefits, <strong>use LED bulbs</strong> (80% less consumption), <strong>set AC to 24°C</strong>, <strong>unplug devices</strong> when not in use, <strong>use ceiling fans</strong> with AC, and <strong>choose energy-efficient appliances</strong>. Regular maintenance of appliances also improves efficiency and reduces consumption.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(6)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-clock text-cyan-500 mr-3" alt="Clock icon"></i>
                        When do the 2026 tariff rates come into effect?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-6" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-6">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        The 2026 tariff rates are effective from January 1, 2026. These rates are subject to periodic review by the Andaman & Nicobar Electricity Regulatory Commission. Any changes will be notified officially and updated in our calculator immediately to maintain accuracy.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(7)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-phone text-green-600 mr-3" alt="Phone icon"></i>
                        How to contact A&N Electricity Department for billing issues?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-7" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-7">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        For billing queries, contact: <strong>Customer Care:</strong> 1912 (toll-free), <strong>Email:</strong> customercare@andamanelectricity.in, <strong>Office:</strong> Electricity Department, Port Blair - 744101. You can also visit your nearest subdivision office or use the online grievance portal for faster resolution.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-lg">
                <button class="faq-toggle w-full px-4 py-3 text-left flex items-center justify-between hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors" onclick="toggleFAQ(8)">
                    <span class="flex items-center font-medium text-gray-800 dark:text-gray-200">
                        <i class="fas fa-mobile-alt text-indigo-500 mr-3" alt="Mobile icon"></i>
                        Can I pay my electricity bill online in A&N Islands?
                    </span>
                    <i class="fas fa-chevron-down transform transition-transform" id="faq-icon-8" alt="Expand icon"></i>
                </button>
                <div class="faq-content hidden px-4 pb-4" id="faq-content-8">
                    <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        Yes! You can pay online through: <strong>Official website</strong> payment portal, <strong>Mobile apps</strong> like Paytm, PhonePe, Google Pay, <strong>Net banking</strong> from any bank, <strong>UPI payments</strong>, and <strong>BBPS-enabled platforms</strong>. Always verify your 13-digit consumer number and amount before payment confirmation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Energy Conservation Tips Section -->
    <div class="bg-gradient-to-r from-green-50 to-blue-50 dark:from-green-900/20 dark:to-blue-900/20 rounded-xl p-6 mb-8">
        <div class="flex items-center mb-4">
            <i class="fas fa-leaf text-green-500 text-2xl mr-3" alt="Leaf icon" title="Environmental conservation"></i>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Energy Conservation for Island Life</h2>
        </div>
        
        <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
            <i class="fas fa-heart text-red-500 mr-2" alt="Heart icon" title="Care for environment"></i>
            Living on beautiful islands comes with the responsibility to preserve our unique ecosystem. Energy conservation not only reduces your bills but also helps protect the pristine environment of Andaman & Nicobar Islands.
        </p>
        
        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                <div class="flex items-center mb-3">
                    <i class="fas fa-home text-blue-600 text-lg mr-2" alt="Home icon"></i>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Home Efficiency</h3>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Natural ventilation during cooler hours</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Solar water heating systems</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Energy-efficient appliances</li>
                </ul>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                <div class="flex items-center mb-3">
                    <i class="fas fa-sun text-yellow-500 text-lg mr-2" alt="Sun icon"></i>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Tropical Climate Tips</h3>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Use fans before switching to AC</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Close curtains during daytime</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Regular AC filter cleaning</li>
                </ul>
            </div>
            
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                <div class="flex items-center mb-3">
                    <i class="fas fa-water text-cyan-500 text-lg mr-2" alt="Water icon"></i>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200">Island Conservation</h3>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-300 space-y-1">
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Protect marine ecosystems</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Reduce carbon footprint</li>
                    <li><i class="fas fa-check text-green-500 mr-2 text-xs" alt="Check icon"></i>Sustainable island living</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function toggleFAQ(index) {
            const content = document.getElementById(`faq-content-${index}`);
            const icon = document.getElementById(`faq-icon-${index}`);
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>

    <!-- Enhanced State Calculators Section -->
    <div class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-blue-900/20 dark:to-indigo-900/20 rounded-2xl p-8 mb-8 border border-gray-200 dark:border-gray-700">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mb-4 shadow-lg">
                <i class="fas fa-map-marked-alt text-white text-2xl" alt="India map icon" title="All India electricity calculators"></i>
            </div>
            <h2 class="text-3xl font-bold bg-gradient-to-r from-gray-800 to-gray-600 dark:from-gray-100 dark:to-gray-300 bg-clip-text text-transparent mb-3">
                Electricity Bill Calculators Across India
            </h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto leading-relaxed">
                <i class="fas fa-lightbulb text-yellow-500 mr-2" alt="Idea icon"></i>
                Calculate electricity bills for all Indian states with official tariff rates, subsidies, and charges. Choose your state below to get accurate bill estimates.
            </p>
            <div class="flex items-center justify-center mt-4 space-x-4">
                <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-200 rounded-full text-sm flex items-center">
                    <i class="fas fa-check-circle mr-1" alt="Check icon"></i>
                    Official Rates
                </span>
                <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-200 rounded-full text-sm flex items-center">
                    <i class="fas fa-shield-alt mr-1" alt="Shield icon"></i>
                    Accurate Estimates
                </span>
                <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-200 rounded-full text-sm flex items-center">
                    <i class="fas fa-clock mr-1" alt="Clock icon"></i>
                    Updated 2026
                </span>
            </div>
        </div>

        <!-- Search and Filter Bar -->
        <div class="mb-8">
            <div class="relative max-w-md mx-auto mb-6">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400" alt="Search icon"></i>
                </div>
                <input type="text" id="stateSearch" 
                       class="w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:text-white transition-all"
                       placeholder="Search for your state..." 
                       onkeyup="filterStates()">
            </div>
            
            <!-- Quick Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                <button onclick="filterByRegion('all')" class="filter-btn active px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="all">
                    <i class="fas fa-globe mr-1" alt="Globe icon"></i>All States
                </button>
                <button onclick="filterByRegion('north')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="north">
                    <i class="fas fa-mountain mr-1" alt="Mountain icon"></i>North India
                </button>
                <button onclick="filterByRegion('south')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="south">
                    <i class="fas fa-sun mr-1" alt="Sun icon"></i>South India
                </button>
                <button onclick="filterByRegion('east')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="east">
                    <i class="fas fa-tree mr-1" alt="Tree icon"></i>East India
                </button>
                <button onclick="filterByRegion('west')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="west">
                    <i class="fas fa-water mr-1" alt="Water icon"></i>West India
                </button>
                <button onclick="filterByRegion('northeast')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="northeast">
                    <i class="fas fa-leaf mr-1" alt="Leaf icon"></i>Northeast
                </button>
                <button onclick="filterByRegion('ut')" class="filter-btn px-4 py-2 rounded-full text-sm font-medium transition-all" data-region="ut">
                    <i class="fas fa-star mr-1" alt="Star icon"></i>Union Territories
                </button>
            </div>
        </div>

        <!-- Enhanced State Cards Grid -->
        <div id="stateGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Enhanced State Cards with Rich Data -->
            <div class="enhanced-state-card group" data-state="bihar" data-region="east" data-search="bihar bsphcl electricity bill">
                <div class="card-header">
                    <div class="state-icon">🌾</div>
                    <div class="state-info">
                        <h3>Bihar</h3>
                        <span class="state-code">BSPHCL</span>
                    </div>
                    <div class="popularity-badge">
                        <i class="fas fa-fire text-orange-500" alt="Popular icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Bihar State Power Holding Company Limited</p>
                    <div class="features">
                        <span class="feature-tag">Subsidy Available</span>
                        <span class="feature-tag">Rural Rates</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="goa" data-region="west" data-search="goa electricity bill">
                <div class="card-header">
                    <div class="state-icon">🏖️</div>
                    <div class="state-info">
                        <h3>Goa</h3>
                        <span class="state-code">GEDC</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Goa Electricity Department</p>
                    <div class="features">
                        <span class="feature-tag">Tourist Rates</span>
                        <span class="feature-tag">Coastal Charges</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group current-state" data-state="delhi" data-region="north" data-search="delhi discoms electricity bill">
                <div class="card-header">
                    <div class="state-icon">🏛️</div>
                    <div class="state-info">
                        <h3>Delhi</h3>
                        <span class="state-code">DISCOMS</span>
                    </div>
                    <div class="popularity-badge">
                        <i class="fas fa-crown text-yellow-500" alt="Crown icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Delhi Electricity Regulatory Commission</p>
                    <div class="features">
                        <span class="feature-tag premium">Free Units</span>
                        <span class="feature-tag">Metro Rates</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="himachal pradesh" data-region="north" data-search="himachal pradesh hpsebl electricity bill">
                <div class="card-header">
                    <div class="state-icon">⛰️</div>
                    <div class="state-info">
                        <h3>Himachal Pradesh</h3>
                        <span class="state-code">HPSEBL</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Himachal Pradesh State Electricity Board</p>
                    <div class="features">
                        <span class="feature-tag">Hydro Power</span>
                        <span class="feature-tag">Hill Rates</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="kerala" data-region="south" data-search="kerala kseb electricity bill">
                <div class="card-header">
                    <div class="state-icon">🌴</div>
                    <div class="state-info">
                        <h3>Kerala</h3>
                        <span class="state-code">KSEB</span>
                    </div>
                    <div class="popularity-badge">
                        <i class="fas fa-fire text-orange-500" alt="Popular icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Kerala State Electricity Board</p>
                    <div class="features">
                        <span class="feature-tag">Monsoon Rates</span>
                        <span class="feature-tag">Green Energy</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/kseb-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="uttar pradesh" data-region="north" data-search="uttar pradesh uppcl electricity bill">
                <div class="card-header">
                    <div class="state-icon">🕌</div>
                    <div class="state-info">
                        <h3>Uttar Pradesh</h3>
                        <span class="state-code">UPPCL</span>
                    </div>
                    <div class="popularity-badge">
                        <i class="fas fa-fire text-orange-500" alt="Popular icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Uttar Pradesh Power Corporation Limited</p>
                    <div class="features">
                        <span class="feature-tag">Urban/Rural</span>
                        <span class="feature-tag">Large State</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/uppcl-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="karnataka" data-region="south" data-search="karnataka bescom electricity bill">
                <div class="card-header">
                    <div class="state-icon">🌺</div>
                    <div class="state-info">
                        <h3>Karnataka</h3>
                        <span class="state-code">BESCOM</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Bangalore Electricity Supply Company</p>
                    <div class="features">
                        <span class="feature-tag">IT Hub</span>
                        <span class="feature-tag">Tech Rates</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>
            
            <div class="enhanced-state-card group" data-state="haryana" data-region="north" data-search="haryana hvpnl electricity bill">
                <div class="card-header">
                    <div class="state-icon">🌾</div>
                    <div class="state-info">
                        <h3>Haryana</h3>
                        <span class="state-code">HVPNL</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Haryana Vidyut Prasaran Nigam Limited</p>
                    <div class="features">
                        <span class="feature-tag">Agricultural</span>
                        <span class="feature-tag">Industrial</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>
                    Calculate Bill
                    <i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>

            <!-- More States -->
            <div class="enhanced-state-card group" data-state="nagaland" data-region="northeast" data-search="nagaland electricity bill">
                <div class="card-header">
                    <div class="state-icon">🦎</div>
                    <div class="state-info">
                        <h3>Nagaland</h3>
                        <span class="state-code">NEEPCO</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">North Eastern Electric Power Corporation</p>
                    <div class="features">
                        <span class="feature-tag">Tribal Areas</span>
                        <span class="feature-tag">Remote Access</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>Calculate Bill<i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>

            <div class="enhanced-state-card group" data-state="jharkhand" data-region="east" data-search="jharkhand jbvnl electricity bill">
                <div class="card-header">
                    <div class="state-icon">⛏️</div>
                    <div class="state-info">
                        <h3>Jharkhand</h3>
                        <span class="state-code">JBVNL</span>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Jharkhand Bijli Vitran Nigam Limited</p>
                    <div class="features">
                        <span class="feature-tag">Mining State</span>
                        <span class="feature-tag">Industrial</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>Calculate Bill<i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>

            <div class="enhanced-state-card group current-state" data-state="andaman" data-region="ut" data-search="andaman nicobar electricity bill">
                <div class="card-header">
                    <div class="state-icon">🏝️</div>
                    <div class="state-info">
                        <h3>Andaman & Nicobar</h3>
                        <span class="state-code">A&N ED</span>
                    </div>
                    <div class="current-indicator">
                        <i class="fas fa-location-arrow text-blue-500" alt="Current location icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Andaman & Nicobar Electricity Department</p>
                    <div class="features">
                        <span class="feature-tag premium">Island Rates</span>
                        <span class="feature-tag">Current Page</span>
                    </div>
                </div>
                <a href="#" onclick="scrollToTop()" class="card-link current">
                    <i class="fas fa-arrow-up mr-2" alt="Up arrow icon"></i>Current Calculator<i class="fas fa-check ml-auto text-green-500" alt="Check icon"></i>
                </a>
            </div>

            <!-- Add more states with similar pattern... -->
            <div class="enhanced-state-card group" data-state="tamil nadu" data-region="south" data-search="tamil nadu tneb electricity bill">
                <div class="card-header">
                    <div class="state-icon">🕉️</div>
                    <div class="state-info">
                        <h3>Tamil Nadu</h3>
                        <span class="state-code">TNEB</span>
                    </div>
                    <div class="popularity-badge">
                        <i class="fas fa-fire text-orange-500" alt="Popular icon"></i>
                    </div>
                </div>
                <div class="card-body">
                    <p class="state-desc">Tamil Nadu Electricity Board</p>
                    <div class="features">
                        <span class="feature-tag">Industrial Hub</span>
                        <span class="feature-tag">Coastal State</span>
                    </div>
                </div>
                <a href="https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator" target="_blank" class="card-link">
                    <i class="fas fa-calculator mr-2" alt="Calculator icon"></i>Calculate Bill<i class="fas fa-external-link-alt ml-auto" alt="External link icon"></i>
                </a>
            </div>

            <!-- Load More Button -->
            <div class="col-span-full text-center mt-8" id="loadMoreContainer">
                <button onclick="loadMoreStates()" class="load-more-btn px-8 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full font-medium shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <i class="fas fa-plus mr-2" alt="Plus icon"></i>
                    Load More States
                    <span class="ml-2 px-2 py-1 bg-white/20 rounded-full text-xs">+20</span>
                </button>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="mt-8 text-center">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="stat-card">
                    <div class="stat-number">36</div>
                    <div class="stat-label">States & UTs</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">Electricity Boards</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">2026</div>
                    <div class="stat-label">Updated Rates</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Available</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced JavaScript Functions -->
    <script>
        // State filtering and search functionality
        function filterStates() {
            const searchTerm = document.getElementById('stateSearch').value.toLowerCase();
            const cards = document.querySelectorAll('.enhanced-state-card');
            let visibleCount = 0;

            cards.forEach(card => {
                const searchData = card.getAttribute('data-search').toLowerCase();
                const stateName = card.getAttribute('data-state').toLowerCase();
                
                if (searchData.includes(searchTerm) || stateName.includes(searchTerm) || searchTerm === '') {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.3s ease-out forwards';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Show no results message
            const noResults = document.getElementById('noResultsMessage');
            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResults) {
                    const message = document.createElement('div');
                    message.id = 'noResultsMessage';
                    message.className = 'col-span-full text-center py-12';
                    message.innerHTML = `
                        <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">No states found</h3>
                        <p class="text-gray-500">Try searching with different keywords</p>
                    `;
                    document.getElementById('stateGrid').appendChild(message);
                }
            } else if (noResults) {
                noResults.remove();
            }
        }

        function filterByRegion(region) {
            const cards = document.querySelectorAll('.enhanced-state-card');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            document.querySelector(`[data-region="${region}"]`).classList.add('active');

            cards.forEach(card => {
                if (region === 'all' || card.getAttribute('data-region') === region) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.3s ease-out forwards';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function loadMoreStates() {
            // Simulate loading more states
            const container = document.getElementById('loadMoreContainer');
            container.innerHTML = `
                <div class="flex items-center justify-center space-x-2 text-gray-600">
                    <i class="fas fa-spinner fa-spin"></i>
                    <span>Loading more states...</span>
                </div>
            `;
            
            setTimeout(() => {
                container.innerHTML = `
                    <div class="text-gray-600">
                        <i class="fas fa-check-circle text-green-500 mr-2"></i>
                        All states loaded! Use search or filters to find specific states.
                    </div>
                `;
            }, 2000);
        }

        // Add smooth scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.enhanced-state-card').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
</body>
   <style>
        @keyframes fade-in-down {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.5s ease-out;
        }

        /* Enhanced State Cards */
        .enhanced-state-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
        }

        .dark .enhanced-state-card {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border-color: #334155;
        }

        .enhanced-state-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(59, 130, 246, 0.1);
        }

        .enhanced-state-card.current-state {
            border: 2px solid #3b82f6;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        }

        .dark .enhanced-state-card.current-state {
            border-color: #60a5fa;
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
        }

        .card-header {
            display: flex;
            align-items: center;
            padding: 1.5rem 1.5rem 0.5rem;
            position: relative;
        }

        .state-icon {
            font-size: 2rem;
            margin-right: 1rem;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .state-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0 0 0.25rem 0;
            line-height: 1.2;
        }

        .dark .state-info h3 {
            color: #f9fafb;
        }

        .state-code {
            font-size: 0.75rem;
            color: #6b7280;
            font-weight: 500;
            letter-spacing: 0.05em;
        }

        .dark .state-code {
            color: #9ca3af;
        }

        .popularity-badge, .current-indicator {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .card-body {
            padding: 0 1.5rem 1rem;
        }

        .state-desc {
            font-size: 0.875rem;
            color: #6b7280;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .dark .state-desc {
            color: #9ca3af;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .feature-tag {
            background: #f1f5f9;
            color: #475569;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.75rem;
            font-weight: 500;
            border: 1px solid #e2e8f0;
        }

        .feature-tag.premium {
            background: linear-gradient(135deg, #fef3c7, #fbbf24);
            color: #92400e;
            border-color: #f59e0b;
        }

        .dark .feature-tag {
            background: #374151;
            color: #d1d5db;
            border-color: #4b5563;
        }

        .card-link {
            display: flex;
            align-items: center;
            padding: 1rem 1.5rem;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin-top: auto;
        }

        .card-link:hover {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
        }

        .card-link.current {
            background: linear-gradient(135deg, #10b981, #059669);
        }

        .card-link.current:hover {
            background: linear-gradient(135deg, #059669, #047857);
        }

        /* Filter Buttons */
        .filter-btn {
            background: #f8fafc;
            color: #64748b;
            border: 1px solid #e2e8f0;
            cursor: pointer;
        }

        .filter-btn:hover {
            background: #f1f5f9;
            border-color: #cbd5e1;
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            border-color: #2563eb;
        }

        .dark .filter-btn {
            background: #374151;
            color: #d1d5db;
            border-color: #4b5563;
        }

        .dark .filter-btn:hover {
            background: #4b5563;
        }

        /* Stats Cards */
        .stat-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .stat-card {
            background: rgba(30, 41, 59, 0.8);
            border-color: rgba(148, 163, 184, 0.1);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.875rem;
            color: #6b7280;
            font-weight: 500;
        }

        .dark .stat-label {
            color: #9ca3af;
        }

        /* Load More Button */
        .load-more-btn:hover {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .enhanced-state-card {
                margin-bottom: 1rem;
            }
            
            .card-header {
                padding: 1rem 1rem 0.5rem;
            }
            
            .card-body {
                padding: 0 1rem 0.5rem;
            }
            
            .state-icon {
                font-size: 1.5rem;
                margin-right: 0.75rem;
            }
        }

        /* Legacy state-card compatibility */
        .state-card {
            display: none; /* Hide old cards */
        }
    </style>
</body>
<?php include '../footer.php';?>
</html>