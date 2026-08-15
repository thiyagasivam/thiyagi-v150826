<?php include 'header.php';?>


    <title>Milliliter to Microliter Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert milliliters to microliters with our free 2026 online calculator. Accurate volume conversion for laboratory and medical measurements.">
    <meta name="keywords" content="milliliter to microliter converter 2026, mL to μL, laboratory volume converter, medical calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-purple-50 to-pink-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-vial text-purple-600 mr-3"></i>
                Milliliter to Microliter Converter
            </h1>
            <p class="text-lg text-gray-600">Convert milliliters to microliters instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliters Input -->
                <div class="space-y-4">
                    <label for="milliliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-vial text-purple-600 mr-2"></i>
                        Milliliters (mL)
                    </label>
                    <input type="number" id="milliliters" 
                           class="w-full px-4 py-3 border-2 border-purple-300 rounded-lg focus:border-purple-500 focus:outline-none text-lg"
                           placeholder="Enter milliliters value" 
                           oninput="convertToMicroliters()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(0.1)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">0.1 mL</button>
                        <button onclick="setAndConvert(0.5)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">0.5 mL</button>
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">1 mL</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-sm hover:bg-purple-200">5 mL</button>
                    </div>
                </div>

                <!-- Microliters Output -->
                <div class="space-y-4">
                    <label for="microliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-microscope text-pink-600 mr-2"></i>
                        Microliters (μL)
                    </label>
                    <input type="number" id="microliters" 
                           class="w-full px-4 py-3 border-2 border-pink-300 rounded-lg focus:border-pink-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in microliters" 
                           oninput="convertToMilliliters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> microliters = milliliters × 1,000</p>
                        <p><strong>Note:</strong> 1 milliliter = 1,000 microliters</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-pink-500 text-white rounded-lg hover:bg-pink-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Milliliters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-vial text-purple-600 mr-2"></i>
                    About Milliliters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The milliliter is a standard unit of volume in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common in medicine and cooking</li>
                        <li>1 milliliter = 1 cubic centimeter</li>
                        <li>Equal to 1/1000 of a liter</li>
                        <li>Symbol: mL or ml</li>
                    </ul>
                </div>
            </div>

            <!-- About Microliters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-microscope text-pink-600 mr-2"></i>
                    About Microliters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The microliter is a very small unit of volume in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in laboratory measurements</li>
                        <li>Common in molecular biology</li>
                        <li>1 microliter = 0.001 milliliters</li>
                        <li>Symbol: μL or mcL</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Microliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.1 mL</td>
                            <td class="border border-gray-300 px-4 py-2">100 μL</td>
                            <td class="border border-gray-300 px-4 py-2">Small pipette sample</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.5 mL</td>
                            <td class="border border-gray-300 px-4 py-2">500 μL</td>
                            <td class="border border-gray-300 px-4 py-2">Lab reagent</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 mL</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 μL</td>
                            <td class="border border-gray-300 px-4 py-2">Standard conversion</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5 mL</td>
                            <td class="border border-gray-300 px-4 py-2">5,000 μL</td>
                            <td class="border border-gray-300 px-4 py-2">Medical dose</td>
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
                        <p>Microliters = Milliliters × 1,000</p>
                        <p>Milliliters = Microliters ÷ 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 milliliter = 1,000 microliters</li>
                        <li>• Used for precise laboratory work</li>
                        <li>• Essential for PCR and assays</li>
                        <li>• Medical injection volumes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMicroliters() {
    const milliliters = parseFloat(document.getElementById('milliliters').value);
    if (!isNaN(milliliters)) {
        const microliters = milliliters * 1000;
        document.getElementById('microliters').value = microliters.toFixed(2);
    } else {
        document.getElementById('microliters').value = '';
    }
}

function convertToMilliliters() {
    const microliters = parseFloat(document.getElementById('microliters').value);
    if (!isNaN(microliters)) {
        const milliliters = microliters / 1000;
        document.getElementById('milliliters').value = milliliters.toFixed(6);
    } else {
        document.getElementById('milliliters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('milliliters').value = value;
    convertToMicroliters();
}

function swapValues() {
    const milliliters = document.getElementById('milliliters').value;
    const microliters = document.getElementById('microliters').value;
    
    document.getElementById('milliliters').value = microliters;
    document.getElementById('microliters').value = milliliters;
    
    if (microliters) {
        convertToMicroliters();
    }
}

function clearInputs() {
    document.getElementById('milliliters').value = '';
    document.getElementById('microliters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
