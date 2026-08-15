<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gallon US to Barrel Oil Converter 2026 - gal US to bbl Calculator | Thiyagi</title>
<meta name="description" content="Free online Gallon US to Barrel Oil converter 2026. Convert gal US to bbl and bbl to gal US instantly with accurate volume conversion for oil industry.">
<meta name="keywords" content="gallon us to barrel oil converter 2026, gal us to bbl, oil volume converter, petroleum measurements, energy industry, fuel calculations">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gallon US to Barrel Oil Converter 2026 - gal US to bbl Calculator">
<meta property="og:description" content="Free online Gallon US to Barrel Oil converter 2026. Convert gal US to bbl and bbl to gal US instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gallon-us-to-barrel-oil.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gallon US to Barrel Oil Converter 2026 - gal US to bbl Calculator">
<meta name="twitter:description" content="Free online Gallon US to Barrel Oil converter 2026. Convert gal US to bbl and bbl to gal US instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-oil-can text-orange-600 mr-3"></i>
                Gallon US to Barrel Oil Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US gallons and oil barrels for petroleum industry, fuel calculations, and energy trading
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gallon US Input -->
                <div class="space-y-4">
                    <label for="gallonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gas-pump text-orange-600 mr-2"></i>Gallon US (gal US)
                    </label>
                    <input
                        type="number"
                        id="gallonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter US gallons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gal US = 0.0238095 bbl
                    </div>
                </div>

                <!-- Barrel Oil Input -->
                <div class="space-y-4">
                    <label for="barrelInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-drum text-amber-600 mr-2"></i>Barrel Oil (bbl)
                    </label>
                    <input
                        type="number"
                        id="barrelInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter oil barrels"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 bbl = 42 gal US
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-orange-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Gallon US</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Barrel Oil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0238 bbl</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">21 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 bbl</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">42 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 bbl</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">84 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 bbl</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">210 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 bbl</td>
                            </tr>
                            <tr>
                                <td class="py-2">420 gal US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 bbl</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Oil Industry Context -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-orange-600 mr-3"></i>Oil Industry Context
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Oil Barrel Standard:</strong><br>
                        • 1 barrel = 42 US gallons<br>
                        • 1 barrel = 158.987 liters<br>
                        • Global oil trading unit<br>
                        • Established in 1866
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Common Applications:</strong><br>
                        • Crude oil trading<br>
                        • Refinery calculations<br>
                        • Fuel distribution<br>
                        • Energy market analysis
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Volume Examples:</strong><br>
                        • Small tanker: 25,000-50,000 bbl<br>
                        • Large tanker: 2-3 million bbl<br>
                        • Daily US consumption: ~20M bbl<br>
                        • Car tank: ~0.4-0.6 bbl (17-25 gal)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US Gallon:</strong> 3.785 liters</li>
                    <li><strong>Oil Barrel:</strong> 42 US gallons</li>
                    <li><strong>Conversion:</strong> 1 bbl = 42 gal US</li>
                    <li><strong>Standard:</strong> Petroleum industry</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Industry Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Barrel is global standard</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Used in commodity trading</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Price quotes per barrel</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Consider temperature effects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Trading:</strong> Oil market analysis</li>
                    <li><strong>Refining:</strong> Process calculations</li>
                    <li><strong>Transport:</strong> Shipping volumes</li>
                    <li><strong>Finance:</strong> Energy investments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGalToBbl(gallons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gallons) && gallons !== '') {
        const barrels = gallons / 42;
        document.getElementById('barrelInput').value = barrels.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${gallons.toLocaleString()} gal US = ${barrels.toFixed(6)} bbl</strong>
        `;
    } else {
        document.getElementById('barrelInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertBblToGal(barrels) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(barrels) && barrels !== '') {
        const gallons = barrels * 42;
        document.getElementById('gallonInput').value = gallons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${barrels} bbl = ${gallons.toLocaleString(undefined, {maximumFractionDigits: 6})} gal US</strong>
        `;
    } else {
        document.getElementById('gallonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gallonInput').value = '';
    document.getElementById('barrelInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const galValue = document.getElementById('gallonInput').value;
    const bblValue = document.getElementById('barrelInput').value;
    
    document.getElementById('gallonInput').value = bblValue;
    document.getElementById('barrelInput').value = galValue;
    
    if (bblValue) {
        convertGalToBbl(parseFloat(bblValue));
    } else if (galValue) {
        convertBblToGal(parseFloat(galValue));
    }
}

// Add event listeners
document.getElementById('gallonInput').addEventListener('input', function() {
    convertGalToBbl(parseFloat(this.value));
});

document.getElementById('barrelInput').addEventListener('input', function() {
    convertBblToGal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
