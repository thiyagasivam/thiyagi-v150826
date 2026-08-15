<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to CC Converter 2026 - L to cm³ Calculator | Thiyagi</title>
<meta name="description" content="Free online Liter to CC converter 2026. Convert L to cc and cc to L instantly with accurate volume conversion for automotive and chemistry needs.">
<meta name="keywords" content="liter to cc converter 2026, L to cc, volume converter, cubic centimeter, engine displacement, chemistry">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to CC Converter 2026 - L to cm³ Calculator">
<meta property="og:description" content="Free online Liter to CC converter 2026. Convert L to cc and cc to L instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-cc.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to CC Converter 2026 - L to cm³ Calculator">
<meta property="twitter:description" content="Free online Liter to CC converter 2026. Convert L to cc and cc to L instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-emerald-600 mr-3"></i>
                Liter to CC Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between liters and cubic centimeters for engine displacement, chemistry, cooking, and medical applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flask text-emerald-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter liters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 L = 1,000 cc
                    </div>
                </div>

                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="ccInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-teal-600 mr-2"></i>Cubic Centimeters (cc or cm³)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter cc"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cc = 0.001 L
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Volume Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Liters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Cubic Centimeters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.001 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 cc</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2.5 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,500 cc</td>
                            </tr>
                            <tr>
                                <td class="py-2">5 L</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,000 cc</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engine Displacement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-car text-emerald-600 mr-3"></i>Engine Displacement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Small Engines:</strong><br>
                        • Motorcycle 125cc: 0.125 L<br>
                        • Scooter 150cc: 0.15 L<br>
                        • Small bike 250cc: 0.25 L<br>
                        • Dirt bike 450cc: 0.45 L
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Car Engines:</strong><br>
                        • Compact car 1000cc: 1.0 L<br>
                        • Mid-size 1500cc: 1.5 L<br>
                        • SUV 2500cc: 2.5 L<br>
                        • Sports car 3000cc: 3.0 L
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Large Engines:</strong><br>
                        • Truck 5000cc: 5.0 L<br>
                        • Performance V8 6200cc: 6.2 L<br>
                        • Heavy truck 15000cc: 15.0 L<br>
                        • Marine engine 25000cc: 25.0 L
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-emerald-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Liter:</strong> Metric volume unit</li>
                    <li><strong>CC:</strong> Cubic centimeter</li>
                    <li><strong>Conversion:</strong> 1 L = 1,000 cc</li>
                    <li><strong>Equivalence:</strong> 1 cc = 1 mL</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>cc for engine displacement</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>L for fluid volumes</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Simple 1000:1 ratio</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Medical dosages in cc</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Automotive:</strong> Engine displacement</li>
                    <li><strong>Chemistry:</strong> Solution volumes</li>
                    <li><strong>Medical:</strong> Dosage calculations</li>
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertLiterToCC(liter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liter) && liter !== '') {
        // 1 L = 1000 cc
        const cc = liter * 1000;
        document.getElementById('ccInput').value = cc;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${liter} L = ${cc.toLocaleString()} cc</strong>
        `;
    } else {
        document.getElementById('ccInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertCCToLiter(cc) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cc) && cc !== '') {
        // 1 cc = 0.001 L
        const liter = cc / 1000;
        document.getElementById('literInput').value = liter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${cc.toLocaleString()} cc = ${liter} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('ccInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const ccValue = document.getElementById('ccInput').value;
    
    document.getElementById('literInput').value = ccValue;
    document.getElementById('ccInput').value = literValue;
    
    if (ccValue) {
        convertLiterToCC(parseFloat(ccValue));
    } else if (literValue) {
        convertCCToLiter(parseFloat(literValue));
    }
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', function() {
    convertLiterToCC(parseFloat(this.value));
});

document.getElementById('ccInput').addEventListener('input', function() {
    convertCCToLiter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
