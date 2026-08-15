<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ounce to Milligram Converter 2026 - oz to mg Calculator | Thiyagi</title>
<meta name="description" content="Free online Ounce to Milligram converter 2026. Convert oz to mg and mg to oz instantly with accurate weight conversion for cooking and pharmacy.">
<meta name="keywords" content="ounce to milligram converter 2026, oz to mg, weight converter, mass units, cooking measurements, pharmacy dosage">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ounce to Milligram Converter 2026 - oz to mg Calculator">
<meta property="og:description" content="Free online Ounce to Milligram converter 2026. Convert oz to mg and mg to oz instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ounce-to-milligram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ounce to Milligram Converter 2026 - oz to mg Calculator">
<meta property="twitter:description" content="Free online Ounce to Milligram converter 2026. Convert oz to mg and mg to oz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-orange-600 mr-3"></i>
                Ounce to Milligram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between ounces and milligrams for cooking, pharmacy, jewelry, and scientific measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-orange-600 mr-2"></i>Ounces (oz)
                    </label>
                    <input
                        type="number"
                        id="ounceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter ounces"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 oz = 28,349.5 mg
                    </div>
                </div>

                <!-- Milligram Input -->
                <div class="space-y-4">
                    <label for="milligramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-pills text-amber-600 mr-2"></i>Milligrams (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter milligrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mg = 0.000035274 oz
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Weight Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>Weight Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Ounces</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Milligrams</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">28.35 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">283.5 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,835 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">28,350 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">56,700 mg</td>
                            </tr>
                            <tr>
                                <td class="py-2">8 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">226,800 mg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-mortar-pestle text-orange-600 mr-3"></i>Practical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Pharmacy & Medicine:</strong><br>
                        • Aspirin tablet: 325 mg (0.011 oz)<br>
                        • Vitamin C: 1000 mg (0.035 oz)<br>
                        • Prescription dose: 5-50 mg<br>
                        • Daily supplements: 100-2000 mg
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Cooking & Baking:</strong><br>
                        • Salt pinch: 300-400 mg<br>
                        • Spice powder: 1-2 oz (28,000-57,000 mg)<br>
                        • Vanilla extract: 0.25 oz (7,087 mg)<br>
                        • Food coloring: 1-5 mg per serving
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Jewelry & Precious Metals:</strong><br>
                        • Gold earring: 1-3 oz (28,000-85,000 mg)<br>
                        • Silver ring: 0.1-0.5 oz (2,800-14,000 mg)<br>
                        • Diamond: 100-500 mg (carat weight)<br>
                        • Watch components: 1-100 mg
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Ounce:</strong> Imperial weight unit</li>
                    <li><strong>Milligram:</strong> Metric weight unit</li>
                    <li><strong>Conversion:</strong> 1 oz = 28,349.5 mg</li>
                    <li><strong>Precision:</strong> 5 decimal places</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>mg for precise dosing</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>oz for cooking portions</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Large conversion factor</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Medical accuracy needed</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medical:</strong> Drug dosages</li>
                    <li><strong>Culinary:</strong> Recipe scaling</li>
                    <li><strong>Jewelry:</strong> Precious metals</li>
                    <li><strong>Science:</strong> Laboratory work</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertOunceToMilligram(ounce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounce) && ounce !== '') {
        // 1 ounce = 28349.523125 mg (exact)
        const milligram = ounce * 28349.523125;
        document.getElementById('milligramInput').value = milligram.toFixed(3);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${ounce} oz = ${milligram.toLocaleString(undefined, {maximumFractionDigits: 3})} mg</strong>
        `;
    } else {
        document.getElementById('milligramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMilligramToOunce(milligram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milligram) && milligram !== '') {
        // 1 mg = 1/28349.523125 oz
        const ounce = milligram / 28349.523125;
        document.getElementById('ounceInput').value = ounce.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${milligram.toLocaleString()} mg = ${ounce.toFixed(6)} oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ounceInput').value = '';
    document.getElementById('milligramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ounceValue = document.getElementById('ounceInput').value;
    const milligramValue = document.getElementById('milligramInput').value;
    
    document.getElementById('ounceInput').value = milligramValue;
    document.getElementById('milligramInput').value = ounceValue;
    
    if (milligramValue) {
        convertOunceToMilligram(parseFloat(milligramValue));
    } else if (ounceValue) {
        convertMilligramToOunce(parseFloat(ounceValue));
    }
}

// Add event listeners
document.getElementById('ounceInput').addEventListener('input', function() {
    convertOunceToMilligram(parseFloat(this.value));
});

document.getElementById('milligramInput').addEventListener('input', function() {
    convertMilligramToOunce(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
