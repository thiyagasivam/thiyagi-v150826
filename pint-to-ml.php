<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Pint to ML Converter 2026 | Volume Conversion Tool | Free Calculator';
$description = 'Convert pints to milliliters instantly with our 2026 accurate volume converter. Perfect for cooking, brewing, and liquid measurements.';
$keywords = 'pint to ml converter 2026, volume conversion calculator, pint milliliter converter, cooking measurements, brewing calculator';
$canonical = 'https://www.thiyagi.com/pint-to-ml';

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

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-beer text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Pint to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pints to milliliters instantly with our precise volume converter. Perfect for cooking, brewing, and beverage measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Pints (pt)</label>
                    <input type="number" 
                           id="pintsInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter pints"
                           step="any">
                    <div class="flex gap-2 mt-2">
                        <button onclick="setPintType('us')" id="usBtn" class="flex-1 px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded-md hover:bg-blue-200 transition-colors">US Pint</button>
                        <button onclick="setPintType('uk')" id="ukBtn" class="flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">UK Pint</button>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-blue-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-blue-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Milliliters (mL)</label>
                    <div class="relative">
                        <input type="text" 
                               id="mlResult" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium"
                               readonly>
                        <button onclick="copyResult()" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-blue-600">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                <div class="text-center">
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 US pt = 473.176 mL</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Pints</h3>
                <p class="text-gray-600 mb-4">
                    A pint is a unit of volume measurement used primarily in the United States and United Kingdom. 
                    However, US and UK pints differ in size significantly.
                </p>
                <div class="space-y-2">
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-blue-800"><strong>US Pint = 473.176 mL</strong></p>
                    </div>
                    <div class="bg-green-50 p-3 rounded-lg">
                        <p class="text-sm text-green-800"><strong>UK Pint = 568.261 mL</strong></p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Milliliters</h3>
                <p class="text-gray-600 mb-4">
                    The milliliter (mL) is a metric unit of volume equal to one-thousandth of a liter. 
                    It's widely used in medicine, cooking, and scientific applications worldwide.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 mL = 0.001 liters</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Pint to mL Conversions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-blue-800 mb-3">US Pints to mL</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">1 pt</div>
                            <div class="text-xs text-gray-600">473 mL</div>
                        </div>
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">2 pt</div>
                            <div class="text-xs text-gray-600">946 mL</div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-green-800 mb-3">UK Pints to mL</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">1 pt</div>
                            <div class="text-xs text-gray-600">568 mL</div>
                        </div>
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">2 pt</div>
                            <div class="text-xs text-gray-600">1136 mL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usage Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-2">Cooking & Baking</h4>
                    <p class="text-sm text-orange-700">Recipe conversions and ingredient measurements</p>
                </div>
                <div class="p-4 bg-amber-50 rounded-lg">
                    <h4 class="font-semibold text-amber-800 mb-2">Brewing</h4>
                    <p class="text-sm text-amber-700">Beer and beverage production measurements</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">International Trade</h4>
                    <p class="text-sm text-blue-700">Converting between regional measurement systems</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="ml-to-l.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">mL to Liter</div>
                </a>
                <a href="pint-to-liter.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Pint to Liter</div>
                </a>
                <a href="gallon-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Gallon to mL</div>
                </a>
                <a href="cup-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cup to mL</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
let pintType = 'us'; // default to US pint

function setPintType(type) {
    pintType = type;
    
    // Update button styles
    const usBtn = document.getElementById('usBtn');
    const ukBtn = document.getElementById('ukBtn');
    
    if (type === 'us') {
        usBtn.className = 'flex-1 px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded-md hover:bg-blue-200 transition-colors';
        ukBtn.className = 'flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors';
    } else {
        usBtn.className = 'flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors';
        ukBtn.className = 'flex-1 px-3 py-1 text-xs bg-green-100 text-green-800 rounded-md hover:bg-green-200 transition-colors';
    }
    
    // Trigger conversion update
    convertPintsToML();
}

function convertPintsToML() {
    const pints = parseFloat(document.getElementById('pintsInput').value);
    
    if (isNaN(pints) || pints < 0) {
        document.getElementById('mlResult').value = '';
        if (pintType === 'us') {
            document.getElementById('liveConversion').textContent = '1 US pt = 473.176 mL';
        } else {
            document.getElementById('liveConversion').textContent = '1 UK pt = 568.261 mL';
        }
        return;
    }
    
    let ml;
    if (pintType === 'us') {
        // 1 US pint = 473.176473 mL
        ml = pints * 473.176473;
        document.getElementById('liveConversion').textContent = `${pints} US pt = ${ml.toFixed(3)} mL`;
    } else {
        // 1 UK pint = 568.26125 mL
        ml = pints * 568.26125;
        document.getElementById('liveConversion').textContent = `${pints} UK pt = ${ml.toFixed(3)} mL`;
    }
    
    document.getElementById('mlResult').value = ml.toFixed(3);
}

function copyResult() {
    const result = document.getElementById('mlResult');
    result.select();
    document.execCommand('copy');
    
    // Show success message
    const button = event.target;
    const original = button.innerHTML;
    button.innerHTML = '<i class="fas fa-check text-green-600"></i>';
    setTimeout(() => {
        button.innerHTML = original;
    }, 1000);
}

// Add event listener for real-time conversion
document.getElementById('pintsInput').addEventListener('input', convertPintsToML);

// Initialize with default conversion
convertPintsToML();
</script>

<?php include 'footer.php'; ?>
