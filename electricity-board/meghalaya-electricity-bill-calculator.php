<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define tariff slabs and rates for 2026 (hypothetical - replace with actual 2026 rates)
$tariff_slabs = [
    ['from' => 0, 'to' => 100, 'rate' => 3.50, 'fixed' => 50],
    ['from' => 101, 'to' => 200, 'rate' => 4.50, 'fixed' => 75],
    ['from' => 201, 'to' => 300, 'rate' => 5.50, 'fixed' => 100],
    ['from' => 301, 'to' => 400, 'rate' => 6.50, 'fixed' => 125],
    ['from' => 401, 'to' => null, 'rate' => 7.50, 'fixed' => 150]
];

// Process form submission
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$subsidy = isset($_POST['subsidy']) ? true : false;
$bill_details = [];
$total = 0;
$fixed_charge = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0) {
    $remaining_units = $units;
    
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = 0;
        if ($slab['to'] === null) {
            $slab_units = $remaining_units;
        } else {
            $slab_units = min($remaining_units, $slab['to'] - $slab['from'] + 1);
        }
        
        $slab_amount = $slab_units * $slab['rate'];
        $fixed_charge = $slab['fixed']; // Fixed charge for the highest slab reached
        
        $bill_details[] = [
            'range' => $slab['from'] . ($slab['to'] ? '-' . $slab['to'] : '+'),
            'units' => $slab_units,
            'rate' => $slab['rate'],
            'amount' => $slab_amount
        ];
        
        $total += $slab_amount;
        $remaining_units -= $slab_units;
    }
    
    $total += $fixed_charge;
    
    // Apply subsidy if selected (hypothetical 20% subsidy)
    if ($subsidy) {
        $subsidy_amount = $total * 0.20;
        $total -= $subsidy_amount;
    }
}
?>
    <meta name="description" content="Calculate your Meghalaya (MePDCL) electricity bill for 2026 using the latest domestic tariff rates. Mobile-friendly, accurate, and easy-to-use calculator.">
    <meta name="keywords" content="Meghalaya electricity bill, MePDCL calculator, 2026 tariff, power bill calculator, electricity cost calculator">
    <meta name="author" content="Meghalaya Power Distribution Corporation Ltd">
    <meta property="og:title" content="Meghalaya Electricity Bill Calculator 2026 | MePDCL">
    <meta property="og:description" content="Calculate your MePDCL electricity bill with the latest 2026 tariff rates.">
    <meta property="og:type" content="website">
