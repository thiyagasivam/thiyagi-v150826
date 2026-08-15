<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Centimeter to Square Meter Converter 2026 - Area Calculator | Thiyagi</title>
<meta name="description" content="Free online square centimeter to square meter converter 2026. Convert cm² to m² instantly with accurate area conversion for engineering and design.">
<meta name="keywords" content="square centimeter to square meter converter 2026, cm² to m², area converter, engineering calculator, design calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Centimeter to Square Meter Converter 2026 - Area Calculator">
<meta property="og:description" content="Free online square centimeter to square meter converter 2026. Convert cm² to m² instantly with accurate area conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-centimeter-to-square-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Centimeter to Square Meter Converter 2026 - Area Calculator">
<meta name="twitter:description" content="Free online square centimeter to square meter converter 2026. Convert cm² to m² instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-square text-violet-600 mr-3"></i>
                Square Centimeter to Square Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square centimeters to square meters instantly for area calculations in engineering and design
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Centimeter Input -->
                <div class="space-y-2">
                    <label for="sqcmInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-crop text-violet-600 mr-2"></i>Square Centimeters (cm²)
                    </label>
                    <input
                        type="number"
                        id="sqcmInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter square centimeters"
                        step="any"
                    >
                </div>

                <!-- Square Meter Output -->
                <div class="space-y-2">
                    <label for="sqmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-expand text-violet-600 mr-2"></i>Square Meters (m²)
                    </label>
                    <input
                        type="number"
                        id="sqmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Square meters result"
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
                    <div class="font-bold text-violet-800">10,000 cm²</div>
                    <div class="text-sm text-gray-600">= 1 m²</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">5,000 cm²</div>
                    <div class="text-sm text-gray-600">= 0.5 m²</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1,000 cm²</div>
                    <div class="text-sm text-gray-600">= 0.1 m²</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">100 cm²</div>
                    <div class="text-sm text-gray-600">= 0.01 m²</div>
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
                    This converter helps you convert between square centimeters and square meters. One square meter equals 10,000 square centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Square Meters = Square Centimeters ÷ 10,000<br>
                    Square Centimeters = Square Meters × 10,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Engineering design</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Architecture planning</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Material calculations</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Surface area measurements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqcmToSqm() {
    const sqcm = parseFloat(document.getElementById('sqcmInput').value);
    if (!isNaN(sqcm)) {
        const sqm = sqcm / 10000; // 1 m² = 10,000 cm²
        document.getElementById('sqmOutput').value = sqm.toFixed(8);
    } else {
        document.getElementById('sqmOutput').value = '';
    }
}

function convertSqmToSqcm() {
    const sqm = parseFloat(document.getElementById('sqmOutput').value);
    if (!isNaN(sqm)) {
        const sqcm = sqm * 10000; // 1 m² = 10,000 cm²
        document.getElementById('sqcmInput').value = sqcm.toFixed(4);
    } else {
        document.getElementById('sqcmInput').value = '';
    }
}

function swapValues() {
    const sqcmValue = document.getElementById('sqcmInput').value;
    const sqmValue = document.getElementById('sqmOutput').value;
    
    document.getElementById('sqcmInput').value = sqmValue;
    document.getElementById('sqmOutput').value = sqcmValue;
}

function clearValues() {
    document.getElementById('sqcmInput').value = '';
    document.getElementById('sqmOutput').value = '';
}

// Add event listeners
document.getElementById('sqcmInput').addEventListener('input', convertSqcmToSqm);
document.getElementById('sqmOutput').addEventListener('input', convertSqmToSqcm);
</script>

<?php include 'footer.php'; ?>
