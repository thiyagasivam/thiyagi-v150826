<?php include 'header.php';?>


    <title>Kilogram to Metric Ton Converter 2026 - Mass Conversion Calculator</title>
    <meta name="description" content="Convert kilograms to metric tons with our free 2026 online calculator. Perfect for shipping, construction, and industrial weight calculations.">
    <meta name="keywords" content="kilogram to metric ton converter 2026, kg to tonne, mass converter, industrial weight calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-slate-50 to-gray-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-truck text-slate-600 mr-3"></i>
                Kilogram to Metric Ton Converter
            </h1>
            <p class="text-lg text-gray-600">Convert kilograms to metric tons for industrial and shipping calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilograms Input -->
                <div class="space-y-4">
                    <label for="kilograms" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-weight text-slate-600 mr-2"></i>
                        Kilograms (kg)
                    </label>
                    <input type="number" id="kilograms" 
                           class="w-full px-4 py-3 border-2 border-slate-300 rounded-lg focus:border-slate-500 focus:outline-none text-lg"
                           placeholder="Enter kilograms value" 
                           oninput="convertToMetricTons()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm hover:bg-slate-200">100 kg</button>
                        <button onclick="setAndConvert(500)" class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm hover:bg-slate-200">500 kg</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm hover:bg-slate-200">1,000 kg</button>
                        <button onclick="setAndConvert(5000)" class="px-3 py-1 bg-slate-100 text-slate-800 rounded-full text-sm hover:bg-slate-200">5,000 kg</button>
                    </div>
                </div>

                <!-- Metric Tons Output -->
                <div class="space-y-4">
                    <label for="metricTons" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-truck text-gray-600 mr-2"></i>
                        Metric Tons (t)
                    </label>
                    <input type="number" id="metricTons" 
                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-gray-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in metric tons" 
                           oninput="convertToKilograms()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> metric tons = kilograms ÷ 1,000</p>
                        <p><strong>Note:</strong> 1 metric ton = 1,000 kilograms</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Kilograms -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-slate-600 mr-2"></i>
                    About Kilograms
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The kilogram is the SI base unit of mass.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>SI base unit of mass</li>
                        <li>Common for everyday weights</li>
                        <li>1 kilogram = 1,000 grams</li>
                        <li>Symbol: kg</li>
                    </ul>
                </div>
            </div>

            <!-- About Metric Tons -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-truck text-gray-600 mr-2"></i>
                    About Metric Tons
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The metric ton is a unit of mass equal to 1,000 kilograms.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used for large mass measurements</li>
                        <li>Common in shipping and industry</li>
                        <li>1 metric ton = 1,000 kg</li>
                        <li>Symbol: t or tonne</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Weight Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Kilograms</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Metric Tons</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Example</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">500 kg</td>
                            <td class="border border-gray-300 px-4 py-2">0.5 t</td>
                            <td class="border border-gray-300 px-4 py-2">Small car</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 kg</td>
                            <td class="border border-gray-300 px-4 py-2">1 t</td>
                            <td class="border border-gray-300 px-4 py-2">Compact car</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">2,000 kg</td>
                            <td class="border border-gray-300 px-4 py-2">2 t</td>
                            <td class="border border-gray-300 px-4 py-2">Large SUV</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10,000 kg</td>
                            <td class="border border-gray-300 px-4 py-2">10 t</td>
                            <td class="border border-gray-300 px-4 py-2">Small truck</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Industrial Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Metric Tons = Kilograms ÷ 1,000</p>
                        <p>Kilograms = Metric Tons × 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Shipping and cargo calculations</li>
                        <li>• Construction material weights</li>
                        <li>• Industrial production volumes</li>
                        <li>• Vehicle and machinery weights</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMetricTons() {
    const kilograms = parseFloat(document.getElementById('kilograms').value);
    if (!isNaN(kilograms)) {
        const metricTons = kilograms / 1000;
        document.getElementById('metricTons').value = metricTons.toFixed(6);
    } else {
        document.getElementById('metricTons').value = '';
    }
}

function convertToKilograms() {
    const metricTons = parseFloat(document.getElementById('metricTons').value);
    if (!isNaN(metricTons)) {
        const kilograms = metricTons * 1000;
        document.getElementById('kilograms').value = kilograms.toFixed(2);
    } else {
        document.getElementById('kilograms').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('kilograms').value = value;
    convertToMetricTons();
}

function swapValues() {
    const kilograms = document.getElementById('kilograms').value;
    const metricTons = document.getElementById('metricTons').value;
    
    document.getElementById('kilograms').value = metricTons;
    document.getElementById('metricTons').value = kilograms;
    
    if (metricTons) {
        convertToMetricTons();
    }
}

function clearInputs() {
    document.getElementById('kilograms').value = '';
    document.getElementById('metricTons').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
