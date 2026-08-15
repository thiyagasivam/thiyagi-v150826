<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Quart US to Cubic Foot Converter 2026 - qt US to ft³ Calculator | Thiyagi</title>
<meta name="description" content="Free online Quart US to Cubic Foot converter 2026. Convert qt US to ft³ and ft³ to qt US instantly with accurate volume conversion for cooking and construction.">
<meta name="keywords" content="quart us to cubic foot converter 2026, qt US to ft³, volume converter, cooking measurements, construction volume, liquid measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Quart US to Cubic Foot Converter 2026 - qt US to ft³ Calculator">
<meta property="og:description" content="Free online Quart US to Cubic Foot converter 2026. Convert qt US to ft³ and ft³ to qt US instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/quart-us-to-cubic-foot.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Quart US to Cubic Foot Converter 2026 - qt US to ft³ Calculator">
<meta name="twitter:description" content="Free online Quart US to Cubic Foot converter 2026. Convert qt US to ft³ and ft³ to qt US instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cube text-teal-600 mr-3"></i>
                Quart US to Cubic Foot Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US quarts and cubic feet for cooking measurements, liquid storage, and volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Quart US Input -->
                <div class="space-y-4">
                    <label for="quartInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-glass-water text-teal-600 mr-2"></i>Quart US (qt US)
                    </label>
                    <input
                        type="number"
                        id="quartInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter US quarts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 qt US = 0.033420 ft³
                    </div>
                </div>

                <!-- Cubic Foot Input -->
                <div class="space-y-4">
                    <label for="cubicFootInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-cyan-600 mr-2"></i>Cubic Foot (ft³)
                    </label>
                    <input
                        type="number"
                        id="cubicFootInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic feet"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft³ = 29.922 qt US
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
            <!-- Volume Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Volume Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Quart US</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Foot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0334 ft³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1337 ft³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.3342 ft³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">30 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.003 ft³</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.005 ft³</td>
                            </tr>
                            <tr>
                                <td class="py-2">120 qt US</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.010 ft³</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-teal-600 mr-3"></i>Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Kitchen Measurements (quarts):</strong><br>
                        • Large mixing bowl: 4-6 qt<br>
                        • Stock pot: 8-20 qt<br>
                        • Soup recipe: 2-4 qt<br>
                        • Beverage pitcher: 1-2 qt
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Storage Containers:</strong><br>
                        • Small storage box: 0.5-2 ft³<br>
                        • Cooler: 1-5 ft³<br>
                        • Refrigerator: 10-25 ft³<br>
                        • Freezer: 5-15 ft³
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Construction Applications:</strong><br>
                        • Concrete mix: measured in ft³<br>
                        • Soil volume: cubic feet<br>
                        • Room volume: hundreds of ft³<br>
                        • Tank capacity: mix of units
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Quart US:</strong> 0.946353 liters</li>
                    <li><strong>Cubic Foot:</strong> 28.3168 liters</li>
                    <li><strong>Conversion:</strong> 1 ft³ = 29.922 qt US</li>
                    <li><strong>Relation:</strong> 4 qt = 1 gallon US</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Quarts for liquid cooking</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Cubic feet for solid volume</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Consider container shape</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Temperature affects volume</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                    <li><strong>Storage:</strong> Container sizing</li>
                    <li><strong>Construction:</strong> Material volumes</li>
                    <li><strong>Shipping:</strong> Package dimensions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertQuartToFt3(quarts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(quarts) && quarts !== '') {
        const cubicFeet = quarts * 0.033420138888889;
        document.getElementById('cubicFootInput').value = cubicFeet.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${quarts} qt US = ${cubicFeet.toFixed(6)} ft³</strong>
        `;
    } else {
        document.getElementById('cubicFootInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFt3ToQuart(cubicFeet) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cubicFeet) && cubicFeet !== '') {
        const quarts = cubicFeet * 29.9220779;
        document.getElementById('quartInput').value = quarts.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${cubicFeet} ft³ = ${quarts.toFixed(3)} qt US</strong>
        `;
    } else {
        document.getElementById('quartInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('quartInput').value = '';
    document.getElementById('cubicFootInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const qtValue = document.getElementById('quartInput').value;
    const ft3Value = document.getElementById('cubicFootInput').value;
    
    document.getElementById('quartInput').value = ft3Value;
    document.getElementById('cubicFootInput').value = qtValue;
    
    if (ft3Value) {
        convertQuartToFt3(parseFloat(ft3Value));
    } else if (qtValue) {
        convertFt3ToQuart(parseFloat(qtValue));
    }
}

// Add event listeners
document.getElementById('quartInput').addEventListener('input', function() {
    convertQuartToFt3(parseFloat(this.value));
});

document.getElementById('cubicFootInput').addEventListener('input', function() {
    convertFt3ToQuart(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
