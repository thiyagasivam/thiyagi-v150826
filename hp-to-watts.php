<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Horsepower to Watts Converter 2026 - HP to W Calculator | Thiyagi</title>
<meta name="description" content="Free online Horsepower to Watts converter 2026. Convert HP to W and W to HP instantly with accurate power conversion for engines and motors.">
<meta name="keywords" content="horsepower to watts converter 2026, HP to W, power converter, engine power, motor calculations, mechanical power">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Horsepower to Watts Converter 2026 - HP to W Calculator">
<meta property="og:description" content="Free online Horsepower to Watts converter 2026. Convert HP to W and W to HP instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/hp-to-watts.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Horsepower to Watts Converter 2026 - HP to W Calculator">
<meta name="twitter:description" content="Free online Horsepower to Watts converter 2026. Convert HP to W and W to HP instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-red-50 to-yellow-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-horse text-orange-600 mr-3"></i>
                Horsepower to Watts Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between horsepower and watts for engine power, motor specifications, and mechanical power calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Horsepower Input -->
                <div class="space-y-4">
                    <label for="horsepowerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-orange-600 mr-2"></i>Horsepower (HP)
                    </label>
                    <input
                        type="number"
                        id="horsepowerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter horsepower"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 HP = 745.7 W (mechanical)
                    </div>
                </div>

                <!-- Watts Input -->
                <div class="space-y-4">
                    <label for="wattsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-bolt text-red-600 mr-2"></i>Watts (W)
                    </label>
                    <input
                        type="number"
                        id="wattsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-xl"
                        placeholder="Enter watts"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 W = 0.001341 HP
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
            <!-- Power Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-orange-600 mr-3"></i>Power Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Horsepower</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Watts</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">74.6 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">373 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">746 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,729 W</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">7,457 W</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 HP</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">74,570 W</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Engine Power Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-car text-orange-600 mr-3"></i>Engine Power Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Small Engines (HP):</strong><br>
                        • Lawn mower: 3-7 HP<br>
                        • Motorcycle: 15-200 HP<br>
                        • Small car: 100-150 HP<br>
                        • Compact car: 120-180 HP
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Vehicle Engines (HP):</strong><br>
                        • Mid-size car: 150-250 HP<br>
                        • Sports car: 300-700+ HP<br>
                        • Pickup truck: 200-400 HP<br>
                        • SUV: 180-500 HP
                    </div>
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Industrial Power (high HP):</strong><br>
                        • Bus engine: 200-400 HP<br>
                        • Semi truck: 400-600 HP<br>
                        • Marine engine: 100-5,000+ HP<br>
                        • Industrial motor: 1-10,000+ HP
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-orange-600 mr-2"></i>Power Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Horsepower:</strong> 746 watts (mechanical)</li>
                    <li><strong>Watt:</strong> SI unit of power</li>
                    <li><strong>Conversion:</strong> 1 HP = 745.7 W</li>
                    <li><strong>Origin:</strong> James Watt (1782)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Power Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>HP common for engines</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Watts for electrical power</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Consider efficiency losses</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Different HP standards exist</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-orange-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Automotive:</strong> Engine ratings</li>
                    <li><strong>Industrial:</strong> Motor specifications</li>
                    <li><strong>Marine:</strong> Boat engines</li>
                    <li><strong>Electrical:</strong> Power consumption</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertHpToWatts(horsepower) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(horsepower) && horsepower !== '') {
        const watts = horsepower * 745.699872;
        document.getElementById('wattsInput').value = watts.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${horsepower} HP = ${watts.toLocaleString(undefined, {maximumFractionDigits: 2})} W</strong>
        `;
    } else {
        document.getElementById('wattsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertWattsToHp(watts) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(watts) && watts !== '') {
        const horsepower = watts / 745.699872;
        document.getElementById('horsepowerInput').value = horsepower.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-orange-600 mr-2"></i>
            <strong>${watts.toLocaleString()} W = ${horsepower.toFixed(6)} HP</strong>
        `;
    } else {
        document.getElementById('horsepowerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('horsepowerInput').value = '';
    document.getElementById('wattsInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const hpValue = document.getElementById('horsepowerInput').value;
    const wattsValue = document.getElementById('wattsInput').value;
    
    document.getElementById('horsepowerInput').value = wattsValue;
    document.getElementById('wattsInput').value = hpValue;
    
    if (wattsValue) {
        convertHpToWatts(parseFloat(wattsValue));
    } else if (hpValue) {
        convertWattsToHp(parseFloat(hpValue));
    }
}

// Add event listeners
document.getElementById('horsepowerInput').addEventListener('input', function() {
    convertHpToWatts(parseFloat(this.value));
});

document.getElementById('wattsInput').addEventListener('input', function() {
    convertWattsToHp(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
