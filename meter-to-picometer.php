<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter to Picometer Converter 2026 - m to pm Calculator | Thiyagi</title>
<meta name="description" content="Free online Meter to Picometer converter 2026. Convert m to pm and pm to m instantly with accurate length conversion.">
<meta name="keywords" content="meter to picometer converter 2026, m to pm, length conversion, scientific units, atomic scale calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter to Picometer Converter 2026 - m to pm Calculator">
<meta property="og:description" content="Free online Meter to Picometer converter 2026. Convert m to pm and pm to m instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-to-picometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter to Picometer Converter 2026 - m to pm Calculator">
<meta property="twitter:description" content="Free online Meter to Picometer converter 2026. Convert m to pm and pm to m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-emerald-600 mr-3"></i>
                Meter to Picometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between meters (m) and picometers (pm) for atomic-scale measurements, molecular dimensions, and scientific research applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-emerald-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        SI base unit of length
                    </div>
                </div>

                <!-- Picometer Input -->
                <div class="space-y-4">
                    <label for="picometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-teal-600 mr-2"></i>Picometers (pm)
                    </label>
                    <input
                        type="number"
                        id="picometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter picometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Atomic-scale length unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Length Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Length Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Meters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Picometers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1×10⁻¹² m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 pm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1×10⁻⁹ m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 pm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1×10⁻⁶ m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 pm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1×10⁻³ m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁹ pm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10¹² pm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10¹³ pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-emerald-600 mr-3"></i>Scientific Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Atomic Dimensions:</strong><br>
                        • Hydrogen atom radius: 53 pm<br>
                        • Carbon atom radius: 70 pm<br>
                        • Oxygen atom radius: 60 pm<br>
                        • Typical atomic bonds: 100-200 pm
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Molecular Structures:</strong><br>
                        • Covalent bonds: 50-300 pm<br>
                        • Van der Waals radius: 100-400 pm<br>
                        • DNA helix width: 2,000 pm (2 nm)<br>
                        • Protein dimensions: 1,000-10,000 pm
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Research Applications:</strong><br>
                        • X-ray wavelengths: 10-1,000 pm<br>
                        • Crystal lattice spacing: 100-1,000 pm<br>
                        • Quantum dots: 1,000-10,000 pm<br>
                        • Scanning probe microscopy: 1-100 pm resolution
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>m:</strong> SI base unit of length</li>
                    <li><strong>pm:</strong> 10⁻¹² meters</li>
                    <li><strong>Conversion:</strong> 1 m = 1×10¹² pm</li>
                    <li><strong>Prefix:</strong> Pico = trillionth</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>pm for atomic scales</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>m for macroscopic objects</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Use scientific notation</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Check measurement precision</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Chemistry:</strong> Molecular dimensions</li>
                    <li><strong>Physics:</strong> Atomic studies</li>
                    <li><strong>Materials:</strong> Nanoscale research</li>
                    <li><strong>Biology:</strong> Protein structures</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMeterToPicometer(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 m = 1×10¹² pm
        const picometer = meter * 1e12;
        document.getElementById('picometerInput').value = picometer;
        
        // Use scientific notation for very large numbers
        const displayPm = picometer >= 1e6 ? picometer.toExponential(3) : picometer.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${meter} m = ${displayPm} pm</strong>
        `;
    } else {
        document.getElementById('picometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPicometerToMeter(picometer) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(picometer) && picometer !== '') {
        // 1 pm = 1×10⁻¹² m
        const meter = picometer / 1e12;
        document.getElementById('meterInput').value = meter.toFixed(15);
        
        // Use scientific notation for very small numbers
        const displayM = meter < 1e-9 ? meter.toExponential(3) : meter.toFixed(12);
        const displayPm = picometer >= 1e6 ? picometer.toExponential(3) : picometer.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${displayPm} pm = ${displayM} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('meterInput').value = '';
    document.getElementById('picometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const meterValue = document.getElementById('meterInput').value;
    const picometerValue = document.getElementById('picometerInput').value;
    
    document.getElementById('meterInput').value = picometerValue;
    document.getElementById('picometerInput').value = meterValue;
    
    if (picometerValue) {
        convertMeterToPicometer(parseFloat(picometerValue));
    } else if (meterValue) {
        convertPicometerToMeter(parseFloat(meterValue));
    }
}

// Add event listeners
document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToPicometer(parseFloat(this.value));
});

document.getElementById('picometerInput').addEventListener('input', function() {
    convertPicometerToMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
