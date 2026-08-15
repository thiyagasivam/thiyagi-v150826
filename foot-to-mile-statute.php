<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Foot to Statute Mile Converter 2026 - Distance Calculator | Thiyagi</title>
<meta name="description" content="Free online foot to statute mile converter 2026. Convert ft to mi instantly with accurate distance conversion for surveying and navigation.">
<meta name="keywords" content="foot to statute mile converter 2026, ft to mi, distance converter, surveying calculator, navigation calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Foot to Statute Mile Converter 2026 - Distance Calculator">
<meta property="og:description" content="Free online foot to statute mile converter 2026. Convert ft to mi instantly with accurate distance conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/foot-to-mile-statute.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Foot to Statute Mile Converter 2026 - Distance Calculator">
<meta name="twitter:description" content="Free online foot to statute mile converter 2026. Convert ft to mi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler text-violet-600 mr-3"></i>
                Foot to Statute Mile Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert feet to statute miles instantly for surveying, navigation, and distance calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Foot Input -->
                <div class="space-y-2">
                    <label for="footInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-shoe-prints text-violet-600 mr-2"></i>Feet (ft)
                    </label>
                    <input
                        type="number"
                        id="footInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter feet"
                        step="any"
                    >
                </div>

                <!-- Statute Mile Output -->
                <div class="space-y-2">
                    <label for="mileOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-road text-violet-600 mr-2"></i>Statute Miles (mi)
                    </label>
                    <input
                        type="number"
                        id="mileOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Statute miles result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-violet-600 hover:bg-violet-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-violet-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">5,280 ft</div>
                    <div class="text-sm text-gray-600">= 1 mi</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">2,640 ft</div>
                    <div class="text-sm text-gray-600">= 0.5 mi</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1,320 ft</div>
                    <div class="text-sm text-gray-600">= 0.25 mi</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">528 ft</div>
                    <div class="text-sm text-gray-600">= 0.1 mi</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-violet-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between feet and statute miles. One statute mile equals 5,280 feet.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Statute Miles = Feet ÷ 5,280<br>
                    Feet = Statute Miles × 5,280
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Land surveying</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Road construction</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Navigation planning</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Civil engineering</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Distance calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertFootToMile() {
    const foot = parseFloat(document.getElementById('footInput').value);
    if (!isNaN(foot)) {
        const mile = foot / 5280; // 1 statute mile = 5,280 feet
        document.getElementById('mileOutput').value = mile.toFixed(8);
    } else {
        document.getElementById('mileOutput').value = '';
    }
}

function convertMileToFoot() {
    const mile = parseFloat(document.getElementById('mileOutput').value);
    if (!isNaN(mile)) {
        const foot = mile * 5280; // 1 statute mile = 5,280 feet
        document.getElementById('footInput').value = foot.toFixed(4);
    } else {
        document.getElementById('footInput').value = '';
    }
}

function swapValues() {
    const footValue = document.getElementById('footInput').value;
    const mileValue = document.getElementById('mileOutput').value;
    
    document.getElementById('footInput').value = mileValue;
    document.getElementById('mileOutput').value = footValue;
}

function clearValues() {
    document.getElementById('footInput').value = '';
    document.getElementById('mileOutput').value = '';
}

// Add event listeners
document.getElementById('footInput').addEventListener('input', convertFootToMile);
document.getElementById('mileOutput').addEventListener('input', convertMileToFoot);
</script>

<?php include 'footer.php'; ?>
