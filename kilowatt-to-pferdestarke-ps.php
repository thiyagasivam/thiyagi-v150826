<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilowatt to Pferdestarke (PS) Converter 2026 - kW to PS Power Calculator | Thiyagi</title>
<meta name="description" content="Free online Kilowatt to Pferdestarke converter 2026. Convert kW to PS and PS to kW instantly with accurate power conversion.">
<meta name="keywords" content="kilowatt to pferdestarke converter 2026, kW to PS, power conversion, horsepower calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilowatt to Pferdestarke Converter 2026 - kW to PS Power Calculator">
<meta property="og:description" content="Free online Kilowatt to Pferdestarke converter 2026. Convert kW to PS and PS to kW instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilowatt-to-pferdestarke-ps.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilowatt to Pferdestarke Converter 2026 - kW to PS Power Calculator">
<meta property="twitter:description" content="Free online Kilowatt to Pferdestarke converter 2026. Convert kW to PS and PS to kW instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-car text-red-600 mr-3"></i>
                Kilowatt to Pferdestarke (PS) Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between kilowatts (kW) and Pferdestarke (PS) for automotive power ratings, engine specifications, motor calculations, and European power measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilowatt Input -->
                <div class="space-y-4">
                    <label for="kilowattInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-bolt text-red-600 mr-2"></i>Kilowatts (kW)
                    </label>
                    <input
                        type="number"
                        id="kilowattInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter kilowatts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        International power unit (1,000 watts)
                    </div>
                </div>

                <!-- Pferdestarke Input -->
                <div class="space-y-4">
                    <label for="pferdestarkeInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-horse text-orange-600 mr-2"></i>Pferdestarke (PS)
                    </label>
                    <input
                        type="number"
                        id="pferdestarkeInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-xl"
                        placeholder="Enter PS"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        German horsepower (metric)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-red-50 to-orange-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Power Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-red-600 mr-3"></i>Power Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Kilowatts</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Pferdestarke</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.36 PS</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">13.6 PS</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">68.0 PS</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">136 PS</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">200 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">272 PS</td>
                            </tr>
                            <tr>
                                <td class="py-2">500 kW</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">680 PS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Automotive Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-car text-red-600 mr-3"></i>Automotive Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Passenger Cars:</strong><br>
                        • Economy cars: 50-100 kW (68-136 PS)<br>
                        • Mid-size cars: 100-150 kW (136-204 PS)<br>
                        • Sports cars: 200-400 kW (272-544 PS)<br>
                        • Supercars: 400-800+ kW (544-1,088+ PS)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Commercial Vehicles:</strong><br>
                        • Small trucks: 80-150 kW (109-204 PS)<br>
                        • Large trucks: 200-500 kW (272-680 PS)<br>
                        • Buses: 150-300 kW (204-408 PS)<br>
                        • Heavy machinery: 300-1000+ kW
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Motorcycles & Others:</strong><br>
                        • Scooters: 2-15 kW (3-20 PS)<br>
                        • Motorcycles: 15-150 kW (20-204 PS)<br>
                        • ATVs: 20-80 kW (27-109 PS)<br>
                        • Boat engines: 50-2000+ kW
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calculator text-red-600 mr-2"></i>Power Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>kW:</strong> 1,000 watts (SI unit)</li>
                    <li><strong>PS:</strong> Metric horsepower</li>
                    <li><strong>Conversion:</strong> 1 kW = 1.35962 PS</li>
                    <li><strong>Standard:</strong> DIN 66036</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>kW for technical specs</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>PS for European markets</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Different from US horsepower</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Check regional standards</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-wrench text-red-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Automotive:</strong> Engine ratings</li>
                    <li><strong>Industrial:</strong> Motor specifications</li>
                    <li><strong>Marine:</strong> Boat engines</li>
                    <li><strong>Aviation:</strong> Aircraft engines</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertKilowattToPferdestarke(kilowatt) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilowatt) && kilowatt !== '') {
        // 1 kW = 1.35962161 PS (metric horsepower)
        const pferdestarke = kilowatt * 1.35962161;
        document.getElementById('pferdestarkeInput').value = pferdestarke.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${kilowatt} kW = ${pferdestarke.toFixed(3)} PS</strong>
        `;
    } else {
        document.getElementById('pferdestarkeInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertPferdestarkeTokKilowatt(pferdestarke) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(pferdestarke) && pferdestarke !== '') {
        // 1 PS = 0.735499 kW
        const kilowatt = pferdestarke / 1.35962161;
        document.getElementById('kilowattInput').value = kilowatt.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-red-600 mr-2"></i>
            <strong>${pferdestarke} PS = ${kilowatt.toFixed(3)} kW</strong>
        `;
    } else {
        document.getElementById('kilowattInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('kilowattInput').value = '';
    document.getElementById('pferdestarkeInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const kilowattValue = document.getElementById('kilowattInput').value;
    const pferdestarkeValue = document.getElementById('pferdestarkeInput').value;
    
    document.getElementById('kilowattInput').value = pferdestarkeValue;
    document.getElementById('pferdestarkeInput').value = kilowattValue;
    
    if (pferdestarkeValue) {
        convertKilowattToPferdestarke(parseFloat(pferdestarkeValue));
    } else if (kilowattValue) {
        convertPferdestarkeTokKilowatt(parseFloat(kilowattValue));
    }
}

// Add event listeners
document.getElementById('kilowattInput').addEventListener('input', function() {
    convertKilowattToPferdestarke(parseFloat(this.value));
});

document.getElementById('pferdestarkeInput').addEventListener('input', function() {
    convertPferdestarkeTokKilowatt(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
