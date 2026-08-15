<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megawatt to Kilowatt Converter 2026 - Power Calculator | Thiyagi</title>
<meta name="description" content="Free online megawatt to kilowatt converter 2026. Convert MW to kW instantly with accurate power conversion for electrical engineering applications.">
<meta name="keywords" content="megawatt to kilowatt converter 2026, MW to kW, power converter, electrical calculator, energy converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megawatt to Kilowatt Converter 2026 - Power Calculator">
<meta property="og:description" content="Free online megawatt to kilowatt converter 2026. Convert MW to kW instantly with accurate power conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megawatt-to-kilowatt.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megawatt to Kilowatt Converter 2026 - Power Calculator">
<meta name="twitter:description" content="Free online megawatt to kilowatt converter 2026. Convert MW to kW instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-lightning-bolt text-amber-600 mr-3"></i>
                Megawatt to Kilowatt Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megawatts to kilowatts instantly for electrical engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megawatts Input -->
                <div class="space-y-2">
                    <label for="megawattInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-lightning-bolt text-amber-600 mr-2"></i>Megawatts (MW)
                    </label>
                    <input
                        type="number"
                        id="megawattInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Enter megawatts"
                        step="any"
                    >
                </div>

                <!-- Kilowatts Output -->
                <div class="space-y-2">
                    <label for="kilowattOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-amber-600 mr-2"></i>Kilowatts (kW)
                    </label>
                    <input
                        type="number"
                        id="kilowattOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Kilowatts result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-amber-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">1 MW</div>
                    <div class="text-sm text-gray-600">= 1000 kW</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">5 MW</div>
                    <div class="text-sm text-gray-600">= 5000 kW</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">10 MW</div>
                    <div class="text-sm text-gray-600">= 10000 kW</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">50 MW</div>
                    <div class="text-sm text-gray-600">= 50000 kW</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-amber-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between megawatts and kilowatts. One megawatt equals 1000 kilowatts.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilowatts = Megawatts × 1000<br>
                    Megawatts = Kilowatts ÷ 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Power plant capacity calculations</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Electrical grid management</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Industrial power requirements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Renewable energy systems</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Energy consumption analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMegawattToKilowatt() {
    const megawatt = parseFloat(document.getElementById('megawattInput').value);
    if (!isNaN(megawatt)) {
        const kilowatt = megawatt * 1000;
        document.getElementById('kilowattOutput').value = kilowatt.toFixed(8);
    } else {
        document.getElementById('kilowattOutput').value = '';
    }
}

function convertKilowattToMegawatt() {
    const kilowatt = parseFloat(document.getElementById('kilowattOutput').value);
    if (!isNaN(kilowatt)) {
        const megawatt = kilowatt / 1000;
        document.getElementById('megawattInput').value = megawatt.toFixed(8);
    } else {
        document.getElementById('megawattInput').value = '';
    }
}

function swapValues() {
    const megawattValue = document.getElementById('megawattInput').value;
    const kilowattValue = document.getElementById('kilowattOutput').value;
    
    document.getElementById('megawattInput').value = kilowattValue;
    document.getElementById('kilowattOutput').value = megawattValue;
}

function clearValues() {
    document.getElementById('megawattInput').value = '';
    document.getElementById('kilowattOutput').value = '';
}

// Add event listeners
document.getElementById('megawattInput').addEventListener('input', convertMegawattToKilowatt);
document.getElementById('kilowattOutput').addEventListener('input', convertKilowattToMegawatt);
</script>

<?php include 'footer.php'; ?>
