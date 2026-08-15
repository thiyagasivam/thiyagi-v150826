<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Standard Atmosphere to Pascal Converter 2026 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online standard atmosphere to pascal converter 2026. Convert atm to Pa instantly with accurate pressure conversion for meteorology and engineering.">
<meta name="keywords" content="standard atmosphere to pascal converter 2026, atm to Pa, pressure converter, meteorology calculator, atmospheric pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Standard Atmosphere to Pascal Converter 2026 - Pressure Calculator">
<meta property="og:description" content="Free online standard atmosphere to pascal converter 2026. Convert atm to Pa instantly with accurate pressure conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/standard-atmosphere-to-pascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Standard Atmosphere to Pascal Converter 2026 - Pressure Calculator">
<meta name="twitter:description" content="Free online standard atmosphere to pascal converter 2026. Convert atm to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cloud text-sky-600 mr-3"></i>
                Standard Atmosphere to Pascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert standard atmospheres to pascals instantly for meteorology and engineering calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Standard Atmosphere Input -->
                <div class="space-y-2">
                    <label for="atmInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cloud text-sky-600 mr-2"></i>Standard Atmosphere (atm)
                    </label>
                    <input
                        type="number"
                        id="atmInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-lg"
                        placeholder="Enter standard atmosphere"
                        step="any"
                    >
                </div>

                <!-- Pascals Output -->
                <div class="space-y-2">
                    <label for="pascalOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-sky-600 mr-2"></i>Pascals (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-lg"
                        placeholder="Pascals result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-sky-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">1 atm</div>
                    <div class="text-sm text-gray-600">= 101,325 Pa</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">0.5 atm</div>
                    <div class="text-sm text-gray-600">= 50,662.5 Pa</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">2 atm</div>
                    <div class="text-sm text-gray-600">= 202,650 Pa</div>
                </div>
                <div class="bg-sky-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-sky-800">10 atm</div>
                    <div class="text-sm text-gray-600">= 1,013,250 Pa</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-sky-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between standard atmospheres and pascals. One standard atmosphere equals exactly 101,325 pascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pascals = Standard Atmosphere × 101,325<br>
                    Standard Atmosphere = Pascals ÷ 101,325
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Meteorological calculations</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Aviation pressure systems</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Weather forecasting</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Atmospheric research</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Pressure vessel design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertAtmToPascal() {
    const atm = parseFloat(document.getElementById('atmInput').value);
    if (!isNaN(atm)) {
        const pascal = atm * 101325;
        document.getElementById('pascalOutput').value = pascal.toFixed(8);
    } else {
        document.getElementById('pascalOutput').value = '';
    }
}

function convertPascalToAtm() {
    const pascal = parseFloat(document.getElementById('pascalOutput').value);
    if (!isNaN(pascal)) {
        const atm = pascal / 101325;
        document.getElementById('atmInput').value = atm.toFixed(8);
    } else {
        document.getElementById('atmInput').value = '';
    }
}

function swapValues() {
    const atmValue = document.getElementById('atmInput').value;
    const pascalValue = document.getElementById('pascalOutput').value;
    
    document.getElementById('atmInput').value = pascalValue;
    document.getElementById('pascalOutput').value = atmValue;
}

function clearValues() {
    document.getElementById('atmInput').value = '';
    document.getElementById('pascalOutput').value = '';
}

// Add event listeners
document.getElementById('atmInput').addEventListener('input', convertAtmToPascal);
document.getElementById('pascalOutput').addEventListener('input', convertPascalToAtm);
</script>

<?php include 'footer.php'; ?>
