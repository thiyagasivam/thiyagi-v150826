<?php include 'header.php'; ?>
<title>Fluid Ounce (US) to Gallon (US) Converter 2026 | Volume Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert US fluid ounces to US gallons instantly with our 2026 accurate volume converter. Perfect for cooking, fuel calculations, and liquid measurements.">
<meta name="keywords" content="fluid ounce us to gallon us converter 2026, volume conversion calculator, fl oz gallon converter, cooking measurements, fuel calculator">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-wine-glass text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                US Fluid Ounce to US Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert US fluid ounces to US gallons instantly. Perfect for bulk liquid calculations and large volume measurements.
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
                    <label class="block text-sm font-medium text-gray-700">US Gallons (gal)</label>
                    <div class="relative">
                        <input type="text" 
                               id="gallonResult" 
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">128 fl oz = 1 gal</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About US Fluid Ounces</h3>
                <p class="text-gray-600 mb-4">
                    The US fluid ounce (fl oz) is a unit of volume measurement in the US customary system. 
                    It's commonly used for beverages, cooking ingredients, and small liquid measurements.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>128 fl oz = 1 US gallon</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About US Gallons</h3>
                <p class="text-gray-600 mb-4">
                    The US gallon (gal) is a large unit of volume measurement used primarily in the United States 
                    for fuel, large beverage containers, and bulk liquid measurements.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 US gallon = 3.785 liters</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-xl p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common fl oz to Gallon Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">32 fl oz</div>
                    <div class="text-sm text-gray-600">0.25 gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">64 fl oz</div>
                    <div class="text-sm text-gray-600">0.5 gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">96 fl oz</div>
                    <div class="text-sm text-gray-600">0.75 gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">128 fl oz</div>
                    <div class="text-sm text-gray-600">1 gal</div>
                </div>
            </div>
        </div>

        <!-- Volume Hierarchy -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">US Volume Measurement Hierarchy</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-800 mb-3">Small to Large</h4>
                    <div class="space-y-2 text-sm text-gray-700">
                        <div class="flex justify-between">
                            <span>1 fl oz</span>
                            <span>Base unit</span>
                        </div>
                        <div class="flex justify-between">
                            <span>8 fl oz</span>
                            <span>1 cup</span>
                        </div>
                        <div class="flex justify-between">
                            <span>16 fl oz</span>
                            <span>1 pint</span>
                        </div>
                        <div class="flex justify-between">
                            <span>32 fl oz</span>
                            <span>1 quart</span>
                        </div>
                        <div class="flex justify-between">
                            <span>128 fl oz</span>
                            <span>1 gallon</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Quick Reference</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div>• 1 gallon = 4 quarts</div>
                        <div>• 1 quart = 2 pints</div>
                        <div>• 1 pint = 2 cups</div>
                        <div>• 1 cup = 8 fl oz</div>
                        <div>• 1 gallon = 128 fl oz</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Beverage Industry</h4>
                    <p class="text-sm text-green-700">Converting between bottle sizes and bulk containers</p>
                </div>
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Fuel Calculations</h4>
                    <p class="text-sm text-yellow-700">Small container to tank volume conversions</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Industrial</h4>
                    <p class="text-sm text-purple-700">Chemical and liquid material calculations</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="gallon-us-to-fluid-ounce-us.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">US Gallon to fl oz</div>
                </a>
                <a href="fluid-ounce-us-to-milliliter.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">fl oz to mL</div>
                </a>
                <a href="quart-us-to-fluid-ounce-us.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Quart to fl oz</div>
                </a>
                
            </div>
        </div>
    </div>
</div>

<script>
function convertFlOzToGallon() {
    const floz = parseFloat(document.getElementById('flozInput').value);
    
    if (isNaN(floz) || floz < 0) {
        document.getElementById('gallonResult').value = '';
        document.getElementById('liveConversion').textContent = '128 fl oz = 1 gal';
        return;
    }
    
    // 1 US gallon = 128 US fluid ounces
    const gallons = floz / 128;
    
    document.getElementById('gallonResult').value = gallons.toFixed(6);
    document.getElementById('liveConversion').textContent = `${floz} fl oz = ${gallons.toFixed(6)} gal`;
}

function copyResult() {
    const result = document.getElementById('gallonResult');
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
document.getElementById('flozInput').addEventListener('input', convertFlOzToGallon);

// Initialize with default conversion
convertFlOzToGallon();
</script>

<?php include 'footer.php'; ?>
