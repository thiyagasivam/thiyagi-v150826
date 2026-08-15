<?php include 'header.php'; ?>
<?php
// Enhanced Railway bike parcel charges calculation function
function calculateParcelCharges($distance, $bikeWeight, $packingCharges = 0, $insurance = 0, $bikeType = 'standard', $serviceType = 'regular') {
    // Updated 2026 rates based on bike type and service
    $baseRates = [
        'standard' => 120,
        'heavy' => 150,
        'electric' => 140,
        'premium' => 160
    ];
    
    $perKmRates = [
        'regular' => 5.5,
        'express' => 8.0,
        'superfast' => 12.0
    ];
    
    $perKgRates = [
        'standard' => 3.2,
        'heavy' => 4.0,
        'electric' => 3.5,
        'premium' => 4.5
    ];
    
    // Get rates based on bike type and service
    $baseRate = $baseRates[$bikeType] ?? $baseRates['standard'];
    $perKmRate = $perKmRates[$serviceType] ?? $perKmRates['regular'];
    $perKgRate = $perKgRates[$bikeType] ?? $perKgRates['standard'];
    
    // Calculate charges
    $distanceCharge = $distance * $perKmRate;
    $weightCharge = $bikeWeight * $perKgRate;
    
    // Additional charges based on distance
    $handlingCharge = ($distance > 500) ? 100 : (($distance > 200) ? 50 : 25);
    $fuelSurcharge = $distance * 0.5; // Fuel surcharge
    
    // Service tax and other government charges
    $serviceTax = ($baseRate + $distanceCharge + $weightCharge) * 0.18; // 18% GST
    
    $subTotal = $baseRate + $distanceCharge + $weightCharge + $handlingCharge + $fuelSurcharge;
    $totalBeforeTax = $subTotal + $packingCharges + $insurance;
    $totalCharge = $totalBeforeTax + $serviceTax;
    
    // Calculate estimated delivery time
    $deliveryDays = calculateDeliveryTime($distance, $serviceType);
    
    return [
        'base_rate' => $baseRate,
        'distance_charge' => $distanceCharge,
        'weight_charge' => $weightCharge,
        'handling_charge' => $handlingCharge,
        'fuel_surcharge' => $fuelSurcharge,
        'packing_charges' => $packingCharges,
        'insurance' => $insurance,
        'service_tax' => $serviceTax,
        'sub_total' => $subTotal,
        'total_before_tax' => $totalBeforeTax,
        'total_charge' => $totalCharge,
        'delivery_days' => $deliveryDays,
        'per_km_rate' => $perKmRate,
        'per_kg_rate' => $perKgRate
    ];
}

function calculateDeliveryTime($distance, $serviceType) {
    $baseDays = [
        'regular' => ['min' => 3, 'max' => 7],
        'express' => ['min' => 2, 'max' => 4],
        'superfast' => ['min' => 1, 'max' => 2]
    ];
    
    $service = $baseDays[$serviceType] ?? $baseDays['regular'];
    
    // Adjust based on distance
    if ($distance > 1000) {
        $service['min'] += 2;
        $service['max'] += 3;
    } elseif ($distance > 500) {
        $service['min'] += 1;
        $service['max'] += 2;
    }
    
    return $service;
}

function getBikeTypeDetails($bikeType) {
    $details = [
        'standard' => ['name' => 'Standard Bike', 'desc' => 'Regular motorcycles (100-200cc)', 'icon' => '🏍️'],
        'heavy' => ['name' => 'Heavy Bike', 'desc' => 'Heavy motorcycles (>300cc)', 'icon' => '🏍️'],
        'electric' => ['name' => 'Electric Bike', 'desc' => 'Electric motorcycles & scooters', 'icon' => '⚡'],
        'premium' => ['name' => 'Premium Bike', 'desc' => 'Luxury & imported bikes', 'icon' => '🏆']
    ];
    return $details[$bikeType] ?? $details['standard'];
}

