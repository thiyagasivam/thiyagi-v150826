<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilonewton to Ton Force Metric Converter 2026 - kN to tf Calculator | Thiyagi</title>
<meta name="description" content="Free online Kilonewton to Ton Force Metric converter 2026. Convert kN to tf and tf to kN instantly with accurate force conversion.">
<meta name="keywords" content="kilonewton to ton force metric converter 2026, kN to tf, force conversion, metric units, engineering calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilonewton to Ton Force Metric Converter 2026 - kN to tf Calculator">
<meta property="og:description" content="Free online Kilonewton to Ton Force Metric converter 2026. Convert kN to tf and tf to kN instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilonewton-to-ton-force-metric.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilonewton to Ton Force Metric Converter 2026 - kN to tf Calculator">
<meta property="twitter:description" content="Free online Kilonewton to Ton Force Metric converter 2026. Convert kN to tf and tf to kN instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-blue-600 mr-3"></i>
                Kilonewton to Ton Force Metric Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilonewtons (kN) and metric ton force (tf) for force measurements, structural engineering, and mechanical applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilonewton Input -->
                <div class="space-y-4">
                    <label for="kilonewtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-v text-blue-600 mr-2"></i>Kilonewtons (kN)
                    </label>
                    <input
                        type="number"
                        id="kilonewtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter kilonewtons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        SI unit of force (1,000 N)
                    </div>
                </div>

                <!-- Ton Force Metric Input -->
                <div class="space-y-4">
                    <label for="tonForceMetricInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-indigo-600 mr-2"></i>Ton Force Metric (tf)
                    </label>
                    <input
                        type="number"
                        id="tonForceMetricInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter ton force metric"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Gravitational force unit
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
            <!-- Force Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Force Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kilonewtons</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Ton Force Metric</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.102 tf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.510 tf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.02 tf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5.10 tf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.2 tf</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 kN</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">102 tf</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-building text-blue-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Structural Engineering:</strong><br>
                        • Building columns: 50-500 kN (5-51 tf)<br>
                        • Bridge supports: 1,000-10,000 kN<br>
                        • Foundation loads: 100-2,000 kN<br>
                        • Crane capacity: 10-1,000 kN
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Material Testing:</strong><br>
                        • Tensile testing: 1-100 kN<br>
                        • Compression tests: 10-10,000 kN<br>
                        • Steel beam loads: 50-1,000 kN<br>
                        • Concrete strength: 100-5,000 kN
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Mechanical Systems:</strong><br>
                        • Hydraulic cylinders: 1-500 kN<br>
                        • Press machines: 10-10,000 kN<br>
                        • Lifting equipment: 5-1,000 kN<br>
                        • Industrial machinery: 1-5,000 kN
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Force Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>kN:</strong> 1,000 newtons</li>
                    <li><strong>tf:</strong> Metric ton force</li>
                    <li><strong>Conversion:</strong> 1 tf = 9.80665 kN</li>
                    <li><strong>Gravity:</strong> 9.80665 m/s²</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>kN for modern specs</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>tf for traditional units</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Check regional standards</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Consider safety factors</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Civil:</strong> Structural design</li>
                    <li><strong>Mechanical:</strong> Force analysis</li>
                    <li><strong>Testing:</strong> Material properties</li>
                    <li><strong>Manufacturing:</strong> Equipment specs</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKilonewtonToTonForceMetric(kilonewton) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilonewton) && kilonewton !== '') {
        // 1 kN = 1/9.80665 tf
        const tonForceMetric = kilonewton / 9.80665;
        document.getElementById('tonForceMetricInput').value = tonForceMetric.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${kilonewton} kN = ${tonForceMetric.toFixed(3)} tf</strong>
        `;
    } else {
        document.getElementById('tonForceMetricInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertTonForceMetricToKilonewton(tonForceMetric) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tonForceMetric) && tonForceMetric !== '') {
        // 1 tf = 9.80665 kN
        const kilonewton = tonForceMetric * 9.80665;
        document.getElementById('kilonewtonInput').value = kilonewton.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${tonForceMetric} tf = ${kilonewton.toFixed(3)} kN</strong>
        `;
    } else {
        document.getElementById('kilonewtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kilonewtonInput').value = '';
    document.getElementById('tonForceMetricInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kilonewtonValue = document.getElementById('kilonewtonInput').value;
    const tonForceMetricValue = document.getElementById('tonForceMetricInput').value;
    
    document.getElementById('kilonewtonInput').value = tonForceMetricValue;
    document.getElementById('tonForceMetricInput').value = kilonewtonValue;
    
    if (tonForceMetricValue) {
        convertKilonewtonToTonForceMetric(parseFloat(tonForceMetricValue));
    } else if (kilonewtonValue) {
        convertTonForceMetricToKilonewton(parseFloat(kilonewtonValue));
    }
}

// Add event listeners
document.getElementById('kilonewtonInput').addEventListener('input', function() {
    convertKilonewtonToTonForceMetric(parseFloat(this.value));
});

document.getElementById('tonForceMetricInput').addEventListener('input', function() {
    convertTonForceMetricToKilonewton(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
