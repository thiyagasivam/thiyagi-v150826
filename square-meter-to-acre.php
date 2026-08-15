<?php include 'header.php'; ?>
<title>Square Meter to Acre Converter 2026 | Area Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert square meters to acres instantly with our 2026 accurate area converter. Perfect for land measurement, real estate, and agricultural calculations.">
<meta name="keywords" content="square meter to acre converter 2026, area conversion calculator, sqm acre converter, land measurement, real estate calculator">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-emerald-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-600 text-white rounded-full mb-6">
                <i class="fas fa-vector-square text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Square Meter to Acre Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square meters to acres instantly with our precise area converter. Perfect for land measurement and real estate calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Square Meters (m²)</label>
                    <input type="number" 
                           id="sqmInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter square meters"
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
                    <label class="block text-sm font-medium text-gray-700">Acres</label>
                    <div class="relative">
                        <input type="text" 
                               id="acresResult" 
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
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">4,047 m² = 1 acre</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Meters</h3>
                <p class="text-gray-600 mb-4">
                    The square meter (m²) is the SI unit of area measurement equal to the area of a square with sides of one meter. 
                    It's widely used internationally for land area and property measurements.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 m² = 10.764 square feet</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Acres</h3>
                <p class="text-gray-600 mb-4">
                    An acre is a unit of area measurement commonly used in the United States and other countries 
                    for measuring land area, particularly in agriculture and real estate.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 acre = 4,047 m²</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Square Meter to Acre Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">1,000 m²</div>
                    <div class="text-sm text-gray-600">0.247 acres</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">4,047 m²</div>
                    <div class="text-sm text-gray-600">1 acre</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">10,000 m²</div>
                    <div class="text-sm text-gray-600">2.471 acres</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">40,470 m²</div>
                    <div class="text-sm text-gray-600">10 acres</div>
                </div>
            </div>
        </div>

        <!-- Land Size Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Land Size Reference</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Residential Properties</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div>• Small lot: 500-800 m² (0.12-0.20 acres)</div>
                        <div>• Medium lot: 800-1,200 m² (0.20-0.30 acres)</div>
                        <div>• Large lot: 1,200+ m² (0.30+ acres)</div>
                    </div>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Agricultural Land</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div>• Small farm: 4-20 hectares (10-50 acres)</div>
                        <div>• Medium farm: 20-100 hectares (50-250 acres)</div>
                        <div>• Large farm: 100+ hectares (250+ acres)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Real Estate</h4>
                    <p class="text-sm text-yellow-700">Property listings and land valuations</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Agriculture</h4>
                    <p class="text-sm text-green-700">Farm size calculations and crop planning</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Construction</h4>
                    <p class="text-sm text-blue-700">Site planning and development projects</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Area Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="acre-to-square-meter.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Acre to m²</div>
                </a>
                <a href="sqm-to-hectare.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">m² to Hectare</div>
                </a>
                <a href="sqm-to-sqft.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">m² to sq ft</div>
                </a>
                <a href="hectare-to-acre.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Hectare to Acre</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqMToAcres() {
    const sqm = parseFloat(document.getElementById('sqmInput').value);
    
    if (isNaN(sqm) || sqm < 0) {
        document.getElementById('acresResult').value = '';
        document.getElementById('liveConversion').textContent = '4,047 m² = 1 acre';
        return;
    }
    
    // 1 acre = 4046.8564224 square meters
    const acres = sqm / 4046.8564224;
    
    document.getElementById('acresResult').value = acres.toFixed(6);
    document.getElementById('liveConversion').textContent = `${sqm.toLocaleString()} m² = ${acres.toFixed(6)} acres`;
}

function copyResult() {
    const result = document.getElementById('acresResult');
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
document.getElementById('sqmInput').addEventListener('input', convertSqMToAcres);

// Initialize with default conversion
convertSqMToAcres();
</script>

<?php include 'footer.php'; ?>
