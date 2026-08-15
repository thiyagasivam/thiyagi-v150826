<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Weight and Mass Converter 2026 - Universal Calculator | Thiyagi</title>
<meta name="description" content="Free online weight and mass converter 2026. Convert between kg, lbs, grams, ounces and more units instantly with accurate conversion rates.">
<meta name="keywords" content="weight and mass converter 2026, weight converter, mass converter, kg to lbs, unit converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Weight and Mass Converter 2026 - Universal Calculator">
<meta property="og:description" content="Free online weight and mass converter 2026. Convert between multiple weight and mass units instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/weight-and-mass-converter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Weight and Mass Converter 2026 - Universal Calculator">
<meta name="twitter:description" content="Free online weight and mass converter 2026. Convert between multiple weight and mass units.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-pink-50 to-rose-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-purple-600 mr-3"></i>
                Weight and Mass Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between multiple weight and mass units instantly for cooking, science, and everyday use
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- From Unit -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-purple-600 mr-2"></i>From
                    </label>
                    <input
                        type="number"
                        id="fromValue"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter value"
                        step="any"
                    >
                    <select id="fromUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option value="kg">Kilogram (kg)</option>
                        <option value="g">Gram (g)</option>
                        <option value="mg">Milligram (mg)</option>
                        <option value="lb">Pound (lb)</option>
                        <option value="oz">Ounce (oz)</option>
                        <option value="ton">Metric Ton (t)</option>
                        <option value="stone">Stone (st)</option>
                        <option value="carat">Carat (ct)</option>
                    </select>
                </div>

                <!-- To Unit -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-h text-purple-600 mr-2"></i>To
                    </label>
                    <input
                        type="number"
                        id="toValue"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Result"
                        readonly
                    >
                    <select id="toUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option value="kg">Kilogram (kg)</option>
                        <option value="g" selected>Gram (g)</option>
                        <option value="mg">Milligram (mg)</option>
                        <option value="lb">Pound (lb)</option>
                        <option value="oz">Ounce (oz)</option>
                        <option value="ton">Metric Ton (t)</option>
                        <option value="stone">Stone (st)</option>
                        <option value="carat">Carat (ct)</option>
                    </select>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapUnits()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Units
                </button>
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversion Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-table text-purple-600 mr-3"></i>Common Conversions
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 kg</div>
                    <div class="text-sm text-gray-600">= 2.205 lbs</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 lb</div>
                    <div class="text-sm text-gray-600">= 453.6 g</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 oz</div>
                    <div class="text-sm text-gray-600">= 28.35 g</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 stone</div>
                    <div class="text-sm text-gray-600">= 14 lbs</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This universal weight and mass converter supports multiple units including metric and imperial systems for accurate conversions.
                </p>
                <p class="text-gray-700">
                    <strong>Supported Units:</strong><br>
                    Kilogram, Gram, Milligram, Pound, Ounce, Metric Ton, Stone, Carat
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Cooking and baking</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Scientific research</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Health and fitness</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>International trade</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Jewelry and precious metals</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
// Conversion factors to grams
const conversionFactors = {
    'kg': 1000,
    'g': 1,
    'mg': 0.001,
    'lb': 453.592,
    'oz': 28.3495,
    'ton': 1000000,
    'stone': 6350.29,
    'carat': 0.2
};

function convert() {
    const fromValue = parseFloat(document.getElementById('fromValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    if (!isNaN(fromValue)) {
        // Convert to grams first, then to target unit
        const grams = fromValue * conversionFactors[fromUnit];
        const result = grams / conversionFactors[toUnit];
        document.getElementById('toValue').value = result.toFixed(8);
    } else {
        document.getElementById('toValue').value = '';
    }
}

function swapUnits() {
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    const fromValue = document.getElementById('fromValue').value;
    const toValue = document.getElementById('toValue').value;
    
    document.getElementById('fromUnit').value = toUnit;
    document.getElementById('toUnit').value = fromUnit;
    document.getElementById('fromValue').value = toValue;
    convert();
}

function clearValues() {
    document.getElementById('fromValue').value = '';
    document.getElementById('toValue').value = '';
}

// Add event listeners
document.getElementById('fromValue').addEventListener('input', convert);
document.getElementById('fromUnit').addEventListener('change', convert);
document.getElementById('toUnit').addEventListener('change', convert);
</script>

<?php include 'footer.php'; ?>
