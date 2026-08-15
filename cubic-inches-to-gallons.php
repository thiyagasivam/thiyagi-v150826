<?php include 'header.php';?>


    <title>Cubic Inches to Gallons Converter 2026 - Free Online Calculator</title>
    <meta name="description" content="Convert cubic inches to gallons with our free 2026 online calculator. Instant conversion between cubic inches and gallons with accurate results.">
    <meta name="keywords" content="cubic inches to gallons converter 2026, volume converter, cubic inches conversion, gallons calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Cubic Inches to Gallons Converter</h1>
            <p class="text-lg text-gray-600">Convert cubic inches to gallons quickly and accurately</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Cubic Inches Input -->
                <div class="space-y-2">
                    <label for="cubicInches" class="block text-sm font-medium text-gray-700">
                        Cubic Inches (in³)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="cubicInches"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter cubic inches"
                            step="any"
                            oninput="convertToGallons()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">in³</span>
                    </div>
                </div>

                <!-- Gallons Output -->
                <div class="space-y-2">
                    <label for="gallons" class="block text-sm font-medium text-gray-700">
                        Gallons (gal)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="gallons"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            placeholder="Gallons result"
                            step="any"
                            oninput="convertToCubicInches()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">gal</span>
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
                <button onclick="setAndConvert(1)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    1 in³
                </button>
                <button onclick="setAndConvert(231)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    231 in³
                </button>
                <button onclick="setAndConvert(462)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    462 in³
                </button>
                <button onclick="setAndConvert(1000)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    1000 in³
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Cubic Inches to Gallons Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    The conversion between cubic inches and gallons is important for various applications including engine displacement, 
                    fluid capacity calculations, and volume measurements.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 US gallon = 231 cubic inches</strong><br>
                    Gallons = Cubic Inches ÷ 231
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 cubic inch = 0.004329 gallons</li>
                    <li>231 cubic inches = 1 gallon</li>
                    <li>462 cubic inches = 2 gallons</li>
                    <li>1000 cubic inches = 4.329 gallons</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Automotive engine displacement calculations</li>
                    <li>Tank and container capacity measurements</li>
                    <li>Fluid system design</li>
                    <li>Manufacturing volume specifications</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToGallons() {
    const cubicInches = parseFloat(document.getElementById('cubicInches').value);
    if (!isNaN(cubicInches)) {
        const gallons = cubicInches / 231;
        document.getElementById('gallons').value = gallons.toFixed(8);
    } else {
        document.getElementById('gallons').value = '';
    }
}

function convertToCubicInches() {
    const gallons = parseFloat(document.getElementById('gallons').value);
    if (!isNaN(gallons)) {
        const cubicInches = gallons * 231;
        document.getElementById('cubicInches').value = cubicInches.toFixed(8);
    } else {
        document.getElementById('cubicInches').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cubicInches').value = value;
    convertToGallons();
}

function clearInputs() {
    document.getElementById('cubicInches').value = '';
    document.getElementById('gallons').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
