<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Decigram to Gram Converter 2026 - dg to g Calculator | Thiyagi</title>
<meta name="description" content="Free online Decigram to Gram converter 2026. Convert dg to g and g to dg instantly with accurate weight conversion for laboratory and precision measurements.">
<meta name="keywords" content="decigram to gram converter 2026, dg to g, weight converter, metric weight, laboratory measurements, precision scale">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Decigram to Gram Converter 2026 - dg to g Calculator">
<meta property="og:description" content="Free online Decigram to Gram converter 2026. Convert dg to g and g to dg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/decigram-to-gram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Decigram to Gram Converter 2026 - dg to g Calculator">
<meta name="twitter:description" content="Free online Decigram to Gram converter 2026. Convert dg to g and g to dg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale-right text-emerald-600 mr-3"></i>
                Decigram to Gram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between decigrams and grams for laboratory work, pharmaceutical measurements, and precision weighing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Decigram Input -->
                <div class="space-y-4">
                    <label for="decigramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-emerald-600 mr-2"></i>Decigram (dg)
                    </label>
                    <input
                        type="number"
                        id="decigramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter decigrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 decigram = 0.1 gram
                    </div>
                </div>

                <!-- Gram Input -->
                <div class="space-y-4">
                    <label for="gramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-green-600 mr-2"></i>Gram (g)
                    </label>
                    <input
                        type="number"
                        id="gramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter grams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gram = 10 decigrams
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
            <!-- Weight Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Weight Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Decigram</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Gram</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 g</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 g</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 g</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 g</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 g</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 dg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 g</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Laboratory & Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-emerald-600 mr-3"></i>Laboratory & Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Chemical Samples:</strong><br>
                        • Small sample: 1-10 dg (0.1-1 g)<br>
                        • Medium sample: 10-50 dg (1-5 g)<br>
                        • Large sample: 50-100 dg (5-10 g)<br>
                        • Bulk sample: 100+ dg (10+ g)
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Pharmaceutical:</strong><br>
                        • Active ingredient: 0.5-5 dg (0.05-0.5 g)<br>
                        • Tablet weight: 5-20 dg (0.5-2 g)<br>
                        • Capsule filling: 2-15 dg (0.2-1.5 g)<br>
                        • Powder dose: 1-10 dg (0.1-1 g)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Precision Measurements:</strong><br>
                        • Analytical balance: ±0.1 dg precision<br>
                        • Quality control: 0.1-1 dg tolerance<br>
                        • Research sample: 1-50 dg range<br>
                        • Calibration weight: 10-1000 dg
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Decigram:</strong> 1/10 gram = 100 mg</li>
                    <li><strong>Gram:</strong> Base metric unit</li>
                    <li><strong>Conversion:</strong> 1 g = 10 dg</li>
                    <li><strong>Symbol:</strong> dg for decigram</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Use analytical balance for dg</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Calibrate scales regularly</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Control environmental factors</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Record with proper precision</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Laboratory:</strong> Chemical analysis</li>
                    <li><strong>Pharmacy:</strong> Drug formulation</li>
                    <li><strong>Research:</strong> Precise measurements</li>
                    <li><strong>Quality:</strong> Control testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertDgToG(decigrams) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(decigrams) && decigrams !== '') {
        const grams = decigrams * 0.1;
        document.getElementById('gramInput').value = grams.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${decigrams} dg = ${grams.toFixed(6)} g</strong>
        `;
    } else {
        document.getElementById('gramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGToDg(grams) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(grams) && grams !== '') {
        const decigrams = grams * 10;
        document.getElementById('decigramInput').value = decigrams.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${grams} g = ${decigrams.toFixed(6)} dg</strong>
        `;
    } else {
        document.getElementById('decigramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('decigramInput').value = '';
    document.getElementById('gramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const dgValue = document.getElementById('decigramInput').value;
    const gValue = document.getElementById('gramInput').value;
    
    document.getElementById('decigramInput').value = gValue;
    document.getElementById('gramInput').value = dgValue;
    
    if (gValue) {
        convertDgToG(parseFloat(gValue));
    } else if (dgValue) {
        convertGToDg(parseFloat(dgValue));
    }
}

// Add event listeners
document.getElementById('decigramInput').addEventListener('input', function() {
    convertDgToG(parseFloat(this.value));
});

document.getElementById('gramInput').addEventListener('input', function() {
    convertGToDg(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
