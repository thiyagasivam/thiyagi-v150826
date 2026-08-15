<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Millimeter to Mil Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online millimeter to mil converter 2026. Convert mm to mil instantly with accurate length conversion for engineering and manufacturing.">
<meta name="keywords" content="millimeter to mil converter 2026, mm to mil, length converter, engineering calculator, precision converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Millimeter to Mil Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online millimeter to mil converter 2026. Convert mm to mil instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/millimeter-to-mil.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Millimeter to Mil Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online millimeter to mil converter 2026. Convert mm to mil instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler-combined text-slate-600 mr-3"></i>
                Millimeter to Mil Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert millimeters to mils instantly for precision engineering and manufacturing
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Millimeters Input -->
                <div class="space-y-2">
                    <label for="millimeterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-slate-600 mr-2"></i>Millimeters (mm)
                    </label>
                    <input
                        type="number"
                        id="millimeterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Enter millimeters"
                        step="any"
                    >
                </div>

                <!-- Mils Output -->
                <div class="space-y-2">
                    <label for="milOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler-combined text-slate-600 mr-2"></i>Mils (mil)
                    </label>
                    <input
                        type="number"
                        id="milOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Mils result"
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
                    <div class="font-bold text-slate-800">1 mm</div>
                    <div class="text-sm text-gray-600">= 39.3701 mil</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">0.5 mm</div>
                    <div class="text-sm text-gray-600">= 19.685 mil</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">0.1 mm</div>
                    <div class="text-sm text-gray-600">= 3.937 mil</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">10 mm</div>
                    <div class="text-sm text-gray-600">= 393.701 mil</div>
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
                    This converter helps you convert between millimeters and mils. One millimeter equals approximately 39.3701 mils.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Mils = Millimeters × 39.3701<br>
                    Millimeters = Mils ÷ 39.3701
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Precision engineering</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Manufacturing tolerances</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>PCB design specifications</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Wire gauge measurements</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Mechanical engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMillimeterToMil() {
    const millimeter = parseFloat(document.getElementById('millimeterInput').value);
    if (!isNaN(millimeter)) {
        const mil = millimeter * 39.3701;
        document.getElementById('milOutput').value = mil.toFixed(8);
    } else {
        document.getElementById('milOutput').value = '';
    }
}

function convertMilToMillimeter() {
    const mil = parseFloat(document.getElementById('milOutput').value);
    if (!isNaN(mil)) {
        const millimeter = mil / 39.3701;
        document.getElementById('millimeterInput').value = millimeter.toFixed(8);
    } else {
        document.getElementById('millimeterInput').value = '';
    }
}

function swapValues() {
    const millimeterValue = document.getElementById('millimeterInput').value;
    const milValue = document.getElementById('milOutput').value;
    
    document.getElementById('millimeterInput').value = milValue;
    document.getElementById('milOutput').value = millimeterValue;
}

function clearValues() {
    document.getElementById('millimeterInput').value = '';
    document.getElementById('milOutput').value = '';
}

// Add event listeners
document.getElementById('millimeterInput').addEventListener('input', convertMillimeterToMil);
document.getElementById('milOutput').addEventListener('input', convertMilToMillimeter);
</script>

<?php include 'footer.php'; ?>
