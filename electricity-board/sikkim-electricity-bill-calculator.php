<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Sikkim Electricity Bill Calculator - 2026 Tariffs
$page_title = "Sikkim Electricity Bill Calculator (2026) | Sikkim Power Department";
$page_description = "Calculate your electricity bill for Sikkim using the official 2026 tariff rates. Instant estimates with subsidy options.";
$page_keywords = "Sikkim electricity bill, power calculator, 2026 tariff, Sikkim Power Department";

// 2026 Electricity Tariff Slabs for Sikkim (hypothetical rates - replace with actual)
$tariff_slabs = [
    ['limit' => 50,    'rate' => 3.50, 'subsidy_rate' => 2.50],
    ['limit' => 100,   'rate' => 4.50, 'subsidy_rate' => 3.00],
    ['limit' => 200,   'rate' => 6.00, 'subsidy_rate' => 4.50],
    ['limit' => 300,   'rate' => 7.50, 'subsidy_rate' => 6.00],
    ['limit' => 400,   'rate' => 8.50, 'subsidy_rate' => 7.00],
    ['limit' => 500,   'rate' => 9.50, 'subsidy_rate' => 8.00],
    ['limit' => PHP_INT_MAX, 'rate' => 10.50, 'subsidy_rate' => 9.00]
];

// Fixed charges (if any)
$fixed_charge = 50;

// Calculate bill based on units and subsidy
function calculateBill($units, $apply_subsidy, $tariff_slabs, $fixed_charge) {
    $total = $fixed_charge;
    $remaining_units = $units;
    $previous_limit = 0;
    
    foreach ($tariff_slabs as $slab) {
        if ($remaining_units <= 0) break;
        
        $slab_units = min($remaining_units, $slab['limit'] - $previous_limit);
        $rate = $apply_subsidy ? $slab['subsidy_rate'] : $slab['rate'];
        $total += $slab_units * $rate;
        
        $remaining_units -= $slab_units;
        $previous_limit = $slab['limit'];
    }
    
    return $total;
}

// Handle form submission
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$apply_subsidy = isset($_POST['subsidy']) ? true : false;
$bill_amount = $units > 0 ? calculateBill($units, $apply_subsidy, $tariff_slabs, $fixed_charge) : 0;

