<?php include 'header.php'; ?>
<title>Grams to Milligrams Converter 2026 | Weight Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert grams to milligrams instantly with our 2026 accurate weight converter. Perfect for medicine, cooking, and precise measurements.">
<meta name="keywords" content="grams to milligrams converter 2026, weight conversion calculator, gram mg converter, medicine dosage, cooking measurements">

<div class="min-h-screen bg-gradient-to-br from-violet-50 to-purple-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-violet-600 hover:text-violet-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/grams-to-pounds.php" class="text-violet-600 hover:text-violet-800">Weight Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Grams to Milligrams Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-weight text-violet-600 mr-3"></i>
                    Grams to Milligrams Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Grams (g) to Milligrams (mg) instantly with our professional weight converter. 
                    Perfect for medication dosage, laboratory work, chemistry, and precise measurements.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="gramsInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-balance-scale mr-2 text-violet-600"></i>Grams (g)
                        </label>
                        <input
                            type="number"
                            id="gramsInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 text-lg"
                            placeholder="Enter grams"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-violet-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-violet-800 mb-2">Common Weights:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setGrams(1)" class="text-violet-600 hover:text-violet-800 text-left">1 g</button>
                            <button onclick="setGrams(0.5)" class="text-violet-600 hover:text-violet-800 text-left">0.5 g</button>
                            <button onclick="setGrams(2)" class="text-violet-600 hover:text-violet-800 text-left">2 g</button>
                            <button onclick="setGrams(5)" class="text-violet-600 hover:text-violet-800 text-left">5 g</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-pills mr-2 text-pink-600"></i>Milligrams (mg)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="milligramsOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-violet-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-pink-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-pink-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-pink-700">Milligrams = Grams × 1000</p>
                        <p class="text-xs text-pink-600 mt-1">1 Gram = 1000 Milligrams</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-prescription-bottle text-violet-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Medical Dosage</h4>
                    <p class="text-sm text-gray-600">Drug calculations</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-flask text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Laboratory</h4>
                    <p class="text-sm text-gray-600">Chemical measurements</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-utensils text-green-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Nutrition</h4>
                    <p class="text-sm text-gray-600">Supplement dosing</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-violet-600"></i>
                Grams to Milligrams Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-violet-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Grams (g)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Milligrams (mg)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">0.1 g</td><td class="border border-gray-300 px-4 py-2">100 mg</td><td class="border border-gray-300 px-4 py-2">Small pill</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">0.25 g</td><td class="border border-gray-300 px-4 py-2">250 mg</td><td class="border border-gray-300 px-4 py-2">Antibiotic dose</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">0.5 g</td><td class="border border-gray-300 px-4 py-2">500 mg</td><td class="border border-gray-300 px-4 py-2">Painkiller dose</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">1.0 g</td><td class="border border-gray-300 px-4 py-2">1000 mg</td><td class="border border-gray-300 px-4 py-2">Large supplement</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">2.0 g</td><td class="border border-gray-300 px-4 py-2">2000 mg</td><td class="border border-gray-300 px-4 py-2">High-dose vitamin</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">5.0 g</td><td class="border border-gray-300 px-4 py-2">5000 mg</td><td class="border border-gray-300 px-4 py-2">Protein powder</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-violet-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many milligrams are in a gram?</h3>
                    <p class="text-gray-600">There are exactly 1,000 milligrams in one gram. To convert, multiply grams by 1000.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why convert grams to milligrams?</h3>
                    <p class="text-gray-600">Milligrams are used for precise dosing in medicine, laboratory work, and nutrition where accuracy is critical and grams would result in small decimal numbers.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this conversion used in medicine?</h3>
                    <p class="text-gray-600">Yes, most medications are dosed in milligrams because it provides the precision needed for safe and effective treatment while avoiding decimal errors.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When is gram measurement preferred?</h3>
                    <p class="text-gray-600">Grams are preferred for cooking ingredients, nutritional labels, and larger quantities where milligrams would result in very large numbers.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-violet-600"></i>
                Related Weight Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/milligrams-to-grams.php" class="block p-4 bg-violet-50 rounded-lg hover:bg-violet-100 transition-colors">
                    <i class="fas fa-weight text-violet-600 mb-2"></i>
                    <h3 class="font-semibold text-violet-800">Milligrams to Grams</h3>
                    <p class="text-sm text-violet-600">Reverse conversion</p>
                </a>
                <a href="/grams-to-ounces.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-balance-scale text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Grams to Ounces</h3>
                    <p class="text-sm text-blue-600">Convert g to oz</p>
                </a>
                <a href="/gram-to-kg.php" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                    <i class="fas fa-weight-hanging text-green-600 mb-2"></i>
                    <h3 class="font-semibold text-green-800">Grams to Kilograms</h3>
                    <p class="text-sm text-green-600">Convert g to kg</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertGramsToMilligrams() {
    const gramsInput = document.getElementById('gramsInput').value;
    const milligramsOutput = document.getElementById('milligramsOutput');
    
    if (gramsInput === '' || isNaN(gramsInput)) {
        milligramsOutput.value = '';
        return;
    }
    
    const grams = parseFloat(gramsInput);
    const milligrams = grams * 1000;
    
    // Format the result with appropriate decimal places
    if (milligrams >= 1000) {
        milligramsOutput.value = milligrams.toFixed(0);
    } else if (milligrams >= 100) {
        milligramsOutput.value = milligrams.toFixed(1);
    } else {
        milligramsOutput.value = milligrams.toFixed(2);
    }
}

function setGrams(value) {
    document.getElementById('gramsInput').value = value;
    convertGramsToMilligrams();
}

function copyResult() {
    const milligramsOutput = document.getElementById('milligramsOutput');
    milligramsOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('gramsInput').addEventListener('input', convertGramsToMilligrams);

// Handle Enter key
document.getElementById('gramsInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertGramsToMilligrams();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Grams to Milligrams Converter",
  "description": "Convert Grams (g) to Milligrams (mg) instantly with our professional weight converter.",
  "url": "https://www.thiyagi.com/grams-to-milligrams.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant grams to milligrams conversion",
    "Medical dosage calculations",
    "Laboratory precision",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
