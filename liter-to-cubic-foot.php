<?php include 'header.php';?>


    <title>Liter to Cubic Foot Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert liters to cubic feet with our free 2026 online calculator. Accurate volume conversion for storage and liquid measurements.">
    <meta name="keywords" content="liter to cubic foot converter 2026, L to ft³, volume converter, liquid measurement calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-cyan-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-flask text-blue-600 mr-3"></i>
                Liter to Cubic Foot Converter
            </h1>
            <p class="text-lg text-gray-600">Convert liters to cubic feet instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liters Input -->
                <div class="space-y-4">
                    <label for="liters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-flask text-blue-600 mr-2"></i>
                        Liters (L)
                    </label>
                    <input type="number" id="liters" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                           placeholder="Enter liters value" 
                           oninput="convertToCubicFeet()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1 L</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">10 L</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">100 L</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1,000 L</button>
                    </div>
                </div>

                <!-- Cubic Feet Output -->
                <div class="space-y-4">
                    <label for="cubicFeet" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cube text-cyan-600 mr-2"></i>
                        Cubic Feet (ft³)
                    </label>
                    <input type="number" id="cubicFeet" 
                           class="w-full px-4 py-3 border-2 border-cyan-300 rounded-lg focus:border-cyan-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in cubic feet" 
                           oninput="convertToLiters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> cubic feet = liters ÷ 28.3168</p>
                        <p><strong>Note:</strong> 1 cubic foot = 28.3168 liters</p>
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
            <!-- About Liters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-flask text-blue-600 mr-2"></i>
                    About Liters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The liter is a unit of volume in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard unit for liquid measurements</li>
                        <li>Used worldwide in science and commerce</li>
                        <li>1 liter = 1,000 cubic centimeters</li>
                        <li>Symbol: L or l</li>
                    </ul>
                </div>
            </div>

            <!-- About Cubic Feet -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cube text-cyan-600 mr-2"></i>
                    About Cubic Feet
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cubic foot is a unit of volume in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used for measuring large volumes</li>
                        <li>Common in construction and storage</li>
                        <li>1 cubic foot = 1,728 cubic inches</li>
                        <li>Symbol: ft³ or cu ft</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Liters</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cubic Feet</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">28.32 L</td>
                            <td class="border border-gray-300 px-4 py-2">1 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Small storage box</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">141.6 L</td>
                            <td class="border border-gray-300 px-4 py-2">5 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Refrigerator capacity</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">283.2 L</td>
                            <td class="border border-gray-300 px-4 py-2">10 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Water tank</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2,832 L</td>
                            <td class="border border-gray-300 px-4 py-2">100 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Large storage room</td>
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
                        <p>Cubic Feet = Liters ÷ 28.3168466</p>
                        <p>Liters = Cubic Feet × 28.3168466</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 cubic foot = 28.3168 liters exactly</li>
                        <li>• Used in storage and shipping</li>
                        <li>• Common in HVAC calculations</li>
                        <li>• Different from US liquid measurements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCubicFeet() {
    const liters = parseFloat(document.getElementById('liters').value);
    if (!isNaN(liters)) {
        const cubicFeet = liters / 28.3168466;
        document.getElementById('cubicFeet').value = cubicFeet.toFixed(6);
    } else {
        document.getElementById('cubicFeet').value = '';
    }
}

function convertToLiters() {
    const cubicFeet = parseFloat(document.getElementById('cubicFeet').value);
    if (!isNaN(cubicFeet)) {
        const liters = cubicFeet * 28.3168466;
        document.getElementById('liters').value = liters.toFixed(6);
    } else {
        document.getElementById('liters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('liters').value = value;
    convertToCubicFeet();
}

function swapValues() {
    const liters = document.getElementById('liters').value;
    const cubicFeet = document.getElementById('cubicFeet').value;
    
    document.getElementById('liters').value = cubicFeet;
    document.getElementById('cubicFeet').value = liters;
    
    if (cubicFeet) {
        convertToCubicFeet();
    }
}

function clearInputs() {
    document.getElementById('liters').value = '';
    document.getElementById('cubicFeet').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
