<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to Pound Force per Square Foot Converter 2026 - psi to lbf/ft² Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to pound force per square foot converter 2026. Convert psi to lbf/ft² and lbf/ft² to psi instantly with accurate pressure conversion.">
<meta name="keywords" content="psi to lbf/ft² converter 2026, psi to pound force square foot, pressure converter, imperial pressure units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to Pound Force per Square Foot Converter 2026 - psi to lbf/ft² Calculator">
<meta property="og:description" content="Free online PSI to pound force per square foot converter 2026. Convert psi to lbf/ft² and lbf/ft² to psi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-pound-force-square-foot.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to Pound Force per Square Foot Converter 2026 - psi to lbf/ft² Calculator">
<meta name="twitter:description" content="Free online PSI to pound force per square foot converter 2026. Convert psi to lbf/ft² and lbf/ft² to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress-arrows-alt text-green-600 mr-3"></i>
                PSI to Pound Force per Square Foot Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between PSI and lbf/ft² with precision for engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-green-600 mr-2"></i>Pounds per Square Inch (psi)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter psi"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 psi = 144 lbf/ft²
                    </div>
                </div>

                <!-- lbf/ft² Input -->
                <div class="space-y-4">
                    <label for="lbfFt2Input" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-emerald-600 mr-2"></i>Pound Force per Square Foot (lbf/ft²)
                    </label>
                    <input
                        type="number"
                        id="lbfFt2Input"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter lbf/ft²"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 lbf/ft² = 0.00694444 psi
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
            <!-- Common Pressure Values -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Common Pressure Values
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Application</th>
                                <th class="text-center py-2">psi</th>
                                <th class="text-right py-2">lbf/ft²</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Atmospheric Pressure</td>
                                <td class="text-center">14.696</td>
                                <td class="text-right">2,116</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Car Tire</td>
                                <td class="text-center">32</td>
                                <td class="text-right">4,608</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Building Load</td>
                                <td class="text-center">1</td>
                                <td class="text-right">144</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Vacuum (1/10 atm)</td>
                                <td class="text-center">1.47</td>
                                <td class="text-right">212</td>
                            </tr>
                            <tr>
                                <td class="py-2">Light Foundation</td>
                                <td class="text-center">0.5</td>
                                <td class="text-right">72</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tools text-green-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Structural Engineering:</strong><br>
                        • Building load calculations<br>
                        • Foundation design<br>
                        • Floor loading analysis<br>
                        • Wind load assessments
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>HVAC Systems:</strong><br>
                        • Ductwork pressure analysis<br>
                        • Fan pressure calculations<br>
                        • Building pressure monitoring<br>
                        • Ventilation system design
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Material Testing:</strong><br>
                        • Compression testing<br>
                        • Load bearing capacity<br>
                        • Stress analysis<br>
                        • Quality control
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>Unit Definitions
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>PSI:</strong> Pounds per square inch</li>
                    <li><strong>lbf/ft²:</strong> Pound-force per square foot</li>
                    <li><strong>Relationship:</strong> 1 psi = 144 lbf/ft²</li>
                    <li><strong>Area Factor:</strong> 1 ft² = 144 in²</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Conversion Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Multiply psi by 144 for lbf/ft²</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Divide lbf/ft² by 144 for psi</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Remember the area conversion factor</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Use appropriate precision for application</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Industry Usage
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>PSI:</strong> High pressure applications</li>
                    <li><strong>lbf/ft²:</strong> Low pressure, large area</li>
                    <li><strong>Construction:</strong> Both units common</li>
                    <li><strong>Standards:</strong> Context-dependent choice</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPsiToLbfFt2(psi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(psi) && psi !== '') {
        const lbfFt2 = psi * 144;
        document.getElementById('lbfFt2Input').value = lbfFt2.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${psi} psi = ${lbfFt2.toFixed(6)} lbf/ft²</strong>
        `;
    } else {
        document.getElementById('lbfFt2Input').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLbfFt2ToPsi(lbfFt2) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(lbfFt2) && lbfFt2 !== '') {
        const psi = lbfFt2 / 144;
        document.getElementById('psiInput').value = psi.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${lbfFt2} lbf/ft² = ${psi.toFixed(8)} psi</strong>
        `;
    } else {
        document.getElementById('psiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('lbfFt2Input').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const lbfFt2Value = document.getElementById('lbfFt2Input').value;
    
    document.getElementById('psiInput').value = lbfFt2Value;
    document.getElementById('lbfFt2Input').value = psiValue;
    
    if (lbfFt2Value) {
        convertPsiToLbfFt2(parseFloat(lbfFt2Value));
    } else if (psiValue) {
        convertLbfFt2ToPsi(parseFloat(psiValue));
    }
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', function() {
    convertPsiToLbfFt2(parseFloat(this.value));
});

document.getElementById('lbfFt2Input').addEventListener('input', function() {
    convertLbfFt2ToPsi(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
