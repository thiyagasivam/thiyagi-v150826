<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>CC to Cup US Converter 2026 - cubic centimeter to cup Calculator | Thiyagi</title>
<meta name="description" content="Free online CC to Cup US converter 2026. Convert cubic centimeter to US cup and cup to cc instantly with accurate cooking measurement conversion.">
<meta name="keywords" content="cc to cup converter 2026, cubic centimeter to cup us, cc to cup, cooking conversion, recipe measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="CC to Cup US Converter 2026 - cubic centimeter to cup Calculator">
<meta property="og:description" content="Free online CC to Cup US converter 2026. Convert cubic centimeter to US cup and cup to cc instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cc-to-cup-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CC to Cup US Converter 2026 - cubic centimeter to cup Calculator">
<meta property="twitter:description" content="Free online CC to Cup US converter 2026. Convert cubic centimeter to US cup and cup to cc instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-coffee text-orange-600 mr-3"></i>
                CC to Cup US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic centimeters (cc) and US cups for cooking, baking, and recipe measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="ccInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-orange-600 mr-2"></i>Cubic Centimeters (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        236.6 cc = 1 US cup
                    </div>
                </div>

                <!-- Cup US Input -->
                <div class="space-y-4">
                    <label for="cupInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wine-glass text-amber-600 mr-2"></i>US Cups (cup)
                    </label>
                    <input
                        type="number"
                        id="cupInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter US cups"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 US cup = 236.6 cc
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Cooking Measurements -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>Cooking Measurements
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Centimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">US Cups</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">59 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1/4 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">118 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1/2 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">177 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3/4 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">237 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">473 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 cups</td>
                            </tr>
                            <tr>
                                <td class="py-2">946 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4 cups</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recipe Equivalents -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-orange-600 mr-3"></i>Recipe Equivalents
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Baking Basics:</strong><br>
                        • Flour (1 cup): 120-140 cc<br>
                        • Sugar (1 cup): 200 cc<br>
                        • Butter (1 cup): 227 cc<br>
                        • Brown sugar (1 cup): 213 cc
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Liquid Measurements:</strong><br>
                        • Water (1 cup): 237 cc<br>
                        • Milk (1 cup): 244 cc<br>
                        • Oil (1 cup): 218 cc<br>
                        • Honey (1 cup): 340 cc
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Common Kitchen Tools:</strong><br>
                        • Tablespoon: 15 cc (1/16 cup)<br>
                        • Teaspoon: 5 cc (1/48 cup)<br>
                        • Shot glass: 30 cc (1/8 cup)<br>
                        • Coffee mug: 240 cc (1 cup)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>CC:</strong> Cubic centimeter</li>
                    <li><strong>US Cup:</strong> Standard cooking unit</li>
                    <li><strong>Conversion:</strong> 1 cup = 236.588 cc</li>
                    <li><strong>Also equals:</strong> 8 fluid ounces</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>US vs metric cups differ</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Precision for baking</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Recipe conversions</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Measuring liquid ingredients</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                    <li><strong>Baking:</strong> Precise quantities</li>
                    <li><strong>Nutrition:</strong> Portion control</li>
                    <li><strong>Medicine:</strong> Liquid doses</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCcToCup(cc) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cc) && cc !== '') {
        // 1 US cup = 236.588 cubic centimeters
        const cup = cc / 236.588;
        document.getElementById('cupInput').value = cup.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${cc.toLocaleString()} cc = ${cup.toFixed(3)} US cups</strong>
        `;
    } else {
        document.getElementById('cupInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCupToCc(cup) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cup) && cup !== '') {
        // 1 US cup = 236.588 cubic centimeters
        const cc = cup * 236.588;
        document.getElementById('ccInput').value = cc.toFixed(1);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${cup} US cups = ${cc.toFixed(1)} cc</strong>
        `;
    } else {
        document.getElementById('ccInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('cupInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const cupValue = document.getElementById('cupInput').value;
    
    document.getElementById('ccInput').value = cupValue;
    document.getElementById('cupInput').value = ccValue;
    
    if (cupValue) {
        convertCcToCup(parseFloat(cupValue));
    } else if (ccValue) {
        convertCupToCc(parseFloat(ccValue));
    }
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', function() {
    convertCcToCup(parseFloat(this.value));
});

document.getElementById('cupInput').addEventListener('input', function() {
    convertCupToCc(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
