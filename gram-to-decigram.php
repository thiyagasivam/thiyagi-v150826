<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gram to Decigram Converter 2026 - g to dg Calculator | Thiyagi</title>
<meta name="description" content="Free online Gram to Decigram converter 2026. Convert g to dg and dg to g instantly with accurate metric weight conversion.">
<meta name="keywords" content="gram to decigram converter 2026, g to dg, metric weight, mass converter, cooking measurements, laboratory scale">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gram to Decigram Converter 2026 - g to dg Calculator">
<meta property="og:description" content="Free online Gram to Decigram converter 2026. Convert g to dg and dg to g instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gram-to-decigram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gram to Decigram Converter 2026 - g to dg Calculator">
<meta property="twitter:description" content="Free online Gram to Decigram converter 2026. Convert g to dg and dg to g instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-lime-50 via-green-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale-right text-lime-600 mr-3"></i>
                Gram to Decigram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between grams and decigrams for cooking, laboratory work, and precision measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gram Input -->
                <div class="space-y-4">
                    <label for="gramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-lime-600 mr-2"></i>Grams (g)
                    </label>
                    <input
                        type="number"
                        id="gramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter grams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 g = 10 dg
                    </div>
                </div>

                <!-- Decigram Input -->
                <div class="space-y-4">
                    <label for="decigramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-feather-alt text-green-600 mr-2"></i>Decigrams (dg)
                    </label>
                    <input
                        type="number"
                        id="decigramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter decigrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 dg = 0.1 g
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-lime-50 to-green-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-lime-500 hover:bg-lime-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Metric Weight Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-lime-600 mr-3"></i>Metric Weight Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Grams</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Decigrams</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 dg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 dg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 dg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.5 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">25 dg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 dg</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 g</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 dg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-lime-600 mr-3"></i>Practical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Cooking & Baking:</strong><br>
                        • Salt pinch: 3 dg (0.3 g)<br>
                        • Baking powder: 5-10 dg (0.5-1 g)<br>
                        • Vanilla extract: 50 dg (5 g)<br>
                        • Spice measurements: 1-20 dg
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Laboratory Use:</strong><br>
                        • Chemical samples: 1-100 dg<br>
                        • Analytical balance: 0.1 dg precision<br>
                        • Reagent portions: 5-50 dg<br>
                        • Quality control: dg measurements
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Educational Examples:</strong><br>
                        • Paperclip: 10 dg (1 g)<br>
                        • Coin (penny): 25 dg (2.5 g)<br>
                        • Sugar cube: 40 dg (4 g)<br>
                        • Aspirin tablet: 5 dg (0.5 g)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-lime-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Gram:</strong> Base metric mass unit</li>
                    <li><strong>Decigram:</strong> 1/10 of a gram</li>
                    <li><strong>Conversion:</strong> 1 g = 10 dg</li>
                    <li><strong>Symbol:</strong> g and dg</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-lime-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>dg for precise recipes</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>g for general use</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Simple 10:1 ratio</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Laboratory standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-lime-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Culinary:</strong> Recipe precision</li>
                    <li><strong>Laboratory:</strong> Sample measurement</li>
                    <li><strong>Pharmacy:</strong> Drug formulation</li>
                    <li><strong>Education:</strong> Metric system</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGramToDecigram(gram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gram) && gram !== '') {
        // 1 g = 10 dg
        const decigram = gram * 10;
        document.getElementById('decigramInput').value = decigram;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${gram} g = ${decigram} dg</strong>
        `;
    } else {
        document.getElementById('decigramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertDecigramToGram(decigram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(decigram) && decigram !== '') {
        // 1 dg = 0.1 g
        const gram = decigram / 10;
        document.getElementById('gramInput').value = gram;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${decigram} dg = ${gram} g</strong>
        `;
    } else {
        document.getElementById('gramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gramInput').value = '';
    document.getElementById('decigramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const gramValue = document.getElementById('gramInput').value;
    const decigramValue = document.getElementById('decigramInput').value;
    
    document.getElementById('gramInput').value = decigramValue;
    document.getElementById('decigramInput').value = gramValue;
    
    if (decigramValue) {
        convertGramToDecigram(parseFloat(decigramValue));
    } else if (gramValue) {
        convertDecigramToGram(parseFloat(gramValue));
    }
}

// Add event listeners
document.getElementById('gramInput').addEventListener('input', function() {
    convertGramToDecigram(parseFloat(this.value));
});

document.getElementById('decigramInput').addEventListener('input', function() {
    convertDecigramToGram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
