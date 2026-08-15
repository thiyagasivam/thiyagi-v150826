<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megapascal to Bar Converter 2026 - MPa to bar Calculator | Thiyagi</title>
<meta name="description" content="Free online Megapascal to Bar converter 2026. Convert MPa to bar and bar to MPa instantly with accurate pressure conversion for engineering and industry.">
<meta name="keywords" content="megapascal to bar converter 2026, MPa to bar, pressure converter, engineering pressure, industrial measurements, hydraulic pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megapascal to Bar Converter 2026 - MPa to bar Calculator">
<meta property="og:description" content="Free online Megapascal to Bar converter 2026. Convert MPa to bar and bar to MPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megapascal-to-bar.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megapascal to Bar Converter 2026 - MPa to bar Calculator">
<meta name="twitter:description" content="Free online Megapascal to Bar converter 2026. Convert MPa to bar and bar to MPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-slate-600 mr-3"></i>
                Megapascal to Bar Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megapascals and bars for engineering applications, hydraulic systems, and industrial pressure measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megapascal Input -->
                <div class="space-y-4">
                    <label for="megapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge-high text-slate-600 mr-2"></i>Megapascal (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter megapascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MPa = 10 bar
                    </div>
                </div>

                <!-- Bar Input -->
                <div class="space-y-4">
                    <label for="barInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-blue-600 mr-2"></i>Bar (bar)
                    </label>
                    <input
                        type="number"
                        id="barInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter bars"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 bar = 0.1 MPa
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
                                <th class="text-left py-2">Megapascal</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Bar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 bar</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 bar</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 bar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pressure Scale Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-slate-600 mr-3"></i>Pressure Scale Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Low Pressure (bar scale):</strong><br>
                        • Atmospheric pressure: 1.013 bar<br>
                        • Car tire pressure: 2-3 bar<br>
                        • Bicycle tire: 3-8 bar<br>
                        • Steam heating: 1-6 bar
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Medium Pressure (MPa scale):</strong><br>
                        • Hydraulic systems: 10-70 MPa<br>
                        • Waterjet cutting: 200-400 MPa<br>
                        • Diesel injection: 150-200 MPa<br>
                        • Industrial compressor: 0.7-1.0 MPa
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>High Pressure (high MPa):</strong><br>
                        • Deep ocean (11 km): 110 MPa<br>
                        • Diamond anvil cell: 50,000+ MPa<br>
                        • Earth's core: 360,000 MPa<br>
                        • Ultra-high pressure: 1,000+ MPa
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
                    <li><strong>Megapascal:</strong> 10⁶ Pascal</li>
                    <li><strong>Bar:</strong> 10⁵ Pascal</li>
                    <li><strong>Conversion:</strong> 1 MPa = 10 bar</li>
                    <li><strong>SI relation:</strong> 1 Pa = 1 N/m²</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Use MPa for high pressures</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Use bar for moderate pressures</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Account for gauge vs absolute</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Hydraulics:</strong> System design</li>
                    <li><strong>Materials:</strong> Strength testing</li>
                    <li><strong>Process:</strong> Industrial equipment</li>
                    <li><strong>Research:</strong> High-pressure studies</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMpaToBar(megapascals) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megapascals) && megapascals !== '') {
        const bars = megapascals * 10;
        document.getElementById('barInput').value = bars.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${megapascals} MPa = ${bars} bar</strong>
        `;
    } else {
        document.getElementById('barInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertBarToMpa(bars) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(bars) && bars !== '') {
        const megapascals = bars / 10;
        document.getElementById('megapascalInput').value = megapascals.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${bars} bar = ${megapascals} MPa</strong>
        `;
    } else {
        document.getElementById('megapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megapascalInput').value = '';
    document.getElementById('barInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mpaValue = document.getElementById('megapascalInput').value;
    const barValue = document.getElementById('barInput').value;
    
    document.getElementById('megapascalInput').value = barValue;
    document.getElementById('barInput').value = mpaValue;
    
    if (barValue) {
        convertMpaToBar(parseFloat(barValue));
    } else if (mpaValue) {
        convertBarToMpa(parseFloat(mpaValue));
    }
}

// Add event listeners
document.getElementById('megapascalInput').addEventListener('input', function() {
    convertMpaToBar(parseFloat(this.value));
});

document.getElementById('barInput').addEventListener('input', function() {
    convertBarToMpa(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
