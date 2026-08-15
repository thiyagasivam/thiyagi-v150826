<?php include 'header.php';?>


    <title>Liter to Cubic Meter Converter - Volume Conversion Calculator</title>
    <meta name="description" content="Convert liters to cubic meters with our free online calculator. Accurate volume conversion between liters and cubic meters.">
    <meta name="keywords" content="liter to cubic meter, L to m³, volume converter, cubic meter calculator">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Liter to Cubic Meter Converter</h1>
            <p class="text-lg text-gray-600">Convert liters to cubic meters for volume calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Liters Input -->
                <div class="space-y-2">
                    <label for="liters" class="block text-sm font-medium text-gray-700">
                        Liters (L)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="liters"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent"
                            placeholder="Enter liters"
                            step="any"
                            oninput="convertToCubicMeters()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">L</span>
                    </div>
                </div>

                <!-- Cubic Meters Output -->
                <div class="space-y-2">
                    <label for="cubicMeters" class="block text-sm font-medium text-gray-700">
                        Cubic Meters (m³)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="cubicMeters"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Cubic meters result"
                            step="any"
                            oninput="convertToLiters()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">m³</span>
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
                <button onclick="setAndConvert(1)" class="bg-cyan-100 hover:bg-cyan-200 p-3 rounded-lg transition duration-300">
                    1 L
                </button>
                <button onclick="setAndConvert(100)" class="bg-cyan-100 hover:bg-cyan-200 p-3 rounded-lg transition duration-300">
                    100 L
                </button>
                <button onclick="setAndConvert(1000)" class="bg-cyan-100 hover:bg-cyan-200 p-3 rounded-lg transition duration-300">
                    1000 L
                </button>
                <button onclick="setAndConvert(5000)" class="bg-cyan-100 hover:bg-cyan-200 p-3 rounded-lg transition duration-300">
                    5000 L
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Liter to Cubic Meter Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    The conversion between liters and cubic meters is fundamental in fluid mechanics, 
                    engineering calculations, and various industrial applications where volume measurements are crucial.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 cubic meter = 1,000 liters</strong><br>
                    Cubic Meters = Liters ÷ 1,000
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 liter = 0.001 cubic meters</li>
                    <li>100 liters = 0.1 cubic meters</li>
                    <li>1,000 liters = 1 cubic meter</li>
                    <li>5,000 liters = 5 cubic meters</li>
                    <li>10,000 liters = 10 cubic meters</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Volume Relationships</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 cubic meter = 1,000 liters = 1,000,000 milliliters</li>
                    <li>1 cubic meter = 1,000,000 cubic centimeters</li>
                    <li>1 liter = 1,000 cubic centimeters</li>
                    <li>1 liter = 1 cubic decimeter</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Water tank and reservoir capacity</li>
                    <li>Swimming pool volume calculations</li>
                    <li>Chemical and pharmaceutical industries</li>
                    <li>Fuel storage and transportation</li>
                    <li>Environmental monitoring</li>
                    <li>Construction material calculations</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Standard bathtub: ~300 liters = 0.3 m³</li>
                    <li>Small swimming pool: 50,000 liters = 50 m³</li>
                    <li>Car fuel tank: ~60 liters = 0.06 m³</li>
                    <li>Water heater: 200 liters = 0.2 m³</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCubicMeters() {
    const liters = parseFloat(document.getElementById('liters').value);
    if (!isNaN(liters)) {
        const cubicMeters = liters / 1000;
        document.getElementById('cubicMeters').value = cubicMeters.toFixed(8);
    } else {
        document.getElementById('cubicMeters').value = '';
    }
}

function convertToLiters() {
    const cubicMeters = parseFloat(document.getElementById('cubicMeters').value);
    if (!isNaN(cubicMeters)) {
        const liters = cubicMeters * 1000;
        document.getElementById('liters').value = liters.toFixed(8);
    } else {
        document.getElementById('liters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('liters').value = value;
    convertToCubicMeters();
}

function clearInputs() {
    document.getElementById('liters').value = '';
    document.getElementById('cubicMeters').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
