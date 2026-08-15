<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Foot to Cubic Meter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic foot to cubic meter converter 2026. Convert ft³ to m³ instantly with accurate volume conversion. Perfect for construction and engineering.">
<meta name="keywords" content="cubic foot to cubic meter converter 2026, ft3 to m3, volume converter, construction calculator, engineering converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Foot to Cubic Meter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic foot to cubic meter converter 2026. Convert ft³ to m³ instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-foot-to-cubic-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Foot to Cubic Meter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic foot to cubic meter converter 2026. Convert ft³ to m³ instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-green-50 to-emerald-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-teal-600 mr-3"></i>
                Cubic Foot to Cubic Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic feet to cubic meters instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Feet Input -->
                <div class="space-y-2">
                    <label for="cubicFootInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-teal-600 mr-2"></i>Cubic Feet (ft³)
                    </label>
                    <input
                        type="number"
                        id="cubicFootInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic feet"
                        step="any"
                    >
                </div>

                <!-- Cubic Meters Output -->
                <div class="space-y-2">
                    <label for="cubicMeterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-square text-teal-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Cubic meters result"
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
                    <div class="font-bold text-teal-800">1 ft³</div>
                    <div class="text-sm text-gray-600">≈ 0.0283 m³</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">10 ft³</div>
                    <div class="text-sm text-gray-600">≈ 0.283 m³</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">35.3 ft³</div>
                    <div class="text-sm text-gray-600">= 1 m³</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">100 ft³</div>
                    <div class="text-sm text-gray-600">≈ 2.83 m³</div>
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
                    This converter helps you convert between cubic feet and cubic meters. One cubic foot equals approximately 0.0283168 cubic meters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Meters = Cubic Feet × 0.0283168
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Construction material calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Storage container sizing</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Concrete volume planning</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>HVAC system specifications</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>International shipping calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicFootToCubicMeter() {
    const cubicFoot = parseFloat(document.getElementById('cubicFootInput').value);
    if (!isNaN(cubicFoot)) {
        const cubicMeter = cubicFoot * 0.0283168;
        document.getElementById('cubicMeterOutput').value = cubicMeter.toFixed(8);
    } else {
        document.getElementById('cubicMeterOutput').value = '';
    }
}

function convertCubicMeterToCubicFoot() {
    const cubicMeter = parseFloat(document.getElementById('cubicMeterOutput').value);
    if (!isNaN(cubicMeter)) {
        const cubicFoot = cubicMeter / 0.0283168;
        document.getElementById('cubicFootInput').value = cubicFoot.toFixed(8);
    } else {
        document.getElementById('cubicFootInput').value = '';
    }
}

function swapValues() {
    const cubicFootValue = document.getElementById('cubicFootInput').value;
    const cubicMeterValue = document.getElementById('cubicMeterOutput').value;
    
    document.getElementById('cubicFootInput').value = cubicMeterValue;
    document.getElementById('cubicMeterOutput').value = cubicFootValue;
}

function clearValues() {
    document.getElementById('cubicFootInput').value = '';
    document.getElementById('cubicMeterOutput').value = '';
}

// Add event listeners
document.getElementById('cubicFootInput').addEventListener('input', convertCubicFootToCubicMeter);
document.getElementById('cubicMeterOutput').addEventListener('input', convertCubicMeterToCubicFoot);
</script>

<?php include 'footer.php'; ?>
