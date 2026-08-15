<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Angstrom to Meter Converter 2026 - Å to m Calculator | Thiyagi</title>
<meta name="description" content="Free online Angstrom to Meter converter 2026. Convert Å to m and m to Å instantly with accurate atomic scale length measurement conversion.">
<meta name="keywords" content="angstrom to meter converter 2026, Å to m, atomic length, scientific measurement, crystallography converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Angstrom to Meter Converter 2026 - Å to m Calculator">
<meta property="og:description" content="Free online Angstrom to Meter converter 2026. Convert Å to m and m to Å instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/angstrom-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Angstrom to Meter Converter 2026 - Å to m Calculator">
<meta property="twitter:description" content="Free online Angstrom to Meter converter 2026. Convert Å to m and m to Å instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-blue-600 mr-3"></i>
                Angstrom to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between angstroms (Å) and meters (m) for atomic measurements, crystallography, and molecular structure analysis
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Angstrom Input -->
                <div class="space-y-4">
                    <label for="angstromInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-blue-600 mr-2"></i>Angstroms (Å)
                    </label>
                    <input
                        type="number"
                        id="angstromInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter angstroms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        10,000,000,000 Å = 1 m
                    </div>
                </div>

                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-horizontal text-indigo-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 10,000,000,000 Å
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
            <!-- Atomic Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Atomic Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Angstroms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Meters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻¹⁰ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁹ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁸ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁷ m</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁻⁶ m</td>
                            </tr>
                            <tr>
                                <td class="py-2">10¹⁰ Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 m</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Molecular Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-dna text-blue-600 mr-3"></i>Molecular Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Atomic Dimensions:</strong><br>
                        • Hydrogen atom: ~1 Å (1×10⁻¹⁰ m)<br>
                        • Carbon atom: ~1.5 Å<br>
                        • Gold atom: ~2.9 Å<br>
                        • Uranium atom: ~3.5 Å
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Chemical Bonds:</strong><br>
                        • C-C bond: 1.54 Å (1.54×10⁻¹⁰ m)<br>
                        • C-H bond: 1.09 Å<br>
                        • O-H bond: 0.96 Å<br>
                        • C=O bond: 1.21 Å
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Biological Structures:</strong><br>
                        • DNA helix width: 20 Å (2×10⁻⁹ m)<br>
                        • Protein α-helix: 12 Å diameter<br>
                        • Cell membrane: 50-100 Å thick<br>
                        • Virus particles: 200-3,000 Å
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Angstrom:</strong> 10⁻¹⁰ meters</li>
                    <li><strong>Meter:</strong> SI base unit</li>
                    <li><strong>Conversion:</strong> 1 Å = 10⁻¹⁰ m</li>
                    <li><strong>Named after:</strong> Anders Ångström</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Å for atomic scale</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>m for macroscopic scale</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Scientific notation helpful</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>10 billion factor difference</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Crystallography:</strong> Crystal structures</li>
                    <li><strong>Chemistry:</strong> Molecular modeling</li>
                    <li><strong>Physics:</strong> Atomic measurements</li>
                    <li><strong>Materials:</strong> Nanoscale analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertAngstromToMeter(angstrom) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(angstrom) && angstrom !== '') {
        // 1 angstrom = 10^-10 meters
        const meter = angstrom * 1e-10;
        document.getElementById('meterInput').value = meter;
        
        let formattedMeter = meter;
        if (meter < 1e-6) {
            formattedMeter = meter.toExponential(3) + ' m';
        } else {
            formattedMeter = meter.toLocaleString(undefined, {maximumFractionDigits: 15}) + ' m';
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${angstrom.toLocaleString()} Å = ${formattedMeter}</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMeterToAngstrom(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 meter = 10^10 angstroms
        const angstrom = meter * 1e10;
        document.getElementById('angstromInput').value = angstrom;
        
        let formattedAngstrom = angstrom;
        if (angstrom >= 1e6) {
            formattedAngstrom = angstrom.toExponential(3) + ' Å';
        } else {
            formattedAngstrom = angstrom.toLocaleString() + ' Å';
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${meter} m = ${formattedAngstrom}</strong>
        `;
    } else {
        document.getElementById('angstromInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('angstromInput').value = '';
    document.getElementById('meterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const angstromValue = document.getElementById('angstromInput').value;
    const meterValue = document.getElementById('meterInput').value;
    
    document.getElementById('angstromInput').value = meterValue;
    document.getElementById('meterInput').value = angstromValue;
    
    if (meterValue) {
        convertAngstromToMeter(parseFloat(meterValue));
    } else if (angstromValue) {
        convertMeterToAngstrom(parseFloat(angstromValue));
    }
}

// Add event listeners
document.getElementById('angstromInput').addEventListener('input', function() {
    convertAngstromToMeter(parseFloat(this.value));
});

document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToAngstrom(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
