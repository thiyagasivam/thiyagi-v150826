<?php include 'header.php';?>


    <title>Microliter to Milliliter Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert microliters to milliliters with our free 2026 online calculator. Accurate volume conversion for laboratory and medical measurements.">
    <meta name="keywords" content="microliter to milliliter converter 2026, μL to mL, laboratory volume converter, medical calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-purple-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-microscope text-indigo-600 mr-3"></i>
                Microliter to Milliliter Converter
            </h1>
            <p class="text-lg text-gray-600">Convert microliters to milliliters instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microliters Input -->
                <div class="space-y-4">
                    <label for="microliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-microscope text-indigo-600 mr-2"></i>
                        Microliters (μL)
                    </label>
                    <input type="number" id="microliters" 
                           class="w-full px-4 py-3 border-2 border-indigo-300 rounded-lg focus:border-indigo-500 focus:outline-none text-lg"
                           placeholder="Enter microliters value" 
                           oninput="convertToMilliliters()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">100 μL</button>
                        <button onclick="setAndConvert(500)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">500 μL</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">1,000 μL</button>
                        <button onclick="setAndConvert(5000)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">5,000 μL</button>
                    </div>
                </div>

                <!-- Milliliters Output -->
                <div class="space-y-4">
                    <label for="milliliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-vial text-purple-600 mr-2"></i>
                        Milliliters (mL)
                    </label>
                    <input type="number" id="milliliters" 
                           class="w-full px-4 py-3 border-2 border-purple-300 rounded-lg focus:border-purple-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in milliliters" 
                           oninput="convertToMicroliters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> milliliters = microliters ÷ 1,000</p>
                        <p><strong>Note:</strong> 1 milliliter = 1,000 microliters</p>
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
            <!-- About Microliters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-microscope text-indigo-600 mr-2"></i>
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
                        <li>1 milliliter = 1,000 microliters</li>
                        <li>Symbol: mL or ml</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Microliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 μL</td>
                            <td class="border border-gray-300 px-4 py-2">0.1 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Pipette sample</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">500 μL</td>
                            <td class="border border-gray-300 px-4 py-2">0.5 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Lab reagent</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 μL</td>
                            <td class="border border-gray-300 px-4 py-2">1 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Standard conversion</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5,000 μL</td>
                            <td class="border border-gray-300 px-4 py-2">5 mL</td>
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
                        <p>Milliliters = Microliters ÷ 1,000</p>
                        <p>Microliters = Milliliters × 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 milliliter = 1,000 microliters</li>
                        <li>• Used in laboratory pipetting</li>
                        <li>• Essential for precise measurements</li>
                        <li>• Common in molecular biology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMilliliters() {
    const microliters = parseFloat(document.getElementById('microliters').value);
    if (!isNaN(microliters)) {
        const milliliters = microliters / 1000;
        document.getElementById('milliliters').value = milliliters.toFixed(6);
    } else {
        document.getElementById('milliliters').value = '';
    }
}

function convertToMicroliters() {
    const milliliters = parseFloat(document.getElementById('milliliters').value);
    if (!isNaN(milliliters)) {
        const microliters = milliliters * 1000;
        document.getElementById('microliters').value = microliters.toFixed(2);
    } else {
        document.getElementById('microliters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('microliters').value = value;
    convertToMilliliters();
}

function swapValues() {
    const microliters = document.getElementById('microliters').value;
    const milliliters = document.getElementById('milliliters').value;
    
    document.getElementById('microliters').value = milliliters;
    document.getElementById('milliliters').value = microliters;
    
    if (milliliters) {
        convertToMilliliters();
    }
}

function clearInputs() {
    document.getElementById('microliters').value = '';
    document.getElementById('milliliters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
