<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gram to Pennyweight Converter 2026 - g to dwt Calculator | Thiyagi</title>
<meta name="description" content="Free online gram to pennyweight converter 2026. Convert g to dwt and dwt to g instantly with accurate weight conversion for precious metals.">
<meta name="keywords" content="gram to pennyweight converter 2026, g to dwt, precious metals weight, jewelry measurement, troy weight system">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gram to Pennyweight Converter 2026 - g to dwt Calculator">
<meta property="og:description" content="Free online gram to pennyweight converter 2026. Convert g to dwt and dwt to g instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gram-to-pennyweight.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gram to Pennyweight Converter 2026 - g to dwt Calculator">
<meta name="twitter:description" content="Free online gram to pennyweight converter 2026. Convert g to dwt and dwt to g instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-gem text-yellow-600 mr-3"></i>
                Gram to Pennyweight Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between grams and pennyweights for precious metals and jewelry measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gram Input -->
                <div class="space-y-4">
                    <label for="gramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-yellow-600 mr-2"></i>Gram (g)
                    </label>
                    <input
                        type="number"
                        id="gramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter grams"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 g = 0.643015 dwt
                    </div>
                </div>

                <!-- Pennyweight Input -->
                <div class="space-y-4">
                    <label for="pennyweightInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-coins text-amber-600 mr-2"></i>Pennyweight (dwt)
                    </label>
                    <input
                        type="number"
                        id="pennyweightInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter pennyweights"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 dwt = 1.55517 g
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Precious Metals Weights -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Precious Metals Weights
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Item</th>
                                <th class="text-center py-2">Grams</th>
                                <th class="text-right py-2">Pennyweights</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Small gold ring</td>
                                <td class="text-center">2-3</td>
                                <td class="text-right">1.3-1.9</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Gold wedding band</td>
                                <td class="text-center">4-6</td>
                                <td class="text-right">2.6-3.9</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Silver coin (US dime)</td>
                                <td class="text-center">2.5</td>
                                <td class="text-right">1.6</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Gold necklace</td>
                                <td class="text-center">10-20</td>
                                <td class="text-right">6.4-12.9</td>
                            </tr>
                            <tr>
                                <td class="py-2">1 oz gold bar</td>
                                <td class="text-center">31.1</td>
                                <td class="text-right">20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Jewelry Industry Usage -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-ring text-yellow-600 mr-3"></i>Jewelry Industry Usage
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Precious Metals Trading:</strong><br>
                        • Gold buying and selling<br>
                        • Silver jewelry pricing<br>
                        • Platinum measurements<br>
                        • Scrap metal evaluation
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Jewelry Manufacturing:</strong><br>
                        • Alloy calculations<br>
                        • Material cost estimation<br>
                        • Quality control weighing<br>
                        • Custom piece design
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Appraisal & Valuation:</strong><br>
                        • Insurance assessments<br>
                        • Estate valuations<br>
                        • Antique jewelry analysis<br>
                        • Purity testing results
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-yellow-600 mr-2"></i>Unit Definitions
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Gram:</strong> Metric unit of mass</li>
                    <li><strong>Pennyweight:</strong> Troy weight unit</li>
                    <li><strong>Conversion:</strong> 1 dwt = 1.55517 g</li>
                    <li><strong>Troy System:</strong> 20 dwt = 1 troy ounce</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Use precision scales for accuracy</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Pennyweight common in US jewelry</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Grams used internationally</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Consider market standards</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Global Standards
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US/UK:</strong> Pennyweight traditional</li>
                    <li><strong>International:</strong> Grams standard</li>
                    <li><strong>Jewelry:</strong> Both systems used</li>
                    <li><strong>Precious Metals:</strong> Context-dependent</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGramToPennyweight(grams) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(grams) && grams !== '') {
        const pennyweights = grams * 0.643015;
        document.getElementById('pennyweightInput').value = pennyweights.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${grams} g = ${pennyweights.toFixed(6)} dwt</strong>
        `;
    } else {
        document.getElementById('pennyweightInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPennyweightToGram(pennyweights) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pennyweights) && pennyweights !== '') {
        const grams = pennyweights * 1.55517;
        document.getElementById('gramInput').value = grams.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${pennyweights} dwt = ${grams.toFixed(6)} g</strong>
        `;
    } else {
        document.getElementById('gramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gramInput').value = '';
    document.getElementById('pennyweightInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const gramValue = document.getElementById('gramInput').value;
    const pennyweightValue = document.getElementById('pennyweightInput').value;
    
    document.getElementById('gramInput').value = pennyweightValue;
    document.getElementById('pennyweightInput').value = gramValue;
    
    if (pennyweightValue) {
        convertGramToPennyweight(parseFloat(pennyweightValue));
    } else if (gramValue) {
        convertPennyweightToGram(parseFloat(gramValue));
    }
}

// Add event listeners
document.getElementById('gramInput').addEventListener('input', function() {
    convertGramToPennyweight(parseFloat(this.value));
});

document.getElementById('pennyweightInput').addEventListener('input', function() {
    convertPennyweightToGram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
