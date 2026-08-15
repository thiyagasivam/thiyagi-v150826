<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Teaspoon US to Cup US Converter 2026 - tsp to cup | Thiyagi</title>
<meta name="description" content="Free online teaspoon US to cup US converter 2026. Convert tsp to cup instantly with accurate formula: cup = tsp ÷ 48.">
<meta name="keywords" content="teaspoon to cup 2026, tsp to cup converter, US cooking measurements, recipe converter, kitchen calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Teaspoon US to Cup US Converter 2026 - tsp to cup">
<meta property="og:description" content="Free online teaspoon US to cup US converter 2026. Convert tsp to cup instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/teaspoon-us-to-cup-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Teaspoon US to Cup US Converter 2026 - tsp to cup">
<meta name="twitter:description" content="Free online teaspoon US to cup US converter 2026. Convert tsp to cup instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-pink-50 via-rose-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-coffee text-pink-600 mr-3"></i>
                Teaspoon US to Cup US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US teaspoons to US cups instantly - Perfect for cooking and baking recipes
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Input Section -->
                <div class="space-y-4">
                    <label for="teaspoonInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-utensil-spoon text-pink-600 mr-2"></i>Teaspoons US (tsp)
                    </label>
                    <input
                        type="number"
                        id="teaspoonInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg"
                        placeholder="Enter teaspoons"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        Enter the volume in US teaspoons
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-4">
                    <label for="cupOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-mug-hot text-red-600 mr-2"></i>Cups US (cup)
                    </label>
                    <input
                        type="number"
                        id="cupOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent text-lg bg-gray-50"
                        placeholder="Result in cups"
                        readonly
                    >
                    <div class="text-sm text-gray-500">
                        Result in US cups (automatic calculation)
                    </div>
                </div>
            </div>

            <!-- Formula Display -->
            <div class="mt-8 p-4 bg-pink-50 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    <i class="fas fa-calculator text-pink-600 mr-2"></i>Conversion Formula
                </h3>
                <p class="text-gray-700">
                    <span class="font-mono bg-white px-2 py-1 rounded">cup = tsp ÷ 48</span>
                </p>
                <p class="text-sm text-gray-600 mt-2">
                    One US cup equals 48 US teaspoons
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
                    class="flex-1 min-w-[140px] bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Reverse (cup to tsp)
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Common Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-pink-600 mr-3"></i>Quick Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Teaspoons (tsp)</th>
                                <th class="text-right py-2">Cups (cup)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 tsp</td>
                                <td class="text-right">0.021 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3 tsp (1 tbsp)</td>
                                <td class="text-right">0.063 cup</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">6 tsp</td>
                                <td class="text-right">0.125 cup (1/8)</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12 tsp</td>
                                <td class="text-right">0.25 cup (1/4)</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">24 tsp</td>
                                <td class="text-right">0.5 cup (1/2)</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">48 tsp</td>
                                <td class="text-right">1 cup</td>
                            </tr>
                            <tr>
                                <td class="py-2">96 tsp</td>
                                <td class="text-right">2 cups</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recipe Equivalents -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-book-open text-pink-600 mr-3"></i>Recipe Equivalents
                </h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>1 tsp</span>
                        <span>1/3 tablespoon</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>3 tsp</span>
                        <span>1 tablespoon</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>6 tsp</span>
                        <span>1/8 cup</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>12 tsp</span>
                        <span>1/4 cup</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>16 tsp</span>
                        <span>1/3 cup</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>24 tsp</span>
                        <span>1/2 cup</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>32 tsp</span>
                        <span>2/3 cup</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-utensil-spoon text-pink-600 mr-1"></i>36 tsp</span>
                        <span>3/4 cup</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-cookie-bite text-pink-600 mr-2"></i>Baking Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Vanilla extract (1-2 tsp)</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Baking powder (1-3 tsp)</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Salt (1/2-1 tsp)</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Spices and seasonings</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Lemon juice (1-2 tsp)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-utensils text-pink-600 mr-2"></i>Cooking Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Level teaspoons for accuracy</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Use proper measuring spoons</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Liquid vs dry ingredients</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Room temperature measurements</li>
                    <li><i class="fas fa-check text-pink-600 mr-2"></i>Double-check recipe units</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe-americas text-pink-600 mr-2"></i>US Measurements
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US Teaspoon:</strong> 4.928922 mL</li>
                    <li><strong>US Cup:</strong> 236.588236 mL</li>
                    <li><strong>Ratio:</strong> 1 cup = 48 teaspoons</li>
                    <li><strong>Standard:</strong> US customary system</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertTeaspoonToCup() {
    const teaspoon = parseFloat(document.getElementById('teaspoonInput').value);
    const cupOutput = document.getElementById('cupOutput');
    
    if (!isNaN(teaspoon) && teaspoon !== '') {
        const cup = teaspoon / 48;
        cupOutput.value = cup.toFixed(8);
    } else {
        cupOutput.value = '';
    }
}

function convertCupToTeaspoon() {
    const cup = parseFloat(document.getElementById('cupOutput').value);
    const teaspoonInput = document.getElementById('teaspoonInput');
    
    if (!isNaN(cup) && cup !== '') {
        const teaspoon = cup * 48;
        teaspoonInput.value = teaspoon.toFixed(6);
    } else {
        teaspoonInput.value = '';
    }
}

function clearValues() {
    document.getElementById('teaspoonInput').value = '';
    document.getElementById('cupOutput').value = '';
}

function swapValues() {
    const teaspoonInput = document.getElementById('teaspoonInput');
    const cupOutput = document.getElementById('cupOutput');
    
    // Make output field editable and input field readonly
    if (cupOutput.readOnly) {
        cupOutput.readOnly = false;
        cupOutput.classList.remove('bg-gray-50');
        teaspoonInput.readOnly = true;
        teaspoonInput.classList.add('bg-gray-50');
        
        // Update labels
        document.querySelector('label[for="teaspoonInput"]').innerHTML = '<i class="fas fa-utensil-spoon text-pink-600 mr-2"></i>Teaspoons US (tsp) - Result';
        document.querySelector('label[for="cupOutput"]').innerHTML = '<i class="fas fa-mug-hot text-red-600 mr-2"></i>Cups US (cup) - Input';
        
        // Clear values and set new event listener
        clearValues();
        cupOutput.removeEventListener('input', convertTeaspoonToCup);
        cupOutput.addEventListener('input', convertCupToTeaspoon);
    } else {
        cupOutput.readOnly = true;
        cupOutput.classList.add('bg-gray-50');
        teaspoonInput.readOnly = false;
        teaspoonInput.classList.remove('bg-gray-50');
        
        // Reset labels
        document.querySelector('label[for="teaspoonInput"]').innerHTML = '<i class="fas fa-utensil-spoon text-pink-600 mr-2"></i>Teaspoons US (tsp)';
        document.querySelector('label[for="cupOutput"]').innerHTML = '<i class="fas fa-mug-hot text-red-600 mr-2"></i>Cups US (cup)';
        
        // Clear values and reset event listener
        clearValues();
        cupOutput.removeEventListener('input', convertCupToTeaspoon);
        teaspoonInput.addEventListener('input', convertTeaspoonToCup);
    }
}

// Add event listener for real-time conversion
document.getElementById('teaspoonInput').addEventListener('input', convertTeaspoonToCup);
</script>

<?php include 'footer.php'; ?>
