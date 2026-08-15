<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millimeter to Micron Converter 2026 - mm to μm Calculator | Thiyagi</title>
<meta name="description" content="Free online Millimeter to Micron converter 2026. Convert mm to μm and μm to mm instantly with accurate length conversion for engineering measurements.">
<meta name="keywords" content="millimeter to micron converter 2026, mm to μm, length converter, engineering measurements, precision measurements, manufacturing tolerances">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millimeter to Micron Converter 2026 - mm to μm Calculator">
<meta property="og:description" content="Free online Millimeter to Micron converter 2026. Convert mm to μm and μm to mm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millimeter-to-micron.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millimeter to Micron Converter 2026 - mm to μm Calculator">
<meta name="twitter:description" content="Free online Millimeter to Micron converter 2026. Convert mm to μm and μm to mm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-combined text-slate-600 mr-3"></i>
                Millimeter to Micron Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between millimeters and microns for precision engineering, manufacturing tolerances, and scientific measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millimeter Input -->
                <div class="space-y-4">
                    <label for="millimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-slate-600 mr-2"></i>Millimeter (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter millimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mm = 1,000 μm
                    </div>
                </div>

                <!-- Micron Input -->
                <div class="space-y-4">
                    <label for="micronInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search-plus text-gray-600 mr-2"></i>Micron (μm)
                    </label>
                    <input
                        type="number"
                        id="micronInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter microns"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μm = 0.001 mm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-gray-50 rounded-lg">
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
            <!-- Length Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Length Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Millimeter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Micron</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,000 μm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 mm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 μm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-slate-600 mr-3"></i>Engineering Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Manufacturing Tolerances:</strong><br>
                        • Precision machining: ±1-10 μm<br>
                        • Standard machining: ±10-100 μm<br>
                        • Sheet metal: ±0.1-0.5 mm<br>
                        • 3D printing: ±50-200 μm
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Material Thicknesses:</strong><br>
                        • Human hair: 50-100 μm<br>
                        • Paper thickness: 70-180 μm<br>
                        • Plastic film: 10-100 μm<br>
                        • Metal foil: 5-50 μm
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Surface Roughness:</strong><br>
                        • Mirror finish: 0.1-0.8 μm Ra<br>
                        • Ground surface: 0.8-6.3 μm Ra<br>
                        • Machined surface: 1.6-12.5 μm Ra<br>
                        • Cast surface: 25-100 μm Ra
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Millimeter:</strong> 10⁻³ meter</li>
                    <li><strong>Micron:</strong> 10⁻⁶ meter (micrometer)</li>
                    <li><strong>Conversion:</strong> 1 mm = 1,000 μm</li>
                    <li><strong>Symbol:</strong> μm (Greek letter mu)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Critical for precision work</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Standard in manufacturing</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Used for tolerances</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Essential for quality control</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Manufacturing:</strong> Precision machining</li>
                    <li><strong>Electronics:</strong> Component sizing</li>
                    <li><strong>Materials:</strong> Thickness measurement</li>
                    <li><strong>Quality:</strong> Surface analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMillimeterToMicron(millimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(millimeters) && millimeters !== '') {
        const microns = millimeters * 1000;
        document.getElementById('micronInput').value = microns.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${millimeters} mm = ${microns.toFixed(3)} μm</strong>
        `;
    } else {
        document.getElementById('micronInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicronToMillimeter(microns) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(microns) && microns !== '') {
        const millimeters = microns / 1000;
        document.getElementById('millimeterInput').value = millimeters.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${microns} μm = ${millimeters.toFixed(6)} mm</strong>
        `;
    } else {
        document.getElementById('millimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('millimeterInput').value = '';
    document.getElementById('micronInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mmValue = document.getElementById('millimeterInput').value;
    const micronValue = document.getElementById('micronInput').value;
    
    document.getElementById('millimeterInput').value = micronValue;
    document.getElementById('micronInput').value = mmValue;
    
    if (micronValue) {
        convertMillimeterToMicron(parseFloat(micronValue));
    } else if (mmValue) {
        convertMicronToMillimeter(parseFloat(mmValue));
    }
}

// Add event listeners
document.getElementById('millimeterInput').addEventListener('input', function() {
    convertMillimeterToMicron(parseFloat(this.value));
});

document.getElementById('micronInput').addEventListener('input', function() {
    convertMicronToMillimeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
