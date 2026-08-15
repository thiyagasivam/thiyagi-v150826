<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to Pound Force Square Inch Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to pound force per square inch converter 2026. Convert pressure units instantly with accurate calculations for engineering applications.">
<meta name="keywords" content="psi to pound force square inch converter 2026, pressure converter, engineering calculator, hydraulic pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to Pound Force Square Inch Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online PSI to pound force per square inch converter 2026. Convert pressure units instantly with accurate calculations.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-pound-force-square-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to Pound Force Square Inch Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online PSI to pound force per square inch converter 2026. Convert pressure units instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-red-600 mr-3"></i>
                PSI to Pound Force per Square Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert PSI to pound force per square inch with precision for engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-2">
                    <label for="psiInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-red-600 mr-2"></i>PSI (psi)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter PSI"
                        step="any"
                    >
                </div>

                <!-- Pound Force per Square Inch Output -->
                <div class="space-y-2">
                    <label for="lbfOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight text-red-600 mr-2"></i>Pound Force per Square Inch (lbf/in²)
                    </label>
                    <input
                        type="number"
                        id="lbfOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Pound force per square inch result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1 psi</div>
                    <div class="text-sm text-gray-600">= 1 lbf/in²</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10 psi</div>
                    <div class="text-sm text-gray-600">= 10 lbf/in²</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">50 psi</div>
                    <div class="text-sm text-gray-600">= 50 lbf/in²</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 psi</div>
                    <div class="text-sm text-gray-600">= 100 lbf/in²</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    PSI (pounds per square inch) and pound force per square inch (lbf/in²) are essentially the same unit with identical values.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pound force per square inch = PSI × 1<br>
                    (Direct equivalence)
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Hydraulic system design</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Pneumatic equipment</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Tire pressure monitoring</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Industrial pressure testing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Engineering calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPsiToLbf() {
    const psi = parseFloat(document.getElementById('psiInput').value);
    if (!isNaN(psi)) {
        const lbf = psi * 1; // Direct equivalence
        document.getElementById('lbfOutput').value = lbf.toFixed(8);
    } else {
        document.getElementById('lbfOutput').value = '';
    }
}

function convertLbfToPsi() {
    const lbf = parseFloat(document.getElementById('lbfOutput').value);
    if (!isNaN(lbf)) {
        const psi = lbf / 1; // Direct equivalence
        document.getElementById('psiInput').value = psi.toFixed(8);
    } else {
        document.getElementById('psiInput').value = '';
    }
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const lbfValue = document.getElementById('lbfOutput').value;
    
    document.getElementById('psiInput').value = lbfValue;
    document.getElementById('lbfOutput').value = psiValue;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('lbfOutput').value = '';
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', convertPsiToLbf);
document.getElementById('lbfOutput').addEventListener('input', convertLbfToPsi);
</script>

<?php include 'footer.php'; ?>