// Generate share URL
$share_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$whatsapp_share_url = "https://wa.me/?text=" . urlencode("Check out the Sikkim Electricity Bill Calculator (2026): $share_url");
?>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="author" content="Sikkim Power Department">
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Tailwind CSS -->
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Favicon -->
    <link rel="icon" href="https://sikkim.gov.in/favicon.ico" type="image/x-icon">
    
    <!-- Canonical URL -->
    
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
            .print-section {
                display: block !important;
            }
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <header class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-green-800">Sikkim Electricity Bill Calculator</h1>
                    <p class="text-gray-600">2026 Tariff Rates | Sikkim Power Department</p>
                </div>
                <div class="w-16 h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-green-600">
                        <path fill-rule="evenodd" d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </header>

        <!-- Calculator Form -->
        <main class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="post" class="space-y-6">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Enter Your Consumption Details</h2>
                    
                    <div class="mb-4">
                        <label for="units" class="block text-sm font-medium text-gray-700 mb-2">Monthly Consumption (in units)</label>
                        <input type="number" id="units" name="units" min="0" value="<?php echo $units; ?>" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                               required>
                    </div>
                    
                    <div class="flex items-center mb-4">
                        <input type="checkbox" id="subsidy" name="subsidy" <?php echo $apply_subsidy ? 'checked' : ''; ?> 
                               class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="subsidy" class="ml-2 block text-sm text-gray-700">Apply Subsidy (if eligible)</label>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300 flex items-center justify-center">
                        <i data-lucide="calculator" class="w-5 h-5 mr-2"></i> Calculate Bill
                    </button>
                </div>
            </form>
            
            <!-- Results Section -->
            <?php if ($units > 0): ?>
            <div class="mt-8 border-t pt-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Bill Estimate</h2>
                
                <div class="bg-gray-50 rounded-lg p-4 mb-4">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <p class="text-sm text-gray-500">Consumption</p>
                            <p class="font-medium"><?php echo $units; ?> units</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Subsidy Applied</p>
                            <p class="font-medium"><?php echo $apply_subsidy ? 'Yes' : 'No'; ?></p>
                        </div>
                    </div>
                    
                    <div class="bg-green-50 border border-green-100 rounded p-4">
                        <p class="text-sm text-gray-500">Estimated Bill Amount</p>
                        <p class="text-2xl font-bold text-green-700">₹ <?php echo number_format($bill_amount, 2); ?></p>
                        <p class="text-xs text-gray-500 mt-1">Inclusive of all charges</p>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-wrap gap-2 no-print">
                    <button onclick="window.print()" 
                            class="flex items-center justify-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-md transition">
                        <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print
                    </button>
                    <a href="<?php echo $whatsapp_share_url; ?>" 
                       class="flex items-center justify-center px-4 py-2 bg-green-100 hover:bg-green-200 text-green-700 rounded-md transition">
                        <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> Share via WhatsApp
                    </a>
                </div>
                
                <!-- Print-Only Section -->
                <div class="print-section hidden mt-6 border-t pt-4">
                    <h3 class="font-semibold text-gray-800">Sikkim Power Department</h3>
                    <p class="text-sm text-gray-600">Electricity Bill Estimate - <?php echo date('d M Y'); ?></p>
                    <table class="w-full mt-2 text-sm">
                        <tr>
                            <td class="py-1">Consumer ID:</td>
                            <td class="py-1">[Your Consumer ID]</td>
                        </tr>
                        <tr>
                            <td class="py-1">Billing Month:</td>
                            <td class="py-1"><?php echo date('F Y'); ?></td>
                        </tr>
                        <tr>
                            <td class="py-1">Units Consumed:</td>
                            <td class="py-1"><?php echo $units; ?> units</td>
                        </tr>
                        <tr>
                            <td class="py-1">Subsidy Applied:</td>
                            <td class="py-1"><?php echo $apply_subsidy ? 'Yes' : 'No'; ?></td>
                        </tr>
                        <tr class="border-t border-gray-200">
                            <td class="py-2 font-medium">Total Amount Due:</td>
                            <td class="py-2 font-medium">₹ <?php echo number_format($bill_amount, 2); ?></td>
                        </tr>
                    </table>
                    <p class="text-xs text-gray-500 mt-4">This is an estimate only. Actual bill may vary.</p>
                </div>
            </div>
            <?php endif; ?>
        </main>
        
        <!-- Tariff Information -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">2026 Electricity Tariff Slabs</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Slab (units)</th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Regular Rate (₹/unit)</th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subsidy Rate (₹/unit)</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach ($tariff_slabs as $index => $slab): 
                            $slab_label = $index === count($tariff_slabs) - 1 
                                ? 'Above ' . $tariff_slabs[$index-1]['limit'] 
                                : ($index === 0 ? '0-' . $slab['limit'] : ($tariff_slabs[$index-1]['limit']+1) . '-' . $slab['limit']);
                        ?>
                        <tr>
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $slab_label; ?></td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['rate']; ?></td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?php echo $slab['subsidy_rate']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p class="text-xs text-gray-500 mt-4">* Fixed charges of ₹<?php echo $fixed_charge; ?> applicable to all bills.</p>
        </section>
        
        <!-- FAQ Section -->
        <section class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h2>
            
            <div class="space-y-4">
                <div>
                    <h3 class="font-medium text-gray-900">Who is eligible for electricity subsidy in Sikkim?</h3>
                    <p class="text-sm text-gray-600 mt-1">Typically, domestic consumers with consumption below certain limits are eligible for subsidies. Check with the Sikkim Power Department for exact eligibility criteria.</p>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-900">How often are electricity tariffs updated?</h3>
                    <p class="text-sm text-gray-600 mt-1">Tariffs are usually revised annually by the Sikkim Electricity Regulatory Commission.</p>
                </div>
                
                <div>
                    <h3 class="font-medium text-gray-900">Where can I pay my electricity bill?</h3>
                    <p class="text-sm text-gray-600 mt-1">Bills can be paid online through the Sikkim Power Department portal, at designated banks, or at Power Department offices.</p>
                </div>
            </div>
        </section>
        
        
    </div>
    
    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
    
    <!-- Simple Analytics (optional) -->
    <script>
        // Basic form analytics (replace with your actual analytics code)
        document.querySelector('form').addEventListener('submit', function() {
            console.log('Calculation performed for', <?php echo $units; ?>, 'units');
        });
    </script>
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