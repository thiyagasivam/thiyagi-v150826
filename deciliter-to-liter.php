<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Deciliter to Liter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online deciliter to liter converter 2026. Convert dL to L instantly with accurate volume conversion for cooking and laboratory measurements.">
<meta name="keywords" content="deciliter to liter converter 2026, dL to L, volume converter, cooking calculator, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Deciliter to Liter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online deciliter to liter converter 2026. Convert dL to L instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/deciliter-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Deciliter to Liter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online deciliter to liter converter 2026. Convert dL to L instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-blue-600 mr-3"></i>
                Deciliter to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert deciliters to liters instantly for cooking, laboratory work, and volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Deciliter Input -->
                <div class="space-y-2">
                    <label for="deciliterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-blue-600 mr-2"></i>Deciliters (dL)
                    </label>
                    <input
                        type="number"
                        id="deciliterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter deciliters"
                        step="any"
                    >
                </div>

                <!-- Liter Output -->
                <div class="space-y-2">
                    <label for="literOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-blue-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Liters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-blue-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">10 dL</div>
                    <div class="text-sm text-gray-600">= 1 L</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">5 dL</div>
                    <div class="text-sm text-gray-600">= 0.5 L</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2.5 dL</div>
                    <div class="text-sm text-gray-600">= 0.25 L</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1 dL</div>
                    <div class="text-sm text-gray-600">= 0.1 L</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between deciliters and liters. One liter equals 10 deciliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Liters = Deciliters ÷ 10<br>
                    Deciliters = Liters × 10
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Cooking and baking</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Recipe conversions</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Medical dosing</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Beverage measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertDeciliterToLiter() {
    const deciliter = parseFloat(document.getElementById('deciliterInput').value);
    if (!isNaN(deciliter)) {
        const liter = deciliter / 10; // 1 L = 10 dL
        document.getElementById('literOutput').value = liter.toFixed(6);
    } else {
        document.getElementById('literOutput').value = '';
    }
}

function convertLiterToDeciliter() {
    const liter = parseFloat(document.getElementById('literOutput').value);
    if (!isNaN(liter)) {
        const deciliter = liter * 10; // 1 L = 10 dL
        document.getElementById('deciliterInput').value = deciliter.toFixed(4);
    } else {
        document.getElementById('deciliterInput').value = '';
    }
}

function swapValues() {
    const deciliterValue = document.getElementById('deciliterInput').value;
    const literValue = document.getElementById('literOutput').value;
    
    document.getElementById('deciliterInput').value = literValue;
    document.getElementById('literOutput').value = deciliterValue;
}

function clearValues() {
    document.getElementById('deciliterInput').value = '';
    document.getElementById('literOutput').value = '';
}

// Add event listeners
document.getElementById('deciliterInput').addEventListener('input', convertDeciliterToLiter);
document.getElementById('literOutput').addEventListener('input', convertLiterToDeciliter);
</script>

<?php include 'footer.php'; ?>
