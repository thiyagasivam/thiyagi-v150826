
<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
/**
 * Goa Electricity Bill Calculator (2026)
 * Single-file PHP solution with Tailwind CSS UI
 */
// Define tariff slabs (2026 rates - placeholder, verify with official rates)
$tariff_slabs = [
    ['min' => 0, 'max' => 100, 'rate' => 0.00],
    ['min' => 101, 'max' => 200, 'rate' => 1.50],
    ['min' => 201, 'max' => 500, 'rate' => 3.00],
    ['min' => 501, 'max' => 1000, 'rate' => 6.30],
    ['min' => 1001, 'max' => PHP_INT_MAX, 'rate' => 7.50]
];

// Fixed charges based on consumption
function getFixedCharges($units) {
    if ($units <= 100) return 25;
    if ($units <= 300) return 40;
    if ($units <= 500) return 60;
    return 80;
}

$tax_rate = 0.06; // 6% tax (placeholder)

// Initialize variables
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$total_energy_charge = 0;
$fixed_charges = 0;
$tax_amount = 0;
$total_bill = 0;
$slab_breakdown = [];

// Calculate bill if units are provided
if ($units > 0) {
    $remaining_units = $units;
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = min($remaining_units, $slab['max'] - $slab['min']);
        if ($slab_units <= 0) continue;
        
        $slab_cost = $slab_units * $slab['rate'];
        $slab_breakdown[] = [
            'range' => ($slab['min'] == 0 ? 1 : $slab['min']) . ' - ' . ($slab['max'] == PHP_INT_MAX ? 'Above' : $slab['max']),
            'units' => $slab_units,
            'rate' => $slab['rate'],
            'cost' => $slab_cost
        ];
        
        $total_energy_charge += $slab_cost;
        $remaining_units -= $slab_units;
    }
    
    // Calculate fixed charges
    $fixed_charges = getFixedCharges($units);
    
    // Calculate tax
    $subtotal = $total_energy_charge + $fixed_charges;
    $tax_amount = $subtotal * $tax_rate;
    $total_bill = $subtotal + $tax_amount;
}
?>
    <title>Goa Electricity Bill Calculator 2026 - Goa Power</title>
    <meta name="description" content="Calculate your Goa electricity bill with the latest 2026 tariff rates. Instant estimates for domestic consumers.">
    <!-- Schema.org markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Goa Electricity Bill Calculator",
        "url": "https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator",
        "description": "Calculator for estimating Goa Electricity Department bills based on 2026 slab rates.",
        "applicationCategory": "UtilityApplication",
        "operatingSystem": "Web Browser"
    }
    </script>
    <!-- Remove Foundation CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" crossorigin="anonymous"> -->
    <!-- Add Tailwind CSS -->
    <!-- Foundation Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css">
    <style>
        :root {
            --goa-blue: #1e40af;
            --goa-light: #dbeafe;
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
            border-top: 4px solid var(--goa-blue);
        }
        
        .goa-header {
            color: var(--goa-blue);
            font-weight: 600;
        }
        
        .bill-breakdown {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .total-box {
            background-color: var(--goa-light);
            border-left: 4px solid var(--goa-blue);
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
            <h1 class="text-3xl font-bold text-blue-800 mb-2">Goa Electricity Bill Calculator 2026</h1>
            <p class="text-gray-600">Calculate your Goa power bill with latest tariff rates</p>
        </header>
        
        <div class="calculator-card">
            <form method="POST" class="space-y-6">
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
                            required
                        >
                        <span class="absolute right-3 top-2.5 text-gray-500">kWh</span>
                    </div>
                </div>
                
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full md:w-auto">
                    Calculate Bill
                </button>
            </form>
            
            <?php if ($units > 0): ?>
            <div class="bill-breakdown mt-8">
                <h3 class="text-xl font-semibold mb-4 goa-header flex items-center">
                    <i class="fi-widget mr-2"></i> Bill Breakdown
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
                        </tbody>
                    </table>
                </div>
                
                <div class="total-box mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="mb-1"><strong>Total Energy Charge:</strong> ₹<?php echo number_format($total_energy_charge, 2); ?></p>
                            <p class="mb-1"><strong>Fixed Charges:</strong> ₹<?php echo number_format($fixed_charges, 2); ?></p>
                            <p class="mb-1"><strong>Tax (<?php echo ($tax_rate*100); ?>%):</strong> ₹<?php echo number_format($tax_amount, 2); ?></p>
                        </div>
                        <div class="md:text-right">
                            <h4 class="text-2xl font-bold text-blue-800">Total Bill: ₹<?php echo number_format($total_bill, 2); ?></h4>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-6 no-print">
                    <div>
                        <button onclick="window.print()" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fi-print mr-2"></i> Print Bill
                        </button>
                    </div>
                    <div>
                        <button id="shareBtn" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center justify-center">
                            <i class="fi-share mr-2"></i> Share
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mt-8 no-print">
                <h5 class="text-lg font-semibold goa-header flex items-center mb-2">
                    <i class="fi-info mr-2"></i> About Goa Electricity Rates
                </h5>
                <p class="text-gray-700 text-sm">
                    These calculations are based on sample tariff rates for Goa. Actual bills may vary based on 
                    official notifications. Fixed charges vary based on consumption slabs.
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

    <!-- Remove Foundation JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js" crossorigin="anonymous"></script> -->
    
    <script>
        // Share functionality
        document.getElementById('shareBtn').addEventListener('click', function() {
            const shareData = {
                title: 'Goa Electricity Bill Calculator',
                text: `My Goa electricity bill estimate for ${document.getElementById('units').value || '...'} units: ₹<?php echo isset($total_bill) ? number_format($total_bill, 2) : '0.00'; ?>. Calculate yours!`,
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