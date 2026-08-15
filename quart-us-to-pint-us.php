<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Quart US to Pint US Converter 2026 - qt to pt Calculator | Thiyagi</title>
<meta name="description" content="Free online Quart US to Pint US converter 2026. Convert qt to pt and pt to qt instantly with accurate volume conversion.">
<meta name="keywords" content="quart US to pint US converter 2026, qt to pt, volume conversion, cooking measurements, liquid units calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Quart US to Pint US Converter 2026 - qt to pt Calculator">
<meta property="og:description" content="Free online Quart US to Pint US converter 2026. Convert qt to pt and pt to qt instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/quart-us-to-pint-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Quart US to Pint US Converter 2026 - qt to pt Calculator">
<meta property="twitter:description" content="Free online Quart US to Pint US converter 2026. Convert qt to pt and pt to qt instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-yellow-600 mr-3"></i>
                Quart US to Pint US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US quarts (qt) and US pints (pt) for cooking, baking, beverage measurements, and liquid volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Quart US Input -->
                <div class="space-y-4">
                    <label for="quartUsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-bottle-water text-yellow-600 mr-2"></i>Quarts US (qt)
                    </label>
                    <input
                        type="number"
                        id="quartUsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter US quarts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Large volume measurements
                    </div>
                </div>

                <!-- Pint US Input -->
                <div class="space-y-4">
                    <label for="pintUsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wine-glass text-amber-600 mr-2"></i>Pints US (pt)
                    </label>
                    <input
                        type="number"
                        id="pintUsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter US pints"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Medium volume measurements
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
            <!-- Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Quarts US</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pints US</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.5 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4 pt</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8 pt</td>
                            </tr>
                            <tr>
                                <td class="py-2">5 qt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 pt</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cooking Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-yellow-600 mr-3"></i>Cooking Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Recipe Scaling:</strong><br>
                        • Small batch: 1-2 qt (2-4 pt)<br>
                        • Family size: 2-4 qt (4-8 pt)<br>
                        • Party serving: 4-8 qt (8-16 pt)<br>
                        • Commercial: 8+ qt (16+ pt)
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Common Ingredients:</strong><br>
                        • Soup stock: 2-4 qt (4-8 pt)<br>
                        • Milk/cream: 1-2 pt (0.5-1 qt)<br>
                        • Fruit juice: 1-4 pt (0.5-2 qt)<br>
                        • Sauce base: 2-8 pt (1-4 qt)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Beverage Service:</strong><br>
                        • Beer pitcher: 2 pt (1 qt)<br>
                        • Juice container: 2-4 pt (1-2 qt)<br>
                        • Party punch: 8-16 pt (4-8 qt)<br>
                        • Coffee service: 4-8 pt (2-4 qt)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-yellow-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>qt:</strong> US liquid quart</li>
                    <li><strong>pt:</strong> US liquid pint</li>
                    <li><strong>Conversion:</strong> 1 qt = 2 pt</li>
                    <li><strong>Also:</strong> 1 qt = 32 fl oz</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>qt for large volumes</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>pt for medium portions</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Easy 2:1 ratio</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Common in US recipes</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe scaling</li>
                    <li><strong>Baking:</strong> Liquid ingredients</li>
                    <li><strong>Beverages:</strong> Service planning</li>
                    <li><strong>Food Service:</strong> Portion control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertQuartUsToPintUs(quartUs) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(quartUs) && quartUs !== '') {
        // 1 qt = 2 pt
        const pintUs = quartUs * 2;
        document.getElementById('pintUsInput').value = pintUs;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${quartUs} qt = ${pintUs} pt</strong>
        `;
    } else {
        document.getElementById('pintUsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPintUsToQuartUs(pintUs) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pintUs) && pintUs !== '') {
        // 1 pt = 0.5 qt
        const quartUs = pintUs / 2;
        document.getElementById('quartUsInput').value = quartUs;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${pintUs} pt = ${quartUs} qt</strong>
        `;
    } else {
        document.getElementById('quartUsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('quartUsInput').value = '';
    document.getElementById('pintUsInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const quartUsValue = document.getElementById('quartUsInput').value;
    const pintUsValue = document.getElementById('pintUsInput').value;
    
    document.getElementById('quartUsInput').value = pintUsValue;
    document.getElementById('pintUsInput').value = quartUsValue;
    
    if (pintUsValue) {
        convertQuartUsToPintUs(parseFloat(pintUsValue));
    } else if (quartUsValue) {
        convertPintUsToQuartUs(parseFloat(quartUsValue));
    }
}

// Add event listeners
document.getElementById('quartUsInput').addEventListener('input', function() {
    convertQuartUsToPintUs(parseFloat(this.value));
});

document.getElementById('pintUsInput').addEventListener('input', function() {
    convertPintUsToQuartUs(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
