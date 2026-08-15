<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilowatt to Megawatt Converter 2026 - Power Calculator | Thiyagi</title>
<meta name="description" content="Free online kilowatt to megawatt converter 2026. Convert kW to MW instantly with accurate power conversion for electrical engineering applications.">
<meta name="keywords" content="kilowatt to megawatt converter 2026, kW to MW, power converter, electrical calculator, energy converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilowatt to Megawatt Converter 2026 - Power Calculator">
<meta property="og:description" content="Free online kilowatt to megawatt converter 2026. Convert kW to MW instantly with accurate power conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilowatt-to-megawatt.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilowatt to Megawatt Converter 2026 - Power Calculator">
<meta name="twitter:description" content="Free online kilowatt to megawatt converter 2026. Convert kW to MW instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Kilowatt to Megawatt Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilowatts to megawatts instantly for electrical engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilowatts Input -->
                <div class="space-y-2">
                    <label for="kilowattInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-yellow-600 mr-2"></i>Kilowatts (kW)
                    </label>
                    <input
                        type="number"
                        id="kilowattInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Enter kilowatts"
                        step="any"
                    >
                </div>

                <!-- Megawatts Output -->
                <div class="space-y-2">
                    <label for="megawattOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-lightning-bolt text-yellow-600 mr-2"></i>Megawatts (MW)
                    </label>
                    <input
                        type="number"
                        id="megawattOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Megawatts result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-yellow-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">1000 kW</div>
                    <div class="text-sm text-gray-600">= 1 MW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">5000 kW</div>
                    <div class="text-sm text-gray-600">= 5 MW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">10000 kW</div>
                    <div class="text-sm text-gray-600">= 10 MW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">50000 kW</div>
                    <div class="text-sm text-gray-600">= 50 MW</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-yellow-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between kilowatts and megawatts. One megawatt equals 1000 kilowatts.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Megawatts = Kilowatts ÷ 1000<br>
                    Kilowatts = Megawatts × 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Power plant capacity calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Electrical grid management</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Industrial power requirements</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Renewable energy systems</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Energy consumption analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKilowattToMegawatt() {
    const kilowatt = parseFloat(document.getElementById('kilowattInput').value);
    if (!isNaN(kilowatt)) {
        const megawatt = kilowatt / 1000;
        document.getElementById('megawattOutput').value = megawatt.toFixed(8);
    } else {
        document.getElementById('megawattOutput').value = '';
    }
}

function convertMegawattToKilowatt() {
    const megawatt = parseFloat(document.getElementById('megawattOutput').value);
    if (!isNaN(megawatt)) {
        const kilowatt = megawatt * 1000;
        document.getElementById('kilowattInput').value = kilowatt.toFixed(8);
    } else {
        document.getElementById('kilowattInput').value = '';
    }
}

function swapValues() {
    const kilowattValue = document.getElementById('kilowattInput').value;
    const megawattValue = document.getElementById('megawattOutput').value;
    
    document.getElementById('kilowattInput').value = megawattValue;
    document.getElementById('megawattOutput').value = kilowattValue;
}

function clearValues() {
    document.getElementById('kilowattInput').value = '';
    document.getElementById('megawattOutput').value = '';
}

// Add event listeners
document.getElementById('kilowattInput').addEventListener('input', convertKilowattToMegawatt);
document.getElementById('megawattOutput').addEventListener('input', convertMegawattToKilowatt);
</script>

<?php include 'footer.php'; ?>
