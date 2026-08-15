<?php include 'header.php'; ?>

    <title>Stripe Fee Calculator 2026 - Calculate Payment Processing Fees | Thiyagi.com</title>
    <meta name="description" content="free Stripe fee calculator 2026 - calculate payment processing fees for domestic, international, and business transactions with accurate pricing breakdown.">
    <meta name="keywords" content="stripe calculator 2026, payment fees calculator, stripe processing costs, transaction fee calculator, online payment fees">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Stripe Fee Calculator 2026 - Calculate Payment Processing Fees">
    <meta property="og:description" content="Calculate accurate Stripe payment processing fees for all transaction types.">
    <meta property="og:url" content="https://www.thiyagi.com/stripe-fee-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stripe Fee Calculator 2026 - Calculate Payment Processing Fees">
    <meta name="twitter:description" content="Calculate Stripe payment processing fees with our comprehensive calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%);
    }
    .stripe-card {
        transition: all 0.3s ease;
        border-left: 4px solid #6366f1;
    }
    .stripe-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #4338ca;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card-pulse {
        animation: cardPulse 2s ease-in-out infinite;
    }
    @keyframes cardPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .fee-option {
        background: linear-gradient(45deg, #f0f9ff, #e0f2fe);
        border: 1px solid #7dd3fc;
    }
    .fee-option:hover {
        background: linear-gradient(45deg, #e0f2fe, #bae6fd);
    }
    .fee-breakdown {
        background: linear-gradient(45deg, #fefbff, #f3f4f6);
        border: 1px solid #d1d5db;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Stripe Fee Calculator 2026",
  "description": "Calculate Stripe payment processing fees for domestic, international, and business transactions with accurate pricing breakdown.",
  "url": "https://www.thiyagi.com/stripe-fee-calculator",
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
                        <i class="fas fa-credit-card text-2xl text-indigo-600 card-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Stripe Fee Calculator</h1>
                        <p class="text-indigo-100">Calculate payment processing fees accurately</p>
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
                <li class="text-gray-900 font-medium">Stripe Fee Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Stripe Payment Fee Calculator</h2>
                <p class="text-indigo-100">Calculate processing fees for your Stripe transactions</p>
            </div>
            
            <div class="p-6">
                <form id="stripeForm" class="space-y-6">
                    <!-- Transaction Details -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-dollar-sign text-indigo-500 mr-2"></i>
                                    Transaction Amount ($)
                                </label>
                                <input type="number" id="amount" min="0.01" step="0.01" value="100.00" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="transactionType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-exchange-alt text-indigo-500 mr-2"></i>
                                    Transaction Type
                                </label>
                                <select id="transactionType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="online">Online Payment (Card)</option>
                                    <option value="in-person">In-Person (Terminal)</option>
                                    <option value="international">International Card</option>
                                    <option value="amex">American Express</option>
                                    <option value="ach">ACH Bank Transfer</option>
                                    <option value="sepa">SEPA Debit</option>
                                    <option value="klarna">Klarna</option>
                                    <option value="afterpay">Afterpay</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="currency" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-globe text-indigo-500 mr-2"></i>
                                    Currency
                                </label>
                                <select id="currency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="USD">USD - US Dollar</option>
                                    <option value="EUR">EUR - Euro</option>
                                    <option value="GBP">GBP - British Pound</option>
                                    <option value="CAD">CAD - Canadian Dollar</option>
                                    <option value="AUD">AUD - Australian Dollar</option>
                                    <option value="JPY">JPY - Japanese Yen</option>
                                    <option value="CHF">CHF - Swiss Franc</option>
                                    <option value="SEK">SEK - Swedish Krona</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="volume" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-chart-bar text-indigo-500 mr-2"></i>
                                    Monthly Volume Tier
                                </label>
                                <select id="volume" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="standard">Standard (< $1M/month)</option>
                                    <option value="volume1">Volume ($1M - $10M/month)</option>
                                    <option value="volume2">Volume ($10M+ /month)</option>
                                    <option value="enterprise">Enterprise (Custom rates)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="disputeProtection" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-shield-alt text-indigo-500 mr-2"></i>
                                    Chargeback Protection
                                </label>
                                <select id="disputeProtection" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="none">No Protection</option>
                                    <option value="radar">Stripe Radar (Included)</option>
                                    <option value="chargeback">Chargeback Protection ($0.40/transaction)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subscription" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-sync-alt text-indigo-500 mr-2"></i>
                                    Payment Type
                                </label>
                                <select id="subscription" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="one-time">One-time Payment</option>
                                    <option value="recurring">Recurring/Subscription</option>
                                    <option value="marketplace">Marketplace Payment</option>
                                    <option value="connect">Stripe Connect</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-plus text-indigo-500 mr-2"></i>
                            Additional Services
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="invoicing" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Invoicing (0.5%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="atlas" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Atlas ($500/year)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="terminal" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Terminal Hardware</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="express" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Express Payouts (1%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="climate" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Climate (0.5%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="sigma" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Sigma ($20/month)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk Calculator -->
                    <div class="form-group bg-gray-50 p-4 rounded-lg">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-calculator text-indigo-500 mr-2"></i>
                            Bulk Transaction Calculator
                        </label>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="bulkCount" class="block text-xs text-gray-600 mb-1">Number of Transactions</label>
                                <input type="number" id="bulkCount" min="1" value="1" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="timeframe" class="block text-xs text-gray-600 mb-1">Timeframe</label>
                                <select id="timeframe" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                    <option value="day">Per Day</option>
                                    <option value="week">Per Week</option>
                                    <option value="month">Per Month</option>
                                    <option value="year">Per Year</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateStripeFees()" 
                                class="w-full bg-gradient-to-r from-indigo-500 to-indigo-600 text-white font-bold py-4 px-6 rounded-lg hover:from-indigo-600 hover:to-indigo-700 focus:ring-4 focus:ring-indigo-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Stripe Fees
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Fee Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-receipt text-indigo-500 mr-3"></i>
                    Fee Breakdown
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="stripe-card bg-blue-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-blue-800 mb-4">Processing Fee</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Rate:</span>
                                <span id="processingRate" class="font-medium text-blue-800">2.9%</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Fixed Fee:</span>
                                <span id="fixedFee" class="font-medium text-blue-800">$0.30</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Total Fee:</span>
                                <span id="processingFee" class="font-medium text-blue-800">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="stripe-card bg-green-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">Additional Services</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Protection:</span>
                                <span id="protectionFee" class="font-medium text-green-800">$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Express Payout:</span>
                                <span id="expressFee" class="font-medium text-green-800">$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Other Services:</span>
                                <span id="additionalFees" class="font-medium text-green-800">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="stripe-card bg-purple-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-purple-800 mb-4">Net Amount</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Transaction:</span>
                                <span id="transactionAmount" class="font-medium text-purple-800">$100.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Total Fees:</span>
                                <span id="totalFees" class="font-medium text-purple-800">$0.00</span>
                            </div>
                            <div class="flex justify-between border-t pt-2">
                                <span class="text-sm text-purple-600 font-semibold">You Receive:</span>
                                <span id="netAmount" class="font-bold text-purple-900">$0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bulk Analysis -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-line text-indigo-500 mr-3"></i>
                    Bulk Transaction Analysis
                </h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <div class="fee-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Total Volume</h4>
                        <p id="totalVolume" class="text-2xl font-bold text-gray-900">$0</p>
                    </div>
                    <div class="fee-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Total Fees</h4>
                        <p id="totalBulkFees" class="text-2xl font-bold text-red-600">$0</p>
                    </div>
                    <div class="fee-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Net Revenue</h4>
                        <p id="netRevenue" class="text-2xl font-bold text-green-600">$0</p>
                    </div>
                    <div class="fee-breakdown p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Effective Rate</h4>
                        <p id="effectiveRate" class="text-2xl font-bold text-blue-600">0%</p>
                    </div>
                </div>
            </div>

            <!-- Comparison -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-balance-scale text-indigo-500 mr-3"></i>
                    Fee Comparison & Tips
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Other Payment Processors</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">PayPal:</span>
                                <span id="paypalComparison" class="text-sm font-medium">2.9% + $0.30</span>
                            </div>
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">Square:</span>
                                <span id="squareComparison" class="text-sm font-medium">2.6% + $0.10</span>
                            </div>
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">Authorize.Net:</span>
                                <span id="authorizeComparison" class="text-sm font-medium">2.9% + $0.30</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Optimization Tips</h4>
                        <div id="optimizationTips" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Fee Calculation</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyCalculation()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Calculation
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class StripeFeeCalculator {
            constructor() {
                this.results = null;
                this.feeStructure = {
                    online: { rate: 2.9, fixed: 0.30 },
                    'in-person': { rate: 2.7, fixed: 0.05 },
                    international: { rate: 3.4, fixed: 0.30 },
                    amex: { rate: 3.4, fixed: 0.30 },
                    ach: { rate: 0.8, fixed: 5.00, cap: 5.00 },
                    sepa: { rate: 0.8, fixed: 0.0 },
                    klarna: { rate: 3.2, fixed: 0.30 },
                    afterpay: { rate: 6.0, fixed: 0.30 }
                };
            }

            calculate() {
                const amount = parseFloat(document.getElementById('amount').value);
                const transactionType = document.getElementById('transactionType').value;
                const currency = document.getElementById('currency').value;
                const volume = document.getElementById('volume').value;
                const disputeProtection = document.getElementById('disputeProtection').value;
                const subscription = document.getElementById('subscription').value;
                const bulkCount = parseInt(document.getElementById('bulkCount').value);
                const timeframe = document.getElementById('timeframe').value;

                if (!amount || amount <= 0) {
                    alert('Please enter a valid transaction amount!');
                    return;
                }

                // Get base fee structure
                let feeData = this.feeStructure[transactionType];
                let processingRate = feeData.rate;
                let fixedFee = feeData.fixed;

                // Apply volume discounts
                if (volume === 'volume1') {
                    processingRate *= 0.95; // 5% discount
                } else if (volume === 'volume2') {
                    processingRate *= 0.90; // 10% discount
                } else if (volume === 'enterprise') {
                    processingRate *= 0.85; // 15% discount
                }

                // Currency adjustments
                if (currency !== 'USD') {
                    processingRate += 0.1; // Additional 0.1% for non-USD
                }

                // Calculate processing fee
                const processingFee = (amount * processingRate / 100) + fixedFee;

                // Calculate additional services
                let protectionFee = 0;
                if (disputeProtection === 'chargeback') {
                    protectionFee = 0.40;
                }

                let expressFee = 0;
                if (document.getElementById('express').checked) {
                    expressFee = amount * 0.01; // 1%
                }

                let additionalFees = 0;
                if (document.getElementById('invoicing').checked) {
                    additionalFees += amount * 0.005; // 0.5%
                }
                if (document.getElementById('climate').checked) {
                    additionalFees += amount * 0.005; // 0.5%
                }
                if (document.getElementById('sigma').checked) {
                    additionalFees += 20 / 30; // $20/month ≈ $0.67/day
                }
                if (document.getElementById('atlas').checked) {
                    additionalFees += 500 / 365; // $500/year ≈ $1.37/day
                }

                // Calculate totals
                const totalFees = processingFee + protectionFee + expressFee + additionalFees;
                const netAmount = amount - totalFees;

                // Bulk calculations
                const totalVolume = amount * bulkCount;
                const totalBulkFees = totalFees * bulkCount;
                const netRevenue = netAmount * bulkCount;
                const effectiveRate = (totalBulkFees / totalVolume) * 100;

                this.results = {
                    amount,
                    transactionType,
                    currency,
                    volume,
                    disputeProtection,
                    subscription,
                    bulkCount,
                    timeframe,
                    processingRate: processingRate.toFixed(2),
                    fixedFee: fixedFee.toFixed(2),
                    processingFee: processingFee.toFixed(2),
                    protectionFee: protectionFee.toFixed(2),
                    expressFee: expressFee.toFixed(2),
                    additionalFees: additionalFees.toFixed(2),
                    totalFees: totalFees.toFixed(2),
                    netAmount: netAmount.toFixed(2),
                    totalVolume: totalVolume.toFixed(2),
                    totalBulkFees: totalBulkFees.toFixed(2),
                    netRevenue: netRevenue.toFixed(2),
                    effectiveRate: effectiveRate.toFixed(3)
                };

                this.displayResults();
            }

            displayResults() {
                // Fee breakdown
                document.getElementById('processingRate').textContent = `${this.results.processingRate}%`;
                document.getElementById('fixedFee').textContent = `$${this.results.fixedFee}`;
                document.getElementById('processingFee').textContent = `$${this.results.processingFee}`;
                document.getElementById('protectionFee').textContent = `$${this.results.protectionFee}`;
                document.getElementById('expressFee').textContent = `$${this.results.expressFee}`;
                document.getElementById('additionalFees').textContent = `$${this.results.additionalFees}`;
                document.getElementById('transactionAmount').textContent = `$${this.results.amount.toFixed(2)}`;
                document.getElementById('totalFees').textContent = `$${this.results.totalFees}`;
                document.getElementById('netAmount').textContent = `$${this.results.netAmount}`;

                // Bulk analysis
                document.getElementById('totalVolume').textContent = `$${this.formatNumber(this.results.totalVolume)}`;
                document.getElementById('totalBulkFees').textContent = `$${this.formatNumber(this.results.totalBulkFees)}`;
                document.getElementById('netRevenue').textContent = `$${this.formatNumber(this.results.netRevenue)}`;
                document.getElementById('effectiveRate').textContent = `${this.results.effectiveRate}%`;

                // Comparisons
                document.getElementById('paypalComparison').textContent = `$${((this.results.amount * 2.9 / 100) + 0.30).toFixed(2)}`;
                document.getElementById('squareComparison').textContent = `$${((this.results.amount * 2.6 / 100) + 0.10).toFixed(2)}`;
                document.getElementById('authorizeComparison').textContent = `$${((this.results.amount * 2.9 / 100) + 0.30).toFixed(2)}`;

                // Optimization tips
                const tips = this.generateOptimizationTips();
                const tipsDiv = document.getElementById('optimizationTips');
                tipsDiv.innerHTML = tips.map(tip => `
                    <div class="flex items-start space-x-2">
                        <i class="fas fa-lightbulb text-yellow-500 mt-1 text-xs"></i>
                        <span class="text-sm text-gray-700">${tip}</span>
                    </div>
                `).join('');

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            generateOptimizationTips() {
                const tips = [];
                const effectiveRate = parseFloat(this.results.effectiveRate);

                if (effectiveRate > 3.0) {
                    tips.push('Consider ACH payments for lower fees on larger amounts');
                }

                if (this.results.transactionType === 'international') {
                    tips.push('Use local payment methods when possible to reduce international fees');
                }

                if (this.results.bulkCount > 100) {
                    tips.push('Contact Stripe for volume pricing if you process high transaction volumes');
                }

                tips.push('Enable Stripe Radar for fraud protection at no extra cost');
                tips.push('Use webhooks to automate reconciliation and reduce manual work');

                return tips.slice(0, 4);
            }

            formatNumber(num) {
                return parseFloat(num).toLocaleString('en-US');
            }

            getCalculationText() {
                return `Stripe Fee: $${this.results.totalFees} on $${this.results.amount} transaction (${this.results.effectiveRate}% effective rate)`;
            }
        }

        const stripeCalc = new StripeFeeCalculator();

        function calculateStripeFees() {
            stripeCalc.calculate();
        }

        function shareOnFacebook() {
            if (!stripeCalc.results) return;
            
            const text = `${stripeCalc.getCalculationText()}. Calculate your Stripe fees at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!stripeCalc.results) return;
            
            const text = `${stripeCalc.getCalculationText()} 💳 Calculate yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyCalculation() {
            if (!stripeCalc.results) return;
            
            const text = `Stripe Fee Calculation:
${stripeCalc.getCalculationText()}
Processing Fee: $${stripeCalc.results.processingFee}
Net Amount: $${stripeCalc.results.netAmount}
Bulk (${stripeCalc.results.bulkCount} transactions): $${stripeCalc.results.netRevenue}

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Calculation copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>