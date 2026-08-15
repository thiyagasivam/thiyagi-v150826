<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Second to Nanosecond Converter 2026 - s to ns Calculator | Thiyagi</title>
<meta name="description" content="Free online Second to Nanosecond converter 2026. Convert s to ns and ns to s instantly with accurate time conversion.">
<meta name="keywords" content="second to nanosecond converter 2026, s to ns, time conversion, precision timing, scientific calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Second to Nanosecond Converter 2026 - s to ns Calculator">
<meta property="og:description" content="Free online Second to Nanosecond converter 2026. Convert s to ns and ns to s instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/second-to-nanosecond.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Second to Nanosecond Converter 2026 - s to ns Calculator">
<meta property="twitter:description" content="Free online Second to Nanosecond converter 2026. Convert s to ns and ns to s instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-violet-600 mr-3"></i>
                Second to Nanosecond Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between seconds (s) and nanoseconds (ns) for precision timing, scientific measurements, and high-speed computing applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Second Input -->
                <div class="space-y-4">
                    <label for="secondInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-violet-600 mr-2"></i>Seconds (s)
                    </label>
                    <input
                        type="number"
                        id="secondInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter seconds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        SI base unit of time
                    </div>
                </div>

                <!-- Nanosecond Input -->
                <div class="space-y-4">
                    <label for="nanosecondInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microchip text-purple-600 mr-2"></i>Nanoseconds (ns)
                    </label>
                    <input
                        type="number"
                        id="nanosecondInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter nanoseconds"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Ultra-precision timing unit
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
            <!-- Time Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Time Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Seconds</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nanoseconds</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.000000001 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 ns</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.000001 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 ns</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.001 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 ns</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 ns</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000,000 ns</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 s</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000,000 ns</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Precision Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-laptop-code text-violet-600 mr-3"></i>Precision Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Computing Systems:</strong><br>
                        • CPU clock cycle: 0.3-5 ns<br>
                        • Memory access: 1-100 ns<br>
                        • Cache access: 0.5-10 ns<br>
                        • Network latency: 1,000-1,000,000 ns
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Scientific Instruments:</strong><br>
                        • Laser pulse duration: 1-1,000 ns<br>
                        • Particle detection: 1-100 ns<br>
                        • High-speed photography: 1-10,000 ns<br>
                        • Atomic transitions: 0.1-1,000 ns
                    </div>
                    <div class="bg-fuchsia-50 p-3 rounded">
                        <strong>Communication Systems:</strong><br>
                        • GPS timing: 1-100 ns precision<br>
                        • Fiber optic signals: 1-10 ns<br>
                        • Radio frequency: 0.1-1,000 ns<br>
                        • Synchronization: 1-1,000 ns
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>s:</strong> SI base unit of time</li>
                    <li><strong>ns:</strong> 10⁻⁹ seconds</li>
                    <li><strong>Conversion:</strong> 1 s = 1,000,000,000 ns</li>
                    <li><strong>Prefix:</strong> Nano = billionth</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>ns for ultra-fast events</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>s for normal timing</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Check precision requirements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Consider measurement limits</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Computing:</strong> Performance analysis</li>
                    <li><strong>Physics:</strong> Fast phenomena</li>
                    <li><strong>Electronics:</strong> Signal timing</li>
                    <li><strong>Research:</strong> Precision measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertSecondToNanosecond(second) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(second) && second !== '') {
        // 1 s = 1,000,000,000 ns
        const nanosecond = second * 1000000000;
        document.getElementById('nanosecondInput').value = nanosecond;
        
        // Use scientific notation for very large numbers
        const displayNs = nanosecond >= 1e6 ? nanosecond.toExponential(3) : nanosecond.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${second} s = ${displayNs} ns</strong>
        `;
    } else {
        document.getElementById('nanosecondInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNanosecondToSecond(nanosecond) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanosecond) && nanosecond !== '') {
        // 1 ns = 0.000000001 s
        const second = nanosecond / 1000000000;
        document.getElementById('secondInput').value = second.toFixed(12);
        
        // Use scientific notation for very small numbers
        const displayS = second < 1e-6 ? second.toExponential(3) : second.toFixed(9);
        const displayNs = nanosecond >= 1e6 ? nanosecond.toExponential(3) : nanosecond.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${displayNs} ns = ${displayS} s</strong>
        `;
    } else {
        document.getElementById('secondInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('secondInput').value = '';
    document.getElementById('nanosecondInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const secondValue = document.getElementById('secondInput').value;
    const nanosecondValue = document.getElementById('nanosecondInput').value;
    
    document.getElementById('secondInput').value = nanosecondValue;
    document.getElementById('nanosecondInput').value = secondValue;
    
    if (nanosecondValue) {
        convertSecondToNanosecond(parseFloat(nanosecondValue));
    } else if (secondValue) {
        convertNanosecondToSecond(parseFloat(secondValue));
    }
}

// Add event listeners
document.getElementById('secondInput').addEventListener('input', function() {
    convertSecondToNanosecond(parseFloat(this.value));
});

document.getElementById('nanosecondInput').addEventListener('input', function() {
    convertNanosecondToSecond(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
