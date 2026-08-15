<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cycle per Second to Hertz Converter 2026 - cps to Hz Calculator | Thiyagi</title>
<meta name="description" content="Free online Cycle per Second to Hertz converter 2026. Convert cps to Hz and Hz to cps instantly with accurate frequency unit conversion.">
<meta name="keywords" content="cycle per second to hertz converter 2026, cps to hz, frequency conversion, oscillation measurement, wave frequency">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cycle per Second to Hertz Converter 2026 - cps to Hz Calculator">
<meta property="og:description" content="Free online Cycle per Second to Hertz converter 2026. Convert cps to Hz and Hz to cps instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cycle-second-to-hertz.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cycle per Second to Hertz Converter 2026 - cps to Hz Calculator">
<meta property="twitter:description" content="Free online Cycle per Second to Hertz converter 2026. Convert cps to Hz and Hz to cps instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wave-square text-purple-600 mr-3"></i>
                Cycle per Second to Hertz Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cycles per second (cps) and hertz (Hz) for frequency measurements, oscillations, and wave analysis
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CPS Input -->
                <div class="space-y-4">
                    <label for="cpsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-sync-alt text-purple-600 mr-2"></i>Cycles per Second (cps)
                    </label>
                    <input
                        type="number"
                        id="cpsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter cycles per second"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cps = 1 Hz (exactly)
                    </div>
                </div>

                <!-- Hz Input -->
                <div class="space-y-4">
                    <label for="hertzInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-broadcast-tower text-indigo-600 mr-2"></i>Hertz (Hz)
                    </label>
                    <input
                        type="number"
                        id="hertzInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter hertz"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 Hz = 1 cps (exactly)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
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
            <!-- Frequency Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Frequency Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cycles per Second</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Hertz</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">60 Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kHz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000,000 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 MHz</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000,000 cps</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 GHz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Frequencies -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-music text-purple-600 mr-3"></i>Common Frequencies
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Audio Range:</strong><br>
                        • Human hearing: 20-20,000 Hz<br>
                        • Musical note A4: 440 Hz<br>
                        • Bass frequencies: 20-250 Hz<br>
                        • Treble frequencies: 4,000-20,000 Hz
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Electrical Power:</strong><br>
                        • US/Canada: 60 Hz<br>
                        • Europe/Asia: 50 Hz<br>
                        • DC current: 0 Hz<br>
                        • High frequency switching: 20-100 kHz
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Radio & Communications:</strong><br>
                        • AM radio: 535-1,605 kHz<br>
                        • FM radio: 88-108 MHz<br>
                        • WiFi 2.4 GHz: 2,400 MHz<br>
                        • Cell phone: 800-2,100 MHz
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Frequency Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>CPS:</strong> Cycles per second</li>
                    <li><strong>Hz:</strong> Hertz (SI unit)</li>
                    <li><strong>Conversion:</strong> 1 cps = 1 Hz</li>
                    <li><strong>Named after:</strong> Heinrich Hertz</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Both terms are equivalent</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Hz is standard SI unit</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>CPS is older terminology</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Same physical meaning</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Audio:</strong> Sound frequencies</li>
                    <li><strong>Electronics:</strong> Signal processing</li>
                    <li><strong>Physics:</strong> Wave mechanics</li>
                    <li><strong>Engineering:</strong> Vibration analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCpsToHertz(cps) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cps) && cps !== '') {
        // 1 cycles per second = 1 hertz (exactly)
        const hertz = cps;
        document.getElementById('hertzInput').value = hertz;
        
        let formattedCps = cps;
        let formattedHz = hertz;
        
        if (hertz >= 1000000000) {
            formattedHz = (hertz / 1000000000).toFixed(3) + ' GHz';
        } else if (hertz >= 1000000) {
            formattedHz = (hertz / 1000000).toFixed(3) + ' MHz';
        } else if (hertz >= 1000) {
            formattedHz = (hertz / 1000).toFixed(3) + ' kHz';
        } else {
            formattedHz = hertz.toLocaleString() + ' Hz';
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${formattedCps} cps = ${formattedHz}</strong>
        `;
    } else {
        document.getElementById('hertzInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertHertzToCps(hertz) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(hertz) && hertz !== '') {
        // 1 hertz = 1 cycles per second (exactly)
        const cps = hertz;
        document.getElementById('cpsInput').value = cps;
        
        let formattedHz = hertz;
        let formattedCps = cps;
        
        if (hertz >= 1000000000) {
            formattedHz = (hertz / 1000000000).toFixed(3) + ' GHz';
        } else if (hertz >= 1000000) {
            formattedHz = (hertz / 1000000).toFixed(3) + ' MHz';
        } else if (hertz >= 1000) {
            formattedHz = (hertz / 1000).toFixed(3) + ' kHz';
        } else {
            formattedHz = hertz.toLocaleString() + ' Hz';
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${formattedHz} = ${formattedCps.toLocaleString()} cps</strong>
        `;
    } else {
        document.getElementById('cpsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('cpsInput').value = '';
    document.getElementById('hertzInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cpsValue = document.getElementById('cpsInput').value;
    const hertzValue = document.getElementById('hertzInput').value;
    
    document.getElementById('cpsInput').value = hertzValue;
    document.getElementById('hertzInput').value = cpsValue;
    
    if (hertzValue) {
        convertCpsToHertz(parseFloat(hertzValue));
    } else if (cpsValue) {
        convertHertzToCps(parseFloat(cpsValue));
    }
}

// Add event listeners
document.getElementById('cpsInput').addEventListener('input', function() {
    convertCpsToHertz(parseFloat(this.value));
});

document.getElementById('hertzInput').addEventListener('input', function() {
    convertHertzToCps(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
