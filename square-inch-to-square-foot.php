<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Square Inch to Square Foot Converter 2026 | Area Conversion Tool | Free Calculator';
$description = 'Convert square inches to square feet instantly with our 2026 accurate area converter. Perfect for construction, flooring, and measurement calculations.';
$keywords = 'square inch to square foot converter 2026, area conversion calculator, sq inch sq foot converter, construction calculator, flooring measurements';
$canonical = 'https://www.thiyagi.com/square-inch-to-square-foot';

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

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-emerald-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-600 text-white rounded-full mb-6">
                <i class="fas fa-square text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Square Inch to Square Foot Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square inches to square feet instantly with our precise area converter. Perfect for small area calculations and detailed measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Square Inches (sq in)</label>
                    <input type="number" 
                           id="sqInInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter square inches"
                           step="any">
                </div>

                <!-- Arrow -->
                <div class="flex justify-center">
                    <div class="bg-emerald-100 p-3 rounded-full">
                        <i class="fas fa-arrow-right text-emerald-600 text-xl"></i>
                    </div>
                </div>

                <!-- Output -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Square Feet (sq ft)</label>
                    <div class="relative">
                        <input type="text" 
                               id="sqFtResult" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium"
                               readonly>
                        <button onclick="copyResult()" 
                                class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-emerald-600">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Conversion Display -->
            <div class="mt-8 p-4 bg-emerald-50 rounded-lg">
                <div class="text-center">
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">144 sq in = 1 sq ft</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Inches</h3>
                <p class="text-gray-600 mb-4">
                    A square inch (sq in or in²) is a unit of area measurement equal to the area of a square with sides of one inch. 
                    It's commonly used for small area measurements and detailed calculations.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 sq in = 6.452 cm²</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Feet</h3>
                <p class="text-gray-600 mb-4">
                    A square foot (sq ft or ft²) is a unit of area measurement equal to the area of a square with sides of one foot. 
                    It's widely used in construction, real estate, and interior design.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 sq ft = 144 sq in</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Square Inch to Square Foot Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">72 sq in</div>
                    <div class="text-sm text-gray-600">0.5 sq ft</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">144 sq in</div>
                    <div class="text-sm text-gray-600">1 sq ft</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">288 sq in</div>
                    <div class="text-sm text-gray-600">2 sq ft</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">1,440 sq in</div>
                    <div class="text-sm text-gray-600">10 sq ft</div>
                </div>
            </div>
        </div>

        <!-- Visual Guide -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Visual Reference</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Square Inch Examples</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div>• Postage stamp: ~1 sq in</div>
                        <div>• Credit card: ~5.4 sq in</div>
                        <div>• Business card: ~6 sq in</div>
                        <div>• Smartphone screen: ~15-25 sq in</div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Square Foot Examples</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div>• Floor tile: ~1 sq ft</div>
                        <div>• Small table: ~4-6 sq ft</div>
                        <div>• Desk surface: ~8-12 sq ft</div>
                        <div>• Small room: ~100-150 sq ft</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculation Formula -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Conversion Formula</h3>
            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                <p class="text-lg font-mono text-center">Square Feet = Square Inches ÷ 144</p>
            </div>
            <div class="text-sm text-gray-600">
                <p><strong>Why 144?</strong> Because 1 foot = 12 inches, so 1 square foot = 12 × 12 = 144 square inches.</p>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Manufacturing</h4>
                    <p class="text-sm text-purple-700">Small part surface area calculations</p>
                </div>
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-2">Crafts & Design</h4>
                    <p class="text-sm text-orange-700">Material planning and pattern making</p>
                </div>
                <div class="p-4 bg-red-50 rounded-lg">
                    <h4 class="font-semibold text-red-800 mb-2">Engineering</h4>
                    <p class="text-sm text-red-700">Detailed technical drawings and specifications</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Area Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="square-foot-to-square-inch.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq ft to sq in</div>
                </a>
                <a href="square-feet-to-square-yards.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq ft to sq yd</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqInToSqFt() {
    const sqIn = parseFloat(document.getElementById('sqInInput').value);
    
    if (isNaN(sqIn) || sqIn < 0) {
        document.getElementById('sqFtResult').value = '';
        document.getElementById('liveConversion').textContent = '144 sq in = 1 sq ft';
        return;
    }
    
    // 1 square foot = 144 square inches
    const sqFt = sqIn / 144;
    
    document.getElementById('sqFtResult').value = sqFt.toFixed(6);
    document.getElementById('liveConversion').textContent = `${sqIn.toLocaleString()} sq in = ${sqFt.toFixed(6)} sq ft`;
}

function copyResult() {
    const result = document.getElementById('sqFtResult');
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
document.getElementById('sqInInput').addEventListener('input', convertSqInToSqFt);

// Initialize with default conversion
convertSqInToSqFt();
</script>

<?php include 'footer.php'; ?>
