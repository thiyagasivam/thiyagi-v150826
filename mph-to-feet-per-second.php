<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>MPH to Feet per Second Converter 2026 - Speed Calculator | Thiyagi</title>
<meta name="description" content="Free online miles per hour to feet per second converter 2026. Convert mph to ft/s instantly for speed and velocity calculations.">
<meta name="keywords" content="mph to feet per second converter 2026, mph to ft/s, speed converter, velocity calculator, automotive converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="MPH to Feet per Second Converter 2026 - Speed Calculator">
<meta property="og:description" content="Free online miles per hour to feet per second converter 2026. Convert mph to ft/s instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mph-to-feet-per-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="MPH to Feet per Second Converter 2026 - Speed Calculator">
<meta name="twitter:description" content="Free online miles per hour to feet per second converter 2026. Convert mph to ft/s instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-lime-50 to-emerald-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-green-600 mr-3"></i>
                MPH to Feet per Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert miles per hour to feet per second instantly for speed and velocity calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- MPH Input -->
                <div class="space-y-2">
                    <label for="mphInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-green-600 mr-2"></i>Miles per Hour (mph)
                    </label>
                    <input
                        type="number"
                        id="mphInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter mph"
                        step="any"
                    >
                </div>

                <!-- Feet per Second Output -->
                <div class="space-y-2">
                    <label for="fpsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-running text-green-600 mr-2"></i>Feet per Second (ft/s)
                    </label>
                    <input
                        type="number"
                        id="fpsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Feet per second result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-green-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">1 mph</div>
                    <div class="text-sm text-gray-600">= 1.467 ft/s</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">30 mph</div>
                    <div class="text-sm text-gray-600">= 44 ft/s</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">60 mph</div>
                    <div class="text-sm text-gray-600">= 88 ft/s</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">100 mph</div>
                    <div class="text-sm text-gray-600">= 146.7 ft/s</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between miles per hour and feet per second. One mph equals approximately 1.467 ft/s.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Feet/Second = MPH × 1.46667<br>
                    MPH = Feet/Second ÷ 1.46667
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Automotive speed calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Sports performance analysis</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Physics problem solving</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Aviation speed conversions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMphToFps() {
    const mph = parseFloat(document.getElementById('mphInput').value);
    if (!isNaN(mph)) {
        const fps = mph * 1.46667;
        document.getElementById('fpsOutput').value = fps.toFixed(8);
    } else {
        document.getElementById('fpsOutput').value = '';
    }
}

function convertFpsToMph() {
    const fps = parseFloat(document.getElementById('fpsOutput').value);
    if (!isNaN(fps)) {
        const mph = fps / 1.46667;
        document.getElementById('mphInput').value = mph.toFixed(8);
    } else {
        document.getElementById('mphInput').value = '';
    }
}

function swapValues() {
    const mphValue = document.getElementById('mphInput').value;
    const fpsValue = document.getElementById('fpsOutput').value;
    
    document.getElementById('mphInput').value = fpsValue;
    document.getElementById('fpsOutput').value = mphValue;
}

function clearValues() {
    document.getElementById('mphInput').value = '';
    document.getElementById('fpsOutput').value = '';
}

// Add event listeners
document.getElementById('mphInput').addEventListener('input', convertMphToFps);
document.getElementById('fpsOutput').addEventListener('input', convertFpsToMph);
</script>

<?php include 'footer.php'; ?>
