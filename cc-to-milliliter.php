<?php include 'header.php';?>


    <title>CC to Milliliter Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert cubic centimeters (cc) to milliliters with our free 2026 online calculator. Perfect for medical, automotive, and laboratory measurements.">
    <meta name="keywords" content="cc to milliliter converter 2026, cubic centimeters to mL, medical volume converter, automotive calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-teal-50 to-green-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-cube text-teal-600 mr-3"></i>
                CC to Milliliter Converter
            </h1>
            <p class="text-lg text-gray-600">Convert cubic centimeters to milliliters with precision</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="cc" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cube text-teal-600 mr-2"></i>
                        Cubic Centimeters (cc)
                    </label>
                    <input type="number" id="cc" 
                           class="w-full px-4 py-3 border-2 border-teal-300 rounded-lg focus:border-teal-500 focus:outline-none text-lg"
                           placeholder="Enter cc value" 
                           oninput="convertToMilliliters()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm hover:bg-teal-200">1 cc</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm hover:bg-teal-200">5 cc</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm hover:bg-teal-200">10 cc</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-teal-100 text-teal-800 rounded-full text-sm hover:bg-teal-200">100 cc</button>
                    </div>
                </div>

                <!-- Milliliters Output -->
                <div class="space-y-4">
                    <label for="milliliters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-vial text-green-600 mr-2"></i>
                        Milliliters (mL)
                    </label>
                    <input type="number" id="milliliters" 
                           class="w-full px-4 py-3 border-2 border-green-300 rounded-lg focus:border-green-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in milliliters" 
                           oninput="convertToCC()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> 1 cc = 1 mL (exact conversion)</p>
                        <p><strong>Note:</strong> Cubic centimeter and milliliter are equivalent</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About CC -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cube text-teal-600 mr-2"></i>
                    About Cubic Centimeters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cubic centimeter is a unit of volume in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common in automotive engines</li>
                        <li>Used in medical syringes</li>
                        <li>1 cc = 1 cm³ = 1 mL</li>
                        <li>Symbol: cc or cm³</li>
                    </ul>
                </div>
            </div>

            <!-- About Milliliters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-vial text-green-600 mr-2"></i>
                    About Milliliters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The milliliter is the standard metric unit for liquid volume.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Universal liquid measurement</li>
                        <li>Used in medicine and cooking</li>
                        <li>1 mL = 1 cc = 1 cm³</li>
                        <li>Symbol: mL or ml</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Practical Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Cubic Centimeters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliliters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 cc</td>
                            <td class="border border-gray-300 px-4 py-2">1 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Small injection</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5 cc</td>
                            <td class="border border-gray-300 px-4 py-2">5 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Medicine dose</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 cc</td>
                            <td class="border border-gray-300 px-4 py-2">10 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Large syringe</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1000 cc</td>
                            <td class="border border-gray-300 px-4 py-2">1000 mL</td>
                            <td class="border border-gray-300 px-4 py-2">Small engine</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Important Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Milliliters = Cubic Centimeters</p>
                        <p>1 cc = 1 mL (exactly)</p>
                        <p>1 cm³ = 1 mL = 1 cc</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Key Points</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Perfect 1:1 conversion ratio</li>
                        <li>• Both are metric volume units</li>
                        <li>• Widely used in medical field</li>
                        <li>• Engine displacement measurement</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMilliliters() {
    const cc = parseFloat(document.getElementById('cc').value);
    if (!isNaN(cc)) {
        // 1 cc = 1 mL exactly
        const milliliters = cc;
        document.getElementById('milliliters').value = milliliters.toFixed(6);
    } else {
        document.getElementById('milliliters').value = '';
    }
}

function convertToCC() {
    const milliliters = parseFloat(document.getElementById('milliliters').value);
    if (!isNaN(milliliters)) {
        // 1 mL = 1 cc exactly
        const cc = milliliters;
        document.getElementById('cc').value = cc.toFixed(6);
    } else {
        document.getElementById('cc').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cc').value = value;
    convertToMilliliters();
}

function swapValues() {
    const cc = document.getElementById('cc').value;
    const milliliters = document.getElementById('milliliters').value;
    
    document.getElementById('cc').value = milliliters;
    document.getElementById('milliliters').value = cc;
    
    if (milliliters) {
        convertToMilliliters();
    }
}

function clearInputs() {
    document.getElementById('cc').value = '';
    document.getElementById('milliliters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
