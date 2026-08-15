<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Decimeter to Meter Converter 2026 - dm to m Calculator | Thiyagi</title>
<meta name="description" content="Free online Decimeter to Meter converter 2026. Convert dm to m and m to dm instantly with accurate metric length conversion.">
<meta name="keywords" content="decimeter to meter converter 2026, dm to m, metric converter, length units, measurement conversion, metric system">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Decimeter to Meter Converter 2026 - dm to m Calculator">
<meta property="og:description" content="Free online Decimeter to Meter converter 2026. Convert dm to m and m to dm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/decimeter-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Decimeter to Meter Converter 2026 - dm to m Calculator">
<meta property="twitter:description" content="Free online Decimeter to Meter converter 2026. Convert dm to m and m to dm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-lime-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-horizontal text-green-600 mr-3"></i>
                Decimeter to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between decimeters and meters for metric measurements, education, and scientific calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Decimeter Input -->
                <div class="space-y-4">
                    <label for="decimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-green-600 mr-2"></i>Decimeters (dm)
                    </label>
                    <input
                        type="number"
                        id="decimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter decimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 dm = 0.1 m
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-combined text-lime-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 10 dm
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
            <!-- Metric Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Metric Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Decimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 m</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 dm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Educational Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-graduation-cap text-green-600 mr-3"></i>Educational Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>School Measurements:</strong><br>
                        • Pencil length: 1.8 dm (0.18 m)<br>
                        • Notebook width: 2.1 dm (0.21 m)<br>
                        • Ruler length: 3 dm (0.3 m)<br>
                        • Desk height: 7.5 dm (0.75 m)
                    </div>
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Home Objects:</strong><br>
                        • Book thickness: 0.3 dm (0.03 m)<br>
                        • Laptop screen: 3.5 dm (0.35 m)<br>
                        • Kitchen counter: 6 dm (0.6 m)<br>
                        • Doorway width: 8 dm (0.8 m)
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Sports & Recreation:</strong><br>
                        • Tennis ball diameter: 0.65 dm (0.065 m)<br>
                        • Basketball diameter: 2.4 dm (0.24 m)<br>
                        • Golf club length: 11 dm (1.1 m)<br>
                        • Swimming lane: 25 dm (2.5 m)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Metric Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Decimeter:</strong> 1/10 of a meter</li>
                    <li><strong>Meter:</strong> SI base unit</li>
                    <li><strong>Conversion:</strong> 1 m = 10 dm</li>
                    <li><strong>Symbol:</strong> dm and m</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>dm for smaller objects</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>m for standard lengths</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Simple 10:1 ratio</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Educational friendly</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Education:</strong> Metric system learning</li>
                    <li><strong>Science:</strong> Laboratory measurements</li>
                    <li><strong>Design:</strong> Product dimensions</li>
                    <li><strong>Daily life:</strong> Object measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertDecimeterToMeter(decimeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(decimeter) && decimeter !== '') {
        // 1 dm = 0.1 m
        const meter = decimeter / 10;
        document.getElementById('meterInput').value = meter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${decimeter} dm = ${meter} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterToDecimeter(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 m = 10 dm
        const decimeter = meter * 10;
        document.getElementById('decimeterInput').value = decimeter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${meter} m = ${decimeter} dm</strong>
        `;
    } else {
        document.getElementById('decimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('decimeterInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const decimeterValue = document.getElementById('decimeterInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('decimeterInput').value = meterValue;
    document.getElementById('meterInput').value = decimeterValue;
    
    if (meterValue) {
        convertDecimeterToMeter(parseFloat(meterValue));
    } else if (decimeterValue) {
        convertMeterToDecimeter(parseFloat(decimeterValue));
    }
}

// Add event listeners
document.getElementById('decimeterInput').addEventListener('input', function() {
    convertDecimeterToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToDecimeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
