<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Meter to Cubic Foot Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic meter to cubic foot converter 2026. Convert m³ to ft³ instantly with accurate volume conversion. Perfect for construction and engineering.">
<meta name="keywords" content="cubic meter to cubic foot converter 2026, m3 to ft3, volume converter, construction calculator, engineering converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Meter to Cubic Foot Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic meter to cubic foot converter 2026. Convert m³ to ft³ instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-meter-to-cubic-foot.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Meter to Cubic Foot Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic meter to cubic foot converter 2026. Convert m³ to ft³ instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-blue-600 mr-3"></i>
                Cubic Meter to Cubic Foot Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic meters to cubic feet instantly with our accurate volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Meters Input -->
                <div class="space-y-2">
                    <label for="cubicMeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-blue-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic meters"
                        step="any"
                    >
                </div>

                <!-- Cubic Feet Output -->
                <div class="space-y-2">
                    <label for="cubicFootOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-box text-blue-600 mr-2"></i>Cubic Feet (ft³)
                    </label>
                    <input
                        type="number"
                        id="cubicFootOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Cubic feet result"
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
                    <div class="font-bold text-blue-800">1 m³</div>
                    <div class="text-sm text-gray-600">≈ 35.31 ft³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">5 m³</div>
                    <div class="text-sm text-gray-600">≈ 176.57 ft³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">10 m³</div>
                    <div class="text-sm text-gray-600">≈ 353.15 ft³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">100 m³</div>
                    <div class="text-sm text-gray-600">≈ 3,531.5 ft³</div>
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
                    This converter helps you convert between cubic meters and cubic feet. One cubic meter equals approximately 35.3147 cubic feet.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Feet = Cubic Meters × 35.3147
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Construction volume calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Storage capacity planning</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Shipping container measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Concrete and material estimates</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>HVAC system design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicMeterToCubicFoot() {
    const cubicMeter = parseFloat(document.getElementById('cubicMeterInput').value);
    if (!isNaN(cubicMeter)) {
        const cubicFoot = cubicMeter * 35.3147;
        document.getElementById('cubicFootOutput').value = cubicFoot.toFixed(8);
    } else {
        document.getElementById('cubicFootOutput').value = '';
    }
}

function convertCubicFootToCubicMeter() {
    const cubicFoot = parseFloat(document.getElementById('cubicFootOutput').value);
    if (!isNaN(cubicFoot)) {
        const cubicMeter = cubicFoot / 35.3147;
        document.getElementById('cubicMeterInput').value = cubicMeter.toFixed(8);
    } else {
        document.getElementById('cubicMeterInput').value = '';
    }
}

function swapValues() {
    const cubicMeterValue = document.getElementById('cubicMeterInput').value;
    const cubicFootValue = document.getElementById('cubicFootOutput').value;
    
    document.getElementById('cubicMeterInput').value = cubicFootValue;
    document.getElementById('cubicFootOutput').value = cubicMeterValue;
}

function clearValues() {
    document.getElementById('cubicMeterInput').value = '';
    document.getElementById('cubicFootOutput').value = '';
}

// Add event listeners
document.getElementById('cubicMeterInput').addEventListener('input', convertCubicMeterToCubicFoot);
document.getElementById('cubicFootOutput').addEventListener('input', convertCubicFootToCubicMeter);
</script>

<?php include 'footer.php'; ?>
