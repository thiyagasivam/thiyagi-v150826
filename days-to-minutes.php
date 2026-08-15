<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Days to Minutes Converter 2026 - Convert days to minutes Calculator | Thiyagi</title>
<meta name="description" content="Free online Days to Minutes converter 2026. Convert days to minutes and minutes to days instantly with accurate time conversion.">
<meta name="keywords" content="days to minutes converter 2026, time converter, days minutes calculator, time duration converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Days to Minutes Converter 2026 - Convert days to minutes Calculator">
<meta property="og:description" content="Free online Days to Minutes converter 2026. Convert days to minutes and minutes to days instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/days-to-minutes.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Days to Minutes Converter 2026 - Convert days to minutes Calculator">
<meta name="twitter:description" content="Free online Days to Minutes converter 2026. Convert days to minutes and minutes to days instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-cyan-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-sky-600 mr-3"></i>
                Days to Minutes Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between days and minutes for time planning and duration calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Days Input -->
                <div class="space-y-4">
                    <label for="daysInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-calendar-day text-sky-600 mr-2"></i>Days
                    </label>
                    <input
                        type="number"
                        id="daysInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter days"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 day = 1,440 minutes
                    </div>
                </div>

                <!-- Minutes Input -->
                <div class="space-y-4">
                    <label for="minutesInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-blue-600 mr-2"></i>Minutes
                    </label>
                    <input
                        type="number"
                        id="minutesInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-transparent text-xl"
                        placeholder="Enter minutes"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 minute = 0.000694444 days
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-sky-50 to-blue-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-sky-500 hover:bg-sky-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Time Duration Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-sky-600 mr-3"></i>Time Duration Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Days</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Minutes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.5 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">720 minutes</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 day</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,440 minutes</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2,880 minutes</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">3 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">4,320 minutes</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">7 days (1 week)</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,080 minutes</td>
                            </tr>
                            <tr>
                                <td class="py-2">30 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">43,200 minutes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Activity Time Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-chart-line text-sky-600 mr-3"></i>Activity Time Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Work & Study:</strong><br>
                        • Work day (8 hours): 480 minutes<br>
                        • Work week (40 hours): 2,400 minutes<br>
                        • College semester: ~129,600 minutes (90 days)<br>
                        • Study session: 60-120 minutes
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Travel & Vacation:</strong><br>
                        • Weekend trip: 2,880 minutes (2 days)<br>
                        • Week vacation: 10,080 minutes (7 days)<br>
                        • Cross-country flight: 300-480 minutes<br>
                        • Road trip day: 8-12 hours (480-720 min)
                    </div>
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Life Events:</strong><br>
                        • Pregnancy: ~388,800 minutes (270 days)<br>
                        • School year: ~259,200 minutes (180 days)<br>
                        • Recovery time: varies (days to minutes)<br>
                        • Project deadline: measured in days/minutes
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-sky-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Day:</strong> 24 hours period</li>
                    <li><strong>Minute:</strong> 60 seconds</li>
                    <li><strong>Conversion:</strong> 1 day = 1,440 minutes</li>
                    <li><strong>Formula:</strong> 24 hours × 60 minutes/hour</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Time Planning Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Break large goals into days</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Use minutes for precise scheduling</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Account for buffer time</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Consider time zones</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-sky-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Project Management:</strong> Timeline planning</li>
                    <li><strong>Healthcare:</strong> Treatment duration</li>
                    <li><strong>Education:</strong> Course scheduling</li>
                    <li><strong>Business:</strong> Process optimization</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertDaysToMinutes(days) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(days) && days !== '') {
        const minutes = days * 1440;
        document.getElementById('minutesInput').value = minutes.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${days} days = ${minutes.toFixed(6)} minutes</strong>
        `;
    } else {
        document.getElementById('minutesInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMinutesToDays(minutes) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(minutes) && minutes !== '') {
        const days = minutes / 1440;
        document.getElementById('daysInput').value = days.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${minutes} minutes = ${days.toFixed(8)} days</strong>
        `;
    } else {
        document.getElementById('daysInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('daysInput').value = '';
    document.getElementById('minutesInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const daysValue = document.getElementById('daysInput').value;
    const minutesValue = document.getElementById('minutesInput').value;
    
    document.getElementById('daysInput').value = minutesValue;
    document.getElementById('minutesInput').value = daysValue;
    
    if (minutesValue) {
        convertDaysToMinutes(parseFloat(minutesValue));
    } else if (daysValue) {
        convertMinutesToDays(parseFloat(daysValue));
    }
}

// Add event listeners
document.getElementById('daysInput').addEventListener('input', function() {
    convertDaysToMinutes(parseFloat(this.value));
});

document.getElementById('minutesInput').addEventListener('input', function() {
    convertMinutesToDays(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
