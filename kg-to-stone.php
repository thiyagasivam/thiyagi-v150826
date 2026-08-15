<?php include 'header.php'; ?>
<title>KG to Stone Converter - Free Weight Conversion Tool | Thiyagi.com</title>
<meta name="description" content="Convert kilograms to stone instantly with our free kg to stone converter. Accurate UK weight conversion for health, fitness, and body weight measurements. Easy-to-use calculator.">
<meta name="keywords" content="kg to stone, kilogram to stone, UK weight conversion, body weight, health measurements, British weight units, stone weight">
<meta property="og:title" content="KG to Stone Converter - Accurate UK Weight Conversion Tool">
<meta property="og:description" content="Convert kilograms to stone with precision. Perfect for UK health measurements, body weight tracking, and fitness goals. Free and easy-to-use converter.">
<meta property="og:url" content="https://www.thiyagi.com/kg-to-stone">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="KG to Stone Converter - Accurate UK Weight Conversion">
<meta name="twitter:description" content="Convert kilograms to stone instantly. Perfect for UK health and fitness measurements.">
<meta name="twitter:url" content="https://www.thiyagi.com/kg-to-stone">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "KG to Stone Converter",
    "description": "Convert kilograms to stone with our accurate UK weight conversion tool",
    "url": "https://www.thiyagi.com/kg-to-stone",
    "applicationCategory": "UtilityApplication",
    "operatingSystem": "Any",
    "permissions": "browser",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    },
    "featureList": ["Weight conversion", "Kilogram to stone conversion", "UK measurements", "Health calculations"]
}
</script>

