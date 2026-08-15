<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Stone to Pounds Converter 2026 - stone to lbs Calculator | Thiyagi</title>
<meta name="description" content="Free online Stone to Pounds converter 2026. Convert stone to lbs and lbs to stone instantly with accurate weight conversion for UK and US measurements.">
<meta name="keywords" content="stone to pounds converter 2026, stone to lbs, weight converter, UK weight, imperial measurements, body weight conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Stone to Pounds Converter 2026 - stone to lbs Calculator">
<meta property="og:description" content="Free online Stone to Pounds converter 2026. Convert stone to lbs and lbs to stone instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/stone-to-lbs.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Stone to Pounds Converter 2026 - stone to lbs Calculator">
<meta name="twitter:description" content="Free online Stone to Pounds converter 2026. Convert stone to lbs and lbs to stone instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-emerald-600 mr-3"></i>
                Stone to Pounds Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between stones and pounds for body weight measurements, UK imperial system, and international weight conversions
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Stone Input -->
                <div class="space-y-4">
                    <label for="stoneInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gem text-emerald-600 mr-2"></i>Stone (st)
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
                        1 stone = 14 lbs
                    </div>
                </div>

                <!-- Pounds Input -->
                <div class="space-y-4">
                    <label for="poundsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-green-600 mr-2"></i>Pounds (lbs)
                    </label>
                    <input
                        type="number"
                        id="poundsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 lb = 0.071429 stone
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
                                <th class="text-right py-2">Pounds</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">7 lbs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14 lbs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">28 lbs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">70 lbs</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">140 lbs</td>
                            </tr>
                            <tr>
                                <td class="py-2">15 st</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">210 lbs</td>
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
                        <strong>Children (stones):</strong><br>
                        • Toddler (2-3 years): 1.5-2.5 st<br>
                        • Child (5-8 years): 2.5-4 st<br>
                        • Pre-teen (10-12 years): 4-6 st<br>
                        • Teenager: 6-12 st
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Adults (stones):</strong><br>
                        • Average woman: 9-11 st<br>
                        • Average man: 11-13 st<br>
                        • Athletic build: 10-15 st<br>
                        • Heavyweight athlete: 15-20+ st
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>UK vs US Usage:</strong><br>
                        • UK: Commonly uses stones<br>
                        • US: Primarily uses pounds<br>
                        • Medical: Often uses kilograms<br>
                        • Sports: Varies by country
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
                    <li><strong>Stone:</strong> 14 pounds</li>
                    <li><strong>Pound:</strong> Imperial weight unit</li>
                    <li><strong>Conversion:</strong> 1 st = 14 lbs</li>
                    <li><strong>Origin:</strong> British imperial system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Stone common in UK/Ireland</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Pounds used in US</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Useful for body weight</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Consider metric alternatives</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Health:</strong> Weight tracking</li>
                    <li><strong>Fitness:</strong> Goal setting</li>
                    <li><strong>Medical:</strong> Patient records</li>
                    <li><strong>Sports:</strong> Weight classes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertStoneToLbs(stones) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(stones) && stones !== '') {
        const pounds = stones * 14;
        document.getElementById('poundsInput').value = pounds.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${stones} st = ${pounds.toLocaleString(undefined, {maximumFractionDigits: 6})} lbs</strong>
        `;
    } else {
        document.getElementById('poundsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLbsToStone(pounds) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pounds) && pounds !== '') {
        const stones = pounds / 14;
        document.getElementById('stoneInput').value = stones.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${pounds.toLocaleString()} lbs = ${stones.toFixed(6)} st</strong>
        `;
    } else {
        document.getElementById('stoneInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('stoneInput').value = '';
    document.getElementById('poundsInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const stoneValue = document.getElementById('stoneInput').value;
    const lbsValue = document.getElementById('poundsInput').value;
    
    document.getElementById('stoneInput').value = lbsValue;
    document.getElementById('poundsInput').value = stoneValue;
    
    if (lbsValue) {
        convertStoneToLbs(parseFloat(lbsValue));
    } else if (stoneValue) {
        convertLbsToStone(parseFloat(stoneValue));
    }
}

// Add event listeners
document.getElementById('stoneInput').addEventListener('input', function() {
    convertStoneToLbs(parseFloat(this.value));
});

document.getElementById('poundsInput').addEventListener('input', function() {
    convertLbsToStone(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
