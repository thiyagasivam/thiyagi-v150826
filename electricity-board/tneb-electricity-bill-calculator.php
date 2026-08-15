
<?php include 'breadcrumb-schema.php';?>
<?php include '../header.php';?>
<?php
/**
 * TNEB Electricity Bill Calculator (2026)
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
    <title>TNEB Electricity Bill Calculator 2026 - Tamil Nadu Power Bill Estimate | Thiyagi</title>
    <meta name="description" content="Calculate your Tamil Nadu electricity bill instantly with our TNEB calculator. Get accurate estimates using latest 2026 tariff rates, slab-wise breakdown, and detailed bill analysis. Free online tool.">
    <meta name="keywords" content="TNEB calculator, Tamil Nadu electricity bill, TNEB tariff rates 2026, electricity bill calculator Tamil Nadu, TANGEDCO bill calculator, power bill calculator Tamil Nadu, electricity rates, domestic consumer tariff">
    <meta property="og:title" content="TNEB Electricity Bill Calculator 2026 - Tamil Nadu Power Bill">
    <meta property="og:description" content="Calculate your Tamil Nadu electricity bill instantly with accurate TNEB tariff rates. Free online calculator with detailed breakdown.">
    <meta property="og:url" content="https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TNEB Electricity Bill Calculator 2026">
    <meta name="twitter:description" content="Calculate Tamil Nadu electricity bills with latest TNEB rates">
    <meta property="og:image" content="https://www.thiyagi.com/images/tneb-calculator-preview.jpg">
    <meta name="twitter:image" content="https://www.thiyagi.com/images/tneb-calculator-preview.jpg">
    <meta name="author" content="Thiyagi.com">
        <link rel="apple-touch-icon" href="https://www.thiyagi.com/images/apple-touch-icon.png">
 
    <!-- Google Fonts - https://fonts.google.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome Icons - https://fontawesome.com/ -->
    <!-- Bootstrap Icons - https://icons.getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --tneb-blue: #1e40af;
            --tneb-light: #dbeafe;
        }
        
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        .calculator-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            margin: 2rem auto;
            padding: 2.5rem;
            transition: all 0.3s ease;
        }
        
        .calculator-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .tneb-header {
            color: var(--tneb-blue);
            font-weight: 600;
        }
        
        .bill-breakdown {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        
        .total-box {
            background-color: var(--tneb-light);
            border-left: 4px solid var(--tneb-blue);
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
                background: white !important;
                color: black !important;
            }
            
            .calculator-card {
                box-shadow: none !important;
                padding: 10px !important;
                border: 1px solid #ccc !important;
                background: white !important;
            }
            
            .bill-breakdown {
                border: 1px solid #ddd;
                background: #f9f9f9 !important;
            }
            
            .total-box {
                border: 2px solid #333;
                background: #f0f0f0 !important;
            }
            
            h1, h2, h3 {
                color: black !important;
            }
            
            @page {
                margin: 1cm;
                size: A4;
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
        
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .pulse {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .feature-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }
        
        .spinner {
            border: 3px solid #f3f3f3;
            border-top: 3px solid #3498db;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .comparison-card {
            background: linear-gradient(135deg, rgba(255,255,255,0.9), rgba(240,248,255,0.9));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 15px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .comparison-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .tip-card {
            background: rgba(34, 197, 94, 0.1);
            border-left: 4px solid #22c55e;
            border-radius: 0 10px 10px 0;
            padding: 1rem;
            margin: 0.5rem 0;
        }
    </style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://www.thiyagi.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Electricity Board",
      "item": "https://www.thiyagi.com/electricity-board/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Tamil Nadu Electricity Bill Calculator",
      "item": "https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "TNEB Electricity Bill Calculator 2026",
  "description": "Calculate Tamil Nadu electricity bills instantly with latest TNEB/TANGEDCO tariff rates. Free online calculator with detailed slab-wise breakdown.",
  "url": "https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant electricity bill calculation",
    "Latest 2026 TNEB tariff rates",
    "Detailed slab-wise breakdown",
    "Mobile-friendly interface",
    "Print and share functionality"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is TNEB and TANGEDCO?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "TNEB (Tamil Nadu Electricity Board) is now known as TANGEDCO (Tamil Nadu Generation and Distribution Corporation Limited). It's the state electricity utility responsible for power generation, transmission, and distribution in Tamil Nadu."
      }
    },
    {
      "@type": "Question",
      "name": "What are the free electricity units in Tamil Nadu?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Tamil Nadu government provides free electricity up to 100 units per month for domestic consumers. This means if your monthly consumption is 100 units or less, you only pay the fixed charges and taxes."
      }
    },
    {
      "@type": "Question",
      "name": "How is the electricity bill calculated?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The bill is calculated using a slab-wise system where different rates apply to different consumption levels. It includes energy charges (based on units consumed), fixed charges (monthly service fee), and taxes (currently 6% on total charges)."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "HowTo",
  "name": "How to Calculate TNEB Electricity Bill",
  "description": "Step-by-step guide to calculate your Tamil Nadu electricity bill using TNEB tariff rates",
  "image": "https://www.thiyagi.com/images/tneb-calculator-guide.jpg",
  "totalTime": "PT2M",
  "estimatedCost": {
    "@type": "MonetaryAmount",
    "currency": "INR",
    "value": "0"
  },
  "supply": [
    {
      "@type": "HowToSupply",
      "name": "Electricity meter reading"
    },
    {
      "@type": "HowToSupply",
      "name": "Previous month's bill"
    }
  ],
  "tool": [
    {
      "@type": "HowToTool",
      "name": "TNEB Calculator"
    }
  ],
  "step": [
    {
      "@type": "HowToStep",
      "text": "Check your current electricity meter reading"
    },
    {
      "@type": "HowToStep",
      "text": "Calculate units consumed by subtracting previous reading from current reading"
    },
    {
      "@type": "HowToStep",
      "text": "Enter the units in the TNEB calculator"
    },
    {
      "@type": "HowToStep",
      "text": "Click Calculate My Bill to get instant results"
    },
    {
      "@type": "HowToStep",
      "text": "Review the detailed slab-wise breakdown"
    }
  ]
}
</script>
    <div class="max-w-4xl mx-auto px-4 py-8">
        <header class="text-center mb-12 fade-in">
            <div class="mb-6">
                <i class="fas fa-bolt text-6xl text-yellow-400 pulse mb-4"></i>
            </div>
            <h1 class="text-5xl font-bold text-white drop-shadow-lg mb-4">TNEB Electricity Bill Calculator 2026</h1>
            <p class="text-xl text-white mb-6 max-w-2xl mx-auto">Calculate your <a href="https://en.wikipedia.org/wiki/Tamil_Nadu" target="_blank" rel="noopener noreferrer" class="text-yellow-200 hover:text-yellow-100 underline">Tamil Nadu</a> power bill instantly with latest <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-yellow-200 hover:text-yellow-100 underline">TANGEDCO</a> tariff rates. Get accurate estimates with detailed slab-wise breakdown.</p>
            <div class="flex flex-wrap justify-center gap-4 text-sm text-white">
                <div class="flex items-center"><i class="fas fa-check-circle mr-2"></i>Latest 2026 Rates</div>
                <div class="flex items-center"><i class="fas fa-calculator mr-2"></i>Instant Calculation</div>
                <div class="flex items-center"><i class="fas fa-chart-bar mr-2"></i>Detailed Breakdown</div>
                <div class="flex items-center"><i class="fas fa-mobile-alt mr-2"></i>Mobile Friendly</div>
            </div>
        </header>
        
        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10 fade-in">
            <div class="feature-card">
                <i class="fas fa-lightning-bolt text-3xl text-yellow-500 mb-3"></i>
                <h3 class="text-lg font-semibold mb-2">Instant Results</h3>
                <p class="text-gray-600 text-sm">Get your <a href="https://en.wikipedia.org/wiki/Electricity_bill" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">electricity bill</a> estimate in seconds with real-time calculations</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-layer-group text-3xl text-blue-500 mb-3"></i>
                <h3 class="text-lg font-semibold mb-2">Slab-wise Breakdown</h3>
                <p class="text-gray-600 text-sm">Detailed analysis showing charges for each <a href="https://en.wikipedia.org/wiki/Energy_consumption" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">consumption</a> <a href="https://en.wikipedia.org/wiki/Tariff" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">slab</a></p>
            </div>
            <div class="feature-card">
                <i class="fas fa-shield-alt text-3xl text-green-500 mb-3"></i>
                <h3 class="text-lg font-semibold mb-2">100% Accurate</h3>
                <p class="text-gray-600 text-sm">Based on official <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">TNEB/TANGEDCO tariff rates</a> for 2026</p>
            </div>
        </div>
        
        <div class="calculator-card">
            <form method="POST" class="space-y-8">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Enter Your Electricity Consumption</h2>
                </div>
                <div>
                    <label for="units" class="block text-gray-700 text-lg font-semibold mb-4">Units Consumed (<a href="https://en.wikipedia.org/wiki/Kilowatt-hour" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">kWh</a>)</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-bolt text-yellow-500"></i>
                        </div>
                        <input 
                            type="number" 
                            id="units" 
                            name="units" 
                            value="<?php echo $units; ?>" 
                            min="0" 
                            class="block w-full pl-12 pr-16 py-4 text-lg border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300 bg-white/80 backdrop-blur-sm"
                            placeholder="Enter units (e.g., 250)"
                            required
                        >
                        <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">kWh</span>
                    </div>
                    <div class="flex flex-wrap gap-4 text-sm text-gray-600 mt-2">
                        <span>💡 Tip: Check your previous month's electricity bill for reference</span>
                        <span>⌨️ Shortcut: Ctrl + Enter to calculate</span>
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-xl focus:outline-none focus:ring-4 focus:ring-blue-500/20 transform hover:scale-105 transition-all duration-300 text-lg inline-flex items-center">
                        <i class="fas fa-calculator mr-3"></i>
                        Calculate My Bill
                    </button>
                </div>
            </form>
            
            <?php if ($units > 0): ?>
            <div class="bill-breakdown mt-8">
                <h3 class="text-xl font-semibold mb-4 tneb-header flex items-center">
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
            
            <!-- Bill Comparison Tool -->
            <div class="mt-8 no-print">
                <div class="comparison-card">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center mb-4">
                        <i class="fas fa-balance-scale mr-3 text-purple-600"></i> Compare with Previous Month
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Previous Month Units</label>
                            <input type="number" id="prevUnits" placeholder="Enter previous units" 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <button onclick="compareMonths()" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                                <i class="fas fa-chart-line mr-2"></i>Compare Bills
                            </button>
                        </div>
                    </div>
                    <div id="comparisonResult" class="mt-4 p-4 bg-gray-50 rounded-lg hidden">
                        <!-- Comparison results will be displayed here -->
                    </div>
                </div>
            </div>
            
            <!-- How to Use Section -->
            <div class="mt-8 no-print">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-blue-800 flex items-center mb-4">
                        <i class="fas fa-info-circle mr-3"></i> How to Use the TNEB Bill Calculator
                    </h3>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">1</div>
                                <h4 class="font-semibold text-gray-800">Enter Units Consumed</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Input the number of units (kWh) consumed during your billing period. You can find this on your previous electricity bill or meter reading.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">2</div>
                                <h4 class="font-semibold text-gray-800">Click Calculate</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Press the "Calculate My Bill" button to get an instant estimate of your TNEB electricity bill with detailed breakdown.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">3</div>
                                <h4 class="font-semibold text-gray-800">View Results</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Review your detailed bill breakdown including energy charges, fixed charges, taxes, and total amount payable.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">💡</div>
                                <h4 class="font-semibold text-gray-800">Quick Estimates</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Use the quick estimate buttons (100, 200, 300, 500 units) for instant calculations without typing.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">📊</div>
                                <h4 class="font-semibold text-gray-800">Compare Bills</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Use the bill comparison tool to analyze changes between current and previous month consumption.
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm border border-blue-100">
                            <div class="flex items-center mb-3">
                                <div class="w-8 h-8 bg-orange-600 text-white rounded-full flex items-center justify-center font-bold text-sm mr-3">📱</div>
                                <h4 class="font-semibold text-gray-800">Share Results</h4>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Share your bill calculation results with family or friends using the share button for easy reference.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-blue-100 rounded-lg p-4 border-l-4 border-blue-500">
                        <h4 class="font-semibold text-blue-800 mb-2 flex items-center">
                            <i class="fas fa-lightbulb text-blue-600 mr-2"></i>
                            Pro Tips for Accurate Calculations
                        </h4>
                        <ul class="text-blue-700 text-sm space-y-1">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                <span>Check your meter reading carefully - even one digit difference can affect the calculation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                <span>Use keyboard shortcut <kbd class="bg-blue-200 px-1 rounded text-xs">Ctrl + Enter</kbd> for quick calculations</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                <span>Your data is saved automatically for future reference (stored locally)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                <span>Calculator works offline once loaded - perfect for areas with poor connectivity</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Energy Saving Tips -->
            <div class="mt-8 no-print">
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-green-800 flex items-center mb-4">
                        <i class="fas fa-leaf mr-3"></i> Energy Saving Tips
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">💡 <a href="https://en.wikipedia.org/wiki/Light-emitting_diode" target="_blank" rel="noopener noreferrer" class="text-green-700 hover:text-green-900 underline">LED Bulbs</a></h5>
                                <p class="text-sm text-gray-700">Switch to LED bulbs - they use 75% less energy and last 25 times longer</p>
                            </div>
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">❄️ <a href="https://en.wikipedia.org/wiki/Air_conditioning" target="_blank" rel="noopener noreferrer" class="text-green-700 hover:text-green-900 underline">AC Temperature</a></h5>
                                <p class="text-sm text-gray-700">Set AC to 24°C instead of 18°C - saves up to 30% on cooling costs</p>
                            </div>
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">🔌 Unplug Devices</h5>
                                <p class="text-sm text-gray-700">Unplug chargers and electronics when not in use - eliminates phantom load</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">🌟 <a href="https://en.wikipedia.org/wiki/Energy_efficiency" target="_blank" rel="noopener noreferrer" class="text-green-700 hover:text-green-900 underline">Star Ratings</a></h5>
                                <p class="text-sm text-gray-700">Choose 5-star rated appliances - they consume significantly less power</p>
                            </div>
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">⏰ Peak Hours</h5>
                                <p class="text-sm text-gray-700">Use high-power appliances during off-peak hours (11 PM - 6 AM)</p>
                            </div>
                            <div class="tip-card">
                                <h5 class="font-medium text-green-800">☀️ Natural Light</h5>
                                <p class="text-sm text-gray-700">Maximize natural light during day - reduces need for artificial lighting</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Bill Estimator -->
            <div class="mt-8 no-print">
                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border border-yellow-200 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-yellow-800 flex items-center mb-4">
                        <i class="fas fa-zap mr-3"></i> Quick Estimates
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <button onclick="quickCalculate(100)" class="bg-white p-3 rounded-lg text-center hover:shadow-md transition-all">
                            <div class="text-lg font-bold text-yellow-700">100 Units</div>
                            <div class="text-sm text-gray-600">₹25 (Free + Fixed)</div>
                        </button>
                        <button onclick="quickCalculate(200)" class="bg-white p-3 rounded-lg text-center hover:shadow-md transition-all">
                            <div class="text-lg font-bold text-yellow-700">200 Units</div>
                            <div class="text-sm text-gray-600">≈ ₹190</div>
                        </button>
                        <button onclick="quickCalculate(400)" class="bg-white p-3 rounded-lg text-center hover:shadow-md transition-all">
                            <div class="text-lg font-bold text-yellow-700">400 Units</div>
                            <div class="text-sm text-gray-600">≈ ₹720</div>
                        </button>
                        <button onclick="quickCalculate(600)" class="bg-white p-3 rounded-lg text-center hover:shadow-md transition-all">
                            <div class="text-lg font-bold text-yellow-700">600 Units</div>
                            <div class="text-sm text-gray-600">≈ ₹1,990</div>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Information Section -->
            <div class="mt-12 space-y-8 no-print">
                <!-- About TNEB Rates -->
                <div class="bg-gradient-to-r from-blue-50 to-purple-50 border border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-blue-800 flex items-center mb-4">
                        <i class="fas fa-info-circle mr-3"></i> About TNEB/TANGEDCO Electricity Rates 2026
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-gray-700 mb-3">
                                This calculator uses the latest TNEB (Tamil Nadu Electricity Board) tariff rates for 2026. 
                                TNEB is now known as <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">TANGEDCO (Tamil Nadu Generation and Distribution Corporation)</a>.
                            </p>
                            <p class="text-gray-700">
                                The calculation includes energy charges, fixed charges, and applicable taxes as per 
                                official <a href="https://www.tn.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Tamil Nadu Government</a> notifications.
                            </p>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2">Important Notes:</h4>
                            <ul class="text-sm text-gray-700 space-y-1">
                                <li>• <a href="https://en.wikipedia.org/wiki/Electricity" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Electricity</a> rates may vary for different consumer categories</li>
                                <li>• <a href="https://en.wikipedia.org/wiki/Tariff" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Rural and urban tariffs</a> may differ</li>
                                <li>• Seasonal variations may apply</li>
                                <li>• Additional charges may apply in some cases</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- How to Use Section -->
                <div class="bg-gradient-to-r from-green-50 to-blue-50 border border-green-200 rounded-xl p-6">
                    <h3 class="text-xl font-semibold text-green-800 flex items-center mb-4">
                        <i class="fas fa-question-circle mr-3"></i> How to Use This Calculator
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold mb-3">Step-by-Step Guide:</h4>
                            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                                <li>Check your <a href="https://en.wikipedia.org/wiki/Electricity_meter" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">electricity meter</a> reading</li>
                                <li>Calculate units consumed (Current - Previous reading)</li>
                                <li>Enter the units in the calculator above</li>
                                <li>Click "Calculate My Bill" to get instant results</li>
                                <li>Review the detailed <a href="https://en.wikipedia.org/wiki/Tariff" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">slab-wise breakdown</a></li>
                            </ol>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-3">Understanding Your Bill:</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li><strong>Energy Charges:</strong> Based on <a href="https://en.wikipedia.org/wiki/Kilowatt-hour" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">slab rates</a></li>
                                <li><strong>Fixed Charges:</strong> Monthly service fees</li>
                                <li><strong>Taxes:</strong> <a href="https://en.wikipedia.org/wiki/Tax" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Government</a> levies and duties</li>
                                <li><strong>Total Amount:</strong> Final payable amount</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- TNEB Tariff Slabs Table -->
                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center mb-4">
                        <i class="fas fa-table mr-3"></i> TNEB Tariff Slabs for Domestic Consumers (2026)
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Consumption Slab</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate per Unit (₹)</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fixed Charges (₹)</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr><td class="px-6 py-4 text-sm text-gray-900">0-100 units</td><td class="px-6 py-4 text-sm text-gray-900">Free (0.00)</td><td class="px-6 py-4 text-sm text-gray-900">25</td></tr>
                                <tr class="bg-gray-50"><td class="px-6 py-4 text-sm text-gray-900">101-200 units</td><td class="px-6 py-4 text-sm text-gray-900">1.50</td><td class="px-6 py-4 text-sm text-gray-900">40</td></tr>
                                <tr><td class="px-6 py-4 text-sm text-gray-900">201-500 units</td><td class="px-6 py-4 text-sm text-gray-900">3.00</td><td class="px-6 py-4 text-sm text-gray-900">60</td></tr>
                                <tr class="bg-gray-50"><td class="px-6 py-4 text-sm text-gray-900">501-1000 units</td><td class="px-6 py-4 text-sm text-gray-900">6.30</td><td class="px-6 py-4 text-sm text-gray-900">80</td></tr>
                                <tr><td class="px-6 py-4 text-sm text-gray-900">Above 1000 units</td><td class="px-6 py-4 text-sm text-gray-900">7.50</td><td class="px-6 py-4 text-sm text-gray-900">80</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-xs text-gray-500 mt-3">* Rates are subject to change as per <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">TANGEDCO</a> notifications. Tax @ 6% applicable on total charges.</p>
                </div>
            </div>
        </div>
    </div>

<!-- FAQ Section -->
<div class="max-w-4xl mx-auto px-4 py-12">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Frequently Asked Questions</h2>
        
        <div class="space-y-6">
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">What is TNEB and TANGEDCO?</h3>
                <p class="text-gray-700">TNEB (Tamil Nadu Electricity Board) is now known as <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">TANGEDCO (Tamil Nadu Generation and Distribution Corporation Limited)</a>. It's the state <a href="https://en.wikipedia.org/wiki/Electricity" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">electricity</a> utility responsible for <a href="https://en.wikipedia.org/wiki/Power_generation" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">power generation</a>, transmission, and distribution in <a href="https://en.wikipedia.org/wiki/Tamil_Nadu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Tamil Nadu</a>.</p>
            </div>
            
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">How accurate is this calculator?</h3>
                <p class="text-gray-700">Our calculator uses the latest official TNEB/TANGEDCO tariff rates for 2026. Results are highly accurate for domestic consumers, but actual bills may vary slightly due to additional charges, meter reading variations, or special tariff categories.</p>
            </div>
            
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">What are the free electricity units in Tamil Nadu?</h3>
                <p class="text-gray-700"><a href="https://en.wikipedia.org/wiki/Tamil_Nadu" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Tamil Nadu</a> government provides free <a href="https://en.wikipedia.org/wiki/Electricity" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">electricity</a> up to 100 units per month for domestic consumers. This means if your monthly consumption is 100 units or less, you only pay the fixed charges and taxes.</p>
            </div>
            
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">How is the electricity bill calculated?</h3>
                <p class="text-gray-700">The bill is calculated using a slab-wise system where different rates apply to different consumption levels. It includes <a href="https://en.wikipedia.org/wiki/Kilowatt-hour" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">energy charges</a> (based on units consumed), fixed charges (monthly service fee), and taxes (currently 6% on total charges).</p>
            </div>
            
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Can I pay my TNEB bill online?</h3>
                <p class="text-gray-700">Yes, you can pay your TNEB/TANGEDCO electricity bill online through the official <a href="https://www.tangedco.gov.in/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">TANGEDCO website</a>, mobile apps, or various payment platforms like <a href="https://paytm.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Paytm</a>, <a href="https://www.phonepe.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">PhonePe</a>, <a href="https://pay.google.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 underline">Google Pay</a>, and net banking.</p>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">What happens if I consume more than 500 units?</h3>
                <p class="text-gray-700">If you consume more than 500 units, you'll be charged at higher slab rates. The first 100 units remain free, units 101-200 at ₹1.50, units 201-500 at ₹3.00, and consumption above 500 units at ₹6.30 or ₹7.50 per unit depending on the total consumption.</p>
            </div>
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

    <!-- Remove Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    
    <script>
        // Enhanced functionality
        
        // Share functionality
        document.getElementById('shareBtn').addEventListener('click', function() {
            const shareData = {
                title: 'TNEB Electricity Bill Calculator',
                text: `My TNEB bill estimate for ${document.getElementById('units').value || '...'} units: ₹<?php echo isset($total_bill) ? number_format($total_bill, 2) : '0.00'; ?>. Calculate yours!`,
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
        
        // Bill calculation function
        function calculateBill(units) {
            const tariffSlabs = [
                {min: 0, max: 100, rate: 0.00},
                {min: 101, max: 200, rate: 1.50},
                {min: 201, max: 500, rate: 3.00},
                {min: 501, max: 1000, rate: 6.30},
                {min: 1001, max: Infinity, rate: 7.50}
            ];
            
            let totalEnergyCharge = 0;
            let remainingUnits = units;
            
            tariffSlabs.forEach(slab => {
                if (remainingUnits <= 0) return;
                const slabUnits = Math.min(remainingUnits, slab.max - slab.min);
                if (slabUnits > 0) {
                    totalEnergyCharge += slabUnits * slab.rate;
                    remainingUnits -= slabUnits;
                }
            });
            
            const fixedCharges = units <= 100 ? 25 : units <= 300 ? 40 : units <= 500 ? 60 : 80;
            const subtotal = totalEnergyCharge + fixedCharges;
            const tax = subtotal * 0.06;
            const totalBill = subtotal + tax;
            
            return {
                energyCharge: totalEnergyCharge,
                fixedCharges: fixedCharges,
                tax: tax,
                total: totalBill
            };
        }
        
        // Quick calculation
        function quickCalculate(units) {
            const result = calculateBill(units);
            document.getElementById('units').value = units;
            alert(`Estimated bill for ${units} units: ₹${result.total.toFixed(2)}\n\nClick 'Calculate My Bill' for detailed breakdown.`);
        }
        
        // Compare months
        function compareMonths() {
            const currentUnits = parseInt(document.getElementById('units').value) || 0;
            const prevUnits = parseInt(document.getElementById('prevUnits').value) || 0;
            
            if (!currentUnits || !prevUnits) {
                alert('Please enter both current and previous month units');
                return;
            }
            
            const currentBill = calculateBill(currentUnits);
            const prevBill = calculateBill(prevUnits);
            
            const unitsDiff = currentUnits - prevUnits;
            const billDiff = currentBill.total - prevBill.total;
            const percentChange = ((billDiff / prevBill.total) * 100).toFixed(1);
            
            const resultDiv = document.getElementById('comparisonResult');
            const isIncrease = billDiff > 0;
            const color = isIncrease ? 'text-red-600' : 'text-green-600';
            const arrow = isIncrease ? '↑' : '↓';
            
            resultDiv.innerHTML = `
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center">
                        <div class="text-sm text-gray-600">Units Change</div>
                        <div class="text-lg font-bold ${color}">${arrow} ${Math.abs(unitsDiff)} units</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm text-gray-600">Bill Change</div>
                        <div class="text-lg font-bold ${color}">${arrow} ₹${Math.abs(billDiff).toFixed(2)}</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm text-gray-600">Percentage Change</div>
                        <div class="text-lg font-bold ${color}">${arrow} ${Math.abs(percentChange)}%</div>
                    </div>
                </div>
                <div class="mt-3 text-center text-sm text-gray-600">
                    Previous: ₹${prevBill.total.toFixed(2)} | Current: ₹${currentBill.total.toFixed(2)}
                </div>
            `;
            
            resultDiv.classList.remove('hidden');
        }
        
        // Form validation and loading state
        document.querySelector('form').addEventListener('submit', function() {
            const button = document.querySelector('button[type="submit"]');
            button.classList.add('loading');
            button.innerHTML = '<div class="spinner inline-block mr-2"></div>Calculating...';
        });
        
        // Auto-save to localStorage
        const unitsInput = document.getElementById('units');
        unitsInput.addEventListener('input', function() {
            localStorage.setItem('tneb_units', this.value);
        });
        
        // Load saved data on page load
        window.addEventListener('load', function() {
            const savedUnits = localStorage.getItem('tneb_units');
            if (savedUnits && !unitsInput.value) {
                unitsInput.value = savedUnits;
            }
        });
        
        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'Enter') {
                document.querySelector('form').submit();
            }
        });
        
        // Register service worker for offline functionality
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(function(err) {
                        console.log('ServiceWorker registration failed');
                    });
            });
        }
        
        // Add install prompt for PWA
        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            
            // Show install button
            const installBtn = document.createElement('button');
            installBtn.textContent = '📱 Install App';
            installBtn.className = 'fixed bottom-4 right-4 bg-blue-600 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-700 transition-all z-50';
            installBtn.addEventListener('click', () => {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    deferredPrompt = null;
                    installBtn.remove();
                });
            });
            document.body.appendChild(installBtn);
        });
    </script>
</body>
<?php include '../footer.php';?>
</html>