<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Foot-Pound to Newton-Meter Converter 2026 | Torque Conversion Tool | Free Calculator';
$description = 'Convert foot-pounds to newton-meters instantly with our 2026 accurate torque converter. Perfect for automotive, engineering, and mechanical calculations.';
$keywords = 'ft lb to nm converter 2026, torque conversion calculator, foot pound newton meter converter, automotive torque, engineering calculator';
$canonical = 'https://www.thiyagi.com/ft-lb-to-nm';

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

<div class="min-h-screen bg-gradient-to-br from-amber-50 to-yellow-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-amber-600 hover:text-amber-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/nm-to-ft-lb.php" class="text-amber-600 hover:text-amber-800">Energy Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Foot-pounds to Newton-meters Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-wrench text-amber-600 mr-3"></i>
                    Foot-pounds to Newton-meters Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Foot-pounds (ft-lb) to Newton-meters (Nm) instantly with our professional torque converter. 
                    Perfect for automotive work, engineering, machinery, and international specifications.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="ftlbInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-tools mr-2 text-amber-600"></i>Foot-pounds (ft-lb)
                        </label>
                        <input
                            type="number"
                            id="ftlbInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 text-lg"
                            placeholder="Enter foot-pounds"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-amber-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-amber-800 mb-2">Common Torque Values:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setFtLb(100)" class="text-amber-600 hover:text-amber-800 text-left">100 ft-lb</button>
                            <button onclick="setFtLb(50)" class="text-amber-600 hover:text-amber-800 text-left">50 ft-lb</button>
                            <button onclick="setFtLb(25)" class="text-amber-600 hover:text-amber-800 text-left">25 ft-lb</button>
                            <button onclick="setFtLb(10)" class="text-amber-600 hover:text-amber-800 text-left">10 ft-lb</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-cog mr-2 text-red-600"></i>Newton-meters (Nm)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="nmOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-amber-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-red-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-red-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-red-700">Nm = ft-lb × 1.35582</p>
                        <p class="text-xs text-red-600 mt-1">1 ft-lb = 1.35582 Nm</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-car text-amber-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Automotive</h4>
                    <p class="text-sm text-gray-600">US to metric specs</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-globe text-blue-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">International</h4>
                    <p class="text-sm text-gray-600">Global specifications</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-industry text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Machinery</h4>
                    <p class="text-sm text-gray-600">Equipment standards</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-amber-600"></i>
                Foot-pounds to Newton-meters Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-amber-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Foot-pounds (ft-lb)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Newton-meters (Nm)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">10 ft-lb</td><td class="border border-gray-300 px-4 py-2">13.56 Nm</td><td class="border border-gray-300 px-4 py-2">Small bolts</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">25 ft-lb</td><td class="border border-gray-300 px-4 py-2">33.90 Nm</td><td class="border border-gray-300 px-4 py-2">Wheel lugs</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">50 ft-lb</td><td class="border border-gray-300 px-4 py-2">67.79 Nm</td><td class="border border-gray-300 px-4 py-2">Engine parts</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">100 ft-lb</td><td class="border border-gray-300 px-4 py-2">135.58 Nm</td><td class="border border-gray-300 px-4 py-2">Heavy fasteners</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">150 ft-lb</td><td class="border border-gray-300 px-4 py-2">203.37 Nm</td><td class="border border-gray-300 px-4 py-2">Large machinery</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">200 ft-lb</td><td class="border border-gray-300 px-4 py-2">271.16 Nm</td><td class="border border-gray-300 px-4 py-2">Industrial equipment</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-amber-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why convert foot-pounds to newton-meters?</h3>
                    <p class="text-gray-600">Foot-pounds (Imperial) need conversion to newton-meters (metric) when working with international specifications, global manufacturing, or scientific applications.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Which unit is larger?</h3>
                    <p class="text-gray-600">A foot-pound is larger than a newton-meter. 1 ft-lb equals approximately 1.356 Nm, so newton-meters are smaller units requiring larger numbers.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When is this conversion critical?</h3>
                    <p class="text-gray-600">This conversion is essential in automotive repair with imported vehicles, international engineering projects, and when following global manufacturing standards.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Are torque specifications interchangeable?</h3>
                    <p class="text-gray-600">No, always use the exact unit specified by the manufacturer. Torque specifications are critical for safety and proper assembly of mechanical components.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-amber-600"></i>
                Related Energy Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/nm-to-ft-lb.php" class="block p-4 bg-amber-50 rounded-lg hover:bg-amber-100 transition-colors">
                    <i class="fas fa-wrench text-amber-600 mb-2"></i>
                    <h3 class="font-semibold text-amber-800">Newton-meters to Foot-pounds</h3>
                    <p class="text-sm text-amber-600">Reverse conversion</p>
                </a>
                <a href="/newtons-to-lbs.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-tools text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Newtons to Pounds-force</h3>
                    <p class="text-sm text-blue-600">Force conversion</p>
                </a>
                <a href="/watt-to-horsepower.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-bolt text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Watts to Horsepower</h3>
                    <p class="text-sm text-purple-600">Power conversion</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertFtLbToNm() {
    const ftlbInput = document.getElementById('ftlbInput').value;
    const nmOutput = document.getElementById('nmOutput');
    
    if (ftlbInput === '' || isNaN(ftlbInput)) {
        nmOutput.value = '';
        return;
    }
    
    const ftlb = parseFloat(ftlbInput);
    const nm = ftlb * 1.35582;
    
    // Format the result with appropriate decimal places
    if (nm >= 100) {
        nmOutput.value = nm.toFixed(1);
    } else if (nm >= 10) {
        nmOutput.value = nm.toFixed(2);
    } else {
        nmOutput.value = nm.toFixed(3);
    }
}

function setFtLb(value) {
    document.getElementById('ftlbInput').value = value;
    convertFtLbToNm();
}

function copyResult() {
    const nmOutput = document.getElementById('nmOutput');
    nmOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('ftlbInput').addEventListener('input', convertFtLbToNm);

// Handle Enter key
document.getElementById('ftlbInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertFtLbToNm();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Foot-pounds to Newton-meters Converter",
  "description": "Convert Foot-pounds (ft-lb) to Newton-meters (Nm) instantly with our professional torque converter.",
  "url": "https://www.thiyagi.com/ft-lb-to-nm.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant foot-pounds to newton-meters conversion",
    "Automotive torque specifications",
    "International engineering standards",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
