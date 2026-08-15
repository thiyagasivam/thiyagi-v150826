<?php include 'header.php'; ?>
<title>KG to Ton Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert kilograms to tons instantly with our free kg to ton converter. Accurate weight conversion for shipping, freight, industrial applications. Easy-to-use calculator with precise results.">
<meta name="keywords" content="kg to ton, kilogram to metric ton, weight conversion, shipping calculator, freight weight, industrial measurements, kg to tonne">
<meta property="og:title" content="KG to Ton Converter - Accurate Weight Conversion Tool">
<meta property="og:description" content="Convert kilograms to tons with precision. Perfect for shipping, freight, and industrial weight calculations. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/kg-to-ton">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="KG to Ton Converter - Accurate Weight Conversion">
<meta name="twitter:description" content="Convert kilograms to tons instantly. Perfect for shipping, freight, and industrial applications.">
<meta name="twitter:url" content="https://www.thiyagi.com/kg-to-ton">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "KG to Ton Converter",
    "description": "Convert kilograms to tons with our accurate weight conversion tool",
    "url": "https://www.thiyagi.com/kg-to-ton",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Kilogram to ton conversion", "Shipping calculations", "Freight calculations"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-emerald-100 via-emerald-50 to-emerald-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-emerald-800 mb-4 flex items-center justify-center">
                <i class="fas fa-weight-hanging text-emerald-600 mr-3"></i>
                KG to Ton Converter
            </h1>
            <p class="text-lg text-emerald-600 max-w-2xl mx-auto">
                Convert kilograms to tons instantly with precision. Perfect for shipping, freight, industrial applications, and large-scale weight calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #059669;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="kgInput" class="block text-sm font-medium text-emerald-700 mb-2">
                        <i class="fas fa-weight text-emerald-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input type="number" id="kgInput" placeholder="Enter kilograms" 
                           class="w-full px-4 py-3 border-2 border-emerald-300 rounded-lg focus:border-emerald-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="tonOutput" class="block text-sm font-medium text-emerald-700 mb-2">
                        <i class="fas fa-truck text-emerald-600 mr-2"></i>Tons (Metric)
                    </label>
                    <div class="relative">
                        <input type="text" id="tonOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-emerald-200 rounded-lg bg-emerald-50 text-lg font-semibold text-emerald-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-emerald-500 hover:text-emerald-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setKg(100)" class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">100 kg</button>
                <button onclick="setKg(500)" class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">500 kg</button>
                <button onclick="setKg(1000)" class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">1,000 kg</button>
                <button onclick="setKg(5000)" class="px-4 py-2 bg-emerald-100 text-emerald-700 rounded-lg hover:bg-emerald-200 transition-colors">5,000 kg</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-emerald-500 text-white rounded-lg hover:bg-emerald-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-emerald-800 mb-4 flex items-center">
                <i class="fas fa-link text-emerald-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/ton-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-emerald-600 hover:text-emerald-700" role="listitem">Ton to KG</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-emerald-600 hover:text-emerald-700" role="listitem">KG to LBS</a>
                <a href="/gram-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-emerald-600 hover:text-emerald-700" role="listitem">Gram to KG</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-emerald-600 hover:text-emerald-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-emerald-800 mb-4 flex items-center">
                <i class="fas fa-table text-emerald-600 mr-2"></i>KG to Ton Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-emerald-50">
                            <th class="border border-emerald-300 px-4 py-2 text-emerald-700">Kilograms</th>
                            <th class="border border-emerald-300 px-4 py-2 text-emerald-700">Tons</th>
                            <th class="border border-emerald-300 px-4 py-2 text-emerald-700">Kilograms</th>
                            <th class="border border-emerald-300 px-4 py-2 text-emerald-700">Tons</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-emerald-300 px-4 py-2">100</td><td class="border border-emerald-300 px-4 py-2">0.1 tons</td><td class="border border-emerald-300 px-4 py-2">6,000</td><td class="border border-emerald-300 px-4 py-2">6 tons</td></tr>
                        <tr class="bg-emerald-50"><td class="border border-emerald-300 px-4 py-2">500</td><td class="border border-emerald-300 px-4 py-2">0.5 tons</td><td class="border border-emerald-300 px-4 py-2">7,000</td><td class="border border-emerald-300 px-4 py-2">7 tons</td></tr>
                        <tr><td class="border border-emerald-300 px-4 py-2">1,000</td><td class="border border-emerald-300 px-4 py-2">1 ton</td><td class="border border-emerald-300 px-4 py-2">8,000</td><td class="border border-emerald-300 px-4 py-2">8 tons</td></tr>
                        <tr class="bg-emerald-50"><td class="border border-emerald-300 px-4 py-2">2,000</td><td class="border border-emerald-300 px-4 py-2">2 tons</td><td class="border border-emerald-300 px-4 py-2">9,000</td><td class="border border-emerald-300 px-4 py-2">9 tons</td></tr>
                        <tr><td class="border border-emerald-300 px-4 py-2">3,000</td><td class="border border-emerald-300 px-4 py-2">3 tons</td><td class="border border-emerald-300 px-4 py-2">10,000</td><td class="border border-emerald-300 px-4 py-2">10 tons</td></tr>
                        <tr class="bg-emerald-50"><td class="border border-emerald-300 px-4 py-2">4,000</td><td class="border border-emerald-300 px-4 py-2">4 tons</td><td class="border border-emerald-300 px-4 py-2">25,000</td><td class="border border-emerald-300 px-4 py-2">25 tons</td></tr>
                        <tr><td class="border border-emerald-300 px-4 py-2">5,000</td><td class="border border-emerald-300 px-4 py-2">5 tons</td><td class="border border-emerald-300 px-4 py-2">50,000</td><td class="border border-emerald-300 px-4 py-2">50 tons</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-emerald-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-emerald-600 mr-2"></i>About KG to Ton Conversion
            </h2>
            <div class="prose text-emerald-600 max-w-none">
                <p class="mb-4">
                    <strong>Kilogram to Ton conversion</strong> is essential for shipping, freight, industrial operations, and large-scale weight measurements. One metric ton equals exactly 1,000 kilograms.
                </p>
                <h3 class="text-lg font-semibold text-emerald-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>Shipping & Freight:</strong> Calculate cargo weights and shipping costs</li>
                    <li><strong>Industrial Operations:</strong> Raw materials, machinery, and equipment weights</li>
                    <li><strong>Construction:</strong> Material quantities like steel, concrete, and aggregates</li>
                    <li><strong>Agriculture:</strong> Crop yields, feed quantities, and livestock feed</li>
                    <li><strong>Mining:</strong> Ore quantities and extraction measurements</li>
                </ul>
                <h3 class="text-lg font-semibold text-emerald-800 mb-2">Conversion Formula:</h3>
                <p class="bg-emerald-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Tons = Kilograms ÷ 1,000
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function convertKgToTon() {
    const kgInput = document.getElementById('kgInput');
    const tonOutput = document.getElementById('tonOutput');
    
    const kg = parseFloat(kgInput.value);
    
    if (isNaN(kg) || kg < 0) {
        tonOutput.value = '';
        return;
    }
    
    const tons = kg / 1000;
    tonOutput.value = tons.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' tons';
}

function setKg(value) {
    document.getElementById('kgInput').value = value;
    convertKgToTon();
}

function clearAll() {
    document.getElementById('kgInput').value = '';
    document.getElementById('tonOutput').value = '';
}

function copyResult() {
    const result = document.getElementById('tonOutput');
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
document.getElementById('kgInput').addEventListener('input', convertKgToTon);

// Initialize
convertKgToTon();
</script>

<?php include 'footer.php'; ?>
