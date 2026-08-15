<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>US Gallon to Cubic Meter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online US gallon to cubic meter converter 2026. Convert gal to m³ instantly with accurate volume conversion for engineering and industrial applications.">
<meta name="keywords" content="us gallon to cubic meter converter 2026, gal to m³, volume converter, engineering calculator, industrial calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="US Gallon to Cubic Meter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online US gallon to cubic meter converter 2026. Convert gal to m³ instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gallon-us-to-cubic-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="US Gallon to Cubic Meter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online US gallon to cubic meter converter 2026. Convert gal to m³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tint text-sky-600 mr-3"></i>
                US Gallon to Cubic Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US gallons to cubic meters instantly for engineering, industrial, and volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- US Gallon Input -->
                <div class="space-y-2">
                    <label for="gallonInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-whiskey text-sky-600 mr-2"></i>US Gallons (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-lg"
                        placeholder="Enter US gallons"
                        step="any"
                    >
                </div>

                <!-- Cubic Meter Output -->
                <div class="space-y-2">
                    <label for="cubicMeterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-sky-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-lg"
                        placeholder="Cubic meters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-sky-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">264.17 gal</div>
                    <div class="text-sm text-gray-600">= 1 m³</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">100 gal</div>
                    <div class="text-sm text-gray-600">= 0.379 m³</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">50 gal</div>
                    <div class="text-sm text-gray-600">= 0.189 m³</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">10 gal</div>
                    <div class="text-sm text-gray-600">= 0.038 m³</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-sky-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US gallons and cubic meters. One cubic meter equals approximately 264.172 US gallons.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Meters = US Gallons ÷ 264.172<br>
                    US Gallons = Cubic Meters × 264.172
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Tank capacity calculations</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Fuel storage planning</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Swimming pool volume</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Industrial fluid systems</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Engineering design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertGallonToCubicMeter() {
    const gallon = parseFloat(document.getElementById('gallonInput').value);
    if (!isNaN(gallon)) {
        const cubicMeter = gallon / 264.172; // 1 m³ = 264.172 US gal
        document.getElementById('cubicMeterOutput').value = cubicMeter.toFixed(8);
    } else {
        document.getElementById('cubicMeterOutput').value = '';
    }
}

function convertCubicMeterToGallon() {
    const cubicMeter = parseFloat(document.getElementById('cubicMeterOutput').value);
    if (!isNaN(cubicMeter)) {
        const gallon = cubicMeter * 264.172; // 1 m³ = 264.172 US gal
        document.getElementById('gallonInput').value = gallon.toFixed(6);
    } else {
        document.getElementById('gallonInput').value = '';
    }
}

function swapValues() {
    const gallonValue = document.getElementById('gallonInput').value;
    const cubicMeterValue = document.getElementById('cubicMeterOutput').value;
    
    document.getElementById('gallonInput').value = cubicMeterValue;
    document.getElementById('cubicMeterOutput').value = gallonValue;
}

function clearValues() {
    document.getElementById('gallonInput').value = '';
    document.getElementById('cubicMeterOutput').value = '';
}

// Add event listeners
document.getElementById('gallonInput').addEventListener('input', convertGallonToCubicMeter);
document.getElementById('cubicMeterOutput').addEventListener('input', convertCubicMeterToGallon);
</script>

<?php include 'footer.php'; ?>
