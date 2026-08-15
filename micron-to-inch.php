<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micron to Inch Converter 2026 - μm to inch Calculator | Thiyagi</title>
<meta name="description" content="Free online Micron to Inch converter 2026. Convert μm to inch and inch to μm instantly with accurate precision measurement conversion.">
<meta name="keywords" content="micron to inch converter 2026, μm to inch, precision measurement, micrometer conversion, engineering units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micron to Inch Converter 2026 - μm to inch Calculator">
<meta property="og:description" content="Free online Micron to Inch converter 2026. Convert μm to inch and inch to μm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micron-to-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micron to Inch Converter 2026 - μm to inch Calculator">
<meta property="twitter:description" content="Free online Micron to Inch converter 2026. Convert μm to inch and inch to μm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-green-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-cyan-600 mr-3"></i>
                Micron to Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between microns and inches for precision measurements, manufacturing tolerances, and scientific applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micron Input -->
                <div class="space-y-4">
                    <label for="micronInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search-plus text-cyan-600 mr-2"></i>Microns (μm)
                    </label>
                    <input
                        type="number"
                        id="micronInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter microns"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μm = 0.00003937 inch
                    </div>
                </div>

                <!-- Inch Input -->
                <div class="space-y-4">
                    <label for="inchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-horizontal text-teal-600 mr-2"></i>Inches (in)
                    </label>
                    <input
                        type="number"
                        id="inchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter inches"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 inch = 25,400 μm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-teal-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Precision Measurement Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Precision Measurement Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Microns</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Inches</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">25.4 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">254 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2,540 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12,700 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25,400 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 in</td>
                            </tr>
                            <tr>
                                <td class="py-2">50,800 μm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Manufacturing Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cog text-cyan-600 mr-3"></i>Manufacturing Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Biological Scale:</strong><br>
                        • Red blood cell: 6-8 μm<br>
                        • Bacteria: 1-5 μm<br>
                        • Human hair: 50-100 μm<br>
                        • Pollen grain: 10-50 μm
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Manufacturing Tolerances:</strong><br>
                        • Precision machining: ±1-5 μm<br>
                        • Surface finish: 0.1-10 μm Ra<br>
                        • Bearing tolerance: ±2-10 μm<br>
                        • Optical components: ±0.1-1 μm
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Material Properties:</strong><br>
                        • Paint thickness: 25-100 μm<br>
                        • Paper thickness: 50-200 μm<br>
                        • Plastic film: 10-50 μm<br>
                        • Metal foil: 5-25 μm
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Measurement Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Micron:</strong> μm (micrometer)</li>
                    <li><strong>Symbol:</strong> μm = 10⁻⁶ m</li>
                    <li><strong>Conversion:</strong> 1 in = 25,400 μm</li>
                    <li><strong>Precision:</strong> 0.00003937 in/μm</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>μm for micro measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Inches for US manufacturing</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Scientific notation helpful</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>High precision required</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Component dimensions</li>
                    <li><strong>Optics:</strong> Surface quality</li>
                    <li><strong>Biology:</strong> Cell measurements</li>
                    <li><strong>Manufacturing:</strong> Precision tolerances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicronToInch(micron) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micron) && micron !== '') {
        // 1 micron = 0.00003937007874 inches
        const inch = micron * 0.00003937007874;
        document.getElementById('inchInput').value = inch.toFixed(12);
        
        // Format micron with appropriate notation
        const formattedMicron = micron >= 1000 ? micron.toLocaleString() : micron;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${formattedMicron} μm = ${inch.toExponential(6)} in</strong>
        `;
    } else {
        document.getElementById('inchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertInchToMicron(inch) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(inch) && inch !== '') {
        // 1 inch = 25400 microns
        const micron = inch * 25400;
        document.getElementById('micronInput').value = micron.toFixed(6);
        
        // Format micron with appropriate notation
        const formattedMicron = micron >= 1000 ? micron.toLocaleString() : micron;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${inch} in = ${formattedMicron} μm</strong>
        `;
    } else {
        document.getElementById('micronInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('micronInput').value = '';
    document.getElementById('inchInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const micronValue = document.getElementById('micronInput').value;
    const inchValue = document.getElementById('inchInput').value;
    
    document.getElementById('micronInput').value = inchValue;
    document.getElementById('inchInput').value = micronValue;
    
    if (inchValue) {
        convertMicronToInch(parseFloat(inchValue));
    } else if (micronValue) {
        convertInchToMicron(parseFloat(micronValue));
    }
}

// Add event listeners
document.getElementById('micronInput').addEventListener('input', function() {
    convertMicronToInch(parseFloat(this.value));
});

document.getElementById('inchInput').addEventListener('input', function() {
    convertInchToMicron(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
