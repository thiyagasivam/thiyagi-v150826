<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to Deciliter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online liter to deciliter converter 2026. Convert L to dL instantly with accurate volume conversion for cooking and laboratory measurements.">
<meta name="keywords" content="liter to deciliter converter 2026, L to dL, volume converter, cooking calculator, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to Deciliter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online liter to deciliter converter 2026. Convert L to dL instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-deciliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to Deciliter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online liter to deciliter converter 2026. Convert L to dL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wine-bottle text-indigo-600 mr-3"></i>
                Liter to Deciliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to deciliters instantly for cooking, laboratory work, and volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Input -->
                <div class="space-y-2">
                    <label for="literInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-indigo-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter liters"
                        step="any"
                    >
                </div>

                <!-- Deciliter Output -->
                <div class="space-y-2">
                    <label for="deciliterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-indigo-600 mr-2"></i>Deciliters (dL)
                    </label>
                    <input
                        type="number"
                        id="deciliterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Deciliters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-indigo-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1 L</div>
                    <div class="text-sm text-gray-600">= 10 dL</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">0.5 L</div>
                    <div class="text-sm text-gray-600">= 5 dL</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">0.25 L</div>
                    <div class="text-sm text-gray-600">= 2.5 dL</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">0.1 L</div>
                    <div class="text-sm text-gray-600">= 1 dL</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between liters and deciliters. One liter equals 10 deciliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Deciliters = Liters × 10<br>
                    Liters = Deciliters ÷ 10
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Cooking and baking</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Recipe measurements</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Laboratory work</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Medical dosing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertLiterToDeciliter() {
    const liter = parseFloat(document.getElementById('literInput').value);
    if (!isNaN(liter)) {
        const deciliter = liter * 10; // 1 L = 10 dL
        document.getElementById('deciliterOutput').value = deciliter.toFixed(4);
    } else {
        document.getElementById('deciliterOutput').value = '';
    }
}

function convertDeciliterToLiter() {
    const deciliter = parseFloat(document.getElementById('deciliterOutput').value);
    if (!isNaN(deciliter)) {
        const liter = deciliter / 10; // 1 L = 10 dL
        document.getElementById('literInput').value = liter.toFixed(6);
    } else {
        document.getElementById('literInput').value = '';
    }
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const deciliterValue = document.getElementById('deciliterOutput').value;
    
    document.getElementById('literInput').value = deciliterValue;
    document.getElementById('deciliterOutput').value = literValue;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('deciliterOutput').value = '';
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', convertLiterToDeciliter);
document.getElementById('deciliterOutput').addEventListener('input', convertDeciliterToLiter);
</script>

<?php include 'footer.php'; ?>
