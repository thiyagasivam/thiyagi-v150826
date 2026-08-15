<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Liters to Cubic Inches Converter 2026 | Volume Conversion Tool | Free Calculator';
$description = 'Convert liters to cubic inches instantly with our 2026 accurate volume converter. Perfect for engineering, automotive, and scientific calculations.';
$keywords = 'liters to cubic inches converter 2026, volume conversion calculator, liters cubic inches converter, engineering calculator, automotive volume';
$canonical = 'https://www.thiyagi.com/liters-to-cubic-inches';

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
                <i class="fas fa-cube text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Liters to Cubic Inches Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to cubic inches instantly. Perfect for automotive engine displacement and mechanical calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Liters (L)</label>
                    <input type="number" 
                           id="litersInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter liters"
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
                    <label class="block text-sm font-medium text-gray-700">Cubic Inches (cu in)</label>
                    <div class="relative">
                        <input type="text" 
                               id="cuInResult" 
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 L = 61.024 cu in</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Liters</h3>
                <p class="text-gray-600 mb-4">
                    The liter (L) is a metric unit of volume measurement. It's commonly used for engine displacement 
                    in automotive applications and general volume measurements.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 Liter = 1,000 cubic centimeters</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Cubic Inches</h3>
                <p class="text-gray-600 mb-4">
                    Cubic inch (cu in or in³) is an imperial unit of volume commonly used in the United States 
                    for measuring engine displacement and small volumes.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 cu in = 16.387 cubic centimeters</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Engine Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Engine Displacement Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1.0 L</div>
                    <div class="text-sm text-gray-600">61 cu in</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">2.0 L</div>
                    <div class="text-sm text-gray-600">122 cu in</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">3.0 L</div>
                    <div class="text-sm text-gray-600">183 cu in</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">5.0 L</div>
                    <div class="text-sm text-gray-600">305 cu in</div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-red-50 rounded-lg">
                    <h4 class="font-semibold text-red-800 mb-2">Automotive</h4>
                    <p class="text-sm text-red-700">Engine displacement conversions between metric and imperial</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Engineering</h4>
                    <p class="text-sm text-blue-700">Volume calculations for mechanical components</p>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-2">Manufacturing</h4>
                    <p class="text-sm text-gray-700">Converting between metric and imperial volume specifications</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="cubic-inches-to-liters.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cubic Inches to Liters</div>
                </a>
                <a href="liter-to-gallon.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Liter to Gallon</div>
                </a>
                <a href="cubic-feet-to-cubic-meter.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cubic Feet to m³</div>
                </a>
                <a href="ml-to-l.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">mL to Liter</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertLitersToCubicInches() {
    const liters = parseFloat(document.getElementById('litersInput').value);
    
    if (isNaN(liters) || liters < 0) {
        document.getElementById('cuInResult').value = '';
        document.getElementById('liveConversion').textContent = '1 L = 61.024 cu in';
        return;
    }
    
    // 1 liter = 61.0237441 cubic inches
    const cubicInches = liters * 61.0237441;
    
    document.getElementById('cuInResult').value = cubicInches.toFixed(3);
    document.getElementById('liveConversion').textContent = `${liters} L = ${cubicInches.toFixed(3)} cu in`;
}

function copyResult() {
    const result = document.getElementById('cuInResult');
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
document.getElementById('litersInput').addEventListener('input', convertLitersToCubicInches);

// Initialize with default conversion
convertLitersToCubicInches();
</script>

<?php include 'footer.php'; ?>
