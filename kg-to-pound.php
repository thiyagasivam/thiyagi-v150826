<?php include 'header.php'; ?>
<title>KG to Pound Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert kilograms to pounds instantly with our free kg to pound converter. Accurate weight conversion for fitness, health, cooking, and international measurements. Easy-to-use calculator.">
<meta name="keywords" content="kg to pound, kilogram to lb, weight conversion, fitness calculator, health measurements, body weight conversion, cooking measurements">
<meta property="og:title" content="KG to Pound Converter - Accurate Weight Conversion Tool">
<meta property="og:description" content="Convert kilograms to pounds with precision. Perfect for fitness, health, cooking, and international weight calculations. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/kg-to-pound">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="KG to Pound Converter - Accurate Weight Conversion">
<meta name="twitter:description" content="Convert kilograms to pounds instantly. Perfect for fitness, health, and cooking applications.">
<meta name="twitter:url" content="https://www.thiyagi.com/kg-to-pound">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "KG to Pound Converter",
    "description": "Convert kilograms to pounds with our accurate weight conversion tool",
    "url": "https://www.thiyagi.com/kg-to-pound",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Kilogram to pound conversion", "Fitness calculations", "Health measurements"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-purple-100 via-purple-50 to-purple-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-purple-800 mb-4 flex items-center justify-center">
                <i class="fas fa-weight text-purple-600 mr-3"></i>
                KG to Pound Converter
            </h1>
            <p class="text-lg text-purple-600 max-w-2xl mx-auto">
                Convert kilograms to pounds instantly with precision. Perfect for fitness tracking, health monitoring, cooking measurements, and international weight conversions.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #7C3AED;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="kgInput" class="block text-sm font-medium text-purple-700 mb-2">
                        <i class="fas fa-balance-scale text-purple-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input type="number" id="kgInput" placeholder="Enter kilograms" 
                           class="w-full px-4 py-3 border-2 border-purple-300 rounded-lg focus:border-purple-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="poundOutput" class="block text-sm font-medium text-purple-700 mb-2">
                        <i class="fas fa-weight-hanging text-purple-600 mr-2"></i>Pounds (lbs)
                    </label>
                    <div class="relative">
                        <input type="text" id="poundOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-purple-200 rounded-lg bg-purple-50 text-lg font-semibold text-purple-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-500 hover:text-purple-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setKg(50)" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200 transition-colors">50 kg</button>
                <button onclick="setKg(70)" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200 transition-colors">70 kg</button>
                <button onclick="setKg(80)" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200 transition-colors">80 kg</button>
                <button onclick="setKg(100)" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg hover:bg-purple-200 transition-colors">100 kg</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-purple-500 text-white rounded-lg hover:bg-purple-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-purple-800 mb-4 flex items-center">
                <i class="fas fa-link text-purple-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/pound-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-purple-600 hover:text-purple-700" role="listitem">Pound to KG</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-purple-600 hover:text-purple-700" role="listitem">KG to LBS</a>
                <a href="/stone-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-purple-600 hover:text-purple-700" role="listitem">Stone to KG</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-purple-600 hover:text-purple-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-purple-800 mb-4 flex items-center">
                <i class="fas fa-table text-purple-600 mr-2"></i>KG to Pound Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-purple-50">
                            <th class="border border-purple-300 px-4 py-2 text-purple-700">Kilograms</th>
                            <th class="border border-purple-300 px-4 py-2 text-purple-700">Pounds</th>
                            <th class="border border-purple-300 px-4 py-2 text-purple-700">Kilograms</th>
                            <th class="border border-purple-300 px-4 py-2 text-purple-700">Pounds</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-purple-300 px-4 py-2">5</td><td class="border border-purple-300 px-4 py-2">11.02 lbs</td><td class="border border-purple-300 px-4 py-2">80</td><td class="border border-purple-300 px-4 py-2">176.37 lbs</td></tr>
                        <tr class="bg-purple-50"><td class="border border-purple-300 px-4 py-2">10</td><td class="border border-purple-300 px-4 py-2">22.05 lbs</td><td class="border border-purple-300 px-4 py-2">90</td><td class="border border-purple-300 px-4 py-2">198.42 lbs</td></tr>
                        <tr><td class="border border-purple-300 px-4 py-2">20</td><td class="border border-purple-300 px-4 py-2">44.09 lbs</td><td class="border border-purple-300 px-4 py-2">100</td><td class="border border-purple-300 px-4 py-2">220.46 lbs</td></tr>
                        <tr class="bg-purple-50"><td class="border border-purple-300 px-4 py-2">30</td><td class="border border-purple-300 px-4 py-2">66.14 lbs</td><td class="border border-purple-300 px-4 py-2">110</td><td class="border border-purple-300 px-4 py-2">242.51 lbs</td></tr>
                        <tr><td class="border border-purple-300 px-4 py-2">40</td><td class="border border-purple-300 px-4 py-2">88.18 lbs</td><td class="border border-purple-300 px-4 py-2">120</td><td class="border border-purple-300 px-4 py-2">264.55 lbs</td></tr>
                        <tr class="bg-purple-50"><td class="border border-purple-300 px-4 py-2">50</td><td class="border border-purple-300 px-4 py-2">110.23 lbs</td><td class="border border-purple-300 px-4 py-2">150</td><td class="border border-purple-300 px-4 py-2">330.69 lbs</td></tr>
                        <tr><td class="border border-purple-300 px-4 py-2">70</td><td class="border border-purple-300 px-4 py-2">154.32 lbs</td><td class="border border-purple-300 px-4 py-2">200</td><td class="border border-purple-300 px-4 py-2">440.92 lbs</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-purple-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-purple-600 mr-2"></i>About KG to Pound Conversion
            </h2>
            <div class="prose text-purple-600 max-w-none">
                <p class="mb-4">
                    <strong>Kilogram to Pound conversion</strong> is essential for fitness tracking, health monitoring, cooking, and international weight measurements. One kilogram equals approximately 2.20462 pounds.
                </p>
                <h3 class="text-lg font-semibold text-purple-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>Fitness & Health:</strong> Body weight tracking, BMI calculations, weight loss goals</li>
                    <li><strong>Cooking & Baking:</strong> Recipe conversions and ingredient measurements</li>
                    <li><strong>International Travel:</strong> Understanding weight measurements in different countries</li>
                    <li><strong>Sports & Athletics:</strong> Weight classes in boxing, wrestling, and weightlifting</li>
                    <li><strong>Medical Applications:</strong> Patient weight records and dosage calculations</li>
                </ul>
                <h3 class="text-lg font-semibold text-purple-800 mb-2">Conversion Formula:</h3>
                <p class="bg-purple-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Pounds = Kilograms × 2.20462
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function convertKgToPound() {
    const kgInput = document.getElementById('kgInput');
    const poundOutput = document.getElementById('poundOutput');
    
    const kg = parseFloat(kgInput.value);
    
    if (isNaN(kg) || kg < 0) {
        poundOutput.value = '';
        return;
    }
    
    const pounds = kg * 2.20462;
    poundOutput.value = pounds.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' lbs';
}

function setKg(value) {
    document.getElementById('kgInput').value = value;
    convertKgToPound();
}

function clearAll() {
    document.getElementById('kgInput').value = '';
    document.getElementById('poundOutput').value = '';
}

function copyResult() {
    const result = document.getElementById('poundOutput');
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
document.getElementById('kgInput').addEventListener('input', convertKgToPound);

// Initialize
convertKgToPound();
</script>

<?php include 'footer.php'; ?>
