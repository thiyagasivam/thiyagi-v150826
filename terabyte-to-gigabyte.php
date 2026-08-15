<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Terabyte to Gigabyte Converter 2026 - Data Storage Calculator | Thiyagi</title>
<meta name="description" content="Free online terabyte to gigabyte converter 2026. Convert TB to GB instantly with accurate data storage conversion for computing applications.">
<meta name="keywords" content="terabyte to gigabyte converter 2026, TB to GB, data converter, storage calculator, computing converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Terabyte to Gigabyte Converter 2026 - Data Storage Calculator">
<meta property="og:description" content="Free online terabyte to gigabyte converter 2026. Convert TB to GB instantly with accurate data storage conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/terabyte-to-gigabyte.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Terabyte to Gigabyte Converter 2026 - Data Storage Calculator">
<meta name="twitter:description" content="Free online terabyte to gigabyte converter 2026. Convert TB to GB instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-hdd text-cyan-600 mr-3"></i>
                Terabyte to Gigabyte Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert terabytes to gigabytes instantly for data storage calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Terabytes Input -->
                <div class="space-y-2">
                    <label for="terabyteInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-hdd text-cyan-600 mr-2"></i>Terabytes (TB)
                    </label>
                    <input
                        type="number"
                        id="terabyteInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter terabytes"
                        step="any"
                    >
                </div>

                <!-- Gigabytes Output -->
                <div class="space-y-2">
                    <label for="gigabyteOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-database text-cyan-600 mr-2"></i>Gigabytes (GB)
                    </label>
                    <input
                        type="number"
                        id="gigabyteOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Gigabytes result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-cyan-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1 TB</div>
                    <div class="text-sm text-gray-600">= 1000 GB</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">0.5 TB</div>
                    <div class="text-sm text-gray-600">= 500 GB</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">2 TB</div>
                    <div class="text-sm text-gray-600">= 2000 GB</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">10 TB</div>
                    <div class="text-sm text-gray-600">= 10000 GB</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-cyan-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between terabytes and gigabytes. One terabyte equals 1000 gigabytes in decimal notation (SI).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gigabytes = Terabytes × 1000<br>
                    Terabytes = Gigabytes ÷ 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Hard drive capacity planning</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Cloud storage calculations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Database size planning</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Backup storage requirements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Data center planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertTerabyteToGigabyte() {
    const terabyte = parseFloat(document.getElementById('terabyteInput').value);
    if (!isNaN(terabyte)) {
        const gigabyte = terabyte * 1000;
        document.getElementById('gigabyteOutput').value = gigabyte.toFixed(8);
    } else {
        document.getElementById('gigabyteOutput').value = '';
    }
}

function convertGigabyteToTerabyte() {
    const gigabyte = parseFloat(document.getElementById('gigabyteOutput').value);
    if (!isNaN(gigabyte)) {
        const terabyte = gigabyte / 1000;
        document.getElementById('terabyteInput').value = terabyte.toFixed(8);
    } else {
        document.getElementById('terabyteInput').value = '';
    }
}

function swapValues() {
    const terabyteValue = document.getElementById('terabyteInput').value;
    const gigabyteValue = document.getElementById('gigabyteOutput').value;
    
    document.getElementById('terabyteInput').value = gigabyteValue;
    document.getElementById('gigabyteOutput').value = terabyteValue;
}

function clearValues() {
    document.getElementById('terabyteInput').value = '';
    document.getElementById('gigabyteOutput').value = '';
}

// Add event listeners
document.getElementById('terabyteInput').addEventListener('input', convertTerabyteToGigabyte);
document.getElementById('gigabyteOutput').addEventListener('input', convertGigabyteToTerabyte);
</script>

<?php include 'footer.php'; ?>
