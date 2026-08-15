<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilonewton to Kilogram-Force Converter 2026 - Force Calculator | Thiyagi</title>
<meta name="description" content="Free online kilonewton to kilogram-force converter 2026. Convert kN to kgf instantly with accurate force conversion for engineering calculations.">
<meta name="keywords" content="kilonewton to kilogram-force converter 2026, kN to kgf, force converter, engineering calculator, structural calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilonewton to Kilogram-Force Converter 2026 - Force Calculator">
<meta property="og:description" content="Free online kilonewton to kilogram-force converter 2026. Convert kN to kgf instantly with accurate force conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilonewton-to-kilogram-force.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilonewton to Kilogram-Force Converter 2026 - Force Calculator">
<meta name="twitter:description" content="Free online kilonewton to kilogram-force converter 2026. Convert kN to kgf instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-pink-50 to-rose-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fist-raised text-red-600 mr-3"></i>
                Kilonewton to Kilogram-Force Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilonewtons to kilogram-force instantly for engineering and structural force calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilonewton Input -->
                <div class="space-y-2">
                    <label for="kilonewtonInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-red-600 mr-2"></i>Kilonewtons (kN)
                    </label>
                    <input
                        type="number"
                        id="kilonewtonInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter kilonewtons"
                        step="any"
                    >
                </div>

                <!-- Kilogram-Force Output -->
                <div class="space-y-2">
                    <label for="kgfOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-red-600 mr-2"></i>Kilogram-Force (kgf)
                    </label>
                    <input
                        type="number"
                        id="kgfOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Kilogram-force result"
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
                    <div class="font-bold text-red-800">1 kN</div>
                    <div class="text-sm text-gray-600">= 101.97 kgf</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">5 kN</div>
                    <div class="text-sm text-gray-600">= 509.86 kgf</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10 kN</div>
                    <div class="text-sm text-gray-600">= 1,019.7 kgf</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 kN</div>
                    <div class="text-sm text-gray-600">= 10,197 kgf</div>
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
                    This converter helps you convert between kilonewtons and kilogram-force. One kilonewton equals approximately 101.97 kilogram-force.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilogram-Force = Kilonewtons × 101.97<br>
                    Kilonewtons = Kilogram-Force ÷ 101.97
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Structural engineering</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Load calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Mechanical design</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Material testing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Construction planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKilonewtonToKgf() {
    const kilonewton = parseFloat(document.getElementById('kilonewtonInput').value);
    if (!isNaN(kilonewton)) {
        const kgf = kilonewton * 101.97; // 1 kN = 101.97 kgf
        document.getElementById('kgfOutput').value = kgf.toFixed(6);
    } else {
        document.getElementById('kgfOutput').value = '';
    }
}

function convertKgfToKilonewton() {
    const kgf = parseFloat(document.getElementById('kgfOutput').value);
    if (!isNaN(kgf)) {
        const kilonewton = kgf / 101.97; // 1 kN = 101.97 kgf
        document.getElementById('kilonewtonInput').value = kilonewton.toFixed(8);
    } else {
        document.getElementById('kilonewtonInput').value = '';
    }
}

function swapValues() {
    const kilonewtonValue = document.getElementById('kilonewtonInput').value;
    const kgfValue = document.getElementById('kgfOutput').value;
    
    document.getElementById('kilonewtonInput').value = kgfValue;
    document.getElementById('kgfOutput').value = kilonewtonValue;
}

function clearValues() {
    document.getElementById('kilonewtonInput').value = '';
    document.getElementById('kgfOutput').value = '';
}

// Add event listeners
document.getElementById('kilonewtonInput').addEventListener('input', convertKilonewtonToKgf);
document.getElementById('kgfOutput').addEventListener('input', convertKgfToKilonewton);
</script>

<?php include 'footer.php'; ?>
