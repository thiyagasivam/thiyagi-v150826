<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Newton per Square Meter to PSI Converter 2026 - N/m² to psi | Thiyagi</title>
<meta name="description" content="Free online newton per square meter to PSI converter 2026. Convert N/m² to psi instantly with accurate formula: psi = N/m² × 0.000145038.">
<meta name="keywords" content="newton square meter to PSI 2026, N/m² to psi converter, pressure converter, pascal to psi, engineering calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Newton per Square Meter to PSI Converter 2026 - N/m² to psi">
<meta property="og:description" content="Free online newton per square meter to PSI converter 2026. Convert N/m² to psi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/newton-square-meter-to-psi.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Newton per Square Meter to PSI Converter 2026 - N/m² to psi">
<meta name="twitter:description" content="Free online newton per square meter to PSI converter 2026. Convert N/m² to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress-alt text-purple-600 mr-3"></i>
                Newton/m² to PSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert Newton per square meter to pounds per square inch instantly - Essential for engineering and pressure calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Input Section -->
                <div class="space-y-4">
                    <label for="newtonInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-purple-600 mr-2"></i>Newton per Square Meter (N/m²)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter N/m²"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        Enter the pressure in Newton per square meter (Pascal)
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-4">
                    <label for="psiOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Pounds per Square Inch (psi)
                    </label>
                    <input
                        type="number"
                        id="psiOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg bg-gray-50"
                        placeholder="Result in PSI"
                        readonly
                    >
                    <div class="text-sm text-gray-500">
                        Result in pounds per square inch (automatic calculation)
                    </div>
                </div>
            </div>

            <!-- Formula Display -->
            <div class="mt-8 p-4 bg-purple-50 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    <i class="fas fa-calculator text-purple-600 mr-2"></i>Conversion Formula
                </h3>
                <p class="text-gray-700">
                    <span class="font-mono bg-white px-2 py-1 rounded">psi = N/m² × 0.000145038</span>
                </p>
                <p class="text-sm text-gray-600 mt-2">
                    Note: N/m² = Pascal (Pa), the SI unit of pressure
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Reverse (psi to N/m²)
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Quick Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">N/m² (Pa)</th>
                                <th class="text-right py-2">PSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 Pa</td>
                                <td class="text-right">0.145 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">6,895 Pa</td>
                                <td class="text-right">1.000 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 Pa</td>
                                <td class="text-right">1.450 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">68,948 Pa</td>
                                <td class="text-right">10.00 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 Pa</td>
                                <td class="text-right">14.50 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">689,476 Pa</td>
                                <td class="text-right">100.0 psi</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 Pa</td>
                                <td class="text-right">145.0 psi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pressure Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-info-circle text-purple-600 mr-3"></i>Pressure Examples
                </h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span><i class="fas fa-cloud text-blue-600 mr-1"></i>Atmospheric pressure</span>
                        <span>101,325 Pa (14.7 psi)</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-car text-gray-600 mr-1"></i>Car tire pressure</span>
                        <span>220,000 Pa (32 psi)</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-bicycle text-green-600 mr-1"></i>Bicycle tire</span>
                        <span>550,000 Pa (80 psi)</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-water text-cyan-600 mr-1"></i>Water pressure (10m)</span>
                        <span>100,000 Pa (14.5 psi)</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-industry text-orange-600 mr-1"></i>Steam boiler</span>
                        <span>1,000,000 Pa (145 psi)</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-tools text-red-600 mr-1"></i>Hydraulic system</span>
                        <span>20,000,000 Pa (2900 psi)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pascal (Pa):</strong> N/m² - SI unit</li>
                    <li><strong>PSI:</strong> Pounds per square inch</li>
                    <li><strong>Bar:</strong> 100,000 Pa</li>
                    <li><strong>atm:</strong> 101,325 Pa</li>
                    <li><strong>mmHg:</strong> Torr unit</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-cogs text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Hydraulic systems</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Pneumatic equipment</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>HVAC systems</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Material testing</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Fluid mechanics</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Engineering Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Gauge vs Absolute:</strong> Know the reference</li>
                    <li><strong>Temperature:</strong> Affects gas pressure</li>
                    <li><strong>Safety Factor:</strong> Design margins</li>
                    <li><strong>Calibration:</strong> Regular instrument checks</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertNewtonToPsi() {
    const newton = parseFloat(document.getElementById('newtonInput').value);
    const psiOutput = document.getElementById('psiOutput');
    
    if (!isNaN(newton) && newton !== '') {
        const psi = newton * 0.000145037738;
        psiOutput.value = psi.toFixed(8);
    } else {
        psiOutput.value = '';
    }
}

function convertPsiToNewton() {
    const psi = parseFloat(document.getElementById('psiOutput').value);
    const newtonInput = document.getElementById('newtonInput');
    
    if (!isNaN(psi) && psi !== '') {
        const newton = psi / 0.000145037738;
        newtonInput.value = newton.toFixed(6);
    } else {
        newtonInput.value = '';
    }
}

function clearValues() {
    document.getElementById('newtonInput').value = '';
    document.getElementById('psiOutput').value = '';
}

function swapValues() {
    const newtonInput = document.getElementById('newtonInput');
    const psiOutput = document.getElementById('psiOutput');
    
    // Make output field editable and input field readonly
    if (psiOutput.readOnly) {
        psiOutput.readOnly = false;
        psiOutput.classList.remove('bg-gray-50');
        newtonInput.readOnly = true;
        newtonInput.classList.add('bg-gray-50');
        
        // Update labels
        document.querySelector('label[for="newtonInput"]').innerHTML = '<i class="fas fa-weight-hanging text-purple-600 mr-2"></i>Newton per Square Meter (N/m²) - Result';
        document.querySelector('label[for="psiOutput"]').innerHTML = '<i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Pounds per Square Inch (psi) - Input';
        
        // Clear values and set new event listener
        clearValues();
        psiOutput.removeEventListener('input', convertNewtonToPsi);
        psiOutput.addEventListener('input', convertPsiToNewton);
    } else {
        psiOutput.readOnly = true;
        psiOutput.classList.add('bg-gray-50');
        newtonInput.readOnly = false;
        newtonInput.classList.remove('bg-gray-50');
        
        // Reset labels
        document.querySelector('label[for="newtonInput"]').innerHTML = '<i class="fas fa-weight-hanging text-purple-600 mr-2"></i>Newton per Square Meter (N/m²)';
        document.querySelector('label[for="psiOutput"]').innerHTML = '<i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Pounds per Square Inch (psi)';
        
        // Clear values and reset event listener
        clearValues();
        psiOutput.removeEventListener('input', convertPsiToNewton);
        newtonInput.addEventListener('input', convertNewtonToPsi);
    }
}

// Add event listener for real-time conversion
document.getElementById('newtonInput').addEventListener('input', convertNewtonToPsi);
</script>

<?php include 'footer.php'; ?>
