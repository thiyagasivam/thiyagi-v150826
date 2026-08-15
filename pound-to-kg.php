<?php include 'header.php'; ?>
<title>Pound to KG Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert pounds to kilograms instantly with our free pound to kg converter. Accurate weight conversion for fitness, health, cooking, and international measurements. Easy-to-use calculator.">
<meta name="keywords" content="pound to kg, lb to kilogram, weight conversion, fitness calculator, health measurements, body weight conversion, cooking measurements">
<meta property="og:title" content="Pound to KG Converter - Accurate Weight Conversion Tool">
<meta property="og:description" content="Convert pounds to kilograms with precision. Perfect for fitness, health, cooking, and international weight calculations. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/pound-to-kg">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pound to KG Converter - Accurate Weight Conversion">
<meta name="twitter:description" content="Convert pounds to kilograms instantly. Perfect for fitness, health, and cooking applications.">
<meta name="twitter:url" content="https://www.thiyagi.com/pound-to-kg">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Pound to KG Converter",
    "description": "Convert pounds to kilograms with our accurate weight conversion tool",
    "url": "https://www.thiyagi.com/pound-to-kg",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Pound to kilogram conversion", "Fitness calculations", "Health measurements"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-blue-100 via-blue-50 to-blue-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-blue-800 mb-4 flex items-center justify-center">
                <i class="fas fa-dumbbell text-blue-600 mr-3"></i>
                Pound to KG Converter
            </h1>
            <p class="text-lg text-blue-600 max-w-2xl mx-auto">
                Convert pounds to kilograms instantly with precision. Perfect for fitness tracking, health monitoring, cooking measurements, and international weight conversions.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #2563EB;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="poundInput" class="block text-sm font-medium text-blue-700 mb-2">
                        <i class="fas fa-weight-hanging text-blue-600 mr-2"></i>Pounds (lbs)
                    </label>
                    <input type="number" id="poundInput" placeholder="Enter pounds" 
                           class="w-full px-4 py-3 border-2 border-blue-300 rounded-lg focus:border-blue-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="kgOutput" class="block text-sm font-medium text-blue-700 mb-2">
                        <i class="fas fa-balance-scale text-blue-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <div class="relative">
                        <input type="text" id="kgOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-blue-200 rounded-lg bg-blue-50 text-lg font-semibold text-blue-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setPounds(100)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors">100 lbs</button>
                <button onclick="setPounds(150)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors">150 lbs</button>
                <button onclick="setPounds(200)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors">200 lbs</button>
                <button onclick="setPounds(250)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors">250 lbs</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-blue-800 mb-4 flex items-center">
                <i class="fas fa-link text-blue-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/kg-to-pound" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">KG to Pound</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">KG to LBS</a>
                <a href="/stone-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Stone to KG</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-blue-800 mb-4 flex items-center">
                <i class="fas fa-table text-blue-600 mr-2"></i>Pound to KG Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-blue-50">
                            <th class="border border-blue-300 px-4 py-2 text-blue-700">Pounds</th>
                            <th class="border border-blue-300 px-4 py-2 text-blue-700">Kilograms</th>
                            <th class="border border-blue-300 px-4 py-2 text-blue-700">Pounds</th>
                            <th class="border border-blue-300 px-4 py-2 text-blue-700">Kilograms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-blue-300 px-4 py-2">10</td><td class="border border-blue-300 px-4 py-2">4.54 kg</td><td class="border border-blue-300 px-4 py-2">180</td><td class="border border-blue-300 px-4 py-2">81.65 kg</td></tr>
                        <tr class="bg-blue-50"><td class="border border-blue-300 px-4 py-2">50</td><td class="border border-blue-300 px-4 py-2">22.68 kg</td><td class="border border-blue-300 px-4 py-2">200</td><td class="border border-blue-300 px-4 py-2">90.72 kg</td></tr>
                        <tr><td class="border border-blue-300 px-4 py-2">100</td><td class="border border-blue-300 px-4 py-2">45.36 kg</td><td class="border border-blue-300 px-4 py-2">220</td><td class="border border-blue-300 px-4 py-2">99.79 kg</td></tr>
                        <tr class="bg-blue-50"><td class="border border-blue-300 px-4 py-2">120</td><td class="border border-blue-300 px-4 py-2">54.43 kg</td><td class="border border-blue-300 px-4 py-2">250</td><td class="border border-blue-300 px-4 py-2">113.40 kg</td></tr>
                        <tr><td class="border border-blue-300 px-4 py-2">140</td><td class="border border-blue-300 px-4 py-2">63.50 kg</td><td class="border border-blue-300 px-4 py-2">300</td><td class="border border-blue-300 px-4 py-2">136.08 kg</td></tr>
                        <tr class="bg-blue-50"><td class="border border-blue-300 px-4 py-2">150</td><td class="border border-blue-300 px-4 py-2">68.04 kg</td><td class="border border-blue-300 px-4 py-2">400</td><td class="border border-blue-300 px-4 py-2">181.44 kg</td></tr>
                        <tr><td class="border border-blue-300 px-4 py-2">160</td><td class="border border-blue-300 px-4 py-2">72.57 kg</td><td class="border border-blue-300 px-4 py-2">500</td><td class="border border-blue-300 px-4 py-2">226.80 kg</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-blue-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-blue-600 mr-2"></i>About Pound to KG Conversion
            </h2>
            <div class="prose text-blue-600 max-w-none">
                <p class="mb-4">
                    <strong>Pound to Kilogram conversion</strong> is essential for fitness tracking, health monitoring, cooking, and international weight measurements. One pound equals approximately 0.453592 kilograms.
                </p>
                <h3 class="text-lg font-semibold text-blue-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>Fitness & Health:</strong> Body weight tracking, BMI calculations, weight loss goals</li>
                    <li><strong>Cooking & Baking:</strong> Recipe conversions and ingredient measurements</li>
                    <li><strong>International Travel:</strong> Understanding weight measurements in different countries</li>
                    <li><strong>Sports & Athletics:</strong> Weight classes in boxing, wrestling, and weightlifting</li>
                    <li><strong>Medical Applications:</strong> Patient weight records and dosage calculations</li>
                </ul>
                <h3 class="text-lg font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                <p class="bg-blue-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Kilograms = Pounds × 0.453592
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function convertPoundToKg() {
    const poundInput = document.getElementById('poundInput');
    const kgOutput = document.getElementById('kgOutput');
    
    const pounds = parseFloat(poundInput.value);
    
    if (isNaN(pounds) || pounds < 0) {
        kgOutput.value = '';
        return;
    }
    
    const kg = pounds * 0.453592;
    kgOutput.value = kg.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' kg';
}

function setPounds(value) {
    document.getElementById('poundInput').value = value;
    convertPoundToKg();
}

function clearAll() {
    document.getElementById('poundInput').value = '';
    document.getElementById('kgOutput').value = '';
}

function copyResult() {
    const result = document.getElementById('kgOutput');
    result.select();
    document.execCommand('copy');
    
    // Show feedback
    const button = event.target;
    const originalClass = button.className;
    button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
    setTimeout(() => {
        button.innerHTML = '<i class="fas fa-copy"></i>';
    }, 1000);
}

// Event listeners
document.getElementById('poundInput').addEventListener('input', convertPoundToKg);

// Initialize
convertPoundToKg();
</script>

<?php include 'footer.php'; ?>
