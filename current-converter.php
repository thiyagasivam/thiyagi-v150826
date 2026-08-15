<?php include 'header.php';?>


    <title>Current Converter 2026 - Electrical Current Unit Calculator</title>
    <meta name="description" content="Convert electrical current units with our free 2026 online calculator. Convert between amperes, milliamperes, microamperes and more.">
    <meta name="keywords" content="current converter 2026, ampere converter, electrical current calculator, amp to milliamp converter 2026">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Electrical Current Converter
            </h1>
            <p class="text-lg text-gray-600">Convert between different electrical current units</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- From Current -->
                <div class="space-y-4">
                    <label for="fromValue" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-bolt text-yellow-600 mr-2"></i>
                        From
                    </label>
                    <input type="number" id="fromValue" 
                           class="w-full px-4 py-3 border-2 border-yellow-300 rounded-lg focus:border-yellow-500 focus:outline-none text-lg"
                           placeholder="Enter value" 
                           oninput="convertCurrent()">
                    
                    <select id="fromUnit" class="w-full px-4 py-3 border-2 border-yellow-300 rounded-lg focus:border-yellow-500 focus:outline-none text-lg" onchange="convertCurrent()">
                        <option value="A">Amperes (A)</option>
                        <option value="mA">Milliamperes (mA)</option>
                        <option value="uA">Microamperes (μA)</option>
                        <option value="kA">Kiloamperes (kA)</option>
                        <option value="nA">Nanoamperes (nA)</option>
                        <option value="pA">Picoamperes (pA)</option>
                    </select>

                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm hover:bg-yellow-200">1</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm hover:bg-yellow-200">10</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm hover:bg-yellow-200">100</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm hover:bg-yellow-200">1000</button>
                    </div>
                </div>

                <!-- To Current -->
                <div class="space-y-4">
                    <label for="toValue" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-plug text-amber-600 mr-2"></i>
                        To
                    </label>
                    <input type="number" id="toValue" 
                           class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:border-amber-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result" readonly>
                    
                    <select id="toUnit" class="w-full px-4 py-3 border-2 border-amber-300 rounded-lg focus:border-amber-500 focus:outline-none text-lg" onchange="convertCurrent()">
                        <option value="A">Amperes (A)</option>
                        <option value="mA" selected>Milliamperes (mA)</option>
                        <option value="uA">Microamperes (μA)</option>
                        <option value="kA">Kiloamperes (kA)</option>
                        <option value="nA">Nanoamperes (nA)</option>
                        <option value="pA">Picoamperes (pA)</option>
                    </select>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Current Unit:</strong> Ampere is the SI base unit</p>
                        <p><strong>Symbol:</strong> A</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapUnits()" class="px-6 py-3 bg-amber-500 text-white rounded-lg hover:bg-amber-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Units
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Current -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-bolt text-yellow-600 mr-2"></i>
                    About Electrical Current
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>Electrical current is the flow of electric charge through a conductor.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Measured in amperes (A)</li>
                        <li>SI base unit of electric current</li>
                        <li>Named after André-Marie Ampère</li>
                        <li>1 ampere = 1 coulomb/second</li>
                    </ul>
                </div>
            </div>

            <!-- Current Units -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-plug text-amber-600 mr-2"></i>
                    Common Current Units
                </h2>
                <div class="text-gray-600 space-y-3">
                    <ul class="list-disc list-inside space-y-1">
                        <li><strong>Kiloampere (kA):</strong> 1,000 A</li>
                        <li><strong>Ampere (A):</strong> Base unit</li>
                        <li><strong>Milliampere (mA):</strong> 0.001 A</li>
                        <li><strong>Microampere (μA):</strong> 0.000001 A</li>
                        <li><strong>Nanoampere (nA):</strong> 10⁻⁹ A</li>
                        <li><strong>Picoampere (pA):</strong> 10⁻¹² A</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">From</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">To</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 A</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 mA</td>
                            <td class="border border-gray-300 px-4 py-2">Household circuits</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 mA</td>
                            <td class="border border-gray-300 px-4 py-2">100,000 μA</td>
                            <td class="border border-gray-300 px-4 py-2">LED circuits</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">50 μA</td>
                            <td class="border border-gray-300 px-4 py-2">50,000 nA</td>
                            <td class="border border-gray-300 px-4 py-2">Microelectronics</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 kA</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 A</td>
                            <td class="border border-gray-300 px-4 py-2">Industrial motors</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formulas & Electrical Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Conversion Factors</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>1 kA = 1,000 A</p>
                        <p>1 A = 1,000 mA</p>
                        <p>1 mA = 1,000 μA</p>
                        <p>1 μA = 1,000 nA</p>
                        <p>1 nA = 1,000 pA</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Electrical Safety</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1-5 mA: Barely perceptible</li>
                        <li>• 5-10 mA: Painful shock</li>
                        <li>• 10-20 mA: Muscular control lost</li>
                        <li>• Always follow safety protocols</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Conversion factors to amperes
const currentFactors = {
    'A': 1,
    'mA': 0.001,
    'uA': 0.000001,
    'kA': 1000,
    'nA': 0.000000001,
    'pA': 0.000000000001
};

function convertCurrent() {
    const fromValue = parseFloat(document.getElementById('fromValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    if (!isNaN(fromValue)) {
        // Convert to amperes first, then to target unit
        const amperes = fromValue * currentFactors[fromUnit];
        const result = amperes / currentFactors[toUnit];
        
        // Format result based on magnitude
        let formattedResult;
        if (result >= 1000000) {
            formattedResult = result.toExponential(4);
        } else if (result >= 1) {
            formattedResult = result.toFixed(6);
        } else {
            formattedResult = result.toExponential(4);
        }
        
        document.getElementById('toValue').value = formattedResult;
    } else {
        document.getElementById('toValue').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('fromValue').value = value;
    convertCurrent();
}

function swapUnits() {
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    document.getElementById('fromUnit').value = toUnit;
    document.getElementById('toUnit').value = fromUnit;
    
    convertCurrent();
}

function clearInputs() {
    document.getElementById('fromValue').value = '';
    document.getElementById('toValue').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
