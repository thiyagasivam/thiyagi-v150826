<?php include 'header.php'; ?>

    <title>Invisalign Cost Calculator 2026 - Estimate Treatment Costs | Thiyagi.com</title>
    <meta name="description" content="Invisalign cost calculator 2026 - estimate orthodontic treatment costs based on complexity, duration, location, and insurance coverage for accurate pricing.">
    <meta name="keywords" content="invisalign calculator 2026, orthodontic cost calculator, braces cost estimator, dental treatment calculator, clear aligners cost">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Invisalign Cost Calculator 2026 - Estimate Treatment Costs">
    <meta property="og:description" content="Calculate accurate Invisalign treatment costs based on complexity and location factors.">
    <meta property="og:url" content="https://www.thiyagi.com/invisalign-cost-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Invisalign Cost Calculator 2026 - Estimate Treatment Costs">
    <meta name="twitter:description" content="Calculate Invisalign treatment costs with our comprehensive healthcare calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .dental-card {
        transition: all 0.3s ease;
        border-left: 4px solid #10b981;
    }
    .dental-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #059669;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .smile-pulse {
        animation: smilePulse 2s ease-in-out infinite;
    }
    @keyframes smilePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    .treatment-option {
        background: linear-gradient(45deg, #ecfdf5, #d1fae5);
        border: 1px solid #86efac;
    }
    .treatment-option:hover {
        background: linear-gradient(45deg, #d1fae5, #bbf7d0);
    }
    .cost-breakdown {
        background: linear-gradient(45deg, #f0fdf4, #f7fee7);
        border: 1px solid #bef264;
    }
    .progress-bar {
        transition: width 1s ease-in-out;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Invisalign Cost Calculator 2026",
  "description": "Healthcare calculator for Invisalign treatment cost estimation based on complexity, duration, location, and insurance coverage factors.",
  "url": "https://www.thiyagi.com/invisalign-cost-calculator",
  "applicationCategory": "HealthApplication",
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
                        <i class="fas fa-smile text-2xl text-emerald-600 smile-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Invisalign Cost Calculator</h1>
                        <p class="text-emerald-100">Estimate your orthodontic treatment costs</p>
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
                <li class="text-gray-900 font-medium">Invisalign Cost Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Invisalign Treatment Cost Estimator</h2>
                <p class="text-emerald-100">Get an estimate for your clear aligner treatment</p>
            </div>
            
            <div class="p-6">
                <form id="invisalignForm" class="space-y-6">
                    <!-- Treatment Details -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="caseComplexity" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-puzzle-piece text-emerald-500 mr-2"></i>
                                    Case Complexity
                                </label>
                                <select id="caseComplexity" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="simple">Simple (Minor crowding/spacing)</option>
                                    <option value="moderate">Moderate (General alignment issues)</option>
                                    <option value="complex">Complex (Severe misalignment)</option>
                                    <option value="comprehensive">Comprehensive (Full treatment)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="treatmentDuration" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-calendar-alt text-emerald-500 mr-2"></i>
                                    Estimated Treatment Duration
                                </label>
                                <select id="treatmentDuration" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="6">6-12 months (Express)</option>
                                    <option value="12">12-18 months (Moderate)</option>
                                    <option value="18">18-24 months (Standard)</option>
                                    <option value="24">24+ months (Complex)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="age" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-user text-emerald-500 mr-2"></i>
                                    Patient Age Group
                                </label>
                                <select id="age" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="teen">Teen (12-17 years)</option>
                                    <option value="adult">Adult (18-35 years)</option>
                                    <option value="mature">Mature Adult (35+ years)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-map-marker-alt text-emerald-500 mr-2"></i>
                                    Geographic Location
                                </label>
                                <select id="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="urban-high">Major City (High Cost)</option>
                                    <option value="urban-mid">Mid-size City</option>
                                    <option value="suburban">Suburban Area</option>
                                    <option value="rural">Rural Area (Lower Cost)</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="providerType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-user-md text-emerald-500 mr-2"></i>
                                    Provider Type
                                </label>
                                <select id="providerType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="orthodontist">Orthodontist (Specialist)</option>
                                    <option value="general">General Dentist</option>
                                    <option value="premium">Premium/Elite Provider</option>
                                    <option value="corporate">Corporate Chain</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="insurance" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-shield-alt text-emerald-500 mr-2"></i>
                                    Insurance Coverage
                                </label>
                                <select id="insurance" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="none">No Insurance</option>
                                    <option value="basic">Basic Coverage (50%)</option>
                                    <option value="premium">Premium Coverage (70%)</option>
                                    <option value="orthodontic">Orthodontic Specific</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="paymentPlan" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-credit-card text-emerald-500 mr-2"></i>
                                    Payment Plan
                                </label>
                                <select id="paymentPlan" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="full">Full Payment (Discount)</option>
                                    <option value="monthly">Monthly Payments</option>
                                    <option value="extended">Extended Payment Plan</option>
                                    <option value="flexible">Flexible Financing</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="retainers" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-teeth text-emerald-500 mr-2"></i>
                                    Retainers Included
                                </label>
                                <select id="retainers" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
                                    <option value="yes">Yes (Included in price)</option>
                                    <option value="no">No (Additional cost)</option>
                                    <option value="upgrade">Upgrade to Permanent</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-plus text-emerald-500 mr-2"></i>
                            Additional Services & Options
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="attachments" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Attachments/Buttons (+$200)</span>
                                </label>
                            </div>
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="refinements" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Mid-course Refinements (+$300)</span>
                                </label>
                            </div>
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="whitening" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Teeth Whitening (+$250)</span>
                                </label>
                            </div>
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="accelerated" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Accelerated Treatment (+$500)</span>
                                </label>
                            </div>
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="premium" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Premium Package (+$400)</span>
                                </label>
                            </div>
                            <div class="treatment-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="consultation" class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">3D Consultation (+$150)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateInvisalignCost()" 
                                class="w-full bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-bold py-4 px-6 rounded-lg hover:from-emerald-600 hover:to-emerald-700 focus:ring-4 focus:ring-emerald-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Invisalign Cost
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Cost Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-receipt text-emerald-500 mr-3"></i>
                    Treatment Cost Breakdown
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="dental-card bg-blue-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-blue-800 mb-4">Base Treatment</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Base Cost:</span>
                                <span id="baseCost" class="font-medium text-blue-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Complexity Factor:</span>
                                <span id="complexityFactor" class="font-medium text-blue-800">1.0x</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Duration Adjustment:</span>
                                <span id="durationCost" class="font-medium text-blue-800">$0</span>
                            </div>
                        </div>
                    </div>
                    <div class="dental-card bg-green-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">Location & Provider</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Location Factor:</span>
                                <span id="locationFactor" class="font-medium text-green-800">1.0x</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Provider Premium:</span>
                                <span id="providerCost" class="font-medium text-green-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Additional Services:</span>
                                <span id="additionalCost" class="font-medium text-green-800">$0</span>
                            </div>
                        </div>
                    </div>
                    <div class="dental-card bg-purple-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-purple-800 mb-4">Insurance & Payment</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Insurance Coverage:</span>
                                <span id="insuranceCoverage" class="font-medium text-purple-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Payment Discount:</span>
                                <span id="paymentDiscount" class="font-medium text-purple-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Final Adjustment:</span>
                                <span id="finalAdjustment" class="font-medium text-purple-800">$0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Cost -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-dollar-sign text-emerald-500 mr-3"></i>
                    Treatment Cost Summary
                </h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="cost-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Total Treatment Cost</h4>
                        <p id="totalCost" class="text-3xl font-bold text-gray-900">$0</p>
                        <p class="text-xs text-gray-600 mt-1">Before insurance</p>
                    </div>
                    <div class="cost-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Your Out-of-Pocket</h4>
                        <p id="outOfPocket" class="text-3xl font-bold text-emerald-600">$0</p>
                        <p class="text-xs text-gray-600 mt-1">After insurance</p>
                    </div>
                    <div class="cost-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Monthly Payment</h4>
                        <p id="monthlyPayment" class="text-3xl font-bold text-blue-600">$0</p>
                        <p class="text-xs text-gray-600 mt-1">If financed</p>
                    </div>
                    <div class="cost-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Cost per Month</h4>
                        <p id="costPerMonth" class="text-3xl font-bold text-purple-600">$0</p>
                        <p class="text-xs text-gray-600 mt-1">Treatment duration</p>
                    </div>
                </div>
            </div>

            <!-- Treatment Timeline -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-timeline text-emerald-500 mr-3"></i>
                    Treatment Timeline & Details
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Treatment Duration:</span>
                            <span id="treatmentTime" class="font-bold text-emerald-600">12-18 months</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Number of Aligners:</span>
                            <span id="alignerCount" class="font-bold text-emerald-600">25-35 sets</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Office Visits:</span>
                            <span id="officeVisits" class="font-bold text-emerald-600">8-12 visits</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Wear Time per Day:</span>
                            <span id="wearTime" class="font-bold text-emerald-600">20-22 hours</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="p-4 bg-emerald-50 rounded-lg">
                            <h4 class="font-semibold text-emerald-800 mb-2">What's Included</h4>
                            <ul id="includedItems" class="text-sm text-emerald-700 space-y-1">
                                <!-- Populated by JavaScript -->
                            </ul>
                        </div>
                        <div class="p-4 bg-blue-50 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-2">Payment Options</h4>
                            <div id="paymentOptions" class="text-sm text-blue-700 space-y-1">
                                <!-- Populated by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Estimate</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyEstimate()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Estimate
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class InvisalignCalculator {
            constructor() {
                this.results = null;
                this.baseCosts = {
                    simple: 3000,
                    moderate: 4500,
                    complex: 6000,
                    comprehensive: 7500
                };
                this.locationMultipliers = {
                    'urban-high': 1.3,
                    'urban-mid': 1.1,
                    'suburban': 1.0,
                    'rural': 0.85
                };
                this.providerMultipliers = {
                    orthodontist: 1.2,
                    general: 1.0,
                    premium: 1.4,
                    corporate: 0.9
                };
                this.insuranceCoverage = {
                    none: 0,
                    basic: 0.5,
                    premium: 0.7,
                    orthodontic: 0.6
                };
                this.paymentDiscounts = {
                    full: 0.05,
                    monthly: 0,
                    extended: -0.02,
                    flexible: -0.01
                };
            }

            calculate() {
                const caseComplexity = document.getElementById('caseComplexity').value;
                const treatmentDuration = parseInt(document.getElementById('treatmentDuration').value);
                const age = document.getElementById('age').value;
                const location = document.getElementById('location').value;
                const providerType = document.getElementById('providerType').value;
                const insurance = document.getElementById('insurance').value;
                const paymentPlan = document.getElementById('paymentPlan').value;
                const retainers = document.getElementById('retainers').value;

                // Base cost calculation
                const baseCost = this.baseCosts[caseComplexity];

                // Duration adjustments
                let durationMultiplier = 1.0;
                if (treatmentDuration >= 24) durationMultiplier = 1.2;
                else if (treatmentDuration >= 18) durationMultiplier = 1.1;
                else if (treatmentDuration <= 6) durationMultiplier = 0.8;

                // Age adjustment
                let ageMultiplier = 1.0;
                if (age === 'teen') ageMultiplier = 0.9;
                else if (age === 'mature') ageMultiplier = 1.05;

                // Location and provider adjustments
                const locationMultiplier = this.locationMultipliers[location];
                const providerMultiplier = this.providerMultipliers[providerType];

                // Additional services
                let additionalCost = 0;
                if (document.getElementById('attachments').checked) additionalCost += 200;
                if (document.getElementById('refinements').checked) additionalCost += 300;
                if (document.getElementById('whitening').checked) additionalCost += 250;
                if (document.getElementById('accelerated').checked) additionalCost += 500;
                if (document.getElementById('premium').checked) additionalCost += 400;
                if (document.getElementById('consultation').checked) additionalCost += 150;

                // Retainer costs
                if (retainers === 'no') additionalCost += 400;
                else if (retainers === 'upgrade') additionalCost += 600;

                // Calculate total before insurance
                const subtotal = (baseCost * durationMultiplier * ageMultiplier * locationMultiplier * providerMultiplier) + additionalCost;

                // Apply payment discount
                const paymentDiscount = subtotal * this.paymentDiscounts[paymentPlan];
                const totalCost = subtotal + paymentDiscount;

                // Calculate insurance coverage
                const maxCoverage = 2000; // Typical orthodontic maximum
                const coverageRate = this.insuranceCoverage[insurance];
                const insuranceCoverage = Math.min(totalCost * coverageRate, maxCoverage);
                const outOfPocket = totalCost - insuranceCoverage;

                // Calculate monthly payments
                const treatmentMonths = treatmentDuration;
                const monthlyPayment = outOfPocket / treatmentMonths;
                const costPerMonth = totalCost / treatmentMonths;

                // Calculate treatment details
                const alignerCount = Math.ceil(treatmentDuration * 2.5); // Rough estimate
                const officeVisits = Math.ceil(treatmentDuration / 2);

                this.results = {
                    caseComplexity,
                    treatmentDuration,
                    age,
                    location,
                    providerType,
                    insurance,
                    paymentPlan,
                    retainers,
                    baseCost: Math.round(baseCost),
                    complexityFactor: durationMultiplier.toFixed(1),
                    durationCost: Math.round(baseCost * (durationMultiplier - 1)),
                    locationFactor: locationMultiplier.toFixed(1),
                    providerCost: Math.round(baseCost * (providerMultiplier - 1)),
                    additionalCost: Math.round(additionalCost),
                    totalCost: Math.round(totalCost),
                    insuranceCoverage: Math.round(insuranceCoverage),
                    paymentDiscount: Math.round(Math.abs(paymentDiscount)),
                    finalAdjustment: Math.round(paymentDiscount),
                    outOfPocket: Math.round(outOfPocket),
                    monthlyPayment: Math.round(monthlyPayment),
                    costPerMonth: Math.round(costPerMonth),
                    alignerCount,
                    officeVisits,
                    treatmentTime: this.formatDuration(treatmentDuration)
                };

                this.displayResults();
            }

            formatDuration(months) {
                if (months <= 6) return '6-12 months';
                if (months <= 12) return '12-18 months';
                if (months <= 18) return '18-24 months';
                return '24+ months';
            }

            displayResults() {
                // Cost breakdown
                document.getElementById('baseCost').textContent = `$${this.results.baseCost.toLocaleString()}`;
                document.getElementById('complexityFactor').textContent = `${this.results.complexityFactor}x`;
                document.getElementById('durationCost').textContent = `$${this.results.durationCost.toLocaleString()}`;
                document.getElementById('locationFactor').textContent = `${this.results.locationFactor}x`;
                document.getElementById('providerCost').textContent = `$${this.results.providerCost.toLocaleString()}`;
                document.getElementById('additionalCost').textContent = `$${this.results.additionalCost.toLocaleString()}`;
                document.getElementById('insuranceCoverage').textContent = `$${this.results.insuranceCoverage.toLocaleString()}`;
                document.getElementById('paymentDiscount').textContent = `$${this.results.paymentDiscount.toLocaleString()}`;
                document.getElementById('finalAdjustment').textContent = `$${this.results.finalAdjustment.toLocaleString()}`;

                // Total cost summary
                document.getElementById('totalCost').textContent = `$${this.results.totalCost.toLocaleString()}`;
                document.getElementById('outOfPocket').textContent = `$${this.results.outOfPocket.toLocaleString()}`;
                document.getElementById('monthlyPayment').textContent = `$${this.results.monthlyPayment.toLocaleString()}`;
                document.getElementById('costPerMonth').textContent = `$${this.results.costPerMonth.toLocaleString()}`;

                // Treatment details
                document.getElementById('treatmentTime').textContent = this.results.treatmentTime;
                document.getElementById('alignerCount').textContent = `${this.results.alignerCount} sets`;
                document.getElementById('officeVisits').textContent = `${this.results.officeVisits} visits`;
                document.getElementById('wearTime').textContent = '20-22 hours';

                // What's included
                const includedItems = this.getIncludedItems();
                const includedDiv = document.getElementById('includedItems');
                includedDiv.innerHTML = includedItems.map(item => `<li class="flex items-center"><i class="fas fa-check text-emerald-500 mr-2"></i>${item}</li>`).join('');

                // Payment options
                const paymentOptions = this.getPaymentOptions();
                const paymentDiv = document.getElementById('paymentOptions');
                paymentDiv.innerHTML = paymentOptions.map(option => `<div class="flex items-center"><i class="fas fa-credit-card text-blue-500 mr-2"></i>${option}</div>`).join('');

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            getIncludedItems() {
                const items = [
                    'Initial consultation and 3D scan',
                    `${this.results.alignerCount} custom aligners`,
                    `${this.results.officeVisits} progress check-ups`,
                    'Treatment monitoring'
                ];

                if (this.results.retainers === 'yes') {
                    items.push('Retainers (1 set)');
                }

                if (document.getElementById('attachments').checked) {
                    items.push('Tooth attachments/buttons');
                }

                return items;
            }

            getPaymentOptions() {
                const options = [];

                if (this.results.paymentPlan === 'full') {
                    options.push(`Full payment discount: $${this.results.paymentDiscount}`);
                }

                options.push(`Monthly payments: $${this.results.monthlyPayment}/month`);
                options.push('0% APR financing available');
                options.push('HSA/FSA eligible');

                if (this.results.insurance !== 'none') {
                    options.push(`Insurance covers: $${this.results.insuranceCoverage}`);
                }

                return options;
            }

            getEstimateText() {
                return `Invisalign estimate: $${this.results.outOfPocket.toLocaleString()} out-of-pocket (${this.results.treatmentTime} treatment)`;
            }
        }

        const invisalignCalc = new InvisalignCalculator();

        function calculateInvisalignCost() {
            invisalignCalc.calculate();
        }

        function shareOnFacebook() {
            if (!invisalignCalc.results) return;
            
            const text = `${invisalignCalc.getEstimateText()}. Get your estimate at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!invisalignCalc.results) return;
            
            const text = `${invisalignCalc.getEstimateText()} 😊 Get yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyEstimate() {
            if (!invisalignCalc.results) return;
            
            const text = `Invisalign Cost Estimate:
${invisalignCalc.getEstimateText()}
Total Treatment Cost: $${invisalignCalc.results.totalCost.toLocaleString()}
Monthly Payment: $${invisalignCalc.results.monthlyPayment.toLocaleString()}
Treatment Duration: ${invisalignCalc.results.treatmentTime}

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Estimate copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>