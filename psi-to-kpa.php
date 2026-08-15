<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to kPa Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to kPa converter 2026. Convert pounds per square inch to kilopascals instantly. Perfect for engineering and automotive pressure measurements.">
<meta name="keywords" content="psi to kpa converter 2026, pressure converter, engineering calculator, automotive pressure, tire pressure converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to kPa Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online PSI to kPa converter 2026. Convert pounds per square inch to kilopascals instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-kpa.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to kPa Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online PSI to kPa converter 2026. Convert pounds per square inch to kilopascals instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-blue-600 mr-3"></i>
                PSI to kPa Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pounds per square inch to kilopascals instantly with our precise pressure converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-2">
                    <label for="psiInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-blue-600 mr-2"></i>PSI (Pounds per Square Inch)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter PSI"
                        step="any"
                    >
                </div>

                <!-- kPa Output -->
                <div class="space-y-2">
                    <label for="kpaOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-blue-600 mr-2"></i>Kilopascals (kPa)
                    </label>
                    <input
                        type="number"
                        id="kpaOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="kPa result"
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
                    <div class="font-bold text-blue-800">1 PSI</div>
                    <div class="text-sm text-gray-600">≈ 6.895 kPa</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">15 PSI</div>
                    <div class="text-sm text-gray-600">≈ 103.4 kPa</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">30 PSI</div>
                    <div class="text-sm text-gray-600">≈ 206.8 kPa</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">100 PSI</div>
                    <div class="text-sm text-gray-600">≈ 689.5 kPa</div>
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
                    This converter helps you convert between PSI and kilopascals. One PSI equals approximately 6.895 kilopascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    kPa = PSI × 6.89476
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Tire pressure monitoring</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Hydraulic system specifications</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Air compressor ratings</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Pneumatic tool requirements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Industrial pressure systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPsiToKpa() {
    const psi = parseFloat(document.getElementById('psiInput').value);
    if (!isNaN(psi)) {
        const kpa = psi * 6.89476;
        document.getElementById('kpaOutput').value = kpa.toFixed(8);
    } else {
        document.getElementById('kpaOutput').value = '';
    }
}

function convertKpaToPsi() {
    const kpa = parseFloat(document.getElementById('kpaOutput').value);
    if (!isNaN(kpa)) {
        const psi = kpa / 6.89476;
        document.getElementById('psiInput').value = psi.toFixed(8);
    } else {
        document.getElementById('psiInput').value = '';
    }
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const kpaValue = document.getElementById('kpaOutput').value;
    
    document.getElementById('psiInput').value = kpaValue;
    document.getElementById('kpaOutput').value = psiValue;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('kpaOutput').value = '';
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', convertPsiToKpa);
document.getElementById('kpaOutput').addEventListener('input', convertKpaToPsi);
</script>

<?php include 'footer.php'; ?>
