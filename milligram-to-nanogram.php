<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milligram to Nanogram Converter 2026 - mg to ng Calculator | Thiyagi</title>
<meta name="description" content="Free online Milligram to Nanogram converter 2026. Convert mg to ng and ng to mg instantly with accurate micro-scale weight conversion.">
<meta name="keywords" content="milligram to nanogram converter 2026, mg to ng, micro weight, pharmaceutical dosing, laboratory measurements, precision scale">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milligram to Nanogram Converter 2026 - mg to ng Calculator">
<meta property="og:description" content="Free online Milligram to Nanogram converter 2026. Convert mg to ng and ng to mg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milligram-to-nanogram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milligram to Nanogram Converter 2026 - mg to ng Calculator">
<meta property="twitter:description" content="Free online Milligram to Nanogram converter 2026. Convert mg to ng and ng to mg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-pink-600 mr-3"></i>
                Milligram to Nanogram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milligrams and nanograms for pharmaceutical research, analytical chemistry, and precision measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milligram Input -->
                <div class="space-y-4">
                    <label for="milligramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-pills text-pink-600 mr-2"></i>Milligrams (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter milligrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mg = 1,000,000 ng
                    </div>
                </div>

                <!-- Nanogram Input -->
                <div class="space-y-4">
                    <label for="nanogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-vial text-rose-600 mr-2"></i>Nanograms (ng)
                    </label>
                    <input
                        type="number"
                        id="nanogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter nanograms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ng = 0.000001 mg
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-pink-50 to-rose-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Micro-Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-pink-600 mr-3"></i>Micro-Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milligrams</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanograms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.000001 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.00001 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.0001 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.001 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 ng</td>
                            </tr>
                            <tr>
                                <td class="py-2">1 mg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 ng</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pharmaceutical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-microscope text-pink-600 mr-3"></i>Pharmaceutical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Hormone Measurements:</strong><br>
                        • Testosterone: 300-1000 ng/dL<br>
                        • Estrogen: 15-350 ng/L<br>
                        • Insulin: 2-25 ng/mL<br>
                        • Growth hormone: 0.4-10 ng/mL
                    </div>
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Drug Concentrations:</strong><br>
                        • Therapeutic levels: 1-1000 ng/mL<br>
                        • Trace analysis: 0.1-10 ng/mL<br>
                        • Environmental toxins: 0.01-1 ng/L<br>
                        • Biomarkers: 1-100 ng/mL
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Research Applications:</strong><br>
                        • Protein assays: 1-1000 ng/well<br>
                        • DNA quantification: 10-1000 ng/μL<br>
                        • Cell culture: 0.1-100 ng/mL<br>
                        • Analytical chemistry: pg-ng range
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-pink-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Milligram:</strong> 10⁻³ grams</li>
                    <li><strong>Nanogram:</strong> 10⁻⁹ grams</li>
                    <li><strong>Conversion:</strong> 1 mg = 10⁶ ng</li>
                    <li><strong>Precision:</strong> Laboratory scale</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>ng for trace analysis</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>mg for drug dosing</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Million-fold difference</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Analytical precision</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-pink-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pharmacy:</strong> Drug concentrations</li>
                    <li><strong>Research:</strong> Biomarker analysis</li>
                    <li><strong>Medical:</strong> Hormone levels</li>
                    <li><strong>Environmental:</strong> Toxin detection</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMilligramToNanogram(milligram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milligram) && milligram !== '') {
        // 1 mg = 1,000,000 ng
        const nanogram = milligram * 1000000;
        document.getElementById('nanogramInput').value = nanogram;
        
        // Format with appropriate notation for large numbers
        const formattedNanogram = nanogram >= 1000000 ? nanogram.toExponential(3) : nanogram.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${milligram} mg = ${formattedNanogram} ng</strong>
        `;
    } else {
        document.getElementById('nanogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNanogramToMilligram(nanogram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanogram) && nanogram !== '') {
        // 1 ng = 0.000001 mg
        const milligram = nanogram / 1000000;
        document.getElementById('milligramInput').value = milligram.toFixed(8);
        
        // Format nanogram with appropriate notation
        const formattedNanogram = nanogram >= 1000000 ? nanogram.toExponential(3) : nanogram.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${formattedNanogram} ng = ${milligram.toFixed(6)} mg</strong>
        `;
    } else {
        document.getElementById('milligramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milligramInput').value = '';
    document.getElementById('nanogramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const milligramValue = document.getElementById('milligramInput').value;
    const nanogramValue = document.getElementById('nanogramInput').value;
    
    document.getElementById('milligramInput').value = nanogramValue;
    document.getElementById('nanogramInput').value = milligramValue;
    
    if (nanogramValue) {
        convertMilligramToNanogram(parseFloat(nanogramValue));
    } else if (milligramValue) {
        convertNanogramToMilligram(parseFloat(milligramValue));
    }
}

// Add event listeners
document.getElementById('milligramInput').addEventListener('input', function() {
    convertMilligramToNanogram(parseFloat(this.value));
});

document.getElementById('nanogramInput').addEventListener('input', function() {
    convertNanogramToMilligram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
