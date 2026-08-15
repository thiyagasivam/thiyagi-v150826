<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilogram to Milligram Converter 2026 - kg to mg Calculator | Thiyagi</title>
<meta name="description" content="Free online Kilogram to Milligram converter 2026. Convert kg to mg and mg to kg instantly with accurate mass conversion.">
<meta name="keywords" content="kilogram to milligram converter 2026, kg to mg, mass conversion, weight units, metric calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilogram to Milligram Converter 2026 - kg to mg Calculator">
<meta property="og:description" content="Free online Kilogram to Milligram converter 2026. Convert kg to mg and mg to kg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilogram-to-milligram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilogram to Milligram Converter 2026 - kg to mg Calculator">
<meta property="twitter:description" content="Free online Kilogram to Milligram converter 2026. Convert kg to mg and mg to kg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-balance-scale text-teal-600 mr-3"></i>
                Kilogram to Milligram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilograms (kg) and milligrams (mg) for mass measurements, medical dosages, scientific calculations, and laboratory work
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilogram Input -->
                <div class="space-y-4">
                    <label for="kilogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-teal-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input
                        type="number"
                        id="kilogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter kilograms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Large mass measurements
                    </div>
                </div>

                <!-- Milligram Input -->
                <div class="space-y-4">
                    <label for="milligramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-pills text-cyan-600 mr-2"></i>Milligrams (mg)
                    </label>
                    <input
                        type="number"
                        id="milligramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter milligrams"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Small mass measurements
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
            <!-- Mass Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Mass Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kilograms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Milligrams</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.000001 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.001 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 mg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 mg</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 mg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-user-md text-teal-600 mr-3"></i>Practical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Medical Dosages:</strong><br>
                        • Vitamin C: 500-2,000 mg (0.0005-0.002 kg)<br>
                        • Aspirin: 325-650 mg<br>
                        • Caffeine: 50-200 mg<br>
                        • Prescription drugs: 1-1,000 mg
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Laboratory Work:</strong><br>
                        • Chemical samples: 1-10,000 mg<br>
                        • Reagent quantities: 10-1,000 mg<br>
                        • Analytical standards: 0.1-100 mg<br>
                        • Microbalance readings: 0.01-10 mg
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Everyday Items:</strong><br>
                        • Salt (1 tsp): 5,000 mg (0.005 kg)<br>
                        • Sugar cube: 4,000 mg (0.004 kg)<br>
                        • Paper clip: 1,000 mg (0.001 kg)<br>
                        • Penny: 2,500 mg (0.0025 kg)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Mass Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>kg:</strong> SI base unit of mass</li>
                    <li><strong>mg:</strong> 10⁻³ grams</li>
                    <li><strong>Conversion:</strong> 1 kg = 1,000,000 mg</li>
                    <li><strong>Prefix:</strong> Milli = thousandth</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>kg for large masses</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>mg for small quantities</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Check decimal places</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use appropriate precision</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medicine:</strong> Drug dosages</li>
                    <li><strong>Laboratory:</strong> Sample prep</li>
                    <li><strong>Science:</strong> Measurements</li>
                    <li><strong>Industry:</strong> Quality control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKilogramToMilligram(kilogram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilogram) && kilogram !== '') {
        // 1 kg = 1,000,000 mg
        const milligram = kilogram * 1000000;
        document.getElementById('milligramInput').value = milligram;
        
        // Use scientific notation for very large numbers
        const displayMg = milligram >= 1e6 ? milligram.toExponential(3) : milligram.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${kilogram} kg = ${displayMg} mg</strong>
        `;
    } else {
        document.getElementById('milligramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMilligramToKilogram(milligram) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milligram) && milligram !== '') {
        // 1 mg = 0.000001 kg
        const kilogram = milligram / 1000000;
        document.getElementById('kilogramInput').value = kilogram.toFixed(9);
        
        // Use scientific notation for very small numbers
        const displayKg = kilogram < 1e-6 ? kilogram.toExponential(3) : kilogram.toFixed(6);
        const displayMg = milligram >= 1e6 ? milligram.toExponential(3) : milligram.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${displayMg} mg = ${displayKg} kg</strong>
        `;
    } else {
        document.getElementById('kilogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kilogramInput').value = '';
    document.getElementById('milligramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kilogramValue = document.getElementById('kilogramInput').value;
    const milligramValue = document.getElementById('milligramInput').value;
    
    document.getElementById('kilogramInput').value = milligramValue;
    document.getElementById('milligramInput').value = kilogramValue;
    
    if (milligramValue) {
        convertKilogramToMilligram(parseFloat(milligramValue));
    } else if (kilogramValue) {
        convertMilligramToKilogram(parseFloat(kilogramValue));
    }
}

// Add event listeners
document.getElementById('kilogramInput').addEventListener('input', function() {
    convertKilogramToMilligram(parseFloat(this.value));
});

document.getElementById('milligramInput').addEventListener('input', function() {
    convertMilligramToKilogram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
