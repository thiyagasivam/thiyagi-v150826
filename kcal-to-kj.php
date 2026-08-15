<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kcal to KJ Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online kilocalorie to kilojoule converter 2026. Convert kcal to kJ instantly for nutrition, diet planning, and energy calculations.">
<meta name="keywords" content="kcal to kj converter 2026, kilocalorie to kilojoule, energy converter, nutrition calculator, diet calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kcal to KJ Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online kilocalorie to kilojoule converter 2026. Convert kcal to kJ instantly for nutrition and energy calculations.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kcal-to-kj.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kcal to KJ Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online kilocalorie to kilojoule converter 2026. Convert kcal to kJ instantly for nutrition calculations.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-orange-600 mr-3"></i>
                Kilocalorie to Kilojoule Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilocalories to kilojoules instantly for nutrition and energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilocalories Input -->
                <div class="space-y-2">
                    <label for="kcalInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-fire text-orange-600 mr-2"></i>Kilocalories (kcal)
                    </label>
                    <input
                        type="number"
                        id="kcalInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter kilocalories"
                        step="any"
                    >
                </div>

                <!-- Kilojoules Output -->
                <div class="space-y-2">
                    <label for="kjOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-orange-600 mr-2"></i>Kilojoules (kJ)
                    </label>
                    <input
                        type="number"
                        id="kjOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Kilojoules result"
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
                    <div class="font-bold text-orange-800">1 kcal</div>
                    <div class="text-sm text-gray-600">= 4.184 kJ</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">100 kcal</div>
                    <div class="text-sm text-gray-600">= 418.4 kJ</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">500 kcal</div>
                    <div class="text-sm text-gray-600">= 2092 kJ</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1000 kcal</div>
                    <div class="text-sm text-gray-600">= 4184 kJ</div>
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
                    This converter helps you convert between kilocalories (kcal) and kilojoules (kJ). One kilocalorie equals exactly 4.184 kilojoules.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilojoules = Kilocalories × 4.184<br>
                    Kilocalories = Kilojoules ÷ 4.184
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Nutrition label calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Diet and fitness planning</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Food energy content analysis</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Scientific energy measurements</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Metabolic rate calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKcalToKj() {
    const kcal = parseFloat(document.getElementById('kcalInput').value);
    if (!isNaN(kcal)) {
        const kj = kcal * 4.184;
        document.getElementById('kjOutput').value = kj.toFixed(8);
    } else {
        document.getElementById('kjOutput').value = '';
    }
}

function convertKjToKcal() {
    const kj = parseFloat(document.getElementById('kjOutput').value);
    if (!isNaN(kj)) {
        const kcal = kj / 4.184;
        document.getElementById('kcalInput').value = kcal.toFixed(8);
    } else {
        document.getElementById('kcalInput').value = '';
    }
}

function swapValues() {
    const kcalValue = document.getElementById('kcalInput').value;
    const kjValue = document.getElementById('kjOutput').value;
    
    document.getElementById('kcalInput').value = kjValue;
    document.getElementById('kjOutput').value = kcalValue;
}

function clearValues() {
    document.getElementById('kcalInput').value = '';
    document.getElementById('kjOutput').value = '';
}

// Add event listeners
document.getElementById('kcalInput').addEventListener('input', convertKcalToKj);
document.getElementById('kjOutput').addEventListener('input', convertKjToKcal);
</script>

<?php include 'footer.php'; ?>
