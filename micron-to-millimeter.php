<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micron to Millimeter Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online micron to millimeter converter 2026. Convert micrometers to mm instantly with accurate length conversion. Perfect for scientific and precision measurements.">
<meta name="keywords" content="micron to millimeter converter 2026, micrometer to mm, scientific converter, precision measurement, laboratory converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micron to Millimeter Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online micron to millimeter converter 2026. Convert micrometers to mm instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micron-to-millimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micron to Millimeter Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online micron to millimeter converter 2026. Convert micrometers to mm instantly with accurate length conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-violet-600 mr-3"></i>
                Micron to Millimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert microns to millimeters instantly with our accurate scientific measurement converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microns Input -->
                <div class="space-y-2">
                    <label for="micronInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Microns (μm)
                    </label>
                    <input
                        type="number"
                        id="micronInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter microns"
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
                    <div class="font-bold text-violet-800">1 μm</div>
                    <div class="text-sm text-gray-600">= 0.001 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">100 μm</div>
                    <div class="text-sm text-gray-600">= 0.1 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">500 μm</div>
                    <div class="text-sm text-gray-600">= 0.5 mm</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1000 μm</div>
                    <div class="text-sm text-gray-600">= 1 mm</div>
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
                    This converter helps you convert between microns (micrometers) and millimeters. One micron equals exactly 0.001 millimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Millimeters = Microns × 0.001
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Microscopy measurements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Cell biology research</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Particle size analysis</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Material science studies</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Quality control testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMicronToMillimeter() {
    const micron = parseFloat(document.getElementById('micronInput').value);
    if (!isNaN(micron)) {
        const millimeter = micron * 0.001;
        document.getElementById('millimeterOutput').value = millimeter.toFixed(8);
    } else {
        document.getElementById('millimeterOutput').value = '';
    }
}

function convertMillimeterToMicron() {
    const millimeter = parseFloat(document.getElementById('millimeterOutput').value);
    if (!isNaN(millimeter)) {
        const micron = millimeter / 0.001;
        document.getElementById('micronInput').value = micron.toFixed(8);
    } else {
        document.getElementById('micronInput').value = '';
    }
}

function swapValues() {
    const micronValue = document.getElementById('micronInput').value;
    const millimeterValue = document.getElementById('millimeterOutput').value;
    
    document.getElementById('micronInput').value = millimeterValue;
    document.getElementById('millimeterOutput').value = micronValue;
}

function clearValues() {
    document.getElementById('micronInput').value = '';
    document.getElementById('millimeterOutput').value = '';
}

// Add event listeners
document.getElementById('micronInput').addEventListener('input', convertMicronToMillimeter);
document.getElementById('millimeterOutput').addEventListener('input', convertMillimeterToMicron);
</script>

<?php include 'footer.php'; ?>
