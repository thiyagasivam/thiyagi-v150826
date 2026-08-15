<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
/**
 * JBVNL Electricity Bill Calculator - 2026 Tariff Version
 * 
 * This script calculates electricity bills based on JBVNL's 2026 tariff slabs
 * with options for different connection types (Domestic/Commercial/Industrial).
 */
// ================= CONFIGURATION SECTION =================
const TARIFF_SLABS = [
    ['min' => 0,    'max' => 100,  'rate' => 0.00],
    ['min' => 101,  'max' => 200,  'rate' => 2.35],
    ['min' => 201,  'max' => 400,  'rate' => 4.70],
    ['min' => 401,  'max' => 500,  'rate' => 6.30],
    ['min' => 501,  'max' => 600,  'rate' => 8.40],
    ['min' => 601,  'max' => 800,  'rate' => 9.45],
    ['min' => 801,  'max' => 1000, 'rate' => 10.50],
    ['min' => 1001, 'max' => PHP_INT_MAX, 'rate' => 11.55]
];
const FIXED_CHARGES = [
    'Domestic' => [
        '0-100' => 30,
        '101-200' => 50,
        '201+' => 70
    ],
    'Commercial' => [
        'default' => 100
    ],
    'Industrial' => [
        'default' => 100
    ]
];
const TAX_RATE = 0.05; // 5% tax
// ================= INITIALIZATION SECTION =================
$units = (int)($_POST['units'] ?? 0);
$category = $_POST['category'] ?? 'Domestic';
$billDetails = [
    'total' => 0,
    'energy_charges' => 0,
    'fixed_charges' => 0,
    'tax_amount' => 0,
    'slab_breakdown' => []
];
// ================= CALCULATION SECTION =================
if ($units > 0) {
    // Calculate slab-wise charges
    $remainingUnits = $units;
    foreach (TARIFF_SLABS as $slab) {
        if ($remainingUnits <= 0) break;
        $slabUnits = min($remainingUnits, $slab['max'] - $slab['min']);
        if ($slabUnits <= 0) continue;
        $slabCost = $slabUnits * $slab['rate'];
        $billDetails['energy_charges'] += $slabCost;
        $billDetails['slab_breakdown'][] = [
            'range' => ($slab['min'] + 1) . '-' . ($slab['max'] == PHP_INT_MAX ? 'Above' : $slab['max']),
            'units' => $slabUnits,
            'rate' => $slab['rate'],
            'cost' => $slabCost
        ];
        $remainingUnits -= $slabUnits;
    }
    // Calculate fixed charges based on category
    if ($category === 'Domestic') {
        if ($units <= 100) {
            $billDetails['fixed_charges'] = FIXED_CHARGES['Domestic']['0-100'];
        } elseif ($units <= 200) {
            $billDetails['fixed_charges'] = FIXED_CHARGES['Domestic']['101-200'];
        } else {
            $billDetails['fixed_charges'] = FIXED_CHARGES['Domestic']['201+'];
        }
    } else {
        $billDetails['fixed_charges'] = FIXED_CHARGES[$category]['default'];
    }
    // Calculate tax and total bill
    $billDetails['tax_amount'] = $billDetails['energy_charges'] * TAX_RATE;
    $billDetails['total'] = $billDetails['energy_charges'] + $billDetails['fixed_charges'] + $billDetails['tax_amount'];
}
// ================= VIEW SECTION =================
$pageTitle = "JBVNL Electricity Bill Calculator - Jharkhand Power Tariff Estimator 2026";
$pageDescription = "Use our free JBVNL electricity bill calculator to estimate your Jharkhand power consumption charges based on 2026 tariff slabs.";
?>
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="JBVNL bill calculator, Jharkhand electricity bill, JBVNL tariff 2026, power bill calculator">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "JBVNL Electricity Bill Calculator",
        "description": "<?= addslashes($pageDescription) ?>",
        "applicationCategory": "Utility",
        "operatingSystem": "Web"
    }
    </script>
    <style>
        .slab-row:nth-child(even) {
            background-color: #f8f9fa;
        }
        .print-only {
            display: none;
        }
        @media print {
            .no-print {
                display: none;
            }
            .print-only {
                display: block;
            }
            body {
                background-color: white;
                color: black;
            }
            .break-before {
                page-break-before: always;
            }
        }
        .calculator-header {
            background-color: #10b981; /* emerald-500 */
            color: white;
        }
        .bill-result {
            border-left: 4px solid #10b981; /* emerald-500 */
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-100">
    <div class="container mx-auto py-8 px-4 max-w-4xl">
        <header class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-emerald-600 mb-2">JBVNL Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">Estimate your Jharkhand power bill using updated tariff rates</p>
        </header>
        <div class="flex justify-center">
            <div class="w-full md:w-8/12 lg:w-6/12">
                <div class="bg-white shadow-md rounded-lg mb-6 overflow-hidden no-print">
                    <div class="calculator-header px-6 py-4">
                        <h2 class="text-lg font-semibold mb-0">Enter Consumption Details</h2>
                    </div>
                    <div class="px-6 py-5">
                        <form method="post">
                            <div class="mb-4">
                                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Connection Type</label>
                                <select id="category" name="category" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="Domestic" <?= $category == 'Domestic' ? 'selected' : '' ?>>Domestic</option>
                                    <option value="Commercial" <?= $category == 'Commercial' ? 'selected' : '' ?>>Commercial</option>
                                    <option value="Industrial" <?= $category == 'Industrial' ? 'selected' : '' ?>>Industrial</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Units Consumed (kWh)</label>
                                <input type="number" id="units" name="units" min="1" value="<?= $units ?>" 
                                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter units consumed" required>
                            </div>
                            <button type="submit" class="bg-emerald-500 hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                                Calculate Bill
                            </button>
                        </form>
                    </div>
                </div>
                <?php if ($units > 0): ?>
                <div class="bg-white shadow-md rounded-lg mb-6 overflow-hidden break-before">
                    <div class="calculator-header px-6 py-4">
                        <h2 class="text-lg font-semibold mb-0">Bill Calculation Result</h2>
                        <div class="print-only text-white text-sm mt-1">
                            <p>Calculated on: <?= date('d/m/Y H:i') ?></p>
                        </div>
                    </div>
                    <div class="px-6 py-5">
                        <div class="mb-6">
                            <p class="text-gray-600 mb-1"><span class="font-medium">Connection Type:</span> <span class="font-bold"><?= htmlspecialchars($category) ?></span></p>
                            <p class="text-gray-600 mb-1"><span class="font-medium">Units Consumed:</span> <span class="font-bold"><?= $units ?> kWh</span></p>
                        </div>
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold mb-3 text-gray-800">Slab-wise Breakdown</h3>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range</th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹)</th>
                                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Cost (₹)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php foreach ($billDetails['slab_breakdown'] as $slab): ?>
                                        <tr class="slab-row">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $slab['range'] ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right"><?= $slab['units'] ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right"><?= number_format($slab['rate'], 2) ?></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-right"><?= number_format($slab['cost'], 2) ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="mb-6 bill-result pl-4 border-l-4 border-emerald-500">
                            <p class="text-gray-600 mb-1"><span class="font-medium">Energy Charges:</span> <span class="font-bold">₹<?= number_format($billDetails['energy_charges'], 2) ?></span></p>
                            <p class="text-gray-600 mb-1"><span class="font-medium">Fixed Charges:</span> <span class="font-bold">₹<?= number_format($billDetails['fixed_charges'], 2) ?></span></p>
                            <p class="text-gray-600 mb-1"><span class="font-medium">Tax (<?= (TAX_RATE * 100) ?>%):</span> <span class="font-bold">₹<?= number_format($billDetails['tax_amount'], 2) ?></span></p>
                        </div>
                        <div class="bg-emerald-100 border border-emerald-400 text-emerald-700 px-4 py-3 rounded relative">
                            <p class="text-xl font-bold mb-0">Total Estimated Bill: ₹<?= number_format($billDetails['total'], 2) ?></p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-2 justify-center mt-6 no-print">
                            <button onclick="window.print()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                                <i class="bi bi-printer mr-2"></i> Print Bill
                            </button>
                            <button onclick="shareViaWhatsApp()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                                <i class="bi bi-whatsapp mr-2"></i> Share via WhatsApp
                            </button>
                            <button onclick="shareBill()" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                                <i class="bi bi-share mr-2"></i> Share Link
                            </button>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden no-print">
                    <div class="px-6 py-5">
                        <h2 class="text-lg font-semibold mb-3 text-gray-800">About JBVNL Electricity Bill Calculator</h2>
                        <p class="text-gray-600 mb-4">
                            This calculator helps residents and businesses of Jharkhand estimate their electricity bills based on the latest 2026 tariff rates from Jharkhand Bijli Vitran Nigam Ltd (JBVNL).
                        </p>
                        <h3 class="text-md font-semibold mb-2 text-gray-800">Current Tariff Slabs (2026)</h3>
                        <ul class="list-disc pl-5 text-gray-600 mb-4">
                            <?php foreach (TARIFF_SLABS as $slab): ?>
                            <li><?= ($slab['min'] + 1) ?> - <?= $slab['max'] == PHP_INT_MAX ? 'Above' : $slab['max'] ?> units: ₹<?= number_format($slab['rate'], 2) ?> per unit</li>
                            <?php endforeach; ?>
                        </ul>
                        <p class="text-gray-600 text-sm">
                            Note: The bill is calculated using slab rates where units in each range are charged at the specified rate. Fixed charges and taxes are added as per JBVNL regulations.
                        </p>
                    </div>
                </div>
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

    
    <script>
        function shareBill() {
            if (navigator.share) {
                navigator.share({
                    title: 'My JBVNL Electricity Bill Calculation',
                    text: 'I calculated my JBVNL electricity bill using the 2026 tariff rates. Check it out!',
                    url: window.location.href
                }).catch(err => {
                    console.log('Error sharing:', err);
                });
            } else {
                alert('Share this page: ' + window.location.href);
            }
        }
        function shareViaWhatsApp() {
            const message = `Check my JBVNL electricity bill calculation:
` +
                           `- Units: ${<?= $units ?>} kWh
` +
                           `- Connection: ${<?= json_encode($category) ?>}
` +
                           `- Total: ₹${<?= $units > 0 ? number_format($billDetails['total'], 2, '.', '') : '0.00' ?>}
` +
                           `View details: ${window.location.href}`;
            const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        }
    </script>
<?php include '../footer.php';?>
</html>