<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megahertz to Hertz Converter 2026 - Frequency Calculator | Thiyagi</title>
<meta name="description" content="Free online megahertz to hertz converter 2026. Convert MHz to Hz instantly with accurate frequency conversion for electronics and engineering.">
<meta name="keywords" content="megahertz to hertz converter 2026, MHz to Hz, frequency converter, electronics calculator, signal processing">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megahertz to Hertz Converter 2026 - Frequency Calculator">
<meta property="og:description" content="Free online megahertz to hertz converter 2026. Convert MHz to Hz instantly with accurate frequency conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megahertz-to-hertz.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megahertz to Hertz Converter 2026 - Frequency Calculator">
<meta name="twitter:description" content="Free online megahertz to hertz converter 2026. Convert MHz to Hz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wave-square text-green-600 mr-3"></i>
                Megahertz to Hertz Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megahertz to hertz instantly for frequency calculations in electronics and signal processing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megahertz Input -->
                <div class="space-y-2">
                    <label for="megahertzInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-broadcast-tower text-green-600 mr-2"></i>Megahertz (MHz)
                    </label>
                    <input
                        type="number"
                        id="megahertzInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter megahertz"
                        step="any"
                    >
                </div>

                <!-- Hertz Output -->
                <div class="space-y-2">
                    <label for="hertzOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-wave-square text-green-600 mr-2"></i>Hertz (Hz)
                    </label>
                    <input
                        type="number"
                        id="hertzOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Hertz result"
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
                    <div class="font-bold text-green-800">1 MHz</div>
                    <div class="text-sm text-gray-600">= 1,000,000 Hz</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">10 MHz</div>
                    <div class="text-sm text-gray-600">= 10,000,000 Hz</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">100 MHz</div>
                    <div class="text-sm text-gray-600">= 100,000,000 Hz</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">1000 MHz</div>
                    <div class="text-sm text-gray-600">= 1,000,000,000 Hz</div>
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
                    This converter helps you convert between megahertz and hertz. One megahertz equals 1,000,000 hertz (1 million cycles per second).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Hertz = Megahertz × 1,000,000<br>
                    Megahertz = Hertz ÷ 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Radio frequency calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>CPU clock speeds</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Signal processing</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Telecommunications</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Electronics engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMegahertzToHertz() {
    const megahertz = parseFloat(document.getElementById('megahertzInput').value);
    if (!isNaN(megahertz)) {
        const hertz = megahertz * 1000000; // 1 MHz = 1,000,000 Hz
        document.getElementById('hertzOutput').value = hertz.toFixed(0);
    } else {
        document.getElementById('hertzOutput').value = '';
    }
}

function convertHertzToMegahertz() {
    const hertz = parseFloat(document.getElementById('hertzOutput').value);
    if (!isNaN(hertz)) {
        const megahertz = hertz / 1000000; // 1 MHz = 1,000,000 Hz
        document.getElementById('megahertzInput').value = megahertz.toFixed(6);
    } else {
        document.getElementById('megahertzInput').value = '';
    }
}

function swapValues() {
    const megahertzValue = document.getElementById('megahertzInput').value;
    const hertzValue = document.getElementById('hertzOutput').value;
    
    document.getElementById('megahertzInput').value = hertzValue;
    document.getElementById('hertzOutput').value = megahertzValue;
}

function clearValues() {
    document.getElementById('megahertzInput').value = '';
    document.getElementById('hertzOutput').value = '';
}

// Add event listeners
document.getElementById('megahertzInput').addEventListener('input', convertMegahertzToHertz);
document.getElementById('hertzOutput').addEventListener('input', convertHertzToMegahertz);
</script>

<?php include 'footer.php'; ?>
