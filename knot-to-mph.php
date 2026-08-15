<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Knot to MPH Converter 2026 | Speed Conversion Tool | Free Calculator';
$description = 'Convert knots to miles per hour instantly with our 2026 accurate speed converter. Perfect for aviation, marine navigation, and speed calculations.';
$keywords = 'knot to mph converter 2026, speed conversion calculator, knots mph converter, aviation calculator, marine navigation';
$canonical = 'https://www.thiyagi.com/knot-to-mph';

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
                <i class="fas fa-ship text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Knot to MPH Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert knots to miles per hour instantly with our precise speed converter. Perfect for marine navigation, aviation, and weather reporting.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Knots (kn)</label>
                    <input type="number" 
                           id="knotsInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter knots"
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
                    <label class="block text-sm font-medium text-gray-700">Miles per Hour (mph)</label>
                    <div class="relative">
                        <input type="text" 
                               id="mphResult" 
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
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">1 knot = 1.151 mph</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Knots</h3>
                <p class="text-gray-600 mb-4">
                    A knot (kn) is a unit of speed equal to one nautical mile per hour. It's the standard unit 
                    for measuring speed in marine and aviation contexts worldwide.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 knot = 1 nautical mile per hour</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Miles per Hour</h3>
                <p class="text-gray-600 mb-4">
                    Miles per hour (mph) is a unit of speed expressing the number of statute miles 
                    covered in one hour. It's commonly used for land transportation in the United States.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 mph = 1 statute mile per hour</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Knot to MPH Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">10 kn</div>
                    <div class="text-sm text-gray-600">11.5 mph</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">20 kn</div>
                    <div class="text-sm text-gray-600">23.0 mph</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">50 kn</div>
                    <div class="text-sm text-gray-600">57.5 mph</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">100 kn</div>
                    <div class="text-sm text-gray-600">115.1 mph</div>
                </div>
            </div>
        </div>

        <!-- Speed References -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Speed Reference Guide</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Marine Speeds</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div class="flex justify-between">
                            <span>Sailing yacht (5 kn)</span>
                            <span>5.8 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Cruise ship (25 kn)</span>
                            <span>28.8 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Speedboat (40 kn)</span>
                            <span>46.0 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Naval vessel (30 kn)</span>
                            <span>34.5 mph</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Aviation Speeds</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div class="flex justify-between">
                            <span>Small aircraft (100 kn)</span>
                            <span>115.1 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Airliner cruise (450 kn)</span>
                            <span>518.0 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Helicopter (120 kn)</span>
                            <span>138.1 mph</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Glider (50 kn)</span>
                            <span>57.5 mph</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nautical vs Statute Miles -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Nautical vs Statute Miles</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-3">Nautical Mile</h4>
                    <div class="space-y-2 text-sm text-purple-700">
                        <div>• Length: 6,076 feet</div>
                        <div>• Based on Earth's circumference</div>
                        <div>• 1' of latitude = 1 nautical mile</div>
                        <div>• Used in marine and aviation</div>
                    </div>
                </div>
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-3">Statute Mile</h4>
                    <div class="space-y-2 text-sm text-orange-700">
                        <div>• Length: 5,280 feet</div>
                        <div>• Historical land measurement</div>
                        <div>• Used in road transportation</div>
                        <div>• Common in United States</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wind Speed Scale -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Beaufort Wind Scale Reference</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between p-2 bg-green-50 rounded">
                        <span>Light breeze (4-7 kn)</span>
                        <span>4.6-8.1 mph</span>
                    </div>
                    <div class="flex justify-between p-2 bg-yellow-50 rounded">
                        <span>Moderate breeze (11-16 kn)</span>
                        <span>12.7-18.4 mph</span>
                    </div>
                    <div class="flex justify-between p-2 bg-orange-50 rounded">
                        <span>Fresh breeze (17-21 kn)</span>
                        <span>19.6-24.2 mph</span>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between p-2 bg-red-50 rounded">
                        <span>Strong breeze (22-27 kn)</span>
                        <span>25.3-31.1 mph</span>
                    </div>
                    <div class="flex justify-between p-2 bg-purple-50 rounded">
                        <span>Gale (34-40 kn)</span>
                        <span>39.1-46.0 mph</span>
                    </div>
                    <div class="flex justify-between p-2 bg-gray-200 rounded">
                        <span>Storm (48-55 kn)</span>
                        <span>55.2-63.3 mph</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Marine Navigation</h4>
                    <p class="text-sm text-blue-700">Boat speed, current calculations, and voyage planning</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Aviation</h4>
                    <p class="text-sm text-green-700">Aircraft speed, wind calculations, and flight planning</p>
                </div>
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Weather Reporting</h4>
                    <p class="text-sm text-yellow-700">Wind speed measurements and storm tracking</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Speed Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="mph-to-knot.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">MPH to Knot</div>
                </a>
                
                
            </div>
        </div>
    </div>
</div>

<script>
function convertKnotsToMPH() {
    const knots = parseFloat(document.getElementById('knotsInput').value);
    
    if (isNaN(knots) || knots < 0) {
        document.getElementById('mphResult').value = '';
        document.getElementById('liveConversion').textContent = '1 knot = 1.151 mph';
        return;
    }
    
    // 1 knot = 1.15077945 mph
    const mph = knots * 1.15077945;
    
    document.getElementById('mphResult').value = mph.toFixed(3);
    document.getElementById('liveConversion').textContent = `${knots} kn = ${mph.toFixed(3)} mph`;
}

function copyResult() {
    const result = document.getElementById('mphResult');
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
document.getElementById('knotsInput').addEventListener('input', convertKnotsToMPH);

// Initialize with default conversion
convertKnotsToMPH();
</script>

<?php include 'footer.php'; ?>
