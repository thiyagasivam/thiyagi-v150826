<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// PHP Backend Logic
$slabs_2026 = [
    ['min' => 0, 'max' => 100, 'rate' => 3.40, 'fixed' => 75, 'subsidy' => true],
    ['min' => 101, 'max' => 200, 'rate' => 4.35, 'fixed' => 100, 'subsidy' => true],
    ['min' => 201, 'max' => 300, 'rate' => 5.40, 'fixed' => 125, 'subsidy' => false],
    ['min' => 301, 'max' => 400, 'rate' => 6.45, 'fixed' => 150, 'subsidy' => false],
    ['min' => 401, 'max' => 500, 'rate' => 7.50, 'fixed' => 175, 'subsidy' => false],
    ['min' => 501, 'max' => 600, 'rate' => 8.55, 'fixed' => 200, 'subsidy' => false],
    ['min' => 601, 'max' => PHP_INT_MAX, 'rate' => 9.60, 'fixed' => 250, 'subsidy' => false]
];

$three_phase_multiplier = 1.2; // 20% higher for three-phase

$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$phase = isset($_POST['phase']) ? $_POST['phase'] : 'single';
$subsidy = isset($_POST['subsidy']) ? $_POST['subsidy'] : 'yes';

$energy_charge = 0;
$fixed_charge = 0;
$total = 0;
$subsidy_amount = 0;

