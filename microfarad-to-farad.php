<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Microfarad to Farad Converter 2026 - μF to F Calculator | Thiyagi</title>
<meta name="description" content="Free online Microfarad to Farad converter 2026. Convert μF to F and F to μF instantly with accurate capacitance conversion.">
<meta name="keywords" content="microfarad to farad converter 2026, μF to F, capacitance conversion, electrical units, electronics calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Microfarad to Farad Converter 2026 - μF to F Calculator">
<meta property="og:description" content="Free online Microfarad to Farad converter 2026. Convert μF to F and F to μF instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/microfarad-to-farad.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Microfarad to Farad Converter 2026 - μF to F Calculator">
<meta property="twitter:description" content="Free online Microfarad to Farad converter 2026. Convert μF to F and F to μF instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microchip text-green-600 mr-3"></i>
                Microfarad to Farad Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between microfarads (μF) and farads (F) for capacitance measurements, electronics design, and electrical engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Microfarad Input -->
                <div class="space-y-4">
                    <label for="microfaradInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-battery-half text-green-600 mr-2"></i>Microfarads (μF)
                    </label>
                    <input
                        type="number"
                        id="microfaradInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter microfarads"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Common in electronic circuits
                    </div>
                </div>

                <!-- Farad Input -->
                <div class="space-y-4">
                    <label for="faradInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-plug text-emerald-600 mr-2"></i>Farads (F)
                    </label>
                    <input
                        type="number"
                        id="faradInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-xl"
                        placeholder="Enter farads"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        SI unit of capacitance
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
            <!-- Capacitance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Capacitance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Microfarads</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Farads</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.000001 F</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00001 F</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0001 F</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 F</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 F</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 μF</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 F</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Electronics Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-microchip text-green-600 mr-3"></i>Electronics Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Common Capacitors:</strong><br>
                        • Ceramic caps: 1-1,000 pF (0.001-1 μF)<br>
                        • Electrolytic: 1-10,000 μF<br>
                        • Film capacitors: 0.1-100 μF<br>
                        • Tantalum: 0.1-1,000 μF
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Power Applications:</strong><br>
                        • Motor start: 1-100 μF<br>
                        • Power supply filter: 100-10,000 μF<br>
                        • DC link: 1,000-100,000 μF<br>
                        • Energy storage: 0.1-10 F
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Supercapacitors:</strong><br>
                        • Small modules: 0.1-10 F<br>
                        • Automotive: 100-3,000 F<br>
                        • Grid storage: 1,000-10,000 F<br>
                        • Backup power: 10-1,000 F
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-green-600 mr-2"></i>Capacitance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>μF:</strong> 10⁻⁶ farads</li>
                    <li><strong>Farad:</strong> SI unit of capacitance</li>
                    <li><strong>Conversion:</strong> 1 F = 1,000,000 μF</li>
                    <li><strong>Named after:</strong> Michael Faraday</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>μF for most circuits</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>F for supercapacitors</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Check voltage rating</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Consider temperature drift</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Circuit design</li>
                    <li><strong>Power:</strong> Energy storage</li>
                    <li><strong>Automotive:</strong> Start/run systems</li>
                    <li><strong>Industrial:</strong> Motor control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMicrofaradToFarad(microfarad) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(microfarad) && microfarad !== '') {
        // 1,000,000 microfarads = 1 farad
        const farad = microfarad / 1000000;
        document.getElementById('faradInput').value = farad.toFixed(9);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${microfarad.toLocaleString()} μF = ${farad.toFixed(6)} F</strong>
        `;
    } else {
        document.getElementById('faradInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFaradToMicrofarad(farad) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(farad) && farad !== '') {
        // 1 farad = 1,000,000 microfarads
        const microfarad = farad * 1000000;
        document.getElementById('microfaradInput').value = microfarad;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-green-600 mr-2"></i>
            <strong>${farad} F = ${microfarad.toLocaleString()} μF</strong>
        `;
    } else {
        document.getElementById('microfaradInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('microfaradInput').value = '';
    document.getElementById('faradInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const microfaradValue = document.getElementById('microfaradInput').value;
    const faradValue = document.getElementById('faradInput').value;
    
    document.getElementById('microfaradInput').value = faradValue;
    document.getElementById('faradInput').value = microfaradValue;
    
    if (faradValue) {
        convertMicrofaradToFarad(parseFloat(faradValue));
    } else if (microfaradValue) {
        convertFaradToMicrofarad(parseFloat(microfaradValue));
    }
}

// Add event listeners
document.getElementById('microfaradInput').addEventListener('input', function() {
    convertMicrofaradToFarad(parseFloat(this.value));
});

document.getElementById('faradInput').addEventListener('input', function() {
    convertFaradToMicrofarad(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
