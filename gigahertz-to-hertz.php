<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gigahertz to Hertz Converter 2026 - GHz to Hz Calculator | Thiyagi</title>
<meta name="description" content="Free online Gigahertz to Hertz converter 2026. Convert GHz to Hz and Hz to GHz instantly with accurate frequency conversion.">
<meta name="keywords" content="gigahertz to hertz converter 2026, GHz to Hz, frequency conversion, electronics calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gigahertz to Hertz Converter 2026 - GHz to Hz Calculator">
<meta property="og:description" content="Free online Gigahertz to Hertz converter 2026. Convert GHz to Hz and Hz to GHz instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gigahertz-to-hertz.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gigahertz to Hertz Converter 2026 - GHz to Hz Calculator">
<meta property="twitter:description" content="Free online Gigahertz to Hertz converter 2026. Convert GHz to Hz and Hz to GHz instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wave-square text-purple-600 mr-3"></i>
                Gigahertz to Hertz Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between gigahertz (GHz) and hertz (Hz) for electronics, computing, telecommunications, and frequency measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gigahertz Input -->
                <div class="space-y-4">
                    <label for="gigahertzInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microchip text-purple-600 mr-2"></i>Gigahertz (GHz)
                    </label>
                    <input
                        type="number"
                        id="gigahertzInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter gigahertz"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Billion cycles per second
                    </div>
                </div>

                <!-- Hertz Input -->
                <div class="space-y-4">
                    <label for="hertzInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-sine-wave text-indigo-600 mr-2"></i>Hertz (Hz)
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
                        Base frequency unit
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
                                <th class="text-left py-2">Gigahertz</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Hertz</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10⁹ Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.4 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.4×10⁹ Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3.5 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.5×10⁹ Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5×10⁹ Hz</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10¹⁰ Hz</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 GHz</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1×10¹¹ Hz</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Technology Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-laptop text-purple-600 mr-3"></i>Technology Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Computer Processors:</strong><br>
                        • Intel Core i7: 2.6-5.0 GHz<br>
                        • AMD Ryzen: 3.4-4.8 GHz<br>
                        • Mobile processors: 1.8-3.2 GHz<br>
                        • Server CPUs: 2.0-4.0 GHz
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Wireless Communication:</strong><br>
                        • WiFi 2.4 GHz: 2.4-2.485 GHz<br>
                        • WiFi 5 GHz: 5.15-5.85 GHz<br>
                        • Bluetooth: 2.4 GHz band<br>
                        • 5G cellular: 24-100 GHz
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Scientific Instruments:</strong><br>
                        • Radar systems: 1-100 GHz<br>
                        • Microwave ovens: 2.45 GHz<br>
                        • Satellite comm: 4-40 GHz<br>
                        • Radio astronomy: 1-300 GHz
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-purple-600 mr-2"></i>Frequency Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>GHz:</strong> 10⁹ Hz (billion hertz)</li>
                    <li><strong>Hz:</strong> Base frequency unit</li>
                    <li><strong>Conversion:</strong> 1 GHz = 1×10⁹ Hz</li>
                    <li><strong>Symbol:</strong> Hz (after Heinrich Hertz)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>GHz for high frequencies</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Hz for base calculations</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Scientific notation helpful</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Check significant figures</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-cogs text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Computing:</strong> CPU clock speeds</li>
                    <li><strong>Wireless:</strong> Communication bands</li>
                    <li><strong>Electronics:</strong> Signal processing</li>
                    <li><strong>Science:</strong> Research instruments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function formatScientific(value) {
    if (value >= 1e6) {
        return value.toExponential(3);
    }
    return value.toString();
}

function convertGigahertzToHertz(gigahertz) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gigahertz) && gigahertz !== '') {
        // 1 GHz = 1×10^9 Hz
        const hertz = gigahertz * 1e9;
        document.getElementById('hertzInput').value = hertz;
        
        const formattedHertz = formatScientific(hertz);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${gigahertz} GHz = ${formattedHertz} Hz</strong>
        `;
    } else {
        document.getElementById('hertzInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertHertzToGigahertz(hertz) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(hertz) && hertz !== '') {
        // 1 Hz = 1×10^-9 GHz
        const gigahertz = hertz / 1e9;
        document.getElementById('gigahertzInput').value = gigahertz.toFixed(9);
        
        const formattedHertz = formatScientific(hertz);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${formattedHertz} Hz = ${gigahertz.toFixed(6)} GHz</strong>
        `;
    } else {
        document.getElementById('gigahertzInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gigahertzInput').value = '';
    document.getElementById('hertzInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const gigahertzValue = document.getElementById('gigahertzInput').value;
    const hertzValue = document.getElementById('hertzInput').value;
    
    document.getElementById('gigahertzInput').value = hertzValue;
    document.getElementById('hertzInput').value = gigahertzValue;
    
    if (hertzValue) {
        convertGigahertzToHertz(parseFloat(hertzValue));
    } else if (gigahertzValue) {
        convertHertzToGigahertz(parseFloat(gigahertzValue));
    }
}

// Add event listeners
document.getElementById('gigahertzInput').addEventListener('input', function() {
    convertGigahertzToHertz(parseFloat(this.value));
});

document.getElementById('hertzInput').addEventListener('input', function() {
    convertHertzToGigahertz(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
