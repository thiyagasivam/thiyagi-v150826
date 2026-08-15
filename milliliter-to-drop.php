<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milliliter to Drop Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online milliliter to drop converter 2026. Convert mL to drops instantly with accurate volume conversion for medical and laboratory measurements.">
<meta name="keywords" content="milliliter to drop converter 2026, mL to drops, volume converter, medical calculator, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milliliter to Drop Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online milliliter to drop converter 2026. Convert mL to drops instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milliliter-to-drop.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milliliter to Drop Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online milliliter to drop converter 2026. Convert mL to drops instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-teal-50 to-green-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-tint text-cyan-600 mr-3"></i>
                Milliliter to Drop Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert milliliters to drops instantly for medical dosing, laboratory work, and precise measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milliliter Input -->
                <div class="space-y-2">
                    <label for="milliliterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-cyan-600 mr-2"></i>Milliliters (mL)
                    </label>
                    <input
                        type="number"
                        id="milliliterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Enter milliliters"
                        step="any"
                    >
                </div>

                <!-- Drop Output -->
                <div class="space-y-2">
                    <label for="dropOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-droplet text-cyan-600 mr-2"></i>Drops
                    </label>
                    <input
                        type="number"
                        id="dropOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-lg"
                        placeholder="Drops result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-cyan-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">1 mL</div>
                    <div class="text-sm text-gray-600">= 20 drops</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">5 mL</div>
                    <div class="text-sm text-gray-600">= 100 drops</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">10 mL</div>
                    <div class="text-sm text-gray-600">= 200 drops</div>
                </div>
                <div class="bg-cyan-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-cyan-800">0.5 mL</div>
                    <div class="text-sm text-gray-600">= 10 drops</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-cyan-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between milliliters and drops. One milliliter equals approximately 20 drops (medical standard).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Drops = Milliliters × 20<br>
                    Milliliters = Drops ÷ 20
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Medical dosing</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Pharmaceutical preparations</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Essential oil measurements</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Laboratory work</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Homeopathy calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMilliliterToDrop() {
    const milliliter = parseFloat(document.getElementById('milliliterInput').value);
    if (!isNaN(milliliter)) {
        const drop = milliliter * 20; // 1 mL = 20 drops (medical standard)
        document.getElementById('dropOutput').value = drop.toFixed(2);
    } else {
        document.getElementById('dropOutput').value = '';
    }
}

function convertDropToMilliliter() {
    const drop = parseFloat(document.getElementById('dropOutput').value);
    if (!isNaN(drop)) {
        const milliliter = drop / 20; // 1 mL = 20 drops (medical standard)
        document.getElementById('milliliterInput').value = milliliter.toFixed(6);
    } else {
        document.getElementById('milliliterInput').value = '';
    }
}

function swapValues() {
    const milliliterValue = document.getElementById('milliliterInput').value;
    const dropValue = document.getElementById('dropOutput').value;
    
    document.getElementById('milliliterInput').value = dropValue;
    document.getElementById('dropOutput').value = milliliterValue;
}

function clearValues() {
    document.getElementById('milliliterInput').value = '';
    document.getElementById('dropOutput').value = '';
}

// Add event listeners
document.getElementById('milliliterInput').addEventListener('input', convertMilliliterToDrop);
document.getElementById('dropOutput').addEventListener('input', convertDropToMilliliter);
</script>

<?php include 'footer.php'; ?>
