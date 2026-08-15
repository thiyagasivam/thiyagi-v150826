<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milliliter to Cubic Meter Converter 2026 - mL to m³ Calculator | Thiyagi</title>
<meta name="description" content="Free online Milliliter to Cubic Meter converter 2026. Convert mL to m³ and m³ to mL instantly with accurate volume conversion for engineering and science.">
<meta name="keywords" content="milliliter to cubic meter converter 2026, mL to m³, volume converter, metric volume, engineering calculations, scientific measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milliliter to Cubic Meter Converter 2026 - mL to m³ Calculator">
<meta property="og:description" content="Free online Milliliter to Cubic Meter converter 2026. Convert mL to m³ and m³ to mL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milliliter-to-cubic-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milliliter to Cubic Meter Converter 2026 - mL to m³ Calculator">
<meta name="twitter:description" content="Free online Milliliter to Cubic Meter converter 2026. Convert mL to m³ and m³ to mL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-blue-600 mr-3"></i>
                Milliliter to Cubic Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milliliters and cubic meters for engineering calculations, scientific measurements, and volume analysis
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliter Input -->
                <div class="space-y-4">
                    <label for="milliliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-eyedropper text-blue-600 mr-2"></i>Milliliter (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter milliliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mL = 0.000001 m³
                    </div>
                </div>

                <!-- Cubic Meter Input -->
                <div class="space-y-4">
                    <label for="cubicMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-cyan-600 mr-2"></i>Cubic Meter (m³)
                    </label>
                    <input
                        type="number"
                        id="cubicMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m³ = 1,000,000 mL
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg">
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
            <!-- Volume Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milliliter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Meter</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.000001 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500,000 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000,000 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 m³</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000,000 mL</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 m³</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Volume Scale Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-water text-blue-600 mr-3"></i>Volume Scale Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Small Volumes (mL scale):</strong><br>
                        • Medicine dose: 5-15 mL<br>
                        • Coffee cup: 200-250 mL<br>
                        • Water bottle: 500-1,000 mL<br>
                        • Laboratory beaker: 100-2,000 mL
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Medium Volumes (L to m³):</strong><br>
                        • Aquarium: 100-500 L (0.1-0.5 m³)<br>
                        • Bathtub: 200-400 L (0.2-0.4 m³)<br>
                        • Hot tub: 1,000-2,000 L (1-2 m³)<br>
                        • Small pool: 10,000-50,000 L (10-50 m³)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Large Volumes (m³ scale):</strong><br>
                        • Small room: 30-50 m³<br>
                        • Swimming pool: 100-1,000 m³<br>
                        • Water tank: 10-10,000 m³<br>
                        • Reservoir: 1,000,000+ m³
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Milliliter:</strong> 10⁻³ liter</li>
                    <li><strong>Cubic Meter:</strong> SI base volume unit</li>
                    <li><strong>Conversion:</strong> 1 m³ = 1,000,000 mL</li>
                    <li><strong>Equivalence:</strong> 1 m³ = 1,000 L</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use mL for small volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use m³ for large volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Account for significant figures</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Flow calculations</li>
                    <li><strong>Construction:</strong> Material volumes</li>
                    <li><strong>Science:</strong> Laboratory work</li>
                    <li><strong>Industry:</strong> Process design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMlToM3(milliliters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milliliters) && milliliters !== '') {
        const cubicMeters = milliliters / 1000000;
        document.getElementById('cubicMeterInput').value = cubicMeters.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${milliliters.toLocaleString()} mL = ${cubicMeters.toFixed(10)} m³</strong>
        `;
    } else {
        document.getElementById('cubicMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertM3ToMl(cubicMeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cubicMeters) && cubicMeters !== '') {
        const milliliters = cubicMeters * 1000000;
        document.getElementById('milliliterInput').value = milliliters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${cubicMeters} m³ = ${milliliters.toLocaleString(undefined, {maximumFractionDigits: 6})} mL</strong>
        `;
    } else {
        document.getElementById('milliliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milliliterInput').value = '';
    document.getElementById('cubicMeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mlValue = document.getElementById('milliliterInput').value;
    const m3Value = document.getElementById('cubicMeterInput').value;
    
    document.getElementById('milliliterInput').value = m3Value;
    document.getElementById('cubicMeterInput').value = mlValue;
    
    if (m3Value) {
        convertMlToM3(parseFloat(m3Value));
    } else if (mlValue) {
        convertM3ToMl(parseFloat(mlValue));
    }
}

// Add event listeners
document.getElementById('milliliterInput').addEventListener('input', function() {
    convertMlToM3(parseFloat(this.value));
});

document.getElementById('cubicMeterInput').addEventListener('input', function() {
    convertM3ToMl(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
