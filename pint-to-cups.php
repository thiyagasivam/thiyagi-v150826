<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pint to Cups Converter 2026 - Volume Measurement Calculator | Thiyagi</title>
<meta name="description" content="Free online pint to cups converter 2026. Convert pints to cups instantly with accurate volume conversion. Perfect for cooking and baking measurements.">
<meta name="keywords" content="pint to cups converter 2026, cooking converter, baking calculator, volume measurement, kitchen converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pint to Cups Converter 2026 - Volume Measurement Calculator">
<meta property="og:description" content="Free online pint to cups converter 2026. Convert pints to cups instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pint-to-cups.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pint to Cups Converter 2026 - Volume Measurement Calculator">
<meta name="twitter:description" content="Free online pint to cups converter 2026. Convert pints to cups instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-rose-50 via-pink-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-glass-whiskey text-rose-600 mr-3"></i>
                Pint to Cups Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US liquid pints to cups instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pints Input -->
                <div class="space-y-2">
                    <label for="pintInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-whiskey text-rose-600 mr-2"></i>Pints (US liquid)
                    </label>
                    <input
                        type="number"
                        id="pintInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-lg"
                        placeholder="Enter pints"
                        step="any"
                    >
                </div>

                <!-- Cups Output -->
                <div class="space-y-2">
                    <label for="cupOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-coffee text-rose-600 mr-2"></i>Cups (US)
                    </label>
                    <input
                        type="number"
                        id="cupOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-lg"
                        placeholder="Cups result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-rose-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">0.5 pt</div>
                    <div class="text-sm text-gray-600">= 1 cup</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">1 pt</div>
                    <div class="text-sm text-gray-600">= 2 cups</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">2 pt</div>
                    <div class="text-sm text-gray-600">= 4 cups</div>
                </div>
                <div class="bg-rose-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-rose-800">4 pt</div>
                    <div class="text-sm text-gray-600">= 8 cups</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-rose-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US liquid pints and cups. One US liquid pint equals exactly 2 US cups.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cups = Pints × 2
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-rose-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Recipe conversion and scaling</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Cooking measurement calculations</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Baking ingredient proportions</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Beverage serving planning</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Food preparation measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPintToCup() {
    const pint = parseFloat(document.getElementById('pintInput').value);
    if (!isNaN(pint)) {
        const cup = pint * 2;
        document.getElementById('cupOutput').value = cup.toFixed(8);
    } else {
        document.getElementById('cupOutput').value = '';
    }
}

function convertCupToPint() {
    const cup = parseFloat(document.getElementById('cupOutput').value);
    if (!isNaN(cup)) {
        const pint = cup / 2;
        document.getElementById('pintInput').value = pint.toFixed(8);
    } else {
        document.getElementById('pintInput').value = '';
    }
}

function swapValues() {
    const pintValue = document.getElementById('pintInput').value;
    const cupValue = document.getElementById('cupOutput').value;
    
    document.getElementById('pintInput').value = cupValue;
    document.getElementById('cupOutput').value = pintValue;
}

function clearValues() {
    document.getElementById('pintInput').value = '';
    document.getElementById('cupOutput').value = '';
}

// Add event listeners
document.getElementById('pintInput').addEventListener('input', convertPintToCup);
document.getElementById('cupOutput').addEventListener('input', convertCupToPint);
</script>

<?php include 'footer.php'; ?>
