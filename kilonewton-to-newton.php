<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilonewton to Newton Converter 2026 - kN to N Calculator | Thiyagi</title>
<meta name="description" content="Free online kilonewton to newton converter 2026. Convert kN to N and N to kN instantly with accurate force conversion.">
<meta name="keywords" content="kilonewton to newton converter 2026, kN to N, force converter, engineering units, SI units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilonewton to Newton Converter 2026 - kN to N Calculator">
<meta property="og:description" content="Free online kilonewton to newton converter 2026. Convert kN to N and N to kN instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilonewton-to-newton.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilonewton to Newton Converter 2026 - kN to N Calculator">
<meta name="twitter:description" content="Free online kilonewton to newton converter 2026. Convert kN to N and N to kN instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-green-600 mr-3"></i>
                Kilonewton to Newton Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilonewtons and newtons for precise force measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilonewton Input -->
                <div class="space-y-4">
                    <label for="kilonewtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-green-600 mr-2"></i>Kilonewton (kN)
                    </label>
                    <input
                        type="number"
                        id="kilonewtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter kilonewtons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 kN = 1,000 N
                    </div>
                </div>

                <!-- Newton Input -->
                <div class="space-y-4">
                    <label for="newtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-emerald-600 mr-2"></i>Newton (N)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter newtons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 N = 0.001 kN
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
            <!-- Common Force Values -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Common Force Values
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Application</th>
                                <th class="text-center py-2">kN</th>
                                <th class="text-right py-2">N</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Person weight</td>
                                <td class="text-center">0.7</td>
                                <td class="text-right">700</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Small car weight</td>
                                <td class="text-center">12</td>
                                <td class="text-right">12,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Truck weight</td>
                                <td class="text-center">80</td>
                                <td class="text-right">80,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Bridge load</td>
                                <td class="text-center">1,000</td>
                                <td class="text-right">1,000,000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Building column</td>
                                <td class="text-center">5,000</td>
                                <td class="text-right">5,000,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-green-600 mr-3"></i>Engineering Applications
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Structural Engineering:</strong><br>
                        • Building load calculations (kN)<br>
                        • Foundation design forces<br>
                        • Beam and column analysis<br>
                        • Seismic load assessments
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Mechanical Engineering:</strong><br>
                        • Machine component forces<br>
                        • Material testing loads<br>
                        • Hydraulic system pressures<br>
                        • Equipment specifications
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Civil Engineering:</strong><br>
                        • Bridge design loads<br>
                        • Road surface forces<br>
                        • Retaining wall pressures<br>
                        • Construction crane capacities
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
                    <li><strong>Kilonewton:</strong> 1,000 newtons</li>
                    <li><strong>Newton:</strong> SI base unit of force</li>
                    <li><strong>Prefix:</strong> Kilo = 10³</li>
                    <li><strong>Symbol:</strong> kN, N</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Conversion Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Multiply kN by 1,000 for N</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Divide N by 1,000 for kN</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Move decimal 3 places</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Use appropriate unit for scale</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Global Usage
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Scientific:</strong> Newton is SI standard</li>
                    <li><strong>Engineering:</strong> kN for large forces</li>
                    <li><strong>Construction:</strong> Both units common</li>
                    <li><strong>Standards:</strong> International acceptance</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKilonewtonToNewton(kilonewtons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilonewtons) && kilonewtons !== '') {
        const newtons = kilonewtons * 1000;
        document.getElementById('newtonInput').value = newtons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${kilonewtons} kN = ${newtons.toFixed(6)} N</strong>
        `;
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNewtonToKilonewton(newtons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtons) && newtons !== '') {
        const kilonewtons = newtons / 1000;
        document.getElementById('kilonewtonInput').value = kilonewtons.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${newtons} N = ${kilonewtons.toFixed(8)} kN</strong>
        `;
    } else {
        document.getElementById('kilonewtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kilonewtonInput').value = '';
    document.getElementById('newtonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kilonewtonValue = document.getElementById('kilonewtonInput').value;
    const newtonValue = document.getElementById('newtonInput').value;
    
    document.getElementById('kilonewtonInput').value = newtonValue;
    document.getElementById('newtonInput').value = kilonewtonValue;
    
    if (newtonValue) {
        convertKilonewtonToNewton(parseFloat(newtonValue));
    } else if (kilonewtonValue) {
        convertNewtonToKilonewton(parseFloat(kilonewtonValue));
    }
}

// Add event listeners
document.getElementById('kilonewtonInput').addEventListener('input', function() {
    convertKilonewtonToNewton(parseFloat(this.value));
});

document.getElementById('newtonInput').addEventListener('input', function() {
    convertNewtonToKilonewton(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
