<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micrometer to Nanometer Converter 2026 - μm to nm Calculator | Thiyagi</title>
<meta name="description" content="Free online Micrometer to Nanometer converter 2026. Convert μm to nm and nm to μm instantly with accurate length conversion for nanotechnology and microscopy.">
<meta name="keywords" content="micrometer to nanometer converter 2026, μm to nm, length converter, microscopic measurements, nanotechnology, micron to nanometer">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micrometer to Nanometer Converter 2026 - μm to nm Calculator">
<meta property="og:description" content="Free online Micrometer to Nanometer converter 2026. Convert μm to nm and nm to μm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micrometer-to-nanometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micrometer to Nanometer Converter 2026 - μm to nm Calculator">
<meta name="twitter:description" content="Free online Micrometer to Nanometer converter 2026. Convert μm to nm and nm to μm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-purple-600 mr-3"></i>
                Micrometer to Nanometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between micrometers and nanometers for nanotechnology, microscopy, and precision measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micrometer Input -->
                <div class="space-y-4">
                    <label for="micrometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search-plus text-purple-600 mr-2"></i>Micrometer (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter micrometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μm = 1,000 nm
                    </div>
                </div>

                <!-- Nanometer Input -->
                <div class="space-y-4">
                    <label for="nanometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-violet-600 mr-2"></i>Nanometer (nm)
                    </label>
                    <input
                        type="number"
                        id="nanometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter nanometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 nm = 0.001 μm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-violet-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Length Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Length Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Micrometer</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanometer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 nm</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 nm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Microscopic Scale Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-dna text-purple-600 mr-3"></i>Microscopic Scale Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Biological Structures:</strong><br>
                        • Virus: 20-400 nm (0.02-0.4 μm)<br>
                        • Bacteria: 1-5 μm (1,000-5,000 nm)<br>
                        • Cell organelles: 0.1-10 μm<br>
                        • Human hair: 17-180 μm (17,000-180,000 nm)
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Technology & Materials:</strong><br>
                        • DNA helix: 2.5 nm (0.0025 μm)<br>
                        • Semiconductor node: 3-7 nm<br>
                        • Carbon nanotube: 1-2 nm diameter<br>
                        • Microprocessor features: 5-14 nm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Particles & Wavelengths:</strong><br>
                        • Visible light: 380-700 nm<br>
                        • X-ray: 0.01-10 nm<br>
                        • Atmospheric particles: 0.1-10 μm<br>
                        • Pollen grains: 10-200 μm
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
                    <li><strong>Micrometer:</strong> 10⁻⁶ meter (micron)</li>
                    <li><strong>Nanometer:</strong> 10⁻⁹ meter</li>
                    <li><strong>Conversion:</strong> 1 μm = 1,000 nm</li>
                    <li><strong>Symbol:</strong> μm (mu-m), nm</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use electron microscopy for nm</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Consider measurement precision</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Account for thermal effects</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use appropriate instruments</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanotechnology:</strong> Material design</li>
                    <li><strong>Biology:</strong> Cell structure analysis</li>
                    <li><strong>Semiconductors:</strong> Feature sizing</li>
                    <li><strong>Optics:</strong> Wavelength calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrometerToNanometer(micrometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrometers) && micrometers !== '') {
        const nanometers = micrometers * 1000;
        document.getElementById('nanometerInput').value = nanometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${micrometers} μm = ${nanometers.toLocaleString(undefined, {maximumFractionDigits: 6})} nm</strong>
        `;
    } else {
        document.getElementById('nanometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNanometerToMicrometer(nanometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanometers) && nanometers !== '') {
        const micrometers = nanometers / 1000;
        document.getElementById('micrometerInput').value = micrometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${nanometers.toLocaleString()} nm = ${micrometers.toFixed(6)} μm</strong>
        `;
    } else {
        document.getElementById('micrometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('micrometerInput').value = '';
    document.getElementById('nanometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const micrometerValue = document.getElementById('micrometerInput').value;
    const nanometerValue = document.getElementById('nanometerInput').value;
    
    document.getElementById('micrometerInput').value = nanometerValue;
    document.getElementById('nanometerInput').value = micrometerValue;
    
    if (nanometerValue) {
        convertMicrometerToNanometer(parseFloat(nanometerValue));
    } else if (micrometerValue) {
        convertNanometerToMicrometer(parseFloat(micrometerValue));
    }
}

// Add event listeners
document.getElementById('micrometerInput').addEventListener('input', function() {
    convertMicrometerToNanometer(parseFloat(this.value));
});

document.getElementById('nanometerInput').addEventListener('input', function() {
    convertNanometerToMicrometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
