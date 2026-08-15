<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Yard to Centimeter Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online yard to centimeter converter 2026. Convert yards to cm instantly with accurate length conversion. Perfect for sports, textiles, and construction.">
<meta name="keywords" content="yard to centimeter converter 2026, yard to cm, length converter, sports calculator, textile converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Yard to Centimeter Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online yard to centimeter converter 2026. Convert yards to cm instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/yard-to-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Yard to Centimeter Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online yard to centimeter converter 2026. Convert yards to cm instantly with accurate length conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-lime-50 to-emerald-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tape text-green-600 mr-3"></i>
                Yard to Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert yards to centimeters instantly with our accurate length converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Yards Input -->
                <div class="space-y-2">
                    <label for="yardInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tape text-green-600 mr-2"></i>Yards (yd)
                    </label>
                    <input
                        type="number"
                        id="yardInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter yards"
                        step="any"
                    >
                </div>

                <!-- Centimeters Output -->
                <div class="space-y-2">
                    <label for="centimeterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-green-600 mr-2"></i>Centimeters (cm)
                    </label>
                    <input
                        type="number"
                        id="centimeterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Centimeters result"
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
                    <div class="font-bold text-green-800">1 yd</div>
                    <div class="text-sm text-gray-600">= 91.44 cm</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">2 yd</div>
                    <div class="text-sm text-gray-600">= 182.88 cm</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">5 yd</div>
                    <div class="text-sm text-gray-600">= 457.2 cm</div>
                </div>
                <div class="bg-green-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-green-800">10 yd</div>
                    <div class="text-sm text-gray-600">= 914.4 cm</div>
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
                    This converter helps you convert between yards and centimeters. One yard equals exactly 91.44 centimeters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Centimeters = Yards × 91.44
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Sports field measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Fabric and textile calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Construction planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Landscaping projects</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Interior design measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertYardToCentimeter() {
    const yard = parseFloat(document.getElementById('yardInput').value);
    if (!isNaN(yard)) {
        const centimeter = yard * 91.44;
        document.getElementById('centimeterOutput').value = centimeter.toFixed(8);
    } else {
        document.getElementById('centimeterOutput').value = '';
    }
}

function convertCentimeterToYard() {
    const centimeter = parseFloat(document.getElementById('centimeterOutput').value);
    if (!isNaN(centimeter)) {
        const yard = centimeter / 91.44;
        document.getElementById('yardInput').value = yard.toFixed(8);
    } else {
        document.getElementById('yardInput').value = '';
    }
}

function swapValues() {
    const yardValue = document.getElementById('yardInput').value;
    const centimeterValue = document.getElementById('centimeterOutput').value;
    
    document.getElementById('yardInput').value = centimeterValue;
    document.getElementById('centimeterOutput').value = yardValue;
}

function clearValues() {
    document.getElementById('yardInput').value = '';
    document.getElementById('centimeterOutput').value = '';
}

// Add event listeners
document.getElementById('yardInput').addEventListener('input', convertYardToCentimeter);
document.getElementById('centimeterOutput').addEventListener('input', convertCentimeterToYard);
</script>

<?php include 'footer.php'; ?>
