<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megapascal to Kilopascal Converter 2026 - MPa to kPa Calculator | Thiyagi</title>
<meta name="description" content="Free online Megapascal to Kilopascal converter 2026. Convert MPa to kPa and kPa to MPa instantly with accurate pressure conversion.">
<meta name="keywords" content="megapascal to kilopascal converter 2026, MPa to kPa, pressure converter, pascal units, engineering calculations">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megapascal to Kilopascal Converter 2026 - MPa to kPa Calculator">
<meta property="og:description" content="Free online Megapascal to Kilopascal converter 2026. Convert MPa to kPa and kPa to MPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megapascal-to-kilopascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megapascal to Kilopascal Converter 2026 - MPa to kPa Calculator">
<meta property="twitter:description" content="Free online Megapascal to Kilopascal converter 2026. Convert MPa to kPa and kPa to MPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-rose-50 to-pink-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress-arrows-alt text-red-600 mr-3"></i>
                Megapascal to Kilopascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megapascals and kilopascals for pressure calculations, engineering design, and material testing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megapascal Input -->
                <div class="space-y-4">
                    <label for="megapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-red-600 mr-2"></i>Megapascals (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter MPa"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MPa = 1,000 kPa
                    </div>
                </div>

                <!-- Kilopascal Input -->
                <div class="space-y-4">
                    <label for="kilopascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge-high text-rose-600 mr-2"></i>Kilopascals (kPa)
                    </label>
                    <input
                        type="number"
                        id="kilopascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter kPa"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kPa = 0.001 MPa
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-rose-50 rounded-lg">
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
            <!-- Pressure Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Pressure Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">MPa</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">kPa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 kPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 kPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pressure Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-red-600 mr-3"></i>Pressure Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Low Pressure (kPa):</strong><br>
                        • Atmospheric pressure: 101.3 kPa<br>
                        • Tire pressure: 200-250 kPa<br>
                        • HVAC systems: 1-10 kPa<br>
                        • Blood pressure: 10-20 kPa
                    </div>
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Medium Pressure (MPa):</strong><br>
                        • Water supply: 0.2-0.8 MPa<br>
                        • Hydraulic systems: 5-35 MPa<br>
                        • Gas cylinders: 15-20 MPa<br>
                        • Steam boilers: 1-10 MPa
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>High Pressure (MPa):</strong><br>
                        • Material testing: 100-1,000 MPa<br>
                        • Deep ocean: 110 MPa<br>
                        • Diamond anvil: 100,000+ MPa<br>
                        • Earth's core: 360,000 MPa
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-red-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pascal:</strong> SI unit of pressure</li>
                    <li><strong>Kilopascal:</strong> 1,000 Pa</li>
                    <li><strong>Megapascal:</strong> 1,000,000 Pa</li>
                    <li><strong>Formula:</strong> P = F / A</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>kPa for everyday pressures</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>MPa for engineering stress</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Simple 1000:1 ratio</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Material properties</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Stress analysis</li>
                    <li><strong>Materials:</strong> Strength testing</li>
                    <li><strong>Hydraulics:</strong> System pressure</li>
                    <li><strong>Research:</strong> High pressure studies</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMegapascalToKilopascal(mpa) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mpa) && mpa !== '') {
        // 1 MPa = 1000 kPa
        const kpa = mpa * 1000;
        document.getElementById('kilopascalInput').value = kpa;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${mpa} MPa = ${kpa.toLocaleString()} kPa</strong>
        `;
    } else {
        document.getElementById('kilopascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilopascalToMegapascal(kpa) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kpa) && kpa !== '') {
        // 1 kPa = 0.001 MPa
        const mpa = kpa / 1000;
        document.getElementById('megapascalInput').value = mpa;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${kpa.toLocaleString()} kPa = ${mpa} MPa</strong>
        `;
    } else {
        document.getElementById('megapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megapascalInput').value = '';
    document.getElementById('kilopascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mpaValue = document.getElementById('megapascalInput').value;
    const kpaValue = document.getElementById('kilopascalInput').value;
    
    document.getElementById('megapascalInput').value = kpaValue;
    document.getElementById('kilopascalInput').value = mpaValue;
    
    if (kpaValue) {
        convertMegapascalToKilopascal(parseFloat(kpaValue));
    } else if (mpaValue) {
        convertKilopascalToMegapascal(parseFloat(mpaValue));
    }
}

// Add event listeners
document.getElementById('megapascalInput').addEventListener('input', function() {
    convertMegapascalToKilopascal(parseFloat(this.value));
});

document.getElementById('kilopascalInput').addEventListener('input', function() {
    convertKilopascalToMegapascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
