<?php include 'header.php'; ?>

    <title>Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount | Thiyagi.com</title>
    <meta name="description" content="Calculate your extended warranty refund amount for 2026. Get prorated refund estimates for unused warranty periods with detailed breakdown and cancellation guide.">
    <meta name="keywords" content="extended warranty refund calculator 2026, warranty cancellation refund, prorated warranty refund, warranty refund amount calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount">
    <meta property="og:description" content="Calculate your extended warranty refund amount with detailed breakdown and cancellation guidance.">
    <meta property="og:url" content="https://www.thiyagi.com/how-to-calculate-extended-warranty-refund">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount">
    <meta name="twitter:description" content="Calculate your extended warranty refund with detailed breakdown.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }
    .warranty-card {
        transition: all 0.3s ease;
        border-left: 4px solid #2563eb;
    }
    .warranty-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #1d4ed8;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .refund-pulse {
        animation: refundPulse 2s ease-in-out infinite;
    }
    @keyframes refundPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .money-green { color: #10b981; }
    .warning-amber { color: #f59e0b; }
    .danger-red { color: #ef4444; }
    .info-blue { color: #3b82f6; }
    .progress-bar {
        background: linear-gradient(90deg, #ef4444 0%, #f59e0b 50%, #10b981 100%);
        height: 8px;
        border-radius: 4px;
    }
    .calculation-step {
        position: relative;
        padding-left: 2rem;
    }
    .calculation-step::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 1.5rem;
        height: 2px;
        background: linear-gradient(90deg, #2563eb, #1d4ed8);
    }
    .refund-eligible { background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); }
    .refund-partial { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); }
    .refund-none { background: linear-gradient(135deg, #fecaca 0%, #fca5a5 100%); }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Extended Warranty Refund Calculator 2026",
  "description": "Calculate prorated extended warranty refund amounts based on unused warranty periods, cancellation fees, and terms.",
  "url": "https://www.thiyagi.com/how-to-calculate-extended-warranty-refund",
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
                        <i class="fas fa-shield-alt text-2xl text-blue-600 refund-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Extended Warranty Refund Calculator</h1>
                        <p class="text-blue-100">Calculate your prorated warranty refund amount</p>
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
                <li class="text-gray-900 font-medium">Extended Warranty Refund Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl text-blue-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Warranty Refund Calculator</h2>
                <p class="text-gray-600">Calculate your prorated extended warranty refund amount</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Warranty Details -->
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-file-contract mr-2" aria-hidden="true"></i>
                        Warranty Contract Details
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="warrantyType" class="block text-sm font-medium text-gray-700 mb-2">Warranty Type</label>
                            <select id="warrantyType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select warranty type...</option>
                                <option value="auto">Auto/Vehicle Extended Warranty</option>
                                <option value="home">Home Warranty</option>
                                <option value="appliance">Appliance Warranty</option>
                                <option value="electronics">Electronics Warranty</option>
                                <option value="furniture">Furniture Protection Plan</option>
                                <option value="mobile">Mobile Device Protection</option>
                                <option value="other">Other Extended Warranty</option>
                            </select>
                        </div>

                        <div>
                            <label for="originalCost" class="block text-sm font-medium text-gray-700 mb-2">Original Warranty Cost ($)</label>
                            <input type="number" id="originalCost" min="0" max="10000" step="0.01" placeholder="1,200.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="warrantyPeriod" class="block text-sm font-medium text-gray-700 mb-2">Total Warranty Period</label>
                            <select id="warrantyPeriod" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select warranty period...</option>
                                <option value="12">12 months</option>
                                <option value="24">24 months (2 years)</option>
                                <option value="36">36 months (3 years)</option>
                                <option value="48">48 months (4 years)</option>
                                <option value="60">60 months (5 years)</option>
                                <option value="72">72 months (6 years)</option>
                                <option value="84">84 months (7 years)</option>
                                <option value="96">96 months (8 years)</option>
                                <option value="custom">Custom Period</option>
                            </select>
                        </div>

                        <div id="customPeriodDiv" class="hidden">
                            <label for="customPeriod" class="block text-sm font-medium text-gray-700 mb-2">Custom Period (months)</label>
                            <input type="number" id="customPeriod" min="1" max="120" placeholder="30" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Time Details -->
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-clock mr-2" aria-hidden="true"></i>
                        Usage & Cancellation Timing
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="purchaseDate" class="block text-sm font-medium text-gray-700 mb-2">Warranty Purchase Date</label>
                            <input type="date" id="purchaseDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="cancellationDate" class="block text-sm font-medium text-gray-700 mb-2">Requested Cancellation Date</label>
                            <input type="date" id="cancellationDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="monthsUsed" class="block text-sm font-medium text-gray-700 mb-2">OR Months Already Used</label>
                            <input type="number" id="monthsUsed" min="0" max="120" step="0.1" placeholder="18.5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <p class="text-xs text-gray-500 mt-1">Leave blank to auto-calculate from dates</p>
                        </div>

                        <div>
                            <label for="claimsMade" class="block text-sm font-medium text-gray-700 mb-2">Number of Claims Made</label>
                            <input type="number" id="claimsMade" min="0" max="20" placeholder="0" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="bg-yellow-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-yellow-800 mb-4 flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2" aria-hidden="true"></i>
                        Contract Terms & Fees
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="cancellationFeeType" class="block text-sm font-medium text-gray-700 mb-2">Cancellation Fee Structure</label>
                            <select id="cancellationFeeType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                <option value="">Select fee structure...</option>
                                <option value="fixed">Fixed Fee Amount</option>
                                <option value="percentage">Percentage of Original Cost</option>
                                <option value="declining">Declining Scale Fee</option>
                                <option value="none">No Cancellation Fee</option>
                            </select>
                        </div>

                        <div id="cancellationFeeAmount" class="hidden">
                            <label for="feeAmount" class="block text-sm font-medium text-gray-700 mb-2">Fee Amount ($) or Percentage (%)</label>
                            <input type="number" id="feeAmount" min="0" max="1000" step="0.01" placeholder="50.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="adminFee" class="block text-sm font-medium text-gray-700 mb-2">Administrative Processing Fee ($)</label>
                            <input type="number" id="adminFee" min="0" max="200" step="0.01" placeholder="25.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="gracePeriod" class="block text-sm font-medium text-gray-700 mb-2">Grace Period (days)</label>
                            <input type="number" id="gracePeriod" min="0" max="90" placeholder="30" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            <p class="text-xs text-gray-500 mt-1">Full refund period after purchase</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Factors -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="hasUsedService" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Have used warranty services/repairs</span>
                        </label>
                    </div>
                    
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="isPastGrace" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Past grace/cooling-off period</span>
                        </label>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="hasActiveClaim" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Currently have active claim</span>
                        </label>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="isFinanced" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Warranty was financed/monthly payments</span>
                        </label>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Warranty Refund
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-green-50 border-2 border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-receipt mr-2 text-blue-600" aria-hidden="true"></i>
                        Your Warranty Refund Calculation
                    </h3>
                    
                    <!-- Status Badge -->
                    <div class="text-center mb-6">
                        <div id="refundStatus" class="inline-flex items-center px-6 py-3 rounded-full text-lg font-bold">
                            <i class="fas fa-check-circle mr-2" aria-hidden="true"></i>
                            <span id="statusText">Refund Eligible</span>
                        </div>
                    </div>

                    <!-- Main Results -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2" id="refundAmount">$850.00</div>
                            <div class="text-sm text-gray-600">Estimated Refund</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2" id="usedAmount">$350.00</div>
                            <div class="text-sm text-gray-600">Amount Used</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-red-600 mb-2" id="totalFees">$75.00</div>
                            <div class="text-sm text-gray-600">Total Fees</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-2" id="refundPercentage">71%</div>
                            <div class="text-sm text-gray-600">Refund Rate</div>
                        </div>
                    </div>

                    <!-- Calculation Breakdown -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-list-ol mr-2 text-indigo-500" aria-hidden="true"></i>
                            Calculation Breakdown
                        </h4>
                        <div id="calculationSteps" class="space-y-3">
                            <!-- Steps will be populated by JS -->
                        </div>
                    </div>

                    <!-- Timeline Visualization -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-line mr-2 text-green-500" aria-hidden="true"></i>
                            Warranty Usage Timeline
                        </h4>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-600 mb-2">
                                <span>Start Date</span>
                                <span id="timelineUsed">Time Used</span>
                                <span>Cancellation</span>
                                <span>End Date</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                <div id="progressBar" class="progress-bar rounded-full h-4" style="width: 65%"></div>
                                <div id="cancellationMarker" class="absolute top-0 w-1 h-4 bg-red-500" style="left: 65%"></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                <span class="font-medium" id="monthsUsedDisplay">18.5 months</span> used out of 
                                <span class="font-medium" id="totalPeriodDisplay">36 months</span>
                            </p>
                        </div>
                    </div>

                    <!-- Important Notes -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-info-circle mr-2 text-blue-500" aria-hidden="true"></i>
                                Important Notes
                            </h4>
                            <div id="importantNotes" class="space-y-3">
                                <!-- Notes will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-clipboard-list mr-2 text-yellow-500" aria-hidden="true"></i>
                                Next Steps
                            </h4>
                            <div id="nextSteps" class="space-y-3">
                                <!-- Steps will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="printBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-print mr-2" aria-hidden="true"></i>
                            Print Calculation
                        </button>
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="resetBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            New Calculation
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- How Warranty Refunds Work -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-question-circle mr-3 text-blue-500" aria-hidden="true"></i>
                    How Warranty Refunds Work
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Prorated Refunds</h3>
                        <p class="text-gray-600">Most extended warranties offer prorated refunds based on unused time remaining on your contract.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Calculation Method</h3>
                        <p class="text-gray-600">Refund = (Unused months ÷ Total months) × Original cost - Fees</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Common Fees</h3>
                        <p class="text-gray-600">Cancellation fees, administrative costs, and processing charges may apply.</p>
                    </div>

                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Usage Impact</h3>
                        <p class="text-gray-600">Claims made or services used may affect your refund eligibility and amount.</p>
                    </div>
                </div>
            </section>

            <!-- Refund Tips -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-lightbulb mr-3 text-yellow-500" aria-hidden="true"></i>
                    Refund Tips & Strategy
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-file-alt text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Review Your Contract</h3>
                            <p class="text-gray-600 text-sm">Carefully read cancellation terms and refund policies in your warranty agreement.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-clock text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Act Within Grace Period</h3>
                            <p class="text-gray-600 text-sm">Cancel within the cooling-off period for a full refund without penalties.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-phone text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Contact Provider</h3>
                            <p class="text-gray-600 text-sm">Call your warranty provider to understand specific terms and request cancellation.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-envelope text-red-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Written Request</h3>
                            <p class="text-gray-600 text-sm">Submit cancellation requests in writing and keep records of all communications.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <i class="fas fa-balance-scale text-indigo-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Know Your Rights</h3>
                            <p class="text-gray-600 text-sm">Understand consumer protection laws in your state regarding warranty cancellations.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Warranty Types Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-shield-alt mr-3 text-blue-600" aria-hidden="true"></i>
                Common Warranty Types & Refund Policies
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-car text-2xl text-blue-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Auto Warranties</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Usually prorated refunds</li>
                        <li>• 30-60 day grace period</li>
                        <li>• $50-100 cancellation fee</li>
                        <li>• Claims may reduce refund</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-home text-2xl text-green-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Home Warranties</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Monthly/annual terms</li>
                        <li>• 30 day cancellation</li>
                        <li>• Admin fees apply</li>
                        <li>• Service calls deducted</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-mobile-alt text-2xl text-purple-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Electronics</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Full refund if unused</li>
                        <li>• 14-30 day returns</li>
                        <li>• Restocking fees</li>
                        <li>• Pro-rated after usage</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-couch text-2xl text-orange-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Furniture Plans</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 30-90 day full refund</li>
                        <li>• Prorated thereafter</li>
                        <li>• Coverage usage matters</li>
                        <li>• Minimal fees typical</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-tools text-2xl text-red-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Appliances</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Manufacturer dependent</li>
                        <li>• 15-60 day grace period</li>
                        <li>• Service history reviewed</li>
                        <li>• Prorated calculations</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-credit-card text-2xl text-indigo-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Credit Card Plans</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Bank specific terms</li>
                        <li>• Monthly billing cycles</li>
                        <li>• Easy cancellation</li>
                        <li>• Pro-rated refunds</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Comprehensive Extended Warranty Refund Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Complete Guide to Extended Warranty Refunds</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg">Our <strong>extended warranty refund calculator</strong> provides accurate prorated refund estimates helping consumers understand potential refund amounts when canceling extended warranty contracts. Whether purchased for vehicles, electronics, appliances, furniture, or home systems, understanding warranty cancellation terms and refund calculations empowers informed financial decisions. Our comprehensive tool accounts for warranty periods, usage time, cancellation fees, administrative charges, claim history, and grace periods—providing detailed breakdowns showing exactly how refund amounts are calculated and what factors affect final refund eligibility.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Understanding Extended Warranties</strong></h2>
                <p><strong>Extended warranties</strong>, also called service contracts or protection plans, provide coverage beyond manufacturer warranties for product repairs, replacements, and maintenance. These contracts are sold by manufacturers, retailers, third-party companies, and financial institutions for products ranging from automobiles to smartphones. Extended warranties typically cover mechanical failures, electrical problems, and specific component malfunctions while excluding damage from misuse, accidents, or normal wear. Understanding what extended warranties cover, their terms and limitations, and cancellation policies proves essential before purchasing or canceling these contracts.</p>
                
                <p>The extended warranty market generates billions annually, with varying quality and value across providers. Some warranties offer comprehensive coverage with minimal exclusions, while others contain restrictive terms limiting actual protection. Before purchasing, consumers should carefully review coverage details, deductibles, claim procedures, transferability, and cancellation policies. Understanding these factors helps determine whether extended warranties provide sufficient value relative to their costs—and informs decisions about whether maintaining or canceling warranties serves financial interests better.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Prorated Refund Calculation Method</strong></h2>
                <p>Most extended warranties use <strong>prorated refund formulas</strong> calculating refunds based on unused warranty periods. The standard calculation divides remaining warranty months by total warranty months, then multiplies by original cost, finally subtracting applicable fees. For example, a 36-month warranty costing $1,200 canceled after 12 months with $50 cancellation fee yields: (24 remaining months ÷ 36 total months) × $1,200 = $800, minus $50 fee = $750 refund. This prorated approach ensures consumers receive fair value for unused coverage while allowing warranty providers to retain compensation for periods when coverage was active.</p>
                
                <p>Variations in calculation methods exist across providers and product categories. Some warranties calculate refunds using daily proration rather than monthly, providing more precise refund amounts. Others use declining refund schedules where refund percentages decrease over time beyond simple time-based proration. Service contract administrators may calculate refunds differently than retail-sold warranties. Understanding your specific warranty's refund calculation method requires reviewing contract terms, which typically outline exact formulas, applicable fees, and refund processing procedures. Our calculator accommodates common calculation methods, providing estimates applicable to most standard warranty contracts.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Grace Periods and Full Refunds</strong></h2>
                <p>Many extended warranties include <strong>grace periods</strong>—typically 30, 60, or 90 days from purchase—during which cancellations receive full refunds minus minimal administrative fees. Grace periods, sometimes called "free look" or "cooling-off" periods, protect consumers who change their minds shortly after purchase or discover duplicate coverage. Full refunds during grace periods generally require no claims were filed and no services were utilized. These consumer-friendly provisions recognize that warranty decisions may be made under pressure at point of sale, and buyers deserve opportunities to reconsider without financial penalty.</p>
                
                <p>State regulations often mandate minimum grace periods for certain warranty types, particularly automobile service contracts. Some jurisdictions require 30-day grace periods with full refunds, while others specify 60 days or link grace periods to warranty terms. Warranty providers may offer more generous grace periods than legally required as competitive advantages or customer service policies. Checking your specific contract and understanding grace period terms enables strategic timing of cancellations—canceling within grace periods maximizes refund amounts by avoiding prorated calculations and cancellation fees that apply to later cancellations.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Cancellation Fees and Administrative Charges</strong></h2>
                <p><strong>Cancellation fees</strong> reduce refund amounts when warranties are canceled outside grace periods. Fee structures vary widely: fixed dollar amounts ($25-$100 typical), percentages of original costs (10-20% common), or declining scales decreasing over time. Administrative fees cover processing costs associated with policy cancellations, refund calculations, and recordkeeping. While these fees affect net refunds, they're generally reasonable and expected—though excessive fees may indicate predatory warranty practices. Understanding fee structures before purchasing warranties informs cost-benefit analyses and cancellation decision-making.</p>
                
                <p>Some warranty contracts specify multiple fee types including cancellation fees, administrative fees, processing charges, or service fees—all reducing final refunds. Transparency in fee disclosure varies, with reputable providers clearly outlining all applicable charges in contracts while less scrupulous operators may obscure fee information. Reading warranty contracts carefully identifies all potential fees affecting refunds. Our calculator accommodates various fee structures, enabling accurate refund estimates accounting for fixed fees, percentage-based fees, declining scales, or combinations thereof. Knowing potential fees in advance prevents surprises when requesting cancellations.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Impact of Claims and Service Usage</strong></h2>
                <p>Filing <strong>warranty claims</strong> or using covered services typically affects refund eligibility and amounts. Many warranty contracts specify that claim-related costs are deducted from refund calculations—essentially treating refunds as rebates of unused premium after accounting for benefits received. For instance, if $500 was paid on your behalf for covered repairs, your refund decreases by that amount. Some contracts disallow refunds entirely once claims reach certain thresholds or deny refunds when active claims are pending. These provisions prevent consumers from benefiting from coverage then immediately canceling to recoup costs.</p>
                
                <p>Service usage policies vary significantly across warranty types and providers. Automobile warranties often track claim totals and reduce refunds accordingly. Home warranties may calculate refunds based on service calls minus deductibles. Electronics warranties might offer full refunds if unused but provide no refunds after first claims. Understanding your warranty's specific claim impact policies requires reviewing contract language. When calculating potential refunds, honestly assess service usage and claims history—overestimating refund amounts creates unrealistic expectations. Our calculator includes claim tracking to approximate how service usage affects refund eligibility.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Automobile Warranty Refund Considerations</strong></h2>
                <p><strong>Auto extended warranties</strong> represent significant purchases often costing $1,000-$4,000 with complex refund provisions. Vehicle service contracts typically offer prorated refunds outside grace periods, with cancellation fees ranging from $50-$150. Claim history heavily influences refunds—major repair costs are deducted from refund calculations. Financed warranties present additional complexity: refunds may apply to outstanding loan balances rather than being paid directly to consumers. When vehicles are sold or totaled, warranty cancellations and refunds become necessary, with specific procedures varying by provider and finance status.</p>
                
                <p>Timing vehicle warranty cancellations strategically maximizes refunds. Canceling before making claims ensures full prorated refunds. Avoiding premium coverage levels you don't need prevents overpaying initially. When purchasing vehicles, negotiating warranty costs downward or declining warranties altogether may prove more economical than purchasing then canceling. Transferable warranties add value to vehicle resales, sometimes justifying maintaining coverage. Each situation requires individual analysis balancing coverage benefits against costs and potential refunds. Our calculator helps evaluate whether maintaining or canceling auto warranties makes financial sense given your specific circumstances.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Home Warranty Cancellation Process</strong></h2>
                <p><strong>Home warranties</strong> operate differently from product warranties, typically using monthly or annual billing for coverage of home systems and appliances. Cancellation processes usually involve contacting providers and requesting termination effective at next billing cycle. Prorated refunds apply when annual premiums were prepaid, though month-to-month plans simply stop billing without refunds. Service call history affects refunds—providers may deduct service call costs from prepaid premium refunds. Transferability to new homeowners upon home sales provides alternatives to cancellation, potentially recovering value without formal cancellation.</p>
                
                <p>Home warranty cancellation motivations include selling homes, relocating to areas without coverage, finding costs exceed benefits, or experiencing poor service quality. Cancellation timing matters—ending coverage mid-year with prepaid annual premiums wastes months of payments unless prorated refunds apply. Reviewing contracts before canceling clarifies refund eligibility and required procedures. Some home warranty companies make cancellation deliberately difficult through lengthy hold times, requiring written requests, or imposing excessive fees—research provider reputations before purchasing to avoid problematic cancellation experiences. Understanding cancellation procedures in advance enables smooth processes when needed.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Electronics and Appliance Warranty Refunds</strong></h2>
                <p><strong>Electronics warranties</strong> sold at retail for computers, phones, tablets, and appliances often provide relatively generous refund terms. Many retailers offer 30-day or longer full refund periods with minimal fees. Unused warranties frequently qualify for complete refunds, while used warranties receive prorated refunds deducting service costs. Some electronics warranties don't permit refunds once claims are filed—providing powerful incentive to cancel before using coverage if cancellation becomes desirable. Restocking fees sometimes apply, particularly when returning products along with warranty cancellations.</p>
                
                <p>Major appliance warranties from retailers or manufacturers follow similar patterns with varying grace periods and refund formulas. High-value appliances like refrigerators, washing machines, and HVAC systems may have extended warranties costing hundreds of dollars, making refund calculations financially significant. Manufacturers sometimes offer better warranty terms than third-party providers—comparing manufacturer warranties to retail-sold extended warranties often reveals better coverage and more favorable cancellation terms from manufacturers. Evaluating warranty value against appliance reliability, repair costs, and personal risk tolerance helps determine whether purchasing or maintaining extended appliance coverage makes financial sense.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Financed Warranty Complications</strong></h2>
                <p>When extended warranties are <strong>financed</strong> through product loans or separately, refund processes become more complex. Automobile warranties financed into vehicle loans create situations where refund checks are made payable to lenders rather than consumers. Refunds reduce outstanding loan balances but don't provide cash to consumers unless loans are already paid in full. Understanding this distinction prevents disappointment—financed warranty cancellations improve loan equity but don't generate spendable refunds. Documentation requirements increase with financed warranties, requiring coordination between warranty providers, lenders, and consumers.</p>
                
                <p>Separating warranty financing from product financing simplifies refunds—separately financed warranties cancelled generate refunds applied to warranty loan balances with any surplus paid to consumers. However, prepaid interest or financing charges on warranty loans may not be refundable, reducing net benefits of cancellation. Calculating whether canceling financed warranties provides financial benefits requires comparing total financed costs (including interest) to potential refunds. Sometimes maintaining financed warranties through original terms proves more economical than canceling and receiving reduced refunds. Complex financial situations warrant careful analysis before proceeding with cancellations.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Written Cancellation Requirements</strong></h2>
                <p>Most warranty providers require <strong>written cancellation requests</strong> protecting both consumers and companies through documented communication. Written requests should include policy numbers, purchaser information, effective cancellation dates, and refund delivery preferences. Many providers supply cancellation forms simplifying processes, while others accept letters containing required information. Sending cancellation requests via certified mail with return receipts provides proof of delivery—important if disputes arise about whether cancellation requests were received or processed timely. Retaining copies of all cancellation communications protects consumer interests.</p>
                
                <p>Cancellation processing timelines vary from immediate termination to 30-60 day processing periods. Understanding processing timelines prevents frustration and ensures realistic expectations about when refunds will be received. Following up on cancellation requests after reasonable periods verifies processing status and identifies any issues requiring resolution. Some states regulate warranty cancellation processes including maximum processing times and required communication procedures—knowing your rights under state law helps ensure proper treatment. Persistence may be necessary if warranty companies delay cancellations or refunds unreasonably.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>State Laws and Consumer Protections</strong></h2>
                <p><strong>State regulations</strong> governing extended warranties vary significantly affecting cancellation rights and refund requirements. Many states require specific grace periods, mandate prorated refund formulas, limit cancellation fees, or specify refund processing timelines. Some jurisdictions classify certain warranties as insurance products subject to insurance regulations including strict cancellation and refund provisions. Understanding your state's warranty laws helps identify rights warranty contracts must honor regardless of contract language attempting to limit protections below statutory minimums.</p>
                
                <p>Consumer protection statutes in many states prohibit unfair warranty practices including excessive cancellation fees, deceptive sales tactics, or unreasonable refund denials. State attorneys general offices and consumer protection agencies handle warranty complaints when providers violate regulations or engage in fraudulent practices. Knowing available legal protections and enforcement mechanisms empowers consumers to assert rights and seek remedies when warranty providers act improperly. Federal law also provides certain warranty protections, particularly the Magnuson-Moss Warranty Act governing warranty disclosures and terms. Multi-layered legal protections reflect recognition that warranty markets require regulation preventing consumer exploitation.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Negotiating Better Refund Terms</strong></h2>
                <p>Sometimes <strong>negotiating</strong> with warranty providers yields better refund terms than contract language suggests. If service experiences were poor, coverage didn't match representations, or circumstances beyond your control necessitate cancellation, explaining situations to provider representatives sometimes results in fee waivers or enhanced refunds. Politely but firmly advocating for fair treatment, emphasizing customer service concerns, or threatening negative reviews or regulatory complaints may motivate providers to accommodate reasonable requests. Documenting problematic experiences strengthens negotiation positions.</p>
                
                <p>Corporate customer service departments often have authority to make exceptions to standard refund policies when situations warrant. Escalating refund disputes beyond initial representatives to supervisors or management increases chances of favorable resolutions. While not all negotiation attempts succeed, trying costs nothing and occasionally produces substantially better outcomes than accepting initial refund calculations. Remaining professional, clearly explaining reasoning, and proposing reasonable compromises maximizes negotiation success. Even partial fee reductions or modest refund enhancements represent victories worth pursuing through respectful persistence.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Alternatives to Warranty Cancellation</strong></h2>
                <p>Before canceling warranties, consider <strong>alternatives</strong> that might better serve your interests. Transferring warranties to new product owners when selling items recovers value without formal cancellation—making products more attractive to buyers and justifying higher prices. Some warranties allow temporary suspensions during periods when products aren't used, preserving coverage without ongoing costs. Converting warranties to different coverage levels or terms may address concerns without complete cancellation. Exploring alternatives before committing to cancellation ensures optimal outcomes.</p>
                
                <p>Warranty modifications might include reducing coverage scope in exchange for lower costs, extending terms to spread costs over longer periods, or transferring warranties between qualifying products. Not all providers offer these flexibilities, but inquiring about options reveals possibilities. Sometimes keeping warranties proves wiser than canceling—unexpected failures could cost far more than warranty premiums, particularly for expensive products prone to costly repairs. Thoroughly evaluating whether cancellation truly serves financial interests versus maintaining protective coverage prevents regrettable decisions made based on short-term thinking.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Tax Implications of Warranty Refunds</strong></h2>
                <p><strong>Tax treatment</strong> of warranty refunds depends on various factors including whether original warranty costs were deductible and refund characterization. Generally, warranty refunds aren't taxable income for personal use items since warranty purchases weren't tax deductions. However, business-use warranty refunds may constitute taxable income if original costs were business deductions. Complex tax situations warrant consulting tax professionals for specific guidance. Documentation of warranty transactions, cancellations, and refunds facilitates accurate tax reporting when applicable.</p>
                
                <p>Sales tax treatment of warranty refunds varies by state. Some states require sales tax refunds when warranties are canceled and refunded, while others don't. Warranty providers should handle sales tax calculations and refunds appropriately, but verifying proper tax treatment protects consumer interests. If refunds don't include expected sales tax components, inquiring about discrepancies ensures full entitled refunds are received. While tax implications usually don't significantly affect warranty cancellation decisions for personal use warranties, understanding potential tax consequences provides complete financial pictures.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Documentation and Record Keeping</strong></h2>
                <p>Maintaining thorough <strong>documentation</strong> throughout warranty ownership and cancellation processes protects interests and facilitates smooth transactions. Keeping original warranty contracts, purchase receipts, cancellation requests, correspondence with providers, and refund receipts creates comprehensive records resolving disputes and verifying transactions. Digital copies provide backup if physical documents are lost. Organized recordkeeping seems tedious but proves invaluable when questions arise about coverage terms, cancellation dates, or refund amounts.</p>
                
                <p>Documentation proves particularly important if providers claim cancellation requests weren't received, dispute refund amounts, or incorrectly apply fees. Comprehensive records definitively establish facts, strengthen negotiating positions, and support complaints to regulators if necessary. Many warranty disputes stem from inadequate documentation—preventing documentation problems through diligent recordkeeping eliminates unnecessary complications. The minimal time invested in maintaining organized warranty records pays dividends by enabling confident, informed interactions with warranty providers and swift resolution of any issues.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Common Warranty Refund Mistakes</strong></h2>
                <p>Consumers commonly make <strong>mistakes</strong> when canceling warranties that reduce refunds or create unnecessary complications. Delaying cancellation beyond grace periods costs money through reduced prorated refunds and cancellation fees. Failing to read contracts before purchasing prevents understanding refund terms until cancellation becomes desirable—too late to avoid unfavorable terms. Not submitting written cancellation requests or lacking proof of submission creates disputes about whether cancellations were properly requested. Making claims immediately before canceling eliminates refund eligibility in many contracts. These mistakes, while common, are entirely avoidable through careful planning and attention to contract terms.</p>
                
                <p>Other mistakes include accepting initial refund denials without appealing, not negotiating cancellation fees, or believing verbal representations about refund terms without confirming contract language matches promises. Some consumers cancel warranties unnecessarily without evaluating whether coverage might prove valuable—then face expensive repairs without protection. Others maintain worthless warranties far too long because cancellation processes seem daunting. Balancing careful evaluation of individual circumstances with decisive action when cancellation serves interests optimizes outcomes. Learning from common mistakes helps avoid expensive errors in warranty management.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Future Warranty Purchasing Considerations</strong></h2>
                <p>Warranty cancellation experiences inform <strong>future purchasing decisions</strong> about extended warranties. If cancellation processes were difficult or refund terms were unfavorable, factor those experiences into whether purchasing similar warranties makes sense. Researching warranty providers before purchasing identifies companies with consumer-friendly policies versus those with restrictive terms. Reading contracts thoroughly before purchasing prevents surprises about coverage limitations or cancellation terms. Considering self-insurance alternatives—saving money otherwise spent on warranties—sometimes proves more economical than purchasing coverage with uncertain value.</p>
                
                <p>Extended warranties vary dramatically in value proposition across product categories. Reliable products with low repair probability rarely justify warranty costs, while problem-prone items with expensive repairs make warranty purchases more logical. Personal financial situations affect warranty value—those with emergency funds covering unexpected repair costs need warranties less than those without financial cushions. Service quality matters enormously—excellent service justifies premium warranty costs while poor service makes even cheap warranties bad deals. Developing informed approaches to warranty purchasing based on research, personal circumstances, and past experiences leads to better outcomes than reactive purchases at points of sale.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Credit Card Purchase Protection Alternative</strong></h2>
                <p>Many <strong>credit cards</strong> provide automatic extended warranty protection for purchases made with cards, potentially eliminating needs for separate extended warranties. Premium credit cards often extend manufacturer warranties by one year at no charge, covering many risks extended warranties address. Additionally, credit cards may offer purchase protection, price protection, and return protection providing comprehensive purchase safeguards. Understanding credit card benefits before purchasing extended warranties prevents paying for redundant coverage already included with payment methods.</p>
                
                <p>Credit card extended warranty coverage typically requires only purchasing items with protected cards and retaining receipts documenting purchases and manufacturer warranty terms. Claims processes involve contacting credit card issuers when covered items fail, providing documentation, and receiving reimbursement for repair or replacement costs up to policy limits. These automated protections often prove more convenient than third-party extended warranties with separate claims procedures. Comparing credit card benefits to proposed extended warranty coverage helps determine whether paying additional warranty costs provides meaningful additional protection beyond what credit cards already supply.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>When to Seek Legal Assistance</strong></h2>
                <p><strong>Legal assistance</strong> may become necessary when warranty providers refuse legitimate refund requests, impose improper fees, process cancellations unreasonably slowly, or engage in fraudulent practices. Consumer protection attorneys often provide free consultations helping evaluate whether legal claims warrant pursuit. Small claims courts offer accessible forums for resolving warranty disputes involving moderate amounts without requiring attorneys. State attorney general consumer protection divisions investigate systemic warranty problems affecting multiple consumers. Legal options exist when informal resolution attempts fail.</p>
                
                <p>Class action lawsuits sometimes address widespread warranty problems affecting large consumer groups, enabling individual consumers to benefit from collective legal action without bearing full litigation costs. Monitoring class action notifications related to warranty providers may reveal opportunities to participate in settlements providing compensation for improper practices. While most warranty cancellations proceed smoothly without legal involvement, knowing legal recourse exists provides confidence to assert rights when providers act improperly. Consumer protection laws intentionally provide enforcement mechanisms deterring predatory warranty practices and providing remedies when violations occur.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Industry Trends and Future Outlook</strong></h2>
                <p>The <strong>extended warranty industry</strong> continues evolving with emerging technologies, changing consumer preferences, and regulatory developments shaping future warranty landscapes. Digital transformation enables more sophisticated warranty management through mobile apps, automated claims processing, and electronic contract distribution. Subscription-based warranty models offering flexible coverage periods and pricing challenge traditional fixed-term contracts. Increased regulatory scrutiny particularly regarding automobile warranties addresses past abuses and improves consumer protections. These trends generally favor consumers through enhanced transparency, flexibility, and protection.</p>
                
                <p>Growing consumer sophistication and information accessibility pressure warranty providers toward better terms and service quality. Online reviews and complaint databases increase transparency about provider reputations, incentivizing quality service and fair treatment. Regulatory reforms continue refining warranty markets, though vigilance remains necessary to identify and avoid predatory practices. Understanding industry trends helps consumers navigate warranty markets effectively, make informed purchasing decisions, and assert rights when cancellations become necessary. While the warranty industry has legitimate purposes providing valuable risk protection, informed, cautious consumers achieve best outcomes through careful evaluation and strategic decision-making.</p>

                <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4"><strong>Frequently Asked Questions</strong></h2>
                
                <div class="space-y-4 mt-6">
                    <div class="border-l-4 border-red-500 pl-6">
                        <p class="font-bold text-gray-800">1. Can I get a full refund on my extended warranty?</p>
                        <p class="text-gray-600">Full refunds are typically available only within grace periods (usually 30-60 days) if no claims were filed. After grace periods, prorated refunds apply.</p>
                    </div>

                    <div class="border-l-4 border-blue-500 pl-6">
                        <p class="font-bold text-gray-800">2. How long does it take to receive a warranty refund?</p>
                        <p class="text-gray-600">Processing times vary from 2-6 weeks typically, though some providers take 30-45 business days. State laws sometimes mandate maximum processing periods.</p>
                    </div>

                    <div class="border-l-4 border-green-500 pl-6">
                        <p class="font-bold text-gray-800">3. Do I need to provide a reason for canceling?</p>
                        <p class="text-gray-600">Generally no specific reason is required—warranty cancellations are consumer rights under most contracts and state laws. Provide requested documentation but explanations are usually optional.</p>
                    </div>

                    <div class="border-l-4 border-purple-500 pl-6">
                        <p class="font-bold text-gray-800">4. What happens if I made claims before canceling?</p>
                        <p class="text-gray-600">Claim costs are usually deducted from refund amounts. Some contracts deny refunds entirely once claims exceed certain thresholds or while active claims are pending.</p>
                    </div>

                    <div class="border-l-4 border-orange-500 pl-6">
                        <p class="font-bold text-gray-800">5. Can I cancel a financed warranty?</p>
                        <p class="text-gray-600">Yes, but refunds typically apply to outstanding loan balances rather than being paid directly to you unless loans are already satisfied.</p>
                    </div>

                    <div class="border-l-4 border-pink-500 pl-6">
                        <p class="font-bold text-gray-800">6. Are cancellation fees refundable?</p>
                        <p class="text-gray-600">No, cancellation and administrative fees are typically non-refundable charges deducted from prorated refund calculations.</p>
                    </div>

                    <div class="border-l-4 border-yellow-500 pl-6">
                        <p class="font-bold text-gray-800">7. What if my warranty provider refuses my cancellation?</p>
                        <p class="text-gray-600">Submit written cancellation requests via certified mail and document communications. If providers still refuse, contact state consumer protection agencies or consider legal options.</p>
                    </div>

                    <div class="border-l-4 border-indigo-500 pl-6">
                        <p class="font-bold text-gray-800">8. Does selling my car cancel the warranty?</p>
                        <p class="text-gray-600">Not automatically—you must request cancellation separately. Alternatively, many auto warranties are transferable to new owners, potentially adding vehicle value.</p>
                    </div>

                    <div class="border-l-4 border-teal-500 pl-6">
                        <p class="font-bold text-gray-800">9. Can I cancel after the warranty has expired?</p>
                        <p class="text-gray-600">No refunds are available after warranty periods expire since no unused coverage remains to refund.</p>
                    </div>

                    <div class="border-l-4 border-cyan-500 pl-6">
                        <p class="font-bold text-gray-800">10. Are warranty refunds taxable income?</p>
                        <p class="text-gray-600">Generally no for personal use warranties, but business-use warranty refunds may be taxable if original costs were business deductions. Consult tax professionals for specific guidance.</p>
                    </div>

                    <div class="border-l-4 border-lime-500 pl-6">
                        <p class="font-bold text-gray-800">11. How do I calculate my prorated refund?</p>
                        <p class="text-gray-600">Divide remaining warranty months by total warranty months, multiply by original cost, then subtract applicable cancellation and administrative fees.</p>
                    </div>

                    <div class="border-l-4 border-amber-500 pl-6">
                        <p class="font-bold text-gray-800">12. Can I negotiate cancellation fees?</p>
                        <p class="text-gray-600">Sometimes—explaining circumstances, emphasizing service issues, or escalating to management occasionally results in fee waivers or reductions.</p>
                    </div>

                    <div class="border-l-4 border-rose-500 pl-6">
                        <p class="font-bold text-gray-800">13. What documentation do I need to cancel?</p>
                        <p class="text-gray-600">Typically warranty contracts, policy numbers, purchase dates, purchaser information, and odometer readings for vehicle warranties. Providers often supply cancellation forms.</p>
                    </div>

                    <div class="border-l-4 border-violet-500 pl-6">
                        <p class="font-bold text-gray-800">14. Do grace periods vary by state?</p>
                        <p class="text-gray-600">Yes, state laws mandate different minimum grace periods for various warranty types, typically ranging from 30-90 days with full refund rights.</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-500 pl-6">
                        <p class="font-bold text-gray-800">15. Can I cancel anytime or are there restrictions?</p>
                        <p class="text-gray-600">Most warranties allow cancellation anytime during coverage periods, though refund amounts decrease as warranties age and fees apply outside grace periods.</p>
                    </div>

                    <div class="border-l-4 border-emerald-500 pl-6">
                        <p class="font-bold text-gray-800">16. What if I lost my warranty contract?</p>
                        <p class="text-gray-600">Contact warranty providers to request contract copies. Most maintain records enabling cancellations even without physical contracts, though documentation helps.</p>
                    </div>

                    <div class="border-l-4 border-sky-500 pl-6">
                        <p class="font-bold text-gray-800">17. Are dealer warranties different from manufacturer warranties?</p>
                        <p class="text-gray-600">Yes—dealer-sold extended warranties are service contracts with different terms, coverage, and refund policies than manufacturer warranties typically included with purchases.</p>
                    </div>

                    <div class="border-l-4 border-slate-500 pl-6">
                        <p class="font-bold text-gray-800">18. Can I cancel through email or must I mail requests?</p>
                        <p class="text-gray-600">Requirements vary by provider. Many accept email cancellations while others require mailed written requests. Check your contract or contact providers for specific procedures.</p>
                    </div>

                    <div class="border-l-4 border-stone-500 pl-6">
                        <p class="font-bold text-gray-800">19. What happens to refunds if I owe the dealer money?</p>
                        <p class="text-gray-600">Refunds typically offset outstanding balances owed to dealers or lenders before any remaining amounts are paid to consumers.</p>
                    </div>

                    <div class="border-l-4 border-zinc-500 pl-6">
                        <p class="font-bold text-gray-800">20. Do extended warranties transfer to new owners?</p>
                        <p class="text-gray-600">Many do, particularly automobile warranties, though transfer procedures and fees vary. Transferability adds value when selling covered products.</p>
                    </div>

                    <div class="border-l-4 border-neutral-500 pl-6">
                        <p class="font-bold text-gray-800">21. Can I suspend my warranty temporarily?</p>
                        <p class="text-gray-600">Some providers allow temporary suspensions during deployment, extended travel, or storage periods. Not all warranties offer this flexibility—check with providers.</p>
                    </div>

                    <div class="border-l-4 border-gray-500 pl-6">
                        <p class="font-bold text-gray-800">22. How accurate is this calculator?</p>
                        <p class="text-gray-600">Our calculator provides estimates based on common refund formulas. Actual refunds depend on specific contract terms—review your warranty contract for exact calculations.</p>
                    </div>

                    <div class="border-l-4 border-red-600 pl-6">
                        <p class="font-bold text-gray-800">23. What if my refund amount seems wrong?</p>
                        <p class="text-gray-600">Request detailed refund breakdowns from providers showing calculations. Compare to contract terms and use our calculator to verify accuracy. Dispute discrepancies in writing.</p>
                    </div>

                    <div class="border-l-4 border-blue-600 pl-6">
                        <p class="font-bold text-gray-800">24. Are home warranties refundable?</p>
                        <p class="text-gray-600">Yes, prepaid annual home warranties typically provide prorated refunds for unused periods. Month-to-month plans simply cancel without refunds.</p>
                    </div>

                    <div class="border-l-4 border-green-600 pl-6">
                        <p class="font-bold text-gray-800">25. Should I cancel my extended warranty?</p>
                        <p class="text-gray-600">Consider coverage value versus cost, product reliability, financial ability to cover repairs, remaining warranty period, and whether coverage has proven beneficial. Decisions vary by individual circumstances.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class WarrantyRefundCalculator {
            constructor() {
                this.results = {};
                this.init();
            }

            init() {
                this.bindEvents();
                this.setDefaultDates();
            }

            bindEvents() {
                document.getElementById('warrantyPeriod').addEventListener('change', () => this.toggleCustomPeriod());
                document.getElementById('cancellationFeeType').addEventListener('change', () => this.toggleFeeAmount());
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateRefund());
                document.getElementById('printBtn')?.addEventListener('click', () => this.printResults());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            setDefaultDates() {
                const today = new Date();
                const sixMonthsAgo = new Date();
                sixMonthsAgo.setMonth(today.getMonth() - 6);
                
                document.getElementById('purchaseDate').value = sixMonthsAgo.toISOString().split('T')[0];
                document.getElementById('cancellationDate').value = today.toISOString().split('T')[0];
            }

            toggleCustomPeriod() {
                const select = document.getElementById('warrantyPeriod');
                const customDiv = document.getElementById('customPeriodDiv');
                
                if (select.value === 'custom') {
                    customDiv.classList.remove('hidden');
                } else {
                    customDiv.classList.add('hidden');
                }
            }

            toggleFeeAmount() {
                const select = document.getElementById('cancellationFeeType');
                const feeDiv = document.getElementById('cancellationFeeAmount');
                
                if (select.value === 'fixed' || select.value === 'percentage' || select.value === 'declining') {
                    feeDiv.classList.remove('hidden');
                } else {
                    feeDiv.classList.add('hidden');
                }
            }

            calculateRefund() {
                if (!this.validateInputs()) {
                    return;
                }

                const warrantyData = this.collectWarrantyData();
                this.results = this.generateRefundCalculation(warrantyData);
                this.displayResults();
            }

            validateInputs() {
                const requiredFields = [
                    'warrantyType', 'originalCost', 'warrantyPeriod', 
                    'purchaseDate', 'cancellationDate', 'cancellationFeeType'
                ];

                for (const field of requiredFields) {
                    const value = document.getElementById(field).value;
                    if (!value || value === '') {
                        alert('Please fill in all required fields to calculate your warranty refund.');
                        return false;
                    }
                }

                const originalCost = parseFloat(document.getElementById('originalCost').value) || 0;
                if (originalCost <= 0) {
                    alert('Please enter a valid original warranty cost.');
                    return false;
                }

                const purchaseDate = new Date(document.getElementById('purchaseDate').value);
                const cancellationDate = new Date(document.getElementById('cancellationDate').value);
                
                if (cancellationDate <= purchaseDate) {
                    alert('Cancellation date must be after purchase date.');
                    return false;
                }

                return true;
            }

            collectWarrantyData() {
                const purchaseDate = new Date(document.getElementById('purchaseDate').value);
                const cancellationDate = new Date(document.getElementById('cancellationDate').value);
                
                // Calculate months used
                const monthsDiff = (cancellationDate.getFullYear() - purchaseDate.getFullYear()) * 12 + 
                                   (cancellationDate.getMonth() - purchaseDate.getMonth()) + 
                                   (cancellationDate.getDate() - purchaseDate.getDate()) / 30;

                const manualMonths = parseFloat(document.getElementById('monthsUsed').value) || null;
                
                return {
                    warrantyType: document.getElementById('warrantyType').value,
                    originalCost: parseFloat(document.getElementById('originalCost').value) || 0,
                    warrantyPeriod: this.getWarrantyPeriod(),
                    purchaseDate: purchaseDate,
                    cancellationDate: cancellationDate,
                    monthsUsed: manualMonths || monthsDiff,
                    claimsMade: parseInt(document.getElementById('claimsMade').value) || 0,
                    cancellationFeeType: document.getElementById('cancellationFeeType').value,
                    feeAmount: parseFloat(document.getElementById('feeAmount').value) || 0,
                    adminFee: parseFloat(document.getElementById('adminFee').value) || 0,
                    gracePeriod: parseInt(document.getElementById('gracePeriod').value) || 0,
                    hasUsedService: document.getElementById('hasUsedService').checked,
                    isPastGrace: document.getElementById('isPastGrace').checked,
                    hasActiveClaim: document.getElementById('hasActiveClaim').checked,
                    isFinanced: document.getElementById('isFinanced').checked
                };
            }

            getWarrantyPeriod() {
                const select = document.getElementById('warrantyPeriod');
                if (select.value === 'custom') {
                    return parseInt(document.getElementById('customPeriod').value) || 0;
                }
                return parseInt(select.value) || 0;
            }

            generateRefundCalculation(data) {
                const results = {
                    data: data,
                    isEligible: true,
                    refundAmount: 0,
                    usedAmount: 0,
                    unusedAmount: 0,
                    cancellationFee: 0,
                    adminFee: data.adminFee,
                    totalFees: 0,
                    refundPercentage: 0,
                    steps: [],
                    notes: [],
                    nextSteps: []
                };

                // Check grace period
                const daysUsed = Math.ceil((data.cancellationDate - data.purchaseDate) / (1000 * 60 * 60 * 24));
                const isWithinGrace = daysUsed <= data.gracePeriod;

                if (isWithinGrace) {
                    results.refundAmount = data.originalCost - data.adminFee;
                    results.refundPercentage = ((results.refundAmount / data.originalCost) * 100);
                    results.totalFees = data.adminFee;
                    
                    results.steps.push({
                        step: 1,
                        description: `Within ${data.gracePeriod}-day grace period`,
                        calculation: `$${data.originalCost.toFixed(2)} - $${data.adminFee.toFixed(2)} admin fee`,
                        result: `$${results.refundAmount.toFixed(2)}`
                    });

                    results.notes.push('You are within the grace period - eligible for full refund minus admin fees.');
                } else {
                    // Calculate prorated refund
                    const monthsRemaining = Math.max(0, data.warrantyPeriod - data.monthsUsed);
                    results.usedAmount = (data.monthsUsed / data.warrantyPeriod) * data.originalCost;
                    results.unusedAmount = (monthsRemaining / data.warrantyPeriod) * data.originalCost;

                    // Calculate cancellation fee
                    results.cancellationFee = this.calculateCancellationFee(data);
                    results.totalFees = results.cancellationFee + results.adminFee;

                    // Check eligibility based on usage and claims
                    if (data.hasActiveClaim) {
                        results.isEligible = false;
                        results.notes.push('Refund not available while active claim is pending.');
                    } else if (monthsRemaining <= 0) {
                        results.isEligible = false;
                        results.notes.push('Warranty period has expired - no refund available.');
                    } else {
                        results.refundAmount = Math.max(0, results.unusedAmount - results.totalFees);
                        results.refundPercentage = (results.refundAmount / data.originalCost) * 100;
                    }

                    // Add calculation steps
                    results.steps.push({
                        step: 1,
                        description: 'Calculate unused portion',
                        calculation: `${monthsRemaining.toFixed(1)} months remaining ÷ ${data.warrantyPeriod} total months × $${data.originalCost.toFixed(2)}`,
                        result: `$${results.unusedAmount.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 2,
                        description: 'Apply cancellation fee',
                        calculation: `${this.getFeeDescription(data)}`,
                        result: `-$${results.cancellationFee.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 3,
                        description: 'Apply administrative fee',
                        calculation: `Processing and handling charges`,
                        result: `-$${results.adminFee.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 4,
                        description: 'Final refund amount',
                        calculation: `$${results.unusedAmount.toFixed(2)} - $${results.totalFees.toFixed(2)} total fees`,
                        result: `$${results.refundAmount.toFixed(2)}`
                    });
                }

                // Add additional notes and steps
                this.addNotesAndSteps(results, data);
                
                return results;
            }

            calculateCancellationFee(data) {
                switch (data.cancellationFeeType) {
                    case 'fixed':
                        return data.feeAmount;
                    case 'percentage':
                        return (data.feeAmount / 100) * data.originalCost;
                    case 'declining':
                        // Simplified declining scale - higher fee early, lower fee later
                        const usagePercentage = data.monthsUsed / data.warrantyPeriod;
                        const baseFee = data.feeAmount;
                        return baseFee * (1 - usagePercentage * 0.5); // Fee decreases by 50% over time
                    case 'none':
                        return 0;
                    default:
                        return 0;
                }
            }

            getFeeDescription(data) {
                switch (data.cancellationFeeType) {
                    case 'fixed':
                        return `Fixed cancellation fee: $${data.feeAmount.toFixed(2)}`;
                    case 'percentage':
                        return `${data.feeAmount}% of original cost: $${data.originalCost.toFixed(2)}`;
                    case 'declining':
                        return `Declining scale fee based on usage`;
                    case 'none':
                        return 'No cancellation fee';
                    default:
                        return 'Fee calculation';
                }
            }

            addNotesAndSteps(results, data) {
                // Add usage-based notes
                if (data.hasUsedService) {
                    results.notes.push('Service usage may affect final refund amount - check with provider.');
                }

                if (data.claimsMade > 0) {
                    results.notes.push(`${data.claimsMade} claims made - may reduce eligible refund amount.`);
                }

                if (data.isFinanced) {
                    results.notes.push('Financed warranty - refund may be applied to outstanding balance.');
                }

                // Add next steps
                results.nextSteps = [
                    { icon: 'fas fa-phone', text: 'Contact your warranty provider to initiate cancellation' },
                    { icon: 'fas fa-file-alt', text: 'Submit written cancellation request with policy details' },
                    { icon: 'fas fa-calendar', text: 'Note any required notice periods or processing timeframes' },
                    { icon: 'fas fa-receipt', text: 'Keep records of all communications and documentation' }
                ];

                if (results.isEligible) {
                    results.nextSteps.push({ 
                        icon: 'fas fa-money-check', 
                        text: 'Expect refund processing within 30-45 business days' 
                    });
                }
            }

            displayResults() {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update status badge
                this.updateStatusBadge();

                // Update main stats
                document.getElementById('refundAmount').textContent = `$${this.results.refundAmount.toFixed(2)}`;
                document.getElementById('usedAmount').textContent = `$${this.results.usedAmount.toFixed(2)}`;
                document.getElementById('totalFees').textContent = `$${this.results.totalFees.toFixed(2)}`;
                document.getElementById('refundPercentage').textContent = `${this.results.refundPercentage.toFixed(0)}%`;

                // Update sections
                this.updateCalculationSteps();
                this.updateTimeline();
                this.updateImportantNotes();
                this.updateNextSteps();

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateStatusBadge() {
                const statusBadge = document.getElementById('refundStatus');
                const statusText = document.getElementById('statusText');

                if (!this.results.isEligible) {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-none text-red-800';
                    statusText.innerHTML = '<i class="fas fa-times-circle mr-2"></i>Not Eligible';
                } else if (this.results.refundAmount < this.results.data.originalCost * 0.5) {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-partial text-yellow-800';
                    statusText.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i>Partial Refund';
                } else {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-eligible text-green-800';
                    statusText.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Refund Eligible';
                }
            }

            updateCalculationSteps() {
                const stepsHtml = this.results.steps.map(step => `
                    <div class="calculation-step">
                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                            <div>
                                <span class="font-medium text-blue-600">Step ${step.step}:</span>
                                <span class="text-gray-800 ml-2">${step.description}</span>
                                <p class="text-sm text-gray-600 mt-1">${step.calculation}</p>
                            </div>
                            <div class="font-bold text-lg ${step.result.includes('-') ? 'text-red-600' : 'text-green-600'}">
                                ${step.result}
                            </div>
                        </div>
                    </div>
                `).join('');

                document.getElementById('calculationSteps').innerHTML = stepsHtml;
            }

            updateTimeline() {
                const data = this.results.data;
                const usagePercentage = (data.monthsUsed / data.warrantyPeriod) * 100;
                
                document.getElementById('progressBar').style.width = `${Math.min(100, usagePercentage)}%`;
                document.getElementById('cancellationMarker').style.left = `${Math.min(100, usagePercentage)}%`;
                document.getElementById('timelineUsed').textContent = `${usagePercentage.toFixed(0)}% Used`;
                document.getElementById('monthsUsedDisplay').textContent = `${data.monthsUsed.toFixed(1)} months`;
                document.getElementById('totalPeriodDisplay').textContent = `${data.warrantyPeriod} months`;
            }

            updateImportantNotes() {
                const notesHtml = this.results.notes.map(note => `
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-info-circle text-blue-500 mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${note}</p>
                    </div>
                `).join('');

                document.getElementById('importantNotes').innerHTML = notesHtml || 
                    '<p class="text-sm text-gray-600">Review your warranty contract for specific terms and conditions.</p>';
            }

            updateNextSteps() {
                const stepsHtml = this.results.nextSteps.map(step => `
                    <div class="flex items-start space-x-3">
                        <i class="${step.icon} text-yellow-600 mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${step.text}</p>
                    </div>
                `).join('');

                document.getElementById('nextSteps').innerHTML = stepsHtml;
            }

            printResults() {
                const printWindow = window.open('', '_blank');
                const printContent = `
                    <html>
                        <title>Warranty Refund Calculation</title>
                        <style>
                            body { font-family: Arial, sans-serif; margin: 20px; }
                            .header { text-align: center; margin-bottom: 30px; }
                            .section { margin-bottom: 20px; }
                            .highlight { background: #f3f4f6; padding: 10px; border-radius: 5px; }
                        </style>
                        <div class="header">
                            <h1>Extended Warranty Refund Calculation</h1>
                            <p>Generated on ${new Date().toLocaleDateString()}</p>
                        </div>
                        <div class="highlight">
                            <h2>Refund Summary</h2>
                            <p>Estimated Refund: $${this.results.refundAmount.toFixed(2)}</p>
                            <p>Original Cost: $${this.results.data.originalCost.toFixed(2)}</p>
                            <p>Total Fees: $${this.results.totalFees.toFixed(2)}</p>
                            <p>Refund Percentage: ${this.results.refundPercentage.toFixed(0)}%</p>
                        </div>
                        <div class="section">
                            <h3>Important Notes</h3>
                            <ul>${this.results.notes.map(note => `<li>${note}</li>`).join('')}</ul>
                        </div>
                    </body>
                    </html>
                `;
                
                printWindow.document.write(printContent);
                printWindow.document.close();
                printWindow.print();
            }

            shareResults() {
                const shareText = `My warranty refund calculation: $${this.results.refundAmount.toFixed(2)} estimated refund (${this.results.refundPercentage.toFixed(0)}%). Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'Warranty Refund Calculation',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Refund calculation copied to clipboard!');
                    });
                }
            }

            resetCalculator() {
                // Reset all form inputs
                const inputs = document.querySelectorAll('input, select');
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        input.checked = false;
                    } else if (input.type === 'date') {
                        // Keep default dates
                    } else {
                        input.value = '';
                    }
                });

                // Hide custom divs
                document.getElementById('customPeriodDiv').classList.add('hidden');
                document.getElementById('cancellationFeeAmount').classList.add('hidden');
                
                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');
                
                // Clear results
                this.results = {};
                
                // Reset default dates
                this.setDefaultDates();
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new WarrantyRefundCalculator();
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