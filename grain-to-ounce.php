<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Grain to Ounce Converter 2026 - gr to oz Calculator | Thiyagi</title>
<meta name="description" content="Free online Grain to Ounce converter 2026. Convert gr to oz and oz to gr instantly with accurate weight conversion.">
<meta name="keywords" content="grain to ounce converter 2026, gr to oz, weight converter, apothecary weight, precision measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Grain to Ounce Converter 2026 - gr to oz Calculator">
<meta property="og:description" content="Free online Grain to Ounce converter 2026. Convert gr to oz and oz to gr instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/grain-to-ounce.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Grain to Ounce Converter 2026 - gr to oz Calculator">
<meta property="twitter:description" content="Free online Grain to Ounce converter 2026. Convert gr to oz and oz to gr instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wheat-awn text-yellow-600 mr-3"></i>
                Grain to Ounce Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between grains and ounces for pharmaceutical measurements, precious metals, and precision weight calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Grain Input -->
                <div class="space-y-4">
                    <label for="grainInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-seedling text-yellow-600 mr-2"></i>Grains (gr)
                    </label>
                    <input
                        type="number"
                        id="grainInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter grains"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gr = 0.002286 oz
                    </div>
                </div>

                <!-- Ounce Input -->
                <div class="space-y-4">
                    <label for="ounceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-amber-600 mr-2"></i>Ounces (oz)
                    </label>
                    <input
                        type="number"
                        id="ounceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter ounces"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 oz = 437.5 gr
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Apothecary Weight Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Apothecary Weight Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Grains</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Ounces</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.002286 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.137 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">120 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.274 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">218.75 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 oz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">437.5 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 oz</td>
                            </tr>
                            <tr>
                                <td class="py-2">875 gr</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 oz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Precision Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-pills text-yellow-600 mr-3"></i>Precision Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Pharmaceutical:</strong><br>
                        • Aspirin tablet: 5 grains (325 mg)<br>
                        • Medicine dosage: 1-10 grains<br>
                        • Vitamin supplement: 2-15 grains<br>
                        • Homeopathic dose: 0.1-1 grain
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Precious Metals:</strong><br>
                        • Gold jewelry: 480-960 grains/oz troy<br>
                        • Silver coin: 400-450 grains<br>
                        • Gemstone weight: 1-100 grains<br>
                        • Gold dust: measured in grains
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Historical Uses:</strong><br>
                        • Gunpowder charge: 60-120 grains<br>
                        • Arrow weight: 300-500 grains<br>
                        • Bullet weight: 55-180 grains<br>
                        • Apothecary measurements
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-yellow-600 mr-2"></i>Weight Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Grain:</strong> 1/7000 pound avoirdupois</li>
                    <li><strong>Ounce:</strong> 1/16 pound avoirdupois</li>
                    <li><strong>Conversion:</strong> 1 oz = 437.5 grains</li>
                    <li><strong>Mass:</strong> 1 grain = 64.79891 mg</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Grains for precise dosing</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Ounces for general weight</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>437.5:1 ratio exact</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Traditional apothecary unit</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Pharmacy:</strong> Drug dosage</li>
                    <li><strong>Jewelry:</strong> Precious metal weight</li>
                    <li><strong>Ballistics:</strong> Projectile weight</li>
                    <li><strong>Science:</strong> Precise measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGrainToOunce(grain) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(grain) && grain !== '') {
        // 1 grain = 1/437.5 ounce (exact conversion)
        const ounce = grain / 437.5;
        document.getElementById('ounceInput').value = ounce.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${grain} gr = ${ounce.toFixed(6)} oz</strong>
        `;
    } else {
        document.getElementById('ounceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertOunceToGrain(ounce) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ounce) && ounce !== '') {
        // 1 ounce = 437.5 grains (exact conversion)
        const grain = ounce * 437.5;
        document.getElementById('grainInput').value = grain;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${ounce} oz = ${grain} gr</strong>
        `;
    } else {
        document.getElementById('grainInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('grainInput').value = '';
    document.getElementById('ounceInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const grainValue = document.getElementById('grainInput').value;
    const ounceValue = document.getElementById('ounceInput').value;
    
    document.getElementById('grainInput').value = ounceValue;
    document.getElementById('ounceInput').value = grainValue;
    
    if (ounceValue) {
        convertGrainToOunce(parseFloat(ounceValue));
    } else if (grainValue) {
        convertOunceToGrain(parseFloat(grainValue));
    }
}

// Add event listeners
document.getElementById('grainInput').addEventListener('input', function() {
    convertGrainToOunce(parseFloat(this.value));
});

document.getElementById('ounceInput').addEventListener('input', function() {
    convertOunceToGrain(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
