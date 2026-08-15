<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pints to Gallon Converter 2026 - Volume Measurement Calculator | Thiyagi</title>
<meta name="description" content="Free online pints to gallon converter 2026. Convert pints to gallons instantly with accurate volume conversion. Perfect for cooking and beverage measurements.">
<meta name="keywords" content="pints to gallon converter 2026, pints to gallons, volume converter, cooking converter, beverage calculator, liquid measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pints to Gallon Converter 2026 - Volume Measurement Calculator">
<meta property="og:description" content="Free online pints to gallon converter 2026. Convert pints to gallons instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pints-to-gallon.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pints to Gallon Converter 2026 - Volume Measurement Calculator">
<meta name="twitter:description" content="Free online pints to gallon converter 2026. Convert pints to gallons instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-glass-whiskey text-emerald-600 mr-3"></i>
                Pints to Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US liquid pints to gallons instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pints Input -->
                <div class="space-y-2">
                    <label for="pintInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-glass-whiskey text-emerald-600 mr-2"></i>Pints (US liquid)
                    </label>
                    <input
                        type="number"
                        id="pintInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter pints"
                        step="any"
                    >
                </div>

                <!-- Gallons Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-emerald-600 mr-2"></i>Gallons (US liquid)
                    </label>
                    <input
                        type="number"
                        id="gallonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Gallons result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-emerald-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">2 pt</div>
                    <div class="text-sm text-gray-600">= 0.25 gal</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">4 pt</div>
                    <div class="text-sm text-gray-600">= 0.5 gal</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">8 pt</div>
                    <div class="text-sm text-gray-600">= 1 gal</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">16 pt</div>
                    <div class="text-sm text-gray-600">= 2 gal</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-emerald-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between US liquid pints and gallons. One US gallon equals exactly 8 US liquid pints.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gallons = Pints ÷ 8
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Cooking and recipe scaling</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Beverage serving calculations</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Milk and dairy measurements</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Paint and coating volumes</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Liquid ingredient purchasing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPintToGallon() {
    const pint = parseFloat(document.getElementById('pintInput').value);
    if (!isNaN(pint)) {
        const gallon = pint / 8;
        document.getElementById('gallonOutput').value = gallon.toFixed(8);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToPint() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const pint = gallon * 8;
        document.getElementById('pintInput').value = pint.toFixed(8);
    } else {
        document.getElementById('pintInput').value = '';
    }
}

function swapValues() {
    const pintValue = document.getElementById('pintInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('pintInput').value = gallonValue;
    document.getElementById('gallonOutput').value = pintValue;
}

function clearValues() {
    document.getElementById('pintInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('pintInput').addEventListener('input', convertPintToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToPint);
</script>

<?php include 'footer.php'; ?>
