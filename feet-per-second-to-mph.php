<?php include 'header.php';?>


    <title>Feet per Second to MPH Converter 2026 - Speed Conversion Calculator</title>
    <meta name="description" content="Convert feet per second (ft/s) to miles per hour (mph) with our free 2026 online calculator. Accurate speed conversion for physics and engineering.">
    <meta name="keywords" content="feet per second to mph converter 2026, ft/s to mph, speed converter, velocity calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-purple-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Feet per Second to MPH Converter</h1>
            <p class="text-lg text-gray-600">Convert ft/s to mph for speed and velocity calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Feet per Second Input -->
                <div class="space-y-2">
                    <label for="feetPerSecond" class="block text-sm font-medium text-gray-700">
                        Feet per Second (ft/s)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="feetPerSecond"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Enter feet per second"
                            step="any"
                            oninput="convertToMph()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">ft/s</span>
                    </div>
                </div>

                <!-- MPH Output -->
                <div class="space-y-2">
                    <label for="mph" class="block text-sm font-medium text-gray-700">
                        Miles per Hour (mph)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="mph"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="MPH result"
                            step="any"
                            oninput="convertToFeetPerSecond()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">mph</span>
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
                <button onclick="setAndConvert(10)" class="bg-indigo-100 hover:bg-indigo-200 p-3 rounded-lg transition duration-300">
                    10 ft/s
                </button>
                <button onclick="setAndConvert(30)" class="bg-indigo-100 hover:bg-indigo-200 p-3 rounded-lg transition duration-300">
                    30 ft/s
                </button>
                <button onclick="setAndConvert(60)" class="bg-indigo-100 hover:bg-indigo-200 p-3 rounded-lg transition duration-300">
                    60 ft/s
                </button>
                <button onclick="setAndConvert(100)" class="bg-indigo-100 hover:bg-indigo-200 p-3 rounded-lg transition duration-300">
                    100 ft/s
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Feet per Second to MPH Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting feet per second to miles per hour is important in physics, sports analysis, 
                    automotive testing, and various engineering applications where speed measurements are needed.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 ft/s = 0.681818 mph</strong><br>
                    MPH = Feet per Second × 0.681818<br>
                    <br>
                    <em>Derivation:</em><br>
                    1 mile = 5,280 feet<br>
                    1 hour = 3,600 seconds<br>
                    1 ft/s × (3,600 s/hr) ÷ (5,280 ft/mi) = 0.681818 mph
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>10 ft/s = 6.82 mph</li>
                    <li>30 ft/s = 20.45 mph</li>
                    <li>44 ft/s = 30 mph</li>
                    <li>60 ft/s = 40.91 mph</li>
                    <li>88 ft/s = 60 mph</li>
                    <li>100 ft/s = 68.18 mph</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Speed Comparisons</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Walking speed: ~4 ft/s = ~2.7 mph</li>
                    <li>Running speed: ~15 ft/s = ~10.2 mph</li>
                    <li>Cycling speed: ~22 ft/s = ~15 mph</li>
                    <li>Car city speed: ~44 ft/s = ~30 mph</li>
                    <li>Highway speed: ~88 ft/s = ~60 mph</li>
                    <li>Bullet speed: ~2,000 ft/s = ~1,364 mph</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Sports performance analysis</li>
                    <li>Automotive acceleration testing</li>
                    <li>Physics and engineering calculations</li>
                    <li>Ballistics and projectile motion</li>
                    <li>Aviation and aerospace</li>
                    <li>Safety and impact studies</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Related Units</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 mph = 1.46667 ft/s</li>
                    <li>1 mph = 0.44704 m/s</li>
                    <li>1 ft/s = 0.3048 m/s</li>
                    <li>1 m/s = 3.28084 ft/s = 2.23694 mph</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Free fall after 1 second: 32.2 ft/s = 21.95 mph</li>
                    <li>Terminal velocity (human): ~195 ft/s = ~133 mph</li>
                    <li>Baseball pitch: ~130 ft/s = ~89 mph</li>
                    <li>Sound at sea level: ~1,125 ft/s = ~767 mph</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMph() {
    const feetPerSecond = parseFloat(document.getElementById('feetPerSecond').value);
    if (!isNaN(feetPerSecond)) {
        const mph = feetPerSecond * 0.6818181818;
        document.getElementById('mph').value = mph.toFixed(8);
    } else {
        document.getElementById('mph').value = '';
    }
}

function convertToFeetPerSecond() {
    const mph = parseFloat(document.getElementById('mph').value);
    if (!isNaN(mph)) {
        const feetPerSecond = mph / 0.6818181818;
        document.getElementById('feetPerSecond').value = feetPerSecond.toFixed(8);
    } else {
        document.getElementById('feetPerSecond').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('feetPerSecond').value = value;
    convertToMph();
}

function clearInputs() {
    document.getElementById('feetPerSecond').value = '';
    document.getElementById('mph').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
