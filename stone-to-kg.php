<?php include 'header.php'; ?>
<title>Stone to KG Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert stone to kilograms instantly with our free stone to kg converter. Accurate UK weight conversion for health, fitness, and body weight measurements. Easy-to-use calculator.">
<meta name="keywords" content="stone to kg, stone to kilogram, UK weight conversion, body weight, health measurements, British weight units, stone weight">
<meta property="og:title" content="Stone to KG Converter - Accurate UK Weight Conversion Tool">
<meta property="og:description" content="Convert stone to kilograms with precision. Perfect for UK health measurements, body weight tracking, and fitness goals. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/stone-to-kg">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Stone to KG Converter - Accurate UK Weight Conversion">
<meta name="twitter:description" content="Convert stone to kilograms instantly. Perfect for UK health and fitness measurements.">
<meta name="twitter:url" content="https://www.thiyagi.com/stone-to-kg">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "Stone to KG Converter",
    "description": "Convert stone to kilograms with our accurate UK weight conversion tool",
    "url": "https://www.thiyagi.com/stone-to-kg",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Stone to kilogram conversion", "UK measurements", "Health calculations"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-teal-100 via-teal-50 to-teal-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-teal-800 mb-4 flex items-center justify-center">
                <i class="fas fa-gem text-teal-600 mr-3"></i>
                Stone to KG Converter
            </h1>
            <p class="text-lg text-teal-600 max-w-2xl mx-auto">
                Convert stone to kilograms instantly with precision. Perfect for UK health measurements, body weight tracking, fitness goals, and medical applications.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #0F766E;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="stoneInput" class="block text-sm font-medium text-teal-700 mb-2">
                        <i class="fas fa-gem text-teal-600 mr-2"></i>Stone (st)
                    </label>
                    <input type="number" id="stoneInput" placeholder="Enter stone" 
                           class="w-full px-4 py-3 border-2 border-teal-300 rounded-lg focus:border-teal-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="kgOutput" class="block text-sm font-medium text-teal-700 mb-2">
                        <i class="fas fa-balance-scale text-teal-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <div class="relative">
                        <input type="text" id="kgOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-teal-200 rounded-lg bg-teal-50 text-lg font-semibold text-teal-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-teal-500 hover:text-teal-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setStone(8)" class="px-4 py-2 bg-teal-100 text-teal-700 rounded-lg hover:bg-teal-200 transition-colors">8 st</button>
                <button onclick="setStone(10)" class="px-4 py-2 bg-teal-100 text-teal-700 rounded-lg hover:bg-teal-200 transition-colors">10 st</button>
                <button onclick="setStone(12)" class="px-4 py-2 bg-teal-100 text-teal-700 rounded-lg hover:bg-teal-200 transition-colors">12 st</button>
                <button onclick="setStone(15)" class="px-4 py-2 bg-teal-100 text-teal-700 rounded-lg hover:bg-teal-200 transition-colors">15 st</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-teal-800 mb-4 flex items-center">
                <i class="fas fa-link text-teal-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/kg-to-stone" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-teal-600 hover:text-teal-700" role="listitem">KG to Stone</a>
                <a href="/pound-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-teal-600 hover:text-teal-700" role="listitem">Pound to KG</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-teal-600 hover:text-teal-700" role="listitem">KG to LBS</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-teal-600 hover:text-teal-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-teal-800 mb-4 flex items-center">
                <i class="fas fa-table text-teal-600 mr-2"></i>Stone to KG Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-teal-50">
                            <th class="border border-teal-300 px-4 py-2 text-teal-700">Stone</th>
                            <th class="border border-teal-300 px-4 py-2 text-teal-700">Kilograms</th>
                            <th class="border border-teal-300 px-4 py-2 text-teal-700">Stone</th>
                            <th class="border border-teal-300 px-4 py-2 text-teal-700">Kilograms</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-teal-300 px-4 py-2">1</td><td class="border border-teal-300 px-4 py-2">6.35 kg</td><td class="border border-teal-300 px-4 py-2">12</td><td class="border border-teal-300 px-4 py-2">76.20 kg</td></tr>
                        <tr class="bg-teal-50"><td class="border border-teal-300 px-4 py-2">2</td><td class="border border-teal-300 px-4 py-2">12.70 kg</td><td class="border border-teal-300 px-4 py-2">13</td><td class="border border-teal-300 px-4 py-2">82.55 kg</td></tr>
                        <tr><td class="border border-teal-300 px-4 py-2">3</td><td class="border border-teal-300 px-4 py-2">19.05 kg</td><td class="border border-teal-300 px-4 py-2">14</td><td class="border border-teal-300 px-4 py-2">88.90 kg</td></tr>
                        <tr class="bg-teal-50"><td class="border border-teal-300 px-4 py-2">4</td><td class="border border-teal-300 px-4 py-2">25.40 kg</td><td class="border border-teal-300 px-4 py-2">15</td><td class="border border-teal-300 px-4 py-2">95.25 kg</td></tr>
                        <tr><td class="border border-teal-300 px-4 py-2">5</td><td class="border border-teal-300 px-4 py-2">31.75 kg</td><td class="border border-teal-300 px-4 py-2">16</td><td class="border border-teal-300 px-4 py-2">101.60 kg</td></tr>
                        <tr class="bg-teal-50"><td class="border border-teal-300 px-4 py-2">6</td><td class="border border-teal-300 px-4 py-2">38.10 kg</td><td class="border border-teal-300 px-4 py-2">18</td><td class="border border-teal-300 px-4 py-2">114.30 kg</td></tr>
                        <tr><td class="border border-teal-300 px-4 py-2">8</td><td class="border border-teal-300 px-4 py-2">50.80 kg</td><td class="border border-teal-300 px-4 py-2">20</td><td class="border border-teal-300 px-4 py-2">127.01 kg</td></tr>
                        <tr class="bg-teal-50"><td class="border border-teal-300 px-4 py-2">10</td><td class="border border-teal-300 px-4 py-2">63.50 kg</td><td class="border border-teal-300 px-4 py-2">25</td><td class="border border-teal-300 px-4 py-2">158.76 kg</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-teal-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-teal-600 mr-2"></i>About Stone to KG Conversion
            </h2>
            <div class="prose text-teal-600 max-w-none">
                <p class="mb-4">
                    <strong>Stone to Kilogram conversion</strong> is essential for UK health measurements, body weight tracking, and medical applications. One stone equals exactly 6.35029 kilograms or 14 pounds.
                </p>
                <h3 class="text-lg font-semibold text-teal-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>UK Health & Fitness:</strong> Body weight measurements, BMI calculations, weight loss tracking</li>
                    <li><strong>Medical Applications:</strong> Patient weight records in UK healthcare system</li>
                    <li><strong>Sports & Athletics:</strong> Weight classes in UK boxing, wrestling, and weightlifting</li>
                    <li><strong>International Travel:</strong> Understanding UK weight measurements</li>
                    <li><strong>Historical Records:</strong> Converting traditional British weight measurements</li>
                </ul>
                <h3 class="text-lg font-semibold text-teal-800 mb-2">Conversion Formula:</h3>
                <p class="bg-teal-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Kilograms = Stone × 6.35029
                </p>
                <h3 class="text-lg font-semibold text-teal-800 mb-2">UK Weight System:</h3>
                <p class="mb-2">The stone is a traditional British unit of weight:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>1 stone = 14 pounds</li>
                    <li>1 stone = 6.35029 kilograms</li>
                    <li>Still commonly used in UK and Ireland for body weight</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertStoneToKg() {
    const stoneInput = document.getElementById('stoneInput');
    const kgOutput = document.getElementById('kgOutput');
    
    const stone = parseFloat(stoneInput.value);
    
    if (isNaN(stone) || stone < 0) {
        kgOutput.value = '';
        return;
    }
    
    const kg = stone * 6.35029;
    kgOutput.value = kg.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' kg';
}

function setStone(value) {
    document.getElementById('stoneInput').value = value;
    convertStoneToKg();
}

function clearAll() {
    document.getElementById('stoneInput').value = '';
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
document.getElementById('stoneInput').addEventListener('input', convertStoneToKg);

// Initialize
convertStoneToKg();
</script>

<?php include 'footer.php'; ?>
