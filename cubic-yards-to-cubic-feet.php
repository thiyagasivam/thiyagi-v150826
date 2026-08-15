<?php include 'header.php';?>


    <title>Cubic Yards to Cubic Feet Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert cubic yards to cubic feet with our free 2026 online calculator. Accurate volume conversion for construction and landscaping.">
    <meta name="keywords" content="cubic yards to cubic feet converter 2026, yd³ to ft³, volume converter, construction calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-teal-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Cubic Yards to Cubic Feet Converter</h1>
            <p class="text-lg text-gray-600">Convert cubic yards to cubic feet for construction and landscaping</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Cubic Yards Input -->
                <div class="space-y-2">
                    <label for="cubicYards" class="block text-sm font-medium text-gray-700">
                        Cubic Yards (yd³)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="cubicYards"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                            placeholder="Enter cubic yards"
                            step="any"
                            oninput="convertToCubicFeet()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">yd³</span>
                    </div>
                </div>

                <!-- Cubic Feet Output -->
                <div class="space-y-2">
                    <label for="cubicFeet" class="block text-sm font-medium text-gray-700">
                        Cubic Feet (ft³)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="cubicFeet"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                            placeholder="Cubic feet result"
                            step="any"
                            oninput="convertToCubicYards()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">ft³</span>
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
                <button onclick="setAndConvert(1)" class="bg-emerald-100 hover:bg-emerald-200 p-3 rounded-lg transition duration-300">
                    1 yd³
                </button>
                <button onclick="setAndConvert(2)" class="bg-emerald-100 hover:bg-emerald-200 p-3 rounded-lg transition duration-300">
                    2 yd³
                </button>
                <button onclick="setAndConvert(5)" class="bg-emerald-100 hover:bg-emerald-200 p-3 rounded-lg transition duration-300">
                    5 yd³
                </button>
                <button onclick="setAndConvert(10)" class="bg-emerald-100 hover:bg-emerald-200 p-3 rounded-lg transition duration-300">
                    10 yd³
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Cubic Yards to Cubic Feet Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    The conversion between cubic yards and cubic feet is essential in construction, landscaping, 
                    concrete work, and material estimation where volume calculations are critical.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 cubic yard = 27 cubic feet</strong><br>
                    Since 1 yard = 3 feet, then 1 yd³ = 3³ ft³ = 27 ft³
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 cubic yard = 27 cubic feet</li>
                    <li>2 cubic yards = 54 cubic feet</li>
                    <li>5 cubic yards = 135 cubic feet</li>
                    <li>10 cubic yards = 270 cubic feet</li>
                    <li>0.037 cubic yards = 1 cubic foot</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Volume Relationships</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 cubic yard = 27 cubic feet = 764.55 liters</li>
                    <li>1 cubic yard = 201.97 gallons (US)</li>
                    <li>1 cubic foot = 28.32 liters = 7.48 gallons (US)</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Construction Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Concrete volume calculations</li>
                    <li>Soil and fill dirt estimation</li>
                    <li>Mulch and gravel requirements</li>
                    <li>Excavation volume measurements</li>
                    <li>Lumber and building materials</li>
                    <li>Dumpster capacity planning</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Concrete truck: typically 10 cubic yards = 270 cubic feet</li>
                    <li>Small room: 12×12×8 ft = 1,152 ft³ = 42.7 yd³</li>
                    <li>Garden bed: 2 cubic yards of soil = 54 cubic feet</li>
                    <li>Dumpster: 30 yard container = 810 cubic feet</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCubicFeet() {
    const cubicYards = parseFloat(document.getElementById('cubicYards').value);
    if (!isNaN(cubicYards)) {
        const cubicFeet = cubicYards * 27;
        document.getElementById('cubicFeet').value = cubicFeet.toFixed(8);
    } else {
        document.getElementById('cubicFeet').value = '';
    }
}

function convertToCubicYards() {
    const cubicFeet = parseFloat(document.getElementById('cubicFeet').value);
    if (!isNaN(cubicFeet)) {
        const cubicYards = cubicFeet / 27;
        document.getElementById('cubicYards').value = cubicYards.toFixed(8);
    } else {
        document.getElementById('cubicYards').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cubicYards').value = value;
    convertToCubicFeet();
}

function clearInputs() {
    document.getElementById('cubicYards').value = '';
    document.getElementById('cubicFeet').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
