<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nanometer to Micrometer Converter 2026 - nm to μm Calculator | Thiyagi</title>
<meta name="description" content="Free online nanometer to micrometer converter 2026. Convert nm to μm and μm to nm instantly with accurate length conversion.">
<meta name="keywords" content="nanometer to micrometer converter 2026, nm to μm, microscopic length, nanotechnology units, scientific measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nanometer to Micrometer Converter 2026 - nm to μm Calculator">
<meta property="og:description" content="Free online nanometer to micrometer converter 2026. Convert nm to μm and μm to nm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nanometer-to-micrometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nanometer to Micrometer Converter 2026 - nm to μm Calculator">
<meta name="twitter:description" content="Free online nanometer to micrometer converter 2026. Convert nm to μm and μm to nm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-emerald-600 mr-3"></i>
                Nanometer to Micrometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between nanometers and micrometers for precise microscopic measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nanometer Input -->
                <div class="space-y-4">
                    <label for="nanometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-emerald-600 mr-2"></i>Nanometer (nm)
                    </label>
                    <input
                        type="number"
                        id="nanometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter nanometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 nm = 0.001 μm
                    </div>
                </div>

                <!-- Micrometer Input -->
                <div class="space-y-4">
                    <label for="micrometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-dna text-teal-600 mr-2"></i>Micrometer (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter micrometers"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 μm = 1,000 nm
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
            <!-- Biological and Technological Scale -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Object/Structure</th>
                                <th class="text-center py-2">Size (nm)</th>
                                <th class="text-right py-2">Size (μm)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">DNA helix width</td>
                                <td class="text-center">2.5</td>
                                <td class="text-right">0.0025</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Protein molecule</td>
                                <td class="text-center">5-50</td>
                                <td class="text-right">0.005-0.05</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Virus</td>
                                <td class="text-center">100</td>
                                <td class="text-right">0.1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Bacteria</td>
                                <td class="text-center">1,000</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Red blood cell</td>
                                <td class="text-center">7,000</td>
                                <td class="text-right">7</td>
                            </tr>
                            <tr>
                                <td class="py-2">Human hair</td>
                                <td class="text-center">75,000</td>
                                <td class="text-right">75</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Wavelength and Technology -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-lightbulb text-emerald-600 mr-3"></i>Wavelength & Technology
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Light Wavelengths:</strong><br>
                        • X-rays: 0.01-10 nm<br>
                        • UV light: 10-400 nm<br>
                        • Visible light: 400-700 nm<br>
                        • Infrared: 700 nm - 1 mm
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Semiconductor Technology:</strong><br>
                        • 7nm process: 7 nm (0.007 μm)<br>
                        • 14nm process: 14 nm (0.014 μm)<br>
                        • 32nm process: 32 nm (0.032 μm)<br>
                        • 90nm process: 90 nm (0.09 μm)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Nanotechnology:</strong><br>
                        • Nanoparticles: 1-100 nm<br>
                        • Carbon nanotube: 1-2 nm diameter<br>
                        • Graphene layer: 0.3 nm thick<br>
                        • Quantum dots: 2-10 nm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-emerald-600 mr-2"></i>Unit Definitions
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanometer:</strong> 10⁻⁹ meters</li>
                    <li><strong>Micrometer:</strong> 10⁻⁶ meters</li>
                    <li><strong>Relationship:</strong> 1 μm = 1,000 nm</li>
                    <li><strong>SI prefix:</strong> Metric system units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-cogs text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Nanotechnology research</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Semiconductor manufacturing</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Biology and medicine</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Materials science</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Optical engineering</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Scientific Usage
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanometer:</strong> Atomic and molecular scale</li>
                    <li><strong>Micrometer:</strong> Cellular and microscopic scale</li>
                    <li><strong>Research:</strong> Both units essential</li>
                    <li><strong>Industry:</strong> Manufacturing specifications</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNanometerToMicrometer(nanometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanometers) && nanometers !== '') {
        const micrometers = nanometers / 1000;
        document.getElementById('micrometerInput').value = micrometers.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${nanometers} nm = ${micrometers.toFixed(8)} μm</strong>
        `;
    } else {
        document.getElementById('micrometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicrometerToNanometer(micrometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrometers) && micrometers !== '') {
        const nanometers = micrometers * 1000;
        document.getElementById('nanometerInput').value = nanometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${micrometers} μm = ${nanometers.toFixed(6)} nm</strong>
        `;
    } else {
        document.getElementById('nanometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('nanometerInput').value = '';
    document.getElementById('micrometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const nanometerValue = document.getElementById('nanometerInput').value;
    const micrometerValue = document.getElementById('micrometerInput').value;
    
    document.getElementById('nanometerInput').value = micrometerValue;
    document.getElementById('micrometerInput').value = nanometerValue;
    
    if (micrometerValue) {
        convertNanometerToMicrometer(parseFloat(micrometerValue));
    } else if (nanometerValue) {
        convertMicrometerToNanometer(parseFloat(nanometerValue));
    }
}

// Add event listeners
document.getElementById('nanometerInput').addEventListener('input', function() {
    convertNanometerToMicrometer(parseFloat(this.value));
});

document.getElementById('micrometerInput').addEventListener('input', function() {
    convertMicrometerToNanometer(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
