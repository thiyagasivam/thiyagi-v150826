<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gigapascal to PSI Converter 2026 - GPa to psi Calculator | Thiyagi</title>
<meta name="description" content="Free online Gigapascal to PSI converter 2026. Convert GPa to psi and psi to GPa instantly with accurate pressure unit conversion.">
<meta name="keywords" content="gigapascal to psi converter 2026, GPa to psi, pressure conversion, materials science, engineering pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gigapascal to PSI Converter 2026 - GPa to psi Calculator">
<meta property="og:description" content="Free online Gigapascal to PSI converter 2026. Convert GPa to psi and psi to GPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gigapascal-to-psi.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gigapascal to PSI Converter 2026 - GPa to psi Calculator">
<meta property="twitter:description" content="Free online Gigapascal to PSI converter 2026. Convert GPa to psi and psi to GPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-purple-600 mr-3"></i>
                Gigapascal to PSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between gigapascals (GPa) and pounds per square inch (PSI) for materials science, extreme pressure measurements, and engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gigapascal Input -->
                <div class="space-y-4">
                    <label for="gigapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-purple-600 mr-2"></i>Gigapascals (GPa)
                    </label>
                    <input
                        type="number"
                        id="gigapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter gigapascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 GPa = 145,038 psi
                    </div>
                </div>

                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-indigo-600 mr-2"></i>Pounds per Square Inch (psi)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter PSI"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        145,038 psi = 1 GPa
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
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
            <!-- Pressure Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Extreme Pressure Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Gigapascals</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">PSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">145 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,450 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14,504 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">145,038 psi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,450,377 psi</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 GPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14,503,774 psi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Materials Science -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-purple-600 mr-3"></i>Materials Science
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Material Strength (GPa):</strong><br>
                        • Aluminum: 70 GPa (10.2M psi)<br>
                        • Steel: 200 GPa (29M psi)<br>
                        • Titanium: 116 GPa (16.8M psi)<br>
                        • Carbon fiber: 230 GPa (33.4M psi)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Ultra-High Pressure:</strong><br>
                        • Diamond anvil cell: 100+ GPa<br>
                        • Earth's core: 360 GPa (52.2M psi)<br>
                        • Industrial diamond: 1,220 GPa<br>
                        • Graphene: 1,000 GPa (145M psi)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Engineering Applications:</strong><br>
                        • Hydraulic testing: 0.1-1 GPa<br>
                        • Pressure vessels: 0.01-0.1 GPa<br>
                        • Deep sea pressure: 0.11 GPa<br>
                        • Explosive pressures: 1-100 GPa
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
                    <li><strong>GPa:</strong> 10⁹ pascals</li>
                    <li><strong>PSI:</strong> Pounds per square inch</li>
                    <li><strong>Conversion:</strong> 1 GPa = 145,038 psi</li>
                    <li><strong>Scale:</strong> Extreme pressure range</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>GPa for materials testing</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>PSI for practical applications</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Scientific notation helpful</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Extreme pressure ranges</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Materials:</strong> Strength testing</li>
                    <li><strong>Geology:</strong> Earth pressure</li>
                    <li><strong>Physics:</strong> High-pressure research</li>
                    <li><strong>Industry:</strong> Pressure vessels</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGigapascalToPsi(gigapascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gigapascal) && gigapascal !== '') {
        // 1 GPa = 145,037.737730808 psi
        const psi = gigapascal * 145037.737730808;
        document.getElementById('psiInput').value = psi.toFixed(0);
        
        let formattedPsi = psi;
        if (psi >= 1000000) {
            formattedPsi = (psi / 1000000).toFixed(2) + 'M psi';
        } else if (psi >= 1000) {
            formattedPsi = (psi / 1000).toFixed(1) + 'K psi';
        } else {
            formattedPsi = psi.toLocaleString() + ' psi';
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${gigapascal} GPa = ${formattedPsi}</strong>
        `;
    } else {
        document.getElementById('psiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPsiToGigapascal(psi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(psi) && psi !== '') {
        // 1 psi = 1/145,037.737730808 GPa
        const gigapascal = psi / 145037.737730808;
        document.getElementById('gigapascalInput').value = gigapascal.toFixed(6);
        
        let formattedPsi = psi;
        if (psi >= 1000000) {
            formattedPsi = (psi / 1000000).toFixed(2) + 'M';
        } else if (psi >= 1000) {
            formattedPsi = (psi / 1000).toFixed(1) + 'K';
        } else {
            formattedPsi = psi.toLocaleString();
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${formattedPsi} psi = ${gigapascal.toFixed(4)} GPa</strong>
        `;
    } else {
        document.getElementById('gigapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gigapascalInput').value = '';
    document.getElementById('psiInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const gigapascalValue = document.getElementById('gigapascalInput').value;
    const psiValue = document.getElementById('psiInput').value;
    
    document.getElementById('gigapascalInput').value = psiValue;
    document.getElementById('psiInput').value = gigapascalValue;
    
    if (psiValue) {
        convertGigapascalToPsi(parseFloat(psiValue));
    } else if (gigapascalValue) {
        convertPsiToGigapascal(parseFloat(gigapascalValue));
    }
}

// Add event listeners
document.getElementById('gigapascalInput').addEventListener('input', function() {
    convertGigapascalToPsi(parseFloat(this.value));
});

document.getElementById('psiInput').addEventListener('input', function() {
    convertPsiToGigapascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
