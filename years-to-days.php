<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Years to Days Converter 2026 - yr to days Calculator | Thiyagi</title>
<meta name="description" content="Free online Years to Days converter 2026. Convert yr to days and days to yr instantly with accurate time conversion including leap years.">
<meta name="keywords" content="years to days converter 2026, yr to days, time converter, calendar conversion, age calculation, date conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Years to Days Converter 2026 - yr to days Calculator">
<meta property="og:description" content="Free online Years to Days converter 2026. Convert yr to days and days to yr instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/years-to-days.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Years to Days Converter 2026 - yr to days Calculator">
<meta name="twitter:description" content="Free online Years to Days converter 2026. Convert yr to days and days to yr instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-yellow-50 via-amber-50 to-orange-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-alt text-yellow-600 mr-3"></i>
                Years to Days Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between years and days for age calculations, project planning, and time duration measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Years Input -->
                <div class="space-y-4">
                    <label for="yearsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-hourglass-start text-yellow-600 mr-2"></i>Years (yr)
                    </label>
                    <input
                        type="number"
                        id="yearsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter years"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 year ≈ 365.25 days (average)
                    </div>
                </div>

                <!-- Days Input -->
                <div class="space-y-4">
                    <label for="daysInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-sun text-amber-600 mr-2"></i>Days
                    </label>
                    <input
                        type="number"
                        id="daysInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent text-xl"
                        placeholder="Enter days"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 day = 0.00274 years (average)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-yellow-50 to-amber-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Time Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-yellow-600 mr-3"></i>Time Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Years</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Days</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.25 years</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">91.3 days</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 years</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">182.6 days</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 year</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">365.25 days</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">2 years</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">730.5 days</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 years</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,826.25 days</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 years</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3,652.5 days</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Calendar and Life Events -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-birthday-cake text-yellow-600 mr-3"></i>Calendar and Life Events
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-yellow-50 p-3 rounded">
                        <strong>Age Milestones:</strong><br>
                        • 18 years = 6,574 days (legal adult)<br>
                        • 21 years = 7,670 days (drinking age US)<br>
                        • 65 years = 23,741 days (retirement)<br>
                        • 100 years = 36,525 days (centenarian)
                    </div>
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Educational Periods:</strong><br>
                        • Elementary: 6 years (2,192 days)<br>
                        • High school: 4 years (1,461 days)<br>
                        • Bachelor's degree: 4 years<br>
                        • PhD program: 4-7 years
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>Calendar Facts:</strong><br>
                        • Regular year: 365 days<br>
                        • Leap year: 366 days<br>
                        • Average year: 365.25 days<br>
                        • Leap year cycle: every 4 years
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-yellow-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Year:</strong> 365.25 days (average)</li>
                    <li><strong>Day:</strong> 24 hours</li>
                    <li><strong>Leap year:</strong> 366 days</li>
                    <li><strong>Regular year:</strong> 365 days</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Accounts for leap years</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Uses average year length</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Good for planning estimates</li>
                    <li><i class="fas fa-check text-yellow-600 mr-2"></i>Useful for age calculations</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-yellow-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Planning:</strong> Project timelines</li>
                    <li><strong>Finance:</strong> Investment periods</li>
                    <li><strong>Health:</strong> Age calculations</li>
                    <li><strong>Education:</strong> Program duration</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertYearsToDays(years) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(years) && years !== '') {
        // Using average year length of 365.25 days (accounting for leap years)
        const days = years * 365.25;
        document.getElementById('daysInput').value = days.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${years} years = ${days.toFixed(2)} days</strong>
        `;
    } else {
        document.getElementById('daysInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertDaysToYears(days) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(days) && days !== '') {
        // Using average year length of 365.25 days (accounting for leap years)
        const years = days / 365.25;
        document.getElementById('yearsInput').value = years.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-yellow-600 mr-2"></i>
            <strong>${days} days = ${years.toFixed(6)} years</strong>
        `;
    } else {
        document.getElementById('yearsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('yearsInput').value = '';
    document.getElementById('daysInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const yearsValue = document.getElementById('yearsInput').value;
    const daysValue = document.getElementById('daysInput').value;
    
    document.getElementById('yearsInput').value = daysValue;
    document.getElementById('daysInput').value = yearsValue;
    
    if (daysValue) {
        convertYearsToDays(parseFloat(daysValue));
    } else if (yearsValue) {
        convertDaysToYears(parseFloat(yearsValue));
    }
}

// Add event listeners
document.getElementById('yearsInput').addEventListener('input', function() {
    convertYearsToDays(parseFloat(this.value));
});

document.getElementById('daysInput').addEventListener('input', function() {
    convertDaysToYears(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
