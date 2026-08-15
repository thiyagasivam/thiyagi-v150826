<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pascal to Bar Converter 2026 - Pa to bar Calculator | Thiyagi</title>
<meta name="description" content="Free online Pascal to Bar converter 2026. Convert Pa to bar and bar to Pa instantly with accurate pressure conversion.">
<meta name="keywords" content="pascal to bar converter 2026, Pa to bar, pressure converter, SI units, scientific conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pascal to Bar Converter 2026 - Pa to bar Calculator">
<meta property="og:description" content="Free online Pascal to Bar converter 2026. Convert Pa to bar and bar to Pa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pascal-to-bar.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pascal to Bar Converter 2026 - Pa to bar Calculator">
<meta property="twitter:description" content="Free online Pascal to Bar converter 2026. Convert Pa to bar and bar to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-gauge text-blue-600 mr-3"></i>
                Pascal to Bar Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pascal and bar for pressure measurements, engineering calculations, and scientific applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pascal Input -->
                <div class="space-y-4">
                    <label for="pascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-blue-600 mr-2"></i>Pascal (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter pascal"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 Pa = 0.00001 bar
                    </div>
                </div>

                <!-- Bar Input -->
                <div class="space-y-4">
                    <label for="barInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Bar (bar)
                    </label>
                    <input
                        type="number"
                        id="barInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter bar"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 bar = 100,000 Pa
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
                                <th class="text-left py-2">Pascal</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Bar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 bar</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 bar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-blue-600 mr-3"></i>Scientific Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Low Pressure (Pa):</strong><br>
                        • Sound wave: 0.02-20 Pa<br>
                        • Human breath: 1,000-3,000 Pa<br>
                        • Wind pressure: 100-1,000 Pa<br>
                        • Vacuum pump: 1-100 Pa
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Medium Pressure (kPa):</strong><br>
                        • Atmospheric: 101,325 Pa (1.01 bar)<br>
                        • Tire pressure: 200,000 Pa (2 bar)<br>
                        • Water column: 10,000 Pa/m depth<br>
                        • Building HVAC: 50-500 Pa
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>High Pressure (MPa/bar):</strong><br>
                        • Hydraulics: 10-30 bar<br>
                        • Industrial gas: 200 bar<br>
                        • Material testing: 100-1000 bar<br>
                        • Diamond anvil: 100+ GPa
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>SI Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pascal:</strong> N/m² (SI base unit)</li>
                    <li><strong>Bar:</strong> 100,000 Pa</li>
                    <li><strong>Conversion:</strong> 1 bar = 10⁵ Pa</li>
                    <li><strong>Symbol:</strong> Pa (pascal), bar</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Pa for scientific work</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Bar for practical use</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>kPa common in engineering</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>1 bar ≈ 1 atmosphere</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Physics:</strong> Fundamental calculations</li>
                    <li><strong>Engineering:</strong> System design</li>
                    <li><strong>Weather:</strong> Pressure measurements</li>
                    <li><strong>Industry:</strong> Process control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPascalToBar(pascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pascal) && pascal !== '') {
        // 1 pascal = 0.00001 bar (1 bar = 100,000 Pa)
        const bar = pascal / 100000;
        document.getElementById('barInput').value = bar.toFixed(8);
        
        // Format pascal with appropriate notation
        const formattedPa = pascal >= 10000 ? pascal.toExponential(3) : pascal.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${formattedPa} Pa = ${bar.toFixed(6)} bar</strong>
        `;
    } else {
        document.getElementById('barInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertBarToPascal(bar) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(bar) && bar !== '') {
        // 1 bar = 100,000 pascal
        const pascal = bar * 100000;
        document.getElementById('pascalInput').value = pascal;
        
        // Format pascal with appropriate notation
        const formattedPa = pascal >= 10000 ? pascal.toExponential(3) : pascal.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${bar} bar = ${formattedPa} Pa</strong>
        `;
    } else {
        document.getElementById('pascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('pascalInput').value = '';
    document.getElementById('barInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const pascalValue = document.getElementById('pascalInput').value;
    const barValue = document.getElementById('barInput').value;
    
    document.getElementById('pascalInput').value = barValue;
    document.getElementById('barInput').value = pascalValue;
    
    if (barValue) {
        convertPascalToBar(parseFloat(barValue));
    } else if (pascalValue) {
        convertBarToPascal(parseFloat(pascalValue));
    }
}

// Add event listeners
document.getElementById('pascalInput').addEventListener('input', function() {
    convertPascalToBar(parseFloat(this.value));
});

document.getElementById('barInput').addEventListener('input', function() {
    convertBarToPascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
