<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pascal to Kilopascal Converter 2026 - Pa to kPa Calculator | Thiyagi</title>
<meta name="description" content="Free online Pascal to Kilopascal converter 2026. Convert Pa to kPa and kPa to Pa instantly with accurate pressure unit conversion.">
<meta name="keywords" content="pascal to kilopascal converter 2026, Pa to kPa, pressure conversion, metric pressure units, engineering calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pascal to Kilopascal Converter 2026 - Pa to kPa Calculator">
<meta property="og:description" content="Free online Pascal to Kilopascal converter 2026. Convert Pa to kPa and kPa to Pa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pascal-to-kilopascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pascal to Kilopascal Converter 2026 - Pa to kPa Calculator">
<meta property="twitter:description" content="Free online Pascal to Kilopascal converter 2026. Convert Pa to kPa and kPa to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-teal-600 mr-3"></i>
                Pascal to Kilopascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pascals (Pa) and kilopascals (kPa) for pressure measurements, engineering calculations, and scientific applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pascal Input -->
                <div class="space-y-4">
                    <label for="pascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-teal-600 mr-2"></i>Pascals (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter pascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1,000 Pa = 1 kPa
                    </div>
                </div>

                <!-- Kilopascal Input -->
                <div class="space-y-4">
                    <label for="kilopascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge text-cyan-600 mr-2"></i>Kilopascals (kPa)
                    </label>
                    <input
                        type="number"
                        id="kilopascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter kilopascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kPa = 1,000 Pa
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
            <!-- Pressure Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Pressure Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Pascals</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilopascals</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Pressures -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-teal-600 mr-3"></i>Common Pressures
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Atmospheric & Weather:</strong><br>
                        • Standard atmosphere: 101.3 kPa (101,325 Pa)<br>
                        • High pressure system: 103+ kPa<br>
                        • Low pressure system: <100 kPa<br>
                        • Vacuum pump: 0.001-10 kPa
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Automotive & HVAC:</strong><br>
                        • Tire pressure: 200-250 kPa<br>
                        • Engine vacuum: 40-70 kPa<br>
                        • HVAC systems: 0.5-5 kPa<br>
                        • Turbocharger: 50-200 kPa boost
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Industrial Applications:</strong><br>
                        • Water supply: 300-800 kPa<br>
                        • Natural gas: 200-700 kPa<br>
                        • Compressed air: 600-800 kPa<br>
                        • Steam systems: 100-1,600 kPa
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
                    <li><strong>Pascal:</strong> SI base pressure unit</li>
                    <li><strong>Kilopascal:</strong> 1,000 pascals</li>
                    <li><strong>Conversion:</strong> 1 kPa = 1,000 Pa</li>
                    <li><strong>Named after:</strong> Blaise Pascal</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Pa for small pressures</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>kPa for practical use</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>1000× conversion factor</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Standard SI prefixes</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Meteorology:</strong> Weather systems</li>
                    <li><strong>Engineering:</strong> System design</li>
                    <li><strong>Automotive:</strong> Performance specs</li>
                    <li><strong>HVAC:</strong> System pressures</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPascalToKilopascal(pascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pascal) && pascal !== '') {
        // 1,000 pascals = 1 kilopascal
        const kilopascal = pascal / 1000;
        document.getElementById('kilopascalInput').value = kilopascal;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${pascal.toLocaleString()} Pa = ${kilopascal.toLocaleString(undefined, {maximumFractionDigits: 3})} kPa</strong>
        `;
    } else {
        document.getElementById('kilopascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilopascalToPascal(kilopascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilopascal) && kilopascal !== '') {
        // 1 kilopascal = 1,000 pascals
        const pascal = kilopascal * 1000;
        document.getElementById('pascalInput').value = pascal;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${kilopascal} kPa = ${pascal.toLocaleString()} Pa</strong>
        `;
    } else {
        document.getElementById('pascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('pascalInput').value = '';
    document.getElementById('kilopascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const pascalValue = document.getElementById('pascalInput').value;
    const kilopascalValue = document.getElementById('kilopascalInput').value;
    
    document.getElementById('pascalInput').value = kilopascalValue;
    document.getElementById('kilopascalInput').value = pascalValue;
    
    if (kilopascalValue) {
        convertPascalToKilopascal(parseFloat(kilopascalValue));
    } else if (pascalValue) {
        convertKilopascalToPascal(parseFloat(pascalValue));
    }
}

// Add event listeners
document.getElementById('pascalInput').addEventListener('input', function() {
    convertPascalToKilopascal(parseFloat(this.value));
});

document.getElementById('kilopascalInput').addEventListener('input', function() {
    convertKilopascalToPascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
