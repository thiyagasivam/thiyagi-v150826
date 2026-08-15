<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter Hour to Meter Second Converter 2026 - m/h to m/s Calculator | Thiyagi</title>
<meta name="description" content="Free online Meter Hour to Meter Second converter 2026. Convert m/h to m/s and m/s to m/h instantly with accurate velocity conversion.">
<meta name="keywords" content="meter hour to meter second converter 2026, m/h to m/s, velocity converter, speed units, motion analysis">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter Hour to Meter Second Converter 2026 - m/h to m/s Calculator">
<meta property="og:description" content="Free online Meter Hour to Meter Second converter 2026. Convert m/h to m/s and m/s to m/h instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-hour-to-meter-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter Hour to Meter Second Converter 2026 - m/h to m/s Calculator">
<meta property="twitter:description" content="Free online Meter Hour to Meter Second converter 2026. Convert m/h to m/s and m/s to m/h instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-purple-600 mr-3"></i>
                Meter Hour to Meter Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between meters per hour and meters per second for velocity calculations, speed analysis, and motion studies
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meter Hour Input -->
                <div class="space-y-4">
                    <label for="meterHourInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-clock text-purple-600 mr-2"></i>Meters per Hour (m/h)
                    </label>
                    <input
                        type="number"
                        id="meterHourInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter m/h"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m/h = 0.000278 m/s
                    </div>
                </div>

                <!-- Meter Second Input -->
                <div class="space-y-4">
                    <label for="meterSecondInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-indigo-600 mr-2"></i>Meters per Second (m/s)
                    </label>
                    <input
                        type="number"
                        id="meterSecondInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter m/s"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m/s = 3,600 m/h
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
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
            <!-- Velocity Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Velocity Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">m/h</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">m/s</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.000278 m/s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0278 m/s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.278 m/s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3,600 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 m/s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">18,000 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 m/s</td>
                            </tr>
                            <tr>
                                <td class="py-2">36,000 m/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 m/s</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Motion Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-running text-purple-600 mr-3"></i>Motion Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Very Slow Motion:</strong><br>
                        • Glacier movement: 1-10 m/h<br>
                        • Plant growth: 0.1-1 m/h<br>
                        • Tectonic plates: 0.001-0.1 m/h<br>
                        • Stalactite formation: 0.0001 m/h
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Slow Processes:</strong><br>
                        • Snail crawling: 36 m/h (0.01 m/s)<br>
                        • Tortoise walking: 720 m/h (0.2 m/s)<br>
                        • Tree sap flow: 100-1,000 m/h<br>
                        • Groundwater flow: 10-100 m/h
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Moderate Speeds:</strong><br>
                        • Human walking: 18,000 m/h (5 m/s)<br>
                        • Bicycle riding: 54,000 m/h (15 m/s)<br>
                        • River current: 3,600-14,400 m/h<br>
                        • Wind speed: 7,200-72,000 m/h
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Velocity Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>m/h:</strong> Distance per hour</li>
                    <li><strong>m/s:</strong> SI unit of velocity</li>
                    <li><strong>Conversion:</strong> 1 m/s = 3,600 m/h</li>
                    <li><strong>Formula:</strong> v = d / t</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>m/h for slow processes</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>m/s for scientific work</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Large time scale difference</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Physics calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Geology:</strong> Tectonic movement</li>
                    <li><strong>Biology:</strong> Growth rates</li>
                    <li><strong>Physics:</strong> Motion analysis</li>
                    <li><strong>Engineering:</strong> Process speeds</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMeterHourToMeterSecond(mh) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mh) && mh !== '') {
        // 1 m/h = 1/3600 m/s
        const ms = mh / 3600;
        document.getElementById('meterSecondInput').value = ms.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${mh.toLocaleString()} m/h = ${ms.toFixed(8)} m/s</strong>
        `;
    } else {
        document.getElementById('meterSecondInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterSecondToMeterHour(ms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ms) && ms !== '') {
        // 1 m/s = 3600 m/h
        const mh = ms * 3600;
        document.getElementById('meterHourInput').value = mh;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${ms} m/s = ${mh.toLocaleString()} m/h</strong>
        `;
    } else {
        document.getElementById('meterHourInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('meterHourInput').value = '';
    document.getElementById('meterSecondInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mhValue = document.getElementById('meterHourInput').value;
    const msValue = document.getElementById('meterSecondInput').value;
    
    document.getElementById('meterHourInput').value = msValue;
    document.getElementById('meterSecondInput').value = mhValue;
    
    if (msValue) {
        convertMeterHourToMeterSecond(parseFloat(msValue));
    } else if (mhValue) {
        convertMeterSecondToMeterHour(parseFloat(mhValue));
    }
}

// Add event listeners
document.getElementById('meterHourInput').addEventListener('input', function() {
    convertMeterHourToMeterSecond(parseFloat(this.value));
});

document.getElementById('meterSecondInput').addEventListener('input', function() {
    convertMeterSecondToMeterHour(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
