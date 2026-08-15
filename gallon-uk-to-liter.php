<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gallon UK to Liter Converter 2026 - gal UK to L Calculator | Thiyagi</title>
<meta name="description" content="Free online Gallon UK to Liter converter 2026. Convert gal UK to L and L to gal UK instantly with accurate volume conversion for fuel and liquids.">
<meta name="keywords" content="gallon uk to liter converter 2026, gal UK to L, volume converter, UK gallon, imperial gallon, fuel measurements, liquid conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gallon UK to Liter Converter 2026 - gal UK to L Calculator">
<meta property="og:description" content="Free online Gallon UK to Liter converter 2026. Convert gal UK to L and L to gal UK instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gallon-uk-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gallon UK to Liter Converter 2026 - gal UK to L Calculator">
<meta name="twitter:description" content="Free online Gallon UK to Liter converter 2026. Convert gal UK to L and L to gal UK instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-green-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-gas-pump text-emerald-600 mr-3"></i>
                Gallon UK to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between UK gallons (Imperial) and liters for fuel consumption, liquid storage, and international volume comparisons
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gallon UK Input -->
                <div class="space-y-4">
                    <label for="gallonUKInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flag text-emerald-600 mr-2"></i>Gallon UK (gal UK)
                    </label>
                    <input
                        type="number"
                        id="gallonUKInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter UK gallons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gal UK = 4.546 L
                    </div>
                </div>

                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-teal-600 mr-2"></i>Liter (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter liters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L = 0.2200 gal UK
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg">
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
            <!-- Volume Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Gallon UK</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Liter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.273 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.546 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">22.73 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">45.46 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">20 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">90.92 L</td>
                            </tr>
                            <tr>
                                <td class="py-2">50 gal UK</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">227.3 L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Fuel and Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-car text-emerald-600 mr-3"></i>Fuel and Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Vehicle Fuel Tanks:</strong><br>
                        • Small car: 35-45 L (7.7-9.9 gal UK)<br>
                        • Medium car: 50-65 L (11-14.3 gal UK)<br>
                        • Large car: 70-90 L (15.4-19.8 gal UK)<br>
                        • Motorcycle: 15-25 L (3.3-5.5 gal UK)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>UK vs US Gallons:</strong><br>
                        • 1 gal UK = 4.546 L<br>
                        • 1 gal US = 3.785 L<br>
                        • UK gallon is ~20% larger<br>
                        • Important for fuel economy
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Common Container Sizes:</strong><br>
                        • Water bottle: 0.5-1.5 L<br>
                        • Milk jug: 1-4 L<br>
                        • Fuel jerry can: 20 L (4.4 gal UK)<br>
                        • Oil drum: 200 L (44 gal UK)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Gallon UK:</strong> Imperial gallon</li>
                    <li><strong>Liter:</strong> Metric volume unit</li>
                    <li><strong>Conversion:</strong> 1 gal UK = 4.54609 L</li>
                    <li><strong>Origin:</strong> British Imperial system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>UK uses Imperial gallons</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Europe uses liters</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Check fuel economy units</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Different from US gallons</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Automotive:</strong> Fuel consumption</li>
                    <li><strong>Travel:</strong> International comparisons</li>
                    <li><strong>Industry:</strong> Liquid storage</li>
                    <li><strong>Trade:</strong> Volume conversions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGallonUKToLiter(gallonUK) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gallonUK) && gallonUK !== '') {
        const liters = gallonUK * 4.54609;
        document.getElementById('literInput').value = liters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${gallonUK} gal UK = ${liters.toFixed(3)} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLiterToGallonUK(liters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liters) && liters !== '') {
        const gallonUK = liters / 4.54609;
        document.getElementById('gallonUKInput').value = gallonUK.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${liters} L = ${gallonUK.toFixed(6)} gal UK</strong>
        `;
    } else {
        document.getElementById('gallonUKInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gallonUKInput').value = '';
    document.getElementById('literInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const galUKValue = document.getElementById('gallonUKInput').value;
    const literValue = document.getElementById('literInput').value;
    
    document.getElementById('gallonUKInput').value = literValue;
    document.getElementById('literInput').value = galUKValue;
    
    if (literValue) {
        convertGallonUKToLiter(parseFloat(literValue));
    } else if (galUKValue) {
        convertLiterToGallonUK(parseFloat(galUKValue));
    }
}

// Add event listeners
document.getElementById('gallonUKInput').addEventListener('input', function() {
    convertGallonUKToLiter(parseFloat(this.value));
});

document.getElementById('literInput').addEventListener('input', function() {
    convertLiterToGallonUK(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
