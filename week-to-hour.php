<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Week to Hour Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online week to hour converter 2026. Convert weeks to hours instantly with accurate time conversion for planning and scheduling calculations.">
<meta name="keywords" content="week to hour converter 2026, weeks to hours, time converter, scheduling calculator, planning calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Week to Hour Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online week to hour converter 2026. Convert weeks to hours instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/week-to-hour.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Week to Hour Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online week to hour converter 2026. Convert weeks to hours instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-lime-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-week text-emerald-600 mr-3"></i>
                Week to Hour Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert weeks to hours instantly for work scheduling, project planning, and time management
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Week Input -->
                <div class="space-y-2">
                    <label for="weekInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar text-emerald-600 mr-2"></i>Weeks
                    </label>
                    <input
                        type="number"
                        id="weekInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter weeks"
                        step="any"
                    >
                </div>

                <!-- Hour Output -->
                <div class="space-y-2">
                    <label for="hourOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-clock text-emerald-600 mr-2"></i>Hours
                    </label>
                    <input
                        type="number"
                        id="hourOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Hours result"
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
                    <div class="font-bold text-emerald-800">1 week</div>
                    <div class="text-sm text-gray-600">= 168 hours</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">2 weeks</div>
                    <div class="text-sm text-gray-600">= 336 hours</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">4 weeks</div>
                    <div class="text-sm text-gray-600">= 672 hours</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">12 weeks</div>
                    <div class="text-sm text-gray-600">= 2,016 hours</div>
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
                    This converter helps you convert between weeks and hours. One week equals 168 hours (7 days × 24 hours).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Hours = Weeks × 168<br>
                    Weeks = Hours ÷ 168
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Project time planning</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Work schedule calculations</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Academic semester planning</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Training program duration</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Event planning</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertWeekToHour() {
    const week = parseFloat(document.getElementById('weekInput').value);
    if (!isNaN(week)) {
        const hour = week * 168; // 1 week = 168 hours
        document.getElementById('hourOutput').value = hour.toFixed(4);
    } else {
        document.getElementById('hourOutput').value = '';
    }
}

function convertHourToWeek() {
    const hour = parseFloat(document.getElementById('hourOutput').value);
    if (!isNaN(hour)) {
        const week = hour / 168; // 1 week = 168 hours
        document.getElementById('weekInput').value = week.toFixed(6);
    } else {
        document.getElementById('weekInput').value = '';
    }
}

function swapValues() {
    const weekValue = document.getElementById('weekInput').value;
    const hourValue = document.getElementById('hourOutput').value;
    
    document.getElementById('weekInput').value = hourValue;
    document.getElementById('hourOutput').value = weekValue;
}

function clearValues() {
    document.getElementById('weekInput').value = '';
    document.getElementById('hourOutput').value = '';
}

// Add event listeners
document.getElementById('weekInput').addEventListener('input', convertWeekToHour);
document.getElementById('hourOutput').addEventListener('input', convertHourToWeek);
</script>

<?php include 'footer.php'; ?>
