<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Newton to Gram Force Converter 2026 - N to gf Calculator | Thiyagi</title>
<meta name="description" content="Free online Newton to Gram Force converter 2026. Convert N to gf and gf to N instantly with accurate force conversion for physics and engineering.">
<meta name="keywords" content="newton to gram force converter 2026, N to gf, force converter, physics calculator, engineering force, metric force units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Newton to Gram Force Converter 2026 - N to gf Calculator">
<meta property="og:description" content="Free online Newton to Gram Force converter 2026. Convert N to gf and gf to N instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/newton-to-gram-force.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Newton to Gram Force Converter 2026 - N to gf Calculator">
<meta name="twitter:description" content="Free online Newton to Gram Force converter 2026. Convert N to gf and gf to N instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight text-blue-600 mr-3"></i>
                Newton to Gram Force Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between newtons and gram force for physics calculations, engineering applications, and force measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Newton Input -->
                <div class="space-y-4">
                    <label for="newtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-blue-600 mr-2"></i>Newton (N)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter newtons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 N = 101.972 gf
                    </div>
                </div>

                <!-- Gram Force Input -->
                <div class="space-y-4">
                    <label for="gramForceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dumbbell text-indigo-600 mr-2"></i>Gram Force (gf)
                    </label>
                    <input
                        type="number"
                        id="gramForceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter gram force"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 gf = 0.009807 N
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
            <!-- Force Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Force Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Newton</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Gram Force</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.01 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.02 gf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.20 gf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">101.97 gf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,019.7 gf</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,197 gf</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 N</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">101,972 gf</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Force Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tools text-blue-600 mr-3"></i>Common Force Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Small Forces:</strong><br>
                        • Paper clip weight: ~0.01 N (1 gf)<br>
                        • Coin weight: ~0.05 N (5 gf)<br>
                        • Pencil weight: ~0.1 N (10 gf)<br>
                        • Mouse click: ~0.5 N (51 gf)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Everyday Forces:</strong><br>
                        • Apple weight: ~1-2 N (102-204 gf)<br>
                        • Book weight: ~5-10 N (510-1,020 gf)<br>
                        • Hand grip: ~100-400 N (10,200-40,800 gf)<br>
                        • Door push: ~50-150 N (5,100-15,300 gf)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Large Forces:</strong><br>
                        • Car weight: ~10,000-20,000 N (1-2 million gf)<br>
                        • Hydraulic press: ~100,000+ N (10+ million gf)<br>
                        • Crane lifting: ~50,000+ N (5+ million gf)<br>
                        • Jet engine thrust: ~200,000+ N (20+ million gf)
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
                    <li><strong>Newton:</strong> SI unit of force</li>
                    <li><strong>Gram Force:</strong> Weight of 1 gram</li>
                    <li><strong>Conversion:</strong> 1 N = 101.972 gf</li>
                    <li><strong>Definition:</strong> F = ma (mass × acceleration)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Physics Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use N for scientific calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Use gf for small force measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Consider gravity acceleration</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Account for measurement precision</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Physics:</strong> Force calculations</li>
                    <li><strong>Engineering:</strong> Structural analysis</li>
                    <li><strong>Testing:</strong> Material strength</li>
                    <li><strong>Research:</strong> Precise measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNewtonToGramForce(newtons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtons) && newtons !== '') {
        const gramForce = newtons * 101.971621298;
        document.getElementById('gramForceInput').value = gramForce.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${newtons} N = ${gramForce.toFixed(6)} gf</strong>
        `;
    } else {
        document.getElementById('gramForceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGramForceToNewton(gramForce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gramForce) && gramForce !== '') {
        const newtons = gramForce * 0.00980665;
        document.getElementById('newtonInput').value = newtons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${gramForce} gf = ${newtons.toFixed(6)} N</strong>
        `;
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('newtonInput').value = '';
    document.getElementById('gramForceInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const newtonValue = document.getElementById('newtonInput').value;
    const gramForceValue = document.getElementById('gramForceInput').value;
    
    document.getElementById('newtonInput').value = gramForceValue;
    document.getElementById('gramForceInput').value = newtonValue;
    
    if (gramForceValue) {
        convertNewtonToGramForce(parseFloat(gramForceValue));
    } else if (newtonValue) {
        convertGramForceToNewton(parseFloat(newtonValue));
    }
}

// Add event listeners
document.getElementById('newtonInput').addEventListener('input', function() {
    convertNewtonToGramForce(parseFloat(this.value));
});

document.getElementById('gramForceInput').addEventListener('input', function() {
    convertGramForceToNewton(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
