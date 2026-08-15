<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milligram to Ounce Converter 2026 - mg to oz Calculator | Thiyagi</title>
<meta name="description" content="Free online Milligram to Ounce converter 2026. Convert mg to oz and oz to mg instantly with accurate weight conversion for pharmacy and jewelry.">
<meta name="keywords" content="milligram to ounce converter 2026, mg to oz, weight converter, pharmacy dosage, jewelry weighing">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milligram to Ounce Converter 2026 - mg to oz Calculator">
<meta property="og:description" content="Free online Milligram to Ounce converter 2026. Convert mg to oz and oz to mg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milligram-to-ounce.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milligram to Ounce Converter 2026 - mg to oz Calculator">
<meta name="twitter:description" content="Free online Milligram to Ounce converter 2026. Convert mg to oz and oz to mg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-indigo-600 mr-3"></i>
                Milligram to Ounce Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milligrams and ounces for pharmacy, jewelry, and precision weighing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milligram Input -->
                <div class="space-y-4">
                    <label for="milligramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-pills text-indigo-600 mr-2"></i>Milligram (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter milligrams"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 mg = 0.000035274 oz
                    </div>
                </div>

                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-purple-600 mr-2"></i>Ounce (oz)
                    </label>
                    <input
                        type="number"
                        id="ounceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter ounces"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 oz = 28349.5231 mg
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Medication Doses -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Common Medication Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milligrams</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Ounces</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.003527 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">250 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.008818 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.017637 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1000 mg (1g)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.035274 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5000 mg (5g)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.176370 oz</td>
                            </tr>
                            <tr>
                                <td class="py-2">10000 mg (10g)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.352740 oz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Small Weight Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-gem text-indigo-600 mr-3"></i>Small Weight Reference
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Pharmaceutical:</strong><br>
                        • Aspirin tablet: 325 mg<br>
                        • Vitamin C tablet: 500-1000 mg<br>
                        • Ibuprofen: 200-600 mg<br>
                        • Birth control pill: ~20-50 mg
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Jewelry & Precious Metals:</strong><br>
                        • Small earring: 50-200 mg<br>
                        • Wedding ring: 2-6 grams (2000-6000 mg)<br>
                        • Gold chain: 1-10 grams<br>
                        • Diamond (1 carat): 200 mg
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Common Items:</strong><br>
                        • Paper clip: ~1000 mg (1g)<br>
                        • Coffee bean: ~100-150 mg<br>
                        • Rice grain: ~20-25 mg<br>
                        • Sugar packet: ~4000 mg (4g)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Weight Systems
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Milligram:</strong> Metric unit (SI)</li>
                    <li><strong>Ounce:</strong> Imperial/US unit</li>
                    <li><strong>Conversion:</strong> 1 oz = 28,349.5231 mg</li>
                    <li><strong>Precision:</strong> Milligrams for small weights</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Weighing Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use digital scale for accuracy</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Calibrate scales regularly</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Account for container weight</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Stable, level surface</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medical:</strong> Drug dosages</li>
                    <li><strong>Laboratory:</strong> Chemical measurements</li>
                    <li><strong>Jewelry:</strong> Precious metal weighing</li>
                    <li><strong>Cooking:</strong> Spice measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMilligramToOunce(milligrams) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milligrams) && milligrams !== '') {
        const ounces = milligrams / 28349.5231;
        document.getElementById('ounceInput').value = ounces.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${milligrams} mg = ${ounces.toFixed(10)} oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertOunceToMilligram(ounces) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounces) && ounces !== '') {
        const milligrams = ounces * 28349.5231;
        document.getElementById('milligramInput').value = milligrams.toFixed(4);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${ounces} oz = ${milligrams.toFixed(4)} mg</strong>
        `;
    } else {
        document.getElementById('milligramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milligramInput').value = '';
    document.getElementById('ounceInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const milligramValue = document.getElementById('milligramInput').value;
    const ounceValue = document.getElementById('ounceInput').value;
    
    document.getElementById('milligramInput').value = ounceValue;
    document.getElementById('ounceInput').value = milligramValue;
    
    if (ounceValue) {
        convertMilligramToOunce(parseFloat(ounceValue));
    } else if (milligramValue) {
        convertOunceToMilligram(parseFloat(milligramValue));
    }
}

// Add event listeners
document.getElementById('milligramInput').addEventListener('input', function() {
    convertMilligramToOunce(parseFloat(this.value));
});

document.getElementById('ounceInput').addEventListener('input', function() {
    convertOunceToMilligram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
