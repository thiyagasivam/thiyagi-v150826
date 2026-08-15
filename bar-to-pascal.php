<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Bar to Pascal Converter 2026 - bar to Pa Calculator | Thiyagi</title>
<meta name="description" content="Free online Bar to Pascal converter 2026. Convert bar to Pa and Pa to bar instantly with accurate pressure conversion for scientific and engineering use.">
<meta name="keywords" content="bar to pascal converter 2026, bar to Pa, pressure converter, scientific pressure, metric pressure units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Bar to Pascal Converter 2026 - bar to Pa Calculator">
<meta property="og:description" content="Free online Bar to Pascal converter 2026. Convert bar to Pa and Pa to bar instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/bar-to-pascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bar to Pascal Converter 2026 - bar to Pa Calculator">
<meta name="twitter:description" content="Free online Bar to Pascal converter 2026. Convert bar to Pa and Pa to bar instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-blue-600 mr-3"></i>
                Bar to Pascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between bar and pascal for scientific and engineering pressure measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bar Input -->
                <div class="space-y-4">
                    <label for="barInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge text-blue-600 mr-2"></i>Bar (bar)
                    </label>
                    <input
                        type="number"
                        id="barInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter bar"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 bar = 100,000 Pa
                    </div>
                </div>

                <!-- Pascal Input -->
                <div class="space-y-4">
                    <label for="pascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-indigo-600 mr-2"></i>Pascal (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter pascals"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Pa = 0.00001 bar
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-blue-600 mr-3"></i>Pressure Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Bar</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pascal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.01 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 Pa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 Pa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50,000 Pa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.0 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 Pa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.0 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">200,000 Pa</td>
                            </tr>
                            <tr>
                                <td class="py-2">10.0 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 Pa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-blue-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Atmospheric & Weather:</strong><br>
                        • Standard atmosphere: 1.01325 bar (101,325 Pa)<br>
                        • Weather systems: 0.98-1.04 bar<br>
                        • High altitude: 0.3-0.7 bar<br>
                        • Vacuum systems: 0.001-0.1 bar
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Industrial Systems:</strong><br>
                        • Steam boilers: 10-100 bar<br>
                        • Hydraulic systems: 50-700 bar<br>
                        • Compressed air: 6-10 bar<br>
                        • Gas pipelines: 1-80 bar
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Scientific Research:</strong><br>
                        • Material testing: 1-1000 bar<br>
                        • Deep sea pressure: 1-1100 bar<br>
                        • Laboratory conditions: precise Pa values<br>
                        • Calibration standards: Pa measurements
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Bar:</strong> 10⁵ pascals</li>
                    <li><strong>Pascal:</strong> SI unit (N/m²)</li>
                    <li><strong>Conversion:</strong> 1 bar = 100,000 Pa</li>
                    <li><strong>Definition:</strong> Force per unit area</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Bar for practical engineering</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Pascal for scientific precision</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Consider gauge vs absolute</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Account for temperature effects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> System design</li>
                    <li><strong>Meteorology:</strong> Weather analysis</li>
                    <li><strong>Manufacturing:</strong> Process control</li>
                    <li><strong>Research:</strong> Scientific measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBarToPascal(bar) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(bar) && bar !== '') {
        const pascal = bar * 100000;
        document.getElementById('pascalInput').value = pascal.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${bar} bar = ${pascal.toFixed(6)} Pa</strong>
        `;
    } else {
        document.getElementById('pascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPascalToBar(pascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pascal) && pascal !== '') {
        const bar = pascal / 100000;
        document.getElementById('barInput').value = bar.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${pascal} Pa = ${bar.toFixed(8)} bar</strong>
        `;
    } else {
        document.getElementById('barInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('barInput').value = '';
    document.getElementById('pascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const barValue = document.getElementById('barInput').value;
    const pascalValue = document.getElementById('pascalInput').value;
    
    document.getElementById('barInput').value = pascalValue;
    document.getElementById('pascalInput').value = barValue;
    
    if (pascalValue) {
        convertBarToPascal(parseFloat(pascalValue));
    } else if (barValue) {
        convertPascalToBar(parseFloat(barValue));
    }
}

// Add event listeners
document.getElementById('barInput').addEventListener('input', function() {
    convertBarToPascal(parseFloat(this.value));
});

document.getElementById('pascalInput').addEventListener('input', function() {
    convertPascalToBar(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
