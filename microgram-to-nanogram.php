<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Microgram to Nanogram Converter 2026 - μg to ng Calculator | Thiyagi</title>
<meta name="description" content="Free online Microgram to Nanogram converter 2026. Convert μg to ng and ng to μg instantly with accurate mass conversion.">
<meta name="keywords" content="microgram to nanogram converter 2026, μg to ng, mass conversion, micro measurements calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Microgram to Nanogram Converter 2026 - μg to ng Calculator">
<meta property="og:description" content="Free online Microgram to Nanogram converter 2026. Convert μg to ng and ng to μg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/microgram-to-nanogram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Microgram to Nanogram Converter 2026 - μg to ng Calculator">
<meta property="twitter:description" content="Free online Microgram to Nanogram converter 2026. Convert μg to ng and ng to μg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-emerald-600 mr-3"></i>
                Microgram to Nanogram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between micrograms (μg) and nanograms (ng) for laboratory research, pharmaceutical dosing, environmental analysis, and precise measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microgram Input -->
                <div class="space-y-4">
                    <label for="microgramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-emerald-600 mr-2"></i>Micrograms (μg)
                    </label>
                    <input
                        type="number"
                        id="microgramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter micrograms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Millionth of a gram (10⁻⁶ g)
                    </div>
                </div>

                <!-- Nanogram Input -->
                <div class="space-y-4">
                    <label for="nanogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-teal-600 mr-2"></i>Nanograms (ng)
                    </label>
                    <input
                        type="number"
                        id="nanogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter nanograms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Billionth of a gram (10⁻⁹ g)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg">
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
            <!-- Mass Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Mass Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Micrograms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanograms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,000 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">25,000 ng</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 ng</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 μg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 ng</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Laboratory Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-emerald-600 mr-3"></i>Laboratory Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Pharmaceutical Analysis:</strong><br>
                        • Drug concentrations: 1-100 μg/mL<br>
                        • Bioavailability studies: 10-1,000 ng/mL<br>
                        • Therapeutic monitoring: 50-500 ng/mL<br>
                        • Toxicology testing: 1-10 μg/L
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Environmental Testing:</strong><br>
                        • Water contaminants: 1-100 ng/L<br>
                        • Air pollutants: 10-1,000 ng/m³<br>
                        • Soil analysis: 5-50 μg/kg<br>
                        • Food residues: 1-10 μg/kg
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Biochemical Research:</strong><br>
                        • Protein concentrations: 1-100 μg/mL<br>
                        • DNA/RNA analysis: 10-1,000 ng/μL<br>
                        • Enzyme assays: 5-50 ng/mL<br>
                        • Cell culture: 1-10 μg/well
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-emerald-600 mr-2"></i>Mass Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>μg:</strong> 10⁻⁶ grams (microgram)</li>
                    <li><strong>ng:</strong> 10⁻⁹ grams (nanogram)</li>
                    <li><strong>Conversion:</strong> 1 μg = 1,000 ng</li>
                    <li><strong>Precision:</strong> Ultra-small masses</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>μg for drug dosing</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>ng for trace analysis</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Check measurement precision</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Use analytical balances</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-vial text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medical:</strong> Drug concentrations</li>
                    <li><strong>Research:</strong> Biochemical analysis</li>
                    <li><strong>Environmental:</strong> Pollution monitoring</li>
                    <li><strong>Quality:</strong> Product testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrogramToNanogram(microgram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(microgram) && microgram !== '') {
        // 1 microgram = 1,000 nanograms
        const nanogram = microgram * 1000;
        document.getElementById('nanogramInput').value = nanogram.toFixed(6);
        
        // Format large numbers with commas
        const formattedNanogram = nanogram.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${microgram} μg = ${formattedNanogram} ng</strong>
        `;
    } else {
        document.getElementById('nanogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNanogramToMicrogram(nanogram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanogram) && nanogram !== '') {
        // 1 nanogram = 0.001 microgram
        const microgram = nanogram / 1000;
        document.getElementById('microgramInput').value = microgram.toFixed(9);
        
        // Format large numbers with commas
        const formattedNanogram = nanogram.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${formattedNanogram} ng = ${microgram.toFixed(6)} μg</strong>
        `;
    } else {
        document.getElementById('microgramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('microgramInput').value = '';
    document.getElementById('nanogramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const microgramValue = document.getElementById('microgramInput').value;
    const nanogramValue = document.getElementById('nanogramInput').value;
    
    document.getElementById('microgramInput').value = nanogramValue;
    document.getElementById('nanogramInput').value = microgramValue;
    
    if (nanogramValue) {
        convertMicrogramToNanogram(parseFloat(nanogramValue));
    } else if (microgramValue) {
        convertNanogramToMicrogram(parseFloat(microgramValue));
    }
}

// Add event listeners
document.getElementById('microgramInput').addEventListener('input', function() {
    convertMicrogramToNanogram(parseFloat(this.value));
});

document.getElementById('nanogramInput').addEventListener('input', function() {
    convertNanogramToMicrogram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
