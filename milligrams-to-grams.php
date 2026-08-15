<?php include 'header.php'; ?>
<title>Milligrams to Grams Converter 2026 | Weight Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert milligrams to grams instantly with our 2026 accurate weight converter. Perfect for medicine, cooking, and precise measurements.">
<meta name="keywords" content="milligrams to grams converter 2026, weight conversion calculator, mg gram converter, medicine dosage, cooking measurements">

<div class="min-h-screen bg-gradient-to-br from-pink-50 to-rose-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-pink-600 hover:text-pink-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/grams-to-pounds.php" class="text-pink-600 hover:text-pink-800">Weight Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Milligrams to Grams Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-pills text-pink-600 mr-3"></i>
                    Milligrams to Grams Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Milligrams (mg) to Grams (g) instantly with our professional weight converter. 
                    Perfect for medication dosage, laboratory work, jewelry, and precise measurements.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="milligramsInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-prescription-bottle mr-2 text-pink-600"></i>Milligrams (mg)
                        </label>
                        <input
                            type="number"
                            id="milligramsInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500 text-lg"
                            placeholder="Enter milligrams"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-pink-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-pink-800 mb-2">Common Dosages:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setMilligrams(500)" class="text-pink-600 hover:text-pink-800 text-left">500 mg</button>
                            <button onclick="setMilligrams(1000)" class="text-pink-600 hover:text-pink-800 text-left">1000 mg (1 g)</button>
                            <button onclick="setMilligrams(250)" class="text-pink-600 hover:text-pink-800 text-left">250 mg</button>
                            <button onclick="setMilligrams(100)" class="text-pink-600 hover:text-pink-800 text-left">100 mg</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-weight mr-2 text-blue-600"></i>Grams (g)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="gramsOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-pink-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-blue-700">Grams = Milligrams ÷ 1000</p>
                        <p class="text-xs text-blue-600 mt-1">1 Gram = 1000 Milligrams</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-capsules text-pink-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Medical Dosage</h4>
                    <p class="text-sm text-gray-600">Medication calculations</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-microscope text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Laboratory Work</h4>
                    <p class="text-sm text-gray-600">Scientific precision</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-gem text-yellow-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Jewelry Making</h4>
                    <p class="text-sm text-gray-600">Precious metal weights</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-pink-600"></i>
                Milligrams to Grams Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-pink-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Milligrams (mg)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Grams (g)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">10 mg</td><td class="border border-gray-300 px-4 py-2">0.01 g</td><td class="border border-gray-300 px-4 py-2">Vitamin tablet</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">100 mg</td><td class="border border-gray-300 px-4 py-2">0.1 g</td><td class="border border-gray-300 px-4 py-2">Small medication</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">250 mg</td><td class="border border-gray-300 px-4 py-2">0.25 g</td><td class="border border-gray-300 px-4 py-2">Antibiotic dose</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">500 mg</td><td class="border border-gray-300 px-4 py-2">0.5 g</td><td class="border border-gray-300 px-4 py-2">Painkiller dose</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">1000 mg</td><td class="border border-gray-300 px-4 py-2">1.0 g</td><td class="border border-gray-300 px-4 py-2">Standard gram</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">5000 mg</td><td class="border border-gray-300 px-4 py-2">5.0 g</td><td class="border border-gray-300 px-4 py-2">Large supplement</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-pink-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many milligrams are in a gram?</h3>
                    <p class="text-gray-600">There are exactly 1,000 milligrams in one gram. This is a fundamental metric system conversion.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this conversion important for medication?</h3>
                    <p class="text-gray-600">Yes, medication dosages are often measured in milligrams, and this converter helps ensure accurate dosing and understanding of prescription instructions.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What's the difference between mg and g?</h3>
                    <p class="text-gray-600">Milligrams (mg) are 1/1000th of a gram. Milligrams are used for very small, precise measurements, while grams are used for larger quantities.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why use milligrams instead of grams?</h3>
                    <p class="text-gray-600">Milligrams provide more precision for small quantities. It's easier to say "500 mg" than "0.5 g" and reduces decimal point errors in medical contexts.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-pink-600"></i>
                Related Weight Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/grams-to-milligrams.php" class="block p-4 bg-pink-50 rounded-lg hover:bg-pink-100 transition-colors">
                    <i class="fas fa-pills text-pink-600 mb-2"></i>
                    <h3 class="font-semibold text-pink-800">Grams to Milligrams</h3>
                    <p class="text-sm text-pink-600">Reverse conversion</p>
                </a>
                <a href="/grams-to-ounces.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-weight text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Grams to Ounces</h3>
                    <p class="text-sm text-blue-600">Convert g to oz</p>
                </a>
                <a href="/gram-to-kg.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-balance-scale text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Grams to Kilograms</h3>
                    <p class="text-sm text-purple-600">Convert g to kg</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMilligramsToGrams() {
    const milligramsInput = document.getElementById('milligramsInput').value;
    const gramsOutput = document.getElementById('gramsOutput');
    
    if (milligramsInput === '' || isNaN(milligramsInput)) {
        gramsOutput.value = '';
        return;
    }
    
    const milligrams = parseFloat(milligramsInput);
    const grams = milligrams / 1000;
    
    // Format the result with appropriate decimal places
    if (grams >= 1) {
        gramsOutput.value = grams.toFixed(3);
    } else if (grams >= 0.1) {
        gramsOutput.value = grams.toFixed(4);
    } else {
        gramsOutput.value = grams.toFixed(5);
    }
}

function setMilligrams(value) {
    document.getElementById('milligramsInput').value = value;
    convertMilligramsToGrams();
}

function copyResult() {
    const gramsOutput = document.getElementById('gramsOutput');
    gramsOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('milligramsInput').addEventListener('input', convertMilligramsToGrams);

// Handle Enter key
document.getElementById('milligramsInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertMilligramsToGrams();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Milligrams to Grams Converter",
  "description": "Convert Milligrams (mg) to Grams (g) instantly with our professional weight converter.",
  "url": "https://www.thiyagi.com/milligrams-to-grams.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant milligrams to grams conversion",
    "Medical dosage calculations",
    "Laboratory precision",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
