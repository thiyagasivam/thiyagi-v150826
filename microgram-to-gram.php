<?php include 'header.php';?>


    <title>Microgram to Gram Converter 2026 - Mass Conversion Calculator</title>
    <meta name="description" content="Convert micrograms to grams with our free 2026 online calculator. Accurate mass conversion for laboratory and pharmaceutical calculations.">
    <meta name="keywords" content="microgram to gram converter 2026, μg to g, mass converter, laboratory calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-purple-50 to-pink-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-balance-scale text-purple-600 mr-3"></i>
                Microgram to Gram Converter
            </h1>
            <p class="text-lg text-gray-600">Convert micrograms to grams instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrograms Input -->
                <div class="space-y-4">
                    <label for="micrograms" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-microscope text-purple-600 mr-2"></i>
                        Micrograms (μg)
                    </label>
                    <input type="number" id="micrograms" 
                           class="w-full px-4 py-3 border-2 border-purple-300 rounded-lg focus:border-purple-500 focus:outline-none text-lg"
                           placeholder="Enter micrograms value" 
                           oninput="convertToGrams()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">1,000 μg</button>
                        <button onclick="setAndConvert(10000)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">10,000 μg</button>
                        <button onclick="setAndConvert(100000)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">100,000 μg</button>
                        <button onclick="setAndConvert(1000000)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">1,000,000 μg</button>
                    </div>
                </div>

                <!-- Grams Output -->
                <div class="space-y-4">
                    <label for="grams" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-weight text-pink-600 mr-2"></i>
                        Grams (g)
                    </label>
                    <input type="number" id="grams" 
                           class="w-full px-4 py-3 border-2 border-pink-300 rounded-lg focus:border-pink-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in grams" 
                           oninput="convertToMicrograms()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> grams = micrograms ÷ 1,000,000</p>
                        <p><strong>Note:</strong> 1 gram = 1,000,000 micrograms</p>
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
            <!-- About Micrograms -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-microscope text-purple-600 mr-2"></i>
                    About Micrograms
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The microgram is a very small unit of mass in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in laboratory measurements</li>
                        <li>Common in pharmaceutical dosing</li>
                        <li>1 microgram = 0.000001 grams</li>
                        <li>Symbol: μg or mcg</li>
                    </ul>
                </div>
            </div>

            <!-- About Grams -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-pink-600 mr-2"></i>
                    About Grams
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The gram is the base unit of mass in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard unit for everyday measurements</li>
                        <li>Used worldwide in science and commerce</li>
                        <li>1 gram = 1,000,000 micrograms</li>
                        <li>Symbol: g</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Micrograms</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Grams</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 μg</td>
                            <td class="border border-gray-300 px-4 py-2">0.0001 g</td>
                            <td class="border border-gray-300 px-4 py-2">Vitamin dose</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">0.001 g</td>
                            <td class="border border-gray-300 px-4 py-2">Medical sample</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">0.1 g</td>
                            <td class="border border-gray-300 px-4 py-2">Chemical reagent</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">1 g</td>
                            <td class="border border-gray-300 px-4 py-2">Laboratory standard</td>
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
                        <p>Grams = Micrograms ÷ 1,000,000</p>
                        <p>Micrograms = Grams × 1,000,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 gram = 1,000,000 micrograms</li>
                        <li>• Used in pharmaceutical dosing</li>
                        <li>• Common in laboratory analysis</li>
                        <li>• Essential for precise measurements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToGrams() {
    const micrograms = parseFloat(document.getElementById('micrograms').value);
    if (!isNaN(micrograms)) {
        const grams = micrograms / 1000000;
        document.getElementById('grams').value = grams.toFixed(12);
    } else {
        document.getElementById('grams').value = '';
    }
}

function convertToMicrograms() {
    const grams = parseFloat(document.getElementById('grams').value);
    if (!isNaN(grams)) {
        const micrograms = grams * 1000000;
        document.getElementById('micrograms').value = micrograms.toFixed(8);
    } else {
        document.getElementById('micrograms').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('micrograms').value = value;
    convertToGrams();
}

function swapValues() {
    const micrograms = document.getElementById('micrograms').value;
    const grams = document.getElementById('grams').value;
    
    document.getElementById('micrograms').value = grams;
    document.getElementById('grams').value = micrograms;
    
    if (grams) {
        convertToGrams();
    }
}

function clearInputs() {
    document.getElementById('micrograms').value = '';
    document.getElementById('grams').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
