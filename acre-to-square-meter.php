<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Acre to Square Meter Converter 2026 | Area Conversion Tool | Free Calculator';
$description = 'Convert acres to square meters instantly with our 2026 accurate area converter. Perfect for land measurement, real estate, and agricultural calculations.';
$keywords = 'acre to square meter converter 2026, area conversion calculator, acre sqm converter, land measurement, real estate calculator';
$canonical = 'https://www.thiyagi.com/acre-to-square-meter';

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
                <i class="fas fa-map text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Acre to Square Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert acres to square meters instantly with our precise area converter. Perfect for international land transactions and metric conversions.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Acres</label>
                    <input type="number" 
                           id="acresInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter acres"
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
                    <label class="block text-sm font-medium text-gray-700">Square Meters (m²)</label>
                    <div class="relative">
                        <input type="text" 
                               id="sqmResult" 
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
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">1 acre = 4,047 m²</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Acres</h3>
                <p class="text-gray-600 mb-4">
                    An acre is a unit of area measurement traditionally used in the United States, United Kingdom, 
                    and other countries for measuring land area, particularly in agriculture and real estate.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 acre = 43,560 square feet</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Meters</h3>
                <p class="text-gray-600 mb-4">
                    The square meter (m²) is the SI unit of area measurement used internationally. 
                    It's the standard unit for land area in most countries that use the metric system.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 m² = 10.764 square feet</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Acre to Square Meter Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">0.25 acres</div>
                    <div class="text-sm text-gray-600">1,012 m²</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">0.5 acres</div>
                    <div class="text-sm text-gray-600">2,023 m²</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">1 acre</div>
                    <div class="text-sm text-gray-600">4,047 m²</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">5 acres</div>
                    <div class="text-sm text-gray-600">20,234 m²</div>
                </div>
            </div>
        </div>

        <!-- Comparison with Hectares -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Metric Comparison</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Acres vs Hectares</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div>• 1 acre = 0.405 hectares</div>
                        <div>• 1 hectare = 2.471 acres</div>
                        <div>• 1 hectare = 10,000 m²</div>
                        <div>• 1 acre = 4,047 m²</div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Quick Reference</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div>• Soccer field: ~0.7 hectares (1.7 acres)</div>
                        <div>• Football field: ~0.5 hectares (1.3 acres)</div>
                        <div>• Tennis court: ~261 m² (0.06 acres)</div>
                        <div>• Basketball court: ~420 m² (0.1 acres)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Historical Context -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Historical Context</h3>
            <div class="p-4 bg-yellow-50 rounded-lg">
                <p class="text-sm text-yellow-800 mb-3">
                    <strong>Origin:</strong> An acre was historically defined as the area that could be plowed by one ox in one day. 
                    Today, it's precisely defined as 43,560 square feet or 4,046.8564224 square meters.
                </p>
                <p class="text-sm text-yellow-700">
                    The acre is still commonly used in the United States, United Kingdom, and some Commonwealth countries, 
                    while most of the world uses hectares and square meters for land measurement.
                </p>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-red-50 rounded-lg">
                    <h4 class="font-semibold text-red-800 mb-2">Real Estate</h4>
                    <p class="text-sm text-red-700">International property transactions and listings</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Agriculture</h4>
                    <p class="text-sm text-green-700">Converting farm sizes between measurement systems</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Development</h4>
                    <p class="text-sm text-blue-700">Land development and zoning calculations</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Area Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="square-meter-to-acre.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">m² to Acre</div>
                </a>
                <a href="acre-to-hectare.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Acre to Hectare</div>
                </a>
                <a href="acre-to-sqft.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Acre to sq ft</div>
                </a>
                <a href="hectare-to-square-meter.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Hectare to m²</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertAcresToSqM() {
    const acres = parseFloat(document.getElementById('acresInput').value);
    
    if (isNaN(acres) || acres < 0) {
        document.getElementById('sqmResult').value = '';
        document.getElementById('liveConversion').textContent = '1 acre = 4,047 m²';
        return;
    }
    
    // 1 acre = 4046.8564224 square meters
    const sqm = acres * 4046.8564224;
    
    document.getElementById('sqmResult').value = sqm.toFixed(2);
    document.getElementById('liveConversion').textContent = `${acres} acres = ${sqm.toLocaleString()} m²`;
}

function copyResult() {
    const result = document.getElementById('sqmResult');
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
document.getElementById('acresInput').addEventListener('input', convertAcresToSqM);

// Initialize with default conversion
convertAcresToSqM();
</script>

<?php include 'footer.php'; ?>
