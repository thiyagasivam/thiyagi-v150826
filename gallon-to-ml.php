<?php include 'header.php'; ?>
<title>Gallon to ML Converter 2026 | Volume Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert gallons to milliliters instantly with our 2026 accurate volume converter. Perfect for fuel calculations, cooking, and liquid measurements.">
<meta name="keywords" content="gallon to ml converter 2026, volume conversion calculator, gallon milliliter converter, fuel calculator, cooking measurements">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-tint text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Gallon to Milliliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert gallons to milliliters instantly with our precise volume converter. Supports both US and UK gallons for accurate international conversions.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Gallons</label>
                    <input type="number" 
                           id="gallonsInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                           placeholder="Enter gallons"
                           step="any">
                    <div class="flex gap-2 mt-2">
                        <button onclick="setGallonType('us')" id="usBtn" class="flex-1 px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded-md hover:bg-blue-200 transition-colors">US Gallon</button>
                        <button onclick="setGallonType('uk')" id="ukBtn" class="flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">UK Gallon</button>
                    </div>
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 US gal = 3,785 mL</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Gallons</h3>
                <p class="text-gray-600 mb-4">
                    Gallons are units of volume measurement with different values depending on the region. 
                    The US gallon and UK (Imperial) gallon have significantly different volumes.
                </p>
                <div class="space-y-2">
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-blue-800"><strong>US Gallon = 3,785.41 mL</strong></p>
                    </div>
                    <div class="bg-green-50 p-3 rounded-lg">
                        <p class="text-sm text-green-800"><strong>UK Gallon = 4,546.09 mL</strong></p>
                    </div>
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
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Gallon to mL Conversions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-semibold text-blue-800 mb-3">US Gallons to mL</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">0.25 gal</div>
                            <div class="text-xs text-gray-600">946 mL</div>
                        </div>
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">0.5 gal</div>
                            <div class="text-xs text-gray-600">1,893 mL</div>
                        </div>
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">1 gal</div>
                            <div class="text-xs text-gray-600">3,785 mL</div>
                        </div>
                        <div class="text-center p-2 bg-blue-50 rounded-lg">
                            <div class="font-bold text-blue-800">5 gal</div>
                            <div class="text-xs text-gray-600">18,927 mL</div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold text-green-800 mb-3">UK Gallons to mL</h4>
                    <div class="grid grid-cols-2 gap-2">
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">0.25 gal</div>
                            <div class="text-xs text-gray-600">1,137 mL</div>
                        </div>
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">0.5 gal</div>
                            <div class="text-xs text-gray-600">2,273 mL</div>
                        </div>
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">1 gal</div>
                            <div class="text-xs text-gray-600">4,546 mL</div>
                        </div>
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <div class="font-bold text-green-800">5 gal</div>
                            <div class="text-xs text-gray-600">22,730 mL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comparison Chart -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">US vs UK Gallon Comparison</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2">Volume</th>
                            <th class="text-right py-2">US Gallon (mL)</th>
                            <th class="text-right py-2">UK Gallon (mL)</th>
                            <th class="text-right py-2">Difference</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr>
                            <td class="py-2">1 gallon</td>
                            <td class="text-right py-2">3,785 mL</td>
                            <td class="text-right py-2">4,546 mL</td>
                            <td class="text-right py-2 text-green-600">+20%</td>
                        </tr>
                        <tr>
                            <td class="py-2">5 gallons</td>
                            <td class="text-right py-2">18,927 mL</td>
                            <td class="text-right py-2">22,730 mL</td>
                            <td class="text-right py-2 text-green-600">+20%</td>
                        </tr>
                        <tr>
                            <td class="py-2">10 gallons</td>
                            <td class="text-right py-2">37,854 mL</td>
                            <td class="text-right py-2">45,461 mL</td>
                            <td class="text-right py-2 text-green-600">+20%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Fuel & Automotive</h4>
                    <p class="text-sm text-yellow-700">Fuel efficiency calculations and tank capacity</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Cooking & Recipes</h4>
                    <p class="text-sm text-green-700">Large batch cooking and commercial kitchen conversions</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Industrial</h4>
                    <p class="text-sm text-blue-700">Chemical processing and bulk liquid handling</p>
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
                <a href="gallon-to-liter.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Gallon to Liter</div>
                </a>
                <a href="liter-to-gallon.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Liter to Gallon</div>
                </a>
                <a href="quart-to-gallon.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Quart to Gallon</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
let gallonType = 'us'; // default to US gallon

function setGallonType(type) {
    gallonType = type;
    
    // Update button styles
    const usBtn = document.getElementById('usBtn');
    const ukBtn = document.getElementById('ukBtn');
    
    if (type === 'us') {
        usBtn.className = 'flex-1 px-3 py-1 text-xs bg-blue-100 text-blue-800 rounded-md hover:bg-blue-200 transition-colors';
        ukBtn.className = 'flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors';
    } else {
        usBtn.className = 'flex-1 px-3 py-1 text-xs bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors';
        ukBtn.className = 'flex-1 px-3 py-1 text-xs bg-green-100 text-green-800 rounded-md hover:bg-green-200 transition-colors';
    }
    
    // Trigger conversion update
    convertGallonsToML();
}

function convertGallonsToML() {
    const gallons = parseFloat(document.getElementById('gallonsInput').value);
    
    if (isNaN(gallons) || gallons < 0) {
        document.getElementById('mlResult').value = '';
        if (gallonType === 'us') {
            document.getElementById('liveConversion').textContent = '1 US gal = 3,785 mL';
        } else {
            document.getElementById('liveConversion').textContent = '1 UK gal = 4,546 mL';
        }
        return;
    }
    
    let ml;
    if (gallonType === 'us') {
        // 1 US gallon = 3785.41178 mL
        ml = gallons * 3785.41178;
        document.getElementById('liveConversion').textContent = `${gallons} US gal = ${ml.toLocaleString()} mL`;
    } else {
        // 1 UK gallon = 4546.09 mL
        ml = gallons * 4546.09;
        document.getElementById('liveConversion').textContent = `${gallons} UK gal = ${ml.toLocaleString()} mL`;
    }
    
    document.getElementById('mlResult').value = ml.toFixed(2);
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
document.getElementById('gallonsInput').addEventListener('input', convertGallonsToML);

// Initialize with default conversion
convertGallonsToML();
</script>

<?php include 'footer.php'; ?>
