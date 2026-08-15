<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pascal to Standard Atmosphere Converter 2026 - Pa to atm Calculator | Thiyagi</title>
<meta name="description" content="Free online Pascal to Standard Atmosphere converter 2026. Convert Pa to atm and atm to Pa instantly with accurate pressure conversion for science.">
<meta name="keywords" content="pascal to atmosphere converter 2026, Pa to atm, pressure converter, atmospheric pressure, meteorology, physics calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pascal to Standard Atmosphere Converter 2026 - Pa to atm Calculator">
<meta property="og:description" content="Free online Pascal to Standard Atmosphere converter 2026. Convert Pa to atm and atm to Pa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pascal-to-standard-atmosphere.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pascal to Standard Atmosphere Converter 2026 - Pa to atm Calculator">
<meta name="twitter:description" content="Free online Pascal to Standard Atmosphere converter 2026. Convert Pa to atm and atm to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-cloud text-sky-600 mr-3"></i>
                Pascal to Standard Atmosphere Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between pascals and standard atmospheres for meteorology, physics, and engineering applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Pascal Input -->
                <div class="space-y-4">
                    <label for="pascalInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-gauge text-sky-600 mr-2"></i>Pascal (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter pascals"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 Pa = 9.8692×10⁻⁶ atm
                    </div>
                </div>

                <!-- Atmosphere Input -->
                <div class="space-y-4">
                    <label for="atmosphereInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-globe-americas text-blue-600 mr-2"></i>Standard Atmosphere (atm)
                    </label>
                    <input
                        type="number"
                        id="atmosphereInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter atmospheres"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 atm = 101,325 Pa
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-sky-50 to-blue-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="referenceInfo" class="text-sm text-gray-600 text-center mt-2"></div>
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
            <!-- Pressure Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-sky-600 mr-3"></i>Pressure Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Pascal</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Atmosphere</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,013 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,133 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50,663 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">101,325 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 atm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">202,650 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.0 atm</td>
                            </tr>
                            <tr>
                                <td class="py-2">506,625 Pa</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5.0 atm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Atmospheric Conditions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-thermometer text-sky-600 mr-3"></i>Atmospheric Conditions
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Sea Level Pressure:</strong><br>
                        • Standard: 101,325 Pa (1.0 atm)<br>
                        • Average: 101,000-102,000 Pa<br>
                        • High pressure: >103,000 Pa (>1.02 atm)<br>
                        • Low pressure: <99,000 Pa (<0.98 atm)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Altitude Effects:</strong><br>
                        • 1,000 m: ~89,875 Pa (0.887 atm)<br>
                        • 3,000 m: ~69,682 Pa (0.688 atm)<br>
                        • 5,000 m: ~54,020 Pa (0.533 atm)<br>
                        • 10,000 m: ~26,500 Pa (0.262 atm)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Weather Systems:</strong><br>
                        • Hurricane eye: ~95,000 Pa (0.94 atm)<br>
                        • Strong high: ~103,500 Pa (1.02 atm)<br>
                        • Deep low: ~98,000 Pa (0.97 atm)<br>
                        • Typhoon center: ~92,000 Pa (0.91 atm)
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
                    <li><strong>Pascal:</strong> SI unit of pressure</li>
                    <li><strong>Standard atm:</strong> Reference pressure</li>
                    <li><strong>Definition:</strong> 1 atm = 101,325 Pa exactly</li>
                    <li><strong>Symbol:</strong> Pa and atm</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Use atm for atmospheric science</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Use Pa for engineering calculations</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Consider temperature effects</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Account for altitude variations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-sky-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Weather:</strong> Barometric pressure</li>
                    <li><strong>Aviation:</strong> Altitude calculations</li>
                    <li><strong>Physics:</strong> Gas law calculations</li>
                    <li><strong>Engineering:</strong> System design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPascalToAtmosphere(pascals) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pascals) && pascals !== '') {
        const atmospheres = pascals / 101325;
        document.getElementById('atmosphereInput').value = atmospheres.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${pascals} Pa = ${atmospheres.toFixed(10)} atm</strong>
        `;
        
        // Add reference information
        let referenceText = '';
        if (pascals >= 101000 && pascals <= 102000) {
            referenceText = 'Typical sea level atmospheric pressure range';
        } else if (pascals > 103000) {
            referenceText = 'High pressure system';
        } else if (pascals < 99000) {
            referenceText = 'Low pressure system';
        } else if (pascals === 101325) {
            referenceText = 'Standard atmospheric pressure (exact)';
        }
        
        document.getElementById('referenceInfo').innerHTML = referenceText;
    } else {
        document.getElementById('atmosphereInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('referenceInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertAtmosphereToPascal(atmospheres) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(atmospheres) && atmospheres !== '') {
        const pascals = atmospheres * 101325;
        document.getElementById('pascalInput').value = pascals.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${atmospheres} atm = ${pascals.toFixed(6)} Pa</strong>
        `;
        
        // Add reference information
        let referenceText = '';
        if (atmospheres >= 0.99 && atmospheres <= 1.01) {
            referenceText = 'Near standard atmospheric pressure';
        } else if (atmospheres > 1.02) {
            referenceText = 'High pressure conditions';
        } else if (atmospheres < 0.98) {
            referenceText = 'Low pressure conditions';
        } else if (atmospheres === 1.0) {
            referenceText = 'Standard atmospheric pressure';
        }
        
        document.getElementById('referenceInfo').innerHTML = referenceText;
    } else {
        document.getElementById('pascalInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('referenceInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('pascalInput').value = '';
    document.getElementById('atmosphereInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('referenceInfo').innerHTML = '';
}

function swapValues() {
    const pascalValue = document.getElementById('pascalInput').value;
    const atmosphereValue = document.getElementById('atmosphereInput').value;
    
    document.getElementById('pascalInput').value = atmosphereValue;
    document.getElementById('atmosphereInput').value = pascalValue;
    
    if (atmosphereValue) {
        convertPascalToAtmosphere(parseFloat(atmosphereValue));
    } else if (pascalValue) {
        convertAtmosphereToPascal(parseFloat(pascalValue));
    }
}

// Add event listeners
document.getElementById('pascalInput').addEventListener('input', function() {
    convertPascalToAtmosphere(parseFloat(this.value));
});

document.getElementById('atmosphereInput').addEventListener('input', function() {
    convertAtmosphereToPascal(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
