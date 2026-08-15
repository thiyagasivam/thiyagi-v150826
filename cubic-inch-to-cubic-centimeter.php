<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Inch to Cubic Centimeter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic inch to cubic centimeter converter 2026. Convert in³ to cm³ instantly with accurate volume conversion for engineering and design.">
<meta name="keywords" content="cubic inch to cubic centimeter converter 2026, in³ to cm³, volume converter, engineering calculator, design converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Inch to Cubic Centimeter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic inch to cubic centimeter converter 2026. Convert in³ to cm³ instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-inch-to-cubic-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Inch to Cubic Centimeter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic inch to cubic centimeter converter 2026. Convert in³ to cm³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-green-600 mr-3"></i>
                Cubic Inch to Cubic Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic inches to cubic centimeters instantly for engineering, design, and scientific calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Inch Input -->
                <div class="space-y-2">
                    <label for="cubicInchInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-square text-green-600 mr-2"></i>Cubic Inches (in³)
                    </label>
                    <input
                        type="number"
                        id="cubicInchInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic inches"
                        step="any"
                    >
                </div>

                <!-- Cubic Centimeter Output -->
                <div class="space-y-2">
                    <label for="cubicCmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-th-large text-green-600 mr-2"></i>Cubic Centimeters (cm³)
                    </label>
                    <input
                        type="number"
                        id="cubicCmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Cubic centimeters result"
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
                    <div class="font-bold text-green-800">1 in³</div>
                    <div class="text-sm text-gray-600">= 16.387 cm³</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">5 in³</div>
                    <div class="text-sm text-gray-600">= 81.935 cm³</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">10 in³</div>
                    <div class="text-sm text-gray-600">= 163.871 cm³</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">100 in³</div>
                    <div class="text-sm text-gray-600">= 1638.71 cm³</div>
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
                    This converter helps you convert between cubic inches and cubic centimeters. One cubic inch equals 16.387064 cubic centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    cm³ = in³ × 16.387064<br>
                    in³ = cm³ ÷ 16.387064
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Engine displacement</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>3D printing volumes</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Manufacturing design</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Scientific measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicInchToCubicCm() {
    const cubicInch = parseFloat(document.getElementById('cubicInchInput').value);
    if (!isNaN(cubicInch)) {
        const cubicCm = cubicInch * 16.387064; // 1 in³ = 16.387064 cm³
        document.getElementById('cubicCmOutput').value = cubicCm.toFixed(6);
    } else {
        document.getElementById('cubicCmOutput').value = '';
    }
}

function convertCubicCmToCubicInch() {
    const cubicCm = parseFloat(document.getElementById('cubicCmOutput').value);
    if (!isNaN(cubicCm)) {
        const cubicInch = cubicCm / 16.387064; // 1 in³ = 16.387064 cm³
        document.getElementById('cubicInchInput').value = cubicInch.toFixed(6);
    } else {
        document.getElementById('cubicInchInput').value = '';
    }
}

function swapValues() {
    const cubicInchValue = document.getElementById('cubicInchInput').value;
    const cubicCmValue = document.getElementById('cubicCmOutput').value;
    
    document.getElementById('cubicInchInput').value = cubicCmValue;
    document.getElementById('cubicCmOutput').value = cubicInchValue;
}

function clearValues() {
    document.getElementById('cubicInchInput').value = '';
    document.getElementById('cubicCmOutput').value = '';
}

// Add event listeners
document.getElementById('cubicInchInput').addEventListener('input', convertCubicInchToCubicCm);
document.getElementById('cubicCmOutput').addEventListener('input', convertCubicCmToCubicInch);
</script>

<?php include 'footer.php'; ?>
