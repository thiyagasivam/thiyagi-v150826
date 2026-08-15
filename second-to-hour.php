<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Second to Hour Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online second to hour converter 2026. Convert seconds to hours instantly with accurate time conversion. Perfect for time calculations and duration measurements.">
<meta name="keywords" content="second to hour converter 2026, seconds to hours, time converter, duration calculator, time measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Second to Hour Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online second to hour converter 2026. Convert seconds to hours instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/second-to-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Second to Hour Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online second to hour converter 2026. Convert seconds to hours instantly with accurate time conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-blue-600 mr-3"></i>
                Second to Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert seconds to hours instantly with our accurate time converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Seconds Input -->
                <div class="space-y-2">
                    <label for="secondInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-blue-600 mr-2"></i>Seconds (s)
                    </label>
                    <input
                        type="number"
                        id="secondInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Enter seconds"
                        step="any"
                    >
                </div>

                <!-- Hours Output -->
                <div class="space-y-2">
                    <label for="hourOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-clock text-blue-600 mr-2"></i>Hours (h)
                    </label>
                    <input
                        type="number"
                        id="hourOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-lg"
                        placeholder="Hours result"
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
                    <div class="font-bold text-blue-800">3,600 s</div>
                    <div class="text-sm text-gray-600">= 1 hour</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">7,200 s</div>
                    <div class="text-sm text-gray-600">= 2 hours</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">18,000 s</div>
                    <div class="text-sm text-gray-600">= 5 hours</div>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-blue-800">86,400 s</div>
                    <div class="text-sm text-gray-600">= 24 hours</div>
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
                    This converter helps you convert between seconds and hours. One hour equals exactly 3,600 seconds.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Hours = Seconds ÷ 3,600
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-blue-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Time duration calculations</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Work hour tracking</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Scientific time measurements</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Programming time functions</li>
                    <li><i class="fas fa-check text-blue-600 mr-2"></i>Process timing calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertSecondToHour() {
    const second = parseFloat(document.getElementById('secondInput').value);
    if (!isNaN(second)) {
        const hour = second / 3600;
        document.getElementById('hourOutput').value = hour.toFixed(8);
    } else {
        document.getElementById('hourOutput').value = '';
    }
}

function convertHourToSecond() {
    const hour = parseFloat(document.getElementById('hourOutput').value);
    if (!isNaN(hour)) {
        const second = hour * 3600;
        document.getElementById('secondInput').value = second.toFixed(8);
    } else {
        document.getElementById('secondInput').value = '';
    }
}

function swapValues() {
    const secondValue = document.getElementById('secondInput').value;
    const hourValue = document.getElementById('hourOutput').value;
    
    document.getElementById('secondInput').value = hourValue;
    document.getElementById('hourOutput').value = secondValue;
}

function clearValues() {
    document.getElementById('secondInput').value = '';
    document.getElementById('hourOutput').value = '';
}

// Add event listeners
document.getElementById('secondInput').addEventListener('input', convertSecondToHour);
document.getElementById('hourOutput').addEventListener('input', convertHourToSecond);
</script>

<?php include 'footer.php'; ?>
