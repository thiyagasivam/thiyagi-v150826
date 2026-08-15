<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>CC to Oz Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic centimeter to fluid ounce converter 2026. Convert cc to fl oz instantly with accurate volume conversion. Perfect for cooking and medical applications.">
<meta name="keywords" content="cc to oz converter 2026, cubic centimeter to ounce, volume converter, cooking calculator, medical converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="CC to Oz Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic centimeter to fluid ounce converter 2026. Convert cc to fl oz instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cc-to-oz.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CC to Oz Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic centimeter to fluid ounce converter 2026. Convert cc to fl oz instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-orange-600 mr-3"></i>
                CC to Oz Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic centimeters to fluid ounces instantly with our accurate volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-2">
                    <label for="ccInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-orange-600 mr-2"></i>Cubic Centimeters (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic centimeters"
                        step="any"
                    >
                </div>

                <!-- Fluid Ounces Output -->
                <div class="space-y-2">
                    <label for="ozOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wine-glass text-orange-600 mr-2"></i>Fluid Ounces (fl oz)
                    </label>
                    <input
                        type="number"
                        id="ozOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Fluid ounces result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
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
                <i class="fas fa-table text-orange-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">30 cc</div>
                    <div class="text-sm text-gray-600">≈ 1.01 fl oz</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">60 cc</div>
                    <div class="text-sm text-gray-600">≈ 2.03 fl oz</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">150 cc</div>
                    <div class="text-sm text-gray-600">≈ 5.07 fl oz</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">240 cc</div>
                    <div class="text-sm text-gray-600">≈ 8.12 fl oz</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-orange-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between cubic centimeters and US fluid ounces. One cubic centimeter equals approximately 0.033814 US fluid ounces.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Fluid Ounces = Cubic Centimeters × 0.033814
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Cooking recipe conversions</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Pharmaceutical formulations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Beverage serving sizes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCcToOz() {
    const cc = parseFloat(document.getElementById('ccInput').value);
    if (!isNaN(cc)) {
        const oz = cc * 0.033814;
        document.getElementById('ozOutput').value = oz.toFixed(8);
    } else {
        document.getElementById('ozOutput').value = '';
    }
}

function convertOzToCc() {
    const oz = parseFloat(document.getElementById('ozOutput').value);
    if (!isNaN(oz)) {
        const cc = oz / 0.033814;
        document.getElementById('ccInput').value = cc.toFixed(8);
    } else {
        document.getElementById('ccInput').value = '';
    }
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const ozValue = document.getElementById('ozOutput').value;
    
    document.getElementById('ccInput').value = ozValue;
    document.getElementById('ozOutput').value = ccValue;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('ozOutput').value = '';
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', convertCcToOz);
document.getElementById('ozOutput').addEventListener('input', convertOzToCc);
</script>

<?php include 'footer.php'; ?>
