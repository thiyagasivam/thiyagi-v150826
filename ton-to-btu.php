<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ton to BTU Converter 2026 - ton to British Thermal Unit Calculator | Thiyagi</title>
<meta name="description" content="Free online ton to BTU converter 2026. Convert refrigeration tons to BTU/hr and BTU/hr to tons instantly with accurate cooling capacity conversion.">
<meta name="keywords" content="ton to btu converter 2026, ton refrigeration, BTU cooling capacity, HVAC converter, air conditioning units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ton to BTU Converter 2026 - ton to British Thermal Unit Calculator">
<meta property="og:description" content="Free online ton to BTU converter 2026. Convert refrigeration tons to BTU/hr and BTU/hr to tons instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ton-to-btu.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ton to BTU Converter 2026 - ton to British Thermal Unit Calculator">
<meta name="twitter:description" content="Free online ton to BTU converter 2026. Convert refrigeration tons to BTU/hr and BTU/hr to tons instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-snowflake text-purple-600 mr-3"></i>
                Ton to BTU Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between refrigeration tons and BTU/hr for HVAC and cooling calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Tons Input -->
                <div class="space-y-4">
                    <label for="tonsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-thermometer-three-quarters text-purple-600 mr-2"></i>Tons of Refrigeration (TR)
                    </label>
                    <input
                        type="number"
                        id="tonsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter tons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 ton = 12,000 BTU/hr
                    </div>
                </div>

                <!-- BTU Input -->
                <div class="space-y-4">
                    <label for="btuInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-fire text-indigo-600 mr-2"></i>BTU per Hour (BTU/hr)
                    </label>
                    <input
                        type="number"
                        id="btuInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter BTU/hr"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 BTU/hr = 0.000083333 tons
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
            <!-- Common AC Sizes -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Common AC Sizes
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Application</th>
                                <th class="text-center py-2">Tons</th>
                                <th class="text-right py-2">BTU/hr</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">Small room AC</td>
                                <td class="text-center">0.5</td>
                                <td class="text-right">6,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Window AC</td>
                                <td class="text-center">1</td>
                                <td class="text-right">12,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Small home AC</td>
                                <td class="text-center">2</td>
                                <td class="text-right">24,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Medium home AC</td>
                                <td class="text-center">3</td>
                                <td class="text-right">36,000</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Large home AC</td>
                                <td class="text-center">5</td>
                                <td class="text-right">60,000</td>
                            </tr>
                            <tr>
                                <td class="py-2">Commercial unit</td>
                                <td class="text-center">10</td>
                                <td class="text-right">120,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- HVAC Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-purple-600 mr-3"></i>HVAC Applications
                </h2>
                <div class="space-y-4 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Residential HVAC:</strong><br>
                        • Home air conditioning sizing<br>
                        • Heat pump capacity rating<br>
                        • Energy efficiency calculations<br>
                        • Load calculation verification
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Commercial HVAC:</strong><br>
                        • Building cooling load analysis<br>
                        • Chiller capacity specifications<br>
                        • Energy consumption planning<br>
                        • System design optimization
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Industrial Applications:</strong><br>
                        • Process cooling requirements<br>
                        • Refrigeration system sizing<br>
                        • Data center cooling<br>
                        • Manufacturing facility HVAC
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>Unit Definitions
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Ton of Refrigeration:</strong> 12,000 BTU/hr</li>
                    <li><strong>BTU/hr:</strong> British Thermal Units per hour</li>
                    <li><strong>Origin:</strong> Ice melting capacity</li>
                    <li><strong>Standard:</strong> HVAC industry measure</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Calculation Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Multiply tons by 12,000 for BTU/hr</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Divide BTU/hr by 12,000 for tons</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Consider peak cooling loads</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Account for efficiency factors</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Industry Standards
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>HVAC:</strong> Tons widely used</li>
                    <li><strong>Engineering:</strong> BTU/hr for calculations</li>
                    <li><strong>Energy:</strong> Both units in specifications</li>
                    <li><strong>Global:</strong> US/UK standard primarily</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertTonsToBtu(tons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tons) && tons !== '') {
        const btu = tons * 12000;
        document.getElementById('btuInput').value = btu.toFixed(2);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${tons} tons = ${btu.toFixed(2)} BTU/hr</strong>
        `;
    } else {
        document.getElementById('btuInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertBtuToTons(btu) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(btu) && btu !== '') {
        const tons = btu / 12000;
        document.getElementById('tonsInput').value = tons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${btu} BTU/hr = ${tons.toFixed(6)} tons</strong>
        `;
    } else {
        document.getElementById('tonsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('tonsInput').value = '';
    document.getElementById('btuInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const tonsValue = document.getElementById('tonsInput').value;
    const btuValue = document.getElementById('btuInput').value;
    
    document.getElementById('tonsInput').value = btuValue;
    document.getElementById('btuInput').value = tonsValue;
    
    if (btuValue) {
        convertTonsToBtu(parseFloat(btuValue));
    } else if (tonsValue) {
        convertBtuToTons(parseFloat(tonsValue));
    }
}

// Add event listeners
document.getElementById('tonsInput').addEventListener('input', function() {
    convertTonsToBtu(parseFloat(this.value));
});

document.getElementById('btuInput').addEventListener('input', function() {
    convertBtuToTons(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
