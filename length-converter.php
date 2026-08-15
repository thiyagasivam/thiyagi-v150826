    <title>Length Converter - Universal Length Unit Conversion Calculator</title>
    <meta name="description" content="Convert between all length units including meters, feet, inches, centimeters, kilometers, miles, yards, and more with our comprehensive length converter.">
    <meta name="keywords" content="length converter, unit converter, meters to feet, inches to cm, distance converter">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-purple-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Universal Length Converter</h1>
            <p class="text-lg text-gray-600">Convert between all length units instantly</p>
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
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Enter value"
                            step="any"
                            oninput="convertLength()"
                        >
                        <select
                            id="fromUnit"
                            class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            onchange="convertLength()"
                        >
                            <optgroup label="Metric">
                                <option value="mm">Millimeter (mm)</option>
                                <option value="cm">Centimeter (cm)</option>
                                <option value="m" selected>Meter (m)</option>
                                <option value="km">Kilometer (km)</option>
                            </optgroup>
                            <optgroup label="Imperial">
                                <option value="in">Inch (in)</option>
                                <option value="ft">Foot (ft)</option>
                                <option value="yd">Yard (yd)</option>
                                <option value="mi">Mile (mi)</option>
                            </optgroup>
                            <optgroup label="Nautical">
                                <option value="nmi">Nautical Mile</option>
                            </optgroup>
                            <optgroup label="Scientific">
                                <option value="um">Micrometer (μm)</option>
                                <option value="nm">Nanometer (nm)</option>
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
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Result"
                            readonly
                        >
                        <select
                            id="toUnit"
                            class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            onchange="convertLength()"
                        >
                            <optgroup label="Metric">
                                <option value="mm">Millimeter (mm)</option>
                                <option value="cm">Centimeter (cm)</option>
                                <option value="m">Meter (m)</option>
                                <option value="km">Kilometer (km)</option>
                            </optgroup>
                            <optgroup label="Imperial">
                                <option value="in">Inch (in)</option>
                                <option value="ft" selected>Foot (ft)</option>
                                <option value="yd">Yard (yd)</option>
                                <option value="mi">Mile (mi)</option>
                            </optgroup>
                            <optgroup label="Nautical">
                                <option value="nmi">Nautical Mile</option>
                            </optgroup>
                            <optgroup label="Scientific">
                                <option value="um">Micrometer (μm)</option>
                                <option value="nm">Nanometer (nm)</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-center gap-4">
                <button
                    onclick="swapUnits()"
                    class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
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
                    <button onclick="quickConvert(1, 'm', 'ft')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 m = 3.28 ft</button>
                    <button onclick="quickConvert(1, 'km', 'mi')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 km = 0.62 mi</button>
                    <button onclick="quickConvert(1, 'cm', 'in')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 cm = 0.39 in</button>
                    <button onclick="quickConvert(100, 'cm', 'm')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">100 cm = 1 m</button>
                </div>
            </div>

            <!-- Common Imperial -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Common Imperial</h3>
                <div class="space-y-2">
                    <button onclick="quickConvert(1, 'ft', 'm')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 ft = 0.30 m</button>
                    <button onclick="quickConvert(1, 'mi', 'km')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 mi = 1.61 km</button>
                    <button onclick="quickConvert(1, 'in', 'cm')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 in = 2.54 cm</button>
                    <button onclick="quickConvert(1, 'yd', 'ft')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 yd = 3 ft</button>
                </div>
            </div>

            <!-- Scientific -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Scientific Units</h3>
                <div class="space-y-2">
                    <button onclick="quickConvert(1, 'um', 'mm')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 μm = 0.001 mm</button>
                    <button onclick="quickConvert(1, 'nm', 'um')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 nm = 0.001 μm</button>
                    <button onclick="quickConvert(1, 'nmi', 'km')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 nmi = 1.85 km</button>
                    <button onclick="quickConvert(1, 'm', 'nm')" class="w-full text-left p-2 bg-gray-50 hover:bg-gray-100 rounded">1 m = 10⁹ nm</button>
                </div>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Length Units and Conversions</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Metric System</h3>
                    <ul class="list-disc pl-6 space-y-1 text-gray-600">
                        <li><strong>Nanometer (nm):</strong> 10⁻⁹ meters</li>
                        <li><strong>Micrometer (μm):</strong> 10⁻⁶ meters</li>
                        <li><strong>Millimeter (mm):</strong> 10⁻³ meters</li>
                        <li><strong>Centimeter (cm):</strong> 10⁻² meters</li>
                        <li><strong>Meter (m):</strong> Base unit</li>
                        <li><strong>Kilometer (km):</strong> 10³ meters</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Imperial System</h3>
                    <ul class="list-disc pl-6 space-y-1 text-gray-600">
                        <li><strong>Inch (in):</strong> 2.54 cm</li>
                        <li><strong>Foot (ft):</strong> 12 inches</li>
                        <li><strong>Yard (yd):</strong> 3 feet</li>
                        <li><strong>Mile (mi):</strong> 5,280 feet</li>
                        <li><strong>Nautical Mile:</strong> 1,852 meters</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Conversion factors to meters
const conversionFactors = {
    'nm': 1e-9,
    'um': 1e-6,
    'mm': 0.001,
    'cm': 0.01,
    'm': 1,
    'km': 1000,
    'in': 0.0254,
    'ft': 0.3048,
    'yd': 0.9144,
    'mi': 1609.344,
    'nmi': 1852
};

function convertLength() {
    const fromValue = parseFloat(document.getElementById('fromValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    if (!isNaN(fromValue)) {
        // Convert to meters first, then to target unit
        const meters = fromValue * conversionFactors[fromUnit];
        const result = meters / conversionFactors[toUnit];
        
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
    
    convertLength();
}

function clearAll() {
    document.getElementById('fromValue').value = '';
    document.getElementById('toValue').value = '';
}

function quickConvert(value, from, to) {
    document.getElementById('fromValue').value = value;
    document.getElementById('fromUnit').value = from;
    document.getElementById('toUnit').value = to;
    convertLength();
}
</script>

</body>
</html>
