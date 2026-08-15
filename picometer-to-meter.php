<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Picometer to Meter Converter 2026 - pm to m Calculator | Thiyagi</title>
<meta name="description" content="Free online Picometer to Meter converter 2026. Convert pm to m and m to pm instantly with accurate nanoscale distance conversion for scientific research.">
<meta name="keywords" content="picometer to meter converter 2026, pm to m, nanoscale converter, scientific measurement, atomic scale, molecular distance">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Picometer to Meter Converter 2026 - pm to m Calculator">
<meta property="og:description" content="Free online Picometer to Meter converter 2026. Convert pm to m and m to pm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/picometer-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Picometer to Meter Converter 2026 - pm to m Calculator">
<meta name="twitter:description" content="Free online Picometer to Meter converter 2026. Convert pm to m and m to pm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-violet-600 mr-3"></i>
                Picometer to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between picometers and meters for atomic-scale measurements and scientific research
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Picometer Input -->
                <div class="space-y-4">
                    <label for="picometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Picometer (pm)
                    </label>
                    <input
                        type="number"
                        id="picometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter picometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 pm = 1×10⁻¹² m
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Meter (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 1×10¹² pm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="scientificNotation" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-violet-500 hover:bg-violet-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Atomic Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Atomic Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Picometers</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻¹² m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻¹¹ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻¹⁰ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁹ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁸ m</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 pm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁶ m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Atomic & Molecular Sizes -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-dna text-violet-600 mr-3"></i>Atomic & Molecular Sizes
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Atomic Radii:</strong><br>
                        • Hydrogen atom: ~53 pm (Bohr radius)<br>
                        • Carbon atom: ~70 pm<br>
                        • Oxygen atom: ~60 pm<br>
                        • Silicon atom: ~110 pm
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Chemical Bonds:</strong><br>
                        • C-H bond: ~109 pm<br>
                        • C-C bond: ~154 pm<br>
                        • O-H bond: ~96 pm<br>
                        • C=O bond: ~120 pm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Crystal Structures:</strong><br>
                        • Silicon lattice: ~543 pm<br>
                        • Diamond lattice: ~357 pm<br>
                        • Salt crystal: ~564 pm<br>
                        • Graphite layers: ~335 pm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Picometer:</strong> 10⁻¹² meters</li>
                    <li><strong>Symbol:</strong> pm</li>
                    <li><strong>Scale:</strong> Atomic dimensions</li>
                    <li><strong>Precision:</strong> Subatomic measurements</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Scientific Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Use for atomic-scale measurements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Essential in crystallography</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Critical for molecular modeling</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Standard in nanotechnology</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Chemistry:</strong> Bond length measurements</li>
                    <li><strong>Physics:</strong> Quantum mechanics studies</li>
                    <li><strong>Materials:</strong> Crystal structure analysis</li>
                    <li><strong>Biology:</strong> Molecular interactions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPicometerToMeter(picometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(picometers) && picometers !== '') {
        const meters = picometers * 1e-12;
        document.getElementById('meterInput').value = meters;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${picometers} pm = ${meters} m</strong>
        `;
        
        document.getElementById('scientificNotation').innerHTML = `
            Scientific notation: ${picometers} pm = ${picometers}×10⁻¹² m
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('scientificNotation').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertMeterToPicometer(meters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meters) && meters !== '') {
        const picometers = meters * 1e12;
        document.getElementById('picometerInput').value = picometers;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${meters} m = ${picometers} pm</strong>
        `;
        
        document.getElementById('scientificNotation').innerHTML = `
            Scientific notation: ${meters} m = ${meters}×10¹² pm
        `;
    } else {
        document.getElementById('picometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('scientificNotation').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('picometerInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('scientificNotation').innerHTML = '';
}

function swapValues() {
    const picometerValue = document.getElementById('picometerInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('picometerInput').value = meterValue;
    document.getElementById('meterInput').value = picometerValue;
    
    if (meterValue) {
        convertPicometerToMeter(parseFloat(meterValue));
    } else if (picometerValue) {
        convertMeterToPicometer(parseFloat(picometerValue));
    }
}

// Add event listeners
document.getElementById('picometerInput').addEventListener('input', function() {
    convertPicometerToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToPicometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
