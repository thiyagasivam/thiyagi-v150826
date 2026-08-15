<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
/**
 * CSPDCL Electricity Bill Calculator (2026)
 * Single-file PHP solution with Tailwind CSS UI
 */
// CSPDCL 2026 Domestic Tariff Slabs (placeholder rates - verify with official sources)
$slab_rates = [
    ['from' => 0, 'to' => 50, 'rate' => 0.00, 'fixed' => 10],
    ['from' => 51, 'to' => 100, 'rate' => 2.25, 'fixed' => 20],
    ['from' => 101, 'to' => 200, 'rate' => 3.50, 'fixed' => 30],
    ['from' => 201, 'to' => 300, 'rate' => 5.00, 'fixed' => 40],
    ['from' => 301, 'to' => 500, 'rate' => 6.50, 'fixed' => 60],
    ['from' => 501, 'to' => PHP_INT_MAX, 'rate' => 7.50, 'fixed' => 80]
];

$tax_rate = 0.05; // 5% tax (placeholder)

// Process form submission
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$phase = isset($_POST['phase']) ? $_POST['phase'] : 'single';
$apply_subsidy = isset($_POST['subsidy']) ? true : false;

$bill_details = [];
$total_energy_charge = 0;
$total_fixed_charge = 0;
$subsidy_amount = 0;

