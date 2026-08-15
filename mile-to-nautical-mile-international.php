<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile to Nautical Mile Converter 2026 - mi to nmi Calculator | Thiyagi</title>
<meta name="description" content="Free online Mile to Nautical Mile converter 2026. Convert mi to nmi and nmi to mi instantly with accurate distance conversion.">
<meta name="keywords" content="mile to nautical mile converter 2026, mi to nmi, distance conversion, navigation, marine calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile to Nautical Mile Converter 2026 - mi to nmi Calculator">
<meta property="og:description" content="Free online Mile to Nautical Mile converter 2026. Convert mi to nmi and nmi to mi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-to-nautical-mile-international.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile to Nautical Mile Converter 2026 - mi to nmi Calculator">
<meta property="twitter:description" content="Free online Mile to Nautical Mile converter 2026. Convert mi to nmi and nmi to mi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-sky-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-route text-indigo-600 mr-3"></i>
                Mile to Nautical Mile Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between statute miles (mi) and nautical miles (nmi) for navigation, aviation, maritime, and distance measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mile Input -->
                <div class="space-y-4">
                    <label for="mileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-road text-indigo-600 mr-2"></i>Miles (mi)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Statute mile (land measurement)
                    </div>
                </div>

                <!-- Nautical Mile Input -->
                <div class="space-y-4">
                    <label for="nauticalMileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-compass text-blue-600 mr-2"></i>Nautical Miles (nmi)
                    </label>
                    <input
                        type="number"
                        id="nauticalMileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter nautical miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        International nautical mile
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Distance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Distance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Miles</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nautical Miles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.8689 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4.345 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8.689 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">43.45 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">86.89 nmi</td>
                            </tr>
                            <tr>
                                <td class="py-2">1000 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">868.9 nmi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Navigation Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-map text-indigo-600 mr-3"></i>Distance Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Aviation Distances:</strong><br>
                        • Short flights: 200-500 mi (174-435 nmi)<br>
                        • Medium flights: 500-1,500 mi (435-1,303 nmi)<br>
                        • Long flights: 1,500-8,000+ mi<br>
                        • Atlantic crossing: 3,500 mi (3,042 nmi)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Maritime Routes:</strong><br>
                        • Coastal sailing: 10-100 nmi<br>
                        • Island hopping: 50-200 nmi<br>
                        • Ocean crossing: 2,000-4,000+ nmi<br>
                        • Pacific crossing: 6,000+ nmi
                    </div>
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Navigation Planning:</strong><br>
                        • GPS coordinates in nautical miles<br>
                        • Chart plotting uses nmi<br>
                        • Flight plans in statute miles<br>
                        • Weather radius in miles/nmi
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Distance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>mi:</strong> Statute mile (5,280 feet)</li>
                    <li><strong>nmi:</strong> Nautical mile (1,852 meters)</li>
                    <li><strong>Conversion:</strong> 1 mi = 0.868976 nmi</li>
                    <li><strong>Origin:</strong> Based on Earth's meridian</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>nmi for marine/aviation</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>mi for land distances</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Charts use nmi</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>GPS can show both</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Marine:</strong> Chart navigation</li>
                    <li><strong>Aviation:</strong> Flight planning</li>
                    <li><strong>Weather:</strong> Storm tracking</li>
                    <li><strong>GPS:</strong> Coordinate systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMileToNauticalMile(mile) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mile) && mile !== '') {
        // 1 statute mile = 0.868976 nautical miles
        const nauticalMile = mile * 0.868976;
        document.getElementById('nauticalMileInput').value = nauticalMile.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${mile} mi = ${nauticalMile.toFixed(4)} nmi</strong>
        `;
    } else {
        document.getElementById('nauticalMileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNauticalMileToMile(nauticalMile) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nauticalMile) && nauticalMile !== '') {
        // 1 nautical mile = 1.150779 statute miles
        const mile = nauticalMile * 1.150779;
        document.getElementById('mileInput').value = mile.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${nauticalMile} nmi = ${mile.toFixed(4)} mi</strong>
        `;
    } else {
        document.getElementById('mileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('nauticalMileInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const nauticalMileValue = document.getElementById('nauticalMileInput').value;
    
    document.getElementById('mileInput').value = nauticalMileValue;
    document.getElementById('nauticalMileInput').value = mileValue;
    
    if (nauticalMileValue) {
        convertMileToNauticalMile(parseFloat(nauticalMileValue));
    } else if (mileValue) {
        convertNauticalMileToMile(parseFloat(mileValue));
    }
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', function() {
    convertMileToNauticalMile(parseFloat(this.value));
});

document.getElementById('nauticalMileInput').addEventListener('input', function() {
    convertNauticalMileToMile(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
