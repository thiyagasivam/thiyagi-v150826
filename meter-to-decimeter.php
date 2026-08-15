<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter to Decimeter Converter 2026 - m to dm Calculator | Thiyagi</title>
<meta name="description" content="Free online Meter to Decimeter converter 2026. Convert m to dm and dm to m instantly with accurate length conversion.">
<meta name="keywords" content="meter to decimeter converter 2026, m to dm, length converter, metric system, distance measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter to Decimeter Converter 2026 - m to dm Calculator">
<meta property="og:description" content="Free online Meter to Decimeter converter 2026. Convert m to dm and dm to m instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-to-decimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter to Decimeter Converter 2026 - m to dm Calculator">
<meta property="twitter:description" content="Free online Meter to Decimeter converter 2026. Convert m to dm and dm to m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler text-blue-600 mr-3"></i>
                Meter to Decimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between meters and decimeters for length measurements, construction projects, and metric system calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-h text-blue-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 10 dm
                    </div>
                </div>

                <!-- Decimeter Input -->
                <div class="space-y-4">
                    <label for="decimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-horizontal text-indigo-600 mr-2"></i>Decimeters (dm)
                    </label>
                    <input
                        type="number"
                        id="decimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter decimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 dm = 0.1 m
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
            <!-- Common Length Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Common Length Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Meters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Decimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 dm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 dm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 dm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">20 dm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 dm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 dm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-blue-600 mr-3"></i>Real-World Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Everyday Objects (dm):</strong><br>
                        • Book width: 2-3 dm<br>
                        • Laptop screen: 3-4 dm<br>
                        • Desk height: 7-8 dm<br>
                        • Door width: 8-9 dm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Room Dimensions (m):</strong><br>
                        • Room height: 2.4-3 m (24-30 dm)<br>
                        • Bedroom: 3-4 m (30-40 dm)<br>
                        • Living room: 4-6 m (40-60 dm)<br>
                        • Garage: 6-8 m (60-80 dm)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Construction Uses:</strong><br>
                        • Tile spacing: 1-2 dm apart<br>
                        • Wall thickness: 1-3 dm<br>
                        • Window height: 10-15 dm<br>
                        • Ceiling height: 24-30 dm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Metric Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Meter:</strong> SI base unit of length</li>
                    <li><strong>Decimeter:</strong> 0.1 meters</li>
                    <li><strong>Conversion:</strong> 1 m = 10 dm</li>
                    <li><strong>Symbol:</strong> m (meter), dm (decimeter)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>dm for medium objects</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>m for room dimensions</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Easy 10:1 ratio</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Standard metric system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Construction:</strong> Building measurements</li>
                    <li><strong>Education:</strong> Math and science</li>
                    <li><strong>Manufacturing:</strong> Product dimensions</li>
                    <li><strong>Design:</strong> Furniture and space planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMeterToDecimeter(meters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meters) && meters !== '') {
        // 1 meter = 10 decimeters
        const decimeters = meters * 10;
        document.getElementById('decimeterInput').value = decimeters;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${meters} m = ${decimeters} dm</strong>
        `;
    } else {
        document.getElementById('decimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertDecimeterToMeter(decimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(decimeters) && decimeters !== '') {
        // 1 decimeter = 0.1 meters
        const meters = decimeters / 10;
        document.getElementById('meterInput').value = meters;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${decimeters} dm = ${meters} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('meterInput').value = '';
    document.getElementById('decimeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const meterValue = document.getElementById('meterInput').value;
    const decimeterValue = document.getElementById('decimeterInput').value;
    
    document.getElementById('meterInput').value = decimeterValue;
    document.getElementById('decimeterInput').value = meterValue;
    
    if (decimeterValue) {
        convertMeterToDecimeter(parseFloat(decimeterValue));
    } else if (meterValue) {
        convertDecimeterToMeter(parseFloat(meterValue));
    }
}

// Add event listeners
document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToDecimeter(parseFloat(this.value));
});

document.getElementById('decimeterInput').addEventListener('input', function() {
    convertDecimeterToMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
