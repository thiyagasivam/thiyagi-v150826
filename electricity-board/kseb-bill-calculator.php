<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// KSEB 2026 Tariff Slabs (General Domestic)
$slabs = [
    ['min' => 0, 'max' => 50, 'rate' => 1.50],
    ['min' => 51, 'max' => 100, 'rate' => 2.50],
    ['min' => 101, 'max' => 150, 'rate' => 3.50],
    ['min' => 151, 'max' => 200, 'rate' => 4.50],
    ['min' => 201, 'max' => 250, 'rate' => 6.00],
    ['min' => 251, 'max' => 300, 'rate' => 7.00],
    ['min' => 301, 'max' => 350, 'rate' => 7.50],
    ['min' => 351, 'max' => 400, 'rate' => 8.00],
    ['min' => 401, 'max' => 500, 'rate' => 8.50],
    ['min' => 501, 'max' => PHP_FLOAT_MAX, 'rate' => 9.00]
];

// Initialize variables
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$total = 0;
$breakdown = [];
$validInput = true;

// Calculate bill if form is submitted
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
                    'range' => ($slab['max'] === PHP_FLOAT_MAX) ? 
                               $slab['min'] . '+' : 
                               $slab['min'] . '-' . $slab['max'],
                    'units' => $slabUnits,
                    'rate' => $slab['rate'],
                    'cost' => $slabCost
                ];
            }
        }
    }
}
?>
    <title>Kerala Electricity Bill Calculator (KSEB) 2026 – Online Estimator</title>
    <meta name="description" content="Calculate your monthly KSEB electricity bill based on 2026 slab rates. 100% free, mobile-friendly, fast, and accurate.">
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        kerala: {
                            500: '#0d9488',
                            600: '#0d9488',
                        }
                    }
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
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-kerala-600 mb-2">KSEB Bill Calculator 2026</h1>
            <p class="text-gray-600">Calculate your Kerala electricity bill</p>
        </header>
        
        <!-- Calculator Card -->
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <form method="post" class="space-y-4">
                    <div>
                        <label for="units" class="block text-sm font-medium text-gray-700 mb-1">
                            Units Consumed (kWh)
                        </label>
                        <div class="relative">
                            <input type="number" id="units" name="units" 
                                   value="<?= htmlspecialchars($units) ?>" 
                                   min="0" step="1"
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-kerala-500 focus:border-transparent"
                                   placeholder="e.g., 250" required>
                            <span class="absolute right-3 top-3 text-gray-500">units</span>
                        </div>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-kerala-600 hover:bg-kerala-700 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-300">
                        Calculate Bill
                    </button>
                </form>
                
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput): ?>
                    <div class="mt-6 border-t pt-6">
                        <!-- Result Summary -->
                        <div class="bg-kerala-50 p-4 rounded-lg mb-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600">For <span class="font-medium"><?= $units ?></span> units</p>
                                    <p class="text-sm text-gray-500">KSEB Domestic (2026 Rates)</p>
                                </div>
                                <div class="text-2xl font-bold text-kerala-600">₹<?= number_format($total, 2) ?></div>
                            </div>
                        </div>
                        
                        <!-- Slab Breakdown -->
                        <h3 class="text-sm font-medium text-gray-700 mb-2">SLAB BREAKDOWN</h3>
                        <div class="overflow-hidden rounded-lg border border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Range</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($breakdown as $item): ?>
                                    <tr>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900"><?= $item['range'] ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500 text-right"><?= $item['units'] ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500 text-right">₹<?= number_format($item['rate'], 2) ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900 text-right">₹<?= number_format($item['cost'], 2) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr class="bg-gray-50 font-semibold">
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">Total</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 text-right"><?= $units ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 text-right">-</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900 text-right">₹<?= number_format($total, 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="mt-6 flex justify-center gap-3 no-print">
                            <button onclick="window.print()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-lg flex items-center">
                                <i class="fas fa-print mr-2"></i> Print
                            </button>
                            <button onclick="shareResult()" class="bg-blue-100 hover:bg-blue-200 text-blue-800 py-2 px-4 rounded-lg flex items-center">
                                <i class="fas fa-share-alt mr-2"></i> Share
                            </button>
                        </div>
                    </div>
                <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
                    <div class="mt-6 border-t pt-6">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Invalid Input!</strong>
                            <span class="block sm:inline">Please enter a positive number of units.</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Tariff Information -->
        <div class="max-w-md mx-auto mt-8 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">KSEB Domestic Tariff (2026)</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units (kWh)</th>
                                <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/unit)</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($slabs as $slab): ?>
                            <tr>
                                <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-900">
                                    <?= ($slab['max'] === PHP_FLOAT_MAX) ? 
                                        $slab['min'] . ' and above' : 
                                        $slab['min'] . ' - ' . $slab['max'] ?>
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-500 text-right">₹<?= number_format($slab['rate'], 2) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <p class="text-sm text-gray-500 mt-4">* Rates are subject to change by KSEB.</p>
            </div>
        </div>
        
       
    </div>

    <script>
        // Share functionality
        function shareResult() {
            const units = <?= $units ?? 0 ?>;
            const total = <?= $total ?? 0 ?>;
            const text = `My KSEB Bill Calculation: ${units} units = ₹${total.toFixed(2)} (2026 rates)`;
            const url = window.location.href;
            
            if (navigator.share) {
                navigator.share({
                    title: 'KSEB Bill Calculation',
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
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('Calculation copied to clipboard! You can paste it anywhere.');
            }).catch(err => {
                console.log('Could not copy text: ', err);
                prompt('Copy this link to share:', url);
            });
        }
        
        // Live calculation (optional)
        document.addEventListener('DOMContentLoaded', function() {
            const unitInput = document.getElementById('units');
            const liveResult = document.getElementById('live-result');
            
            if (unitInput) {
                unitInput.addEventListener('input', function() {
                    // Implement live calculation here if needed
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