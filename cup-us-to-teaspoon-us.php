<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cup US to Teaspoon US Converter 2026 - cup to tsp Calculator | Thiyagi</title>
<meta name="description" content="Free online Cup US to Teaspoon US converter 2026. Convert cup to tsp and tsp to cup instantly with accurate cooking measurement conversion.">
<meta name="keywords" content="cup to teaspoon converter 2026, cup to tsp US, cooking measurements, baking converter, kitchen units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cup US to Teaspoon US Converter 2026 - cup to tsp Calculator">
<meta property="og:description" content="Free online Cup US to Teaspoon US converter 2026. Convert cup to tsp and tsp to cup instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cup-us-to-teaspoon-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cup US to Teaspoon US Converter 2026 - cup to tsp Calculator">
<meta name="twitter:description" content="Free online Cup US to Teaspoon US converter 2026. Convert cup to tsp and tsp to cup instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-utensils text-pink-600 mr-3"></i>
                Cup US to Teaspoon US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US cups and US teaspoons for perfect cooking measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cup Input -->
                <div class="space-y-4">
                    <label for="cupInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-mug-hot text-pink-600 mr-2"></i>US Cup (cup)
                    </label>
                    <input
                        type="number"
                        id="cupInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter cups"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 cup = 48 tsp
                    </div>
                </div>

                <!-- Teaspoon Input -->
                <div class="space-y-4">
                    <label for="teaspoonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-coffee text-rose-600 mr-2"></i>US Teaspoon (tsp)
                    </label>
                    <input
                        type="number"
                        id="teaspoonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-xl"
                        placeholder="Enter teaspoons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 tsp = 0.0208333 cup
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
            <!-- Common Cooking Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-pink-600 mr-3"></i>Common Cooking Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cups</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Teaspoons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1/8 (0.125)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/4 (0.25)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">12</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/3 (0.333)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">16</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/2 (0.5)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">24</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3/4 (0.75)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">36</td>
                            </tr>
                            <tr>
                                <td class="py-2">1</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">48</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recipe Measurement Guide -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-book-open text-pink-600 mr-3"></i>Recipe Measurement Guide
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Baking Spices:</strong><br>
                        • 1 tsp vanilla = 1/48 cup<br>
                        • 1 tsp baking powder = 1/48 cup<br>
                        • 1 tsp salt = 1/48 cup<br>
                        • 1 tsp cinnamon = 1/48 cup
                    </div>
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Liquid Ingredients:</strong><br>
                        • 1/4 cup oil = 12 tsp<br>
                        • 1/3 cup milk = 16 tsp<br>
                        • 1/2 cup water = 24 tsp<br>
                        • 1 cup broth = 48 tsp
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Cooking Tips:</strong><br>
                        • 3 tsp = 1 tablespoon<br>
                        • 16 tbsp = 1 cup<br>
                        • Level teaspoons for accuracy<br>
                        • Use proper measuring spoons
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-pink-600 mr-2"></i>US Measurement System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cup:</strong> 8 fluid ounces</li>
                    <li><strong>Teaspoon:</strong> 1/6 fluid ounce</li>
                    <li><strong>Conversion:</strong> 1 cup = 48 teaspoons</li>
                    <li><strong>Standard:</strong> US customary units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-pink-600 mr-2"></i>Kitchen Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Use dry measuring cups for solids</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Use liquid measuring cups for liquids</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Level off dry ingredients</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Measure at eye level</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-pink-600 mr-2"></i>Cooking Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Baking:</strong> Precise ingredient ratios</li>
                    <li><strong>Cooking:</strong> Seasoning and flavoring</li>
                    <li><strong>Beverages:</strong> Coffee and tea preparation</li>
                    <li><strong>Medicine:</strong> Liquid dosage measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCupToTeaspoon(cups) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cups) && cups !== '') {
        const teaspoons = cups * 48;
        document.getElementById('teaspoonInput').value = teaspoons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${cups} cup = ${teaspoons.toFixed(6)} tsp</strong>
        `;
    } else {
        document.getElementById('teaspoonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertTeaspoonToCup(teaspoons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(teaspoons) && teaspoons !== '') {
        const cups = teaspoons / 48;
        document.getElementById('cupInput').value = cups.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-pink-600 mr-2"></i>
            <strong>${teaspoons} tsp = ${cups.toFixed(8)} cup</strong>
        `;
    } else {
        document.getElementById('cupInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('cupInput').value = '';
    document.getElementById('teaspoonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cupValue = document.getElementById('cupInput').value;
    const teaspoonValue = document.getElementById('teaspoonInput').value;
    
    document.getElementById('cupInput').value = teaspoonValue;
    document.getElementById('teaspoonInput').value = cupValue;
    
    if (teaspoonValue) {
        convertCupToTeaspoon(parseFloat(teaspoonValue));
    } else if (cupValue) {
        convertTeaspoonToCup(parseFloat(cupValue));
    }
}

// Add event listeners
document.getElementById('cupInput').addEventListener('input', function() {
    convertCupToTeaspoon(parseFloat(this.value));
});

document.getElementById('teaspoonInput').addEventListener('input', function() {
    convertTeaspoonToCup(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
