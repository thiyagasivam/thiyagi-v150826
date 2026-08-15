<?php include 'header.php';?>


    <title>Square Miles to Acres Converter 2026 - Area Conversion Calculator</title>
    <meta name="description" content="Convert square miles to acres with our free 2026 online calculator. Accurate area conversion for land measurement and real estate calculations.">
    <meta name="keywords" content="square miles to acres converter 2026, sq mi to acres, area converter, land measurement calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-green-50 to-emerald-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-map text-green-600 mr-3"></i>
                Square Miles to Acres Converter
            </h1>
            <p class="text-lg text-gray-600">Convert square miles to acres instantly with precise calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Miles Input -->
                <div class="space-y-4">
                    <label for="squareMiles" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-globe text-green-600 mr-2"></i>
                        Square Miles
                    </label>
                    <input type="number" id="squareMiles" 
                           class="w-full px-4 py-3 border-2 border-green-300 rounded-lg focus:border-green-500 focus:outline-none text-lg"
                           placeholder="Enter square miles value" 
                           oninput="convertToAcres()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">1 sq mi</button>
                        <button onclick="setAndConvert(5)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">5 sq mi</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">10 sq mi</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm hover:bg-green-200">100 sq mi</button>
                    </div>
                </div>

                <!-- Acres Output -->
                <div class="space-y-4">
                    <label for="acres" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-seedling text-emerald-600 mr-2"></i>
                        Acres
                    </label>
                    <input type="number" id="acres" 
                           class="w-full px-4 py-3 border-2 border-emerald-300 rounded-lg focus:border-emerald-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in acres" 
                           oninput="convertToSquareMiles()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> acres = square miles × 640</p>
                        <p><strong>Note:</strong> 1 square mile = 640 acres</p>
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
            <!-- About Square Miles -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>
                    About Square Miles
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The square mile is a unit of area measurement in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Used for measuring large land areas</li>
                        <li>Common in geography and real estate</li>
                        <li>1 square mile = 640 acres</li>
                        <li>Symbol: sq mi or mi²</li>
                    </ul>
                </div>
            </div>

            <!-- About Acres -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-seedling text-emerald-600 mr-2"></i>
                    About Acres
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The acre is a unit of area commonly used in land measurement.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Traditional unit for farmland and property</li>
                        <li>1 acre = 43,560 square feet</li>
                        <li>Widely used in agriculture and real estate</li>
                        <li>Symbol: ac</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Square Miles</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Acres</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">0.1 sq mi</td>
                            <td class="border border-gray-300 px-4 py-2">64 acres</td>
                            <td class="border border-gray-300 px-4 py-2">Small town area</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 sq mi</td>
                            <td class="border border-gray-300 px-4 py-2">640 acres</td>
                            <td class="border border-gray-300 px-4 py-2">City district</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 sq mi</td>
                            <td class="border border-gray-300 px-4 py-2">6,400 acres</td>
                            <td class="border border-gray-300 px-4 py-2">Large ranch</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 sq mi</td>
                            <td class="border border-gray-300 px-4 py-2">64,000 acres</td>
                            <td class="border border-gray-300 px-4 py-2">County area</td>
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
                        <p>Acres = Square Miles × 640</p>
                        <p>Square Miles = Acres ÷ 640</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• 1 square mile = 640 acres exactly</li>
                        <li>• Used primarily in US land measurement</li>
                        <li>• Common in real estate and agriculture</li>
                        <li>• Different from metric hectares</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToAcres() {
    const squareMiles = parseFloat(document.getElementById('squareMiles').value);
    if (!isNaN(squareMiles)) {
        const acres = squareMiles * 640;
        document.getElementById('acres').value = acres.toFixed(8);
    } else {
        document.getElementById('acres').value = '';
    }
}

function convertToSquareMiles() {
    const acres = parseFloat(document.getElementById('acres').value);
    if (!isNaN(acres)) {
        const squareMiles = acres / 640;
        document.getElementById('squareMiles').value = squareMiles.toFixed(8);
    } else {
        document.getElementById('squareMiles').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('squareMiles').value = value;
    convertToAcres();
}

function swapValues() {
    const squareMiles = document.getElementById('squareMiles').value;
    const acres = document.getElementById('acres').value;
    
    document.getElementById('squareMiles').value = acres;
    document.getElementById('acres').value = squareMiles;
    
    if (acres) {
        convertToAcres();
    }
}

function clearInputs() {
    document.getElementById('squareMiles').value = '';
    document.getElementById('acres').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
