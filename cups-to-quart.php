<?php include 'header.php';?>


    <title>Cups to Quart Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert cups to quarts with our free 2026 online calculator. Perfect for cooking, baking, and recipe conversions in the kitchen.">
    <meta name="keywords" content="cups to quart converter 2026, cooking converter, recipe calculator, kitchen measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-pink-50 to-rose-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-coffee text-pink-600 mr-3"></i>
                Cups to Quart Converter
            </h1>
            <p class="text-lg text-gray-600">Convert cups to quarts for cooking and baking recipes</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cups Input -->
                <div class="space-y-4">
                    <label for="cups" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-coffee text-pink-600 mr-2"></i>
                        Cups (c)
                    </label>
                    <input type="number" id="cups" 
                           class="w-full px-4 py-3 border-2 border-pink-300 rounded-lg focus:border-pink-500 focus:outline-none text-lg"
                           placeholder="Enter cups value" 
                           oninput="convertToQuarts()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm hover:bg-pink-200">1 cup</button>
                        <button onclick="setAndConvert(2)" class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm hover:bg-pink-200">2 cups</button>
                        <button onclick="setAndConvert(4)" class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm hover:bg-pink-200">4 cups</button>
                        <button onclick="setAndConvert(8)" class="px-3 py-1 bg-pink-100 text-pink-800 rounded-full text-sm hover:bg-pink-200">8 cups</button>
                    </div>
                </div>

                <!-- Quarts Output -->
                <div class="space-y-4">
                    <label for="quarts" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-glass-water text-rose-600 mr-2"></i>
                        Quarts (qt)
                    </label>
                    <input type="number" id="quarts" 
                           class="w-full px-4 py-3 border-2 border-rose-300 rounded-lg focus:border-rose-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in quarts" 
                           oninput="convertToCups()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> quarts = cups ÷ 4</p>
                        <p><strong>Note:</strong> 1 quart = 4 cups</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Cups -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-coffee text-pink-600 mr-2"></i>
                    About Cups
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cup is a common unit of volume measurement in cooking.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard US cooking measurement</li>
                        <li>1 cup = 8 fluid ounces</li>
                        <li>1 cup = 236.588 milliliters</li>
                        <li>Symbol: c or cup</li>
                    </ul>
                </div>
            </div>

            <!-- About Quarts -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-glass-water text-rose-600 mr-2"></i>
                    About Quarts
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The quart is a larger unit of volume measurement.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used for larger liquid quantities</li>
                        <li>1 quart = 4 cups</li>
                        <li>1 quart = 32 fluid ounces</li>
                        <li>Symbol: qt or quart</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Cups</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Quarts</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Recipe Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 cup</td>
                            <td class="border border-gray-300 px-4 py-2">0.25 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Milk for pancakes</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2 cups</td>
                            <td class="border border-gray-300 px-4 py-2">0.5 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Water for soup</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">4 cups</td>
                            <td class="border border-gray-300 px-4 py-2">1 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Stock for stew</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">8 cups</td>
                            <td class="border border-gray-300 px-4 py-2">2 qt</td>
                            <td class="border border-gray-300 px-4 py-2">Large batch cooking</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Kitchen Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Quarts = Cups ÷ 4</p>
                        <p>Cups = Quarts × 4</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Kitchen Tips</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 quart = 4 cups exactly</li>
                        <li>• Perfect for recipe scaling</li>
                        <li>• Essential for large batches</li>
                        <li>• Use measuring cups for accuracy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToQuarts() {
    const cups = parseFloat(document.getElementById('cups').value);
    if (!isNaN(cups)) {
        const quarts = cups / 4;
        document.getElementById('quarts').value = quarts.toFixed(4);
    } else {
        document.getElementById('quarts').value = '';
    }
}

function convertToCups() {
    const quarts = parseFloat(document.getElementById('quarts').value);
    if (!isNaN(quarts)) {
        const cups = quarts * 4;
        document.getElementById('cups').value = cups.toFixed(2);
    } else {
        document.getElementById('cups').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cups').value = value;
    convertToQuarts();
}

function swapValues() {
    const cups = document.getElementById('cups').value;
    const quarts = document.getElementById('quarts').value;
    
    document.getElementById('cups').value = quarts;
    document.getElementById('quarts').value = cups;
    
    if (quarts) {
        convertToQuarts();
    }
}

function clearInputs() {
    document.getElementById('cups').value = '';
    document.getElementById('quarts').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
