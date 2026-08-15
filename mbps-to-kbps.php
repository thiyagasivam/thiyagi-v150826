<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mbps to Kbps Converter 2026 - Data Transfer Rate Calculator | Thiyagi</title>
<meta name="description" content="Free online Mbps to Kbps converter 2026. Convert megabits per second to kilobits per second instantly. Perfect for internet speed and bandwidth calculations.">
<meta name="keywords" content="mbps to kbps converter 2026, internet speed converter, bandwidth calculator, data transfer rate, network speed">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mbps to Kbps Converter 2026 - Data Transfer Rate Calculator">
<meta property="og:description" content="Free online Mbps to Kbps converter 2026. Convert megabits per second to kilobits per second instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mbps-to-kbps.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mbps to Kbps Converter 2026 - Data Transfer Rate Calculator">
<meta name="twitter:description" content="Free online Mbps to Kbps converter 2026. Convert megabits per second to kilobits per second instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wifi text-blue-600 mr-3"></i>
                Mbps to Kbps Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megabits per second to kilobits per second instantly
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mbps Input -->
                <div class="space-y-2">
                    <label for="mbpsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wifi text-blue-600 mr-2"></i>Megabits per second (Mbps)
                    </label>
                    <input
                        type="number"
                        id="mbpsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter Mbps"
                        step="any"
                    >
                </div>

                <!-- Kbps Output -->
                <div class="space-y-2">
                    <label for="kbpsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-signal text-blue-600 mr-2"></i>Kilobits per second (Kbps)
                    </label>
                    <input
                        type="number"
                        id="kbpsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Kbps result"
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
                    <div class="font-bold text-blue-800">1 Mbps</div>
                    <div class="text-sm text-gray-600">= 1000 Kbps</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">10 Mbps</div>
                    <div class="text-sm text-gray-600">= 10,000 Kbps</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">100 Mbps</div>
                    <div class="text-sm text-gray-600">= 100,000 Kbps</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1000 Mbps</div>
                    <div class="text-sm text-gray-600">= 1 Gbps</div>
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
                    This converter helps you convert between megabits per second and kilobits per second. One megabit per second equals exactly 1,000 kilobits per second.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kbps = Mbps × 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Internet speed measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Network bandwidth planning</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Video streaming requirements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>File download time calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Network performance monitoring</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMbpsToKbps() {
    const mbps = parseFloat(document.getElementById('mbpsInput').value);
    if (!isNaN(mbps)) {
        const kbps = mbps * 1000;
        document.getElementById('kbpsOutput').value = kbps.toFixed(8);
    } else {
        document.getElementById('kbpsOutput').value = '';
    }
}

function convertKbpsToMbps() {
    const kbps = parseFloat(document.getElementById('kbpsOutput').value);
    if (!isNaN(kbps)) {
        const mbps = kbps / 1000;
        document.getElementById('mbpsInput').value = mbps.toFixed(8);
    } else {
        document.getElementById('mbpsInput').value = '';
    }
}

function swapValues() {
    const mbpsValue = document.getElementById('mbpsInput').value;
    const kbpsValue = document.getElementById('kbpsOutput').value;
    
    document.getElementById('mbpsInput').value = kbpsValue;
    document.getElementById('kbpsOutput').value = mbpsValue;
}

function clearValues() {
    document.getElementById('mbpsInput').value = '';
    document.getElementById('kbpsOutput').value = '';
}

// Add event listeners
document.getElementById('mbpsInput').addEventListener('input', convertMbpsToKbps);
document.getElementById('kbpsOutput').addEventListener('input', convertKbpsToMbps);
</script>

<?php include 'footer.php'; ?>
