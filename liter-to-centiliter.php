<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to Centiliter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online liter to centiliter converter 2026. Convert L to cL instantly with accurate volume conversion for cooking and laboratory measurements.">
<meta name="keywords" content="liter to centiliter converter 2026, L to cL, volume converter, cooking calculator, laboratory converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to Centiliter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online liter to centiliter converter 2026. Convert L to cL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-centiliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to Centiliter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online liter to centiliter converter 2026. Convert L to cL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-cyan-600 mr-3"></i>
                Liter to Centiliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to centiliters instantly for cooking, laboratory work, and volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Input -->
                <div class="space-y-2">
                    <label for="literInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-cyan-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter liters"
                        step="any"
                    >
                </div>

                <!-- Centiliter Output -->
                <div class="space-y-2">
                    <label for="centiliterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-vial text-cyan-600 mr-2"></i>Centiliters (cL)
                    </label>
                    <input
                        type="number"
                        id="centiliterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Centiliters result"
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
                    <div class="font-bold text-cyan-800">1 L</div>
                    <div class="text-sm text-gray-600">= 100 cL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">0.5 L</div>
                    <div class="text-sm text-gray-600">= 50 cL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">2 L</div>
                    <div class="text-sm text-gray-600">= 200 cL</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">5 L</div>
                    <div class="text-sm text-gray-600">= 500 cL</div>
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
                    This converter helps you convert between liters and centiliters. One liter equals 100 centiliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Centiliters = Liters × 100<br>
                    Liters = Centiliters ÷ 100
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Recipe measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Laboratory work</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Beverage portioning</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Chemical solutions</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Medical dosing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertLiterToCentiliter() {
    const liter = parseFloat(document.getElementById('literInput').value);
    if (!isNaN(liter)) {
        const centiliter = liter * 100; // 1 L = 100 cL
        document.getElementById('centiliterOutput').value = centiliter.toFixed(2);
    } else {
        document.getElementById('centiliterOutput').value = '';
    }
}

function convertCentiliterToLiter() {
    const centiliter = parseFloat(document.getElementById('centiliterOutput').value);
    if (!isNaN(centiliter)) {
        const liter = centiliter / 100; // 1 L = 100 cL
        document.getElementById('literInput').value = liter.toFixed(4);
    } else {
        document.getElementById('literInput').value = '';
    }
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const centiliterValue = document.getElementById('centiliterOutput').value;
    
    document.getElementById('literInput').value = centiliterValue;
    document.getElementById('centiliterOutput').value = literValue;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('centiliterOutput').value = '';
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', convertLiterToCentiliter);
document.getElementById('centiliterOutput').addEventListener('input', convertCentiliterToLiter);
</script>

<?php include 'footer.php'; ?>
