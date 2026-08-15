<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>CC to Cubic Inch Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online CC to cubic inch converter 2026. Convert cubic centimeters to cubic inches instantly. Perfect for engine displacement and automotive specifications.">
<meta name="keywords" content="cc to cubic inch converter 2026, cubic centimeter to cubic inch, engine displacement, automotive converter, volume calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="CC to Cubic Inch Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online CC to cubic inch converter 2026. Convert cubic centimeters to cubic inches instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cc-to-cubic-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CC to Cubic Inch Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online CC to cubic inch converter 2026. Convert cubic centimeters to cubic inches instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-pink-50 to-rose-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-red-600 mr-3"></i>
                CC to Cubic Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic centimeters (cc) to cubic inches instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-2">
                    <label for="ccInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-red-600 mr-2"></i>Cubic Centimeters (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic centimeters"
                        step="any"
                    >
                </div>

                <!-- Cubic Inches Output -->
                <div class="space-y-2">
                    <label for="cubicInchOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-square text-red-600 mr-2"></i>Cubic Inches (in³)
                    </label>
                    <input
                        type="number"
                        id="cubicInchOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Cubic inches result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">16.39 cc</div>
                    <div class="text-sm text-gray-600">= 1 in³</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 cc</div>
                    <div class="text-sm text-gray-600">≈ 6.1 in³</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">500 cc</div>
                    <div class="text-sm text-gray-600">≈ 30.5 in³</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1000 cc</div>
                    <div class="text-sm text-gray-600">≈ 61 in³</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between cubic centimeters and cubic inches. One cubic inch equals exactly 16.387064 cubic centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Inches = Cubic Centimeters ÷ 16.387064
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Engine displacement calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Cylinder volume measurements</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Automotive specifications</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Motorcycle engine sizing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Industrial pump capacities</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCcToCubicInch() {
    const cc = parseFloat(document.getElementById('ccInput').value);
    if (!isNaN(cc)) {
        const cubicInch = cc / 16.387064;
        document.getElementById('cubicInchOutput').value = cubicInch.toFixed(8);
    } else {
        document.getElementById('cubicInchOutput').value = '';
    }
}

function convertCubicInchToCc() {
    const cubicInch = parseFloat(document.getElementById('cubicInchOutput').value);
    if (!isNaN(cubicInch)) {
        const cc = cubicInch * 16.387064;
        document.getElementById('ccInput').value = cc.toFixed(8);
    } else {
        document.getElementById('ccInput').value = '';
    }
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const cubicInchValue = document.getElementById('cubicInchOutput').value;
    
    document.getElementById('ccInput').value = cubicInchValue;
    document.getElementById('cubicInchOutput').value = ccValue;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('cubicInchOutput').value = '';
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', convertCcToCubicInch);
document.getElementById('cubicInchOutput').addEventListener('input', convertCubicInchToCc);
</script>

<?php include 'footer.php'; ?>
