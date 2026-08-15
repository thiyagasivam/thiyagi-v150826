<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gram to Centigram Converter 2026 - Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online gram to centigram converter 2026. Convert g to cg instantly with accurate weight conversion for scientific and laboratory measurements.">
<meta name="keywords" content="gram to centigram converter 2026, g to cg, weight converter, scientific calculator, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gram to Centigram Converter 2026 - Weight Calculator">
<meta property="og:description" content="Free online gram to centigram converter 2026. Convert g to cg instantly with accurate weight conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gram-to-centigram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gram to Centigram Converter 2026 - Weight Calculator">
<meta name="twitter:description" content="Free online gram to centigram converter 2026. Convert g to cg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale-right text-yellow-600 mr-3"></i>
                Gram to Centigram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert grams to centigrams instantly for scientific measurements and laboratory calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gram Input -->
                <div class="space-y-2">
                    <label for="gramInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight text-yellow-600 mr-2"></i>Grams (g)
                    </label>
                    <input
                        type="number"
                        id="gramInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Enter grams"
                        step="any"
                    >
                </div>

                <!-- Centigram Output -->
                <div class="space-y-2">
                    <label for="centigramOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-yellow-600 mr-2"></i>Centigrams (cg)
                    </label>
                    <input
                        type="number"
                        id="centigramOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Centigrams result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-yellow-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">1 g</div>
                    <div class="text-sm text-gray-600">= 100 cg</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">0.5 g</div>
                    <div class="text-sm text-gray-600">= 50 cg</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">0.25 g</div>
                    <div class="text-sm text-gray-600">= 25 cg</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">0.1 g</div>
                    <div class="text-sm text-gray-600">= 10 cg</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-yellow-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between grams and centigrams. One gram equals 100 centigrams.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Centigrams = Grams × 100<br>
                    Grams = Centigrams ÷ 100
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Scientific research</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Pharmaceutical calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Chemical analysis</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Precision weighing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertGramToCentigram() {
    const gram = parseFloat(document.getElementById('gramInput').value);
    if (!isNaN(gram)) {
        const centigram = gram * 100; // 1 g = 100 cg
        document.getElementById('centigramOutput').value = centigram.toFixed(4);
    } else {
        document.getElementById('centigramOutput').value = '';
    }
}

function convertCentigramToGram() {
    const centigram = parseFloat(document.getElementById('centigramOutput').value);
    if (!isNaN(centigram)) {
        const gram = centigram / 100; // 1 g = 100 cg
        document.getElementById('gramInput').value = gram.toFixed(6);
    } else {
        document.getElementById('gramInput').value = '';
    }
}

function swapValues() {
    const gramValue = document.getElementById('gramInput').value;
    const centigramValue = document.getElementById('centigramOutput').value;
    
    document.getElementById('gramInput').value = centigramValue;
    document.getElementById('centigramOutput').value = gramValue;
}

function clearValues() {
    document.getElementById('gramInput').value = '';
    document.getElementById('centigramOutput').value = '';
}

// Add event listeners
document.getElementById('gramInput').addEventListener('input', convertGramToCentigram);
document.getElementById('centigramOutput').addEventListener('input', convertCentigramToGram);
</script>

<?php include 'footer.php'; ?>
