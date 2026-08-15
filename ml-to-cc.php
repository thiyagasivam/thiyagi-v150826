<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'ML to CC Converter 2026 | Volume Conversion Tool | Free Calculator';
$description = 'Convert milliliters to cubic centimeters instantly with our 2026 accurate volume converter. Perfect for medical, scientific, and laboratory calculations.';
$keywords = 'ml to cc converter 2026, volume conversion calculator, milliliter cubic centimeter converter, medical measurements, laboratory calculator';
$canonical = 'https://www.thiyagi.com/ml-to-cc';

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
                <i class="fas fa-flask text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Milliliter to Cubic Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milliliters to cubic centimeters (cc) instantly. Perfect for medical dosing, engine displacement, and scientific measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Milliliters (mL)</label>
                    <input type="number" 
                           id="mlInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter milliliters"
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
                    <label class="block text-sm font-medium text-gray-700">Cubic Centimeters (cc)</label>
                    <div class="relative">
                        <input type="text" 
                               id="ccResult" 
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 mL = 1 cc</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Milliliters</h3>
                <p class="text-gray-600 mb-4">
                    The milliliter (mL) is a metric unit of volume equal to one-thousandth of a liter. 
                    It's commonly used in medicine, cooking, and scientific applications for measuring small liquid volumes.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 mL = 0.001 liters</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Cubic Centimeters</h3>
                <p class="text-gray-600 mb-4">
                    Cubic centimeter (cc or cm³) is a unit of volume measurement. In medical and automotive contexts, 
                    cc is often preferred over mL, though they are exactly equivalent.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 cc = 1 mL (exactly)</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common mL to cc Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1 mL</div>
                    <div class="text-sm text-gray-600">1 cc</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">5 mL</div>
                    <div class="text-sm text-gray-600">5 cc</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">10 mL</div>
                    <div class="text-sm text-gray-600">10 cc</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">100 mL</div>
                    <div class="text-sm text-gray-600">100 cc</div>
                </div>
            </div>
        </div>

        <!-- Usage Information -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">When to Use mL vs cc</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Milliliters (mL) commonly used for:</h4>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>• Cooking and recipes</li>
                        <li>• Laboratory measurements</li>
                        <li>• Liquid medications</li>
                        <li>• Beverage volumes</li>
                    </ul>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Cubic Centimeters (cc) commonly used for:</h4>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>• Engine displacement</li>
                        <li>• Medical syringes</li>
                        <li>• Scientific equipment</li>
                        <li>• Motorcycle engines</li>
                    </ul>
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
                <a href="cc-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">cc to mL</div>
                </a>
                <a href="ml-to-ounce.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">mL to Fluid Ounce</div>
                </a>
                <a href="gallon-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Gallon to mL</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertMLToCC() {
    const ml = parseFloat(document.getElementById('mlInput').value);
    
    if (isNaN(ml) || ml < 0) {
        document.getElementById('ccResult').value = '';
        document.getElementById('liveConversion').textContent = '1 mL = 1 cc';
        return;
    }
    
    // 1 mL = 1 cc (exactly)
    const cc = ml;
    
    document.getElementById('ccResult').value = cc.toString();
    document.getElementById('liveConversion').textContent = `${ml} mL = ${cc} cc`;
}

function copyResult() {
    const result = document.getElementById('ccResult');
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
document.getElementById('mlInput').addEventListener('input', convertMLToCC);

// Initialize with default conversion
convertMLToCC();
</script>

<?php include 'footer.php'; ?>
