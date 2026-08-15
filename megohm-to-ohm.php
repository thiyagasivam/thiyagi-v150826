<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megohm to Ohm Converter 2026 - MΩ to Ω Electrical Resistance Calculator | Thiyagi</title>
<meta name="description" content="Free online Megohm to Ohm converter 2026. Convert MΩ to Ω and Ω to MΩ instantly with accurate electrical resistance conversion.">
<meta name="keywords" content="megohm to ohm converter 2026, MΩ to Ω, electrical resistance, electronics calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megohm to Ohm Converter 2026 - MΩ to Ω Electrical Resistance Calculator">
<meta property="og:description" content="Free online Megohm to Ohm converter 2026. Convert MΩ to Ω and Ω to MΩ instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megohm-to-ohm.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megohm to Ohm Converter 2026 - MΩ to Ω Electrical Resistance Calculator">
<meta property="twitter:description" content="Free online Megohm to Ohm converter 2026. Convert MΩ to Ω and Ω to MΩ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Megohm to Ohm Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megohms (MΩ) and ohms (Ω) for electrical resistance measurements, electronics design, circuit analysis, and electrical engineering
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megohm Input -->
                <div class="space-y-4">
                    <label for="megohmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microchip text-yellow-600 mr-2"></i>Megohms (MΩ)
                    </label>
                    <input
                        type="number"
                        id="megohmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter megohms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Million ohms (10⁶ Ω)
                    </div>
                </div>

                <!-- Ohm Input -->
                <div class="space-y-4">
                    <label for="ohmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-plug text-amber-600 mr-2"></i>Ohms (Ω)
                    </label>
                    <input
                        type="number"
                        id="ohmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter ohms"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Base resistance unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Resistance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Resistance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Megohms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Ohms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 Ω</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.2 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,200,000 Ω</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">4.7 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4,700,000 Ω</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 Ω</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">22 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">22,000,000 Ω</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 MΩ</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 Ω</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Electronics Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-circuit-board text-yellow-600 mr-3"></i>Electronics Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>High-Value Resistors:</strong><br>
                        • Pull-up resistors: 1-10 MΩ<br>
                        • Input impedance: 1-100 MΩ<br>
                        • Bias networks: 2.2-22 MΩ<br>
                        • Timing circuits: 1-47 MΩ
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Measurement Equipment:</strong><br>
                        • Digital multimeters: 10 MΩ input<br>
                        • Oscilloscopes: 1-10 MΩ input<br>
                        • Insulation testers: 1-1000 MΩ<br>
                        • High-voltage probes: 10-100 MΩ
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Specialized Circuits:</strong><br>
                        • Op-amp feedback: 1-10 MΩ<br>
                        • Photodiode amplifiers: 1-100 MΩ<br>
                        • Electrometer circuits: 10-1000 MΩ<br>
                        • Static discharge paths: 1-10 MΩ
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-yellow-600 mr-2"></i>Resistance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>MΩ:</strong> 10⁶ ohms (megohm)</li>
                    <li><strong>Ω:</strong> Base resistance unit</li>
                    <li><strong>Conversion:</strong> 1 MΩ = 1,000,000 Ω</li>
                    <li><strong>Symbol:</strong> Ω (Greek omega)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>MΩ for high resistance</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Ω for precise calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Consider tolerance values</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Check component ratings</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-tools text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electronics:</strong> Circuit design</li>
                    <li><strong>Testing:</strong> Insulation measurement</li>
                    <li><strong>Engineering:</strong> System analysis</li>
                    <li><strong>Education:</strong> Electrical studies</li>
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
    return value.toLocaleString();
}

function convertMegohmToOhm(megohm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megohm) && megohm !== '') {
        // 1 MΩ = 1,000,000 Ω
        const ohm = megohm * 1e6;
        document.getElementById('ohmInput').value = ohm;
        
        const formattedOhm = formatScientific(ohm);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${megohm} MΩ = ${formattedOhm} Ω</strong>
        `;
    } else {
        document.getElementById('ohmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertOhmToMegohm(ohm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ohm) && ohm !== '') {
        // 1 Ω = 1×10^-6 MΩ
        const megohm = ohm / 1e6;
        document.getElementById('megohmInput').value = megohm.toFixed(9);
        
        const formattedOhm = formatScientific(ohm);
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${formattedOhm} Ω = ${megohm.toFixed(6)} MΩ</strong>
        `;
    } else {
        document.getElementById('megohmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megohmInput').value = '';
    document.getElementById('ohmInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const megohmValue = document.getElementById('megohmInput').value;
    const ohmValue = document.getElementById('ohmInput').value;
    
    document.getElementById('megohmInput').value = ohmValue;
    document.getElementById('ohmInput').value = megohmValue;
    
    if (ohmValue) {
        convertMegohmToOhm(parseFloat(ohmValue));
    } else if (megohmValue) {
        convertOhmToMegohm(parseFloat(megohmValue));
    }
}

// Add event listeners
document.getElementById('megohmInput').addEventListener('input', function() {
    convertMegohmToOhm(parseFloat(this.value));
});

document.getElementById('ohmInput').addEventListener('input', function() {
    convertOhmToMegohm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
