<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nano to Micro Converter 2026 - n to μ Prefix Calculator | Thiyagi</title>
<meta name="description" content="Free online Nano to Micro converter 2026. Convert n to μ and μ to n instantly with accurate SI prefix conversion.">
<meta name="keywords" content="nano to micro converter 2026, n to μ, SI prefix conversion, metric units calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nano to Micro Converter 2026 - n to μ Prefix Calculator">
<meta property="og:description" content="Free online Nano to Micro converter 2026. Convert n to μ and μ to n instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nano-to-micro.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nano to Micro Converter 2026 - n to μ Prefix Calculator">
<meta property="twitter:description" content="Free online Nano to Micro converter 2026. Convert n to μ and μ to n instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-green-600 mr-3"></i>
                Nano to Micro Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between nano (n) and micro (μ) SI prefixes for scientific measurements, electronics, nanotechnology, and precision calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nano Input -->
                <div class="space-y-4">
                    <label for="nanoInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-green-600 mr-2"></i>Nano (n)
                    </label>
                    <input
                        type="number"
                        id="nanoInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter nano units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        10⁻⁹ (billionth)
                    </div>
                </div>

                <!-- Micro Input -->
                <div class="space-y-4">
                    <label for="microInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search text-emerald-600 mr-2"></i>Micro (μ)
                    </label>
                    <input
                        type="number"
                        id="microInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter micro units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        10⁻⁶ (millionth)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Prefix Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>SI Prefix Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Nano</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Micro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">500 μ</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 n</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 μ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-green-600 mr-3"></i>Scientific Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Nanotechnology:</strong><br>
                        • DNA width: 2.5 nm<br>
                        • Carbon nanotube: 1-2 nm diameter<br>
                        • Quantum dots: 2-10 nm<br>
                        • Molecular scale: 0.1-100 nm
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Electronics:</strong><br>
                        • Transistor gate: 5-14 nm<br>
                        • Microprocessor features: 7-22 nm<br>
                        • Wire bonding: 25-100 μm<br>
                        • SMD components: 100-1000 μm
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Biology & Medicine:</strong><br>
                        • Virus particles: 20-400 nm<br>
                        • Bacteria: 1-10 μm<br>
                        • Cell organelles: 0.1-50 μm<br>
                        • Human hair: 50-100 μm diameter
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-green-600 mr-2"></i>SI Prefixes
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>n (nano):</strong> 10⁻⁹ (billionth)</li>
                    <li><strong>μ (micro):</strong> 10⁻⁶ (millionth)</li>
                    <li><strong>Conversion:</strong> 1 μ = 1,000 n</li>
                    <li><strong>Standard:</strong> International System</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>n for atomic scale</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>μ for cellular scale</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Consistent unit usage</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Scientific notation helpful</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-cogs text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Research:</strong> Precision measurements</li>
                    <li><strong>Engineering:</strong> Microelectronics</li>
                    <li><strong>Biology:</strong> Cellular studies</li>
                    <li><strong>Materials:</strong> Nanotechnology</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNanoToMicro(nano) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nano) && nano !== '') {
        // 1 micro = 1,000 nano, so 1 nano = 0.001 micro
        const micro = nano / 1000;
        document.getElementById('microInput').value = micro.toFixed(6);
        
        const formattedNano = nano.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${formattedNano} n = ${micro.toFixed(3)} μ</strong>
        `;
    } else {
        document.getElementById('microInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicroToNano(micro) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micro) && micro !== '') {
        // 1 micro = 1,000 nano
        const nano = micro * 1000;
        document.getElementById('nanoInput').value = nano.toFixed(6);
        
        const formattedNano = nano.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${micro} μ = ${formattedNano} n</strong>
        `;
    } else {
        document.getElementById('nanoInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('nanoInput').value = '';
    document.getElementById('microInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const nanoValue = document.getElementById('nanoInput').value;
    const microValue = document.getElementById('microInput').value;
    
    document.getElementById('nanoInput').value = microValue;
    document.getElementById('microInput').value = nanoValue;
    
    if (microValue) {
        convertNanoToMicro(parseFloat(microValue));
    } else if (nanoValue) {
        convertMicroToNano(parseFloat(nanoValue));
    }
}

// Add event listeners
document.getElementById('nanoInput').addEventListener('input', function() {
    convertNanoToMicro(parseFloat(this.value));
});

document.getElementById('microInput').addEventListener('input', function() {
    convertMicroToNano(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
