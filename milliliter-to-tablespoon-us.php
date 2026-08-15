<?php include 'header.php';?>


    <title>Milliliter to US Tablespoon Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert milliliters to US tablespoons with our free 2026 online calculator. Perfect for cooking, baking, and recipe conversions.">
    <meta name="keywords" content="milliliter to tablespoon converter 2026, mL to tbsp, cooking converter, recipe calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-orange-50 to-red-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-utensils text-orange-600 mr-3"></i>
                Milliliter to US Tablespoon Converter
            </h1>
            <p class="text-lg text-gray-600">Convert milliliters to US tablespoons for cooking and baking</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliters Input -->
                <div class="space-y-4">
                    <label for="milliliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-vial text-orange-600 mr-2"></i>
                        Milliliters (mL)
                    </label>
                    <input type="number" id="milliliters" 
                           class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:border-orange-500 focus:outline-none text-lg"
                           placeholder="Enter milliliters value" 
                           oninput="convertToTablespoons()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(15)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">15 mL</button>
                        <button onclick="setAndConvert(30)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">30 mL</button>
                        <button onclick="setAndConvert(60)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">60 mL</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-orange-100 text-orange-800 rounded-full text-sm hover:bg-orange-200">100 mL</button>
                    </div>
                </div>

                <!-- Tablespoons Output -->
                <div class="space-y-4">
                    <label for="tablespoons" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-utensils text-red-600 mr-2"></i>
                        US Tablespoons (tbsp)
                    </label>
                    <input type="number" id="tablespoons" 
                           class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:border-red-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in tablespoons" 
                           oninput="convertToMilliliters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> tablespoons = milliliters ÷ 14.7868</p>
                        <p><strong>Note:</strong> 1 US tablespoon = 14.7868 milliliters</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Milliliters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-vial text-orange-600 mr-2"></i>
                    About Milliliters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The milliliter is a metric unit of volume commonly used worldwide.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard unit in cooking internationally</li>
                        <li>1 milliliter = 1 cubic centimeter</li>
                        <li>Used in medicine and science</li>
                        <li>Symbol: mL or ml</li>
                    </ul>
                </div>
            </div>

            <!-- About US Tablespoons -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-utensils text-red-600 mr-2"></i>
                    About US Tablespoons
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The US tablespoon is a common cooking measurement in America.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard cooking measurement</li>
                        <li>1 tablespoon = 14.7868 milliliters</li>
                        <li>3 teaspoons = 1 tablespoon</li>
                        <li>Symbol: tbsp or T</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Cooking Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">US Tablespoons</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">15 mL</td>
                            <td class="border border-gray-300 px-4 py-2">1 tbsp</td>
                            <td class="border border-gray-300 px-4 py-2">Oil, vanilla extract</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">30 mL</td>
                            <td class="border border-gray-300 px-4 py-2">2 tbsp</td>
                            <td class="border border-gray-300 px-4 py-2">Butter, cream</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">60 mL</td>
                            <td class="border border-gray-300 px-4 py-2">4 tbsp</td>
                            <td class="border border-gray-300 px-4 py-2">Wine, stock</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 mL</td>
                            <td class="border border-gray-300 px-4 py-2">6.76 tbsp</td>
                            <td class="border border-gray-300 px-4 py-2">Milk, water</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Cooking Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>US Tablespoons = Milliliters ÷ 14.7868</p>
                        <p>Milliliters = US Tablespoons × 14.7868</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Cooking Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• US tablespoon differs from UK/AU</li>
                        <li>• Essential for recipe conversions</li>
                        <li>• 1 tbsp = 3 teaspoons</li>
                        <li>• 16 tbsp = 1 cup (US)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToTablespoons() {
    const milliliters = parseFloat(document.getElementById('milliliters').value);
    if (!isNaN(milliliters)) {
        const tablespoons = milliliters / 14.7868;
        document.getElementById('tablespoons').value = tablespoons.toFixed(4);
    } else {
        document.getElementById('tablespoons').value = '';
    }
}

function convertToMilliliters() {
    const tablespoons = parseFloat(document.getElementById('tablespoons').value);
    if (!isNaN(tablespoons)) {
        const milliliters = tablespoons * 14.7868;
        document.getElementById('milliliters').value = milliliters.toFixed(2);
    } else {
        document.getElementById('milliliters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('milliliters').value = value;
    convertToTablespoons();
}

function swapValues() {
    const milliliters = document.getElementById('milliliters').value;
    const tablespoons = document.getElementById('tablespoons').value;
    
    document.getElementById('milliliters').value = tablespoons;
    document.getElementById('tablespoons').value = milliliters;
    
    if (tablespoons) {
        convertToTablespoons();
    }
}

function clearInputs() {
    document.getElementById('milliliters').value = '';
    document.getElementById('tablespoons').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
