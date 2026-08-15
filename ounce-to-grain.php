<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ounce to Grain Converter 2026 - oz to gr Calculator | Thiyagi</title>
<meta name="description" content="Free online Ounce to Grain converter 2026. Convert oz to gr and gr to oz instantly with accurate weight conversion.">
<meta name="keywords" content="ounce to grain converter 2026, oz to gr, weight conversion, imperial units, precious metals calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ounce to Grain Converter 2026 - oz to gr Calculator">
<meta property="og:description" content="Free online Ounce to Grain converter 2026. Convert oz to gr and gr to oz instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ounce-to-grain.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ounce to Grain Converter 2026 - oz to gr Calculator">
<meta property="twitter:description" content="Free online Ounce to Grain converter 2026. Convert oz to gr and gr to oz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-coins text-amber-600 mr-3"></i>
                Ounce to Grain Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between ounces (oz) and grains (gr) for precious metals, jewelry, ammunition, and traditional weight measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gem text-amber-600 mr-2"></i>Ounces (oz)
                    </label>
                    <input
                        type="number"
                        id="ounceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter ounces"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Standard weight unit
                    </div>
                </div>

                <!-- Grain Input -->
                <div class="space-y-4">
                    <label for="grainInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-seedling text-yellow-600 mr-2"></i>Grains (gr)
                    </label>
                    <input
                        type="number"
                        id="grainInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter grains"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Traditional small weight unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Weight Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Weight Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Ounces</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Grains</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">43.75 gr</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.25 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">109.375 gr</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">218.75 gr</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">437.5 gr</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">875 gr</td>
                            </tr>
                            <tr>
                                <td class="py-2">5 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,187.5 gr</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Traditional Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-history text-amber-600 mr-3"></i>Traditional Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Precious Metals:</strong><br>
                        • Gold coins: 0.5-1 oz (218-437 gr)<br>
                        • Silver jewelry: 0.1-2 oz (44-875 gr)<br>
                        • Platinum items: 0.25-1 oz<br>
                        • Investment coins: 1 oz (437.5 gr)
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Ammunition & Archery:</strong><br>
                        • Bullet weights: 50-500 gr (0.11-1.14 oz)<br>
                        • Arrow points: 100-200 gr<br>
                        • Powder charges: 10-100 gr<br>
                        • Projectile mass: 25-750 gr
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Jewelry & Gems:</strong><br>
                        • Pearl weights: 1-50 gr (0.002-0.11 oz)<br>
                        • Small gems: 5-100 gr<br>
                        • Watch components: 1-20 gr<br>
                        • Precious stone settings: 10-200 gr
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>oz:</strong> Avoirdupois ounce</li>
                    <li><strong>gr:</strong> Grain (1/7000 pound)</li>
                    <li><strong>Conversion:</strong> 1 oz = 437.5 gr</li>
                    <li><strong>History:</strong> Based on barley grain</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>oz for larger weights</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>gr for precise small weights</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Common in precious metals</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Used in ammunition specs</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Jewelry:</strong> Precious metals</li>
                    <li><strong>Ammunition:</strong> Bullet weights</li>
                    <li><strong>Trading:</strong> Commodity pricing</li>
                    <li><strong>Crafts:</strong> Small measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertOunceToGrain(ounce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounce) && ounce !== '') {
        // 1 oz = 437.5 gr
        const grain = ounce * 437.5;
        document.getElementById('grainInput').value = grain.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${ounce} oz = ${grain.toFixed(3)} gr</strong>
        `;
    } else {
        document.getElementById('grainInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGrainToOunce(grain) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(grain) && grain !== '') {
        // 1 gr = 1/437.5 oz
        const ounce = grain / 437.5;
        document.getElementById('ounceInput').value = ounce.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${grain} gr = ${ounce.toFixed(4)} oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ounceInput').value = '';
    document.getElementById('grainInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ounceValue = document.getElementById('ounceInput').value;
    const grainValue = document.getElementById('grainInput').value;
    
    document.getElementById('ounceInput').value = grainValue;
    document.getElementById('grainInput').value = ounceValue;
    
    if (grainValue) {
        convertOunceToGrain(parseFloat(grainValue));
    } else if (ounceValue) {
        convertGrainToOunce(parseFloat(ounceValue));
    }
}

// Add event listeners
document.getElementById('ounceInput').addEventListener('input', function() {
    convertOunceToGrain(parseFloat(this.value));
});

document.getElementById('grainInput').addEventListener('input', function() {
    convertGrainToOunce(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
