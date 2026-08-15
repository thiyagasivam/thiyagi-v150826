<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Yard to Ton Register Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic yard to ton register converter 2026. Convert cu yd to ton reg instantly for shipping and cargo volume calculations.">
<meta name="keywords" content="cubic yard to ton register converter 2026, cu yd to ton reg, volume converter, shipping calculator, cargo converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Yard to Ton Register Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic yard to ton register converter 2026. Convert cu yd to ton reg instantly for shipping calculations.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-yard-to-ton-register.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Yard to Ton Register Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic yard to ton register converter 2026. Convert cu yd to ton reg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-slate-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ship text-blue-600 mr-3"></i>
                Cubic Yard to Ton Register Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic yards to ton register instantly for shipping and cargo volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Yards Input -->
                <div class="space-y-2">
                    <label for="cubicYardInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-blue-600 mr-2"></i>Cubic Yards (cu yd)
                    </label>
                    <input
                        type="number"
                        id="cubicYardInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic yards"
                        step="any"
                    >
                </div>

                <!-- Ton Register Output -->
                <div class="space-y-2">
                    <label for="tonRegisterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ship text-blue-600 mr-2"></i>Ton Register (ton reg)
                    </label>
                    <input
                        type="number"
                        id="tonRegisterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Ton register result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversion Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-table text-blue-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1 cu yd</div>
                    <div class="text-sm text-gray-600">= 0.2703 ton reg</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">5 cu yd</div>
                    <div class="text-sm text-gray-600">= 1.3514 ton reg</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">10 cu yd</div>
                    <div class="text-sm text-gray-600">= 2.7027 ton reg</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">100 cu yd</div>
                    <div class="text-sm text-gray-600">= 27.027 ton reg</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between cubic yards and ton register. One cubic yard equals approximately 0.27027 ton register.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Ton Register = Cubic Yards × 0.27027<br>
                    Cubic Yards = Ton Register ÷ 0.27027
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Shipping cargo calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Maritime transport planning</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Freight volume analysis</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Port logistics management</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Commercial vessel capacity</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCubicYardToTonRegister() {
    const cubicYard = parseFloat(document.getElementById('cubicYardInput').value);
    if (!isNaN(cubicYard)) {
        const tonRegister = cubicYard * 0.27027;
        document.getElementById('tonRegisterOutput').value = tonRegister.toFixed(8);
    } else {
        document.getElementById('tonRegisterOutput').value = '';
    }
}

function convertTonRegisterToCubicYard() {
    const tonRegister = parseFloat(document.getElementById('tonRegisterOutput').value);
    if (!isNaN(tonRegister)) {
        const cubicYard = tonRegister / 0.27027;
        document.getElementById('cubicYardInput').value = cubicYard.toFixed(8);
    } else {
        document.getElementById('cubicYardInput').value = '';
    }
}

function swapValues() {
    const cubicYardValue = document.getElementById('cubicYardInput').value;
    const tonRegisterValue = document.getElementById('tonRegisterOutput').value;
    
    document.getElementById('cubicYardInput').value = tonRegisterValue;
    document.getElementById('tonRegisterOutput').value = cubicYardValue;
}

function clearValues() {
    document.getElementById('cubicYardInput').value = '';
    document.getElementById('tonRegisterOutput').value = '';
}

// Add event listeners
document.getElementById('cubicYardInput').addEventListener('input', convertCubicYardToTonRegister);
document.getElementById('tonRegisterOutput').addEventListener('input', convertTonRegisterToCubicYard);
</script>

<?php include 'footer.php'; ?>
