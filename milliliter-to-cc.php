<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milliliter to CC Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online milliliter to cubic centimeter converter 2026. Convert ml to cc instantly with accurate volume conversion. Perfect for medical and automotive applications.">
<meta name="keywords" content="milliliter to cc converter 2026, ml to cc, cubic centimeter converter, medical converter, automotive volume">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milliliter to CC Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online milliliter to cubic centimeter converter 2026. Convert ml to cc instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milliliter-to-cc.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milliliter to CC Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online milliliter to cubic centimeter converter 2026. Convert ml to cc instantly with accurate volume conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-teal-600 mr-3"></i>
                Milliliter to CC Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milliliters to cubic centimeters instantly with our accurate volume converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliters Input -->
                <div class="space-y-2">
                    <label for="mlInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-teal-600 mr-2"></i>Milliliters (ml)
                    </label>
                    <input
                        type="number"
                        id="mlInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="Enter milliliters"
                        step="any"
                    >
                </div>

                <!-- CC Output -->
                <div class="space-y-2">
                    <label for="ccOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cube text-teal-600 mr-2"></i>Cubic Centimeters (cc)
                    </label>
                    <input
                        type="number"
                        id="ccOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-lg"
                        placeholder="CC result"
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
                    <div class="font-bold text-teal-800">1 ml</div>
                    <div class="text-sm text-gray-600">= 1 cc</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">10 ml</div>
                    <div class="text-sm text-gray-600">= 10 cc</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">100 ml</div>
                    <div class="text-sm text-gray-600">= 100 cc</div>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-teal-800">1000 ml</div>
                    <div class="text-sm text-gray-600">= 1000 cc</div>
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
                    This converter helps you convert between milliliters and cubic centimeters. One milliliter equals exactly one cubic centimeter.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Cubic Centimeters = Milliliters × 1
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Laboratory measurements</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Engine displacement specifications</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Pharmaceutical formulations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Scientific research</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMlToCc() {
    const ml = parseFloat(document.getElementById('mlInput').value);
    if (!isNaN(ml)) {
        const cc = ml * 1; // 1 ml = 1 cc
        document.getElementById('ccOutput').value = cc.toFixed(8);
    } else {
        document.getElementById('ccOutput').value = '';
    }
}

function convertCcToMl() {
    const cc = parseFloat(document.getElementById('ccOutput').value);
    if (!isNaN(cc)) {
        const ml = cc * 1; // 1 cc = 1 ml
        document.getElementById('mlInput').value = ml.toFixed(8);
    } else {
        document.getElementById('mlInput').value = '';
    }
}

function swapValues() {
    const mlValue = document.getElementById('mlInput').value;
    const ccValue = document.getElementById('ccOutput').value;
    
    document.getElementById('mlInput').value = ccValue;
    document.getElementById('ccOutput').value = mlValue;
}

function clearValues() {
    document.getElementById('mlInput').value = '';
    document.getElementById('ccOutput').value = '';
}

// Add event listeners
document.getElementById('mlInput').addEventListener('input', convertMlToCc);
document.getElementById('ccOutput').addEventListener('input', convertCcToMl);
</script>

<?php include 'footer.php'; ?>
