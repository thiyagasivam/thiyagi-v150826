<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megapascal to Newton per Square Meter Converter 2026 - MPa to N/m² Calculator | Thiyagi</title>
<meta name="description" content="Free online Megapascal to Newton per Square Meter converter 2026. Convert MPa to N/m² and N/m² to MPa for pressure calculations.">
<meta name="keywords" content="megapascal to newton square meter converter 2026, MPa to N/m², pressure converter, pascal units, engineering pressure">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megapascal to Newton per Square Meter Converter 2026 - MPa to N/m² Calculator">
<meta property="og:description" content="Free online Megapascal to Newton per Square Meter converter 2026. Convert MPa to N/m² and N/m² to MPa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megapascal-to-newton-square-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megapascal to Newton per Square Meter Converter 2026 - MPa to N/m² Calculator">
<meta name="twitter:description" content="Free online Megapascal to Newton per Square Meter converter 2026. Convert MPa to N/m² and N/m² to MPa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-compress-arrows-alt text-sky-600 mr-3"></i>
                MPa to N/m² Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between megapascals and newtons per square meter for pressure measurements, engineering calculations, and material testing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megapascal Input -->
                <div class="space-y-4">
                    <label for="megapascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight-hanging text-sky-600 mr-2"></i>Megapascal (MPa)
                    </label>
                    <input
                        type="number"
                        id="megapascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter megapascals"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 MPa = 1,000,000 N/m²
                    </div>
                </div>

                <!-- Newton per Square Meter Input -->
                <div class="space-y-4">
                    <label for="newtonSquareMeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-square text-blue-600 mr-2"></i>Newton per Square Meter (N/m²)
                    </label>
                    <input
                        type="number"
                        id="newtonSquareMeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter N/m²"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 N/m² = 0.000001 MPa
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
            <!-- Pressure Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-sky-600 mr-3"></i>Pressure Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Megapascal</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">N/m²</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000,000 N/m²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000,000 N/m²</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 MPa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000,000,000 N/m²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engineering Pressure Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-tools text-sky-600 mr-3"></i>Engineering Pressure Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Material Strength:</strong><br>
                        • Concrete compressive: 20-50 MPa<br>
                        • Steel yield strength: 200-400 MPa<br>
                        • Aluminum alloy: 100-300 MPa<br>
                        • Titanium alloy: 800-1,200 MPa
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Hydraulic Systems:</strong><br>
                        • Car brake system: 10-15 MPa<br>
                        • Hydraulic press: 20-70 MPa<br>
                        • Industrial hydraulics: 100-350 MPa<br>
                        • Water jet cutting: 300-400 MPa
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Natural Pressures:</strong><br>
                        • Atmospheric pressure: 0.101 MPa<br>
                        • Car tire pressure: 0.2-0.3 MPa<br>
                        • Deep ocean: 100+ MPa<br>
                        • Earth's core: 350,000+ MPa
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-sky-600 mr-2"></i>Pressure Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Megapascal:</strong> 10⁶ pascals</li>
                    <li><strong>N/m²:</strong> Pascal (Pa)</li>
                    <li><strong>Relationship:</strong> 1 MPa = 1,000,000 Pa</li>
                    <li><strong>SI unit:</strong> Pascal (N/m²)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>MPa for large pressures</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>N/m² is SI base unit</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Common in engineering</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Material testing standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-sky-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Engineering:</strong> Stress analysis</li>
                    <li><strong>Materials:</strong> Strength testing</li>
                    <li><strong>Hydraulics:</strong> System design</li>
                    <li><strong>Geology:</strong> Rock mechanics</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMegapascalToNewtonSquareMeter(megapascals) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(megapascals) && megapascals !== '') {
        const newtonSquareMeters = megapascals * 1000000;
        document.getElementById('newtonSquareMeterInput').value = newtonSquareMeters.toFixed(0);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${megapascals} MPa = ${newtonSquareMeters.toLocaleString()} N/m²</strong>
        `;
    } else {
        document.getElementById('newtonSquareMeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNewtonSquareMeterToMegapascal(newtonSquareMeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(newtonSquareMeters) && newtonSquareMeters !== '') {
        const megapascals = newtonSquareMeters / 1000000;
        document.getElementById('megapascalInput').value = megapascals.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${newtonSquareMeters.toLocaleString()} N/m² = ${megapascals.toFixed(6)} MPa</strong>
        `;
    } else {
        document.getElementById('megapascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('megapascalInput').value = '';
    document.getElementById('newtonSquareMeterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mpaValue = document.getElementById('megapascalInput').value;
    const nm2Value = document.getElementById('newtonSquareMeterInput').value;
    
    document.getElementById('megapascalInput').value = nm2Value;
    document.getElementById('newtonSquareMeterInput').value = mpaValue;
    
    if (nm2Value) {
        convertMegapascalToNewtonSquareMeter(parseFloat(nm2Value));
    } else if (mpaValue) {
        convertNewtonSquareMeterToMegapascal(parseFloat(mpaValue));
    }
}

// Add event listeners
document.getElementById('megapascalInput').addEventListener('input', function() {
    convertMegapascalToNewtonSquareMeter(parseFloat(this.value));
});

document.getElementById('newtonSquareMeterInput').addEventListener('input', function() {
    convertNewtonSquareMeterToMegapascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
