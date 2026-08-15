<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Define DISCOMs
$discos = [
    'JVVNL' => 'Jaipur Vidyut Vitran Nigam Limited',
    'JdVVNL' => 'Jodhpur Vidyut Vitran Nigam Limited',
    'AVVNL' => 'Ajmer Vidyut Vitran Nigam Limited'
];

// 2026 Tariff Slabs (Rajasthan Domestic - Example)
$slabs = [
    ['min' => 0, 'max' => 50, 'rate' => 1.45],
    ['min' => 51, 'max' => 150, 'rate' => 2.85],
    ['min' => 151, 'max' => 300, 'rate' => 4.75],
    ['min' => 301, 'max' => 500, 'rate' => 6.00],
    ['min' => 501, 'max' => PHP_FLOAT_MAX, 'rate' => 7.10]
];

// Initialize variables
$discom = $_POST['discom'] ?? 'JVVNL';
$units = (int)($_POST['units'] ?? 0);
$total = 0;
$breakdown = [];
$validInput = true;

// Calculate bill
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
                    'range' => $slab['max'] === PHP_FLOAT_MAX 
                        ? $slab['min'] . '+' 
                        : $slab['min'] . '-' . $slab['max'],
                    'units' => $slabUnits,
                    'rate' => $slab['rate'],
                    'cost' => $slabCost
                ];
            }
        }
    }
}
?>
    <title>JVVNL, JdVVNL, AVVNL Electricity Bill Calculator 2026</title>
    <meta name="description" content="Calculate your JVVNL, JdVVNL, or AVVNL electricity bill using the latest 2026 slab rates. Instant and accurate estimate.">
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        rajasthan: {
                            500: '#b91c1c',
                            600: '#991b1b',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
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
        .animate-fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="container mx-auto px-4 py-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-rajasthan-600 dark:text-rajasthan-400">
                        Rajasthan Electricity Bill Calculator
                    </h1>
                    
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <div class="max-w-4xl mx-auto">
                <!-- Calculator Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="md:flex">
                        <!-- Input Section -->
                        <div class="p-6 md:p-8 md:w-1/2">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-2">Bill Calculator</h2>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Estimate your 2026 electricity bill</p>
                            
                            <form method="post" class="space-y-4">
                                <div>
                                    <label for="discom" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Select DISCOM
                                    </label>
                                    <select id="discom" name="discom" class="w-full px-4 py-2.5 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-rajasthan-500 focus:border-transparent transition duration-200">
                                        <?php foreach ($discos as $code => $name): ?>
                                            <option value="<?= $code ?>" <?= $discom === $code ? 'selected' : '' ?>>
                                                <?= $code ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="units" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Units Consumed (kWh)
                                    </label>
                                    <div class="relative">
                                        <input type="number" id="units" name="units" value="<?= $units ?>" min="0" step="1"
                                            class="w-full px-4 py-2.5 pr-12 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-rajasthan-500 focus:border-transparent transition duration-200"
                                            placeholder="Enter units" required>
                                        <span class="absolute right-3 top-2.5 text-gray-500 dark:text-gray-400">kWh</span>
                                    </div>
                                </div>
                                
                                <div class="pt-2">
                                    <button type="submit" class="w-full bg-rajasthan-600 hover:bg-rajasthan-700 text-white font-medium py-2.5 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-rajasthan-500 focus:ring-opacity-50">
                                        Calculate Bill
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Results Section -->
                        <div class="bg-gray-50 dark:bg-gray-700 p-6 md:p-8 md:w-1/2 border-t md:border-t-0 md:border-l border-gray-200 dark:border-gray-600">
                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Bill Details</h2>
                            
                            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $validInput): ?>
                                <div class="animate-fade-in">
                                    <!-- Summary Card -->
                                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-4 mb-6 border border-gray-200 dark:border-gray-600">
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="text-sm text-gray-500 dark:text-gray-400">Total for</p>
                                                <p class="font-medium text-gray-700 dark:text-gray-300"><?= $units ?> units</p>
                                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1"><?= $discom ?></p>
                                            </div>
                                            <div class="text-3xl font-bold text-rajasthan-600 dark:text-rajasthan-400">
                                                ₹<?= number_format($total, 2) ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Slab Breakdown -->
                                    <h3 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3">SLAB BREAKDOWN</h3>
                                    <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-600">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                            <thead class="bg-gray-50 dark:bg-gray-600">
                                                <tr>
                                                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Range</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Units</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate</th>
                                                    <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                                <?php foreach ($breakdown as $item): ?>
                                                <tr>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300"><?= $item['range'] ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right"><?= $item['units'] ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right">₹<?= number_format($item['rate'], 2) ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200 text-right">₹<?= number_format($item['cost'], 2) ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <tr class="bg-gray-50 dark:bg-gray-700 font-semibold">
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">Total</td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right"><?= $units ?></td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right">-</td>
                                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200 text-right">₹<?= number_format($total, 2) ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <!-- Action Buttons -->
                                    <div class="mt-6 flex flex-wrap gap-3 no-print">
                                        <button onclick="window.print()" class="flex-1 bg-gray-200 hover:bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 text-gray-800 dark:text-gray-200 py-2 px-4 rounded-lg flex items-center justify-center transition duration-200">
                                            <i class="fas fa-print mr-2"></i> Print
                                        </button>
                                        <button onclick="shareResult()" class="flex-1 bg-blue-100 hover:bg-blue-200 dark:bg-blue-900/50 dark:hover:bg-blue-900 text-blue-800 dark:text-blue-200 py-2 px-4 rounded-lg flex items-center justify-center transition duration-200">
                                            <i class="fas fa-share-alt mr-2"></i> Share
                                        </button>
                                    </div>
                                </div>
                            <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !$validInput): ?>
                                <div class="bg-red-100 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-400 p-4 animate-fade-in">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-red-700 dark:text-red-300">
                                                Please enter a valid number of units (positive value only).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 dark:border-blue-400 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-info-circle text-blue-500 dark:text-blue-400"></i>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm text-blue-700 dark:text-blue-300">
                                                Enter your electricity consumption in kWh to calculate your estimated bill.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                
                <!-- Tariff Information -->
                <div class="mt-8 bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">2026 Tariff Slabs (Rajasthan DISCOMs)</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Consumption Range (kWh)</th>
                                        <th class="px-4 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Rate (₹/kWh)</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-600">
                                    <?php foreach ($slabs as $slab): ?>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-gray-300">
                                            <?= $slab['max'] === PHP_FLOAT_MAX 
                                                ? $slab['min'] . ' and above' 
                                                : $slab['min'] . ' - ' . $slab['max'] ?>
                                        </td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-right">
                                            ₹<?= number_format($slab['rate'], 2) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">
                            * Rates are subject to change by JVVNL/JdVVNL/AVVNL. Last updated: June 2026.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-8 bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                    <div class="p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">Frequently Asked Questions</h2>
                        <div class="space-y-4">
                            <div>
                                <button onclick="toggleFAQ('faq1')" class="flex items-center justify-between w-full text-left font-medium text-rajasthan-600 hover:text-rajasthan-800 dark:text-rajasthan-400 dark:hover:text-rajasthan-300">
                                    <span>Which areas does each DISCOM cover in Rajasthan?</span>
                                    <i id="faq1-icon" class="fas fa-chevron-down"></i>
                                </button>
                                <div id="faq1" class="hidden mt-2 text-gray-600 dark:text-gray-400">
                                    <p>JVVNL covers Jaipur division, JdVVNL covers Jodhpur division, and AVVNL covers Ajmer division. Each DISCOM serves multiple districts within their respective regions.</p>
                                </div>
                            </div>
                            <div>
                                <button onclick="toggleFAQ('faq2')" class="flex items-center justify-between w-full text-left font-medium text-rajasthan-600 hover:text-rajasthan-800 dark:text-rajasthan-400 dark:hover:text-rajasthan-300">
                                    <span>How accurate is this calculator?</span>
                                    <i id="faq2-icon" class="fas fa-chevron-down"></i>
                                </button>
                                <div id="faq2" class="hidden mt-2 text-gray-600 dark:text-gray-400">
                                    <p>This calculator provides estimates based on current tariff slabs. Your actual bill may include additional charges like fixed costs, taxes, or subsidies not accounted for here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        
    </div>

    <script>
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        // Check for saved theme preference
        if (localStorage.getItem('darkMode') === 'true' || 
            (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
        }
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        });
        
        // Share functionality
        function shareResult() {
            const units = <?= $units ?? 0 ?>;
            const discom = '<?= $discom ?? 'JVVNL' ?>';
            const total = <?= $total ?? 0 ?>;
            const text = `My ${discom} Electricity Bill Calculation: ${units} units = ₹${total.toFixed(2)} (2026 rates)`;
            const url = window.location.href;
            
            if (navigator.share) {
                navigator.share({
                    title: 'Rajasthan Electricity Bill Calculation',
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
            const textToCopy = `${text}\n\nCalculate yours: ${url}`;
            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('Calculation copied to clipboard!\nYou can paste it anywhere to share.');
            }).catch(err => {
                console.error('Could not copy text: ', err);
                prompt('Copy this link to share:', url);
            });
        }
        
        // FAQ toggle
        function toggleFAQ(id) {
            const element = document.getElementById(id);
            const icon = document.getElementById(id + '-icon');
            element.classList.toggle('hidden');
            icon.classList.toggle('fa-chevron-down');
            icon.classList.toggle('fa-chevron-up');
        }
        
        // Live calculation (optional enhancement)
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