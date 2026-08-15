<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Byte to Megabit Converter 2026 - Data Storage Calculator | Thiyagi</title>
<meta name="description" content="Free online byte to megabit converter 2026. Convert bytes to Mbit instantly with accurate data conversion. Perfect for IT and networking calculations.">
<meta name="keywords" content="byte to megabit converter 2026, byte to Mbit, data converter, IT calculator, networking converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Byte to Megabit Converter 2026 - Data Storage Calculator">
<meta property="og:description" content="Free online byte to megabit converter 2026. Convert bytes to Mbit instantly with accurate data conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/byte-to-megabit.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Byte to Megabit Converter 2026 - Data Storage Calculator">
<meta name="twitter:description" content="Free online byte to megabit converter 2026. Convert bytes to Mbit instantly with accurate data conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-database text-purple-600 mr-3"></i>
                Byte to Megabit Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert bytes to megabits instantly with our accurate data converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bytes Input -->
                <div class="space-y-2">
                    <label for="byteInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-database text-purple-600 mr-2"></i>Bytes (B)
                    </label>
                    <input
                        type="number"
                        id="byteInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter bytes"
                        step="any"
                    >
                </div>

                <!-- Megabits Output -->
                <div class="space-y-2">
                    <label for="megabitOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microchip text-purple-600 mr-2"></i>Megabits (Mbit)
                    </label>
                    <input
                        type="number"
                        id="megabitOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Megabits result"
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
                    <div class="font-bold text-purple-800">125,000 B</div>
                    <div class="text-sm text-gray-600">= 1 Mbit</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">250,000 B</div>
                    <div class="text-sm text-gray-600">= 2 Mbit</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">625,000 B</div>
                    <div class="text-sm text-gray-600">= 5 Mbit</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1,250,000 B</div>
                    <div class="text-sm text-gray-600">= 10 Mbit</div>
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
                    This converter helps you convert between bytes and megabits. One megabit equals 125,000 bytes.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Megabits = Bytes ÷ 125,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Network bandwidth calculations</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Data transfer rate analysis</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>File size conversions</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Internet speed measurements</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Storage capacity planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertByteToMegabit() {
    const byte = parseFloat(document.getElementById('byteInput').value);
    if (!isNaN(byte)) {
        const megabit = byte / 125000;
        document.getElementById('megabitOutput').value = megabit.toFixed(8);
    } else {
        document.getElementById('megabitOutput').value = '';
    }
}

function convertMegabitToByte() {
    const megabit = parseFloat(document.getElementById('megabitOutput').value);
    if (!isNaN(megabit)) {
        const byte = megabit * 125000;
        document.getElementById('byteInput').value = byte.toFixed(8);
    } else {
        document.getElementById('byteInput').value = '';
    }
}

function swapValues() {
    const byteValue = document.getElementById('byteInput').value;
    const megabitValue = document.getElementById('megabitOutput').value;
    
    document.getElementById('byteInput').value = megabitValue;
    document.getElementById('megabitOutput').value = byteValue;
}

function clearValues() {
    document.getElementById('byteInput').value = '';
    document.getElementById('megabitOutput').value = '';
}

// Add event listeners
document.getElementById('byteInput').addEventListener('input', convertByteToMegabit);
document.getElementById('megabitOutput').addEventListener('input', convertMegabitToByte);
</script>

<?php include 'footer.php'; ?>
