<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Square Yards to Square Feet Converter 2026 - Area Calculator | Thiyagi</title>
<meta name="description" content="Free online square yards to square feet converter 2026. Convert sq yd to sq ft instantly with accurate area conversion. Perfect for construction and real estate.">
<meta name="keywords" content="square yards to square feet converter 2026, sq yd to sq ft, area converter, construction calculator, real estate converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Square Yards to Square Feet Converter 2026 - Area Calculator">
<meta property="og:description" content="Free online square yards to square feet converter 2026. Convert sq yd to sq ft instantly with accurate area conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/square-yards-to-square-feet.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Square Yards to Square Feet Converter 2026 - Area Calculator">
<meta name="twitter:description" content="Free online square yards to square feet converter 2026. Convert sq yd to sq ft instantly with accurate area conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-yellow-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-vector-square text-amber-600 mr-3"></i>
                Square Yards to Square Feet Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert square yards to square feet instantly with our accurate area converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Square Yards Input -->
                <div class="space-y-2">
                    <label for="sqYardInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-vector-square text-amber-600 mr-2"></i>Square Yards (sq yd)
                    </label>
                    <input
                        type="number"
                        id="sqYardInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Enter square yards"
                        step="any"
                    >
                </div>

                <!-- Square Feet Output -->
                <div class="space-y-2">
                    <label for="sqFeetOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-square text-amber-600 mr-2"></i>Square Feet (sq ft)
                    </label>
                    <input
                        type="number"
                        id="sqFeetOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-lg"
                        placeholder="Square feet result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-amber-600 hover:bg-amber-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-amber-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">1 sq yd</div>
                    <div class="text-sm text-gray-600">= 9 sq ft</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">5 sq yd</div>
                    <div class="text-sm text-gray-600">= 45 sq ft</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">10 sq yd</div>
                    <div class="text-sm text-gray-600">= 90 sq ft</div>
                </div>
                <div class="bg-amber-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-amber-800">100 sq yd</div>
                    <div class="text-sm text-gray-600">= 900 sq ft</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-amber-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between square yards and square feet. One square yard equals exactly 9 square feet.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Square Feet = Square Yards × 9
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Construction area calculations</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Real estate property measurements</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Carpet and flooring estimates</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Landscaping project planning</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Interior design space planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertSqYardToSqFeet() {
    const sqYard = parseFloat(document.getElementById('sqYardInput').value);
    if (!isNaN(sqYard)) {
        const sqFeet = sqYard * 9;
        document.getElementById('sqFeetOutput').value = sqFeet.toFixed(8);
    } else {
        document.getElementById('sqFeetOutput').value = '';
    }
}

function convertSqFeetToSqYard() {
    const sqFeet = parseFloat(document.getElementById('sqFeetOutput').value);
    if (!isNaN(sqFeet)) {
        const sqYard = sqFeet / 9;
        document.getElementById('sqYardInput').value = sqYard.toFixed(8);
    } else {
        document.getElementById('sqYardInput').value = '';
    }
}

function swapValues() {
    const sqYardValue = document.getElementById('sqYardInput').value;
    const sqFeetValue = document.getElementById('sqFeetOutput').value;
    
    document.getElementById('sqYardInput').value = sqFeetValue;
    document.getElementById('sqFeetOutput').value = sqYardValue;
}

function clearValues() {
    document.getElementById('sqYardInput').value = '';
    document.getElementById('sqFeetOutput').value = '';
}

// Add event listeners
document.getElementById('sqYardInput').addEventListener('input', convertSqYardToSqFeet);
document.getElementById('sqFeetOutput').addEventListener('input', convertSqFeetToSqYard);
</script>

<?php include 'footer.php'; ?>
