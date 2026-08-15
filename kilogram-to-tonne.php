<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilogram to Tonne Converter 2026 - kg to tonne Calculator | Thiyagi</title>
<meta name="description" content="Free online Kilogram to Tonne converter 2026. Convert kg to tonne and tonne to kg instantly with accurate metric weight conversion.">
<meta name="keywords" content="kilogram to tonne converter 2026, kg to tonne, metric weight converter, mass converter, industrial weighing">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilogram to Tonne Converter 2026 - kg to tonne Calculator">
<meta property="og:description" content="Free online Kilogram to Tonne converter 2026. Convert kg to tonne and tonne to kg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilogram-to-tonne.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilogram to Tonne Converter 2026 - kg to tonne Calculator">
<meta name="twitter:description" content="Free online Kilogram to Tonne converter 2026. Convert kg to tonne and tonne to kg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-zinc-50 to-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-truck text-slate-600 mr-3"></i>
                Kilogram to Tonne Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilograms and tonnes for industrial, shipping, and large-scale weight measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilogram Input -->
                <div class="space-y-4">
                    <label for="kilogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-slate-600 mr-2"></i>Kilogram (kg)
                    </label>
                    <input
                        type="number"
                        id="kilogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter kilograms"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 kg = 0.001 tonne
                    </div>
                </div>

                <!-- Tonne Input -->
                <div class="space-y-4">
                    <label for="tonneInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-shipping-fast text-zinc-600 mr-2"></i>Tonne (t)
                    </label>
                    <input
                        type="number"
                        id="tonneInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter tonnes"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 tonne = 1,000 kg
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-zinc-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-slate-500 hover:bg-slate-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Industrial Weight Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Industrial Weight Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kilograms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Tonnes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 t</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 t</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 t</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2,500 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 t</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5.0 t</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 kg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 t</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real-World Weight Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-globe text-slate-600 mr-3"></i>Real-World Weight Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Vehicles & Machinery:</strong><br>
                        • Small car: 1-1.5 tonnes (1000-1500 kg)<br>
                        • Large SUV: 2-3 tonnes (2000-3000 kg)<br>
                        • Delivery truck: 3-7 tonnes<br>
                        • Semi-truck (empty): 7-9 tonnes
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Shipping & Cargo:</strong><br>
                        • Standard pallet: 500-1000 kg (0.5-1 t)<br>
                        • Shipping container (20ft): 2.2 tonnes<br>
                        • Container + cargo: 24-30 tonnes<br>
                        • Small cargo ship: 1,000-5,000 tonnes
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Construction & Materials:</strong><br>
                        • Concrete mixer: 350-500 kg (per m³)<br>
                        • Steel beam: 100-2000 kg<br>
                        • Excavator: 5-45 tonnes<br>
                        • Building crane: 20-1,000 tonnes
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Metric Mass System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Kilogram:</strong> Base SI unit of mass</li>
                    <li><strong>Tonne:</strong> Metric unit (1000 kg)</li>
                    <li><strong>Symbol:</strong> t (tonne), kg (kilogram)</li>
                    <li><strong>Conversion:</strong> 1 t = 1,000 kg exactly</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Use appropriate scale capacity</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Consider gross vs net weight</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Account for container weight</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Regular scale calibration</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-industry text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Shipping:</strong> Cargo weight limits</li>
                    <li><strong>Manufacturing:</strong> Material quantities</li>
                    <li><strong>Construction:</strong> Load calculations</li>
                    <li><strong>Agriculture:</strong> Harvest quantities</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKilogramToTonne(kilograms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilograms) && kilograms !== '') {
        const tonnes = kilograms / 1000;
        document.getElementById('tonneInput').value = tonnes.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${kilograms} kg = ${tonnes.toFixed(8)} tonne</strong>
        `;
    } else {
        document.getElementById('tonneInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertTonneToKilogram(tonnes) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tonnes) && tonnes !== '') {
        const kilograms = tonnes * 1000;
        document.getElementById('kilogramInput').value = kilograms.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${tonnes} tonne = ${kilograms.toFixed(6)} kg</strong>
        `;
    } else {
        document.getElementById('kilogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kilogramInput').value = '';
    document.getElementById('tonneInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kilogramValue = document.getElementById('kilogramInput').value;
    const tonneValue = document.getElementById('tonneInput').value;
    
    document.getElementById('kilogramInput').value = tonneValue;
    document.getElementById('tonneInput').value = kilogramValue;
    
    if (tonneValue) {
        convertKilogramToTonne(parseFloat(tonneValue));
    } else if (kilogramValue) {
        convertTonneToKilogram(parseFloat(kilogramValue));
    }
}

// Add event listeners
document.getElementById('kilogramInput').addEventListener('input', function() {
    convertKilogramToTonne(parseFloat(this.value));
});

document.getElementById('tonneInput').addEventListener('input', function() {
    convertTonneToKilogram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
