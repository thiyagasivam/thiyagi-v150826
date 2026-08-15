    <title>Volume Converter - Universal Volume Unit Conversion Calculator</title>
    <meta name="description" content="Convert between all volume units including liters, gallons, cubic meters, cubic feet, milliliters, and more with our comprehensive volume converter.">
    <meta name="keywords" content="volume converter, unit converter, liters to gallons, cubic meters conversion, volume calculator">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-cyan-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Universal Volume Converter</h1>
            <p class="text-lg text-gray-600">Convert between all volume units instantly</p>
        </div>

        <!-- Main Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <!-- From Unit -->
                <div class="space-y-2">
                    <label for="fromValue" class="block text-sm font-medium text-gray-700">From</label>
                    <div class="flex gap-2">
                        <input
                            type="number"
                            id="fromValue"
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter value"
                            step="any"
                            oninput="convertVolume()"
                        >
                        <select
                            id="fromUnit"
                            class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            onchange="convertVolume()"
                        >
                            <optgroup label="Metric">
                                <option value="ml">Milliliter (ml)</option>
                                <option value="l" selected>Liter (L)</option>
                                <option value="m3">Cubic Meter (m³)</option>
                                <option value="cm3">Cubic Centimeter (cm³)</option>
                            </optgroup>
                            <optgroup label="Imperial (US)">
                                <option value="fl_oz_us">Fluid Ounce (US)</option>
                                <option value="cup_us">Cup (US)</option>
                                <option value="pint_us">Pint (US)</option>
                                <option value="quart_us">Quart (US)</option>
                                <option value="gallon_us">Gallon (US)</option>
                                <option value="in3">Cubic Inch</option>
                                <option value="ft3">Cubic Foot</option>
                                <option value="yd3">Cubic Yard</option>
                            </optgroup>
                            <optgroup label="Imperial (UK)">
                                <option value="fl_oz_uk">Fluid Ounce (UK)</option>
                                <option value="pint_uk">Pint (UK)</option>
                                <option value="gallon_uk">Gallon (UK)</option>
                            </optgroup>
                            <optgroup label="Cooking">
                                <option value="tsp">Teaspoon</option>
                                <option value="tbsp">Tablespoon</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <!-- To Unit -->
                <div class="space-y-2">
                    <label for="toValue" class="block text-sm font-medium text-gray-700">To</label>
                    <div class="flex gap-2">
                        <input
                            type="number"
                            id="toValue"
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                            placeholder="Result"
                            readonly
                        >
                        <select
                            id="toUnit"
                            class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                            onchange="convertVolume()"
                        >
                            <optgroup label="Metric">
                                <option value="ml">Milliliter (ml)</option>
                                <option value="l">Liter (L)</option>
                                <option value="m3">Cubic Meter (m³)</option>
                                <option value="cm3">Cubic Centimeter (cm³)</option>
                            </optgroup>
                            <optgroup label="Imperial (US)">
                                <option value="fl_oz_us">Fluid Ounce (US)</option>
                                <option value="cup_us">Cup (US)</option>
                                <option value="pint_us">Pint (US)</option>
                                <option value="quart_us">Quart (US)</option>
                                <option value="gallon_us" selected>Gallon (US)</option>
                                <option value="in3">Cubic Inch</option>
                                <option value="ft3">Cubic Foot</option>
                                <option value="yd3">Cubic Yard</option>
                            </optgroup>
                            <optgroup label="Imperial (UK)">
                                <option value="fl_oz_uk">Fluid Ounce (UK)</option>
                                <option value="pint_uk">Pint (UK)</option>
                                <option value="gallon_uk">Gallon (UK)</option>
                            </optgroup>
                            <optgroup label="Cooking">
                                <option value="tsp">Teaspoon</option>
                                <option value="tbsp">Tablespoon</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-center gap-4">
                <button
                    onclick="swapUnits()"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    ⇄ Swap
                </button>
                <button
                    onclick="clearAll()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversions -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Common Metric -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Common Metric</h3>
                <div class="space-y-2">
                    <button onclick="quickConvert(1, 'l', 'gallon_us')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 L = 0.26 gal (US)</button>
                    <button onclick="quickConvert(1, 'm3', 'l')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 m³ = 1000 L</button>
                    <button onclick="quickConvert(1000, 'ml', 'l')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1000 ml = 1 L</button>
                    <button onclick="quickConvert(1, 'l', 'cm3')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 L = 1000 cm³</button>
                </div>
            </div>

            <!-- Common Imperial -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Common Imperial</h3>
                <div class="space-y-2">
                    <button onclick="quickConvert(1, 'gallon_us', 'l')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 gal (US) = 3.79 L</button>
                    <button onclick="quickConvert(1, 'ft3', 'l')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 ft³ = 28.3 L</button>
                    <button onclick="quickConvert(1, 'gallon_us', 'quart_us')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 gal = 4 qt (US)</button>
                    <button onclick="quickConvert(1, 'cup_us', 'ml')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 cup = 237 ml</button>
                </div>
            </div>

            <!-- Cooking Units -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Cooking Units</h3>
                <div class="space-y-2">
                    <button onclick="quickConvert(1, 'tbsp', 'ml')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 tbsp = 14.8 ml</button>
                    <button onclick="quickConvert(1, 'tsp', 'ml')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 tsp = 4.9 ml</button>
                    <button onclick="quickConvert(3, 'tsp', 'tbsp')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">3 tsp = 1 tbsp</button>
                    <button onclick="quickConvert(16, 'tbsp', 'cup_us')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">16 tbsp = 1 cup</button>
                </div>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Volume Units and Conversions</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Metric System</h3>
                    <ul class="list-disc pl-6 space-y-1 text-gray-600">
                        <li><strong>Milliliter (ml):</strong> 10⁻³ liters</li>
                        <li><strong>Liter (L):</strong> Base unit</li>
                        <li><strong>Cubic Meter (m³):</strong> 1,000 liters</li>
                        <li><strong>Cubic cm (cm³):</strong> 1 ml</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">US Imperial</h3>
                    <ul class="list-disc pl-6 space-y-1 text-gray-600">
                        <li><strong>Teaspoon:</strong> 4.93 ml</li>
                        <li><strong>Tablespoon:</strong> 14.79 ml</li>
                        <li><strong>Cup:</strong> 236.59 ml</li>
                        <li><strong>Gallon:</strong> 3.785 liters</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Applications</h3>
                    <ul class="list-disc pl-6 space-y-1 text-gray-600">
                        <li>Cooking and baking</li>
                        <li>Fuel consumption</li>
                        <li>Chemical mixing</li>
                        <li>Construction materials</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Conversion factors to liters