<title>Meghalaya Electricity Bill Calculator 2026 | MePDCL</title>
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
            body {
                background: white !important;
                color: black !important;
                font-size: 14px !important;
            }
            .print-container {
                padding: 0 !important;
                margin: 0 !important;
                box-shadow: none !important;
            }
        }
        .slab-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 text-gray-800 font-sans">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-blue-800 mb-2">Meghalaya Electricity Bill Calculator</h1>
            <p class="text-lg text-gray-600">MePDCL Domestic Tariff Calculator for 2026</p>
            <div class="mt-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4">
                <p class="font-semibold">Note:</p>
                <p>This calculator uses the latest 2026 domestic tariff rates for Meghalaya Power Distribution Corporation Ltd (MePDCL).</p>
            </div>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden print-container">
            <form method="post" class="p-6 no-print">
                <div class="mb-6">
                    <label for="units" class="block text-lg font-medium text-gray-700 mb-2">
                        <i class="fas fa-bolt text-yellow-500 mr-2"></i>Enter Units Consumed
                    </label>
                    <input type="number" id="units" name="units" min="0" value="<?= htmlspecialchars($units) ?>" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg" 
                           placeholder="e.g. 250" required>
                </div>

                <div class="mb-6">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="subsidy" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" <?= $subsidy ? 'checked' : '' ?>>
                        <span class="ml-2 text-gray-700">Apply Subsidy (if eligible)</span>
                    </label>
                </div>

                <div class="flex flex-wrap gap-4">
                    <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                        <i class="fas fa-calculator mr-2"></i> Calculate Bill
                    </button>
                    <button type="reset" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-3 px-6 rounded-lg transition duration-200 flex items-center justify-center">
                        <i class="fas fa-redo mr-2"></i> Reset
                    </button>
                </div>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0): ?>
            <div class="border-t border-gray-200 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        <i class="fas fa-file-invoice-dollar text-green-600 mr-2"></i> Bill Details
                    </h2>
                    <div class="flex gap-2 no-print">
                        <button onclick="window.print()" class="bg-gray-100 hover:bg-gray-200 text-gray-800 p-2 rounded-full transition duration-200" title="Print Bill">
                            <i class="fas fa-print"></i>
                        </button>
                        <button id="share-btn" class="bg-gray-100 hover:bg-gray-200 text-gray-800 p-2 rounded-full transition duration-200" title="Share Bill">
                            <i class="fas fa-share-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="mb-6">
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-4">
                        <div class="flex justify-between">
                            <span class="font-semibold">Total Units Consumed:</span>
                            <span><?= $units ?> units</span>
                        </div>
                        <?php if ($subsidy): ?>
                        <div class="flex justify-between text-green-600">
                            <span class="font-semibold">Subsidy Applied:</span>
                            <span>20%</span>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full slab-table">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 text-left">Slab Range</th>
                                    <th class="px-4 py-2 text-left">Units</th>
                                    <th class="px-4 py-2 text-left">Rate (₹/unit)</th>
                                    <th class="px-4 py-2 text-left">Amount (₹)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bill_details as $detail): ?>
                                <tr>
                                    <td class="px-4 py-2"><?= $detail['range'] ?></td>
                                    <td class="px-4 py-2"><?= $detail['units'] ?></td>
                                    <td class="px-4 py-2"><?= number_format($detail['rate'], 2) ?></td>
                                    <td class="px-4 py-2"><?= number_format($detail['amount'], 2) ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr class="font-semibold">
                                    <td class="px-4 py-2">Fixed Charges</td>
                                    <td class="px-4 py-2">-</td>
                                    <td class="px-4 py-2">-</td>
                                    <td class="px-4 py-2"><?= number_format($fixed_charge, 2) ?></td>
                                </tr>
                                <?php if ($subsidy): ?>
                                <tr class="text-green-600 font-semibold">
                                    <td class="px-4 py-2">Subsidy Deduction (20%)</td>
                                    <td class="px-4 py-2">-</td>
                                    <td class="px-4 py-2">-</td>
                                    <td class="px-4 py-2">-<?= number_format($subsidy_amount, 2) ?></td>
                                </tr>
                                <?php endif; ?>
                                <tr class="bg-blue-50 font-bold text-lg">
                                    <td class="px-4 py-3">Total Payable</td>
                                    <td class="px-4 py-3">-</td>
                                    <td class="px-4 py-3">-</td>
                                    <td class="px-4 py-3">₹<?= number_format($total, 2) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 text-sm text-gray-700 no-print">
                    <p class="font-semibold"><i class="fas fa-info-circle mr-1"></i> Disclaimer:</p>
                    <p>This calculation is based on the latest available MePDCL domestic tariff rates for 2026. The actual bill may vary based on additional charges, taxes, or regulatory changes. Please verify with your official bill.</p>
                </div>
            </div>
            <?php endif; ?>
        </main>

        
    </div>

    <script>
        // Web Share API implementation
        document.getElementById('share-btn')?.addEventListener('click', async () => {
            try {
                const shareData = {
                    title: 'Meghalaya Electricity Bill Calculation',
                    text: 'I calculated my MePDCL electricity bill using this calculator. Check it out!',
                    url: window.location.href
                };
                
                if (navigator.share) {
                    await navigator.share(shareData);
                } else {
                    // Fallback for browsers that don't support Web Share API
                    await navigator.clipboard.writeText(window.location.href);
                    alert('Link copied to clipboard!');
                }
            } catch (err) {
                console.error('Error sharing:', err);
                // Fallback to copy URL
                try {
                    await navigator.clipboard.writeText(window.location.href);
                    alert('Link copied to clipboard!');
                } catch (copyErr) {
                    alert('Sharing failed. Please manually copy the URL.');
                }
            }
        });

        // Focus the units input on page load
        window.addEventListener('DOMContentLoaded', () => {
            const unitsInput = document.getElementById('units');
            if (unitsInput) unitsInput.focus();
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