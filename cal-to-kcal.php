<?php include 'header.php';?>


    <title>Calories to Kilocalories Converter 2026 - Energy Conversion Calculator</title>
    <meta name="description" content="Convert calories to kilocalories with our free 2026 online calculator. Accurate energy conversion for nutrition and dietary calculations.">
    <meta name="keywords" content="calories to kilocalories converter 2026, cal to kcal, energy converter, nutrition calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-orange-50 to-red-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-fire text-orange-600 mr-3"></i>
                Calories to Kilocalories Converter
            </h1>
            <p class="text-lg text-gray-600">Convert calories to kilocalories instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Calories Input -->
                <div class="space-y-4">
                    <label for="calories" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-fire text-orange-600 mr-2"></i>
                        Calories (cal)
                    </label>
                    <input type="number" id="calories" 
                           class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:border-orange-500 focus:outline-none text-lg"
                           placeholder="Enter calories value" 
                           oninput="convertToKilocalories()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">100 cal</button>
                        <button onclick="setAndConvert(500)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">500 cal</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">1,000 cal</button>
                        <button onclick="setAndConvert(2000)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">2,000 cal</button>
                    </div>
                </div>

                <!-- Kilocalories Output -->
                <div class="space-y-4">
                    <label for="kilocalories" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-weight text-red-600 mr-2"></i>
                        Kilocalories (kcal)
                    </label>
                    <input type="number" id="kilocalories" 
                           class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:border-red-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in kilocalories" 
                           oninput="convertToCalories()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> kilocalories = calories ÷ 1,000</p>
                        <p><strong>Note:</strong> 1 kilocalorie = 1,000 calories</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Calories -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-fire text-orange-600 mr-2"></i>
                    About Calories
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The calorie is a unit of energy measurement in nutrition and physics.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in scientific energy calculations</li>
                        <li>Small calorie (gram calorie)</li>
                        <li>1 calorie = 4.184 joules</li>
                        <li>Symbol: cal</li>
                    </ul>
                </div>
            </div>

            <!-- About Kilocalories -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-red-600 mr-2"></i>
                    About Kilocalories
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The kilocalorie is commonly used in nutrition and diet planning.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Large calorie used in food energy</li>
                        <li>Standard unit in nutrition labels</li>
                        <li>1 kilocalorie = 1,000 calories</li>
                        <li>Symbol: kcal or Cal</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Calories</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Kilocalories</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 cal</td>
                            <td class="border border-gray-300 px-4 py-2">0.1 kcal</td>
                            <td class="border border-gray-300 px-4 py-2">Small snack</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">500 cal</td>
                            <td class="border border-gray-300 px-4 py-2">0.5 kcal</td>
                            <td class="border border-gray-300 px-4 py-2">Light meal</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 cal</td>
                            <td class="border border-gray-300 px-4 py-2">1 kcal</td>
                            <td class="border border-gray-300 px-4 py-2">Standard meal</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2,000 cal</td>
                            <td class="border border-gray-300 px-4 py-2">2 kcal</td>
                            <td class="border border-gray-300 px-4 py-2">Daily intake</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Kilocalories = Calories ÷ 1,000</p>
                        <p>Calories = Kilocalories × 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 kilocalorie = 1,000 calories</li>
                        <li>• Used in nutrition and diet planning</li>
                        <li>• Food labels use kilocalories</li>
                        <li>• Different from joules (SI unit)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToKilocalories() {
    const calories = parseFloat(document.getElementById('calories').value);
    if (!isNaN(calories)) {
        const kilocalories = calories / 1000;
        document.getElementById('kilocalories').value = kilocalories.toFixed(8);
    } else {
        document.getElementById('kilocalories').value = '';
    }
}

function convertToCalories() {
    const kilocalories = parseFloat(document.getElementById('kilocalories').value);
    if (!isNaN(kilocalories)) {
        const calories = kilocalories * 1000;
        document.getElementById('calories').value = calories.toFixed(8);
    } else {
        document.getElementById('calories').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('calories').value = value;
    convertToKilocalories();
}

function swapValues() {
    const calories = document.getElementById('calories').value;
    const kilocalories = document.getElementById('kilocalories').value;
    
    document.getElementById('calories').value = kilocalories;
    document.getElementById('kilocalories').value = calories;
    
    if (kilocalories) {
        convertToKilocalories();
    }
}

function clearInputs() {
    document.getElementById('calories').value = '';
    document.getElementById('kilocalories').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