if ($units > 0) {
    // Calculate charges based on slabs
    foreach ($slab_rates as $slab) {
        if ($units > $slab['from']) {
            $slab_units = min($units, $slab['to']) - $slab['from'];
            if ($slab_units > 0) {
                $slab_charge = $slab_units * $slab['rate'];
                $bill_details[] = [
                    'range' => ($slab['from'] == 0 ? 1 : $slab['from']) . '-' . ($slab['to'] == PHP_INT_MAX ? 'Above' : $slab['to']),
                    'units' => $slab_units,
                    'rate' => $slab['rate'],
                    'charge' => $slab_charge,
                    'fixed' => $slab['fixed']
                ];
                $total_energy_charge += $slab_charge;
                $total_fixed_charge = $slab['fixed']; // Fixed charge is based on highest slab used
            }
        }
    }
    
    // Apply subsidy if selected (example: 20% off for first 200 units)
    if ($apply_subsidy && $units <= 200) {
        $subsidy_amount = min($total_energy_charge * 0.2, 150); // Max subsidy of ₹150
    }
    
    $subtotal = $total_energy_charge + $total_fixed_charge - $subsidy_amount;
    $tax = $subtotal * $tax_rate;
    $total_bill = $subtotal + $tax;
}
?>
    <title>CSPDCL Electricity Bill Calculator 2026 - Chhattisgarh Power</title>
    <meta name="description" content="Calculate your Chhattisgarh electricity bill with the latest CSPDCL 2026 tariff rates. Instant estimates with subsidy options.">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --cspdcl-green: #166534;
            --cspdcl-light: #dcfce7;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        
        .calculator-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 2rem auto;
            padding: 2rem;
            border-top: 4px solid var(--cspdcl-green);
        }
        
        .cspdcl-header {
            color: var(--cspdcl-green);
            font-weight: 600;
        }
        
        .bill-breakdown {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .total-box {
            background-color: var(--cspdcl-light);
            border-left: 4px solid var(--cspdcl-green);
            padding: 1.25rem;
            border-radius: 8px;
            margin-top: 1.5rem;
        }
        
        .slab-table {
            width: 100%;
        }
        
        .slab-table th {
            background-color: #e9ecef;
        }
        
        @media print {
            .no-print {
                display: none !important;
            }
            
            body {
                background-color: white !important;
            }
            
            .calculator-card {
                box-shadow: none !important;
                padding: 0 !important;
                border-top: none !important;
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
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <header class="text-center mb-10">
            <h1 class="text-3xl font-bold text-green-800 mb-2">CSPDCL Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">Calculate your Chhattisgarh power bill with latest tariff rates</p>
        </header>
        
        <div class="calculator-card">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Units Consumed</label>
                        <div class="relative">
                            <input 
                                type="number" 
                                id="units" 
                                name="units" 
                                value="<?php echo $units; ?>" 
                                min="0" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline pr-10"
                                placeholder="e.g., 250"
                            >
                            <span class="absolute right-3 top-2.5 text-gray-500">kWh</span>
                        </div>
                    </div>
                    
                    <div>
                        <label for="phase" class="block text-gray-700 text-sm font-bold mb-2">Connection Type</label>
                        <select id="phase" name="phase" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="single" <?php echo $phase == 'single' ? 'selected' : ''; ?>>Single Phase</option>
                            <option value="three" <?php echo $phase == 'three' ? 'selected' : ''; ?>>Three Phase</option>
                        </select>
                    </div>
                    
                    <div>
                        <div class="flex items-center mt-6">
                            <input 
                                class="h-4 w-4 text-green-600 border-gray-300 rounded focus:ring-green-500" 
                                type="checkbox" 
                                id="subsidyCheck"
                                name="subsidy" 
                                <?php echo $apply_subsidy ? 'checked' : ''; ?>
                            >
                            <label class="ml-2 block text-sm text-gray-900" for="subsidyCheck">
                                <i class="bi bi-gift mr-2"></i> Apply Subsidy (20% off first 200 units)
                            </label>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full md:w-auto">
                    Calculate Bill
                </button>
            </form>
            
            <?php if ($units > 0): ?>
            <div class="bill-breakdown mt-8">
                <h3 class="text-xl font-semibold mb-4 cspdcl-header flex items-center">
                    <i class="bi bi-receipt mr-2"></i> Bill Breakdown
                </h3>
                
                <h5 class="text-lg font-medium mb-3">Slab-wise Calculation</h5>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 slab-table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab (Units)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/Unit)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Energy Charge (₹)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fixed Charge (₹)</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($bill_details as $detail): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $detail['range']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $detail['units']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($detail['rate'], 2); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo number_format($detail['charge'], 2); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($detail['fixed'], 2); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="total-box mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="mb-1"><strong>Total Energy Charge:</strong> ₹<?php echo number_format($total_energy_charge, 2); ?></p>
                            <p class="mb-1"><strong>Total Fixed Charge:</strong> ₹<?php echo number_format($total_fixed_charge, 2); ?></p>
                            <?php if ($subsidy_amount > 0): ?>
                                <p class="text-green-600 mb-1"><strong>Subsidy Applied:</strong> -₹<?php echo number_format($subsidy_amount, 2); ?></p>
                            <?php endif; ?>
                            <p class="mb-1"><strong>Tax (<?php echo ($tax_rate*100); ?>%):</strong> ₹<?php echo number_format($tax, 2); ?></p>
                        </div>
                        <div class="md:text-right">
                            <h4 class="text-2xl font-bold text-green-800">Total Bill: ₹<?php echo number_format($total_bill, 2); ?></h4>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-6 no-print">
                    <div>
                        <button onclick="window.print()" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="bi bi-printer mr-2"></i> Print Bill
                        </button>
                    </div>
                    <div>
                        <button id="shareBtn" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="bi bi-share mr-2"></i> Share
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="bg-green-50 border border-green-200 rounded-lg p-4 mt-8 no-print">
                <h5 class="text-lg font-semibold cspdcl-header flex items-center mb-2">
                    <i class="bi bi-info-circle mr-2"></i> About CSPDCL Rates
                </h5>
                <p class="text-gray-700 text-sm">
                    These calculations are based on sample tariff rates for Chhattisgarh. Actual bills may vary based on 
                    official CSPDCL notifications. Fixed charges are slab-based and energy charges apply progressively.
                </p>
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
        // Share functionality
        document.getElementById('shareBtn').addEventListener('click', function() {
            const shareData = {
                title: 'CSPDCL Electricity Bill Calculator',
                text: `My CSPDCL bill estimate for ${document.getElementById('units').value || '...'} units: ₹<?php echo isset($total_bill) ? number_format($total_bill, 2) : '0.00'; ?>. Calculate yours!`,
                url: window.location.href
            };
            
            if (navigator.share) {
                navigator.share(shareData).catch(err => console.log('Error sharing:', err));
            } else {
                // Fallback for browsers without Web Share API
                const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(shareData.text + ' ' + shareData.url)}`;
                window.open(whatsappUrl, '_blank');
                
                // Copy to clipboard as additional fallback
                navigator.clipboard.writeText(`${shareData.text} ${shareData.url}`).then(() => {
                    alert('Link copied to clipboard!');
                }).catch(err => console.log('Could not copy text: ', err));
            }
        });
    </script>
</body>
<?php include '../footer.php';?>
</html>