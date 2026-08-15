<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nanogram to Milligram Converter 2026 - ng to mg Calculator | Thiyagi</title>
<meta name="description" content="Free online Nanogram to Milligram converter 2026. Convert ng to mg and mg to ng instantly with accurate mass conversion for scientific measurements.">
<meta name="keywords" content="nanogram to milligram converter 2026, ng to mg, mass converter, scientific measurements, laboratory calculations, pharmaceutical dosing">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nanogram to Milligram Converter 2026 - ng to mg Calculator">
<meta property="og:description" content="Free online Nanogram to Milligram converter 2026. Convert ng to mg and mg to ng instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nanogram-to-milligram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nanogram to Milligram Converter 2026 - ng to mg Calculator">
<meta name="twitter:description" content="Free online Nanogram to Milligram converter 2026. Convert ng to mg and mg to ng instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-violet-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-dna text-indigo-600 mr-3"></i>
                Nanogram to Milligram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between nanograms and milligrams for pharmaceutical dosing, laboratory measurements, and scientific research applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nanogram Input -->
                <div class="space-y-4">
                    <label for="nanogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-indigo-600 mr-2"></i>Nanogram (ng)
                    </label>
                    <input
                        type="number"
                        id="nanogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter nanograms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ng = 0.000001 mg
                    </div>
                </div>

                <!-- Milligram Input -->
                <div class="space-y-4">
                    <label for="milligramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-pills text-violet-600 mr-2"></i>Milligram (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter milligrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mg = 1,000,000 ng
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-violet-50 rounded-lg">
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
            <!-- Mass Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Mass Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Nanogram</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Milligram</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 mg</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 mg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-microscope text-indigo-600 mr-3"></i>Scientific Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Pharmaceutical Dosing:</strong><br>
                        • Hormone therapy: 50-200 ng/mL<br>
                        • Vitamin B12: 200-900 ng/mL<br>
                        • Folic acid: 2-20 ng/mL<br>
                        • Thyroid hormones: 0.8-2.8 ng/dL
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Laboratory Analysis:</strong><br>
                        • DNA concentration: 10-100 ng/μL<br>
                        • Protein assays: 1-1000 ng/mL<br>
                        • Environmental toxins: 1-100 ng/L<br>
                        • Food additives: 10-500 ng/g
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Biological Samples:</strong><br>
                        • Cell culture: 1-50 ng/mL<br>
                        • Blood plasma: 0.1-10 ng/mL<br>
                        • Tissue samples: 100-10,000 ng/g<br>
                        • Urine analysis: 1-1,000 ng/mL
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Mass Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanogram:</strong> 10⁻⁹ gram</li>
                    <li><strong>Milligram:</strong> 10⁻³ gram</li>
                    <li><strong>Conversion:</strong> 1 mg = 1,000,000 ng</li>
                    <li><strong>Precision:</strong> Extremely small masses</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Essential for drug testing</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Used in hormone analysis</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Critical for research</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Standard in clinical labs</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medicine:</strong> Drug concentrations</li>
                    <li><strong>Research:</strong> Molecular biology</li>
                    <li><strong>Diagnostics:</strong> Blood tests</li>
                    <li><strong>Toxicology:</strong> Trace analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNanogramToMilligram(nanograms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanograms) && nanograms !== '') {
        const milligrams = nanograms / 1000000;
        document.getElementById('milligramInput').value = milligrams.toFixed(12);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${nanograms} ng = ${milligrams.toFixed(9)} mg</strong>
        `;
    } else {
        document.getElementById('milligramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMilligramToNanogram(milligrams) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milligrams) && milligrams !== '') {
        const nanograms = milligrams * 1000000;
        document.getElementById('nanogramInput').value = nanograms.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${milligrams} mg = ${nanograms.toFixed(0)} ng</strong>
        `;
    } else {
        document.getElementById('nanogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('nanogramInput').value = '';
    document.getElementById('milligramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ngValue = document.getElementById('nanogramInput').value;
    const mgValue = document.getElementById('milligramInput').value;
    
    document.getElementById('nanogramInput').value = mgValue;
    document.getElementById('milligramInput').value = ngValue;
    
    if (mgValue) {
        convertNanogramToMilligram(parseFloat(mgValue));
    } else if (ngValue) {
        convertMilligramToNanogram(parseFloat(ngValue));
    }
}

// Add event listeners
document.getElementById('nanogramInput').addEventListener('input', function() {
    convertNanogramToMilligram(parseFloat(this.value));
});

document.getElementById('milligramInput').addEventListener('input', function() {
    convertMilligramToNanogram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
