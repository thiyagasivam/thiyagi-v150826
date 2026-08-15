<?php include 'header.php';?>


    <title>Yards to Inches Converter 2026 - Length Conversion Calculator</title>
    <meta name="description" content="Convert yards to inches with our free 2026 online calculator. Accurate length conversion between yards and inches for measurements.">
    <meta name="keywords" content="yards to inches converter 2026, yd to in, length converter, inch calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-green-50 to-emerald-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Yards to Inches Converter</h1>
            <p class="text-lg text-gray-600">Convert yards to inches quickly and accurately</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Yards Input -->
                <div class="space-y-2">
                    <label for="yards" class="block text-sm font-medium text-gray-700">
                        Yards (yd)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="yards"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            placeholder="Enter yards"
                            step="any"
                            oninput="convertToInches()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">yd</span>
                    </div>
                </div>

                <!-- Inches Output -->
                <div class="space-y-2">
                    <label for="inches" class="block text-sm font-medium text-gray-700">
                        Inches (in)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="inches"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent"
                            placeholder="Inches result"
                            step="any"
                            oninput="convertToYards()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">in</span>
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
                <button onclick="setAndConvert(1)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    1 yd
                </button>
                <button onclick="setAndConvert(2)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    2 yd
                </button>
                <button onclick="setAndConvert(5)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    5 yd
                </button>
                <button onclick="setAndConvert(10)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    10 yd
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Yards to Inches Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting yards to inches is useful in construction, fabric measurement, sports field dimensions, 
                    and various applications where precise measurements in smaller units are needed.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 yard = 36 inches</strong><br>
                    Inches = Yards × 36
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 yard = 36 inches</li>
                    <li>2 yards = 72 inches</li>
                    <li>5 yards = 180 inches</li>
                    <li>10 yards = 360 inches</li>
                    <li>0.5 yards = 18 inches</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Unit Relationships</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 yard = 3 feet = 36 inches</li>
                    <li>1 foot = 12 inches = 1/3 yard</li>
                    <li>1 inch = 1/12 foot = 1/36 yard</li>
                    <li>1 yard = 0.9144 meters = 91.44 cm</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Fabric and textile cutting</li>
                    <li>Construction measurements</li>
                    <li>Sports field marking</li>
                    <li>Interior design projects</li>
                    <li>Landscaping and gardening</li>
                    <li>Carpet and flooring installation</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Football field width: 53⅓ yards = 1,920 inches</li>
                    <li>Fabric bolt width: 1.25 yards = 45 inches</li>
                    <li>Queen bed length: 2.22 yards = 80 inches</li>
                    <li>Dining table: 2.5 yards = 90 inches</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Measurement Tips</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Use a tape measure for accurate yard measurements</li>
                    <li>Remember: 1 yard is approximately one adult stride</li>
                    <li>For fabric, always buy slightly more than calculated</li>
                    <li>Consider pattern matching when calculating fabric needs</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Historical Context</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>The yard was originally based on the length of a man's belt</li>
                    <li>King Henry I defined the yard as the distance from his nose to his outstretched thumb</li>
                    <li>The modern yard was standardized in 1959</li>
                    <li>Primarily used in the US, UK, and some Commonwealth countries</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToInches() {
    const yards = parseFloat(document.getElementById('yards').value);
    if (!isNaN(yards)) {
        const inches = yards * 36;
        document.getElementById('inches').value = inches.toFixed(8);
    } else {
        document.getElementById('inches').value = '';
    }
}

function convertToYards() {
    const inches = parseFloat(document.getElementById('inches').value);
    if (!isNaN(inches)) {
        const yards = inches / 36;
        document.getElementById('yards').value = yards.toFixed(8);
    } else {
        document.getElementById('yards').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('yards').value = value;
    convertToInches();
}

function clearInputs() {
    document.getElementById('yards').value = '';
    document.getElementById('inches').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
