<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gram to Grain Converter 2026 - Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online gram to grain converter 2026. Convert g to gr instantly with accurate weight conversion for pharmaceuticals and precious metals.">
<meta name="keywords" content="gram to grain converter 2026, g to gr, weight converter, pharmaceutical calculator, precious metals">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gram to Grain Converter 2026 - Weight Calculator">
<meta property="og:description" content="Free online gram to grain converter 2026. Convert g to gr instantly with accurate weight conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gram-to-grain.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gram to Grain Converter 2026 - Weight Calculator">
<meta name="twitter:description" content="Free online gram to grain converter 2026. Convert g to gr instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-emerald-600 mr-3"></i>
                Gram to Grain Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert grams to grains instantly for pharmaceuticals, precious metals, and precision measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gram Input -->
                <div class="space-y-2">
                    <label for="gramInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-emerald-600 mr-2"></i>Grams (g)
                    </label>
                    <input
                        type="number"
                        id="gramInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter grams"
                        step="any"
                    >
                </div>

                <!-- Grain Output -->
                <div class="space-y-2">
                    <label for="grainOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-pills text-emerald-600 mr-2"></i>Grains (gr)
                    </label>
                    <input
                        type="number"
                        id="grainOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Grains result"
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
                    <div class="font-bold text-emerald-800">1 g</div>
                    <div class="text-sm text-gray-600">= 15.432 gr</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">5 g</div>
                    <div class="text-sm text-gray-600">= 77.162 gr</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">10 g</div>
                    <div class="text-sm text-gray-600">= 154.324 gr</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">100 g</div>
                    <div class="text-sm text-gray-600">= 1543.24 gr</div>
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
                    This converter helps you convert between grams and grains. One gram equals 15.43236 grains.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Grains = Grams × 15.43236<br>
                    Grams = Grains ÷ 15.43236
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Pharmaceutical dosing</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Precious metal trading</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Ammunition specifications</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Jewelry measurements</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Medical prescriptions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertGramToGrain() {
    const gram = parseFloat(document.getElementById('gramInput').value);
    if (!isNaN(gram)) {
        const grain = gram * 15.43236; // 1 g = 15.43236 gr
        document.getElementById('grainOutput').value = grain.toFixed(4);
    } else {
        document.getElementById('grainOutput').value = '';
    }
}

function convertGrainToGram() {
    const grain = parseFloat(document.getElementById('grainOutput').value);
    if (!isNaN(grain)) {
        const gram = grain / 15.43236; // 1 g = 15.43236 gr
        document.getElementById('gramInput').value = gram.toFixed(6);
    } else {
        document.getElementById('gramInput').value = '';
    }
}

function swapValues() {
    const gramValue = document.getElementById('gramInput').value;
    const grainValue = document.getElementById('grainOutput').value;
    
    document.getElementById('gramInput').value = grainValue;
    document.getElementById('grainOutput').value = gramValue;
}

function clearValues() {
    document.getElementById('gramInput').value = '';
    document.getElementById('grainOutput').value = '';
}

// Add event listeners
document.getElementById('gramInput').addEventListener('input', convertGramToGrain);
document.getElementById('grainOutput').addEventListener('input', convertGrainToGram);
</script>

<?php include 'footer.php'; ?>
