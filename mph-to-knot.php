<?php include 'header.php';?>


    <title>MPH to Knot Converter 2026 - Speed Conversion Calculator</title>
    <meta name="description" content="Convert miles per hour to knots with our free 2026 online calculator. Perfect for aviation, maritime, and weather calculations.">
    <meta name="keywords" content="mph to knot converter 2026, speed converter, aviation calculator, maritime navigation 2026">

<div class="min-h-screen bg-gradient-to-br from-sky-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-plane text-sky-600 mr-3"></i>
                MPH to Knot Converter
            </h1>
            <p class="text-lg text-gray-600">Convert miles per hour to knots for aviation and maritime navigation</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- MPH Input -->
                <div class="space-y-4">
                    <label for="mph" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-car text-sky-600 mr-2"></i>
                        Miles per Hour (mph)
                    </label>
                    <input type="number" id="mph" 
                           class="w-full px-4 py-3 border-2 border-sky-300 rounded-lg focus:border-sky-500 focus:outline-none text-lg"
                           placeholder="Enter mph value" 
                           oninput="convertToKnots()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm hover:bg-sky-200">10 mph</button>
                        <button onclick="setAndConvert(30)" class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm hover:bg-sky-200">30 mph</button>
                        <button onclick="setAndConvert(60)" class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm hover:bg-sky-200">60 mph</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-sky-100 text-sky-800 rounded-full text-sm hover:bg-sky-200">100 mph</button>
                    </div>
                </div>

                <!-- Knots Output -->
                <div class="space-y-4">
                    <label for="knots" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-anchor text-blue-600 mr-2"></i>
                        Knots (kn)
                    </label>
                    <input type="number" id="knots" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in knots" 
                           oninput="convertToMPH()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> knots = mph × 0.868976</p>
                        <p><strong>Note:</strong> 1 mph = 0.868976 knots</p>
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
            <!-- About MPH -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-car text-sky-600 mr-2"></i>
                    About Miles per Hour
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>Miles per hour is a unit of speed commonly used in the United States.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard for road speeds in US</li>
                        <li>Used for vehicle speedometers</li>
                        <li>1 mph = 1.609344 km/h</li>
                        <li>Symbol: mph or mi/h</li>
                    </ul>
                </div>
            </div>

            <!-- About Knots -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-anchor text-blue-600 mr-2"></i>
                    About Knots
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The knot is a unit of speed used in aviation and maritime navigation.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard for ships and aircraft</li>
                        <li>1 knot = 1 nautical mile per hour</li>
                        <li>1 knot = 1.852 km/h</li>
                        <li>Symbol: kn or kt</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Speed Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">MPH</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Knots</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Context</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 mph</td>
                            <td class="border border-gray-300 px-4 py-2">8.69 kn</td>
                            <td class="border border-gray-300 px-4 py-2">Light breeze</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">30 mph</td>
                            <td class="border border-gray-300 px-4 py-2">26.07 kn</td>
                            <td class="border border-gray-300 px-4 py-2">City driving</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">60 mph</td>
                            <td class="border border-gray-300 px-4 py-2">52.14 kn</td>
                            <td class="border border-gray-300 px-4 py-2">Highway speed</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">500 mph</td>
                            <td class="border border-gray-300 px-4 py-2">434.49 kn</td>
                            <td class="border border-gray-300 px-4 py-2">Aircraft cruise</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Navigation Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Knots = MPH × 0.868976</p>
                        <p>MPH = Knots ÷ 0.868976</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Aviation flight planning</li>
                        <li>• Maritime navigation</li>
                        <li>• Weather reporting</li>
                        <li>• Military operations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToKnots() {
    const mph = parseFloat(document.getElementById('mph').value);
    if (!isNaN(mph)) {
        const knots = mph * 0.868976;
        document.getElementById('knots').value = knots.toFixed(4);
    } else {
        document.getElementById('knots').value = '';
    }
}

function convertToMPH() {
    const knots = parseFloat(document.getElementById('knots').value);
    if (!isNaN(knots)) {
        const mph = knots / 0.868976;
        document.getElementById('mph').value = mph.toFixed(4);
    } else {
        document.getElementById('mph').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('mph').value = value;
    convertToKnots();
}

function swapValues() {
    const mph = document.getElementById('mph').value;
    const knots = document.getElementById('knots').value;
    
    document.getElementById('mph').value = knots;
    document.getElementById('knots').value = mph;
    
    if (knots) {
        convertToKnots();
    }
}

function clearInputs() {
    document.getElementById('mph').value = '';
    document.getElementById('knots').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
