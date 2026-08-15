<?php include 'header.php';?>


    <title>Cubic Inch to Cubic Foot Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert cubic inches to cubic feet with our free 2026 online calculator. Perfect for construction, engineering, and volume calculations.">
    <meta name="keywords" content="cubic inch to cubic foot converter 2026, volume converter, construction calculator, engineering measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-green-50 to-teal-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-cube text-green-600 mr-3"></i>
                Cubic Inch to Cubic Foot Converter
            </h1>
            <p class="text-lg text-gray-600">Convert cubic inches to cubic feet for construction and engineering</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Inches Input -->
                <div class="space-y-4">
                    <label for="cubicInches" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cube text-green-600 mr-2"></i>
                        Cubic Inches (in³)
                    </label>
                    <input type="number" id="cubicInches" 
                           class="w-full px-4 py-3 border-2 border-green-300 rounded-lg focus:border-green-500 focus:outline-none text-lg"
                           placeholder="Enter cubic inches value" 
                           oninput="convertToCubicFeet()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1728)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">1,728 in³</button>
                        <button onclick="setAndConvert(3456)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">3,456 in³</button>
                        <button onclick="setAndConvert(5184)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">5,184 in³</button>
                        <button onclick="setAndConvert(10368)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">10,368 in³</button>
                    </div>
                </div>

                <!-- Cubic Feet Output -->
                <div class="space-y-4">
                    <label for="cubicFeet" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cube text-teal-600 mr-2"></i>
                        Cubic Feet (ft³)
                    </label>
                    <input type="number" id="cubicFeet" 
                           class="w-full px-4 py-3 border-2 border-teal-300 rounded-lg focus:border-teal-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in cubic feet" 
                           oninput="convertToCubicInches()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> cubic feet = cubic inches ÷ 1,728</p>
                        <p><strong>Note:</strong> 1 cubic foot = 1,728 cubic inches</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Cubic Inches -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cube text-green-600 mr-2"></i>
                    About Cubic Inches
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cubic inch is a unit of volume in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in automotive industry</li>
                        <li>Common for small volume measurements</li>
                        <li>1 cubic inch = volume of 1×1×1 inch cube</li>
                        <li>Symbol: in³ or cu in</li>
                    </ul>
                </div>
            </div>

            <!-- About Cubic Feet -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cube text-teal-600 mr-2"></i>
                    About Cubic Feet
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cubic foot is a larger unit of volume in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in construction and shipping</li>
                        <li>Common for room and cargo volumes</li>
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
                Volume Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Cubic Inches</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cubic Feet</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,728 in³</td>
                            <td class="border border-gray-300 px-4 py-2">1 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Standard conversion</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">3,456 in³</td>
                            <td class="border border-gray-300 px-4 py-2">2 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Small storage box</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">8,640 in³</td>
                            <td class="border border-gray-300 px-4 py-2">5 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Appliance volume</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">17,280 in³</td>
                            <td class="border border-gray-300 px-4 py-2">10 ft³</td>
                            <td class="border border-gray-300 px-4 py-2">Room corner</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Construction Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Cubic Feet = Cubic Inches ÷ 1,728</p>
                        <p>Cubic Inches = Cubic Feet × 1,728</p>
                        <p>Factor: 12³ = 1,728</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Engine displacement calculations</li>
                        <li>• Construction material volumes</li>
                        <li>• Shipping container capacity</li>
                        <li>• Room and storage planning</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCubicFeet() {
    const cubicInches = parseFloat(document.getElementById('cubicInches').value);
    if (!isNaN(cubicInches)) {
        const cubicFeet = cubicInches / 1728;
        document.getElementById('cubicFeet').value = cubicFeet.toFixed(6);
    } else {
        document.getElementById('cubicFeet').value = '';
    }
}

function convertToCubicInches() {
    const cubicFeet = parseFloat(document.getElementById('cubicFeet').value);
    if (!isNaN(cubicFeet)) {
        const cubicInches = cubicFeet * 1728;
        document.getElementById('cubicInches').value = cubicInches.toFixed(2);
    } else {
        document.getElementById('cubicInches').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cubicInches').value = value;
    convertToCubicFeet();
}

function swapValues() {
    const cubicInches = document.getElementById('cubicInches').value;
    const cubicFeet = document.getElementById('cubicFeet').value;
    
    document.getElementById('cubicInches').value = cubicFeet;
    document.getElementById('cubicFeet').value = cubicInches;
    
    if (cubicFeet) {
        convertToCubicFeet();
    }
}

function clearInputs() {
    document.getElementById('cubicInches').value = '';
    document.getElementById('cubicFeet').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
