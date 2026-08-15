<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pascal to PSI Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online Pascal to PSI converter 2026. Convert pascals to pounds per square inch instantly. Perfect for engineering and scientific pressure calculations.">
<meta name="keywords" content="pascal to psi converter 2026, pa to psi, pressure converter, engineering calculator, scientific converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pascal to PSI Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online Pascal to PSI converter 2026. Convert pascals to pounds per square inch instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pascal-to-psi.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pascal to PSI Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online Pascal to PSI converter 2026. Convert pascals to pounds per square inch instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-thermometer-half text-slate-600 mr-3"></i>
                Pascal to PSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pascals to pounds per square inch instantly with our precise pressure converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pascal Input -->
                <div class="space-y-2">
                    <label for="pascalInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-slate-600 mr-2"></i>Pascal (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Enter pascals"
                        step="any"
                    >
                </div>

                <!-- PSI Output -->
                <div class="space-y-2">
                    <label for="psiOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-slate-600 mr-2"></i>PSI (Pounds per Square Inch)
                    </label>
                    <input
                        type="number"
                        id="psiOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="PSI result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-slate-600 hover:bg-slate-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-slate-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">6895 Pa</div>
                    <div class="text-sm text-gray-600">= 1 PSI</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">100000 Pa</div>
                    <div class="text-sm text-gray-600">≈ 14.5 PSI</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">200000 Pa</div>
                    <div class="text-sm text-gray-600">≈ 29 PSI</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">689500 Pa</div>
                    <div class="text-sm text-gray-600">= 100 PSI</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-slate-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between pascals and PSI. One PSI equals approximately 6,895.757 pascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    PSI = Pascal ÷ 6,895.757
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>International pressure conversions</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Scientific instrument calibration</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Engineering design calculations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Meteorological measurements</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Industrial pressure monitoring</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPascalToPsi() {
    const pascal = parseFloat(document.getElementById('pascalInput').value);
    if (!isNaN(pascal)) {
        const psi = pascal / 6895.757;
        document.getElementById('psiOutput').value = psi.toFixed(8);
    } else {
        document.getElementById('psiOutput').value = '';
    }
}

function convertPsiToPascal() {
    const psi = parseFloat(document.getElementById('psiOutput').value);
    if (!isNaN(psi)) {
        const pascal = psi * 6895.757;
        document.getElementById('pascalInput').value = pascal.toFixed(8);
    } else {
        document.getElementById('pascalInput').value = '';
    }
}

function swapValues() {
    const pascalValue = document.getElementById('pascalInput').value;
    const psiValue = document.getElementById('psiOutput').value;
    
    document.getElementById('pascalInput').value = psiValue;
    document.getElementById('psiOutput').value = pascalValue;
}

function clearValues() {
    document.getElementById('pascalInput').value = '';
    document.getElementById('psiOutput').value = '';
}

// Add event listeners
document.getElementById('pascalInput').addEventListener('input', convertPascalToPsi);
document.getElementById('psiOutput').addEventListener('input', convertPsiToPascal);
</script>

<?php include 'footer.php'; ?>
