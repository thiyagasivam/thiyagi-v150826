<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Acre Foot to Gallon US Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online acre foot to gallon US converter 2026. Convert ac ft to gal US instantly with accurate volume conversion for irrigation and water management.">
<meta name="keywords" content="acre foot to gallon converter 2026, ac ft to gal, volume converter, irrigation calculator, water management">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Acre Foot to Gallon US Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online acre foot to gallon US converter 2026. Convert ac ft to gal US instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/acre-foot-to-gallon-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Acre Foot to Gallon US Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online acre foot to gallon US converter 2026. Convert ac ft to gal US instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-water text-blue-600 mr-3"></i>
                Acre Foot to Gallon US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert acre feet to US gallons instantly for irrigation, water management, and agriculture
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Acre Foot Input -->
                <div class="space-y-2">
                    <label for="acreFtInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-mountain text-blue-600 mr-2"></i>Acre Feet (ac ft)
                    </label>
                    <input
                        type="number"
                        id="acreFtInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter acre feet"
                        step="any"
                    >
                </div>

                <!-- Gallon US Output -->
                <div class="space-y-2">
                    <label for="gallonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-blue-600 mr-2"></i>Gallons US (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Gallons result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-blue-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1 ac ft</div>
                    <div class="text-sm text-gray-600">= 325,851 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.5 ac ft</div>
                    <div class="text-sm text-gray-600">= 162,926 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2 ac ft</div>
                    <div class="text-sm text-gray-600">= 651,702 gal</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">5 ac ft</div>
                    <div class="text-sm text-gray-600">= 1,629,255 gal</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between acre feet and US gallons. One acre foot equals 325,851.427 US gallons.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Gallons = Acre Feet × 325,851.427<br>
                    Acre Feet = Gallons ÷ 325,851.427
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Irrigation planning</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Water reservoir management</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Agricultural water allocation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Hydrological studies</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Municipal water supply</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertAcreFtToGallon() {
    const acreFt = parseFloat(document.getElementById('acreFtInput').value);
    if (!isNaN(acreFt)) {
        const gallon = acreFt * 325851.427; // 1 ac ft = 325,851.427 gal US
        document.getElementById('gallonOutput').value = gallon.toFixed(2);
    } else {
        document.getElementById('gallonOutput').value = '';
    }
}

function convertGallonToAcreFt() {
    const gallon = parseFloat(document.getElementById('gallonOutput').value);
    if (!isNaN(gallon)) {
        const acreFt = gallon / 325851.427; // 1 ac ft = 325,851.427 gal US
        document.getElementById('acreFtInput').value = acreFt.toFixed(6);
    } else {
        document.getElementById('acreFtInput').value = '';
    }
}

function swapValues() {
    const acreFtValue = document.getElementById('acreFtInput').value;
    const gallonValue = document.getElementById('gallonOutput').value;
    
    document.getElementById('acreFtInput').value = gallonValue;
    document.getElementById('gallonOutput').value = acreFtValue;
}

function clearValues() {
    document.getElementById('acreFtInput').value = '';
    document.getElementById('gallonOutput').value = '';
}

// Add event listeners
document.getElementById('acreFtInput').addEventListener('input', convertAcreFtToGallon);
document.getElementById('gallonOutput').addEventListener('input', convertGallonToAcreFt);
</script>

<?php include 'footer.php'; ?>
