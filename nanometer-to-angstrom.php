<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nanometer to Angstrom Converter 2026 - nm to Å Calculator | Thiyagi</title>
<meta name="description" content="Free online Nanometer to Angstrom converter 2026. Convert nm to Å and Å to nm instantly with accurate atomic scale measurement conversion.">
<meta name="keywords" content="nanometer to angstrom converter 2026, nm to angstrom, atomic measurements, molecular scale, nanotechnology, scientific units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nanometer to Angstrom Converter 2026 - nm to Å Calculator">
<meta property="og:description" content="Free online Nanometer to Angstrom converter 2026. Convert nm to Å and Å to nm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nanometer-to-angstrom.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nanometer to Angstrom Converter 2026 - nm to Å Calculator">
<meta property="twitter:description" content="Free online Nanometer to Angstrom converter 2026. Convert nm to Å and Å to nm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-violet-600 mr-3"></i>
                Nanometer to Angstrom Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between nanometers and angstroms for atomic measurements, crystallography, and nanotechnology applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nanometer Input -->
                <div class="space-y-4">
                    <label for="nanometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Nanometers (nm)
                    </label>
                    <input
                        type="number"
                        id="nanometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter nanometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 nm = 10 Å
                    </div>
                </div>

                <!-- Angstrom Input -->
                <div class="space-y-4">
                    <label for="angstromInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dna text-purple-600 mr-2"></i>Angstroms (Å)
                    </label>
                    <input
                        type="number"
                        id="angstromInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter angstroms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 Å = 0.1 nm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg">
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
                                <th class="text-left py-2">Nanometers</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Angstroms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 Å</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 Å</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 Å</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">20 Å</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 Å</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 nm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 Å</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-violet-600 mr-3"></i>Scientific Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Atomic Dimensions:</strong><br>
                        • Hydrogen atom: 1.06 Å (0.106 nm)<br>
                        • Carbon atom: 1.54 Å (0.154 nm)<br>
                        • Oxygen atom: 1.52 Å (0.152 nm)<br>
                        • Silicon atom: 2.10 Å (0.21 nm)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Molecular Structures:</strong><br>
                        • C-C bond: 1.54 Å (0.154 nm)<br>
                        • C=C bond: 1.34 Å (0.134 nm)<br>
                        • C-H bond: 1.09 Å (0.109 nm)<br>
                        • Water molecule: 2.8 Å (0.28 nm)
                    </div>
                    <div class="bg-fuchsia-50 p-3 rounded">
                        <strong>Nanotechnology:</strong><br>
                        • DNA width: 20 Å (2 nm)<br>
                        • Protein size: 20-100 Å (2-10 nm)<br>
                        • Quantum dots: 10-100 Å (1-10 nm)<br>
                        • Carbon nanotube: 7-300 Å (0.7-30 nm)
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
                    <li><strong>Nanometer:</strong> 10⁻⁹ meters</li>
                    <li><strong>Angstrom:</strong> 10⁻¹⁰ meters</li>
                    <li><strong>Conversion:</strong> 1 nm = 10 Å</li>
                    <li><strong>Symbol:</strong> Å (Anders Ångström)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Å for atomic dimensions</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>nm for nanostructures</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Simple 10:1 ratio</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>X-ray wavelengths</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Crystallography:</strong> Crystal structures</li>
                    <li><strong>Materials science:</strong> Atomic spacing</li>
                    <li><strong>Nanotechnology:</strong> Device scaling</li>
                    <li><strong>Physics:</strong> Wavelength measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNanometerToAngstrom(nanometer) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanometer) && nanometer !== '') {
        // 1 nm = 10 Å
        const angstrom = nanometer * 10;
        document.getElementById('angstromInput').value = angstrom;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${nanometer} nm = ${angstrom} Å</strong>
        `;
    } else {
        document.getElementById('angstromInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertAngstromToNanometer(angstrom) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(angstrom) && angstrom !== '') {
        // 1 Å = 0.1 nm
        const nanometer = angstrom / 10;
        document.getElementById('nanometerInput').value = nanometer;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${angstrom} Å = ${nanometer} nm</strong>
        `;
    } else {
        document.getElementById('nanometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('nanometerInput').value = '';
    document.getElementById('angstromInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const nanometerValue = document.getElementById('nanometerInput').value;
    const angstromValue = document.getElementById('angstromInput').value;
    
    document.getElementById('nanometerInput').value = angstromValue;
    document.getElementById('angstromInput').value = nanometerValue;
    
    if (angstromValue) {
        convertNanometerToAngstrom(parseFloat(angstromValue));
    } else if (nanometerValue) {
        convertAngstromToNanometer(parseFloat(nanometerValue));
    }
}

// Add event listeners
document.getElementById('nanometerInput').addEventListener('input', function() {
    convertNanometerToAngstrom(parseFloat(this.value));
});

document.getElementById('angstromInput').addEventListener('input', function() {
    convertAngstromToNanometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
