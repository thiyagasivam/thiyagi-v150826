<?php include 'header.php';?>


    <title>Gram to Microgram Converter 2026 - Mass Conversion Calculator</title>
    <meta name="description" content="Convert grams to micrograms with our free 2026 online calculator. Perfect for laboratory, pharmaceutical, and scientific measurements.">
    <meta name="keywords" content="gram to microgram converter 2026, mass converter, laboratory calculator, pharmaceutical measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-violet-50 to-purple-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-weight text-violet-600 mr-3"></i>
                Gram to Microgram Converter
            </h1>
            <p class="text-lg text-gray-600">Convert grams to micrograms for precise scientific measurements</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Grams Input -->
                <div class="space-y-4">
                    <label for="grams" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-weight text-violet-600 mr-2"></i>
                        Grams (g)
                    </label>
                    <input type="number" id="grams" 
                           class="w-full px-4 py-3 border-2 border-violet-300 rounded-lg focus:border-violet-500 focus:outline-none text-lg"
                           placeholder="Enter grams value" 
                           oninput="convertToMicrograms()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(0.001)" class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-sm hover:bg-violet-200">0.001 g</button>
                        <button onclick="setAndConvert(0.01)" class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-sm hover:bg-violet-200">0.01 g</button>
                        <button onclick="setAndConvert(0.1)" class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-sm hover:bg-violet-200">0.1 g</button>
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-sm hover:bg-violet-200">1 g</button>
                    </div>
                </div>

                <!-- Micrograms Output -->
                <div class="space-y-4">
                    <label for="micrograms" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-microscope text-purple-600 mr-2"></i>
                        Micrograms (μg)
                    </label>
                    <input type="number" id="micrograms" 
                           class="w-full px-4 py-3 border-2 border-purple-300 rounded-lg focus:border-purple-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in micrograms" 
                           oninput="convertToGrams()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> micrograms = grams × 1,000,000</p>
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
            <!-- About Grams -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-violet-600 mr-2"></i>
                    About Grams
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The gram is a metric unit of mass commonly used in everyday measurements.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Base unit in metric system</li>
                        <li>Common in cooking and science</li>
                        <li>1 gram = 1/1000 kilogram</li>
                        <li>Symbol: g</li>
                    </ul>
                </div>
            </div>

            <!-- About Micrograms -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-microscope text-purple-600 mr-2"></i>
                    About Micrograms
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The microgram is a very small unit of mass used in scientific applications.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in pharmaceutical dosing</li>
                        <li>Common in laboratory analysis</li>
                        <li>1 microgram = 0.000001 grams</li>
                        <li>Symbol: μg or mcg</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Grams</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Micrograms</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.001 g</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">Vitamin dose</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.01 g</td>
                            <td class="border border-gray-300 px-4 py-2">10,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">Medicine tablet</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.1 g</td>
                            <td class="border border-gray-300 px-4 py-2">100,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">Lab sample</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 g</td>
                            <td class="border border-gray-300 px-4 py-2">1,000,000 μg</td>
                            <td class="border border-gray-300 px-4 py-2">Standard conversion</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Scientific Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Micrograms = Grams × 1,000,000</p>
                        <p>Grams = Micrograms ÷ 1,000,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Pharmaceutical dosage calculations</li>
                        <li>• Nutritional supplement labeling</li>
                        <li>• Environmental testing</li>
                        <li>• Analytical chemistry</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMicrograms() {
    const grams = parseFloat(document.getElementById('grams').value);
    if (!isNaN(grams)) {
        const micrograms = grams * 1000000;
        document.getElementById('micrograms').value = micrograms.toFixed(2);
    } else {
        document.getElementById('micrograms').value = '';
    }
}

function convertToGrams() {
    const micrograms = parseFloat(document.getElementById('micrograms').value);
    if (!isNaN(micrograms)) {
        const grams = micrograms / 1000000;
        document.getElementById('grams').value = grams.toFixed(8);
    } else {
        document.getElementById('grams').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('grams').value = value;
    convertToMicrograms();
}

function swapValues() {
    const grams = document.getElementById('grams').value;
    const micrograms = document.getElementById('micrograms').value;
    
    document.getElementById('grams').value = micrograms;
    document.getElementById('micrograms').value = grams;
    
    if (micrograms) {
        convertToMicrograms();
    }
}

function clearInputs() {
    document.getElementById('grams').value = '';
    document.getElementById('micrograms').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
