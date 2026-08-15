<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Grain to Pound Converter 2026 - gr to lb Calculator | Thiyagi</title>
<meta name="description" content="Free online Grain to Pound converter 2026. Convert gr to lb and lb to gr instantly with accurate weight conversion for pharmacy and jewelry.">
<meta name="keywords" content="grain to pound converter 2026, gr to lb, weight converter, pharmaceutical weight, apothecary weight, Troy grain">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Grain to Pound Converter 2026 - gr to lb Calculator">
<meta property="og:description" content="Free online Grain to Pound converter 2026. Convert gr to lb and lb to gr instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/grain-to-pound.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Grain to Pound Converter 2026 - gr to lb Calculator">
<meta name="twitter:description" content="Free online Grain to Pound converter 2026. Convert gr to lb and lb to gr instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-pills text-amber-600 mr-3"></i>
                Grain to Pound Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between grains and pounds for pharmaceutical, jewelry, and precision weight measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Grain Input -->
                <div class="space-y-4">
                    <label for="grainInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-seedling text-amber-600 mr-2"></i>Grain (gr)
                    </label>
                    <input
                        type="number"
                        id="grainInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter grains"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 grain = 1/7000 pound
                    </div>
                </div>

                <!-- Pound Input -->
                <div class="space-y-4">
                    <label for="poundInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-yellow-600 mr-2"></i>Pound (lb)
                    </label>
                    <input
                        type="number"
                        id="poundInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 pound = 7000 grains
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Weight Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Weight Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Grain</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pound</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.000142857 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001428571 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.014285714 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.142857143 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">7,000 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 lb</td>
                            </tr>
                            <tr>
                                <td class="py-2">70,000 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 lb</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pharmaceutical & Jewelry Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-prescription-bottle text-amber-600 mr-3"></i>Precision Weight Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Pharmaceutical Dosages:</strong><br>
                        • Aspirin tablet: 5 grains (325 mg)<br>
                        • Medicine dose: 0.5-15 grains<br>
                        • Prescription: 1/4 to 10 grains<br>
                        • Apothecary system: Traditional grains
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Jewelry & Precious Metals:</strong><br>
                        • Diamond: 1-5 grains (0.2-1 carat)<br>
                        • Gold dust: 1-100 grains<br>
                        • Pearl: 2-20 grains<br>
                        • Small gem: 0.5-10 grains
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Scientific Measurements:</strong><br>
                        • Chemical samples: 1-1000 grains<br>
                        • Powder amounts: 0.1-100 grains<br>
                        • Research quantities: Precise to 0.01 gr<br>
                        • Analytical balance: ±0.001 grain accuracy
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Grain:</strong> 1/7000 pound = 64.79891 mg</li>
                    <li><strong>Pound:</strong> 7000 grains = 453.592 g</li>
                    <li><strong>Conversion:</strong> 1 lb = 7000 gr</li>
                    <li><strong>System:</strong> Imperial/Apothecary units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Use analytical balance for grains</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Check calibration regularly</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Account for environmental factors</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Record measurements precisely</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pharmacy:</strong> Drug dosages</li>
                    <li><strong>Jewelry:</strong> Precious metals/gems</li>
                    <li><strong>Science:</strong> Laboratory measurements</li>
                    <li><strong>History:</strong> Apothecary system</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGrainToLb(grains) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(grains) && grains !== '') {
        const pounds = grains / 7000;
        document.getElementById('poundInput').value = pounds.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${grains} gr = ${pounds.toFixed(10)} lb</strong>
        `;
    } else {
        document.getElementById('poundInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLbToGrain(pounds) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pounds) && pounds !== '') {
        const grains = pounds * 7000;
        document.getElementById('grainInput').value = grains.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${pounds} lb = ${grains.toFixed(6)} gr</strong>
        `;
    } else {
        document.getElementById('grainInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('grainInput').value = '';
    document.getElementById('poundInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const grainValue = document.getElementById('grainInput').value;
    const poundValue = document.getElementById('poundInput').value;
    
    document.getElementById('grainInput').value = poundValue;
    document.getElementById('poundInput').value = grainValue;
    
    if (poundValue) {
        convertGrainToLb(parseFloat(poundValue));
    } else if (grainValue) {
        convertLbToGrain(parseFloat(grainValue));
    }
}

// Add event listeners
document.getElementById('grainInput').addEventListener('input', function() {
    convertGrainToLb(parseFloat(this.value));
});

document.getElementById('poundInput').addEventListener('input', function() {
    convertLbToGrain(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
