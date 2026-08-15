<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millibar to PSI Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online millibar to PSI converter 2026. Convert mbar to psi instantly with accurate pressure conversion for meteorology and engineering.">
<meta name="keywords" content="millibar to PSI converter 2026, mbar to psi, pressure converter, meteorology calculator, engineering converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millibar to PSI Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online millibar to PSI converter 2026. Convert mbar to psi instantly with accurate pressure conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millibar-to-psi.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millibar to PSI Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online millibar to PSI converter 2026. Convert mbar to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-blue-600 mr-3"></i>
                Millibar to PSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert millibar to PSI instantly for meteorology, engineering, and pressure measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millibar Input -->
                <div class="space-y-2">
                    <label for="millibarInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cloud text-blue-600 mr-2"></i>Millibar (mbar)
                    </label>
                    <input
                        type="number"
                        id="millibarInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter millibar"
                        step="any"
                    >
                </div>

                <!-- PSI Output -->
                <div class="space-y-2">
                    <label for="psiOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-gauge-high text-blue-600 mr-2"></i>PSI (lbf/in²)
                    </label>
                    <input
                        type="number"
                        id="psiOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="PSI result"
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
                    <div class="font-bold text-blue-800">1000 mbar</div>
                    <div class="text-sm text-gray-600">= 14.504 psi</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1013 mbar</div>
                    <div class="text-sm text-gray-600">= 14.696 psi</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1500 mbar</div>
                    <div class="text-sm text-gray-600">= 21.756 psi</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2000 mbar</div>
                    <div class="text-sm text-gray-600">= 29.008 psi</div>
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
                    This converter helps you convert between millibar and PSI. One millibar equals approximately 0.014504 PSI.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    PSI = Millibar × 0.014504<br>
                    Millibar = PSI ÷ 0.014504
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Weather monitoring</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Barometric pressure</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>HVAC systems</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Tire pressure</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Industrial equipment</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMillibarToPsi() {
    const millibar = parseFloat(document.getElementById('millibarInput').value);
    if (!isNaN(millibar)) {
        const psi = millibar * 0.014504; // 1 mbar = 0.014504 psi
        document.getElementById('psiOutput').value = psi.toFixed(6);
    } else {
        document.getElementById('psiOutput').value = '';
    }
}

function convertPsiToMillibar() {
    const psi = parseFloat(document.getElementById('psiOutput').value);
    if (!isNaN(psi)) {
        const millibar = psi / 0.014504; // 1 mbar = 0.014504 psi
        document.getElementById('millibarInput').value = millibar.toFixed(6);
    } else {
        document.getElementById('millibarInput').value = '';
    }
}

function swapValues() {
    const millibarValue = document.getElementById('millibarInput').value;
    const psiValue = document.getElementById('psiOutput').value;
    
    document.getElementById('millibarInput').value = psiValue;
    document.getElementById('psiOutput').value = millibarValue;
}

function clearValues() {
    document.getElementById('millibarInput').value = '';
    document.getElementById('psiOutput').value = '';
}

// Add event listeners
document.getElementById('millibarInput').addEventListener('input', convertMillibarToPsi);
document.getElementById('psiOutput').addEventListener('input', convertPsiToMillibar);
</script>

<?php include 'footer.php'; ?>
