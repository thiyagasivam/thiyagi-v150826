<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile per Hour to Mile per Minute Converter 2026 - mph to mi/min Calculator | Thiyagi</title>
<meta name="description" content="Free online Mile per Hour to Mile per Minute converter 2026. Convert mph to mi/min and mi/min to mph instantly with accurate speed conversion.">
<meta name="keywords" content="mile per hour to mile per minute converter 2026, mph to mi/min, speed converter, velocity conversion, travel speed">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile per Hour to Mile per Minute Converter 2026 - mph to mi/min Calculator">
<meta property="og:description" content="Free online Mile per Hour to Mile per Minute converter 2026. Convert mph to mi/min and mi/min to mph instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-hour-to-mile-minute.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile per Hour to Mile per Minute Converter 2026 - mph to mi/min Calculator">
<meta property="twitter:description" content="Free online Mile per Hour to Mile per Minute converter 2026. Convert mph to mi/min and mi/min to mph instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-red-50 to-pink-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tachometer-alt text-orange-600 mr-3"></i>
                Mile/Hour to Mile/Minute Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between miles per hour and miles per minute for speed calculations, travel time estimates, and velocity measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mile per Hour Input -->
                <div class="space-y-4">
                    <label for="mphInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-car text-orange-600 mr-2"></i>Mile per Hour (mph)
                    </label>
                    <input
                        type="number"
                        id="mphInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter mph"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mph = 0.01667 mi/min
                    </div>
                </div>

                <!-- Mile per Minute Input -->
                <div class="space-y-4">
                    <label for="mpmInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-rocket text-red-600 mr-2"></i>Mile per Minute (mi/min)
                    </label>
                    <input
                        type="number"
                        id="mpmInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter mi/min"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mi/min = 60 mph
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-orange-50 to-red-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Speed Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>Speed Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">mph</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">mi/min</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">30 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 mi/min</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 mi/min</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">120 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 mi/min</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">300 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 mi/min</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">600 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 mi/min</td>
                            </tr>
                            <tr>
                                <td class="py-2">3,600 mph</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">60 mi/min</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Transportation Speed Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-plane text-orange-600 mr-3"></i>Transportation Speed Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Land Transportation:</strong><br>
                        • Walking: 3 mph (0.05 mi/min)<br>
                        • Bicycle: 15 mph (0.25 mi/min)<br>
                        • Car highway: 70 mph (1.17 mi/min)<br>
                        • High-speed train: 200 mph (3.33 mi/min)
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Air Transportation:</strong><br>
                        • Commercial jet: 500 mph (8.33 mi/min)<br>
                        • Fighter jet: 1,500 mph (25 mi/min)<br>
                        • Supersonic jet: 2,200 mph (36.67 mi/min)<br>
                        • Space shuttle: 17,500 mph (291.67 mi/min)
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Reference Speeds:</strong><br>
                        • School zone: 25 mph (0.42 mi/min)<br>
                        • City driving: 35 mph (0.58 mi/min)<br>
                        • Highway speed: 65 mph (1.08 mi/min)<br>
                        • Race car: 200 mph (3.33 mi/min)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Speed Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>mph:</strong> Miles per hour</li>
                    <li><strong>mi/min:</strong> Miles per minute</li>
                    <li><strong>Conversion:</strong> 1 mi/min = 60 mph</li>
                    <li><strong>Formula:</strong> Speed = Distance/Time</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>mph more common for vehicles</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>mi/min for quick calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Useful for travel time</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Aviation and racing contexts</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Transportation:</strong> Vehicle speeds</li>
                    <li><strong>Navigation:</strong> Travel time planning</li>
                    <li><strong>Aviation:</strong> Flight speeds</li>
                    <li><strong>Sports:</strong> Racing velocities</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMphToMpm(mph) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mph) && mph !== '') {
        // 1 mile per hour = 1/60 mile per minute
        const mpm = mph / 60;
        document.getElementById('mpmInput').value = mpm.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${mph} mph = ${mpm.toFixed(6)} mi/min</strong>
        `;
    } else {
        document.getElementById('mpmInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMpmToMph(mpm) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mpm) && mpm !== '') {
        // 1 mile per minute = 60 miles per hour
        const mph = mpm * 60;
        document.getElementById('mphInput').value = mph.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${mpm} mi/min = ${mph.toFixed(3)} mph</strong>
        `;
    } else {
        document.getElementById('mphInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('mphInput').value = '';
    document.getElementById('mpmInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mphValue = document.getElementById('mphInput').value;
    const mpmValue = document.getElementById('mpmInput').value;
    
    document.getElementById('mphInput').value = mpmValue;
    document.getElementById('mpmInput').value = mphValue;
    
    if (mpmValue) {
        convertMphToMpm(parseFloat(mpmValue));
    } else if (mphValue) {
        convertMpmToMph(parseFloat(mphValue));
    }
}

// Add event listeners
document.getElementById('mphInput').addEventListener('input', function() {
    convertMphToMpm(parseFloat(this.value));
});

document.getElementById('mpmInput').addEventListener('input', function() {
    convertMpmToMph(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
