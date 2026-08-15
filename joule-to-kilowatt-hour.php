<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Joule to Kilowatt Hour Converter 2026 - J to kWh Calculator | Thiyagi</title>
<meta name="description" content="Free online Joule to Kilowatt Hour converter 2026. Convert J to kWh and kWh to J instantly with accurate energy conversion.">
<meta name="keywords" content="joule to kilowatt hour converter 2026, J to kWh, energy converter, electrical energy, power consumption">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Joule to Kilowatt Hour Converter 2026 - J to kWh Calculator">
<meta property="og:description" content="Free online Joule to Kilowatt Hour converter 2026. Convert J to kWh and kWh to J instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/joule-to-kilowatt-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Joule to Kilowatt Hour Converter 2026 - J to kWh Calculator">
<meta property="twitter:description" content="Free online Joule to Kilowatt Hour converter 2026. Convert J to kWh and kWh to J instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Joule to Kilowatt Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between joules and kilowatt hours for energy calculations, electricity consumption, and power system analysis
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Joule Input -->
                <div class="space-y-4">
                    <label for="jouleInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-yellow-600 mr-2"></i>Joules (J)
                    </label>
                    <input
                        type="number"
                        id="jouleInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter joules"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 J = 2.778×10⁻⁷ kWh
                    </div>
                </div>

                <!-- Kilowatt Hour Input -->
                <div class="space-y-4">
                    <label for="kwhInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-plug text-amber-600 mr-2"></i>Kilowatt Hours (kWh)
                    </label>
                    <input
                        type="number"
                        id="kwhInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter kWh"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 kWh = 3,600,000 J
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Energy Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Energy Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Joules</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilowatt Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">3,600 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 kWh</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">36,000 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 kWh</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">360,000 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 kWh</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3,600,000 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 kWh</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">18,000,000 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 kWh</td>
                            </tr>
                            <tr>
                                <td class="py-2">36,000,000 J</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 kWh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Electrical Energy Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-home text-yellow-600 mr-3"></i>Electrical Energy Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Household Appliances:</strong><br>
                        • LED bulb (10W, 1h): 36,000 J (0.01 kWh)<br>
                        • Laptop (50W, 1h): 180,000 J (0.05 kWh)<br>
                        • Microwave (1000W, 1h): 3.6×10⁶ J (1 kWh)<br>
                        • Electric heater (2000W, 1h): 7.2×10⁶ J (2 kWh)
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Daily Energy Consumption:</strong><br>
                        • Smartphone charging: 0.01-0.02 kWh<br>
                        • TV watching (4h): 0.4-0.8 kWh<br>
                        • Washing machine cycle: 1-2 kWh<br>
                        • Electric car (100 miles): 25-40 kWh
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Energy Storage:</strong><br>
                        • AA battery: 14,400 J (0.004 kWh)<br>
                        • Car battery: 2.16×10⁶ J (0.6 kWh)<br>
                        • Home battery: 4.68×10⁷ J (13 kWh)<br>
                        • Tesla Model S: 3.6×10⁸ J (100 kWh)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-yellow-600 mr-2"></i>Energy Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Joule:</strong> SI unit of energy</li>
                    <li><strong>Kilowatt Hour:</strong> 1000 W × 3600 s</li>
                    <li><strong>Conversion:</strong> 1 kWh = 3.6×10⁶ J</li>
                    <li><strong>Formula:</strong> Energy = Power × Time</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>J for scientific calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>kWh for electricity bills</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Large scale difference</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Power × time = energy</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Electrical:</strong> Power consumption</li>
                    <li><strong>Physics:</strong> Energy calculations</li>
                    <li><strong>Engineering:</strong> System design</li>
                    <li><strong>Economics:</strong> Energy costs</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertJouleToKwh(joule) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(joule) && joule !== '') {
        // 1 kWh = 3,600,000 J, so 1 J = 1/3,600,000 kWh
        const kwh = joule / 3600000;
        document.getElementById('kwhInput').value = kwh.toFixed(12);
        
        // Format joule with appropriate notation
        const formattedJoule = joule >= 1000000 ? joule.toExponential(3) : joule.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${formattedJoule} J = ${kwh.toExponential(6)} kWh</strong>
        `;
    } else {
        document.getElementById('kwhInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKwhToJoule(kwh) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kwh) && kwh !== '') {
        // 1 kWh = 3,600,000 J
        const joule = kwh * 3600000;
        document.getElementById('jouleInput').value = joule;
        
        // Format joule with appropriate notation
        const formattedJoule = joule >= 1000000 ? joule.toExponential(3) : joule.toLocaleString();
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${kwh} kWh = ${formattedJoule} J</strong>
        `;
    } else {
        document.getElementById('jouleInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('jouleInput').value = '';
    document.getElementById('kwhInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const jouleValue = document.getElementById('jouleInput').value;
    const kwhValue = document.getElementById('kwhInput').value;
    
    document.getElementById('jouleInput').value = kwhValue;
    document.getElementById('kwhInput').value = jouleValue;
    
    if (kwhValue) {
        convertJouleToKwh(parseFloat(kwhValue));
    } else if (jouleValue) {
        convertKwhToJoule(parseFloat(jouleValue));
    }
}

// Add event listeners
document.getElementById('jouleInput').addEventListener('input', function() {
    convertJouleToKwh(parseFloat(this.value));
});

document.getElementById('kwhInput').addEventListener('input', function() {
    convertKwhToJoule(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
