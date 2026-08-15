<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Joules to Kilojoules Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online joules to kilojoules converter 2026. Convert J to kJ instantly with accurate energy conversion for scientific and engineering calculations.">
<meta name="keywords" content="joules to kilojoules converter 2026, J to kJ, energy converter, physics calculator, engineering calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Joules to Kilojoules Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online joules to kilojoules converter 2026. Convert J to kJ instantly with accurate energy conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/j-to-kj.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Joules to Kilojoules Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online joules to kilojoules converter 2026. Convert J to kJ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-red-600 mr-3"></i>
                Joules to Kilojoules Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert joules to kilojoules instantly for energy calculations in physics and engineering
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Joules Input -->
                <div class="space-y-2">
                    <label for="joulesInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-zap text-red-600 mr-2"></i>Joules (J)
                    </label>
                    <input
                        type="number"
                        id="joulesInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter joules"
                        step="any"
                    >
                </div>

                <!-- Kilojoules Output -->
                <div class="space-y-2">
                    <label for="kilojoulesOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-fire text-red-600 mr-2"></i>Kilojoules (kJ)
                    </label>
                    <input
                        type="number"
                        id="kilojoulesOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Kilojoules result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1,000 J</div>
                    <div class="text-sm text-gray-600">= 1 kJ</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">5,000 J</div>
                    <div class="text-sm text-gray-600">= 5 kJ</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10,000 J</div>
                    <div class="text-sm text-gray-600">= 10 kJ</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100,000 J</div>
                    <div class="text-sm text-gray-600">= 100 kJ</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between joules and kilojoules. One kilojoule equals 1,000 joules. Both are SI units of energy.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilojoules = Joules ÷ 1,000<br>
                    Joules = Kilojoules × 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Food energy calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Physics and chemistry</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Thermodynamics studies</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Heat transfer analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertJoulesToKilojoules() {
    const joules = parseFloat(document.getElementById('joulesInput').value);
    if (!isNaN(joules)) {
        const kilojoules = joules / 1000; // 1 kJ = 1,000 J
        document.getElementById('kilojoulesOutput').value = kilojoules.toFixed(6);
    } else {
        document.getElementById('kilojoulesOutput').value = '';
    }
}

function convertKilojoulesToJoules() {
    const kilojoules = parseFloat(document.getElementById('kilojoulesOutput').value);
    if (!isNaN(kilojoules)) {
        const joules = kilojoules * 1000; // 1 kJ = 1,000 J
        document.getElementById('joulesInput').value = joules.toFixed(2);
    } else {
        document.getElementById('joulesInput').value = '';
    }
}

function swapValues() {
    const joulesValue = document.getElementById('joulesInput').value;
    const kilojoulesValue = document.getElementById('kilojoulesOutput').value;
    
    document.getElementById('joulesInput').value = kilojoulesValue;
    document.getElementById('kilojoulesOutput').value = joulesValue;
}

function clearValues() {
    document.getElementById('joulesInput').value = '';
    document.getElementById('kilojoulesOutput').value = '';
}

// Add event listeners
document.getElementById('joulesInput').addEventListener('input', convertJoulesToKilojoules);
document.getElementById('kilojoulesOutput').addEventListener('input', convertKilojoulesToJoules);
</script>

<?php include 'footer.php'; ?>
