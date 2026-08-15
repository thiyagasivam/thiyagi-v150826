<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centiliter to Fluid Ounce US Converter 2026 - cL to fl oz Calculator | Thiyagi</title>
<meta name="description" content="Free online Centiliter to Fluid Ounce US converter 2026. Convert cL to fl oz and fl oz to cL instantly with accurate volume conversion.">
<meta name="keywords" content="centiliter to fluid ounce converter 2026, cL to fl oz, volume converter, liquid measurement, cooking conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centiliter to Fluid Ounce US Converter 2026 - cL to fl oz Calculator">
<meta property="og:description" content="Free online Centiliter to Fluid Ounce US converter 2026. Convert cL to fl oz and fl oz to cL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centiliter-to-fluid-ounce-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centiliter to Fluid Ounce US Converter 2026 - cL to fl oz Calculator">
<meta property="twitter:description" content="Free online Centiliter to Fluid Ounce US converter 2026. Convert cL to fl oz and fl oz to cL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-emerald-600 mr-3"></i>
                Centiliter to Fluid Ounce US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between centiliters and US fluid ounces for cooking recipes, beverage measurements, and liquid volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centiliter Input -->
                <div class="space-y-4">
                    <label for="clInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-beaker text-emerald-600 mr-2"></i>Centiliters (cL)
                    </label>
                    <input
                        type="number"
                        id="clInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter centiliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cL = 0.338140 fl oz US
                    </div>
                </div>

                <!-- Fluid Ounce Input -->
                <div class="space-y-4">
                    <label for="flozInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wine-glass text-green-600 mr-2"></i>Fluid Ounces US (fl oz)
                    </label>
                    <input
                        type="number"
                        id="flozInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter fluid ounces"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 fl oz US = 2.957353 cL
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
            <!-- Cooking Measurement Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Cooking Measurement Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Centiliters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Fluid Ounces US</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.338 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.014 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.691 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.381 fl oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8.454 fl oz</td>
                            </tr>
                            <tr>
                                <td class="py-2">50 cL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">16.907 fl oz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Beverage Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-wine-bottle text-emerald-600 mr-3"></i>Beverage Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Alcoholic Beverages:</strong><br>
                        • Shot glass: 3-5 cL (1-1.7 fl oz)<br>
                        • Wine serving: 15 cL (5.1 fl oz)<br>
                        • Beer bottle: 33 cL (11.2 fl oz)<br>
                        • Wine bottle: 75 cL (25.4 fl oz)
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Non-Alcoholic:</strong><br>
                        • Espresso: 3 cL (1 fl oz)<br>
                        • Coffee cup: 25 cL (8.5 fl oz)<br>
                        • Soda can: 33 cL (11.2 fl oz)<br>
                        • Water bottle: 50 cL (16.9 fl oz)
                    </div>
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Cooking Liquids:</strong><br>
                        • Vanilla extract: 1 cL (0.34 fl oz)<br>
                        • Lemon juice: 5 cL (1.7 fl oz)<br>
                        • Stock portion: 25 cL (8.5 fl oz)<br>
                        • Cooking wine: 12.5 cL (4.2 fl oz)
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
                    <li><strong>Centiliter:</strong> 0.01 liters</li>
                    <li><strong>US Fluid Ounce:</strong> 29.5735 mL</li>
                    <li><strong>Conversion:</strong> 1 fl oz = 2.957353 cL</li>
                    <li><strong>Precision:</strong> 1 cL = 0.338140 fl oz</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>cL common in Europe</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>fl oz standard in US</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Recipe conversion</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Beverage measurements</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe conversion</li>
                    <li><strong>Beverages:</strong> Serving sizes</li>
                    <li><strong>Pharmacy:</strong> Liquid dosage</li>
                    <li><strong>Chemistry:</strong> Solution preparation</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertClToFloz(cl) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cl) && cl !== '') {
        // 1 centiliter = 0.33814022558919 US fluid ounces
        const floz = cl * 0.33814022558919;
        document.getElementById('flozInput').value = floz.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${cl} cL = ${floz.toFixed(4)} fl oz US</strong>
        `;
    } else {
        document.getElementById('flozInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFlozToCl(floz) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(floz) && floz !== '') {
        // 1 US fluid ounce = 2.95735296875 centiliters
        const cl = floz * 2.95735296875;
        document.getElementById('clInput').value = cl.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${floz} fl oz US = ${cl.toFixed(4)} cL</strong>
        `;
    } else {
        document.getElementById('clInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('clInput').value = '';
    document.getElementById('flozInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const clValue = document.getElementById('clInput').value;
    const flozValue = document.getElementById('flozInput').value;
    
    document.getElementById('clInput').value = flozValue;
    document.getElementById('flozInput').value = clValue;
    
    if (flozValue) {
        convertClToFloz(parseFloat(flozValue));
    } else if (clValue) {
        convertFlozToCl(parseFloat(clValue));
    }
}

// Add event listeners
document.getElementById('clInput').addEventListener('input', function() {
    convertClToFloz(parseFloat(this.value));
});

document.getElementById('flozInput').addEventListener('input', function() {
    convertFlozToCl(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
