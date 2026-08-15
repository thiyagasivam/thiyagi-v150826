<?php include 'header.php';?>


    <title>Grain to Gram Converter 2026 - Mass Conversion Calculator</title>
    <meta name="description" content="Convert grains to grams with our free 2026 online calculator. Perfect for ammunition, pharmaceutical, and jewelry weight calculations.">
    <meta name="keywords" content="grain to gram converter 2026, mass converter, ammunition calculator, pharmaceutical weights 2026">

<div class="min-h-screen bg-gradient-to-br from-amber-50 to-yellow-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-seedling text-amber-600 mr-3"></i>
                Grain to Gram Converter
            </h1>
            <p class="text-lg text-gray-600">Convert grains to grams for precise weight measurements</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Grains Input -->
                <div class="space-y-4">
                    <label for="grains" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-seedling text-amber-600 mr-2"></i>
                        Grains (gr)
                    </label>
                    <input type="number" id="grains" 
                           class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:border-amber-500 focus:outline-none text-lg"
                           placeholder="Enter grains value" 
                           oninput="convertToGrams()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-sm hover:bg-amber-200">1 gr</button>
                        <button onclick="setAndConvert(15.432)" class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-sm hover:bg-amber-200">15.432 gr</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-sm hover:bg-amber-200">100 gr</button>
                        <button onclick="setAndConvert(500)" class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-sm hover:bg-amber-200">500 gr</button>
                    </div>
                </div>

                <!-- Grams Output -->
                <div class="space-y-4">
                    <label for="grams" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-weight text-yellow-600 mr-2"></i>
                        Grams (g)
                    </label>
                    <input type="number" id="grams" 
                           class="w-full px-4 py-3 border-2 border-yellow-300 rounded-lg focus:border-yellow-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in grams" 
                           oninput="convertToGrains()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> grams = grains × 0.06479891</p>
                        <p><strong>Note:</strong> 1 grain = 0.06479891 grams</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Grains -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-seedling text-amber-600 mr-2"></i>
                    About Grains
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The grain is a traditional unit of mass based on the weight of a grain of barley.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in ammunition and bullets</li>
                        <li>Common in jewelry and precious metals</li>
                        <li>1 grain = 1/7000 pound</li>
                        <li>Symbol: gr</li>
                    </ul>
                </div>
            </div>

            <!-- About Grams -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-yellow-600 mr-2"></i>
                    About Grams
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The gram is a metric unit of mass commonly used worldwide.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard metric mass unit</li>
                        <li>Used in science and cooking</li>
                        <li>1 gram = 1/1000 kilogram</li>
                        <li>Symbol: g</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Mass Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Grains</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Grams</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 gr</td>
                            <td class="border border-gray-300 px-4 py-2">0.0648 g</td>
                            <td class="border border-gray-300 px-4 py-2">Small jewelry</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">15.432 gr</td>
                            <td class="border border-gray-300 px-4 py-2">1 g</td>
                            <td class="border border-gray-300 px-4 py-2">Standard conversion</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 gr</td>
                            <td class="border border-gray-300 px-4 py-2">6.48 g</td>
                            <td class="border border-gray-300 px-4 py-2">Bullet weight</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">500 gr</td>
                            <td class="border border-gray-300 px-4 py-2">32.4 g</td>
                            <td class="border border-gray-300 px-4 py-2">Heavy bullet</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Historical Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Grams = Grains × 0.06479891</p>
                        <p>Grains = Grams ÷ 0.06479891</p>
                        <p>1 grain = 64.79891 milligrams</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Ammunition and bullet weights</li>
                        <li>• Precious metals and jewelry</li>
                        <li>• Pharmaceutical measurements</li>
                        <li>• Traditional weight systems</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToGrams() {
    const grains = parseFloat(document.getElementById('grains').value);
    if (!isNaN(grains)) {
        const grams = grains * 0.06479891;
        document.getElementById('grams').value = grams.toFixed(6);
    } else {
        document.getElementById('grams').value = '';
    }
}

function convertToGrains() {
    const grams = parseFloat(document.getElementById('grams').value);
    if (!isNaN(grams)) {
        const grains = grams / 0.06479891;
        document.getElementById('grains').value = grains.toFixed(4);
    } else {
        document.getElementById('grains').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('grains').value = value;
    convertToGrams();
}

function swapValues() {
    const grains = document.getElementById('grains').value;
    const grams = document.getElementById('grams').value;
    
    document.getElementById('grains').value = grams;
    document.getElementById('grams').value = grains;
    
    if (grams) {
        convertToGrams();
    }
}

function clearInputs() {
    document.getElementById('grains').value = '';
    document.getElementById('grams').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
