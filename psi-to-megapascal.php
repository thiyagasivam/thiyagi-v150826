<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to Megapascal Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to megapascal converter 2026. Convert pounds per square inch to MPa instantly. Perfect for engineering and high-pressure applications.">
<meta name="keywords" content="psi to megapascal converter 2026, psi to mpa, pressure converter, engineering calculator, high pressure conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to Megapascal Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online PSI to megapascal converter 2026. Convert pounds per square inch to MPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-megapascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to Megapascal Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online PSI to megapascal converter 2026. Convert pounds per square inch to MPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-gray-50 via-slate-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-gray-600 mr-3"></i>
                PSI to Megapascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pounds per square inch to megapascals instantly with our precise pressure converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-2">
                    <label for="psiInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-gray-600 mr-2"></i>PSI (Pounds per Square Inch)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-lg"
                        placeholder="Enter PSI"
                        step="any"
                    >
                </div>

                <!-- MPa Output -->
                <div class="space-y-2">
                    <label for="mpaOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-gray-600 mr-2"></i>Megapascals (MPa)
                    </label>
                    <input
                        type="number"
                        id="mpaOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-transparent text-lg"
                        placeholder="MPa result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-gray-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-gray-800">145 PSI</div>
                    <div class="text-sm text-gray-600">= 1 MPa</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-gray-800">290 PSI</div>
                    <div class="text-sm text-gray-600">= 2 MPa</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-gray-800">1450 PSI</div>
                    <div class="text-sm text-gray-600">= 10 MPa</div>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-gray-800">14500 PSI</div>
                    <div class="text-sm text-gray-600">= 100 MPa</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-gray-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between PSI and megapascals. One PSI equals approximately 0.00689476 megapascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    MPa = PSI × 0.00689476
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-gray-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-gray-600 mr-2"></i>High-pressure hydraulic systems</li>
                    <li><i class="fas fa-check text-gray-600 mr-2"></i>Material strength testing</li>
                    <li><i class="fas fa-check text-gray-600 mr-2"></i>Industrial pressure vessels</li>
                    <li><i class="fas fa-check text-gray-600 mr-2"></i>Oil and gas pipeline specifications</li>
                    <li><i class="fas fa-check text-gray-600 mr-2"></i>Structural engineering calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPsiToMpa() {
    const psi = parseFloat(document.getElementById('psiInput').value);
    if (!isNaN(psi)) {
        const mpa = psi * 0.00689476;
        document.getElementById('mpaOutput').value = mpa.toFixed(8);
    } else {
        document.getElementById('mpaOutput').value = '';
    }
}

function convertMpaToPsi() {
    const mpa = parseFloat(document.getElementById('mpaOutput').value);
    if (!isNaN(mpa)) {
        const psi = mpa / 0.00689476;
        document.getElementById('psiInput').value = psi.toFixed(8);
    } else {
        document.getElementById('psiInput').value = '';
    }
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const mpaValue = document.getElementById('mpaOutput').value;
    
    document.getElementById('psiInput').value = mpaValue;
    document.getElementById('mpaOutput').value = psiValue;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('mpaOutput').value = '';
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', convertPsiToMpa);
document.getElementById('mpaOutput').addEventListener('input', convertMpaToPsi);
</script>

<?php include 'footer.php'; ?>
