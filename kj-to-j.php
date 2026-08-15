<?php include 'header.php';?>


    <title>Kilojoule to Joule Converter 2026 - Energy Conversion Calculator</title>
    <meta name="description" content="Convert kilojoules to joules with our free 2026 online calculator. Perfect for physics, nutrition, and energy calculations.">
    <meta name="keywords" content="kilojoule to joule converter 2026, energy converter, physics calculator, nutrition energy 2026">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-teal-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-bolt text-emerald-600 mr-3"></i>
                Kilojoule to Joule Converter
            </h1>
            <p class="text-lg text-gray-600">Convert kilojoules to joules for energy and nutrition calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilojoules Input -->
                <div class="space-y-4">
                    <label for="kilojoules" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-bolt text-emerald-600 mr-2"></i>
                        Kilojoules (kJ)
                    </label>
                    <input type="number" id="kilojoules" 
                           class="w-full px-4 py-3 border-2 border-emerald-300 rounded-lg focus:border-emerald-500 focus:outline-none text-lg"
                           placeholder="Enter kilojoules value" 
                           oninput="convertToJoules()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm hover:bg-emerald-200">1 kJ</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm hover:bg-emerald-200">5 kJ</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm hover:bg-emerald-200">10 kJ</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-sm hover:bg-emerald-200">100 kJ</button>
                    </div>
                </div>

                <!-- Joules Output -->
                <div class="space-y-4">
                    <label for="joules" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-fire text-teal-600 mr-2"></i>
                        Joules (J)
                    </label>
                    <input type="number" id="joules" 
                           class="w-full px-4 py-3 border-2 border-teal-300 rounded-lg focus:border-teal-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in joules" 
                           oninput="convertToKilojoules()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> joules = kilojoules × 1,000</p>
                        <p><strong>Note:</strong> 1 kilojoule = 1,000 joules</p>
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
            <!-- About Kilojoules -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-bolt text-emerald-600 mr-2"></i>
                    About Kilojoules
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The kilojoule is a unit of energy commonly used in nutrition labeling.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used on food nutrition labels</li>
                        <li>1 kilojoule = 1,000 joules</li>
                        <li>Common in metric countries</li>
                        <li>Symbol: kJ</li>
                    </ul>
                </div>
            </div>

            <!-- About Joules -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-fire text-teal-600 mr-2"></i>
                    About Joules
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The joule is the SI unit of energy named after James Prescott Joule.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>SI base unit of energy</li>
                        <li>Used in physics calculations</li>
                        <li>1 joule = 1 newton-meter</li>
                        <li>Symbol: J</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Energy Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Kilojoules</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Joules</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Context</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 kJ</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 J</td>
                            <td class="border border-gray-300 px-4 py-2">Small snack</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 kJ</td>
                            <td class="border border-gray-300 px-4 py-2">10,000 J</td>
                            <td class="border border-gray-300 px-4 py-2">Light exercise</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 kJ</td>
                            <td class="border border-gray-300 px-4 py-2">100,000 J</td>
                            <td class="border border-gray-300 px-4 py-2">Small meal</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2000 kJ</td>
                            <td class="border border-gray-300 px-4 py-2">2,000,000 J</td>
                            <td class="border border-gray-300 px-4 py-2">Daily energy intake</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Energy Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Joules = Kilojoules × 1,000</p>
                        <p>Kilojoules = Joules ÷ 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Nutrition and food labeling</li>
                        <li>• Physics and engineering</li>
                        <li>• Exercise energy calculations</li>
                        <li>• Thermodynamics studies</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToJoules() {
    const kilojoules = parseFloat(document.getElementById('kilojoules').value);
    if (!isNaN(kilojoules)) {
        const joules = kilojoules * 1000;
        document.getElementById('joules').value = joules.toFixed(2);
    } else {
        document.getElementById('joules').value = '';
    }
}

function convertToKilojoules() {
    const joules = parseFloat(document.getElementById('joules').value);
    if (!isNaN(joules)) {
        const kilojoules = joules / 1000;
        document.getElementById('kilojoules').value = kilojoules.toFixed(6);
    } else {
        document.getElementById('kilojoules').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('kilojoules').value = value;
    convertToJoules();
}

function swapValues() {
    const kilojoules = document.getElementById('kilojoules').value;
    const joules = document.getElementById('joules').value;
    
    document.getElementById('kilojoules').value = joules;
    document.getElementById('joules').value = kilojoules;
    
    if (joules) {
        convertToJoules();
    }
}

function clearInputs() {
    document.getElementById('kilojoules').value = '';
    document.getElementById('joules').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
