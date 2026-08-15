
<?php include 'header.php'; ?>
<?php
$result = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distance = isset($_POST['distance']) ? floatval($_POST['distance']) : 0;
    $mileage = isset($_POST['mileage']) ? floatval($_POST['mileage']) : 0;
    $fuel_price = isset($_POST['fuel_price']) ? floatval($_POST['fuel_price']) : 0;
    if ($distance <= 0) {
        $error = 'Please enter a valid distance greater than 0.';
    } elseif ($mileage <= 0) {
        $error = 'Please enter a valid mileage greater than 0.';
    } elseif ($fuel_price <= 0) {
        $error = 'Please enter a valid fuel price greater than 0.';
    } else {
        $fuel_needed = $distance / $mileage;
        $cost = $fuel_needed * $fuel_price;
        $result = "<span class='font-semibold'>Fuel needed:</span> <span class='text-blue-700 font-bold'>" . number_format($fuel_needed, 2) . " liters</span><br><span class='font-semibold'>Total cost:</span> <span class='text-green-700 font-bold'>₹" . number_format($cost, 2) . "</span>";
    }
}
?>
    <title>Fuel Cost Calculator 2026 - Calculate Your Travel Fuel Expenses</title>
    <meta name="description" content="2026 Fuel Cost Calculator: Instantly estimate your travel fuel expenses for any trip, commute, or journey. Modern, SEO-friendly, mobile-ready tool for India and worldwide.">
    <meta name="keywords" content="fuel cost calculator 2026, travel fuel cost, mileage calculator, petrol calculator, trip cost, india, online tool">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/fuel-cost-calculator">
    <meta property="og:title" content="Fuel Cost Calculator 2026 - Calculate Your Travel Fuel Expenses">
    <meta property="og:description" content="2026 Fuel Cost Calculator: Instantly estimate your travel fuel expenses for any trip, commute, or journey. Modern, SEO-friendly, mobile-ready tool.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/fuel-cost-calculator">
    <meta property="twitter:title" content="Fuel Cost Calculator 2026 - Calculate Your Travel Fuel Expenses">
    <meta property="twitter:description" content="2026 Fuel Cost Calculator: Instantly estimate your travel fuel expenses for any trip, commute, or journey. Modern, SEO-friendly, mobile-ready tool.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Fuel Cost Calculator 2026",
        "description": "2026 Fuel Cost Calculator: Instantly estimate your travel fuel expenses for any trip, commute, or journey. Modern, SEO-friendly, mobile-ready tool.",
        "url": "https://www.thiyagi.com/fuel-cost-calculator",
        "applicationCategory": "FinanceApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi",
            "url": "https://www.thiyagi.com"
        },
        "featureList": [
            "Fuel cost calculation",
            "Mileage calculation",
            "Trip planning",
            "SEO optimized",
            "2026 updated"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I calculate fuel cost for a trip in 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Enter your trip distance, vehicle mileage, and current fuel price. The 2026 calculator gives instant results."
            }
        },{
            "@type": "Question",
            "name": "Is this fuel cost calculator updated for 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, this tool is updated for 2026 and works for all vehicles and fuel types."
            }
        },{
            "@type": "Question",
            "name": "Can I use this for travel and commute planning?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! Use the result to plan trips, daily commutes, or link to our distance calculator."
            }
        }]
    }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                            <svg class="w-3 h-3 mr-2.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <a href="/calculators" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Calculators</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Fuel Cost Calculator</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="mt-8 max-w-xl mx-auto">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-yellow-600 px-6 py-4">
                        <h2 class="text-xl font-bold text-white">🔗 Related Calculators</h2>
                    </div>
                    <div class="p-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <a href="/distance-calculator" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-200">
                                <h4 class="font-semibold text-blue-800">Distance Calculator 2026</h4>
                                <p class="text-blue-700 text-sm">Find distance between cities or locations</p>
                            </a>
                            <a href="/railway-bike-parcel-charges-calculator" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition duration-200">
                                <h4 class="font-semibold text-green-800">Railway Bike Parcel Charges 2026</h4>
                                <p class="text-green-700 text-sm">Calculate Indian Railways bike parcel cost</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    <style>
        .calculator-card {
            background: linear-gradient(135deg, #fbbf24 0%, #6366f1 100%);
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .result-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0f9ff 100%);
            border: 1px solid #0ea5e9;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="calculator-container max-w-xl mx-auto">
            <div class="calculator-card glass-effect mb-8">
                <div class="text-center px-8 py-6">
                    <h1 class="text-3xl font-bold mb-2 text-black">⛽ Fuel Cost Calculator</h1>
                    <p class="text-black text-lg">Calculate your travel fuel expenses easily</p>
                </div>
            </div>
            <h2 class="text-xl font-semibold text-yellow-700 mb-4 text-center">Fuel Cost Calculator Form 2026</h2>
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                <?php if ($error): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-red-800"><?= htmlspecialchars($error) ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="p-8">
                    <form method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="distance" class="block text-sm font-semibold text-gray-700 mb-2">Distance (km) <span class="text-red-500">*</span></label>
                                <input type="number" name="distance" id="distance" step="0.01" min="0.01" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter distance in kilometers" value="<?= htmlspecialchars($_POST['distance'] ?? '') ?>" required>
                            </div>
                            <div>
                                <label for="mileage" class="block text-sm font-semibold text-gray-700 mb-2">Mileage (km/liter) <span class="text-red-500">*</span></label>
                                <input type="number" name="mileage" id="mileage" step="0.01" min="0.01" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter vehicle mileage" value="<?= htmlspecialchars($_POST['mileage'] ?? '') ?>" required>
                            </div>
                        </div>
                        <div>
                            <label for="fuel_price" class="block text-sm font-semibold text-gray-700 mb-2">Fuel Price (per liter) <span class="text-red-500">*</span></label>
                            <input type="number" name="fuel_price" id="fuel_price" step="0.01" min="0.01" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter fuel price per liter" value="<?= htmlspecialchars($_POST['fuel_price'] ?? '') ?>" required>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-white bg-gradient-to-r from-yellow-500 to-indigo-600 hover:from-yellow-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                                <span class="mr-3">🧮</span> Calculate Fuel Cost
                            </button>
                        </div>
                    </form>
                    <?php if ($result): ?>
                    <div class="mt-8 result-card p-6 text-center">
                        <h2 class="text-2xl font-bold text-yellow-700 mb-2">⛽ Result</h2>
                        <div class="text-lg text-gray-800 mb-2"><?= $result ?></div>
                        <button onclick="window.print()" class="mt-4 px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors">🖨️ Print</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="mt-8 max-w-xl mx-auto">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-yellow-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">ℹ️ How to Use</h2>
                </div>
                <div class="p-6">
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Enter the total distance you plan to travel in kilometers.</li>
                        <li>Input your vehicle's mileage (km per liter).</li>
                        <li>Enter the current fuel price per liter.</li>
                        <li>Click <strong>Calculate Fuel Cost</strong> to see the result instantly.</li>
                        <li>Use the print button to save or share your result.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
