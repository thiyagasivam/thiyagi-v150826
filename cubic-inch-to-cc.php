<?php include 'header.php';?>


    <title>Cubic Inch to CC Converter 2026 - Volume Conversion Calculator</title>
    <meta name="description" content="Convert cubic inches to cubic centimeters (cc) with our free 2026 online calculator. Accurate volume conversion for engine displacement and measurements.">
    <meta name="keywords" content="cubic inch to cc converter 2026, in³ to cc, volume converter, engine displacement calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-orange-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Cubic Inch to CC Converter</h1>
            <p class="text-lg text-gray-600">Convert cubic inches to cubic centimeters for engine displacement and volume</p>
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
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent"
                            placeholder="Enter cubic inches"
                            step="any"
                            oninput="convertToCC()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">in³</span>
                    </div>
                </div>

                <!-- CC Output -->
                <div class="space-y-2">
                    <label for="cc" class="block text-sm font-medium text-gray-700">
                        Cubic Centimeters (cc)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="cc"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            placeholder="CC result"
                            step="any"
                            oninput="convertToCubicInches()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">cc</span>
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
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert (Common Engine Sizes)</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(305)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    305 in³ (5.0L)
                </button>
                <button onclick="setAndConvert(350)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    350 in³ (5.7L)
                </button>
                <button onclick="setAndConvert(454)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    454 in³ (7.4L)
                </button>
                <button onclick="setAndConvert(500)" class="bg-red-100 hover:bg-red-200 p-3 rounded-lg transition duration-300">
                    500 in³ (8.2L)
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Cubic Inch to CC Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting cubic inches to cubic centimeters (cc) is essential for understanding engine displacement, 
                    especially when comparing American and international automotive specifications.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 cubic inch = 16.387064 cubic centimeters</strong><br>
                    CC = Cubic Inches × 16.387064
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Engine Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>305 in³ = 4,999 cc (5.0L)</li>
                    <li>350 in³ = 5,735 cc (5.7L)</li>
                    <li>454 in³ = 7,440 cc (7.4L)</li>
                    <li>500 in³ = 8,194 cc (8.2L)</li>
                    <li>632 in³ = 10,356 cc (10.4L)</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Volume Relationships</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 cubic centimeter (cc) = 1 milliliter (ml)</li>
                    <li>1,000 cc = 1 liter</li>
                    <li>1 cubic inch = 0.016387 liters</li>
                    <li>61.024 cubic inches = 1 liter</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Automotive Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Engine displacement comparison</li>
                    <li>Performance calculations</li>
                    <li>Fuel efficiency analysis</li>
                    <li>Racing class specifications</li>
                    <li>Import/export documentation</li>
                    <li>Parts compatibility checking</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Popular Engine Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Small Block Chevy 350:</strong> 350 in³ = 5,735 cc</li>
                    <li><strong>Big Block Chevy 454:</strong> 454 in³ = 7,440 cc</li>
                    <li><strong>Ford 302:</strong> 302 in³ = 4,949 cc</li>
                    <li><strong>Chrysler 440:</strong> 440 in³ = 7,210 cc</li>
                    <li><strong>LS7 Corvette:</strong> 427 in³ = 7,000 cc</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">International Standards</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>US uses cubic inches for displacement</li>
                    <li>Most world uses cc or liters</li>
                    <li>Racing series have specific rules</li>
                    <li>Insurance may require both measurements</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Other Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Motorcycle engine displacement</li>
                    <li>Marine engine specifications</li>
                    <li>Industrial equipment</li>
                    <li>Hydraulic system volumes</li>
                    <li>Scientific measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToCC() {
    const cubicInches = parseFloat(document.getElementById('cubicInches').value);
    if (!isNaN(cubicInches)) {
        const cc = cubicInches * 16.387064;
        document.getElementById('cc').value = cc.toFixed(6);
    } else {
        document.getElementById('cc').value = '';
    }
}

function convertToCubicInches() {
    const cc = parseFloat(document.getElementById('cc').value);
    if (!isNaN(cc)) {
        const cubicInches = cc / 16.387064;
        document.getElementById('cubicInches').value = cubicInches.toFixed(8);
    } else {
        document.getElementById('cubicInches').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('cubicInches').value = value;
    convertToCC();
}

function clearInputs() {
    document.getElementById('cubicInches').value = '';
    document.getElementById('cc').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
