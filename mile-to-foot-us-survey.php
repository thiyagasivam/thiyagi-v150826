<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile to Foot US Survey Converter 2026 - mi to ft US Calculator | Thiyagi</title>
<meta name="description" content="Free online Mile to Foot US Survey converter 2026. Convert mi to ft US and ft US to mi instantly with accurate surveying measurements.">
<meta name="keywords" content="mile to foot us survey converter 2026, mi to ft US, surveying measurements, land survey, geodetic measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile to Foot US Survey Converter 2026 - mi to ft US Calculator">
<meta property="og:description" content="Free online Mile to Foot US Survey converter 2026. Convert mi to ft US and ft US to mi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-to-foot-us-survey.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile to Foot US Survey Converter 2026 - mi to ft US Calculator">
<meta name="twitter:description" content="Free online Mile to Foot US Survey converter 2026. Convert mi to ft US and ft US to mi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-map-marked-alt text-green-600 mr-3"></i>
                Mile to Foot US Survey Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between miles and US Survey feet for precise land surveying, geodetic measurements, and property mapping
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mile Input -->
                <div class="space-y-4">
                    <label for="mileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-road text-green-600 mr-2"></i>Mile (mi)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mi = 5,280.0017 ft US
                    </div>
                </div>

                <!-- Foot US Survey Input -->
                <div class="space-y-4">
                    <label for="footUSInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-vertical text-emerald-600 mr-2"></i>Foot US Survey (ft US)
                    </label>
                    <input
                        type="number"
                        id="footUSInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter US Survey feet"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft US = 0.0001894 mi
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
            <!-- Distance Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Distance Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Mile</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Foot US Survey</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">528.00 ft US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,640.00 ft US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,280.00 ft US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">26,400.01 ft US</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">52,800.02 ft US</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">528,000.17 ft US</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Surveying Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-compass text-green-600 mr-3"></i>Surveying Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Property Surveying:</strong><br>
                        • Residential lot: 100-300 ft US<br>
                        • City block: 400-800 ft US<br>
                        • Farm field: 0.25-2 mi<br>
                        • Ranch property: 1-10+ mi
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>US Survey Foot vs International:</strong><br>
                        • US Survey foot: 1200/3937 m<br>
                        • International foot: 0.3048 m<br>
                        • Difference: 2 ppm (parts per million)<br>
                        • Critical for precise surveying
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Geographic Features:</strong><br>
                        • Section (1 mi²): 5,280 × 5,280 ft US<br>
                        • Township: 6 mi × 6 mi<br>
                        • County boundaries: 10-100+ mi<br>
                        • State boundaries: 100-1000+ mi
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Distance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Mile:</strong> 5,280 feet (statute mile)</li>
                    <li><strong>US Survey Foot:</strong> 1200/3937 meter</li>
                    <li><strong>Precise ratio:</strong> 1 mi = 5,280.0016896 ft US</li>
                    <li><strong>Legal definition:</strong> US surveying standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Used in US land surveys</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Different from international foot</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Critical for legal boundaries</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Required for precision mapping</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Surveying:</strong> Property boundaries</li>
                    <li><strong>Mapping:</strong> Geodetic surveys</li>
                    <li><strong>Legal:</strong> Land descriptions</li>
                    <li><strong>Engineering:</strong> Infrastructure projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMileToFootUS(miles) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(miles) && miles !== '') {
        // Using precise US Survey foot: 1 mile = 5280.0016896 US Survey feet
        const footUS = miles * 5280.0016896;
        document.getElementById('footUSInput').value = footUS.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${miles} mi = ${footUS.toFixed(3)} ft US</strong>
        `;
    } else {
        document.getElementById('footUSInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFootUSToMile(footUS) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(footUS) && footUS !== '') {
        // Using precise US Survey foot: 1 mile = 5280.0016896 US Survey feet
        const miles = footUS / 5280.0016896;
        document.getElementById('mileInput').value = miles.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${footUS} ft US = ${miles.toFixed(6)} mi</strong>
        `;
    } else {
        document.getElementById('mileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('footUSInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const footUSValue = document.getElementById('footUSInput').value;
    
    document.getElementById('mileInput').value = footUSValue;
    document.getElementById('footUSInput').value = mileValue;
    
    if (footUSValue) {
        convertMileToFootUS(parseFloat(footUSValue));
    } else if (mileValue) {
        convertFootUSToMile(parseFloat(mileValue));
    }
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', function() {
    convertMileToFootUS(parseFloat(this.value));
});

document.getElementById('footUSInput').addEventListener('input', function() {
    convertFootUSToMile(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
