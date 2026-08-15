<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Megajoule to Joule Converter 2026 - Energy Calculator | Thiyagi</title>
<meta name="description" content="Free online megajoule to joule converter 2026. Convert MJ to J instantly with accurate energy conversion for physics and engineering calculations.">
<meta name="keywords" content="megajoule to joule converter 2026, MJ to J, energy converter, physics calculator, engineering converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Megajoule to Joule Converter 2026 - Energy Calculator">
<meta property="og:description" content="Free online megajoule to joule converter 2026. Convert MJ to J instantly with accurate energy conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/megajoule-to-joule.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Megajoule to Joule Converter 2026 - Energy Calculator">
<meta name="twitter:description" content="Free online megajoule to joule converter 2026. Convert MJ to J instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bolt text-purple-600 mr-3"></i>
                Megajoule to Joule Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert megajoules to joules instantly for physics, engineering, and energy calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Megajoule Input -->
                <div class="space-y-2">
                    <label for="megajouleInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-lightning-bolt text-purple-600 mr-2"></i>Megajoules (MJ)
                    </label>
                    <input
                        type="number"
                        id="megajouleInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter megajoules"
                        step="any"
                    >
                </div>

                <!-- Joule Output -->
                <div class="space-y-2">
                    <label for="jouleOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-fire text-purple-600 mr-2"></i>Joules (J)
                    </label>
                    <input
                        type="number"
                        id="jouleOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Joules result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-purple-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">1 MJ</div>
                    <div class="text-sm text-gray-600">= 1,000,000 J</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.5 MJ</div>
                    <div class="text-sm text-gray-600">= 500,000 J</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">2 MJ</div>
                    <div class="text-sm text-gray-600">= 2,000,000 J</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">10 MJ</div>
                    <div class="text-sm text-gray-600">= 10,000,000 J</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-purple-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between megajoules and joules. One megajoule equals exactly 1,000,000 joules.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Joules = Megajoules × 1,000,000<br>
                    Megajoules = Joules ÷ 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Energy storage calculations</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Power plant output</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Physics experiments</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Industrial energy consumption</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Renewable energy systems</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMegajouleToJoule() {
    const megajoule = parseFloat(document.getElementById('megajouleInput').value);
    if (!isNaN(megajoule)) {
        const joule = megajoule * 1000000; // 1 MJ = 1,000,000 J
        document.getElementById('jouleOutput').value = joule.toFixed(0);
    } else {
        document.getElementById('jouleOutput').value = '';
    }
}

function convertJouleToMegajoule() {
    const joule = parseFloat(document.getElementById('jouleOutput').value);
    if (!isNaN(joule)) {
        const megajoule = joule / 1000000; // 1 MJ = 1,000,000 J
        document.getElementById('megajouleInput').value = megajoule.toFixed(6);
    } else {
        document.getElementById('megajouleInput').value = '';
    }
}

function swapValues() {
    const megajouleValue = document.getElementById('megajouleInput').value;
    const jouleValue = document.getElementById('jouleOutput').value;
    
    document.getElementById('megajouleInput').value = jouleValue;
    document.getElementById('jouleOutput').value = megajouleValue;
}

function clearValues() {
    document.getElementById('megajouleInput').value = '';
    document.getElementById('jouleOutput').value = '';
}

// Add event listeners
document.getElementById('megajouleInput').addEventListener('input', convertMegajouleToJoule);
document.getElementById('jouleOutput').addEventListener('input', convertJouleToMegajoule);
</script>

<?php include 'footer.php'; ?>
