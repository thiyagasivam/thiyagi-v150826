<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megapascal to Gigapascal Converter 2026 - MPa to GPa Calculator | Thiyagi</title>
<meta name="description" content="Free online Megapascal to Gigapascal converter 2026. Convert MPa to GPa and GPa to MPa instantly with accurate high-pressure conversion.">
<meta name="keywords" content="megapascal to gigapascal converter 2026, MPa to GPa, high pressure, materials science, engineering stress, geological pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megapascal to Gigapascal Converter 2026 - MPa to GPa Calculator">
<meta property="og:description" content="Free online Megapascal to Gigapascal converter 2026. Convert MPa to GPa and GPa to MPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megapascal-to-gigapascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megapascal to Gigapascal Converter 2026 - MPa to GPa Calculator">
<meta property="twitter:description" content="Free online Megapascal to Gigapascal converter 2026. Convert MPa to GPa and GPa to MPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-violet-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-mountain text-indigo-600 mr-3"></i>
                Megapascal to Gigapascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megapascals and gigapascals for materials science, geological studies, and extreme pressure applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megapascal Input -->
                <div class="space-y-4">
                    <label for="megapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-compress-arrows-alt text-indigo-600 mr-2"></i>Megapascals (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter MPa"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MPa = 0.001 GPa
                    </div>
                </div>

                <!-- Gigapascal Input -->
                <div class="space-y-4">
                    <label for="gigapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-purple-600 mr-2"></i>Gigapascals (GPa)
                    </label>
                    <input
                        type="number"
                        id="gigapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter GPa"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 GPa = 1,000 MPa
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Extreme Pressure Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Extreme Pressure Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">MPa</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">GPa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 GPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 GPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 GPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 GPa</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100,000 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 GPa</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000,000 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 GPa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Materials Science Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-gem text-indigo-600 mr-3"></i>Materials Science Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Material Properties (GPa):</strong><br>
                        • Steel: 200 GPa (200,000 MPa)<br>
                        • Aluminum: 70 GPa (70,000 MPa)<br>
                        • Diamond: 1,220 GPa (1,220,000 MPa)<br>
                        • Glass: 50-90 GPa (50,000-90,000 MPa)
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Geological Pressures (GPa):</strong><br>
                        • Earth's crust: 0.1-1 GPa<br>
                        • Upper mantle: 1-14 GPa<br>
                        • Lower mantle: 14-136 GPa<br>
                        • Earth's core: 136-360 GPa
                    </div>
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Research Applications (MPa-GPa):</strong><br>
                        • High-pressure physics: 1-100 GPa<br>
                        • Material testing: 100-10,000 MPa<br>
                        • Diamond anvil cell: 0.1-500 GPa<br>
                        • Shock wave studies: 1-1,000 GPa
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Megapascal:</strong> 10⁶ pascals</li>
                    <li><strong>Gigapascal:</strong> 10⁹ pascals</li>
                    <li><strong>Conversion:</strong> 1 GPa = 1,000 MPa</li>
                    <li><strong>Scale:</strong> Extreme pressures</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>MPa for engineering stress</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>GPa for bulk modulus</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Simple 1000:1 ratio</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Material properties</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Materials:</strong> Elastic modulus</li>
                    <li><strong>Geology:</strong> Earth pressures</li>
                    <li><strong>Research:</strong> High-pressure studies</li>
                    <li><strong>Engineering:</strong> Structural analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMegapascalToGigapascal(megapascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megapascal) && megapascal !== '') {
        // 1 GPa = 1000 MPa, so 1 MPa = 0.001 GPa
        const gigapascal = megapascal / 1000;
        document.getElementById('gigapascalInput').value = gigapascal;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${megapascal.toLocaleString()} MPa = ${gigapascal} GPa</strong>
        `;
    } else {
        document.getElementById('gigapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGigapascalToMegapascal(gigapascal) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gigapascal) && gigapascal !== '') {
        // 1 GPa = 1000 MPa
        const megapascal = gigapascal * 1000;
        document.getElementById('megapascalInput').value = megapascal;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${gigapascal} GPa = ${megapascal.toLocaleString()} MPa</strong>
        `;
    } else {
        document.getElementById('megapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megapascalInput').value = '';
    document.getElementById('gigapascalInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const megapascalValue = document.getElementById('megapascalInput').value;
    const gigapascalValue = document.getElementById('gigapascalInput').value;
    
    document.getElementById('megapascalInput').value = gigapascalValue;
    document.getElementById('gigapascalInput').value = megapascalValue;
    
    if (gigapascalValue) {
        convertMegapascalToGigapascal(parseFloat(gigapascalValue));
    } else if (megapascalValue) {
        convertGigapascalToMegapascal(parseFloat(megapascalValue));
    }
}

// Add event listeners
document.getElementById('megapascalInput').addEventListener('input', function() {
    convertMegapascalToGigapascal(parseFloat(this.value));
});

document.getElementById('gigapascalInput').addEventListener('input', function() {
    convertGigapascalToMegapascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
