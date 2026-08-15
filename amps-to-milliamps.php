<?php include 'header.php';?>


    <title>Amperes to Milliamperes Converter 2026 - Current Conversion Calculator</title>
    <meta name="description" content="Convert amperes to milliamperes with our free 2026 online calculator. Perfect for electrical engineering and electronics calculations.">
    <meta name="keywords" content="amperes to milliamperes converter 2026, amp to mA, electrical current calculator, electronics converter 2026">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-cyan-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-bolt text-blue-600 mr-3"></i>
                Amperes to Milliamperes Converter
            </h1>
            <p class="text-lg text-gray-600">Convert amperes to milliamperes for electrical calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Amperes Input -->
                <div class="space-y-4">
                    <label for="amperes" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-bolt text-blue-600 mr-2"></i>
                        Amperes (A)
                    </label>
                    <input type="number" id="amperes" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                           placeholder="Enter amperes value" 
                           oninput="convertToMilliamperes()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(0.001)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">0.001 A</button>
                        <button onclick="setAndConvert(0.01)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">0.01 A</button>
                        <button onclick="setAndConvert(0.1)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">0.1 A</button>
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1 A</button>
                    </div>
                </div>

                <!-- Milliamperes Output -->
                <div class="space-y-4">
                    <label for="milliamperes" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-plug text-cyan-600 mr-2"></i>
                        Milliamperes (mA)
                    </label>
                    <input type="number" id="milliamperes" 
                           class="w-full px-4 py-3 border-2 border-cyan-300 rounded-lg focus:border-cyan-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in milliamperes" 
                           oninput="convertToAmperes()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> milliamperes = amperes × 1,000</p>
                        <p><strong>Note:</strong> 1 ampere = 1,000 milliamperes</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-cyan-500 text-white rounded-lg hover:bg-cyan-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Amperes -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-bolt text-blue-600 mr-2"></i>
                    About Amperes
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The ampere is the SI base unit of electric current.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Named after André-Marie Ampère</li>
                        <li>Measures electric current flow</li>
                        <li>Symbol: A or amp</li>
                        <li>Base unit in electrical calculations</li>
                    </ul>
                </div>
            </div>

            <!-- About Milliamperes -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-plug text-cyan-600 mr-2"></i>
                    About Milliamperes
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The milliampere is a smaller unit for measuring electric current.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common in electronics</li>
                        <li>1 milliampere = 0.001 amperes</li>
                        <li>Used for small currents</li>
                        <li>Symbol: mA</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Current Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Amperes</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliamperes</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.001 A</td>
                            <td class="border border-gray-300 px-4 py-2">1 mA</td>
                            <td class="border border-gray-300 px-4 py-2">Small LED</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.02 A</td>
                            <td class="border border-gray-300 px-4 py-2">20 mA</td>
                            <td class="border border-gray-300 px-4 py-2">Standard LED</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.1 A</td>
                            <td class="border border-gray-300 px-4 py-2">100 mA</td>
                            <td class="border border-gray-300 px-4 py-2">Electronic circuit</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 A</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 mA</td>
                            <td class="border border-gray-300 px-4 py-2">Small motor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Electrical Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Milliamperes = Amperes × 1,000</p>
                        <p>Amperes = Milliamperes ÷ 1,000</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Safety Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1-5 mA: Barely perceptible</li>
                        <li>• 5-10 mA: Painful sensation</li>
                        <li>• >10 mA: Muscular control lost</li>
                        <li>• Always follow safety protocols</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMilliamperes() {
    const amperes = parseFloat(document.getElementById('amperes').value);
    if (!isNaN(amperes)) {
        const milliamperes = amperes * 1000;
        document.getElementById('milliamperes').value = milliamperes.toFixed(3);
    } else {
        document.getElementById('milliamperes').value = '';
    }
}

function convertToAmperes() {
    const milliamperes = parseFloat(document.getElementById('milliamperes').value);
    if (!isNaN(milliamperes)) {
        const amperes = milliamperes / 1000;
        document.getElementById('amperes').value = amperes.toFixed(6);
    } else {
        document.getElementById('amperes').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('amperes').value = value;
    convertToMilliamperes();
}

function swapValues() {
    const amperes = document.getElementById('amperes').value;
    const milliamperes = document.getElementById('milliamperes').value;
    
    document.getElementById('amperes').value = milliamperes;
    document.getElementById('milliamperes').value = amperes;
    
    if (milliamperes) {
        convertToMilliamperes();
    }
}

function clearInputs() {
    document.getElementById('amperes').value = '';
    document.getElementById('milliamperes').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
