<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Bar to Standard Atmosphere Converter 2026 - bar to atm Calculator | Thiyagi</title>
<meta name="description" content="Free online Bar to Standard Atmosphere converter 2026. Convert bar to atm and atm to bar instantly with accurate pressure conversion.">
<meta name="keywords" content="bar to standard atmosphere converter 2026, bar to atm, pressure converter, atmospheric pressure, scientific conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Bar to Standard Atmosphere Converter 2026 - bar to atm Calculator">
<meta property="og:description" content="Free online Bar to Standard Atmosphere converter 2026. Convert bar to atm and atm to bar instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/bar-to-standard-atmosphere.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bar to Standard Atmosphere Converter 2026 - bar to atm Calculator">
<meta property="twitter:description" content="Free online Bar to Standard Atmosphere converter 2026. Convert bar to atm and atm to bar instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-thermometer text-indigo-600 mr-3"></i>
                Bar to Standard Atmosphere Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between bar and standard atmosphere for pressure measurements, weather analysis, and scientific calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bar Input -->
                <div class="space-y-4">
                    <label for="barInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Bar (bar)
                    </label>
                    <input
                        type="number"
                        id="barInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter bar"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 bar = 0.986923 atm
                    </div>
                </div>

                <!-- Standard Atmosphere Input -->
                <div class="space-y-4">
                    <label for="atmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cloud text-purple-600 mr-2"></i>Standard Atmosphere (atm)
                    </label>
                    <input
                        type="number"
                        id="atmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter atm"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 atm = 1.01325 bar
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Pressure Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Bar</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Atmosphere</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.493 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.987 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1.013 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.974 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.935 atm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.869 atm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pressure Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-earth-americas text-indigo-600 mr-3"></i>Pressure Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Atmospheric Pressures:</strong><br>
                        • Sea level: 1.013 bar (1 atm)<br>
                        • Weather high: 1.05 bar (1.04 atm)<br>
                        • Weather low: 0.97 bar (0.96 atm)<br>
                        • Mountain top: 0.7 bar (0.69 atm)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Technical Applications:</strong><br>
                        • Tire pressure: 2-3 bar (2-3 atm)<br>
                        • SCUBA tank: 200 bar (197 atm)<br>
                        • Hydraulic system: 100-300 bar<br>
                        • Steam boiler: 10-40 bar
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Industrial Uses:</strong><br>
                        • Pneumatic tools: 6-8 bar<br>
                        • Compressor output: 7-10 bar<br>
                        • Natural gas: 1-70 bar<br>
                        • Water mains: 3-6 bar
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Bar:</strong> 100,000 Pa (N/m²)</li>
                    <li><strong>Atmosphere:</strong> 101,325 Pa</li>
                    <li><strong>Conversion:</strong> 1 atm = 1.01325 bar</li>
                    <li><strong>Precision:</strong> 1 bar = 0.986923 atm</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Bar common in Europe</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Atm standard reference</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Nearly 1:1 ratio</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Scientific applications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Meteorology:</strong> Weather pressure</li>
                    <li><strong>Engineering:</strong> System pressure</li>
                    <li><strong>Aviation:</strong> Altitude pressure</li>
                    <li><strong>Industry:</strong> Process control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBarToAtm(bar) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(bar) && bar !== '') {
        // 1 bar = 0.986923266716013 atm (exact conversion)
        const atm = bar * 0.986923266716013;
        document.getElementById('atmInput').value = atm.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${bar} bar = ${atm.toFixed(6)} atm</strong>
        `;
    } else {
        document.getElementById('atmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertAtmToBar(atm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(atm) && atm !== '') {
        // 1 atm = 1.01325 bar (exact conversion)
        const bar = atm * 1.01325;
        document.getElementById('barInput').value = bar.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${atm} atm = ${bar.toFixed(6)} bar</strong>
        `;
    } else {
        document.getElementById('barInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('barInput').value = '';
    document.getElementById('atmInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const barValue = document.getElementById('barInput').value;
    const atmValue = document.getElementById('atmInput').value;
    
    document.getElementById('barInput').value = atmValue;
    document.getElementById('atmInput').value = barValue;
    
    if (atmValue) {
        convertBarToAtm(parseFloat(atmValue));
    } else if (barValue) {
        convertAtmToBar(parseFloat(barValue));
    }
}

// Add event listeners
document.getElementById('barInput').addEventListener('input', function() {
    convertBarToAtm(parseFloat(this.value));
});

document.getElementById('atmInput').addEventListener('input', function() {
    convertAtmToBar(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
