<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Tonne to Kilogram Converter 2026 - Mass Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online tonne to kilogram converter 2026. Convert tonnes to kilograms instantly with accurate mass conversion. Perfect for industrial and shipping calculations.">
<meta name="keywords" content="tonne to kilogram converter 2026, tonnes to kg, mass converter, weight calculator, industrial converter, shipping calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Tonne to Kilogram Converter 2026 - Mass Weight Calculator">
<meta property="og:description" content="Free online tonne to kilogram converter 2026. Convert tonnes to kilograms instantly with accurate mass conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/tonne-to-kilogram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Tonne to Kilogram Converter 2026 - Mass Weight Calculator">
<meta name="twitter:description" content="Free online tonne to kilogram converter 2026. Convert tonnes to kilograms instantly with accurate mass conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-slate-600 mr-3"></i>
                Tonne to Kilogram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert metric tonnes to kilograms instantly with our precise mass converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Tonnes Input -->
                <div class="space-y-2">
                    <label for="tonneInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-slate-600 mr-2"></i>Tonnes (t)
                    </label>
                    <input
                        type="number"
                        id="tonneInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Enter tonnes"
                        step="any"
                    >
                </div>

                <!-- Kilograms Output -->
                <div class="space-y-2">
                    <label for="kgOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-slate-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input
                        type="number"
                        id="kgOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Kilograms result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-slate-600 hover:bg-slate-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-slate-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">0.1 t</div>
                    <div class="text-sm text-gray-600">= 100 kg</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">0.5 t</div>
                    <div class="text-sm text-gray-600">= 500 kg</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">1 t</div>
                    <div class="text-sm text-gray-600">= 1,000 kg</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">5 t</div>
                    <div class="text-sm text-gray-600">= 5,000 kg</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-slate-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between metric tonnes and kilograms. The tonne (symbol: t) is a metric unit of mass equal to 1,000 kilograms.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilograms = Tonnes × 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Industrial manufacturing</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Shipping and cargo calculations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Construction materials</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Agricultural produce weights</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Vehicle weight specifications</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertTonneToKg() {
    const tonne = parseFloat(document.getElementById('tonneInput').value);
    if (!isNaN(tonne)) {
        const kg = tonne * 1000;
        document.getElementById('kgOutput').value = kg.toFixed(8);
    } else {
        document.getElementById('kgOutput').value = '';
    }
}

function convertKgToTonne() {
    const kg = parseFloat(document.getElementById('kgOutput').value);
    if (!isNaN(kg)) {
        const tonne = kg / 1000;
        document.getElementById('tonneInput').value = tonne.toFixed(8);
    } else {
        document.getElementById('tonneInput').value = '';
    }
}

function swapValues() {
    const tonneValue = document.getElementById('tonneInput').value;
    const kgValue = document.getElementById('kgOutput').value;
    
    document.getElementById('tonneInput').value = kgValue;
    document.getElementById('kgOutput').value = tonneValue;
}

function clearValues() {
    document.getElementById('tonneInput').value = '';
    document.getElementById('kgOutput').value = '';
}

// Add event listeners
document.getElementById('tonneInput').addEventListener('input', convertTonneToKg);
document.getElementById('kgOutput').addEventListener('input', convertKgToTonne);
</script>

<?php include 'footer.php'; ?>
