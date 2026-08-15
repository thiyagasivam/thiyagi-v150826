<?php include 'header.php'; ?>
<title>Yards to Miles Converter 2026 | Distance Conversion Tool | Free Calculator</title>
<meta name="description" content="Convert yards to miles instantly with our 2026 accurate distance converter. Perfect for sports, running, and long-distance measurements.">
<meta name="keywords" content="yards to miles converter 2026, distance conversion calculator, yard mile converter, sports measurements, running calculator">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-emerald-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-emerald-600 text-white rounded-full mb-6">
                <i class="fas fa-route text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Yards to Miles Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert yards to miles instantly with our precise distance converter. Perfect for athletics, travel, and navigation measurements.
            </p>
        </div>

        <!-- Converter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Input -->
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Yards (yd)</label>
                    <input type="number" 
                           id="yardsInput" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                           placeholder="Enter distance in yards"
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
                    <label class="block text-sm font-medium text-gray-700">Miles (mi)</label>
                    <div class="relative">
                        <input type="text" 
                               id="milesResult" 
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
                    <span class="text-2xl font-bold text-emerald-800" id="liveConversion">1760 yards = 1 mile</span>
                </div>
            </div>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Yards</h3>
                <p class="text-gray-600 mb-4">
                    A yard is an imperial unit of length equal to 3 feet or 36 inches. It's commonly used 
                    in the United States for measuring fabric, American football fields, and property dimensions.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 yard = 3 feet = 36 inches</strong></p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">About Miles</h3>
                <p class="text-gray-600 mb-4">
                    A mile is a unit of distance equal to 5,280 feet or 1,760 yards. It's the standard 
                    unit for measuring longer distances in the United States and United Kingdom.
                </p>
                <div class="bg-emerald-50 p-3 rounded-lg">
                    <p class="text-sm text-emerald-800"><strong>1 mile = 1,760 yards = 5,280 feet</strong></p>
                </div>
            </div>
        </div>

        <!-- Common Conversions -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Common Yards to Miles Conversions</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">100 yd</div>
                    <div class="text-sm text-gray-600">0.057 mi</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">440 yd</div>
                    <div class="text-sm text-gray-600">0.25 mi (1/4 mile)</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">880 yd</div>
                    <div class="text-sm text-gray-600">0.5 mi (1/2 mile)</div>
                </div>
                <div class="text-center p-3 bg-emerald-50 rounded-lg">
                    <div class="font-bold text-emerald-800">1760 yd</div>
                    <div class="text-sm text-gray-600">1 mi (Exact)</div>
                </div>
            </div>
        </div>

        <!-- Distance References -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Distance Reference Guide</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-3">Sports & Athletics</h4>
                    <div class="space-y-2 text-sm text-blue-700">
                        <div class="flex justify-between">
                            <span>Football field (120 yd)</span>
                            <span>0.068 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Track lap (400m ≈ 437 yd)</span>
                            <span>0.248 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Marathon (42,195m ≈ 46,145 yd)</span>
                            <span>26.22 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Golf course (7,000 yd)</span>
                            <span>3.98 mi</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-3">Walking & Running</h4>
                    <div class="space-y-2 text-sm text-green-700">
                        <div class="flex justify-between">
                            <span>City block (≈ 100 yd)</span>
                            <span>0.057 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>5K run (≈ 5,468 yd)</span>
                            <span>3.11 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>10K run (≈ 10,936 yd)</span>
                            <span>6.21 mi</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Half marathon (≈ 23,072 yd)</span>
                            <span>13.11 mi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formula and History -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Conversion Formula</h3>
            <div class="bg-gray-50 p-4 rounded-lg mb-6">
                <p class="text-lg font-mono text-center">Miles = Yards ÷ 1,760</p>
            </div>
            
            <h4 class="text-lg font-semibold text-gray-900 mb-3">Historical Background:</h4>
            <div class="p-4 bg-yellow-50 rounded-lg">
                <p class="text-sm text-yellow-800">
                    The yard was originally defined as the distance from the tip of King Henry I's nose 
                    to the end of his outstretched arm. The mile comes from the Latin "mille passus" 
                    meaning "a thousand paces" - originally 1,000 Roman paces of 5 feet each (5,000 feet), 
                    later standardized to 5,280 feet to align with furlong measurements.
                </p>
            </div>
        </div>

        <!-- Track and Field Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Track & Field Distances</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-3">Sprint Distances</h4>
                    <div class="space-y-2 text-sm text-purple-700">
                        <div class="flex justify-between">
                            <span>100 yards</span>
                            <span>0.0568 miles</span>
                        </div>
                        <div class="flex justify-between">
                            <span>220 yards (1/8 mile)</span>
                            <span>0.125 miles</span>
                        </div>
                        <div class="flex justify-between">
                            <span>440 yards (1/4 mile)</span>
                            <span>0.25 miles</span>
                        </div>
                    </div>
                </div>
                <div class="p-4 bg-orange-50 rounded-lg">
                    <h4 class="font-semibold text-orange-800 mb-3">Distance Events</h4>
                    <div class="space-y-2 text-sm text-orange-700">
                        <div class="flex justify-between">
                            <span>880 yards (1/2 mile)</span>
                            <span>0.5 miles</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1,320 yards (3/4 mile)</span>
                            <span>0.75 miles</span>
                        </div>
                        <div class="flex justify-between">
                            <span>1,760 yards (1 mile)</span>
                            <span>1.0 miles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Applications -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Common Applications</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-800 mb-2">Sports & Fitness</h4>
                    <p class="text-sm text-blue-700">Track distances, field measurements, and athletic performance</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-semibold text-green-800 mb-2">Navigation & Travel</h4>
                    <p class="text-sm text-green-700">Converting walking distances and travel measurements</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-semibold text-purple-800 mb-2">Property & Construction</h4>
                    <p class="text-sm text-purple-700">Land surveying and large-scale measurements</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Related Distance Converters</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="feet-to-miles.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Feet to Miles</div>
                </a>
                <a href="meters-to-miles.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Meters to Miles</div>
                </a>
                <a href="km-to-miles.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Kilometers to Miles</div>
                </a>
                <a href="miles-to-km.php" class="p-3 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <div class="text-sm font-medium text-emerald-800">Miles to Kilometers</div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertYardsToMiles() {
    const yards = parseFloat(document.getElementById('yardsInput').value);
    
    if (isNaN(yards)) {
        document.getElementById('milesResult').value = '';
        document.getElementById('liveConversion').textContent = '1760 yards = 1 mile';
        return;
    }
    
    // 1 mile = 1,760 yards
    const miles = yards / 1760;
    
    document.getElementById('milesResult').value = miles.toFixed(6);
    document.getElementById('liveConversion').textContent = `${yards} yards = ${miles.toFixed(6)} miles`;
}

function copyResult() {
    const result = document.getElementById('milesResult');
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
document.getElementById('yardsInput').addEventListener('input', convertYardsToMiles);

// Initialize with default conversion
convertYardsToMiles();
</script>

<?php include 'footer.php'; ?>
