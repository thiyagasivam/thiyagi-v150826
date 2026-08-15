<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Stone UK to Pound Converter 2026 - st to lb Calculator | Thiyagi</title>
<meta name="description" content="Free online Stone UK to Pound converter 2026. Convert st to lb and lb to st instantly with accurate weight conversion for body weight and measurements.">
<meta name="keywords" content="stone UK to pound converter 2026, st to lb, weight converter, British weight, stone weight, pound weight">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Stone UK to Pound Converter 2026 - st to lb Calculator">
<meta property="og:description" content="Free online Stone UK to Pound converter 2026. Convert st to lb and lb to st instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/stone-uk-to-pound.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Stone UK to Pound Converter 2026 - st to lb Calculator">
<meta name="twitter:description" content="Free online Stone UK to Pound converter 2026. Convert st to lb and lb to st instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-emerald-600 mr-3"></i>
                Stone UK to Pound Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between British stone and pounds for body weight, fitness tracking, and UK weight measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Stone Input -->
                <div class="space-y-4">
                    <label for="stoneInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-emerald-600 mr-2"></i>Stone UK (st)
                    </label>
                    <input
                        type="number"
                        id="stoneInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter stones"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 stone = 14 pounds
                    </div>
                </div>

                <!-- Pound Input -->
                <div class="space-y-4">
                    <label for="poundInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-green-600 mr-2"></i>Pound (lb)
                    </label>
                    <input
                        type="number"
                        id="poundInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 pound = 0.071429 stone
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
            <!-- Weight Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Weight Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Stone</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pound</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">70 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">140 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">168 lb</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">15 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">210 lb</td>
                            </tr>
                            <tr>
                                <td class="py-2">20 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">280 lb</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Body Weight Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-user text-emerald-600 mr-3"></i>Body Weight Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Average Adult Weights:</strong><br>
                        • Petite adult: 8-10 st (112-140 lb)<br>
                        • Average adult: 10-12 st (140-168 lb)<br>
                        • Large adult: 12-15 st (168-210 lb)<br>
                        • Athletic adult: 13-16 st (182-224 lb)
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Health Categories (BMI):</strong><br>
                        • Underweight: Below normal range<br>
                        • Normal weight: 9-12 st (varies by height)<br>
                        • Overweight: 12-15 st (varies by height)<br>
                        • Obese: Above 15 st (varies by height)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Fitness Tracking:</strong><br>
                        • Weight loss goal: 1-2 lb (0.07-0.14 st) per week<br>
                        • Muscle gain: 0.5-1 lb (0.035-0.07 st) per week<br>
                        • Maintenance: ±2-3 lb (±0.14-0.21 st)<br>
                        • Competition weight: Precise to 0.1 st
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Stone:</strong> British unit = 14 pounds</li>
                    <li><strong>Pound:</strong> Imperial unit = 0.453592 kg</li>
                    <li><strong>Conversion:</strong> 1 st = 14 lb</li>
                    <li><strong>System:</strong> Imperial weight units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Weigh at consistent times</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Use calibrated scales</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Consider clothing weight</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Track trends, not daily fluctuations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Health:</strong> Body weight tracking</li>
                    <li><strong>Fitness:</strong> Progress monitoring</li>
                    <li><strong>Medical:</strong> Patient records</li>
                    <li><strong>Sports:</strong> Weight classes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertStoneToLb(stones) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(stones) && stones !== '') {
        const pounds = stones * 14;
        document.getElementById('poundInput').value = pounds.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${stones} st = ${pounds.toFixed(6)} lb</strong>
        `;
    } else {
        document.getElementById('poundInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLbToStone(pounds) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pounds) && pounds !== '') {
        const stones = pounds / 14;
        document.getElementById('stoneInput').value = stones.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${pounds} lb = ${stones.toFixed(6)} st</strong>
        `;
    } else {
        document.getElementById('stoneInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('stoneInput').value = '';
    document.getElementById('poundInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const stoneValue = document.getElementById('stoneInput').value;
    const poundValue = document.getElementById('poundInput').value;
    
    document.getElementById('stoneInput').value = poundValue;
    document.getElementById('poundInput').value = stoneValue;
    
    if (poundValue) {
        convertStoneToLb(parseFloat(poundValue));
    } else if (stoneValue) {
        convertLbToStone(parseFloat(stoneValue));
    }
}

// Add event listeners
document.getElementById('stoneInput').addEventListener('input', function() {
    convertStoneToLb(parseFloat(this.value));
});

document.getElementById('poundInput').addEventListener('input', function() {
    convertLbToStone(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