<div class="min-h-screen bg-gradient-to-br from-rose-100 via-rose-50 to-rose-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-rose-800 mb-4 flex items-center justify-center">
                <i class="fas fa-balance-scale text-rose-600 mr-3"></i>
                KG to Stone Converter
            </h1>
            <p class="text-lg text-rose-600 max-w-2xl mx-auto">
                Convert kilograms to stone instantly with precision. Perfect for UK health measurements, body weight tracking, fitness goals, and medical applications.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8" style="border-left: 6px solid #E11D48;">
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <label for="kgInput" class="block text-sm font-medium text-rose-700 mb-2">
                        <i class="fas fa-balance-scale text-rose-600 mr-2"></i>Kilograms (kg)
                    </label>
                    <input type="number" id="kgInput" placeholder="Enter kilograms" 
                           class="w-full px-4 py-3 border-2 border-rose-300 rounded-lg focus:border-rose-500 focus:outline-none text-lg"
                           step="any">
                </div>
                <div>
                    <label for="stoneOutput" class="block text-sm font-medium text-rose-700 mb-2">
                        <i class="fas fa-gem text-rose-600 mr-2"></i>Stone (st)
                    </label>
                    <div class="relative">
                        <input type="text" id="stoneOutput" readonly 
                               class="w-full px-4 py-3 border-2 border-rose-200 rounded-lg bg-rose-50 text-lg font-semibold text-rose-800">
                        <button onclick="copyResult()" 
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-rose-500 hover:text-rose-700">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button onclick="setKg(50)" class="px-4 py-2 bg-rose-100 text-rose-700 rounded-lg hover:bg-rose-200 transition-colors">50 kg</button>
                <button onclick="setKg(70)" class="px-4 py-2 bg-rose-100 text-rose-700 rounded-lg hover:bg-rose-200 transition-colors">70 kg</button>
                <button onclick="setKg(80)" class="px-4 py-2 bg-rose-100 text-rose-700 rounded-lg hover:bg-rose-200 transition-colors">80 kg</button>
                <button onclick="setKg(100)" class="px-4 py-2 bg-rose-100 text-rose-700 rounded-lg hover:bg-rose-200 transition-colors">100 kg</button>
                <button onclick="clearAll()" class="px-4 py-2 bg-rose-500 text-white rounded-lg hover:bg-rose-600 transition-colors">Clear</button>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-rose-800 mb-4 flex items-center">
                <i class="fas fa-link text-rose-600 mr-2"></i>Related Weight Converters
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3" role="list">
                <a href="/stone-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-rose-600 hover:text-rose-700" role="listitem">Stone to KG</a>
                <a href="/pound-to-kg" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-rose-600 hover:text-rose-700" role="listitem">Pound to KG</a>
                <a href="/kg-to-lbs" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-rose-600 hover:text-rose-700" role="listitem">KG to LBS</a>
                <a href="/ounce-to-gram" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-rose-600 hover:text-rose-700" role="listitem">Ounce to Gram</a>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold text-rose-800 mb-4 flex items-center">
                <i class="fas fa-table text-rose-600 mr-2"></i>KG to Stone Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-rose-50">
                            <th class="border border-rose-300 px-4 py-2 text-rose-700">Kilograms</th>
                            <th class="border border-rose-300 px-4 py-2 text-rose-700">Stone</th>
                            <th class="border border-rose-300 px-4 py-2 text-rose-700">Kilograms</th>
                            <th class="border border-rose-300 px-4 py-2 text-rose-700">Stone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-rose-300 px-4 py-2">10</td><td class="border border-rose-300 px-4 py-2">1.57 st</td><td class="border border-rose-300 px-4 py-2">80</td><td class="border border-rose-300 px-4 py-2">12.60 st</td></tr>
                        <tr class="bg-rose-50"><td class="border border-rose-300 px-4 py-2">20</td><td class="border border-rose-300 px-4 py-2">3.15 st</td><td class="border border-rose-300 px-4 py-2">90</td><td class="border border-rose-300 px-4 py-2">14.17 st</td></tr>
                        <tr><td class="border border-rose-300 px-4 py-2">30</td><td class="border border-rose-300 px-4 py-2">4.72 st</td><td class="border border-rose-300 px-4 py-2">100</td><td class="border border-rose-300 px-4 py-2">15.75 st</td></tr>
                        <tr class="bg-rose-50"><td class="border border-rose-300 px-4 py-2">40</td><td class="border border-rose-300 px-4 py-2">6.30 st</td><td class="border border-rose-300 px-4 py-2">110</td><td class="border border-rose-300 px-4 py-2">17.32 st</td></tr>
                        <tr><td class="border border-rose-300 px-4 py-2">50</td><td class="border border-rose-300 px-4 py-2">7.87 st</td><td class="border border-rose-300 px-4 py-2">120</td><td class="border border-rose-300 px-4 py-2">18.90 st</td></tr>
                        <tr class="bg-rose-50"><td class="border border-rose-300 px-4 py-2">60</td><td class="border border-rose-300 px-4 py-2">9.45 st</td><td class="border border-rose-300 px-4 py-2">150</td><td class="border border-rose-300 px-4 py-2">23.62 st</td></tr>
                        <tr><td class="border border-rose-300 px-4 py-2">70</td><td class="border border-rose-300 px-4 py-2">11.02 st</td><td class="border border-rose-300 px-4 py-2">200</td><td class="border border-rose-300 px-4 py-2">31.50 st</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Information Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-semibold text-rose-800 mb-4 flex items-center">
                <i class="fas fa-info-circle text-rose-600 mr-2"></i>About KG to Stone Conversion
            </h2>
            <div class="prose text-rose-600 max-w-none">
                <p class="mb-4">
                    <strong>Kilogram to Stone conversion</strong> is essential for UK health measurements, body weight tracking, and medical applications. One kilogram equals approximately 0.157473 stone.
                </p>
                <h3 class="text-lg font-semibold text-rose-800 mb-2">Common Uses:</h3>
                <ul class="list-disc list-inside mb-4 space-y-1">
                    <li><strong>UK Health & Fitness:</strong> Body weight measurements, BMI calculations, weight loss tracking</li>
                    <li><strong>Medical Applications:</strong> Patient weight records in UK healthcare system</li>
                    <li><strong>Sports & Athletics:</strong> Weight classes in UK boxing, wrestling, and weightlifting</li>
                    <li><strong>International Travel:</strong> Understanding UK weight measurements</li>
                    <li><strong>Historical Records:</strong> Converting modern measurements to traditional British units</li>
                </ul>
                <h3 class="text-lg font-semibold text-rose-800 mb-2">Conversion Formula:</h3>
                <p class="bg-rose-50 p-3 rounded-lg font-mono text-sm mb-4">
                    Stone = Kilograms ÷ 6.35029
                </p>
                <h3 class="text-lg font-semibold text-rose-800 mb-2">UK Weight System:</h3>
                <p class="mb-2">The stone is a traditional British unit of weight:</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>1 stone = 14 pounds</li>
                    <li>1 stone = 6.35029 kilograms</li>
                    <li>1 kg = 0.157473 stone</li>
                    <li>Still commonly used in UK and Ireland for body weight</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKgToStone() {
    const kgInput = document.getElementById('kgInput');
    const stoneOutput = document.getElementById('stoneOutput');
    
    const kg = parseFloat(kgInput.value);
    
    if (isNaN(kg) || kg < 0) {
        stoneOutput.value = '';
        return;
    }
    
    const stone = kg / 6.35029;
    stoneOutput.value = stone.toLocaleString('en-US', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 6
    }) + ' st';
}

function setKg(value) {
    document.getElementById('kgInput').value = value;
    convertKgToStone();
}

function clearAll() {
    document.getElementById('kgInput').value = '';
    document.getElementById('stoneOutput').value = '';
}

function copyResult() {
    const result = document.getElementById('stoneOutput');
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
document.getElementById('kgInput').addEventListener('input', convertKgToStone);

// Initialize
convertKgToStone();
</script>

<?php include 'footer.php'; ?>
