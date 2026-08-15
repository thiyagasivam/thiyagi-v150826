<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millimeter to Micrometer Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online millimeter to micrometer converter 2026. Convert mm to μm instantly with accurate length conversion for scientific and laboratory use.">
<meta name="keywords" content="millimeter to micrometer converter 2026, mm to μm, length converter, scientific calculator, laboratory converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millimeter to Micrometer Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online millimeter to micrometer converter 2026. Convert mm to μm instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millimeter-to-micrometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millimeter to Micrometer Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online millimeter to micrometer converter 2026. Convert mm to μm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-violet-600 mr-3"></i>
                Millimeter to Micrometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert millimeters to micrometers instantly for scientific and laboratory measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millimeters Input -->
                <div class="space-y-2">
                    <label for="millimeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-violet-600 mr-2"></i>Millimeters (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter millimeters"
                        step="any"
                    >
                </div>

                <!-- Micrometers Output -->
                <div class="space-y-2">
                    <label for="micrometerOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Micrometers (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Micrometers result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-violet-600 hover:bg-violet-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-violet-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1 mm</div>
                    <div class="text-sm text-gray-600">= 1000 μm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">0.1 mm</div>
                    <div class="text-sm text-gray-600">= 100 μm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">0.01 mm</div>
                    <div class="text-sm text-gray-600">= 10 μm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">10 mm</div>
                    <div class="text-sm text-gray-600">= 10000 μm</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-violet-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between millimeters and micrometers. One millimeter equals exactly 1000 micrometers.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Micrometers = Millimeters × 1000<br>
                    Millimeters = Micrometers ÷ 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Microscopy measurements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Cellular biology research</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Material science analysis</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Precision manufacturing</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Semiconductor technology</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMillimeterToMicrometer() {
    const millimeter = parseFloat(document.getElementById('millimeterInput').value);
    if (!isNaN(millimeter)) {
        const micrometer = millimeter * 1000;
        document.getElementById('micrometerOutput').value = micrometer.toFixed(8);
    } else {
        document.getElementById('micrometerOutput').value = '';
    }
}

function convertMicrometerToMillimeter() {
    const micrometer = parseFloat(document.getElementById('micrometerOutput').value);
    if (!isNaN(micrometer)) {
        const millimeter = micrometer / 1000;
        document.getElementById('millimeterInput').value = millimeter.toFixed(8);
    } else {
        document.getElementById('millimeterInput').value = '';
    }
}

function swapValues() {
    const millimeterValue = document.getElementById('millimeterInput').value;
    const micrometerValue = document.getElementById('micrometerOutput').value;
    
    document.getElementById('millimeterInput').value = micrometerValue;
    document.getElementById('micrometerOutput').value = millimeterValue;
}

function clearValues() {
    document.getElementById('millimeterInput').value = '';
    document.getElementById('micrometerOutput').value = '';
}

// Add event listeners
document.getElementById('millimeterInput').addEventListener('input', convertMillimeterToMicrometer);
document.getElementById('micrometerOutput').addEventListener('input', convertMicrometerToMillimeter);
</script>

<?php include 'footer.php'; ?>
