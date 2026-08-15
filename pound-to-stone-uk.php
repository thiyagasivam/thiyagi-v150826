<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pound to Stone UK Converter 2026 - lb to st Calculator | Thiyagi</title>
<meta name="description" content="Free online Pound to Stone UK converter 2026. Convert lb to st and st to lb instantly with accurate weight conversion.">
<meta name="keywords" content="pound to stone converter 2026, lb to st, weight converter, UK weight measurement, imperial system">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pound to Stone UK Converter 2026 - lb to st Calculator">
<meta property="og:description" content="Free online Pound to Stone UK converter 2026. Convert lb to st and st to lb instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pound-to-stone-uk.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pound to Stone UK Converter 2026 - lb to st Calculator">
<meta property="twitter:description" content="Free online Pound to Stone UK converter 2026. Convert lb to st and st to lb instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-amber-600 mr-3"></i>
                Pound to Stone UK Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pounds and stones for UK weight measurements, body weight tracking, and imperial system calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pound Input -->
                <div class="space-y-4">
                    <label for="poundInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-amber-600 mr-2"></i>Pounds (lb)
                    </label>
                    <input
                        type="number"
                        id="poundInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 lb = 0.071429 stone
                    </div>
                </div>

                <!-- Stone Input -->
                <div class="space-y-4">
                    <label for="stoneInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dumbbell text-yellow-600 mr-2"></i>Stones (st)
                    </label>
                    <input
                        type="number"
                        id="stoneInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter stones"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 stone = 14 lb
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
            <!-- Weight Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Weight Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Pounds</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Stones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">7 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 st</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">14 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 st</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">28 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 st</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">70 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 st</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">140 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 st</td>
                            </tr>
                            <tr>
                                <td class="py-2">210 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">15 st</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Body Weight Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-user text-amber-600 mr-3"></i>Body Weight Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Children's Weight:</strong><br>
                        • Newborn: 6-9 lb (0.4-0.6 st)<br>
                        • Toddler: 22-30 lb (1.6-2.1 st)<br>
                        • Child (5-10): 40-80 lb (2.9-5.7 st)<br>
                        • Teen: 90-150 lb (6.4-10.7 st)
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Adult Weight Ranges:</strong><br>
                        • Lightweight: 100-130 lb (7.1-9.3 st)<br>
                        • Average: 140-180 lb (10-12.9 st)<br>
                        • Athletic: 160-200 lb (11.4-14.3 st)<br>
                        • Heavy: 200+ lb (14.3+ st)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>UK Weight Expressions:</strong><br>
                        • "10 stone 5" = 145 lb<br>
                        • "12 stone 7" = 175 lb<br>
                        • "15 stone" = 210 lb<br>
                        • Stone used in medical settings
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>Imperial Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pound:</strong> 16 ounces</li>
                    <li><strong>Stone:</strong> 14 pounds</li>
                    <li><strong>Conversion:</strong> 1 st = 14 lb</li>
                    <li><strong>Origin:</strong> Traditional UK unit</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Stone common in UK</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Pounds universal</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Easy 14:1 ratio</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Medical applications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Healthcare:</strong> Body weight tracking</li>
                    <li><strong>Fitness:</strong> Weight goals</li>
                    <li><strong>UK Forms:</strong> Official documentation</li>
                    <li><strong>Commerce:</strong> Product weights</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPoundToStone(pounds) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pounds) && pounds !== '') {
        // 1 pound = 1/14 stone
        const stones = pounds / 14;
        document.getElementById('stoneInput').value = stones.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${pounds} lb = ${stones.toFixed(4)} st</strong>
        `;
    } else {
        document.getElementById('stoneInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertStoneToPound(stones) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(stones) && stones !== '') {
        // 1 stone = 14 pounds
        const pounds = stones * 14;
        document.getElementById('poundInput').value = pounds;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${stones} st = ${pounds} lb</strong>
        `;
    } else {
        document.getElementById('poundInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('poundInput').value = '';
    document.getElementById('stoneInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const poundValue = document.getElementById('poundInput').value;
    const stoneValue = document.getElementById('stoneInput').value;
    
    document.getElementById('poundInput').value = stoneValue;
    document.getElementById('stoneInput').value = poundValue;
    
    if (stoneValue) {
        convertPoundToStone(parseFloat(stoneValue));
    } else if (poundValue) {
        convertStoneToPound(parseFloat(poundValue));
    }
}

// Add event listeners
document.getElementById('poundInput').addEventListener('input', function() {
    convertPoundToStone(parseFloat(this.value));
});

document.getElementById('stoneInput').addEventListener('input', function() {
    convertStoneToPound(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
