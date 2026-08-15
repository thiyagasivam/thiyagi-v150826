<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ounce to Quarter US Converter 2026 - oz to qr US Calculator | Thiyagi</title>
<meta name="description" content="Free online Ounce to Quarter US converter 2026. Convert oz to qr US and qr US to oz instantly with accurate weight conversion for trading and commerce.">
<meta name="keywords" content="ounce to quarter us converter 2026, oz to qr us, weight converter, imperial weight, us measurements, trading weights">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ounce to Quarter US Converter 2026 - oz to qr US Calculator">
<meta property="og:description" content="Free online Ounce to Quarter US converter 2026. Convert oz to qr US and qr US to oz instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ounce-to-quarter-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ounce to Quarter US Converter 2026 - oz to qr US Calculator">
<meta name="twitter:description" content="Free online Ounce to Quarter US converter 2026. Convert oz to qr US and qr US to oz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-amber-600 mr-3"></i>
                Ounce to Quarter US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between ounces and quarters (US) for historical trading, commodity measurements, and weight calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-amber-600 mr-2"></i>Ounce (oz)
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
                        1 oz = 0.00111111 qr US
                    </div>
                </div>

                <!-- Quarter US Input -->
                <div class="space-y-4">
                    <label for="quarterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-coins text-yellow-600 mr-2"></i>Quarter US (qr US)
                    </label>
                    <input
                        type="number"
                        id="quarterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter quarters US"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 qr US = 900 oz
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
                                <th class="text-left py-2">Ounce</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Quarter US</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00111 qr US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.111 qr US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">450 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 qr US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">900 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 qr US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,800 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 qr US</td>
                            </tr>
                            <tr>
                                <td class="py-2">9,000 oz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 qr US</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Historical Weight Context -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-history text-amber-600 mr-3"></i>Historical Weight Context
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Quarter US Definition:</strong><br>
                        • 1 Quarter US = 25 pounds<br>
                        • 1 Quarter US = 900 ounces<br>
                        • Equal to 11.34 kg<br>
                        • Used in historical trade
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Common Trading Uses:</strong><br>
                        • Grain and cereal trading<br>
                        • Agricultural commodities<br>
                        • Historical market weights<br>
                        • Colonial era commerce
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Modern Equivalents:</strong><br>
                        • 1 qr US ≈ 11.34 kg<br>
                        • 1 qr US ≈ 25 lb<br>
                        • 1 qr US ≈ 1.79 stone<br>
                        • Used in historical records
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
                    <li><strong>Ounce:</strong> 1/16 of a pound</li>
                    <li><strong>Quarter US:</strong> 25 pounds</li>
                    <li><strong>Conversion:</strong> 1 qr US = 900 oz</li>
                    <li><strong>System:</strong> Imperial/US customary</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Quarter is historical unit</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Used in old trading records</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Convert to modern units</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Check historical context</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>History:</strong> Trade record analysis</li>
                    <li><strong>Research:</strong> Historical studies</li>
                    <li><strong>Agriculture:</strong> Commodity trading</li>
                    <li><strong>Archives:</strong> Document interpretation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertOzToQuarter(ounces) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounces) && ounces !== '') {
        const quarters = ounces / 900;
        document.getElementById('quarterInput').value = quarters.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${ounces} oz = ${quarters.toFixed(8)} qr US</strong>
        `;
    } else {
        document.getElementById('quarterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertQuarterToOz(quarters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(quarters) && quarters !== '') {
        const ounces = quarters * 900;
        document.getElementById('ounceInput').value = ounces.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${quarters} qr US = ${ounces.toLocaleString(undefined, {maximumFractionDigits: 6})} oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ounceInput').value = '';
    document.getElementById('quarterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ozValue = document.getElementById('ounceInput').value;
    const qrValue = document.getElementById('quarterInput').value;
    
    document.getElementById('ounceInput').value = qrValue;
    document.getElementById('quarterInput').value = ozValue;
    
    if (qrValue) {
        convertOzToQuarter(parseFloat(qrValue));
    } else if (ozValue) {
        convertQuarterToOz(parseFloat(ozValue));
    }
}

// Add event listeners
document.getElementById('ounceInput').addEventListener('input', function() {
    convertOzToQuarter(parseFloat(this.value));
});

document.getElementById('quarterInput').addEventListener('input', function() {
    convertQuarterToOz(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
