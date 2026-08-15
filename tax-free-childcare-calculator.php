<?php include 'header.php'; ?>

    <title>Tax-Free Childcare Calculator 2026 - Government Savings Calculator | Thiyagi.com</title>
    <meta name="description" content="Tax-free childcare calculator 2026 - calculate government savings, eligibility, and benefits for tax-free childcare schemes in UK, US, and other countries.">
    <meta name="keywords" content="tax-free childcare calculator 2026, childcare vouchers, government childcare savings, tax credits, dependent care FSA">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Tax-Free Childcare Calculator 2026 - Government Savings Calculator">
    <meta property="og:description" content="Calculate tax-free childcare savings and government benefits for working families.">
    <meta property="og:url" content="https://www.thiyagi.com/tax-free-childcare-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tax-Free Childcare Calculator 2026 - Government Savings Calculator">
    <meta name="twitter:description" content="Calculate childcare savings and government benefits for families.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .savings-card {
        transition: all 0.3s ease;
        border-left: 4px solid #10b981;
    }
    .savings-card:hover {
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
    .money-pulse {
        animation: moneyPulse 2s ease-in-out infinite;
    }
    @keyframes moneyPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    .eligibility-check {
        background: linear-gradient(45deg, #ecfdf5, #d1fae5);
        border: 1px solid #6ee7b7;
        border-radius: 10px;
    }
    .benefit-comparison {
        background: linear-gradient(45deg, #f0f9ff, #e0f2fe);
        border: 1px solid #7dd3fc;
        border-radius: 10px;
    }
    .savings-visual {
        background: linear-gradient(90deg, #10b981, #34d399, #10b981);
        border-radius: 20px;
        position: relative;
        overflow: hidden;
    }
    .savings-bar {
        transition: width 1s ease-in-out;
        background: linear-gradient(90deg, #fbbf24, #f59e0b);
        height: 100%;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
    }
    .country-flag {
        width: 24px;
        height: 16px;
        border-radius: 2px;
        display: inline-block;
        margin-right: 8px;
    }
    .uk-flag { background: linear-gradient(45deg, #012169, #c8102e); }
    .us-flag { background: linear-gradient(45deg, #b22234, #3c3b6e); }
    .ca-flag { background: linear-gradient(45deg, #ff0000, #ffffff); }
    .au-flag { background: linear-gradient(45deg, #012169, #ffffff); }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Tax-Free Childcare Calculator 2026",
  "description": "Financial calculator for tax-free childcare savings and eligibility in various countries.",
  "url": "https://www.thiyagi.com/tax-free-childcare-calculator",
  "applicationCategory": "FinanceApplication",
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
                        <i class="fas fa-baby text-2xl text-green-600 money-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Tax-Free Childcare Calculator</h1>
                        <p class="text-green-100">Government savings & benefits calculator</p>
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
                <li class="text-gray-900 font-medium">Tax-Free Childcare Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Childcare Savings Calculator</h2>
                <p class="text-green-100">Calculate tax-free childcare benefits and government savings</p>
            </div>
            
            <div class="p-6">
                <form id="childcareForm" class="space-y-6">
                    <!-- Country Selection -->
                    <div class="form-group">
                        <label for="country" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-globe text-green-500 mr-2"></i>
                            Country/Region
                        </label>
                        <select id="country" onchange="updateCountrySpecificFields()" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <option value="uk">🇬🇧 United Kingdom</option>
                            <option value="us">🇺🇸 United States</option>
                            <option value="ca">🇨🇦 Canada</option>
                            <option value="au">🇦🇺 Australia</option>
                            <option value="ie">🇮🇪 Ireland</option>
                        </select>
                    </div>

                    <!-- Family Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="familyType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-users text-green-500 mr-2"></i>
                                    Family Structure
                                </label>
                                <select id="familyType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="single">Single Parent</option>
                                    <option value="couple" selected>Couple/Married</option>
                                    <option value="separated">Separated/Divorced</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="children" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-child text-green-500 mr-2"></i>
                                    Number of Children Needing Care
                                </label>
                                <select id="children" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="1" selected>1 child</option>
                                    <option value="2">2 children</option>
                                    <option value="3">3 children</option>
                                    <option value="4">4 children</option>
                                    <option value="5">5+ children</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="childAge" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-birthday-cake text-green-500 mr-2"></i>
                                    Youngest Child's Age
                                </label>
                                <select id="childAge" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="0">Under 1 year</option>
                                    <option value="1">1 year</option>
                                    <option value="2" selected>2 years</option>
                                    <option value="3">3 years</option>
                                    <option value="4">4 years</option>
                                    <option value="5">5-11 years</option>
                                    <option value="12">12+ years</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="parentIncome1" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-money-bill-wave text-green-500 mr-2"></i>
                                    <span id="parent1Label">Primary Parent Annual Income</span>
                                </label>
                                <input type="number" id="parentIncome1" min="0" placeholder="35000" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1" id="currency1">Before tax income</p>
                            </div>

                            <div id="parent2Section" class="form-group">
                                <label for="parentIncome2" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-money-bill-wave text-green-500 mr-2"></i>
                                    Partner Annual Income
                                </label>
                                <input type="number" id="parentIncome2" min="0" placeholder="28000"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1" id="currency2">Before tax income (leave blank if not applicable)</p>
                            </div>

                            <div class="form-group">
                                <label for="childcareCost" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-calculator text-green-500 mr-2"></i>
                                    Monthly Childcare Costs
                                </label>
                                <input type="number" id="childcareCost" min="0" placeholder="800" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1" id="currencyCare">Total monthly childcare expenses</p>
                            </div>
                        </div>
                    </div>

                    <!-- Childcare Details -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Childcare Details</h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="form-group">
                                    <label for="careType" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-school text-green-500 mr-2"></i>
                                        Type of Childcare
                                    </label>
                                    <select id="careType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                        <option value="nursery">Nursery/Daycare Center</option>
                                        <option value="childminder">Registered Childminder</option>
                                        <option value="nanny">Nanny (in your home)</option>
                                        <option value="family">Family Member (paid)</option>
                                        <option value="afterschool">After School Care</option>
                                        <option value="holiday">Holiday/Vacation Care</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="workingHours" class="block text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-clock text-green-500 mr-2"></i>
                                        Hours per Week (Both Parents)
                                    </label>
                                    <select id="workingHours" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                        <option value="16">16-24 hours</option>
                                        <option value="25">25-34 hours</option>
                                        <option value="35" selected>35-40 hours (Full-time)</option>
                                        <option value="40">40+ hours</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="form-group">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="specialNeeds" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                        <span class="text-sm text-gray-700">Child has special needs/disabilities</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="currentVouchers" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                        <span class="text-sm text-gray-700" id="vouchersLabel">Currently receiving childcare vouchers</span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="universalCredit" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                        <span class="text-sm text-gray-700" id="benefitsLabel">Receiving government benefits</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateChildcareSavings()" 
                                class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-lg hover:from-green-600 hover:to-green-700 focus:ring-4 focus:ring-green-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Tax-Free Childcare Savings
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Eligibility Check -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Eligibility Status
                </h3>
                <div id="eligibilityResult" class="eligibility-check p-6">
                    <!-- Populated by JavaScript -->
                </div>
            </div>

            <!-- Savings Overview -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-piggy-bank text-green-500 mr-3"></i>
                    Your Potential Savings
                </h3>
                
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <div class="savings-card bg-blue-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">Monthly Savings</h4>
                        <p id="monthlySavings" class="text-4xl font-bold text-blue-900">£0</p>
                        <p class="text-sm text-blue-600 mt-1">per month</p>
                    </div>
                    <div class="savings-card bg-green-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-green-800 mb-2">Annual Savings</h4>
                        <p id="annualSavings" class="text-4xl font-bold text-green-900">£0</p>
                        <p class="text-sm text-green-600 mt-1">per year</p>
                    </div>
                    <div class="savings-card bg-purple-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-purple-800 mb-2">Savings Rate</h4>
                        <p id="savingsRate" class="text-4xl font-bold text-purple-900">0%</p>
                        <p class="text-sm text-purple-600 mt-1">of childcare costs</p>
                    </div>
                </div>

                <!-- Visual Savings Representation -->
                <div class="savings-visual h-16 mb-4">
                    <div class="savings-bar" id="savingsBar" style="width: 0%;">
                        <span id="savingsText">Calculating...</span>
                    </div>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span>Current Cost</span>
                    <span id="effectiveCost">After Tax-Free Benefits</span>
                </div>
            </div>

            <!-- Benefit Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-green-500 mr-3"></i>
                    Benefit Breakdown
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3" id="schemeTitle">Tax-Free Childcare</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Government Contribution:</span>
                                <span id="govContribution" class="font-medium">£0/month</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Tax Relief:</span>
                                <span id="taxRelief" class="font-medium">£0/month</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Maximum Annual Benefit:</span>
                                <span id="maxBenefit" class="font-medium">£0</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="text-sm font-semibold text-gray-700">Total Monthly Savings:</span>
                                <span id="totalMonthlySavings" class="font-bold text-green-600">£0</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3">Cost Comparison</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Original Monthly Cost:</span>
                                <span id="originalCost" class="font-medium">£0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">After Benefits:</span>
                                <span id="afterBenefits" class="font-medium text-green-600">£0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Your Monthly Payment:</span>
                                <span id="yourPayment" class="font-medium">£0</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="text-sm font-semibold text-gray-700">Effective Savings Rate:</span>
                                <span id="effectiveRate" class="font-bold text-green-600">0%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison with Alternatives -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-balance-scale text-green-500 mr-3"></i>
                    Alternative Options Comparison
                </h3>
                
                <div class="benefit-comparison p-6">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-2 font-semibold text-gray-800">Scheme</th>
                                    <th class="text-right py-2 font-semibold text-gray-800">Monthly Savings</th>
                                    <th class="text-right py-2 font-semibold text-gray-800">Annual Savings</th>
                                    <th class="text-center py-2 font-semibold text-gray-800">Status</th>
                                </tr>
                            </thead>
                            <tbody id="comparisonTable">
                                <!-- Populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Action Steps -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-list-check text-green-500 mr-3"></i>
                    Next Steps & Recommendations
                </h3>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Action Steps</h4>
                        <div id="actionSteps" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Important Information</h4>
                        <div id="importantInfo" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Savings Calculation</h3>
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
        class ChildcareCalculator {
            constructor() {
                this.results = null;
                this.countryConfig = {
                    uk: {
                        currency: '£',
                        taxFreeRate: 0.25, // 25% government contribution
                        maxAnnualBenefit: 2000, // per child
                        minIncome: 6420, // per year
                        maxIncome: 100000, // threshold for reduced benefits
                        workingHoursMin: 16,
                        schemeName: 'Tax-Free Childcare',
                        vouchersName: 'Childcare Vouchers',
                        benefitsName: 'Universal Credit/Tax Credits'
                    },
                    us: {
                        currency: '$',
                        taxFreeRate: 0.30, // FSA tax savings (approx)
                        maxAnnualBenefit: 5000, // Dependent Care FSA limit
                        minIncome: 0,
                        maxIncome: 200000,
                        workingHoursMin: 20,
                        schemeName: 'Dependent Care FSA',
                        vouchersName: 'Employer Benefits',
                        benefitsName: 'TANF/SNAP Benefits'
                    },
                    ca: {
                        currency: 'C$',
                        taxFreeRate: 0.20,
                        maxAnnualBenefit: 8000,
                        minIncome: 0,
                        maxIncome: 150000,
                        workingHoursMin: 15,
                        schemeName: 'Child Care Expense Deduction',
                        vouchersName: 'Employer Child Care',
                        benefitsName: 'Canada Child Benefit'
                    },
                    au: {
                        currency: 'A$',
                        taxFreeRate: 0.50, // CCS subsidy rate
                        maxAnnualBenefit: 10560,
                        minIncome: 0,
                        maxIncome: 186958,
                        workingHoursMin: 8,
                        schemeName: 'Child Care Subsidy',
                        vouchersName: 'Salary Sacrifice',
                        benefitsName: 'Family Tax Benefit'
                    },
                    ie: {
                        currency: '€',
                        taxFreeRate: 0.20,
                        maxAnnualBenefit: 1200,
                        minIncome: 0,
                        maxIncome: 60000,
                        workingHoursMin: 15,
                        schemeName: 'Tax Relief on Childcare',
                        vouchersName: 'Benefit in Kind',
                        benefitsName: 'Child Benefit'
                    }
                };
            }

            calculate() {
                const country = document.getElementById('country').value;
                const config = this.countryConfig[country];
                
                const familyType = document.getElementById('familyType').value;
                const children = parseInt(document.getElementById('children').value);
                const childAge = parseInt(document.getElementById('childAge').value);
                const parentIncome1 = parseFloat(document.getElementById('parentIncome1').value) || 0;
                const parentIncome2 = parseFloat(document.getElementById('parentIncome2').value) || 0;
                const childcareCost = parseFloat(document.getElementById('childcareCost').value) || 0;
                const careType = document.getElementById('careType').value;
                const workingHours = parseInt(document.getElementById('workingHours').value);
                const specialNeeds = document.getElementById('specialNeeds').checked;
                const currentVouchers = document.getElementById('currentVouchers').checked;
                const universalCredit = document.getElementById('universalCredit').checked;

                if (!parentIncome1 || !childcareCost) {
                    alert('Please provide income and childcare cost information.');
                    return;
                }

                const totalIncome = parentIncome1 + (familyType !== 'single' ? parentIncome2 : 0);
                const annualChildcareCost = childcareCost * 12;

                // Check basic eligibility
                const eligibility = this.checkEligibility(country, totalIncome, workingHours, childAge);
                
                // Calculate savings
                const savings = this.calculateSavings(config, annualChildcareCost, children, totalIncome, specialNeeds);
                
                // Calculate alternatives
                const alternatives = this.calculateAlternatives(config, annualChildcareCost, totalIncome, currentVouchers);

                this.results = {
                    country,
                    config,
                    familyType,
                    children,
                    childAge,
                    totalIncome,
                    childcareCost,
                    annualChildcareCost,
                    careType,
                    workingHours,
                    specialNeeds,
                    eligibility,
                    savings,
                    alternatives
                };

                this.displayResults();
            }

            checkEligibility(country, income, workingHours, childAge) {
                const config = this.countryConfig[country];
                
                let eligible = true;
                let reasons = [];
                let warnings = [];

                // Income check
                if (income < config.minIncome) {
                    eligible = false;
                    reasons.push(`Income below minimum threshold (${config.currency}${config.minIncome.toLocaleString()}/year)`);
                }

                if (income > config.maxIncome) {
                    warnings.push('Income above threshold - benefits may be reduced');
                }

                // Working hours check
                if (workingHours < config.workingHoursMin) {
                    eligible = false;
                    reasons.push(`Must work at least ${config.workingHoursMin} hours per week`);
                }

                // Age check (country-specific)
                if (country === 'uk' && childAge > 11) {
                    eligible = false;
                    reasons.push('Tax-Free Childcare only available for children up to 11 years (or 17 with disabilities)');
                }

                return { eligible, reasons, warnings };
            }

            calculateSavings(config, annualCost, children, income, specialNeeds) {
                let maxBenefit = config.maxAnnualBenefit * children;
                
                // Special needs children may get higher benefits
                if (specialNeeds && config.currency === '£') {
                    maxBenefit = 4000 * children; // UK: £4000 for disabled children
                }

                // Calculate potential benefit based on cost and rate
                let potentialBenefit = annualCost * config.taxFreeRate;
                
                // Cap at maximum benefit
                const actualBenefit = Math.min(potentialBenefit, maxBenefit);
                
                // Income-based reductions for high earners
                if (income > config.maxIncome * 0.8) {
                    const reduction = Math.min(0.5, (income - config.maxIncome * 0.8) / (config.maxIncome * 0.2));
                    potentialBenefit *= (1 - reduction * 0.5);
                }

                const monthlySavings = actualBenefit / 12;
                const annualSavings = actualBenefit;
                const savingsRate = (actualBenefit / annualCost) * 100;

                // Government contribution calculation
                const govContribution = config.taxFreeRate === 0.25 ? actualBenefit : actualBenefit * 0.4;
                const taxRelief = actualBenefit - govContribution;

                return {
                    monthlySavings,
                    annualSavings,
                    savingsRate,
                    govContribution,
                    taxRelief,
                    maxBenefit,
                    effectiveCost: annualCost - actualBenefit
                };
            }

            calculateAlternatives(config, annualCost, income, currentVouchers) {
                const alternatives = [];

                // Childcare vouchers/salary sacrifice
                const voucherSavings = Math.min(annualCost * 0.3, 2400); // Typical savings
                alternatives.push({
                    name: config.vouchersName,
                    monthlySavings: voucherSavings / 12,
                    annualSavings: voucherSavings,
                    status: currentVouchers ? 'Current' : 'Available',
                    eligible: income > 10000
                });

                // Tax credits/universal credit
                const creditSavings = config.currency === '£' ? Math.min(annualCost * 0.85, 15000) : annualCost * 0.2;
                alternatives.push({
                    name: config.benefitsName,
                    monthlySavings: creditSavings / 12,
                    annualSavings: creditSavings,
                    status: income < 40000 ? 'Potentially Available' : 'Not Eligible',
                    eligible: income < 40000
                });

                // Free hours (UK specific)
                if (config.currency === '£') {
                    alternatives.push({
                        name: 'Free Childcare Hours',
                        monthlySavings: 500,
                        annualSavings: 6000,
                        status: 'Available at age 2/3',
                        eligible: true
                    });
                }

                return alternatives;
            }

            displayResults() {
                const r = this.results;

                // Update currency symbols
                this.updateCurrencyDisplays(r.config.currency);

                // Eligibility status
                const eligibilityDiv = document.getElementById('eligibilityResult');
                if (r.eligibility.eligible) {
                    eligibilityDiv.innerHTML = `
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-check text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-green-800">✅ You're Eligible!</h4>
                                <p class="text-green-700">You qualify for ${r.config.schemeName}</p>
                            </div>
                        </div>
                        ${r.eligibility.warnings.length > 0 ? `
                            <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-3">
                                <h5 class="font-semibold text-yellow-800 mb-2">Warnings:</h5>
                                ${r.eligibility.warnings.map(w => `<p class="text-yellow-700 text-sm">⚠️ ${w}</p>`).join('')}
                            </div>
                        ` : ''}
                    `;
                } else {
                    eligibilityDiv.innerHTML = `
                        <div class="flex items-center space-x-3 mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-times text-red-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-red-800">❌ Not Currently Eligible</h4>
                                <p class="text-red-700">You don't meet the requirements for ${r.config.schemeName}</p>
                            </div>
                        </div>
                        <div class="bg-red-50 border border-red-200 rounded-lg p-3">
                            <h5 class="font-semibold text-red-800 mb-2">Reasons:</h5>
                            ${r.eligibility.reasons.map(reason => `<p class="text-red-700 text-sm">• ${reason}</p>`).join('')}
                        </div>
                    `;
                }

                // Savings overview
                document.getElementById('monthlySavings').textContent = 
                    r.config.currency + Math.round(r.savings.monthlySavings).toLocaleString();
                document.getElementById('annualSavings').textContent = 
                    r.config.currency + Math.round(r.savings.annualSavings).toLocaleString();
                document.getElementById('savingsRate').textContent = r.savings.savingsRate.toFixed(1) + '%';

                // Savings bar
                const savingsBar = document.getElementById('savingsBar');
                const percentage = Math.min(r.savings.savingsRate, 100);
                setTimeout(() => {
                    savingsBar.style.width = percentage + '%';
                    document.getElementById('savingsText').textContent = percentage.toFixed(1) + '% Savings';
                }, 500);

                // Benefit breakdown
                document.getElementById('schemeTitle').textContent = r.config.schemeName;
                document.getElementById('govContribution').textContent = 
                    r.config.currency + Math.round(r.savings.govContribution / 12).toLocaleString() + '/month';
                document.getElementById('taxRelief').textContent = 
                    r.config.currency + Math.round(r.savings.taxRelief / 12).toLocaleString() + '/month';
                document.getElementById('maxBenefit').textContent = 
                    r.config.currency + r.savings.maxBenefit.toLocaleString();
                document.getElementById('totalMonthlySavings').textContent = 
                    r.config.currency + Math.round(r.savings.monthlySavings).toLocaleString();

                // Cost comparison
                document.getElementById('originalCost').textContent = 
                    r.config.currency + r.childcareCost.toLocaleString();
                document.getElementById('afterBenefits').textContent = 
                    r.config.currency + Math.round((r.savings.effectiveCost / 12)).toLocaleString();
                document.getElementById('yourPayment').textContent = 
                    r.config.currency + Math.round(r.childcareCost - r.savings.monthlySavings).toLocaleString();
                document.getElementById('effectiveRate').textContent = r.savings.savingsRate.toFixed(1) + '%';

                // Comparison table
                this.populateComparisonTable();

                // Action steps and information
                this.generateActionSteps();

                // Show results
                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            updateCurrencyDisplays(currency) {
                const currencyElements = ['currency1', 'currency2', 'currencyCare'];
                currencyElements.forEach(id => {
                    const element = document.getElementById(id);
                    if (element) {
                        element.textContent = element.textContent.replace(/[£$€C\$A\$]/, currency);
                    }
                });
            }

            populateComparisonTable() {
                const table = document.getElementById('comparisonTable');
                const alternatives = this.results.alternatives;
                const primarySavings = this.results.savings.monthlySavings;
                const currency = this.results.config.currency;

                let html = `
                    <tr class="border-b border-gray-100">
                        <td class="py-3 font-medium text-green-600">${this.results.config.schemeName} (Current)</td>
                        <td class="py-3 text-right font-bold text-green-600">${currency}${Math.round(primarySavings)}</td>
                        <td class="py-3 text-right font-bold text-green-600">${currency}${Math.round(primarySavings * 12)}</td>
                        <td class="py-3 text-center">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">
                                ${this.results.eligibility.eligible ? 'Eligible' : 'Not Eligible'}
                            </span>
                        </td>
                    </tr>
                `;

                alternatives.forEach(alt => {
                    const statusClass = alt.eligible ? (alt.status.includes('Current') ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800') : 'bg-red-100 text-red-800';
                    html += `
                        <tr class="border-b border-gray-100">
                            <td class="py-3">${alt.name}</td>
                            <td class="py-3 text-right">${currency}${Math.round(alt.monthlySavings)}</td>
                            <td class="py-3 text-right">${currency}${Math.round(alt.annualSavings)}</td>
                            <td class="py-3 text-center">
                                <span class="px-2 py-1 ${statusClass} rounded-full text-xs font-medium">${alt.status}</span>
                            </td>
                        </tr>
                    `;
                });

                table.innerHTML = html;
            }

            generateActionSteps() {
                const r = this.results;
                const actionSteps = [];
                const importantInfo = [];

                if (r.eligibility.eligible) {
                    actionSteps.push('1. Register for ' + r.config.schemeName + ' account online');
                    actionSteps.push('2. Provide employment and income verification');
                    actionSteps.push('3. Add approved childcare provider details');
                    actionSteps.push('4. Start receiving government contributions');
                } else {
                    actionSteps.push('1. Review eligibility requirements');
                    actionSteps.push('2. Consider alternative childcare support options');
                    actionSteps.push('3. Check if circumstances may change soon');
                }

                // Country-specific information
                if (r.country === 'uk') {
                    importantInfo.push('• Payments are made every 3 months');
                    importantInfo.push('• Reconfirm eligibility every 3 months');
                    importantInfo.push('• Cannot be used with childcare vouchers');
                } else if (r.country === 'us') {
                    importantInfo.push('• Must elect during open enrollment');
                    importantInfo.push('• Use-it-or-lose-it policy applies');
                    importantInfo.push('• Limited to calendar year');
                }

                importantInfo.push('• Keep all childcare receipts and records');
                importantInfo.push('• Notify changes in circumstances immediately');

                document.getElementById('actionSteps').innerHTML = 
                    actionSteps.map(step => `<div class="flex items-start space-x-2">
                        <i class="fas fa-arrow-right text-green-500 mt-1 text-sm"></i>
                        <span class="text-sm text-gray-700">${step}</span>
                    </div>`).join('');

                document.getElementById('importantInfo').innerHTML = 
                    importantInfo.map(info => `<div class="text-sm text-gray-600">${info}</div>`).join('');
            }

            getResultsText() {
                const r = this.results;
                return `Tax-free childcare: Save ${r.config.currency}${Math.round(r.savings.annualSavings)} per year (${r.savings.savingsRate.toFixed(1)}% of costs). ${r.eligibility.eligible ? 'Eligible' : 'Not currently eligible'}.`;
            }
        }

        const childcareCalc = new ChildcareCalculator();

        function updateCountrySpecificFields() {
            const country = document.getElementById('country').value;
            const config = childcareCalc.countryConfig[country];
            
            // Update labels and placeholders
            document.getElementById('vouchersLabel').textContent = `Currently receiving ${config.vouchersName}`;
            document.getElementById('benefitsLabel').textContent = `Receiving ${config.benefitsName}`;
            
            // Update visibility of second parent section
            const familyType = document.getElementById('familyType').value;
            const parent2Section = document.getElementById('parent2Section');
            if (familyType === 'single') {
                parent2Section.classList.add('hidden');
            } else {
                parent2Section.classList.remove('hidden');
            }
        }

        function calculateChildcareSavings() {
            childcareCalc.calculate();
        }

        function shareOnFacebook() {
            if (!childcareCalc.results) return;
            
            const text = `${childcareCalc.getResultsText()} Calculate your childcare savings at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!childcareCalc.results) return;
            
            const text = `${childcareCalc.getResultsText()} 👶 Calculate yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyResults() {
            if (!childcareCalc.results) return;
            
            const r = childcareCalc.results;
            const text = `Tax-Free Childcare Calculation Results:
${childcareCalc.getResultsText()}

Monthly Childcare Cost: ${r.config.currency}${r.childcareCost}
Monthly Savings: ${r.config.currency}${Math.round(r.savings.monthlySavings)}
Annual Savings: ${r.config.currency}${Math.round(r.savings.annualSavings)}
Savings Rate: ${r.savings.savingsRate.toFixed(1)}%

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Results copied to clipboard!');
            });
        }

        // Initialize form handlers
        document.getElementById('familyType').addEventListener('change', updateCountrySpecificFields);
        document.addEventListener('DOMContentLoaded', updateCountrySpecificFields);
    </script>

<?php include 'footer.php'; ?>
</body>
</html>