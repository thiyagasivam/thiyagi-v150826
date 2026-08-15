<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>KSI to Megapascal Converter 2026 - ksi to MPa Calculator | Thiyagi</title>
<meta name="description" content="Free online KSI to Megapascal converter 2026. Convert ksi to MPa and MPa to ksi instantly with accurate pressure conversion for engineering and materials science.">
<meta name="keywords" content="ksi to megapascal converter 2026, ksi to MPa, pressure converter, engineering pressure, material strength, stress analysis">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="KSI to Megapascal Converter 2026 - ksi to MPa Calculator">
<meta property="og:description" content="Free online KSI to Megapascal converter 2026. Convert ksi to MPa and MPa to ksi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ksi-to-megapascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="KSI to Megapascal Converter 2026 - ksi to MPa Calculator">
<meta name="twitter:description" content="Free online KSI to Megapascal converter 2026. Convert ksi to MPa and MPa to ksi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-hammer text-red-600 mr-3"></i>
                KSI to Megapascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between ksi and megapascals for engineering calculations, material testing, and stress analysis
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- KSI Input -->
                <div class="space-y-4">
                    <label for="ksiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-industry text-red-600 mr-2"></i>KSI (ksi)
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
                        1 ksi = 6.89476 MPa
                    </div>
                </div>

                <!-- Megapascal Input -->
                <div class="space-y-4">
                    <label for="megapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cogs text-orange-600 mr-2"></i>Megapascal (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter megapascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MPa = 0.145038 ksi
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
            <!-- Pressure Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Pressure Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">KSI</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Megapascal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6.895 MPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">34.474 MPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">68.948 MPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">344.738 MPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">689.476 MPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">200 ksi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1378.951 MPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Material Strength Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tools text-red-600 mr-3"></i>Material Strength Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Steel Grades:</strong><br>
                        • Mild steel: 36-50 ksi (248-345 MPa)<br>
                        • High-strength steel: 50-100 ksi (345-690 MPa)<br>
                        • Ultra-high strength: 100-200 ksi (690-1380 MPa)<br>
                        • Tool steel: 150-300 ksi (1035-2070 MPa)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Aluminum Alloys:</strong><br>
                        • 6061-T6: 45 ksi (310 MPa)<br>
                        • 7075-T6: 83 ksi (572 MPa)<br>
                        • 2024-T4: 68 ksi (469 MPa)<br>
                        • Cast aluminum: 20-40 ksi (138-276 MPa)
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Other Materials:</strong><br>
                        • Titanium: 130-180 ksi (896-1241 MPa)<br>
                        • Concrete: 3-5 ksi (21-34 MPa)<br>
                        • Wood: 5-15 ksi (34-103 MPa)<br>
                        • Composites: 50-200 ksi (345-1380 MPa)
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
                    <li><strong>KSI:</strong> Kilopounds per square inch</li>
                    <li><strong>Megapascal:</strong> 1,000,000 pascals</li>
                    <li><strong>Conversion:</strong> 1 ksi = 6.89476 MPa</li>
                    <li><strong>Use:</strong> Engineering stress/strength</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Engineering Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Use proper safety factors</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Account for fatigue limits</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Verify material specifications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Structural:</strong> Building design</li>
                    <li><strong>Mechanical:</strong> Machine parts</li>
                    <li><strong>Aerospace:</strong> Aircraft components</li>
                    <li><strong>Testing:</strong> Material characterization</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKsiToMPa(ksi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ksi) && ksi !== '') {
        const megapascals = ksi * 6.89476;
        document.getElementById('megapascalInput').value = megapascals.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${ksi} ksi = ${megapascals.toFixed(6)} MPa</strong>
        `;
    } else {
        document.getElementById('megapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMPaToKsi(megapascals) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megapascals) && megapascals !== '') {
        const ksi = megapascals / 6.89476;
        document.getElementById('ksiInput').value = ksi.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${megapascals} MPa = ${ksi.toFixed(6)} ksi</strong>
        `;
    } else {
        document.getElementById('ksiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ksiInput').value = '';
    document.getElementById('megapascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ksiValue = document.getElementById('ksiInput').value;
    const megapascalValue = document.getElementById('megapascalInput').value;
    
    document.getElementById('ksiInput').value = megapascalValue;
    document.getElementById('megapascalInput').value = ksiValue;
    
    if (megapascalValue) {
        convertKsiToMPa(parseFloat(megapascalValue));
    } else if (ksiValue) {
        convertMPaToKsi(parseFloat(ksiValue));
    }
}

// Add event listeners
document.getElementById('ksiInput').addEventListener('input', function() {
    convertKsiToMPa(parseFloat(this.value));
});

document.getElementById('megapascalInput').addEventListener('input', function() {
    convertMPaToKsi(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
