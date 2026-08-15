
<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Calculate bill if units are provided
$units = isset($_POST['units']) ? (int)$_POST['units'] : (isset($_GET['units']) ? (int)$_GET['units'] : null);
$billAmount = null;
$slabDetails = [];

if ($units !== null && $units > 0) {
    $result = calculateKSEBBill($units);
    $billAmount = $result['total'];
    $slabDetails = $result['slabs'];
}

function calculateKSEBBill($units) {
    $slabs = [];
    $total = 0;

    // KSEB Residential Slab Rates (2023)
    if ($units <= 50) {
        $slabs[] = ['range' => '1-50', 'rate' => 3.15, 'units' => $units, 'amount' => $units * 3.15];
        $total = $units * 3.15;
    } elseif ($units <= 100) {
        $slabs[] = ['range' => '1-50', 'rate' => 3.15, 'units' => 50, 'amount' => 50 * 3.15];
        $remaining = $units - 50;
        $slabs[] = ['range' => '51-100', 'rate' => 3.70, 'units' => $remaining, 'amount' => $remaining * 3.70];
        $total = (50 * 3.15) + ($remaining * 3.70);
    } elseif ($units <= 150) {
        $slabs[] = ['range' => '1-50', 'rate' => 3.15, 'units' => 50, 'amount' => 50 * 3.15];
        $slabs[] = ['range' => '51-100', 'rate' => 3.70, 'units' => 50, 'amount' => 50 * 3.70];
        $remaining = $units - 100;
        $slabs[] = ['range' => '101-150', 'rate' => 5.50, 'units' => $remaining, 'amount' => $remaining * 5.50];
        $total = (50 * 3.15) + (50 * 3.70) + ($remaining * 5.50);
    } elseif ($units <= 250) {
        $slabs[] = ['range' => '1-50', 'rate' => 3.15, 'units' => 50, 'amount' => 50 * 3.15];
        $slabs[] = ['range' => '51-100', 'rate' => 3.70, 'units' => 50, 'amount' => 50 * 3.70];
        $slabs[] = ['range' => '101-150', 'rate' => 5.50, 'units' => 50, 'amount' => 50 * 5.50];
        $remaining = $units - 150;
        $slabs[] = ['range' => '151-250', 'rate' => 6.50, 'units' => $remaining, 'amount' => $remaining * 6.50];
        $total = (50 * 3.15) + (50 * 3.70) + (50 * 5.50) + ($remaining * 6.50);
    } else {
        $slabs[] = ['range' => '1-50', 'rate' => 3.15, 'units' => 50, 'amount' => 50 * 3.15];
        $slabs[] = ['range' => '51-100', 'rate' => 3.70, 'units' => 50, 'amount' => 50 * 3.70];
        $slabs[] = ['range' => '101-150', 'rate' => 5.50, 'units' => 50, 'amount' => 50 * 5.50];
        $slabs[] = ['range' => '151-250', 'rate' => 6.50, 'units' => 100, 'amount' => 100 * 6.50];
        $remaining = $units - 250;
        $slabs[] = ['range' => '251-Above', 'rate' => 7.50, 'units' => $remaining, 'amount' => $remaining * 7.50];
        $total = (50 * 3.15) + (50 * 3.70) + (50 * 5.50) + (100 * 6.50) + ($remaining * 7.50);
    }

    return ['total' => number_format($total, 2), 'slabs' => $slabs];
}
?>
    <title>KSEB Electricity Bill Calculator 2026 - Kerala State Electricity Board</title>
    <meta name="description" content="Calculate your Kerala electricity bill instantly with the KSEB bill calculator. Get accurate estimates based on the latest residential tariff rates.">
 
    <style>
        :root {
            --kseb-green: #2e7d32;
            --kseb-light: #e8f5e9;
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
            border-top: 4px solid var(--kseb-green);
        }
        
        .result-card {
            border-left: 4px solid var(--kseb-green);
        }
        
        .breakup-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .badge-rate {
            background-color: #3498db;
            font-size: 0.85em;
        }
        
        @media (max-width: 768px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            #units {
                font-size: 1.2rem;
                padding: 12px 15px;
            }
            
            .badge-rate {
                font-size: 0.85em;
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
            <h1 class="text-3xl font-bold text-green-700 mb-2">KSEB Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">Calculate your Kerala electricity charges accurately</p>
        </header>
        
        <div class="max-w-2xl mx-auto">
            <div class="calculator-card">
                <div class="bg-green-700 text-white px-6 py-4 rounded-t-lg -mx-6 -mt-6 mb-6">
                    <h2 class="text-xl font-semibold mb-0">Enter Your Consumption</h2>
                </div>
                
                <form method="POST" class="space-y-6">
                    <div>
                        <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Units Consumed (kWh)</label>
                        <input 
                            type="number" 
                            id="units" 
                            name="units" 
                            value="<?php echo $units; ?>" 
                            min="0" 
                            class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="e.g., 150" 
                            required
                        >
                    </div>
                    
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                        Calculate Bill
                    </button>
                </form>
                
                <?php if ($billAmount !== null): ?>
                <div class="mt-8">
                    <div class="bg-green-50 border-l-4 border-green-600 p-4 rounded">
                        <div class="text-center py-4">
                            <h3 class="text-lg font-medium text-gray-800 mb-2">Bill Calculation Result</h3>
                            <div class="text-4xl font-bold text-green-600 mb-2">₹<?php echo $billAmount; ?></div>
                            <p class="text-gray-600">For <?php echo $units; ?> units consumption</p>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <div class="bg-gray-100 px-4 py-3 rounded-t-lg">
                            <h2 class="text-lg font-medium text-gray-800 mb-0">Bill Breakdown</h2>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white rounded-b-lg">
                                <tbody class="divide-y divide-gray-200">
                                    <?php foreach ($slabDetails as $slab): ?>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['range']; ?> units</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['units']; ?> @ ₹<?php echo $slab['rate']; ?>/unit</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">₹<?php echo number_format($slab['amount'], 2); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-2 justify-center mt-6 no-print">
                        <button onclick="window.print()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fas fa-print mr-2"></i> Print Bill
                        </button>
                        <button onclick="shareBill()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fas fa-share-alt mr-2"></i> Share
                        </button>
                    </div>
                </div>
                <?php endif; ?>
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
                    title: 'KSEB Electricity Bill Calculation',
                    text: 'Check my KSEB electricity bill calculation: ₹<?php echo $billAmount ?? "0.00"; ?> for <?php echo $units ?? "0"; ?> units',
                    url: window.location.href
                }).catch(err => {
                    console.log('Error sharing:', err);
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const text = `Check my KSEB electricity bill calculation: ₹<?php echo $billAmount ?? "0.00"; ?> for <?php echo $units ?? "0"; ?> units\n${window.location.href}`;
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