<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Foot to Square Mile Converter 2026 - ft² to mi² Calculator | Thiyagi</title>
<meta name="description" content="Free online Square Foot to Square Mile converter 2026. Convert ft² to mi² and mi² to ft² instantly with accurate area conversion.">
<meta name="keywords" content="square foot to square mile converter 2026, ft² to mi², area converter, land area, real estate measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Foot to Square Mile Converter 2026 - ft² to mi² Calculator">
<meta property="og:description" content="Free online Square Foot to Square Mile converter 2026. Convert ft² to mi² and mi² to ft² instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-foot-to-square-mile.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Foot to Square Mile Converter 2026 - ft² to mi² Calculator">
<meta name="twitter:description" content="Free online Square Foot to Square Mile converter 2026. Convert ft² to mi² and mi² to ft² instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-lime-50 via-green-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-vector-square text-lime-600 mr-3"></i>
                Square Foot to Square Mile Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between square feet and square miles for real estate, land development, and large area measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Foot Input -->
                <div class="space-y-4">
                    <label for="squareFootInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-home text-lime-600 mr-2"></i>Square Foot (ft²)
                    </label>
                    <input
                        type="number"
                        id="squareFootInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter square feet"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft² = 3.587×10⁻⁸ mi²
                    </div>
                </div>

                <!-- Square Mile Input -->
                <div class="space-y-4">
                    <label for="squareMileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-map text-green-600 mr-2"></i>Square Mile (mi²)
                    </label>
                    <input
                        type="number"
                        id="squareMileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-lime-500 focus:border-transparent text-xl"
                        placeholder="Enter square miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mi² = 27,878,400 ft²
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-lime-50 to-green-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-lime-500 hover:bg-lime-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Area Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-lime-600 mr-3"></i>Area Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Square Foot</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Square Mile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1,000 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.59×10⁻⁵ mi²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">43,560 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.00156 mi²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000,000 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.0359 mi²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10,000,000 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.359 mi²</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">27,878,400 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mi²</td>
                            </tr>
                            <tr>
                                <td class="py-2">100,000,000 ft²</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3.59 mi²</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Real Estate and Land Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-building text-lime-600 mr-3"></i>Real Estate and Land Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-lime-50 p-3 rounded">
                        <strong>Residential Properties:</strong><br>
                        • Small house: 1,000-1,500 ft²<br>
                        • Average house: 2,000-2,500 ft²<br>
                        • Large house: 3,000-5,000+ ft²<br>
                        • Mansion: 8,000-20,000+ ft²
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Commercial Properties:</strong><br>
                        • Small office: 1,000-5,000 ft²<br>
                        • Shopping center: 50,000-500,000 ft²<br>
                        • Mall: 1-2 million ft²<br>
                        • Warehouse: 100,000-1 million ft²
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Land Areas:</strong><br>
                        • 1 acre = 43,560 ft²<br>
                        • City block = 2-5 acres<br>
                        • Small farm = 10-100 acres<br>
                        • 1 square mile = 640 acres
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-lime-600 mr-2"></i>Area Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Square Foot:</strong> 1 ft × 1 ft</li>
                    <li><strong>Square Mile:</strong> 1 mi × 1 mi</li>
                    <li><strong>Conversion:</strong> 1 mi² = 27,878,400 ft²</li>
                    <li><strong>Also equals:</strong> 1 mi² = 640 acres</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-lime-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Use ft² for buildings</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Use mi² for large areas</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Common in real estate</li>
                    <li><i class="fas fa-check text-lime-600 mr-2"></i>Essential for development</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-lime-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Real Estate:</strong> Property sizing</li>
                    <li><strong>Development:</strong> Land planning</li>
                    <li><strong>Geography:</strong> Area measurements</li>
                    <li><strong>Urban Planning:</strong> City design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertSquareFootToSquareMile(squareFeet) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareFeet) && squareFeet !== '') {
        // 1 square mile = 5280² square feet = 27,878,400 square feet
        const squareMiles = squareFeet / 27878400;
        document.getElementById('squareMileInput').value = squareMiles.toFixed(12);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${squareFeet.toLocaleString()} ft² = ${squareMiles.toFixed(9)} mi²</strong>
        `;
    } else {
        document.getElementById('squareMileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertSquareMileToSquareFoot(squareMiles) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareMiles) && squareMiles !== '') {
        // 1 square mile = 5280² square feet = 27,878,400 square feet
        const squareFeet = squareMiles * 27878400;
        document.getElementById('squareFootInput').value = squareFeet.toFixed(0);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-lime-600 mr-2"></i>
            <strong>${squareMiles} mi² = ${squareFeet.toLocaleString()} ft²</strong>
        `;
    } else {
        document.getElementById('squareFootInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('squareFootInput').value = '';
    document.getElementById('squareMileInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ft2Value = document.getElementById('squareFootInput').value;
    const mi2Value = document.getElementById('squareMileInput').value;
    
    document.getElementById('squareFootInput').value = mi2Value;
    document.getElementById('squareMileInput').value = ft2Value;
    
    if (mi2Value) {
        convertSquareFootToSquareMile(parseFloat(mi2Value));
    } else if (ft2Value) {
        convertSquareMileToSquareFoot(parseFloat(ft2Value));
    }
}

// Add event listeners
document.getElementById('squareFootInput').addEventListener('input', function() {
    convertSquareFootToSquareMile(parseFloat(this.value));
});

document.getElementById('squareMileInput').addEventListener('input', function() {
    convertSquareMileToSquareFoot(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
