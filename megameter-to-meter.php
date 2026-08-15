<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megameter to Meter Converter 2026 - Mm to m Calculator | Thiyagi</title>
<meta name="description" content="Free online Megameter to Meter converter 2026. Convert Mm to m and m to Mm instantly with accurate large distance conversion for geographic measurements.">
<meta name="keywords" content="megameter to meter converter 2026, Mm to m, large distance converter, geographic distance, metric length units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megameter to Meter Converter 2026 - Mm to m Calculator">
<meta property="og:description" content="Free online Megameter to Meter converter 2026. Convert Mm to m and m to Mm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megameter-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megameter to Meter Converter 2026 - Mm to m Calculator">
<meta name="twitter:description" content="Free online Megameter to Meter converter 2026. Convert Mm to m and m to Mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-globe text-purple-600 mr-3"></i>
                Megameter to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megameters and meters for large-scale geographic and astronomical distance measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megameter Input -->
                <div class="space-y-4">
                    <label for="megameterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-mountain text-purple-600 mr-2"></i>Megameter (Mm)
                    </label>
                    <input
                        type="number"
                        id="megameterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter megameters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Mm = 1,000,000 m
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-violet-600 mr-2"></i>Meter (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 0.000001 Mm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Geographic Distance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Geographic Distance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Megameters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.0 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10.0 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 m</td>
                            </tr>
                            <tr>
                                <td class="py-2">100.0 Mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Distance Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-earth-americas text-purple-600 mr-3"></i>Real-World Distance Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Earth Distances:</strong><br>
                        • Earth radius: ~6.37 Mm (6,370 km)<br>
                        • Earth diameter: ~12.74 Mm (12,740 km)<br>
                        • Earth circumference: ~40.08 Mm (40,080 km)<br>
                        • Continental distance: 1-20 Mm
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Astronomical Distances:</strong><br>
                        • Moon distance: ~384.4 Mm (384,400 km)<br>
                        • Sun distance: ~149,600 Mm (149.6 million km)<br>
                        • Mars (closest): ~54,600 Mm<br>
                        • Venus (closest): ~25,000 Mm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Transportation & Infrastructure:</strong><br>
                        • Trans-continental railways: 5-10 Mm<br>
                        • Ocean cables: 10-25 Mm<br>
                        • Flight routes: 1-20 Mm<br>
                        • Satellite orbits: 0.2-36 Mm altitude
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Metric Length System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Megameter:</strong> 10⁶ meters</li>
                    <li><strong>Meter:</strong> SI base unit</li>
                    <li><strong>Conversion:</strong> 1 Mm = 1,000,000 m</li>
                    <li><strong>Symbol:</strong> Mm (megameter), m (meter)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Distance Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Megameters for large-scale distances</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Meters for everyday measurements</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Consider Earth's curvature</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use GPS for accuracy</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Geography:</strong> Continental measurements</li>
                    <li><strong>Astronomy:</strong> Planetary distances</li>
                    <li><strong>Transportation:</strong> Route planning</li>
                    <li><strong>Telecommunications:</strong> Cable distances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMegameterToMeter(megameters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megameters) && megameters !== '') {
        const meters = megameters * 1000000;
        document.getElementById('meterInput').value = meters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${megameters} Mm = ${meters.toFixed(6)} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterToMegameter(meters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meters) && meters !== '') {
        const megameters = meters / 1000000;
        document.getElementById('megameterInput').value = megameters.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${meters} m = ${megameters.toFixed(8)} Mm</strong>
        `;
    } else {
        document.getElementById('megameterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megameterInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const megameterValue = document.getElementById('megameterInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('megameterInput').value = meterValue;
    document.getElementById('meterInput').value = megameterValue;
    
    if (meterValue) {
        convertMegameterToMeter(parseFloat(meterValue));
    } else if (megameterValue) {
        convertMeterToMegameter(parseFloat(megameterValue));
    }
}

// Add event listeners
document.getElementById('megameterInput').addEventListener('input', function() {
    convertMegameterToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToMegameter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
