<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to KSI Converter 2026 - Pounds per Square Inch to Kilopounds per Square Inch Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to KSI converter 2026. Convert psi to ksi and ksi to psi instantly with accurate pressure conversion.">
<meta name="keywords" content="psi to ksi converter 2026, pounds per square inch to kilopounds, pressure conversion, engineering units, stress calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to KSI Converter 2026 - Pounds per Square Inch to Kilopounds per Square Inch Calculator">
<meta property="og:description" content="Free online PSI to KSI converter 2026. Convert psi to ksi and ksi to psi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-ksi.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to KSI Converter 2026 - Pounds per Square Inch to Kilopounds per Square Inch Calculator">
<meta property="twitter:description" content="Free online PSI to KSI converter 2026. Convert psi to ksi and ksi to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress text-red-600 mr-3"></i>
                PSI to KSI Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pounds per square inch (psi) and kilopounds per square inch (ksi) for pressure and stress measurements in engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge text-red-600 mr-2"></i>Pounds per Square Inch (psi)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter psi"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Standard pressure unit
                    </div>
                </div>

                <!-- KSI Input -->
                <div class="space-y-4">
                    <label for="ksiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-orange-600 mr-2"></i>Kilopounds per Square Inch (ksi)
                    </label>
                    <input
                        type="number"
                        id="ksiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter ksi"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        High pressure/stress unit
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
            <!-- Pressure Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Pressure Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">PSI</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">KSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 ksi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 ksi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 ksi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 ksi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 ksi</td>
                            </tr>
                            <tr>
                                <td class="py-2">200,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">200 ksi</td>
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
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Material Strength:</strong><br>
                        • Aluminum: 10-70 ksi (10,000-70,000 psi)<br>
                        • Steel: 36-200 ksi (36,000-200,000 psi)<br>
                        • Concrete: 3-8 ksi (3,000-8,000 psi)<br>
                        • Titanium: 130-200 ksi
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>System Pressures:</strong><br>
                        • Hydraulic systems: 1-10 ksi<br>
                        • Pneumatic systems: 50-200 psi<br>
                        • High-pressure vessels: 1-50 ksi<br>
                        • Industrial processes: 100-5,000 psi
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Testing Standards:</strong><br>
                        • Tensile testing: 10-300 ksi<br>
                        • Pressure testing: 1-100 ksi<br>
                        • Burst pressure: 5-200 ksi<br>
                        • Safety factors: 2-10x working pressure
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-red-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>psi:</strong> Pounds per square inch</li>
                    <li><strong>ksi:</strong> Kilopounds per square inch</li>
                    <li><strong>Conversion:</strong> 1 ksi = 1,000 psi</li>
                    <li><strong>Also written:</strong> kips/in²</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>psi for general pressures</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>ksi for high stress/strength</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Check material specs</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Consider safety margins</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Structural:</strong> Material design</li>
                    <li><strong>Mechanical:</strong> Stress analysis</li>
                    <li><strong>Testing:</strong> Strength evaluation</li>
                    <li><strong>Manufacturing:</strong> Quality control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPsiToKsi(psi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(psi) && psi !== '') {
        // 1,000 psi = 1 ksi
        const ksi = psi / 1000;
        document.getElementById('ksiInput').value = ksi.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${psi.toLocaleString()} psi = ${ksi.toFixed(3)} ksi</strong>
        `;
    } else {
        document.getElementById('ksiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKsiToPsi(ksi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ksi) && ksi !== '') {
        // 1 ksi = 1,000 psi
        const psi = ksi * 1000;
        document.getElementById('psiInput').value = psi;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${ksi} ksi = ${psi.toLocaleString()} psi</strong>
        `;
    } else {
        document.getElementById('psiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('ksiInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const ksiValue = document.getElementById('ksiInput').value;
    
    document.getElementById('psiInput').value = ksiValue;
    document.getElementById('ksiInput').value = psiValue;
    
    if (ksiValue) {
        convertPsiToKsi(parseFloat(ksiValue));
    } else if (psiValue) {
        convertKsiToPsi(parseFloat(psiValue));
    }
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', function() {
    convertPsiToKsi(parseFloat(this.value));
});

document.getElementById('ksiInput').addEventListener('input', function() {
    convertKsiToPsi(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
