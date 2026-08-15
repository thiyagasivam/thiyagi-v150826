
<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define current tariff slabs (2026)
$slabs = [
    ['min' => 0, 'max' => 200, 'rate' => 3.00],
    ['min' => 201, 'max' => 400, 'rate' => 4.50],
    ['min' => 401, 'max' => 800, 'rate' => 6.00],
    ['min' => 801, 'max' => 1200, 'rate' => 7.00],
    ['min' => 1201, 'max' => PHP_FLOAT_MAX, 'rate' => 8.00]
];
// Fixed charges based on load (optional)
$fixedCharges = [
    ['min' => 0, 'max' => 1, 'charge' => 20],
    ['min' => 1, 'max' => 2, 'charge' => 50],
    ['min' => 2, 'max' => 5, 'charge' => 100],
    ['min' => 5, 'max' => PHP_FLOAT_MAX, 'charge' => 125]
];
// Initialize variables
$units = isset($_POST['units']) ? (float)$_POST['units'] : 0;
$load = isset($_POST['load']) ? (float)$_POST['load'] : 0;
$subsidy = isset($_POST['subsidy']) ? true : false;
$total = 0;
$fixedCharge = 0;
$breakdown = [];
$validInput = true;
// Calculate bill if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($units < 0 || $load < 0) {
        $validInput = false;
    } else {
        // Calculate energy charges
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
        // Calculate fixed charges
        foreach ($fixedCharges as $charge) {
            if ($load > $charge['min'] && $load <= $charge['max']) {
                $fixedCharge = $charge['charge'];
                break;
            }
        }
        $total += $fixedCharge;
        // Apply subsidy if selected
        if ($subsidy && $units <= 400) {
            $subsidyAmount = min($total, 800); // Example subsidy cap
            $total = max(0, $total - $subsidyAmount);
        }
    }
}
?>
    <title>Delhi Electricity Bill Calculator (BSES, Tata Power) - 2026</title>
    <meta name="description" content="Estimate your Delhi electricity bill online for BSES Rajdhani, BSES Yamuna, and Tata Power with updated 2026 tariff slabs.">
   
    <!-- Font Awesome for icons -->
    <style>
        .bill-result {
            background-color: #f0f9ff;
            border-left: 4px solid #3b82f6; /* blue-500 */
        }
        .input-icon {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #6b7280; /* gray-500 */
        }
        .subsidy-info {
            background-color: #dcfce7; /* green-100 */
        }
        @media print {
            .no-print { display: none; }
        }
    </style>
    <script>
        // Live calculation for better UX
        document.addEventListener('DOMContentLoaded', function() {
            const unitInput = document.getElementById('units');
            const loadInput = document.getElementById('load');
            const subsidyCheckbox = document.getElementById('subsidy');
            const liveResult = document.getElementById('live-result');
            function calculateLiveEstimate() {
                const units = parseFloat(unitInput.value) || 0;
                const load = parseFloat(loadInput.value) || 0;
                const subsidy = subsidyCheckbox.checked;
                // Simple client-side calculation
                let total = 0;
                const slabs = [
                    {min: 0, max: 200, rate: 3.00},
                    {min: 201, max: 400, rate: 4.50},
                    {min: 401, max: 800, rate: 6.00},
                    {min: 801, max: 1200, rate: 7.00},
                    {min: 1201, max: Infinity, rate: 8.00}
                ];
                slabs.forEach(slab => {
                    if (units > slab.min) {
                        const slabUnits = Math.min(units, slab.max) - slab.min;
                        total += slabUnits * slab.rate;
                    }
                });
                // Add fixed charges (simplified)
                let fixedCharge = 0;
                if (load > 0 && load <= 1) fixedCharge = 20;
                else if (load > 1 && load <= 2) fixedCharge = 50;
                else if (load > 2 && load <= 5) fixedCharge = 100;
                else if (load > 5) fixedCharge = 125;
                total += fixedCharge;
                // Apply subsidy (simplified)
                if (subsidy && units <= 400) {
                    total = Math.max(0, total - 800);
                }
                liveResult.textContent = '₹' + total.toFixed(2);
            }
            if (unitInput && liveResult) {
                unitInput.addEventListener('input', calculateLiveEstimate);
                loadInput.addEventListener('input', calculateLiveEstimate);
                subsidyCheckbox.addEventListener('change', calculateLiveEstimate);
            }
        });
        // Print functionality
        function printBill() {
            window.print();
        }
        // Share functionality
        function shareBill() {
            const units = <?= $units ?? 0 ?>;
            const total = <?= $total ?? 0 ?>;
            const text = `My Delhi Electricity Bill Calculation: ${units} units = ₹${total.toFixed(2)} (2026 rates)`;
            const url = window.location.href;
            if (navigator.share) {
                navigator.share({
                    title: 'Delhi Electricity Bill Calculation',
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
            // Copy to clipboard as fallback
            const textToCopy = `${text}
Calculate yours: ${url}`;
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('Calculation copied to clipboard! You can paste it anywhere.');
            }).catch(err => {
                console.log('Could not copy text: ', err);
                prompt('Copy this link to share:', url);
            });
        }
    </script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-100">
    <div class="container mx-auto py-10 px-4 max-w-4xl">
        <header class="text-center mb-10">
            <h1 class="text-3xl font-bold text-blue-600 mb-2">Delhi Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">For BSES Rajdhani, BSES Yamuna, and Tata Power Delhi Consumers</p>
        </header>
        <div class="bg-white shadow-md rounded-lg mb-8 overflow-hidden">
            <div class="px-6 py-4">
                <form method="post">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Units Consumed (kWh):</label>
                            <div class="relative">
                                <input type="number" id="units" name="units" 
                                       value="<?= htmlspecialchars($units) ?>" 
                                       min="0" step="0.01"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-12"
                                       placeholder="e.g., 350" required>
                                <span class="input-icon">kWh</span>
                            </div>
                        </div>
                        <div>
                            <label for="load" class="block text-gray-700 text-sm font-bold mb-2">Connected Load (kW):</label>
                            <div class="relative">
                                <input type="number" id="load" name="load" 
                                       value="<?= htmlspecialchars($load) ?>" 
                                       min="0" step="0.1"
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-12"
                                       placeholder="e.g., 2.5">
                                <span class="input-icon">kW</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-center">
                            <input id="subsidy" name="subsidy" type="checkbox" 
                                   class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                   <?= $subsidy ? 'checked' : '' ?>>
                            <label for="subsidy" class="ml-2 block text-sm text-gray-900">
                                Apply Subsidy (if eligible)
                            </label>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Subsidy may apply for consumption up to 400 units</p>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Calculate Bill
                        </button>
                        <div id="live-preview" class="hidden md:block text-gray-600">
                            <span class="font-medium">Estimated Bill:</span>
                            <span id="live-result" class="ml-2 font-bold text-blue-600">₹0.00</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput): ?>
            <div class="bg-white shadow-md rounded-lg mb-8 overflow-hidden">
                <div class="px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Bill Calculation Result</h2>
                    <div class="bill-result p-4 rounded-lg mb-6">
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                            <div>
                                <p class="text-gray-600 mb-1">For <span class="font-medium"><?= $units ?></span> units</p>
                                <p class="text-sm text-gray-500 mb-1">Delhi Electricity Bill (2026 Rates)</p>
                                <?php if ($load > 0): ?>
                                    <p class="text-sm text-gray-500 mb-1">Connected Load: <?= $load ?> kW</p>
                                <?php endif; ?>
                                <?php if ($subsidy): ?>
                                    <p class="text-sm text-green-600 mb-0">Subsidy applied</p>
                                <?php endif; ?>
                            </div>
                            <div class="mt-4 md:mt-0 text-3xl font-bold text-blue-600">₹<?= number_format($total, 2) ?></div>
                        </div>
                    </div>
                    <h3 class="text-lg font-medium text-gray-800 mb-4">Breakdown:</h3>
                    <div class="overflow-x-auto mb-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Component</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Details</th>
                                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Amount (₹)</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php foreach ($breakdown as $item): ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Energy Charges</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 text-right"><?= $item['units'] ?> units @ ₹<?= number_format($item['rate'], 2) ?>/unit (<?= $item['range'] ?>)</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right"><?= number_format($item['cost'], 2) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if ($fixedCharge > 0): ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Fixed Charges</td>
                                        <td class="px-6 py-4 text-sm text-gray-500 text-right">For <?= $load ?> kW load</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right"><?= number_format($fixedCharge, 2) ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ($subsidy && $units <= 400): ?>
                                    <tr class="text-green-600">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">Subsidy</td>
                                        <td class="px-6 py-4 text-sm text-right">Government subsidy</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">-₹800.00</td>
                                    </tr>
                                <?php endif; ?>
                                <tr class="bg-gray-50 font-semibold">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Total Amount</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">₹<?= number_format($total, 2) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-wrap gap-2 justify-center no-print">
                        <button onclick="printBill()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            <i class="fas fa-print mr-2"></i> Print Bill
                        </button>
                        <button onclick="shareBill()" class="bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                    </div>
                </div>
            </div>
        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Invalid Input!</strong>
                <span class="block sm:inline">Please enter positive numbers for units and load.</span>
            </div>
        <?php endif; ?>
        
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Current Delhi Electricity Tariff (2026)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-3">Energy Charges (₹/unit)</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($slabs as $slab): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?= ($slab['max'] === PHP_FLOAT_MAX) ? 
                                                    $slab['min'] . ' and above' : 
                                                    $slab['min'] . ' - ' . $slab['max'] ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">₹<?= number_format($slab['rate'], 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-3">Fixed Charges (₹/month)</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Load Range</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Charge</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($fixedCharges as $charge): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?= ($charge['max'] === PHP_FLOAT_MAX) ? 
                                                    'Above ' . $charge['min'] . ' kW' : 
                                                    $charge['min'] . ' - ' . $charge['max'] . ' kW' ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">₹<?= number_format($charge['charge'], 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-gray-800 mb-2">Subsidy Information</h3>
                    <div class="subsidy-info p-4 rounded-lg">
                        <p class="text-sm text-gray-600 mb-0">Domestic consumers using up to 400 units may be eligible for subsidies as per Delhi government policies. Actual subsidy amounts may vary.</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-500">* Rates are for domestic consumers and subject to change by DISCOMs.</p>
            </div>
        </div>
    </div>

