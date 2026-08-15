<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Fluid Ounce (US) to Milliliter Converter 2026 | Volume Conversion Tool | Free Calculator';
$description = 'Convert US fluid ounces to milliliters instantly with our 2026 accurate volume converter. Perfect for cooking, medicine, and liquid measurements.';
$keywords = 'fluid ounce us to milliliter converter 2026, volume conversion calculator, fl oz ml converter, cooking measurements, medicine dosage';
$canonical = 'https://www.thiyagi.com/fluid-ounce-us-to-milliliter';

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
                <i class="fas fa-wine-glass text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                US Fluid Ounce to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US fluid ounces to milliliters instantly with our precise volume converter. Perfect for cooking, medicine, and beverage measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">US Fluid Ounces (fl oz)</label>
                    <input type="number" 
                           id="flozInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter fluid ounces"
                           step="any">
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 fl oz = 29.574 mL</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About US Fluid Ounces</h3>
                <p class="text-gray-600 mb-4">
                    The US fluid ounce (fl oz) is a unit of volume measurement used in the United States customary system. 
                    It's commonly used for measuring beverages, cooking ingredients, and liquid medications.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 US fl oz = 29.5735 mL</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Milliliters</h3>
                <p class="text-gray-600 mb-4">
                    The milliliter (mL) is a metric unit of volume equal to one-thousandth of a liter. 
                    It's widely used internationally for precise liquid measurements in medicine, cooking, and science.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 mL = 0.001 liters</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common US fl oz to mL Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1 fl oz</div>
                    <div class="text-sm text-gray-600">29.6 mL</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">2 fl oz</div>
                    <div class="text-sm text-gray-600">59.1 mL</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">8 fl oz</div>
                    <div class="text-sm text-gray-600">236.6 mL</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">16 fl oz</div>
                    <div class="text-sm text-gray-600">473.2 mL</div>
                </div>
            </div>
        </div>

        <!-- Cooking & Medicine Guide -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Cooking & Medicine Reference</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-3">Common Cooking Measurements</h4>
                    <div class="space-y-2 text-sm text-orange-700">
                        <div class="flex justify-between">
                            <span>1 tablespoon</span>
                            <span>0.5 fl oz (14.8 mL)</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1/4 cup</span>
                            <span>2 fl oz (59.1 mL)</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1/2 cup</span>
                            <span>4 fl oz (118.3 mL)</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1 cup</span>
                            <span>8 fl oz (236.6 mL)</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Medicine Dosing</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div class="flex justify-between">
                            <span>1 teaspoon</span>
                            <span>0.17 fl oz (5 mL)</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1 tablespoon</span>
                            <span>0.5 fl oz (15 mL)</span>
                        </div>
                        <div class="flex justify-between">
                            <span>2 tablespoons</span>
                            <span>1 fl oz (30 mL)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Cooking & Baking</h4>
                    <p class="text-sm text-yellow-700">Recipe conversions and ingredient measurements</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Medicine</h4>
                    <p class="text-sm text-green-700">Liquid medication dosing and pharmacy calculations</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Beverages</h4>
                    <p class="text-sm text-blue-700">Drink recipes and beverage industry measurements</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                
                <a href="fluid-ounce-us-to-gallon-us.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">fl oz to US Gallon</div>
                </a>
                <a href="cup-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cup to mL</div>
                </a>
                <a href="tablespoon-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Tablespoon to mL</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertFlOzToML() {
    const floz = parseFloat(document.getElementById('flozInput').value);
    
    if (isNaN(floz) || floz < 0) {
        document.getElementById('mlResult').value = '';
        document.getElementById('liveConversion').textContent = '1 fl oz = 29.574 mL';
        return;
    }
    
    // 1 US fluid ounce = 29.5735296875 mL
    const ml = floz * 29.5735296875;
    
    document.getElementById('mlResult').value = ml.toFixed(3);
    document.getElementById('liveConversion').textContent = `${floz} fl oz = ${ml.toFixed(3)} mL`;
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
document.getElementById('flozInput').addEventListener('input', convertFlOzToML);

// Initialize with default conversion
convertFlOzToML();
</script>

<?php include 'footer.php'; ?>
