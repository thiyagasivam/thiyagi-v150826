<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Standard Atmosphere to Kilopascal Converter 2026 - atm to kPa Calculator | Thiyagi</title>
<meta name="description" content="Free online Standard Atmosphere to Kilopascal converter 2026. Convert atm to kPa and kPa to atm instantly with accurate pressure conversion for weather and engineering.">
<meta name="keywords" content="standard atmosphere to kilopascal converter 2026, atm to kPa, pressure converter, atmospheric pressure, weather pressure, barometric pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Standard Atmosphere to Kilopascal Converter 2026 - atm to kPa Calculator">
<meta property="og:description" content="Free online Standard Atmosphere to Kilopascal converter 2026. Convert atm to kPa and kPa to atm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/standard-atmosphere-to-kilopascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Standard Atmosphere to Kilopascal Converter 2026 - atm to kPa Calculator">
<meta name="twitter:description" content="Free online Standard Atmosphere to Kilopascal converter 2026. Convert atm to kPa and kPa to atm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cloud text-slate-600 mr-3"></i>
                Standard Atmosphere to Kilopascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between standard atmospheres and kilopascals for weather monitoring, engineering, and atmospheric science
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Atmosphere Input -->
                <div class="space-y-4">
                    <label for="atmosphereInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-barometer text-slate-600 mr-2"></i>Standard Atmosphere (atm)
                    </label>
                    <input
                        type="number"
                        id="atmosphereInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter atmospheres"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 atm = 101.325 kPa
                    </div>
                </div>

                <!-- Kilopascal Input -->
                <div class="space-y-4">
                    <label for="kilopascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge text-blue-600 mr-2"></i>Kilopascal (kPa)
                    </label>
                    <input
                        type="number"
                        id="kilopascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter kilopascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kPa = 0.00986923 atm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-slate-500 hover:bg-slate-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Pressure Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Pressure Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Atmosphere</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilopascal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.1325 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50.6625 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">101.325 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.5 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">151.988 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">202.65 kPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 atm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1013.25 kPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Weather & Engineering Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-thermometer-half text-slate-600 mr-3"></i>Pressure Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Weather Conditions:</strong><br>
                        • High pressure system: 1.02-1.05 atm (103-106 kPa)<br>
                        • Standard sea level: 1.00 atm (101.325 kPa)<br>
                        • Low pressure system: 0.96-0.99 atm (97-100 kPa)<br>
                        • Hurricane eye: 0.87-0.92 atm (88-93 kPa)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Altitude Pressure:</strong><br>
                        • Sea level: 1.00 atm (101.325 kPa)<br>
                        • 1000m elevation: 0.90 atm (91 kPa)<br>
                        • 3000m elevation: 0.69 atm (70 kPa)<br>
                        • Commercial aircraft: 0.20-0.25 atm (20-25 kPa)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Engineering Applications:</strong><br>
                        • Vacuum pump: 0.001-0.1 atm (0.1-10 kPa)<br>
                        • Tire pressure: 2-3 atm (200-300 kPa)<br>
                        • Hydraulic systems: 50-300 atm (5000-30000 kPa)<br>
                        • Industrial pressure: 1-100 atm (100-10000 kPa)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Atmosphere:</strong> Standard atmospheric pressure</li>
                    <li><strong>Kilopascal:</strong> 1000 pascals (SI unit)</li>
                    <li><strong>Conversion:</strong> 1 atm = 101.325 kPa</li>
                    <li><strong>Reference:</strong> Sea level at 15°C</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Calibrate instruments regularly</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Account for altitude variations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Use appropriate pressure ranges</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Weather:</strong> Barometric pressure</li>
                    <li><strong>Aviation:</strong> Altitude calculations</li>
                    <li><strong>Engineering:</strong> System design</li>
                    <li><strong>Science:</strong> Laboratory conditions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertAtmToKPa(atmospheres) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(atmospheres) && atmospheres !== '') {
        const kilopascals = atmospheres * 101.325;
        document.getElementById('kilopascalInput').value = kilopascals.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${atmospheres} atm = ${kilopascals.toFixed(6)} kPa</strong>
        `;
    } else {
        document.getElementById('kilopascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKPaToAtm(kilopascals) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilopascals) && kilopascals !== '') {
        const atmospheres = kilopascals / 101.325;
        document.getElementById('atmosphereInput').value = atmospheres.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${kilopascals} kPa = ${atmospheres.toFixed(8)} atm</strong>
        `;
    } else {
        document.getElementById('atmosphereInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('atmosphereInput').value = '';
    document.getElementById('kilopascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const atmosphereValue = document.getElementById('atmosphereInput').value;
    const kilopascalValue = document.getElementById('kilopascalInput').value;
    
    document.getElementById('atmosphereInput').value = kilopascalValue;
    document.getElementById('kilopascalInput').value = atmosphereValue;
    
    if (kilopascalValue) {
        convertAtmToKPa(parseFloat(kilopascalValue));
    } else if (atmosphereValue) {
        convertKPaToAtm(parseFloat(atmosphereValue));
    }
}

// Add event listeners
document.getElementById('atmosphereInput').addEventListener('input', function() {
    convertAtmToKPa(parseFloat(this.value));
});

document.getElementById('kilopascalInput').addEventListener('input', function() {
    convertKPaToAtm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
