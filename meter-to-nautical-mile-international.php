<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter to Nautical Mile International Converter 2026 - m to nmi Calculator | Thiyagi</title>
<meta name="description" content="Free online Meter to Nautical Mile International converter 2026. Convert m to nmi and nmi to m instantly with accurate maritime navigation conversion.">
<meta name="keywords" content="meter to nautical mile converter 2026, m to nmi, maritime navigation, sea distance, international nautical mile, marine units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter to Nautical Mile International Converter 2026 - m to nmi Calculator">
<meta property="og:description" content="Free online Meter to Nautical Mile International converter 2026. Convert m to nmi and nmi to m instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-to-nautical-mile-international.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter to Nautical Mile International Converter 2026 - m to nmi Calculator">
<meta property="twitter:description" content="Free online Meter to Nautical Mile International converter 2026. Convert m to nmi and nmi to m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-navy-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-anchor text-navy-600 mr-3"></i>
                Meter to Nautical Mile International Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between meters and international nautical miles for maritime navigation, aviation, and marine distance calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meter Input -->
                <div class="space-y-4">
                    <label for="meterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler text-blue-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter meters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 0.000539957 nmi
                    </div>
                </div>

                <!-- Nautical Mile Input -->
                <div class="space-y-4">
                    <label for="nauticalMileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ship text-indigo-600 mr-2"></i>Nautical Miles International (nmi)
                    </label>
                    <input
                        type="number"
                        id="nauticalMileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter nautical miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 nmi = 1,852 m
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Maritime Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Maritime Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Meters</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Nautical Miles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">185.2 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">926 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,852 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">9,260 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 nmi</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">18,520 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 nmi</td>
                            </tr>
                            <tr>
                                <td class="py-2">185,200 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 nmi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Maritime Navigation Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-compass text-blue-600 mr-3"></i>Maritime Navigation Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Harbor & Port Distances:</strong><br>
                        • Harbor entrance: 500-2,000 m (0.27-1.08 nmi)<br>
                        • Port approach: 3,000-10,000 m (1.6-5.4 nmi)<br>
                        • Anchorage area: 5,000-15,000 m (2.7-8.1 nmi)<br>
                        • Pilot station: 10,000-30,000 m (5.4-16.2 nmi)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Coastal Navigation:</strong><br>
                        • Visibility limit: 18,520 m (10 nmi)<br>
                        • Coastal passage: 37,040 m (20 nmi)<br>
                        • Island hopping: 92,600 m (50 nmi)<br>
                        • Bay crossing: 185,200 m (100 nmi)
                    </div>
                    <div class="bg-navy-50 p-3 rounded">
                        <strong>Ocean Voyages:</strong><br>
                        • English Channel: 33 km (18 nmi)<br>
                        • Gibraltar Strait: 14 km (7.6 nmi)<br>
                        • Atlantic crossing: 5,556 km (3,000 nmi)<br>
                        • Pacific crossing: 11,112 km (6,000 nmi)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Distance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Meter:</strong> SI base unit</li>
                    <li><strong>Nautical Mile:</strong> 1,852 meters exactly</li>
                    <li><strong>Definition:</strong> 1/60 of latitude degree</li>
                    <li><strong>Standard:</strong> International nautical mile</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>nmi for sea navigation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>m for precise measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Chart plotting standard</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>GPS coordinate system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Navigation:</strong> Marine charts</li>
                    <li><strong>Aviation:</strong> Flight planning</li>
                    <li><strong>Shipping:</strong> Route calculations</li>
                    <li><strong>Maritime law:</strong> Territorial waters</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
.from-navy-50 {
    --tw-gradient-from: #f8fafc;
}
.text-navy-600 {
    color: #1e40af;
}
.bg-navy-50 {
    background-color: #f8fafc;
}
</style>

<script>
let isUpdating = false;

function convertMeterToNauticalMile(meter) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(meter) && meter !== '') {
        // 1 nautical mile = 1852 meters exactly
        const nauticalMile = meter / 1852;
        document.getElementById('nauticalMileInput').value = nauticalMile.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${meter.toLocaleString()} m = ${nauticalMile.toFixed(6)} nmi</strong>
        `;
    } else {
        document.getElementById('nauticalMileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertNauticalMileToMeter(nauticalMile) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nauticalMile) && nauticalMile !== '') {
        // 1 nautical mile = 1852 meters exactly
        const meter = nauticalMile * 1852;
        document.getElementById('meterInput').value = meter;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${nauticalMile} nmi = ${meter.toLocaleString()} m</strong>
        `;
    } else {
        document.getElementById('meterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('meterInput').value = '';
    document.getElementById('nauticalMileInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const meterValue = document.getElementById('meterInput').value;
    const nauticalMileValue = document.getElementById('nauticalMileInput').value;
    
    document.getElementById('meterInput').value = nauticalMileValue;
    document.getElementById('nauticalMileInput').value = meterValue;
    
    if (nauticalMileValue) {
        convertMeterToNauticalMile(parseFloat(nauticalMileValue));
    } else if (meterValue) {
        convertNauticalMileToMeter(parseFloat(meterValue));
    }
}

// Add event listeners
document.getElementById('meterInput').addEventListener('input', function() {
    convertMeterToNauticalMile(parseFloat(this.value));
});

document.getElementById('nauticalMileInput').addEventListener('input', function() {
    convertNauticalMileToMeter(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
