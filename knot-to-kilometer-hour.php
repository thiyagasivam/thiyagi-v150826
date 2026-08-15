<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Knot to Kilometer per Hour Converter 2026 - kn to km/h Calculator | Thiyagi</title>
<meta name="description" content="Free online Knot to Kilometer per Hour converter 2026. Convert kn to km/h and km/h to kn instantly with accurate speed conversion.">
<meta name="keywords" content="knot to kilometer per hour converter 2026, kn to km/h, speed conversion, nautical speed, marine navigation calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Knot to Kilometer per Hour Converter 2026 - kn to km/h Calculator">
<meta property="og:description" content="Free online Knot to Kilometer per Hour converter 2026. Convert kn to km/h and km/h to kn instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/knot-to-kilometer-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Knot to Kilometer per Hour Converter 2026 - kn to km/h Calculator">
<meta property="twitter:description" content="Free online Knot to Kilometer per Hour converter 2026. Convert kn to km/h and km/h to kn instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-sky-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-anchor text-blue-600 mr-3"></i>
                Knot to Kilometer per Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between knots (kn) and kilometers per hour (km/h) for marine navigation, aviation, weather reports, and speed measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Knot Input -->
                <div class="space-y-4">
                    <label for="knotInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ship text-blue-600 mr-2"></i>Knots (kn)
                    </label>
                    <input
                        type="number"
                        id="knotInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter knots"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Nautical speed unit
                    </div>
                </div>

                <!-- Kilometer per Hour Input -->
                <div class="space-y-4">
                    <label for="kilometerHourInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-sky-600 mr-2"></i>Kilometers per Hour (km/h)
                    </label>
                    <input
                        type="number"
                        id="kilometerHourInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-xl"
                        placeholder="Enter km/h"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Metric speed unit
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-sky-50 rounded-lg">
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
            <!-- Speed Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-blue-600 mr-3"></i>Speed Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Knots</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilometers/Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.852 km/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">9.26 km/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">18.52 km/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">20 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">37.04 km/h</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">92.6 km/h</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 kn</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">185.2 km/h</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Navigation Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-compass text-blue-600 mr-3"></i>Navigation Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Marine Vessels:</strong><br>
                        • Sailing boats: 3-12 kn (5.5-22 km/h)<br>
                        • Cargo ships: 12-25 kn (22-46 km/h)<br>
                        • Cruise ships: 20-25 kn (37-46 km/h)<br>
                        • Naval vessels: 25-35 kn (46-65 km/h)
                    </div>
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Aviation:</strong><br>
                        • Light aircraft: 80-200 kn (148-370 km/h)<br>
                        • Commercial jets: 450-550 kn (833-1,019 km/h)<br>
                        • Helicopters: 100-180 kn (185-333 km/h)<br>
                        • Military jets: 300-1,500+ kn
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Weather & Ocean:</strong><br>
                        • Wind speeds: 0-100+ kn<br>
                        • Hurricane winds: 64+ kn (119+ km/h)<br>
                        • Ocean currents: 1-5 kn (1.9-9.3 km/h)<br>
                        • Storm systems: 20-150+ kn
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-blue-600 mr-2"></i>Speed Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>kn:</strong> Nautical miles per hour</li>
                    <li><strong>km/h:</strong> Kilometers per hour</li>
                    <li><strong>Conversion:</strong> 1 kn = 1.852 km/h</li>
                    <li><strong>Origin:</strong> Based on Earth's circumference</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>kn for marine/aviation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>km/h for land transport</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Weather reports use both</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>International standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-blue-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Marine:</strong> Ship navigation</li>
                    <li><strong>Aviation:</strong> Flight planning</li>
                    <li><strong>Weather:</strong> Wind reporting</li>
                    <li><strong>Sports:</strong> Sailing competitions</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKnotToKilometerHour(knot) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(knot) && knot !== '') {
        // 1 knot = 1.852 km/h
        const kilometerHour = knot * 1.852;
        document.getElementById('kilometerHourInput').value = kilometerHour.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${knot} kn = ${kilometerHour.toFixed(3)} km/h</strong>
        `;
    } else {
        document.getElementById('kilometerHourInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilometerHourToKnot(kilometerHour) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilometerHour) && kilometerHour !== '') {
        // 1 km/h = 1/1.852 knots
        const knot = kilometerHour / 1.852;
        document.getElementById('knotInput').value = knot.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-blue-600 mr-2"></i>
            <strong>${kilometerHour} km/h = ${knot.toFixed(3)} kn</strong>
        `;
    } else {
        document.getElementById('knotInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('knotInput').value = '';
    document.getElementById('kilometerHourInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const knotValue = document.getElementById('knotInput').value;
    const kilometerHourValue = document.getElementById('kilometerHourInput').value;
    
    document.getElementById('knotInput').value = kilometerHourValue;
    document.getElementById('kilometerHourInput').value = knotValue;
    
    if (kilometerHourValue) {
        convertKnotToKilometerHour(parseFloat(kilometerHourValue));
    } else if (knotValue) {
        convertKilometerHourToKnot(parseFloat(knotValue));
    }
}

// Add event listeners
document.getElementById('knotInput').addEventListener('input', function() {
    convertKnotToKilometerHour(parseFloat(this.value));
});

document.getElementById('kilometerHourInput').addEventListener('input', function() {
    convertKilometerHourToKnot(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
