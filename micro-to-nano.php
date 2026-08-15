<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micro to Nano Converter 2026 - μ to n Prefix Calculator | Thiyagi</title>
<meta name="description" content="Free online Micro to Nano converter 2026. Convert micro (μ) to nano (n) prefix and nano to micro instantly with accurate scientific unit conversion.">
<meta name="keywords" content="micro to nano converter 2026, μ to n, scientific prefix, unit conversion, metric prefix calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micro to Nano Converter 2026 - μ to n Prefix Calculator">
<meta property="og:description" content="Free online Micro to Nano converter 2026. Convert micro (μ) to nano (n) prefix and nano to micro instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micro-to-nano.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micro to Nano Converter 2026 - μ to n Prefix Calculator">
<meta property="twitter:description" content="Free online Micro to Nano converter 2026. Convert micro (μ) to nano (n) prefix and nano to micro instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-violet-600 mr-3"></i>
                Micro to Nano Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between micro (μ) and nano (n) metric prefixes for scientific measurements, electronics, and nanotechnology applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micro Input -->
                <div class="space-y-4">
                    <label for="microInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Micro (μ) - 10⁻⁶
                    </label>
                    <input
                        type="number"
                        id="microInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter micro units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μ = 1,000 n
                    </div>
                </div>

                <!-- Nano Input -->
                <div class="space-y-4">
                    <label for="nanoInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-calculator text-purple-600 mr-2"></i>Nano (n) - 10⁻⁹
                    </label>
                    <input
                        type="number"
                        id="nanoInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter nano units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1,000 n = 1 μ
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
            <!-- Prefix Scale -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Metric Prefix Scale
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Micro (μ)</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nano (n)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 n</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 n</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 n</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 n</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 n</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 μ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 n</td>
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
                        <strong>Electronics (micro):</strong><br>
                        • Microprocessor features: 5-10 μm<br>
                        • Circuit traces: 0.1-1 μm<br>
                        • Microfarad capacitors: μF<br>
                        • Micrometer measurements: μm
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Nanotechnology (nano):</strong><br>
                        • Carbon nanotube: 1-3 nm diameter<br>
                        • DNA width: 2.5 nm<br>
                        • Virus size: 20-300 nm<br>
                        • Quantum dots: 2-10 nm
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Common Conversions:</strong><br>
                        • 1 μm = 1,000 nm (length)<br>
                        • 1 μs = 1,000 ns (time)<br>
                        • 1 μA = 1,000 nA (current)<br>
                        • 1 μF = 1,000 nF (capacitance)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>Prefix Values
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Micro (μ):</strong> 10⁻⁶ (0.000001)</li>
                    <li><strong>Nano (n):</strong> 10⁻⁹ (0.000000001)</li>
                    <li><strong>Conversion:</strong> 1 μ = 1,000 n</li>
                    <li><strong>Factor:</strong> 1,000× difference</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>μ for microscale</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>n for nanoscale</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Scientific notation</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>SI prefix system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Circuit design</li>
                    <li><strong>Medicine:</strong> Drug delivery</li>
                    <li><strong>Materials:</strong> Nanocomposites</li>
                    <li><strong>Research:</strong> Scientific studies</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicroToNano(micro) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micro) && micro !== '') {
        // 1 micro = 1,000 nano
        const nano = micro * 1000;
        document.getElementById('nanoInput').value = nano;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${micro.toLocaleString()} μ = ${nano.toLocaleString()} n</strong>
        `;
    } else {
        document.getElementById('nanoInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNanoToMicro(nano) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nano) && nano !== '') {
        // 1,000 nano = 1 micro
        const micro = nano / 1000;
        document.getElementById('microInput').value = micro;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${nano.toLocaleString()} n = ${micro.toLocaleString(undefined, {maximumFractionDigits: 6})} μ</strong>
        `;
    } else {
        document.getElementById('microInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('microInput').value = '';
    document.getElementById('nanoInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const microValue = document.getElementById('microInput').value;
    const nanoValue = document.getElementById('nanoInput').value;
    
    document.getElementById('microInput').value = nanoValue;
    document.getElementById('nanoInput').value = microValue;
    
    if (nanoValue) {
        convertMicroToNano(parseFloat(nanoValue));
    } else if (microValue) {
        convertNanoToMicro(parseFloat(microValue));
    }
}

// Add event listeners
document.getElementById('microInput').addEventListener('input', function() {
    convertMicroToNano(parseFloat(this.value));
});

document.getElementById('nanoInput').addEventListener('input', function() {
    convertNanoToMicro(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
