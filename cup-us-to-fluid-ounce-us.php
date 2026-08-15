<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cup US to Fluid Ounce US Converter 2026 - cup to fl oz Calculator | Thiyagi</title>
<meta name="description" content="Free online Cup US to Fluid Ounce US converter 2026. Convert cup to fl oz and fl oz to cup instantly with accurate cooking measurement conversion.">
<meta name="keywords" content="cup to fluid ounce converter 2026, cup to fl oz US, cooking measurements, baking converter, kitchen units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cup US to Fluid Ounce US Converter 2026 - cup to fl oz Calculator">
<meta property="og:description" content="Free online Cup US to Fluid Ounce US converter 2026. Convert cup to fl oz and fl oz to cup instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cup-us-to-fluid-ounce-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cup US to Fluid Ounce US Converter 2026 - cup to fl oz Calculator">
<meta name="twitter:description" content="Free online Cup US to Fluid Ounce US converter 2026. Convert cup to fl oz and fl oz to cup instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-glass-whiskey text-violet-600 mr-3"></i>
                Cup US to Fluid Ounce US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US cups and US fluid ounces for perfect cooking measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cup Input -->
                <div class="space-y-4">
                    <label for="cupInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-mug-hot text-violet-600 mr-2"></i>US Cup (cup)
                    </label>
                    <input
                        type="number"
                        id="cupInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter cups"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 cup = 8 fl oz
                    </div>
                </div>

                <!-- Fluid Ounce Input -->
                <div class="space-y-4">
                    <label for="fluidOunceInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-eye-dropper text-purple-600 mr-2"></i>US Fluid Ounce (fl oz)
                    </label>
                    <input
                        type="number"
                        id="fluidOunceInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-xl"
                        placeholder="Enter fluid ounces"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 fl oz = 0.125 cup
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-violet-500 hover:bg-violet-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Cooking Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-violet-600 mr-3"></i>Common Cooking Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cups</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Fluid Ounces</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1/8 (0.125)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/4 (0.25)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/3 (0.333)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.67</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1/2 (0.5)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3/4 (0.75)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">6</td>
                            </tr>
                            <tr>
                                <td class="py-2">1</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recipe Equivalents -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-book-open text-violet-600 mr-3"></i>Recipe Equivalents
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-violet-50 p-3 rounded">
                        <strong>Liquid Ingredients:</strong><br>
                        • 1 cup milk = 8 fl oz<br>
                        • 1 cup water = 8 fl oz<br>
                        • 1 cup juice = 8 fl oz<br>
                        • 1 cup oil = 8 fl oz
                    </div>
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Baking Liquids:</strong><br>
                        • 1/2 cup cream = 4 fl oz<br>
                        • 1/4 cup vanilla = 2 fl oz<br>
                        • 1/3 cup honey = 2.67 fl oz<br>
                        • 3/4 cup buttermilk = 6 fl oz
                    </div>
                    <div class="bg-fuchsia-50 p-3 rounded">
                        <strong>Beverage Measurements:</strong><br>
                        • Standard coffee cup = 6 fl oz<br>
                        • Tea cup = 6 fl oz<br>
                        • Juice glass = 4-6 fl oz<br>
                        • Water glass = 8 fl oz
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-violet-600 mr-2"></i>US Measurement System
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cup:</strong> 8 fluid ounces</li>
                    <li><strong>Fluid Ounce:</strong> 1/8 cup</li>
                    <li><strong>Standard:</strong> US customary units</li>
                    <li><strong>Volume:</strong> 1 cup = 236.588 mL</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Cooking Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Use liquid measuring cups for fluids</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Read at eye level for accuracy</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>1 cup = 16 tablespoons</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>2 cups = 1 pint</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-violet-600 mr-2"></i>Kitchen Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Baking:</strong> Precise liquid measurements</li>
                    <li><strong>Cooking:</strong> Sauce and soup preparation</li>
                    <li><strong>Beverages:</strong> Drink preparation</li>
                    <li><strong>Nutrition:</strong> Portion control</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCupToFluidOunce(cups) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(cups) && cups !== '') {
        const fluidOunces = cups * 8;
        document.getElementById('fluidOunceInput').value = fluidOunces.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${cups} cup = ${fluidOunces.toFixed(6)} fl oz</strong>
        `;
    } else {
        document.getElementById('fluidOunceInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertFluidOunceToCup(fluidOunces) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(fluidOunces) && fluidOunces !== '') {
        const cups = fluidOunces / 8;
        document.getElementById('cupInput').value = cups.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-violet-600 mr-2"></i>
            <strong>${fluidOunces} fl oz = ${cups.toFixed(6)} cup</strong>
        `;
    } else {
        document.getElementById('cupInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('cupInput').value = '';
    document.getElementById('fluidOunceInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cupValue = document.getElementById('cupInput').value;
    const fluidOunceValue = document.getElementById('fluidOunceInput').value;
    
    document.getElementById('cupInput').value = fluidOunceValue;
    document.getElementById('fluidOunceInput').value = cupValue;
    
    if (fluidOunceValue) {
        convertCupToFluidOunce(parseFloat(fluidOunceValue));
    } else if (cupValue) {
        convertFluidOunceToCup(parseFloat(cupValue));
    }
}

// Add event listeners
document.getElementById('cupInput').addEventListener('input', function() {
    convertCupToFluidOunce(parseFloat(this.value));
});

document.getElementById('fluidOunceInput').addEventListener('input', function() {
    convertFluidOunceToCup(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
