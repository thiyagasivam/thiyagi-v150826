<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Watts to HP Converter 2026 - Power Calculator | Thiyagi</title>
<meta name="description" content="Free online watts to horsepower converter 2026. Convert watts to HP instantly with accurate power conversion. Perfect for motor and engine power ratings.">
<meta name="keywords" content="watts to hp converter 2026, watts to horsepower, power converter, motor calculator, engine power, electrical conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Watts to HP Converter 2026 - Power Calculator">
<meta property="og:description" content="Free online watts to horsepower converter 2026. Convert watts to HP instantly with accurate power conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/watts-to-hp.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Watts to HP Converter 2026 - Power Calculator">
<meta name="twitter:description" content="Free online watts to horsepower converter 2026. Convert watts to HP instantly with accurate power conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-yellow-600 mr-3"></i>
                Watts to Horsepower Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert watts to horsepower (hp) instantly with our precise power converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Watts Input -->
                <div class="space-y-2">
                    <label for="wattsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bolt text-yellow-600 mr-2"></i>Watts (W)
                    </label>
                    <input
                        type="number"
                        id="wattsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Enter watts"
                        step="any"
                    >
                </div>

                <!-- Horsepower Output -->
                <div class="space-y-2">
                    <label for="hpOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-horse text-yellow-600 mr-2"></i>Horsepower (hp)
                    </label>
                    <input
                        type="number"
                        id="hpOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-lg"
                        placeholder="Horsepower result"
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
                    <div class="font-bold text-yellow-800">746 W</div>
                    <div class="text-sm text-gray-600">= 1 hp</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">1000 W</div>
                    <div class="text-sm text-gray-600">≈ 1.34 hp</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">3730 W</div>
                    <div class="text-sm text-gray-600">= 5 hp</div>
                </div>
                <div class="bg-yellow-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-yellow-800">7460 W</div>
                    <div class="text-sm text-gray-600">= 10 hp</div>
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
                    This converter helps you convert between watts and mechanical horsepower. One mechanical horsepower equals exactly 745.699872 watts.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Horsepower = Watts ÷ 745.699872
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Motor power specifications</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Engine output calculations</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Electric vehicle power ratings</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Industrial equipment sizing</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Power tool comparisons</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertWattsToHp() {
    const watts = parseFloat(document.getElementById('wattsInput').value);
    if (!isNaN(watts)) {
        const hp = watts / 745.699872;
        document.getElementById('hpOutput').value = hp.toFixed(8);
    } else {
        document.getElementById('hpOutput').value = '';
    }
}

function convertHpToWatts() {
    const hp = parseFloat(document.getElementById('hpOutput').value);
    if (!isNaN(hp)) {
        const watts = hp * 745.699872;
        document.getElementById('wattsInput').value = watts.toFixed(8);
    } else {
        document.getElementById('wattsInput').value = '';
    }
}

function swapValues() {
    const wattsValue = document.getElementById('wattsInput').value;
    const hpValue = document.getElementById('hpOutput').value;
    
    document.getElementById('wattsInput').value = hpValue;
    document.getElementById('hpOutput').value = wattsValue;
}

function clearValues() {
    document.getElementById('wattsInput').value = '';
    document.getElementById('hpOutput').value = '';
}

// Add event listeners
document.getElementById('wattsInput').addEventListener('input', convertWattsToHp);
document.getElementById('hpOutput').addEventListener('input', convertHpToWatts);
</script>

<?php include 'footer.php'; ?>
