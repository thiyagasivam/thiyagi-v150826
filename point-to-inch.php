<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Point to Inch Converter 2026 - pt to in Calculator | Thiyagi</title>
<meta name="description" content="Free online Point to Inch converter 2026. Convert pt to in and in to pt instantly with accurate typography and printing conversion.">
<meta name="keywords" content="point to inch converter 2026, pt to in, typography converter, printing units, font size, design measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Point to Inch Converter 2026 - pt to in Calculator">
<meta property="og:description" content="Free online Point to Inch converter 2026. Convert pt to in and in to pt instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/point-to-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Point to Inch Converter 2026 - pt to in Calculator">
<meta property="twitter:description" content="Free online Point to Inch converter 2026. Convert pt to in and in to pt instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-font text-slate-600 mr-3"></i>
                Point to Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between points and inches for typography, printing, graphic design, and publishing applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Point Input -->
                <div class="space-y-4">
                    <label for="pointInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-text-height text-slate-600 mr-2"></i>Points (pt)
                    </label>
                    <input
                        type="number"
                        id="pointInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter points"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 pt = 0.01389 in
                    </div>
                </div>

                <!-- Inch Input -->
                <div class="space-y-4">
                    <label for="inchInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-gray-600 mr-2"></i>Inches (in)
                    </label>
                    <input
                        type="number"
                        id="inchInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter inches"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 in = 72 pt
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
            <!-- Typography Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Typography Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Points</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Inches</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">6 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.083 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.167 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">18 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.25 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">36 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 in</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">72 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 in</td>
                            </tr>
                            <tr>
                                <td class="py-2">144 pt</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 in</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Font Size Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-font text-slate-600 mr-3"></i>Font Size Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Small Text:</strong><br>
                        • Fine print: 6-8 pt (0.083-0.111 in)<br>
                        • Footnotes: 8-9 pt (0.111-0.125 in)<br>
                        • Captions: 9-10 pt (0.125-0.139 in)<br>
                        • Body text: 10-12 pt (0.139-0.167 in)
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Standard Text:</strong><br>
                        • Body text: 12 pt (0.167 in)<br>
                        • Subheadings: 14-16 pt (0.194-0.222 in)<br>
                        • Headings: 18-24 pt (0.25-0.333 in)<br>
                        • Large headings: 36 pt (0.5 in)
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Display Text:</strong><br>
                        • Poster titles: 48-72 pt (0.667-1 in)<br>
                        • Banner text: 72-144 pt (1-2 in)<br>
                        • Billboard text: 144+ pt (2+ in)<br>
                        • Architectural signs: 300+ pt (4+ in)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Typography Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Point:</strong> Typography unit</li>
                    <li><strong>Inch:</strong> Imperial length unit</li>
                    <li><strong>Conversion:</strong> 1 in = 72 pt</li>
                    <li><strong>Standard:</strong> PostScript point</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>pt for digital design</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>in for print layouts</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>72 pt = 1 inch</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Screen vs print DPI</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Typography:</strong> Font sizing</li>
                    <li><strong>Printing:</strong> Layout design</li>
                    <li><strong>Publishing:</strong> Document formatting</li>
                    <li><strong>Web design:</strong> CSS measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertPointToInch(point) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(point) && point !== '') {
        // 1 point = 1/72 inch
        const inch = point / 72;
        document.getElementById('inchInput').value = inch.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${point} pt = ${inch.toFixed(6)} in</strong>
        `;
    } else {
        document.getElementById('inchInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertInchToPoint(inch) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(inch) && inch !== '') {
        // 1 inch = 72 points
        const point = inch * 72;
        document.getElementById('pointInput').value = point;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${inch} in = ${point} pt</strong>
        `;
    } else {
        document.getElementById('pointInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('pointInput').value = '';
    document.getElementById('inchInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const pointValue = document.getElementById('pointInput').value;
    const inchValue = document.getElementById('inchInput').value;
    
    document.getElementById('pointInput').value = inchValue;
    document.getElementById('inchInput').value = pointValue;
    
    if (inchValue) {
        convertPointToInch(parseFloat(inchValue));
    } else if (pointValue) {
        convertInchToPoint(parseFloat(pointValue));
    }
}

// Add event listeners
document.getElementById('pointInput').addEventListener('input', function() {
    convertPointToInch(parseFloat(this.value));
});

document.getElementById('inchInput').addEventListener('input', function() {
    convertInchToPoint(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
