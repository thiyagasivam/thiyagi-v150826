<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Month to Year Converter 2026 - Months to Years Calculator | Thiyagi</title>
<meta name="description" content="Free online Month to Year converter 2026. Convert months to years and years to months instantly with accurate time period conversion for planning.">
<meta name="keywords" content="month to year converter 2026, months to years, time converter, period calculator, timeline planning, age calculator">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Month to Year Converter 2026 - Months to Years Calculator">
<meta property="og:description" content="Free online Month to Year converter 2026. Convert months to years and years to months instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/month-to-year.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Month to Year Converter 2026 - Months to Years Calculator">
<meta name="twitter:description" content="Free online Month to Year converter 2026. Convert months to years and years to months instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-sky-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-alt text-indigo-600 mr-3"></i>
                Month to Year Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between months and years for timeline planning, age calculations, and project scheduling
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Month Input -->
                <div class="space-y-4">
                    <label for="monthInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-calendar text-indigo-600 mr-2"></i>Months
                    </label>
                    <input
                        type="number"
                        id="monthInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter months"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 month ≈ 0.0833 years (1/12)
                    </div>
                </div>

                <!-- Year Input -->
                <div class="space-y-4">
                    <label for="yearInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-clock text-blue-600 mr-2"></i>Years
                    </label>
                    <input
                        type="number"
                        id="yearInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-xl"
                        placeholder="Enter years"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 year = 12 months
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
                <div id="detailedResult" class="text-sm text-gray-600 text-center mt-2"></div>
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
                    class="flex-1 min-w-[140px] bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                    <i class="fas fa-table text-indigo-600 mr-3"></i>Common Time Conversions
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Months</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Years</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">6 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 years</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">12 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 year</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">18 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.5 years</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">24 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2 years</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">36 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">3 years</td>
                            </tr>
                            <tr>
                                <td class="py-2">60 months</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5 years</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Life Stages & Milestones -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-baby text-indigo-600 mr-3"></i>Life Stages & Milestones
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Child Development:</strong><br>
                        • Newborn: 0-3 months<br>
                        • Infant: 3-12 months (1 year)<br>
                        • Toddler: 12-36 months (1-3 years)<br>
                        • Preschool: 36-60 months (3-5 years)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Education Timeline:</strong><br>
                        • Pregnancy: 9 months<br>
                        • Elementary: 72 months (6 years)<br>
                        • High school: 48 months (4 years)<br>
                        • College: 48-72 months (4-6 years)
                    </div>
                    <div class="bg-sky-50 p-3 rounded">
                        <strong>Financial Planning:</strong><br>
                        • Short-term: 1-12 months<br>
                        • Medium-term: 12-60 months (1-5 years)<br>
                        • Long-term: 60+ months (5+ years)<br>
                        • Retirement: 360-480 months (30-40 years)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-indigo-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Month:</strong> 1/12 of a year</li>
                    <li><strong>Year:</strong> 12 months period</li>
                    <li><strong>Conversion:</strong> 1 year = 12 months</li>
                    <li><strong>Calendar:</strong> Gregorian calendar system</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Planning Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use months for short-term planning</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Use years for long-term goals</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Consider seasonal variations</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Account for leap years</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-indigo-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Age:</strong> Child development tracking</li>
                    <li><strong>Finance:</strong> Investment planning</li>
                    <li><strong>Projects:</strong> Timeline management</li>
                    <li><strong>Health:</strong> Treatment duration</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMonthToYear(months) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(months) && months !== '') {
        const years = months / 12;
        const wholeYears = Math.floor(years);
        const remainingMonths = months % 12;
        
        document.getElementById('yearInput').value = years.toFixed(6);
        
        let detailedText = '';
        if (months >= 12) {
            if (remainingMonths === 0) {
                detailedText = `Exactly ${wholeYears} year${wholeYears !== 1 ? 's' : ''}`;
            } else {
                detailedText = `${wholeYears} year${wholeYears !== 1 ? 's' : ''} and ${remainingMonths} month${remainingMonths !== 1 ? 's' : ''}`;
            }
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${months} month${months !== 1 ? 's' : ''} = ${years.toFixed(6)} year${years !== 1 ? 's' : ''}</strong>
        `;
        
        document.getElementById('detailedResult').innerHTML = detailedText;
    } else {
        document.getElementById('yearInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('detailedResult').innerHTML = '';
    }
    
    isUpdating = false;
}

function convertYearToMonth(years) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(years) && years !== '') {
        const months = years * 12;
        const wholeMonths = Math.floor(months);
        const remainingDays = Math.round((months - wholeMonths) * 30.44); // Average days per month
        
        document.getElementById('monthInput').value = months.toFixed(6);
        
        let detailedText = '';
        if (remainingDays > 0 && remainingDays < 30) {
            detailedText = `Approximately ${wholeMonths} month${wholeMonths !== 1 ? 's' : ''} and ${remainingDays} day${remainingDays !== 1 ? 's' : ''}`;
        } else if (wholeMonths > 0) {
            detailedText = `Exactly ${wholeMonths} month${wholeMonths !== 1 ? 's' : ''}`;
        }
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-indigo-600 mr-2"></i>
            <strong>${years} year${years !== 1 ? 's' : ''} = ${months.toFixed(6)} month${months !== 1 ? 's' : ''}</strong>
        `;
        
        document.getElementById('detailedResult').innerHTML = detailedText;
    } else {
        document.getElementById('monthInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
        document.getElementById('detailedResult').innerHTML = '';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('monthInput').value = '';
    document.getElementById('yearInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    document.getElementById('detailedResult').innerHTML = '';
}

function swapValues() {
    const monthValue = document.getElementById('monthInput').value;
    const yearValue = document.getElementById('yearInput').value;
    
    document.getElementById('monthInput').value = yearValue;
    document.getElementById('yearInput').value = monthValue;
    
    if (yearValue) {
        convertMonthToYear(parseFloat(yearValue));
    } else if (monthValue) {
        convertYearToMonth(parseFloat(monthValue));
    }
}

// Add event listeners
document.getElementById('monthInput').addEventListener('input', function() {
    convertMonthToYear(parseFloat(this.value));
});

document.getElementById('yearInput').addEventListener('input', function() {
    convertYearToMonth(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
