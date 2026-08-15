<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Days to Years Converter 2026 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online days to years converter 2026. Convert days to years instantly with accurate time conversion for planning and calculations.">
<meta name="keywords" content="days to years converter 2026, days to years, time converter, duration calculator, planning calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Days to Years Converter 2026 - Time Calculator">
<meta property="og:description" content="Free online days to years converter 2026. Convert days to years instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/days-to-years.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Days to Years Converter 2026 - Time Calculator">
<meta name="twitter:description" content="Free online days to years converter 2026. Convert days to years instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-emerald-50 via-green-50 to-teal-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-alt text-emerald-600 mr-3"></i>
                Days to Years Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert days to years instantly for time planning and duration calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Days Input -->
                <div class="space-y-2">
                    <label for="daysInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar-day text-emerald-600 mr-2"></i>Days
                    </label>
                    <input
                        type="number"
                        id="daysInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Enter days"
                        step="any"
                    >
                </div>

                <!-- Years Output -->
                <div class="space-y-2">
                    <label for="yearsOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar-alt text-emerald-600 mr-2"></i>Years
                    </label>
                    <input
                        type="number"
                        id="yearsOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-lg"
                        placeholder="Years result"
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
                    <div class="font-bold text-emerald-800">365 days</div>
                    <div class="text-sm text-gray-600">= 1 year</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">730 days</div>
                    <div class="text-sm text-gray-600">= 2 years</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">1825 days</div>
                    <div class="text-sm text-gray-600">= 5 years</div>
                </div>
                <div class="bg-emerald-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-emerald-800">3650 days</div>
                    <div class="text-sm text-gray-600">= 10 years</div>
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
                    This converter helps you convert between days and years. One year equals approximately 365.25 days (accounting for leap years).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Years = Days ÷ 365.25<br>
                    Days = Years × 365.25
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-emerald-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Age calculations</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Project timeline planning</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Financial planning</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Historical date calculations</li>
                    <li><i class="fas fa-check text-emerald-600 mr-2"></i>Scientific research timelines</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertDaysToYears() {
    const days = parseFloat(document.getElementById('daysInput').value);
    if (!isNaN(days)) {
        const years = days / 365.25; // Using 365.25 to account for leap years
        document.getElementById('yearsOutput').value = years.toFixed(8);
    } else {
        document.getElementById('yearsOutput').value = '';
    }
}

function convertYearsToDays() {
    const years = parseFloat(document.getElementById('yearsOutput').value);
    if (!isNaN(years)) {
        const days = years * 365.25; // Using 365.25 to account for leap years
        document.getElementById('daysInput').value = days.toFixed(8);
    } else {
        document.getElementById('daysInput').value = '';
    }
}

function swapValues() {
    const daysValue = document.getElementById('daysInput').value;
    const yearsValue = document.getElementById('yearsOutput').value;
    
    document.getElementById('daysInput').value = yearsValue;
    document.getElementById('yearsOutput').value = daysValue;
}

function clearValues() {
    document.getElementById('daysInput').value = '';
    document.getElementById('yearsOutput').value = '';
}

// Add event listeners
document.getElementById('daysInput').addEventListener('input', convertDaysToYears);
document.getElementById('yearsOutput').addEventListener('input', convertYearsToDays);
</script>

<?php include 'footer.php'; ?>
