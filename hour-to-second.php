<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Hour to Second Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online hour to second converter 2026. Convert hr to s instantly with accurate time conversion for scheduling and calculations.">
<meta name="keywords" content="hour to second converter 2026, hr to s, time converter, duration calculator, scheduling calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Hour to Second Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online hour to second converter 2026. Convert hr to s instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/hour-to-second.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Hour to Second Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online hour to second converter 2026. Convert hr to s instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-blue-600 mr-3"></i>
                Hour to Second Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert hours to seconds instantly for time calculations and scheduling
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Hours Input -->
                <div class="space-y-2">
                    <label for="hourInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-clock text-blue-600 mr-2"></i>Hours (hr)
                    </label>
                    <input
                        type="number"
                        id="hourInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter hours"
                        step="any"
                    >
                </div>

                <!-- Seconds Output -->
                <div class="space-y-2">
                    <label for="secondOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-blue-600 mr-2"></i>Seconds (s)
                    </label>
                    <input
                        type="number"
                        id="secondOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Seconds result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-blue-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">1 hr</div>
                    <div class="text-sm text-gray-600">= 3600 s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">0.5 hr</div>
                    <div class="text-sm text-gray-600">= 1800 s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">2 hr</div>
                    <div class="text-sm text-gray-600">= 7200 s</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">8 hr</div>
                    <div class="text-sm text-gray-600">= 28800 s</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-blue-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between hours and seconds. One hour equals exactly 3600 seconds.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Seconds = Hours × 3600<br>
                    Hours = Seconds ÷ 3600
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Programming and automation</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Scientific calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Work time calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Sports timing</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Production scheduling</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertHourToSecond() {
    const hour = parseFloat(document.getElementById('hourInput').value);
    if (!isNaN(hour)) {
        const second = hour * 3600;
        document.getElementById('secondOutput').value = second.toFixed(8);
    } else {
        document.getElementById('secondOutput').value = '';
    }
}

function convertSecondToHour() {
    const second = parseFloat(document.getElementById('secondOutput').value);
    if (!isNaN(second)) {
        const hour = second / 3600;
        document.getElementById('hourInput').value = hour.toFixed(8);
    } else {
        document.getElementById('hourInput').value = '';
    }
}

function swapValues() {
    const hourValue = document.getElementById('hourInput').value;
    const secondValue = document.getElementById('secondOutput').value;
    
    document.getElementById('hourInput').value = secondValue;
    document.getElementById('secondOutput').value = hourValue;
}

function clearValues() {
    document.getElementById('hourInput').value = '';
    document.getElementById('secondOutput').value = '';
}

// Add event listeners
document.getElementById('hourInput').addEventListener('input', convertHourToSecond);
document.getElementById('secondOutput').addEventListener('input', convertSecondToHour);
</script>

<?php include 'footer.php'; ?>
