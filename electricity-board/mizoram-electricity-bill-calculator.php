<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define tariff rates for 2026 (Domestic consumers)
$tariff_slabs = [
    ['limit' => 50, 'rate' => 4.00],
    ['limit' => 100, 'rate' => 4.80],
    ['limit' => 200, 'rate' => 5.80],
    ['limit' => 300, 'rate' => 6.40],
    ['limit' => 400, 'rate' => 6.60],
    ['limit' => 500, 'rate' => 6.80],
    ['limit' => PHP_INT_MAX, 'rate' => 7.00]
];

$fixed_charge = 50; // Monthly fixed charge
$subsidy_rate = 0.50; // 50% subsidy on first 100 units if applicable

// Initialize variables
$units = isset($_POST['units']) ? (float)$_POST['units'] : 0;
$include_subsidy = isset($_POST['include_subsidy']) ? true : false;
$energy_charge = 0;
$subsidy_amount = 0;
$total_amount = 0;

// Calculate bill if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $remaining_units = $units;
    $prev_limit = 0;
    
    // Calculate energy charge based on slabs
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = min($remaining_units, $slab['limit'] - $prev_limit);
        $energy_charge += $slab_units * $slab['rate'];
        $remaining_units -= $slab_units;
        $prev_limit = $slab['limit'];
    }
    
    // Apply subsidy if selected
    if ($include_subsidy) {
        $subsidy_units = min($units, 100);
        $subsidy_amount = $subsidy_units * $subsidy_rate;
    }
    
    $total_amount = $energy_charge + $fixed_charge - $subsidy_amount;
    $total_amount = max(0, $total_amount); // Ensure bill doesn't go negative
}
?>

    
    <!-- Primary Meta Tags -->
    <title>Mizoram Electricity Bill Calculator 2026 - Calculate Your MSEB Bill Online</title>
    <meta name="title" content="Mizoram Electricity Bill Calculator 2026 - Calculate Your MSEB Bill Online">
    <meta name="description" content="Free Mizoram electricity bill calculator 2026. Calculate your MSEB (Mizoram State Electricity Board) bill with latest tariff rates, subsidies, and fixed charges. Instant calculation with detailed breakdown.">
    <meta name="keywords" content="Mizoram electricity bill calculator 2026, MSEB bill calculator, electricity bill Mizoram, tariff rates Mizoram, power bill calculator, electricity charges calculator, Mizoram power bill">
    <meta name="author" content="Thiyagi">
        <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator">
    <meta property="og:title" content="Mizoram Electricity Bill Calculator 2026 - Calculate Your MSEB Bill Online">
    <meta property="og:description" content="Free Mizoram electricity bill calculator 2026. Calculate your MSEB (Mizoram State Electricity Board) bill with latest tariff rates, subsidies, and fixed charges. Instant calculation with detailed breakdown.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    <meta property="og:site_name" content="Thiyagi.com">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator">
    <meta property="twitter:title" content="Mizoram Electricity Bill Calculator 2026 - Calculate Your MSEB Bill Online">
    <meta property="twitter:description" content="Free Mizoram electricity bill calculator 2026. Calculate your MSEB (Mizoram State Electricity Board) bill with latest tariff rates, subsidies, and fixed charges. Instant calculation with detailed breakdown.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    <meta property="twitter:creator" content="@thiyagi">
    
    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#10B981">
    <meta name="msapplication-TileColor" content="#10B981">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Mizoram Electricity Calculator">
    
    <!-- Canonical URL -->
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://cdn.tailwindcss.com">
    
    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Mizoram Electricity Bill Calculator 2026",
        "description": "Free Mizoram electricity bill calculator 2026. Calculate your MSEB (Mizoram State Electricity Board) bill with latest tariff rates, subsidies, and fixed charges. Instant calculation with detailed breakdown.",
        "url": "https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator",
        "applicationCategory": "Utility",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "author": {
            "@type": "Person",
            "name": "Thiyagi"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        },
        "serviceArea": {
            "@type": "State",
            "name": "Mizoram",
            "containedInPlace": {
                "@type": "Country",
                "name": "India"
            }
        }
    }
    </script>
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Tariff rates (must match PHP)
        const tariffSlabs = [
            {limit: 50, rate: 4.00},
            {limit: 100, rate: 4.80},
            {limit: 200, rate: 5.80},
            {limit: 300, rate: 6.40},
            {limit: 400, rate: 6.60},
            {limit: 500, rate: 6.80},
            {limit: Infinity, rate: 7.00}
        ];
        const fixedCharge = 50;
        
        function calculateBill(units, includeSubsidy) {
            let remainingUnits = units;
            let prevLimit = 0;
            let energyCharge = 0;
            
            tariffSlabs.forEach(slab => {
                if (remainingUnits <= 0) return;
                
                const slabUnits = Math.min(remainingUnits, slab.limit - prevLimit);
                energyCharge += slabUnits * slab.rate;
                remainingUnits -= slabUnits;
                prevLimit = slab.limit;
            });
            
            const subsidyAmount = includeSubsidy ? Math.min(units, 100) * 0.50 : 0;
            const totalAmount = energyCharge + fixedCharge - subsidyAmount;
            
            return {
                energyCharge: energyCharge.toFixed(2),
                subsidyAmount: subsidyAmount.toFixed(2),
                totalAmount: Math.max(0, totalAmount).toFixed(2)
            };
        }
        
        function updateResults(units, includeSubsidy) {
            const result = calculateBill(units, includeSubsidy);
            
            document.getElementById('energy-charge').textContent = '₹' + result.energyCharge;
            document.getElementById('subsidy-amount').textContent = '-₹' + result.subsidyAmount;
            document.getElementById('total-amount').textContent = '₹' + result.totalAmount;
        }
        
        function liveCalculate() {
            const units = parseFloat(document.getElementById('units').value) || 0;
            const includeSubsidy = document.getElementById('include_subsidy').checked;
            updateResults(units, includeSubsidy);
        }
        
        function shareBill() {
            const units = document.getElementById('units').value || 0;
            const totalAmount = document.getElementById('total-amount').textContent;
            const hasSubsidy = document.getElementById('include_subsidy').checked;
            
            const shareText = `💡 My Mizoram electricity bill estimate:\n` +
                            `📊 Units: ${units} kWh\n` +
                            `💰 Total: ${totalAmount}\n` +
                            `${hasSubsidy ? '✅ Subsidy included\n' : ''}` +
                            `🔗 Calculate yours: ${window.location.href}`;
            
            if (navigator.share) {
                navigator.share({
                    title: 'Mizoram Electricity Bill Estimate',
                    text: shareText,
                    url: window.location.href
                }).catch(console.error);
            } else {
                navigator.clipboard.writeText(shareText).then(() => {
                    // Create a temporary notification
                    const notification = document.createElement('div');
                    notification.textContent = 'Bill estimate copied to clipboard!';
                    notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
                    document.body.appendChild(notification);
                    
                    // Remove notification after 3 seconds
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 3000);
                }).catch(() => {
                    prompt('Copy this bill estimate:', shareText);
                });
            }
        }
        
        function resetCalculator() {
            document.getElementById('units').value = '';
            document.getElementById('include_subsidy').checked = false;
            document.getElementById('energy-charge').textContent = '₹0.00';
            document.getElementById('subsidy-amount').textContent = '-₹0.00';
            document.getElementById('total-amount').textContent = '₹0.00';
            
            // Remove any validation feedback
            const feedback = document.getElementById('units-feedback');
            if (feedback) {
                feedback.remove();
            }
            document.getElementById('units').style.borderColor = '';
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize with current values
            const initialUnits = <?= $units ?>;
            const initialSubsidy = <?= $include_subsidy ? 'true' : 'false' ?>;
            
            if (initialUnits > 0) {
                updateResults(initialUnits, initialSubsidy);
            }
            
            // Setup event listeners
            document.getElementById('units').addEventListener('input', liveCalculate);
            document.getElementById('include_subsidy').addEventListener('change', liveCalculate);
            
            // Input validation feedback
            document.getElementById('units').addEventListener('input', function() {
                const value = parseFloat(this.value);
                if (this.value && (isNaN(value) || value < 0)) {
                    this.style.borderColor = '#EF4444';
                    if (!document.getElementById('units-feedback')) {
                        const feedback = document.createElement('p');
                        feedback.id = 'units-feedback';
                        feedback.className = 'text-red-500 text-sm mt-1';
                        feedback.textContent = 'Please enter a valid positive number';
                        this.parentNode.appendChild(feedback);
                    }
                } else {
                    this.style.borderColor = '';
                    const feedback = document.getElementById('units-feedback');
                    if (feedback) {
                        feedback.remove();
                    }
                }
            });
            
            lucide.createIcons();
        });
    </script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-gray-800">Mizoram Electricity Bill Calculator 2026</h1>
                <p class="text-gray-600 text-sm">Power & Electricity Department</p>
            </div>

            <div class="p-6">
                <form method="POST">
                    <div class="mb-4">
                        <label for="units" class="block text-sm font-medium text-gray-700 mb-2">Units Consumed (kWh)</label>
                        <input type="number" id="units" name="units" value="<?= $units ?>" 
                               min="0" step="1" class="w-full px-4 py-2 border rounded-md"
                               placeholder="Enter units" required>
                    </div>

                    <div class="mb-6 flex items-center">
                        <input type="checkbox" id="include_subsidy" name="include_subsidy" 
                               <?= $include_subsidy ? 'checked' : '' ?> class="mr-2">
                        <label for="include_subsidy" class="text-sm text-gray-700">Include Subsidy (50% off first 100 units)</label>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-md mb-6">
                        <h3 class="text-lg font-medium text-gray-800 mb-3">Bill Estimate</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Energy Charge:</span>
                                <span id="energy-charge" class="font-medium">₹0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fixed Charge:</span>
                                <span class="font-medium">₹<?= number_format($fixed_charge, 2) ?></span>
                            </div>
                            <div class="flex justify-between" id="subsidy-row" style="display: <?= $include_subsidy ? 'flex' : 'none' ?>">
                                <span class="text-gray-600">Subsidy Deduction:</span>
                                <span id="subsidy-amount" class="font-medium text-green-600">-₹0.00</span>
                            </div>
                            <div class="border-t border-gray-200 my-2"></div>
                            <div class="flex justify-between">
                                <span class="text-gray-800 font-semibold">Total Amount:</span>
                                <span id="total-amount" class="text-blue-600 font-bold">₹0.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md flex items-center justify-center gap-2">
                            <i data-lucide="calculator" class="w-5 h-5"></i>
                            Calculate
                        </button>
                        <button type="reset" onclick="resetCalculator()" class="flex-1 bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded-md flex items-center justify-center gap-2">
                            <i data-lucide="refresh-cw" class="w-5 h-5"></i>
                            Reset
                        </button>
                        <button type="button" onclick="window.print()" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-md flex items-center justify-center gap-2">
                            <i data-lucide="printer" class="w-5 h-5"></i>
                            Print
                        </button>
                        <button type="button" onclick="shareBill()" class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md flex items-center justify-center gap-2">
                            <i data-lucide="share-2" class="w-5 h-5"></i>
                            Share
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Detailed Bill Breakdown (if calculation done) -->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0): ?>
        <div class="max-w-md mx-auto mt-6 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-bold text-gray-800">Detailed Bill Breakdown</h3>
                <p class="text-gray-600 text-sm">For <?= $units ?> units consumption</p>
            </div>
            <div class="p-6">
                <!-- Slab-wise Calculation -->
                <div class="mb-4">
                    <h4 class="text-md font-semibold text-gray-700 mb-3">Slab-wise Calculation:</h4>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500">Slab</th>
                                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500">Units</th>
                                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500">Rate</th>
                                    <th class="px-2 py-2 text-left text-xs font-medium text-gray-500">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                $remaining_units_display = $units;
                                $prev_limit_display = 0;
                                foreach ($tariff_slabs as $slab):
                                    if ($remaining_units_display <= 0) break;
                                    $slab_units_display = min($remaining_units_display, $slab['limit'] - $prev_limit_display);
                                    if ($slab_units_display <= 0) continue;
                                    $slab_cost_display = $slab_units_display * $slab['rate'];
                                ?>
                                <tr>
                                    <td class="px-2 py-2 text-xs text-gray-500">
                                        <?= ($prev_limit_display + 1) ?>-<?= $slab['limit'] == PHP_INT_MAX ? 'Above' : $slab['limit'] ?>
                                    </td>
                                    <td class="px-2 py-2 text-xs text-gray-500"><?= $slab_units_display ?></td>
                                    <td class="px-2 py-2 text-xs text-gray-500">₹<?= $slab['rate'] ?></td>
                                    <td class="px-2 py-2 text-xs text-gray-500">₹<?= number_format($slab_cost_display, 2) ?></td>
                                </tr>
                                <?php
                                $remaining_units_display -= $slab_units_display;
                                $prev_limit_display = $slab['limit'];
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Final Bill Summary -->
                <div class="border-t pt-4">
                    <div class="flex justify-between text-sm">
                        <span>Energy Charges:</span>
                        <span>₹<?= number_format($energy_charge, 2) ?></span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span>Fixed Charges:</span>
                        <span>₹<?= $fixed_charge ?></span>
                    </div>
                    <?php if ($include_subsidy): ?>
                    <div class="flex justify-between text-sm text-green-600">
                        <span>Subsidy (50% on first 100 units):</span>
                        <span>-₹<?= number_format($subsidy_amount, 2) ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="flex justify-between text-lg font-bold border-t pt-2 mt-2">
                        <span>Total Amount:</span>
                        <span>₹<?= number_format($total_amount, 2) ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Tariff Information Table -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">2026 Mizoram Electricity Tariff Rates</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Consumption Slab</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate per Unit (₹/kWh)</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1-50 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹4.00</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Lowest slab for minimal consumption</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">51-100 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹4.80</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Low consumption households</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">101-200 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹5.80</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Medium consumption range</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">201-300 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹6.40</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Higher consumption households</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">301-400 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹6.60</td>
                            <td class="px-6 py-4 text-sm text-gray-500">High consumption category</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">401-500 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹6.80</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Very high consumption</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Above 500 units</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹7.00</td>
                            <td class="px-6 py-4 text-sm text-gray-500">Maximum rate for highest consumption</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                <p class="text-blue-800 text-sm">
                    <strong>Additional Charges:</strong> Fixed charge of ₹50/month applies to all connections. 
                    Eligible consumers may get 50% subsidy on first 100 units.
                </p>
            </div>
        </div>
        
        <!-- Energy Saving Tips -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">💡 Energy Saving Tips for Mizoram Residents</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-bold text-gray-700 mb-3">🏠 Home Energy Efficiency:</h3>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li>• Use LED bulbs instead of incandescent bulbs</li>
                        <li>• Unplug electronics when not in use</li>
                        <li>• Set AC temperature to 24°C for optimal efficiency</li>
                        <li>• Use ceiling fans along with AC to reduce load</li>
                        <li>• Replace old appliances with 5-star rated ones</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-3">⚡ Monthly Consumption Tips:</h3>
                    <ul class="text-gray-600 text-sm space-y-2">
                        <li>• Monitor your usage to stay under 100 units for subsidy</li>
                        <li>• Use water heaters only when necessary</li>
                        <li>• Air-dry clothes instead of using electric dryers</li>
                        <li>• Cook during off-peak hours when possible</li>
                        <li>• Regular maintenance of electrical appliances</li>
                    </ul>
                </div>
            </div>
            <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                <p class="text-green-800 text-sm">
                    <strong>💰 Cost Saving Tip:</strong> Try to keep consumption under 100 units to benefit from the 50% government subsidy. 
                    This can significantly reduce your monthly electricity bill!
                </p>
            </div>
        </div>
        
        <!-- Description Section -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Mizoram Electricity Bill Calculator 2026</h2>
            <p class="text-gray-600 mb-4">
                Our free Mizoram electricity bill calculator helps you estimate your monthly electricity bill based on the latest 2026 tariff rates set by the Mizoram State Electricity Board (MSEB). 
                Get instant calculations with detailed breakdowns including energy charges, fixed charges, and applicable subsidies.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <div>
                    <h3 class="font-bold text-gray-700 mb-3">✓ 2026 Tariff Rates (per kWh):</h3>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• 0-50 units: ₹4.00</li>
                        <li>• 51-100 units: ₹4.80</li>
                        <li>• 101-200 units: ₹5.80</li>
                        <li>• 201-300 units: ₹6.40</li>
                        <li>• 301-400 units: ₹6.60</li>
                        <li>• 401-500 units: ₹6.80</li>
                        <li>• Above 500 units: ₹7.00</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-3">✓ Additional Charges:</h3>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Fixed Charge: ₹50/month</li>
                        <li>• Subsidy: 50% off first 100 units (if eligible)</li>
                        <li>• Real-time calculation</li>
                        <li>• Instant results</li>
                        <li>• Print & share options</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="font-bold text-gray-700">How accurate is this Mizoram electricity bill calculator?</h3>
                    <p class="text-gray-600 text-sm mt-1">Our calculator uses the latest 2026 tariff rates set by MSEB. The estimates are highly accurate for domestic consumers, but actual bills may vary slightly due to additional taxes or surcharges.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">What is the subsidy available in Mizoram?</h3>
                    <p class="text-gray-600 text-sm mt-1">Eligible consumers can get 50% subsidy on the first 100 units of electricity consumption per month. Check the subsidy option in the calculator to include this benefit.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">How is the electricity bill calculated in Mizoram?</h3>
                    <p class="text-gray-600 text-sm mt-1">The bill is calculated using slab-wise rates: Energy Charge (based on consumption slabs) + Fixed Charge (₹50) - Applicable Subsidy = Total Amount.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">Can I use this calculator for commercial connections?</h3>
                    <p class="text-gray-600 text-sm mt-1">This calculator is designed for domestic consumers. Commercial and industrial tariffs have different rates and charges.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">How often are the tariff rates updated?</h3>
                    <p class="text-gray-600 text-sm mt-1">We update our calculator whenever MSEB announces new tariff rates. The current rates are for 2026 and are regularly reviewed.</p>
                </div>
            </div>
        </div>
        
        <!-- Features Section -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Our Mizoram Electricity Calculator?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-green-500 text-3xl mb-2">⚡</div>
                    <h3 class="font-bold text-gray-700">Instant Calculation</h3>
                    <p class="text-gray-600 text-sm">Get immediate results as you type</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-blue-500 text-3xl mb-2">📊</div>
                    <h3 class="font-bold text-gray-700">Detailed Breakdown</h3>
                    <p class="text-gray-600 text-sm">See energy charges, fixed costs, and subsidies</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-purple-500 text-3xl mb-2">🎯</div>
                    <h3 class="font-bold text-gray-700">2026 Updated Rates</h3>
                    <p class="text-gray-600 text-sm">Latest MSEB tariff rates included</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-red-500 text-3xl mb-2">💸</div>
                    <h3 class="font-bold text-gray-700">Subsidy Calculator</h3>
                    <p class="text-gray-600 text-sm">Include government subsidies in calculation</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-yellow-500 text-3xl mb-2">🖨️</div>
                    <h3 class="font-bold text-gray-700">Print & Share</h3>
                    <p class="text-gray-600 text-sm">Print estimates or share with others</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-indigo-500 text-3xl mb-2">📱</div>
                    <h3 class="font-bold text-gray-700">Mobile Friendly</h3>
                    <p class="text-gray-600 text-sm">Works perfectly on all devices</p>
                </div>
            </div>
        </div>
        
        <!-- Related Tools Section -->
        <div class="max-w-4xl mx-auto mt-8 bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Related Electricity Calculators</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-green-500 text-2xl mb-2">⚡</div>
                    <h3 class="font-bold text-gray-700 text-sm">Assam Calculator</h3>
                    <p class="text-gray-600 text-xs">APDCL bill calculator</p>
                </a>
                <a href="https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-blue-500 text-2xl mb-2">💡</div>
                    <h3 class="font-bold text-gray-700 text-sm">Nagaland Calculator</h3>
                    <p class="text-gray-600 text-xs">NPDCL bill calculator</p>
                </a>
                <a href="https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-purple-500 text-2xl mb-2">🔌</div>
                    <h3 class="font-bold text-gray-700 text-sm">Manipur Calculator</h3>
                    <p class="text-gray-600 text-xs">MSPDCL bill calculator</p>
                </a>
                <a href="https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-red-500 text-2xl mb-2">⚡</div>
                    <h3 class="font-bold text-gray-700 text-sm">Tripura Calculator</h3>
                    <p class="text-gray-600 text-xs">TSECL bill calculator</p>
                </a>
            </div>
        </div>
    </div>
</body>
     <h2>Indian State Electricity Bill Calculators</h2>
    
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
</body>
   <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
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
    </style>
<?php include '../footer.php';?>
</html>