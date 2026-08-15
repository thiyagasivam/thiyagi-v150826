<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Hectare to Square Meter Converter 2026 - Area Calculator | Thiyagi</title>
<meta name="description" content="Free online hectare to square meter converter 2026. Convert hectares to m² instantly with accurate area conversion. Perfect for land measurement and agriculture calculations.">
<meta name="keywords" content="hectare to square meter converter 2026, hectare to m2, area converter, land measurement, agriculture calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Hectare to Square Meter Converter 2026 - Area Calculator">
<meta property="og:description" content="Free online hectare to square meter converter 2026. Convert hectares to m² instantly with accurate area conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/hectare-to-square-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Hectare to Square Meter Converter 2026 - Area Calculator">
<meta name="twitter:description" content="Free online hectare to square meter converter 2026. Convert hectares to m² instantly with accurate area conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-map text-green-600 mr-3"></i>
                Hectare to Square Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert hectares to square meters instantly with our accurate area converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Hectares Input -->
                <div class="space-y-2">
                    <label for="hectareInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-map text-green-600 mr-2"></i>Hectares (ha)
                    </label>
                    <input
                        type="number"
                        id="hectareInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter hectares"
                        step="any"
                    >
                </div>

                <!-- Square Meters Output -->
                <div class="space-y-2">
                    <label for="sqmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-square text-green-600 mr-2"></i>Square Meters (m²)
                    </label>
                    <input
                        type="number"
                        id="sqmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Square meters result"
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
                    <div class="font-bold text-green-800">0.1 ha</div>
                    <div class="text-sm text-gray-600">= 1,000 m²</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">0.5 ha</div>
                    <div class="text-sm text-gray-600">= 5,000 m²</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">1 ha</div>
                    <div class="text-sm text-gray-600">= 10,000 m²</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">10 ha</div>
                    <div class="text-sm text-gray-600">= 100,000 m²</div>
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
                    This converter helps you convert between hectares and square meters. One hectare equals exactly 10,000 square meters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Square Meters = Hectares × 10,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Agricultural land measurement</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Real estate property sizing</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Land development planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Environmental assessments</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Construction site planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertHectareToSqm() {
    const hectare = parseFloat(document.getElementById('hectareInput').value);
    if (!isNaN(hectare)) {
        const sqm = hectare * 10000;
        document.getElementById('sqmOutput').value = sqm.toFixed(8);
    } else {
        document.getElementById('sqmOutput').value = '';
    }
}

function convertSqmToHectare() {
    const sqm = parseFloat(document.getElementById('sqmOutput').value);
    if (!isNaN(sqm)) {
        const hectare = sqm / 10000;
        document.getElementById('hectareInput').value = hectare.toFixed(8);
    } else {
        document.getElementById('hectareInput').value = '';
    }
}

function swapValues() {
    const hectareValue = document.getElementById('hectareInput').value;
    const sqmValue = document.getElementById('sqmOutput').value;
    
    document.getElementById('hectareInput').value = sqmValue;
    document.getElementById('sqmOutput').value = hectareValue;
}

function clearValues() {
    document.getElementById('hectareInput').value = '';
    document.getElementById('sqmOutput').value = '';
}

// Add event listeners
document.getElementById('hectareInput').addEventListener('input', convertHectareToSqm);
document.getElementById('sqmOutput').addEventListener('input', convertSqmToHectare);
</script>

<?php include 'footer.php'; ?>
