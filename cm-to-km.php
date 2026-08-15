<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centimeter to Kilometer Converter 2026 - cm to km Calculator | Thiyagi</title>
<meta name="description" content="Free online Centimeter to Kilometer converter 2026. Convert cm to km and km to cm instantly with accurate length measurement conversion.">
<meta name="keywords" content="centimeter to kilometer converter 2026, cm to km, length conversion, metric distance, measurement calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centimeter to Kilometer Converter 2026 - cm to km Calculator">
<meta property="og:description" content="Free online Centimeter to Kilometer converter 2026. Convert cm to km and km to cm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cm-to-km.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centimeter to Kilometer Converter 2026 - cm to km Calculator">
<meta property="twitter:description" content="Free online Centimeter to Kilometer converter 2026. Convert cm to km and km to cm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-horizontal text-green-600 mr-3"></i>
                Centimeter to Kilometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between centimeters (cm) and kilometers (km) for distance measurements, mapping, and geographic calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centimeter Input -->
                <div class="space-y-4">
                    <label for="centimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-green-600 mr-2"></i>Centimeters (cm)
                    </label>
                    <input
                        type="number"
                        id="centimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        100,000 cm = 1 km
                    </div>
                </div>

                <!-- Kilometer Input -->
                <div class="space-y-4">
                    <label for="kilometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-road text-emerald-600 mr-2"></i>Kilometers (km)
                    </label>
                    <input
                        type="number"
                        id="kilometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter kilometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 km = 100,000 cm
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
            <!-- Distance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Distance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Centimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilometers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50,000 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 km</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 km</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-map-marked-alt text-green-600 mr-3"></i>Real-World Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Small Objects (cm):</strong><br>
                        • Credit card: 8.6 cm<br>
                        • Smartphone: 14-16 cm<br>
                        • A4 paper width: 21 cm<br>
                        • Ruler: 30 cm
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Medium Distances (m to km):</strong><br>
                        • Football field: 100 m = 10,000 cm<br>
                        • City block: 100-200 m<br>
                        • Running track: 400 m = 40,000 cm<br>
                        • School campus: 500-1,000 m
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Long Distances (km):</strong><br>
                        • Marathon: 42.2 km = 4,220,000 cm<br>
                        • City to city: 50-500 km<br>
                        • Highway distances: 100-1,000 km<br>
                        • Cross-country: 1,000+ km
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Centimeter:</strong> 1/100 meter</li>
                    <li><strong>Kilometer:</strong> 1,000 meters</li>
                    <li><strong>Conversion:</strong> 1 km = 100,000 cm</li>
                    <li><strong>Factor:</strong> 10⁵ difference</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>cm for small measurements</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>km for long distances</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Scientific notation helpful</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>5-digit difference scale</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Geography:</strong> Map scales</li>
                    <li><strong>Engineering:</strong> Project planning</li>
                    <li><strong>Navigation:</strong> GPS coordinates</li>
                    <li><strong>Science:</strong> Data analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCentimeterToKilometer(centimeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(centimeter) && centimeter !== '') {
        // 1 kilometer = 100,000 centimeters
        const kilometer = centimeter / 100000;
        document.getElementById('kilometerInput').value = kilometer;
        
        let formattedKm = kilometer;
        if (kilometer < 0.001) {
            formattedKm = kilometer.toExponential(3);
        } else {
            formattedKm = kilometer.toLocaleString(undefined, {maximumFractionDigits: 6});
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${centimeter.toLocaleString()} cm = ${formattedKm} km</strong>
        `;
    } else {
        document.getElementById('kilometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilometerToCentimeter(kilometer) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilometer) && kilometer !== '') {
        // 1 kilometer = 100,000 centimeters
        const centimeter = kilometer * 100000;
        document.getElementById('centimeterInput').value = centimeter;
        
        let formattedCm = centimeter;
        if (centimeter >= 1000000) {
            formattedCm = centimeter.toExponential(2);
        } else {
            formattedCm = centimeter.toLocaleString();
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${kilometer} km = ${formattedCm} cm</strong>
        `;
    } else {
        document.getElementById('centimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('centimeterInput').value = '';
    document.getElementById('kilometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const centimeterValue = document.getElementById('centimeterInput').value;
    const kilometerValue = document.getElementById('kilometerInput').value;
    
    document.getElementById('centimeterInput').value = kilometerValue;
    document.getElementById('kilometerInput').value = centimeterValue;
    
    if (kilometerValue) {
        convertCentimeterToKilometer(parseFloat(kilometerValue));
    } else if (centimeterValue) {
        convertKilometerToCentimeter(parseFloat(centimeterValue));
    }
}

// Add event listeners
document.getElementById('centimeterInput').addEventListener('input', function() {
    convertCentimeterToKilometer(parseFloat(this.value));
});

document.getElementById('kilometerInput').addEventListener('input', function() {
    convertKilometerToCentimeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
