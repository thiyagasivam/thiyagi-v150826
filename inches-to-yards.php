<?php include 'header.php';?>


    <title>Inches to Yards Converter 2026 - Free Online Calculator</title>
    <meta name="description" content="Convert inches to yards with our free 2026 online calculator. Instant conversion between inches and yards with accurate results.">
    <meta name="keywords" content="inches to yards converter 2026, length converter, inches conversion, yards calculator 2026">
<body>ml>
    <title>Inches to Yards Converter - Length Conversion Calculator</title>
    <meta name="description" content="Convert inches to yards with our free online calculator. Accurate length conversion between inches and yards for measurements.">
    <meta name="keywords" content="inches to yards, in to yd, length converter, yard calculator">

<div class="min-h-screen bg-gradient-to-br from-green-50 to-teal-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Inches to Yards Converter</h1>
            <p class="text-lg text-gray-600">Convert inches to yards quickly and accurately</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Inches Input -->
                <div class="space-y-2">
                    <label for="inches" class="block text-sm font-medium text-gray-700">
                        Inches (in)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="inches"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            placeholder="Enter inches"
                            step="any"
                            oninput="convertToYards()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">in</span>
                    </div>
                </div>

                <!-- Yards Output -->
                <div class="space-y-2">
                    <label for="yards" class="block text-sm font-medium text-gray-700">
                        Yards (yd)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="yards"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                            placeholder="Yards result"
                            step="any"
                            oninput="convertToInches()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">yd</span>
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
                <button onclick="setAndConvert(12)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    12 in (1 ft)
                </button>
                <button onclick="setAndConvert(36)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    36 in (1 yd)
                </button>
                <button onclick="setAndConvert(72)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    72 in (2 yd)
                </button>
                <button onclick="setAndConvert(108)" class="bg-green-100 hover:bg-green-200 p-3 rounded-lg transition duration-300">
                    108 in (3 yd)
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Inches to Yards Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting inches to yards is common in construction, fabric measurement, sports field dimensions, 
                    and various everyday measurements where larger units are more practical.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 yard = 36 inches</strong><br>
                    Yards = Inches ÷ 36
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>12 inches = 0.333 yards (1 foot)</li>
                    <li>36 inches = 1 yard</li>
                    <li>72 inches = 2 yards</li>
                    <li>108 inches = 3 yards</li>
                    <li>144 inches = 4 yards</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Relationship with Other Units</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 yard = 3 feet = 36 inches</li>
                    <li>1 foot = 12 inches = 1/3 yard</li>
                    <li>1 inch = 1/12 foot = 1/36 yard</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Fabric and textile measurements</li>
                    <li>Construction and architecture</li>
                    <li>Sports field dimensions</li>
                    <li>Interior design and decorating</li>
                    <li>Gardening and landscaping</li>
                    <li>Carpet and flooring installation</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Football field: 100 yards = 3,600 inches</li>
                    <li>Fabric bolt: typically 45 inches wide = 1.25 yards</li>
                    <li>Room carpet: 12 feet = 144 inches = 4 yards</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToYards() {
    const inches = parseFloat(document.getElementById('inches').value);
    if (!isNaN(inches)) {
        const yards = inches / 36;
        document.getElementById('yards').value = yards.toFixed(8);
    } else {
        document.getElementById('yards').value = '';
    }
}

function convertToInches() {
    const yards = parseFloat(document.getElementById('yards').value);
    if (!isNaN(yards)) {
        const inches = yards * 36;
        document.getElementById('inches').value = inches.toFixed(8);
    } else {
        document.getElementById('inches').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('inches').value = value;
    convertToYards();
}

function clearInputs() {
    document.getElementById('inches').value = '';
    document.getElementById('yards').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
