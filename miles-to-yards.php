<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Miles to Yards Converter 2026 - Distance Calculator | Thiyagi</title>
<meta name="description" content="Free online miles to yards converter 2026. Convert miles to yards instantly with accurate distance conversion. Perfect for sports, surveying, and athletic measurements.">
<meta name="keywords" content="miles to yards converter 2026, miles to yards, distance converter, sports calculator, surveying tool, athletic measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Miles to Yards Converter 2026 - Distance Calculator">
<meta property="og:description" content="Free online miles to yards converter 2026. Convert miles to yards instantly with accurate distance conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/miles-to-yards.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Miles to Yards Converter 2026 - Distance Calculator">
<meta name="twitter:description" content="Free online miles to yards converter 2026. Convert miles to yards instantly with accurate distance conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-road text-purple-600 mr-3"></i>
                Miles to Yards Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert miles to yards instantly with our precise distance converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Miles Input -->
                <div class="space-y-2">
                    <label for="mileInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-road text-purple-600 mr-2"></i>Miles (mi)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter miles"
                        step="any"
                    >
                </div>

                <!-- Yards Output -->
                <div class="space-y-2">
                    <label for="yardOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Yards (yd)
                    </label>
                    <input
                        type="number"
                        id="yardOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Yards result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-purple-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.25 mi</div>
                    <div class="text-sm text-gray-600">= 440 yd</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.5 mi</div>
                    <div class="text-sm text-gray-600">= 880 yd</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 mi</div>
                    <div class="text-sm text-gray-600">= 1,760 yd</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">5 mi</div>
                    <div class="text-sm text-gray-600">= 8,800 yd</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between miles and yards. One mile equals exactly 1,760 yards in the imperial system.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Yards = Miles × 1,760
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Sports field measurements</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Running and walking distances</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Football field comparisons</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Property and land surveying</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Navigation and mapping</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMileToYard() {
    const mile = parseFloat(document.getElementById('mileInput').value);
    if (!isNaN(mile)) {
        const yard = mile * 1760;
        document.getElementById('yardOutput').value = yard.toFixed(8);
    } else {
        document.getElementById('yardOutput').value = '';
    }
}

function convertYardToMile() {
    const yard = parseFloat(document.getElementById('yardOutput').value);
    if (!isNaN(yard)) {
        const mile = yard / 1760;
        document.getElementById('mileInput').value = mile.toFixed(8);
    } else {
        document.getElementById('mileInput').value = '';
    }
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const yardValue = document.getElementById('yardOutput').value;
    
    document.getElementById('mileInput').value = yardValue;
    document.getElementById('yardOutput').value = mileValue;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('yardOutput').value = '';
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', convertMileToYard);
document.getElementById('yardOutput').addEventListener('input', convertYardToMile);
</script>

<?php include 'footer.php'; ?>