const volumeFactors = {
    'ml': 0.001,
    'l': 1,
    'm3': 1000,
    'cm3': 0.001,
    'fl_oz_us': 0.0295735,
    'cup_us': 0.236588,
    'pint_us': 0.473176,
    'quart_us': 0.946353,
    'gallon_us': 3.78541,
    'in3': 0.0163871,
    'ft3': 28.3168,
    'yd3': 764.555,
    'fl_oz_uk': 0.0284131,
    'pint_uk': 0.568261,
    'gallon_uk': 4.54609,
    'tsp': 0.00492892,
    'tbsp': 0.0147868
};

function convertVolume() {
    const fromValue = parseFloat(document.getElementById('fromValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    if (!isNaN(fromValue)) {
        // Convert to liters first, then to target unit
        const liters = fromValue * volumeFactors[fromUnit];
        const result = liters / volumeFactors[toUnit];
        
        // Format result appropriately
        let formattedResult;
        if (result >= 1000000 || result <= 0.000001) {
            formattedResult = result.toExponential(6);
        } else {
            formattedResult = result.toFixed(8).replace(/\.?0+$/, '');
        }
        
        document.getElementById('toValue').value = formattedResult;
    } else {
        document.getElementById('toValue').value = '';
    }
}

function swapUnits() {
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    const toValue = document.getElementById('toValue').value;
    
    document.getElementById('fromUnit').value = toUnit;
    document.getElementById('toUnit').value = fromUnit;
    document.getElementById('fromValue').value = toValue;
    document.getElementById('toValue').value = '';
    
    convertVolume();
}

function clearAll() {
    document.getElementById('fromValue').value = '';
    document.getElementById('toValue').value = '';
}

function quickConvert(value, from, to) {
    document.getElementById('fromValue').value = value;
    document.getElementById('fromUnit').value = from;
    document.getElementById('toUnit').value = to;
    convertVolume();
}
</script>

</body>
</html>
