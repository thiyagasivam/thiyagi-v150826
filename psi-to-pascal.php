<?php include 'header.php';?>


    <title>PSI to Pascal Converter 2026 - Pressure Conversion Calculator</title>
    <meta name="description" content="Convert PSI to Pascal with our free 2026 online calculator. Perfect for engineering, automotive, and pressure system calculations.">
    <meta name="keywords" content="psi to pascal converter 2026, pressure converter, engineering calculator, automotive pressure 2026">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-orange-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">
                <i class="fas fa-gauge-high text-red-600 mr-3"></i>
                PSI to Pascal Converter
            </h1>
            <p class="text-lg text-gray-600">Convert pressure from PSI to Pascal for engineering calculations</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psi" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-gauge-high text-red-600 mr-2"></i>
                        PSI (pounds per square inch)
                    </label>
                    <input type="number" id="psi" 
                           class="w-full px-4 py-3 border-2 border-red-300 rounded-lg focus:border-red-500 focus:outline-none text-lg"
                           placeholder="Enter PSI value" 
                           oninput="convertToPascal()">
                    
                    <!-- Quick Values -->
                    <div class="flex flex-wrap gap-2 mt-3">
                        <button onclick="setAndConvert(1)" class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm hover:bg-red-200">1 PSI</button>
                        <button onclick="setAndConvert(15)" class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm hover:bg-red-200">15 PSI</button>
                        <button onclick="setAndConvert(30)" class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm hover:bg-red-200">30 PSI</button>
                        <button onclick="setAndConvert(100)" class="px-3 py-1 bg-red-100 text-red-800 rounded-full text-sm hover:bg-red-200">100 PSI</button>
                    </div>
                </div>

                <!-- Pascal Output -->
                <div class="space-y-4">
                    <label for="pascal" class="block text-lg font-semibold text-gray-700">
                        <i class="fas fa-arrow-up text-orange-600 mr-2"></i>
                        Pascal (Pa)
                    </label>
                    <input type="number" id="pascal" 
                           class="w-full px-4 py-3 border-2 border-orange-300 rounded-lg focus:border-orange-500 focus:outline-none text-lg bg-gray-50"
                           placeholder="Result in Pascal" 
                           oninput="convertToPSI()" readonly>
                    
                    <!-- Conversion Info -->
                    <div class="text-sm text-gray-600 mt-3">
                        <p><strong>Formula:</strong> Pascal = PSI × 6,894.757</p>
                        <p><strong>Note:</strong> 1 PSI = 6,894.757 Pascal</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 mt-8 justify-center">
                <button onclick="clearInputs()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button onclick="swapValues()" class="px-6 py-3 bg-orange-500 text-white rounded-lg hover:bg-orange-600 transition duration-300">
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8 mb-8">
            <!-- About PSI -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-gauge-high text-red-600 mr-2"></i>
                    About PSI
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>PSI stands for pounds per square inch, a pressure unit in the imperial system.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>Common in automotive applications</li>
                        <li>Used for tire pressure</li>
                        <li>Standard in US industry</li>
                        <li>Symbol: psi or lbf/in²</li>
                    </ul>
                </div>
            </div>

            <!-- About Pascal -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-arrow-up text-orange-600 mr-2"></i>
                    About Pascal
                </h2>
                <div class="text-gray-600 space-y-3">
                    <p>The Pascal is the SI unit of pressure named after Blaise Pascal.</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>SI base unit of pressure</li>
                        <li>1 Pascal = 1 Newton/m²</li>
                        <li>Used in scientific calculations</li>
                        <li>Symbol: Pa</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Conversion Examples -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-calculator text-green-600 mr-2"></i>
                Pressure Conversion Examples
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">PSI</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Pascal</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">1 PSI</td>
                            <td class="border border-gray-300 px-4 py-2">6,895 Pa</td>
                            <td class="border border-gray-300 px-4 py-2">Low pressure</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">15 PSI</td>
                            <td class="border border-gray-300 px-4 py-2">103,421 Pa</td>
                            <td class="border border-gray-300 px-4 py-2">Atmospheric</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">30 PSI</td>
                            <td class="border border-gray-300 px-4 py-2">206,843 Pa</td>
                            <td class="border border-gray-300 px-4 py-2">Tire pressure</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">100 PSI</td>
                            <td class="border border-gray-300 px-4 py-2">689,476 Pa</td>
                            <td class="border border-gray-300 px-4 py-2">High pressure</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Formula and Notes -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                Conversion Formula & Engineering Notes
            </h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Formula</h3>
                    <div class="bg-gray-50 p-4 rounded-lg font-mono text-sm">
                        <p>Pascal = PSI × 6,894.757</p>
                        <p>PSI = Pascal ÷ 6,894.757</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Applications</h3>
                    <ul class="text-gray-600 space-y-1 text-sm">
                        <li>• Automotive tire pressure</li>
                        <li>• Hydraulic systems</li>
                        <li>• Engineering calculations</li>
                        <li>• Scientific research</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function convertToPascal() {
    const psi = parseFloat(document.getElementById('psi').value);
    if (!isNaN(psi)) {
        const pascal = psi * 6894.757;
        document.getElementById('pascal').value = pascal.toFixed(2);
    } else {
        document.getElementById('pascal').value = '';
    }
}

function convertToPSI() {
    const pascal = parseFloat(document.getElementById('pascal').value);
    if (!isNaN(pascal)) {
        const psi = pascal / 6894.757;
        document.getElementById('psi').value = psi.toFixed(6);
    } else {
        document.getElementById('psi').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('psi').value = value;
    convertToPascal();
}

function swapValues() {
    const psi = document.getElementById('psi').value;
    const pascal = document.getElementById('pascal').value;
    
    document.getElementById('psi').value = pascal;
    document.getElementById('pascal').value = psi;
    
    if (pascal) {
        convertToPascal();
    }
}

function clearInputs() {
    document.getElementById('psi').value = '';
    document.getElementById('pascal').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
