<?php include 'header.php'; ?>
<title>Square Feet to Square Yards Converter 2026 | Area Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert square feet to square yards instantly with our 2026 accurate area converter. Perfect for flooring, carpeting, and construction calculations.">
<meta name="keywords" content="square feet to square yards converter 2026, area conversion calculator, sqft sqyd converter, flooring calculator, construction measurements">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-emerald-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-600 text-white rounded-full mb-6">
                <i class="fas fa-vector-square text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Square Feet to Square Yards Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square feet to square yards instantly with our precise area converter. Perfect for flooring, landscaping, and construction calculations.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Square Feet (sq ft)</label>
                    <input type="number" 
                           id="sqFtInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter square feet"
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
                    <label class="block text-sm font-medium text-gray-700">Square Yards (sq yd)</label>
                    <div class="relative">
                        <input type="text" 
                               id="sqYdResult" 
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
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">9 sq ft = 1 sq yd</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Feet</h3>
                <p class="text-gray-600 mb-4">
                    A square foot (sq ft or ft²) is a unit of area measurement equal to a square with sides of one foot. 
                    It's commonly used in the United States for measuring floor area and property size.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 sq ft = 144 square inches</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Square Yards</h3>
                <p class="text-gray-600 mb-4">
                    A square yard (sq yd or yd²) is a unit of area measurement equal to a square with sides of one yard. 
                    It's often used for measuring carpeting, landscaping, and larger areas.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 sq yd = 9 square feet</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Square Feet to Square Yards Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">9 sq ft</div>
                    <div class="text-sm text-gray-600">1 sq yd</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">27 sq ft</div>
                    <div class="text-sm text-gray-600">3 sq yd</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">90 sq ft</div>
                    <div class="text-sm text-gray-600">10 sq yd</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">900 sq ft</div>
                    <div class="text-sm text-gray-600">100 sq yd</div>
                </div>
            </div>
        </div>

        <!-- Visual Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Visual Size Reference</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Common Room Sizes</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div class="flex justify-between">
                            <span>Small bedroom (120 sq ft)</span>
                            <span>13.3 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Living room (300 sq ft)</span>
                            <span>33.3 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Large bedroom (200 sq ft)</span>
                            <span>22.2 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Kitchen (150 sq ft)</span>
                            <span>16.7 sq yd</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Outdoor Spaces</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div class="flex justify-between">
                            <span>Small patio (100 sq ft)</span>
                            <span>11.1 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Deck (200 sq ft)</span>
                            <span>22.2 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Garden plot (81 sq ft)</span>
                            <span>9 sq yd</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Driveway (400 sq ft)</span>
                            <span>44.4 sq yd</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculation Formula -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Conversion Formula</h3>
            <div class="bg-gray-50 p-4 rounded-lg mb-4">
                <p class="text-lg font-mono text-center">Square Yards = Square Feet ÷ 9</p>
            </div>
            <div class="text-sm text-gray-600">
                <p><strong>Why divide by 9?</strong> Because 1 yard = 3 feet, so 1 square yard = 3 × 3 = 9 square feet.</p>
            </div>
        </div>

        <!-- Material Estimation -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Material Estimation Guide</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-3">Flooring Materials</h4>
                    <div class="space-y-2 text-sm text-orange-700">
                        <div>• Carpet: Usually sold by square yard</div>
                        <div>• Hardwood: Often sold by square foot</div>
                        <div>• Tile: Typically sold by square foot</div>
                        <div>• Vinyl: Can be sold by either unit</div>
                    </div>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-3">Landscaping</h4>
                    <div class="space-y-2 text-sm text-purple-700">
                        <div>• Sod: Usually sold by square yard</div>
                        <div>• Mulch: Coverage by square yard</div>
                        <div>• Concrete: Estimated by square yard</div>
                        <div>• Pavers: Can be either unit</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Construction</h4>
                    <p class="text-sm text-yellow-700">Floor area calculations and material estimates</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Real Estate</h4>
                    <p class="text-sm text-green-700">Property measurements and listings</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Interior Design</h4>
                    <p class="text-sm text-blue-700">Room planning and furniture placement</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Area Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="square-yard-to-square-feet.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq yd to sq ft</div>
                </a>
                <a href="square-feet-to-square-meter.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq ft to m²</div>
                </a>
                <a href="square-inch-to-square-foot.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq in to sq ft</div>
                </a>
                <a href="square-yard-to-acre.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">sq yd to Acre</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqFtToSqYd() {
    const sqFt = parseFloat(document.getElementById('sqFtInput').value);
    
    if (isNaN(sqFt) || sqFt < 0) {
        document.getElementById('sqYdResult').value = '';
        document.getElementById('liveConversion').textContent = '9 sq ft = 1 sq yd';
        return;
    }
    
    // 1 square yard = 9 square feet
    const sqYd = sqFt / 9;
    
    document.getElementById('sqYdResult').value = sqYd.toFixed(6);
    document.getElementById('liveConversion').textContent = `${sqFt.toLocaleString()} sq ft = ${sqYd.toFixed(6)} sq yd`;
}

function copyResult() {
    const result = document.getElementById('sqYdResult');
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
document.getElementById('sqFtInput').addEventListener('input', convertSqFtToSqYd);

// Initialize with default conversion
convertSqFtToSqYd();
</script>

<?php include 'footer.php'; ?>
