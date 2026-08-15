<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milliliter to Deciliter Converter 2026 - mL to dL Calculator | Thiyagi</title>
<meta name="description" content="Free online Milliliter to Deciliter converter 2026. Convert mL to dL and dL to mL instantly with accurate volume conversion for cooking and laboratory work.">
<meta name="keywords" content="milliliter to deciliter converter 2026, mL to dL, volume converter, metric volume, cooking measurements, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milliliter to Deciliter Converter 2026 - mL to dL Calculator">
<meta property="og:description" content="Free online Milliliter to Deciliter converter 2026. Convert mL to dL and dL to mL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milliliter-to-deciliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milliliter to Deciliter Converter 2026 - mL to dL Calculator">
<meta name="twitter:description" content="Free online Milliliter to Deciliter converter 2026. Convert mL to dL and dL to mL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-vial text-blue-600 mr-3"></i>
                Milliliter to Deciliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milliliters and deciliters for cooking, laboratory work, and precise volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliter Input -->
                <div class="space-y-4">
                    <label for="milliliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-eyedropper text-blue-600 mr-2"></i>Milliliter (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter milliliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mL = 0.01 dL
                    </div>
                </div>

                <!-- Deciliter Input -->
                <div class="space-y-4">
                    <label for="deciliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-indigo-600 mr-2"></i>Deciliter (dL)
                    </label>
                    <input
                        type="number"
                        id="deciliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter deciliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 dL = 100 mL
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-blue-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milliliter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Deciliter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 dL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 dL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 dL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 dL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">250 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 dL</td>
                            </tr>
                            <tr>
                                <td class="py-2">500 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 dL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-utensils text-blue-600 mr-3"></i>Practical Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Kitchen Measurements:</strong><br>
                        • Teaspoon: 5 mL (0.05 dL)<br>
                        • Tablespoon: 15 mL (0.15 dL)<br>
                        • Coffee cup: 200 mL (2 dL)<br>
                        • Water glass: 250 mL (2.5 dL)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Beverage Portions:</strong><br>
                        • Espresso: 30 mL (0.3 dL)<br>
                        • Wine serving: 150 mL (1.5 dL)<br>
                        • Beer glass: 330 mL (3.3 dL)<br>
                        • Water bottle: 500 mL (5 dL)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Laboratory Volumes:</strong><br>
                        • Pipette: 1-10 mL (0.01-0.1 dL)<br>
                        • Test tube: 15-25 mL (0.15-0.25 dL)<br>
                        • Beaker (small): 100 mL (1 dL)<br>
                        • Graduated cylinder: 250 mL (2.5 dL)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Milliliter:</strong> 1/1000 liter</li>
                    <li><strong>Deciliter:</strong> 1/10 liter</li>
                    <li><strong>Conversion:</strong> 1 dL = 100 mL</li>
                    <li><strong>System:</strong> Metric volume units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use mL for small volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use dL for medium volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Read at eye level</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Account for meniscus</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                    <li><strong>Laboratory:</strong> Chemical volumes</li>
                    <li><strong>Medicine:</strong> Dosage calculations</li>
                    <li><strong>Industry:</strong> Quality control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMlToDl(milliliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milliliters) && milliliters !== '') {
        const deciliters = milliliters / 100;
        document.getElementById('deciliterInput').value = deciliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${milliliters} mL = ${deciliters.toFixed(6)} dL</strong>
        `;
    } else {
        document.getElementById('deciliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertDlToMl(deciliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(deciliters) && deciliters !== '') {
        const milliliters = deciliters * 100;
        document.getElementById('milliliterInput').value = milliliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${deciliters} dL = ${milliliters.toFixed(6)} mL</strong>
        `;
    } else {
        document.getElementById('milliliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milliliterInput').value = '';
    document.getElementById('deciliterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mlValue = document.getElementById('milliliterInput').value;
    const dlValue = document.getElementById('deciliterInput').value;
    
    document.getElementById('milliliterInput').value = dlValue;
    document.getElementById('deciliterInput').value = mlValue;
    
    if (dlValue) {
        convertMlToDl(parseFloat(dlValue));
    } else if (mlValue) {
        convertDlToMl(parseFloat(mlValue));
    }
}

// Add event listeners
document.getElementById('milliliterInput').addEventListener('input', function() {
    convertMlToDl(parseFloat(this.value));
});

document.getElementById('deciliterInput').addEventListener('input', function() {
    convertDlToMl(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
