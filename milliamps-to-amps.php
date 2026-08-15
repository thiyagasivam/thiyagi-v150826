<?php include 'header.php';?>


    <title>Milliamps to Amps Converter 2026 - Electric Current Conversion Calculator</title>
    <meta name="description" content="Convert milliamps (mA) to amps (A) with our free 2026 online calculator. Accurate current conversion for electrical calculations.">
    <meta name="keywords" content="milliamps to amps converter 2026, mA to A, current converter, electrical calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 to-amber-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Milliamps to Amps Converter</h1>
            <p class="text-lg text-gray-600">Convert milliamps to amps for electrical current calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Milliamps Input -->
                <div class="space-y-2">
                    <label for="milliamps" class="block text-sm font-medium text-gray-700">
                        Milliamps (mA)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="milliamps"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                            placeholder="Enter milliamps"
                            step="any"
                            oninput="convertToAmps()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">mA</span>
                    </div>
                </div>

                <!-- Amps Output -->
                <div class="space-y-2">
                    <label for="amps" class="block text-sm font-medium text-gray-700">
                        Amps (A)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="amps"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent"
                            placeholder="Amps result"
                            step="any"
                            oninput="convertToMilliamps()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">A</span>
                    </div>
                </div>
            </div>

            <!-- Clear Button -->
            <div class="text-center mt-6">
                <button
                    onclick="clearInputs()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    Clear
                </button>
            </div>
        </div>

        <!-- Quick Convert Buttons -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(100)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    100 mA
                </button>
                <button onclick="setAndConvert(500)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    500 mA
                </button>
                <button onclick="setAndConvert(1000)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    1000 mA (1 A)
                </button>
                <button onclick="setAndConvert(2000)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    2000 mA (2 A)
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Milliamps to Amps Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting milliamps to amps is fundamental in electrical engineering, electronics, 
                    and circuit analysis where accurate current measurements are essential.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 amp = 1,000 milliamps</strong><br>
                    Amps = Milliamps ÷ 1,000
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>100 mA = 0.1 A</li>
                    <li>500 mA = 0.5 A</li>
                    <li>1,000 mA = 1 A</li>
                    <li>2,000 mA = 2 A</li>
                    <li>5,000 mA = 5 A</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Current Unit Hierarchy</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Microamp (μA):</strong> 10⁻⁶ amps</li>
                    <li><strong>Milliamp (mA):</strong> 10⁻³ amps</li>
                    <li><strong>Amp (A):</strong> Base unit of current</li>
                    <li><strong>Kiloamp (kA):</strong> 10³ amps</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Typical Current Values</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>LED indicator: 10-20 mA</li>
                    <li>Smartphone charging: 1-3 A (1000-3000 mA)</li>
                    <li>USB port: 500 mA - 3 A</li>
                    <li>Laptop charger: 3-5 A</li>
                    <li>Household outlet: 15-20 A</li>
                    <li>Car starter motor: 100-400 A</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Electronic circuit design</li>
                    <li>Battery capacity calculations</li>
                    <li>Power supply specifications</li>
                    <li>Fuse and breaker sizing</li>
                    <li>Motor and component ratings</li>
                    <li>Safety system design</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Safety Considerations</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>10-20 mA: Muscular control lost</li>
                    <li>30 mA: Respiratory paralysis begins</li>
                    <li>75-100 mA: Ventricular fibrillation threshold</li>
                    <li>Always use proper safety equipment</li>
                    <li>Understand current ratings before working with electricity</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Related Calculations</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Power (W) = Voltage (V) × Current (A)</li>
                    <li>Ohm's Law: Current = Voltage ÷ Resistance</li>
                    <li>Energy = Power × Time</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToAmps() {
    const milliamps = parseFloat(document.getElementById('milliamps').value);
    if (!isNaN(milliamps)) {
        const amps = milliamps / 1000;
        document.getElementById('amps').value = amps.toFixed(8);
    } else {
        document.getElementById('amps').value = '';
    }
}

function convertToMilliamps() {
    const amps = parseFloat(document.getElementById('amps').value);
    if (!isNaN(amps)) {
        const milliamps = amps * 1000;
        document.getElementById('milliamps').value = milliamps.toFixed(6);
    } else {
        document.getElementById('milliamps').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('milliamps').value = value;
    convertToAmps();
}

function clearInputs() {
    document.getElementById('milliamps').value = '';
    document.getElementById('amps').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
