<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>BTU to Ton Converter 2026 - Cooling Capacity Calculator | Thiyagi</title>
<meta name="description" content="Free online BTU to ton converter 2026. Convert British Thermal Units to refrigeration tons instantly. Perfect for HVAC and air conditioning calculations.">
<meta name="keywords" content="btu to ton converter 2026, cooling capacity calculator, HVAC converter, air conditioning calculator, refrigeration tons">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="BTU to Ton Converter 2026 - Cooling Capacity Calculator">
<meta property="og:description" content="Free online BTU to ton converter 2026. Convert British Thermal Units to refrigeration tons instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/btu-to-ton.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="BTU to Ton Converter 2026 - Cooling Capacity Calculator">
<meta name="twitter:description" content="Free online BTU to ton converter 2026. Convert British Thermal Units to refrigeration tons instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-fire text-red-600 mr-3"></i>
                BTU to Ton Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert British Thermal Units per hour to tons of refrigeration instantly
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- BTU Input -->
                <div class="space-y-2">
                    <label for="btuInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-fire text-red-600 mr-2"></i>BTU/hr (British Thermal Units per hour)
                    </label>
                    <input
                        type="number"
                        id="btuInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter BTU/hr"
                        step="any"
                    >
                </div>

                <!-- Ton Output -->
                <div class="space-y-2">
                    <label for="tonOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-snowflake text-red-600 mr-2"></i>Tons of Refrigeration
                    </label>
                    <input
                        type="number"
                        id="tonOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Tons result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">12000 BTU/hr</div>
                    <div class="text-sm text-gray-600">= 1 ton</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">18000 BTU/hr</div>
                    <div class="text-sm text-gray-600">= 1.5 tons</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">24000 BTU/hr</div>
                    <div class="text-sm text-gray-600">= 2 tons</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">36000 BTU/hr</div>
                    <div class="text-sm text-gray-600">= 3 tons</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between BTU/hr and tons of refrigeration. One ton of refrigeration equals exactly 12,000 BTU/hr.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Tons = BTU/hr ÷ 12,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Air conditioning system sizing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>HVAC equipment selection</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Refrigeration capacity calculations</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Building cooling load analysis</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Energy efficiency assessments</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertBtuToTon() {
    const btu = parseFloat(document.getElementById('btuInput').value);
    if (!isNaN(btu)) {
        const ton = btu / 12000;
        document.getElementById('tonOutput').value = ton.toFixed(8);
    } else {
        document.getElementById('tonOutput').value = '';
    }
}

function convertTonToBtu() {
    const ton = parseFloat(document.getElementById('tonOutput').value);
    if (!isNaN(ton)) {
        const btu = ton * 12000;
        document.getElementById('btuInput').value = btu.toFixed(8);
    } else {
        document.getElementById('btuInput').value = '';
    }
}

function swapValues() {
    const btuValue = document.getElementById('btuInput').value;
    const tonValue = document.getElementById('tonOutput').value;
    
    document.getElementById('btuInput').value = tonValue;
    document.getElementById('tonOutput').value = btuValue;
}

function clearValues() {
    document.getElementById('btuInput').value = '';
    document.getElementById('tonOutput').value = '';
}

// Add event listeners
document.getElementById('btuInput').addEventListener('input', convertBtuToTon);
document.getElementById('tonOutput').addEventListener('input', convertTonToBtu);
</script>

<?php include 'footer.php'; ?>
