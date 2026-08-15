<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile (Statute) to Foot Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online statute mile to foot converter 2026. Convert mi to ft instantly with accurate length conversion for surveying and construction.">
<meta name="keywords" content="statute mile to foot converter 2026, mi to ft, length converter, surveying calculator, distance converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile (Statute) to Foot Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online statute mile to foot converter 2026. Convert mi to ft instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-statute-to-foot.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile (Statute) to Foot Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online statute mile to foot converter 2026. Convert mi to ft instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-road text-blue-600 mr-3"></i>
                Mile (Statute) to Foot Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert statute miles to feet instantly for surveying and construction applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Miles Input -->
                <div class="space-y-2">
                    <label for="mileInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-road text-blue-600 mr-2"></i>Miles (Statute) (mi)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter miles"
                        step="any"
                    >
                </div>

                <!-- Feet Output -->
                <div class="space-y-2">
                    <label for="footOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-blue-600 mr-2"></i>Feet (ft)
                    </label>
                    <input
                        type="number"
                        id="footOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Feet result"
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
                    <div class="font-bold text-blue-800">1 mi</div>
                    <div class="text-sm text-gray-600">= 5280 ft</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.5 mi</div>
                    <div class="text-sm text-gray-600">= 2640 ft</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.25 mi</div>
                    <div class="text-sm text-gray-600">= 1320 ft</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2 mi</div>
                    <div class="text-sm text-gray-600">= 10560 ft</div>
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
                    This converter helps you convert between statute miles and feet. One statute mile equals exactly 5280 feet.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Feet = Miles × 5280<br>
                    Miles = Feet ÷ 5280
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Land surveying calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Construction project planning</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Road and highway measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Property boundary calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Athletic track measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMileToFoot() {
    const mile = parseFloat(document.getElementById('mileInput').value);
    if (!isNaN(mile)) {
        const foot = mile * 5280;
        document.getElementById('footOutput').value = foot.toFixed(8);
    } else {
        document.getElementById('footOutput').value = '';
    }
}

function convertFootToMile() {
    const foot = parseFloat(document.getElementById('footOutput').value);
    if (!isNaN(foot)) {
        const mile = foot / 5280;
        document.getElementById('mileInput').value = mile.toFixed(8);
    } else {
        document.getElementById('mileInput').value = '';
    }
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const footValue = document.getElementById('footOutput').value;
    
    document.getElementById('mileInput').value = footValue;
    document.getElementById('footOutput').value = mileValue;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('footOutput').value = '';
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', convertMileToFoot);
document.getElementById('footOutput').addEventListener('input', convertFootToMile);
</script>

<?php include 'footer.php'; ?>
