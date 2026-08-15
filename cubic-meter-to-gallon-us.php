<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Meter to US Gallon Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic meter to US gallon converter 2026. Convert m³ to gal instantly with accurate volume conversion for engineering and liquid measurements.">
<meta name="keywords" content="cubic meter to us gallon converter 2026, m³ to gal, volume converter, engineering calculator, liquid measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Meter to US Gallon Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic meter to US gallon converter 2026. Convert m³ to gal instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-meter-to-gallon-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Meter to US Gallon Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic meter to US gallon converter 2026. Convert m³ to gal instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-teal-600 mr-3"></i>
                Cubic Meter to US Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic meters to US gallons instantly for engineering, industrial, and liquid volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Meter Input -->
                <div class="space-y-2">
                    <label for="cubicMeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-box text-teal-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic meters"
                        step="any"
                    >
                </div>

                <!-- US Gallon Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-teal-600 mr-2"></i>US Gallons (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="US gallons result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-teal-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">1 m³</div>
                    <div class="text-sm text-gray-600">= 264.17 gal</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">0.5 m³</div>
                    <div class="text-sm text-gray-600">= 132.09 gal</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">0.1 m³</div>
                    <div class="text-sm text-gray-600">= 26.42 gal</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">0.01 m³</div>
                    <div class="text-sm text-gray-600">= 2.64 gal</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-teal-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between cubic meters and US gallons. One cubic meter equals approximately 264.172 US gallons.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    US Gallons = Cubic Meters × 264.172<br>
                    Cubic Meters = US Gallons ÷ 264.172
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Industrial tank capacity</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Pool and spa volume</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Fuel storage calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Water treatment systems</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Engineering design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicMeterToGallon() {
    const cubicMeter = parseFloat(document.getElementById('cubicMeterInput').value);
    if (!isNaN(cubicMeter)) {
        const gallon = cubicMeter * 264.172; // 1 m³ = 264.172 US gal
        document.getElementById('gallonOutput').value = gallon.toFixed(6);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToCubicMeter() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const cubicMeter = gallon / 264.172; // 1 m³ = 264.172 US gal
        document.getElementById('cubicMeterInput').value = cubicMeter.toFixed(8);
    } else {
        document.getElementById('cubicMeterInput').value = '';
    }
}

function swapValues() {
    const cubicMeterValue = document.getElementById('cubicMeterInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('cubicMeterInput').value = gallonValue;
    document.getElementById('gallonOutput').value = cubicMeterValue;
}

function clearValues() {
    document.getElementById('cubicMeterInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('cubicMeterInput').addEventListener('input', convertCubicMeterToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToCubicMeter);
</script>

<?php include 'footer.php'; ?>
