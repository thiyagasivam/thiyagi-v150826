<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter to Micrometer Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online meter to micrometer converter 2026. Convert meters to micrometers instantly. Perfect for scientific and precision measurements.">
<meta name="keywords" content="meter to micrometer converter 2026, m to μm, scientific converter, precision measurement, microscopy calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter to Micrometer Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online meter to micrometer converter 2026. Convert meters to micrometers instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-to-micrometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter to Micrometer Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online meter to micrometer converter 2026. Convert meters to micrometers instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-purple-600 mr-3"></i>
                Meter to Micrometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert meters to micrometers instantly with our precise length converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meters Input -->
                <div class="space-y-2">
                    <label for="meterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter meters"
                        step="any"
                    >
                </div>

                <!-- Micrometers Output -->
                <div class="space-y-2">
                    <label for="micrometerOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microscope text-purple-600 mr-2"></i>Micrometers (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Micrometers result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-purple-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.001 m</div>
                    <div class="text-sm text-gray-600">= 1000 μm</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.01 m</div>
                    <div class="text-sm text-gray-600">= 10,000 μm</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 m</div>
                    <div class="text-sm text-gray-600">= 1,000,000 μm</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">10 m</div>
                    <div class="text-sm text-gray-600">= 10,000,000 μm</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between meters and micrometers. One meter equals exactly 1,000,000 micrometers.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Micrometers = Meters × 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Microscopy measurements</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Cell biology research</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Semiconductor manufacturing</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Material thickness specifications</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Precision engineering tolerances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMeterToMicrometer() {
    const meter = parseFloat(document.getElementById('meterInput').value);
    if (!isNaN(meter)) {
        const micrometer = meter * 1000000;
        document.getElementById('micrometerOutput').value = micrometer.toFixed(8);
    } else {
        document.getElementById('micrometerOutput').value = '';
    }
}

function convertMicrometerToMeter() {
    const micrometer = parseFloat(document.getElementById('micrometerOutput').value);
    if (!isNaN(micrometer)) {
        const meter = micrometer / 1000000;
        document.getElementById('meterInput').value = meter.toFixed(8);
    } else {
        document.getElementById('meterInput').value = '';
    }
}

function swapValues() {
    const meterValue = document.getElementById('meterInput').value;
    const micrometerValue = document.getElementById('micrometerOutput').value;
    
    document.getElementById('meterInput').value = micrometerValue;
    document.getElementById('micrometerOutput').value = meterValue;
}

function clearValues() {
    document.getElementById('meterInput').value = '';
    document.getElementById('micrometerOutput').value = '';
}

// Add event listeners
document.getElementById('meterInput').addEventListener('input', convertMeterToMicrometer);
document.getElementById('micrometerOutput').addEventListener('input', convertMicrometerToMeter);
</script>

<?php include 'footer.php'; ?>
