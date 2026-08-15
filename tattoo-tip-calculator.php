<?php include 'header.php'; ?>

    <title>Tattoo Tip Calculator 2026 - Calculate Tattoo Artist Gratuity | Thiyagi.com</title>
    <meta name="description" content="Tattoo tip calculator 2026 - calculate appropriate gratuity for your tattoo artist. Professional tipping guide for tattoo sessions, touch-ups, and custom work.">
    <meta name="keywords" content="tattoo tip calculator 2026, tattoo gratuity calculator, how much to tip tattoo artist, tattoo tipping guide, tattoo tip etiquette">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tattoo Tip Calculator 2026 - Calculate Tattoo Artist Gratuity">
    <meta property="og:description" content="Calculate appropriate gratuity for your tattoo artist. Professional tipping guide for tattoo sessions and custom work.">
    <meta property="og:url" content="https://www.thiyagi.com/tattoo-tip-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tattoo Tip Calculator 2026 - Calculate Tattoo Artist Gratuity">
    <meta name="twitter:description" content="Calculate appropriate gratuity for your tattoo artist with our professional tipping guide.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    }
    .tip-card {
        transition: all 0.3s ease;
        border-left: 4px solid #6366f1;
    }
    .tip-card:hover {
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
    .tip-excellent { border-left-color: #10b981; background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
    .tip-good { border-left-color: #3b82f6; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
    .tip-standard { border-left-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
    .tip-minimum { border-left-color: #ef4444; background: linear-gradient(135deg, #fef2f2 0%, #fecaca 100%); }
    .tattoo-icon {
        animation: pulse 2s ease-in-out infinite;
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Tattoo Tip Calculator 2026",
  "description": "Calculate appropriate gratuity for your tattoo artist based on service quality, session duration, and tattoo complexity. Professional tipping guide for tattoo enthusiasts.",
  "url": "https://www.thiyagi.com/tattoo-tip-calculator",
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
                        <i class="fas fa-brush text-2xl text-indigo-600 tattoo-icon" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Tattoo Tip Calculator</h1>
                        <p class="text-indigo-100">Calculate fair gratuity for your tattoo artist</p>
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
                <li class="text-gray-900 font-medium">Tattoo Tip Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl text-indigo-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Tattoo Tip Calculator</h2>
                <p class="text-gray-600">Calculate the appropriate gratuity for your tattoo artist based on service and quality</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Basic Information -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="tattooPrice" class="block text-sm font-medium text-gray-700 mb-2">Tattoo Price ($)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-500">$</span>
                            <input type="number" id="tattooPrice" min="0" step="0.01" placeholder="300.00" class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        </div>
                        <div class="text-xs text-gray-500 mt-1">Total cost of your tattoo</div>
                    </div>

                    <div>
                        <label for="sessionDuration" class="block text-sm font-medium text-gray-700 mb-2">Session Duration (hours)</label>
                        <input type="number" id="sessionDuration" min="0.5" max="12" step="0.5" placeholder="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">How long was your session?</div>
                    </div>
                </div>

                <!-- Service Quality -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="serviceQuality" class="block text-sm font-medium text-gray-700 mb-2">Service Quality</label>
                        <select id="serviceQuality" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="excellent">Excellent (20-25%)</option>
                            <option value="good" selected>Good (15-20%)</option>
                            <option value="standard">Standard (10-15%)</option>
                            <option value="minimum">Minimum (10%)</option>
                        </select>
                    </div>

                    <div>
                        <label for="tattooComplexity" class="block text-sm font-medium text-gray-700 mb-2">Tattoo Complexity</label>
                        <select id="tattooComplexity" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="simple">Simple (Text, basic designs)</option>
                            <option value="moderate" selected>Moderate (Color, medium detail)</option>
                            <option value="complex">Complex (Realistic, intricate)</option>
                            <option value="masterpiece">Masterpiece (Custom art)</option>
                        </select>
                    </div>
                </div>

                <!-- Additional Factors -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="artistExperience" class="block text-sm font-medium text-gray-700 mb-2">Artist Experience</label>
                        <select id="artistExperience" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="apprentice">Apprentice</option>
                            <option value="junior">Junior Artist (1-3 years)</option>
                            <option value="experienced" selected>Experienced (3-10 years)</option>
                            <option value="master">Master Artist (10+ years)</option>
                        </select>
                    </div>

                    <div>
                        <label for="customWork" class="block text-sm font-medium text-gray-700 mb-2">Custom Design?</label>
                        <select id="customWork" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="no">No - Flash/Existing Design</option>
                            <option value="yes" selected>Yes - Custom Design</option>
                        </select>
                    </div>

                    <div>
                        <label for="shopLocation" class="block text-sm font-medium text-gray-700 mb-2">Shop Location</label>
                        <select id="shopLocation" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <option value="small">Small Town</option>
                            <option value="city" selected>City</option>
                            <option value="premium">Premium/High-end Studio</option>
                        </select>
                    </div>
                </div>

                <!-- Special Circumstances -->
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h4 class="font-medium text-indigo-800 mb-3">Special Circumstances</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <label class="flex items-center">
                            <input type="checkbox" id="rushJob" class="mr-2 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm">Rush Job</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="afterHours" class="mr-2 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm">After Hours</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="touchUp" class="mr-2 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm">Touch-up Session</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="specialOccasion" class="mr-2 text-indigo-600 focus:ring-indigo-500">
                            <span class="text-sm">Special Occasion</span>
                        </label>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Tip Amount
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-money-bill-wave mr-2 text-indigo-600" aria-hidden="true"></i>
                        Recommended Tip Amounts
                    </h3>
                    
                    <!-- Tip Options -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div id="tipMinimum" class="tip-card tip-minimum p-4 rounded-lg shadow">
                            <div class="text-center">
                                <div class="text-sm text-gray-600 mb-1">Minimum</div>
                                <div class="text-2xl font-bold text-red-600 mb-1" id="minimumAmount">$30</div>
                                <div class="text-xs text-gray-500" id="minimumPercent">10%</div>
                            </div>
                        </div>
                        <div id="tipStandard" class="tip-card tip-standard p-4 rounded-lg shadow">
                            <div class="text-center">
                                <div class="text-sm text-gray-600 mb-1">Standard</div>
                                <div class="text-2xl font-bold text-yellow-600 mb-1" id="standardAmount">$45</div>
                                <div class="text-xs text-gray-500" id="standardPercent">15%</div>
                            </div>
                        </div>
                        <div id="tipGood" class="tip-card tip-good p-4 rounded-lg shadow border-4 border-blue-300">
                            <div class="text-center">
                                <div class="text-sm text-gray-600 mb-1">Recommended</div>
                                <div class="text-2xl font-bold text-blue-600 mb-1" id="goodAmount">$60</div>
                                <div class="text-xs text-gray-500" id="goodPercent">20%</div>
                            </div>
                        </div>
                        <div id="tipExcellent" class="tip-card tip-excellent p-4 rounded-lg shadow">
                            <div class="text-center">
                                <div class="text-sm text-gray-600 mb-1">Excellent</div>
                                <div class="text-2xl font-bold text-green-600 mb-1" id="excellentAmount">$75</div>
                                <div class="text-xs text-gray-500" id="excellentPercent">25%</div>
                            </div>
                        </div>
                    </div>

                    <!-- Breakdown and Recommendations -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-chart-pie mr-2 text-purple-500" aria-hidden="true"></i>
                                Cost Breakdown
                            </h4>
                            <div id="breakdown" class="space-y-3">
                                <!-- Breakdown will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Tipping Recommendations
                            </h4>
                            <div id="recommendations" class="space-y-3">
                                <!-- Recommendations will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="saveBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-bookmark mr-2" aria-hidden="true"></i>
                            Save for Reference
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            Calculate Another
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tipping Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-info-circle mr-3 text-blue-500" aria-hidden="true"></i>
                Tattoo Tipping Guide
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">When to Tip More (20-25%)</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Exceptional artistic skill and attention to detail</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Custom design work created specifically for you</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Rush job or accommodating special requests</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Excellent customer service and comfort</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Working after hours or on holidays</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Standard Tipping (15-20%)</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Good quality work with professional service</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Clean, sanitary environment and practices</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Artist follows your vision accurately</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Reasonable session time and breaks</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-blue-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Good aftercare advice and support</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Factors That Affect Tips -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-balance-scale mr-3 text-purple-500" aria-hidden="true"></i>
                Factors That Affect Your Tip
            </h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-green-50 p-6 rounded-lg border-l-4 border-green-500">
                    <h3 class="text-lg font-semibold text-green-800 mb-3">Increase Tip For</h3>
                    <ul class="space-y-2 text-green-700 text-sm">
                        <li>• Complex, detailed artwork</li>
                        <li>• Custom design creation</li>
                        <li>• Master-level artistry</li>
                        <li>• Exceptional patience</li>
                        <li>• Perfect execution</li>
                        <li>• Going above and beyond</li>
                    </ul>
                </div>

                <div class="bg-yellow-50 p-6 rounded-lg border-l-4 border-yellow-500">
                    <h3 class="text-lg font-semibold text-yellow-800 mb-3">Standard Tip For</h3>
                    <ul class="space-y-2 text-yellow-700 text-sm">
                        <li>• Good quality work</li>
                        <li>• Professional service</li>
                        <li>• Flash or simple designs</li>
                        <li>• Meeting expectations</li>
                        <li>• Clean, safe environment</li>
                        <li>• Fair pricing</li>
                    </ul>
                </div>

                <div class="bg-red-50 p-6 rounded-lg border-l-4 border-red-500">
                    <h3 class="text-lg font-semibold text-red-800 mb-3">Consider Lower Tip</h3>
                    <ul class="space-y-2 text-red-700 text-sm">
                        <li>• Poor communication</li>
                        <li>• Rushed work quality</li>
                        <li>• Unsanitary conditions</li>
                        <li>• Not following design</li>
                        <li>• Unprofessional behavior</li>
                        <li>• Significant mistakes</li>
                    </ul>
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
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Do I need to tip if the artist owns the shop?</h3>
                    <p class="text-gray-600">While not mandatory, it's still appreciated. Shop owners have overhead costs and still provide personal service. Consider 10-15% for owner-operators.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Should I tip for consultations?</h3>
                    <p class="text-gray-600">For free consultations, tipping isn't expected. If you pay for a consultation or design work, a small tip (10-15%) shows appreciation for their time and expertise.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What about multi-session tattoos?</h3>
                    <p class="text-gray-600">You can tip after each session or give a larger tip at completion. Many clients tip 10-15% per session and give a bonus tip at the final session.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Can I tip with card or should I use cash?</h3>
                    <p class="text-gray-600">Cash is preferred as it goes directly to the artist without processing fees. However, most shops accept card tips if cash isn't available.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class TattooTipCalculator {
            constructor() {
                this.tipRanges = {
                    excellent: { min: 20, max: 25 },
                    good: { min: 15, max: 20 },
                    standard: { min: 10, max: 15 },
                    minimum: { min: 10, max: 10 }
                };
                
                this.complexityMultipliers = {
                    simple: 1.0,
                    moderate: 1.1,
                    complex: 1.2,
                    masterpiece: 1.3
                };

                this.experienceMultipliers = {
                    apprentice: 0.9,
                    junior: 1.0,
                    experienced: 1.1,
                    master: 1.2
                };

                this.init();
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateTip());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('saveBtn')?.addEventListener('click', () => this.saveResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            calculateTip() {
                const data = this.collectInputData();
                
                if (!this.validateInputs(data)) {
                    return;
                }

                const results = this.performCalculations(data);
                this.displayResults(results);
            }

            collectInputData() {
                return {
                    price: parseFloat(document.getElementById('tattooPrice').value) || 0,
                    duration: parseFloat(document.getElementById('sessionDuration').value) || 0,
                    quality: document.getElementById('serviceQuality').value,
                    complexity: document.getElementById('tattooComplexity').value,
                    experience: document.getElementById('artistExperience').value,
                    customWork: document.getElementById('customWork').value === 'yes',
                    location: document.getElementById('shopLocation').value,
                    rushJob: document.getElementById('rushJob').checked,
                    afterHours: document.getElementById('afterHours').checked,
                    touchUp: document.getElementById('touchUp').checked,
                    specialOccasion: document.getElementById('specialOccasion').checked
                };
            }

            validateInputs(data) {
                if (data.price <= 0) {
                    alert('Please enter a valid tattoo price');
                    return false;
                }
                
                if (data.duration <= 0) {
                    alert('Please enter a valid session duration');
                    return false;
                }
                
                return true;
            }

            performCalculations(data) {
                // Base tip percentages
                const baseRange = this.tipRanges[data.quality];
                let baseTipPercent = (baseRange.min + baseRange.max) / 2;

                // Apply multipliers
                const complexityMultiplier = this.complexityMultipliers[data.complexity];
                const experienceMultiplier = this.experienceMultipliers[data.experience];
                
                // Calculate adjusted tip percentage
                let adjustedTipPercent = baseTipPercent * complexityMultiplier * experienceMultiplier;

                // Apply special circumstances
                if (data.customWork) adjustedTipPercent += 2;
                if (data.rushJob) adjustedTipPercent += 3;
                if (data.afterHours) adjustedTipPercent += 5;
                if (data.touchUp && data.price < 100) adjustedTipPercent = Math.max(15, adjustedTipPercent); // Minimum for touch-ups
                if (data.specialOccasion) adjustedTipPercent += 2;

                // Location adjustments
                if (data.location === 'premium') adjustedTipPercent += 2;
                if (data.location === 'small') adjustedTipPercent -= 2;

                // Ensure reasonable bounds
                adjustedTipPercent = Math.max(10, Math.min(30, adjustedTipPercent));

                // Calculate tip amounts for different levels
                const tips = {
                    minimum: Math.round(data.price * 0.10),
                    standard: Math.round(data.price * 0.15),
                    good: Math.round(data.price * 0.20),
                    excellent: Math.round(data.price * 0.25),
                    recommended: Math.round(data.price * (adjustedTipPercent / 100))
                };

                // Generate recommendations
                const recommendations = this.generateRecommendations(data, adjustedTipPercent);

                return {
                    data,
                    tips,
                    recommendedPercent: adjustedTipPercent,
                    recommendations
                };
            }

            generateRecommendations(data, tipPercent) {
                const recommendations = [];

                if (tipPercent > 20) {
                    recommendations.push({
                        type: 'success',
                        icon: 'fas fa-thumbs-up',
                        text: 'This is a generous tip that shows appreciation for exceptional work!'
                    });
                } else if (tipPercent >= 15) {
                    recommendations.push({
                        type: 'info',
                        icon: 'fas fa-balance-scale',
                        text: 'This is a fair tip that reflects good service and quality work.'
                    });
                } else {
                    recommendations.push({
                        type: 'warning',
                        icon: 'fas fa-info-circle',
                        text: 'Consider if this tip reflects the quality of work and service received.'
                    });
                }

                if (data.duration > 6) {
                    recommendations.push({
                        type: 'info',
                        icon: 'fas fa-clock',
                        text: 'Long sessions require extra patience and endurance from your artist.'
                    });
                }

                if (data.customWork) {
                    recommendations.push({
                        type: 'info',
                        icon: 'fas fa-palette',
                        text: 'Custom design work involves additional time and creativity beyond the session.'
                    });
                }

                if (data.touchUp) {
                    recommendations.push({
                        type: 'success',
                        icon: 'fas fa-heart',
                        text: 'Touch-ups show your artist cares about the final result!'
                    });
                }

                // Payment advice
                recommendations.push({
                    type: 'info',
                    icon: 'fas fa-money-bill',
                    text: 'Cash tips are preferred as they go directly to the artist without processing fees.'
                });

                return recommendations;
            }

            displayResults(results) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update tip amounts
                document.getElementById('minimumAmount').textContent = `$${results.tips.minimum}`;
                document.getElementById('minimumPercent').textContent = '10%';
                
                document.getElementById('standardAmount').textContent = `$${results.tips.standard}`;
                document.getElementById('standardPercent').textContent = '15%';
                
                document.getElementById('goodAmount').textContent = `$${results.tips.good}`;
                document.getElementById('goodPercent').textContent = '20%';
                
                document.getElementById('excellentAmount').textContent = `$${results.tips.excellent}`;
                document.getElementById('excellentPercent').textContent = '25%';

                // Highlight recommended tip
                this.highlightRecommendedTip(results.recommendedPercent);

                // Update breakdown
                this.updateBreakdown(results);
                
                // Update recommendations
                this.updateRecommendations(results.recommendations);

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            highlightRecommendedTip(percent) {
                // Remove previous highlights
                document.querySelectorAll('.tip-card').forEach(card => {
                    card.classList.remove('border-4', 'border-indigo-400');
                });

                let recommendedCard;
                if (percent >= 22.5) {
                    recommendedCard = document.getElementById('tipExcellent');
                } else if (percent >= 17.5) {
                    recommendedCard = document.getElementById('tipGood');
                } else if (percent >= 12.5) {
                    recommendedCard = document.getElementById('tipStandard');
                } else {
                    recommendedCard = document.getElementById('tipMinimum');
                }

                recommendedCard.classList.add('border-4', 'border-indigo-400');
            }

            updateBreakdown(results) {
                const data = results.data;
                const breakdownHtml = `
                    <div class="flex justify-between py-2 border-b">
                        <span>Tattoo Price:</span>
                        <span class="font-medium">$${data.price.toFixed(2)}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Session Duration:</span>
                        <span class="font-medium">${data.duration} hours</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Hourly Rate:</span>
                        <span class="font-medium">$${(data.price / data.duration).toFixed(2)}/hr</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Recommended Tip:</span>
                        <span class="font-medium">$${results.tips.recommended}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t-2 border-gray-300 font-semibold">
                        <span>Total Cost:</span>
                        <span class="text-indigo-600">$${(data.price + results.tips.recommended).toFixed(2)}</span>
                    </div>
                `;

                document.getElementById('breakdown').innerHTML = breakdownHtml;
            }

            updateRecommendations(recommendations) {
                const recommendationsHtml = recommendations.map(rec => {
                    const colorClass = rec.type === 'warning' ? 'text-orange-600' : 
                                     rec.type === 'success' ? 'text-green-600' : 'text-blue-600';
                    return `
                        <div class="flex items-start space-x-3">
                            <i class="${rec.icon} ${colorClass} mt-1" aria-hidden="true"></i>
                            <p class="text-sm text-gray-700">${rec.text}</p>
                        </div>
                    `;
                }).join('');

                document.getElementById('recommendations').innerHTML = recommendationsHtml;
            }

            shareResults() {
                const recommendedTip = document.getElementById('goodAmount').textContent;
                const shareText = `Calculated my tattoo tip: ${recommendedTip} for great service! Use this calculator: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My Tattoo Tip Calculation',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Tip calculation copied to clipboard!');
                    });
                }
            }

            saveResults() {
                const results = {
                    tattooPrice: document.getElementById('tattooPrice').value,
                    recommendedTip: document.getElementById('goodAmount').textContent,
                    tipPercentage: '20%',
                    timestamp: new Date().toISOString()
                };
                
                const blob = new Blob([JSON.stringify(results, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'tattoo_tip_calculation.json';
                a.click();
                URL.revokeObjectURL(url);
            }

            resetCalculator() {
                document.getElementById('tattooPrice').value = '';
                document.getElementById('sessionDuration').value = '';
                document.getElementById('serviceQuality').value = 'good';
                document.getElementById('tattooComplexity').value = 'moderate';
                document.getElementById('artistExperience').value = 'experienced';
                document.getElementById('customWork').value = 'yes';
                document.getElementById('shopLocation').value = 'city';
                document.getElementById('rushJob').checked = false;
                document.getElementById('afterHours').checked = false;
                document.getElementById('touchUp').checked = false;
                document.getElementById('specialOccasion').checked = false;
                document.getElementById('resultsSection').classList.add('hidden');
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new TattooTipCalculator();
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