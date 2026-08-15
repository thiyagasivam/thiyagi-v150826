<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Kilowatt to BTU/hour Converter 2026 - Power Calculator | Thiyagi</title>
<meta name="description" content="Free online kilowatt to BTU per hour converter 2026. Convert kW to BTU/h instantly for HVAC, cooling, and thermal calculations.">
<meta name="keywords" content="kilowatt to btu hour converter 2026, kW to BTU/h, power converter, HVAC calculator, thermal converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Kilowatt to BTU/hour Converter 2026 - Power Calculator">
<meta property="og:description" content="Free online kilowatt to BTU per hour converter 2026. Convert kW to BTU/h instantly for HVAC calculations.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/kilowatt-to-btu-it-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Kilowatt to BTU/hour Converter 2026 - Power Calculator">
<meta name="twitter:description" content="Free online kilowatt to BTU per hour converter 2026. Convert kW to BTU/h instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-red-50 to-amber-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-thermometer-half text-orange-600 mr-3"></i>
                Kilowatt to BTU/hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert kilowatts to BTU per hour instantly for HVAC and thermal calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Kilowatts Input -->
                <div class="space-y-2">
                    <label for="kilowattInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-orange-600 mr-2"></i>Kilowatts (kW)
                    </label>
                    <input
                        type="number"
                        id="kilowattInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter kilowatts"
                        step="any"
                    >
                </div>

                <!-- BTU/hour Output -->
                <div class="space-y-2">
                    <label for="btuOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-thermometer-half text-orange-600 mr-2"></i>BTU/hour (BTU/h)
                    </label>
                    <input
                        type="number"
                        id="btuOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="BTU per hour result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-orange-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1 kW</div>
                    <div class="text-sm text-gray-600">= 3412.14 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">2 kW</div>
                    <div class="text-sm text-gray-600">= 6824.28 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">5 kW</div>
                    <div class="text-sm text-gray-600">= 17060.7 BTU/h</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">10 kW</div>
                    <div class="text-sm text-gray-600">= 34121.4 BTU/h</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-orange-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between kilowatts and BTU per hour. One kilowatt equals approximately 3412.14 BTU per hour.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    BTU/hour = Kilowatts × 3412.14<br>
                    Kilowatts = BTU/hour ÷ 3412.14
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>HVAC system sizing</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Air conditioning capacity</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Heating system calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Energy efficiency analysis</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Building thermal load calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertKilowattToBtu() {
    const kilowatt = parseFloat(document.getElementById('kilowattInput').value);
    if (!isNaN(kilowatt)) {
        const btu = kilowatt * 3412.14;
        document.getElementById('btuOutput').value = btu.toFixed(8);
    } else {
        document.getElementById('btuOutput').value = '';
    }
}

function convertBtuToKilowatt() {
    const btu = parseFloat(document.getElementById('btuOutput').value);
    if (!isNaN(btu)) {
        const kilowatt = btu / 3412.14;
        document.getElementById('kilowattInput').value = kilowatt.toFixed(8);
    } else {
        document.getElementById('kilowattInput').value = '';
    }
}

function swapValues() {
    const kilowattValue = document.getElementById('kilowattInput').value;
    const btuValue = document.getElementById('btuOutput').value;
    
    document.getElementById('kilowattInput').value = btuValue;
    document.getElementById('btuOutput').value = kilowattValue;
}

function clearValues() {
    document.getElementById('kilowattInput').value = '';
    document.getElementById('btuOutput').value = '';
}

// Add event listeners
document.getElementById('kilowattInput').addEventListener('input', convertKilowattToBtu);
document.getElementById('btuOutput').addEventListener('input', convertBtuToKilowatt);
</script>

<?php include 'footer.php'; ?>
