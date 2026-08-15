<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Millimeter to Square Meter Converter 2026 - Area Calculator | Thiyagi</title>
<meta name="description" content="Free online square millimeter to square meter converter 2026. Convert mm² to m² instantly with accurate area conversion for engineering and design.">
<meta name="keywords" content="square millimeter to square meter converter 2026, mm² to m², area converter, engineering calculator, design calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Millimeter to Square Meter Converter 2026 - Area Calculator">
<meta property="og:description" content="Free online square millimeter to square meter converter 2026. Convert mm² to m² instantly with accurate area conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-millimeter-to-square-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Millimeter to Square Meter Converter 2026 - Area Calculator">
<meta name="twitter:description" content="Free online square millimeter to square meter converter 2026. Convert mm² to m² instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-vector-square text-indigo-600 mr-3"></i>
                Square Millimeter to Square Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square millimeters to square meters instantly for engineering and design calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Millimeter Input -->
                <div class="space-y-2">
                    <label for="sqmmInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-crop text-indigo-600 mr-2"></i>Square Millimeters (mm²)
                    </label>
                    <input
                        type="number"
                        id="sqmmInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter square millimeters"
                        step="any"
                    >
                </div>

                <!-- Square Meter Output -->
                <div class="space-y-2">
                    <label for="sqmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-expand text-indigo-600 mr-2"></i>Square Meters (m²)
                    </label>
                    <input
                        type="number"
                        id="sqmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Square meters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-indigo-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1,000,000 mm²</div>
                    <div class="text-sm text-gray-600">= 1 m²</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">100,000 mm²</div>
                    <div class="text-sm text-gray-600">= 0.1 m²</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">10,000 mm²</div>
                    <div class="text-sm text-gray-600">= 0.01 m²</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1,000 mm²</div>
                    <div class="text-sm text-gray-600">= 0.001 m²</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between square millimeters and square meters. One square meter equals 1,000,000 square millimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Square Meters = Square Millimeters ÷ 1,000,000<br>
                    Square Millimeters = Square Meters × 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Precision engineering</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Material science calculations</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Microelectronics design</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Surface area measurements</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqmmToSqm() {
    const sqmm = parseFloat(document.getElementById('sqmmInput').value);
    if (!isNaN(sqmm)) {
        const sqm = sqmm / 1000000; // 1 m² = 1,000,000 mm²
        document.getElementById('sqmOutput').value = sqm.toFixed(10);
    } else {
        document.getElementById('sqmOutput').value = '';
    }
}

function convertSqmToSqmm() {
    const sqm = parseFloat(document.getElementById('sqmOutput').value);
    if (!isNaN(sqm)) {
        const sqmm = sqm * 1000000; // 1 m² = 1,000,000 mm²
        document.getElementById('sqmmInput').value = sqmm.toFixed(2);
    } else {
        document.getElementById('sqmmInput').value = '';
    }
}

function swapValues() {
    const sqmmValue = document.getElementById('sqmmInput').value;
    const sqmValue = document.getElementById('sqmOutput').value;
    
    document.getElementById('sqmmInput').value = sqmValue;
    document.getElementById('sqmOutput').value = sqmmValue;
}

function clearValues() {
    document.getElementById('sqmmInput').value = '';
    document.getElementById('sqmOutput').value = '';
}

// Add event listeners
document.getElementById('sqmmInput').addEventListener('input', convertSqmmToSqm);
document.getElementById('sqmOutput').addEventListener('input', convertSqmToSqmm);
</script>

<?php include 'footer.php'; ?>
