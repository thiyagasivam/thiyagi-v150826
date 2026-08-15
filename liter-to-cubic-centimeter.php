<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to Cubic Centimeter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online liter to cubic centimeter converter 2026. Convert L to cm³ instantly with accurate volume conversion for laboratory and engineering use.">
<meta name="keywords" content="liter to cubic centimeter converter 2026, L to cm3, volume converter, laboratory calculator, engineering converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to Cubic Centimeter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online liter to cubic centimeter converter 2026. Convert L to cm³ instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-cubic-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to Cubic Centimeter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online liter to cubic centimeter converter 2026. Convert L to cm³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-blue-600 mr-3"></i>
                Liter to Cubic Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to cubic centimeters instantly with our accurate volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liters Input -->
                <div class="space-y-2">
                    <label for="literInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bottle-water text-blue-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter liters"
                        step="any"
                    >
                </div>

                <!-- Cubic Centimeters Output -->
                <div class="space-y-2">
                    <label for="cm3Output" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-blue-600 mr-2"></i>Cubic Centimeters (cm³)
                    </label>
                    <input
                        type="number"
                        id="cm3Output"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Cubic centimeters result"
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
                    <div class="font-bold text-blue-800">1 L</div>
                    <div class="text-sm text-gray-600">= 1000 cm³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.5 L</div>
                    <div class="text-sm text-gray-600">= 500 cm³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.1 L</div>
                    <div class="text-sm text-gray-600">= 100 cm³</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2 L</div>
                    <div class="text-sm text-gray-600">= 2000 cm³</div>
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
                    This converter helps you convert between liters and cubic centimeters. One liter equals exactly 1000 cubic centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Centimeters = Liters × 1000<br>
                    Liters = Cubic Centimeters ÷ 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Engine displacement calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Scientific experiments</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Engineering design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertLiterToCm3() {
    const liter = parseFloat(document.getElementById('literInput').value);
    if (!isNaN(liter)) {
        const cm3 = liter * 1000;
        document.getElementById('cm3Output').value = cm3.toFixed(8);
    } else {
        document.getElementById('cm3Output').value = '';
    }
}

function convertCm3ToLiter() {
    const cm3 = parseFloat(document.getElementById('cm3Output').value);
    if (!isNaN(cm3)) {
        const liter = cm3 / 1000;
        document.getElementById('literInput').value = liter.toFixed(8);
    } else {
        document.getElementById('literInput').value = '';
    }
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const cm3Value = document.getElementById('cm3Output').value;
    
    document.getElementById('literInput').value = cm3Value;
    document.getElementById('cm3Output').value = literValue;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('cm3Output').value = '';
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', convertLiterToCm3);
document.getElementById('cm3Output').addEventListener('input', convertCm3ToLiter);
</script>

<?php include 'footer.php'; ?>
