<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Calories to Joules Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online calories to joules converter 2026. Convert cal to J instantly with accurate energy conversion for nutrition and physics calculations.">
<meta name="keywords" content="calories to joules converter 2026, cal to J, energy converter, nutrition calculator, physics converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Calories to Joules Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online calories to joules converter 2026. Convert cal to J instantly with accurate energy conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cal-to-j.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Calories to Joules Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online calories to joules converter 2026. Convert cal to J instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-apple-alt text-red-600 mr-3"></i>
                Calories to Joules Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert calories to joules instantly for nutrition, physics, and energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Calories Input -->
                <div class="space-y-2">
                    <label for="caloriesInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cookie-bite text-red-600 mr-2"></i>Calories (cal)
                    </label>
                    <input
                        type="number"
                        id="caloriesInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter calories"
                        step="any"
                    >
                </div>

                <!-- Joules Output -->
                <div class="space-y-2">
                    <label for="joulesOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-red-600 mr-2"></i>Joules (J)
                    </label>
                    <input
                        type="number"
                        id="joulesOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Joules result"
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
                    <div class="font-bold text-red-800">1 cal</div>
                    <div class="text-sm text-gray-600">= 4.184 J</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10 cal</div>
                    <div class="text-sm text-gray-600">= 41.84 J</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 cal</div>
                    <div class="text-sm text-gray-600">= 418.4 J</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1000 cal</div>
                    <div class="text-sm text-gray-600">= 4184 J</div>
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
                    This converter helps you convert between calories and joules. One calorie equals exactly 4.184 joules.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Joules = Calories × 4.184<br>
                    Calories = Joules ÷ 4.184
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Food energy calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Metabolic studies</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Physics experiments</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Exercise science</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Thermodynamics</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCaloriesToJoules() {
    const calories = parseFloat(document.getElementById('caloriesInput').value);
    if (!isNaN(calories)) {
        const joules = calories * 4.184; // 1 cal = 4.184 J
        document.getElementById('joulesOutput').value = joules.toFixed(6);
    } else {
        document.getElementById('joulesOutput').value = '';
    }
}

function convertJoulesToCalories() {
    const joules = parseFloat(document.getElementById('joulesOutput').value);
    if (!isNaN(joules)) {
        const calories = joules / 4.184; // 1 cal = 4.184 J
        document.getElementById('caloriesInput').value = calories.toFixed(6);
    } else {
        document.getElementById('caloriesInput').value = '';
    }
}

function swapValues() {
    const caloriesValue = document.getElementById('caloriesInput').value;
    const joulesValue = document.getElementById('joulesOutput').value;
    
    document.getElementById('caloriesInput').value = joulesValue;
    document.getElementById('joulesOutput').value = caloriesValue;
}

function clearValues() {
    document.getElementById('caloriesInput').value = '';
    document.getElementById('joulesOutput').value = '';
}

// Add event listeners
document.getElementById('caloriesInput').addEventListener('input', convertCaloriesToJoules);
document.getElementById('joulesOutput').addEventListener('input', convertJoulesToCalories);
</script>

<?php include 'footer.php'; ?>
