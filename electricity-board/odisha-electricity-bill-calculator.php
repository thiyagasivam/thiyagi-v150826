
<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
/**
 * Odisha Electricity Bill Calculator (2026)
 * Single-file PHP solution with Tailwind CSS UI
 */
// Define tariff slabs (2026 rates)
$tariff_slabs = [
    ['min' => 1, 'max' => 100, 'rate' => 0.00],
    ['min' => 101, 'max' => 200, 'rate' => 2.35],
    ['min' => 201, 'max' => 400, 'rate' => 4.70],
    ['min' => 401, 'max' => 500, 'rate' => 6.30],
    ['min' => 501, 'max' => 600, 'rate' => 8.40],
    ['min' => 601, 'max' => 800, 'rate' => 9.45],
    ['min' => 801, 'max' => 1000, 'rate' => 10.50],
    ['min' => 1001, 'max' => PHP_INT_MAX, 'rate' => 11.55]
];

// Initialize variables
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$discom = isset($_POST['discom']) ? $_POST['discom'] : 'TPCODL';
$total_cost = 0;
$slab_breakdown = [];

// Calculate bill if units are provided
if ($units > 0) {
    $remaining_units = $units;
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = min($remaining_units, $slab['max'] - $slab['min'] + 1);
        if ($slab_units <= 0) continue;
        
        $slab_cost = $slab_units * $slab['rate'];
        $slab_breakdown[] = [
            'range' => ($slab['min'] == 1 ? 1 : $slab['min']) . ' - ' . ($slab['max'] == PHP_INT_MAX ? 'Above' : $slab['max']),
            'units' => $slab_units,
            'rate' => $slab['rate'],
            'cost' => $slab_cost
        ];
        
        $total_cost += $slab_cost;
        $remaining_units -= $slab_units;
    }
}
?>
    <title>Odisha Electricity Bill Calculator 2026 - Odisha Power Distribution</title>
    <meta name="description" content="Calculate your Odisha electricity bill with the latest 2026 tariff rates for TPCODL, NESCO, and WESCO DISCOMs.">

    <style>
        :root {
            --odisha-green: #166534;
            --odisha-light: #dcfce7;
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
            border-top: 4px solid var(--odisha-green);
        }
        
        .odisha-header {
            color: var(--odisha-green);
            font-weight: 600;
        }
        
        .bill-breakdown {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .total-box {
            background-color: var(--odisha-light);
            border-left: 4px solid var(--odisha-green);
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
            <h1 class="text-3xl font-bold text-green-800 mb-2">Odisha Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">Calculate your Odisha power bill with latest tariff rates</p>
        </header>
        
        <div class="calculator-card">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="discom" class="block text-gray-700 text-sm font-bold mb-2">Select DISCOM</label>
                        <select id="discom" name="discom" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="TPCODL" <?php echo $discom == 'TPCODL' ? 'selected' : ''; ?>>TPCODL</option>
                            <option value="NESCO" <?php echo $discom == 'NESCO' ? 'selected' : ''; ?>>NESCO</option>
                            <option value="WESCO" <?php echo $discom == 'WESCO' ? 'selected' : ''; ?>>WESCO</option>
                        </select>
                    </div>
                    
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
                </div>
                
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full md:w-auto">
                    Calculate Bill
                </button>
            </form>
            
            <?php if ($units > 0): ?>
            <div class="bill-breakdown mt-8">
                <h3 class="text-xl font-semibold mb-4 odisha-header">Bill Breakdown for <?php echo htmlspecialchars($discom); ?></h3>
                
                <h5 class="text-lg font-medium mb-3">Slab-wise Calculation</h5>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 slab-table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab (Units)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/Unit)</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cost (₹)</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($slab_breakdown as $slab): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['range']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['units']; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo number_format($slab['rate'], 2); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo number_format($slab['cost'], 2); ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr class="bg-green-50 font-bold">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Total</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?php echo $units; ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">₹<?php echo number_format($total_cost, 2); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="total-box mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-700">Total units consumed: <span class="font-bold"><?php echo $units; ?></span></p>
                        </div>
                        <div class="md:text-right">
                            <h4 class="text-2xl font-bold text-green-800">Total Bill: ₹<?php echo number_format($total_cost, 2); ?></h4>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-6 no-print">
                    <div>
                        <button onclick="window.print()" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fas fa-print mr-2"></i> Print Bill
                        </button>
                    </div>
                    <div>
                        <button onclick="shareBill()" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="bg-green-50 border border-green-200 rounded-lg p-4 mt-8 no-print">
                <h5 class="text-lg font-semibold odisha-header mb-2">About Odisha Electricity Rates</h5>
                <p class="text-gray-700 text-sm">
                    These calculations are based on sample tariff rates for Odisha. Actual bills may vary based on 
                    official notifications from TPCODL, NESCO, or WESCO.
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
        function shareBill() {
            if (navigator.share) {
                navigator.share({
                    title: 'Odisha Electricity Bill Calculation',
                    text: 'Check my Odisha electricity bill calculation: ₹<?php echo $total_cost ?? "0.00"; ?> for <?php echo $units ?? "0"; ?> units',
                    url: window.location.href
                }).catch(err => {
                    console.log('Error sharing:', err);
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const text = `Check my Odisha electricity bill calculation: ₹<?php echo $total_cost ?? "0.00"; ?> for <?php echo $units ?? "0"; ?> units\n${window.location.href}`;
                navigator.clipboard.writeText(text).then(() => {
                    alert('Link copied to clipboard!');
                }).catch(err => {
                    console.log('Could not copy text: ', err);
                });
            }
        }
    </script>
</body>
<?php include '../footer.php';?>
</html>