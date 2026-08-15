<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Meters to Yards Converter 2026 | Length Conversion Tool | Free Calculator';
$description = 'Convert meters to yards instantly with our 2026 accurate length converter. Perfect for sports, construction, and distance measurements.';
$keywords = 'meters to yards converter 2026, length conversion calculator, meter yard converter, sports measurements, construction calculator';
$canonical = 'https://www.thiyagi.com/meters-to-yards';

$meta_tags = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
$meta_tags .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
$meta_tags .= '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";

// Replace the canonical URL and add our meta tags
$header_content = str_replace(
    $meta_tags,
    $header_content
);

echo $header_content;
?>

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-green-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-emerald-600 hover:text-emerald-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/meters-to-feet.php" class="text-emerald-600 hover:text-emerald-800">Distance Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Meters to Yards Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-ruler-horizontal text-emerald-600 mr-3"></i>
                    Meters to Yards Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Meters (m) to Yards (yd) instantly with our professional distance converter. 
                    Perfect for sports fields, construction, fabric measurements, and athletic events.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="metersInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-ruler mr-2 text-emerald-600"></i>Meters (m)
                        </label>
                        <input
                            type="number"
                            id="metersInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-lg"
                            placeholder="Enter meters"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-emerald-800 mb-2">Common Distances:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setMeters(100)" class="text-emerald-600 hover:text-emerald-800 text-left">100 m (track)</button>
                            <button onclick="setMeters(91.44)" class="text-emerald-600 hover:text-emerald-800 text-left">91.44 m (100 yd)</button>
                            <button onclick="setMeters(10)" class="text-emerald-600 hover:text-emerald-800 text-left">10 m</button>
                            <button onclick="setMeters(1)" class="text-emerald-600 hover:text-emerald-800 text-left">1 m</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-arrows-alt-h mr-2 text-blue-600"></i>Yards (yd)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="yardsOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-emerald-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-blue-700">Yards = Meters × 1.09361</p>
                        <p class="text-xs text-blue-600 mt-1">1 Meter = 1.09361 Yards</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-football-ball text-emerald-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Sports Fields</h4>
                    <p class="text-sm text-gray-600">Football, soccer measurements</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-cut text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Fabric & Textiles</h4>
                    <p class="text-sm text-gray-600">Clothing and material</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-hammer text-orange-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Construction</h4>
                    <p class="text-sm text-gray-600">Building measurements</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-emerald-600"></i>
                Meters to Yards Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-emerald-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Meters (m)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Yards (yd)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">1 m</td><td class="border border-gray-300 px-4 py-2">1.094 yd</td><td class="border border-gray-300 px-4 py-2">Basic measurement</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">10 m</td><td class="border border-gray-300 px-4 py-2">10.94 yd</td><td class="border border-gray-300 px-4 py-2">Room length</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">50 m</td><td class="border border-gray-300 px-4 py-2">54.68 yd</td><td class="border border-gray-300 px-4 py-2">Swimming pool</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">91.44 m</td><td class="border border-gray-300 px-4 py-2">100.00 yd</td><td class="border border-gray-300 px-4 py-2">Football field length</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">100 m</td><td class="border border-gray-300 px-4 py-2">109.36 yd</td><td class="border border-gray-300 px-4 py-2">Sprint track</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">200 m</td><td class="border border-gray-300 px-4 py-2">218.72 yd</td><td class="border border-gray-300 px-4 py-2">Track straightaway</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-emerald-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many yards are in a meter?</h3>
                    <p class="text-gray-600">One meter equals approximately 1.09361 yards. This conversion factor is derived from the exact definitions of both units.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Which is longer, meter or yard?</h3>
                    <p class="text-gray-600">A meter is slightly longer than a yard. One meter equals about 1.094 yards, or roughly 9.4% longer than a yard.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why do sports use different units?</h3>
                    <p class="text-gray-600">American football uses yards (Imperial system), while international sports like soccer and track use meters (metric system). This reflects different measurement traditions.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this conversion used in fabric?</h3>
                    <p class="text-gray-600">Yes, fabric is often sold by the yard in the US but measured in meters internationally. This converter helps with textile calculations and purchases.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-emerald-600"></i>
                Related Distance Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/yards-to-meters.php" class="block p-4 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <i class="fas fa-ruler-horizontal text-emerald-600 mb-2"></i>
                    <h3 class="font-semibold text-emerald-800">Yards to Meters</h3>
                    <p class="text-sm text-emerald-600">Reverse conversion</p>
                </a>
                <a href="/meters-to-feet.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-ruler text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Meters to Feet</h3>
                    <p class="text-sm text-blue-600">Convert m to ft</p>
                </a>
                <a href="/meters-to-inches.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-arrows-alt-h text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Meters to Inches</h3>
                    <p class="text-sm text-purple-600">Convert m to in</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMetersToYards() {
    const metersInput = document.getElementById('metersInput').value;
    const yardsOutput = document.getElementById('yardsOutput');
    
    if (metersInput === '' || isNaN(metersInput)) {
        yardsOutput.value = '';
        return;
    }
    
    const meters = parseFloat(metersInput);
    const yards = meters * 1.09361;
    
    // Format the result with appropriate decimal places
    if (yards >= 100) {
        yardsOutput.value = yards.toFixed(2);
    } else if (yards >= 10) {
        yardsOutput.value = yards.toFixed(3);
    } else {
        yardsOutput.value = yards.toFixed(4);
    }
}

function setMeters(value) {
    document.getElementById('metersInput').value = value;
    convertMetersToYards();
}

function copyResult() {
    const yardsOutput = document.getElementById('yardsOutput');
    yardsOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('metersInput').addEventListener('input', convertMetersToYards);

// Handle Enter key
document.getElementById('metersInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertMetersToYards();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Meters to Yards Converter",
  "description": "Convert Meters (m) to Yards (yd) instantly with our professional distance converter.",
  "url": "https://www.thiyagi.com/meters-to-yards.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant meters to yards conversion",
    "Sports field measurements",
    "Fabric and textile calculations",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
