<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pints to Liters Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online pints to liters converter 2026. Convert pt to L instantly with accurate volume conversion for cooking and recipe measurements.">
<meta name="keywords" content="pints to liters converter 2026, pt to L, volume converter, cooking calculator, recipe converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pints to Liters Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online pints to liters converter 2026. Convert pt to L instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pints-to-liters.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pints to Liters Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online pints to liters converter 2026. Convert pt to L instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-glass-martini-alt text-green-600 mr-3"></i>
                Pints to Liters Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pints to liters instantly for cooking, baking, and beverage measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pints Input -->
                <div class="space-y-2">
                    <label for="pintsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-beer text-green-600 mr-2"></i>Pints (US)
                    </label>
                    <input
                        type="number"
                        id="pintsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter pints"
                        step="any"
                    >
                </div>

                <!-- Liters Output -->
                <div class="space-y-2">
                    <label for="litersOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-green-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="litersOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Liters result"
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
                    <div class="font-bold text-green-800">1 pint</div>
                    <div class="text-sm text-gray-600">= 0.473 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">2 pints</div>
                    <div class="text-sm text-gray-600">= 0.946 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">4 pints</div>
                    <div class="text-sm text-gray-600">= 1.893 L</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">8 pints</div>
                    <div class="text-sm text-gray-600">= 3.785 L</div>
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
                    This converter helps you convert between US pints and liters. One US pint equals approximately 0.473176 liters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Liters = Pints × 0.473176<br>
                    Pints = Liters ÷ 0.473176
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Recipe conversions</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Cooking measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>International recipes</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Home brewing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPintsToLiters() {
    const pints = parseFloat(document.getElementById('pintsInput').value);
    if (!isNaN(pints)) {
        const liters = pints * 0.473176; // 1 US pint = 0.473176 L
        document.getElementById('litersOutput').value = liters.toFixed(6);
    } else {
        document.getElementById('litersOutput').value = '';
    }
}

function convertLitersToPints() {
    const liters = parseFloat(document.getElementById('litersOutput').value);
    if (!isNaN(liters)) {
        const pints = liters / 0.473176; // 1 US pint = 0.473176 L
        document.getElementById('pintsInput').value = pints.toFixed(6);
    } else {
        document.getElementById('pintsInput').value = '';
    }
}

function swapValues() {
    const pintsValue = document.getElementById('pintsInput').value;
    const litersValue = document.getElementById('litersOutput').value;
    
    document.getElementById('pintsInput').value = litersValue;
    document.getElementById('litersOutput').value = pintsValue;
}

function clearValues() {
    document.getElementById('pintsInput').value = '';
    document.getElementById('litersOutput').value = '';
}

// Add event listeners
document.getElementById('pintsInput').addEventListener('input', convertPintsToLiters);
document.getElementById('litersOutput').addEventListener('input', convertLitersToPints);
</script>

<?php include 'footer.php'; ?>
