<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
// Set variables for SEO and page information
$page_title = "Nagaland Electricity Bill Calculator (2026) | Department of Power, Nagaland";
$page_description = "Calculate your electricity bill for 2026 using the latest Nagaland tariff rates for domestic consumers. Instant results with subsidy options.";
$canonical_url = "https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator";
$current_year = date('Y');
?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <!-- Tailwind CSS via CDN -->
    
    <!-- Heroicons via CDN -->
    <script src="https://unpkg.com/@heroicons/react@2.0.16/outline/index.js" data-manual></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                        },
                        nagaland: {
                            500: '#FF8C00',
                            600: '#E67E00',
                            700: '#CC7000',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        @media print {
            .no-print {
                display: none !important;
            }
            .print-only {
                display: block !important;
            }
            body {
                background: white !important;
                color: black !important;
            }
            .bill-result {
                border: 2px solid #000 !important;
                box-shadow: none !important;
            }
        }
        .print-only {
            display: none;
        }
    </style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-nagaland-600 text-white shadow-md">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <!-- Placeholder for department logo -->
                    <div class="bg-white rounded-full p-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-nagaland-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl md:text-3xl font-bold">Department of Power, Nagaland</h1>
                        <p class="text-nagaland-100">Electricity Bill Calculator (2026)</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="hidden md:inline-block text-nagaland-100">Official Calculator</span>
                    <span class="bg-nagaland-700 text-white px-3 py-1 rounded-full text-sm font-medium">2026 Tariff</span>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Calculate Your Electricity Bill</h2>
                    
                    <form id="billCalculator" class="space-y-6">
                        <div>
                            <label for="units" class="block text-sm font-medium text-gray-700 mb-1">Enter Units Consumed</label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                </div>
                                <input type="number" id="units" name="units" min="0" step="1" class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-nagaland-500 focus:border-nagaland-500" placeholder="e.g. 250" required>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                    <span class="text-gray-500">units</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="subsidy" name="subsidy" class="h-4 w-4 text-nagaland-600 focus:ring-nagaland-500 border-gray-300 rounded">
                            <label for="subsidy" class="ml-2 block text-sm text-gray-700">Apply Subsidy (if eligible)</label>
                        </div>
                        
                        <div class="pt-2">
                            <button type="submit" class="w-full md:w-auto flex justify-center items-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-nagaland-600 hover:bg-nagaland-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-nagaland-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                                </svg>
                                Calculate Bill
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Bill Result Section (initially hidden) -->
            <div id="billResult" class="hidden bg-white rounded-xl shadow-lg overflow-hidden mb-8 bill-result">
                <div class="p-6 md:p-8">
                    <div class="flex justify-between items-start mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Your Bill Estimate</h2>
                        <div class="flex space-x-2 no-print">
                            <button id="printBtn" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>
                            </button>
                            <button id="shareBtn" class="p-2 rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm font-medium text-gray-500">Units Consumed</p>
                            <p id="resultUnits" class="text-2xl font-bold text-nagaland-600">0</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm font-medium text-gray-500">Energy Charges</p>
                            <p id="resultEnergy" class="text-2xl font-bold text-nagaland-600">₹0</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm font-medium text-gray-500">Total Amount</p>
                            <p id="resultTotal" class="text-2xl font-bold text-nagaland-600">₹0</p>
                        </div>
                    </div>
                    
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="text-lg font-medium text-gray-800 mb-3">Bill Breakdown</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fixed Charges</span>
                                <span id="fixedCharge" class="font-medium">₹30</span>
                            </div>
                            <div id="slabDetails" class="space-y-2">
                                <!-- Slab details will be inserted here by JavaScript -->
                            </div>
                            <div class="flex justify-between border-t border-gray-200 pt-2">
                                <span class="text-gray-600">Subtotal</span>
                                <span id="subtotal" class="font-medium">₹0</span>
                            </div>
                            <div id="subsidySection" class="hidden flex justify-between text-green-600">
                                <span>Subsidy Applied</span>
                                <span id="subsidyAmount">-₹0</span>
                            </div>
                            <div class="flex justify-between border-t border-gray-200 pt-2 font-semibold text-gray-800">
                                <span>Total Payable</span>
                                <span id="totalPayable" class="text-lg">₹0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 print-only">
                        <p class="text-sm text-gray-500">Calculated on <?php echo date('d M Y'); ?> using Nagaland 2026 Domestic Tariff Rates</p>
                    </div>
                </div>
            </div>
            
            <!-- Tariff Information Section -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">2026 Domestic Tariff Rates</h2>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab (Units)</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/unit)</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Example (100 units)</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">0 - 100</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹3.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹300</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">101 - 200</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹4.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹450</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">201 - 300</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹5.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹550</td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">301 - 500</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹6.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹650</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">501+</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹7.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹700</td>
                                </tr>
                                <tr class="bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Fixed Charge</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">₹30/month</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-6 bg-blue-50 border-l-4 border-blue-400 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700">
                                    <strong>Note:</strong> Tariff rates are effective from 1st January 2026 as per Department of Power, Nagaland notification. Subsidy may apply for eligible consumers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section with Schema Markup -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mt-8" itemscope itemtype="https://schema.org/FAQPage">
                <div class="p-6 md:p-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>
                    
                    <div class="space-y-6">
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-200 pb-6">
                            <h3 itemprop="name" class="text-lg font-medium text-gray-900 mb-2">How is my electricity bill calculated?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text" class="prose prose-sm text-gray-500 max-w-none">
                                    <p>Your bill is calculated based on the units consumed in the billing period. The calculation follows these steps:</p>
                                    <ol class="list-decimal pl-5 mt-2 space-y-1">
                                        <li>Units are divided into slabs with different rates (see tariff table above)</li>
                                        <li>Each slab's units are multiplied by their respective rates</li>
                                        <li>A fixed charge of ₹30 is added to the total</li>
                                        <li>If applicable, any subsidies are deducted from the total amount</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-200 pb-6">
                            <h3 itemprop="name" class="text-lg font-medium text-gray-900 mb-2">Who is eligible for electricity subsidy in Nagaland?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text" class="prose prose-sm text-gray-500 max-w-none">
                                    <p>Subsidy eligibility is determined by the Department of Power, Nagaland. Generally, certain categories of consumers like Below Poverty Line (BPL) families, agricultural consumers, and others may qualify for subsidies. Please check with your local electricity office for specific eligibility criteria.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border-b border-gray-200 pb-6">
                            <h3 itemprop="name" class="text-lg font-medium text-gray-900 mb-2">How often will I receive my electricity bill?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text" class="prose prose-sm text-gray-500 max-w-none">
                                    <p>Electricity bills in Nagaland are typically issued on a monthly basis. The billing cycle may vary slightly depending on your location and consumer category.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                            <h3 itemprop="name" class="text-lg font-medium text-gray-900 mb-2">What payment methods are available?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <div itemprop="text" class="prose prose-sm text-gray-500 max-w-none">
                                    <p>You can pay your electricity bill through various methods including:</p>
                                    <ul class="list-disc pl-5 mt-2 space-y-1">
                                        <li>Online payment via the Department of Power portal</li>
                                        <li>Mobile payment apps</li>
                                        <li>Authorized bank branches</li>
                                        <li>Designated payment centers</li>
                                        <li>Cash counters at electricity offices</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('billCalculator');
            const billResult = document.getElementById('billResult');
            const printBtn = document.getElementById('printBtn');
            const shareBtn = document.getElementById('shareBtn');
            
            // Tariff rates for 2026
            const tariffSlabs = [
                { min: 0, max: 100, rate: 3.00, color: 'bg-green-100 text-green-800' },
                { min: 101, max: 200, rate: 4.50, color: 'bg-blue-100 text-blue-800' },
                { min: 201, max: 300, rate: 5.50, color: 'bg-yellow-100 text-yellow-800' },
                { min: 301, max: 500, rate: 6.50, color: 'bg-orange-100 text-orange-800' },
                { min: 501, max: Infinity, rate: 7.00, color: 'bg-red-100 text-red-800' }
            ];
            const fixedCharge = 30;
            const subsidyRate = 1.00; // ₹1 per unit subsidy if applicable
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const units = parseInt(document.getElementById('units').value);
                const hasSubsidy = document.getElementById('subsidy').checked;
                
                if (isNaN(units) || units < 0) {
                    alert('Please enter a valid number of units');
                    return;
                }
                
                // Calculate bill
                let totalEnergyCharge = 0;
                let slabDetailsHTML = '';
                
                tariffSlabs.forEach(slab => {
                    if (units > slab.min) {
                        const slabUnits = Math.min(units, slab.max) - slab.min;
                        if (slabUnits > 0) {
                            const slabCharge = slabUnits * slab.rate;
                            totalEnergyCharge += slabCharge;
                            
                            slabDetailsHTML += `
                                <div class="flex justify-between ${slab.color} px-3 py-1 rounded">
                                    <span>${slab.min+1} - ${slab.max === Infinity ? 'Above' : slab.max} units (₹${slab.rate.toFixed(2)}/unit)</span>
                                    <span>₹${slabCharge.toFixed(2)}</span>
                                </div>
                            `;
                        }
                    }
                });
                
                const subtotal = totalEnergyCharge + fixedCharge;
                let subsidyAmount = 0;
                
                if (hasSubsidy) {
                    subsidyAmount = Math.min(units * subsidyRate, 100); // Cap subsidy at ₹100
                }
                
                const totalPayable = subtotal - subsidyAmount;
                
                // Update results
                document.getElementById('resultUnits').textContent = units;
                document.getElementById('resultEnergy').textContent = '₹' + totalEnergyCharge.toFixed(2);
                document.getElementById('resultTotal').textContent = '₹' + totalPayable.toFixed(2);
                document.getElementById('subtotal').textContent = '₹' + subtotal.toFixed(2);
                document.getElementById('slabDetails').innerHTML = slabDetailsHTML;
                document.getElementById('totalPayable').textContent = '₹' + totalPayable.toFixed(2);
                
                // Update subsidy section if applicable
                const subsidySection = document.getElementById('subsidySection');
                if (hasSubsidy) {
                    subsidySection.classList.remove('hidden');
                    document.getElementById('subsidyAmount').textContent = '-₹' + subsidyAmount.toFixed(2);
                } else {
                    subsidySection.classList.add('hidden');
                }
                
                // Show result section
                billResult.classList.remove('hidden');
                
                // Scroll to result
                billResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            });
            
            // Print functionality
            printBtn.addEventListener('click', function() {
                window.print();
            });
            
            // Share functionality
            shareBtn.addEventListener('click', function() {
                const units = document.getElementById('resultUnits').textContent;
                const total = document.getElementById('resultTotal').textContent;
                
                const shareData = {
                    title: 'My Electricity Bill Estimate',
                    text: `My Nagaland electricity bill estimate for ${units} units is ${total} (2026 rates). Calculate yours!`,
                    url: window.location.href
                };
                
                if (navigator.share && navigator.canShare(shareData)) {
                    navigator.share(shareData)
                        .catch(error => console.log('Error sharing:', error));
                } else {
                    // Fallback for browsers that don't support Web Share API
                    const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(shareData.text + ' ' + shareData.url)}`;
                    window.open(whatsappUrl, '_blank');
                }
            });
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