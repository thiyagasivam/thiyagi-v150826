<?php include 'header.php'; ?>

    <title>Half Birthday Calculator 2026 - Find Your Half Birthday Date | Thiyagi.com</title>
    <meta name="description" content="Half birthday calculator 2026 - find your exact half birthday date, age in half years, and celebrate your special half day. Fun birthday calculator tool.">
    <meta name="keywords" content="half birthday calculator 2026, half birthday finder, birthday calculator, age calculator, half birthday date, birthday fun calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Half Birthday Calculator 2026 - Find Your Half Birthday Date">
    <meta property="og:description" content="Find your exact half birthday date and age in half years. Fun calculator to discover your special half day celebration date.">
    <meta property="og:url" content="https://www.thiyagi.com/half-birthday-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Half Birthday Calculator 2026 - Find Your Half Birthday Date">
    <meta name="twitter:description" content="Find your exact half birthday date and celebrate your special half day with our fun calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    .birthday-card {
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }
    .birthday-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        border-color: #f59e0b;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .celebration-animation {
        animation: celebrate 2s ease-in-out infinite;
    }
    @keyframes celebrate {
        0%, 100% { transform: scale(1) rotate(0deg); }
        25% { transform: scale(1.05) rotate(2deg); }
        75% { transform: scale(1.05) rotate(-2deg); }
    }
    .balloon {
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    .confetti {
        position: relative;
        overflow: hidden;
    }
    .confetti::before {
        content: '🎉 🎂 🎈 🎊 🎁';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 2rem;
        animation: confettiFall 3s ease-in-out infinite;
        opacity: 0;
    }
    @keyframes confettiFall {
        0% { opacity: 0; transform: translateX(-50%) translateY(-20px); }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { opacity: 0; transform: translateX(-50%) translateY(100px); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Half Birthday Calculator 2026",
  "description": "Find your exact half birthday date and age in half years. Fun calculator to discover when to celebrate your special half day with friends and family.",
  "url": "https://www.thiyagi.com/half-birthday-calculator",
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
                    <div class="bg-white p-3 rounded-full shadow-lg balloon">
                        <i class="fas fa-birthday-cake text-2xl text-orange-600" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Half Birthday Calculator</h1>
                        <p class="text-orange-100">Find your special half birthday date!</p>
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
                <li class="text-gray-900 font-medium">Half Birthday Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-orange-100 rounded-full mb-4 celebration-animation">
                    <i class="fas fa-gift text-2xl text-orange-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Half Birthday Calculator</h2>
                <p class="text-gray-600">Discover your special half birthday date and celebrate twice a year!</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-2xl mx-auto space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="birthDate" class="block text-sm font-medium text-gray-700 mb-2">Your Birthday</label>
                        <input type="date" id="birthDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Select your birth date</div>
                    </div>

                    <div>
                        <label for="calculationYear" class="block text-sm font-medium text-gray-700 mb-2">Year to Calculate</label>
                        <select id="calculationYear" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <!-- Years will be populated by JavaScript -->
                        </select>
                        <div class="text-xs text-gray-500 mt-1">Which year's half birthday?</div>
                    </div>
                </div>

                <!-- Quick Birthday Examples -->
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h4 class="font-medium text-orange-800 mb-3">Quick Examples</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                        <button class="example-btn bg-white border border-orange-200 px-3 py-2 rounded text-sm hover:bg-orange-100" data-date="2024-01-01">Jan 1st</button>
                        <button class="example-btn bg-white border border-orange-200 px-3 py-2 rounded text-sm hover:bg-orange-100" data-date="2024-07-04">July 4th</button>
                        <button class="example-btn bg-white border border-orange-200 px-3 py-2 rounded text-sm hover:bg-orange-100" data-date="2024-12-25">Christmas</button>
                        <button class="example-btn bg-white border border-orange-200 px-3 py-2 rounded text-sm hover:bg-orange-100" data-date="2024-03-17">St. Patrick's</button>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105 confetti">
                        <i class="fas fa-calendar-day mr-2" aria-hidden="true"></i>
                        Find My Half Birthday!
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-orange-50 to-yellow-50 border-2 border-orange-200 rounded-xl p-6 confetti">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center celebration-animation">
                        🎉 Your Half Birthday Results! 🎉
                    </h3>
                    
                    <!-- Main Result -->
                    <div class="birthday-card bg-white p-6 rounded-lg shadow-lg mb-6 text-center">
                        <div class="text-sm text-gray-600 mb-2">Your Half Birthday is on</div>
                        <div id="halfBirthdayDate" class="text-4xl font-bold text-orange-600 mb-2">-</div>
                        <div id="dayOfWeek" class="text-lg text-gray-700 mb-4">-</div>
                        <div id="daysUntil" class="bg-orange-100 text-orange-800 px-4 py-2 rounded-full inline-block font-medium">-</div>
                    </div>

                    <!-- Additional Information -->
                    <div class="grid md:grid-cols-3 gap-4 mb-6">
                        <div class="birthday-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Age on Half Birthday</div>
                            <div id="halfAge" class="text-2xl font-bold text-blue-600">0.5</div>
                            <div class="text-xs text-gray-500">years old</div>
                        </div>
                        <div class="birthday-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Days from Birthday</div>
                            <div id="daysFromBirthday" class="text-2xl font-bold text-green-600">182.5</div>
                            <div class="text-xs text-gray-500">days (6 months)</div>
                        </div>
                        <div class="birthday-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Season</div>
                            <div id="season" class="text-2xl font-bold text-purple-600">-</div>
                            <div class="text-xs text-gray-500">time of year</div>
                        </div>
                    </div>

                    <!-- Fun Facts -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Fun Facts
                            </h4>
                            <div id="funFacts" class="space-y-2 text-sm text-gray-700">
                                <!-- Fun facts will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-calendar-alt mr-2 text-blue-500" aria-hidden="true"></i>
                                Birthday Timeline
                            </h4>
                            <div id="timeline" class="space-y-3">
                                <!-- Timeline will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Celebration Ideas -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-party-horn mr-2 text-pink-500" aria-hidden="true"></i>
                            Half Birthday Celebration Ideas 🎈
                        </h4>
                        <div id="celebrationIdeas" class="grid md:grid-cols-2 gap-4">
                            <!-- Ideas will be populated by JS -->
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="shareBtn" class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share My Half Birthday
                        </button>
                        <button id="addCalendarBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-calendar-plus mr-2" aria-hidden="true"></i>
                            Add to Calendar
                        </button>
                        <button id="calculateAnotherBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-redo mr-2" aria-hidden="true"></i>
                            Calculate Another
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Celebrate Half Birthdays -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-heart mr-3 text-red-500" aria-hidden="true"></i>
                Why Celebrate Half Birthdays?
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-child text-2xl text-blue-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">For Kids</h3>
                    </div>
                    <p class="text-gray-600">Children love having an extra celebration! Half birthdays make the wait between birthdays shorter and more exciting.</p>
                </div>

                <div class="bg-green-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-snowflake text-2xl text-green-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Holiday Birthdays</h3>
                    </div>
                    <p class="text-gray-600">If your birthday falls on a major holiday, half birthdays give you a separate day to celebrate just YOU!</p>
                </div>

                <div class="bg-purple-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-smile text-2xl text-purple-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Just for Fun</h3>
                    </div>
                    <p class="text-gray-600">Who says you can only celebrate once a year? Half birthdays are a great excuse for cake and fun!</p>
                </div>

                <div class="bg-yellow-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-users text-2xl text-yellow-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Family Tradition</h3>
                    </div>
                    <p class="text-gray-600">Start a unique family tradition of celebrating everyone's half birthdays with small gatherings or treats.</p>
                </div>

                <div class="bg-pink-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-gift text-2xl text-pink-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Summer Birthdays</h3>
                    </div>
                    <p class="text-gray-600">Kids with summer birthdays can celebrate their half birthday during the school year with friends!</p>
                </div>

                <div class="bg-indigo-50 p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-2xl text-indigo-600 mr-3" aria-hidden="true"></i>
                        <h3 class="text-lg font-semibold text-gray-800">Personal Milestone</h3>
                    </div>
                    <p class="text-gray-600">Use half birthdays as a time for reflection, goal-setting, or celebrating personal achievements.</p>
                </div>
            </div>
        </section>

        <!-- FAQs Section -->
        <section class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How is a half birthday calculated?</h3>
                    <p class="text-gray-600">A half birthday occurs exactly 6 months (or 182.5 days on average) after your actual birthday. We calculate this by adding 6 months to your birth date.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What if my birthday is on the 31st but the half-birthday month has fewer days?</h3>
                    <p class="text-gray-600">If your birthday is on the 31st and your half-birthday month doesn't have 31 days (like February), we use the last day of that month for your half birthday.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Are half birthdays a real tradition?</h3>
                    <p class="text-gray-600">Yes! Half birthdays are celebrated in many cultures, especially for children. They're particularly popular for kids with birthdays during summer vacation or major holidays.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How should I celebrate my half birthday?</h3>
                    <p class="text-gray-600">Half birthday celebrations can be simple! Try half a cake, having lunch with friends, treating yourself to something special, or just acknowledging the milestone.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class HalfBirthdayCalculator {
            constructor() {
                this.months = [
                    'January', 'February', 'March', 'April', 'May', 'June',
                    'July', 'August', 'September', 'October', 'November', 'December'
                ];
                this.seasons = {
                    'Winter': [11, 0, 1], // Dec, Jan, Feb
                    'Spring': [2, 3, 4],  // Mar, Apr, May
                    'Summer': [5, 6, 7],  // Jun, Jul, Aug
                    'Fall': [8, 9, 10]    // Sep, Oct, Nov
                };
                this.init();
            }

            init() {
                this.populateYears();
                this.bindEvents();
            }

            populateYears() {
                const yearSelect = document.getElementById('calculationYear');
                const currentYear = new Date().getFullYear();
                
                for (let year = currentYear - 2; year <= currentYear + 5; year++) {
                    const option = document.createElement('option');
                    option.value = year;
                    option.textContent = year;
                    if (year === currentYear) {
                        option.selected = true;
                    }
                    yearSelect.appendChild(option);
                }
            }

            bindEvents() {
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateHalfBirthday());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('addCalendarBtn')?.addEventListener('click', () => this.addToCalendar());
                document.getElementById('calculateAnotherBtn')?.addEventListener('click', () => this.resetCalculator());

                // Example buttons
                document.querySelectorAll('.example-btn').forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        document.getElementById('birthDate').value = e.target.dataset.date;
                    });
                });
            }

            calculateHalfBirthday() {
                const birthDate = new Date(document.getElementById('birthDate').value);
                const calculationYear = parseInt(document.getElementById('calculationYear').value);
                
                if (!birthDate || isNaN(birthDate.getTime())) {
                    alert('Please select a valid birth date');
                    return;
                }

                const results = this.performCalculations(birthDate, calculationYear);
                this.displayResults(results);
            }

            performCalculations(birthDate, year) {
                // Create birthday for the specified year
                const yearlyBirthday = new Date(year, birthDate.getMonth(), birthDate.getDate());
                
                // Calculate half birthday (6 months later)
                const halfBirthday = new Date(yearlyBirthday);
                halfBirthday.setMonth(halfBirthday.getMonth() + 6);
                
                // Handle edge case for dates that don't exist in target month
                if (halfBirthday.getDate() !== yearlyBirthday.getDate()) {
                    halfBirthday.setDate(0); // Set to last day of previous month
                }

                // Calculate current date
                const today = new Date();
                const todayWithoutTime = new Date(today.getFullYear(), today.getMonth(), today.getDate());
                const halfBirthdayWithoutTime = new Date(halfBirthday.getFullYear(), halfBirthday.getMonth(), halfBirthday.getDate());

                // Calculate days until half birthday
                const timeDiff = halfBirthdayWithoutTime - todayWithoutTime;
                const daysUntil = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

                // Calculate age at half birthday
                const ageAtBirthday = year - birthDate.getFullYear();
                const halfAge = ageAtBirthday + 0.5;

                // Get season
                const season = this.getSeason(halfBirthday.getMonth());

                // Generate fun facts
                const funFacts = this.generateFunFacts(birthDate, halfBirthday, halfAge);

                // Generate timeline
                const timeline = this.generateTimeline(yearlyBirthday, halfBirthday);

                // Generate celebration ideas
                const celebrationIdeas = this.generateCelebrationIdeas(season);

                return {
                    birthDate,
                    yearlyBirthday,
                    halfBirthday,
                    daysUntil,
                    halfAge,
                    season,
                    funFacts,
                    timeline,
                    celebrationIdeas
                };
            }

            getSeason(month) {
                for (const [season, months] of Object.entries(this.seasons)) {
                    if (months.includes(month)) {
                        return season;
                    }
                }
                return 'Unknown';
            }

            generateFunFacts(birthDate, halfBirthday, halfAge) {
                const facts = [];
                
                facts.push(`You'll be exactly ${halfAge} years old on your half birthday!`);
                
                const daysDiff = Math.abs((halfBirthday - birthDate) / (1000 * 60 * 60 * 24));
                facts.push(`Your half birthday is ${Math.round(daysDiff)} days from your actual birthday.`);
                
                const birthMonth = this.months[birthDate.getMonth()];
                const halfMonth = this.months[halfBirthday.getMonth()];
                facts.push(`Your birthday is in ${birthMonth}, so your half birthday is in ${halfMonth}.`);
                
                if (birthDate.getDate() === halfBirthday.getDate()) {
                    facts.push('Your half birthday falls on the same day of the month as your real birthday!');
                }
                
                const dayOfWeek = halfBirthday.toLocaleDateString('en-US', { weekday: 'long' });
                facts.push(`This year, your half birthday falls on a ${dayOfWeek}.`);

                return facts;
            }

            generateTimeline(birthday, halfBirthday) {
                const timeline = [
                    {
                        date: birthday.toLocaleDateString(),
                        event: '🎂 Your Birthday',
                        description: 'The big day!'
                    },
                    {
                        date: halfBirthday.toLocaleDateString(),
                        event: '🎉 Your Half Birthday',
                        description: '6 months later celebration'
                    }
                ];

                // Add next birthday
                const nextBirthday = new Date(birthday);
                nextBirthday.setFullYear(birthday.getFullYear() + 1);
                timeline.push({
                    date: nextBirthday.toLocaleDateString(),
                    event: '🎂 Next Birthday',
                    description: 'Another year older!'
                });

                return timeline;
            }

            generateCelebrationIdeas(season) {
                const allIdeas = {
                    'Spring': [
                        '🌸 Have a picnic in the park',
                        '🌱 Plant half a garden',
                        '🦋 Go on a nature walk',
                        '🌷 Pick fresh flowers'
                    ],
                    'Summer': [
                        '🏖️ Half-day beach trip',
                        '🍦 Ice cream party',
                        '🎪 Outdoor movie night',
                        '💦 Water balloon fight'
                    ],
                    'Fall': [
                        '🍂 Apple picking adventure',
                        '🎃 Pumpkin carving contest',
                        '🍁 Leaf pile jumping',
                        '🥧 Bake half a pie'
                    ],
                    'Winter': [
                        '❄️ Build a snow fort',
                        '☕ Hot chocolate party',
                        '🎿 Winter sports day',
                        '🔥 Cozy indoor celebration'
                    ]
                };

                const universalIdeas = [
                    '🎂 Eat half a birthday cake',
                    '🎁 Give yourself half a present',
                    '📱 Half-birthday selfie session',
                    '🎈 Decorate with balloons',
                    '👫 Invite friends for lunch',
                    '🍕 Order your favorite food'
                ];

                return [...(allIdeas[season] || []), ...universalIdeas];
            }

            displayResults(results) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main display
                document.getElementById('halfBirthdayDate').textContent = results.halfBirthday.toLocaleDateString('en-US', { 
                    month: 'long', 
                    day: 'numeric', 
                    year: 'numeric' 
                });
                
                document.getElementById('dayOfWeek').textContent = results.halfBirthday.toLocaleDateString('en-US', { 
                    weekday: 'long' 
                });

                // Update days until
                const daysUntilEl = document.getElementById('daysUntil');
                if (results.daysUntil > 0) {
                    daysUntilEl.textContent = `${results.daysUntil} days to go!`;
                    daysUntilEl.className = 'bg-blue-100 text-blue-800 px-4 py-2 rounded-full inline-block font-medium';
                } else if (results.daysUntil === 0) {
                    daysUntilEl.textContent = 'Today is your half birthday! 🎉';
                    daysUntilEl.className = 'bg-green-100 text-green-800 px-4 py-2 rounded-full inline-block font-medium celebration-animation';
                } else {
                    daysUntilEl.textContent = `${Math.abs(results.daysUntil)} days ago`;
                    daysUntilEl.className = 'bg-gray-100 text-gray-800 px-4 py-2 rounded-full inline-block font-medium';
                }

                // Update additional info
                document.getElementById('halfAge').textContent = results.halfAge;
                document.getElementById('daysFromBirthday').textContent = '182.5';
                document.getElementById('season').textContent = results.season;

                // Update fun facts
                const funFactsHtml = results.funFacts.map(fact => 
                    `<div class="flex items-start"><span class="text-yellow-500 mr-2">•</span>${fact}</div>`
                ).join('');
                document.getElementById('funFacts').innerHTML = funFactsHtml;

                // Update timeline
                const timelineHtml = results.timeline.map(item => `
                    <div class="flex items-center space-x-3 p-2 rounded hover:bg-gray-50">
                        <span class="text-lg">${item.event.split(' ')[0]}</span>
                        <div>
                            <div class="font-medium text-sm">${item.event.substring(2)}</div>
                            <div class="text-xs text-gray-500">${item.date}</div>
                        </div>
                    </div>
                `).join('');
                document.getElementById('timeline').innerHTML = timelineHtml;

                // Update celebration ideas
                const ideasHtml = results.celebrationIdeas.map(idea => `
                    <div class="bg-gradient-to-r from-pink-50 to-purple-50 p-3 rounded-lg text-sm">
                        ${idea}
                    </div>
                `).join('');
                document.getElementById('celebrationIdeas').innerHTML = ideasHtml;

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            shareResults() {
                const halfBirthdayDate = document.getElementById('halfBirthdayDate').textContent;
                const shareText = `🎉 My half birthday is on ${halfBirthdayDate}! Find yours at: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My Half Birthday!',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Half birthday info copied to clipboard!');
                    });
                }
            }

            addToCalendar() {
                const halfBirthdayDate = document.getElementById('halfBirthdayDate').textContent;
                const date = new Date(halfBirthdayDate);
                
                // Format date for calendar
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                
                // Create calendar event URL
                const startDate = `${year}${month}${day}`;
                const endDate = startDate;
                const title = 'My Half Birthday! 🎉';
                const description = 'Half birthday celebration - 6 months from my actual birthday!';
                
                const calendarUrl = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${encodeURIComponent(title)}&dates=${startDate}/${endDate}&details=${encodeURIComponent(description)}`;
                
                window.open(calendarUrl, '_blank');
            }

            resetCalculator() {
                document.getElementById('birthDate').value = '';
                document.getElementById('calculationYear').selectedIndex = 2; // Current year
                document.getElementById('resultsSection').classList.add('hidden');
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new HalfBirthdayCalculator();
        });

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            });

            document.querySelectorAll('section').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>