<?php 
// Define current tariff slabs (2026)
$slabs = [
    ['min' => 0, 'max' => 100, 'rate' => 3.35],
    ['min' => 101, 'max' => 150, 'rate' => 5.50],
    ['min' => 151, 'max' => 300, 'rate' => 6.00],
    ['min' => 301, 'max' => 500, 'rate' => 6.50],
    ['min' => 501, 'max' => PHP_FLOAT_MAX, 'rate' => 7.00]
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
                               $slab['min'] . ' - ' . $slab['max'],
                    'units' => $slabUnits,
                    'rate' => $slab['rate'],
                    'cost' => $slabCost
                ];
            }
        }
    }
}

// Include breadcrumb schema
include 'breadcrumb-schema.php';
include '../header.php';
?>

<!-- Page-specific meta tags -->
<title>UPPCL Bill Calculator - Uttar Pradesh Electricity Cost Estimator 2026</title>
<meta name="description" content="Calculate your UPPCL electricity bill online using the latest slab rates for domestic users in Uttar Pradesh. Updated for 2026.">

<!-- Additional styles for this page -->
<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
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
    font-size: 1.2rem;
    font-weight: 600;
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
    margin-top: 10px;
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

<!-- Page-specific JavaScript -->
<script>
// Live calculation for better UX
document.addEventListener('DOMContentLoaded', function() {
    const unitInput = document.getElementById('units');
    const liveResult = document.getElementById('live-result');
    
    if (unitInput && liveResult) {
        unitInput.addEventListener('input', function() {
            const units = parseInt(this.value) || 0;
            
            // Simple client-side calculation (same logic as PHP)
            let total = 0;
            const slabs = [
                {min: 0, max: 100, rate: 3.35},
                {min: 101, max: 150, rate: 5.50},
                {min: 151, max: 300, rate: 6.00},
                {min: 301, max: 500, rate: 6.50},
                {min: 501, max: Infinity, rate: 7.00}
            ];
            
            slabs.forEach(slab => {
                if (units > slab.min) {
                    const slabUnits = Math.min(units, slab.max) - slab.min;
                    total += slabUnits * slab.rate;
                }
            });
            
            liveResult.textContent = '₹' + total.toFixed(2);
        });
    }
});

// Print functionality
function printBill() {
    window.print();
}

// Share functionality
function shareBill() {
    const units = <?= $units ?? 0 ?>;
    const total = <?= $total ?? 0 ?>;
    const text = `My UPPCL Bill Calculation: ${units} units = ₹${total.toFixed(2)} (2026 rates)`;
    const url = window.location.href;
    
    if (navigator.share) {
        navigator.share({
            title: 'UPPCL Bill Calculation',
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
    // Copy to clipboard as fallback
    const textToCopy = `${text}\nCalculate yours: ${url}`;
    navigator.clipboard.writeText(textToCopy).then(() => {
        alert('Calculation copied to clipboard! You can paste it anywhere.');
    }).catch(err => {
        console.log('Could not copy text: ', err);
        prompt('Copy this link to share:', url);
    });
}
</script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<div class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-green-800 mb-2">UPPCL Bill Calculator 2026</h1>
            <p class="text-gray-600">Uttar Pradesh Electricity Bill Calculator (Domestic Consumers)</p>
        </header>
        
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <form method="post" class="mb-6">
                    <div class="mb-4">
                        <label for="units" class="block text-gray-700 font-medium mb-2">
                            Enter Units Consumed:
                        </label>
                        <div class="relative">
                            <input type="number" id="units" name="units" 
                                   value="<?= htmlspecialchars($units) ?>" 
                                   min="0" step="1"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                                   placeholder="e.g., 250" required>
                            <span class="absolute right-3 top-2 text-gray-500">units</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Enter your electricity consumption in units (kWh)</p>
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <button type="submit" 
                                class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-md transition duration-300">
                            Calculate Bill
                        </button>
                        
                        <div id="live-preview" class="text-gray-700 hidden md:block">
                            <span class="font-medium">Estimated Bill:</span>
                            <span id="live-result" class="ml-2 font-bold">₹0.00</span>
                        </div>
                    </div>
                </form>
                
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput): ?>
                    <div class="border-t pt-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Bill Calculation Result</h2>
                        
                        <div class="bg-green-50 p-4 rounded-lg mb-6">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-gray-600">For <span class="font-medium"><?= $units ?></span> units</p>
                                    <p class="text-sm text-gray-500">UPPCL Bill (2026 Rates)</p>
                                </div>
                                <div class="text-3xl font-bold text-green-700">₹<?= number_format($total, 2) ?></div>
                            </div>
                        </div>
                        
                        <h3 class="font-medium text-gray-700 mb-2">Breakdown by Slabs:</h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/unit)</th>
                                        <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Cost (₹)</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php foreach ($breakdown as $item): ?>
                                        <tr>
                                            <td class="px-4 py-2 whitespace-nowrap"><?= $item['range'] ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right"><?= $item['units'] ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right"><?= number_format($item['rate'], 2) ?></td>
                                            <td class="px-4 py-2 whitespace-nowrap text-right font-medium"><?= number_format($item['cost'], 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr class="bg-gray-50 font-semibold">
                                        <td class="px-4 py-2 whitespace-nowrap">Total</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right"><?= $units ?></td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right">-</td>
                                        <td class="px-4 py-2 whitespace-nowrap text-right">₹<?= number_format($total, 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="mt-6 flex flex-wrap gap-3 justify-center">
                            <button onclick="printBill()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-md flex items-center">
                                <i class="fas fa-print mr-2"></i> Print Bill
                            </button>
                            <button onclick="shareBill()" class="bg-green-100 hover:bg-green-200 text-green-800 py-2 px-4 rounded-md flex items-center">
                                <i class="fas fa-share-alt mr-2"></i> Share
                            </button>
                        </div>
                    </div>
                <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
                    <div class="border-t pt-6">
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Invalid Input!</strong>
                            <span class="block sm:inline">Please enter a positive number of units.</span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="max-w-2xl mx-auto mt-8 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Current UPPCL Tariff Slabs (2026)</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range (units)</th>
                                <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/unit)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($slabs as $slab): ?>
                                <tr>
                                    <td class="px-4 py-2 whitespace-nowrap">
                                        <?= ($slab['max'] === PHP_FLOAT_MAX) ? 
                                            $slab['min'] . ' and above' : 
                                            $slab['min'] . ' - ' . $slab['max'] ?>
                                    </td>
                                    <td class="px-4 py-2 whitespace-nowrap text-right">₹<?= number_format($slab['rate'], 2) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <p class="text-sm text-gray-500 mt-4">* Rates are for domestic consumers and subject to change by UPPCL.</p>
            </div>
        </div>
        
        <!-- Indian State Electricity Bill Calculators Section -->
        <div class="max-w-6xl mx-auto mt-12 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Indian State Electricity Bill Calculators</h2>
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
            </div>
        </div>
    </div>

<?php include '../footer.php';?>