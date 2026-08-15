<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>MBH to BTU/Hour Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online MBH to BTU/hour converter 2026. Convert MBH to BTU/h instantly with accurate energy conversion for HVAC and heating calculations.">
<meta name="keywords" content="MBH to BTU hour converter 2026, MBH to BTU/h, energy converter, HVAC calculator, heating calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="MBH to BTU/Hour Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online MBH to BTU/hour converter 2026. Convert MBH to BTU/h instantly with accurate energy conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mbh-to-btu-it-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="MBH to BTU/Hour Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online MBH to BTU/hour converter 2026. Convert MBH to BTU/h instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-orange-600 mr-3"></i>
                MBH to BTU/Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert MBH to BTU per hour instantly for HVAC, heating, and energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- MBH Input -->
                <div class="space-y-2">
                    <label for="mbhInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-three-quarters text-orange-600 mr-2"></i>MBH (1000 BTU/h)
                    </label>
                    <input
                        type="number"
                        id="mbhInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter MBH"
                        step="any"
                    >
                </div>

                <!-- BTU/Hour Output -->
                <div class="space-y-2">
                    <label for="btuOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-burn text-orange-600 mr-2"></i>BTU per Hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="BTU/hour result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-orange-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1 MBH</div>
                    <div class="text-sm text-gray-600">= 1,000 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">5 MBH</div>
                    <div class="text-sm text-gray-600">= 5,000 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">10 MBH</div>
                    <div class="text-sm text-gray-600">= 10,000 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">100 MBH</div>
                    <div class="text-sm text-gray-600">= 100,000 BTU/h</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-orange-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between MBH (thousands of BTU per hour) and BTU per hour. One MBH equals 1,000 BTU/h.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    BTU/hour = MBH × 1,000<br>
                    MBH = BTU/hour ÷ 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>HVAC system sizing</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Boiler capacity calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Heating load analysis</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Energy consumption planning</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Commercial building design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMbhToBtu() {
    const mbh = parseFloat(document.getElementById('mbhInput').value);
    if (!isNaN(mbh)) {
        const btu = mbh * 1000; // 1 MBH = 1,000 BTU/h
        document.getElementById('btuOutput').value = btu.toFixed(2);
    } else {
        document.getElementById('btuOutput').value = '';
    }
}

function convertBtuToMbh() {
    const btu = parseFloat(document.getElementById('btuOutput').value);
    if (!isNaN(btu)) {
        const mbh = btu / 1000; // 1 MBH = 1,000 BTU/h
        document.getElementById('mbhInput').value = mbh.toFixed(6);
    } else {
        document.getElementById('mbhInput').value = '';
    }
}

function swapValues() {
    const mbhValue = document.getElementById('mbhInput').value;
    const btuValue = document.getElementById('btuOutput').value;
    
    document.getElementById('mbhInput').value = btuValue;
    document.getElementById('btuOutput').value = mbhValue;
}

function clearValues() {
    document.getElementById('mbhInput').value = '';
    document.getElementById('btuOutput').value = '';
}

// Add event listeners
document.getElementById('mbhInput').addEventListener('input', convertMbhToBtu);
document.getElementById('btuOutput').addEventListener('input', convertBtuToMbh);
</script>

<?php include 'footer.php'; ?>
