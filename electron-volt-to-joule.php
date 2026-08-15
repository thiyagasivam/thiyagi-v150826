<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Electron Volt to Joule Converter 2026 - eV to J Calculator | Thiyagi</title>
<meta name="description" content="Free online Electron Volt to Joule converter 2026. Convert eV to J and J to eV instantly with accurate energy conversion for physics calculations.">
<meta name="keywords" content="electron volt to joule converter 2026, eV to J, energy converter, physics calculations, quantum mechanics, particle physics">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Electron Volt to Joule Converter 2026 - eV to J Calculator">
<meta property="og:description" content="Free online Electron Volt to Joule converter 2026. Convert eV to J and J to eV instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/electron-volt-to-joule.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Electron Volt to Joule Converter 2026 - eV to J Calculator">
<meta name="twitter:description" content="Free online Electron Volt to Joule converter 2026. Convert eV to J and J to eV instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-violet-600 mr-3"></i>
                Electron Volt to Joule Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between electron volts and joules for atomic physics, quantum mechanics, and particle energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Electron Volt Input -->
                <div class="space-y-4">
                    <label for="electronVoltInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-bolt text-violet-600 mr-2"></i>Electron Volt (eV)
                    </label>
                    <input
                        type="number"
                        id="electronVoltInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter electron volts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 eV = 1.602×10⁻¹⁹ J
                    </div>
                </div>

                <!-- Joule Input -->
                <div class="space-y-4">
                    <label for="jouleInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-fire text-purple-600 mr-2"></i>Joule (J)
                    </label>
                    <input
                        type="number"
                        id="jouleInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter joules"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 J = 6.242×10¹⁸ eV
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
            <!-- Energy Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Energy Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Electron Volt</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Joule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 eV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻¹⁹ J</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 keV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻¹⁶ J</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 MeV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻¹³ J</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 GeV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻¹⁰ J</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 TeV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻⁷ J</td>
                            </tr>
                            <tr>
                                <td class="py-2">1 PeV</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.602×10⁻⁴ J</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Physics Energy Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-microscope text-violet-600 mr-3"></i>Physics Energy Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Atomic Scale Energies:</strong><br>
                        • Chemical bonds: 1-10 eV<br>
                        • Ionization energy: 5-25 eV<br>
                        • Visible light photon: 1.6-3.3 eV<br>
                        • X-ray photon: 100 eV - 100 keV
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Nuclear Physics:</strong><br>
                        • Alpha decay: 4-9 MeV<br>
                        • Beta decay: 0.1-10 MeV<br>
                        • Gamma rays: 0.1-10 MeV<br>
                        • Nuclear binding: 7-9 MeV/nucleon
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Particle Physics:</strong><br>
                        • Electron rest mass: 0.511 MeV<br>
                        • Proton rest mass: 938.3 MeV<br>
                        • LHC collisions: 13 TeV<br>
                        • Cosmic ray maximum: 10²⁰ eV
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>Energy Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electron Volt:</strong> Energy gained by electron</li>
                    <li><strong>Joule:</strong> SI unit of energy</li>
                    <li><strong>Conversion:</strong> 1 eV = 1.602176634×10⁻¹⁹ J</li>
                    <li><strong>Definition:</strong> 1 V potential difference</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>eV for atomic scale</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>J for macroscopic energy</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Common in quantum physics</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Particle accelerator units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Atomic Physics:</strong> Energy levels</li>
                    <li><strong>Nuclear Physics:</strong> Decay energies</li>
                    <li><strong>Spectroscopy:</strong> Photon energies</li>
                    <li><strong>Accelerators:</strong> Particle energies</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertElectronVoltToJoule(electronVolts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(electronVolts) && electronVolts !== '') {
        // 1 eV = 1.602176634 × 10^-19 J (exact CODATA value)
        const joules = electronVolts * 1.602176634e-19;
        document.getElementById('jouleInput').value = joules.toExponential(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${electronVolts} eV = ${joules.toExponential(3)} J</strong>
        `;
    } else {
        document.getElementById('jouleInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertJouleToElectronVolt(joules) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(joules) && joules !== '') {
        // 1 J = 6.241509074 × 10^18 eV
        const electronVolts = joules / 1.602176634e-19;
        document.getElementById('electronVoltInput').value = electronVolts.toExponential(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${joules} J = ${electronVolts.toExponential(3)} eV</strong>
        `;
    } else {
        document.getElementById('electronVoltInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('electronVoltInput').value = '';
    document.getElementById('jouleInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const evValue = document.getElementById('electronVoltInput').value;
    const jouleValue = document.getElementById('jouleInput').value;
    
    document.getElementById('electronVoltInput').value = jouleValue;
    document.getElementById('jouleInput').value = evValue;
    
    if (jouleValue) {
        convertElectronVoltToJoule(parseFloat(jouleValue));
    } else if (evValue) {
        convertJouleToElectronVolt(parseFloat(evValue));
    }
}

// Add event listeners
document.getElementById('electronVoltInput').addEventListener('input', function() {
    convertElectronVoltToJoule(parseFloat(this.value));
});

document.getElementById('jouleInput').addEventListener('input', function() {
    convertJouleToElectronVolt(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
