<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mil to Inch Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online mil to inch converter 2026. Convert mils to inches instantly with accurate length conversion. Perfect for precision engineering and manufacturing.">
<meta name="keywords" content="mil to inch converter 2026, mil to inches, precision converter, engineering calculator, manufacturing converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mil to Inch Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online mil to inch converter 2026. Convert mils to inches instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mil-to-inch.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mil to Inch Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online mil to inch converter 2026. Convert mils to inches instantly with accurate length conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-horizontal text-slate-600 mr-3"></i>
                Mil to Inch Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert mils to inches instantly with our accurate precision measurement converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mils Input -->
                <div class="space-y-2">
                    <label for="milInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler-horizontal text-slate-600 mr-2"></i>Mils (mil)
                    </label>
                    <input
                        type="number"
                        id="milInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Enter mils"
                        step="any"
                    >
                </div>

                <!-- Inches Output -->
                <div class="space-y-2">
                    <label for="inchOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-slate-600 mr-2"></i>Inches (in)
                    </label>
                    <input
                        type="number"
                        id="inchOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Inches result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-slate-600 hover:bg-slate-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-slate-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">1 mil</div>
                    <div class="text-sm text-gray-600">= 0.001 in</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">10 mil</div>
                    <div class="text-sm text-gray-600">= 0.01 in</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">100 mil</div>
                    <div class="text-sm text-gray-600">= 0.1 in</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">1000 mil</div>
                    <div class="text-sm text-gray-600">= 1 in</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-slate-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between mils and inches. One mil equals exactly 0.001 inches (one thousandth of an inch).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Inches = Mils × 0.001
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Precision engineering measurements</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>PCB thickness specifications</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Wire gauge measurements</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Coating thickness analysis</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Manufacturing tolerances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMilToInch() {
    const mil = parseFloat(document.getElementById('milInput').value);
    if (!isNaN(mil)) {
        const inch = mil * 0.001;
        document.getElementById('inchOutput').value = inch.toFixed(8);
    } else {
        document.getElementById('inchOutput').value = '';
    }
}

function convertInchToMil() {
    const inch = parseFloat(document.getElementById('inchOutput').value);
    if (!isNaN(inch)) {
        const mil = inch / 0.001;
        document.getElementById('milInput').value = mil.toFixed(8);
    } else {
        document.getElementById('milInput').value = '';
    }
}

function swapValues() {
    const milValue = document.getElementById('milInput').value;
    const inchValue = document.getElementById('inchOutput').value;
    
    document.getElementById('milInput').value = inchValue;
    document.getElementById('inchOutput').value = milValue;
}

function clearValues() {
    document.getElementById('milInput').value = '';
    document.getElementById('inchOutput').value = '';
}

// Add event listeners
document.getElementById('milInput').addEventListener('input', convertMilToInch);
document.getElementById('inchOutput').addEventListener('input', convertInchToMil);
</script>

<?php include 'footer.php'; ?>
