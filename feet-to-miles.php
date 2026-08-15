<?php 
// Meta information for this page
$pageTitle = "Feet to Miles Converter 2026 - FT to MI Calculator Online";
$pageDescription = "Convert feet (ft) to miles (mi) instantly with our free online calculator 2026. Accurate distance conversion tool for mapping, construction, athletics, and travel calculations.";
?>
<?php include 'header.php'; ?>

<!-- Page-specific meta tags -->
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="feet to miles, ft to mi converter, distance converter, length calculator, travel distance, mapping tools">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 to-blue-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-blue-600 hover:text-blue-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/meters-to-feet.php" class="text-blue-600 hover:text-blue-800">Distance Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Feet to Miles Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-route text-blue-600 mr-3"></i>
                    Feet to Miles Converter 2026
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Feet (ft) to Miles (mi) instantly with our professional distance converter. 
                    Perfect for mapping, construction, athletics, and travel calculations.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="feetInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-ruler mr-2 text-blue-600"></i>Feet (ft)
                        </label>
                        <input
                            type="number"
                            id="feetInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg"
                            placeholder="Enter feet"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Common Distances:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setFeet(5280)" class="text-blue-600 hover:text-blue-800 text-left">5,280 ft (1 mile)</button>
                            <button onclick="setFeet(10560)" class="text-blue-600 hover:text-blue-800 text-left">10,560 ft (2 miles)</button>
                            <button onclick="setFeet(1000)" class="text-blue-600 hover:text-blue-800 text-left">1,000 ft</button>
                            <button onclick="setFeet(100)" class="text-blue-600 hover:text-blue-800 text-left">100 ft</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-road mr-2 text-green-600"></i>Miles (mi)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="milesOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-blue-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-green-700">Miles = Feet ÷ 5280</p>
                        <p class="text-xs text-green-600 mt-1">1 Mile = 5,280 Feet</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-map-marked-alt text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Mapping Tool</h4>
                    <p class="text-sm text-gray-600">Perfect for surveying</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-running text-orange-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Athletic Tracking</h4>
                    <p class="text-sm text-gray-600">For sports distances</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-building text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Construction Use</h4>
                    <p class="text-sm text-gray-600">Building measurements</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-blue-600"></i>
                Feet to Miles Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-blue-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Feet (ft)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Miles (mi)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Reference</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">100 ft</td><td class="border border-gray-300 px-4 py-2">0.0189 mi</td><td class="border border-gray-300 px-4 py-2">Building height</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">1,000 ft</td><td class="border border-gray-300 px-4 py-2">0.1894 mi</td><td class="border border-gray-300 px-4 py-2">City block</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">5,280 ft</td><td class="border border-gray-300 px-4 py-2">1.0000 mi</td><td class="border border-gray-300 px-4 py-2">Exactly 1 mile</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">10,560 ft</td><td class="border border-gray-300 px-4 py-2">2.0000 mi</td><td class="border border-gray-300 px-4 py-2">Long distance</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">26,400 ft</td><td class="border border-gray-300 px-4 py-2">5.0000 mi</td><td class="border border-gray-300 px-4 py-2">Running distance</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">52,800 ft</td><td class="border border-gray-300 px-4 py-2">10.0000 mi</td><td class="border border-gray-300 px-4 py-2">Race distance</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-blue-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many feet are in a mile?</h3>
                    <p class="text-gray-600">There are exactly 5,280 feet in one mile. This is the standard conversion used in the United States and other countries using the Imperial system.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why is a mile 5,280 feet?</h3>
                    <p class="text-gray-600">The mile originated from the Roman "mille passus" (thousand paces). The modern definition was standardized in 1593 by Queen Elizabeth I to equal 5,280 feet.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When would I convert feet to miles?</h3>
                    <p class="text-gray-600">This conversion is useful for surveying, construction projects, athletic events, property measurements, and any situation involving long distances measured in feet.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this the same as a nautical mile?</h3>
                    <p class="text-gray-600">No, this converter uses statute miles (5,280 feet). A nautical mile is 6,076 feet and is used primarily in marine and aviation navigation.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-blue-600"></i>
                Related Distance Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/miles-to-km.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-road text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Miles to Km</h3>
                    <p class="text-sm text-blue-600">Distance conversion</p>
                </a>
                <a href="/feet-to-meter.php" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                    <i class="fas fa-ruler text-green-600 mb-2"></i>
                    <h3 class="font-semibold text-green-800">Feet to Meters</h3>
                    <p class="text-sm text-green-600">Convert to metric</p>
                </a>
                <a href="/feet-to-yard.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-arrows-alt-h text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Feet to Yards</h3>
                    <p class="text-sm text-purple-600">Convert ft to yd</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertFeetToMiles() {
    const feetInput = document.getElementById('feetInput').value;
    const milesOutput = document.getElementById('milesOutput');
    
    if (feetInput === '' || isNaN(feetInput)) {
        milesOutput.value = '';
        return;
    }
    
    const feet = parseFloat(feetInput);
    const miles = feet / 5280;
    
    // Format the result with appropriate decimal places
    if (miles >= 1) {
        milesOutput.value = miles.toFixed(4);
    } else if (miles >= 0.1) {
        milesOutput.value = miles.toFixed(5);
    } else {
        milesOutput.value = miles.toFixed(6);
    }
}

function setFeet(value) {
    document.getElementById('feetInput').value = value;
    convertFeetToMiles();
}

function copyResult() {
    const milesOutput = document.getElementById('milesOutput');
    milesOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('feetInput').addEventListener('input', convertFeetToMiles);

// Handle Enter key
document.getElementById('feetInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertFeetToMiles();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Feet to Miles Converter",
  "description": "Convert Feet (ft) to Miles (mi) instantly with our professional distance converter.",
  "url": "https://www.thiyagi.com/feet-to-miles.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant feet to miles conversion",
    "Accurate distance calculations",
    "Mobile-friendly interface",
    "Copy results to clipboard",
    "Construction and athletics tool"
  ]
}
</script>

<?php include 'footer.php'; ?>
