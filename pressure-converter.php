<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Free Pressure Converter 2026 - Convert PSI, Bar, Pascal, Atmosphere | Thiyagi</title>
<meta name="description" content="Free online pressure converter tool 2026. Convert between PSI, Bar, Pascal, Atmosphere, kPa, MPa, Torr, mmHg, and inHg instantly. Accurate pressure unit conversions for engineering and scientific calculations.">
<meta name="keywords" content="pressure converter 2026, PSI to Bar, Pascal converter, pressure units, engineering calculator, scientific converter, atmosphere pressure, pressure conversion tool">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Free Pressure Converter 2026 - Convert PSI, Bar, Pascal, Atmosphere">
<meta property="og:description" content="Free online pressure converter tool 2026. Convert between PSI, Bar, Pascal, Atmosphere, kPa, MPa, Torr, mmHg, and inHg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pressure-converter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Free Pressure Converter 2026 - Convert PSI, Bar, Pascal, Atmosphere">
<meta name="twitter:description" content="Free online pressure converter tool 2026. Convert between PSI, Bar, Pascal, Atmosphere, kPa, MPa, Torr, mmHg, and inHg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-thermometer-half text-indigo-600 mr-3"></i>
                Pressure Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between different pressure units instantly with our comprehensive pressure converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- From Unit -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-arrow-up text-indigo-600 mr-2"></i>From
                    </label>
                    <div class="space-y-3">
                        <select id="fromUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="psi">PSI (Pounds per Square Inch)</option>
                            <option value="bar">Bar</option>
                            <option value="atm">Atmosphere (atm)</option>
                            <option value="pa">Pascal (Pa)</option>
                            <option value="kpa">Kilopascal (kPa)</option>
                            <option value="mpa">Megapascal (MPa)</option>
                            <option value="torr">Torr</option>
                            <option value="mmhg">mmHg</option>
                            <option value="inhg">inHg</option>
                        </select>
                        <input
                            type="number"
                            id="fromValue"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                            placeholder="Enter value"
                            step="any"
                        >
                    </div>
                </div>

                <!-- To Unit -->
                <div class="space-y-4">
                    <label class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-arrow-down text-indigo-600 mr-2"></i>To
                    </label>
                    <div class="space-y-3">
                        <select id="toUnit" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="psi">PSI (Pounds per Square Inch)</option>
                            <option value="bar" selected>Bar</option>
                            <option value="atm">Atmosphere (atm)</option>
                            <option value="pa">Pascal (Pa)</option>
                            <option value="kpa">Kilopascal (kPa)</option>
                            <option value="mpa">Megapascal (MPa)</option>
                            <option value="torr">Torr</option>
                            <option value="mmhg">mmHg</option>
                            <option value="inhg">inHg</option>
                        </select>
                        <input
                            type="number"
                            id="toValue"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                            placeholder="Result"
                            readonly
                        >
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapUnits()"
                    class="flex-1 min-w-[140px] bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Units
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
                <i class="fas fa-table text-indigo-600 mr-3"></i>Common Pressure Values
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1 atm</div>
                    <div class="text-sm text-gray-600">= 14.7 PSI</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1 bar</div>
                    <div class="text-sm text-gray-600">= 14.5 PSI</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">100 kPa</div>
                    <div class="text-sm text-gray-600">= 14.5 PSI</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">760 mmHg</div>
                    <div class="text-sm text-gray-600">= 1 atm</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><strong>PSI:</strong> Common in US for tire and hydraulic pressure</li>
                    <li><strong>Bar:</strong> Widely used in Europe and engineering</li>
                    <li><strong>Atmosphere:</strong> Standard atmospheric pressure</li>
                    <li><strong>Pascal:</strong> SI unit for pressure</li>
                    <li><strong>mmHg:</strong> Medical and barometric applications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Tire pressure monitoring</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Hydraulic system design</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Weather forecasting</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Medical equipment calibration</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Industrial process control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
// Conversion factors to Pascal (Pa)
const pressureFactors = {
    'pa': 1,
    'kpa': 1000,
    'mpa': 1000000,
    'bar': 100000,
    'psi': 6895.757,
    'atm': 101325,
    'torr': 133.322,
    'mmhg': 133.322,
    'inhg': 3386.389
};

function convertPressure() {
    const fromValue = parseFloat(document.getElementById('fromValue').value);
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    
    if (!isNaN(fromValue)) {
        // Convert to Pascal first, then to target unit
        const pascalValue = fromValue * pressureFactors[fromUnit];
        const result = pascalValue / pressureFactors[toUnit];
        document.getElementById('toValue').value = result.toFixed(8);
    } else {
        document.getElementById('toValue').value = '';
    }
}

function swapUnits() {
    const fromUnit = document.getElementById('fromUnit').value;
    const toUnit = document.getElementById('toUnit').value;
    const fromValue = document.getElementById('fromValue').value;
    const toValue = document.getElementById('toValue').value;
    
    document.getElementById('fromUnit').value = toUnit;
    document.getElementById('toUnit').value = fromUnit;
    document.getElementById('fromValue').value = toValue;
    document.getElementById('toValue').value = fromValue;
}

function clearValues() {
    document.getElementById('fromValue').value = '';
    document.getElementById('toValue').value = '';
}

// Add event listeners
document.getElementById('fromValue').addEventListener('input', convertPressure);
document.getElementById('fromUnit').addEventListener('change', convertPressure);
document.getElementById('toUnit').addEventListener('change', convertPressure);
</script>

<?php include 'footer.php'; ?>
