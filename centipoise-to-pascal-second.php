<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Centipoise to Pascal Second Converter 2026 - cP to Pa·s Calculator | Thiyagi</title>
<meta name="description" content="Free online Centipoise to Pascal Second converter 2026. Convert cP to Pa·s and Pa·s to cP instantly with accurate viscosity conversion for fluids.">
<meta name="keywords" content="centipoise to pascal second converter 2026, cP to Pa·s, viscosity converter, fluid dynamics, oil viscosity, chemical engineering">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centipoise to Pascal Second Converter 2026 - cP to Pa·s Calculator">
<meta property="og:description" content="Free online Centipoise to Pascal Second converter 2026. Convert cP to Pa·s and Pa·s to cP instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centipoise-to-pascal-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centipoise to Pascal Second Converter 2026 - cP to Pa·s Calculator">
<meta name="twitter:description" content="Free online Centipoise to Pascal Second converter 2026. Convert cP to Pa·s and Pa·s to cP instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tint text-amber-600 mr-3"></i>
                Centipoise to Pascal Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between centipoise and pascal seconds for viscosity measurements in fluid dynamics and chemical engineering
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centipoise Input -->
                <div class="space-y-4">
                    <label for="centipoiseInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-amber-600 mr-2"></i>Centipoise (cP)
                    </label>
                    <input
                        type="number"
                        id="centipoiseInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter centipoise"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cP = 0.001 Pa·s
                    </div>
                </div>

                <!-- Pascal Second Input -->
                <div class="space-y-4">
                    <label for="pascalSecondInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-orange-600 mr-2"></i>Pascal Second (Pa·s)
                    </label>
                    <input
                        type="number"
                        id="pascalSecondInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter pascal seconds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 Pa·s = 1,000 cP
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="viscosityInfo" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Viscosity Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Viscosity Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Centipoise</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pascal Second</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 Pa·s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 Pa·s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 Pa·s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 Pa·s</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 Pa·s</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 cP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 Pa·s</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Fluid Viscosities -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-oil-can text-amber-600 mr-3"></i>Common Fluid Viscosities
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Low Viscosity Fluids:</strong><br>
                        • Water (20°C): 1.0 cP (0.001 Pa·s)<br>
                        • Gasoline: 0.6 cP (0.0006 Pa·s)<br>
                        • Ethanol: 1.2 cP (0.0012 Pa·s)<br>
                        • Mercury: 1.5 cP (0.0015 Pa·s)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Medium Viscosity Fluids:</strong><br>
                        • Milk: 3-4 cP (0.003-0.004 Pa·s)<br>
                        • Blood: 3-5 cP (0.003-0.005 Pa·s)<br>
                        • Motor oil (SAE 30): 200-500 cP (0.2-0.5 Pa·s)<br>
                        • Glycerin: 1,500 cP (1.5 Pa·s)
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>High Viscosity Fluids:</strong><br>
                        • Honey: 10,000 cP (10 Pa·s)<br>
                        • Tar: 30,000 cP (30 Pa·s)<br>
                        • Molasses: 5,000-10,000 cP (5-10 Pa·s)<br>
                        • Peanut butter: 200,000 cP (200 Pa·s)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>Viscosity Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Centipoise:</strong> 1/100 poise (CGS unit)</li>
                    <li><strong>Pascal Second:</strong> SI unit of viscosity</li>
                    <li><strong>Conversion:</strong> 1 Pa·s = 1,000 cP</li>
                    <li><strong>Definition:</strong> Dynamic viscosity</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Viscosity Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Use cP for practical measurements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Use Pa·s for scientific calculations</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Temperature affects viscosity</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Pressure can influence results</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Fluid flow calculations</li>
                    <li><strong>Chemistry:</strong> Process design</li>
                    <li><strong>Petroleum:</strong> Oil characterization</li>
                    <li><strong>Food:</strong> Texture analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCentipoiseToPascalSecond(centipoise) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(centipoise) && centipoise !== '') {
        const pascalSecond = centipoise * 0.001;
        document.getElementById('pascalSecondInput').value = pascalSecond.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${centipoise} cP = ${pascalSecond.toFixed(6)} Pa·s</strong>
        `;
        
        // Add viscosity context
        let viscosityText = '';
        if (centipoise >= 100000) {
            viscosityText = 'Very high viscosity - paste-like consistency';
        } else if (centipoise >= 10000) {
            viscosityText = 'High viscosity - thick liquid (honey, tar)';
        } else if (centipoise >= 1000) {
            viscosityText = 'Medium-high viscosity - syrup-like';
        } else if (centipoise >= 100) {
            viscosityText = 'Medium viscosity - motor oil range';
        } else if (centipoise >= 10) {
            viscosityText = 'Low-medium viscosity - cooking oil range';
        } else if (centipoise >= 1) {
            viscosityText = 'Low viscosity - water-like fluids';
        } else if (centipoise > 0) {
            viscosityText = 'Very low viscosity - gas-like fluids';
        }
        
        document.getElementById('viscosityInfo').innerHTML = viscosityText;
    } else {
        document.getElementById('pascalSecondInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('viscosityInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertPascalSecondToCentipoise(pascalSecond) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pascalSecond) && pascalSecond !== '') {
        const centipoise = pascalSecond * 1000;
        document.getElementById('centipoiseInput').value = centipoise.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${pascalSecond} Pa·s = ${centipoise.toFixed(6)} cP</strong>
        `;
        
        // Add viscosity context
        let viscosityText = '';
        if (pascalSecond >= 100) {
            viscosityText = 'Very high viscosity - paste-like consistency';
        } else if (pascalSecond >= 10) {
            viscosityText = 'High viscosity - thick liquid (honey, tar)';
        } else if (pascalSecond >= 1) {
            viscosityText = 'Medium-high viscosity - syrup-like';
        } else if (pascalSecond >= 0.1) {
            viscosityText = 'Medium viscosity - motor oil range';
        } else if (pascalSecond >= 0.01) {
            viscosityText = 'Low-medium viscosity - cooking oil range';
        } else if (pascalSecond >= 0.001) {
            viscosityText = 'Low viscosity - water-like fluids';
        } else if (pascalSecond > 0) {
            viscosityText = 'Very low viscosity - gas-like fluids';
        }
        
        document.getElementById('viscosityInfo').innerHTML = viscosityText;
    } else {
        document.getElementById('centipoiseInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('viscosityInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('centipoiseInput').value = '';
    document.getElementById('pascalSecondInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('viscosityInfo').innerHTML = '';
}

function swapValues() {
    const centipoiseValue = document.getElementById('centipoiseInput').value;
    const pascalSecondValue = document.getElementById('pascalSecondInput').value;
    
    document.getElementById('centipoiseInput').value = pascalSecondValue;
    document.getElementById('pascalSecondInput').value = centipoiseValue;
    
    if (pascalSecondValue) {
        convertCentipoiseToPascalSecond(parseFloat(pascalSecondValue));
    } else if (centipoiseValue) {
        convertPascalSecondToCentipoise(parseFloat(centipoiseValue));
    }
}

// Add event listeners
document.getElementById('centipoiseInput').addEventListener('input', function() {
    convertCentipoiseToPascalSecond(parseFloat(this.value));
});

document.getElementById('pascalSecondInput').addEventListener('input', function() {
    convertPascalSecondToCentipoise(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
