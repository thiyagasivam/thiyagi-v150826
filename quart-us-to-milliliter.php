<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Quart (US) to Milliliter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online quart to milliliter converter 2026. Convert US quarts to ml instantly. Perfect for cooking and beverage measurements.">
<meta name="keywords" content="quart to milliliter converter 2026, US quart to ml, cooking converter, beverage calculator, volume measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Quart (US) to Milliliter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online quart to milliliter converter 2026. Convert US quarts to ml instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/quart-us-to-milliliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Quart (US) to Milliliter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online quart to milliliter converter 2026. Convert US quarts to ml instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-cyan-600 mr-3"></i>
                Quart (US) to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US liquid quarts to milliliters instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Quarts Input -->
                <div class="space-y-2">
                    <label for="quartInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-cyan-600 mr-2"></i>Quarts (US liquid)
                    </label>
                    <input
                        type="number"
                        id="quartInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter quarts"
                        step="any"
                    >
                </div>

                <!-- Milliliters Output -->
                <div class="space-y-2">
                    <label for="mlOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-cyan-600 mr-2"></i>Milliliters (mL)
                    </label>
                    <input
                        type="number"
                        id="mlOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Milliliters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-cyan-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">0.25 qt</div>
                    <div class="text-sm text-gray-600">≈ 236 mL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">0.5 qt</div>
                    <div class="text-sm text-gray-600">≈ 473 mL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1 qt</div>
                    <div class="text-sm text-gray-600">≈ 946 mL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">2 qt</div>
                    <div class="text-sm text-gray-600">≈ 1893 mL</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-cyan-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US liquid quarts and milliliters. One US liquid quart equals approximately 946.353 milliliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Milliliters = Quarts × 946.353
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Recipe conversion and scaling</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Beverage serving calculations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>International cooking conversions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertQuartToMl() {
    const quart = parseFloat(document.getElementById('quartInput').value);
    if (!isNaN(quart)) {
        const ml = quart * 946.353;
        document.getElementById('mlOutput').value = ml.toFixed(8);
    } else {
        document.getElementById('mlOutput').value = '';
    }
}

function convertMlToQuart() {
    const ml = parseFloat(document.getElementById('mlOutput').value);
    if (!isNaN(ml)) {
        const quart = ml / 946.353;
        document.getElementById('quartInput').value = quart.toFixed(8);
    } else {
        document.getElementById('quartInput').value = '';
    }
}

function swapValues() {
    const quartValue = document.getElementById('quartInput').value;
    const mlValue = document.getElementById('mlOutput').value;
    
    document.getElementById('quartInput').value = mlValue;
    document.getElementById('mlOutput').value = quartValue;
}

function clearValues() {
    document.getElementById('quartInput').value = '';
    document.getElementById('mlOutput').value = '';
}

// Add event listeners
document.getElementById('quartInput').addEventListener('input', convertQuartToMl);
document.getElementById('mlOutput').addEventListener('input', convertMlToQuart);
</script>

<?php include 'footer.php'; ?>
