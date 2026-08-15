<?php 
// Meta information for this page
$pageTitle = "Centimeters to Meters Converter 2026 - CM to M Calculator Online";
$pageDescription = "Convert centimeters (cm) to meters (m) instantly with our free online calculator 2026. Accurate length conversion tool for construction, tailoring, and scientific measurements.";
?>
<?php include 'header.php'; ?>

<!-- Page-specific meta tags -->
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="centimeters to meters, cm to m converter, length converter, distance calculator, metric conversion">

<div class="min-h-screen bg-gradient-to-br from-teal-50 to-cyan-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-teal-600 hover:text-teal-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/meters-to-feet.php" class="text-teal-600 hover:text-teal-800">Distance Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Centimeters to Meters Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-3"></i>
                    Centimeters to Meters Converter 2026
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Centimeters (cm) to Meters (m) instantly with our professional length converter. 
                    Perfect for construction, tailoring, scientific measurements, and everyday calculations.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="cmInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-ruler-vertical mr-2 text-teal-600"></i>Centimeters (cm)
                        </label>
                        <input
                            type="number"
                            id="cmInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 text-lg"
                            placeholder="Enter centimeters"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-teal-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-teal-800 mb-2">Common Measurements:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setCm(100)" class="text-teal-600 hover:text-teal-800 text-left">100 cm (1 meter)</button>
                            <button onclick="setCm(50)" class="text-teal-600 hover:text-teal-800 text-left">50 cm</button>
                            <button onclick="setCm(30)" class="text-teal-600 hover:text-teal-800 text-left">30 cm (ruler)</button>
                            <button onclick="setCm(180)" class="text-teal-600 hover:text-teal-800 text-left">180 cm (height)</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-arrows-alt-v mr-2 text-blue-600"></i>Meters (m)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="metersOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-teal-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-blue-700">Meters = Centimeters ÷ 100</p>
                        <p class="text-xs text-blue-600 mt-1">1 Meter = 100 Centimeters</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-hard-hat text-teal-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Construction</h4>
                    <p class="text-sm text-gray-600">Building measurements</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-cut text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Tailoring</h4>
                    <p class="text-sm text-gray-600">Garment sizing</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-microscope text-green-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Scientific</h4>
                    <p class="text-sm text-gray-600">Lab measurements</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-teal-600"></i>
                Centimeters to Meters Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-teal-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Centimeters (cm)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Meters (m)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Object</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">10 cm</td><td class="border border-gray-300 px-4 py-2">0.1 m</td><td class="border border-gray-300 px-4 py-2">Smartphone</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">30 cm</td><td class="border border-gray-300 px-4 py-2">0.3 m</td><td class="border border-gray-300 px-4 py-2">Ruler length</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">50 cm</td><td class="border border-gray-300 px-4 py-2">0.5 m</td><td class="border border-gray-300 px-4 py-2">Arm span (child)</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">100 cm</td><td class="border border-gray-300 px-4 py-2">1.0 m</td><td class="border border-gray-300 px-4 py-2">Guitar length</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">180 cm</td><td class="border border-gray-300 px-4 py-2">1.8 m</td><td class="border border-gray-300 px-4 py-2">Average height</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">200 cm</td><td class="border border-gray-300 px-4 py-2">2.0 m</td><td class="border border-gray-300 px-4 py-2">Door height</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-teal-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many centimeters are in a meter?</h3>
                    <p class="text-gray-600">There are exactly 100 centimeters in one meter. The prefix "centi" means one hundredth (1/100).</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why use centimeters instead of meters?</h3>
                    <p class="text-gray-600">Centimeters are more practical for smaller measurements like body dimensions, clothing sizes, and everyday objects where meters would result in small decimal numbers.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When should I convert to meters?</h3>
                    <p class="text-gray-600">Convert to meters for construction plans, scientific calculations, sports field measurements, and when working with larger distances or international standards.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Are centimeters used worldwide?</h3>
                    <p class="text-gray-600">Yes, centimeters are part of the metric system used globally except in the United States, which primarily uses inches for similar measurements.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-teal-600"></i>
                Related Distance Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/cm-to-meter.php" class="block p-4 bg-teal-50 rounded-lg hover:bg-teal-100 transition-colors">
                    <i class="fas fa-ruler text-teal-600 mb-2"></i>
                    <h3 class="font-semibold text-teal-800">Centimeters to Meters</h3>
                    <p class="text-sm text-teal-600">Alternative converter</p>
                </a>
                <a href="/cm-to-inches.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-ruler-vertical text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Centimeters to Inches</h3>
                    <p class="text-sm text-blue-600">Convert cm to in</p>
                </a>
                <a href="/cm-to-mm.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-arrows-alt-h text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Centimeters to Millimeters</h3>
                    <p class="text-sm text-purple-600">Convert cm to mm</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertCmToMeters() {
    const cmInput = document.getElementById('cmInput').value;
    const metersOutput = document.getElementById('metersOutput');
    
    if (cmInput === '' || isNaN(cmInput)) {
        metersOutput.value = '';
        return;
    }
    
    const cm = parseFloat(cmInput);
    const meters = cm / 100;
    
    // Format the result with appropriate decimal places
    if (meters >= 1) {
        metersOutput.value = meters.toFixed(2);
    } else if (meters >= 0.1) {
        metersOutput.value = meters.toFixed(3);
    } else {
        metersOutput.value = meters.toFixed(4);
    }
}

function setCm(value) {
    document.getElementById('cmInput').value = value;
    convertCmToMeters();
}

function copyResult() {
    const metersOutput = document.getElementById('metersOutput');
    metersOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('cmInput').addEventListener('input', convertCmToMeters);

// Handle Enter key
document.getElementById('cmInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertCmToMeters();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Centimeters to Meters Converter",
  "description": "Convert Centimeters (cm) to Meters (m) instantly with our professional length converter.",
  "url": "https://www.thiyagi.com/cm-to-m.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant centimeters to meters conversion",
    "Construction and tailoring applications",
    "Scientific measurements",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
