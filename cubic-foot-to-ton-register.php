<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Cubic Foot to Ton Register Converter 2026 - ft³ to ton reg Calculator | Thiyagi</title>
<meta name="description" content="Free online Cubic Foot to Ton Register converter 2026. Convert ft³ to ton reg and ton reg to ft³ instantly with accurate volume conversion.">
<meta name="keywords" content="cubic foot to ton register converter 2026, ft³ to ton reg, volume converter, shipping measurement, cargo capacity">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Cubic Foot to Ton Register Converter 2026 - ft³ to ton reg Calculator">
<meta property="og:description" content="Free online Cubic Foot to Ton Register converter 2026. Convert ft³ to ton reg and ton reg to ft³ instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/cubic-foot-to-ton-register.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Cubic Foot to Ton Register Converter 2026 - ft³ to ton reg Calculator">
<meta property="twitter:description" content="Free online Cubic Foot to Ton Register converter 2026. Convert ft³ to ton reg and ton reg to ft³ instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ship text-slate-600 mr-3"></i>
                Cubic Foot to Ton Register Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between cubic feet and ton register for shipping volumes, cargo capacity calculations, and maritime measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Cubic Foot Input -->
                <div class="space-y-4">
                    <label for="ft3Input" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-cube text-slate-600 mr-2"></i>Cubic Feet (ft³)
                    </label>
                    <input
                        type="number"
                        id="ft3Input"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter cubic feet"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ft³ = 0.01 ton register
                    </div>
                </div>

                <!-- Ton Register Input -->
                <div class="space-y-4">
                    <label for="tonRegInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-anchor text-gray-600 mr-2"></i>Ton Register (ton reg)
                    </label>
                    <input
                        type="number"
                        id="tonRegInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-xl"
                        placeholder="Enter ton register"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 ton register = 100 ft³
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-slate-50 to-gray-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-slate-500 hover:bg-slate-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Shipping Volume Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-slate-600 mr-3"></i>Shipping Volume Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Cubic Feet</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Ton Register</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">50 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 ton reg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5,000 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">50 ton reg</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 ft³</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 ton reg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Maritime Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-water text-slate-600 mr-3"></i>Maritime Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-slate-50 p-3 rounded">
                        <strong>Ship Capacity:</strong><br>
                        • Small yacht: 50-200 ton reg<br>
                        • Fishing vessel: 100-500 ton reg<br>
                        • Cargo ship: 1,000-10,000 ton reg<br>
                        • Container ship: 20,000+ ton reg
                    </div>
                    <div class="bg-gray-50 p-3 rounded">
                        <strong>Cargo Containers:</strong><br>
                        • 20ft container: 11.33 ton reg<br>
                        • 40ft container: 22.67 ton reg<br>
                        • 40ft high cube: 24.16 ton reg<br>
                        • 45ft container: 26.82 ton reg
                    </div>
                    <div class="bg-zinc-50 p-3 rounded">
                        <strong>Port Operations:</strong><br>
                        • Warehouse space planning<br>
                        • Dock capacity calculations<br>
                        • Tonnage tax assessment<br>
                        • Maritime insurance ratings
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-slate-600 mr-2"></i>Volume Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Cubic Foot:</strong> Volume unit (ft³)</li>
                    <li><strong>Ton Register:</strong> 100 cubic feet</li>
                    <li><strong>Conversion:</strong> 1 ton reg = 100 ft³</li>
                    <li><strong>Origin:</strong> Maritime measurement</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>ft³ for small volumes</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>ton reg for ship capacity</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Simple 100:1 ratio</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Maritime industry standard</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-slate-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Shipping:</strong> Cargo capacity</li>
                    <li><strong>Maritime:</strong> Vessel registration</li>
                    <li><strong>Logistics:</strong> Space planning</li>
                    <li><strong>Insurance:</strong> Coverage calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertFt3ToTonReg(ft3) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(ft3) && ft3 !== '') {
        // 1 ton register = 100 cubic feet
        const tonReg = ft3 / 100;
        document.getElementById('tonRegInput').value = tonReg.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${ft3.toLocaleString()} ft³ = ${tonReg.toFixed(4)} ton reg</strong>
        `;
    } else {
        document.getElementById('tonRegInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertTonRegToFt3(tonReg) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(tonReg) && tonReg !== '') {
        // 1 ton register = 100 cubic feet
        const ft3 = tonReg * 100;
        document.getElementById('ft3Input').value = ft3;
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-slate-600 mr-2"></i>
            <strong>${tonReg} ton reg = ${ft3.toLocaleString()} ft³</strong>
        `;
    } else {
        document.getElementById('ft3Input').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('ft3Input').value = '';
    document.getElementById('tonRegInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const ft3Value = document.getElementById('ft3Input').value;
    const tonRegValue = document.getElementById('tonRegInput').value;
    
    document.getElementById('ft3Input').value = tonRegValue;
    document.getElementById('tonRegInput').value = ft3Value;
    
    if (tonRegValue) {
        convertFt3ToTonReg(parseFloat(tonRegValue));
    } else if (ft3Value) {
        convertTonRegToFt3(parseFloat(ft3Value));
    }
}

// Add event listeners
document.getElementById('ft3Input').addEventListener('input', function() {
    convertFt3ToTonReg(parseFloat(this.value));
});

document.getElementById('tonRegInput').addEventListener('input', function() {
    convertTonRegToFt3(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
