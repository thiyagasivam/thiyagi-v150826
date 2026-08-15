<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megapascal to Pascal Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online megapascal to pascal converter 2026. Convert MPa to Pa instantly with accurate pressure conversion for engineering applications.">
<meta name="keywords" content="megapascal to pascal converter 2026, MPa to Pa, pressure converter, engineering calculator, stress converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megapascal to Pascal Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online megapascal to pascal converter 2026. Convert MPa to Pa instantly with accurate pressure conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megapascal-to-pascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megapascal to Pascal Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online megapascal to pascal converter 2026. Convert MPa to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-pink-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-red-600 mr-3"></i>
                Megapascal to Pascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megapascals to pascals instantly for engineering and pressure calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megapascals Input -->
                <div class="space-y-2">
                    <label for="megapascalInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight text-red-600 mr-2"></i>Megapascals (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter megapascals"
                        step="any"
                    >
                </div>

                <!-- Pascals Output -->
                <div class="space-y-2">
                    <label for="pascalOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-red-600 mr-2"></i>Pascals (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Pascals result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1 MPa</div>
                    <div class="text-sm text-gray-600">= 1,000,000 Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">0.5 MPa</div>
                    <div class="text-sm text-gray-600">= 500,000 Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">0.1 MPa</div>
                    <div class="text-sm text-gray-600">= 100,000 Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10 MPa</div>
                    <div class="text-sm text-gray-600">= 10,000,000 Pa</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between megapascals and pascals. One megapascal equals 1,000,000 pascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pascals = Megapascals × 1,000,000<br>
                    Megapascals = Pascals ÷ 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Structural engineering calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Material stress analysis</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Hydraulic system design</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Pressure vessel calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Geotechnical engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMegapascalToPascal() {
    const megapascal = parseFloat(document.getElementById('megapascalInput').value);
    if (!isNaN(megapascal)) {
        const pascal = megapascal * 1000000;
        document.getElementById('pascalOutput').value = pascal.toFixed(8);
    } else {
        document.getElementById('pascalOutput').value = '';
    }
}

function convertPascalToMegapascal() {
    const pascal = parseFloat(document.getElementById('pascalOutput').value);
    if (!isNaN(pascal)) {
        const megapascal = pascal / 1000000;
        document.getElementById('megapascalInput').value = megapascal.toFixed(10);
    } else {
        document.getElementById('megapascalInput').value = '';
    }
}

function swapValues() {
    const megapascalValue = document.getElementById('megapascalInput').value;
    const pascalValue = document.getElementById('pascalOutput').value;
    
    document.getElementById('megapascalInput').value = pascalValue;
    document.getElementById('pascalOutput').value = megapascalValue;
}

function clearValues() {
    document.getElementById('megapascalInput').value = '';
    document.getElementById('pascalOutput').value = '';
}

// Add event listeners
document.getElementById('megapascalInput').addEventListener('input', convertMegapascalToPascal);
document.getElementById('pascalOutput').addEventListener('input', convertPascalToMegapascal);
</script>

<?php include 'footer.php'; ?>
