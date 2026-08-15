<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Microcoulomb to Coulomb Converter 2026 - μC to C Calculator | Thiyagi</title>
<meta name="description" content="Free online Microcoulomb to Coulomb converter 2026. Convert μC to C and C to μC instantly with accurate electric charge conversion.">
<meta name="keywords" content="microcoulomb to coulomb converter 2026, μC to C, electric charge conversion, electrical units, electronics calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Microcoulomb to Coulomb Converter 2026 - μC to C Calculator">
<meta property="og:description" content="Free online Microcoulomb to Coulomb converter 2026. Convert μC to C and C to μC instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/microcoulomb-to-coulomb.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Microcoulomb to Coulomb Converter 2026 - μC to C Calculator">
<meta property="twitter:description" content="Free online Microcoulomb to Coulomb converter 2026. Convert μC to C and C to μC instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-blue-600 mr-3"></i>
                Microcoulomb to Coulomb Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between microcoulombs (μC) and coulombs (C) for electric charge measurements, electronics, and electrical engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microcoulomb Input -->
                <div class="space-y-4">
                    <label for="microcoulombInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microchip text-blue-600 mr-2"></i>Microcoulombs (μC)
                    </label>
                    <input
                        type="number"
                        id="microcoulombInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter microcoulombs"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1,000,000 μC = 1 C
                    </div>
                </div>

                <!-- Coulomb Input -->
                <div class="space-y-4">
                    <label for="coulombInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-plug text-cyan-600 mr-2"></i>Coulombs (C)
                    </label>
                    <input
                        type="number"
                        id="coulombInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter coulombs"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 C = 1,000,000 μC
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Charge Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Electric Charge Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Microcoulombs</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Coulombs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.000001 C</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00001 C</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0001 C</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 C</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 C</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 μC</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 C</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Electrical Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-battery-three-quarters text-blue-600 mr-3"></i>Electrical Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Electronic Components:</strong><br>
                        • Capacitor charge: 1-1,000 μC<br>
                        • Static electricity: 0.1-10 μC<br>
                        • Electronic circuits: 0.001-100 μC<br>
                        • Touch sensors: 1-50 μC
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Practical Charges:</strong><br>
                        • Lightning bolt: 15 C (15,000,000 μC)<br>
                        • Car battery: 3,600 C total<br>
                        • AA battery: 9,000 C total<br>
                        • Phone battery: 10,800 C total
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Scientific Applications:</strong><br>
                        • Electron charge: 1.6×10⁻¹³ μC<br>
                        • Ion beam: 1-1,000 μC<br>
                        • Electrostatic experiments: 0.1-100 μC<br>
                        • Medical devices: 1-10 μC
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Charge Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>μC:</strong> 10⁻⁶ coulombs</li>
                    <li><strong>Coulomb:</strong> SI unit of charge</li>
                    <li><strong>Conversion:</strong> 1 C = 1,000,000 μC</li>
                    <li><strong>Named after:</strong> Charles-Augustin de Coulomb</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>μC for small charges</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>C for large quantities</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Electronic circuit design</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Battery capacity calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Circuit design</li>
                    <li><strong>Physics:</strong> Electrostatics</li>
                    <li><strong>Engineering:</strong> Power systems</li>
                    <li><strong>Research:</strong> Scientific experiments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrocoulombToCoulomb(microcoulomb) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(microcoulomb) && microcoulomb !== '') {
        // 1,000,000 microcoulombs = 1 coulomb
        const coulomb = microcoulomb / 1000000;
        document.getElementById('coulombInput').value = coulomb.toFixed(9);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${microcoulomb.toLocaleString()} μC = ${coulomb.toFixed(6)} C</strong>
        `;
    } else {
        document.getElementById('coulombInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCoulombToMicrocoulomb(coulomb) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(coulomb) && coulomb !== '') {
        // 1 coulomb = 1,000,000 microcoulombs
        const microcoulomb = coulomb * 1000000;
        document.getElementById('microcoulombInput').value = microcoulomb;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${coulomb} C = ${microcoulomb.toLocaleString()} μC</strong>
        `;
    } else {
        document.getElementById('microcoulombInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('microcoulombInput').value = '';
    document.getElementById('coulombInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const microcoulombValue = document.getElementById('microcoulombInput').value;
    const coulombValue = document.getElementById('coulombInput').value;
    
    document.getElementById('microcoulombInput').value = coulombValue;
    document.getElementById('coulombInput').value = microcoulombValue;
    
    if (coulombValue) {
        convertMicrocoulombToCoulomb(parseFloat(coulombValue));
    } else if (microcoulombValue) {
        convertCoulombToMicrocoulomb(parseFloat(microcoulombValue));
    }
}

// Add event listeners
document.getElementById('microcoulombInput').addEventListener('input', function() {
    convertMicrocoulombToCoulomb(parseFloat(this.value));
});

document.getElementById('coulombInput').addEventListener('input', function() {
    convertCoulombToMicrocoulomb(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
