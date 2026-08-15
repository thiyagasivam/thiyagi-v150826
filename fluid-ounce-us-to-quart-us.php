<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Fluid Ounce to Quart Converter 2026 - US Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online fluid ounce to quart converter 2026. Convert US fluid ounces to quarts instantly. Perfect for cooking and beverage measurements.">
<meta name="keywords" content="fluid ounce to quart converter 2026, fl oz to quart, US volume converter, cooking calculator, beverage measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Fluid Ounce to Quart Converter 2026 - US Volume Calculator">
<meta property="og:description" content="Free online fluid ounce to quart converter 2026. Convert US fluid ounces to quarts instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/fluid-ounce-us-to-quart-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Fluid Ounce to Quart Converter 2026 - US Volume Calculator">
<meta name="twitter:description" content="Free online fluid ounce to quart converter 2026. Convert US fluid ounces to quarts instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-green-600 mr-3"></i>
                Fluid Ounce (US) to Quart (US) Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US fluid ounces to US quarts instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Fluid Ounce Input -->
                <div class="space-y-2">
                    <label for="flOzInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-green-600 mr-2"></i>Fluid Ounces (US)
                    </label>
                    <input
                        type="number"
                        id="flOzInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter fluid ounces"
                        step="any"
                    >
                </div>

                <!-- Quart Output -->
                <div class="space-y-2">
                    <label for="quartOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-green-600 mr-2"></i>Quarts (US)
                    </label>
                    <input
                        type="number"
                        id="quartOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Quarts result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-green-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">8 fl oz</div>
                    <div class="text-sm text-gray-600">= 0.25 qt</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">16 fl oz</div>
                    <div class="text-sm text-gray-600">= 0.5 qt</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">32 fl oz</div>
                    <div class="text-sm text-gray-600">= 1 qt</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">64 fl oz</div>
                    <div class="text-sm text-gray-600">= 2 qt</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US fluid ounces and US quarts. One US quart equals exactly 32 US fluid ounces.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Quarts = Fluid Ounces ÷ 32
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Recipe scaling and cooking</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Beverage serving calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Liquid medication dosing</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Automotive fluid measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Paint and coating volumes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertFlOzToQuart() {
    const flOz = parseFloat(document.getElementById('flOzInput').value);
    if (!isNaN(flOz)) {
        const quart = flOz / 32;
        document.getElementById('quartOutput').value = quart.toFixed(8);
    } else {
        document.getElementById('quartOutput').value = '';
    }
}

function convertQuartToFlOz() {
    const quart = parseFloat(document.getElementById('quartOutput').value);
    if (!isNaN(quart)) {
        const flOz = quart * 32;
        document.getElementById('flOzInput').value = flOz.toFixed(8);
    } else {
        document.getElementById('flOzInput').value = '';
    }
}

function swapValues() {
    const flOzValue = document.getElementById('flOzInput').value;
    const quartValue = document.getElementById('quartOutput').value;
    
    document.getElementById('flOzInput').value = quartValue;
    document.getElementById('quartOutput').value = flOzValue;
}

function clearValues() {
    document.getElementById('flOzInput').value = '';
    document.getElementById('quartOutput').value = '';
}

// Add event listeners
document.getElementById('flOzInput').addEventListener('input', convertFlOzToQuart);
document.getElementById('quartOutput').addEventListener('input', convertQuartToFlOz);
</script>

<?php include 'footer.php'; ?>
