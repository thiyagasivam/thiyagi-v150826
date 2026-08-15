<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Acre to Square Kilometer Converter 2026 - ac to km² Calculator | Thiyagi</title>
<meta name="description" content="Free online Acre to Square Kilometer converter 2026. Convert ac to km² and km² to ac instantly with accurate land area conversion for real estate.">
<meta name="keywords" content="acre to square kilometer converter 2026, ac to km2, land area converter, real estate conversion, agricultural land, property measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Acre to Square Kilometer Converter 2026 - ac to km² Calculator">
<meta property="og:description" content="Free online Acre to Square Kilometer converter 2026. Convert ac to km² and km² to ac instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/acre-to-square-kilometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Acre to Square Kilometer Converter 2026 - ac to km² Calculator">
<meta name="twitter:description" content="Free online Acre to Square Kilometer converter 2026. Convert ac to km² and km² to ac instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-globe text-green-600 mr-3"></i>
                Acre to Square Kilometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between acres and square kilometers for land measurement, real estate, and agricultural planning
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Acre Input -->
                <div class="space-y-4">
                    <label for="acreInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-leaf text-green-600 mr-2"></i>Acre (ac)
                    </label>
                    <input
                        type="number"
                        id="acreInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter acres"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 acre = 0.00404686 km²
                    </div>
                </div>

                <!-- Square Kilometer Input -->
                <div class="space-y-4">
                    <label for="squareKilometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-map text-emerald-600 mr-2"></i>Square Kilometer (km²)
                    </label>
                    <input
                        type="number"
                        id="squareKilometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter square kilometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 km² = 247.105 acres
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="landContext" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Land Area Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Land Area Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Acres</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Square Kilometers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 acre</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00405 km²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 acres</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0405 km²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 acres</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.405 km²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">247 acres</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 km²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 acres</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.047 km²</td>
                            </tr>
                            <tr>
                                <td class="py-2">2,471 acres</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 km²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Property & Land Use -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-green-600 mr-3"></i>Property & Land Use
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Residential Properties:</strong><br>
                        • House lot: 0.1-2 acres (0.0004-0.008 km²)<br>
                        • Subdivision: 10-100 acres (0.04-0.4 km²)<br>
                        • Estate property: 5-50 acres (0.02-0.2 km²)<br>
                        • Rural homestead: 1-20 acres (0.004-0.08 km²)
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Agricultural Land:</strong><br>
                        • Small farm: 10-100 acres (0.04-0.4 km²)<br>
                        • Family farm: 100-500 acres (0.4-2.0 km²)<br>
                        • Large farm: 500-2,000 acres (2.0-8.1 km²)<br>
                        • Ranch: 1,000-10,000 acres (4.0-40.5 km²)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Commercial & Industrial:</strong><br>
                        • Shopping center: 10-50 acres (0.04-0.2 km²)<br>
                        • Industrial park: 50-500 acres (0.2-2.0 km²)<br>
                        • Airport: 500-5,000 acres (2.0-20.2 km²)<br>
                        • City area: 5,000-50,000 acres (20-202 km²)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Area Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Acre:</strong> 43,560 square feet</li>
                    <li><strong>Square Kilometer:</strong> 1,000,000 m²</li>
                    <li><strong>Conversion:</strong> 1 km² = 247.105 acres</li>
                    <li><strong>Origin:</strong> Anglo-Saxon land measure</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Land Planning Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Use acres for US property listings</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Use km² for large-scale planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Consider zoning regulations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Account for topography effects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Real Estate:</strong> Property valuation</li>
                    <li><strong>Agriculture:</strong> Farm planning</li>
                    <li><strong>Development:</strong> Land use planning</li>
                    <li><strong>Conservation:</strong> Protected areas</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertAcreToSquareKilometer(acres) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(acres) && acres !== '') {
        const squareKilometers = acres * 0.00404686;
        document.getElementById('squareKilometerInput').value = squareKilometers.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${acres} acres = ${squareKilometers.toFixed(8)} km²</strong>
        `;
        
        // Add land use context
        let landText = '';
        if (acres >= 50000) {
            landText = 'Large city or county area';
        } else if (acres >= 10000) {
            landText = 'Small city or large ranch area';
        } else if (acres >= 1000) {
            landText = 'Large farm or commercial development';
        } else if (acres >= 100) {
            landText = 'Medium farm or subdivision area';
        } else if (acres >= 10) {
            landText = 'Small farm or large residential property';
        } else if (acres >= 1) {
            landText = 'Large residential lot or small farm';
        } else if (acres > 0) {
            landText = 'Residential lot or small property';
        }
        
        document.getElementById('landContext').innerHTML = landText;
    } else {
        document.getElementById('squareKilometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('landContext').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertSquareKilometerToAcre(squareKilometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareKilometers) && squareKilometers !== '') {
        const acres = squareKilometers * 247.105381467;
        document.getElementById('acreInput').value = acres.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${squareKilometers} km² = ${acres.toFixed(6)} acres</strong>
        `;
        
        // Add land use context
        let landText = '';
        if (squareKilometers >= 200) {
            landText = 'Large metropolitan area or county';
        } else if (squareKilometers >= 50) {
            landText = 'City or large municipal area';
        } else if (squareKilometers >= 10) {
            landText = 'Town or large development area';
        } else if (squareKilometers >= 1) {
            landText = 'Large agricultural or commercial area';
        } else if (squareKilometers >= 0.1) {
            landText = 'Medium farm or subdivision';
        } else if (squareKilometers > 0) {
            landText = 'Small property or residential area';
        }
        
        document.getElementById('landContext').innerHTML = landText;
    } else {
        document.getElementById('acreInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('landContext').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('acreInput').value = '';
    document.getElementById('squareKilometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('landContext').innerHTML = '';
}

function swapValues() {
    const acreValue = document.getElementById('acreInput').value;
    const squareKilometerValue = document.getElementById('squareKilometerInput').value;
    
    document.getElementById('acreInput').value = squareKilometerValue;
    document.getElementById('squareKilometerInput').value = acreValue;
    
    if (squareKilometerValue) {
        convertAcreToSquareKilometer(parseFloat(squareKilometerValue));
    } else if (acreValue) {
        convertSquareKilometerToAcre(parseFloat(acreValue));
    }
}

// Add event listeners
document.getElementById('acreInput').addEventListener('input', function() {
    convertAcreToSquareKilometer(parseFloat(this.value));
});

document.getElementById('squareKilometerInput').addEventListener('input', function() {
    convertSquareKilometerToAcre(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
