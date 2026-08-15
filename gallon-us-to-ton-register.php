<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gallon US to Ton Register Converter 2026 - gal to ton reg Calculator | Thiyagi</title>
<meta name="description" content="Free online Gallon US to Ton Register converter 2026. Convert gal to ton reg and ton reg to gal instantly with accurate shipping volume conversion.">
<meta name="keywords" content="gallon US to ton register converter 2026, gal to ton reg, shipping volume, maritime conversion, cargo capacity, vessel tonnage">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gallon US to Ton Register Converter 2026 - gal to ton reg Calculator">
<meta property="og:description" content="Free online Gallon US to Ton Register converter 2026. Convert gal to ton reg and ton reg to gal instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gallon-us-to-ton-register.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gallon US to Ton Register Converter 2026 - gal to ton reg Calculator">
<meta name="twitter:description" content="Free online Gallon US to Ton Register converter 2026. Convert gal to ton reg and ton reg to gal instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-cyan-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ship text-teal-600 mr-3"></i>
                Gallon US to Ton Register Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between US gallons and register tons for shipping, maritime cargo, and vessel capacity calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gallon US Input -->
                <div class="space-y-4">
                    <label for="gallonInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-tint text-teal-600 mr-2"></i>Gallon US (gal)
                    </label>
                    <input
                        type="number"
                        id="gallonInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter US gallons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 gal = 0.00134 ton reg
                    </div>
                </div>

                <!-- Ton Register Input -->
                <div class="space-y-4">
                    <label for="tonRegisterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-anchor text-cyan-600 mr-2"></i>Ton Register (ton reg)
                    </label>
                    <input
                        type="number"
                        id="tonRegisterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter register tons"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ton reg = 748.05 gal
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="shippingInfo" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-teal-600 mr-3"></i>Maritime Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">US Gallons</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Register Tons</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">100 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.134 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.668 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">748 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,500 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.005 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">7,481 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 ton reg</td>
                            </tr>
                            <tr>
                                <td class="py-2">74,805 gal</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 ton reg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Vessel Capacity & Cargo -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-container-storage text-teal-600 mr-3"></i>Vessel Capacity & Cargo
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Small Vessels:</strong><br>
                        • Yacht fuel tank: 50-500 gal (0.07-0.67 ton reg)<br>
                        • Fishing boat: 200-2,000 gal (0.27-2.67 ton reg)<br>
                        • Pleasure craft: 20-200 gal (0.03-0.27 ton reg)<br>
                        • Work boat: 100-1,000 gal (0.13-1.34 ton reg)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Commercial Vessels:</strong><br>
                        • Cargo ship: 50,000-500,000 gal (67-668 ton reg)<br>
                        • Tanker vessel: 1M-10M gal (1,336-13,360 ton reg)<br>
                        • Ferry: 5,000-50,000 gal (6.7-67 ton reg)<br>
                        • Tugboat: 1,000-10,000 gal (1.3-13.4 ton reg)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Register Ton Definition:</strong><br>
                        • Historical unit: 100 cubic feet<br>
                        • Volume measure: cargo capacity<br>
                        • Maritime standard: vessel registration<br>
                        • Modern usage: shipping calculations
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>US Gallon:</strong> 231 cubic inches</li>
                    <li><strong>Register Ton:</strong> 100 cubic feet</li>
                    <li><strong>Conversion:</strong> 1 ton reg = 748.05 gal</li>
                    <li><strong>Usage:</strong> Maritime and shipping</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Maritime Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use for cargo capacity planning</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Essential for vessel registration</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Critical for fuel calculations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Standard in shipping industry</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Shipping:</strong> Cargo volume calculations</li>
                    <li><strong>Maritime:</strong> Vessel capacity planning</li>
                    <li><strong>Fuel:</strong> Bunker fuel requirements</li>
                    <li><strong>Registration:</strong> Official tonnage</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertGallonToTonRegister(gallons) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(gallons) && gallons !== '') {
        const tonRegister = gallons / 748.05194805;
        document.getElementById('tonRegisterInput').value = tonRegister.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${gallons} gal = ${tonRegister.toFixed(8)} ton reg</strong>
        `;
        
        // Add shipping context information
        let shippingText = '';
        if (gallons >= 1000000) {
            shippingText = 'Large tanker vessel capacity range';
        } else if (gallons >= 100000) {
            shippingText = 'Commercial cargo vessel range';
        } else if (gallons >= 10000) {
            shippingText = 'Medium commercial vessel range';
        } else if (gallons >= 1000) {
            shippingText = 'Small commercial or large recreational vessel';
        } else if (gallons >= 100) {
            shippingText = 'Recreational boat fuel tank range';
        } else if (gallons > 0) {
            shippingText = 'Small vessel or tank capacity';
        }
        
        document.getElementById('shippingInfo').innerHTML = shippingText;
    } else {
        document.getElementById('tonRegisterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('shippingInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertTonRegisterToGallon(tonRegister) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tonRegister) && tonRegister !== '') {
        const gallons = tonRegister * 748.05194805;
        document.getElementById('gallonInput').value = gallons.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${tonRegister} ton reg = ${gallons.toFixed(6)} gal</strong>
        `;
        
        // Add shipping context information
        let shippingText = '';
        if (tonRegister >= 1000) {
            shippingText = 'Very large vessel capacity (supertanker class)';
        } else if (tonRegister >= 100) {
            shippingText = 'Large commercial vessel capacity';
        } else if (tonRegister >= 10) {
            shippingText = 'Medium commercial vessel capacity';
        } else if (tonRegister >= 1) {
            shippingText = 'Small commercial or large recreational vessel';
        } else if (tonRegister >= 0.1) {
            shippingText = 'Recreational vessel capacity range';
        } else if (tonRegister > 0) {
            shippingText = 'Small boat or tank capacity';
        }
        
        document.getElementById('shippingInfo').innerHTML = shippingText;
    } else {
        document.getElementById('gallonInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('shippingInfo').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('gallonInput').value = '';
    document.getElementById('tonRegisterInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('shippingInfo').innerHTML = '';
}

function swapValues() {
    const gallonValue = document.getElementById('gallonInput').value;
    const tonRegisterValue = document.getElementById('tonRegisterInput').value;
    
    document.getElementById('gallonInput').value = tonRegisterValue;
    document.getElementById('tonRegisterInput').value = gallonValue;
    
    if (tonRegisterValue) {
        convertGallonToTonRegister(parseFloat(tonRegisterValue));
    } else if (gallonValue) {
        convertTonRegisterToGallon(parseFloat(gallonValue));
    }
}

// Add event listeners
document.getElementById('gallonInput').addEventListener('input', function() {
    convertGallonToTonRegister(parseFloat(this.value));
});

document.getElementById('tonRegisterInput').addEventListener('input', function() {
    convertTonRegisterToGallon(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
