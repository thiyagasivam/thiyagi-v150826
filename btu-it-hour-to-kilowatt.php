<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>BTU IT/Hour to Kilowatt Converter 2026 - Power Calculator | Thiyagi</title>
<meta name="description" content="Free online BTU IT/hour to kilowatt converter 2026. Convert BTU/h to kW instantly with accurate power conversion for HVAC and energy calculations.">
<meta name="keywords" content="BTU hour to kilowatt converter 2026, BTU/h to kW, power converter, HVAC calculator, energy conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="BTU IT/Hour to Kilowatt Converter 2026 - Power Calculator">
<meta property="og:description" content="Free online BTU IT/hour to kilowatt converter 2026. Convert BTU/h to kW instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/btu-it-hour-to-kilowatt.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BTU IT/Hour to Kilowatt Converter 2026 - Power Calculator">
<meta name="twitter:description" content="Free online BTU IT/hour to kilowatt converter 2026. Convert BTU/h to kW instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                BTU IT/Hour to Kilowatt Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert BTU IT per hour to kilowatts instantly for HVAC, energy, and power calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- BTU/h Input -->
                <div class="space-y-2">
                    <label for="btuInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-fire text-yellow-600 mr-2"></i>BTU IT/Hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Enter BTU/hour"
                        step="any"
                    >
                </div>

                <!-- Kilowatt Output -->
                <div class="space-y-2">
                    <label for="kilowattOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-lightning-bolt text-yellow-600 mr-2"></i>Kilowatts (kW)
                    </label>
                    <input
                        type="number"
                        id="kilowattOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Kilowatts result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversion Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-table text-yellow-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">1000 BTU/h</div>
                    <div class="text-sm text-gray-600">= 0.293 kW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">3412 BTU/h</div>
                    <div class="text-sm text-gray-600">= 1 kW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">5000 BTU/h</div>
                    <div class="text-sm text-gray-600">= 1.465 kW</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">10000 BTU/h</div>
                    <div class="text-sm text-gray-600">= 2.931 kW</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-yellow-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between BTU IT per hour and kilowatts. One BTU IT/hour equals 0.000293071 kilowatts.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Kilowatts = BTU/h × 0.000293071<br>
                    BTU/h = Kilowatts ÷ 0.000293071
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>HVAC system sizing</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Energy efficiency calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Power plant operations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Building energy audits</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Industrial process design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertBtuToKilowatt() {
    const btu = parseFloat(document.getElementById('btuInput').value);
    if (!isNaN(btu)) {
        const kilowatt = btu * 0.000293071; // 1 BTU/h = 0.000293071 kW
        document.getElementById('kilowattOutput').value = kilowatt.toFixed(6);
    } else {
        document.getElementById('kilowattOutput').value = '';
    }
}

function convertKilowattToBtu() {
    const kilowatt = parseFloat(document.getElementById('kilowattOutput').value);
    if (!isNaN(kilowatt)) {
        const btu = kilowatt / 0.000293071; // 1 BTU/h = 0.000293071 kW
        document.getElementById('btuInput').value = btu.toFixed(2);
    } else {
        document.getElementById('btuInput').value = '';
    }
}

function swapValues() {
    const btuValue = document.getElementById('btuInput').value;
    const kilowattValue = document.getElementById('kilowattOutput').value;
    
    document.getElementById('btuInput').value = kilowattValue;
    document.getElementById('kilowattOutput').value = btuValue;
}

function clearValues() {
    document.getElementById('btuInput').value = '';
    document.getElementById('kilowattOutput').value = '';
}

// Add event listeners
document.getElementById('btuInput').addEventListener('input', convertBtuToKilowatt);
document.getElementById('kilowattOutput').addEventListener('input', convertKilowattToBtu);
</script>

<?php include 'footer.php'; ?>
