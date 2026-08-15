<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ounce to CC Converter 2026 - oz to cc Calculator | Thiyagi</title>
<meta name="description" content="Free online Ounce to CC converter 2026. Convert fluid oz to cc and cc to fl oz instantly with accurate volume conversion for medical and cooking use.">
<meta name="keywords" content="ounce to cc converter 2026, oz to cc, fluid ounce to cubic centimeter, medical dosage, volume converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ounce to CC Converter 2026 - oz to cc Calculator">
<meta property="og:description" content="Free online Ounce to CC converter 2026. Convert fluid oz to cc and cc to fl oz instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/oz-to-cc.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ounce to CC Converter 2026 - oz to cc Calculator">
<meta name="twitter:description" content="Free online Ounce to CC converter 2026. Convert fluid oz to cc and cc to fl oz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-teal-600 mr-3"></i>
                Ounce to CC Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between fluid ounces and cubic centimeters for medical, laboratory, and cooking applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tint text-teal-600 mr-2"></i>Fluid Ounce (fl oz)
                    </label>
                    <input
                        type="number"
                        id="ounceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter fluid ounces"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 fl oz = 29.5735 cc
                    </div>
                </div>

                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="ccInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-cyan-600 mr-2"></i>Cubic Centimeter (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic centimeters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 cc = 0.033814 fl oz
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Medical Dosages -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Medical Dosage Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Fluid Ounces</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Centimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14.79 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">29.57 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">59.15 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">118.29 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">8 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">236.59 cc</td>
                            </tr>
                            <tr>
                                <td class="py-2">16 fl oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">473.18 cc</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Volume Reference Guide -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-beaker text-teal-600 mr-3"></i>Volume Reference Guide
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Medical Applications:</strong><br>
                        • Cough syrup: 5-15 cc (0.17-0.51 fl oz)<br>
                        • Liquid medication: 2.5-30 cc<br>
                        • Injection volume: 0.5-5 cc<br>
                        • Oral syringe: 1-10 cc capacity
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Laboratory Measurements:</strong><br>
                        • Sample vial: 1-15 cc<br>
                        • Pipette volume: 0.1-25 cc<br>
                        • Test tube: 5-50 cc<br>
                        • Beaker: 50-2000 cc
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Cooking & Baking:</strong><br>
                        • Vanilla extract: 5 cc (1 tsp)<br>
                        • Liquid flavoring: 2.5-15 cc<br>
                        • Medicine spoon: 5 cc<br>
                        • Shot glass: ~30 cc (1 fl oz)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Fluid Ounce:</strong> US customary unit</li>
                    <li><strong>CC:</strong> Metric volume unit</li>
                    <li><strong>Conversion:</strong> 1 fl oz = 29.5735 cc</li>
                    <li><strong>Standard:</strong> CC = mL (milliliter)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use graduated cylinder for accuracy</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Read at eye level</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Account for meniscus in liquids</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use appropriate measuring tool</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Healthcare:</strong> Drug administration</li>
                    <li><strong>Laboratory:</strong> Sample preparation</li>
                    <li><strong>Automotive:</strong> Engine displacement</li>
                    <li><strong>Cooking:</strong> Recipe conversions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertOunceToCC(ounces) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounces) && ounces !== '') {
        const cc = ounces * 29.5735;
        document.getElementById('ccInput').value = cc.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${ounces} fl oz = ${cc.toFixed(6)} cc</strong>
        `;
    } else {
        document.getElementById('ccInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCCToOunce(cc) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cc) && cc !== '') {
        const ounces = cc / 29.5735;
        document.getElementById('ounceInput').value = ounces.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${cc} cc = ${ounces.toFixed(8)} fl oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ounceInput').value = '';
    document.getElementById('ccInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ounceValue = document.getElementById('ounceInput').value;
    const ccValue = document.getElementById('ccInput').value;
    
    document.getElementById('ounceInput').value = ccValue;
    document.getElementById('ccInput').value = ounceValue;
    
    if (ccValue) {
        convertOunceToCC(parseFloat(ccValue));
    } else if (ounceValue) {
        convertCCToOunce(parseFloat(ounceValue));
    }
}

// Add event listeners
document.getElementById('ounceInput').addEventListener('input', function() {
    convertOunceToCC(parseFloat(this.value));
});

document.getElementById('ccInput').addEventListener('input', function() {
    convertCCToOunce(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
