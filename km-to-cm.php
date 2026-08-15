<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilometer to Centimeter Converter 2026 - km to cm Calculator | Thiyagi</title>
<meta name="description" content="Free online Kilometer to Centimeter converter 2026. Convert km to cm and cm to km instantly with accurate length conversion.">
<meta name="keywords" content="kilometer to centimeter converter 2026, km to cm, length converter, distance conversion, metric system">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilometer to Centimeter Converter 2026 - km to cm Calculator">
<meta property="og:description" content="Free online Kilometer to Centimeter converter 2026. Convert km to cm and cm to km instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/km-to-cm.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilometer to Centimeter Converter 2026 - km to cm Calculator">
<meta property="twitter:description" content="Free online Kilometer to Centimeter converter 2026. Convert km to cm and cm to km instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-road text-green-600 mr-3"></i>
                Kilometer to Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilometers and centimeters for distance measurements, mapping, and metric calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilometer Input -->
                <div class="space-y-4">
                    <label for="kmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-map-marked-alt text-green-600 mr-2"></i>Kilometers (km)
                    </label>
                    <input
                        type="number"
                        id="kmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter kilometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 km = 100,000 cm
                    </div>
                </div>

                <!-- Centimeter Input -->
                <div class="space-y-4">
                    <label for="cmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-emerald-600 mr-2"></i>Centimeters (cm)
                    </label>
                    <input
                        type="number"
                        id="cmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cm = 0.00001 km
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Distance Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Common Distance Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kilometers</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Centimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 cm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">500,000 cm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 km</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 cm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-globe text-green-600 mr-3"></i>Real-World Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>City Distances:</strong><br>
                        • City block: 0.1 km (10,000 cm)<br>
                        • School zone: 0.5 km (50,000 cm)<br>
                        • City center: 2 km (200,000 cm)<br>
                        • Suburb to downtown: 10 km (1,000,000 cm)
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Sports & Recreation:</strong><br>
                        • Running track: 0.4 km (40,000 cm)<br>
                        • 5K race: 5 km (500,000 cm)<br>
                        • 10K race: 10 km (1,000,000 cm)<br>
                        • Half marathon: 21.1 km (2,110,000 cm)
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Transportation:</strong><br>
                        • Walking distance: 0.5-2 km<br>
                        • Cycling distance: 5-20 km<br>
                        • Local commute: 10-30 km<br>
                        • Highway distance: 50-500 km
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Metric Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Kilometer:</strong> 1,000 meters</li>
                    <li><strong>Centimeter:</strong> 0.01 meters</li>
                    <li><strong>Conversion:</strong> 1 km = 100,000 cm</li>
                    <li><strong>Base unit:</strong> Meter (m)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>km for long distances</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>cm for small measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Easy 100,000:1 ratio</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Standard metric system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Geography:</strong> Map distances</li>
                    <li><strong>Transportation:</strong> Travel planning</li>
                    <li><strong>Sports:</strong> Race distances</li>
                    <li><strong>Engineering:</strong> Scale conversion</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKmToCm(km) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(km) && km !== '') {
        // 1 kilometer = 100,000 centimeters
        const cm = km * 100000;
        document.getElementById('cmInput').value = cm;
        
        // Format with appropriate number notation
        const formattedCm = cm >= 1000000 ? cm.toExponential(3) : cm.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${km} km = ${formattedCm} cm</strong>
        `;
    } else {
        document.getElementById('cmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCmToKm(cm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cm) && cm !== '') {
        // 1 centimeter = 0.00001 kilometers
        const km = cm / 100000;
        document.getElementById('kmInput').value = km.toFixed(8);
        
        // Format input cm with commas if large
        const formattedCm = cm >= 1000 ? cm.toLocaleString() : cm;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${formattedCm} cm = ${km.toFixed(6)} km</strong>
        `;
    } else {
        document.getElementById('kmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kmInput').value = '';
    document.getElementById('cmInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kmValue = document.getElementById('kmInput').value;
    const cmValue = document.getElementById('cmInput').value;
    
    document.getElementById('kmInput').value = cmValue;
    document.getElementById('cmInput').value = kmValue;
    
    if (cmValue) {
        convertKmToCm(parseFloat(cmValue));
    } else if (kmValue) {
        convertCmToKm(parseFloat(kmValue));
    }
}

// Add event listeners
document.getElementById('kmInput').addEventListener('input', function() {
    convertKmToCm(parseFloat(this.value));
});

document.getElementById('cmInput').addEventListener('input', function() {
    convertCmToKm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
