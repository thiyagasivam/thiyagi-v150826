<?php include 'header.php';?>


    <title>Kilojoules to Kilocalories Converter 2026 - Energy Conversion Calculator</title>
    <meta name="description" content="Convert kilojoules (kJ) to kilocalories (kcal) with our free 2026 online calculator. Accurate energy conversion for nutrition and scientific calculations.">
    <meta name="keywords" content="kilojoules to kilocalories converter 2026, kJ to kcal, energy converter, nutrition calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-orange-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Kilojoules to Kilocalories Converter</h1>
            <p class="text-lg text-gray-600">Convert kJ to kcal for nutrition and energy calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Kilojoules Input -->
                <div class="space-y-2">
                    <label for="kilojoules" class="block text-sm font-medium text-gray-700">
                        Kilojoules (kJ)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="kilojoules"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                            placeholder="Enter kilojoules"
                            step="any"
                            oninput="convertToKcal()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">kJ</span>
                    </div>
                </div>

                <!-- Kilocalories Output -->
                <div class="space-y-2">
                    <label for="kilocalories" class="block text-sm font-medium text-gray-700">
                        Kilocalories (kcal)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="kilocalories"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            placeholder="Kilocalories result"
                            step="any"
                            oninput="convertToKj()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">kcal</span>
                    </div>
                </div>
            </div>

            <!-- Clear Button -->
            <div class="text-center mt-6">
                <button
                    onclick="clearInputs()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    Clear
                </button>
            </div>
        </div>

        <!-- Quick Convert Buttons -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(100)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    100 kJ
                </button>
                <button onclick="setAndConvert(500)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    500 kJ
                </button>
                <button onclick="setAndConvert(1000)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    1000 kJ
                </button>
                <button onclick="setAndConvert(2000)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    2000 kJ
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Kilojoules to Kilocalories Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Kilojoules (kJ) and kilocalories (kcal) are both units of energy commonly used in nutrition labeling 
                    and scientific calculations. Understanding their conversion is essential for dietary planning and energy analysis.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 kilocalorie = 4.184 kilojoules</strong><br>
                    Kilocalories = Kilojoules ÷ 4.184
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>100 kJ = 23.9 kcal</li>
                    <li>500 kJ = 119.5 kcal</li>
                    <li>1000 kJ = 239.0 kcal</li>
                    <li>2000 kJ = 478.0 kcal</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Nutrition labeling and dietary planning</li>
                    <li>Food energy content analysis</li>
                    <li>Metabolic rate calculations</li>
                    <li>Exercise energy expenditure</li>
                    <li>Scientific energy measurements</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Important Notes</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Food labels may use both kJ and kcal</li>
                    <li>1 kcal is sometimes called a "Calorie" (with capital C)</li>
                    <li>Different countries prefer different units</li>
                    <li>Both measure the same type of energy</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToKcal() {
    const kilojoules = parseFloat(document.getElementById('kilojoules').value);
    if (!isNaN(kilojoules)) {
        const kilocalories = kilojoules / 4.184;
        document.getElementById('kilocalories').value = kilocalories.toFixed(6);
    } else {
        document.getElementById('kilocalories').value = '';
    }
}

function convertToKj() {
    const kilocalories = parseFloat(document.getElementById('kilocalories').value);
    if (!isNaN(kilocalories)) {
        const kilojoules = kilocalories * 4.184;
        document.getElementById('kilojoules').value = kilojoules.toFixed(6);
    } else {
        document.getElementById('kilojoules').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('kilojoules').value = value;
    convertToKcal();
}

function clearInputs() {
    document.getElementById('kilojoules').value = '';
    document.getElementById('kilocalories').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
