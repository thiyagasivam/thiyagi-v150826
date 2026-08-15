<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Deciliter to Milliliter Converter 2026 - dL to mL | Thiyagi</title>
<meta name="description" content="Free online deciliter to milliliter converter 2026. Convert dL to mL instantly with accurate volume conversion formula: mL = dL × 100.">
<meta name="keywords" content="deciliter to milliliter 2026, dL to mL converter, volume converter, laboratory measurement, cooking converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Deciliter to Milliliter Converter 2026 - dL to mL">
<meta property="og:description" content="Free online deciliter to milliliter converter 2026. Convert dL to mL instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/deciliter-to-milliliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Deciliter to Milliliter Converter 2026 - dL to mL">
<meta name="twitter:description" content="Free online deciliter to milliliter converter 2026. Convert dL to mL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-flask text-blue-600 mr-3"></i>
                Deciliter to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert deciliters to milliliters instantly with precision - Perfect for laboratory and cooking measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Input Section -->
                <div class="space-y-4">
                    <label for="deciliterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-blue-600 mr-2"></i>Deciliters (dL)
                    </label>
                    <input
                        type="number"
                        id="deciliterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter deciliters"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        Enter the volume in deciliters
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-4">
                    <label for="milliliterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-vial text-teal-600 mr-2"></i>Milliliters (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg bg-gray-50"
                        placeholder="Result in milliliters"
                        readonly
                    >
                    <div class="text-sm text-gray-500">
                        Result in milliliters (automatic calculation)
                    </div>
                </div>
            </div>

            <!-- Formula Display -->
            <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    <i class="fas fa-calculator text-blue-600 mr-2"></i>Conversion Formula
                </h3>
                <p class="text-gray-700">
                    <span class="font-mono bg-white px-2 py-1 rounded">mL = dL × 100</span>
                </p>
                <p class="text-sm text-gray-600 mt-2">
                    One deciliter equals 100 milliliters
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Reverse (mL to dL)
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Quick Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Deciliters (dL)</th>
                                <th class="text-right py-2">Milliliters (mL)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 dL</td>
                                <td class="text-right">10 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 dL</td>
                                <td class="text-right">50 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 dL</td>
                                <td class="text-right">100 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 dL</td>
                                <td class="text-right">200 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 dL</td>
                                <td class="text-right">500 mL</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 dL</td>
                                <td class="text-right">1,000 mL</td>
                            </tr>
                            <tr>
                                <td class="py-2">25 dL</td>
                                <td class="text-right">2,500 mL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Volume Context -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-info-circle text-blue-600 mr-3"></i>Volume Context
                </h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <div class="flex items-center">
                        <i class="fas fa-coffee text-brown-600 mr-2"></i>
                        <span><strong>1 dL:</strong> Small coffee cup (100 mL)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-wine-glass text-purple-600 mr-2"></i>
                        <span><strong>1.5 dL:</strong> Wine glass (150 mL)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-glass-water text-blue-600 mr-2"></i>
                        <span><strong>2 dL:</strong> Water glass (200 mL)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-flask text-green-600 mr-2"></i>
                        <span><strong>2.5 dL:</strong> Lab beaker (250 mL)</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-bottle-water text-cyan-600 mr-2"></i>
                        <span><strong>5 dL:</strong> Water bottle (500 mL)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-microscope text-blue-600 mr-2"></i>Laboratory Use
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Chemical experiments</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Solution preparation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Medical measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Research applications</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Quality control</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-utensils text-blue-600 mr-2"></i>Cooking Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Recipe measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Liquid ingredients</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Beverage preparation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Sauce quantities</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Baking measurements</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Precision:</strong> Use appropriate tools</li>
                    <li><strong>Temperature:</strong> Consider liquid density</li>
                    <li><strong>Reading:</strong> Eye level measurement</li>
                    <li><strong>Accuracy:</strong> Multiple measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertDeciliterToMilliliter() {
    const deciliter = parseFloat(document.getElementById('deciliterInput').value);
    const milliliterOutput = document.getElementById('milliliterOutput');
    
    if (!isNaN(deciliter) && deciliter !== '') {
        const milliliter = deciliter * 100;
        milliliterOutput.value = milliliter.toFixed(6);
    } else {
        milliliterOutput.value = '';
    }
}

function convertMilliliterToDeciliter() {
    const milliliter = parseFloat(document.getElementById('milliliterOutput').value);
    const deciliterInput = document.getElementById('deciliterInput');
    
    if (!isNaN(milliliter) && milliliter !== '') {
        const deciliter = milliliter / 100;
        deciliterInput.value = deciliter.toFixed(6);
    } else {
        deciliterInput.value = '';
    }
}

function clearValues() {
    document.getElementById('deciliterInput').value = '';
    document.getElementById('milliliterOutput').value = '';
}

function swapValues() {
    const deciliterInput = document.getElementById('deciliterInput');
    const milliliterOutput = document.getElementById('milliliterOutput');
    
    // Make output field editable and input field readonly
    if (milliliterOutput.readOnly) {
        milliliterOutput.readOnly = false;
        milliliterOutput.classList.remove('bg-gray-50');
        deciliterInput.readOnly = true;
        deciliterInput.classList.add('bg-gray-50');
        
        // Update labels
        document.querySelector('label[for="deciliterInput"]').innerHTML = '<i class="fas fa-flask text-blue-600 mr-2"></i>Deciliters (dL) - Result';
        document.querySelector('label[for="milliliterOutput"]').innerHTML = '<i class="fas fa-vial text-teal-600 mr-2"></i>Milliliters (mL) - Input';
        
        // Clear values and set new event listener
        clearValues();
        milliliterOutput.removeEventListener('input', convertDeciliterToMilliliter);
        milliliterOutput.addEventListener('input', convertMilliliterToDeciliter);
    } else {
        milliliterOutput.readOnly = true;
        milliliterOutput.classList.add('bg-gray-50');
        deciliterInput.readOnly = false;
        deciliterInput.classList.remove('bg-gray-50');
        
        // Reset labels
        document.querySelector('label[for="deciliterInput"]').innerHTML = '<i class="fas fa-flask text-blue-600 mr-2"></i>Deciliters (dL)';
        document.querySelector('label[for="milliliterOutput"]').innerHTML = '<i class="fas fa-vial text-teal-600 mr-2"></i>Milliliters (mL)';
        
        // Clear values and reset event listener
        clearValues();
        milliliterOutput.removeEventListener('input', convertMilliliterToDeciliter);
        deciliterInput.addEventListener('input', convertDeciliterToMilliliter);
    }
}

// Add event listener for real-time conversion
document.getElementById('deciliterInput').addEventListener('input', convertDeciliterToMilliliter);
</script>

<?php include 'footer.php'; ?>
