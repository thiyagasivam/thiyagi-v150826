<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Hours to Days Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online hours to days converter 2026. Convert h to d instantly with accurate time conversion for scheduling and planning calculations.">
<meta name="keywords" content="hours to days converter 2026, h to d, time converter, duration calculator, scheduling calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Hours to Days Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online hours to days converter 2026. Convert h to d instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/hours-to-days.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Hours to Days Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online hours to days converter 2026. Convert h to d instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-slate-50 via-gray-50 to-zinc-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-slate-600 mr-3"></i>
                Hours to Days Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert hours to days instantly for scheduling, planning, and time management calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Hours Input -->
                <div class="space-y-2">
                    <label for="hoursInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-hourglass-half text-slate-600 mr-2"></i>Hours (h)
                    </label>
                    <input
                        type="number"
                        id="hoursInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Enter hours"
                        step="any"
                    >
                </div>

                <!-- Days Output -->
                <div class="space-y-2">
                    <label for="daysOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar-day text-slate-600 mr-2"></i>Days (d)
                    </label>
                    <input
                        type="number"
                        id="daysOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-transparent text-lg"
                        placeholder="Days result"
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
                    <div class="font-bold text-slate-800">24 hours</div>
                    <div class="text-sm text-gray-600">= 1 day</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">48 hours</div>
                    <div class="text-sm text-gray-600">= 2 days</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">72 hours</div>
                    <div class="text-sm text-gray-600">= 3 days</div>
                </div>
                <div class="bg-slate-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-slate-800">168 hours</div>
                    <div class="text-sm text-gray-600">= 7 days</div>
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
                    This converter helps you convert between hours and days. One day equals 24 hours.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Days = Hours ÷ 24<br>
                    Hours = Days × 24
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-slate-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Work schedule planning</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Project time management</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Event duration calculations</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Travel time planning</li>
                    <li><i class="fas fa-check text-slate-600 mr-2"></i>Service billing calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertHoursToDays() {
    const hours = parseFloat(document.getElementById('hoursInput').value);
    if (!isNaN(hours)) {
        const days = hours / 24; // 1 day = 24 hours
        document.getElementById('daysOutput').value = days.toFixed(6);
    } else {
        document.getElementById('daysOutput').value = '';
    }
}

function convertDaysToHours() {
    const days = parseFloat(document.getElementById('daysOutput').value);
    if (!isNaN(days)) {
        const hours = days * 24; // 1 day = 24 hours
        document.getElementById('hoursInput').value = hours.toFixed(4);
    } else {
        document.getElementById('hoursInput').value = '';
    }
}

function swapValues() {
    const hoursValue = document.getElementById('hoursInput').value;
    const daysValue = document.getElementById('daysOutput').value;
    
    document.getElementById('hoursInput').value = daysValue;
    document.getElementById('daysOutput').value = hoursValue;
}

function clearValues() {
    document.getElementById('hoursInput').value = '';
    document.getElementById('daysOutput').value = '';
}

// Add event listeners
document.getElementById('hoursInput').addEventListener('input', convertHoursToDays);
document.getElementById('daysOutput').addEventListener('input', convertDaysToHours);
</script>

<?php include 'footer.php'; ?>
