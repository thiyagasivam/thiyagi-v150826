<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Bar to Kilopascal Converter 2026 - bar to kPa Calculator | Thiyagi</title>
<meta name="description" content="Free online Bar to Kilopascal converter 2026. Convert bar to kPa and kPa to bar instantly with accurate pressure conversion.">
<meta name="keywords" content="bar to kilopascal converter 2026, bar to kPa, pressure converter, engineering units, metric pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Bar to Kilopascal Converter 2026 - bar to kPa Calculator">
<meta property="og:description" content="Free online Bar to Kilopascal converter 2026. Convert bar to kPa and kPa to bar instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/bar-to-kilopascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Bar to Kilopascal Converter 2026 - bar to kPa Calculator">
<meta property="twitter:description" content="Free online Bar to Kilopascal converter 2026. Convert bar to kPa and kPa to bar instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-gauge-high text-red-600 mr-3"></i>
                Bar to Kilopascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between bar and kilopascal for pressure measurements, engineering calculations, and industrial applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Bar Input -->
                <div class="space-y-4">
                    <label for="barInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-red-600 mr-2"></i>Bar (bar)
                    </label>
                    <input
                        type="number"
                        id="barInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter bar"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 bar = 100 kPa
                    </div>
                </div>

                <!-- Kilopascal Input -->
                <div class="space-y-4">
                    <label for="kpaInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-orange-600 mr-2"></i>Kilopascal (kPa)
                    </label>
                    <input
                        type="number"
                        id="kpaInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter kPa"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kPa = 0.01 bar
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
            <!-- Pressure Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Pressure Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Bar</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilopascal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">200 kPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">500 kPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 bar</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 kPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-wrench text-red-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>HVAC Systems:</strong><br>
                        • Building pressure: 0.1-0.5 kPa<br>
                        • Duct pressure: 1-5 kPa<br>
                        • Fan pressure: 2-10 kPa<br>
                        • Compressor: 100-1000 kPa (1-10 bar)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Automotive:</strong><br>
                        • Tire pressure: 200-250 kPa (2-2.5 bar)<br>
                        • Engine vacuum: 50-80 kPa<br>
                        • Turbo boost: 50-200 kPa<br>
                        • Hydraulic brake: 1000+ kPa (10+ bar)
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Industrial:</strong><br>
                        • Pneumatic tools: 600-800 kPa (6-8 bar)<br>
                        • Steam systems: 100-1600 kPa (1-16 bar)<br>
                        • Gas pipelines: 100-7000 kPa (1-70 bar)<br>
                        • Hydraulic systems: 3000-35000 kPa
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
                    <li><strong>Bar:</strong> 100,000 Pa</li>
                    <li><strong>Kilopascal:</strong> 1,000 Pa</li>
                    <li><strong>Conversion:</strong> 1 bar = 100 kPa</li>
                    <li><strong>SI base:</strong> Pascal (Pa)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>kPa common in engineering</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Bar practical for high pressure</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Simple 100:1 ratio</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Metric system standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> System pressures</li>
                    <li><strong>Automotive:</strong> Fluid pressures</li>
                    <li><strong>Industrial:</strong> Process control</li>
                    <li><strong>Scientific:</strong> Research measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertBarToKpa(bar) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(bar) && bar !== '') {
        // 1 bar = 100 kPa
        const kpa = bar * 100;
        document.getElementById('kpaInput').value = kpa;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${bar} bar = ${kpa} kPa</strong>
        `;
    } else {
        document.getElementById('kpaInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKpaToBar(kpa) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kpa) && kpa !== '') {
        // 1 kPa = 0.01 bar
        const bar = kpa / 100;
        document.getElementById('barInput').value = bar;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${kpa} kPa = ${bar} bar</strong>
        `;
    } else {
        document.getElementById('barInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('barInput').value = '';
    document.getElementById('kpaInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const barValue = document.getElementById('barInput').value;
    const kpaValue = document.getElementById('kpaInput').value;
    
    document.getElementById('barInput').value = kpaValue;
    document.getElementById('kpaInput').value = barValue;
    
    if (kpaValue) {
        convertBarToKpa(parseFloat(kpaValue));
    } else if (barValue) {
        convertKpaToBar(parseFloat(barValue));
    }
}

// Add event listeners
document.getElementById('barInput').addEventListener('input', function() {
    convertBarToKpa(parseFloat(this.value));
});

document.getElementById('kpaInput').addEventListener('input', function() {
    convertKpaToBar(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
