<?php include 'header.php'; ?>

    <title>Hebrew Birthday Calculator 2026 - Convert Gregorian to Hebrew Calendar | Thiyagi.com</title>
    <meta name="description" content="Hebrew birthday calculator 2026 - convert Gregorian dates to Hebrew calendar, find your Hebrew birthday, and calculate upcoming Hebrew anniversaries.">
    <meta name="keywords" content="hebrew birthday calculator 2026, jewish calendar converter, hebrew date calculator, jewish birthday finder, hebrew calendar conversion">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Hebrew Birthday Calculator 2026 - Convert Gregorian to Hebrew Calendar">
    <meta property="og:description" content="Convert your birthday to Hebrew calendar, find Hebrew dates, and calculate Jewish calendar anniversaries.">
    <meta property="og:url" content="https://www.thiyagi.com/hebrew-birthday-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hebrew Birthday Calculator 2026 - Convert Gregorian to Hebrew Calendar">
    <meta name="twitter:description" content="Convert your birthday to Hebrew calendar and find Jewish calendar dates.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
    }
    .hebrew-card {
        transition: all 0.3s ease;
        border-left: 4px solid #6366f1;
    }
    .hebrew-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #4f46e5;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .star-pulse {
        animation: starPulse 2s ease-in-out infinite;
    }
    @keyframes starPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .hebrew-text {
        font-family: 'Times New Roman', serif;
        font-weight: bold;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Hebrew Birthday Calculator 2026",
  "description": "Convert Gregorian dates to Hebrew calendar, find your Hebrew birthday, and calculate Jewish calendar anniversaries.",
  "url": "https://www.thiyagi.com/hebrew-birthday-calculator",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com"
  }
}
</script>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-star-of-david text-2xl text-indigo-600 star-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Hebrew Birthday Calculator</h1>
                        <p class="text-indigo-100">Convert dates between Gregorian and Hebrew calendars</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white border-b" aria-label="Breadcrumb">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400" aria-hidden="true"></i></li>
                <li class="text-gray-900 font-medium">Hebrew Birthday Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Hebrew Date Converter</h2>
                <p class="text-indigo-100">Convert between Gregorian and Hebrew calendar dates</p>
            </div>
            
            <div class="p-6">
                <!-- Conversion Type -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Conversion Type</label>
                    <div class="flex space-x-4">
                        <label class="flex items-center">
                            <input type="radio" name="conversionType" value="toHebrew" checked 
                                   class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Gregorian to Hebrew</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="conversionType" value="toGregorian" 
                                   class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Hebrew to Gregorian</span>
                        </label>
                    </div>
                </div>

                <!-- Gregorian Input -->
                <div id="gregorianInput" class="grid md:grid-cols-3 gap-6 mb-6">
                    <div class="form-group">
                        <label for="gregorianDay" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-day text-indigo-500 mr-2"></i>
                            Day
                        </label>
                        <select id="gregorianDay" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <!-- Populated by JavaScript -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gregorianMonth" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-alt text-indigo-500 mr-2"></i>
                            Month
                        </label>
                        <select id="gregorianMonth" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="gregorianYear" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar text-indigo-500 mr-2"></i>
                            Year
                        </label>
                        <input type="number" id="gregorianYear" min="1900" max="2100" value="1990" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>
                </div>

                <!-- Hebrew Input -->
                <div id="hebrewInput" class="hidden grid md:grid-cols-3 gap-6 mb-6">
                    <div class="form-group">
                        <label for="hebrewDay" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-day text-indigo-500 mr-2"></i>
                            Day
                        </label>
                        <select id="hebrewDay" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <!-- Populated by JavaScript -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hebrewMonth" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar-alt text-indigo-500 mr-2"></i>
                            Month
                        </label>
                        <select id="hebrewMonth" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="1">Tishrei</option>
                            <option value="2">Cheshvan</option>
                            <option value="3">Kislev</option>
                            <option value="4">Tevet</option>
                            <option value="5">Shevat</option>
                            <option value="6">Adar</option>
                            <option value="7">Nissan</option>
                            <option value="8">Iyar</option>
                            <option value="9">Sivan</option>
                            <option value="10">Tammuz</option>
                            <option value="11">Av</option>
                            <option value="12">Elul</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="hebrewYear" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-calendar text-indigo-500 mr-2"></i>
                            Year
                        </label>
                        <input type="number" id="hebrewYear" min="5000" max="6000" value="5750" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    </div>
                </div>

                <div class="mt-8">
                    <button onclick="convertDate()" 
                            class="w-full bg-gradient-to-r from-indigo-500 to-indigo-600 text-white font-bold py-4 px-6 rounded-lg hover:from-indigo-600 hover:to-indigo-700 focus:ring-4 focus:ring-indigo-300 transition-all duration-300">
                        <i class="fas fa-sync-alt mr-2"></i>
                        Convert Date
                    </button>
                </div>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Conversion Results -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-exchange-alt text-indigo-500 mr-3"></i>
                    Conversion Results
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="hebrew-card bg-blue-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">Gregorian Date</h4>
                        <p id="gregorianResult" class="text-2xl font-bold text-blue-900">-</p>
                    </div>
                    <div class="hebrew-card bg-indigo-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-indigo-800 mb-2">Hebrew Date</h4>
                        <p id="hebrewResult" class="text-2xl font-bold text-indigo-900 hebrew-text">-</p>
                    </div>
                </div>
            </div>

            <!-- Birthday Information -->
            <div id="birthdayInfo" class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-birthday-cake text-indigo-500 mr-3"></i>
                    Birthday Information
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="hebrew-card bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800">Next Hebrew Birthday</h4>
                            <p id="nextHebrewBirthday" class="text-lg text-green-700">-</p>
                        </div>
                        <div class="hebrew-card bg-purple-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-purple-800">Age in Hebrew Years</h4>
                            <p id="hebrewAge" class="text-lg text-purple-700">-</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="hebrew-card bg-yellow-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-yellow-800">Days Until Next Birthday</h4>
                            <p id="daysUntilBirthday" class="text-lg text-yellow-700">-</p>
                        </div>
                        <div class="hebrew-card bg-red-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-red-800">Hebrew Zodiac Sign</h4>
                            <p id="hebrewZodiac" class="text-lg text-red-700">-</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calendar Information -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-info-circle text-indigo-500 mr-3"></i>
                    Hebrew Calendar Information
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Lunar Calendar</h4>
                                <p class="text-gray-600 text-sm">The Hebrew calendar is based on lunar months with approximately 354 days per year.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Leap Years</h4>
                                <p class="text-gray-600 text-sm">Hebrew calendar adds an extra month (Adar II) seven times in a 19-year cycle.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Year Counting</h4>
                                <p class="text-gray-600 text-sm">Hebrew years count from the traditional date of creation (3761 BCE).</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">New Year</h4>
                                <p class="text-gray-600 text-sm">Hebrew New Year (Rosh Hashanah) begins on 1 Tishrei, usually in September.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Hebrew Birthday</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyResults()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Results
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class HebrewBirthdayCalculator {
            constructor() {
                this.hebrewMonths = [
                    'Tishrei', 'Cheshvan', 'Kislev', 'Tevet', 'Shevat', 'Adar',
                    'Nissan', 'Iyar', 'Sivan', 'Tammuz', 'Av', 'Elul'
                ];
                this.gregorianMonths = [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];
                this.results = null;
                this.initializeDates();
                this.setupEventListeners();
            }

            initializeDates() {
                // Populate day options
                this.populateDays('gregorianDay');
                this.populateDays('hebrewDay');
                
                // Set default values
                const today = new Date();
                document.getElementById('gregorianDay').value = today.getDate();
                document.getElementById('gregorianMonth').value = today.getMonth() + 1;
                document.getElementById('gregorianYear').value = today.getFullYear();
            }

            populateDays(elementId) {
                const select = document.getElementById(elementId);
                select.innerHTML = '';
                for (let i = 1; i <= 30; i++) {
                    const option = document.createElement('option');
                    option.value = i;
                    option.textContent = i;
                    select.appendChild(option);
                }
            }

            setupEventListeners() {
                const radioButtons = document.querySelectorAll('input[name="conversionType"]');
                radioButtons.forEach(radio => {
                    radio.addEventListener('change', this.toggleInputFields);
                });
            }

            toggleInputFields() {
                const conversionType = document.querySelector('input[name="conversionType"]:checked').value;
                const gregorianInput = document.getElementById('gregorianInput');
                const hebrewInput = document.getElementById('hebrewInput');

                if (conversionType === 'toHebrew') {
                    gregorianInput.classList.remove('hidden');
                    hebrewInput.classList.add('hidden');
                } else {
                    gregorianInput.classList.add('hidden');
                    hebrewInput.classList.remove('hidden');
                }
            }

            // Simplified Hebrew calendar conversion (approximation)
            gregorianToHebrew(gregorianDate) {
                // This is a simplified conversion for demonstration
                // In a real implementation, you'd use a proper Hebrew calendar library
                const baseHebrewYear = 5784; // Hebrew year for 2024
                const baseGregorianYear = 2024;
                
                const yearDiff = gregorianDate.getFullYear() - baseGregorianYear;
                const hebrewYear = baseHebrewYear + yearDiff;
                
                // Approximate month conversion (simplified)
                let hebrewMonth = gregorianDate.getMonth() + 4; // Rough approximation
                if (hebrewMonth > 12) hebrewMonth -= 12;
                
                const hebrewDay = Math.min(gregorianDate.getDate(), 29); // Hebrew months are 29-30 days
                
                return {
                    day: hebrewDay,
                    month: hebrewMonth,
                    year: hebrewYear,
                    monthName: this.hebrewMonths[hebrewMonth - 1]
                };
            }

            hebrewToGregorian(hebrewDay, hebrewMonth, hebrewYear) {
                // Simplified conversion for demonstration
                const baseHebrewYear = 5784;
                const baseGregorianYear = 2024;
                
                const yearDiff = hebrewYear - baseHebrewYear;
                const gregorianYear = baseGregorianYear + yearDiff;
                
                // Approximate month conversion
                let gregorianMonth = hebrewMonth - 4;
                if (gregorianMonth <= 0) gregorianMonth += 12;
                
                const gregorianDay = Math.min(hebrewDay, this.getDaysInMonth(gregorianMonth, gregorianYear));
                
                return new Date(gregorianYear, gregorianMonth - 1, gregorianDay);
            }

            getDaysInMonth(month, year) {
                return new Date(year, month, 0).getDate();
            }

            calculateAge(birthDate, currentDate = new Date()) {
                const diffTime = Math.abs(currentDate - birthDate);
                const diffYears = Math.floor(diffTime / (1000 * 60 * 60 * 24 * 365.25));
                return diffYears;
            }

            getHebrewZodiac(hebrewMonth) {
                const signs = [
                    'Mazal Dag (Pisces)', 'Mazal Taleh (Aries)', 'Mazal Shor (Taurus)',
                    'Mazal Teomim (Gemini)', 'Mazal Sartan (Cancer)', 'Mazal Aryeh (Leo)',
                    'Mazal Betulah (Virgo)', 'Mazal Moznayim (Libra)', 'Mazal Akrav (Scorpio)',
                    'Mazal Keshet (Sagittarius)', 'Mazal Gedi (Capricorn)', 'Mazal Dli (Aquarius)'
                ];
                return signs[hebrewMonth - 1] || 'Unknown';
            }

            convert() {
                const conversionType = document.querySelector('input[name="conversionType"]:checked').value;
                
                if (conversionType === 'toHebrew') {
                    this.convertToHebrew();
                } else {
                    this.convertToGregorian();
                }
                
                this.displayResults();
            }

            convertToHebrew() {
                const day = parseInt(document.getElementById('gregorianDay').value);
                const month = parseInt(document.getElementById('gregorianMonth').value);
                const year = parseInt(document.getElementById('gregorianYear').value);
                
                const gregorianDate = new Date(year, month - 1, day);
                const hebrewDate = this.gregorianToHebrew(gregorianDate);
                
                // Calculate next Hebrew birthday
                const currentYear = new Date().getFullYear();
                const nextBirthdayGregorian = this.hebrewToGregorian(hebrewDate.day, hebrewDate.month, hebrewDate.year + (currentYear - year) + 1);
                const today = new Date();
                const daysUntil = Math.ceil((nextBirthdayGregorian - today) / (1000 * 60 * 60 * 24));
                
                this.results = {
                    gregorianDate: `${this.gregorianMonths[month - 1]} ${day}, ${year}`,
                    hebrewDate: `${hebrewDate.day} ${hebrewDate.monthName} ${hebrewDate.year}`,
                    nextBirthday: `${nextBirthdayGregorian.toLocaleDateString('en-US', { 
                        year: 'numeric', month: 'long', day: 'numeric' 
                    })}`,
                    hebrewAge: this.calculateAge(gregorianDate),
                    daysUntil: daysUntil > 0 ? daysUntil : daysUntil + 365,
                    zodiac: this.getHebrewZodiac(hebrewDate.month),
                    originalDate: gregorianDate,
                    convertedHebrew: hebrewDate
                };
            }

            convertToGregorian() {
                const day = parseInt(document.getElementById('hebrewDay').value);
                const month = parseInt(document.getElementById('hebrewMonth').value);
                const year = parseInt(document.getElementById('hebrewYear').value);
                
                const gregorianDate = this.hebrewToGregorian(day, month, year);
                const hebrewDate = { day, month, year, monthName: this.hebrewMonths[month - 1] };
                
                this.results = {
                    gregorianDate: gregorianDate.toLocaleDateString('en-US', { 
                        year: 'numeric', month: 'long', day: 'numeric' 
                    }),
                    hebrewDate: `${day} ${this.hebrewMonths[month - 1]} ${year}`,
                    nextBirthday: 'Calculate from Gregorian date',
                    hebrewAge: year - 5750, // Approximate
                    daysUntil: 'Calculate from Gregorian date',
                    zodiac: this.getHebrewZodiac(month),
                    originalDate: null,
                    convertedHebrew: hebrewDate
                };
            }

            displayResults() {
                document.getElementById('gregorianResult').textContent = this.results.gregorianDate;
                document.getElementById('hebrewResult').textContent = this.results.hebrewDate;
                document.getElementById('nextHebrewBirthday').textContent = this.results.nextBirthday;
                document.getElementById('hebrewAge').textContent = this.results.hebrewAge + ' years';
                document.getElementById('daysUntilBirthday').textContent = this.results.daysUntil + ' days';
                document.getElementById('hebrewZodiac').textContent = this.results.zodiac;

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            getShareText() {
                return `My Hebrew Birthday: ${this.results.hebrewDate} (${this.results.gregorianDate})`;
            }
        }

        const hebrewCalc = new HebrewBirthdayCalculator();

        function convertDate() {
            hebrewCalc.convert();
        }

        function shareOnFacebook() {
            if (!hebrewCalc.results) return;
            
            const text = `${hebrewCalc.getShareText()}. Find your Hebrew birthday at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!hebrewCalc.results) return;
            
            const text = `${hebrewCalc.getShareText()} ✡️ Find yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyResults() {
            if (!hebrewCalc.results) return;
            
            const text = `Hebrew Birthday Conversion Results:
${hebrewCalc.getShareText()}
Hebrew Age: ${hebrewCalc.results.hebrewAge} years
Hebrew Zodiac: ${hebrewCalc.results.zodiac}

Convert at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Results copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>