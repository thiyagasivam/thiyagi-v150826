<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Inch to Mil Converter 2026 - in to mil Calculator | Thiyagi</title>
<meta name="description" content="Free online Inch to Mil converter 2026. Convert in to mil and mil to in instantly with accurate length conversion for engineering measurements.">
<meta name="keywords" content="inch to mil converter 2026, in to mil, length converter, mil measurement, precision engineering, manufacturing tolerances">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Inch to Mil Converter 2026 - in to mil Calculator">
<meta property="og:description" content="Free online Inch to Mil converter 2026. Convert in to mil and mil to in instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/inch-to-mil.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Inch to Mil Converter 2026 - in to mil Calculator">
<meta name="twitter:description" content="Free online Inch to Mil converter 2026. Convert in to mil and mil to in instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-rose-50 via-pink-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-horizontal text-rose-600 mr-3"></i>
                Inch to Mil Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between inches and mils for precision engineering, manufacturing tolerances, and fine measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Inch Input -->
                <div class="space-y-4">
                    <label for="inchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-rose-600 mr-2"></i>Inch (in)
                    </label>
                    <input
                        type="number"
                        id="inchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-xl"
                        placeholder="Enter inches"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 in = 1,000 mil
                    </div>
                </div>

                <!-- Mil Input -->
                <div class="space-y-4">
                    <label for="milInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search-plus text-pink-600 mr-2"></i>Mil (mil)
                    </label>
                    <input
                        type="number"
                        id="milInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-xl"
                        placeholder="Enter mils"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mil = 0.001 in
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-rose-50 to-pink-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-rose-500 hover:bg-rose-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Length Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-rose-600 mr-3"></i>Length Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Inch</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Mil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mil</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 mil</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 mil</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 mil</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,000 mil</td>
                            </tr>
                            <tr>
                                <td class="py-2">12 in</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">12,000 mil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Precision Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-rose-600 mr-3"></i>Precision Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Electronic Components:</strong><br>
                        • PCB thickness: 62 mil (0.062 in)<br>
                        • Wire gauge: 5-50 mil diameter<br>
                        • Solder mask: 0.8-1.2 mil thick<br>
                        • Component leads: 8-25 mil
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Manufacturing Tolerances:</strong><br>
                        • Precision machining: ±0.5-2 mil<br>
                        • Standard machining: ±5-10 mil<br>
                        • Sheet metal: ±10-50 mil<br>
                        • Injection molding: ±2-10 mil
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Material Thicknesses:</strong><br>
                        • Aluminum foil: 0.6 mil<br>
                        • Plastic wrap: 0.5-1 mil<br>
                        • Paper: 2-10 mil<br>
                        • Paint coating: 1-10 mil
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-rose-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Inch:</strong> Imperial length unit</li>
                    <li><strong>Mil:</strong> 1/1000 of an inch</li>
                    <li><strong>Conversion:</strong> 1 in = 1,000 mil</li>
                    <li><strong>Also called:</strong> Thou (thousandth)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-rose-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Essential for precision work</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Common in electronics</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Used for thin materials</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Critical for tolerances</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-rose-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> PCB design</li>
                    <li><strong>Manufacturing:</strong> Precision parts</li>
                    <li><strong>Aerospace:</strong> Component specs</li>
                    <li><strong>Automotive:</strong> Engine tolerances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertInchToMil(inches) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(inches) && inches !== '') {
        const mils = inches * 1000;
        document.getElementById('milInput').value = mils.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-rose-600 mr-2"></i>
            <strong>${inches} in = ${mils.toFixed(3)} mil</strong>
        `;
    } else {
        document.getElementById('milInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMilToInch(mils) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mils) && mils !== '') {
        const inches = mils / 1000;
        document.getElementById('inchInput').value = inches.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-rose-600 mr-2"></i>
            <strong>${mils} mil = ${inches.toFixed(6)} in</strong>
        `;
    } else {
        document.getElementById('inchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('inchInput').value = '';
    document.getElementById('milInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const inchValue = document.getElementById('inchInput').value;
    const milValue = document.getElementById('milInput').value;
    
    document.getElementById('inchInput').value = milValue;
    document.getElementById('milInput').value = inchValue;
    
    if (milValue) {
        convertInchToMil(parseFloat(milValue));
    } else if (inchValue) {
        convertMilToInch(parseFloat(inchValue));
    }
}

// Add event listeners
document.getElementById('inchInput').addEventListener('input', function() {
    convertInchToMil(parseFloat(this.value));
});

document.getElementById('milInput').addEventListener('input', function() {
    convertMilToInch(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
