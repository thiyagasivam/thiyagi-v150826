<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to Foot Water 60°F Converter 2026 - psi to ftH2O Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to Foot Water 60°F converter 2026. Convert psi to ftH2O and ftH2O to psi instantly with accurate pressure conversion.">
<meta name="keywords" content="psi to foot water converter 2026, psi to ftH2O, pressure converter, water column, hydraulic pressure, engineering units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to Foot Water 60°F Converter 2026 - psi to ftH2O Calculator">
<meta property="og:description" content="Free online PSI to Foot Water 60°F converter 2026. Convert psi to ftH2O and ftH2O to psi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-foot-water-60-176-f.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to Foot Water 60°F Converter 2026 - psi to ftH2O Calculator">
<meta property="twitter:description" content="Free online PSI to Foot Water 60°F converter 2026. Convert psi to ftH2O and ftH2O to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-teal-600 mr-3"></i>
                PSI to Foot Water 60°F Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between PSI and feet of water column at 60°F for hydraulic systems, water management, and pressure calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge-high text-teal-600 mr-2"></i>PSI (pounds per square inch)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter PSI"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 psi = 2.3067 ft H2O
                    </div>
                </div>

                <!-- Foot Water Input -->
                <div class="space-y-4">
                    <label for="footWaterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-water text-cyan-600 mr-2"></i>Feet of Water at 60°F (ft H2O)
                    </label>
                    <input
                        type="number"
                        id="footWaterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter ft H2O"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft H2O = 0.4335 psi
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Pressure Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Pressure Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">PSI</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Feet H2O (60°F)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.31 ft H2O</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">11.53 ft H2O</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">23.07 ft H2O</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">15 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">34.60 ft H2O</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">30 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">69.20 ft H2O</td>
                            </tr>
                            <tr>
                                <td class="py-2">50 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">115.33 ft H2O</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Hydraulic Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-teal-600 mr-3"></i>Hydraulic Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Water Systems:</strong><br>
                        • Residential water pressure: 30-50 psi (69-115 ft H2O)<br>
                        • City water main: 60-100 psi (138-231 ft H2O)<br>
                        • Fire hydrant: 35 psi min (81 ft H2O)<br>
                        • Boiler pressure: 12-15 psi (28-35 ft H2O)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Industrial Applications:</strong><br>
                        • Cooling tower head: 10-20 ft H2O (4.3-8.7 psi)<br>
                        • Pump suction: 5-15 ft H2O (2.2-6.5 psi)<br>
                        • Tank pressure: 25-100 ft H2O (11-43 psi)<br>
                        • Process equipment: 50-200 ft H2O (22-87 psi)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>HVAC & Plumbing:</strong><br>
                        • Static head: 1 ft H2O per story<br>
                        • Pump head calculation: ft H2O<br>
                        • System pressure drop: 5-25 ft H2O<br>
                        • Pressure test: 150% working pressure
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>PSI:</strong> Pounds per square inch</li>
                    <li><strong>ft H2O:</strong> Feet of water column</li>
                    <li><strong>Temperature:</strong> 60°F (15.56°C)</li>
                    <li><strong>Density:</strong> 62.37 lb/ft³</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>ft H2O for pump calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>PSI for system pressure</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Temperature dependent</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Static vs dynamic head</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Hydraulics:</strong> Pump sizing</li>
                    <li><strong>HVAC:</strong> System design</li>
                    <li><strong>Plumbing:</strong> Pressure calculations</li>
                    <li><strong>Process:</strong> Equipment design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPSIToFootWater(psi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(psi) && psi !== '') {
        // 1 psi = 2.30666 ft H2O at 60°F
        const footWater = psi * 2.30666;
        document.getElementById('footWaterInput').value = footWater.toFixed(4);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${psi} psi = ${footWater.toFixed(3)} ft H2O (60°F)</strong>
        `;
    } else {
        document.getElementById('footWaterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFootWaterToPSI(footWater) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(footWater) && footWater !== '') {
        // 1 ft H2O = 0.433515 psi at 60°F
        const psi = footWater * 0.433515;
        document.getElementById('psiInput').value = psi.toFixed(4);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${footWater} ft H2O (60°F) = ${psi.toFixed(3)} psi</strong>
        `;
    } else {
        document.getElementById('psiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('footWaterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const footWaterValue = document.getElementById('footWaterInput').value;
    
    document.getElementById('psiInput').value = footWaterValue;
    document.getElementById('footWaterInput').value = psiValue;
    
    if (footWaterValue) {
        convertPSIToFootWater(parseFloat(footWaterValue));
    } else if (psiValue) {
        convertFootWaterToPSI(parseFloat(psiValue));
    }
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', function() {
    convertPSIToFootWater(parseFloat(this.value));
});

document.getElementById('footWaterInput').addEventListener('input', function() {
    convertFootWaterToPSI(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
