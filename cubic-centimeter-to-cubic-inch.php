<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Centimeter to Cubic Inch Converter 2026 - cm³ to in³ Calculator | Thiyagi</title>
<meta name="description" content="Free online Cubic Centimeter to Cubic Inch converter 2026. Convert cm³ to in³ and in³ to cm³ instantly with accurate volume conversion for engineering and design.">
<meta name="keywords" content="cubic centimeter to cubic inch converter 2026, cm³ to in³, volume converter, metric to imperial, engine displacement, cubic volume">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Centimeter to Cubic Inch Converter 2026 - cm³ to in³ Calculator">
<meta property="og:description" content="Free online Cubic Centimeter to Cubic Inch converter 2026. Convert cm³ to in³ and in³ to cm³ instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-centimeter-to-cubic-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Centimeter to Cubic Inch Converter 2026 - cm³ to in³ Calculator">
<meta name="twitter:description" content="Free online Cubic Centimeter to Cubic Inch converter 2026. Convert cm³ to in³ and in³ to cm³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-cyan-600 mr-3"></i>
                Cubic Centimeter to Cubic Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic centimeters and cubic inches for engine displacement, volume calculations, and engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Centimeter Input -->
                <div class="space-y-4">
                    <label for="cubicCentimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-cyan-600 mr-2"></i>Cubic Centimeter (cm³)
                    </label>
                    <input
                        type="number"
                        id="cubicCentimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cm³ = 0.061024 in³
                    </div>
                </div>

                <!-- Cubic Inch Input -->
                <div class="space-y-4">
                    <label for="cubicInchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-box text-blue-600 mr-2"></i>Cubic Inch (in³)
                    </label>
                    <input
                        type="number"
                        id="cubicInchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic inches"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 in³ = 16.3871 cm³
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Centimeter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Inch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0610 in³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.610 in³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6.102 in³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">61.024 in³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">305.119 in³</td>
                            </tr>
                            <tr>
                                <td class="py-2">16,387 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 in³</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engine & Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-car text-cyan-600 mr-3"></i>Engine & Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Motorcycle Engines:</strong><br>
                        • 125cc: 125 cm³ (7.6 in³)<br>
                        • 250cc: 250 cm³ (15.3 in³)<br>
                        • 600cc: 600 cm³ (36.6 in³)<br>
                        • 1000cc: 1000 cm³ (61.0 in³)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Car Engines:</strong><br>
                        • 1.0L: 1000 cm³ (61.0 in³)<br>
                        • 2.0L: 2000 cm³ (122.0 in³)<br>
                        • 3.5L: 3500 cm³ (213.6 in³)<br>
                        • 5.0L: 5000 cm³ (305.1 in³)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Other Volumes:</strong><br>
                        • Syringe: 1-10 cm³ (0.06-0.61 in³)<br>
                        • Test tube: 10-50 cm³ (0.61-3.05 in³)<br>
                        • Small bottle: 250 cm³ (15.3 in³)<br>
                        • Engine cylinder: 300-600 cm³ (18.3-36.6 in³)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cubic Centimeter:</strong> cm³ or cc</li>
                    <li><strong>Cubic Inch:</strong> in³</li>
                    <li><strong>Conversion:</strong> 1 in³ = 16.3871 cm³</li>
                    <li><strong>Also known:</strong> cc = cm³</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Use precise measuring tools</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Account for temperature effects</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Consider displacement vs. volume</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Verify calculation accuracy</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Automotive:</strong> Engine displacement</li>
                    <li><strong>Engineering:</strong> Volume calculations</li>
                    <li><strong>Medical:</strong> Dosage measurements</li>
                    <li><strong>Manufacturing:</strong> Part specifications</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCmToIn(cubicCentimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cubicCentimeters) && cubicCentimeters !== '') {
        const cubicInches = cubicCentimeters * 0.0610237;
        document.getElementById('cubicInchInput').value = cubicInches.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${cubicCentimeters} cm³ = ${cubicInches.toFixed(6)} in³</strong>
        `;
    } else {
        document.getElementById('cubicInchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertInToCm(cubicInches) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cubicInches) && cubicInches !== '') {
        const cubicCentimeters = cubicInches * 16.3871;
        document.getElementById('cubicCentimeterInput').value = cubicCentimeters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${cubicInches} in³ = ${cubicCentimeters.toFixed(6)} cm³</strong>
        `;
    } else {
        document.getElementById('cubicCentimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('cubicCentimeterInput').value = '';
    document.getElementById('cubicInchInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cmValue = document.getElementById('cubicCentimeterInput').value;
    const inValue = document.getElementById('cubicInchInput').value;
    
    document.getElementById('cubicCentimeterInput').value = inValue;
    document.getElementById('cubicInchInput').value = cmValue;
    
    if (inValue) {
        convertCmToIn(parseFloat(inValue));
    } else if (cmValue) {
        convertInToCm(parseFloat(cmValue));
    }
}

// Add event listeners
document.getElementById('cubicCentimeterInput').addEventListener('input', function() {
    convertCmToIn(parseFloat(this.value));
});

document.getElementById('cubicInchInput').addEventListener('input', function() {
    convertInToCm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
