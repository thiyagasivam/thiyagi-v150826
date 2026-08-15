<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Foot to Kilometer Converter 2026 - Distance Calculator | Thiyagi</title>
<meta name="description" content="Free online foot to kilometer converter 2026. Convert feet to kilometers instantly with accurate distance conversion. Perfect for aviation, mapping, and international measurements.">
<meta name="keywords" content="foot to kilometer converter 2026, feet to km, distance converter, aviation calculator, mapping tool, international conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Foot to Kilometer Converter 2026 - Distance Calculator">
<meta property="og:description" content="Free online foot to kilometer converter 2026. Convert feet to kilometers instantly with accurate distance conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/foot-to-kilometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Foot to Kilometer Converter 2026 - Distance Calculator">
<meta name="twitter:description" content="Free online foot to kilometer converter 2026. Convert feet to kilometers instantly with accurate distance conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-combined text-teal-600 mr-3"></i>
                Foot to Kilometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert feet to kilometers instantly with our precise distance converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Feet Input -->
                <div class="space-y-2">
                    <label for="footInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler-combined text-teal-600 mr-2"></i>Feet (ft)
                    </label>
                    <input
                        type="number"
                        id="footInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Enter feet"
                        step="any"
                    >
                </div>

                <!-- Kilometers Output -->
                <div class="space-y-2">
                    <label for="kmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-road text-teal-600 mr-2"></i>Kilometers (km)
                    </label>
                    <input
                        type="number"
                        id="kmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Kilometers result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-teal-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">1000 ft</div>
                    <div class="text-sm text-gray-600">≈ 0.305 km</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">3280 ft</div>
                    <div class="text-sm text-gray-600">≈ 1 km</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">5000 ft</div>
                    <div class="text-sm text-gray-600">≈ 1.524 km</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">10000 ft</div>
                    <div class="text-sm text-gray-600">≈ 3.048 km</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-teal-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between feet and kilometers. One foot equals exactly 0.0003048 kilometers.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilometers = Feet × 0.0003048
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Aviation altitude measurements</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Geographic distance calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Building height conversions</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Sports field dimensions</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>International mapping</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertFootToKm() {
    const foot = parseFloat(document.getElementById('footInput').value);
    if (!isNaN(foot)) {
        const km = foot * 0.0003048;
        document.getElementById('kmOutput').value = km.toFixed(8);
    } else {
        document.getElementById('kmOutput').value = '';
    }
}

function convertKmToFoot() {
    const km = parseFloat(document.getElementById('kmOutput').value);
    if (!isNaN(km)) {
        const foot = km / 0.0003048;
        document.getElementById('footInput').value = foot.toFixed(8);
    } else {
        document.getElementById('footInput').value = '';
    }
}

function swapValues() {
    const footValue = document.getElementById('footInput').value;
    const kmValue = document.getElementById('kmOutput').value;
    
    document.getElementById('footInput').value = kmValue;
    document.getElementById('kmOutput').value = footValue;
}

function clearValues() {
    document.getElementById('footInput').value = '';
    document.getElementById('kmOutput').value = '';
}

// Add event listeners
document.getElementById('footInput').addEventListener('input', convertFootToKm);
document.getElementById('kmOutput').addEventListener('input', convertKmToFoot);
</script>

<?php include 'footer.php'; ?>
