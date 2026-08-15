<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Days to Seconds Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online days to seconds converter 2026. Convert days to seconds instantly with accurate time conversion for precise calculations.">
<meta name="keywords" content="days to seconds converter 2026, days to seconds, time converter, duration calculator, second calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Days to Seconds Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online days to seconds converter 2026. Convert days to seconds instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/days-to-seconds.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Days to Seconds Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online days to seconds converter 2026. Convert days to seconds instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-stopwatch text-orange-600 mr-3"></i>
                Days to Seconds Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert days to seconds instantly for precise time calculations and scientific applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Days Input -->
                <div class="space-y-2">
                    <label for="daysInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar-day text-orange-600 mr-2"></i>Days
                    </label>
                    <input
                        type="number"
                        id="daysInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Enter days"
                        step="any"
                    >
                </div>

                <!-- Seconds Output -->
                <div class="space-y-2">
                    <label for="secondsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-clock text-orange-600 mr-2"></i>Seconds
                    </label>
                    <input
                        type="number"
                        id="secondsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent text-lg"
                        placeholder="Seconds result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-orange-600 hover:bg-orange-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-orange-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">1 day</div>
                    <div class="text-sm text-gray-600">= 86,400 seconds</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">2 days</div>
                    <div class="text-sm text-gray-600">= 172,800 seconds</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">7 days</div>
                    <div class="text-sm text-gray-600">= 604,800 seconds</div>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-orange-800">30 days</div>
                    <div class="text-sm text-gray-600">= 2,592,000 seconds</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-orange-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between days and seconds. One day equals exactly 86,400 seconds (24 hours × 60 minutes × 60 seconds).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Seconds = Days × 86,400<br>
                    Days = Seconds ÷ 86,400
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-orange-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Scientific calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Computer programming</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Time duration analysis</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Database timestamp calculations</li>
                    <li><i class="fas fa-check text-orange-600 mr-2"></i>Physics and engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertDaysToSeconds() {
    const days = parseFloat(document.getElementById('daysInput').value);
    if (!isNaN(days)) {
        const seconds = days * 86400; // 1 day = 86,400 seconds
        document.getElementById('secondsOutput').value = seconds.toFixed(0);
    } else {
        document.getElementById('secondsOutput').value = '';
    }
}

function convertSecondsToDays() {
    const seconds = parseFloat(document.getElementById('secondsOutput').value);
    if (!isNaN(seconds)) {
        const days = seconds / 86400; // 1 day = 86,400 seconds
        document.getElementById('daysInput').value = days.toFixed(8);
    } else {
        document.getElementById('daysInput').value = '';
    }
}

function swapValues() {
    const daysValue = document.getElementById('daysInput').value;
    const secondsValue = document.getElementById('secondsOutput').value;
    
    document.getElementById('daysInput').value = secondsValue;
    document.getElementById('secondsOutput').value = daysValue;
}

function clearValues() {
    document.getElementById('daysInput').value = '';
    document.getElementById('secondsOutput').value = '';
}

// Add event listeners
document.getElementById('daysInput').addEventListener('input', convertDaysToSeconds);
document.getElementById('secondsOutput').addEventListener('input', convertSecondsToDays);
</script>

<?php include 'footer.php'; ?>
