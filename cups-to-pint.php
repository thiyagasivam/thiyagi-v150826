<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cups to Pints Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cups to pints converter 2026. Convert cups to pt instantly with accurate volume conversion for cooking and recipe measurements.">
<meta name="keywords" content="cups to pints converter 2026, cups to pt, volume converter, cooking calculator, recipe converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cups to Pints Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cups to pints converter 2026. Convert cups to pt instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cups-to-pint.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cups to Pints Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cups to pints converter 2026. Convert cups to pt instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-coffee text-pink-600 mr-3"></i>
                Cups to Pints Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cups to pints instantly for cooking, baking, and recipe measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cups Input -->
                <div class="space-y-2">
                    <label for="cupsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-mug-hot text-pink-600 mr-2"></i>Cups (US)
                    </label>
                    <input
                        type="number"
                        id="cupsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg"
                        placeholder="Enter cups"
                        step="any"
                    >
                </div>

                <!-- Pints Output -->
                <div class="space-y-2">
                    <label for="pintsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-martini-alt text-pink-600 mr-2"></i>Pints (US)
                    </label>
                    <input
                        type="number"
                        id="pintsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg"
                        placeholder="Pints result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-pink-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">1 cup</div>
                    <div class="text-sm text-gray-600">= 0.5 pt</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">2 cups</div>
                    <div class="text-sm text-gray-600">= 1 pt</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">4 cups</div>
                    <div class="text-sm text-gray-600">= 2 pt</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">8 cups</div>
                    <div class="text-sm text-gray-600">= 4 pt</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-pink-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US cups and pints. One US cup equals 0.5 pints (1 pint = 2 cups).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pints = Cups × 0.5<br>
                    Cups = Pints × 2
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Recipe conversions</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Cooking measurements</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Baking ingredients</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Food portioning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCupsToPints() {
    const cups = parseFloat(document.getElementById('cupsInput').value);
    if (!isNaN(cups)) {
        const pints = cups * 0.5; // 1 cup = 0.5 pint
        document.getElementById('pintsOutput').value = pints.toFixed(6);
    } else {
        document.getElementById('pintsOutput').value = '';
    }
}

function convertPintsToCups() {
    const pints = parseFloat(document.getElementById('pintsOutput').value);
    if (!isNaN(pints)) {
        const cups = pints * 2; // 1 pint = 2 cups
        document.getElementById('cupsInput').value = cups.toFixed(6);
    } else {
        document.getElementById('cupsInput').value = '';
    }
}

function swapValues() {
    const cupsValue = document.getElementById('cupsInput').value;
    const pintsValue = document.getElementById('pintsOutput').value;
    
    document.getElementById('cupsInput').value = pintsValue;
    document.getElementById('pintsOutput').value = cupsValue;
}

function clearValues() {
    document.getElementById('cupsInput').value = '';
    document.getElementById('pintsOutput').value = '';
}

// Add event listeners
document.getElementById('cupsInput').addEventListener('input', convertCupsToPints);
document.getElementById('pintsOutput').addEventListener('input', convertPintsToCups);
</script>

<?php include 'footer.php'; ?>
