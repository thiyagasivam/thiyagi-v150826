<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milligram to Kilogram Converter 2026 - Weight Calculator | Thiyagi</title>
<meta name="description" content="Free online milligram to kilogram converter 2026. Convert mg to kg instantly with accurate weight conversion for scientific and medical calculations.">
<meta name="keywords" content="milligram to kilogram converter 2026, mg to kg, weight converter, scientific calculator, medical calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milligram to Kilogram Converter 2026 - Weight Calculator">
<meta property="og:description" content="Free online milligram to kilogram converter 2026. Convert mg to kg instantly with accurate weight conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milligram-to-kilogram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milligram to Kilogram Converter 2026 - Weight Calculator">
<meta name="twitter:description" content="Free online milligram to kilogram converter 2026. Convert mg to kg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-red-50 to-pink-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-orange-600 mr-3"></i>
                Milligram to Kilogram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milligrams to kilograms instantly for scientific, medical, and pharmaceutical calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milligram Input -->
                <div class="space-y-2">
                    <label for="milligramInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-pills text-orange-600 mr-2"></i>Milligrams (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter milligrams"
                        step="any"
                    >
                </div>

                <!-- Kilogram Output -->
                <div class="space-y-2">
                    <label for="kilogramOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-orange-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input
                        type="number"
                        id="kilogramOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Kilograms result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-orange-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1,000,000 mg</div>
                    <div class="text-sm text-gray-600">= 1 kg</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">500,000 mg</div>
                    <div class="text-sm text-gray-600">= 0.5 kg</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">100,000 mg</div>
                    <div class="text-sm text-gray-600">= 0.1 kg</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1,000 mg</div>
                    <div class="text-sm text-gray-600">= 0.001 kg</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-orange-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between milligrams and kilograms. One kilogram equals 1,000,000 milligrams.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilograms = Milligrams ÷ 1,000,000<br>
                    Milligrams = Kilograms × 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Pharmaceutical formulations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Scientific research</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Chemical analysis</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Laboratory measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMilligramToKilogram() {
    const milligram = parseFloat(document.getElementById('milligramInput').value);
    if (!isNaN(milligram)) {
        const kilogram = milligram / 1000000; // 1 kg = 1,000,000 mg
        document.getElementById('kilogramOutput').value = kilogram.toFixed(10);
    } else {
        document.getElementById('kilogramOutput').value = '';
    }
}

function convertKilogramToMilligram() {
    const kilogram = parseFloat(document.getElementById('kilogramOutput').value);
    if (!isNaN(kilogram)) {
        const milligram = kilogram * 1000000; // 1 kg = 1,000,000 mg
        document.getElementById('milligramInput').value = milligram.toFixed(2);
    } else {
        document.getElementById('milligramInput').value = '';
    }
}

function swapValues() {
    const milligramValue = document.getElementById('milligramInput').value;
    const kilogramValue = document.getElementById('kilogramOutput').value;
    
    document.getElementById('milligramInput').value = kilogramValue;
    document.getElementById('kilogramOutput').value = milligramValue;
}

function clearValues() {
    document.getElementById('milligramInput').value = '';
    document.getElementById('kilogramOutput').value = '';
}

// Add event listeners
document.getElementById('milligramInput').addEventListener('input', convertMilligramToKilogram);
document.getElementById('kilogramOutput').addEventListener('input', convertKilogramToMilligram);
</script>

<?php include 'footer.php'; ?>
