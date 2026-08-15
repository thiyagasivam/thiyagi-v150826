<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Watt to BTU/IT Hour Converter 2026 - W to BTU/h Calculator | Thiyagi</title>
<meta name="description" content="Free online Watt to BTU/IT Hour converter 2026. Convert W to BTU/h and BTU/h to W instantly with accurate power conversion for HVAC and energy systems.">
<meta name="keywords" content="watt to btu hour converter 2026, W to BTU/h, power converter, HVAC calculations, energy conversion, thermal power">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Watt to BTU/IT Hour Converter 2026 - W to BTU/h Calculator">
<meta property="og:description" content="Free online Watt to BTU/IT Hour converter 2026. Convert W to BTU/h and BTU/h to W instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/watt-to-btu-it-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Watt to BTU/IT Hour Converter 2026 - W to BTU/h Calculator">
<meta name="twitter:description" content="Free online Watt to BTU/IT Hour converter 2026. Convert W to BTU/h and BTU/h to W instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-red-600 mr-3"></i>
                Watt to BTU/IT Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between watts and BTU per hour for HVAC systems, energy calculations, and thermal power measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Watt Input -->
                <div class="space-y-4">
                    <label for="wattInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-plug text-red-600 mr-2"></i>Watt (W)
                    </label>
                    <input
                        type="number"
                        id="wattInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter watts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 W = 3.412142 BTU/h
                    </div>
                </div>

                <!-- BTU/IT Hour Input -->
                <div class="space-y-4">
                    <label for="btuInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-fire text-orange-600 mr-2"></i>BTU/IT Hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter BTU per hour"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 BTU/h = 0.293071 W
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-orange-50 rounded-lg">
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
            <!-- Power Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Power Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Watt</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">BTU/IT Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">341.2 BTU/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,706 BTU/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,412 BTU/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,500 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,118 BTU/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3,000 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,237 BTU/h</td>
                            </tr>
                            <tr>
                                <td class="py-2">5,000 W</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">17,061 BTU/h</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HVAC Power Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-thermometer-half text-red-600 mr-3"></i>HVAC Power Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Small Appliances (W):</strong><br>
                        • LED light bulb: 10-20 W<br>
                        • Laptop computer: 50-100 W<br>
                        • Hair dryer: 1,200-1,800 W<br>
                        • Microwave: 700-1,200 W
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>HVAC Equipment (BTU/h):</strong><br>
                        • Window AC: 5,000-24,000 BTU/h<br>
                        • Central AC: 24,000-60,000 BTU/h<br>
                        • Heat pump: 18,000-60,000 BTU/h<br>
                        • Furnace: 40,000-120,000 BTU/h
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Large Systems (high BTU/h):</strong><br>
                        • Commercial AC: 50,000-500,000 BTU/h<br>
                        • Industrial chiller: 100,000-2M BTU/h<br>
                        • Building heating: 200,000-1M BTU/h<br>
                        • Power plant: 1B+ BTU/h
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-red-600 mr-2"></i>Power Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Watt:</strong> SI unit of power</li>
                    <li><strong>BTU/h:</strong> British Thermal Unit per hour</li>
                    <li><strong>Conversion:</strong> 1 W = 3.412142 BTU/h</li>
                    <li><strong>BTU/IT:</strong> International Table BTU</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>HVAC Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>BTU/h common in HVAC</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Watts for electrical power</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Consider efficiency ratings</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Check load calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> System sizing</li>
                    <li><strong>Energy:</strong> Consumption analysis</li>
                    <li><strong>Engineering:</strong> Heat load calculations</li>
                    <li><strong>Building:</strong> Equipment selection</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertWattToBtu(watts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(watts) && watts !== '') {
        const btu = watts * 3.412142;
        document.getElementById('btuInput').value = btu.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${watts.toLocaleString()} W = ${btu.toLocaleString(undefined, {maximumFractionDigits: 2})} BTU/h</strong>
        `;
    } else {
        document.getElementById('btuInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertBtuToWatt(btu) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(btu) && btu !== '') {
        const watts = btu * 0.293071;
        document.getElementById('wattInput').value = watts.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${btu.toLocaleString()} BTU/h = ${watts.toLocaleString(undefined, {maximumFractionDigits: 2})} W</strong>
        `;
    } else {
        document.getElementById('wattInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('wattInput').value = '';
    document.getElementById('btuInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const wattValue = document.getElementById('wattInput').value;
    const btuValue = document.getElementById('btuInput').value;
    
    document.getElementById('wattInput').value = btuValue;
    document.getElementById('btuInput').value = wattValue;
    
    if (btuValue) {
        convertWattToBtu(parseFloat(btuValue));
    } else if (wattValue) {
        convertBtuToWatt(parseFloat(wattValue));
    }
}

// Add event listeners
document.getElementById('wattInput').addEventListener('input', function() {
    convertWattToBtu(parseFloat(this.value));
});

document.getElementById('btuInput').addEventListener('input', function() {
    convertBtuToWatt(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
