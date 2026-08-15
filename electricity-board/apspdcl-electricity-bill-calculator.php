<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
if (!isset($breadcrumbSchema)) {
    $breadcrumbSchema = [];
}

// Define DISCOMs
$discos = [
    'APSPDCL' => 'Andhra Pradesh Southern Power Distribution Company',
    'APEPDCL' => 'Andhra Pradesh Eastern Power Distribution Company'
];

// 2026 Tariff Slabs
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
$discom = $_POST['discom'] ?? 'APSPDCL';
$units = (int)($_POST['units'] ?? 0);
$total = 0;
$breakdown = [];
$validInput = true;

// Calculate bill
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($units < 0) {
        $validInput = false;
    } else {
        foreach ($slabs as $slab) {
            if ($units > $slab['min']) {
                $slabUnits = min($units, $slab['max']) - $slab['min'];
                $slabCost = $slabUnits * $slab['rate'];
                $total += $slabCost;
                
                $breakdown[] = [
                    'range' => $slab['max'] === PHP_FLOAT_MAX 
                        ? $slab['min'] . '+' 
                        : $slab['min'] . '-' . $slab['max'],
                    'units' => $slabUnits,
                    'rate' => $slab['rate'],
                    'cost' => $slabCost
                ];
            }
        }
    }
}
?>
    <title>APSPDCL / APEPDCL Electricity Bill Calculator 2026 – Andhra Pradesh DISCOM</title>
    <meta name="description" content="Calculate your electricity bill online using the latest APSPDCL / APEPDCL slab rates for 2026. Fast, accurate, and mobile-friendly bill estimator.">
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            600: '#0284c7',
                            700: '#0369a1',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
        }
        .animate-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="container mx-auto px-4 py-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-primary-700 dark:text-primary-400">
                        APSPDCL/APEPDCL Bill Calculator
                    </h1>
                    <button id="theme-toggle" class="p-2 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                        <i class="fas fa-moon dark:fa-sun"></i>
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <!-- Calculator Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="md:flex">
                        <!-- Input Section -->
                        <div class="p-6 md:p-8 md:w-1/2">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">Bill Calculator</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Enter your consumption details</p>
                            
                            <form method="post" class="space-y-4">
                                <div>
                                    <label for="discom" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Select DISCOM
                                    </label>
                                    <select id="discom" name="discom" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-200">
                                        <?php foreach ($discos as $code => $name): ?>
                                            <option value="<?= $code ?>" <?= $discom === $code ? 'selected' : '' ?>>
                                                <?= $code ?> - <?= $name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="units" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Units Consumed
                                    </label>
                                    <div class="relative">
                                        <input type="number" id="units" name="units" value="<?= $units ?>" min="0" step="1"
                                            class="w-full px-4 py-2.5 pr-12 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition duration-200"
                                            placeholder="Enter units" required>
                                        <span class="absolute right-3 top-2.5 text-gray-500 dark:text-gray-400">kWh</span>
                                    </div>
                                </div>
                                
                                <div class="pt-2">
                                    <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-opacity-50">
                                        Calculate Bill
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Results Section -->
                        <div class="bg-gray-50 dark:bg-gray-700 p-6 md:p-8 md:w-1/2 border-t md:border-t-0 md:border-l border-gray-200 dark:border-gray-600">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Bill Details</h2>
                            
                            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput): ?>
                                <div class="animate-fade-in">
                                    <!-- Summary Card -->
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-4 mb-6 border border-gray-200 dark:border-gray-600">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm text-gray-500 dark:text-gray-400">Total for</p>
                                                <p class="font-medium text-gray-700 dark:text-gray-300"><?= $units ?> units</p>
                                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1"><?= $discom ?></p>
                                            </div>
                                            <div class="text-3xl font-bold text-primary-600 dark:text-primary-400">
                                                ₹<?= number_format($total, 2) ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Slab Breakdown -->
                                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">SLAB BREAKDOWN</h3>
                                    <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-600">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                            <thead class="bg-gray-50 dark:bg-gray-600">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Range</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Units</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                                <?php foreach ($breakdown as $item): ?>
                                                <tr>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300"><?= $item['range'] ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right"><?= $item['units'] ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right">₹<?= number_format($item['rate'], 2) ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200 text-right">₹<?= number_format($item['cost'], 2) ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <tr class="bg-gray-50 dark:bg-gray-700 font-semibold">
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Total</td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right"><?= $units ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right">-</td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right">₹<?= number_format($total, 2) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class="mt-6 flex flex-wrap gap-3 no-print">
                                        <button onclick="window.print()" class="flex-1 bg-gray-200 hover:bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200 py-2 px-4 rounded-lg flex items-center justify-center transition duration-200">
                                            <i class="fas fa-print mr-2"></i> Print
                                        </button>
                                        <button onclick="shareResult()" class="flex-1 bg-blue-100 hover:bg-blue-200 dark:bg-blue-900/50 dark:hover:bg-blue-900 text-blue-800 dark:text-blue-200 py-2 px-4 rounded-lg flex items-center justify-center transition duration-200">
                                            <i class="fas fa-share-alt mr-2"></i> Share
                                        </button>
                                    </div>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
                                <div class="bg-red-100 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-400 p-4 animate-fade-in">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-red-700 dark:text-red-300">
                                                Please enter a valid number of units (positive value only).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 dark:border-blue-400 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-info-circle text-blue-500 dark:text-blue-400"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-blue-700 dark:text-blue-300">
                                                Enter your electricity consumption in kWh to calculate your estimated bill.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Tariff Information -->
                <div class="mt-8 bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">2026 Tariff Slabs</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Consumption Range (kWh)</th>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate (₹/kWh)</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php foreach ($slabs as $slab): ?>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300">
                                            <?= $slab['max'] === PHP_FLOAT_MAX 
                                                ? $slab['min'] . ' and above' 
                                                : $slab['min'] . ' - ' . $slab['max'] ?>
                                        </td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right">
                                            ₹<?= number_format($slab['rate'], 2) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                            * Rates are subject to change by AP DISCOMs. Last updated: June 2026.
                        </p>
                    </div>
                </div>

                <article class="mt-8 bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 md:p-8 text-gray-800 dark:text-gray-200 leading-relaxed">
                        <h2 class="text-2xl md:text-3xl font-bold mb-4">APSPDCL / APEPDCL Electricity Bill Calculator: Complete Guide to Estimating, Understanding, and Reducing Your Power Bill</h2>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Introduction</h3>
                        <p class="mb-4">If you want a quick and practical way to estimate your monthly electricity charges in Andhra Pradesh, an <strong>APSPDCL / APEPDCL Electricity Bill Calculator</strong> is exactly what you need. It helps you predict your bill before it arrives, so you can avoid surprises, plan your budget, and make smarter usage decisions.</p>
                        <p class="mb-4">Most households and small businesses know their units consumed, but still struggle to understand the final amount. That happens because electricity bills include more than one charge. You may see slab-wise energy charges, fixed charges, statutory duties, and other adjustments. A reliable calculator combines these pieces and gives you a close estimate in seconds.</p>
                        <p class="mb-4">This guide covers everything from beginner basics to advanced planning. You will learn how these calculators work, what inputs matter most, where estimates may differ from final bills, and how to use estimates to lower your monthly costs.</p>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Quick Answer / Overview</h3>
                        <p class="mb-4">An <strong>APSPDCL / APEPDCL Electricity Bill Calculator</strong> estimates your monthly bill based on your consumed units, slab rates, and applicable billing components.</p>
                        <p class="mb-3">A good calculator helps you:</p>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li>Estimate your payable amount before bill generation</li>
                            <li>Understand slab-wise cost impact</li>
                            <li>Set monthly unit targets</li>
                            <li>Compare savings scenarios quickly</li>
                            <li>Avoid sudden month-end bill shocks</li>
                        </ul>
                        <p class="mb-4">Use it for planning. Treat your official DISCOM bill as the final legal bill.</p>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Everything You Need to Know</h3>

                        <h4 class="text-lg font-semibold mt-6 mb-2">What APSPDCL and APEPDCL Are</h4>
                        <p class="mb-4"><strong>APSPDCL</strong> and <strong>APEPDCL</strong> are electricity distribution utilities serving different regions in Andhra Pradesh. They apply approved tariffs and billing rules for domestic and non-domestic consumers.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Why People Use Bill Calculators</h4>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li>To check if expected consumption fits their budget</li>
                            <li>To identify why bills rise in summer or festive months</li>
                            <li>To plan appliance use for lower slabs</li>
                            <li>To estimate tenant or rental utility costs</li>
                            <li>To validate if current usage pattern is sustainable</li>
                        </ul>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Main Components in an Electricity Bill</h4>
                        <ol class="list-decimal pl-6 space-y-2 mb-4">
                            <li><strong>Energy Charges</strong>: unit-based slab charges.</li>
                            <li><strong>Fixed Charges</strong>: service or connection-related charges.</li>
                            <li><strong>Adjustments</strong>: periodic approved cost adjustments.</li>
                            <li><strong>Duties / Taxes</strong>: statutory components where applicable.</li>
                            <li><strong>Arrears / Rebates</strong>: previous dues, credits, or concessions.</li>
                        </ol>

                        <h4 class="text-lg font-semibold mt-6 mb-2">How Slab Billing Works</h4>
                        <p class="mb-4">Electricity slab systems apply different rates to different consumption ranges. As your monthly units increase, additional units may be charged at higher rates. This is why even small usage increases can produce noticeable jumps in final bill amounts.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">How the Calculator Estimates Your Bill</h4>
                        <ol class="list-decimal pl-6 space-y-2 mb-4">
                            <li>Reads your selected DISCOM and units.</li>
                            <li>Applies corresponding slab rates sequentially.</li>
                            <li>Builds a slab-wise cost breakdown.</li>
                            <li>Displays estimated total amount.</li>
                        </ol>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Step-by-Step Guide</h3>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 1: Gather Basic Inputs</h4>
                        <p class="mb-4">Keep your latest bill nearby. Note consumed units and DISCOM type. If you are estimating a future month, prepare expected unit range.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 2: Enter Units Accurately</h4>
                        <p class="mb-4">Input exact units. Even small mistakes can create large estimate differences in higher slabs.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 3: Select APSPDCL or APEPDCL</h4>
                        <p class="mb-4">Choose the right utility mode to align with regional billing context.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 4: Review Slab Breakdown</h4>
                        <p class="mb-4">Check which slab contributes most to your bill. This tells you where reduction efforts will have the highest impact.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 5: Run Scenarios</h4>
                        <p class="mb-4">Try current usage, reduced usage, and peak-season usage values. Compare totals to create a practical monthly budget range.</p>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Step 6: Reconcile with Official Bill</h4>
                        <p class="mb-4">After bill generation, compare estimate vs final bill and note differences from arrears, adjustments, or rounding.</p>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Features or Types</h3>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Calculator Types</h4>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li><strong>Quick Estimator</strong>: instant total from units.</li>
                            <li><strong>Slab Breakdown Tool</strong>: detailed per-slab amounts.</li>
                            <li><strong>Scenario Planner</strong>: compare multiple unit plans.</li>
                            <li><strong>Category-Aware Tool</strong>: supports multiple consumer types.</li>
                        </ul>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Feature Table</h4>
                        <div class="overflow-x-auto mb-4">
                            <table class="w-full text-left border border-gray-200 dark:border-gray-600 text-sm">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Feature</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Why It Matters</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Priority</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">DISCOM selection</td><td class="p-3 border border-gray-200 dark:border-gray-600">Ensures correct context</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Slab-wise output</td><td class="p-3 border border-gray-200 dark:border-gray-600">Shows cost hotspots</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Input validation</td><td class="p-3 border border-gray-200 dark:border-gray-600">Prevents user entry errors</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Printable results</td><td class="p-3 border border-gray-200 dark:border-gray-600">Useful for records</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Share option</td><td class="p-3 border border-gray-200 dark:border-gray-600">Easy household/business discussion</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Benefits</h3>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li>Improves monthly budget predictability</li>
                            <li>Highlights high-cost usage patterns</li>
                            <li>Supports smarter appliance scheduling</li>
                            <li>Helps avoid bill surprise at month-end</li>
                            <li>Encourages evidence-based energy savings</li>
                            <li>Useful for both households and small businesses</li>
                        </ul>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Limitations</h3>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li>Estimates may differ from final bill due to adjustments</li>
                            <li>Tariff revisions can affect accuracy if not updated promptly</li>
                            <li>Arrears and rebates are bill-specific and not always predictable</li>
                            <li>Wrong user category can significantly skew output</li>
                        </ul>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Comparison Table</h3>
                        <div class="overflow-x-auto mb-4">
                            <table class="w-full text-left border border-gray-200 dark:border-gray-600 text-sm">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Method</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Speed</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Clarity</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Best For</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Online Calculator</td><td class="p-3 border border-gray-200 dark:border-gray-600">Fast</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td><td class="p-3 border border-gray-200 dark:border-gray-600">Monthly planning</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Manual Slab Math</td><td class="p-3 border border-gray-200 dark:border-gray-600">Slow</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td><td class="p-3 border border-gray-200 dark:border-gray-600">Learning and verification</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Wait for Final Bill</td><td class="p-3 border border-gray-200 dark:border-gray-600">Delayed</td><td class="p-3 border border-gray-200 dark:border-gray-600">Low for planning</td><td class="p-3 border border-gray-200 dark:border-gray-600">Post-facto payment only</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Common Mistakes</h3>
                        <ol class="list-decimal pl-6 space-y-2 mb-4">
                            <li>Entering last month units by mistake</li>
                            <li>Selecting wrong DISCOM or category assumptions</li>
                            <li>Ignoring slab breakdown and reading only total</li>
                            <li>Assuming all months have same usage profile</li>
                            <li>Comparing estimate with bill that includes arrears</li>
                            <li>Forgetting seasonal load changes from AC and geyser use</li>
                            <li>Treating estimate as exact payable amount</li>
                        </ol>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Expert Tips</h3>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li>Track units weekly during high-use seasons</li>
                            <li>Run at least three scenarios: current, target, worst-case</li>
                            <li>Use slab insight to cap avoidable peak consumption</li>
                            <li>Compare 6 to 12 months to identify appliance impact</li>
                            <li>Investigate sudden estimate mismatch quickly</li>
                            <li>Share estimates with family to align usage goals</li>
                        </ul>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Best Practices</h3>
                        <ol class="list-decimal pl-6 space-y-2 mb-4">
                            <li>Set a monthly unit target before billing cycle begins.</li>
                            <li>Check mid-cycle estimate and correct usage if needed.</li>
                            <li>Prioritize low-cost behavior changes first.</li>
                            <li>Re-check estimate near month-end.</li>
                            <li>Reconcile estimate with actual bill every month.</li>
                            <li>Maintain a simple yearly usage tracker.</li>
                        </ol>

                        <h4 class="text-lg font-semibold mt-6 mb-2">Best Practices Summary Table</h4>
                        <div class="overflow-x-auto mb-4">
                            <table class="w-full text-left border border-gray-200 dark:border-gray-600 text-sm">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Practice</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Impact</th>
                                        <th class="p-3 border border-gray-200 dark:border-gray-600">Effort</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Weekly unit tracking</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td><td class="p-3 border border-gray-200 dark:border-gray-600">Low</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Scenario comparison</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td><td class="p-3 border border-gray-200 dark:border-gray-600">Low</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Seasonal planning</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Bill reconciliation</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td><td class="p-3 border border-gray-200 dark:border-gray-600">Low</td></tr>
                                    <tr><td class="p-3 border border-gray-200 dark:border-gray-600">Appliance schedule optimization</td><td class="p-3 border border-gray-200 dark:border-gray-600">High</td><td class="p-3 border border-gray-200 dark:border-gray-600">Medium</td></tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Frequently Asked Questions</h3>
                        <div class="space-y-5">
                            <div><h4 class="font-semibold">1. What does this calculator do?</h4><p>It estimates your APSPDCL or APEPDCL electricity bill using entered units and slab logic.</p></div>
                            <div><h4 class="font-semibold">2. Is it accurate for final payment?</h4><p>It is a planning estimate. Your final billed amount from DISCOM is the official payable amount.</p></div>
                            <div><h4 class="font-semibold">3. Why is my estimate lower than my bill?</h4><p>Your final bill may include arrears, adjustments, dues, or category-specific charges not fully reflected in estimate mode.</p></div>
                            <div><h4 class="font-semibold">4. Can I use it for domestic homes only?</h4><p>This page is generally targeted for common residential-style estimation unless specific commercial logic is separately configured.</p></div>
                            <div><h4 class="font-semibold">5. Is DISCOM selection important?</h4><p>Yes. Correct utility context improves estimate relevance for your region and bill format expectations.</p></div>
                            <div><h4 class="font-semibold">6. What is slab-wise billing?</h4><p>Different unit ranges are charged at different rates, usually increasing with higher usage bands.</p></div>
                            <div><h4 class="font-semibold">7. How often should I estimate?</h4><p>At least twice monthly: mid-cycle and near bill cycle end.</p></div>
                            <div><h4 class="font-semibold">8. Can this reduce my bill?</h4><p>Yes, by helping you identify and reduce avoidable usage before crossing costly slabs.</p></div>
                            <div><h4 class="font-semibold">9. Should I include previous arrears in units?</h4><p>No. Units represent current cycle consumption. Arrears are separate financial line items.</p></div>
                            <div><h4 class="font-semibold">10. What if I enter negative units?</h4><p>Negative values are invalid. Enter only positive whole-number consumption units.</p></div>
                            <div><h4 class="font-semibold">11. Does this account for taxes and duties?</h4><p>The tool focuses on core slab estimate. Bill-level statutory additions can vary and affect final payable amount.</p></div>
                            <div><h4 class="font-semibold">12. Can I print my estimate?</h4><p>Yes. Use the print action in the result section to save or share records.</p></div>
                            <div><h4 class="font-semibold">13. Can I share estimate with family?</h4><p>Yes. Use the share option to copy and send your estimated result quickly.</p></div>
                            <div><h4 class="font-semibold">14. Why does summer raise bills sharply?</h4><p>Cooling appliances can increase units fast, often pushing usage into higher slab ranges.</p></div>
                            <div><h4 class="font-semibold">15. Can I estimate annual cost?</h4><p>Yes. Use month-by-month seasonal scenarios rather than one-month multiplication.</p></div>
                            <div><h4 class="font-semibold">16. What is the best input source?</h4><p>Your latest official bill and expected appliance usage pattern are best for realistic estimates.</p></div>
                            <div><h4 class="font-semibold">17. Does reducing 20 units always save same amount?</h4><p>Not always. Savings depend on which slab those units fall into.</p></div>
                            <div><h4 class="font-semibold">18. Can renters use this tool?</h4><p>Yes. It helps tenants forecast monthly utility spend more accurately.</p></div>
                            <div><h4 class="font-semibold">19. Why reconcile estimates monthly?</h4><p>It improves future prediction accuracy and highlights billing pattern changes early.</p></div>
                            <div><h4 class="font-semibold">20. Is zero usage possible?</h4><p>Yes, but fixed minimum or standing components in actual billing may still apply depending on connection terms.</p></div>
                            <div><h4 class="font-semibold">21. What if my meter reading seems wrong?</h4><p>Use calculator as reference and raise a formal check request through your utility support channels.</p></div>
                            <div><h4 class="font-semibold">22. Can I trust one estimate forever?</h4><p>No. Re-estimate regularly because usage and billing conditions change over time.</p></div>
                            <div><h4 class="font-semibold">23. Is this useful for small shops?</h4><p>Yes, especially for tracking cost impact of refrigeration, lighting, and machinery runtime.</p></div>
                            <div><h4 class="font-semibold">24. What is the easiest way to save?</h4><p>Prevent unnecessary high-load usage during peak periods and maintain efficient appliance settings.</p></div>
                            <div><h4 class="font-semibold">25. What single habit gives best results?</h4><p>Track units consistently and act early before you cross into expensive slab ranges.</p></div>
                        </div>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Key Takeaways</h3>
                        <ul class="list-disc pl-6 space-y-2 mb-4">
                            <li><strong>APSPDCL / APEPDCL Electricity Bill Calculator</strong> helps you forecast monthly costs quickly.</li>
                            <li>Slab-wise visibility is the most useful part of bill planning.</li>
                            <li>Correct unit input and proper DISCOM selection are critical for reliable estimates.</li>
                            <li>Use scenario planning to prepare for seasonal consumption changes.</li>
                            <li>Always validate estimate insights against your final official bill.</li>
                        </ul>

                        <h3 class="text-xl font-semibold mt-8 mb-3">Conclusion</h3>
                        <p class="mb-4">An APSPDCL/APEPDCL bill calculator is more than a convenience tool. It gives you financial clarity, consumption control, and better monthly decision-making. Instead of reacting to bill shocks, you can proactively manage usage and expenses.</p>
                        <p class="mb-0">Use this calculator regularly, compare scenarios, and follow a simple monthly tracking habit. Over time, that consistency can meaningfully reduce electricity spending while keeping your comfort and productivity intact.</p>
                    </div>
                </article>
            </div>
        </main>

       
    </div>

    <script>
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        // Check for saved theme preference
        if (localStorage.getItem('darkMode') === 'true' || 
            (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        });
        
        // Share functionality
        function shareResult() {
            const units = <?= $units ?? 0 ?>;
            const discom = '<?= $discom ?? 'APSPDCL' ?>';
            const total = <?= $total ?? 0 ?>;
            const text = `My ${discom} Electricity Bill Calculation: ${units} units = ₹${total.toFixed(2)} (2026 rates)`;
            const url = window.location.href;
            
            if (navigator.share) {
                navigator.share({
                    title: 'AP Electricity Bill Calculation',
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
            const textToCopy = `${text}\n\nCalculate yours: ${url}`;
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('Calculation copied to clipboard!\nYou can paste it anywhere to share.');
            }).catch(err => {
                console.error('Could not copy text: ', err);
                prompt('Copy this link to share:', url);
            });
        }
        
        // Live calculation (optional enhancement)
        document.addEventListener('DOMContentLoaded', function() {
            const unitInput = document.getElementById('units');
            const liveResult = document.getElementById('live-result');
            
            if (unitInput) {
                unitInput.addEventListener('input', function() {
                    // Implement live calculation if needed
                });
            }
        });
    </script>
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