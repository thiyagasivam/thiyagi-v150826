<?php include 'header.php'; ?>
<title>Newton-Meter to Foot-Pound Converter 2026 | Torque Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert newton-meters to foot-pounds instantly with our 2026 accurate torque converter. Perfect for automotive, engineering, and mechanical calculations.">
<meta name="keywords" content="nm to ft lb converter 2026, torque conversion calculator, newton meter foot pound converter, automotive torque, engineering calculator">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-pink-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-red-600 hover:text-red-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/ft-lb-to-nm.php" class="text-red-600 hover:text-red-800">Energy Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Newton-meters to Foot-pounds Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-cog text-red-600 mr-3"></i>
                    Newton-meters to Foot-pounds Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Newton-meters (Nm) to Foot-pounds (ft-lb) instantly with our professional torque converter. 
                    Perfect for automotive work, engineering, machinery, and mechanical applications.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="nmInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-bolt mr-2 text-red-600"></i>Newton-meters (Nm)
                        </label>
                        <input
                            type="number"
                            id="nmInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 text-lg"
                            placeholder="Enter newton-meters"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-red-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-red-800 mb-2">Common Torque Values:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setNm(100)" class="text-red-600 hover:text-red-800 text-left">100 Nm</button>
                            <button onclick="setNm(200)" class="text-red-600 hover:text-red-800 text-left">200 Nm</button>
                            <button onclick="setNm(50)" class="text-red-600 hover:text-red-800 text-left">50 Nm</button>
                            <button onclick="setNm(10)" class="text-red-600 hover:text-red-800 text-left">10 Nm</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-wrench mr-2 text-blue-600"></i>Foot-pounds (ft-lb)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="ftlbOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-red-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-blue-700">ft-lb = Nm × 0.737562</p>
                        <p class="text-xs text-blue-600 mt-1">1 Nm = 0.737562 ft-lb</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-car text-red-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Automotive</h4>
                    <p class="text-sm text-gray-600">Engine and wheel torque</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-tools text-orange-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Engineering</h4>
                    <p class="text-sm text-gray-600">Mechanical design</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-industry text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Manufacturing</h4>
                    <p class="text-sm text-gray-600">Machinery specifications</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-red-600"></i>
                Newton-meters to Foot-pounds Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-red-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Newton-meters (Nm)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Foot-pounds (ft-lb)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">10 Nm</td><td class="border border-gray-300 px-4 py-2">7.38 ft-lb</td><td class="border border-gray-300 px-4 py-2">Small bolts</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">50 Nm</td><td class="border border-gray-300 px-4 py-2">36.88 ft-lb</td><td class="border border-gray-300 px-4 py-2">Wheel bolts</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">100 Nm</td><td class="border border-gray-300 px-4 py-2">73.76 ft-lb</td><td class="border border-gray-300 px-4 py-2">Engine components</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">200 Nm</td><td class="border border-gray-300 px-4 py-2">147.51 ft-lb</td><td class="border border-gray-300 px-4 py-2">Heavy machinery</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">300 Nm</td><td class="border border-gray-300 px-4 py-2">221.27 ft-lb</td><td class="border border-gray-300 px-4 py-2">Large engines</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">500 Nm</td><td class="border border-gray-300 px-4 py-2">368.78 ft-lb</td><td class="border border-gray-300 px-4 py-2">Industrial equipment</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-red-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What is torque and why convert between units?</h3>
                    <p class="text-gray-600">Torque is rotational force. Newton-meters (metric) and foot-pounds (imperial) are both torque units. Conversion is needed when working with international specifications.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Which is larger, Nm or ft-lb?</h3>
                    <p class="text-gray-600">Newton-meters are larger. 1 Nm equals approximately 0.738 ft-lb, so you need more foot-pounds to equal the same torque as newton-meters.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When is this conversion important?</h3>
                    <p class="text-gray-600">This conversion is crucial in automotive repair, engineering projects, machinery installation, and when following torque specifications from different countries.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Are torque specifications critical?</h3>
                    <p class="text-gray-600">Yes, proper torque prevents damage from over-tightening or failure from under-tightening. Always follow manufacturer specifications exactly.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-red-600"></i>
                Related Energy Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/ft-lb-to-nm.php" class="block p-4 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                    <i class="fas fa-cog text-red-600 mb-2"></i>
                    <h3 class="font-semibold text-red-800">Foot-pounds to Newton-meters</h3>
                    <p class="text-sm text-red-600">Reverse conversion</p>
                </a>
                <a href="/newtons-to-lbs.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-bolt text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Newtons to Pounds-force</h3>
                    <p class="text-sm text-blue-600">Force conversion</p>
                </a>
                <a href="/horsepower-to-watt.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-tachometer-alt text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Horsepower to Watts</h3>
                    <p class="text-sm text-purple-600">Power conversion</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertNmToFtLb() {
    const nmInput = document.getElementById('nmInput').value;
    const ftlbOutput = document.getElementById('ftlbOutput');
    
    if (nmInput === '' || isNaN(nmInput)) {
        ftlbOutput.value = '';
        return;
    }
    
    const nm = parseFloat(nmInput);
    const ftlb = nm * 0.737562;
    
    // Format the result with appropriate decimal places
    if (ftlb >= 100) {
        ftlbOutput.value = ftlb.toFixed(1);
    } else if (ftlb >= 10) {
        ftlbOutput.value = ftlb.toFixed(2);
    } else {
        ftlbOutput.value = ftlb.toFixed(3);
    }
}

function setNm(value) {
    document.getElementById('nmInput').value = value;
    convertNmToFtLb();
}

function copyResult() {
    const ftlbOutput = document.getElementById('ftlbOutput');
    ftlbOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('nmInput').addEventListener('input', convertNmToFtLb);

// Handle Enter key
document.getElementById('nmInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertNmToFtLb();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Newton-meters to Foot-pounds Converter",
  "description": "Convert Newton-meters (Nm) to Foot-pounds (ft-lb) instantly with our professional torque converter.",
  "url": "https://www.thiyagi.com/nm-to-ft-lb.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant newton-meters to foot-pounds conversion",
    "Automotive torque specifications",
    "Engineering and machinery applications",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
