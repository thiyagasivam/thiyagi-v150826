<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milliliter to Teaspoon Metric Converter 2026 - mL to tsp Calculator | Thiyagi</title>
<meta name="description" content="Free online Milliliter to Teaspoon Metric converter 2026. Convert mL to tsp metric and tsp to mL instantly with accurate cooking measurement conversion.">
<meta name="keywords" content="milliliter to teaspoon metric converter 2026, mL to tsp, cooking conversion, metric teaspoon, recipe measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milliliter to Teaspoon Metric Converter 2026 - mL to tsp Calculator">
<meta property="og:description" content="Free online Milliliter to Teaspoon Metric converter 2026. Convert mL to tsp metric and tsp to mL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milliliter-to-teaspoon-metric.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milliliter to Teaspoon Metric Converter 2026 - mL to tsp Calculator">
<meta property="twitter:description" content="Free online Milliliter to Teaspoon Metric converter 2026. Convert mL to tsp metric and tsp to mL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tint text-pink-600 mr-3"></i>
                Milliliter to Teaspoon Metric Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milliliters (mL) and metric teaspoons for precise cooking, baking, and recipe measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliter Input -->
                <div class="space-y-4">
                    <label for="milliliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-pink-600 mr-2"></i>Milliliters (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter milliliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        5 mL = 1 metric teaspoon
                    </div>
                </div>

                <!-- Teaspoon Metric Input -->
                <div class="space-y-4">
                    <label for="teaspoonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-utensil-spoon text-rose-600 mr-2"></i>Metric Teaspoons (tsp)
                    </label>
                    <input
                        type="number"
                        id="teaspoonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter metric teaspoons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 metric tsp = 5 mL
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
            <!-- Kitchen Measurements -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-pink-600 mr-3"></i>Kitchen Measurements
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milliliters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Metric Teaspoons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.2 tsp</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.5 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 tsp</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 tsp</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 tsp</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">15 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3 tsp</td>
                            </tr>
                            <tr>
                                <td class="py-2">25 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 tsp</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cooking Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-pink-600 mr-3"></i>Cooking Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Spices & Seasonings:</strong><br>
                        • Salt: 1 tsp = 5 mL<br>
                        • Vanilla extract: 1 tsp = 5 mL<br>
                        • Baking powder: 1 tsp = 5 mL<br>
                        • Ground spices: 1 tsp = 5 mL
                    </div>
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Liquid Ingredients:</strong><br>
                        • Lemon juice: 1 tsp = 5 mL<br>
                        • Olive oil: 1 tsp = 5 mL<br>
                        • Honey: 1 tsp = 5 mL<br>
                        • Vinegar: 1 tsp = 5 mL
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Recipe Conversions:</strong><br>
                        • 1 tablespoon = 3 tsp = 15 mL<br>
                        • 1/4 cup = 12 tsp = 60 mL<br>
                        • 1/2 cup = 24 tsp = 120 mL<br>
                        • 1 cup = 48 tsp = 240 mL
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-pink-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>mL:</strong> Milliliter (metric)</li>
                    <li><strong>Metric tsp:</strong> 5 mL exactly</li>
                    <li><strong>US tsp:</strong> 4.93 mL (differs)</li>
                    <li><strong>Imperial tsp:</strong> 5.92 mL (differs)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Metric is more precise</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>International recipes</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Scientific cooking</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Pharmaceutical dosing</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-pink-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe precision</li>
                    <li><strong>Baking:</strong> Exact measurements</li>
                    <li><strong>Medicine:</strong> Liquid doses</li>
                    <li><strong>Chemistry:</strong> Laboratory work</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMilliliterToTeaspoon(milliliter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milliliter) && milliliter !== '') {
        // 1 metric teaspoon = 5 milliliters
        const teaspoon = milliliter / 5;
        document.getElementById('teaspoonInput').value = teaspoon;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${milliliter} mL = ${teaspoon.toLocaleString(undefined, {maximumFractionDigits: 3})} metric tsp</strong>
        `;
    } else {
        document.getElementById('teaspoonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertTeaspoonToMilliliter(teaspoon) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(teaspoon) && teaspoon !== '') {
        // 1 metric teaspoon = 5 milliliters
        const milliliter = teaspoon * 5;
        document.getElementById('milliliterInput').value = milliliter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${teaspoon} metric tsp = ${milliliter.toLocaleString()} mL</strong>
        `;
    } else {
        document.getElementById('milliliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milliliterInput').value = '';
    document.getElementById('teaspoonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const milliliterValue = document.getElementById('milliliterInput').value;
    const teaspoonValue = document.getElementById('teaspoonInput').value;
    
    document.getElementById('milliliterInput').value = teaspoonValue;
    document.getElementById('teaspoonInput').value = milliliterValue;
    
    if (teaspoonValue) {
        convertMilliliterToTeaspoon(parseFloat(teaspoonValue));
    } else if (milliliterValue) {
        convertTeaspoonToMilliliter(parseFloat(milliliterValue));
    }
}

// Add event listeners
document.getElementById('milliliterInput').addEventListener('input', function() {
    convertMilliliterToTeaspoon(parseFloat(this.value));
});

document.getElementById('teaspoonInput').addEventListener('input', function() {
    convertTeaspoonToMilliliter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
