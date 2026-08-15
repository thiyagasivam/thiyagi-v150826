<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>PSI to Newton per Square Meter Converter 2026 - psi to N/m² Calculator | Thiyagi</title>
<meta name="description" content="Free online PSI to Newton per Square Meter converter 2026. Convert psi to N/m² and N/m² to psi instantly with accurate pressure unit conversion.">
<meta name="keywords" content="psi to newton per square meter converter 2026, psi to N/m², pressure conversion, pascal conversion, engineering units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="PSI to Newton per Square Meter Converter 2026 - psi to N/m² Calculator">
<meta property="og:description" content="Free online PSI to Newton per Square Meter converter 2026. Convert psi to N/m² and N/m² to psi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/psi-to-newton-square-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="PSI to Newton per Square Meter Converter 2026 - psi to N/m² Calculator">
<meta property="twitter:description" content="Free online PSI to Newton per Square Meter converter 2026. Convert psi to N/m² and N/m² to psi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-slate-600 mr-3"></i>
                PSI to Newton per Square Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pounds per square inch (PSI) and newtons per square meter (N/m²) for engineering, mechanical, and pressure system calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- PSI Input -->
                <div class="space-y-4">
                    <label for="psiInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-slate-600 mr-2"></i>Pounds per Square Inch (psi)
                    </label>
                    <input
                        type="number"
                        id="psiInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter PSI"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 psi = 6,895 N/m²
                    </div>
                </div>

                <!-- N/m² Input -->
                <div class="space-y-4">
                    <label for="newtonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-balance-scale text-gray-600 mr-2"></i>Newton per Square Meter (N/m²)
                    </label>
                    <input
                        type="number"
                        id="newtonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter N/m²"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 N/m² = 0.000145 psi
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
            <!-- Pressure Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Pressure Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">PSI</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">N/m²</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6,895 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">34,474 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">68,948 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">344,738 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">689,476 N/m²</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 psi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6,894,757 N/m²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Pressures -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-cogs text-slate-600 mr-3"></i>Common Pressures
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Automotive:</strong><br>
                        • Tire pressure: 30-35 psi (206,843-241,316 N/m²)<br>
                        • Engine oil: 10-80 psi (68,948-551,580 N/m²)<br>
                        • Fuel injection: 40-60 psi (275,790-413,685 N/m²)<br>
                        • Brake system: 800-2,000 psi
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Industrial:</strong><br>
                        • Hydraulic systems: 1,000-3,000 psi<br>
                        • Compressed air: 80-150 psi<br>
                        • Steam boilers: 150-600 psi<br>
                        • Water pressure: 40-80 psi
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Aerospace:</strong><br>
                        • Cabin pressure: 11.3 psi (77,911 N/m²)<br>
                        • Hydraulic flight controls: 3,000 psi<br>
                        • Fuel systems: 50-300 psi<br>
                        • Landing gear: 2,000-5,000 psi
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>PSI:</strong> Pounds per square inch</li>
                    <li><strong>N/m²:</strong> Newton per square meter (Pascal)</li>
                    <li><strong>Conversion:</strong> 1 psi = 6,895 N/m²</li>
                    <li><strong>Symbol:</strong> Pa (Pascal)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>PSI for US systems</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>N/m² for SI units</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Engineering calculations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Pressure specifications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Mechanical:</strong> System design</li>
                    <li><strong>Hydraulic:</strong> Power transmission</li>
                    <li><strong>HVAC:</strong> Pressure drops</li>
                    <li><strong>Process:</strong> Industrial control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPsiToNewton(psi) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(psi) && psi !== '') {
        // 1 psi = 6,894.757 N/m²
        const newton = psi * 6894.757;
        document.getElementById('newtonInput').value = newton.toFixed(1);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${psi} psi = ${newton.toLocaleString(undefined, {maximumFractionDigits: 0})} N/m²</strong>
        `;
    } else {
        document.getElementById('newtonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNewtonToPsi(newton) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newton) && newton !== '') {
        // 1 N/m² = 1/6,894.757 psi
        const psi = newton / 6894.757;
        document.getElementById('psiInput').value = psi.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${newton.toLocaleString()} N/m² = ${psi.toFixed(3)} psi</strong>
        `;
    } else {
        document.getElementById('psiInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('psiInput').value = '';
    document.getElementById('newtonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const psiValue = document.getElementById('psiInput').value;
    const newtonValue = document.getElementById('newtonInput').value;
    
    document.getElementById('psiInput').value = newtonValue;
    document.getElementById('newtonInput').value = psiValue;
    
    if (newtonValue) {
        convertPsiToNewton(parseFloat(newtonValue));
    } else if (psiValue) {
        convertNewtonToPsi(parseFloat(psiValue));
    }
}

// Add event listeners
document.getElementById('psiInput').addEventListener('input', function() {
    convertPsiToNewton(parseFloat(this.value));
});

document.getElementById('newtonInput').addEventListener('input', function() {
    convertNewtonToPsi(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
