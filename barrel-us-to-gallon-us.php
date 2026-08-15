<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Barrel US to Gallon US Converter 2026 - bbl to gal Calculator | Thiyagi</title>
<meta name="description" content="Free online Barrel US to Gallon US converter 2026. Convert US barrel to US gallon and gal to bbl instantly with accurate volume conversion.">
<meta name="keywords" content="barrel US to gallon US converter 2026, bbl to gal, oil barrel converter, petroleum volume, liquid measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Barrel US to Gallon US Converter 2026 - bbl to gal Calculator">
<meta property="og:description" content="Free online Barrel US to Gallon US converter 2026. Convert US barrel to US gallon and gal to bbl instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/barrel-us-to-gallon-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Barrel US to Gallon US Converter 2026 - bbl to gal Calculator">
<meta name="twitter:description" content="Free online Barrel US to Gallon US converter 2026. Convert US barrel to US gallon and gal to bbl instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-oil-can text-amber-600 mr-3"></i>
                Barrel US to Gallon US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US barrels and US gallons for petroleum, oil, and large volume measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Barrel Input -->
                <div class="space-y-4">
                    <label for="barrelInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-drum text-amber-600 mr-2"></i>US Barrel (bbl)
                    </label>
                    <input
                        type="number"
                        id="barrelInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter barrels"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 bbl = 42 gallons (US)
                    </div>
                </div>

                <!-- Gallon Input -->
                <div class="space-y-4">
                    <label for="gallonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gas-pump text-orange-600 mr-2"></i>US Gallon (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter gallons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 gallon = 0.0238095 bbl
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg">
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
            <!-- Petroleum Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Petroleum Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Barrels</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Gallons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">21 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">42 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">210 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">420 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,100 gal</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 bbl</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4,200 gal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Industry Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-amber-600 mr-3"></i>Industry Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Oil & Gas Industry:</strong><br>
                        • Crude oil trading: priced per barrel<br>
                        • Refinery capacity: barrels per day<br>
                        • Storage tanks: 1,000-100,000 bbl<br>
                        • Pipeline flow: barrels per hour
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Fuel Distribution:</strong><br>
                        • Gas station tank: 8,000-12,000 gal<br>
                        • Fuel truck capacity: 8,000-11,000 gal<br>
                        • Home heating oil: 275-330 gal tank<br>
                        • Aircraft fuel: gallons per flight
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Bulk Liquids:</strong><br>
                        • Chemical processing: barrel quantities<br>
                        • Beverage production: gallon batches<br>
                        • Waste oil collection: barrel units<br>
                        • Marine fuel: bunker barrels
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>US Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US Barrel:</strong> 42 US gallons</li>
                    <li><strong>US Gallon:</strong> 3.78541 liters</li>
                    <li><strong>Standard:</strong> Petroleum barrel</li>
                    <li><strong>Symbol:</strong> bbl (barrel), gal (gallon)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Volume Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Barrels for large quantities</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Gallons for everyday use</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Account for container capacity</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Petroleum:</strong> Oil trading and refining</li>
                    <li><strong>Transportation:</strong> Fuel capacity planning</li>
                    <li><strong>Industrial:</strong> Chemical processing</li>
                    <li><strong>Storage:</strong> Tank sizing calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBarrelToGallon(barrels) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(barrels) && barrels !== '') {
        const gallons = barrels * 42;
        document.getElementById('gallonInput').value = gallons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${barrels} bbl = ${gallons.toFixed(6)} gal</strong>
        `;
    } else {
        document.getElementById('gallonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGallonToBarrel(gallons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gallons) && gallons !== '') {
        const barrels = gallons / 42;
        document.getElementById('barrelInput').value = barrels.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${gallons} gal = ${barrels.toFixed(8)} bbl</strong>
        `;
    } else {
        document.getElementById('barrelInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('barrelInput').value = '';
    document.getElementById('gallonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const barrelValue = document.getElementById('barrelInput').value;
    const gallonValue = document.getElementById('gallonInput').value;
    
    document.getElementById('barrelInput').value = gallonValue;
    document.getElementById('gallonInput').value = barrelValue;
    
    if (gallonValue) {
        convertBarrelToGallon(parseFloat(gallonValue));
    } else if (barrelValue) {
        convertGallonToBarrel(parseFloat(barrelValue));
    }
}

// Add event listeners
document.getElementById('barrelInput').addEventListener('input', function() {
    convertBarrelToGallon(parseFloat(this.value));
});

document.getElementById('gallonInput').addEventListener('input', function() {
    convertGallonToBarrel(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
