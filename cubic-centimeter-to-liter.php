<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Centimeter to Liter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online cubic centimeter to liter converter 2026. Convert cc to liters instantly with accurate volume conversion. Perfect for automotive and medical applications.">
<meta name="keywords" content="cubic centimeter to liter converter 2026, cc to liter, volume converter, automotive calculator, medical converter, engine displacement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Centimeter to Liter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online cubic centimeter to liter converter 2026. Convert cc to liters instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-centimeter-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Centimeter to Liter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online cubic centimeter to liter converter 2026. Convert cc to liters instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-amber-600 mr-3"></i>
                Cubic Centimeter to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert cubic centimeters (cm³) to liters instantly with our precise volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Centimeters Input -->
                <div class="space-y-2">
                    <label for="ccInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-amber-600 mr-2"></i>Cubic Centimeters (cm³)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Enter cubic centimeters"
                        step="any"
                    >
                </div>

                <!-- Liters Output -->
                <div class="space-y-2">
                    <label for="literOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-amber-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Liters result"
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
                    <div class="font-bold text-amber-800">100 cm³</div>
                    <div class="text-sm text-gray-600">= 0.1 L</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">500 cm³</div>
                    <div class="text-sm text-gray-600">= 0.5 L</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">1000 cm³</div>
                    <div class="text-sm text-gray-600">= 1 L</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">2000 cm³</div>
                    <div class="text-sm text-gray-600">= 2 L</div>
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
                    This converter helps you convert between cubic centimeters and liters. One liter equals exactly 1,000 cubic centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Liters = Cubic Centimeters ÷ 1,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Engine displacement measurements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Beverage container sizing</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Scientific experiments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCcToLiter() {
    const cc = parseFloat(document.getElementById('ccInput').value);
    if (!isNaN(cc)) {
        const liter = cc / 1000;
        document.getElementById('literOutput').value = liter.toFixed(8);
    } else {
        document.getElementById('literOutput').value = '';
    }
}

function convertLiterToCc() {
    const liter = parseFloat(document.getElementById('literOutput').value);
    if (!isNaN(liter)) {
        const cc = liter * 1000;
        document.getElementById('ccInput').value = cc.toFixed(8);
    } else {
        document.getElementById('ccInput').value = '';
    }
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const literValue = document.getElementById('literOutput').value;
    
    document.getElementById('ccInput').value = literValue;
    document.getElementById('literOutput').value = ccValue;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('literOutput').value = '';
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', convertCcToLiter);
document.getElementById('literOutput').addEventListener('input', convertLiterToCc);
</script>

<?php include 'footer.php'; ?>