// Handle form submission
$result = null;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distance = floatval($_POST['distance'] ?? 0);
    $bikeWeight = floatval($_POST['weight'] ?? 0);
    $packingCharges = floatval($_POST['packing_charges'] ?? 0);
    $insurance = floatval($_POST['insurance'] ?? 0);
    $bikeType = $_POST['bike_type'] ?? 'standard';
    $serviceType = $_POST['service_type'] ?? 'regular';
    
    // Validation
    if ($distance <= 0) {
        $error = 'Please enter a valid distance greater than 0 km.';
    } elseif ($bikeWeight <= 0) {
        $error = 'Please enter a valid bike weight greater than 0 kg.';
    } elseif ($distance > 5000) {
        $error = 'Distance cannot exceed 5000 km for railway parcel service.';
    } elseif ($bikeWeight > 500) {
        $error = 'Bike weight cannot exceed 500 kg for railway parcel service.';
    } else {
        $result = calculateParcelCharges($distance, $bikeWeight, $packingCharges, $insurance, $bikeType, $serviceType);
    }
}
?>

    <title>Railway Bike Parcel Charges Calculator 2026 - Indian Railways Two-Wheeler Transport Cost</title>
    <meta name="description" content="Calculate Indian Railways bike parcel charges instantly. Check 2026 freight rates for two-wheelers (bikes, scooters) between stations with delivery time estimates and booking tips.">
    <meta name="keywords" content="railway bike parcel charges, indian railways freight calculator, two wheeler transport cost, bike shipping charges, railway parcel booking, motorcycle transport rates">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/railway-bike-parcel-charges-calculator">
    <meta property="og:title" content="Railway Bike Parcel Charges Calculator 2026 - Indian Railways">
    <meta property="og:description" content="Calculate Indian Railways bike parcel charges instantly. Check 2026 freight rates for two-wheelers between stations with delivery estimates.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/railway-bike-parcel-charges-calculator">
    <meta property="twitter:title" content="Railway Bike Parcel Charges Calculator 2026 - Indian Railways">
    <meta property="twitter:description" content="Calculate Indian Railways bike parcel charges instantly. Check 2026 freight rates for two-wheelers between stations.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Railway Bike Parcel Charges Calculator",
        "description": "Calculate Indian Railways bike parcel charges instantly. Check freight rates for two-wheelers between stations with delivery time estimates.",
        "url": "https://www.thiyagi.com/railway-bike-parcel-charges-calculator",
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
            "Railway parcel charge calculation",
            "Distance-based pricing",
            "Weight-based pricing",
            "Insurance calculation",
            "Packing charges estimation"
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.thiyagi.com"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "Calculators",
            "item": "https://www.thiyagi.com/calculators"
        },{
            "@type": "ListItem",
            "position": 3,
            "name": "Railway Bike Parcel Calculator",
            "item": "https://www.thiyagi.com/railway-bike-parcel-charges-calculator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How to calculate railway bike parcel charges?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Railway bike parcel charges are calculated based on distance (per km rate), bike weight (per kg rate), plus base charges, packing charges, and optional insurance. Our calculator provides instant estimates using current Indian Railways rates."
            }
        },{
            "@type": "Question",
            "name": "What documents are required for bike parcel booking?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For bike parcel booking in Indian Railways, you need: Original RC (Registration Certificate), Insurance papers, ID proof, Address proof, and PUC certificate. Ensure all documents are valid and match the bike details."
            }
        },{
            "@type": "Question",
            "name": "How long does railway bike parcel delivery take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Railway bike parcel delivery typically takes 2-7 days depending on distance and route connectivity. Express trains may deliver faster, while goods trains take longer. Check with your local railway station for specific route timings."
            }
        },{
            "@type": "Question",
            "name": "Is insurance mandatory for bike parcel in railways?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Insurance is not mandatory but highly recommended for bike parcel. It protects against damage, theft, or loss during transit. Insurance cost is typically 0.1-0.2% of declared bike value with minimum charges applicable."
            }
        }]
    }
    </script>
    <style>
        .calculator-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .result-item:hover {
            background-color: #f8fafc;
            padding-left: 8px;
        }
        .subtotal-item {
            border-top: 2px solid #e2e8f0;
            margin-top: 12px;
            padding-top: 12px;
            background-color: #f1f5f9;
            border-radius: 6px;
            padding: 12px;
        }
        .total-result {
            font-weight: bold;
            color: #1e40af;
            border-top: 3px solid #1e40af;
            margin-top: 16px;
            padding-top: 16px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 8px;
            padding: 16px;
            font-size: 1.1em;
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            transform: translateY(-1px);
        }
        .form-label {
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .calculator-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .input-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
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
        .progress-bar {
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            border-radius: 2px;
            transition: width 0.5s ease;
        }
        .tooltip {
            position: relative;
        }
        .tooltip:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #1f2937;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 1000;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Railway Bike Parcel Calculator</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="calculator-container">
            <div class="calculator-card glass-effect">
                <div class="text-center px-8 py-6">
                    <h1 class="text-3xl font-bold mb-2 text-black">🚂 Railway Bike Parcel Calculator</h1>
                    <p class="text-black text-lg">Calculate accurate charges for bike transportation via Indian Railways</p>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden mt-6">
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
                    <form method="POST" class="space-y-6" id="calculatorForm">
                        <!-- Route Information -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                                <span class="mr-2">🗺️</span> Route Information
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="distance" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Distance (km) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="distance" id="distance" step="0.01" min="1" max="5000"
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter distance in kilometers" 
                                               value="<?= htmlspecialchars($_POST['distance'] ?? '') ?>" required>
                                        <span class="input-icon">📏</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Distance between source and destination stations</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="service_type" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Service Type <span class="text-red-500">*</span>
                                    </label>
                                    <select name="service_type" id="service_type" 
                                            class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none">
                                        <option value="regular" <?= ($_POST['service_type'] ?? '') === 'regular' ? 'selected' : '' ?>>
                                            🚂 Regular Service (₹5.5/km)
                                        </option>
                                        <option value="express" <?= ($_POST['service_type'] ?? '') === 'express' ? 'selected' : '' ?>>
                                            🚄 Express Service (₹8.0/km)
                                        </option>
                                        <option value="superfast" <?= ($_POST['service_type'] ?? '') === 'superfast' ? 'selected' : '' ?>>
                                            ⚡ Superfast Service (₹12.0/km)
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bike Information -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                                <span class="mr-2">🏍️</span> Bike Information
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="weight" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Bike Weight (kg) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="weight" id="weight" step="0.1" min="1" max="500"
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter bike weight in kilograms" 
                                               value="<?= htmlspecialchars($_POST['weight'] ?? '') ?>" required>
                                        <span class="input-icon">⚖️</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Include fuel and accessories weight</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bike_type" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Bike Category <span class="text-red-500">*</span>
                                    </label>
                                    <select name="bike_type" id="bike_type" 
                                            class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none">
                                        <option value="standard" <?= ($_POST['bike_type'] ?? '') === 'standard' ? 'selected' : '' ?>>
                                            🏍️ Standard (100-200cc) - ₹120 base
                                        </option>
                                        <option value="heavy" <?= ($_POST['bike_type'] ?? '') === 'heavy' ? 'selected' : '' ?>>
                                            🏍️ Heavy Bike (>300cc) - ₹150 base
                                        </option>
                                        <option value="electric" <?= ($_POST['bike_type'] ?? '') === 'electric' ? 'selected' : '' ?>>
                                            ⚡ Electric Vehicle - ₹140 base
                                        </option>
                                        <option value="premium" <?= ($_POST['bike_type'] ?? '') === 'premium' ? 'selected' : '' ?>>
                                            🏆 Premium/Imported - ₹160 base
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Charges -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-200">
                            <h3 class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                                <span class="mr-2">💰</span> Additional Charges (Optional)
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="packing_charges" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Packing Charges (₹)
                                        <span class="tooltip" data-tooltip="Professional packing service charges">ℹ️</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="packing_charges" id="packing_charges" step="1" min="0" 
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter packing charges" 
                                               value="<?= htmlspecialchars($_POST['packing_charges'] ?? '0') ?>">
                                        <span class="input-icon">📦</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Typical range: ₹200-500</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="insurance" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Insurance Value (₹)
                                        <span class="tooltip" data-tooltip="Declared value for insurance coverage">ℹ️</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="insurance" id="insurance" step="1" min="0" 
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter insurance amount" 
                                               value="<?= htmlspecialchars($_POST['insurance'] ?? '0') ?>">
                                        <span class="input-icon">🛡️</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Insurance premium: 0.1-0.2% of declared value</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" 
                                    class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                                <span class="mr-3">🧮</span> Calculate Parcel Charges
                            </button>
                        </div>
                    </form>
                
                <?php if ($result): ?>
                <div class="mt-8">
                    <!-- Results Header -->
                    <div class="result-card p-6 mb-6">
                        <div class="text-center mb-6">
                            <h2 class="text-2xl font-bold text-blue-800 mb-2">📊 Calculation Results</h2>
                            <p class="text-blue-600">Detailed breakdown of your railway bike parcel charges</p>
                        </div>
                        
                        <!-- Quick Summary Cards -->
                        <div class="grid md:grid-cols-3 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-green-100 to-green-200 p-4 rounded-lg text-center border border-green-300">
                                <div class="text-2xl mb-2">💰</div>
                                <div class="text-2xl font-bold text-green-800">₹<?= number_format($result['total_charge'], 0) ?></div>
                                <div class="text-sm text-green-700">Total Amount</div>
                            </div>
                            <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-4 rounded-lg text-center border border-blue-300">
                                <div class="text-2xl mb-2">📦</div>
                                <div class="text-2xl font-bold text-blue-800"><?= $result['delivery_days']['min'] ?>-<?= $result['delivery_days']['max'] ?></div>
                                <div class="text-sm text-blue-700">Delivery Days</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-4 rounded-lg text-center border border-purple-300">
                                <div class="text-2xl mb-2">🏍️</div>
                                <div class="text-xl font-bold text-purple-800"><?= htmlspecialchars($_POST['weight']) ?> kg</div>
                                <div class="text-sm text-purple-700">Bike Weight</div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Breakdown -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b">
                            <h3 class="text-lg font-semibold text-gray-800">💳 Detailed Charge Breakdown</h3>
                        </div>
                        
                        <div class="p-6 space-y-3">
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🏷️</span>
                                    <span class="font-medium">Base Rate (<?= getBikeTypeDetails($_POST['bike_type'] ?? 'standard')['name'] ?>):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['base_rate'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📏</span>
                                    <span class="font-medium">Distance Charge (<?= htmlspecialchars($_POST['distance']) ?> km × ₹<?= $result['per_km_rate'] ?>/km):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['distance_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">⚖️</span>
                                    <span class="font-medium">Weight Charge (<?= htmlspecialchars($_POST['weight']) ?> kg × ₹<?= $result['per_kg_rate'] ?>/kg):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['weight_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🚛</span>
                                    <span class="font-medium">Handling Charge:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['handling_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">⛽</span>
                                    <span class="font-medium">Fuel Surcharge:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['fuel_surcharge'], 2) ?></span>
                            </div>
                            
                            <?php if ($result['packing_charges'] > 0): ?>
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📦</span>
                                    <span class="font-medium">Packing Charges:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['packing_charges'], 2) ?></span>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($result['insurance'] > 0): ?>
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🛡️</span>
                                    <span class="font-medium">Insurance:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['insurance'], 2) ?></span>
                            </div>
                            <?php endif; ?>
                            
                            <div class="result-item subtotal-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📋</span>
                                    <span class="font-semibold">Subtotal (Before Tax):</span>
                                </div>
                                <span class="font-bold text-blue-600">₹<?= number_format($result['total_before_tax'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🧾</span>
                                    <span class="font-medium">GST (18%):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['service_tax'], 2) ?></span>
                            </div>
                            
                            <div class="result-item total-result">
                                <div class="flex items-center">
                                    <span class="mr-2">💰</span>
                                    <span class="font-bold text-lg">Total Estimated Charges:</span>
                                </div>
                                <span class="font-bold text-xl text-blue-800">₹<?= number_format($result['total_charge'], 2) ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Information -->
                    <div class="mt-6 grid md:grid-cols-2 gap-6">
                        <!-- Delivery Information -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h4 class="font-semibold text-green-800 mb-3 flex items-center">
                                <span class="mr-2">🚚</span> Delivery Information
                            </h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span>Service Type:</span>
                                    <span class="font-medium capitalize"><?= htmlspecialchars($_POST['service_type'] ?? 'regular') ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Estimated Delivery:</span>
                                    <span class="font-medium"><?= $result['delivery_days']['min'] ?>-<?= $result['delivery_days']['max'] ?> days</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Distance:</span>
                                    <span class="font-medium"><?= htmlspecialchars($_POST['distance']) ?> km</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cost per KM/KG -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                                <span class="mr-2">📊</span> Rate Analysis
                            </h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span>Cost per KM:</span>
                                    <span class="font-medium">₹<?= number_format($result['per_km_rate'], 2) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Cost per KG:</span>
                                    <span class="font-medium">₹<?= number_format($result['per_kg_rate'], 2) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Total per KM:</span>
                                    <span class="font-medium">₹<?= number_format($result['total_charge'] / floatval($_POST['distance']), 2) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <button onclick="printResults()" class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                            <span class="mr-2">🖨️</span> Print Results
                        </button>
                        <button onclick="shareResults()" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            <span class="mr-2">📱</span> Share Results
                        </button>
                        <button onclick="calculateAgain()" class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <span class="mr-2">🔄</span> Calculate Again
                        </button>
                    </div>
                    
                    <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <span class="text-yellow-400 text-xl">⚠️</span>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    <strong>Important:</strong> These are estimated charges based on 2026 Indian Railways rates. 
                                    Actual charges may vary based on specific railway policies, route, and additional services. 
                                    Please confirm with your local railway parcel office before booking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Educational Content Section -->
        <div class="mt-8 space-y-8">
            <!-- How It Works -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-green-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">🚂 How Railway Bike Parcel Works</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">📋 Booking Process</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                                <li>Visit the originating railway station's parcel office</li>
                                <li>Submit required documents and fill parcel booking form</li>
                                <li>Pay calculated charges (use our calculator for estimates)</li>
                                <li>Get parcel receipt with tracking number</li>
                                <li>Bike will be loaded in goods compartment</li>
                                <li>Collect bike from destination station parcel office</li>
                            </ol>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">📄 Required Documents</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Original RC (Registration Certificate)</strong></li>
                                <li><strong>Valid Insurance Papers</strong></li>
                                <li><strong>PUC (Pollution Under Control) Certificate</strong></li>
                                <li><strong>ID Proof</strong> (Aadhaar, PAN, Driving License)</li>
                                <li><strong>Address Proof</strong></li>
                                <li><strong>Passport Size Photos</strong> (2 copies)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Information -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">💰 Pricing Structure 2026</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-blue-600 text-2xl mb-2">🏷️</div>
                            <h3 class="font-semibold text-blue-800 mb-2">Base Charges</h3>
                            <p class="text-blue-700 text-sm">Fixed booking fee regardless of distance or weight</p>
                            <p class="text-lg font-bold text-blue-600">₹100</p>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-2xl mb-2">📏</div>
                            <h3 class="font-semibold text-green-800 mb-2">Distance Rate</h3>
                            <p class="text-green-700 text-sm">Per kilometer transportation charge</p>
                            <p class="text-lg font-bold text-green-600">₹5/km</p>
                        </div>
                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <div class="text-purple-600 text-2xl mb-2">⚖️</div>
                            <h3 class="font-semibold text-purple-800 mb-2">Weight Rate</h3>
                            <p class="text-purple-700 text-sm">Per kilogram weight charge</p>
                            <p class="text-lg font-bold text-purple-600">₹3/kg</p>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                        <h4 class="font-semibold text-yellow-800 mb-2">💡 Additional Charges</h4>
                        <ul class="text-yellow-700 text-sm space-y-1">
                            <li><strong>Packing Charges:</strong> ₹200-500 (depends on station and bike size)</li>
                            <li><strong>Insurance:</strong> 0.1-0.2% of declared bike value (minimum ₹50)</li>
                            <li><strong>Loading/Unloading:</strong> ₹50-100 per bike</li>
                            <li><strong>Demurrage:</strong> ₹10/day after free period (usually 7 days)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tips and Guidelines -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-purple-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">💡 Tips & Guidelines</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">✅ Best Practices</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Book during off-peak seasons for better service</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Clean the bike and remove personal items</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Take photos of bike condition before dispatch</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Keep fuel tank nearly empty (safety requirement)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Verify all documents are original and valid</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">⚠️ Important Notes</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Delivery time varies: 2-7 days depending on route</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Insurance is recommended for expensive bikes</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Check destination station parcel office timings</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Carry original receipt for bike collection</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Rates may vary slightly between different stations</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-indigo-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">❓ Frequently Asked Questions</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: Can I send a bike without registration papers?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: No, original RC (Registration Certificate) is mandatory for bike parcel booking. Without RC, railways will not accept the bike for transportation.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: What is the maximum weight limit for bike parcel?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: Most stations accept bikes up to 300-400 kg. However, check with your local station as limits may vary based on infrastructure and crane capacity.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: How to track my bike parcel?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: Use the parcel receipt number to track your bike on Indian Railways website or visit the destination station's parcel office for status updates.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: What if my bike gets damaged during transit?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: If insured, file a claim with supporting photos and documents. Without insurance, railways have limited liability. Always opt for insurance for valuable bikes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comprehensive Railway Bike Parcel Guide -->
            <section class="mt-12 bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Complete Guide to Railway Bike Parcel Charges and Transportation</h2>
                
                <div class="prose max-w-none text-gray-700 space-y-6">
                    <p class="text-lg">Railway bike parcel service through <strong>Indian Railways</strong> represents a cost-effective, secure, and reliable method for transporting motorcycles, scooters, and bicycles across vast distances throughout India, serving relocating individuals, bike enthusiasts attending events, students moving to educational institutions, military personnel on transfers, and anyone needing vehicle transportation without riding long distances. Understanding the comprehensive aspects of railway bike parcel charges including base rates, distance calculations, packaging requirements, insurance options, documentation needs, station procedures, delivery timelines, and cost-saving strategies empowers users to make informed decisions, avoid unexpected expenses, and ensure smooth transportation experiences. From calculating accurate charges using factors like distance zones, bike weight, declared value, and additional services to navigating booking procedures, preparing bikes properly, tracking shipments, and handling claims, mastering railway bike parcel processes provides valuable knowledge for anyone considering this transportation option.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Understanding Railway Parcel Service Structure</strong></h2>
                    <p><strong>Indian Railways parcel services</strong> operate through dedicated parcel vans attached to mail express and passenger trains, providing nationwide connectivity through extensive railway network reaching remote locations inaccessible by road transporters. The parcel system categorizes goods into different classes based on weight, volume, value, and handling requirements. Bike parcels fall under "heavy parcel" category requiring special loading equipment, dedicated space in parcel vans, and specific handling procedures ensuring safe transport. Railway parcel offices at major stations provide booking facilities, packaging assistance, loading supervision, tracking information, and delivery coordination making the process accessible even to first-time users.</p>
                    
                    <p>The charge structure comprises base transportation costs calculated per kilometer and weight, packaging charges for protective materials, loading/unloading fees for crane or manual labor usage, insurance premiums based on declared value, and miscellaneous charges for documentation and services. Distance zones determine per-kilometer rates—shorter distances incur higher per-km charges while longer distances benefit from tiered pricing reducing unit costs. Weight measurement includes bike weight plus packaging materials, with charges calculated per 50kg slab exceeding minimum chargeable weight. Understanding this structure helps users estimate costs accurately, identify potential savings through proper planning, and compare railway parcel charges against alternative transportation methods like truck transport, professional bike movers, or self-riding considering time, effort, and total expenses.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Distance-Based Charge Calculation</strong></h2>
                    <p><strong>Distance calculation</strong> forms the primary factor determining railway bike parcel charges, with railway authorities measuring distances between origin and destination stations along specific train routes rather than shortest geographical distances. The calculation follows railway route charts specifying exact kilometers traveled through particular junctions, curves, and diversions potentially exceeding direct road distances. Rate slabs typically structure charges progressively: 0-200km might charge ₹8 per km, 200-500km charges ₹6 per km, 500-1000km charges ₹5 per km, and beyond 1000km charges ₹4 per km—these are illustrative figures as actual rates vary by railway zones and periodic revisions.</p>
                    
                    <p>For example, sending a bike from Delhi to Mumbai (approximately 1,400 railway kilometers) would calculate: first 200km × ₹8 = ₹1,600; next 300km × ₹6 = ₹1,800; next 500km × ₹5 = ₹2,500; remaining 400km × ₹4 = ₹1,600; totaling ₹7,500 for distance charges before adding weight factors, packaging, insurance, and loading fees. Different railway zones (Northern, Southern, Eastern, Western, Central, etc.) may apply slight variations in rates, so checking with specific origin station provides accurate estimates. Longer distances generally offer better value per kilometer, making railway parcel economically attractive for cross-country transportation compared to commercial transporters charging flat high rates regardless of distance scaling benefits.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Weight-Based Charging System</strong></h2>
                    <p><strong>Weight measurement</strong> significantly impacts total charges with railway authorities weighing bikes including all packaging materials on certified weighbridges at parcel offices. Most motorcycles weigh 100-180kg while scooters range 90-120kg and bicycles 10-20kg. Packaging materials (wooden crates, bubble wrap, ropes, tarpaulin) add 15-30kg depending on protection level chosen. Railway charges calculate per 50kg or 100kg slabs with minimum chargeable weight often set at 100kg even for lighter bikes. Weight charges multiply base rates—a 150kg packaged bike might incur 1.5x base charges while 250kg bike charges 2.5x base rate.</p>
                    
                    <p>Accurate weight estimation helps budget correctly—before visiting station, weigh bike at public weighbridges or estimate based on manufacturer specifications plus packaging weight. Some stations offer packaging services with known material weights enabling precise calculation. Reducing unnecessary packaging weight without compromising protection optimizes charges—using lightweight tarpaulins instead of heavy canvas, minimal yet secure wooden crating, and removing detachable accessories shipped separately if significantly lighter. However, prioritize protection over minor weight savings as damage costs far exceed small charge differences. Understanding weight thresholds helps strategic planning: if your packaged bike weighs 145kg, adding 5kg reaches 150kg slab, but removing 5kg drops to 140kg potentially lowering to previous slab, though such precise optimization requires station-specific slab structures which vary across railway zones.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Mandatory Documentation Requirements</strong></h2>
                    <p><strong>Documentation forms</strong> the legal foundation for railway bike parcel with strict requirements enforced universally across all stations. The original Registration Certificate (RC) is absolutely mandatory—photocopies, digital copies, or any alternatives are unacceptable. The RC proves ownership preventing theft or illegal transportation. Valid photo identification matching RC owner's name (Aaadhar, PAN, Driving License, Passport) is required. If sender differs from RC holder, a notarized authorization letter with RC holder's ID copy must accompany booking. Address proof for both sender and receiver facilitates delivery and claim processes if issues arise.</p>
                    
                    <p>Insurance documentation (if opted) requires declared value verification—higher declared values may require purchase invoice, valuation certificate, or other proof establishing bike's worth. The parcel receipt issued after booking contains crucial information: parcel number for tracking, sender/receiver details, declared weight and dimensions, insurance details if applicable, charges paid, and estimated delivery date. This receipt is vital for tracking, collecting parcel at destination, and filing claims if needed—loss of receipt complicates processes significantly requiring FIR filing and extensive verification. Maintaining photocopies of all submitted documents protects against loss or disputes. Some stations now digitize documentation, but original RC physical verification remains mandatory at booking time regardless of digital systems, ensuring fraud prevention and legal compliance with motor vehicle transportation regulations.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Packaging and Preparation Standards</strong></h2>
                    <p><strong>Proper packaging</strong> protects bikes during handling, loading, transit, unloading, and storage at intermediate stations preventing scratches, dents, mechanical damage, or theft of parts. Professional packaging services available at major railway stations construct wooden crates with bike secured inside using ropes, chains, and padding. The crate protects against impacts, moisture, dust, and conceals valuable parts reducing theft risk. Alternatively, minimal packaging uses thick tarpaulin wrapping secured with strong ropes—cheaper but offers less protection suitable for sturdy bikes on shorter routes with careful handling guarantees.</p>
                    
                    <p>Preparation steps before packaging: drain fuel tank completely (mandatory safety requirement—railways refuse bikes with fuel), remove or secure loose accessories (mirrors, indicators, bags), deflate tires partially reducing burst risk from pressure changes, disconnect battery or insulate terminals preventing short circuits, lock steering and apply disc locks deterring theft, photograph bike from all angles documenting pre-transport condition for insurance claims if needed, and note odometer reading. Some enthusiasts apply protective film on painted surfaces beneath packaging. Professional packers charge ₹500-1500 depending on bike size and packaging complexity—this investment often proves worthwhile considering protection value. DIY packaging saves money but requires expertise ensuring adequate protection without excessive weight; improper packaging risks damage voiding insurance coverage if inadequate protection contributed to transit damage during handling or transport.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Insurance Options and Coverage</strong></h2>
                    <p><strong>Insurance coverage</strong> provides financial protection against damage, loss, or theft during transit with premiums calculated as percentage of declared value typically ranging 1-3% depending on distance, handling complexity, and value amount. Declaring accurate bike value is crucial—undervaluing reduces premium but limits claim amounts, while overvaluing increases premium but may face scrutiny during claims requiring value proof. Insurance covers transit damages from accidents, rough handling, or natural calamities, theft during railway custody, and total loss scenarios. However, coverage excludes pre-existing damages, mechanical failures unrelated to transport, normal wear and tear, and damages from improper packaging (hence professional packaging's importance).</p>
                    
                    <p>Claim procedures require: immediate damage reporting at destination station before taking delivery, photographic evidence of damage in railway custody, police complaint for theft cases, original parcel receipt and insurance documents, proof of declared value (purchase invoice, valuation certificate), and completed claim forms with supporting documents. Claims processing takes weeks to months depending on complexity and requires persistent follow-up. Most minor scratches or cosmetic damages may not justify claims considering documentation effort and deductibles, but significant damages or theft certainly warrant claim filing. Alternative insurance from private insurers occasionally provides better coverage or service, though railway insurance integrates seamlessly with parcel booking processes. Cost-benefit analysis based on bike value, condition, distance, and handling expectations helps decide insurance necessity—new expensive bikes definitely warrant insurance while older low-value bikes might skip coverage accepting limited risk.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Booking Process Step-by-Step</strong></h2>
                    <p><strong>Booking procedures</strong> begin with visiting origin station's parcel office during working hours (typically 10 AM-5 PM on weekdays, limited weekend hours). Arrive with bike, all required documents, and packaging materials if doing DIY packaging. Station staff inspect bike and documents verifying RC authenticity, ID matching, and fuel removal. Weight measurement on certified weighbridge determines chargeable weight. Packaging follows either through station services or self-arrangement ensuring railway standards compliance. The parcel booking form requires sender/receiver details, bike specifications, declared value, insurance choice, and preferred train if multiple options exist.</p>
                    
                    <p>Station staff calculate charges explaining breakup: base charges, weight charges, packaging fees, loading charges, insurance premium, and documentation fees. Payment methods include cash (most common), credit/debit cards (where terminals available), UPI/digital payments (increasingly common), or demand draft for high-value transactions. After payment, parcel receipt is issued containing tracking number and estimated delivery date. Bike loading onto parcel van occurs immediately before train departure—some stations allow sender presence during loading verification. Retain all receipts, note parcel number, save station officials' contact numbers, and obtain estimated delivery date accounting for 1-3 days' typical transit time plus potential delays during peak seasons, holidays, or operational disruptions affecting parcel van availability on specific routes.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Transit Time and Delivery Process</strong></h2>
                    <p><strong>Transit duration</strong> varies significantly based on distance, train availability, parcel van attachment schedules, and intermediate handling requirements. Short distances (under 500km) typically take 1-2 days, medium distances (500-1000km) require 2-4 days, and long distances (over 1000km) may need 4-7 days. These estimates assume direct train routes with dedicated parcel vans; actual times may extend due to train delays, parcel van unavailability requiring route changes, seasonal demand exceeding capacity, or operational disruptions from weather, accidents, or maintenance affecting railway operations.</p>
                    
                    <p>Delivery notification methods vary—some stations call receivers, others expect receivers to check independently using tracking systems or visiting destination parcel office. Tracking using parcel number on Indian Railways website or mobile apps provides approximate status though updates may lag actual progress. Upon arrival at destination station, bike remains in parcel office custody until collection. Collection requires receiver presenting original parcel receipt, valid ID matching receiver name on receipt, and in some cases, authorization letter if different person collecting. Inspect bike thoroughly before accepting delivery—unwrap partially checking for visible damages, verify odometer matches recorded reading, check for missing parts, and document any damages immediately refusing acceptance or noting damages on receipt before railway staff. This inspection protects claim rights as accepting delivery without noting damages implies satisfactory condition compromising subsequent claim validity.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Cost Comparison with Alternative Methods</strong></h2>
                    <p><strong>Comparing transportation options</strong> helps determine best value considering total costs, convenience, time, and safety factors. Railway parcel for 1000km distance typically costs ₹5,000-8,000 including all charges—economical for long distances. Professional bike transport companies charge ₹8,000-15,000 for similar distance offering door-to-door service, insurance, and faster delivery but at premium pricing. Truck transport through goods carriers costs ₹6,000-10,000 depending on negotiation, provides moderate speed but involves risks of rough handling and limited insurance. Self-riding 1000km consumes ₹2,000-3,000 in fuel plus accommodation, food, tolls potentially totaling ₹5,000-7,000 while causing physical fatigue, mechanical wear, accident risks, and time consumption of 2-3 days riding versus parcel's passive transportation.</p>
                    
                    <p>For short distances under 200-300km, self-riding often proves most economical and convenient despite physical effort. Medium distances 300-800km present closer comparisons where railway parcel saves riding fatigue and wear while costing moderately more than self-riding but less than professional movers. Long distances over 1000km clearly favor railway parcel's cost advantages over professional movers while avoiding multi-day riding marathons. Additional factors influencing choice: urgency favors faster professional movers, multiple bikes favor bulk transport discounts, valuable bikes prefer professional handling, and personal schedules may eliminate self-riding options requiring parcel services. Railway parcel's primary appeal combines reasonable cost with reliable service across Indian Railways' extensive network making it accessible from smaller towns where professional movers may not operate regularly.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Station Facilities and Service Availability</strong></h2>
                    <p><strong>Station infrastructure</strong> significantly affects booking experience and service quality. Major metropolitan stations (Delhi, Mumbai, Chennai, Kolkata, Bangalore) offer comprehensive facilities: dedicated parcel offices with trained staff, professional packaging services, mechanized loading equipment (cranes, forklifts), computerized booking systems, digital payment options, proper storage warehouses, and customer service assistance. These stations handle high parcel volumes ensuring regular parcel van availability, faster processing, and established procedures streamlining experiences for senders.</p>
                    
                    <p>Medium-sized stations provide basic facilities but may lack professional packaging services, mechanized loading (requiring manual handling with associated damage risks), limited working hours, and less frequent parcel van attachments potentially delaying dispatch by days until suitable trains with parcel vans run on required routes. Small stations may lack parcel facilities entirely requiring travel to nearest major station for booking. Checking destination station facilities is equally important—well-equipped stations provide secure storage and prompt delivery notifications, while smaller stations may have limited storage requiring faster collection preventing prolonged exposure to weather or theft risks. Advance research about specific station facilities, working hours, contact numbers, and typical processing times helps set realistic expectations and plan booking timing appropriately especially when working with smaller stations requiring flexibility in scheduling and potentially accepting longer transit times versus major stations' more predictable services.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Seasonal Variations and Peak Times</strong></h2>
                    <p><strong>Seasonal demand</strong> affects pricing, availability, and transit times significantly throughout the year. Peak seasons include summer vacation months (April-June) when students relocate, festival periods (Diwali, Durga Puja) involving family reunions requiring vehicle transportation, and year-end transfers (December-January) common in government and military postings. During peaks, parcel van space becomes limited requiring advance booking days or weeks ahead, charges may increase due to demand surge (though official rate structures remain constant, service charges and packaging costs may rise), processing times extend from higher workload, and transit times increase from capacity constraints affecting parcel priority relative to passenger traffic.</p>
                    
                    <p>Off-peak periods (monsoon months excluding festivals, late winter) offer advantages: immediate booking availability, faster processing with less crowding at parcel offices, potentially better negotiation on packaging charges from less-busy service providers, and faster transit with less parcel accumulation at intermediate stations. Planning bike transport during off-peak seasons when feasible provides better experiences and potentially lower costs. However, monsoon transport requires extra weatherproofing as rains may penetrate inadequate packaging causing rust or electrical damage. Festival-period transport should be booked well in advance accepting higher costs and longer timelines versus last-minute alternatives likely facing rejection due to capacity exhaustion. Understanding seasonal patterns enables strategic planning aligning bike transportation with favorable periods maximizing cost-effectiveness, reliability, and convenience while avoiding peak-season frustrations from limited availability and extended processing times.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Common Problems and Solutions</strong></h2>
                    <p><strong>Frequent issues</strong> encountered in railway bike parcel include documentation problems (missing RC, name mismatches), packaging inadequacy causing damage, delivery delays from operational issues, tracking difficulties with limited update frequency, and claim disputes over damage responsibility. Solutions involve thorough preparation: verify all documents before travel ensuring originals availability and name consistencies, invest in professional packaging for valuable bikes prioritizing protection over savings, build buffer time into plans accounting for potential delays rather than depending on fastest-case scenarios, maintain direct contact with both origin and destination parcel offices supplementing online tracking with personal follow-ups, and document bike condition comprehensively before shipping and immediately upon delivery establishing clear evidence chains for any claim situations.</p>
                    
                    <p>Specific problem scenarios: (1) Lost parcel receipt—immediately file FIR, inform origin station with details, provide alternative identification, and follow station guidance for receipt reissuance involving verification processes taking days; (2) Bike damage on arrival—refuse acceptance documenting damage with photos and station official signatures, file immediate complaint with station master, initiate insurance claim with all supporting documents within stipulated timeframes (usually 24-48 hours); (3) Delivery delays beyond estimated date—contact destination parcel office tracking status, check for parcel rerouting due to train cancellations, and if excessive unexplained delay, file formal complaint with station authorities and railways customer care escalating through proper channels; (4) Theft of bike parts during transit—report immediately at destination station before taking delivery, file police complaint, document missing items photographically, and file insurance claim if covered including police FIR as supporting evidence. Prevention proves easier than resolution—careful preparation, realistic expectations, and proactive communication minimize problem occurrences.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Zone-Wise Rate Variations</strong></h2>
                    <p><strong>Railway zones</strong> (Northern, Southern, Eastern, Western, Central, South Central, North Eastern, etc.) maintain autonomous operational authority including parcel rate structures leading to variations in exact charges for similar distances. Northern Railway serving Delhi, Punjab, Haryana, Jammu regions may have different per-kilometer rates than Southern Railway covering Tamil Nadu, Kerala, Karnataka. These variations typically range within 10-20% keeping rates competitive while reflecting regional operational costs, labor expenses, infrastructure investments, and demand patterns. For instance, sending a bike from Delhi to Jaipur (Northern Railway) might cost slightly different than sending from Chennai to Bangalore (Southern Railway) even if actual railway kilometers are similar.</p>
                    
                    <p>Inter-zone transfers where origin and destination fall under different zones use coordinated pricing often calculating proportional charges based on distance covered within each zone and applying respective zone rates, then aggregating for total charges. This complexity means precise estimation requires consulting specific origin station rather than applying generic formulas. Additionally, special economic zones, industrial corridors, or developmental regions may receive subsidized rates or incentive pricing encouraging industrial logistics and business development through reduced parcel costs. Border states, northeastern regions, or strategically sensitive areas might also have differential pricing reflecting unique operational challenges, security requirements, or developmental priorities. Understanding zone-specific variations prevents surprise charges during booking and enables accurate budgeting when planning bike transportation across different railway jurisdiction areas throughout India's extensive railway network spanning diverse geographical, economic, and operational contexts.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Special Considerations for High-Value Bikes</strong></h2>
                    <p><strong>Expensive motorcycles</strong> (superbikes, luxury cruisers, high-end sports bikes) valued above ₹3-5 lakhs require special precautions beyond standard parcel procedures. Comprehensive insurance becomes mandatory rather than optional—declare full value with supporting purchase invoice and current valuation protecting significant investment against transit risks. Premium packaging using reinforced wooden crates, heavy-duty padding, moisture barriers, and anti-theft measures (concealing brand identity, removing manufacturer badges visible through crate gaps) reduces theft risks from opportunistic thieves targeting visibly expensive bikes in parcel storage areas.</p>
                    
                    <p>Consider door-to-door professional transport services despite higher costs as they provide enclosed transport, GPS tracking, dedicated handling, and comprehensive insurance better suited for high-value bikes where premium charges represent smaller proportion of bike value versus economical models. Some luxury bike owners arrange personal supervision traveling on same train monitoring bike loading/unloading and coordinating with railway staff ensuring careful handling—though time-consuming, this provides peace of mind for irreplaceable or emotionally valuable bikes. Photo documentation becomes critical: detailed photographs from multiple angles, close-ups of distinct features, engine/chassis number records, and pre-transport condition documentation establishes baseline for damage assessment and insurance claims. Registration certificate copies, insurance papers, and purchase invoices should accompany booking documents. Alert destination receiver to collect promptly minimizing storage duration reducing theft exposure. High-value bikes justify extra effort, cost, and precautions as potential loss or damage impacts significantly beyond economical bikes' relatively manageable replacement or repair costs.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Environmental and Sustainability Aspects</strong></h2>
                    <p><strong>Railway transport</strong> offers environmental advantages over road-based alternatives as trains consume less fuel per ton-kilometer transported due to steel wheel-rail efficiency versus rubber tire-road friction, electric locomotives (increasingly common) reduce fossil fuel dependence and emissions, and consolidated freight movement reduces overall traffic congestion and pollution compared to individual truck journeys. Choosing railway bike parcel over truck transport contributes marginally to lower carbon footprint supporting environmental sustainability. However, packaging waste generation—wooden crates, plastic wraps, disposable padding materials—creates environmental concerns requiring responsible disposal or recycling.</p>
                    
                    <p>Eco-conscious users can request recyclable packaging materials, avoid excessive plastic usage preferring biodegradable alternatives like jute padding or paper-based wraps, reuse packaging materials if receiving bikes (donating crates to future senders, repurposing wood for other uses), and properly dispose non-reusable materials through municipal waste management systems rather than littering station areas. Railway authorities increasingly promote green initiatives: encouraging minimal packaging adequate for protection without excess, providing recycling bins at parcel offices, using solar-powered lighting in parcel areas, and optimizing parcel van loading efficiency reducing weight and improving fuel economy. As environmental awareness grows, sustainable parcel practices balancing protection needs with ecological responsibility become important considerations in transportation choices. Railway parcel's inherent efficiency advantage combined with conscious packaging choices represents relatively environmentally-friendly option compared to carbon-intensive road transport alternatives for long-distance bike transportation needs across India's vast geographical expanse.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Legal Rights and Consumer Protection</strong></h2>
                    <p><strong>Consumer rights</strong> in railway parcel services derive from Indian Railways Act, consumer protection laws, and railway regulations governing parcel operations. Railways act as common carrier with legal obligations: accepting goods within capacity constraints, exercising reasonable care during custody, delivering within promised timeframes (subject to operational exceptions), and maintaining transparency in charging. Consumers have rights to: clear information about charges, terms, and conditions; proper receipt documentation; reasonable compensation for loss/damage when railways prove negligent; non-discriminatory service access; and complaint redressal through established mechanisms.</p>
                    
                    <p>Complaint procedures involve: first approaching station master at origin/destination station documenting issues formally, escalating to divisional railway manager if unsatisfactory resolution, filing complaints through railway customer care (139 helpline, website grievance portals), and ultimately approaching railway consumer forums, civil courts, or consumer courts for unresolved disputes involving compensation claims. Understanding contractual limitations is important: railways limit liability unless negligence proven, force majeure events (natural disasters, riots, wars) exempt liability, and declared value limits compensation amounts making accurate valuation critical. Railway terms and conditions printed on parcel receipts constitute legal agreement between sender and railways—reading these terms clarifies rights, obligations, and liability limitations preventing unrealistic expectations. Consumer protection laws provide additional safeguards against unfair practices, deficient services, or negligence situations beyond contractual limitations. Maintaining documentation, following proper procedures, and understanding legal frameworks enables effective rights exercise while setting realistic expectations within regulatory and operational constraints governing railway parcel services across India's massive railway network.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Digital Tools and Online Resources</strong></h2>
                    <p><strong>Technology integration</strong> modernizes railway parcel services improving transparency, convenience, and efficiency. Indian Railways website provides parcel calculators estimating charges based on route, weight, and distance inputs—useful for budget planning though actual charges may vary slightly. Online tracking systems using parcel receipt numbers enable real-time status monitoring showing current location, movement history, and estimated arrival times though update frequency varies and delays in digital recording may occur. Mobile applications (IRCTC Rail Connect, UTS app, Freight Operations Information System) include parcel tracking features, station contact information, complaint filing options, and informational resources accessible via smartphones enhancing user convenience.</p>
                    
                    <p>Some stations pilot online booking systems enabling advance reservation, digital payment, and e-documentation reducing physical presence requirements though nationwide implementation remains partial. Social media channels (Twitter, Facebook pages of railway zones) provide customer service interfaces for queries, complaints, and updates. Third-party platforms aggregate railway information, user experiences, and practical tips supplementing official resources with community knowledge. However, digital tools complement rather than replace personal interaction—complex situations, special requirements, or problem resolution often require direct station visits or telephone communication with parcel office staff. As digitalization progresses, expect expanding online facilities including comprehensive e-booking, QR code-based tracking, digital payment integration, and AI-powered customer service chatbots. Currently, combining digital tools for preliminary research and basic tracking with direct station engagement for booking, collection, and issue resolution provides optimal experience leveraging technology convenience while maintaining personal touch for complex situations requiring human judgment and flexible solutions.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Regional Customs and Practical Tips</strong></h2>
                    <p><strong>Regional variations</strong> in railway operations affect practical aspects of bike parcel services. Northern regions emphasize punctuality and formal documentation adherence reflecting administrative cultures, Southern zones often provide more customer-friendly assistance and flexibility within regulatory frameworks, Eastern regions face higher demand during festival seasons requiring earlier booking, and Western zones handle significant commercial traffic necessitating clear communication distinguishing personal bike parcels from commercial consignments. Language differences require patience and possibly translation assistance—carrying documents in English alongside regional language translations helps smoother processing at non-metropolitan stations.</p>
                    
                    <p>Practical tips from experienced users: (1) Visit station during weekday mornings avoiding rush hours and lunch breaks for better attention; (2) Develop rapport with parcel office staff—polite, patient interaction often yields helpful guidance and flexibility; (3) Carry extra document copies as station copies often required without photocopying facilities nearby; (4) Photograph bike before, during, and after packaging creating undisputable condition evidence; (5) Maintain separate emergency fund for unexpected charges occasionally arising from weight miscalculations or additional service requirements; (6) Exchange contact numbers with parcel office staff enabling direct communication bypassing general helplines; (7) Verify receiver's availability at destination coordinating timing to avoid storage fees if delays occur in collection; (8) Save parcel receipt digitally (photo/scan) as backup against physical loss; (9) Check destination station working hours and holidays preventing wasted collection attempts during closures; (10) Consider travel insurance covering bike value if planning long-distance bike trips potentially requiring emergency parcel services. These practical insights derived from community experiences provide valuable real-world guidance supplementing official procedures and documentation, ensuring smoother navigation of railway parcel processes for first-time and experienced users alike.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Future Trends and Service Improvements</strong></h2>
                    <p><strong>Modernization initiatives</strong> aim to enhance railway parcel services addressing current limitations and meeting evolving customer expectations. Digital transformation roadmaps include: comprehensive online booking eliminating physical station visits, real-time GPS tracking showing exact train location and estimated arrivals, automated pricing calculators integrated with booking systems, digital payment gateways accepting all modern payment modes, and paperless documentation using digital receipts and e-signatures. Infrastructure improvements focus on: modernizing parcel storage facilities with climate-controlled environments and security systems, mechanizing loading equipment at medium-sized stations reducing manual handling damages, and expanding parcel van fleet ensuring consistent availability across routes.</p>
                    
                    <p>Service innovations under consideration: door-to-door pick-up and delivery eliminating customer station visits, express parcel services on premium trains reducing transit times for urgent shipments at higher charges, standardized packaging services with quality assurance and damage warranties, comprehensive insurance products with simplified claim processes and faster settlements, and loyalty programs rewarding frequent users with discounts or priority services. Public-private partnerships may introduce professional management in parcel operations combining railways' network advantages with private efficiency and customer service orientation. As e-commerce growth drives logistics innovation, railway parcel services must evolve remaining competitive against sophisticated private courier networks offering technological integration and customer convenience. Future railway bike parcel services likely blend traditional strengths—extensive network, economical pricing, established trust—with modern conveniences—digital booking, real-time tracking, professional packaging, quick claims—creating comprehensive offerings serving traditional users valuing economy alongside new customers expecting seamless digital experiences with professional service standards meeting contemporary logistics expectations in India's rapidly modernizing transportation ecosystem.</p>

                    <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Comprehensive FAQ: Railway Bike Parcel Questions</strong></h2>
                    
                    <div class="space-y-4 mt-6">
                        <div class="border-l-4 border-red-500 pl-6">
                            <p class="font-bold text-gray-800">1. What is the average cost to send a bike by railway parcel?</p>
                            <p class="text-gray-600">Costs vary by distance and weight. Typical range: 500km costs ₹3,000-5,000; 1000km costs ₹5,000-8,000; 1500km costs ₹7,000-12,000 including all charges like packaging, insurance, and loading fees.</p>
                        </div>

                        <div class="border-l-4 border-blue-500 pl-6">
                            <p class="font-bold text-gray-800">2. Can I send bike without original RC?</p>
                            <p class="text-gray-600">No, original Registration Certificate is absolutely mandatory. Photocopies, scanned copies, or digital RCs are not accepted. Without original RC, railway authorities will refuse bike parcel booking under all circumstances.</p>
                        </div>

                        <div class="border-l-4 border-green-500 pl-6">
                            <p class="font-bold text-gray-800">3. How long does railway bike parcel take?</p>
                            <p class="text-gray-600">Transit times: under 500km takes 1-2 days; 500-1000km takes 2-4 days; over 1000km takes 4-7 days. Actual times vary based on train schedules, parcel van availability, and operational conditions.</p>
                        </div>

                        <div class="border-l-4 border-purple-500 pl-6">
                            <p class="font-bold text-gray-800">4. Is insurance necessary for bike parcel?</p>
                            <p class="text-gray-600">Insurance is optional but highly recommended, especially for valuable bikes. Premiums typically cost 1-3% of declared value providing financial protection against damage, loss, or theft during transit.</p>
                        </div>

                        <div class="border-l-4 border-orange-500 pl-6">
                            <p class="font-bold text-gray-800">5. What happens if bike gets damaged during transport?</p>
                            <p class="text-gray-600">Report damage immediately at destination station before accepting delivery. Document with photos, file complaint with station master, and initiate insurance claim within 24-48 hours with supporting documents for compensation.</p>
                        </div>

                        <div class="border-l-4 border-pink-500 pl-6">
                            <p class="font-bold text-gray-800">6. Can someone else collect my bike from destination station?</p>
                            <p class="text-gray-600">Yes, but they need original parcel receipt, valid ID, and authorization letter from receiver (named on receipt) along with receiver's ID copy. Some stations may require notarized authorization.</p>
                        </div>

                        <div class="border-l-4 border-yellow-500 pl-6">
                            <p class="font-bold text-gray-800">7. Do I need to drain fuel completely?</p>
                            <p class="text-gray-600">Yes, complete fuel drainage is mandatory safety requirement. Railways refuse bikes with any fuel in tank due to fire hazards. Drain fuel at petrol stations before visiting railway parcel office.</p>
                        </div>

                        <div class="border-l-4 border-indigo-500 pl-6">
                            <p class="font-bold text-gray-800">8. What packaging is required for bike parcel?</p>
                            <p class="text-gray-600">Options include professional wooden crate packaging (₹500-1500) for maximum protection, or minimal tarpaulin wrapping with rope securing. Professional packaging recommended for valuable bikes to prevent transit damage.</p>
                        </div>

                        <div class="border-l-4 border-teal-500 pl-6">
                            <p class="font-bold text-gray-800">9. Can I track my bike parcel online?</p>
                            <p class="text-gray-600">Yes, using parcel receipt number on Indian Railways website or mobile apps. However, tracking updates may lag actual movement, so supplementing with direct station contact provides more accurate status.</p>
                        </div>

                        <div class="border-l-4 border-cyan-500 pl-6">
                            <p class="font-bold text-gray-800">10. What if parcel receipt gets lost?</p>
                            <p class="text-gray-600">Immediately file FIR for lost document, inform origin station with booking details, provide alternative identification matching sender/receiver details, and follow station procedure for receipt reissuance involving verification taking several days.</p>
                        </div>

                        <div class="border-l-4 border-lime-500 pl-6">
                            <p class="font-bold text-gray-800">11. Are there weight limits for bike parcel?</p>
                            <p class="text-gray-600">Most stations accept bikes up to 300-400kg including packaging. Limits vary by station based on loading equipment capacity. Check with specific origin station for exact weight restrictions before planning shipment.</p>
                        </div>

                        <div class="border-l-4 border-amber-500 pl-6">
                            <p class="font-bold text-gray-800">12. Can I book bike parcel online?</p>
                            <p class="text-gray-600">Currently, most stations require physical presence for booking due to documentation verification and bike inspection needs. Some pilot programs offer online booking, but nationwide implementation remains limited as of now.</p>
                        </div>

                        <div class="border-l-4 border-rose-500 pl-6">
                            <p class="font-bold text-gray-800">13. What payment methods are accepted?</p>
                            <p class="text-gray-600">Cash is universally accepted. Major stations accept credit/debit cards, UPI, and digital payments where terminals available. Demand drafts accepted for high-value transactions. Check specific station payment options beforehand.</p>
                        </div>

                        <div class="border-l-4 border-violet-500 pl-6">
                            <p class="font-bold text-gray-800">14. Do charges include loading and unloading?</p>
                            <p class="text-gray-600">Loading charges at origin station are typically included or charged separately (₹200-500). Unloading at destination may incur additional charges depending on station policy and equipment used for bike removal from parcel van.</p>
                        </div>

                        <div class="border-l-4 border-fuchsia-500 pl-6">
                            <p class="font-bold text-gray-800">15. Can I send bike to any railway station?</p>
                            <p class="text-gray-600">Only stations with parcel office facilities accept bike parcels. Most major and medium-sized stations have facilities, but small stations may not. Verify destination station has parcel services before booking.</p>
                        </div>

                        <div class="border-l-4 border-emerald-500 pl-6">
                            <p class="font-bold text-gray-800">16. What documents does receiver need for collection?</p>
                            <p class="text-gray-600">Receiver needs original parcel receipt and valid photo ID matching receiver name on receipt. If different person collecting, authorization letter with ID copies of both receiver and collector required.</p>
                        </div>

                        <div class="border-l-4 border-sky-500 pl-6">
                            <p class="font-bold text-gray-800">17. Are there seasonal price variations?</p>
                            <p class="text-gray-600">Official railway rates remain constant year-round. However, packaging service charges and demand surges during peak seasons (summer, festivals) may increase effective costs. Off-peak booking offers availability advantages.</p>
                        </div>

                        <div class="border-l-4 border-slate-500 pl-6">
                            <p class="font-bold text-gray-800">18. Can electric bikes or scooters be sent?</p>
                            <p class="text-gray-600">Yes, electric vehicles can be sent via railway parcel. Battery terminals must be insulated preventing short circuits. Inform station staff about electric nature for appropriate handling and documentation of battery specifications.</p>
                        </div>

                        <div class="border-l-4 border-stone-500 pl-6">
                            <p class="font-bold text-gray-800">19. What if bike doesn't arrive by estimated date?</p>
                            <p class="text-gray-600">Contact destination parcel office for status update. Check for train delays or parcel van rescheduling. If excessive unexplained delay, file formal complaint with station master and escalate through railway customer care.</p>
                        </div>

                        <div class="border-l-4 border-zinc-500 pl-6">
                            <p class="font-bold text-gray-800">20. Can modifications or accessories be attached to bike?</p>
                            <p class="text-gray-600">Yes, but remove loose accessories for safety. Secure attached modifications properly. Declare valuable add-ons in insurance coverage. Photograph all accessories documenting presence for claim evidence if theft occurs during transit.</p>
                        </div>

                        <div class="border-l-4 border-neutral-500 pl-6">
                            <p class="font-bold text-gray-800">21. Do I need transit permit for bike parcel?</p>
                            <p class="text-gray-600">No special transit permit required beyond standard documents. Original RC serves as legal authorization for transportation. For inter-state movement, no additional road transport permits needed as railway transport is exempt.</p>
                        </div>

                        <div class="border-l-4 border-gray-500 pl-6">
                            <p class="font-bold text-gray-800">22. Can vintage or custom bikes be sent?</p>
                            <p class="text-gray-600">Yes, vintage and custom bikes accepted with proper documentation. Declare accurate higher value for insurance coverage. Use premium packaging protecting unique features. Provide detailed photo documentation of custom elements for claims.</p>
                        </div>

                        <div class="border-l-4 border-red-600 pl-6">
                            <p class="font-bold text-gray-800">23. What if RC is in different person's name than sender?</p>
                            <p class="text-gray-600">Notarized authorization letter from RC holder required along with their ID copy and original RC. Sender must provide own ID. Some stations strictly allow only RC holder to book requiring their physical presence.</p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <p class="font-bold text-gray-800">24. Are there refunds if I cancel booking?</p>
                            <p class="text-gray-600">Cancellation policies vary by station. Generally, cancellations before loading may receive partial refunds deducting documentation and processing charges. Post-loading cancellations typically forfeit full amount as bike already dispatched.</p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <p class="font-bold text-gray-800">25. How to file complaints about service quality?</p>
                            <p class="text-gray-600">First approach station master with written complaint. If unresolved, escalate to divisional railway manager, then railway customer care (139 helpline, website portals). Document all interactions and maintain reference numbers for follow-up.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Related Tools -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">🔗 Related Calculators</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-4">
                        <a href="/emi-calculator" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-200">
                            <h4 class="font-semibold text-blue-800">EMI Calculator</h4>
                            <p class="text-blue-700 text-sm">Calculate loan EMI for bike purchase</p>
                        </a>
                        <a href="/distance-calculator" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition duration-200">
                            <h4 class="font-semibold text-green-800">Distance Calculator</h4>
                            <p class="text-green-700 text-sm">Find distance between cities</p>
                        </a>
                        <a href="/fuel-cost-calculator" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition duration-200">
                            <h4 class="font-semibant text-purple-800">Fuel Cost Calculator</h4>
                            <p class="text-purple-700 text-sm">Calculate travel fuel expenses</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    // Auto-format numbers as user types
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value;
            if (value && !isNaN(value)) {
                e.target.style.color = '#065f46'; // green-800
            } else {
                e.target.style.color = '#dc2626'; // red-600
            }
        });
    });

    // Real-time calculation preview
    function updatePreview() {
        const distance = document.getElementById('distance').value;
        const weight = document.getElementById('weight').value;
        
        if (distance && weight && distance > 0 && weight > 0) {
            const estimatedCost = (parseFloat(distance) * 5) + (parseFloat(weight) * 3) + 200;
            const previewElement = document.getElementById('preview-cost');
            if (previewElement) {
                previewElement.textContent = `Estimated: ₹${estimatedCost.toFixed(0)}`;
                previewElement.style.display = 'block';
            }
        }
    }

    // Add event listeners for real-time preview
    document.getElementById('distance').addEventListener('input', updatePreview);
    document.getElementById('weight').addEventListener('input', updatePreview);

    // Form validation enhancement
    document.querySelector('form').addEventListener('submit', function(e) {
        const requiredFields = this.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value) {
                isValid = false;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields');
        }
    });

    // Action button functions
    function printResults() {
        // Create a print-friendly version
        const printContent = document.querySelector('.mt-8').cloneNode(true);
        const buttons = printContent.querySelectorAll('button');
        buttons.forEach(btn => btn.style.display = 'none');
        
        const printWindow = window.open('', '_blank');
        printWindow.document.write(`
            <html>
                    <title>Railway Bike Parcel Charges - Calculation Results</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .result-card { border: 2px solid #3B82F6; border-radius: 8px; padding: 20px; margin: 10px 0; }
                        .result-item { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #E5E7EB; }
                        .total-result { font-weight: bold; font-size: 1.2em; border-top: 2px solid #3B82F6; }
                        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
                        @media print { button { display: none !important; } }
                    </style>
                    <h1>Railway Bike Parcel Charges Calculator</h1>
                    <p>Generated on: ${new Date().toLocaleDateString()}</p>
                    ${printContent.innerHTML}
                </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.print();
    }

    function shareResults() {
        if (navigator.share) {
            const totalCharge = '<?= $result ? "₹" . number_format($result['total_charge'], 2) : "N/A" ?>';
            navigator.share({
                title: 'Railway Bike Parcel Charges',
                text: `My bike parcel charges calculation: ${totalCharge} for <?= $_POST['distance'] ?? 'N/A' ?>km distance.`,
                url: window.location.href
            });
        } else {
            // Fallback for browsers that don't support Web Share API
            const shareData = {
                title: 'Railway Bike Parcel Charges Calculator',
                text: `Check out my bike parcel charges calculation: <?= $result ? "₹" . number_format($result['total_charge'], 2) : "N/A" ?> for <?= $_POST['distance'] ?? 'N/A' ?>km`,
                url: window.location.href
            };
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(`${shareData.text} - ${shareData.url}`);
                alert('Results copied to clipboard! You can now paste and share.');
            } else {
                prompt('Copy this link to share:', `${shareData.text} - ${shareData.url}`);
            }
        }
    }

    function calculateAgain() {
        // Smooth scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
        
        // Reset form
        document.querySelector('form').reset();
        
        // Clear any validation styles
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.classList.remove('border-red-500', 'border-green-500');
        });
        
        // Focus on first input
        setTimeout(() => {
            document.getElementById('from_station').focus();
        }, 500);
    }

    // Add smooth scroll for better UX
    document.addEventListener('DOMContentLoaded', function() {
        <?php if ($result): ?>
        // Auto-scroll to results after calculation
        setTimeout(() => {
            const resultsSection = document.querySelector('.mt-8');
            if (resultsSection) {
                resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }, 300);
        <?php endif; ?>
    });

    // Enhanced form interactivity
    document.querySelectorAll('select, input').forEach(element => {
        element.addEventListener('change', function() {
            this.classList.add('border-green-500');
            setTimeout(() => this.classList.remove('border-green-500'), 2000);
        });
    });
    </script>
</body>
<?php include 'footer.php';?>
</html>
