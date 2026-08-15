<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Meter to Square Centimeter Converter 2026 - m² to cm² Calculator | Thiyagi</title>
<meta name="description" content="Free online Square Meter to Square Centimeter converter 2026. Convert m² to cm² and cm² to m² instantly with accurate area conversion.">
<meta name="keywords" content="square meter to square centimeter converter 2026, m² to cm², area conversion, metric units, surface area calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Meter to Square Centimeter Converter 2026 - m² to cm² Calculator">
<meta property="og:description" content="Free online Square Meter to Square Centimeter converter 2026. Convert m² to cm² and cm² to m² instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-meter-to-square-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Meter to Square Centimeter Converter 2026 - m² to cm² Calculator">
<meta property="twitter:description" content="Free online Square Meter to Square Centimeter converter 2026. Convert m² to cm² and cm² to m² instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-square text-emerald-600 mr-3"></i>
                Square Meter to Square Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between square meters (m²) and square centimeters (cm²) for area measurements, construction, design, and scientific calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Meter Input -->
                <div class="space-y-4">
                    <label for="squareMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-expand-arrows-alt text-emerald-600 mr-2"></i>Square Meters (m²)
                    </label>
                    <input
                        type="number"
                        id="squareMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter square meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Larger area measurements
                    </div>
                </div>

                <!-- Square Centimeter Input -->
                <div class="space-y-4">
                    <label for="squareCentimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-compress-arrows-alt text-green-600 mr-2"></i>Square Centimeters (cm²)
                    </label>
                    <input
                        type="number"
                        id="squareCentimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter square centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Smaller area measurements
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-green-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Area Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Area Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Square Meters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Square Centimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.0001 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 cm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.001 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 cm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 cm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 cm²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 cm²</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 m²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 cm²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-emerald-600 mr-3"></i>Practical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Room & Building Areas:</strong><br>
                        • Small room: 10-20 m² (100,000-200,000 cm²)<br>
                        • Living room: 25-40 m²<br>
                        • Apartment: 50-100 m²<br>
                        • House: 100-300 m²
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Small Surface Areas:</strong><br>
                        • Paper sheet: 620 cm² (0.062 m²)<br>
                        • Smartphone screen: 50-100 cm²<br>
                        • Tablet screen: 200-600 cm²<br>
                        • Monitor screen: 1,000-4,000 cm²
                    </div>
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Design & Construction:</strong><br>
                        • Tile area: 100-900 cm² (0.01-0.09 m²)<br>
                        • Window area: 1-5 m² (10,000-50,000 cm²)<br>
                        • Door area: 2 m² (20,000 cm²)<br>
                        • Wall sections: 5-20 m²
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Area Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>m²:</strong> Square meters</li>
                    <li><strong>cm²:</strong> Square centimeters</li>
                    <li><strong>Conversion:</strong> 1 m² = 10,000 cm²</li>
                    <li><strong>Formula:</strong> Length × Width</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>m² for large areas</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>cm² for small areas</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Consider precision needs</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Match unit to scale</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Construction:</strong> Area calculations</li>
                    <li><strong>Design:</strong> Surface planning</li>
                    <li><strong>Science:</strong> Research measurements</li>
                    <li><strong>Real Estate:</strong> Property sizing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertSquareMeterToSquareCentimeter(squareMeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareMeter) && squareMeter !== '') {
        // 1 m² = 10,000 cm²
        const squareCentimeter = squareMeter * 10000;
        document.getElementById('squareCentimeterInput').value = squareCentimeter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${squareMeter} m² = ${squareCentimeter.toLocaleString()} cm²</strong>
        `;
    } else {
        document.getElementById('squareCentimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertSquareCentimeterToSquareMeter(squareCentimeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareCentimeter) && squareCentimeter !== '') {
        // 1 cm² = 0.0001 m²
        const squareMeter = squareCentimeter / 10000;
        document.getElementById('squareMeterInput').value = squareMeter.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${squareCentimeter.toLocaleString()} cm² = ${squareMeter.toFixed(4)} m²</strong>
        `;
    } else {
        document.getElementById('squareMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('squareMeterInput').value = '';
    document.getElementById('squareCentimeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const squareMeterValue = document.getElementById('squareMeterInput').value;
    const squareCentimeterValue = document.getElementById('squareCentimeterInput').value;
    
    document.getElementById('squareMeterInput').value = squareCentimeterValue;
    document.getElementById('squareCentimeterInput').value = squareMeterValue;
    
    if (squareCentimeterValue) {
        convertSquareMeterToSquareCentimeter(parseFloat(squareCentimeterValue));
    } else if (squareMeterValue) {
        convertSquareCentimeterToSquareMeter(parseFloat(squareMeterValue));
    }
}

// Add event listeners
document.getElementById('squareMeterInput').addEventListener('input', function() {
    convertSquareMeterToSquareCentimeter(parseFloat(this.value));
});

document.getElementById('squareCentimeterInput').addEventListener('input', function() {
    convertSquareCentimeterToSquareMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
