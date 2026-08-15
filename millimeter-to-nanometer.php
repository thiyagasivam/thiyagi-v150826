<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millimeter to Nanometer Converter 2026 - mm to nm Calculator | Thiyagi</title>
<meta name="description" content="Free online Millimeter to Nanometer converter 2026. Convert mm to nm and nm to mm instantly with accurate length conversion for nanotechnology and science.">
<meta name="keywords" content="millimeter to nanometer converter 2026, mm to nm, length converter, nanotechnology, scientific measurements, precision measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millimeter to Nanometer Converter 2026 - mm to nm Calculator">
<meta property="og:description" content="Free online Millimeter to Nanometer converter 2026. Convert mm to nm and nm to mm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millimeter-to-nanometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millimeter to Nanometer Converter 2026 - mm to nm Calculator">
<meta name="twitter:description" content="Free online Millimeter to Nanometer converter 2026. Convert mm to nm and nm to mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-purple-600 mr-3"></i>
                Millimeter to Nanometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between millimeters and nanometers for nanotechnology research, scientific measurements, and precision engineering
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millimeter Input -->
                <div class="space-y-4">
                    <label for="millimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-purple-600 mr-2"></i>Millimeter (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter millimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mm = 1,000,000 nm
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
                        1 nm = 0.000001 mm
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
                                <th class="text-left py-2">Millimeter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanometer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 nm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 nm</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 nm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scale Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-search text-purple-600 mr-3"></i>Scale Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Nanometer Scale (1-1000 nm):</strong><br>
                        • DNA width: ~2.5 nm<br>
                        • Protein molecules: 1-10 nm<br>
                        • Gold nanoparticles: 10-100 nm<br>
                        • Virus particles: 20-400 nm
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Micrometer Scale (1000+ nm):</strong><br>
                        • Bacteria: 1,000-5,000 nm<br>
                        • Red blood cell: 7,000 nm<br>
                        • Human hair: 80,000 nm<br>
                        • Pollen grain: 10,000-100,000 nm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Millimeter Scale (1M+ nm):</strong><br>
                        • Ant: 1-5 mm (1-5M nm)<br>
                        • Pencil lead: 0.5-2 mm<br>
                        • Rice grain: 5-6 mm<br>
                        • Small screw: 1-10 mm
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
                    <li><strong>Millimeter:</strong> 10⁻³ meter</li>
                    <li><strong>Nanometer:</strong> 10⁻⁹ meter</li>
                    <li><strong>Conversion:</strong> 1 mm = 10⁶ nm</li>
                    <li><strong>Difference:</strong> 6 orders of magnitude</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use nm for atomic scale</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use mm for visible objects</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Consider measurement precision</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use scientific notation</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanotechnology:</strong> Material design</li>
                    <li><strong>Biology:</strong> Cell measurements</li>
                    <li><strong>Electronics:</strong> Chip fabrication</li>
                    <li><strong>Medicine:</strong> Drug delivery</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMmToNm(millimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(millimeters) && millimeters !== '') {
        const nanometers = millimeters * 1000000;
        document.getElementById('nanometerInput').value = nanometers.toFixed(0);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${millimeters} mm = ${nanometers.toLocaleString()} nm</strong>
        `;
    } else {
        document.getElementById('nanometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNmToMm(nanometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanometers) && nanometers !== '') {
        const millimeters = nanometers / 1000000;
        document.getElementById('millimeterInput').value = millimeters.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${nanometers.toLocaleString()} nm = ${millimeters.toFixed(8)} mm</strong>
        `;
    } else {
        document.getElementById('millimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('millimeterInput').value = '';
    document.getElementById('nanometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mmValue = document.getElementById('millimeterInput').value;
    const nmValue = document.getElementById('nanometerInput').value;
    
    document.getElementById('millimeterInput').value = nmValue;
    document.getElementById('nanometerInput').value = mmValue;
    
    if (nmValue) {
        convertMmToNm(parseFloat(nmValue));
    } else if (mmValue) {
        convertNmToMm(parseFloat(mmValue));
    }
}

// Add event listeners
document.getElementById('millimeterInput').addEventListener('input', function() {
    convertMmToNm(parseFloat(this.value));
});

document.getElementById('nanometerInput').addEventListener('input', function() {
    convertNmToMm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
