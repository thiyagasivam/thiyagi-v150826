<?php include 'header.php';?>


    <title>Parts Per Million (PPM) to Milligram per Liter Converter 2026 - Concentration Calculator</title>
    <meta name="description" content="Convert parts per million (PPM) to milligram per liter with our free 2026 online calculator. Accurate concentration conversion for water quality and chemical analysis.">
    <meta name="keywords" content="ppm to mg/l converter 2026, parts per million to milligram per liter, concentration converter, water quality calculator 2026">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-flask text-blue-600 mr-3"></i>
                PPM to mg/L Converter
            </h1>
            <p class="text-lg text-gray-600">Convert parts per million to milligrams per liter instantly</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PPM Input -->
                <div class="space-y-4">
                    <label for="ppm" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-percentage text-blue-600 mr-2"></i>
                        Parts Per Million (PPM)
                    </label>
                    <input type="number" id="ppm" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                           placeholder="Enter PPM value" 
                           oninput="convertToMgL()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1 PPM</button>
                        <button onclick="setAndConvert(10)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">10 PPM</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">100 PPM</button>
                        <button onclick="setAndConvert(1000)" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm hover:bg-blue-200">1,000 PPM</button>
                    </div>
                </div>

                <!-- mg/L Output -->
                <div class="space-y-4">
                    <label for="mgL" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-vial text-indigo-600 mr-2"></i>
                        Milligram per Liter (mg/L)
                    </label>
                    <input type="number" id="mgL" 
                           class="w-full px-4 py-3 border-2 border-indigo-300 rounded-lg focus:border-indigo-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in mg/L" 
                           oninput="convertToPPM()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> mg/L = PPM × 1</p>
                        <p><strong>Note:</strong> For aqueous solutions: 1 PPM = 1 mg/L</p>
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
            <!-- About PPM -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-percentage text-blue-600 mr-2"></i>
                    About Parts Per Million (PPM)
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>PPM is a unit of concentration expressing the ratio of one part substance to one million parts total.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Dimensionless unit of concentration</li>
                        <li>Used in environmental monitoring</li>
                        <li>Common in water quality analysis</li>
                        <li>1 PPM = 1/1,000,000</li>
                    </ul>
                </div>
            </div>

            <!-- About mg/L -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-vial text-indigo-600 mr-2"></i>
                    About Milligram per Liter (mg/L)
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>mg/L is a unit of concentration expressing mass per unit volume.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Mass concentration unit</li>
                        <li>Standard in laboratory analysis</li>
                        <li>Used in chemical and medical testing</li>
                        <li>Equivalent to PPM for water solutions</li>
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
                            <th class="border border-gray-300 px-4 py-2 text-left">PPM</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">mg/L</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Use Case</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 PPM</td>
                            <td class="border border-gray-300 px-4 py-2">1 mg/L</td>
                            <td class="border border-gray-300 px-4 py-2">Trace contamination</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">10 PPM</td>
                            <td class="border border-gray-300 px-4 py-2">10 mg/L</td>
                            <td class="border border-gray-300 px-4 py-2">Chlorine in pools</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 PPM</td>
                            <td class="border border-gray-300 px-4 py-2">100 mg/L</td>
                            <td class="border border-gray-300 px-4 py-2">Water hardness</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1,000 PPM</td>
                            <td class="border border-gray-300 px-4 py-2">1,000 mg/L</td>
                            <td class="border border-gray-300 px-4 py-2">Salt concentration</td>
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
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula (Aqueous Solutions)</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>mg/L = PPM × 1</p>
                        <p>PPM = mg/L × 1</p>
                        <p class="text-xs text-gray-500 mt-2">*For water at standard conditions</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Important Notes</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Valid for aqueous solutions only</li>
                        <li>• Assumes solution density ≈ 1 g/mL</li>
                        <li>• Temperature and pressure dependent</li>
                        <li>• Used in environmental monitoring</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Warning Note -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-8">
            <div class="flex">
                <div class="flex-shrink-0">
                    <i class="fas fa-exclamation-triangle text-yellow-400 text-xl"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-yellow-700">
                        <strong>Important:</strong> This conversion is valid for aqueous solutions where the solution density is approximately 1 g/mL. 
                        For non-aqueous solutions or solutions with significantly different densities, the conversion factor may differ.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMgL() {
    const ppm = parseFloat(document.getElementById('ppm').value);
    if (!isNaN(ppm)) {
        // For aqueous solutions, 1 PPM = 1 mg/L
        const mgL = ppm * 1;
        document.getElementById('mgL').value = mgL.toFixed(6);
    } else {
        document.getElementById('mgL').value = '';
    }
}

function convertToPPM() {
    const mgL = parseFloat(document.getElementById('mgL').value);
    if (!isNaN(mgL)) {
        // For aqueous solutions, 1 mg/L = 1 PPM
        const ppm = mgL * 1;
        document.getElementById('ppm').value = ppm.toFixed(6);
    } else {
        document.getElementById('ppm').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('ppm').value = value;
    convertToMgL();
}

function swapValues() {
    const ppm = document.getElementById('ppm').value;
    const mgL = document.getElementById('mgL').value;
    
    document.getElementById('ppm').value = mgL;
    document.getElementById('mgL').value = ppm;
    
    if (mgL) {
        convertToMgL();
    }
}

function clearInputs() {
    document.getElementById('ppm').value = '';
    document.getElementById('mgL').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
