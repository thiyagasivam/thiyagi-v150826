<?php include 'header.php';?>


    <title>Ton Register to Cubic Yard Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert ton register to cubic yards with our free 2026 online calculator. Accurate volume conversion for shipping and maritime calculations.">
    <meta name="keywords" content="ton register to cubic yard converter 2026, register ton to yd³, shipping volume converter, maritime calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-ship text-blue-600 mr-3"></i>
                Ton Register to Cubic Yard Converter
            </h1>
            <p class="text-lg text-gray-600">Convert register tons to cubic yards instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ton Register Input -->
                <div class="space-y-4">
                    <label for="tonRegister" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-anchor text-blue-600 mr-2"></i>
                        Ton Register
                    </label>
                    <input type="number" id="tonRegister" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                           placeholder="Enter ton register value" 
                           oninput="convertToCubicYards()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1 t reg</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">5 t reg</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">10 t reg</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">100 t reg</button>
                    </div>
                </div>

                <!-- Cubic Yards Output -->
                <div class="space-y-4">
                    <label for="cubicYards" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-cube text-indigo-600 mr-2"></i>
                        Cubic Yards
                    </label>
                    <input type="number" id="cubicYards" 
                           class="w-full px-4 py-3 border-2 border-indigo-300 rounded-lg focus:border-indigo-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in cubic yards" 
                           oninput="convertToTonRegister()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> cubic yards = ton register × 3.7037</p>
                        <p><strong>Note:</strong> 1 register ton = 100 cubic feet = 3.7037 cubic yards</p>
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
            <!-- About Ton Register -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-anchor text-blue-600 mr-2"></i>
                    About Ton Register
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The register ton is a unit of ship capacity measurement equal to 100 cubic feet.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in maritime shipping industry</li>
                        <li>Measures ship cargo capacity</li>
                        <li>1 register ton = 100 cubic feet</li>
                        <li>Also called "measurement ton"</li>
                    </ul>
                </div>
            </div>

            <!-- About Cubic Yards -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cube text-indigo-600 mr-2"></i>
                    About Cubic Yards
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The cubic yard is a unit of volume measurement in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used in construction and landscaping</li>
                        <li>1 cubic yard = 27 cubic feet</li>
                        <li>Common for measuring concrete, soil, mulch</li>
                        <li>Symbol: yd³</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">Ton Register</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cubic Yards</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 t reg</td>
                            <td class="border border-gray-300 px-4 py-2">3.7037 yd³</td>
                            <td class="border border-gray-300 px-4 py-2">Small cargo compartment</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 t reg</td>
                            <td class="border border-gray-300 px-4 py-2">37.037 yd³</td>
                            <td class="border border-gray-300 px-4 py-2">Container section</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">50 t reg</td>
                            <td class="border border-gray-300 px-4 py-2">185.185 yd³</td>
                            <td class="border border-gray-300 px-4 py-2">Large cargo hold</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 t reg</td>
                            <td class="border border-gray-300 px-4 py-2">370.37 yd³</td>
                            <td class="border border-gray-300 px-4 py-2">Ship cargo capacity</td>
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
                        <p>Cubic Yards = Ton Register × 3.7037037</p>
                        <p>Ton Register = Cubic Yards ÷ 3.7037037</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 register ton = 100 cubic feet</li>
                        <li>• 1 cubic yard = 27 cubic feet</li>
                        <li>• Used primarily in maritime industry</li>
                        <li>• Different from metric ton (weight)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCubicYards() {
    const tonRegister = parseFloat(document.getElementById('tonRegister').value);
    if (!isNaN(tonRegister)) {
        const cubicYards = tonRegister * 3.7037037037;
        document.getElementById('cubicYards').value = cubicYards.toFixed(8);
    } else {
        document.getElementById('cubicYards').value = '';
    }
}

function convertToTonRegister() {
    const cubicYards = parseFloat(document.getElementById('cubicYards').value);
    if (!isNaN(cubicYards)) {
        const tonRegister = cubicYards / 3.7037037037;
        document.getElementById('tonRegister').value = tonRegister.toFixed(8);
    } else {
        document.getElementById('tonRegister').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('tonRegister').value = value;
    convertToCubicYards();
}

function swapValues() {
    const tonRegister = document.getElementById('tonRegister').value;
    const cubicYards = document.getElementById('cubicYards').value;
    
    document.getElementById('tonRegister').value = cubicYards;
    document.getElementById('cubicYards').value = tonRegister;
    
    if (cubicYards) {
        convertToCubicYards();
    }
}

function clearInputs() {
    document.getElementById('tonRegister').value = '';
    document.getElementById('cubicYards').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
