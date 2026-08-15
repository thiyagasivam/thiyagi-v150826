<?php include 'header.php';?>


    <title>Micrometer to Meter Converter 2026 - Length Conversion Calculator</title>
    <meta name="description" content="Convert micrometers to meters with our free 2026 online calculator. Perfect for scientific, engineering, and microscopy measurements.">
    <meta name="keywords" content="micrometer to meter converter 2026, micron converter, scientific calculator, microscopy measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-microscope text-indigo-600 mr-3"></i>
                Micrometer to Meter Converter
            </h1>
            <p class="text-lg text-gray-600">Convert micrometers to meters for scientific and engineering calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrometers Input -->
                <div class="space-y-4">
                    <label for="micrometers" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-microscope text-indigo-600 mr-2"></i>
                        Micrometers (μm)
                    </label>
                    <input type="number" id="micrometers" 
                           class="w-full px-4 py-3 border-2 border-indigo-300 rounded-lg focus:border-indigo-500 focus:outline-none text-lg"
                           placeholder="Enter micrometers value" 
                           oninput="convertToMeters()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">1 μm</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">100 μm</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">1,000 μm</button>
                        <button onclick="setAndConvert(1000000)" class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-sm hover:bg-indigo-200">1M μm</button>
                    </div>
                </div>

                <!-- Meters Output -->
                <div class="space-y-4">
                    <label for="meters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-ruler text-blue-600 mr-2"></i>
                        Meters (m)
                    </label>
                    <input type="number" id="meters" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in meters" 
                           oninput="convertToMicrometers()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> meters = micrometers ÷ 1,000,000</p>
                        <p><strong>Note:</strong> 1 meter = 1,000,000 micrometers</p>
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
            <!-- About Micrometers -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-microscope text-indigo-600 mr-2"></i>
                    About Micrometers
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The micrometer is a very small unit of length used in scientific applications.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in microscopy and biology</li>
                        <li>Also called "micron"</li>
                        <li>1 micrometer = 0.000001 meters</li>
                        <li>Symbol: μm or micron</li>
                    </ul>
                </div>
            </div>

            <!-- About Meters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>
                    About Meters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The meter is the SI base unit of length.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>International standard for length</li>
                        <li>Used worldwide for measurements</li>
                        <li>1 meter = 100 centimeters</li>
                        <li>Symbol: m</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Scientific Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Micrometers</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Meters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Reference</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 μm</td>
                            <td class="border border-gray-300 px-4 py-2">0.000001 m</td>
                            <td class="border border-gray-300 px-4 py-2">Bacteria size</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 μm</td>
                            <td class="border border-gray-300 px-4 py-2">0.00001 m</td>
                            <td class="border border-gray-300 px-4 py-2">Cell nucleus</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 μm</td>
                            <td class="border border-gray-300 px-4 py-2">0.0001 m</td>
                            <td class="border border-gray-300 px-4 py-2">Human hair</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000,000 μm</td>
                            <td class="border border-gray-300 px-4 py-2">1 m</td>
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
                        <p>Meters = Micrometers ÷ 1,000,000</p>
                        <p>Micrometers = Meters × 1,000,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Microscopy and cell biology</li>
                        <li>• Material science research</li>
                        <li>• Semiconductor manufacturing</li>
                        <li>• Precision engineering</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMeters() {
    const micrometers = parseFloat(document.getElementById('micrometers').value);
    if (!isNaN(micrometers)) {
        const meters = micrometers / 1000000;
        document.getElementById('meters').value = meters.toExponential(6);
    } else {
        document.getElementById('meters').value = '';
    }
}

function convertToMicrometers() {
    const meters = parseFloat(document.getElementById('meters').value);
    if (!isNaN(meters)) {
        const micrometers = meters * 1000000;
        document.getElementById('micrometers').value = micrometers.toFixed(2);
    } else {
        document.getElementById('micrometers').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('micrometers').value = value;
    convertToMeters();
}

function swapValues() {
    const micrometers = document.getElementById('micrometers').value;
    const meters = document.getElementById('meters').value;
    
    document.getElementById('micrometers').value = meters;
    document.getElementById('meters').value = micrometers;
    
    if (meters) {
        convertToMeters();
    }
}

function clearInputs() {
    document.getElementById('micrometers').value = '';
    document.getElementById('meters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
