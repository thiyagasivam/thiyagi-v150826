<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Ton Register to Gallon US Converter 2026 - ton reg to gal Calculator | Thiyagi</title>
<meta name="description" content="Free online Ton Register to Gallon US converter 2026. Convert ton reg to gal and gal to ton reg instantly with accurate maritime volume conversion.">
<meta name="keywords" content="ton register to gallon converter 2026, ton reg to gal, maritime volume, ship capacity, cargo measurement, shipping units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Ton Register to Gallon US Converter 2026 - ton reg to gal Calculator">
<meta property="og:description" content="Free online Ton Register to Gallon US converter 2026. Convert ton reg to gal and gal to ton reg instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ton-register-to-gallon-us.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Ton Register to Gallon US Converter 2026 - ton reg to gal Calculator">
<meta property="twitter:description" content="Free online Ton Register to Gallon US converter 2026. Convert ton reg to gal and gal to ton reg instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ship text-cyan-600 mr-3"></i>
                Ton Register to Gallon US Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between ton register and US gallons for maritime cargo capacity, ship measurement, and marine vessel calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Ton Register Input -->
                <div class="space-y-4">
                    <label for="tonRegisterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-anchor text-cyan-600 mr-2"></i>Ton Register (ton reg)
                    </label>
                    <input
                        type="number"
                        id="tonRegisterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter ton register"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ton reg = 748.05 gallons
                    </div>
                </div>

                <!-- Gallon US Input -->
                <div class="space-y-4">
                    <label for="gallonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tint text-teal-600 mr-2"></i>US Gallons (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter gallons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gal = 0.001337 ton reg
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-teal-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Maritime Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Maritime Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Ton Register</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">US Gallons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">74.8 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">374 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">748 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">7,481 gal</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">74,805 gal</td>
                            </tr>
                            <tr>
                                <td class="py-2">1,000 ton reg</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">748,052 gal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ship Capacity Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-water text-cyan-600 mr-3"></i>Ship Capacity Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Small Vessels:</strong><br>
                        • Pleasure yacht: 5-50 ton reg (3,740-37,400 gal)<br>
                        • Fishing boat: 10-100 ton reg (7,481-74,805 gal)<br>
                        • Coast guard cutter: 50-500 ton reg<br>
                        • Harbor tug: 25-200 ton reg
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Commercial Vessels:</strong><br>
                        • Ferry: 500-5,000 ton reg<br>
                        • Cargo ship: 1,000-50,000 ton reg<br>
                        • Tanker: 10,000-100,000 ton reg<br>
                        • Container ship: 50,000-200,000 ton reg
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Liquid Cargo Calculations:</strong><br>
                        • Fuel capacity: ton reg × 748 gal<br>
                        • Water ballast: varies by design<br>
                        • Oil tanker cargo: specialized measurement<br>
                        • Chemical transport: precise volume needed
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Ton Register:</strong> 100 cubic feet</li>
                    <li><strong>US Gallon:</strong> 231 cubic inches</li>
                    <li><strong>Conversion:</strong> 1 ton reg = 748.05 gal</li>
                    <li><strong>Origin:</strong> Ship tonnage measurement</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>ton reg for ship capacity</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>gal for liquid cargo</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Maritime standards</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Port calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Maritime:</strong> Ship registration</li>
                    <li><strong>Shipping:</strong> Cargo capacity</li>
                    <li><strong>Port operations:</strong> Berth planning</li>
                    <li><strong>Naval:</strong> Vessel specifications</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertTonRegisterToGallon(tonRegister) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tonRegister) && tonRegister !== '') {
        // 1 ton register = 100 cubic feet = 748.052 US gallons
        const gallon = tonRegister * 748.052;
        document.getElementById('gallonInput').value = gallon.toFixed(2);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${tonRegister} ton reg = ${gallon.toLocaleString(undefined, {maximumFractionDigits: 1})} gal</strong>
        `;
    } else {
        document.getElementById('gallonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertGallonToTonRegister(gallon) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gallon) && gallon !== '') {
        // 1 US gallon = 1/748.052 ton register
        const tonRegister = gallon / 748.052;
        document.getElementById('tonRegisterInput').value = tonRegister.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${gallon.toLocaleString()} gal = ${tonRegister.toFixed(4)} ton reg</strong>
        `;
    } else {
        document.getElementById('tonRegisterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('tonRegisterInput').value = '';
    document.getElementById('gallonInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const tonRegisterValue = document.getElementById('tonRegisterInput').value;
    const gallonValue = document.getElementById('gallonInput').value;
    
    document.getElementById('tonRegisterInput').value = gallonValue;
    document.getElementById('gallonInput').value = tonRegisterValue;
    
    if (gallonValue) {
        convertTonRegisterToGallon(parseFloat(gallonValue));
    } else if (tonRegisterValue) {
        convertGallonToTonRegister(parseFloat(tonRegisterValue));
    }
}

// Add event listeners
document.getElementById('tonRegisterInput').addEventListener('input', function() {
    convertTonRegisterToGallon(parseFloat(this.value));
});

document.getElementById('gallonInput').addEventListener('input', function() {
    convertGallonToTonRegister(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
