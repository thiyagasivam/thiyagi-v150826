<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gallon US per Minute to Liter per Minute Converter 2026 - Flow Rate Calculator | Thiyagi</title>
<meta name="description" content="Free online gallon US per minute to liter per minute converter 2026. Convert gal/min to L/min instantly with accurate flow rate conversion.">
<meta name="keywords" content="gallon per minute to liter per minute converter 2026, gal/min to L/min, flow rate converter, pump calculator, fluid flow">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gallon US per Minute to Liter per Minute Converter 2026 - Flow Rate Calculator">
<meta property="og:description" content="Free online gallon US per minute to liter per minute converter 2026. Convert gal/min to L/min instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gallon-us-minute-to-liter-minute.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gallon US per Minute to Liter per Minute Converter 2026 - Flow Rate Calculator">
<meta name="twitter:description" content="Free online gallon US per minute to liter per minute converter 2026. Convert gal/min to L/min instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-faucet text-teal-600 mr-3"></i>
                Gallon US/Min to Liter/Min Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert gallons per minute to liters per minute instantly for flow rate, pump, and fluid calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gallon/Min Input -->
                <div class="space-y-2">
                    <label for="gallonMinInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tint text-teal-600 mr-2"></i>Gallons US per Minute (gal/min)
                    </label>
                    <input
                        type="number"
                        id="gallonMinInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Enter gal/min"
                        step="any"
                    >
                </div>

                <!-- Liter/Min Output -->
                <div class="space-y-2">
                    <label for="literMinOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-water text-teal-600 mr-2"></i>Liters per Minute (L/min)
                    </label>
                    <input
                        type="number"
                        id="literMinOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="L/min result"
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
                    <div class="font-bold text-teal-800">1 gal/min</div>
                    <div class="text-sm text-gray-600">= 3.785 L/min</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">5 gal/min</div>
                    <div class="text-sm text-gray-600">= 18.93 L/min</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">10 gal/min</div>
                    <div class="text-sm text-gray-600">= 37.85 L/min</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">100 gal/min</div>
                    <div class="text-sm text-gray-600">= 378.5 L/min</div>
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
                    This converter helps you convert between gallons per minute and liters per minute. One US gallon per minute equals 3.78541 liters per minute.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    L/min = gal/min × 3.78541<br>
                    gal/min = L/min ÷ 3.78541
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Pump flow rates</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Water treatment</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Irrigation systems</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Industrial processes</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>HVAC systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertGallonMinToLiterMin() {
    const gallonMin = parseFloat(document.getElementById('gallonMinInput').value);
    if (!isNaN(gallonMin)) {
        const literMin = gallonMin * 3.78541; // 1 gal/min = 3.78541 L/min
        document.getElementById('literMinOutput').value = literMin.toFixed(4);
    } else {
        document.getElementById('literMinOutput').value = '';
    }
}

function convertLiterMinToGallonMin() {
    const literMin = parseFloat(document.getElementById('literMinOutput').value);
    if (!isNaN(literMin)) {
        const gallonMin = literMin / 3.78541; // 1 gal/min = 3.78541 L/min
        document.getElementById('gallonMinInput').value = gallonMin.toFixed(4);
    } else {
        document.getElementById('gallonMinInput').value = '';
    }
}

function swapValues() {
    const gallonMinValue = document.getElementById('gallonMinInput').value;
    const literMinValue = document.getElementById('literMinOutput').value;
    
    document.getElementById('gallonMinInput').value = literMinValue;
    document.getElementById('literMinOutput').value = gallonMinValue;
}

function clearValues() {
    document.getElementById('gallonMinInput').value = '';
    document.getElementById('literMinOutput').value = '';
}

// Add event listeners
document.getElementById('gallonMinInput').addEventListener('input', convertGallonMinToLiterMin);
document.getElementById('literMinOutput').addEventListener('input', convertLiterMinToGallonMin);
</script>

<?php include 'footer.php'; ?>
