<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Minutes to Days Converter 2026 - min to day Calculator | Thiyagi</title>
<meta name="description" content="Free online minutes to days converter 2026. Convert minutes to days and days to minutes instantly with accurate time conversion.">
<meta name="keywords" content="minutes to days converter 2026, min to day calculator, time converter, duration conversion, time units">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Minutes to Days Converter 2026 - min to day Calculator">
<meta property="og:description" content="Free online minutes to days converter 2026. Convert minutes to days and days to minutes instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/minutes-to-days.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Minutes to Days Converter 2026 - min to day Calculator">
<meta name="twitter:description" content="Free online minutes to days converter 2026. Convert minutes to days and days to minutes instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-clock text-sky-600 mr-3"></i>
                Minutes to Days Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between minutes and days with precise time calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Minutes Input -->
                <div class="space-y-4">
                    <label for="minutesInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-sky-600 mr-2"></i>Minutes
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

                <!-- Days Input -->
                <div class="space-y-4">
                    <label for="daysInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-sun text-blue-600 mr-2"></i>Days
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
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-sky-50 to-blue-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="breakdown" class="text-sm text-gray-600 text-center mt-2">
                    <!-- Time breakdown will appear here -->
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
            <!-- Common Time Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-sky-600 mr-3"></i>Common Time Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Time Period</th>
                                <th class="text-center py-2">Minutes</th>
                                <th class="text-right py-2">Days</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 Hour</td>
                                <td class="text-center">60</td>
                                <td class="text-right">0.0417</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">Half Day</td>
                                <td class="text-center">720</td>
                                <td class="text-right">0.5</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 Day</td>
                                <td class="text-center">1,440</td>
                                <td class="text-right">1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 Week</td>
                                <td class="text-center">10,080</td>
                                <td class="text-right">7</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 Month (30 days)</td>
                                <td class="text-center">43,200</td>
                                <td class="text-right">30</td>
                            </tr>
                            <tr>
                                <td class="py-2">1 Year (365 days)</td>
                                <td class="text-center">525,600</td>
                                <td class="text-right">365</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Activity Duration Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-clock text-sky-600 mr-3"></i>Activity Duration Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Short Activities:</strong><br>
                        • Phone call: 5-30 minutes<br>
                        • Coffee break: 15 minutes<br>
                        • Commute: 30-60 minutes<br>
                        • Lunch: 60 minutes
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Medium Activities:</strong><br>
                        • Movie: 120 minutes (0.083 days)<br>
                        • Work shift: 480 minutes (0.333 days)<br>
                        • Sleep: 480 minutes (0.333 days)<br>
                        • Travel: 240-720 minutes
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Long Activities:</strong><br>
                        • Weekend: 2,880 minutes (2 days)<br>
                        • Vacation: 7,200 minutes (5 days)<br>
                        • Course: 14,400 minutes (10 days)<br>
                        • Project: 43,200 minutes (30 days)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-sky-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Minute:</strong> 60 seconds</li>
                    <li><strong>Day:</strong> 24 hours = 1,440 minutes</li>
                    <li><strong>Conversion:</strong> 1 day = 1,440 minutes</li>
                    <li><strong>Decimal days:</strong> Useful for calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-sky-600 mr-2"></i>Calculation Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Divide minutes by 1,440 for days</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Multiply days by 1,440 for minutes</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Use decimals for precise calculations</li>
                    <li><i class="fas fa-check text-sky-600 mr-2"></i>Round appropriately for context</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-sky-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Project Management:</strong> Task duration</li>
                    <li><strong>Scheduling:</strong> Time allocation</li>
                    <li><strong>Billing:</strong> Time tracking</li>
                    <li><strong>Analytics:</strong> Usage statistics</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMinutesToDays(minutes) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(minutes) && minutes !== '') {
        const days = minutes / 1440;
        document.getElementById('daysInput').value = days.toFixed(8);
        
        // Calculate breakdown
        const totalMinutes = parseInt(minutes);
        const wholeDays = Math.floor(totalMinutes / 1440);
        const remainingMinutes = totalMinutes % 1440;
        const hours = Math.floor(remainingMinutes / 60);
        const mins = remainingMinutes % 60;
        
        let breakdown = '';
        if (wholeDays > 0 || hours > 0 || mins > 0) {
            breakdown = 'Breakdown: ';
            if (wholeDays > 0) breakdown += `${wholeDays} day${wholeDays !== 1 ? 's' : ''} `;
            if (hours > 0) breakdown += `${hours} hour${hours !== 1 ? 's' : ''} `;
            if (mins > 0) breakdown += `${mins} minute${mins !== 1 ? 's' : ''}`;
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${minutes} minutes = ${days.toFixed(8)} days</strong>
        `;
        document.getElementById('breakdown').innerHTML = breakdown;
    } else {
        document.getElementById('daysInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('breakdown').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertDaysToMinutes(days) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(days) && days !== '') {
        const minutes = days * 1440;
        document.getElementById('minutesInput').value = minutes.toFixed(2);
        
        // Calculate breakdown
        const totalMinutes = Math.round(minutes);
        const wholeDays = Math.floor(totalMinutes / 1440);
        const remainingMinutes = totalMinutes % 1440;
        const hours = Math.floor(remainingMinutes / 60);
        const mins = remainingMinutes % 60;
        
        let breakdown = '';
        if (wholeDays > 0 || hours > 0 || mins > 0) {
            breakdown = 'Breakdown: ';
            if (wholeDays > 0) breakdown += `${wholeDays} day${wholeDays !== 1 ? 's' : ''} `;
            if (hours > 0) breakdown += `${hours} hour${hours !== 1 ? 's' : ''} `;
            if (mins > 0) breakdown += `${mins} minute${mins !== 1 ? 's' : ''}`;
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-sky-600 mr-2"></i>
            <strong>${days} days = ${minutes.toFixed(2)} minutes</strong>
        `;
        document.getElementById('breakdown').innerHTML = breakdown;
    } else {
        document.getElementById('minutesInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('breakdown').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('minutesInput').value = '';
    document.getElementById('daysInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('breakdown').innerHTML = '';
}

function swapValues() {
    const minutesValue = document.getElementById('minutesInput').value;
    const daysValue = document.getElementById('daysInput').value;
    
    document.getElementById('minutesInput').value = daysValue;
    document.getElementById('daysInput').value = minutesValue;
    
    if (daysValue) {
        convertMinutesToDays(parseFloat(daysValue));
    } else if (minutesValue) {
        convertDaysToMinutes(parseFloat(minutesValue));
    }
}

// Add event listeners
document.getElementById('minutesInput').addEventListener('input', function() {
    convertMinutesToDays(parseFloat(this.value));
});

document.getElementById('daysInput').addEventListener('input', function() {
    convertDaysToMinutes(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
