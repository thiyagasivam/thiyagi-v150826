<?php include 'header.php';?>


    <title>Gallon to Quart Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert gallons to quarts with our free 2026 online calculator. Perfect for cooking, fuel calculations, and liquid measurements.">
    <meta name="keywords" content="gallon to quart converter 2026, volume converter, cooking calculator, fuel measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-gas-pump text-cyan-600 mr-3"></i>
                Gallon to Quart Converter
            </h1>
            <p class="text-lg text-gray-600">Convert gallons to quarts for cooking and liquid measurements</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gallons Input -->
                <div class="space-y-4">
                    <label for="gallons" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-gas-pump text-cyan-600 mr-2"></i>
                        Gallons (gal)
                    </label>
                    <input type="number" id="gallons" 
                           class="w-full px-4 py-3 border-2 border-cyan-300 rounded-lg focus:border-cyan-500 focus:outline-none text-lg"
                           placeholder="Enter gallons value" 
                           oninput="convertToQuarts()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(0.25)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">0.25 gal</button>
                        <button onclick="setAndConvert(0.5)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">0.5 gal</button>
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">1 gal</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">5 gal</button>
                    </div>
                </div>

                <!-- Quarts Output -->
                <div class="space-y-4">
                    <label for="quarts" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-glass-water text-blue-600 mr-2"></i>
                        Quarts (qt)
                    </label>
                    <input type="number" id="quarts" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in quarts" 
                           oninput="convertToGallons()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> quarts = gallons × 4</p>
                        <p><strong>Note:</strong> 1 gallon = 4 quarts</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Gallons -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-gas-pump text-cyan-600 mr-2"></i>
                    About Gallons
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The gallon is a unit of volume commonly used in the United States.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard for fuel and large liquids</li>
                        <li>1 US gallon = 4 quarts</li>
                        <li>1 US gallon = 3.78541 liters</li>
                        <li>Symbol: gal</li>
                    </ul>
                </div>
            </div>

            <!-- About Quarts -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-glass-water text-blue-600 mr-2"></i>
                    About Quarts
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The quart is a unit of volume measurement in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common for cooking and beverages</li>
                        <li>1 quart = 4 cups</li>
                        <li>1 quart = 32 fluid ounces</li>
                        <li>Symbol: qt</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Volume Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Gallons</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Quarts</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.25 gal</td>
                            <td class="border border-gray-300 px-4 py-2">1 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Large drink</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.5 gal</td>
                            <td class="border border-gray-300 px-4 py-2">2 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Soup pot</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 gal</td>
                            <td class="border border-gray-300 px-4 py-2">4 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Milk jug</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5 gal</td>
                            <td class="border border-gray-300 px-4 py-2">20 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Large container</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Usage Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Quarts = Gallons × 4</p>
                        <p>Gallons = Quarts ÷ 4</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Cooking recipe conversions</li>
                        <li>• Fuel tank calculations</li>
                        <li>• Beverage serving sizes</li>
                        <li>• Storage container planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToQuarts() {
    const gallons = parseFloat(document.getElementById('gallons').value);
    if (!isNaN(gallons)) {
        const quarts = gallons * 4;
        document.getElementById('quarts').value = quarts.toFixed(4);
    } else {
        document.getElementById('quarts').value = '';
    }
}

function convertToGallons() {
    const quarts = parseFloat(document.getElementById('quarts').value);
    if (!isNaN(quarts)) {
        const gallons = quarts / 4;
        document.getElementById('gallons').value = gallons.toFixed(6);
    } else {
        document.getElementById('gallons').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('gallons').value = value;
    convertToQuarts();
}

function swapValues() {
    const gallons = document.getElementById('gallons').value;
    const quarts = document.getElementById('quarts').value;
    
    document.getElementById('gallons').value = quarts;
    document.getElementById('quarts').value = gallons;
    
    if (quarts) {
        convertToQuarts();
    }
}

function clearInputs() {
    document.getElementById('gallons').value = '';
    document.getElementById('quarts').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
