<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Newton to Kilonewton Converter 2026 - N to kN Calculator | Thiyagi</title>
<meta name="description" content="Free online Newton to Kilonewton converter 2026. Convert N to kN and kN to N instantly with accurate force conversion for engineering calculations.">
<meta name="keywords" content="newton to kilonewton converter 2026, N to kN, force converter, mechanical engineering, structural engineering, physics force units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Newton to Kilonewton Converter 2026 - N to kN Calculator">
<meta property="og:description" content="Free online Newton to Kilonewton converter 2026. Convert N to kN and kN to N instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/newton-to-kilonewton.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Newton to Kilonewton Converter 2026 - N to kN Calculator">
<meta name="twitter:description" content="Free online Newton to Kilonewton converter 2026. Convert N to kN and kN to N instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-blue-600 mr-3"></i>
                Newton to Kilonewton Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between newtons and kilonewtons for force measurements, engineering calculations, and physics applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Newton Input -->
                <div class="space-y-4">
                    <label for="newtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-v text-blue-600 mr-2"></i>Newton (N)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter newtons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 N = 0.001 kN
                    </div>
                </div>

                <!-- Kilonewton Input -->
                <div class="space-y-4">
                    <label for="kilonewtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-indigo-600 mr-2"></i>Kilonewton (kN)
                    </label>
                    <input
                        type="number"
                        id="kilonewtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter kilonewtons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kN = 1,000 N
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
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
            <!-- Force Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Force Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Newton</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilonewton</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 kN</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 kN</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kN</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 kN</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kN</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kN</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Force Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tools text-blue-600 mr-3"></i>Engineering Force Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Mechanical Forces:</strong><br>
                        • Human grip: 300-800 N (0.3-0.8 kN)<br>
                        • Car braking: 5-15 kN<br>
                        • Hydraulic jack: 50-500 kN<br>
                        • Industrial press: 100-10,000 kN
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Structural Engineering:</strong><br>
                        • Beam loading: 10-1,000 kN<br>
                        • Column compression: 100-5,000 kN<br>
                        • Foundation loads: 500-50,000 kN<br>
                        • Bridge loading: 1,000-100,000 kN
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Weight vs Force:</strong><br>
                        • 1 kg mass ≈ 9.81 N weight<br>
                        • 100 kg person ≈ 981 N (0.981 kN)<br>
                        • Small car ≈ 15 kN weight<br>
                        • Large truck ≈ 400 kN weight
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Force Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Newton (N):</strong> SI unit of force</li>
                    <li><strong>Kilonewton (kN):</strong> 1,000 newtons</li>
                    <li><strong>Formula:</strong> F = ma (mass × acceleration)</li>
                    <li><strong>Named after:</strong> Sir Isaac Newton</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use kN for large forces</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>N for small everyday forces</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Common in engineering calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Related to weight through gravity</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Structural analysis</li>
                    <li><strong>Physics:</strong> Force calculations</li>
                    <li><strong>Manufacturing:</strong> Press forces</li>
                    <li><strong>Construction:</strong> Load calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNewtonToKilonewton(newtons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtons) && newtons !== '') {
        const kilonewtons = newtons / 1000;
        document.getElementById('kilonewtonInput').value = kilonewtons.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${newtons} N = ${kilonewtons.toFixed(6)} kN</strong>
        `;
    } else {
        document.getElementById('kilonewtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilonewtonToNewton(kilonewtons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilonewtons) && kilonewtons !== '') {
        const newtons = kilonewtons * 1000;
        document.getElementById('newtonInput').value = newtons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${kilonewtons} kN = ${newtons.toFixed(3)} N</strong>
        `;
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('newtonInput').value = '';
    document.getElementById('kilonewtonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const newtonValue = document.getElementById('newtonInput').value;
    const kilonewtonValue = document.getElementById('kilonewtonInput').value;
    
    document.getElementById('newtonInput').value = kilonewtonValue;
    document.getElementById('kilonewtonInput').value = newtonValue;
    
    if (kilonewtonValue) {
        convertNewtonToKilonewton(parseFloat(kilonewtonValue));
    } else if (newtonValue) {
        convertKilonewtonToNewton(parseFloat(newtonValue));
    }
}

// Add event listeners
document.getElementById('newtonInput').addEventListener('input', function() {
    convertNewtonToKilonewton(parseFloat(this.value));
});

document.getElementById('kilonewtonInput').addEventListener('input', function() {
    convertKilonewtonToNewton(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
