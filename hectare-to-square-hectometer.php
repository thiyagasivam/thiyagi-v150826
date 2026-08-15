<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Hectare to Square Hectometer Converter 2026 - ha to hm² Calculator | Thiyagi</title>
<meta name="description" content="Free online Hectare to Square Hectometer converter 2026. Convert ha to hm² and hm² to ha instantly with accurate area conversion for land measurement.">
<meta name="keywords" content="hectare to square hectometer converter 2026, ha to hm², area converter, land measurement, agricultural area, metric area units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Hectare to Square Hectometer Converter 2026 - ha to hm² Calculator">
<meta property="og:description" content="Free online Hectare to Square Hectometer converter 2026. Convert ha to hm² and hm² to ha instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/hectare-to-square-hectometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Hectare to Square Hectometer Converter 2026 - ha to hm² Calculator">
<meta name="twitter:description" content="Free online Hectare to Square Hectometer converter 2026. Convert ha to hm² and hm² to ha instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-lime-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-map text-green-600 mr-3"></i>
                Hectare to Square Hectometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between hectares and square hectometers for land area measurements, agricultural planning, and metric area calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Hectare Input -->
                <div class="space-y-4">
                    <label for="hectareInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-seedling text-green-600 mr-2"></i>Hectare (ha)
                    </label>
                    <input
                        type="number"
                        id="hectareInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter hectares"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ha = 0.01 hm²
                    </div>
                </div>

                <!-- Square Hectometer Input -->
                <div class="space-y-4">
                    <label for="hectometerSquareInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-square text-lime-600 mr-2"></i>Square Hectometer (hm²)
                    </label>
                    <input
                        type="number"
                        id="hectometerSquareInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter square hectometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 hm² = 100 ha
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-lime-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Area Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Area Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Hectare</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Square Hectometer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 hm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 hm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 hm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 hm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 hm²</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 ha</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 hm²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Land Area Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tractor text-green-600 mr-3"></i>Land Area Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Agricultural Areas:</strong><br>
                        • Small farm: 1-10 ha (0.01-0.1 hm²)<br>
                        • Medium farm: 50-200 ha (0.5-2 hm²)<br>
                        • Large farm: 500-2000 ha (5-20 hm²)<br>
                        • Agricultural district: 10,000+ ha (100+ hm²)
                    </div>
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Forest & Conservation:</strong><br>
                        • Small woodland: 5-25 ha (0.05-0.25 hm²)<br>
                        • National park: 1,000-100,000 ha<br>
                        • Forest reserve: 10,000+ ha (100+ hm²)<br>
                        • Protected area: Variable sizes
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Urban Planning:</strong><br>
                        • City block: 0.1-1 ha (0.001-0.01 hm²)<br>
                        • Neighborhood: 50-500 ha (0.5-5 hm²)<br>
                        • City district: 1,000+ ha (10+ hm²)<br>
                        • Metropolitan area: 10,000+ ha
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
                    <li><strong>Hectare (ha):</strong> 10,000 m²</li>
                    <li><strong>Square Hectometer:</strong> 100 × 100 m</li>
                    <li><strong>Relationship:</strong> 1 hm² = 100 ha</li>
                    <li><strong>Standard:</strong> Metric system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Hectare more common in practice</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Square hectometer for large areas</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Used in agriculture and forestry</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Standard in metric countries</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Agriculture:</strong> Farm planning</li>
                    <li><strong>Forestry:</strong> Woodland management</li>
                    <li><strong>Real Estate:</strong> Land development</li>
                    <li><strong>Conservation:</strong> Protected areas</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertHectareToSquareHectometer(hectares) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(hectares) && hectares !== '') {
        const squareHectometers = hectares / 100;
        document.getElementById('hectometerSquareInput').value = squareHectometers.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${hectares} ha = ${squareHectometers.toFixed(6)} hm²</strong>
        `;
    } else {
        document.getElementById('hectometerSquareInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertSquareHectometerToHectare(squareHectometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareHectometers) && squareHectometers !== '') {
        const hectares = squareHectometers * 100;
        document.getElementById('hectareInput').value = hectares.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${squareHectometers} hm² = ${hectares.toFixed(3)} ha</strong>
        `;
    } else {
        document.getElementById('hectareInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('hectareInput').value = '';
    document.getElementById('hectometerSquareInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const hectareValue = document.getElementById('hectareInput').value;
    const hmSquareValue = document.getElementById('hectometerSquareInput').value;
    
    document.getElementById('hectareInput').value = hmSquareValue;
    document.getElementById('hectometerSquareInput').value = hectareValue;
    
    if (hmSquareValue) {
        convertHectareToSquareHectometer(parseFloat(hmSquareValue));
    } else if (hectareValue) {
        convertSquareHectometerToHectare(parseFloat(hectareValue));
    }
}

// Add event listeners
document.getElementById('hectareInput').addEventListener('input', function() {
    convertHectareToSquareHectometer(parseFloat(this.value));
});

document.getElementById('hectometerSquareInput').addEventListener('input', function() {
    convertSquareHectometerToHectare(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
