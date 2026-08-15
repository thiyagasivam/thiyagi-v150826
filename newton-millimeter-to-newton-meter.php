<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Newton Millimeter to Newton Meter Converter 2026 - N·mm to N·m Calculator | Thiyagi</title>
<meta name="description" content="Free online Newton Millimeter to Newton Meter converter 2026. Convert N·mm to N·m and N·m to N·mm instantly with accurate torque conversion.">
<meta name="keywords" content="newton millimeter to newton meter converter 2026, N·mm to N·m, torque conversion, precision torque, engineering calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Newton Millimeter to Newton Meter Converter 2026 - N·mm to N·m Calculator">
<meta property="og:description" content="Free online Newton Millimeter to Newton Meter converter 2026. Convert N·mm to N·m and N·m to N·mm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/newton-millimeter-to-newton-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Newton Millimeter to Newton Meter Converter 2026 - N·mm to N·m Calculator">
<meta property="twitter:description" content="Free online Newton Millimeter to Newton Meter converter 2026. Convert N·mm to N·m and N·m to N·mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cog text-indigo-600 mr-3"></i>
                Newton Millimeter to Newton Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between newton millimeters (N·mm) and newton meters (N·m) for precision torque measurements, small mechanisms, and engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Newton Millimeter Input -->
                <div class="space-y-4">
                    <label for="newtonMillimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-screwdriver text-indigo-600 mr-2"></i>Newton Millimeters (N·mm)
                    </label>
                    <input
                        type="number"
                        id="newtonMillimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter newton millimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Small torque measurements
                    </div>
                </div>

                <!-- Newton Meter Input -->
                <div class="space-y-4">
                    <label for="newtonMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wrench text-purple-600 mr-2"></i>Newton Meters (N·m)
                    </label>
                    <input
                        type="number"
                        id="newtonMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter newton meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Standard torque unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Torque Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Torque Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Newton Millimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Newton Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 N·m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 N·m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 N·m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 N·m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 N·m</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 N·mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 N·m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Precision Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-microchip text-indigo-600 mr-3"></i>Precision Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Small Mechanisms:</strong><br>
                        • Watch screws: 1-50 N·mm (0.001-0.05 N·m)<br>
                        • Electronics: 10-500 N·mm<br>
                        • Precision instruments: 5-200 N·mm<br>
                        • Micro fasteners: 1-100 N·mm
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Laboratory Equipment:</strong><br>
                        • Torque meters: 1-10,000 N·mm<br>
                        • Testing fixtures: 10-1,000 N·mm<br>
                        • Calibration tools: 5-500 N·mm<br>
                        • Research instruments: 1-5,000 N·mm
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Manufacturing:</strong><br>
                        • PCB assembly: 50-500 N·mm<br>
                        • Small fasteners: 100-2,000 N·mm<br>
                        • Precision assembly: 10-1,000 N·mm<br>
                        • Quality control: 1-10,000 N·mm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Torque Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>N·mm:</strong> Newton millimeters</li>
                    <li><strong>N·m:</strong> Newton meters (SI unit)</li>
                    <li><strong>Conversion:</strong> 1 N·m = 1,000 N·mm</li>
                    <li><strong>Formula:</strong> Force × Distance</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>N·mm for small torques</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>N·m for standard torques</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Check precision requirements</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use appropriate tools</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Assembly work</li>
                    <li><strong>Precision:</strong> Micro mechanics</li>
                    <li><strong>Testing:</strong> Calibration</li>
                    <li><strong>Research:</strong> Measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNewtonMillimeterToNewtonMeter(newtonMillimeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtonMillimeter) && newtonMillimeter !== '') {
        // 1,000 N·mm = 1 N·m
        const newtonMeter = newtonMillimeter / 1000;
        document.getElementById('newtonMeterInput').value = newtonMeter.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${newtonMillimeter.toLocaleString()} N·mm = ${newtonMeter.toFixed(3)} N·m</strong>
        `;
    } else {
        document.getElementById('newtonMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNewtonMeterToNewtonMillimeter(newtonMeter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtonMeter) && newtonMeter !== '') {
        // 1 N·m = 1,000 N·mm
        const newtonMillimeter = newtonMeter * 1000;
        document.getElementById('newtonMillimeterInput').value = newtonMillimeter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${newtonMeter} N·m = ${newtonMillimeter.toLocaleString()} N·mm</strong>
        `;
    } else {
        document.getElementById('newtonMillimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('newtonMillimeterInput').value = '';
    document.getElementById('newtonMeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const newtonMillimeterValue = document.getElementById('newtonMillimeterInput').value;
    const newtonMeterValue = document.getElementById('newtonMeterInput').value;
    
    document.getElementById('newtonMillimeterInput').value = newtonMeterValue;
    document.getElementById('newtonMeterInput').value = newtonMillimeterValue;
    
    if (newtonMeterValue) {
        convertNewtonMillimeterToNewtonMeter(parseFloat(newtonMeterValue));
    } else if (newtonMillimeterValue) {
        convertNewtonMeterToNewtonMillimeter(parseFloat(newtonMillimeterValue));
    }
}

// Add event listeners
document.getElementById('newtonMillimeterInput').addEventListener('input', function() {
    convertNewtonMillimeterToNewtonMeter(parseFloat(this.value));
});

document.getElementById('newtonMeterInput').addEventListener('input', function() {
    convertNewtonMeterToNewtonMillimeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
