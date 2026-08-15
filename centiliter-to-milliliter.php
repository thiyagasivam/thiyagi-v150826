<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centiliter to Milliliter Converter 2026 - cL to mL Calculator | Thiyagi</title>
<meta name="description" content="Free online Centiliter to Milliliter converter 2026. Convert cL to mL and mL to cL instantly with accurate volume conversion for cooking and lab work.">
<meta name="keywords" content="centiliter to milliliter converter 2026, cL to mL, volume converter, cooking measurements, metric volume, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centiliter to Milliliter Converter 2026 - cL to mL Calculator">
<meta property="og:description" content="Free online Centiliter to Milliliter converter 2026. Convert cL to mL and mL to cL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centiliter-to-milliliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centiliter to Milliliter Converter 2026 - cL to mL Calculator">
<meta name="twitter:description" content="Free online Centiliter to Milliliter converter 2026. Convert cL to mL and mL to cL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-teal-600 mr-3"></i>
                Centiliter to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between centiliters and milliliters for cooking, laboratory work, and precise volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centiliter Input -->
                <div class="space-y-4">
                    <label for="centiliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-vial text-teal-600 mr-2"></i>Centiliter (cL)
                    </label>
                    <input
                        type="number"
                        id="centiliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter centiliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cL = 10 mL
                    </div>
                </div>

                <!-- Milliliter Input -->
                <div class="space-y-4">
                    <label for="milliliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-eyedropper text-cyan-600 mr-2"></i>Milliliter (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter milliliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mL = 0.1 cL
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-teal-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Centiliter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Milliliter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.5 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">25 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 mL</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 mL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-teal-600 mr-3"></i>Practical Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Kitchen Measurements:</strong><br>
                        • Tablespoon: ~1.5 cL (15 mL)<br>
                        • Shot glass: ~3 cL (30 mL)<br>
                        • Wine glass: ~15 cL (150 mL)<br>
                        • Coffee cup: ~20 cL (200 mL)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Laboratory Volumes:</strong><br>
                        • Pipette drop: ~0.05 cL (0.5 mL)<br>
                        • Test tube: ~1-2 cL (10-20 mL)<br>
                        • Beaker (small): ~5-10 cL (50-100 mL)<br>
                        • Graduated cylinder: ~10-25 cL (100-250 mL)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Medical Dosages:</strong><br>
                        • Eye drops: ~0.05 cL (0.5 mL)<br>
                        • Syringe: ~0.1-1 cL (1-10 mL)<br>
                        • Medicine spoon: ~0.5 cL (5 mL)<br>
                        • Injection vial: ~1-2 cL (10-20 mL)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Centiliter:</strong> 1/100 liter</li>
                    <li><strong>Milliliter:</strong> 1/1000 liter</li>
                    <li><strong>Conversion:</strong> 1 cL = 10 mL</li>
                    <li><strong>System:</strong> Metric volume units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use mL for precise measurements</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use cL for medium volumes</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Check measuring tool accuracy</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Consider temperature effects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                    <li><strong>Laboratory:</strong> Precise volumes</li>
                    <li><strong>Medicine:</strong> Dosage calculations</li>
                    <li><strong>Chemistry:</strong> Solution preparation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCentiliterToMilliliter(centiliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(centiliters) && centiliters !== '') {
        const milliliters = centiliters * 10;
        document.getElementById('milliliterInput').value = milliliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${centiliters} cL = ${milliliters.toFixed(6)} mL</strong>
        `;
    } else {
        document.getElementById('milliliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMilliliterToCentiliter(milliliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milliliters) && milliliters !== '') {
        const centiliters = milliliters / 10;
        document.getElementById('centiliterInput').value = centiliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${milliliters} mL = ${centiliters.toFixed(6)} cL</strong>
        `;
    } else {
        document.getElementById('centiliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('centiliterInput').value = '';
    document.getElementById('milliliterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const centiliterValue = document.getElementById('centiliterInput').value;
    const milliliterValue = document.getElementById('milliliterInput').value;
    
    document.getElementById('centiliterInput').value = milliliterValue;
    document.getElementById('milliliterInput').value = centiliterValue;
    
    if (milliliterValue) {
        convertCentiliterToMilliliter(parseFloat(milliliterValue));
    } else if (centiliterValue) {
        convertMilliliterToCentiliter(parseFloat(centiliterValue));
    }
}

// Add event listeners
document.getElementById('centiliterInput').addEventListener('input', function() {
    convertCentiliterToMilliliter(parseFloat(this.value));
});

document.getElementById('milliliterInput').addEventListener('input', function() {
    convertMilliliterToCentiliter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
