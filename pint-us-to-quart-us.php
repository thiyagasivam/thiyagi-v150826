<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>US Pint to US Quart Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online US pint to US quart converter 2026. Convert pt to qt instantly with accurate volume conversion for cooking and recipes.">
<meta name="keywords" content="us pint to us quart converter 2026, pt to qt, volume converter, cooking calculator, recipe converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="US Pint to US Quart Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online US pint to US quart converter 2026. Convert pt to qt instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pint-us-to-quart-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="US Pint to US Quart Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online US pint to US quart converter 2026. Convert pt to qt instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-rose-50 via-pink-50 to-fuchsia-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-beer text-rose-600 mr-3"></i>
                US Pint to US Quart Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US pints to US quarts instantly for cooking, baking, and recipe measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- US Pint Input -->
                <div class="space-y-2">
                    <label for="pintInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-martini text-rose-600 mr-2"></i>US Pints (pt)
                    </label>
                    <input
                        type="number"
                        id="pintInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-lg"
                        placeholder="Enter US pints"
                        step="any"
                    >
                </div>

                <!-- US Quart Output -->
                <div class="space-y-2">
                    <label for="quartOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-rose-600 mr-2"></i>US Quarts (qt)
                    </label>
                    <input
                        type="number"
                        id="quartOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-lg"
                        placeholder="US quarts result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-rose-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">2 pt</div>
                    <div class="text-sm text-gray-600">= 1 qt</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">4 pt</div>
                    <div class="text-sm text-gray-600">= 2 qt</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">8 pt</div>
                    <div class="text-sm text-gray-600">= 4 qt</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">1 pt</div>
                    <div class="text-sm text-gray-600">= 0.5 qt</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-rose-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US pints and US quarts. One quart equals 2 pints.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Quarts = Pints ÷ 2<br>
                    Pints = Quarts × 2
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-rose-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Recipe conversions</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Cooking measurements</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Food service planning</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Home brewing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPintToQuart() {
    const pint = parseFloat(document.getElementById('pintInput').value);
    if (!isNaN(pint)) {
        const quart = pint / 2; // 1 qt = 2 pt
        document.getElementById('quartOutput').value = quart.toFixed(6);
    } else {
        document.getElementById('quartOutput').value = '';
    }
}

function convertQuartToPint() {
    const quart = parseFloat(document.getElementById('quartOutput').value);
    if (!isNaN(quart)) {
        const pint = quart * 2; // 1 qt = 2 pt
        document.getElementById('pintInput').value = pint.toFixed(4);
    } else {
        document.getElementById('pintInput').value = '';
    }
}

function swapValues() {
    const pintValue = document.getElementById('pintInput').value;
    const quartValue = document.getElementById('quartOutput').value;
    
    document.getElementById('pintInput').value = quartValue;
    document.getElementById('quartOutput').value = pintValue;
}

function clearValues() {
    document.getElementById('pintInput').value = '';
    document.getElementById('quartOutput').value = '';
}

// Add event listeners
document.getElementById('pintInput').addEventListener('input', convertPintToQuart);
document.getElementById('quartOutput').addEventListener('input', convertQuartToPint);
</script>

<?php include 'footer.php'; ?>
