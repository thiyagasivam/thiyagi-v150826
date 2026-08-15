<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Quart to Cups Converter 2026 | Volume Conversion Tool | Free Calculator';
$description = 'Convert quarts to cups instantly with our 2026 accurate volume converter. Perfect for cooking, baking, and recipe measurements.';
$keywords = 'quart to cups converter 2026, volume conversion calculator, quart cup converter, cooking measurements, recipe calculator';
$canonical = 'https://www.thiyagi.com/quart-to-cups';

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
                <i class="fas fa-coffee text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Quart to Cups Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert quarts to cups instantly with our precise volume converter. Perfect for cooking, baking, and recipe scaling.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Quarts (qt)</label>
                    <input type="number" 
                           id="quartsInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter quarts"
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
                    <label class="block text-sm font-medium text-gray-700">Cups</label>
                    <div class="relative">
                        <input type="text" 
                               id="cupsResult" 
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 qt = 4 cups</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Quarts</h3>
                <p class="text-gray-600 mb-4">
                    A quart (qt) is a unit of volume measurement in the US customary system equal to one-quarter of a gallon. 
                    It's commonly used for larger liquid measurements in cooking and beverages.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 quart = 32 fluid ounces</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Cups</h3>
                <p class="text-gray-600 mb-4">
                    A cup is a unit of volume measurement commonly used in cooking and baking. 
                    The US customary cup equals 8 fluid ounces or approximately 237 milliliters.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 cup = 8 fluid ounces</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Quart to Cup Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1/4 qt</div>
                    <div class="text-sm text-gray-600">1 cup</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1/2 qt</div>
                    <div class="text-sm text-gray-600">2 cups</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1 qt</div>
                    <div class="text-sm text-gray-600">4 cups</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">2 qt</div>
                    <div class="text-sm text-gray-600">8 cups</div>
                </div>
            </div>
        </div>

        <!-- Recipe Scaling Guide -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Recipe Scaling Guide</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-3">Cooking Applications</h4>
                    <div class="space-y-2 text-sm text-orange-700">
                        <div>• Soup and stew recipes</div>
                        <div>• Large batch cooking</div>
                        <div>• Beverage preparation</div>
                        <div>• Sauce and marinade scaling</div>
                    </div>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-3">Baking Applications</h4>
                    <div class="space-y-2 text-sm text-purple-700">
                        <div>• Bread and dough recipes</div>
                        <div>• Large cake batters</div>
                        <div>• Cookie dough scaling</div>
                        <div>• Frosting and icing</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Volume Relationships -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">US Volume Relationships</h3>
            <div class="bg-gray-50 p-4 rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                    <div class="space-y-1">
                        <div><strong>1 gallon</strong> = 4 quarts</div>
                        <div><strong>1 quart</strong> = 2 pints</div>
                        <div><strong>1 pint</strong> = 2 cups</div>
                    </div>
                    <div class="space-y-1">
                        <div><strong>1 cup</strong> = 8 fl oz</div>
                        <div><strong>1 fl oz</strong> = 2 tablespoons</div>
                        <div><strong>1 tablespoon</strong> = 3 teaspoons</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="cups-to-quart.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cups to Quart</div>
                </a>
                <a href="quart-to-gallon.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Quart to Gallon</div>
                </a>
                <a href="cup-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cup to mL</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertQuartsToCups() {
    const quarts = parseFloat(document.getElementById('quartsInput').value);
    
    if (isNaN(quarts) || quarts < 0) {
        document.getElementById('cupsResult').value = '';
        document.getElementById('liveConversion').textContent = '1 qt = 4 cups';
        return;
    }
    
    // 1 quart = 4 cups
    const cups = quarts * 4;
    
    document.getElementById('cupsResult').value = cups.toString();
    document.getElementById('liveConversion').textContent = `${quarts} qt = ${cups} cups`;
}

function copyResult() {
    const result = document.getElementById('cupsResult');
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
document.getElementById('quartsInput').addEventListener('input', convertQuartsToCups);

// Initialize with default conversion
convertQuartsToCups();
</script>

<?php include 'footer.php'; ?>
