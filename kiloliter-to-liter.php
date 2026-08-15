<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kiloliter to Liter Converter 2026 - kL to L Calculator | Thiyagi</title>
<meta name="description" content="Free online Kiloliter to Liter converter 2026. Convert kL to L and L to kL instantly with accurate volume conversion for industrial and large-scale measurements.">
<meta name="keywords" content="kiloliter to liter converter 2026, kL to L, volume converter, large volume, industrial measurements, bulk liquid">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kiloliter to Liter Converter 2026 - kL to L Calculator">
<meta property="og:description" content="Free online Kiloliter to Liter converter 2026. Convert kL to L and L to kL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kiloliter-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kiloliter to Liter Converter 2026 - kL to L Calculator">
<meta name="twitter:description" content="Free online Kiloliter to Liter converter 2026. Convert kL to L and L to kL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-water text-cyan-600 mr-3"></i>
                Kiloliter to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kiloliters and liters for industrial applications, large-scale measurements, and bulk liquid calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kiloliter Input -->
                <div class="space-y-4">
                    <label for="kiloliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tint text-cyan-600 mr-2"></i>Kiloliter (kL)
                    </label>
                    <input
                        type="number"
                        id="kiloliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter kiloliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kL = 1,000 L
                    </div>
                </div>

                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-blue-600 mr-2"></i>Liter (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter liters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L = 0.001 kL
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Volume Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kiloliter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Liter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 L</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 kL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Industrial & Large Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-cyan-600 mr-3"></i>Industrial & Large Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Storage Tanks:</strong><br>
                        • Small tank: 1-5 kL (1,000-5,000 L)<br>
                        • Medium tank: 10-50 kL (10,000-50,000 L)<br>
                        • Large tank: 100-500 kL (100,000-500,000 L)<br>
                        • Industrial tank: 1,000+ kL (1,000,000+ L)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Transportation:</strong><br>
                        • Tanker truck: 20-40 kL (20,000-40,000 L)<br>
                        • Rail tank car: 80-120 kL (80,000-120,000 L)<br>
                        • Ship tank: 1,000-10,000 kL<br>
                        • Pipeline flow: 100-1,000 kL/hour
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Facility Usage:</strong><br>
                        • Swimming pool: 100-2,000 kL<br>
                        • Water treatment: 1,000-10,000 kL/day<br>
                        • Brewery tank: 10-100 kL<br>
                        • Fuel depot: 1,000-50,000 kL
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Kiloliter:</strong> 1,000 liters</li>
                    <li><strong>Liter:</strong> Base metric volume unit</li>
                    <li><strong>Conversion:</strong> 1 kL = 1,000 L</li>
                    <li><strong>Equivalence:</strong> 1 kL = 1 cubic meter</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Use kL for large volumes</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Monitor temperature effects</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Consider container calibration</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Account for expansion/contraction</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Industrial:</strong> Process tanks</li>
                    <li><strong>Transportation:</strong> Bulk liquids</li>
                    <li><strong>Utilities:</strong> Water systems</li>
                    <li><strong>Energy:</strong> Fuel storage</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKlToL(kiloliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kiloliters) && kiloliters !== '') {
        const liters = kiloliters * 1000;
        document.getElementById('literInput').value = liters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${kiloliters} kL = ${liters.toLocaleString(undefined, {maximumFractionDigits: 6})} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLToKl(liters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liters) && liters !== '') {
        const kiloliters = liters / 1000;
        document.getElementById('kiloliterInput').value = kiloliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${liters.toLocaleString()} L = ${kiloliters.toFixed(6)} kL</strong>
        `;
    } else {
        document.getElementById('kiloliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kiloliterInput').value = '';
    document.getElementById('literInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const klValue = document.getElementById('kiloliterInput').value;
    const lValue = document.getElementById('literInput').value;
    
    document.getElementById('kiloliterInput').value = lValue;
    document.getElementById('literInput').value = klValue;
    
    if (lValue) {
        convertKlToL(parseFloat(lValue));
    } else if (klValue) {
        convertLToKl(parseFloat(klValue));
    }
}

// Add event listeners
document.getElementById('kiloliterInput').addEventListener('input', function() {
    convertKlToL(parseFloat(this.value));
});

document.getElementById('literInput').addEventListener('input', function() {
    convertLToKl(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
