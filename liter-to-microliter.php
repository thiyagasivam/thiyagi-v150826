<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Liter to Microliter Converter 2026 - Volume Calculator | Thiyagi</title>
<meta name="description" content="Free online liter to microliter converter 2026. Convert L to μL instantly with accurate volume conversion for laboratory and medical use.">
<meta name="keywords" content="liter to microliter converter 2026, L to μL, volume converter, laboratory calculator, medical converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Liter to Microliter Converter 2026 - Volume Calculator">
<meta property="og:description" content="Free online liter to microliter converter 2026. Convert L to μL instantly with accurate volume conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/liter-to-microliter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Liter to Microliter Converter 2026 - Volume Calculator">
<meta name="twitter:description" content="Free online liter to microliter converter 2026. Convert L to μL instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-violet-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-bottle-water text-purple-600 mr-3"></i>
                Liter to Microliter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert liters to microliters instantly for laboratory and medical applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Liters Input -->
                <div class="space-y-2">
                    <label for="literInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-bottle-water text-purple-600 mr-2"></i>Liters (L)
                    </label>
                    <input
                        type="number"
                        id="literInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Enter liters"
                        step="any"
                    >
                </div>

                <!-- Microliters Output -->
                <div class="space-y-2">
                    <label for="microliterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-eye-dropper text-purple-600 mr-2"></i>Microliters (μL)
                    </label>
                    <input
                        type="number"
                        id="microliterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-lg"
                        placeholder="Microliters result"
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
                    <div class="font-bold text-purple-800">1 L</div>
                    <div class="text-sm text-gray-600">= 1,000,000 μL</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.1 L</div>
                    <div class="text-sm text-gray-600">= 100,000 μL</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.01 L</div>
                    <div class="text-sm text-gray-600">= 10,000 μL</div>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-purple-800">0.001 L</div>
                    <div class="text-sm text-gray-600">= 1,000 μL</div>
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
                    This converter helps you convert between liters and microliters. One liter equals 1,000,000 microliters.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Microliters = Liters × 1,000,000<br>
                    Liters = Microliters ÷ 1,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Laboratory pipetting</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Medical dosage calculations</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Biochemical research</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Pharmaceutical preparations</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Analytical chemistry</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertLiterToMicroliter() {
    const liter = parseFloat(document.getElementById('literInput').value);
    if (!isNaN(liter)) {
        const microliter = liter * 1000000;
        document.getElementById('microliterOutput').value = microliter.toFixed(8);
    } else {
        document.getElementById('microliterOutput').value = '';
    }
}

function convertMicroliterToLiter() {
    const microliter = parseFloat(document.getElementById('microliterOutput').value);
    if (!isNaN(microliter)) {
        const liter = microliter / 1000000;
        document.getElementById('literInput').value = liter.toFixed(10);
    } else {
        document.getElementById('literInput').value = '';
    }
}

function swapValues() {
    const literValue = document.getElementById('literInput').value;
    const microliterValue = document.getElementById('microliterOutput').value;
    
    document.getElementById('literInput').value = microliterValue;
    document.getElementById('microliterOutput').value = literValue;
}

function clearValues() {
    document.getElementById('literInput').value = '';
    document.getElementById('microliterOutput').value = '';
}

// Add event listeners
document.getElementById('literInput').addEventListener('input', convertLiterToMicroliter);
document.getElementById('microliterOutput').addEventListener('input', convertMicroliterToLiter);
</script>

<?php include 'footer.php'; ?>
