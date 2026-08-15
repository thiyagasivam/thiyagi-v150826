<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>BTU/h to MBH Converter 2026 - BTU per Hour to Thousand BTU per Hour Calculator | Thiyagi</title>
<meta name="description" content="Free online BTU/h to MBH converter 2026. Convert BTU per hour to thousand BTU per hour and MBH to BTU/h instantly with accurate heating conversion.">
<meta name="keywords" content="BTU/h to MBH converter 2026, BTU per hour to MBH, heating conversion, HVAC units, thermal energy calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="BTU/h to MBH Converter 2026 - BTU per Hour to Thousand BTU per Hour Calculator">
<meta property="og:description" content="Free online BTU/h to MBH converter 2026. Convert BTU per hour to thousand BTU per hour instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/btu-it-hour-to-mbh.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BTU/h to MBH Converter 2026 - BTU per Hour to Thousand BTU per Hour Calculator">
<meta property="twitter:description" content="Free online BTU/h to MBH converter 2026. Convert BTU per hour to thousand BTU per hour instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-pink-50 to-rose-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-red-600 mr-3"></i>
                BTU/h to MBH Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between BTU per hour (BTU/h) and thousand BTU per hour (MBH) for HVAC systems, heating calculations, and thermal energy applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- BTU/h Input -->
                <div class="space-y-4">
                    <label for="btuHourInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-red-600 mr-2"></i>BTU per Hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuHourInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter BTU per hour"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Individual unit thermal power
                    </div>
                </div>

                <!-- MBH Input -->
                <div class="space-y-4">
                    <label for="mbhInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-industry text-pink-600 mr-2"></i>Thousand BTU per Hour (MBH)
                    </label>
                    <input
                        type="number"
                        id="mbhInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter MBH"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Commercial/industrial thermal power
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-pink-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Thermal Power Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Thermal Power Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">BTU/h</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">MBH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 MBH</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 MBH</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 MBH</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 MBH</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 MBH</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 MBH</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HVAC Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-red-600 mr-3"></i>HVAC Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Residential Systems:</strong><br>
                        • Room heater: 5-50 MBH<br>
                        • Furnace: 40-120 MBH<br>
                        • Heat pump: 18-60 MBH<br>
                        • Water heater: 30-75 MBH
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Commercial Systems:</strong><br>
                        • Rooftop units: 50-500 MBH<br>
                        • Boilers: 100-10,000 MBH<br>
                        • Chillers: 50-2,000 MBH<br>
                        • Air handlers: 25-1,000 MBH
                    </div>
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Industrial Applications:</strong><br>
                        • Process heating: 500-50,000 MBH<br>
                        • Steam generation: 1,000-100,000 MBH<br>
                        • Industrial ovens: 100-10,000 MBH<br>
                        • Dryers: 200-5,000 MBH
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-red-600 mr-2"></i>Thermal Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>BTU/h:</strong> Individual unit power</li>
                    <li><strong>MBH:</strong> 1,000 BTU/h</li>
                    <li><strong>Conversion:</strong> 1 MBH = 1,000 BTU/h</li>
                    <li><strong>Also written:</strong> MBTUH, kBTU/h</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>BTU/h for small units</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>MBH for large systems</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Check equipment specs</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Consider efficiency ratings</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> System sizing</li>
                    <li><strong>Industrial:</strong> Process design</li>
                    <li><strong>Energy:</strong> Load calculations</li>
                    <li><strong>Consulting:</strong> Building analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBtuHourToMbh(btuHour) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(btuHour) && btuHour !== '') {
        // 1,000 BTU/h = 1 MBH
        const mbh = btuHour / 1000;
        document.getElementById('mbhInput').value = mbh.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${btuHour.toLocaleString()} BTU/h = ${mbh.toFixed(3)} MBH</strong>
        `;
    } else {
        document.getElementById('mbhInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMbhToBtuHour(mbh) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mbh) && mbh !== '') {
        // 1 MBH = 1,000 BTU/h
        const btuHour = mbh * 1000;
        document.getElementById('btuHourInput').value = btuHour;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${mbh} MBH = ${btuHour.toLocaleString()} BTU/h</strong>
        `;
    } else {
        document.getElementById('btuHourInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('btuHourInput').value = '';
    document.getElementById('mbhInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const btuHourValue = document.getElementById('btuHourInput').value;
    const mbhValue = document.getElementById('mbhInput').value;
    
    document.getElementById('btuHourInput').value = mbhValue;
    document.getElementById('mbhInput').value = btuHourValue;
    
    if (mbhValue) {
        convertBtuHourToMbh(parseFloat(mbhValue));
    } else if (btuHourValue) {
        convertMbhToBtuHour(parseFloat(btuHourValue));
    }
}

// Add event listeners
document.getElementById('btuHourInput').addEventListener('input', function() {
    convertBtuHourToMbh(parseFloat(this.value));
});

document.getElementById('mbhInput').addEventListener('input', function() {
    convertMbhToBtuHour(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
