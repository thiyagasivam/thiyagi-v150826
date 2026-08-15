<?php include 'header.php';?>


    <title>Mil to Millimeter Converter 2026 - Length Conversion Calculator</title>
    <meta name="description" content="Convert mils to millimeters with our free 2026 online calculator. Accurate conversion for precision measurements and engineering calculations.">
    <meta name="keywords" content="mil to millimeter converter 2026, mil to mm, precision measurement converter, engineering calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-slate-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-ruler-horizontal text-gray-600 mr-3"></i>
                Mil to Millimeter Converter
            </h1>
            <p class="text-lg text-gray-600">Convert mils to millimeters instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mils Input -->
                <div class="space-y-4">
                    <label for="mils" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-ruler-horizontal text-gray-600 mr-2"></i>
                        Mils (mil)
                    </label>
                    <input type="number" id="mils" 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-gray-500 focus:outline-none text-lg"
                           placeholder="Enter mils value" 
                           oninput="convertToMillimeters()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">1 mil</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">10 mil</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">100 mil</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-gray-100 text-gray-800 rounded-full text-sm hover:bg-gray-200">1,000 mil</button>
                    </div>
                </div>

                <!-- Millimeters Output -->
                <div class="space-y-4">
                    <label for="millimeters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-ruler text-slate-600 mr-2"></i>
                        Millimeters (mm)
                    </label>
                    <input type="number" id="millimeters" 
                           class="w-full px-4 py-3 border-2 border-slate-300 rounded-lg focus:border-slate-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in millimeters" 
                           oninput="convertToMils()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> millimeters = mils × 0.0254</p>
                        <p><strong>Note:</strong> 1 mil = 0.0254 millimeters</p>
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
            <!-- About Mils -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler-horizontal text-gray-600 mr-2"></i>
                    About Mils
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The mil is a unit of length used for precise measurements.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>1/1000 of an inch (0.001 inch)</li>
                        <li>Used in engineering and manufacturing</li>
                        <li>Common in wire gauge measurements</li>
                        <li>Also called "thou" or "thousandth"</li>
                    </ul>
                </div>
            </div>

            <!-- About Millimeters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>
                    About Millimeters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The millimeter is a unit of length in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>1/1000 of a meter (0.001 meter)</li>
                        <li>Standard unit for small measurements</li>
                        <li>Used worldwide in science and industry</li>
                        <li>Symbol: mm</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Mils</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Millimeters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 mil</td>
                            <td class="border border-gray-300 px-4 py-2">0.0254 mm</td>
                            <td class="border border-gray-300 px-4 py-2">Thin coating</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 mil</td>
                            <td class="border border-gray-300 px-4 py-2">0.254 mm</td>
                            <td class="border border-gray-300 px-4 py-2">Wire diameter</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 mil</td>
                            <td class="border border-gray-300 px-4 py-2">2.54 mm</td>
                            <td class="border border-gray-300 px-4 py-2">Sheet thickness</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 mil</td>
                            <td class="border border-gray-300 px-4 py-2">25.4 mm</td>
                            <td class="border border-gray-300 px-4 py-2">1 inch equivalent</td>
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
                        <p>Millimeters = Mils × 0.0254</p>
                        <p>Mils = Millimeters ÷ 0.0254</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 mil = 0.001 inch = 0.0254 mm</li>
                        <li>• Used in precision engineering</li>
                        <li>• Common in electronics industry</li>
                        <li>• Essential for quality control</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMillimeters() {
    const mils = parseFloat(document.getElementById('mils').value);
    if (!isNaN(mils)) {
        const millimeters = mils * 0.0254;
        document.getElementById('millimeters').value = millimeters.toFixed(6);
    } else {
        document.getElementById('millimeters').value = '';
    }
}

function convertToMils() {
    const millimeters = parseFloat(document.getElementById('millimeters').value);
    if (!isNaN(millimeters)) {
        const mils = millimeters / 0.0254;
        document.getElementById('mils').value = mils.toFixed(4);
    } else {
        document.getElementById('mils').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('mils').value = value;
    convertToMillimeters();
}

function swapValues() {
    const mils = document.getElementById('mils').value;
    const millimeters = document.getElementById('millimeters').value;
    
    document.getElementById('mils').value = millimeters;
    document.getElementById('millimeters').value = mils;
    
    if (millimeters) {
        convertToMillimeters();
    }
}

function clearInputs() {
    document.getElementById('mils').value = '';
    document.getElementById('millimeters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
