<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Angstrom to Nanometer Converter 2026 - Å to nm Calculator | Thiyagi</title>
<meta name="description" content="Free online Angstrom to Nanometer converter 2026. Convert Å to nm and nm to Å instantly with accurate atomic-scale length conversion for science.">
<meta name="keywords" content="angstrom to nanometer converter 2026, Å to nm, atomic scale converter, wavelength converter, molecular measurement, crystallography">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Angstrom to Nanometer Converter 2026 - Å to nm Calculator">
<meta property="og:description" content="Free online Angstrom to Nanometer converter 2026. Convert Å to nm and nm to Å instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/angstrom-to-nanometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Angstrom to Nanometer Converter 2026 - Å to nm Calculator">
<meta name="twitter:description" content="Free online Angstrom to Nanometer converter 2026. Convert Å to nm and nm to Å instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-purple-600 mr-3"></i>
                Angstrom to Nanometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between angstroms and nanometers for atomic-scale measurements, crystallography, and wavelength calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Angstrom Input -->
                <div class="space-y-4">
                    <label for="angstromInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-purple-600 mr-2"></i>Angstrom (Å)
                    </label>
                    <input
                        type="number"
                        id="angstromInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter angstroms"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Å = 0.1 nm
                    </div>
                </div>

                <!-- Nanometer Input -->
                <div class="space-y-4">
                    <label for="nanometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-indigo-600 mr-2"></i>Nanometer (nm)
                    </label>
                    <input
                        type="number"
                        id="nanometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter nanometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 nm = 10 Å
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="scaleReference" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-purple-600 mr-3"></i>Atomic Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Angstrom</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanometer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.5 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5.0 nm</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 Å</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 nm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Wavelengths & Atomic Structures -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-wave-square text-purple-600 mr-3"></i>Wavelengths & Atomic Structures
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>X-ray Wavelengths:</strong><br>
                        • Hard X-rays: 0.1-1 Å (0.01-0.1 nm)<br>
                        • Soft X-rays: 1-100 Å (0.1-10 nm)<br>
                        • Cu Kα: 1.54 Å (0.154 nm)<br>
                        • Mo Kα: 0.71 Å (0.071 nm)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Atomic Dimensions:</strong><br>
                        • Hydrogen radius: 0.53 Å (0.053 nm)<br>
                        • C-C bond: 1.54 Å (0.154 nm)<br>
                        • DNA helix: 20 Å (2.0 nm)<br>
                        • Protein size: 20-200 Å (2-20 nm)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Crystal Lattices:</strong><br>
                        • Silicon: 5.43 Å (0.543 nm)<br>
                        • Diamond: 3.57 Å (0.357 nm)<br>
                        • Salt (NaCl): 5.64 Å (0.564 nm)<br>
                        • Graphite: 3.35 Å (0.335 nm)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Angstrom:</strong> 10⁻¹⁰ meters</li>
                    <li><strong>Nanometer:</strong> 10⁻⁹ meters</li>
                    <li><strong>Conversion:</strong> 1 nm = 10 Å</li>
                    <li><strong>Symbol:</strong> Å (Anders Jonas Ångström)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Scientific Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use Å for atomic-scale structures</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use nm for wavelengths and optics</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Standard in crystallography</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Critical for material science</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Crystallography:</strong> Crystal structure analysis</li>
                    <li><strong>Spectroscopy:</strong> X-ray and UV studies</li>
                    <li><strong>Materials:</strong> Thin film measurements</li>
                    <li><strong>Biology:</strong> Molecular structure studies</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertAngstromToNanometer(angstroms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(angstroms) && angstroms !== '') {
        const nanometers = angstroms * 0.1;
        document.getElementById('nanometerInput').value = nanometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${angstroms} Å = ${nanometers.toFixed(6)} nm</strong>
        `;
        
        // Add scale reference
        let scaleText = '';
        if (angstroms >= 100) {
            scaleText = 'Large molecular structure or protein scale';
        } else if (angstroms >= 20) {
            scaleText = 'Protein or large molecule scale';
        } else if (angstroms >= 10) {
            scaleText = 'Small molecule or cluster scale';
        } else if (angstroms >= 1) {
            scaleText = 'Atomic bond length or X-ray wavelength scale';
        } else if (angstroms > 0.1) {
            scaleText = 'Atomic radius or gamma ray wavelength scale';
        } else if (angstroms > 0) {
            scaleText = 'Subatomic particle scale';
        }
        
        document.getElementById('scaleReference').innerHTML = scaleText;
    } else {
        document.getElementById('nanometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('scaleReference').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertNanometerToAngstrom(nanometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanometers) && nanometers !== '') {
        const angstroms = nanometers * 10;
        document.getElementById('angstromInput').value = angstroms.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${nanometers} nm = ${angstroms.toFixed(6)} Å</strong>
        `;
        
        // Add scale reference
        let scaleText = '';
        if (nanometers >= 100) {
            scaleText = 'Virus or large biological structure scale';
        } else if (nanometers >= 10) {
            scaleText = 'Large protein or molecular complex scale';
        } else if (nanometers >= 1) {
            scaleText = 'Small protein or large molecule scale';
        } else if (nanometers >= 0.1) {
            scaleText = 'Atomic bond length or X-ray wavelength scale';
        } else if (nanometers > 0.01) {
            scaleText = 'Atomic radius or hard X-ray wavelength scale';
        } else if (nanometers > 0) {
            scaleText = 'Subatomic or gamma ray scale';
        }
        
        document.getElementById('scaleReference').innerHTML = scaleText;
    } else {
        document.getElementById('angstromInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('scaleReference').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('angstromInput').value = '';
    document.getElementById('nanometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('scaleReference').innerHTML = '';
}

function swapValues() {
    const angstromValue = document.getElementById('angstromInput').value;
    const nanometerValue = document.getElementById('nanometerInput').value;
    
    document.getElementById('angstromInput').value = nanometerValue;
    document.getElementById('nanometerInput').value = angstromValue;
    
    if (nanometerValue) {
        convertAngstromToNanometer(parseFloat(nanometerValue));
    } else if (angstromValue) {
        convertNanometerToAngstrom(parseFloat(angstromValue));
    }
}

// Add event listeners
document.getElementById('angstromInput').addEventListener('input', function() {
    convertAngstromToNanometer(parseFloat(this.value));
});

document.getElementById('nanometerInput').addEventListener('input', function() {
    convertNanometerToAngstrom(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
