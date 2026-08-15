<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Feet to Gallon Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic feet to gallon converter 2026. Convert cubic feet to gallons instantly with accurate volume conversion. Perfect for storage and tank calculations.">
<meta name="keywords" content="cubic feet to gallon converter 2026, cubic feet to gallons, volume converter, storage calculator, tank capacity, water volume">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Feet to Gallon Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic feet to gallon converter 2026. Convert cubic feet to gallons instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-feet-to-gallon.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Feet to Gallon Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic feet to gallon converter 2026. Convert cubic feet to gallons instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-blue-600 mr-3"></i>
                Cubic Feet to Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic feet to US liquid gallons instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Feet Input -->
                <div class="space-y-2">
                    <label for="cubicFeetInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-blue-600 mr-2"></i>Cubic Feet (ft³)
                    </label>
                    <input
                        type="number"
                        id="cubicFeetInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic feet"
                        step="any"
                    >
                </div>

                <!-- Gallons Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-blue-600 mr-2"></i>Gallons (US liquid)
                    </label>
                    <input
                        type="number"
                        id="gallonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Gallons result"
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
                    <div class="font-bold text-blue-800">1 ft³</div>
                    <div class="text-sm text-gray-600">≈ 7.48 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">5 ft³</div>
                    <div class="text-sm text-gray-600">≈ 37.4 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">10 ft³</div>
                    <div class="text-sm text-gray-600">≈ 74.8 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">50 ft³</div>
                    <div class="text-sm text-gray-600">≈ 374 gal</div>
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
                    This converter helps you convert between cubic feet and US liquid gallons. One cubic foot equals approximately 7.48052 US gallons.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gallons = Cubic Feet × 7.48052
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Water tank capacity calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Swimming pool volume</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Storage tank sizing</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Fuel storage calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Aquarium volume planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicFeetToGallon() {
    const cubicFeet = parseFloat(document.getElementById('cubicFeetInput').value);
    if (!isNaN(cubicFeet)) {
        const gallon = cubicFeet * 7.48052;
        document.getElementById('gallonOutput').value = gallon.toFixed(8);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToCubicFeet() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const cubicFeet = gallon / 7.48052;
        document.getElementById('cubicFeetInput').value = cubicFeet.toFixed(8);
    } else {
        document.getElementById('cubicFeetInput').value = '';
    }
}

function swapValues() {
    const cubicFeetValue = document.getElementById('cubicFeetInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('cubicFeetInput').value = gallonValue;
    document.getElementById('gallonOutput').value = cubicFeetValue;
}

function clearValues() {
    document.getElementById('cubicFeetInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('cubicFeetInput').addEventListener('input', convertCubicFeetToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToCubicFeet);
</script>

<?php include 'footer.php'; ?>
