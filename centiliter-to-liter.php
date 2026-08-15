<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centiliter to Liter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online centiliter to liter converter 2026. Convert cl to L instantly with accurate volume conversion for cooking, medicine, and laboratory use.">
<meta name="keywords" content="centiliter to liter converter 2026, cl to L, volume converter, cooking calculator, medical dosage">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centiliter to Liter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online centiliter to liter converter 2026. Convert cl to L instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centiliter-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centiliter to Liter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online centiliter to liter converter 2026. Convert cl to L instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-cyan-600 mr-3"></i>
                Centiliter to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert centiliters to liters instantly with our accurate volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centiliters Input -->
                <div class="space-y-2">
                    <label for="centiliterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-cyan-600 mr-2"></i>Centiliters (cl)
                    </label>
                    <input
                        type="number"
                        id="centiliterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter centiliters"
                        step="any"
                    >
                </div>

                <!-- Liters Output -->
                <div class="space-y-2">
                    <label for="literOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bottle-water text-cyan-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Liters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-cyan-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1 cl</div>
                    <div class="text-sm text-gray-600">= 0.01 L</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">10 cl</div>
                    <div class="text-sm text-gray-600">= 0.1 L</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">50 cl</div>
                    <div class="text-sm text-gray-600">= 0.5 L</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">100 cl</div>
                    <div class="text-sm text-gray-600">= 1 L</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-cyan-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between centiliters and liters. One centiliter equals 0.01 liters, or there are 100 centiliters in one liter.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Liters = Centiliters ÷ 100<br>
                    Centiliters = Liters × 100
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Cooking and baking measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Laboratory experiments</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Beverage serving sizes</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Pharmaceutical preparations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertCentiliterToLiter() {
    const centiliter = parseFloat(document.getElementById('centiliterInput').value);
    if (!isNaN(centiliter)) {
        const liter = centiliter / 100;
        document.getElementById('literOutput').value = liter.toFixed(8);
    } else {
        document.getElementById('literOutput').value = '';
    }
}

function convertLiterToCentiliter() {
    const liter = parseFloat(document.getElementById('literOutput').value);
    if (!isNaN(liter)) {
        const centiliter = liter * 100;
        document.getElementById('centiliterInput').value = centiliter.toFixed(8);
    } else {
        document.getElementById('centiliterInput').value = '';
    }
}

function swapValues() {
    const centiliterValue = document.getElementById('centiliterInput').value;
    const literValue = document.getElementById('literOutput').value;
    
    document.getElementById('centiliterInput').value = literValue;
    document.getElementById('literOutput').value = centiliterValue;
}

function clearValues() {
    document.getElementById('centiliterInput').value = '';
    document.getElementById('literOutput').value = '';
}

// Add event listeners
document.getElementById('centiliterInput').addEventListener('input', convertCentiliterToLiter);
document.getElementById('literOutput').addEventListener('input', convertLiterToCentiliter);
</script>

<?php include 'footer.php'; ?>
