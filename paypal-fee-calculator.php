<?php include 'header.php'; ?>

    <title>PayPal Fee Calculator 2026 - Calculate Transaction Fees | Thiyagi.com</title>
    <meta name="description" content="PayPal fee calculator 2026 - calculate payment processing fees for domestic, international, and business transactions with accurate pricing breakdown.">
    <meta name="keywords" content="paypal calculator 2026, payment fees calculator, paypal processing costs, transaction fee calculator, online payment fees">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="PayPal Fee Calculator 2026 - Calculate Transaction Fees">
    <meta property="og:description" content="Calculate accurate PayPal payment processing fees for all transaction types.">
    <meta property="og:url" content="https://www.thiyagi.com/paypal-fee-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PayPal Fee Calculator 2026 - Calculate Transaction Fees">
    <meta name="twitter:description" content="Calculate PayPal payment processing fees with our comprehensive calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #0070ba 0%, #003087 100%);
    }
    .paypal-card {
        transition: all 0.3s ease;
        border-left: 4px solid #0070ba;
    }
    .paypal-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #003087;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .paypal-pulse {
        animation: paypalPulse 2s ease-in-out infinite;
    }
    @keyframes paypalPulse {
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
    .volume-tier {
        background: linear-gradient(45deg, #fff7ed, #fed7aa);
        border: 1px solid #fdba74;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "PayPal Fee Calculator 2026",
  "description": "Calculate PayPal payment processing fees for domestic, international, and business transactions with accurate pricing breakdown.",
  "url": "https://www.thiyagi.com/paypal-fee-calculator",
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
                        <i class="fab fa-paypal text-2xl text-blue-600 paypal-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">PayPal Fee Calculator</h1>
                        <p class="text-blue-100">Calculate payment processing fees accurately</p>
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
                <li class="text-gray-900 font-medium">PayPal Fee Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">PayPal Payment Fee Calculator</h2>
                <p class="text-blue-100">Calculate processing fees for your PayPal transactions</p>
            </div>
            
            <div class="p-6">
                <form id="paypalForm" class="space-y-6">
                    <!-- Transaction Details -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="amount" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-dollar-sign text-blue-500 mr-2"></i>
                                    Transaction Amount ($)
                                </label>
                                <input type="number" id="amount" min="0.01" step="0.01" value="100.00" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="transactionType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-exchange-alt text-blue-500 mr-2"></i>
                                    Transaction Type
                                </label>
                                <select id="transactionType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="standard">Standard Payment</option>
                                    <option value="goods-services">Goods & Services</option>
                                    <option value="friends-family">Friends & Family</option>
                                    <option value="international">International Payment</option>
                                    <option value="micropayment">Micropayment (< $10)</option>
                                    <option value="subscription">Subscription/Recurring</option>
                                    <option value="marketplace">Marketplace Transaction</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="currency" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-globe text-blue-500 mr-2"></i>
                                    Currency
                                </label>
                                <select id="currency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
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

                            <div class="form-group">
                                <label for="accountType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-user text-blue-500 mr-2"></i>
                                    Account Type
                                </label>
                                <select id="accountType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="personal">Personal Account</option>
                                    <option value="business">Business Account</option>
                                    <option value="premier">Premier Account</option>
                                    <option value="non-profit">Non-profit Account</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="volume" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-chart-bar text-blue-500 mr-2"></i>
                                    Monthly Volume Tier
                                </label>
                                <select id="volume" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="standard">Standard (< $3K/month)</option>
                                    <option value="volume1">Volume 1 ($3K - $10K)</option>
                                    <option value="volume2">Volume 2 ($10K - $100K)</option>
                                    <option value="volume3">Volume 3 ($100K+)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="fundingSource" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-credit-card text-blue-500 mr-2"></i>
                                    Funding Source
                                </label>
                                <select id="fundingSource" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="paypal-balance">PayPal Balance</option>
                                    <option value="bank-account">Bank Account</option>
                                    <option value="credit-card">Credit/Debit Card</option>
                                    <option value="paypal-credit">PayPal Credit</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="deliveryMethod" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-shipping-fast text-blue-500 mr-2"></i>
                                    Delivery Method
                                </label>
                                <select id="deliveryMethod" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="standard">Standard Transfer</option>
                                    <option value="instant">Instant Transfer</option>
                                    <option value="next-day">Next Day Transfer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="protection" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                    Protection Level
                                </label>
                                <select id="protection" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="standard">Standard Protection</option>
                                    <option value="seller">Seller Protection</option>
                                    <option value="buyer">Buyer Protection</option>
                                    <option value="advanced">Advanced Protection</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-plus text-blue-500 mr-2"></i>
                            Additional Services & Features
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="crossBorder" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Cross-border Fee (1.5%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="currencyConversion" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Currency Conversion (2.5%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="invoicing" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">PayPal Invoicing (2.9%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="paypalHere" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">PayPal Here (2.7%)</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="refund" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Refund Processing</span>
                                </label>
                            </div>
                            <div class="fee-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="chargeback" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Chargeback Fee ($20)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Bulk Calculator -->
                    <div class="form-group bg-gray-50 p-4 rounded-lg">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-calculator text-blue-500 mr-2"></i>
                            Bulk Transaction Calculator
                        </label>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div>
                                <label for="bulkCount" class="block text-xs text-gray-600 mb-1">Number of Transactions</label>
                                <input type="number" id="bulkCount" min="1" value="1" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="timeframe" class="block text-xs text-gray-600 mb-1">Timeframe</label>
                                <select id="timeframe" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="day">Per Day</option>
                                    <option value="week">Per Week</option>
                                    <option value="month">Per Month</option>
                                    <option value="year">Per Year</option>
                                </select>
                            </div>
                            <div>
                                <label for="averageAmount" class="block text-xs text-gray-600 mb-1">Average Amount ($)</label>
                                <input type="number" id="averageAmount" min="0.01" step="0.01" value="100.00" 
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculatePayPalFees()" 
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold py-4 px-6 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:ring-4 focus:ring-blue-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate PayPal Fees
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
                    <i class="fas fa-receipt text-blue-500 mr-3"></i>
                    Fee Breakdown
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="paypal-card bg-blue-50 p-6 rounded-lg">
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
                    <div class="paypal-card bg-green-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">Additional Fees</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Cross-border:</span>
                                <span id="crossBorderFee" class="font-medium text-green-800">$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Currency Conv:</span>
                                <span id="conversionFee" class="font-medium text-green-800">$0.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Other Services:</span>
                                <span id="otherFees" class="font-medium text-green-800">$0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="paypal-card bg-purple-50 p-6 rounded-lg">
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

            <!-- Volume Pricing -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-line text-blue-500 mr-3"></i>
                    Volume Pricing Analysis
                </h3>
                <div class="grid md:grid-cols-4 gap-4">
                    <div class="volume-tier p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Total Volume</h4>
                        <p id="totalVolume" class="text-2xl font-bold text-gray-900">$0</p>
                        <p class="text-xs text-gray-600 mt-1" id="volumePeriod">per month</p>
                    </div>
                    <div class="volume-tier p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Total Fees</h4>
                        <p id="totalBulkFees" class="text-2xl font-bold text-red-600">$0</p>
                        <p class="text-xs text-gray-600 mt-1">fees paid</p>
                    </div>
                    <div class="volume-tier p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Net Revenue</h4>
                        <p id="netRevenue" class="text-2xl font-bold text-green-600">$0</p>
                        <p class="text-xs text-gray-600 mt-1">you receive</p>
                    </div>
                    <div class="volume-tier p-4 rounded-lg text-center">
                        <h4 class="text-sm font-semibold text-gray-700 mb-2">Effective Rate</h4>
                        <p id="effectiveRate" class="text-2xl font-bold text-blue-600">0%</p>
                        <p class="text-xs text-gray-600 mt-1">total cost</p>
                    </div>
                </div>
            </div>

            <!-- Comparison & Tips -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-lightbulb text-blue-500 mr-3"></i>
                    Cost Optimization Tips
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Fee Comparison</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">PayPal (Current):</span>
                                <span id="paypalCurrent" class="text-sm font-medium">$0.00</span>
                            </div>
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">Stripe:</span>
                                <span id="stripeComparison" class="text-sm font-medium">2.9% + $0.30</span>
                            </div>
                            <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                                <span class="text-sm">Square:</span>
                                <span id="squareComparison" class="text-sm font-medium">2.6% + $0.10</span>
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
        class PayPalFeeCalculator {
            constructor() {
                this.results = null;
                this.feeStructure = {
                    standard: { rate: 2.9, fixed: 0.30 },
                    'goods-services': { rate: 2.9, fixed: 0.30 },
                    'friends-family': { rate: 0, fixed: 0 },
                    international: { rate: 4.4, fixed: 0.30 },
                    micropayment: { rate: 5.0, fixed: 0.05 },
                    subscription: { rate: 2.9, fixed: 0.30 },
                    marketplace: { rate: 2.9, fixed: 0.30 }
                };
                this.volumeDiscounts = {
                    standard: 1.0,
                    volume1: 0.98,
                    volume2: 0.95,
                    volume3: 0.90
                };
            }

            calculate() {
                const amount = parseFloat(document.getElementById('amount').value);
                const transactionType = document.getElementById('transactionType').value;
                const currency = document.getElementById('currency').value;
                const accountType = document.getElementById('accountType').value;
                const volume = document.getElementById('volume').value;
                const fundingSource = document.getElementById('fundingSource').value;
                const deliveryMethod = document.getElementById('deliveryMethod').value;
                const protection = document.getElementById('protection').value;
                const bulkCount = parseInt(document.getElementById('bulkCount').value);
                const timeframe = document.getElementById('timeframe').value;
                const averageAmount = parseFloat(document.getElementById('averageAmount').value);

                if (!amount || amount <= 0) {
                    alert('Please enter a valid transaction amount!');
                    return;
                }

                // Get base fee structure
                let feeData = this.feeStructure[transactionType];
                let processingRate = feeData.rate;
                let fixedFee = feeData.fixed;

                // Apply volume discounts
                const volumeDiscount = this.volumeDiscounts[volume];
                processingRate *= volumeDiscount;

                // Account type adjustments
                if (accountType === 'non-profit') {
                    processingRate = 2.2; // Special non-profit rate
                }

                // Currency adjustments
                if (currency !== 'USD') {
                    processingRate += 0.4; // Additional fee for non-USD
                }

                // Funding source adjustments
                if (fundingSource === 'credit-card') {
                    processingRate += 0.3; // Additional fee for credit cards
                }

                // Calculate processing fee
                const processingFee = (amount * processingRate / 100) + fixedFee;

                // Additional fees
                let crossBorderFee = 0;
                let conversionFee = 0;
                let otherFees = 0;

                if (document.getElementById('crossBorder').checked) {
                    crossBorderFee = amount * 0.015;
                }

                if (document.getElementById('currencyConversion').checked) {
                    conversionFee = amount * 0.025;
                }

                if (document.getElementById('invoicing').checked) {
                    otherFees += amount * 0.029;
                }

                if (document.getElementById('paypalHere').checked) {
                    otherFees += amount * 0.027;
                }

                if (document.getElementById('chargeback').checked) {
                    otherFees += 20;
                }

                // Delivery method fees
                if (deliveryMethod === 'instant') {
                    otherFees += Math.min(amount * 0.015, 15); // 1.5% or $15 max
                } else if (deliveryMethod === 'next-day') {
                    otherFees += 5;
                }

                // Calculate totals
                const totalFees = processingFee + crossBorderFee + conversionFee + otherFees;
                const netAmount = amount - totalFees;

                // Bulk calculations
                const actualAmount = bulkCount > 1 ? averageAmount : amount;
                const totalVolume = actualAmount * bulkCount;
                const singleTransactionFee = totalFees;
                const totalBulkFees = singleTransactionFee * bulkCount;
                const netRevenue = totalVolume - totalBulkFees;
                const effectiveRate = (totalBulkFees / totalVolume) * 100;

                this.results = {
                    amount,
                    transactionType,
                    currency,
                    accountType,
                    volume,
                    fundingSource,
                    deliveryMethod,
                    protection,
                    bulkCount,
                    timeframe,
                    processingRate: processingRate.toFixed(2),
                    fixedFee: fixedFee.toFixed(2),
                    processingFee: processingFee.toFixed(2),
                    crossBorderFee: crossBorderFee.toFixed(2),
                    conversionFee: conversionFee.toFixed(2),
                    otherFees: otherFees.toFixed(2),
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
                document.getElementById('crossBorderFee').textContent = `$${this.results.crossBorderFee}`;
                document.getElementById('conversionFee').textContent = `$${this.results.conversionFee}`;
                document.getElementById('otherFees').textContent = `$${this.results.otherFees}`;
                document.getElementById('transactionAmount').textContent = `$${this.results.amount.toFixed(2)}`;
                document.getElementById('totalFees').textContent = `$${this.results.totalFees}`;
                document.getElementById('netAmount').textContent = `$${this.results.netAmount}`;

                // Volume analysis
                document.getElementById('totalVolume').textContent = `$${this.formatNumber(this.results.totalVolume)}`;
                document.getElementById('totalBulkFees').textContent = `$${this.formatNumber(this.results.totalBulkFees)}`;
                document.getElementById('netRevenue').textContent = `$${this.formatNumber(this.results.netRevenue)}`;
                document.getElementById('effectiveRate').textContent = `${this.results.effectiveRate}%`;
                document.getElementById('volumePeriod').textContent = `per ${this.results.timeframe}`;

                // Comparisons
                document.getElementById('paypalCurrent').textContent = `$${this.results.totalFees}`;
                document.getElementById('stripeComparison').textContent = `$${((this.results.amount * 2.9 / 100) + 0.30).toFixed(2)}`;
                document.getElementById('squareComparison').textContent = `$${((this.results.amount * 2.6 / 100) + 0.10).toFixed(2)}`;

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

                if (this.results.transactionType === 'friends-family') {
                    tips.push('Friends & Family transactions have no fees when funded by bank account');
                }

                if (effectiveRate > 3.0) {
                    tips.push('Consider bank transfers for larger amounts to reduce percentage fees');
                }

                if (this.results.volume === 'standard' && this.results.totalVolume > 3000) {
                    tips.push('You may qualify for volume pricing - contact PayPal for better rates');
                }

                if (document.getElementById('crossBorder').checked) {
                    tips.push('Use local payment methods when possible to avoid cross-border fees');
                }

                tips.push('Business accounts get access to additional features and reporting');

                return tips.slice(0, 4);
            }

            formatNumber(num) {
                return parseFloat(num).toLocaleString('en-US');
            }

            getCalculationText() {
                return `PayPal Fee: $${this.results.totalFees} on $${this.results.amount} transaction (${this.results.effectiveRate}% effective rate)`;
            }
        }

        const paypalCalc = new PayPalFeeCalculator();

        function calculatePayPalFees() {
            paypalCalc.calculate();
        }

        function shareOnFacebook() {
            if (!paypalCalc.results) return;
            
            const text = `${paypalCalc.getCalculationText()}. Calculate your PayPal fees at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!paypalCalc.results) return;
            
            const text = `${paypalCalc.getCalculationText()} 💳 Calculate yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyCalculation() {
            if (!paypalCalc.results) return;
            
            const text = `PayPal Fee Calculation:
${paypalCalc.getCalculationText()}
Processing Fee: $${paypalCalc.results.processingFee}
Net Amount: $${paypalCalc.results.netAmount}
Bulk (${paypalCalc.results.bulkCount} transactions): $${paypalCalc.results.netRevenue}

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Calculation copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>