<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Meter to Liter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic meter to liter converter 2026. Convert cubic meters to liters instantly with accurate volume conversion. Perfect for engineering and fluid calculations.">
<meta name="keywords" content="cubic meter to liter converter 2026, m3 to liter, volume converter, engineering calculator, fluid measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Meter to Liter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic meter to liter converter 2026. Convert cubic meters to liters instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-meter-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Meter to Liter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic meter to liter converter 2026. Convert cubic meters to liters instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-green-50 via-teal-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-green-600 mr-3"></i>
                Cubic Meter to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic meters to liters instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Meters Input -->
                <div class="space-y-2">
                    <label for="cubicMeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-green-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic meters"
                        step="any"
                    >
                </div>

                <!-- Liters Output -->
                <div class="space-y-2">
                    <label for="literOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-green-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Liters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-green-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">0.001 m³</div>
                    <div class="text-sm text-gray-600">= 1 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">0.1 m³</div>
                    <div class="text-sm text-gray-600">= 100 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">1 m³</div>
                    <div class="text-sm text-gray-600">= 1000 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">5 m³</div>
                    <div class="text-sm text-gray-600">= 5000 L</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between cubic meters and liters. One cubic meter equals exactly 1,000 liters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Liters = Cubic Meters × 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Water tank capacity calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Swimming pool volume planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Concrete volume measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Fuel storage calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Laboratory volume conversions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicMeterToLiter() {
    const cubicMeter = parseFloat(document.getElementById('cubicMeterInput').value);
    if (!isNaN(cubicMeter)) {
        const liter = cubicMeter * 1000;
        document.getElementById('literOutput').value = liter.toFixed(8);
    } else {
        document.getElementById('literOutput').value = '';
    }
}

function convertLiterToCubicMeter() {
    const liter = parseFloat(document.getElementById('literOutput').value);
    if (!isNaN(liter)) {
        const cubicMeter = liter / 1000;
        document.getElementById('cubicMeterInput').value = cubicMeter.toFixed(8);
    } else {
        document.getElementById('cubicMeterInput').value = '';
    }
}

function swapValues() {
    const cubicMeterValue = document.getElementById('cubicMeterInput').value;
    const literValue = document.getElementById('literOutput').value;
    
    document.getElementById('cubicMeterInput').value = literValue;
    document.getElementById('literOutput').value = cubicMeterValue;
}

function clearValues() {
    document.getElementById('cubicMeterInput').value = '';
    document.getElementById('literOutput').value = '';
}

// Add event listeners
document.getElementById('cubicMeterInput').addEventListener('input', convertCubicMeterToLiter);
document.getElementById('literOutput').addEventListener('input', convertLiterToCubicMeter);
</script>

<?php include 'footer.php'; ?>
