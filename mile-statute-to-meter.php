<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile (Statute) to Meter Converter 2026 - Distance Calculator | Thiyagi</title>
<meta name="description" content="Free online mile to meter converter 2026. Convert statute miles to meters instantly. Perfect for running, road trips, and international distance conversions.">
<meta name="keywords" content="mile to meter converter 2026, statute mile to meter, distance converter, running calculator, road trip planner">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile (Statute) to Meter Converter 2026 - Distance Calculator">
<meta property="og:description" content="Free online mile to meter converter 2026. Convert statute miles to meters instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-statute-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile (Statute) to Meter Converter 2026 - Distance Calculator">
<meta name="twitter:description" content="Free online mile to meter converter 2026. Convert statute miles to meters instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-road text-green-600 mr-3"></i>
                Mile (Statute) to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert statute miles to meters instantly with our precise distance converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Miles Input -->
                <div class="space-y-2">
                    <label for="mileInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-road text-green-600 mr-2"></i>Miles (statute)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter miles"
                        step="any"
                    >
                </div>

                <!-- Meters Output -->
                <div class="space-y-2">
                    <label for="meterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-green-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Meters result"
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
                    <div class="font-bold text-green-800">0.1 mi</div>
                    <div class="text-sm text-gray-600">≈ 161 m</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">0.5 mi</div>
                    <div class="text-sm text-gray-600">≈ 805 m</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">1 mi</div>
                    <div class="text-sm text-gray-600">= 1609 m</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">5 mi</div>
                    <div class="text-sm text-gray-600">≈ 8047 m</div>
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
                    This converter helps you convert between statute miles and meters. One statute mile equals exactly 1,609.344 meters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Meters = Miles × 1,609.344
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Running and walking distances</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Road trip planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>International distance conversions</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Geographic measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Athletic event planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMileToMeter() {
    const mile = parseFloat(document.getElementById('mileInput').value);
    if (!isNaN(mile)) {
        const meter = mile * 1609.344;
        document.getElementById('meterOutput').value = meter.toFixed(8);
    } else {
        document.getElementById('meterOutput').value = '';
    }
}

function convertMeterToMile() {
    const meter = parseFloat(document.getElementById('meterOutput').value);
    if (!isNaN(meter)) {
        const mile = meter / 1609.344;
        document.getElementById('mileInput').value = mile.toFixed(8);
    } else {
        document.getElementById('mileInput').value = '';
    }
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const meterValue = document.getElementById('meterOutput').value;
    
    document.getElementById('mileInput').value = meterValue;
    document.getElementById('meterOutput').value = mileValue;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('meterOutput').value = '';
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', convertMileToMeter);
document.getElementById('meterOutput').addEventListener('input', convertMeterToMile);
</script>

<?php include 'footer.php'; ?>
