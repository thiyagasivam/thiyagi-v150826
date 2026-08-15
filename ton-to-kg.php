<?php include 'header.php'; ?>
<title>Ton to KG Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert tons to kilograms instantly with our free ton to kg converter. Accurate weight conversion for shipping, freight, industrial applications. Easy-to-use calculator with precise results.">
<meta name="keywords" content="ton to kg, metric ton converter, weight conversion, shipping calculator, freight weight, industrial measurements, ton to kilogram">
<meta property="og:title" content="Ton to KG Converter - Accurate Weight Conversion Tool">
<meta property="og:description" content="Convert tons to kilograms with precision. Perfect for shipping, freight, and industrial weight calculations. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/ton-to-kg">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ton to KG Converter - Accurate Weight Conversion">
<meta name="twitter:description" content="Convert tons to kilograms instantly. Perfect for shipping, freight, and industrial applications.">
<meta name="twitter:url" content="https://www.thiyagi.com/ton-to-kg">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Ton to KG Converter",
    "description": "Convert tons to kilograms with our accurate weight conversion tool",
    "url": "https://www.thiyagi.com/ton-to-kg",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Ton to kilogram conversion", "Shipping calculations", "Freight calculations"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-slate-100 via-slate-50 to-slate-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-slate-800 mb-4 flex items-center justify-center">
                <i class="fas fa-shipping-fast text-slate-600 mr-3"></i>
                Ton to KG Converter
            </h1>
            <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                Convert tons to kilograms instantly with precision. Perfect for shipping, freight, industrial applications, and heavy-duty weight calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #475569;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="tonInput" class="block text-sm font-medium text-slate-700 mb-2">
                        <i class="fas fa-truck text-slate-600 mr-2"></i>Tons (Metric)
                    </label>
                    <input type="number" id="tonInput" placeholder="Enter tons" 
                           class="w-full px-4 py-3 border-2 border-slate-300 rounded-lg focus:border-slate-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="kgOutput" class="block text-sm font-medium text-slate-700 mb-2">
                        <i class="fas fa-weight text-slate-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <div class="relative">
                        <input type="text" id="kgOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-slate-200 rounded-lg bg-slate-50 text-lg font-semibold text-slate-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-500 hover:text-slate-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setTons(1)" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors">1 Ton</button>
                <button onclick="setTons(5)" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors">5 Tons</button>
                <button onclick="setTons(10)" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors">10 Tons</button>
                <button onclick="setTons(50)" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-lg hover:bg-slate-200 transition-colors">50 Tons</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-slate-500 text-white rounded-lg hover:bg-slate-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-link text-slate-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/kg-to-ton" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-slate-600 hover:text-slate-700" role="listitem">KG to Ton</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-slate-600 hover:text-slate-700" role="listitem">KG to LBS</a>
                <a href="/gram-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-slate-600 hover:text-slate-700" role="listitem">Gram to KG</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-slate-600 hover:text-slate-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-table text-slate-600 mr-2"></i>Ton to KG Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-slate-50">
                            <th class="border border-slate-300 px-4 py-2 text-slate-700">Tons</th>
                            <th class="border border-slate-300 px-4 py-2 text-slate-700">Kilograms</th>
                            <th class="border border-slate-300 px-4 py-2 text-slate-700">Tons</th>
                            <th class="border border-slate-300 px-4 py-2 text-slate-700">Kilograms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-slate-300 px-4 py-2">0.1</td><td class="border border-slate-300 px-4 py-2">100 kg</td><td class="border border-slate-300 px-4 py-2">6</td><td class="border border-slate-300 px-4 py-2">6,000 kg</td></tr>
                        <tr class="bg-slate-50"><td class="border border-slate-300 px-4 py-2">0.5</td><td class="border border-slate-300 px-4 py-2">500 kg</td><td class="border border-slate-300 px-4 py-2">7</td><td class="border border-slate-300 px-4 py-2">7,000 kg</td></tr>
                        <tr><td class="border border-slate-300 px-4 py-2">1</td><td class="border border-slate-300 px-4 py-2">1,000 kg</td><td class="border border-slate-300 px-4 py-2">8</td><td class="border border-slate-300 px-4 py-2">8,000 kg</td></tr>
                        <tr class="bg-slate-50"><td class="border border-slate-300 px-4 py-2">2</td><td class="border border-slate-300 px-4 py-2">2,000 kg</td><td class="border border-slate-300 px-4 py-2">9</td><td class="border border-slate-300 px-4 py-2">9,000 kg</td></tr>
                        <tr><td class="border border-slate-300 px-4 py-2">3</td><td class="border border-slate-300 px-4 py-2">3,000 kg</td><td class="border border-slate-300 px-4 py-2">10</td><td class="border border-slate-300 px-4 py-2">10,000 kg</td></tr>
                        <tr class="bg-slate-50"><td class="border border-slate-300 px-4 py-2">4</td><td class="border border-slate-300 px-4 py-2">4,000 kg</td><td class="border border-slate-300 px-4 py-2">25</td><td class="border border-slate-300 px-4 py-2">25,000 kg</td></tr>
                        <tr><td class="border border-slate-300 px-4 py-2">5</td><td class="border border-slate-300 px-4 py-2">5,000 kg</td><td class="border border-slate-300 px-4 py-2">50</td><td class="border border-slate-300 px-4 py-2">50,000 kg</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-slate-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-slate-600 mr-2"></i>About Ton to KG Conversion
            </h2>
            <div class="prose text-slate-600 max-w-none">
                <p class="mb-4">
                    <strong>Ton to Kilogram conversion</strong> is essential for shipping, freight, industrial operations, and large-scale weight measurements. One metric ton equals exactly 1,000 kilograms.
                </p>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>Shipping & Freight:</strong> Calculate cargo weights and shipping costs</li>
                    <li><strong>Industrial Operations:</strong> Raw materials, machinery, and equipment weights</li>
                    <li><strong>Construction:</strong> Material quantities like steel, concrete, and aggregates</li>
                    <li><strong>Agriculture:</strong> Crop yields, feed quantities, and livestock feed</li>
                    <li><strong>Mining:</strong> Ore quantities and extraction measurements</li>
                </ul>
                <h3 class="text-lg font-semibold text-slate-800 mb-2">Conversion Formula:</h3>
                <p class="bg-slate-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Kilograms = Tons × 1,000
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function convertTonToKg() {
    const tonInput = document.getElementById('tonInput');
    const kgOutput = document.getElementById('kgOutput');
    
    const tons = parseFloat(tonInput.value);
    
    if (isNaN(tons) || tons < 0) {
        kgOutput.value = '';
        return;
    }
    
    const kg = tons * 1000;
    kgOutput.value = kg.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' kg';
}

function setTons(value) {
    document.getElementById('tonInput').value = value;
    convertTonToKg();
}

function clearAll() {
    document.getElementById('tonInput').value = '';
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
document.getElementById('tonInput').addEventListener('input', convertTonToKg);

// Initialize
convertTonToKg();
</script>

<?php include 'footer.php'; ?>
