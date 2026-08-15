<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liters to Pints Converter 2026 - L to pt Calculator | Thiyagi</title>
<meta name="description" content="Free online Liters to Pints converter 2026. Convert liters to pints and pints to liters instantly with accurate volume measurement conversion.">
<meta name="keywords" content="liters to pints converter 2026, L to pt, volume conversion, liquid measurement, cooking converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liters to Pints Converter 2026 - L to pt Calculator">
<meta property="og:description" content="Free online Liters to Pints converter 2026. Convert liters to pints and pints to liters instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liters-to-pints.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liters to Pints Converter 2026 - L to pt Calculator">
<meta property="twitter:description" content="Free online Liters to Pints converter 2026. Convert liters to pints and pints to liters instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-beer text-emerald-600 mr-3"></i>
                Liters to Pints Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between liters (L) and pints (pt) for cooking, brewing, and liquid volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-emerald-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter liters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L = 2.113 US pints
                    </div>
                </div>

                <!-- Pint Input -->
                <div class="space-y-4">
                    <label for="pintInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-glass-whiskey text-green-600 mr-2"></i>US Pints (pt)
                    </label>
                    <input
                        type="number"
                        id="pintInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter US pints"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 US pint = 0.473 L
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
            <!-- Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Liters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">US Pints</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.06 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.11 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.23 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6.34 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8.45 pt</td>
                            </tr>
                            <tr>
                                <td class="py-2">5 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.57 pt</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Beverage Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cocktail text-emerald-600 mr-3"></i>Beverage Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Beverages & Drinks:</strong><br>
                        • Beer bottle: 0.355 L (0.75 pt)<br>
                        • Wine bottle: 0.75 L (1.58 pt)<br>
                        • Soda bottle: 0.5 L (1.06 pt)<br>
                        • Milk carton: 1 L (2.11 pt)
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Cooking Measurements:</strong><br>
                        • Recipe portions: 0.25-2 L<br>
                        • Soup serving: 0.25 L (0.53 pt)<br>
                        • Smoothie: 0.5 L (1.06 pt)<br>
                        • Punch bowl: 4-8 L (8-17 pt)
                    </div>
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Brewing & Distilling:</strong><br>
                        • Homebrew batch: 19-23 L (40-49 pt)<br>
                        • Commercial keg: 58.7 L (124 pt)<br>
                        • Wine fermentation: 4-20 L<br>
                        • Spirits bottle: 0.7-1 L (1.5-2.1 pt)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Liter:</strong> SI volume unit</li>
                    <li><strong>US Pint:</strong> 16 fluid ounces</li>
                    <li><strong>Conversion:</strong> 1 L = 2.11338 pt</li>
                    <li><strong>UK Pint:</strong> 20 fl oz (different)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>US vs UK pints differ</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Metric vs imperial</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Brewing calculations</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Recipe conversions</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                    <li><strong>Brewing:</strong> Beer and wine making</li>
                    <li><strong>Retail:</strong> Beverage packaging</li>
                    <li><strong>Science:</strong> Laboratory work</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertLiterToPint(liter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liter) && liter !== '') {
        // 1 liter = 2.11338 US pints
        const pint = liter * 2.11338;
        document.getElementById('pintInput').value = pint.toFixed(4);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${liter} L = ${pint.toFixed(2)} US pints</strong>
        `;
    } else {
        document.getElementById('pintInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPintToLiter(pint) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pint) && pint !== '') {
        // 1 US pint = 0.473176 liters
        const liter = pint * 0.473176;
        document.getElementById('literInput').value = liter.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${pint} US pints = ${liter.toFixed(3)} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('pintInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const pintValue = document.getElementById('pintInput').value;
    
    document.getElementById('literInput').value = pintValue;
    document.getElementById('pintInput').value = literValue;
    
    if (pintValue) {
        convertLiterToPint(parseFloat(pintValue));
    } else if (literValue) {
        convertPintToLiter(parseFloat(literValue));
    }
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', function() {
    convertLiterToPint(parseFloat(this.value));
});

document.getElementById('pintInput').addEventListener('input', function() {
    convertPintToLiter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
