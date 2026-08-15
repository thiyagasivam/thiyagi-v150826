<?php include 'header.php';?>


    <title>Horsepower to Kilowatt Converter 2026 - Power Conversion Calculator</title>
    <meta name="description" content="Convert horsepower (HP) to kilowatts (kW) with our free 2026 online calculator. Accurate power conversion for automotive and industrial applications.">
    <meta name="keywords" content="horsepower to kilowatt converter 2026, HP to kW, power converter, automotive calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-pink-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Horsepower to Kilowatt Converter</h1>
            <p class="text-lg text-gray-600">Convert HP to kW for automotive and industrial power calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Horsepower Input -->
                <div class="space-y-2">
                    <label for="horsepower" class="block text-sm font-medium text-gray-700">
                        Horsepower (HP)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="horsepower"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                            placeholder="Enter horsepower"
                            step="any"
                            oninput="convertToKilowatts()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">HP</span>
                    </div>
                    <div class="text-sm text-gray-500">
                        <select id="hpType" onchange="convertToKilowatts()" class="mt-1 text-xs border rounded px-2 py-1">
                            <option value="mechanical">Mechanical HP</option>
                            <option value="metric">Metric HP (PS)</option>
                            <option value="electrical">Electrical HP</option>
                        </select>
                    </div>
                </div>

                <!-- Kilowatts Output -->
                <div class="space-y-2">
                    <label for="kilowatts" class="block text-sm font-medium text-gray-700">
                        Kilowatts (kW)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="kilowatts"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                            placeholder="Kilowatts result"
                            step="any"
                            oninput="convertToHorsepower()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">kW</span>
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
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert (Mechanical HP)</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(100)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    100 HP
                </button>
                <button onclick="setAndConvert(200)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    200 HP
                </button>
                <button onclick="setAndConvert(300)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    300 HP
                </button>
                <button onclick="setAndConvert(500)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    500 HP
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Horsepower to Kilowatt Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Horsepower and kilowatts are both units of power used to measure the rate of energy transfer. 
                    This conversion is essential in automotive, industrial, and electrical applications.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formulas</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Mechanical HP:</strong> 1 HP = 0.7457 kW</li>
                    <li><strong>Metric HP (PS):</strong> 1 PS = 0.7355 kW</li>
                    <li><strong>Electrical HP:</strong> 1 HP = 0.746 kW</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions (Mechanical HP)</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>100 HP = 74.57 kW</li>
                    <li>200 HP = 149.14 kW</li>
                    <li>300 HP = 223.71 kW</li>
                    <li>500 HP = 372.85 kW</li>
                    <li>1000 HP = 745.7 kW</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Types of Horsepower</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Mechanical HP:</strong> Most common in US (745.7 watts)</li>
                    <li><strong>Metric HP (PS):</strong> Used in Europe (735.5 watts)</li>
                    <li><strong>Electrical HP:</strong> Used for electric motors (746 watts)</li>
                    <li><strong>Brake HP (BHP):</strong> Engine output at crankshaft</li>
                    <li><strong>Wheel HP (WHP):</strong> Power at the wheels</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Automotive engine specifications</li>
                    <li>Electric motor ratings</li>
                    <li>Industrial machinery power</li>
                    <li>Generator capacity calculations</li>
                    <li>HVAC system sizing</li>
                    <li>Marine and aircraft engines</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Real-World Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Small car engine: 150 HP = 112 kW</li>
                    <li>Sports car: 400 HP = 298 kW</li>
                    <li>Semi-truck: 500 HP = 373 kW</li>
                    <li>Industrial motor: 100 HP = 75 kW</li>
                    <li>Home generator: 20 kW = 27 HP</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Important Notes</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Power is the rate of doing work or transferring energy</li>
                    <li>Different HP definitions exist for different applications</li>
                    <li>kW is the standard SI unit for power</li>
                    <li>Always specify which type of HP when communicating</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
const conversionFactors = {
    mechanical: 0.745699872, // Mechanical HP to kW
    metric: 0.735499,       // Metric HP (PS) to kW
    electrical: 0.746       // Electrical HP to kW
};

function convertToKilowatts() {
    const horsepower = parseFloat(document.getElementById('horsepower').value);
    const hpType = document.getElementById('hpType').value;
    
    if (!isNaN(horsepower)) {
        const kilowatts = horsepower * conversionFactors[hpType];
        document.getElementById('kilowatts').value = kilowatts.toFixed(6);
    } else {
        document.getElementById('kilowatts').value = '';
    }
}

function convertToHorsepower() {
    const kilowatts = parseFloat(document.getElementById('kilowatts').value);
    const hpType = document.getElementById('hpType').value;
    
    if (!isNaN(kilowatts)) {
        const horsepower = kilowatts / conversionFactors[hpType];
        document.getElementById('horsepower').value = horsepower.toFixed(6);
    } else {
        document.getElementById('horsepower').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('horsepower').value = value;
    document.getElementById('hpType').value = 'mechanical';
    convertToKilowatts();
}

function clearInputs() {
    document.getElementById('horsepower').value = '';
    document.getElementById('kilowatts').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
