<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Foot to Square Inch Converter 2026 - sq ft to sq in Calculator | Thiyagi</title>
<meta name="description" content="Free online Square Foot to Square Inch converter 2026. Convert sq ft to sq in and sq in to sq ft instantly with accurate area conversion.">
<meta name="keywords" content="square foot to square inch converter 2026, sq ft to sq in, area conversion, imperial units calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Foot to Square Inch Converter 2026 - sq ft to sq in Calculator">
<meta property="og:description" content="Free online Square Foot to Square Inch converter 2026. Convert sq ft to sq in and sq in to sq ft instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-foot-to-square-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Foot to Square Inch Converter 2026 - sq ft to sq in Calculator">
<meta property="twitter:description" content="Free online Square Foot to Square Inch converter 2026. Convert sq ft to sq in and sq in to sq ft instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-combined text-blue-600 mr-3"></i>
                Square Foot to Square Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between square feet (sq ft) and square inches (sq in) for construction, flooring, carpeting, design projects, and area measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Foot Input -->
                <div class="space-y-4">
                    <label for="squareFootInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-home text-blue-600 mr-2"></i>Square Feet (sq ft)
                    </label>
                    <input
                        type="number"
                        id="squareFootInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter square feet"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Imperial area unit (12×12 inches)
                    </div>
                </div>

                <!-- Square Inch Input -->
                <div class="space-y-4">
                    <label for="squareInchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-square text-indigo-600 mr-2"></i>Square Inches (sq in)
                    </label>
                    <input
                        type="number"
                        id="squareInchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter square inches"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Small imperial area unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
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
            <!-- Area Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Area Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Square Feet</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Square Inches</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">144 sq in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">288 sq in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">720 sq in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,440 sq in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,600 sq in</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 sq ft</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">14,400 sq in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Construction Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-hammer text-blue-600 mr-3"></i>Construction Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Flooring & Tiles:</strong><br>
                        • Standard tile: 12×12 in (144 sq in, 1 sq ft)<br>
                        • Large tile: 18×18 in (324 sq in, 2.25 sq ft)<br>
                        • Small mosaic: 1×1 in (1 sq in)<br>
                        • Plank flooring: 5×48 in (240 sq in)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Room Measurements:</strong><br>
                        • Small bathroom: 25-40 sq ft<br>
                        • Walk-in closet: 25-100 sq ft<br>
                        • Bedroom: 100-300 sq ft<br>
                        • Living room: 200-400 sq ft
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Material Planning:</strong><br>
                        • Carpet squares: 12×12 in (1 sq ft)<br>
                        • Wallpaper rolls: coverage per sq ft<br>
                        • Paint coverage: ~400 sq ft per gallon<br>
                        • Adhesive coverage: varies by sq ft
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-blue-600 mr-2"></i>Area Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>sq ft:</strong> 144 square inches</li>
                    <li><strong>sq in:</strong> Base imperial area unit</li>
                    <li><strong>Conversion:</strong> 1 sq ft = 144 sq in</li>
                    <li><strong>Formula:</strong> 12 in × 12 in = 144 sq in</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>sq ft for large areas</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>sq in for small items</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Count waste/overlap</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Check material specifications</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-tools text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Construction:</strong> Flooring projects</li>
                    <li><strong>Design:</strong> Space planning</li>
                    <li><strong>Retail:</strong> Material ordering</li>
                    <li><strong>Real Estate:</strong> Property measurement</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertSquareFootToSquareInch(squareFoot) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareFoot) && squareFoot !== '') {
        // 1 square foot = 144 square inches (12 × 12)
        const squareInch = squareFoot * 144;
        document.getElementById('squareInchInput').value = squareInch.toFixed(6);
        
        // Format large numbers with commas
        const formattedSquareInch = squareInch.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${squareFoot} sq ft = ${formattedSquareInch} sq in</strong>
        `;
    } else {
        document.getElementById('squareInchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertSquareInchToSquareFoot(squareInch) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(squareInch) && squareInch !== '') {
        // 1 square inch = 1/144 square feet
        const squareFoot = squareInch / 144;
        document.getElementById('squareFootInput').value = squareFoot.toFixed(8);
        
        // Format large numbers with commas
        const formattedSquareInch = squareInch.toLocaleString();
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${formattedSquareInch} sq in = ${squareFoot.toFixed(4)} sq ft</strong>
        `;
    } else {
        document.getElementById('squareFootInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('squareFootInput').value = '';
    document.getElementById('squareInchInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const squareFootValue = document.getElementById('squareFootInput').value;
    const squareInchValue = document.getElementById('squareInchInput').value;
    
    document.getElementById('squareFootInput').value = squareInchValue;
    document.getElementById('squareInchInput').value = squareFootValue;
    
    if (squareInchValue) {
        convertSquareFootToSquareInch(parseFloat(squareInchValue));
    } else if (squareFootValue) {
        convertSquareInchToSquareFoot(parseFloat(squareFootValue));
    }
}

// Add event listeners
document.getElementById('squareFootInput').addEventListener('input', function() {
    convertSquareFootToSquareInch(parseFloat(this.value));
});

document.getElementById('squareInchInput').addEventListener('input', function() {
    convertSquareInchToSquareFoot(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
