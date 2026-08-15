<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Centimeter to Cubic Meter Converter 2026 - cm³ to m³ Calculator | Thiyagi</title>
<meta name="description" content="Free online Cubic Centimeter to Cubic Meter converter 2026. Convert cm³ to m³ and m³ to cm³ instantly with accurate volume conversion.">
<meta name="keywords" content="cubic centimeter to cubic meter converter 2026, cm³ to m³, volume converter, metric volume, cubic units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Centimeter to Cubic Meter Converter 2026 - cm³ to m³ Calculator">
<meta property="og:description" content="Free online Cubic Centimeter to Cubic Meter converter 2026. Convert cm³ to m³ and m³ to cm³ instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-centimeter-to-cubic-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Centimeter to Cubic Meter Converter 2026 - cm³ to m³ Calculator">
<meta property="twitter:description" content="Free online Cubic Centimeter to Cubic Meter converter 2026. Convert cm³ to m³ and m³ to cm³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-teal-600 mr-3"></i>
                Cubic Centimeter to Cubic Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic centimeters and cubic meters for volume measurements, capacity calculations, and engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Centimeter Input -->
                <div class="space-y-4">
                    <label for="cm3Input" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dice-d6 text-teal-600 mr-2"></i>Cubic Centimeters (cm³)
                    </label>
                    <input
                        type="number"
                        id="cm3Input"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter cm³"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cm³ = 0.000001 m³
                    </div>
                </div>

                <!-- Cubic Meter Input -->
                <div class="space-y-4">
                    <label for="m3Input" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cubes text-cyan-600 mr-2"></i>Cubic Meters (m³)
                    </label>
                    <input
                        type="number"
                        id="m3Input"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter m³"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m³ = 1,000,000 cm³
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Volume Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Volume Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Centimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 m³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 m³</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000,000 cm³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 m³</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-teal-600 mr-3"></i>Real-World Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Small Volumes (cm³):</strong><br>
                        • Teaspoon: 5 cm³<br>
                        • Shot glass: 30 cm³<br>
                        • Coffee cup: 240 cm³<br>
                        • Soda can: 355 cm³
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Medium Volumes:</strong><br>
                        • Milk jug: 3,785 cm³ (0.004 m³)<br>
                        • Car fuel tank: 60,000 cm³ (0.06 m³)<br>
                        • Bathtub: 300,000 cm³ (0.3 m³)<br>
                        • Refrigerator: 500,000 cm³ (0.5 m³)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Large Volumes (m³):</strong><br>
                        • Small room: 30 m³<br>
                        • Swimming pool: 100-500 m³<br>
                        • Shipping container: 76 m³<br>
                        • House: 200-800 m³
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Cubic Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>cm³:</strong> (centimeter)³</li>
                    <li><strong>m³:</strong> (meter)³</li>
                    <li><strong>Conversion:</strong> 1 m³ = 10⁶ cm³</li>
                    <li><strong>Also:</strong> 1 cm³ = 1 milliliter</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>cm³ for small objects</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>m³ for rooms, tanks</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>1,000,000:1 ratio</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Scientific notation helpful</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Capacity design</li>
                    <li><strong>Construction:</strong> Material volumes</li>
                    <li><strong>Medicine:</strong> Dosage calculations</li>
                    <li><strong>Chemistry:</strong> Solution volumes</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCm3ToM3(cm3) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cm3) && cm3 !== '') {
        // 1 cubic centimeter = 0.000001 cubic meters (10^-6)
        const m3 = cm3 / 1000000;
        document.getElementById('m3Input').value = m3.toFixed(12);
        
        // Format cm3 with appropriate notation
        const formattedCm3 = cm3 >= 1000 ? cm3.toLocaleString() : cm3;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${formattedCm3} cm³ = ${m3.toExponential(6)} m³</strong>
        `;
    } else {
        document.getElementById('m3Input').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertM3ToCm3(m3) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(m3) && m3 !== '') {
        // 1 cubic meter = 1,000,000 cubic centimeters (10^6)
        const cm3 = m3 * 1000000;
        document.getElementById('cm3Input').value = cm3;
        
        // Format cm3 with appropriate notation
        const formattedCm3 = cm3 >= 1000 ? cm3.toLocaleString() : cm3;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${m3} m³ = ${formattedCm3} cm³</strong>
        `;
    } else {
        document.getElementById('cm3Input').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('cm3Input').value = '';
    document.getElementById('m3Input').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cm3Value = document.getElementById('cm3Input').value;
    const m3Value = document.getElementById('m3Input').value;
    
    document.getElementById('cm3Input').value = m3Value;
    document.getElementById('m3Input').value = cm3Value;
    
    if (m3Value) {
        convertCm3ToM3(parseFloat(m3Value));
    } else if (cm3Value) {
        convertM3ToCm3(parseFloat(cm3Value));
    }
}

// Add event listeners
document.getElementById('cm3Input').addEventListener('input', function() {
    convertCm3ToM3(parseFloat(this.value));
});

document.getElementById('m3Input').addEventListener('input', function() {
    convertM3ToCm3(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
