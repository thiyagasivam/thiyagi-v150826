<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Radians to Degrees Converter 2026 - rad to deg Calculator | Thiyagi</title>
<meta name="description" content="Free online Radians to Degrees converter 2026. Convert rad to deg and deg to rad instantly with accurate angle conversion.">
<meta name="keywords" content="radians to degrees converter 2026, rad to deg, angle converter, trigonometry, mathematics conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Radians to Degrees Converter 2026 - rad to deg Calculator">
<meta property="og:description" content="Free online Radians to Degrees converter 2026. Convert rad to deg and deg to rad instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/radians-to-degrees.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Radians to Degrees Converter 2026 - rad to deg Calculator">
<meta property="twitter:description" content="Free online Radians to Degrees converter 2026. Convert rad to deg and deg to rad instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-circle-notch text-purple-600 mr-3"></i>
                Radians to Degrees Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between radians and degrees for angle measurements, trigonometry calculations, and mathematical applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Radians Input -->
                <div class="space-y-4">
                    <label for="radiansInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-circle text-purple-600 mr-2"></i>Radians (rad)
                    </label>
                    <input
                        type="number"
                        id="radiansInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter radians"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 rad = 57.2958° (180/π)
                    </div>
                </div>

                <!-- Degrees Input -->
                <div class="space-y-4">
                    <label for="degreesInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-angle-up text-violet-600 mr-2"></i>Degrees (°)
                    </label>
                    <input
                        type="number"
                        id="degreesInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter degrees"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1° = 0.01745 rad (π/180)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Angle Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Common Angle Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Radians</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Degrees</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0°</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">π/6 ≈ 0.524 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">30°</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">π/4 ≈ 0.785 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">45°</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">π/3 ≈ 1.047 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">60°</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">π/2 ≈ 1.571 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">90°</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">π ≈ 3.142 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">180°</td>
                            </tr>
                            <tr>
                                <td class="py-2">2π ≈ 6.283 rad</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">360°</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Mathematical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-calculator text-purple-600 mr-3"></i>Mathematical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Trigonometry:</strong><br>
                        • Unit circle calculations<br>
                        • Sine, cosine, tangent functions<br>
                        • Periodic function analysis<br>
                        • Fourier transforms
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Engineering:</strong><br>
                        • Rotation measurements<br>
                        • Angular velocity (rad/s)<br>
                        • Phase angles in AC circuits<br>
                        • Mechanical rotations
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Physics:</strong><br>
                        • Wave mechanics<br>
                        • Quantum mechanics phases<br>
                        • Oscillatory motion<br>
                        • Circular motion analysis
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Angle Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Radian:</strong> Arc length = radius</li>
                    <li><strong>Degree:</strong> 1/360 of full circle</li>
                    <li><strong>π radians:</strong> 180 degrees</li>
                    <li><strong>Full circle:</strong> 2π rad = 360°</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Radians for calculus</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Degrees for navigation</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>π-based fractions common</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Scientific calculations use rad</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Mathematics:</strong> Calculus, trigonometry</li>
                    <li><strong>Engineering:</strong> Rotational systems</li>
                    <li><strong>Navigation:</strong> Bearing calculations</li>
                    <li><strong>Graphics:</strong> Computer rotations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertRadiansToDegrees(radians) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(radians) && radians !== '') {
        // radians * (180/π) = degrees
        const degrees = radians * (180 / Math.PI);
        document.getElementById('degreesInput').value = degrees.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${radians} rad = ${degrees.toFixed(6)}°</strong>
        `;
    } else {
        document.getElementById('degreesInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertDegreesToRadians(degrees) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(degrees) && degrees !== '') {
        // degrees * (π/180) = radians
        const radians = degrees * (Math.PI / 180);
        document.getElementById('radiansInput').value = radians.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${degrees}° = ${radians.toFixed(6)} rad</strong>
        `;
    } else {
        document.getElementById('radiansInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('radiansInput').value = '';
    document.getElementById('degreesInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const radiansValue = document.getElementById('radiansInput').value;
    const degreesValue = document.getElementById('degreesInput').value;
    
    document.getElementById('radiansInput').value = degreesValue;
    document.getElementById('degreesInput').value = radiansValue;
    
    if (degreesValue) {
        convertRadiansToDegrees(parseFloat(degreesValue));
    } else if (radiansValue) {
        convertDegreesToRadians(parseFloat(radiansValue));
    }
}

// Add event listeners
document.getElementById('radiansInput').addEventListener('input', function() {
    convertRadiansToDegrees(parseFloat(this.value));
});

document.getElementById('degreesInput').addEventListener('input', function() {
    convertDegreesToRadians(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
