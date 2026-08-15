<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pound Force to Kilonewton Converter 2026 - Force Calculator | Thiyagi</title>
<meta name="description" content="Free online pound force to kilonewton converter 2026. Convert lbf to kN instantly with accurate force conversion for engineering applications.">
<meta name="keywords" content="pound force to kilonewton converter 2026, lbf to kN, force converter, engineering calculator, structural converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pound Force to Kilonewton Converter 2026 - Force Calculator">
<meta property="og:description" content="Free online pound force to kilonewton converter 2026. Convert lbf to kN instantly with accurate force conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pound-force-to-kilonewton.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pound Force to Kilonewton Converter 2026 - Force Calculator">
<meta name="twitter:description" content="Free online pound force to kilonewton converter 2026. Convert lbf to kN instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-rose-50 to-pink-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-red-600 mr-3"></i>
                Pound Force to Kilonewton Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pound force to kilonewtons instantly for engineering and structural calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pound Force Input -->
                <div class="space-y-2">
                    <label for="lbfInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-red-600 mr-2"></i>Pound Force (lbf)
                    </label>
                    <input
                        type="number"
                        id="lbfInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter pound force"
                        step="any"
                    >
                </div>

                <!-- Kilonewtons Output -->
                <div class="space-y-2">
                    <label for="knOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-arrow-up text-red-600 mr-2"></i>Kilonewtons (kN)
                    </label>
                    <input
                        type="number"
                        id="knOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Kilonewtons result"
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
                    <div class="font-bold text-red-800">1000 lbf</div>
                    <div class="text-sm text-gray-600">= 4.448 kN</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">500 lbf</div>
                    <div class="text-sm text-gray-600">= 2.224 kN</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 lbf</div>
                    <div class="text-sm text-gray-600">= 0.4448 kN</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">2000 lbf</div>
                    <div class="text-sm text-gray-600">= 8.896 kN</div>
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
                    This converter helps you convert between pound force and kilonewtons. One pound force equals approximately 0.004448 kilonewtons.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilonewtons = Pound Force × 0.004448<br>
                    Pound Force = Kilonewtons ÷ 0.004448
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Structural engineering calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Mechanical force analysis</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Load testing and analysis</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Aerospace engineering</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Materials testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertLbfToKn() {
    const lbf = parseFloat(document.getElementById('lbfInput').value);
    if (!isNaN(lbf)) {
        const kn = lbf * 0.004448222;
        document.getElementById('knOutput').value = kn.toFixed(8);
    } else {
        document.getElementById('knOutput').value = '';
    }
}

function convertKnToLbf() {
    const kn = parseFloat(document.getElementById('knOutput').value);
    if (!isNaN(kn)) {
        const lbf = kn / 0.004448222;
        document.getElementById('lbfInput').value = lbf.toFixed(8);
    } else {
        document.getElementById('lbfInput').value = '';
    }
}

function swapValues() {
    const lbfValue = document.getElementById('lbfInput').value;
    const knValue = document.getElementById('knOutput').value;
    
    document.getElementById('lbfInput').value = knValue;
    document.getElementById('knOutput').value = lbfValue;
}

function clearValues() {
    document.getElementById('lbfInput').value = '';
    document.getElementById('knOutput').value = '';
}

// Add event listeners
document.getElementById('lbfInput').addEventListener('input', convertLbfToKn);
document.getElementById('knOutput').addEventListener('input', convertKnToLbf);
</script>

<?php include 'footer.php'; ?>
