<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megawatt to Watt Converter 2026 - MW to W Calculator | Thiyagi</title>
<meta name="description" content="Free online Megawatt to Watt converter 2026. Convert MW to W and W to MW instantly with accurate power conversion for electrical systems.">
<meta name="keywords" content="megawatt to watt converter 2026, MW to W, power converter, electrical power, energy conversion, power plant capacity">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megawatt to Watt Converter 2026 - MW to W Calculator">
<meta property="og:description" content="Free online Megawatt to Watt converter 2026. Convert MW to W and W to MW instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megawatt-to-watt.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megawatt to Watt Converter 2026 - MW to W Calculator">
<meta name="twitter:description" content="Free online Megawatt to Watt converter 2026. Convert MW to W and W to MW instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Megawatt to Watt Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megawatts and watts for electrical power calculations, power plant capacity, and energy systems
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megawatt Input -->
                <div class="space-y-4">
                    <label for="megawattInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-industry text-yellow-600 mr-2"></i>Megawatt (MW)
                    </label>
                    <input
                        type="number"
                        id="megawattInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter megawatts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MW = 1,000,000 W
                    </div>
                </div>

                <!-- Watt Input -->
                <div class="space-y-4">
                    <label for="wattInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Watt (W)
                    </label>
                    <input
                        type="number"
                        id="wattInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter watts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 W = 0.000001 MW
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="powerContext" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Power Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Power Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Megawatts</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Watts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 W</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 MW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 W</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Power Generation & Consumption -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-plug text-yellow-600 mr-3"></i>Power Generation & Consumption
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Power Plants:</strong><br>
                        • Small wind turbine: 1-3 MW<br>
                        • Large wind turbine: 3-15 MW<br>
                        • Coal plant unit: 100-800 MW<br>
                        • Nuclear reactor: 1,000-1,650 MW
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Renewable Energy:</strong><br>
                        • Solar farm: 10-500 MW<br>
                        • Hydroelectric dam: 50-22,500 MW<br>
                        • Wind farm: 50-1,000 MW<br>
                        • Geothermal plant: 10-500 MW
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Consumption Examples:</strong><br>
                        • Small town: 10-50 MW<br>
                        • Medium city: 100-500 MW<br>
                        • Large city: 1,000-5,000 MW<br>
                        • Industrial complex: 50-500 MW
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-yellow-600 mr-2"></i>Power Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Megawatt:</strong> 1,000,000 watts</li>
                    <li><strong>Watt:</strong> SI unit of power</li>
                    <li><strong>Conversion:</strong> 1 MW = 10⁶ W</li>
                    <li><strong>Symbol:</strong> MW and W</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Power Tips</                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Use MW for large-scale power</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Use W for household devices</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Consider efficiency losses</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Account for peak vs average</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Energy:</strong> Power plant design</li>
                    <li><strong>Grid:</strong> Electrical system planning</li>
                    <li><strong>Industry:</strong> Load calculations</li>
                    <li><strong>Renewable:</strong> Solar and wind capacity</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMegawattToWatt(megawatts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megawatts) && megawatts !== '') {
        const watts = megawatts * 1000000;
        document.getElementById('wattInput').value = watts.toFixed(0);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${megawatts} MW = ${watts.toLocaleString()} W</strong>
        `;
        
        // Add power context
        let powerText = '';
        if (megawatts >= 10000) {
            powerText = 'Large country or major metropolitan grid capacity';
        } else if (megawatts >= 1000) {
            powerText = 'Large nuclear power plant or major city consumption';
        } else if (megawatts >= 100) {
            powerText = 'Large coal/gas power plant or medium city';
        } else if (megawatts >= 10) {
            powerText = 'Small power plant or wind farm capacity';
        } else if (megawatts >= 1) {
            powerText = 'Large wind turbine or small town consumption';
        } else if (megawatts >= 0.1) {
            powerText = 'Small wind turbine or large industrial facility';
        } else if (megawatts > 0) {
            powerText = 'Small industrial equipment or data center';
        }
        
        document.getElementById('powerContext').innerHTML = powerText;
    } else {
        document.getElementById('wattInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('powerContext').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertWattToMegawatt(watts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(watts) && watts !== '') {
        const megawatts = watts / 1000000;
        document.getElementById('megawattInput').value = megawatts.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${watts.toLocaleString()} W = ${megawatts.toFixed(6)} MW</strong>
        `;
        
        // Add power context
        let powerText = '';
        if (watts >= 10000000000) {
            powerText = 'Major power grid or large country capacity';
        } else if (watts >= 1000000000) {
            powerText = 'Large power plant or major city consumption';
        } else if (watts >= 100000000) {
            powerText = 'Medium power plant or small city';
        } else if (watts >= 10000000) {
            powerText = 'Small power plant or large industrial complex';
        } else if (watts >= 1000000) {
            powerText = 'Large wind turbine or town consumption';
        } else if (watts >= 100000) {
            powerText = 'Small wind turbine or large facility';
        } else if (watts >= 10000) {
            powerText = 'Large commercial building or small factory';
        } else if (watts >= 1000) {
            powerText = 'Small commercial building or large home';
        } else if (watts > 0) {
            powerText = 'Household appliances or small equipment';
        }
        
        document.getElementById('powerContext').innerHTML = powerText;
    } else {
        document.getElementById('megawattInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('powerContext').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megawattInput').value = '';
    document.getElementById('wattInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('powerContext').innerHTML = '';
}

function swapValues() {
    const megawattValue = document.getElementById('megawattInput').value;
    const wattValue = document.getElementById('wattInput').value;
    
    document.getElementById('megawattInput').value = wattValue;
    document.getElementById('wattInput').value = megawattValue;
    
    if (wattValue) {
        convertMegawattToWatt(parseFloat(wattValue));
    } else if (megawattValue) {
        convertWattToMegawatt(parseFloat(megawattValue));
    }
}

// Add event listeners
document.getElementById('megawattInput').addEventListener('input', function() {
    convertMegawattToWatt(parseFloat(this.value));
});

document.getElementById('wattInput').addEventListener('input', function() {
    convertWattToMegawatt(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
