<?php include 'header.php';?>


    <title>Kilometer to Foot Converter 2026 - Distance Conversion Calculator</title>
    <meta name="description" content="Convert kilometers to feet with our free 2026 online calculator. Perfect for running, hiking, and distance measurements.">
    <meta name="keywords" content="kilometer to foot converter 2026, distance converter, running calculator, hiking measurements 2026">

<div class="min-h-screen bg-gradient-to-br from-lime-50 to-green-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-route text-lime-600 mr-3"></i>
                Kilometer to Foot Converter
            </h1>
            <p class="text-lg text-gray-600">Convert kilometers to feet for distance and running calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilometers Input -->
                <div class="space-y-4">
                    <label for="kilometers" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-route text-lime-600 mr-2"></i>
                        Kilometers (km)
                    </label>
                    <input type="number" id="kilometers" 
                           class="w-full px-4 py-3 border-2 border-lime-300 rounded-lg focus:border-lime-500 focus:outline-none text-lg"
                           placeholder="Enter kilometers value" 
                           oninput="convertToFeet()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm hover:bg-lime-200">1 km</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm hover:bg-lime-200">5 km</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm hover:bg-lime-200">10 km</button>
                        <button onclick="setAndConvert(42.195)" class="px-3 py-1 bg-lime-100 text-lime-800 rounded-full text-sm hover:bg-lime-200">Marathon</button>
                    </div>
                </div>

                <!-- Feet Output -->
                <div class="space-y-4">
                    <label for="feet" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-walking text-green-600 mr-2"></i>
                        Feet (ft)
                    </label>
                    <input type="number" id="feet" 
                           class="w-full px-4 py-3 border-2 border-green-300 rounded-lg focus:border-green-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in feet" 
                           oninput="convertToKilometers()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> feet = kilometers × 3,280.84</p>
                        <p><strong>Note:</strong> 1 kilometer = 3,280.84 feet</p>
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
            <!-- About Kilometers -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-route text-lime-600 mr-2"></i>
                    About Kilometers
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The kilometer is a metric unit of length equal to 1,000 meters.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Standard for long distances</li>
                        <li>Used worldwide in most countries</li>
                        <li>1 kilometer = 1,000 meters</li>
                        <li>Symbol: km</li>
                    </ul>
                </div>
            </div>

            <!-- About Feet -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-walking text-green-600 mr-2"></i>
                    About Feet
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The foot is an imperial unit of length commonly used in the United States.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common for height and short distances</li>
                        <li>1 foot = 12 inches</li>
                        <li>1 foot = 0.3048 meters</li>
                        <li>Symbol: ft or '</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Distance Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Kilometers</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Feet</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Reference</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 km</td>
                            <td class="border border-gray-300 px-4 py-2">3,281 ft</td>
                            <td class="border border-gray-300 px-4 py-2">Standard run</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">5 km</td>
                            <td class="border border-gray-300 px-4 py-2">16,404 ft</td>
                            <td class="border border-gray-300 px-4 py-2">5K race</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 km</td>
                            <td class="border border-gray-300 px-4 py-2">32,808 ft</td>
                            <td class="border border-gray-300 px-4 py-2">10K race</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">42.195 km</td>
                            <td class="border border-gray-300 px-4 py-2">138,435 ft</td>
                            <td class="border border-gray-300 px-4 py-2">Marathon</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Running Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Feet = Kilometers × 3,280.84</p>
                        <p>Kilometers = Feet ÷ 3,280.84</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Running and marathon distances</li>
                        <li>• Hiking trail measurements</li>
                        <li>• Travel distance calculations</li>
                        <li>• Athletic track conversions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToFeet() {
    const kilometers = parseFloat(document.getElementById('kilometers').value);
    if (!isNaN(kilometers)) {
        const feet = kilometers * 3280.84;
        document.getElementById('feet').value = feet.toFixed(2);
    } else {
        document.getElementById('feet').value = '';
    }
}

function convertToKilometers() {
    const feet = parseFloat(document.getElementById('feet').value);
    if (!isNaN(feet)) {
        const kilometers = feet / 3280.84;
        document.getElementById('kilometers').value = kilometers.toFixed(6);
    } else {
        document.getElementById('kilometers').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('kilometers').value = value;
    convertToFeet();
}

function swapValues() {
    const kilometers = document.getElementById('kilometers').value;
    const feet = document.getElementById('feet').value;
    
    document.getElementById('kilometers').value = feet;
    document.getElementById('feet').value = kilometers;
    
    if (feet) {
        convertToFeet();
    }
}

function clearInputs() {
    document.getElementById('kilometers').value = '';
    document.getElementById('feet').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
