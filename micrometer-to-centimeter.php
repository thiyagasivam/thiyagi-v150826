<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micrometer to Centimeter Converter 2026 - µm to cm Calculator | Thiyagi</title>
<meta name="description" content="Free online Micrometer to Centimeter converter 2026. Convert µm to cm and cm to µm instantly with accurate metric length conversion.">
<meta name="keywords" content="micrometer to centimeter converter 2026, µm to cm, micron to centimeter, metric converter, scientific measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micrometer to Centimeter Converter 2026 - µm to cm Calculator">
<meta property="og:description" content="Free online Micrometer to Centimeter converter 2026. Convert µm to cm and cm to µm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micrometer-to-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micrometer to Centimeter Converter 2026 - µm to cm Calculator">
<meta name="twitter:description" content="Free online Micrometer to Centimeter converter 2026. Convert µm to cm and cm to µm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-violet-600 mr-3"></i>
                Micrometer to Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between micrometers and centimeters for precise metric measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrometer Input -->
                <div class="space-y-4">
                    <label for="micrometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-violet-600 mr-2"></i>Micrometer (µm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter micrometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 µm = 0.0001 cm
                    </div>
                </div>

                <!-- Centimeter Input -->
                <div class="space-y-4">
                    <label for="centimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Centimeter (cm)
                    </label>
                    <input
                        type="number"
                        id="centimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter centimeters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 cm = 10,000 µm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-violet-500 hover:bg-violet-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Metric Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Metric Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Micrometers</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Centimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0001 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 cm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 µm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 cm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Size Comparison Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-search text-violet-600 mr-3"></i>Size Comparison Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Biological Objects:</strong><br>
                        • Human hair: 17-180 µm (0.0017-0.018 cm)<br>
                        • Red blood cell: 6-8 µm (0.0006-0.0008 cm)<br>
                        • Bacteria: 0.5-5 µm (0.00005-0.0005 cm)<br>
                        • White blood cell: 7-20 µm (0.0007-0.002 cm)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Everyday Materials:</strong><br>
                        • Pollen grain: 10-100 µm (0.001-0.01 cm)<br>
                        • Dust particle: 0.5-100 µm (0.00005-0.01 cm)<br>
                        • Plastic wrap: 10-25 µm (0.001-0.0025 cm)<br>
                        • Spider silk: 2-5 µm (0.0002-0.0005 cm)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Industrial Applications:</strong><br>
                        • Paint thickness: 25-100 µm (0.0025-0.01 cm)<br>
                        • Filter pore size: 0.1-10 µm (0.00001-0.001 cm)<br>
                        • Surface roughness: 0.1-50 µm (0.00001-0.005 cm)<br>
                        • Thin film coating: 0.01-10 µm (0.000001-0.001 cm)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>Metric System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Micrometer:</strong> 10⁻⁶ meters</li>
                    <li><strong>Centimeter:</strong> 10⁻² meters</li>
                    <li><strong>Conversion:</strong> 1 cm = 10,000 µm</li>
                    <li><strong>Symbol:</strong> µm (micron alternative)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Use appropriate scale tools</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Consider measurement precision</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Account for environmental factors</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Regular instrument calibration</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Research:</strong> Microscopy measurements</li>
                    <li><strong>Manufacturing:</strong> Quality control</li>
                    <li><strong>Medical:</strong> Cell size analysis</li>
                    <li><strong>Materials:</strong> Coating thickness</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrometerToCentimeter(micrometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrometers) && micrometers !== '') {
        const centimeters = micrometers / 10000;
        document.getElementById('centimeterInput').value = centimeters.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${micrometers} µm = ${centimeters.toFixed(8)} cm</strong>
        `;
    } else {
        document.getElementById('centimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCentimeterToMicrometer(centimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(centimeters) && centimeters !== '') {
        const micrometers = centimeters * 10000;
        document.getElementById('micrometerInput').value = micrometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${centimeters} cm = ${micrometers.toFixed(6)} µm</strong>
        `;
    } else {
        document.getElementById('micrometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('micrometerInput').value = '';
    document.getElementById('centimeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const micrometerValue = document.getElementById('micrometerInput').value;
    const centimeterValue = document.getElementById('centimeterInput').value;
    
    document.getElementById('micrometerInput').value = centimeterValue;
    document.getElementById('centimeterInput').value = micrometerValue;
    
    if (centimeterValue) {
        convertMicrometerToCentimeter(parseFloat(centimeterValue));
    } else if (micrometerValue) {
        convertCentimeterToMicrometer(parseFloat(micrometerValue));
    }
}

// Add event listeners
document.getElementById('micrometerInput').addEventListener('input', function() {
    convertMicrometerToCentimeter(parseFloat(this.value));
});

document.getElementById('centimeterInput').addEventListener('input', function() {
    convertCentimeterToMicrometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
