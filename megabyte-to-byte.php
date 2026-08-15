<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megabyte to Byte Converter 2026 - Data Storage Calculator | Thiyagi</title>
<meta name="description" content="Free online megabyte to byte converter 2026. Convert MB to bytes instantly with accurate data conversion. Perfect for IT and storage calculations.">
<meta name="keywords" content="megabyte to byte converter 2026, MB to bytes, data converter, storage calculator, IT converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megabyte to Byte Converter 2026 - Data Storage Calculator">
<meta property="og:description" content="Free online megabyte to byte converter 2026. Convert MB to bytes instantly with accurate data conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megabyte-to-byte.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megabyte to Byte Converter 2026 - Data Storage Calculator">
<meta name="twitter:description" content="Free online megabyte to byte converter 2026. Convert MB to bytes instantly with accurate data conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-hdd text-cyan-600 mr-3"></i>
                Megabyte to Byte Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megabytes to bytes instantly with our accurate data storage converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megabytes Input -->
                <div class="space-y-2">
                    <label for="megabyteInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-hdd text-cyan-600 mr-2"></i>Megabytes (MB)
                    </label>
                    <input
                        type="number"
                        id="megabyteInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter megabytes"
                        step="any"
                    >
                </div>

                <!-- Bytes Output -->
                <div class="space-y-2">
                    <label for="byteOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-database text-cyan-600 mr-2"></i>Bytes (B)
                    </label>
                    <input
                        type="number"
                        id="byteOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Bytes result"
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
                    <div class="font-bold text-cyan-800">1 MB</div>
                    <div class="text-sm text-gray-600">= 1,000,000 B</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">5 MB</div>
                    <div class="text-sm text-gray-600">= 5,000,000 B</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">10 MB</div>
                    <div class="text-sm text-gray-600">= 10,000,000 B</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">100 MB</div>
                    <div class="text-sm text-gray-600">= 100,000,000 B</div>
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
                    This converter helps you convert between megabytes and bytes. One megabyte equals exactly 1,000,000 bytes.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Bytes = Megabytes × 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>File size calculations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Storage capacity planning</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Memory requirements analysis</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Data transfer measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Software development</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMegabyteToByte() {
    const megabyte = parseFloat(document.getElementById('megabyteInput').value);
    if (!isNaN(megabyte)) {
        const byte = megabyte * 1000000;
        document.getElementById('byteOutput').value = byte.toFixed(8);
    } else {
        document.getElementById('byteOutput').value = '';
    }
}

function convertByteToMegabyte() {
    const byte = parseFloat(document.getElementById('byteOutput').value);
    if (!isNaN(byte)) {
        const megabyte = byte / 1000000;
        document.getElementById('megabyteInput').value = megabyte.toFixed(8);
    } else {
        document.getElementById('megabyteInput').value = '';
    }
}

function swapValues() {
    const megabyteValue = document.getElementById('megabyteInput').value;
    const byteValue = document.getElementById('byteOutput').value;
    
    document.getElementById('megabyteInput').value = byteValue;
    document.getElementById('byteOutput').value = megabyteValue;
}

function clearValues() {
    document.getElementById('megabyteInput').value = '';
    document.getElementById('byteOutput').value = '';
}

// Add event listeners
document.getElementById('megabyteInput').addEventListener('input', convertMegabyteToByte);
document.getElementById('byteOutput').addEventListener('input', convertByteToMegabyte);
</script>

<?php include 'footer.php'; ?>
