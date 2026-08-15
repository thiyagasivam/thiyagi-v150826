<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Months to Days Converter 2026 - Convert Months to Days | Thiyagi</title>
<meta name="description" content="Free online months to days converter 2026. Convert months to days instantly considering leap years and month variations.">
<meta name="keywords" content="months to days 2026, month day converter, time calculator, calendar converter, date calculation">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Months to Days Converter 2026 - Convert Months to Days">
<meta property="og:description" content="Free online months to days converter 2026. Convert months to days instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/months-to-days.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Months to Days Converter 2026 - Convert Months to Days">
<meta name="twitter:description" content="Free online months to days converter 2026. Convert months to days instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-alt text-green-600 mr-3"></i>
                Months to Days Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert months to days instantly with precision - Accounting for different month lengths and leap years
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Input Section -->
                <div class="space-y-4">
                    <label for="monthsInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar text-green-600 mr-2"></i>Months
                    </label>
                    <input
                        type="number"
                        id="monthsInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg"
                        placeholder="Enter months"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        Enter the number of months to convert
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-4">
                    <label for="daysOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-sun text-teal-600 mr-2"></i>Days
                    </label>
                    <input
                        type="number"
                        id="daysOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-lg bg-gray-50"
                        placeholder="Result in days"
                        readonly
                    >
                    <div class="text-sm text-gray-500">
                        Result in days (automatic calculation)
                    </div>
                </div>
            </div>

            <!-- Calculation Method Selection -->
            <div class="mt-8 p-4 bg-green-50 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    <i class="fas fa-cogs text-green-600 mr-2"></i>Calculation Method
                </h3>
                <div class="space-y-3">
                    <label class="flex items-center">
                        <input type="radio" name="calculationMethod" value="average" checked class="mr-3">
                        <span class="text-gray-700"><strong>Average Method:</strong> 30.44 days per month (365.25 ÷ 12)</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="calculationMethod" value="exact30" class="mr-3">
                        <span class="text-gray-700"><strong>30-Day Method:</strong> Exactly 30 days per month</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="calculationMethod" value="exact31" class="mr-3">
                        <span class="text-gray-700"><strong>31-Day Method:</strong> Exactly 31 days per month</span>
                    </label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Reverse (days to months)
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Month Length Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-green-600 mr-3"></i>Days in Each Month
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Month</th>
                                <th class="text-center py-2">Days</th>
                                <th class="text-center py-2">Leap Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">January</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">February</td>
                                <td class="text-center">28</td>
                                <td class="text-center">29</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">March</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">April</td>
                                <td class="text-center">30</td>
                                <td class="text-center">30</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">May</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">June</td>
                                <td class="text-center">30</td>
                                <td class="text-center">30</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">July</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">August</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">September</td>
                                <td class="text-center">30</td>
                                <td class="text-center">30</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">October</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">November</td>
                                <td class="text-center">30</td>
                                <td class="text-center">30</td>
                            </tr>
                            <tr>
                                <td class="py-2">December</td>
                                <td class="text-center">31</td>
                                <td class="text-center">31</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Common Conversions -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-clock text-green-600 mr-3"></i>Common Time Periods
                </h2>
                <div class="space-y-3 text-sm text-gray-700">
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>1 month</span>
                        <span>~30.44 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>3 months</span>
                        <span>~91.31 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>6 months</span>
                        <span>~182.63 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>12 months</span>
                        <span>365.25 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>18 months</span>
                        <span>~547.88 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>24 months</span>
                        <span>730.5 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>36 months</span>
                        <span>~1095.75 days</span>
                    </div>
                    <div class="flex justify-between">
                        <span><i class="fas fa-calendar text-green-600 mr-1"></i>60 months</span>
                        <span>~1826.25 days</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-green-600 mr-2"></i>Calculation Methods
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Average:</strong> Most accurate for long periods</li>
                    <li><strong>30-Day:</strong> Simplified business calculations</li>
                    <li><strong>31-Day:</strong> Conservative estimates</li>
                    <li><strong>Exact:</strong> Consider specific months</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-calendar-check text-green-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Loan calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Project planning</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Age calculations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Contract durations</li>
                    <li><i class="fas fa-check text-green-600 mr-2"></i>Travel planning</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-green-600 mr-2"></i>Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Leap Year:</strong> Every 4 years (except centuries)</li>
                    <li><strong>Business:</strong> Often uses 30-day months</li>
                    <li><strong>Precision:</strong> Use average for accuracy</li>
                    <li><strong>Context:</strong> Consider specific use case</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMonthsToDays() {
    const months = parseFloat(document.getElementById('monthsInput').value);
    const daysOutput = document.getElementById('daysOutput');
    const method = document.querySelector('input[name="calculationMethod"]:checked').value;
    
    if (!isNaN(months) && months !== '') {
        let days;
        
        switch(method) {
            case 'average':
                days = months * 30.436875; // 365.25 / 12
                break;
            case 'exact30':
                days = months * 30;
                break;
            case 'exact31':
                days = months * 31;
                break;
            default:
                days = months * 30.436875;
        }
        
        daysOutput.value = days.toFixed(6);
    } else {
        daysOutput.value = '';
    }
}

