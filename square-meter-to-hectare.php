<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Meter to Hectare Converter 2026 - m² to hectare Calculator | Thiyagi</title>
<meta name="description" content="Free online Square Meter to Hectare converter 2026. Convert m² to hectare and hectare to m² instantly with accurate area conversion.">
<meta name="keywords" content="square meter to hectare converter 2026, m² to hectare, area converter, land measurement, metric area">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Meter to Hectare Converter 2026 - m² to hectare Calculator">
<meta property="og:description" content="Free online Square Meter to Hectare converter 2026. Convert m² to hectare and hectare to m² instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-meter-to-hectare.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Meter to Hectare Converter 2026 - m² to hectare Calculator">
<meta name="twitter:description" content="Free online Square Meter to Hectare converter 2026. Convert m² to hectare and hectare to m² instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-lime-50 via-green-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-vector-square text-lime-600 mr-3"></i>
                Square Meter to Hectare Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between square meters and hectares for land measurement and area calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Meter Input -->
                <div class="space-y-4">
                    <label for="squareMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-square text-lime-600 mr-2"></i>Square Meter (m²)
                    </label>
                    <input
                        type="number"
                        id="squareMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter square meters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 m² = 0.0001 hectare
                    </div>
                </div>

                <!-- Hectare Input -->
                <div class="space-y-4">
                    <label for="hectareInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-map text-green-600 mr-2"></i>Hectare (ha)
                    </label>
                    <input
                        type="number"
                        id="hectareInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter hectares"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 hectare = 10,000 m²
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-lime-50 to-green-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-lime-500 hover:bg-lime-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-lime-600 mr-3"></i>Land Area Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Square Meters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Hectares</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 ha</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2,500 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.25 ha</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 ha</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 ha</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25,000 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 ha</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 ha</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real Estate & Agriculture -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-seedling text-lime-600 mr-3"></i>Real Estate & Agriculture Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Residential Properties:</strong><br>
                        • Small house lot: 400-800 m² (0.04-0.08 ha)<br>
                        • Large house lot: 1,000-2,000 m² (0.1-0.2 ha)<br>
                        • Suburban development: 5-50 ha<br>
                        • City block: 1-4 ha
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Agricultural Land:</strong><br>
                        • Small farm plot: 1-5 ha (10,000-50,000 m²)<br>
                        • Family farm: 10-100 ha<br>
                        • Commercial farm: 100-1,000 ha<br>
                        • Ranch: 1,000+ ha
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Public Spaces:</strong><br>
                        • Soccer field: 7,140 m² (0.714 ha)<br>
                        • City park: 5-20 ha<br>
                        • Shopping mall: 10-50 ha<br>
                        • University campus: 50-500 ha
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-lime-600 mr-2"></i>Metric Area System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Square Meter:</strong> SI base area unit</li>
                    <li><strong>Hectare:</strong> 10,000 square meters</li>
                    <li><strong>Symbol:</strong> ha (hectare), m² (square meter)</li>
                    <li><strong>Conversion:</strong> 1 ha = 10,000 m² exactly</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-lime-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Use hectares for large areas</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Use m² for small properties</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Consider irregular shapes</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Account for usable vs total area</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-lime-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Real Estate:</strong> Property measurement</li>
                    <li><strong>Agriculture:</strong> Farm land calculation</li>
                    <li><strong>Urban Planning:</strong> Development areas</li>
                    <li><strong>Environmental:</strong> Conservation zones</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertSquareMeterToHectare(squareMeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareMeters) && squareMeters !== '') {
        const hectares = squareMeters / 10000;
        document.getElementById('hectareInput').value = hectares.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${squareMeters} m² = ${hectares.toFixed(8)} hectare</strong>
        `;
    } else {
        document.getElementById('hectareInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertHectareToSquareMeter(hectares) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(hectares) && hectares !== '') {
        const squareMeters = hectares * 10000;
        document.getElementById('squareMeterInput').value = squareMeters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${hectares} hectare = ${squareMeters.toFixed(6)} m²</strong>
        `;
    } else {
        document.getElementById('squareMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('squareMeterInput').value = '';
    document.getElementById('hectareInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const squareMeterValue = document.getElementById('squareMeterInput').value;
    const hectareValue = document.getElementById('hectareInput').value;
    
    document.getElementById('squareMeterInput').value = hectareValue;
    document.getElementById('hectareInput').value = squareMeterValue;
    
    if (hectareValue) {
        convertSquareMeterToHectare(parseFloat(hectareValue));
    } else if (squareMeterValue) {
        convertHectareToSquareMeter(parseFloat(squareMeterValue));
    }
}

// Add event listeners
document.getElementById('squareMeterInput').addEventListener('input', function() {
    convertSquareMeterToHectare(parseFloat(this.value));
});

document.getElementById('hectareInput').addEventListener('input', function() {
    convertHectareToSquareMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
