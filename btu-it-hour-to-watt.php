<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>BTU IT per Hour to Watt Converter 2026 - BTU/h to W Calculator | Thiyagi</title>
<meta name="description" content="Free online BTU IT per Hour to Watt converter 2026. Convert BTU/h to W and W to BTU/h instantly with accurate power conversion for HVAC and energy systems.">
<meta name="keywords" content="BTU per hour to watt converter 2026, BTU/h to W, power converter, HVAC power, energy conversion, heating cooling">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="BTU IT per Hour to Watt Converter 2026 - BTU/h to W Calculator">
<meta property="og:description" content="Free online BTU IT per Hour to Watt converter 2026. Convert BTU/h to W and W to BTU/h instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/btu-it-hour-to-watt.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BTU IT per Hour to Watt Converter 2026 - BTU/h to W Calculator">
<meta name="twitter:description" content="Free online BTU IT per Hour to Watt converter 2026. Convert BTU/h to W and W to BTU/h instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-red-50 to-pink-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-orange-600 mr-3"></i>
                BTU IT per Hour to Watt Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between BTU IT per hour and watts for HVAC, energy systems, and power calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- BTU/h Input -->
                <div class="space-y-4">
                    <label for="btuInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-orange-600 mr-2"></i>BTU IT per Hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter BTU per hour"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 BTU/h = 0.293071 W
                    </div>
                </div>

                <!-- Watt Input -->
                <div class="space-y-4">
                    <label for="wattInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-bolt text-red-600 mr-2"></i>Watt (W)
                    </label>
                    <input
                        type="number"
                        id="wattInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter watts"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 W = 3.41214 BTU/h
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- HVAC Power Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>HVAC Power Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">BTU/h</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Watts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">293.1 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,465.4 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,930.7 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,516.9 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">24,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">7,033.7 W</td>
                            </tr>
                            <tr>
                                <td class="py-2">36,000 BTU/h</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,550.6 W</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HVAC & Energy Systems -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-orange-600 mr-3"></i>HVAC & Energy Systems
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Air Conditioning Units:</strong><br>
                        • Window AC: 5,000-12,000 BTU/h (1.5-3.5 kW)<br>
                        • Central AC: 18,000-60,000 BTU/h (5-18 kW)<br>
                        • Mini-split: 9,000-36,000 BTU/h (2.6-10.6 kW)<br>
                        • Commercial units: 60,000+ BTU/h (18+ kW)
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Heating Systems:</strong><br>
                        • Space heater: 3,000-15,000 BTU/h (0.9-4.4 kW)<br>
                        • Furnace: 40,000-120,000 BTU/h (12-35 kW)<br>
                        • Heat pump: 15,000-60,000 BTU/h (4.4-18 kW)<br>
                        • Boiler: 50,000-200,000 BTU/h (15-59 kW)
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Energy Efficiency:</strong><br>
                        • SEER rating: BTU/h per watt input<br>
                        • EER: instantaneous efficiency<br>
                        • COP: coefficient of performance<br>
                        • Energy Star requirements: specific ratios
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Power Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>BTU/h:</strong> British Thermal Unit per hour</li>
                    <li><strong>Watt:</strong> SI unit of power</li>
                    <li><strong>Conversion:</strong> 1 BTU/h = 0.293071 W</li>
                    <li><strong>Definition:</strong> Rate of energy transfer</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Energy Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>BTU/h for HVAC specifications</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Watts for electrical calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Consider efficiency ratings</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Account for seasonal variations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> System sizing and efficiency</li>
                    <li><strong>Energy:</strong> Power consumption analysis</li>
                    <li><strong>Building:</strong> Load calculations</li>
                    <li><strong>Industrial:</strong> Process heating/cooling</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBTUToWatt(btu) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(btu) && btu !== '') {
        const watts = btu * 0.293071;
        document.getElementById('wattInput').value = watts.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${btu} BTU/h = ${watts.toFixed(6)} W</strong>
        `;
    } else {
        document.getElementById('wattInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertWattToBTU(watts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(watts) && watts !== '') {
        const btu = watts / 0.293071;
        document.getElementById('btuInput').value = btu.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${watts} W = ${btu.toFixed(6)} BTU/h</strong>
        `;
    } else {
        document.getElementById('btuInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('btuInput').value = '';
    document.getElementById('wattInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const btuValue = document.getElementById('btuInput').value;
    const wattValue = document.getElementById('wattInput').value;
    
    document.getElementById('btuInput').value = wattValue;
    document.getElementById('wattInput').value = btuValue;
    
    if (wattValue) {
        convertBTUToWatt(parseFloat(wattValue));
    } else if (btuValue) {
        convertWattToBTU(parseFloat(btuValue));
    }
}

// Add event listeners
document.getElementById('btuInput').addEventListener('input', function() {
    convertBTUToWatt(parseFloat(this.value));
});

document.getElementById('wattInput').addEventListener('input', function() {
    convertWattToBTU(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
