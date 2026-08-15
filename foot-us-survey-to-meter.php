<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Foot US Survey to Meter Converter 2026 - ft US to m Calculator | Thiyagi</title>
<meta name="description" content="Free online Foot US Survey to Meter converter 2026. Convert ft US to m and m to ft US instantly with accurate surveying conversion.">
<meta name="keywords" content="foot us survey to meter converter 2026, ft us to m, surveying measurement, geodetic conversion, land measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Foot US Survey to Meter Converter 2026 - ft US to m Calculator">
<meta property="og:description" content="Free online Foot US Survey to Meter converter 2026. Convert ft US to m and m to ft US instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/foot-us-survey-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Foot US Survey to Meter Converter 2026 - ft US to m Calculator">
<meta property="twitter:description" content="Free online Foot US Survey to Meter converter 2026. Convert ft US to m and m to ft US instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-map-marked-alt text-green-600 mr-3"></i>
                Foot US Survey to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US Survey feet and meters for precise surveying, geodetic measurements, and property mapping applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Foot US Survey Input -->
                <div class="space-y-4">
                    <label for="ftUsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-combined text-green-600 mr-2"></i>Foot US Survey (ft US)
                    </label>
                    <input
                        type="number"
                        id="ftUsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter feet US survey"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft US = 0.3048006 m
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-h text-emerald-600 mr-2"></i>Meters (m)
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
                        1 m = 3.28084 ft US
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
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
            <!-- Surveying Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Surveying Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Feet US Survey</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.3048006 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.048006 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">30.48006 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">304.8006 m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,280 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,609.347 m</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 ft US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,048.006 m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Land Surveying Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-compass text-green-600 mr-3"></i>Land Surveying Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Property Surveying:</strong><br>
                        • Lot boundaries: 50-500 ft US<br>
                        • Property lines: 100-1,000 ft US<br>
                        • Section lines: 5,280 ft US (1 mile)<br>
                        • Township grid: 36 square miles
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Engineering Projects:</strong><br>
                        • Road construction: measured in ft US<br>
                        • Pipeline layout: continuous ft US<br>
                        • Utility mapping: precise ft US<br>
                        • Site development: detailed ft US
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Precision Differences:</strong><br>
                        • US Survey foot: 1200/3937 m<br>
                        • International foot: 0.3048 m exactly<br>
                        • Difference: 2 parts per million<br>
                        • Critical for large-scale surveys
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Survey Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US Survey Foot:</strong> 1200/3937 meters</li>
                    <li><strong>Meter:</strong> SI base unit</li>
                    <li><strong>Conversion:</strong> 1 ft US = 0.3048006096 m</li>
                    <li><strong>Precision:</strong> Higher accuracy needed</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>ft US for US land surveys</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>m for international projects</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Precision critical for large areas</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Legal requirement compliance</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Surveying:</strong> Property boundaries</li>
                    <li><strong>Construction:</strong> Site layout</li>
                    <li><strong>Mapping:</strong> Geodetic control</li>
                    <li><strong>Legal:</strong> Land records</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertFtUsToMeter(ftUs) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ftUs) && ftUs !== '') {
        // 1 US Survey foot = 1200/3937 meters = 0.3048006096012192 meters
        const meter = ftUs * 0.3048006096012192;
        document.getElementById('meterInput').value = meter.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${ftUs.toLocaleString()} ft US = ${meter.toFixed(8)} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterToFtUs(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 meter = 3937/1200 US Survey feet = 3.2808398950131235 feet
        const ftUs = meter * 3.2808398950131235;
        document.getElementById('ftUsInput').value = ftUs.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${meter} m = ${ftUs.toFixed(8)} ft US</strong>
        `;
    } else {
        document.getElementById('ftUsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ftUsInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ftUsValue = document.getElementById('ftUsInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('ftUsInput').value = meterValue;
    document.getElementById('meterInput').value = ftUsValue;
    
    if (meterValue) {
        convertFtUsToMeter(parseFloat(meterValue));
    } else if (ftUsValue) {
        convertMeterToFtUs(parseFloat(ftUsValue));
    }
}

// Add event listeners
document.getElementById('ftUsInput').addEventListener('input', function() {
    convertFtUsToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToFtUs(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
