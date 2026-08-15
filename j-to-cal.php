<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Joules to Calories Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online joules to calories converter 2026. Convert J to cal instantly with accurate energy conversion for nutrition and physics calculations.">
<meta name="keywords" content="joules to calories converter 2026, J to cal, energy converter, nutrition calculator, physics converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Joules to Calories Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online joules to calories converter 2026. Convert J to cal instantly with accurate energy conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/j-to-cal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Joules to Calories Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online joules to calories converter 2026. Convert J to cal instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-orange-600 mr-3"></i>
                Joules to Calories Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert joules to calories instantly for nutrition, physics, and energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Joules Input -->
                <div class="space-y-2">
                    <label for="joulesInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-orange-600 mr-2"></i>Joules (J)
                    </label>
                    <input
                        type="number"
                        id="joulesInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter joules"
                        step="any"
                    >
                </div>

                <!-- Calories Output -->
                <div class="space-y-2">
                    <label for="caloriesOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cookie-bite text-orange-600 mr-2"></i>Calories (cal)
                    </label>
                    <input
                        type="number"
                        id="caloriesOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Calories result"
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
                    <div class="font-bold text-orange-800">1 J</div>
                    <div class="text-sm text-gray-600">= 0.2388 cal</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">10 J</div>
                    <div class="text-sm text-gray-600">= 2.388 cal</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">100 J</div>
                    <div class="text-sm text-gray-600">= 23.88 cal</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1000 J</div>
                    <div class="text-sm text-gray-600">= 238.8 cal</div>
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
                    This converter helps you convert between joules and calories. One joule equals approximately 0.238846 calories.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Calories = Joules × 0.238846<br>
                    Joules = Calories ÷ 0.238846
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Nutrition calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Physics problems</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Energy efficiency studies</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Heat transfer calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Thermodynamics</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertJoulesToCalories() {
    const joules = parseFloat(document.getElementById('joulesInput').value);
    if (!isNaN(joules)) {
        const calories = joules * 0.238846; // 1 J = 0.238846 cal
        document.getElementById('caloriesOutput').value = calories.toFixed(6);
    } else {
        document.getElementById('caloriesOutput').value = '';
    }
}

function convertCaloriesToJoules() {
    const calories = parseFloat(document.getElementById('caloriesOutput').value);
    if (!isNaN(calories)) {
        const joules = calories / 0.238846; // 1 J = 0.238846 cal
        document.getElementById('joulesInput').value = joules.toFixed(6);
    } else {
        document.getElementById('joulesInput').value = '';
    }
}

function swapValues() {
    const joulesValue = document.getElementById('joulesInput').value;
    const caloriesValue = document.getElementById('caloriesOutput').value;
    
    document.getElementById('joulesInput').value = caloriesValue;
    document.getElementById('caloriesOutput').value = joulesValue;
}

function clearValues() {
    document.getElementById('joulesInput').value = '';
    document.getElementById('caloriesOutput').value = '';
}

// Add event listeners
document.getElementById('joulesInput').addEventListener('input', convertJoulesToCalories);
document.getElementById('caloriesOutput').addEventListener('input', convertCaloriesToJoules);
</script>

<?php include 'footer.php'; ?>