function convertDaysToMonths() {
    const days = parseFloat(document.getElementById('daysOutput').value);
    const monthsInput = document.getElementById('monthsInput');
    const method = document.querySelector('input[name="calculationMethod"]:checked').value;
    
    if (!isNaN(days) && days !== '') {
        let months;
        
        switch(method) {
            case 'average':
                months = days / 30.436875; // 365.25 / 12
                break;
            case 'exact30':
                months = days / 30;
                break;
            case 'exact31':
                months = days / 31;
                break;
            default:
                months = days / 30.436875;
        }
        
        monthsInput.value = months.toFixed(6);
    } else {
        monthsInput.value = '';
    }
}

function clearValues() {
    document.getElementById('monthsInput').value = '';
    document.getElementById('daysOutput').value = '';
}

function swapValues() {
    const monthsInput = document.getElementById('monthsInput');
    const daysOutput = document.getElementById('daysOutput');
    
    // Make output field editable and input field readonly
    if (daysOutput.readOnly) {
        daysOutput.readOnly = false;
        daysOutput.classList.remove('bg-gray-50');
        monthsInput.readOnly = true;
        monthsInput.classList.add('bg-gray-50');
        
        // Update labels
        document.querySelector('label[for="monthsInput"]').innerHTML = '<i class="fas fa-calendar text-green-600 mr-2"></i>Months - Result';
        document.querySelector('label[for="daysOutput"]').innerHTML = '<i class="fas fa-sun text-teal-600 mr-2"></i>Days - Input';
        
        // Clear values and set new event listener
        clearValues();
        daysOutput.removeEventListener('input', convertMonthsToDays);
        daysOutput.addEventListener('input', convertDaysToMonths);
    } else {
        daysOutput.readOnly = true;
        daysOutput.classList.add('bg-gray-50');
        monthsInput.readOnly = false;
        monthsInput.classList.remove('bg-gray-50');
        
        // Reset labels
        document.querySelector('label[for="monthsInput"]').innerHTML = '<i class="fas fa-calendar text-green-600 mr-2"></i>Months';
        document.querySelector('label[for="daysOutput"]').innerHTML = '<i class="fas fa-sun text-teal-600 mr-2"></i>Days';
        
        // Clear values and reset event listener
        clearValues();
        daysOutput.removeEventListener('input', convertDaysToMonths);
        monthsInput.addEventListener('input', convertMonthsToDays);
    }
}

// Add event listeners
document.getElementById('monthsInput').addEventListener('input', convertMonthsToDays);

// Add event listeners for radio buttons
document.querySelectorAll('input[name="calculationMethod"]').forEach(radio => {
    radio.addEventListener('change', convertMonthsToDays);
});
</script>

<?php include 'footer.php'; ?>
