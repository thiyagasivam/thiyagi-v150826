<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micrometer to Inch Converter 2026 - µm to inch Calculator | Thiyagi</title>
<meta name="description" content="Free online Micrometer to Inch converter 2026. Convert µm to inch and inch to µm instantly with accurate precision measurement conversion.">
<meta name="keywords" content="micrometer to inch converter 2026, µm to inch, micron to inch, precision measurement, scientific converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micrometer to Inch Converter 2026 - µm to inch Calculator">
<meta property="og:description" content="Free online Micrometer to Inch converter 2026. Convert µm to inch and inch to µm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micrometer-to-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micrometer to Inch Converter 2026 - µm to inch Calculator">
<meta name="twitter:description" content="Free online Micrometer to Inch converter 2026. Convert µm to inch and inch to µm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-orange-600 mr-3"></i>
                Micrometer to Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between micrometers and inches for precision engineering and scientific measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrometer Input -->
                <div class="space-y-4">
                    <label for="micrometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-orange-600 mr-2"></i>Micrometer (µm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter micrometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 µm = 0.00003937 inch
                    </div>
                </div>

                <!-- Inch Input -->
                <div class="space-y-4">
                    <label for="inchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-amber-600 mr-2"></i>Inch (in)
                    </label>
                    <input
                        type="number"
                        id="inchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter inches"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 inch = 25,400 µm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Precision Measurements -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>Precision Measurement Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Micrometers</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Inches</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00003937 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0003937 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.003937 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 µm (1 mm)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.03937 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 µm (1 cm)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.3937 in</td>
                            </tr>
                            <tr>
                                <td class="py-2">25,400 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0000 in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-search text-orange-600 mr-3"></i>Real-World Scale Reference
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Biological Scale:</strong><br>
                        • Human hair diameter: 17-180 µm<br>
                        • Red blood cell: 6-8 µm<br>
                        • Bacteria: 0.5-5 µm<br>
                        • Virus: 0.02-0.3 µm
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Industrial Tolerances:</strong><br>
                        • Precision machining: ±1-10 µm<br>
                        • Surface roughness: 0.1-100 µm<br>
                        • Semiconductor: 0.01-1 µm<br>
                        • Optical components: ±0.1 µm
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Material Properties:</strong><br>
                        • Paint thickness: 25-100 µm<br>
                        • Plastic film: 10-250 µm<br>
                        • Paper thickness: 70-180 µm<br>
                        • Aluminum foil: 6-20 µm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Measurement Systems
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Micrometer:</strong> Metric unit (SI)</li>
                    <li><strong>Inch:</strong> Imperial/US unit</li>
                    <li><strong>Conversion:</strong> 1 in = 25,400 µm exactly</li>
                    <li><strong>Symbol:</strong> µm (micron alternative)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Use appropriate scale instruments</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Control environmental conditions</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Account for thermal expansion</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Calibrate measuring devices</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Manufacturing:</strong> Quality control</li>
                    <li><strong>Research:</strong> Material analysis</li>
                    <li><strong>Electronics:</strong> Component sizing</li>
                    <li><strong>Medical:</strong> Microscopy measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrometerToInch(micrometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrometers) && micrometers !== '') {
        const inches = micrometers / 25400;
        document.getElementById('inchInput').value = inches.toFixed(12);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${micrometers} µm = ${inches.toFixed(12)} inch</strong>
        `;
    } else {
        document.getElementById('inchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertInchToMicrometer(inches) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(inches) && inches !== '') {
        const micrometers = inches * 25400;
        document.getElementById('micrometerInput').value = micrometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${inches} inch = ${micrometers.toFixed(6)} µm</strong>
        `;
    } else {
        document.getElementById('micrometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('micrometerInput').value = '';
    document.getElementById('inchInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const micrometerValue = document.getElementById('micrometerInput').value;
    const inchValue = document.getElementById('inchInput').value;
    
    document.getElementById('micrometerInput').value = inchValue;
    document.getElementById('inchInput').value = micrometerValue;
    
    if (inchValue) {
        convertMicrometerToInch(parseFloat(inchValue));
    } else if (micrometerValue) {
        convertInchToMicrometer(parseFloat(micrometerValue));
    }
}

// Add event listeners
document.getElementById('micrometerInput').addEventListener('input', function() {
    convertMicrometerToInch(parseFloat(this.value));
});

document.getElementById('inchInput').addEventListener('input', function() {
    convertInchToMicrometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
