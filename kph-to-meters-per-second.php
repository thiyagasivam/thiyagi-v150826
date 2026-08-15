<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>KPH to Meters per Second Converter 2026 - Speed Calculator | Thiyagi</title>
<meta name="description" content="Free online KPH to meters per second converter 2026. Convert km/h to m/s instantly with accurate speed conversion for physics and engineering.">
<meta name="keywords" content="KPH to meters per second converter 2026, km/h to m/s, speed converter, velocity calculator, physics converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="KPH to Meters per Second Converter 2026 - Speed Calculator">
<meta property="og:description" content="Free online KPH to meters per second converter 2026. Convert km/h to m/s instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kph-to-meters-per-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="KPH to Meters per Second Converter 2026 - Speed Calculator">
<meta name="twitter:description" content="Free online KPH to meters per second converter 2026. Convert km/h to m/s instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-blue-600 mr-3"></i>
                KPH to Meters per Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilometers per hour to meters per second instantly for physics, engineering, and sports
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- KPH Input -->
                <div class="space-y-2">
                    <label for="kphInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-car text-blue-600 mr-2"></i>Kilometers per Hour (km/h)
                    </label>
                    <input
                        type="number"
                        id="kphInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter km/h"
                        step="any"
                    >
                </div>

                <!-- M/S Output -->
                <div class="space-y-2">
                    <label for="msOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-running text-blue-600 mr-2"></i>Meters per Second (m/s)
                    </label>
                    <input
                        type="number"
                        id="msOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Meters per second result"
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
                    <div class="font-bold text-blue-800">36 km/h</div>
                    <div class="text-sm text-gray-600">= 10 m/s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">50 km/h</div>
                    <div class="text-sm text-gray-600">= 13.89 m/s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">100 km/h</div>
                    <div class="text-sm text-gray-600">= 27.78 m/s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">120 km/h</div>
                    <div class="text-sm text-gray-600">= 33.33 m/s</div>
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
                    This converter helps you convert between kilometers per hour and meters per second. To convert, divide km/h by 3.6.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    m/s = km/h ÷ 3.6<br>
                    km/h = m/s × 3.6
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Physics calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Engineering projects</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Sports performance</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Vehicle dynamics</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKphToMs() {
    const kph = parseFloat(document.getElementById('kphInput').value);
    if (!isNaN(kph)) {
        const ms = kph / 3.6; // 1 km/h = 1/3.6 m/s
        document.getElementById('msOutput').value = ms.toFixed(6);
    } else {
        document.getElementById('msOutput').value = '';
    }
}

function convertMsToKph() {
    const ms = parseFloat(document.getElementById('msOutput').value);
    if (!isNaN(ms)) {
        const kph = ms * 3.6; // 1 m/s = 3.6 km/h
        document.getElementById('kphInput').value = kph.toFixed(6);
    } else {
        document.getElementById('kphInput').value = '';
    }
}

function swapValues() {
    const kphValue = document.getElementById('kphInput').value;
    const msValue = document.getElementById('msOutput').value;
    
    document.getElementById('kphInput').value = msValue;
    document.getElementById('msOutput').value = kphValue;
}

function clearValues() {
    document.getElementById('kphInput').value = '';
    document.getElementById('msOutput').value = '';
}

// Add event listeners
document.getElementById('kphInput').addEventListener('input', convertKphToMs);
document.getElementById('msOutput').addEventListener('input', convertMsToKph);
</script>

<?php include 'footer.php'; ?>
