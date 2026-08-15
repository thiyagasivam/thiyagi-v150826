<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centigram to Gram Converter 2026 - Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online centigram to gram converter 2026. Convert cg to g instantly with accurate weight conversion for scientific and laboratory measurements.">
<meta name="keywords" content="centigram to gram converter 2026, cg to g, weight converter, scientific calculator, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centigram to Gram Converter 2026 - Weight Calculator">
<meta property="og:description" content="Free online centigram to gram converter 2026. Convert cg to g instantly with accurate weight conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centigram-to-gram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centigram to Gram Converter 2026 - Weight Calculator">
<meta name="twitter:description" content="Free online centigram to gram converter 2026. Convert cg to g instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-amber-600 mr-3"></i>
                Centigram to Gram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert centigrams to grams instantly for scientific measurements and laboratory calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centigram Input -->
                <div class="space-y-2">
                    <label for="centigramInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight text-amber-600 mr-2"></i>Centigrams (cg)
                    </label>
                    <input
                        type="number"
                        id="centigramInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Enter centigrams"
                        step="any"
                    >
                </div>

                <!-- Gram Output -->
                <div class="space-y-2">
                    <label for="gramOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale-right text-amber-600 mr-2"></i>Grams (g)
                    </label>
                    <input
                        type="number"
                        id="gramOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Grams result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-amber-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">100 cg</div>
                    <div class="text-sm text-gray-600">= 1 g</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">50 cg</div>
                    <div class="text-sm text-gray-600">= 0.5 g</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">25 cg</div>
                    <div class="text-sm text-gray-600">= 0.25 g</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">10 cg</div>
                    <div class="text-sm text-gray-600">= 0.1 g</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-amber-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between centigrams and grams. One gram equals 100 centigrams.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Grams = Centigrams ÷ 100<br>
                    Centigrams = Grams × 100
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Scientific research</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Pharmaceutical dosing</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Chemical analysis</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Precision weighing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCentigramToGram() {
    const centigram = parseFloat(document.getElementById('centigramInput').value);
    if (!isNaN(centigram)) {
        const gram = centigram / 100; // 1 g = 100 cg
        document.getElementById('gramOutput').value = gram.toFixed(6);
    } else {
        document.getElementById('gramOutput').value = '';
    }
}

function convertGramToCentigram() {
    const gram = parseFloat(document.getElementById('gramOutput').value);
    if (!isNaN(gram)) {
        const centigram = gram * 100; // 1 g = 100 cg
        document.getElementById('centigramInput').value = centigram.toFixed(4);
    } else {
        document.getElementById('centigramInput').value = '';
    }
}

function swapValues() {
    const centigramValue = document.getElementById('centigramInput').value;
    const gramValue = document.getElementById('gramOutput').value;
    
    document.getElementById('centigramInput').value = gramValue;
    document.getElementById('gramOutput').value = centigramValue;
}

function clearValues() {
    document.getElementById('centigramInput').value = '';
    document.getElementById('gramOutput').value = '';
}

// Add event listeners
document.getElementById('centigramInput').addEventListener('input', convertCentigramToGram);
document.getElementById('gramOutput').addEventListener('input', convertGramToCentigram);
</script>

<?php include 'footer.php'; ?>
