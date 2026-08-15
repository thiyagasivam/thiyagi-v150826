<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pound to Kip Converter 2026 - lb to kip Calculator | Thiyagi</title>
<meta name="description" content="Free online Pound to Kip converter 2026. Convert lb to kip and kip to lb instantly with accurate force conversion for structural engineering and construction.">
<meta name="keywords" content="pound to kip converter 2026, lb to kip, force converter, structural engineering, construction loads, engineering calculations">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pound to Kip Converter 2026 - lb to kip Calculator">
<meta property="og:description" content="Free online Pound to Kip converter 2026. Convert lb to kip and kip to lb instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pound-to-kip.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pound to Kip Converter 2026 - lb to kip Calculator">
<meta name="twitter:description" content="Free online Pound to Kip converter 2026. Convert lb to kip and kip to lb instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-indigo-600 mr-3"></i>
                Pound to Kip Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pounds and kips for structural engineering, construction loads, and force calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pound Input -->
                <div class="space-y-4">
                    <label for="poundInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-indigo-600 mr-2"></i>Pound (lb)
                    </label>
                    <input
                        type="number"
                        id="poundInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter pounds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 lb = 0.001 kip
                    </div>
                </div>

                <!-- Kip Input -->
                <div class="space-y-4">
                    <label for="kipInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dumbbell text-blue-600 mr-2"></i>Kip (kip)
                    </label>
                    <input
                        type="number"
                        id="kipInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter kips"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kip = 1,000 lb
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Force Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Force Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Pound</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kip</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 kip</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 kip</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kip</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 kip</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kip</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 lb</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kip</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Load Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-building text-indigo-600 mr-3"></i>Engineering Load Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Small Loads (lb scale):</strong><br>
                        • Human weight: 100-300 lb<br>
                        • Office furniture: 50-500 lb<br>
                        • Residential loads: 200-2,000 lb<br>
                        • Light equipment: 100-1,000 lb
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Medium Loads (kip scale):</strong><br>
                        • Vehicle loads: 2-20 kip<br>
                        • Beam reactions: 5-100 kip<br>
                        • Column loads: 10-500 kip<br>
                        • Floor loads: 1-50 kip
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Large Loads (high kip):</strong><br>
                        • Bridge loads: 100-5,000 kip<br>
                        • Building foundations: 500-10,000 kip<br>
                        • Industrial equipment: 50-1,000 kip<br>
                        • Wind/seismic loads: 100-2,000 kip
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Force Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pound:</strong> lb or lbf (force)</li>
                    <li><strong>Kip:</strong> 1,000 pounds-force</li>
                    <li><strong>Conversion:</strong> 1 kip = 1,000 lb</li>
                    <li><strong>Origin:</strong> "Kilo-pound"</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Engineering Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use kips for large forces</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Simplifies structural calcs</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Standard in US engineering</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Check load combinations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Structural:</strong> Building design</li>
                    <li><strong>Civil:</strong> Infrastructure</li>
                    <li><strong>Mechanical:</strong> Machine design</li>
                    <li><strong>Construction:</strong> Load planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertLbToKip(pounds) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pounds) && pounds !== '') {
        const kips = pounds / 1000;
        document.getElementById('kipInput').value = kips.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${pounds.toLocaleString()} lb = ${kips.toFixed(6)} kip</strong>
        `;
    } else {
        document.getElementById('kipInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKipToLb(kips) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kips) && kips !== '') {
        const pounds = kips * 1000;
        document.getElementById('poundInput').value = pounds.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${kips} kip = ${pounds.toLocaleString(undefined, {maximumFractionDigits: 6})} lb</strong>
        `;
    } else {
        document.getElementById('poundInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('poundInput').value = '';
    document.getElementById('kipInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const lbValue = document.getElementById('poundInput').value;
    const kipValue = document.getElementById('kipInput').value;
    
    document.getElementById('poundInput').value = kipValue;
    document.getElementById('kipInput').value = lbValue;
    
    if (kipValue) {
        convertLbToKip(parseFloat(kipValue));
    } else if (lbValue) {
        convertKipToLb(parseFloat(lbValue));
    }
}

// Add event listeners
document.getElementById('poundInput').addEventListener('input', function() {
    convertLbToKip(parseFloat(this.value));
});

document.getElementById('kipInput').addEventListener('input', function() {
    convertKipToLb(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
