<?php include '../header.php'; ?>
<title>Manipur Electricity Bill Calculator 2026 | MSPDCL Bill Calculator | Free Tool</title>
<meta name="description" content="Calculate your Manipur electricity bill instantly with our 2026 MSPDCL bill calculator. Get accurate bill estimates, tariff rates, and subsidy calculations for domestic consumers.">
<meta name="keywords" content="manipur electricity bill calculator 2026, mspdcl bill calculator, manipur power bill, electricity tariff manipur, mspdcl rates, manipur subsidy calculator">

<?php include 'breadcrumb-schema.php'; ?>
<?php
// Define MSPDCL 2026 tariff rates (Domestic consumers)
$tariff_slabs = [
    ['from' => 0, 'to' => 50, 'rate' => 3.75],
    ['from' => 51, 'to' => 150, 'rate' => 4.85],
    ['from' => 151, 'to' => 300, 'rate' => 6.20],
    ['from' => 301, 'to' => 500, 'rate' => 6.80],
    ['from' => 501, 'to' => PHP_INT_MAX, 'rate' => 7.20]
];

$fixed_charge = 60;
$subsidy_rate = 0.40; // 40% subsidy on first 100 units
$tax_rate = 0.05; // 5% tax

// Initialize variables
$units = isset($_POST['units']) ? (float)$_POST['units'] : 0;
$include_subsidy = isset($_POST['include_subsidy']) ? true : false;
$energy_charge = 0;
$subsidy_amount = 0;
$tax_amount = 0;
$total_amount = 0;

// Calculate bill if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $units > 0) {
    // Calculate energy charge
    foreach ($tariff_slabs as $slab) {
        if ($units <= 0) break;
        
        $slab_units = min($units, $slab['to'] - $slab['from'] + 1);
        if ($slab_units > 0) {
            $energy_charge += $slab_units * $slab['rate'];
            $units -= $slab_units;
        }
    }
    
    // Calculate subsidy
    if ($include_subsidy) {
        $subsidy_amount = min($_POST['units'], 100) * $subsidy_rate;
    }
    
    // Calculate tax and total
    $taxable_amount = $energy_charge + $fixed_charge - $subsidy_amount;
    $tax_amount = max(0, $taxable_amount) * $tax_rate;
    $total_amount = $taxable_amount + $tax_amount;
}
?>

    <title>MSPDCL Electricity Bill Calculator 2026</title>
    <script src="https://unpkg.com/lucide@latest"></script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-100 min-h-screen p-4">
    <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="bg-blue-600 text-white p-6">
            <h1 class="text-2xl font-bold flex items-center">
                <i data-lucide="zap" class="mr-2"></i>
                MSPDCL Bill Calculator 2026
            </h1>
            <p class="text-blue-100">Manipur State Power Distribution Company Limited</p>
        </div>

        <div class="p-6">
            <form id="billForm">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Units Consumed (kWh)</label>
                    <input type="number" id="units" name="units" min="0" step="1" 
                           class="w-full p-2 border rounded" 
                           placeholder="Enter units" 
                           oninput="calculateBill()">
                </div>

                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="include_subsidy" name="include_subsidy" 
                           class="mr-2" onchange="calculateBill()">
                    <label class="text-gray-700">Include Subsidy (40% on first 100 units)</label>
                </div>

                <div class="bg-gray-50 p-4 rounded mb-4">
                    <h3 class="font-bold mb-2">Bill Breakdown</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span>Energy Charge:</span>
                            <span id="energyCharge">₹0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Fixed Charge:</span>
                            <span id="fixedCharge">₹60.00</span>
                        </div>
                        <div class="flex justify-between text-green-600" id="subsidyContainer" style="display:none">
                            <span>Subsidy Deduction:</span>
                            <span id="subsidyAmount">-₹0.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Tax (5%):</span>
                            <span id="taxAmount">₹0.00</span>
                        </div>
                        <div class="border-t my-2"></div>
                        <div class="flex justify-between font-bold text-lg">
                            <span>Total Amount:</span>
                            <span id="totalAmount" class="text-blue-600">₹0.00</span>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <button type="button" onclick="window.print()" 
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded flex items-center justify-center">
                        <i data-lucide="printer" class="mr-2"></i> Print
                    </button>
                    <button type="button" onclick="shareBill()" 
                            class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded flex items-center justify-center">
                        <i data-lucide="share-2" class="mr-2"></i> Share
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Initialize icons
        lucide.createIcons();
        
        // Simple calculation function that definitely works
        function calculateBill() {
            const units = parseFloat(document.getElementById('units').value) || 0;
            const includeSubsidy = document.getElementById('include_subsidy').checked;
            
            // Show/hide subsidy
            document.getElementById('subsidyContainer').style.display = includeSubsidy ? 'flex' : 'none';
            
            // Calculate energy charge
            let energyCharge = 0;
            let remainingUnits = units;
            
            // Simplified slab calculation
            if (remainingUnits > 500) {
                energyCharge += (remainingUnits - 500) * 7.20;
                remainingUnits = 500;
            }
            if (remainingUnits > 300) {
                energyCharge += (remainingUnits - 300) * 6.80;
                remainingUnits = 300;
            }
            if (remainingUnits > 150) {
                energyCharge += (remainingUnits - 150) * 6.20;
                remainingUnits = 150;
            }
            if (remainingUnits > 50) {
                energyCharge += (remainingUnits - 50) * 4.85;
                remainingUnits = 50;
            }
            if (remainingUnits > 0) {
                energyCharge += remainingUnits * 3.75;
            }
            
            // Calculate other charges
            const fixedCharge = 60;
            const subsidyAmount = includeSubsidy ? Math.min(units, 100) * 0.40 : 0;
            const taxableAmount = energyCharge + fixedCharge - subsidyAmount;
            const taxAmount = taxableAmount > 0 ? taxableAmount * 0.05 : 0;
            const totalAmount = taxableAmount + taxAmount;
            
            // Update display
            document.getElementById('energyCharge').textContent = '₹' + energyCharge.toFixed(2);
            document.getElementById('subsidyAmount').textContent = '-₹' + subsidyAmount.toFixed(2);
            document.getElementById('taxAmount').textContent = '₹' + taxAmount.toFixed(2);
            document.getElementById('totalAmount').textContent = '₹' + Math.max(0, totalAmount).toFixed(2);
        }
        
        function shareBill() {
            const units = document.getElementById('units').value || 0;
            const total = document.getElementById('totalAmount').textContent;
            const message = `My MSPDCL bill estimate for ${units} units: ${total}. Calculate yours at ${window.location.href}`;
            
            if (navigator.share) {
                navigator.share({
                    title: 'MSPDCL Bill Estimate',
                    text: message
                });
            } else {
                // Fallback for desktop
                prompt('Copy this bill estimate:', message);
            }
        }
        
        // Initialize with any POST values
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('units').value = <?= json_encode($_POST['units'] ?? 0) ?>;
                document.getElementById('include_subsidy').checked = <?= $include_subsidy ? 'true' : 'false' ?>;
                calculateBill();
            });
        <?php endif; ?>
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