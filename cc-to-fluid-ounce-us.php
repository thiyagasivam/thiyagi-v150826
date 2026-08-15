<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>CC to Fluid Ounce US Converter 2026 - cc to fl oz Calculator | Thiyagi</title>
<meta name="description" content="Free online CC to Fluid Ounce US converter 2026. Convert cc to fl oz and fl oz to cc instantly with accurate volume conversion for medical and cooking use.">
<meta name="keywords" content="cc to fluid ounce US converter 2026, cc to fl oz, cubic centimeter to fluid ounce, medical volume, cooking measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="CC to Fluid Ounce US Converter 2026 - cc to fl oz Calculator">
<meta property="og:description" content="Free online CC to Fluid Ounce US converter 2026. Convert cc to fl oz and fl oz to cc instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cc-to-fluid-ounce-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CC to Fluid Ounce US Converter 2026 - cc to fl oz Calculator">
<meta name="twitter:description" content="Free online CC to Fluid Ounce US converter 2026. Convert cc to fl oz and fl oz to cc instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-emerald-600 mr-3"></i>
                CC to Fluid Ounce US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic centimeters and US fluid ounces for medical, laboratory, and cooking applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="ccInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-emerald-600 mr-2"></i>Cubic Centimeter (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic centimeters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 cc = 0.033814 fl oz
                    </div>
                </div>

                <!-- Fluid Ounce Input -->
                <div class="space-y-4">
                    <label for="fluidOunceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tint text-green-600 mr-2"></i>US Fluid Ounce (fl oz)
                    </label>
                    <input
                        type="number"
                        id="fluidOunceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter fluid ounces"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 fl oz = 29.5735 cc
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-green-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Medical & Kitchen Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Medical & Kitchen Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Centimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Fluid Ounces</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">5 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.169 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">15 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.507 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">30 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.014 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.029 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">120 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.057 fl oz</td>
                            </tr>
                            <tr>
                                <td class="py-2">240 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8.115 fl oz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-heartbeat text-emerald-600 mr-3"></i>Practical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Medical & Healthcare:</strong><br>
                        • Liquid medication: 5-30 cc doses<br>
                        • Injection volumes: 0.5-10 cc<br>
                        • IV fluids: 100-1000 cc bags<br>
                        • Oral syringes: 1-60 cc capacity
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Cooking & Baking:</strong><br>
                        • Vanilla extract: 5 cc (1 tsp)<br>
                        • Liquid ingredients: measured in fl oz<br>
                        • Small measuring cups: 1-8 fl oz<br>
                        • Recipe conversions: cc to fl oz
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Laboratory & Scientific:</strong><br>
                        • Sample volumes: 0.1-50 cc<br>
                        • Reagent measurements: precise cc<br>
                        • Test procedures: standardized volumes<br>
                        • Quality control: accurate measurements
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>CC:</strong> Cubic centimeter (= mL)</li>
                    <li><strong>Fluid Ounce:</strong> US customary unit</li>
                    <li><strong>Conversion:</strong> 1 fl oz = 29.5735 cc</li>
                    <li><strong>Standard:</strong> Medical and scientific use</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Use graduated cylinders for accuracy</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Read at eye level (meniscus)</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Temperature affects volume</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Clean measuring tools properly</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Healthcare:</strong> Medication dosing</li>
                    <li><strong>Cooking:</strong> Recipe conversions</li>
                    <li><strong>Laboratory:</strong> Sample preparation</li>
                    <li><strong>Automotive:</strong> Engine displacement</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCCToFluidOunce(cc) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cc) && cc !== '') {
        const fluidOunces = cc / 29.5735;
        document.getElementById('fluidOunceInput').value = fluidOunces.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${cc} cc = ${fluidOunces.toFixed(8)} fl oz</strong>
        `;
    } else {
        document.getElementById('fluidOunceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFluidOunceToCC(fluidOunces) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(fluidOunces) && fluidOunces !== '') {
        const cc = fluidOunces * 29.5735;
        document.getElementById('ccInput').value = cc.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${fluidOunces} fl oz = ${cc.toFixed(6)} cc</strong>
        `;
    } else {
        document.getElementById('ccInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('fluidOunceInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const fluidOunceValue = document.getElementById('fluidOunceInput').value;
    
    document.getElementById('ccInput').value = fluidOunceValue;
    document.getElementById('fluidOunceInput').value = ccValue;
    
    if (fluidOunceValue) {
        convertCCToFluidOunce(parseFloat(fluidOunceValue));
    } else if (ccValue) {
        convertFluidOunceToCC(parseFloat(ccValue));
    }
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', function() {
    convertCCToFluidOunce(parseFloat(this.value));
});

document.getElementById('fluidOunceInput').addEventListener('input', function() {
    convertFluidOunceToCC(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
