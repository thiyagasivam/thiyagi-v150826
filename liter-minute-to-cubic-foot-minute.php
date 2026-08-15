<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter Minute to Cubic Foot Minute Converter 2026 - L/min to CFM Calculator | Thiyagi</title>
<meta name="description" content="Free online Liter Minute to Cubic Foot Minute converter 2026. Convert L/min to CFM and CFM to L/min instantly with accurate flow rate conversion.">
<meta name="keywords" content="liter minute to cubic foot minute converter 2026, L/min to CFM, flow rate converter, HVAC, ventilation, air flow">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter Minute to Cubic Foot Minute Converter 2026 - L/min to CFM Calculator">
<meta property="og:description" content="Free online Liter Minute to Cubic Foot Minute converter 2026. Convert L/min to CFM and CFM to L/min instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-minute-to-cubic-foot-minute.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter Minute to Cubic Foot Minute Converter 2026 - L/min to CFM Calculator">
<meta property="twitter:description" content="Free online Liter Minute to Cubic Foot Minute converter 2026. Convert L/min to CFM and CFM to L/min instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-wind text-sky-600 mr-3"></i>
                Liter Minute to Cubic Foot Minute Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between L/min and CFM for HVAC systems, ventilation design, and air flow calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Minute Input -->
                <div class="space-y-4">
                    <label for="literMinuteInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-sky-600 mr-2"></i>Liters per Minute (L/min)
                    </label>
                    <input
                        type="number"
                        id="literMinuteInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter L/min"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L/min = 0.03531 CFM
                    </div>
                </div>

                <!-- CFM Input -->
                <div class="space-y-4">
                    <label for="cfmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-fan text-blue-600 mr-2"></i>Cubic Feet per Minute (CFM)
                    </label>
                    <input
                        type="number"
                        id="cfmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter CFM"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 CFM = 28.317 L/min
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-sky-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-sky-500 hover:bg-sky-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Flow Rate Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-sky-600 mr-3"></i>Flow Rate Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">L/min</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">CFM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">10 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.35 CFM</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.77 CFM</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.53 CFM</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">17.66 CFM</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">35.31 CFM</td>
                            </tr>
                            <tr>
                                <td class="py-2">2,832 L/min</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 CFM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HVAC Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-sky-600 mr-3"></i>HVAC Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Residential HVAC:</strong><br>
                        • Bathroom fan: 50-100 CFM (1,416-2,832 L/min)<br>
                        • Kitchen hood: 200-400 CFM (5,663-11,327 L/min)<br>
                        • Whole house fan: 1,500-3,000 CFM<br>
                        • Central AC unit: 400-1,200 CFM per ton
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Commercial Systems:</strong><br>
                        • Office ventilation: 15-20 CFM per person<br>
                        • Server room cooling: 500-2,000 CFM<br>
                        • Industrial exhaust: 1,000-10,000 CFM<br>
                        • Clean room systems: 10-100 air changes/hour
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Laboratory Equipment:</strong><br>
                        • Fume hood: 100-150 CFM per linear foot<br>
                        • Biosafety cabinet: 75-125 fpm face velocity<br>
                        • Dust collector: 500-5,000 CFM<br>
                        • Paint booth: 100-200 fpm air velocity
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-sky-600 mr-2"></i>Flow Rate Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>L/min:</strong> Metric flow rate</li>
                    <li><strong>CFM:</strong> Imperial flow rate</li>
                    <li><strong>Conversion:</strong> 1 CFM = 28.317 L/min</li>
                    <li><strong>Application:</strong> Air movement</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>CFM for US HVAC</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>L/min for metric systems</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Equipment specifications</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Ventilation design</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-sky-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> System design</li>
                    <li><strong>Ventilation:</strong> Air quality</li>
                    <li><strong>Industrial:</strong> Process ventilation</li>
                    <li><strong>Laboratory:</strong> Safety systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertLiterMinuteToCFM(literMinute) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(literMinute) && literMinute !== '') {
        // 1 L/min = 0.0353147 CFM (1 L = 0.0353147 ft³)
        const cfm = literMinute * 0.0353147;
        document.getElementById('cfmInput').value = cfm.toFixed(4);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${literMinute.toLocaleString()} L/min = ${cfm.toFixed(3)} CFM</strong>
        `;
    } else {
        document.getElementById('cfmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCFMToLiterMinute(cfm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cfm) && cfm !== '') {
        // 1 CFM = 28.3168 L/min (1 ft³ = 28.3168 L)
        const literMinute = cfm * 28.3168;
        document.getElementById('literMinuteInput').value = literMinute.toFixed(2);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${cfm} CFM = ${literMinute.toFixed(1)} L/min</strong>
        `;
    } else {
        document.getElementById('literMinuteInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('literMinuteInput').value = '';
    document.getElementById('cfmInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const literMinuteValue = document.getElementById('literMinuteInput').value;
    const cfmValue = document.getElementById('cfmInput').value;
    
    document.getElementById('literMinuteInput').value = cfmValue;
    document.getElementById('cfmInput').value = literMinuteValue;
    
    if (cfmValue) {
        convertLiterMinuteToCFM(parseFloat(cfmValue));
    } else if (literMinuteValue) {
        convertCFMToLiterMinute(parseFloat(literMinuteValue));
    }
}

// Add event listeners
document.getElementById('literMinuteInput').addEventListener('input', function() {
    convertLiterMinuteToCFM(parseFloat(this.value));
});

document.getElementById('cfmInput').addEventListener('input', function() {
    convertCFMToLiterMinute(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
