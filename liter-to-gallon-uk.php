<?php include 'header.php'; ?>
<title>Liter to UK Gallon Converter 2026 | Volume Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert liters to UK gallons instantly with our 2026 accurate volume converter. Perfect for fuel calculations and British measurements.">
<meta name="keywords" content="liter to uk gallon converter 2026, volume conversion calculator, liter gallon uk converter, fuel calculator, british measurements">

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-blue-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 text-white rounded-full mb-6">
                <i class="fas fa-tint text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Liter to UK Gallon Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to UK gallons instantly with our precise volume converter. Perfect for fuel calculations, brewing, and UK volume measurements.
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
                    <label class="block text-sm font-medium text-gray-700">UK Gallons (gal)</label>
                    <div class="relative">
                        <input type="text" 
                               id="gallonsResult" 
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
                    <span class="text-2xl font-bold text-blue-800" id="liveConversion">1 L = 0.219969 UK gal</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Liters</h3>
                <p class="text-gray-600 mb-4">
                    The liter (L) is a metric unit of volume measurement equal to 1,000 cubic centimeters. 
                    It's widely used internationally for measuring liquids and is the standard unit in most countries.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 Liter = 1,000 milliliters</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About UK Gallons</h3>
                <p class="text-gray-600 mb-4">
                    The UK gallon (Imperial gallon) is approximately 20% larger than the US gallon. 
                    It's used in the United Kingdom and other Commonwealth countries for fuel and liquid measurements.
                </p>
                <div class="bg-blue-50 p-3 rounded-lg">
                    <p class="text-sm text-blue-800"><strong>1 UK Gallon = 4.546 liters</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Liter to UK Gallon Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">1 L</div>
                    <div class="text-sm text-gray-600">0.22 UK gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">5 L</div>
                    <div class="text-sm text-gray-600">1.1 UK gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">10 L</div>
                    <div class="text-sm text-gray-600">2.2 UK gal</div>
                </div>
                <div class="text-center p-3 bg-blue-50 rounded-lg">
                    <div class="font-bold text-blue-800">20 L</div>
                    <div class="text-sm text-gray-600">4.4 UK gal</div>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Volume Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="gallon-to-liter.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Gallon to Liter</div>
                </a>
                <a href="liter-to-gallon.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Liter to US Gallon</div>
                </a>
                <a href="ml-to-l.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">ML to Liter</div>
                </a>
                <a href="cup-to-ml.php" class="p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <div class="text-sm font-medium text-blue-800">Cup to ML</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertLitersToUKGallons() {
    const liters = parseFloat(document.getElementById('litersInput').value);
    
    if (isNaN(liters) || liters < 0) {
        document.getElementById('gallonsResult').value = '';
        document.getElementById('liveConversion').textContent = '1 L = 0.219969 UK gal';
        return;
    }
    
    // 1 liter = 0.219969157 UK gallons
    const gallons = liters * 0.219969157;
    
    document.getElementById('gallonsResult').value = gallons.toFixed(6);
    document.getElementById('liveConversion').textContent = `${liters} L = ${gallons.toFixed(6)} UK gal`;
}

function copyResult() {
    const result = document.getElementById('gallonsResult');
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
document.getElementById('litersInput').addEventListener('input', convertLitersToUKGallons);

// Initialize with default conversion
convertLitersToUKGallons();
</script>

<?php include 'footer.php'; ?>