<!-- State Electricity Bill Calculators Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Indian State Electricity Bill Calculators</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php
        $calculators = [
            ["Bihar", "https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator"],
            ["Goa", "https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator"],
            ["Delhi", "https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator"],
            ["Himachal Pradesh", "https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator"],
            ["Kerala", "https://www.thiyagi.com/electricity-board/kseb-bill-calculator"],
            ["Uttar Pradesh", "https://www.thiyagi.com/electricity-board/uppcl-bill-calculator"],
            ["Karnataka", "https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator"],
            ["Haryana", "https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator"],
            ["Nagaland", "https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator"],
            ["Jharkhand", "https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator"],
            ["Uttarakhand", "https://www.thiyagi.com/electricity-board/upcl-electricity-bill-calculator-uttarakhand"],
            ["Assam", "https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator"],
            ["Andaman", "https://www.thiyagi.com/electricity-board/andaman-electricity-bill-calculator"],
            ["Ladakh", "https://www.thiyagi.com/electricity-board/ladakh-electricity-bill-calculator"],
            ["West Bengal", "https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator"],
            ["Tripura", "https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator"],
            ["Telangana", "https://www.thiyagi.com/electricity-board/tsspdcl-electricity-bill-calculator"],
            ["Tamil Nadu", "https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator"],
            ["Manipur", "https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator"],
            ["Chhattisgarh", "https://www.thiyagi.com/electricity-board/cspdcl-electricity-bill-calculator"],
            ["Madhya Pradesh", "https://www.thiyagi.com/electricity-board/mp-electricity-bill-calculator"],
            ["Punjab", "https://www.thiyagi.com/electricity-board/pspcl-bill-calculator"],
            ["Sikkim", "https://www.thiyagi.com/electricity-board/sikkim-electricity-bill-calculator"],
            ["Odisha", "https://www.thiyagi.com/electricity-board/odisha-electricity-bill-calculator"],
            ["Rajasthan", "https://www.thiyagi.com/electricity-board/rajasthan-electricity-bill-calculator"],
            ["Gujarat", "https://www.thiyagi.com/electricity-board/gujarat-electricity-bill-calculator"],
            ["Meghalaya", "https://www.thiyagi.com/electricity-board/meghalaya-electricity-bill-calculator"],
            ["Andhra Pradesh", "https://www.thiyagi.com/electricity-board/apspdcl-electricity-bill-calculator"],
            ["Jammu & Kashmir", "https://www.thiyagi.com/electricity-board/jpdcl-electricity-bill-calculator-kashmir"],
            ["Mizoram", "https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator"]
        ];

        foreach ($calculators as $calc) {
            echo '<div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out">';
            echo '<div class="px-4 py-5 sm:p-6">';
            echo '<h3 class="text-lg leading-6 font-medium text-gray-900 mb-2">' . htmlspecialchars($calc[0]) . '</h3>';
            echo '<a href="' . htmlspecialchars($calc[1]) . '" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-150 ease-in-out">Calculate Bill</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include '../footer.php';?>
</html>