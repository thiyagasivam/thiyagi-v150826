<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Tonne to Pound Converter 2026 - Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online tonne to pound converter 2026. Convert metric tonnes to pounds instantly with accurate weight conversion for shipping and logistics.">
<meta name="keywords" content="tonne to pound converter 2026, tonne to lb, weight converter, metric converter, shipping calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Tonne to Pound Converter 2026 - Weight Calculator">
<meta property="og:description" content="Free online tonne to pound converter 2026. Convert metric tonnes to pounds instantly with accurate weight conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/tonne-to-pound.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Tonne to Pound Converter 2026 - Weight Calculator">
<meta name="twitter:description" content="Free online tonne to pound converter 2026. Convert metric tonnes to pounds instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-green-600 mr-3"></i>
                Tonne to Pound Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert metric tonnes to pounds instantly for shipping and logistics calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Tonnes Input -->
                <div class="space-y-2">
                    <label for="tonneInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight text-green-600 mr-2"></i>Tonnes (t)
                    </label>
                    <input
                        type="number"
                        id="tonneInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter tonnes"
                        step="any"
                    >
                </div>

                <!-- Pounds Output -->
                <div class="space-y-2">
                    <label for="poundOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-green-600 mr-2"></i>Pounds (lb)
                    </label>
                    <input
                        type="number"
                        id="poundOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Pounds result"
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
                    <div class="font-bold text-green-800">1 t</div>
                    <div class="text-sm text-gray-600">= 2204.62 lb</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">0.5 t</div>
                    <div class="text-sm text-gray-600">= 1102.31 lb</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">2 t</div>
                    <div class="text-sm text-gray-600">= 4409.24 lb</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">5 t</div>
                    <div class="text-sm text-gray-600">= 11023.1 lb</div>
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
                    This converter helps you convert between metric tonnes and pounds. One tonne equals approximately 2204.62 pounds.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pounds = Tonnes × 2204.62<br>
                    Tonnes = Pounds ÷ 2204.62
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>International shipping calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Cargo weight conversions</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Industrial material calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Vehicle weight specifications</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Agricultural product measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertTonneToPound() {
    const tonne = parseFloat(document.getElementById('tonneInput').value);
    if (!isNaN(tonne)) {
        const pound = tonne * 2204.62262185;
        document.getElementById('poundOutput').value = pound.toFixed(8);
    } else {
        document.getElementById('poundOutput').value = '';
    }
}

function convertPoundToTonne() {
    const pound = parseFloat(document.getElementById('poundOutput').value);
    if (!isNaN(pound)) {
        const tonne = pound / 2204.62262185;
        document.getElementById('tonneInput').value = tonne.toFixed(8);
    } else {
        document.getElementById('tonneInput').value = '';
    }
}

function swapValues() {
    const tonneValue = document.getElementById('tonneInput').value;
    const poundValue = document.getElementById('poundOutput').value;
    
    document.getElementById('tonneInput').value = poundValue;
    document.getElementById('poundOutput').value = tonneValue;
}

function clearValues() {
    document.getElementById('tonneInput').value = '';
    document.getElementById('poundOutput').value = '';
}

// Add event listeners
document.getElementById('tonneInput').addEventListener('input', convertTonneToPound);
document.getElementById('poundOutput').addEventListener('input', convertPoundToTonne);
</script>

<?php include 'footer.php'; ?>
