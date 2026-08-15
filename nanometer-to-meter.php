<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nanometer to Meter Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online nanometer to meter converter 2026. Convert nanometers to meters instantly. Perfect for scientific and nanotechnology measurements.">
<meta name="keywords" content="nanometer to meter converter 2026, nm to m, scientific converter, nanotechnology calculator, length measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nanometer to Meter Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online nanometer to meter converter 2026. Convert nanometers to meters instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nanometer-to-meter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nanometer to Meter Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online nanometer to meter converter 2026. Convert nanometers to meters instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-indigo-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-violet-600 mr-3"></i>
                Nanometer to Meter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert nanometers to meters instantly with our precise length converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nanometers Input -->
                <div class="space-y-2">
                    <label for="nmInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-microscope text-violet-600 mr-2"></i>Nanometers (nm)
                    </label>
                    <input
                        type="number"
                        id="nmInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Enter nanometers"
                        step="any"
                    >
                </div>

                <!-- Meters Output -->
                <div class="space-y-2">
                    <label for="meterOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-violet-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-transparent text-lg"
                        placeholder="Meters result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-violet-600 hover:bg-violet-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-violet-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1000 nm</div>
                    <div class="text-sm text-gray-600">= 1 × 10⁻⁶ m</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1 million nm</div>
                    <div class="text-sm text-gray-600">= 0.001 m</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">1 billion nm</div>
                    <div class="text-sm text-gray-600">= 1 m</div>
                </div>
                <div class="bg-violet-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-violet-800">500 nm</div>
                    <div class="text-sm text-gray-600">≈ Green light</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-violet-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between nanometers and meters. One meter equals exactly 1,000,000,000 nanometers (1 billion nm).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Meters = Nanometers ÷ 1,000,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-violet-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Light wavelength measurements</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Nanotechnology research</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Semiconductor manufacturing</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Molecular biology studies</li>
                    <li><i class="fas fa-check text-violet-600 mr-2"></i>Materials science analysis</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertNmToMeter() {
    const nm = parseFloat(document.getElementById('nmInput').value);
    if (!isNaN(nm)) {
        const meter = nm / 1000000000;
        document.getElementById('meterOutput').value = meter.toFixed(15);
    } else {
        document.getElementById('meterOutput').value = '';
    }
}

function convertMeterToNm() {
    const meter = parseFloat(document.getElementById('meterOutput').value);
    if (!isNaN(meter)) {
        const nm = meter * 1000000000;
        document.getElementById('nmInput').value = nm.toFixed(8);
    } else {
        document.getElementById('nmInput').value = '';
    }
}

function swapValues() {
    const nmValue = document.getElementById('nmInput').value;
    const meterValue = document.getElementById('meterOutput').value;
    
    document.getElementById('nmInput').value = meterValue;
    document.getElementById('meterOutput').value = nmValue;
}

function clearValues() {
    document.getElementById('nmInput').value = '';
    document.getElementById('meterOutput').value = '';
}

// Add event listeners
document.getElementById('nmInput').addEventListener('input', convertNmToMeter);
document.getElementById('meterOutput').addEventListener('input', convertMeterToNm);
</script>

<?php include 'footer.php'; ?>
