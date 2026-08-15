<?php include 'header.php';?>


    <title>Centimeter to Pixel (X) Converter 2026 - Length Conversion Calculator</title>
    <meta name="description" content="Convert centimeters to pixels (X-axis) with our free 2026 online calculator. Accurate conversion for digital design and screen measurements.">
    <meta name="keywords" content="centimeter to pixel converter 2026, cm to px, digital design converter, screen measurement calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-desktop text-cyan-600 mr-3"></i>
                Centimeter to Pixel (X) Converter
            </h1>
            <p class="text-lg text-gray-600">Convert centimeters to pixels instantly for digital design</p>
        </div>

        <!-- DPI Input -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <div class="flex items-center justify-center space-x-4">
                <label for="dpi" class="text-lg font-semibold text-gray-700">
                    <i class="fas fa-cog text-blue-600 mr-2"></i>
                    Screen DPI (Dots Per Inch):
                </label>
                <input type="number" id="dpi" value="96" 
                       class="px-4 py-2 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg w-32"
                       oninput="convertToPixels()">
                <div class="flex gap-2">
                    <button onclick="setDPI(72)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">72 DPI</button>
                    <button onclick="setDPI(96)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">96 DPI</button>
                    <button onclick="setDPI(150)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">150 DPI</button>
                    <button onclick="setDPI(300)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">300 DPI</button>
                </div>
            </div>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centimeters Input -->
                <div class="space-y-4">
                    <label for="centimeters" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-ruler text-cyan-600 mr-2"></i>
                        Centimeters (cm)
                    </label>
                    <input type="number" id="centimeters" 
                           class="w-full px-4 py-3 border-2 border-cyan-300 rounded-lg focus:border-cyan-500 focus:outline-none text-lg"
                           placeholder="Enter centimeters value" 
                           oninput="convertToPixels()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">1 cm</button>
                        <button onclick="setAndConvert(2.54)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">2.54 cm</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">5 cm</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-cyan-100 text-cyan-800 rounded-full text-sm hover:bg-cyan-200">10 cm</button>
                    </div>
                </div>

                <!-- Pixels Output -->
                <div class="space-y-4">
                    <label for="pixels" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-tv text-blue-600 mr-2"></i>
                        Pixels (px)
                    </label>
                    <input type="number" id="pixels" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in pixels" 
                           oninput="convertToCentimeters()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> pixels = cm × (DPI ÷ 2.54)</p>
                        <p><strong>Note:</strong> 1 inch = 2.54 centimeters</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About Centimeters -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>
                    About Centimeters
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The centimeter is a unit of length in the metric system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used for physical measurements</li>
                        <li>1 centimeter = 10 millimeters</li>
                        <li>100 centimeters = 1 meter</li>
                        <li>Symbol: cm</li>
                    </ul>
                </div>
            </div>

            <!-- About Pixels -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-tv text-blue-600 mr-2"></i>
                    About Pixels
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The pixel is the basic unit of digital images and displays.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Picture element (pixel)</li>
                        <li>Depends on screen resolution (DPI)</li>
                        <li>Used in digital design and web</li>
                        <li>Symbol: px</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- DPI Information -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-info-circle text-green-600 mr-2"></i>
                Common DPI Values
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">DPI</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">1 cm = ? px</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">72 DPI</td>
                            <td class="border border-gray-300 px-4 py-2">Web design (old standard)</td>
                            <td class="border border-gray-300 px-4 py-2">28.35 px</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">96 DPI</td>
                            <td class="border border-gray-300 px-4 py-2">Windows standard display</td>
                            <td class="border border-gray-300 px-4 py-2">37.8 px</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">150 DPI</td>
                            <td class="border border-gray-300 px-4 py-2">High resolution display</td>
                            <td class="border border-gray-300 px-4 py-2">59.06 px</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">300 DPI</td>
                            <td class="border border-gray-300 px-4 py-2">Print quality</td>
                            <td class="border border-gray-300 px-4 py-2">118.11 px</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Pixels = Centimeters × (DPI ÷ 2.54)</p>
                        <p>Centimeters = Pixels ÷ (DPI ÷ 2.54)</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Conversion depends on screen DPI</li>
                        <li>• 1 inch = 2.54 centimeters</li>
                        <li>• DPI = Dots (pixels) Per Inch</li>
                        <li>• Essential for print vs digital design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToPixels() {
    const centimeters = parseFloat(document.getElementById('centimeters').value);
    const dpi = parseFloat(document.getElementById('dpi').value);
    
    if (!isNaN(centimeters) && !isNaN(dpi)) {
        const pixels = centimeters * (dpi / 2.54);
        document.getElementById('pixels').value = pixels.toFixed(2);
    } else {
        document.getElementById('pixels').value = '';
    }
}

function convertToCentimeters() {
    const pixels = parseFloat(document.getElementById('pixels').value);
    const dpi = parseFloat(document.getElementById('dpi').value);
    
    if (!isNaN(pixels) && !isNaN(dpi)) {
        const centimeters = pixels / (dpi / 2.54);
        document.getElementById('centimeters').value = centimeters.toFixed(4);
    } else {
        document.getElementById('centimeters').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('centimeters').value = value;
    convertToPixels();
}

function setDPI(value) {
    document.getElementById('dpi').value = value;
    convertToPixels();
}

function swapValues() {
    const centimeters = document.getElementById('centimeters').value;
    const pixels = document.getElementById('pixels').value;
    
    document.getElementById('centimeters').value = pixels;
    document.getElementById('pixels').value = centimeters;
    
    if (pixels) {
        convertToPixels();
    }
}

function clearInputs() {
    document.getElementById('centimeters').value = '';
    document.getElementById('pixels').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
