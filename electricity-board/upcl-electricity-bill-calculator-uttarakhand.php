<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define UPCL 2026 tariff slabs for domestic residential consumers
$tariff_slabs = [
    ['from' => 0, 'to' => 100, 'rate' => 3.25],
    ['from' => 101, 'to' => 200, 'rate' => 4.70],
    ['from' => 201, 'to' => 300, 'rate' => 6.00],
    ['from' => 301, 'to' => 400, 'rate' => 6.50],
    ['from' => 401, 'to' => PHP_INT_MAX, 'rate' => 7.00]
];

// Fixed charges for domestic consumers (per month)
$fixed_charges = 110;

// Default values
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$include_fixed_charges = isset($_POST['include_fixed_charges']) ? true : false;

// Calculate bill
$total = 0;
$details = [];

if ($units > 0) {
    foreach ($tariff_slabs as $slab) {
        if ($units > $slab['from']) {
            $slab_units = min($units, $slab['to']) - $slab['from'];
            if ($slab_units > 0) {
                $slab_amount = $slab_units * $slab['rate'];
                $total += $slab_amount;
                $details[] = [
                    'range' => ($slab['from'] + 1) . ' - ' . ($slab['to'] == PHP_INT_MAX ? '∞' : $slab['to']),
                    'units' => $slab_units,
                    'rate' => $slab['rate'],
                    'amount' => $slab_amount
                ];
            }
        }
    }
    
    // Add fixed charges if selected
    if ($include_fixed_charges) {
        $total += $fixed_charges;
    }
}
?>
<title>UPCL Bill Calculator (2026) - Uttarakhand Electricity Bill Estimator</title>
    <meta name="description" content="Calculate your UPCL electricity bill for 2026 based on domestic residential tariff slabs. Includes fixed charges and accurate calculations.">
    
    <!-- Tailwind CSS via CDN -->
    
    <!-- Lucide Icons via CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <script>
        // Live calculation with JavaScript
        function calculateLive() {
            const units = parseFloat(document.getElementById('units').value) || 0;
            const includeFixed = document.getElementById('include_fixed_charges').checked;
            
            // Tariff slabs (same as PHP)
            const slabs = [
                {from: 0, to: 100, rate: 3.25},
                {from: 101, to: 200, rate: 4.70},
                {from: 201, to: 300, rate: 6.00},
                {from: 301, to: 400, rate: 6.50},
                {from: 401, to: Infinity, rate: 7.00}
            ];
            
            let total = 0;
            let details = [];
            
            if (units > 0) {
                slabs.forEach(slab => {
                    if (units > slab.from) {
                        const slabUnits = Math.min(units, slab.to) - slab.from;
                        if (slabUnits > 0) {
                            const slabAmount = slabUnits * slab.rate;
                            total += slabAmount;
                            details.push({
                                range: (slab.from + 1) + ' - ' + (slab.to === Infinity ? '∞' : slab.to),
                                units: slabUnits,
                                rate: slab.rate,
                                amount: slabAmount.toFixed(2)
                            });
                        }
                    }
                });
                
                // Add fixed charges if selected
                if (includeFixed) {
                    total += 110; // Fixed charges
                }
                
                // Update the UI
                document.getElementById('total_amount').textContent = total.toFixed(2);
                
                // Update details table
                const detailsBody = document.getElementById('details_body');
                detailsBody.innerHTML = '';
                details.forEach(item => {
                    const row = document.createElement('tr');
                    row.className = 'border-b border-gray-200 dark:border-gray-700';
                    row.innerHTML = `
                        <td class="px-4 py-2">${item.range}</td>
                        <td class="px-4 py-2 text-right">${item.units}</td>
                        <td class="px-4 py-2 text-right">₹${item.rate.toFixed(2)}</td>
                        <td class="px-4 py-2 text-right">₹${item.amount}</td>
                    `;
                    detailsBody.appendChild(row);
                });
            } else {
                document.getElementById('total_amount').textContent = '0.00';
                document.getElementById('details_body').innerHTML = '';
            }
        }
        
        // Print the bill
        function printBill() {
            window.print();
        }
        
        // Share the calculator
        function shareCalculator() {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Check out this UPCL Electricity Bill Calculator for 2026 - My estimated bill is ₹" + 
                                         document.getElementById('total_amount').textContent);
            
            if (navigator.share) {
                // Use Web Share API if available
                navigator.share({
                    title: 'UPCL Bill Calculator',
                    text: 'Calculate your UPCL electricity bill for 2026',
                    url: window.location.href
                }).catch(err => {
                    console.log('Error sharing:', err);
                });
            } else {
                // Fallback to WhatsApp
                window.open(`https://wa.me/?text=${text} ${url}`, '_blank');
            }
        }
        
        // Initialize dark/light theme
        function initTheme() {
            const html = document.documentElement;
            
            // Check for saved theme preference or use system preference
            if (localStorage.getItem('theme') === 'dark' || 
                (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                html.classList.add('dark');
            } else {
                html.classList.remove('dark');
            }
        }
        
        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initTheme();
            calculateLive(); // Initial calculation
            lucide.createIcons(); // Initialize Lucide icons
            
            // Add event listeners for live calculation
            document.getElementById('units').addEventListener('input', calculateLive);
            document.getElementById('include_fixed_charges').addEventListener('change', calculateLive);
        });
    </script>
    
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .print-content, .print-content * {
                visibility: visible;
            }
            .print-content {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-200">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-green-600 dark:text-green-400">UPCL Electricity Bill Calculator</h1>
            <p class="text-gray-600 dark:text-gray-400 mt-2">2026 Domestic Residential Tariff Calculator for Uttarakhand</p>
        </header>

        <!-- Calculator Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-8 print-content">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4 flex items-center">
                    <i data-lucide="calculator" class="mr-2"></i> Bill Calculator
                </h2>
                
                <form method="POST" class="space-y-4">
                    <!-- Units Input -->
                    <div>
                        <label for="units" class="block text-sm font-medium mb-1">Enter Units Consumed (kWh)</label>
                        <div class="relative">
                            <input type="number" id="units" name="units" value="<?= $units ?>" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700"
                                min="0" step="1" placeholder="Enter units">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <i data-lucide="zap" class="text-yellow-500"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Options -->
                    <div class="flex items-center">
                        <input type="checkbox" id="include_fixed_charges" name="include_fixed_charges" 
                            class="w-4 h-4 text-green-600 rounded focus:ring-green-500 dark:focus:ring-green-600" 
                            <?= $include_fixed_charges ? 'checked' : '' ?>>
                        <label for="include_fixed_charges" class="ml-2 text-sm">Include Fixed Charges (₹<?= $fixed_charges ?>/month)</label>
                    </div>
                    
                    <!-- Result -->
                    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4 mt-4">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="font-semibold text-lg">Estimated Total Bill</h3>
                                <p class="text-sm text-green-700 dark:text-green-300">Based on UPCL 2026 domestic rates</p>
                            </div>
                            <div class="text-3xl font-bold text-green-600 dark:text-green-400">
                                ₹<span id="total_amount"><?= number_format($total, 2) ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="flex flex-wrap gap-3 mt-6 no-print">
                        <button type="button" onclick="calculateLive()" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition flex items-center justify-center flex-1">
                            <i data-lucide="refresh-cw" class="mr-2"></i> Calculate Bill
                        </button>
                        <button type="button" onclick="printBill()" class="px-6 py-3 bg-gray-200 dark:bg-gray-700 rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition flex items-center justify-center flex-1">
                            <i data-lucide="printer" class="mr-2"></i> Print
                        </button>
                        <button type="button" onclick="shareCalculator()" class="px-6 py-3 bg-blue-100 dark:bg-blue-900/50 text-blue-800 dark:text-blue-200 rounded-lg hover:bg-blue-200 dark:hover:bg-blue-800 transition flex items-center justify-center flex-1">
                            <i data-lucide="share-2" class="mr-2"></i> Share
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Bill Details -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-8 print-content">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4 flex items-center">
                    <i data-lucide="file-text" class="mr-2"></i> Bill Calculation Details
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="px-4 py-2 text-left">Unit Range</th>
                                <th class="px-4 py-2 text-right">Units</th>
                                <th class="px-4 py-2 text-right">Rate (₹)</th>
                                <th class="px-4 py-2 text-right">Amount (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="details_body">
                            <?php if ($units > 0): ?>
                                <?php foreach ($details as $detail): ?>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-4 py-2"><?= $detail['range'] ?></td>
                                        <td class="px-4 py-2 text-right"><?= $detail['units'] ?></td>
                                        <td class="px-4 py-2 text-right"><?= number_format($detail['rate'], 2) ?></td>
                                        <td class="px-4 py-2 text-right"><?= number_format($detail['amount'], 2) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php if ($include_fixed_charges): ?>
                                    <tr class="border-b border-gray-200 dark:border-gray-700">
                                        <td class="px-4 py-2" colspan="3">Fixed Charges</td>
                                        <td class="px-4 py-2 text-right"><?= number_format($fixed_charges, 2) ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="px-4 py-4 text-center text-gray-500">Enter units to see calculation details</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Tariff Information -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden print-content">
            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4 flex items-center">
                    <i data-lucide="info" class="mr-2"></i> 2026 Domestic Tariff Slabs (UPCL)
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="px-4 py-2 text-left">Unit Range</th>
                                <th class="px-4 py-2 text-right">Rate per Unit (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tariff_slabs as $slab): ?>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-2">
                                        <?php if ($slab['to'] == PHP_INT_MAX): ?>
                                            Above <?= $slab['from'] ?> units
                                        <?php else: ?>
                                            <?= $slab['from'] + 1 ?> - <?= $slab['to'] ?> units
                                        <?php endif; ?>
                                    </td>
                                    <td class="px-4 py-2 text-right"><?= number_format($slab['rate'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-6 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg p-4">
                    <h3 class="font-semibold text-lg text-yellow-800 dark:text-yellow-200 flex items-center">
                        <i data-lucide="alert-circle" class="mr-2"></i> Important Notes
                    </h3>
                    <ul class="list-disc pl-5 mt-2 text-yellow-700 dark:text-yellow-300 space-y-1">
                        <li>This calculator is for <strong>domestic residential consumers</strong> only.</li>
                        <li>Fixed charges: ₹<?= $fixed_charges ?> per month (included if checked).</li>
                        <li>Rates are based on UPCL's 2026 domestic tariff structure.</li>
                        <li>This is an estimate only. Your actual bill may vary based on additional charges.</li>
                        <li>For official billing information, please visit UPCL's website.</li>
                    </ul>
                </div>
            </div>
        </div>
        
       
    </div>
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
</body>
<?php include '../footer.php';?>
</html>