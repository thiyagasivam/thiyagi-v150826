<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>ML to Gallon Converter 2026 - Milliliters to Gallons Calculator | Thiyagi</title>
<meta name="description" content="Free online ML to gallon converter 2026. Convert milliliters to gallons instantly with accurate volume conversion. Perfect for cooking, chemistry, and liquid measurements.">
<meta name="keywords" content="ml to gallon converter 2026, milliliters to gallons, volume converter, cooking converter, liquid measurement, chemistry calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="ML to Gallon Converter 2026 - Milliliters to Gallons Calculator">
<meta property="og:description" content="Free online ML to gallon converter 2026. Convert milliliters to gallons instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ml-to-gallon.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="ML to Gallon Converter 2026 - Milliliters to Gallons Calculator">
<meta name="twitter:description" content="Free online ML to gallon converter 2026. Convert milliliters to gallons instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-pink-600 mr-3"></i>
                ML to Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milliliters (mL) to gallons (US liquid) instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliters Input -->
                <div class="space-y-2">
                    <label for="mlInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-pink-600 mr-2"></i>Milliliters (mL)
                    </label>
                    <input
                        type="number"
                        id="mlInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg"
                        placeholder="Enter milliliters"
                        step="any"
                    >
                </div>

                <!-- Gallons Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-pink-600 mr-2"></i>Gallons (US liquid)
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
                    <div class="font-bold text-pink-800">250 mL</div>
                    <div class="text-sm text-gray-600">≈ 0.066 gal</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">500 mL</div>
                    <div class="text-sm text-gray-600">≈ 0.132 gal</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">1000 mL</div>
                    <div class="text-sm text-gray-600">≈ 0.264 gal</div>
                </div>
                <div class="bg-pink-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-pink-800">3785 mL</div>
                    <div class="text-sm text-gray-600">= 1 gal</div>
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
                    This converter helps you convert between milliliters (mL) and US liquid gallons. The conversion is based on the exact definition where 1 US gallon equals 3,785.411784 milliliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gallons = Milliliters ÷ 3,785.411784
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Cooking and baking recipes</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Fuel efficiency calculations</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Chemical measurements</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Liquid storage planning</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>International recipe conversion</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMlToGallon() {
    const ml = parseFloat(document.getElementById('mlInput').value);
    if (!isNaN(ml)) {
        const gallon = ml / 3785.411784;
        document.getElementById('gallonOutput').value = gallon.toFixed(8);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToMl() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const ml = gallon * 3785.411784;
        document.getElementById('mlInput').value = ml.toFixed(8);
    } else {
        document.getElementById('mlInput').value = '';
    }
}

function swapValues() {
    const mlValue = document.getElementById('mlInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('mlInput').value = gallonValue;
    document.getElementById('gallonOutput').value = mlValue;
}

function clearValues() {
    document.getElementById('mlInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('mlInput').addEventListener('input', convertMlToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToMl);
</script>

<?php include 'footer.php'; ?>
