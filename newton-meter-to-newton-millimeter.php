<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Newton Meter to Newton Millimeter Converter 2026 - N⋅m to N⋅mm Calculator | Thiyagi</title>
<meta name="description" content="Free online Newton meter to Newton millimeter converter 2026. Convert N⋅m to N⋅mm and N⋅mm to N⋅m instantly with accurate torque conversion.">
<meta name="keywords" content="newton meter to newton millimeter converter 2026, N⋅m to N⋅mm, torque converter, moment converter, engineering units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Newton Meter to Newton Millimeter Converter 2026 - N⋅m to N⋅mm Calculator">
<meta property="og:description" content="Free online Newton meter to Newton millimeter converter 2026. Convert N⋅m to N⋅mm and N⋅mm to N⋅m instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/newton-meter-to-newton-millimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Newton Meter to Newton Millimeter Converter 2026 - N⋅m to N⋅mm Calculator">
<meta name="twitter:description" content="Free online Newton meter to Newton millimeter converter 2026. Convert N⋅m to N⋅mm and N⋅mm to N⋅m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tools text-red-600 mr-3"></i>
                Newton Meter to Newton Millimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between Newton meters and Newton millimeters for precise torque measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Newton Meter Input -->
                <div class="space-y-4">
                    <label for="newtonMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wrench text-red-600 mr-2"></i>Newton Meter (N⋅m)
                    </label>
                    <input
                        type="number"
                        id="newtonMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter N⋅m"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 N⋅m = 1,000 N⋅mm
                    </div>
                </div>

                <!-- Newton Millimeter Input -->
                <div class="space-y-4">
                    <label for="newtonMillimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cog text-orange-600 mr-2"></i>Newton Millimeter (N⋅mm)
                    </label>
                    <input
                        type="number"
                        id="newtonMillimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter N⋅mm"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 N⋅mm = 0.001 N⋅m
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-orange-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Torque Values -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Common Torque Values
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Application</th>
                                <th class="text-center py-2">N⋅m</th>
                                <th class="text-right py-2">N⋅mm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Small screws</td>
                                <td class="text-center">0.5</td>
                                <td class="text-right">500</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Electronics bolts</td>
                                <td class="text-center">2</td>
                                <td class="text-right">2,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Bicycle parts</td>
                                <td class="text-center">5-10</td>
                                <td class="text-right">5,000-10,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Car wheel nuts</td>
                                <td class="text-center">100</td>
                                <td class="text-right">100,000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Engine bolts</td>
                                <td class="text-center">50-150</td>
                                <td class="text-right">50,000-150,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-red-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Mechanical Engineering:</strong><br>
                        • Bolt torque specifications<br>
                        • Motor torque ratings<br>
                        • Coupling calculations<br>
                        • Shaft design analysis
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Automotive Industry:</strong><br>
                        • Engine torque specs<br>
                        • Brake system torque<br>
                        • Suspension components<br>
                        • Assembly procedures
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Precision Manufacturing:</strong><br>
                        • Small component assembly<br>
                        • Electronic device assembly<br>
                        • Medical device manufacturing<br>
                        • Aerospace applications
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>Unit Definitions
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Newton Meter:</strong> SI unit of torque</li>
                    <li><strong>Newton Millimeter:</strong> Smaller torque unit</li>
                    <li><strong>Conversion:</strong> 1 N⋅m = 1,000 N⋅mm</li>
                    <li><strong>Formula:</strong> Torque = Force × Distance</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Use N⋅mm for small torques</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Use N⋅m for standard applications</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Consider precision requirements</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Follow torque specifications exactly</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Global Standards
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>SI System:</strong> Newton meter is standard</li>
                    <li><strong>Engineering:</strong> Both units commonly used</li>
                    <li><strong>Precision:</strong> N⋅mm for small components</li>
                    <li><strong>Industry:</strong> Context-dependent usage</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNewtonMeterToNewtonMillimeter(newtonMeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtonMeters) && newtonMeters !== '') {
        const newtonMillimeters = newtonMeters * 1000;
        document.getElementById('newtonMillimeterInput').value = newtonMillimeters.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${newtonMeters} N⋅m = ${newtonMillimeters.toFixed(6)} N⋅mm</strong>
        `;
    } else {
        document.getElementById('newtonMillimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNewtonMillimeterToNewtonMeter(newtonMillimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtonMillimeters) && newtonMillimeters !== '') {
        const newtonMeters = newtonMillimeters / 1000;
        document.getElementById('newtonMeterInput').value = newtonMeters.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${newtonMillimeters} N⋅mm = ${newtonMeters.toFixed(8)} N⋅m</strong>
        `;
    } else {
        document.getElementById('newtonMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('newtonMeterInput').value = '';
    document.getElementById('newtonMillimeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const newtonMeterValue = document.getElementById('newtonMeterInput').value;
    const newtonMillimeterValue = document.getElementById('newtonMillimeterInput').value;
    
    document.getElementById('newtonMeterInput').value = newtonMillimeterValue;
    document.getElementById('newtonMillimeterInput').value = newtonMeterValue;
    
    if (newtonMillimeterValue) {
        convertNewtonMeterToNewtonMillimeter(parseFloat(newtonMillimeterValue));
    } else if (newtonMeterValue) {
        convertNewtonMillimeterToNewtonMeter(parseFloat(newtonMeterValue));
    }
}

// Add event listeners
document.getElementById('newtonMeterInput').addEventListener('input', function() {
    convertNewtonMeterToNewtonMillimeter(parseFloat(this.value));
});

document.getElementById('newtonMillimeterInput').addEventListener('input', function() {
    convertNewtonMillimeterToNewtonMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