if ($units > 0) {
    foreach ($slabs_2026 as $slab) {
        if ($units > $slab['min']) {
            $slab_units = min($units, $slab['max']) - $slab['min'];
            $energy_charge += $slab_units * $slab['rate'];
            
            if ($slab['subsidy'] && $subsidy == 'yes') {
                $subsidy_amount += $slab_units * ($slab['rate'] * 0.5); // 50% subsidy
            }
        }
    }
    
    $fixed_charge = $slabs_2026[array_search(true, array_column($slabs_2026, 'subsidy'))]['fixed'];
    
    if ($phase == 'three') {
        $energy_charge *= $three_phase_multiplier;
        $fixed_charge *= $three_phase_multiplier;
    }
    
    $total = $energy_charge + $fixed_charge - $subsidy_amount;
}
?>
<title>CSPDCL Electricity Bill Calculator 2026 | Estimate Chhattisgarh Power Charges</title>
    <meta name="description" content="Accurately calculate your 2026 CSPDCL electricity bill based on slab rates in Chhattisgarh. Includes subsidy option, print, and share features.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 text-gray-800 font-sans">
    <header class="bg-green-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-2xl md:text-3xl font-bold">CSPDCL Electricity Bill Calculator 2026</h1>
            <p class="mt-2 opacity-90">Estimate your Chhattisgarh power charges based on latest slab rates</p>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <form id="billForm" method="POST" class="space-y-6">
                    <div>
                        <label for="units" class="block text-sm font-medium text-gray-700 mb-1 flex items-center">
                            <i data-lucide="zap" class="w-4 h-4 mr-2"></i> Units Consumed
                        </label>
                        <input type="number" id="units" name="units" min="0" value="<?= $units ?>" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500" 
                            placeholder="Enter units consumed" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="cpu" class="w-4 h-4 mr-2"></i> Phase Type
                            </label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="phase" value="single" <?= $phase == 'single' ? 'checked' : '' ?> 
                                        class="h-4 w-4 text-green-600 focus:ring-green-500">
                                    <span class="ml-2">Single Phase</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="phase" value="three" <?= $phase == 'three' ? 'checked' : '' ?> 
                                        class="h-4 w-4 text-green-600 focus:ring-green-500">
                                    <span class="ml-2">Three Phase</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2 flex items-center">
                                <i data-lucide="shield-check" class="w-4 h-4 mr-2"></i> Subsidy Eligible
                            </label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="subsidy" value="yes" <?= $subsidy == 'yes' ? 'checked' : '' ?> 
                                        class="h-4 w-4 text-green-600 focus:ring-green-500">
                                    <span class="ml-2">Yes</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="subsidy" value="no" <?= $subsidy == 'no' ? 'checked' : '' ?> 
                                        class="h-4 w-4 text-green-600 focus:ring-green-500">
                                    <span class="ml-2">No</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
                        <i data-lucide="calculator" class="w-5 h-5 mr-2"></i> Calculate Bill
                    </button>
                </form>
            </div>
        </section>

        <?php if ($units > 0): ?>
        <section id="results" class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                    <i data-lucide="file-text" class="w-5 h-5 mr-2"></i> Bill Summary
                </h2>
                
                <div class="space-y-4">
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-600">Energy Charge</span>
                        <span class="font-medium">₹<?= number_format($energy_charge, 2) ?></span>
                    </div>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-600">Fixed Charge</span>
                        <span class="font-medium">₹<?= number_format($fixed_charge, 2) ?></span>
                    </div>
                    <?php if ($subsidy == 'yes' && $subsidy_amount > 0): ?>
                    <div class="flex justify-between py-3 border-b border-gray-100">
                        <span class="text-gray-600">Subsidy Applied</span>
                        <span class="font-medium text-green-600">- ₹<?= number_format($subsidy_amount, 2) ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="flex justify-between py-3">
                        <span class="text-lg font-semibold">Total Amount</span>
                        <span class="text-lg font-bold text-green-600">₹<?= number_format($total, 2) ?></span>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-3">
                    <button onclick="window.print()" class="flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg transition">
                        <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print Bill
                    </button>
                    <button id="shareBtn" class="flex items-center px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg transition">
                        <i data-lucide="share-2" class="w-4 h-4 mr-2"></i> Share
                    </button>
                    <div id="shareOptions" class="hidden flex-wrap gap-2">
                        <a href="https://wa.me/?text=Check%20out%20my%20CSPDCL%20bill%20calculation:%20₹<?= number_format($total, 2) ?>%20for%20<?= $units ?>%20units%20-%20https://yourdomain.com/cspdcl-electricity-bill-calculator" 
                           target="_blank" class="flex items-center px-3 py-1 bg-green-100 hover:bg-green-200 text-green-700 rounded-lg text-sm">
                            <i data-lucide="message-circle" class="w-4 h-4 mr-1"></i> WhatsApp
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://yourdomain.com/cspdcl-electricity-bill-calculator" 
                           target="_blank" class="flex items-center px-3 py-1 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-lg text-sm">
                            <i data-lucide="facebook" class="w-4 h-4 mr-1"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?text=My%20CSPDCL%20bill%20calculation:%20₹<?= number_format($total, 2) ?>%20for%20<?= $units ?>%20units&url=https://yourdomain.com/cspdcl-electricity-bill-calculator" 
                           target="_blank" class="flex items-center px-3 py-1 bg-sky-100 hover:bg-sky-200 text-sky-700 rounded-lg text-sm">
                            <i data-lucide="twitter" class="w-4 h-4 mr-1"></i> Twitter
                        </a>
                        <button onclick="copyToClipboard()" class="flex items-center px-3 py-1 bg-purple-100 hover:bg-purple-200 text-purple-700 rounded-lg text-sm">
                            <i data-lucide="copy" class="w-4 h-4 mr-1"></i> Copy Link
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <section class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i data-lucide="help-circle" class="w-5 h-5 mr-2"></i> CSPDCL Tariff Details (2026)
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab (Units)</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Energy Charge (₹/Unit)</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fixed Charge (₹)</th>
                                <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subsidy Eligible</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($slabs_2026 as $slab): ?>
                            <tr>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                    <?= $slab['min'] ?> - <?= $slab['max'] == PHP_INT_MAX ? 'Above 600' : $slab['max'] ?>
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?= $slab['rate'] ?></td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500"><?= $slab['fixed'] ?></td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">
                                    <?= $slab['subsidy'] ? 'Yes (50%)' : 'No' ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-6 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-r">
                    <div class="flex items-start">
                        <i data-lucide="alert-triangle" class="w-5 h-5 text-yellow-500 mr-2 mt-0.5"></i>
                        <div>
                            <h4 class="text-sm font-medium text-yellow-800">Note:</h4>
                            <p class="text-sm text-yellow-700 mt-1">
                                Three-phase connections have 20% higher charges than single-phase. 
                                Subsidy is only applicable for consumption up to 200 units.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-8 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 md:p-8">
                <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i data-lucide="info" class="w-5 h-5 mr-2"></i> Frequently Asked Questions
                </h2>
                
                <div class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <h3 class="text-lg font-medium text-gray-900">How is the CSPDCL electricity bill calculated?</h3>
                        <p class="mt-2 text-gray-600">
                            The bill is calculated based on slab rates. The first 100 units are charged at ₹3.40/unit, 
                            next 100 units at ₹4.35/unit, and so on. Fixed charges are added based on consumption slab.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-4">
                        <h3 class="text-lg font-medium text-gray-900">Who is eligible for subsidy?</h3>
                        <p class="mt-2 text-gray-600">
                            Domestic consumers using up to 200 units per month are eligible for 50% subsidy on energy charges 
                            as per Chhattisgarh government policy.
                        </p>
                    </div>
                    
                    <div class="border-b border-gray-200 pb-4">
                        <h3 class="text-lg font-medium text-gray-900">Why is three-phase connection more expensive?</h3>
                        <p class="mt-2 text-gray-600">
                            Three-phase connections have higher infrastructure and maintenance costs, hence CSPDCL charges 
                            20% more for three-phase compared to single-phase connections.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Where can I pay my CSPDCL bill?</h3>
                        <p class="mt-2 text-gray-600">
                            You can pay your bill online through CSPDCL portal, mobile apps, or at authorized payment centers. 
                            Late payments attract a penalty of 1.5% per month.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    
    <!-- Mobile CTA Button -->
    <?php if ($units > 0): ?>
    <div class="md:hidden fixed bottom-6 right-6 z-10">
        <div class="flex space-x-2">
            <button onclick="window.print()" class="p-3 bg-green-600 text-white rounded-full shadow-lg hover:bg-green-700 transition">
                <i data-lucide="printer" class="w-5 h-5"></i>
            </button>
            <button id="mobileShareBtn" class="p-3 bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transition">
                <i data-lucide="share-2" class="w-5 h-5"></i>
            </button>
        </div>
    </div>
    <?php endif; ?>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Toggle share options
        document.getElementById('shareBtn')?.addEventListener('click', function() {
            const options = document.getElementById('shareOptions');
            options.classList.toggle('hidden');
            options.classList.toggle('flex');
        });
        
        document.getElementById('mobileShareBtn')?.addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: 'My CSPDCL Bill Calculation',
                    text: `Check out my CSPDCL bill calculation: ₹<?= number_format($total, 2) ?> for <?= $units ?> units`,
                    url: 'https://yourdomain.com/cspdcl-electricity-bill-calculator',
                }).catch(err => console.log('Error sharing:', err));
            } else {
                alert('Web Share API not supported in your browser. Use the share options in the results section.');
            }
        });
        
        function copyToClipboard() {
            navigator.clipboard.writeText('https://yourdomain.com/cspdcl-electricity-bill-calculator').then(() => {
                alert('Link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy:', err);
            });
        }
        
        // Save form data to localStorage
        document.getElementById('billForm')?.addEventListener('submit', function() {
            const formData = {
                units: document.getElementById('units').value,
                phase: document.querySelector('input[name="phase"]:checked').value,
                subsidy: document.querySelector('input[name="subsidy"]:checked').value
            };
            localStorage.setItem('cspdclFormData', JSON.stringify(formData));
        });
        
        // Load saved form data
        window.addEventListener('DOMContentLoaded', function() {
            const savedData = localStorage.getItem('cspdclFormData');
            if (savedData) {
                const formData = JSON.parse(savedData);
                document.getElementById('units').value = formData.units;
                document.querySelector(`input[name="phase"][value="${formData.phase}"]`).checked = true;
                document.querySelector(`input[name="subsidy"][value="${formData.subsidy}"]`).checked = true;
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