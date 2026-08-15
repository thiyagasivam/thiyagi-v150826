<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micrometer to Millimeter Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online micrometer to millimeter converter 2026. Convert μm to mm instantly with accurate length conversion for scientific applications.">
<meta name="keywords" content="micrometer to millimeter converter 2026, μm to mm, length converter, scientific calculator, laboratory converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micrometer to Millimeter Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online micrometer to millimeter converter 2026. Convert μm to mm instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micrometer-to-millimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micrometer to Millimeter Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online micrometer to millimeter converter 2026. Convert μm to mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-violet-600 mr-3"></i>
                Micrometer to Millimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert micrometers to millimeters instantly for scientific and laboratory measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrometers Input -->
                <div class="space-y-2">
                    <label for="micrometerInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Micrometers (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter micrometers"
                        step="any"
                    >
                </div>

                <!-- Millimeters Output -->
                <div class="space-y-2">
                    <label for="millimeterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-violet-600 mr-2"></i>Millimeters (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Millimeters result"
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
                    <div class="font-bold text-violet-800">1000 μm</div>
                    <div class="text-sm text-gray-600">= 1 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">100 μm</div>
                    <div class="text-sm text-gray-600">= 0.1 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">10 μm</div>
                    <div class="text-sm text-gray-600">= 0.01 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">10000 μm</div>
                    <div class="text-sm text-gray-600">= 10 mm</div>
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
                    This converter helps you convert between micrometers and millimeters. One millimeter equals 1000 micrometers.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Millimeters = Micrometers ÷ 1000<br>
                    Micrometers = Millimeters × 1000
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
function convertMicrometerToMillimeter() {
    const micrometer = parseFloat(document.getElementById('micrometerInput').value);
    if (!isNaN(micrometer)) {
        const millimeter = micrometer / 1000;
        document.getElementById('millimeterOutput').value = millimeter.toFixed(8);
    } else {
        document.getElementById('millimeterOutput').value = '';
    }
}

function convertMillimeterToMicrometer() {
    const millimeter = parseFloat(document.getElementById('millimeterOutput').value);
    if (!isNaN(millimeter)) {
        const micrometer = millimeter * 1000;
        document.getElementById('micrometerInput').value = micrometer.toFixed(8);
    } else {
        document.getElementById('micrometerInput').value = '';
    }
}

function swapValues() {
    const micrometerValue = document.getElementById('micrometerInput').value;
    const millimeterValue = document.getElementById('millimeterOutput').value;
    
    document.getElementById('micrometerInput').value = millimeterValue;
    document.getElementById('millimeterOutput').value = micrometerValue;
}

function clearValues() {
    document.getElementById('micrometerInput').value = '';
    document.getElementById('millimeterOutput').value = '';
}

// Add event listeners
document.getElementById('micrometerInput').addEventListener('input', convertMicrometerToMillimeter);
document.getElementById('millimeterOutput').addEventListener('input', convertMillimeterToMicrometer);
</script>

<?php include 'footer.php'; ?>
