<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Meter to Foot (US Survey) Converter 2026 - Length Calculator | Thiyagi</title>
<meta name="description" content="Free online meter to US survey foot converter 2026. Convert meters to US survey feet instantly with accurate length conversion. Perfect for surveying and mapping.">
<meta name="keywords" content="meter to foot us survey converter 2026, meter to survey foot, surveying converter, mapping calculator, length measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Meter to Foot (US Survey) Converter 2026 - Length Calculator">
<meta property="og:description" content="Free online meter to US survey foot converter 2026. Convert meters to US survey feet instantly with accurate length conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/meter-to-foot-us-survey.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Meter to Foot (US Survey) Converter 2026 - Length Calculator">
<meta name="twitter:description" content="Free online meter to US survey foot converter 2026. Convert meters to US survey feet instantly with accurate length conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler text-emerald-600 mr-3"></i>
                Meter to Foot (US Survey) Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert meters to US survey feet instantly with our accurate surveying converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Meters Input -->
                <div class="space-y-2">
                    <label for="meterInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-emerald-600 mr-2"></i>Meters (m)
                    </label>
                    <input
                        type="number"
                        id="meterInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter meters"
                        step="any"
                    >
                </div>

                <!-- US Survey Feet Output -->
                <div class="space-y-2">
                    <label for="surveyFootOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-map-marked-alt text-emerald-600 mr-2"></i>US Survey Feet (ft)
                    </label>
                    <input
                        type="number"
                        id="surveyFootOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="US survey feet result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-emerald-600 hover:bg-emerald-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-emerald-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">1 m</div>
                    <div class="text-sm text-gray-600">≈ 3.2808 ft</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">5 m</div>
                    <div class="text-sm text-gray-600">≈ 16.404 ft</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">10 m</div>
                    <div class="text-sm text-gray-600">≈ 32.808 ft</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">100 m</div>
                    <div class="text-sm text-gray-600">≈ 328.08 ft</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-emerald-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between meters and US survey feet. One meter equals approximately 3.28083989501312 US survey feet.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    US Survey Feet = Meters × 3.28083989501312
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Land surveying and mapping</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Construction project planning</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Geodetic surveys</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Property boundary measurements</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Engineering drawings conversion</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMeterToSurveyFoot() {
    const meter = parseFloat(document.getElementById('meterInput').value);
    if (!isNaN(meter)) {
        const surveyFoot = meter * 3.28083989501312;
        document.getElementById('surveyFootOutput').value = surveyFoot.toFixed(8);
    } else {
        document.getElementById('surveyFootOutput').value = '';
    }
}

function convertSurveyFootToMeter() {
    const surveyFoot = parseFloat(document.getElementById('surveyFootOutput').value);
    if (!isNaN(surveyFoot)) {
        const meter = surveyFoot / 3.28083989501312;
        document.getElementById('meterInput').value = meter.toFixed(8);
    } else {
        document.getElementById('meterInput').value = '';
    }
}

function swapValues() {
    const meterValue = document.getElementById('meterInput').value;
    const surveyFootValue = document.getElementById('surveyFootOutput').value;
    
    document.getElementById('meterInput').value = surveyFootValue;
    document.getElementById('surveyFootOutput').value = meterValue;
}

function clearValues() {
    document.getElementById('meterInput').value = '';
    document.getElementById('surveyFootOutput').value = '';
}

// Add event listeners
document.getElementById('meterInput').addEventListener('input', convertMeterToSurveyFoot);
document.getElementById('surveyFootOutput').addEventListener('input', convertSurveyFootToMeter);
</script>

<?php include 'footer.php'; ?>
