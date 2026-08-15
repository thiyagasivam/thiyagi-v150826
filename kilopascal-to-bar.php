<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilopascal to Bar Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online kilopascal to bar converter 2026. Convert kPa to bar instantly with accurate pressure conversion for engineering and science.">
<meta name="keywords" content="kilopascal to bar converter 2026, kPa to bar, pressure converter, engineering calculator, science converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilopascal to Bar Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online kilopascal to bar converter 2026. Convert kPa to bar instantly with accurate pressure conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilopascal-to-bar.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilopascal to Bar Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online kilopascal to bar converter 2026. Convert kPa to bar instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress-arrows-alt text-emerald-600 mr-3"></i>
                Kilopascal to Bar Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilopascal to bar instantly for engineering, science, and pressure measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilopascal Input -->
                <div class="space-y-2">
                    <label for="kilopascalInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-emerald-600 mr-2"></i>Kilopascal (kPa)
                    </label>
                    <input
                        type="number"
                        id="kilopascalInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter kilopascal"
                        step="any"
                    >
                </div>

                <!-- Bar Output -->
                <div class="space-y-2">
                    <label for="barOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-emerald-600 mr-2"></i>Bar
                    </label>
                    <input
                        type="number"
                        id="barOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Bar result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-emerald-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">100 kPa</div>
                    <div class="text-sm text-gray-600">= 1 bar</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">200 kPa</div>
                    <div class="text-sm text-gray-600">= 2 bar</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">500 kPa</div>
                    <div class="text-sm text-gray-600">= 5 bar</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">1000 kPa</div>
                    <div class="text-sm text-gray-600">= 10 bar</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-emerald-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between kilopascal and bar. One kilopascal equals 0.01 bar (100 kPa = 1 bar).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Bar = Kilopascal × 0.01<br>
                    Kilopascal = Bar × 100
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Hydraulic systems</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Pneumatic equipment</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Weather forecasting</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Industrial processes</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKilopascalToBar() {
    const kilopascal = parseFloat(document.getElementById('kilopascalInput').value);
    if (!isNaN(kilopascal)) {
        const bar = kilopascal * 0.01; // 1 kPa = 0.01 bar
        document.getElementById('barOutput').value = bar.toFixed(6);
    } else {
        document.getElementById('barOutput').value = '';
    }
}

function convertBarToKilopascal() {
    const bar = parseFloat(document.getElementById('barOutput').value);
    if (!isNaN(bar)) {
        const kilopascal = bar * 100; // 1 bar = 100 kPa
        document.getElementById('kilopascalInput').value = kilopascal.toFixed(6);
    } else {
        document.getElementById('kilopascalInput').value = '';
    }
}

function swapValues() {
    const kilopascalValue = document.getElementById('kilopascalInput').value;
    const barValue = document.getElementById('barOutput').value;
    
    document.getElementById('kilopascalInput').value = barValue;
    document.getElementById('barOutput').value = kilopascalValue;
}

function clearValues() {
    document.getElementById('kilopascalInput').value = '';
    document.getElementById('barOutput').value = '';
}

// Add event listeners
document.getElementById('kilopascalInput').addEventListener('input', convertKilopascalToBar);
document.getElementById('barOutput').addEventListener('input', convertBarToKilopascal);
</script>

<?php include 'footer.php'; ?>
