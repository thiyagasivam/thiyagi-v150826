<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to Kiloliter Converter 2026 - L to kL Calculator | Thiyagi</title>
<meta name="description" content="Free online Liter to Kiloliter converter 2026. Convert L to kL and kL to L instantly with accurate volume conversion for water management.">
<meta name="keywords" content="liter to kiloliter converter 2026, L to kL, volume converter, water management, large volume, industrial measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to Kiloliter Converter 2026 - L to kL Calculator">
<meta property="og:description" content="Free online Liter to Kiloliter converter 2026. Convert L to kL and kL to L instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-kiloliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to Kiloliter Converter 2026 - L to kL Calculator">
<meta property="twitter:description" content="Free online Liter to Kiloliter converter 2026. Convert L to kL and kL to L instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tint text-blue-600 mr-3"></i>
                Liter to Kiloliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between liters and kiloliters for water management, industrial processes, and large volume calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-blue-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter liters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L = 0.001 kL
                    </div>
                </div>

                <!-- Kiloliter Input -->
                <div class="space-y-4">
                    <label for="kiloliterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-water text-sky-600 mr-2"></i>Kiloliters (kL)
                    </label>
                    <input
                        type="number"
                        id="kiloliterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter kiloliters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kL = 1,000 L
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-sky-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Volume Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Volume Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Liters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kiloliters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 kL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 kL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 kL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kL</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 kL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Water Management Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-industry text-blue-600 mr-3"></i>Water Management Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Residential Use:</strong><br>
                        • Household daily: 200-400 L (0.2-0.4 kL)<br>
                        • Swimming pool: 50,000 L (50 kL)<br>
                        • Hot tub: 2,000 L (2 kL)<br>
                        • Rainwater tank: 10,000 L (10 kL)
                    </div>
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Commercial & Industrial:</strong><br>
                        • Small office building: 5,000 L/day (5 kL)<br>
                        • Restaurant: 2,000 L/day (2 kL)<br>
                        • Factory cooling: 100,000 L/day (100 kL)<br>
                        • Brewery production: 500,000 L (500 kL)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Municipal & Agriculture:</strong><br>
                        • Fire truck tank: 3,000 L (3 kL)<br>
                        • Irrigation system: 1,000,000 L (1,000 kL)<br>
                        • Water treatment plant: 10,000,000 L (10,000 kL)<br>
                        • Municipal reservoir: 1,000,000,000 L (1,000,000 kL)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Liter:</strong> Base metric volume</li>
                    <li><strong>Kiloliter:</strong> 1,000 liters</li>
                    <li><strong>Conversion:</strong> 1 kL = 1,000 L</li>
                    <li><strong>Symbol:</strong> L and kL</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>L for everyday volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>kL for large volumes</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Simple 1000:1 ratio</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Water industry standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Water management:</strong> Municipal systems</li>
                    <li><strong>Industry:</strong> Process volumes</li>
                    <li><strong>Agriculture:</strong> Irrigation planning</li>
                    <li><strong>Environment:</strong> Conservation tracking</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertLiterToKiloliter(liter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liter) && liter !== '') {
        // 1 L = 0.001 kL
        const kiloliter = liter / 1000;
        document.getElementById('kiloliterInput').value = kiloliter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${liter.toLocaleString()} L = ${kiloliter} kL</strong>
        `;
    } else {
        document.getElementById('kiloliterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKiloliterToLiter(kiloliter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kiloliter) && kiloliter !== '') {
        // 1 kL = 1000 L
        const liter = kiloliter * 1000;
        document.getElementById('literInput').value = liter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${kiloliter} kL = ${liter.toLocaleString()} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('kiloliterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const kiloliterValue = document.getElementById('kiloliterInput').value;
    
    document.getElementById('literInput').value = kiloliterValue;
    document.getElementById('kiloliterInput').value = literValue;
    
    if (kiloliterValue) {
        convertLiterToKiloliter(parseFloat(kiloliterValue));
    } else if (literValue) {
        convertKiloliterToLiter(parseFloat(literValue));
    }
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', function() {
    convertLiterToKiloliter(parseFloat(this.value));
});

document.getElementById('kiloliterInput').addEventListener('input', function() {
    convertKiloliterToLiter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
