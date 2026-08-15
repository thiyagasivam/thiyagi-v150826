<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>CC to Liter Converter 2026 - cubic centimeter to L Calculator | Thiyagi</title>
<meta name="description" content="Free online CC to Liter converter 2026. Convert cubic centimeter to liter and liter to cc instantly with accurate volume conversion.">
<meta name="keywords" content="cc to liter converter 2026, cubic centimeter to liter, cc to L, volume conversion, liquid measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="CC to Liter Converter 2026 - cubic centimeter to L Calculator">
<meta property="og:description" content="Free online CC to Liter converter 2026. Convert cubic centimeter to liter and liter to cc instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cc-to-liter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="CC to Liter Converter 2026 - cubic centimeter to L Calculator">
<meta property="twitter:description" content="Free online CC to Liter converter 2026. Convert cubic centimeter to liter and liter to cc instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-emerald-600 mr-3"></i>
                CC to Liter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic centimeters (cc) and liters (L) for medical dosing, automotive, and laboratory measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- CC Input -->
                <div class="space-y-4">
                    <label for="ccInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-emerald-600 mr-2"></i>Cubic Centimeters (cc)
                    </label>
                    <input
                        type="number"
                        id="ccInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1,000 cc = 1 liter
                    </div>
                </div>

                <!-- Liter Input -->
                <div class="space-y-4">
                    <label for="literInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-wine-bottle text-teal-600 mr-2"></i>Liters (L)
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
                        1 liter = 1,000 cc
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
            <!-- Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-emerald-600 mr-3"></i>Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Centimeters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Liters</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 L</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 L</td>
                            </tr>
                            <tr>
                                <td class="py-2">5,000 cc</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 L</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Volume Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-vial text-emerald-600 mr-3"></i>Common Volume Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Medical & Laboratory:</strong><br>
                        • Syringe dose: 1-20 cc (0.001-0.02 L)<br>
                        • Blood vial: 5-10 cc (0.005-0.01 L)<br>
                        • IV fluid bag: 250-1,000 cc (0.25-1 L)<br>
                        • Medication vial: 2-50 cc
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Automotive:</strong><br>
                        • Engine displacement: 1,000-6,000 cc<br>
                        • Motorcycle engine: 125-1,200 cc<br>
                        • Car engine: 1,200-5,000 cc<br>
                        • Oil capacity: 3,000-8,000 cc
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Household Items:</strong><br>
                        • Teaspoon: 5 cc (0.005 L)<br>
                        • Tablespoon: 15 cc (0.015 L)<br>
                        • Shot glass: 30-45 cc (0.03-0.045 L)<br>
                        • Coffee cup: 240 cc (0.24 L)
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
                    <li><strong>CC:</strong> Cubic centimeter</li>
                    <li><strong>Liter:</strong> SI volume unit</li>
                    <li><strong>Conversion:</strong> 1,000 cc = 1 L</li>
                    <li><strong>Symbol:</strong> cc, cm³, mL</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>cc = mL (milliliter)</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Medical precision</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Automotive specifications</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Laboratory measurements</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-emerald-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medicine:</strong> Drug dosing</li>
                    <li><strong>Automotive:</strong> Engine size</li>
                    <li><strong>Science:</strong> Laboratory work</li>
                    <li><strong>Cooking:</strong> Recipe measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCcToLiter(cc) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cc) && cc !== '') {
        // 1,000 cubic centimeters = 1 liter
        const liter = cc / 1000;
        document.getElementById('literInput').value = liter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${cc.toLocaleString()} cc = ${liter.toLocaleString(undefined, {maximumFractionDigits: 6})} L</strong>
        `;
    } else {
        document.getElementById('literInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertLiterToCc(liter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(liter) && liter !== '') {
        // 1 liter = 1,000 cubic centimeters
        const cc = liter * 1000;
        document.getElementById('ccInput').value = cc;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-emerald-600 mr-2"></i>
            <strong>${liter.toLocaleString()} L = ${cc.toLocaleString()} cc</strong>
        `;
    } else {
        document.getElementById('ccInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ccInput').value = '';
    document.getElementById('literInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ccValue = document.getElementById('ccInput').value;
    const literValue = document.getElementById('literInput').value;
    
    document.getElementById('ccInput').value = literValue;
    document.getElementById('literInput').value = ccValue;
    
    if (literValue) {
        convertCcToLiter(parseFloat(literValue));
    } else if (ccValue) {
        convertLiterToCc(parseFloat(ccValue));
    }
}

// Add event listeners
document.getElementById('ccInput').addEventListener('input', function() {
    convertCcToLiter(parseFloat(this.value));
});

document.getElementById('literInput').addEventListener('input', function() {
    convertLiterToCc(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
