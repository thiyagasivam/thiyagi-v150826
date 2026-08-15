<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cups to Gallon Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cups to gallon converter 2026. Convert cups to gal instantly with accurate volume conversion for cooking and recipes.">
<meta name="keywords" content="cups to gallon converter 2026, cups to gal, volume converter, cooking calculator, recipe converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cups to Gallon Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cups to gallon converter 2026. Convert cups to gal instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cups-to-gallon.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cups to Gallon Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cups to gallon converter 2026. Convert cups to gal instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-coffee text-pink-600 mr-3"></i>
                Cups to Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cups to gallons instantly for cooking, baking, and recipe scaling calculations
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

                <!-- Gallon Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-whiskey text-pink-600 mr-2"></i>Gallons (US)
                    </label>
                    <input
                        type="number"
                        id="gallonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg"
                        placeholder="Gallons result"
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
                    <div class="font-bold text-pink-800">16 cups</div>
                    <div class="text-sm text-gray-600">= 1 gallon</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">8 cups</div>
                    <div class="text-sm text-gray-600">= 0.5 gallon</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">4 cups</div>
                    <div class="text-sm text-gray-600">= 0.25 gallon</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">1 cup</div>
                    <div class="text-sm text-gray-600">= 0.0625 gallon</div>
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
                    This converter helps you convert between US cups and US gallons. One gallon equals 16 cups.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gallons = Cups ÷ 16<br>
                    Cups = Gallons × 16
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Recipe scaling</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Cooking and baking</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Restaurant planning</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Food service calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCupsToGallon() {
    const cups = parseFloat(document.getElementById('cupsInput').value);
    if (!isNaN(cups)) {
        const gallon = cups / 16; // 1 gallon = 16 cups
        document.getElementById('gallonOutput').value = gallon.toFixed(6);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToCups() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const cups = gallon * 16; // 1 gallon = 16 cups
        document.getElementById('cupsInput').value = cups.toFixed(4);
    } else {
        document.getElementById('cupsInput').value = '';
    }
}

function swapValues() {
    const cupsValue = document.getElementById('cupsInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('cupsInput').value = gallonValue;
    document.getElementById('gallonOutput').value = cupsValue;
}

function clearValues() {
    document.getElementById('cupsInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('cupsInput').addEventListener('input', convertCupsToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToCups);
</script>

<?php include 'footer.php'; ?>
