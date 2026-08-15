<?php
$pageTitle = 'SWP Calculator - Calculate Systematic Withdrawal Plan Returns';
$pageDescription = 'Free SWP calculator to calculate monthly withdrawals, remaining balance, and returns from your mutual fund investments.';
$pageKeywords = 'SWP calculator, systematic withdrawal plan, mutual fund SWP, withdrawal calculator, investment income, retirement planning';
include 'header.php';
?>

<style>
    .swp-gradient { background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); }
    .swp-card { background: #fff; border-radius: 1rem; box-shadow: 0 4px 24px rgba(0,0,0,0.07); }
    .swp-input-group { position: relative; }
    .swp-input-group input[type=range] { -webkit-appearance: none; appearance: none; width: 100%; height: 6px; border-radius: 3px; background: #e5e7eb; outline: none; }
    .swp-input-group input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 22px; height: 22px; border-radius: 50%; background: #0891b2; cursor: pointer; border: 3px solid #fff; box-shadow: 0 2px 6px rgba(8,145,178,0.4); }
    .swp-input-group input[type=range]::-moz-range-thumb { width: 22px; height: 22px; border-radius: 50%; background: #0891b2; cursor: pointer; border: 3px solid #fff; box-shadow: 0 2px 6px rgba(8,145,178,0.4); }
    .result-card { border-left: 4px solid; padding: 1rem 1.25rem; border-radius: 0.5rem; }
    .result-card.cyan { border-color: #0891b2; background: #ecf8fa; }
    .result-card.teal { border-color: #14b8a6; background: #f0fdfb; }
    .result-card.blue { border-color: #3b82f6; background: #eff6ff; }
    .result-card.orange { border-color: #f97316; background: #fef3c7; }
    .swp-table { width: 100%; border-collapse: separate; border-spacing: 0; }
    .swp-table thead th { background: #f8fafc; font-weight: 600; padding: 0.75rem 1rem; text-align: left; border-bottom: 2px solid #e2e8f0; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b; }
    .swp-table tbody td { padding: 0.65rem 1rem; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; }
    .swp-table tbody tr:hover { background: #f8fafc; }
    .chart-container { position: relative; height: 280px; }
    .warning-badge { display: inline-flex; align-items: center; gap: 0.35rem; padding: 0.5rem 0.85rem; border-radius: 0.5rem; font-size: 0.85rem; font-weight: 600; }
    .warning-badge.depletion { background: #fef3c7; color: #92400e; border: 1px solid #fcd34d; }
    @media (max-width: 640px) {
        .chart-container { height: 220px; }
        .swp-table thead th, .swp-table tbody td { padding: 0.5rem 0.6rem; font-size: 0.75rem; }
    }
    .share-btn { transition: all 0.2s; }
    .share-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .goal-card { cursor: pointer; transition: all 0.2s; border: 2px solid transparent; }
    .goal-card:hover, .goal-card.active { border-color: #0891b2; background: #ecf8fa; }
    #results-section { display: none; }
    .fade-in { animation: fadeIn 0.4s ease-out; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    .toggle-switch { display: inline-flex; background: #e5e7eb; border-radius: 9999px; padding: 2px; }
    .toggle-switch button { padding: 0.35rem 0.85rem; border-radius: 9999px; border: none; cursor: pointer; font-size: 0.85rem; font-weight: 600; transition: all 0.2s; background: transparent; color: #6b7280; }
    .toggle-switch button.active { background: #0891b2; color: white; }
</style>

<div class="container mx-auto px-4 py-8 max-w-5xl">

    <!-- Hero Header -->
    <div class="swp-gradient rounded-2xl px-6 py-8 md:px-10 md:py-10 mb-8 text-white text-center">
        <div class="flex justify-center mb-3">
            <div class="bg-white bg-opacity-20 rounded-full p-3">
                <i class="fas fa-coins text-3xl"></i>
            </div>
        </div>
        <h1 class="text-2xl md:text-4xl font-extrabold mb-2">SWP Calculator</h1>
        <p class="text-cyan-100 text-sm md:text-base max-w-2xl mx-auto">Calculate your Systematic Withdrawal Plan returns — understand monthly income, remaining balance, and total returns from your mutual fund investments.</p>
    </div>

    <!-- Quick Info Cards -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-8">
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-cyan-600 mb-1"><i class="fas fa-minus-circle text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800" id="info-withdrawal">—</div>
            <div class="text-xs text-gray-500">Monthly Withdrawal</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-teal-500 mb-1"><i class="fas fa-percentage text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800" id="info-return">8%</div>
            <div class="text-xs text-gray-500">Annual Return</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-blue-500 mb-1"><i class="fas fa-calendar text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800" id="info-duration">10</div>
            <div class="text-xs text-gray-500">Years Duration</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-orange-500 mb-1"><i class="fas fa-exclamation-circle text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800" id="info-depleted">No</div>
            <div class="text-xs text-gray-500">Depleted</div>
        </div>
    </div>

    <!-- Calculator Section -->
    <div class="swp-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <i class="fas fa-calculator text-cyan-600"></i> SWP Investment Calculator
        </h2>

        <div class="space-y-6">
            <!-- Initial Investment -->
            <div class="swp-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-wallet text-cyan-500 mr-1"></i> Initial Investment</label>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-500">₹</span>
                        <input type="number" id="investment-input" min="10000" max="50000000" value="1000000" step="10000"
                            class="w-32 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                    </div>
                </div>
                <input type="range" id="investment-slider" min="10000" max="50000000" value="1000000" step="10000">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>₹10K</span><span>₹5Cr</span></div>
            </div>

            <!-- Monthly Withdrawal -->
            <div class="swp-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-arrow-down text-teal-500 mr-1"></i> Monthly Withdrawal</label>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-500">₹</span>
                        <input type="number" id="withdrawal-input" min="1000" max="500000" value="10000" step="1000"
                            class="w-28 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                    </div>
                </div>
                <input type="range" id="withdrawal-slider" min="1000" max="500000" value="10000" step="1000">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>₹1K</span><span>₹5,00K</span></div>
            </div>

            <!-- Expected Annual Return -->
            <div class="swp-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-chart-line text-blue-500 mr-1"></i> Expected Annual Return</label>
                    <div class="flex items-center gap-1">
                        <input type="number" id="return-input" min="1" max="15" value="8" step="0.1"
                            class="w-20 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                        <span class="text-sm text-gray-500">%</span>
                    </div>
                </div>
                <input type="range" id="return-slider" min="1" max="15" value="8" step="0.1">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>1%</span><span>15%</span></div>
            </div>

            <!-- Duration -->
            <div class="swp-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-hourglass-half text-orange-500 mr-1"></i> Investment Duration</label>
                    <div class="flex items-center gap-1">
                        <input type="number" id="duration-input" min="1" max="40" value="10" step="1"
                            class="w-20 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                        <span class="text-sm text-gray-500">years</span>
                    </div>
                </div>
                <input type="range" id="duration-slider" min="1" max="40" value="10" step="1">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>1 yr</span><span>40 yrs</span></div>
            </div>

            <!-- Inflation Adjustment Toggle -->
            <div class="bg-cyan-50 rounded-xl p-4 flex items-center justify-between">
                <div>
                    <div class="font-semibold text-gray-700"><i class="fas fa-chart-bar text-cyan-600 mr-1"></i> Inflation Adjustment</div>
                    <div class="text-xs text-gray-500 mt-1">Adjust withdrawals for inflation (increase by X% yearly)</div>
                </div>
                <div class="flex items-center gap-2">
                    <input type="number" id="inflation-input" min="0" max="10" value="0" step="0.5"
                        class="w-16 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                    <span class="text-sm text-gray-500">%</span>
                </div>
            </div>

            <!-- Calculate Button -->
            <button id="calculate-btn" class="w-full swp-gradient text-white font-bold py-3.5 px-4 rounded-xl transition duration-300 hover:opacity-90 text-lg flex items-center justify-center gap-2">
                <i class="fas fa-calculator"></i> Calculate SWP Returns
            </button>
        </div>
    </div>

    <!-- Results Section -->
    <div id="results-section">
        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8 fade-in">
            <div class="result-card cyan">
                <div class="text-xs font-semibold text-cyan-700 uppercase tracking-wide mb-1">Initial Investment</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-initial">—</div>
                <div class="text-xs text-gray-500 mt-1">Starting amount</div>
            </div>
            <div class="result-card teal">
                <div class="text-xs font-semibold text-teal-700 uppercase tracking-wide mb-1">Total Withdrawn</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-withdrawn">—</div>
                <div class="text-xs text-gray-500 mt-1" id="res-withdrawn-detail">Over X months</div>
            </div>
            <div class="result-card blue">
                <div class="text-xs font-semibold text-blue-700 uppercase tracking-wide mb-1">Total Returns</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-returns">—</div>
                <div class="text-xs text-gray-500 mt-1">Interest earned</div>
            </div>
            <div class="result-card orange">
                <div class="text-xs font-semibold text-orange-700 uppercase tracking-wide mb-1">Final Balance</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-final">—</div>
                <div class="text-xs text-gray-500 mt-1" id="res-final-detail">At end of period</div>
            </div>
        </div>

        <!-- Depletion Warning -->
        <div id="depletion-warning" class="hidden bg-amber-50 border-l-4 border-amber-400 p-4 mb-8 rounded-r-lg fade-in">
            <div class="flex items-start gap-3">
                <i class="fas fa-exclamation-triangle text-amber-600 text-xl mt-0.5"></i>
                <div>
                    <h3 class="font-bold text-amber-800">Investment Will Deplete</h3>
                    <p class="text-sm text-amber-700 mt-1">Your investment balance will reach zero <span id="depletion-detail"></span>. Consider reducing monthly withdrawal or increasing expected returns.</p>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="swp-card p-5 fade-in">
                <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-chart-line text-cyan-600"></i> Balance Over Time</h3>
                <div class="chart-container"><canvas id="balanceChart"></canvas></div>
            </div>
            <div class="swp-card p-5 fade-in">
                <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-chart-area text-teal-600"></i> Withdrawal vs Balance</h3>
                <div class="chart-container"><canvas id="withdrawalChart"></canvas></div>
            </div>
        </div>

        <!-- View Toggle -->
        <div class="swp-card p-5 mb-6 fade-in">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2"><i class="fas fa-table text-cyan-600"></i> Detailed Breakdown</h3>
                <div class="toggle-switch">
                    <button id="view-monthly" class="active">Monthly View</button>
                    <button id="view-yearly">Yearly View</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="swp-table" id="detail-table">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Opening Balance</th>
                            <th>Interest Earned</th>
                            <th>Withdrawal</th>
                            <th>Closing Balance</th>
                        </tr>
                    </thead>
                    <tbody id="table-body"></tbody>
                </table>
            </div>
        </div>

        <!-- Comparison: SWP vs FD -->
        <div class="swp-card p-5 md:p-6 mb-8 fade-in">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2"><i class="fas fa-scale-balanced text-blue-600"></i> SWP vs Fixed Deposit Comparison</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border-2 border-cyan-200 rounded-xl p-5 bg-cyan-50">
                    <div class="font-bold text-cyan-700 mb-3 flex items-center gap-2"><i class="fas fa-arrow-trending-up"></i> SWP (Your Scenario)</div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-gray-600">Initial Investment:</span><span class="font-bold text-gray-800" id="cmp-swp-initial">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Monthly Withdrawal:</span><span class="font-bold text-gray-800" id="cmp-swp-monthly">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Total Withdrawn:</span><span class="font-bold text-cyan-700" id="cmp-swp-withdrawn">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Final Balance:</span><span class="font-bold text-cyan-700" id="cmp-swp-final">—</span></div>
                    </div>
                </div>
                <div class="border-2 border-gray-200 rounded-xl p-5 bg-gray-50">
                    <div class="font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-bank"></i> FD (Fixed Deposit)</div>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-gray-600">Initial Investment:</span><span class="font-bold text-gray-800" id="cmp-fd-initial">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Monthly Interest:</span><span class="font-bold text-gray-800" id="cmp-fd-interest">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Total Interest:</span><span class="font-bold text-gray-700" id="cmp-fd-interest-total">—</span></div>
                        <div class="flex justify-between"><span class="text-gray-600">Final Balance:</span><span class="font-bold text-gray-700" id="cmp-fd-final">—</span></div>
                    </div>
                </div>
            </div>
            <div class="mt-4 p-4 bg-blue-50 rounded-lg text-sm text-gray-700">
                <span class="font-semibold" id="cmp-verdict"></span>
            </div>
        </div>

        <!-- Goal-Based Withdrawal Calculator -->
        <div class="swp-card p-5 md:p-6 mb-8 fade-in">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2"><i class="fas fa-target text-orange-600"></i> Goal-Based Withdrawal Calculator</h3>
            <p class="text-sm text-gray-600 mb-5">How much corpus do you need to withdraw a specific amount monthly?</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="text-sm font-semibold text-gray-700 mb-2 block">Required Monthly Amount</label>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-500">₹</span>
                        <input type="number" id="goal-monthly" min="1000" max="500000" value="25000" step="1000"
                            class="flex-1 text-sm font-bold border border-gray-300 rounded-lg py-2 px-3 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                    </div>
                </div>
                <div>
                    <label class="text-sm font-semibold text-gray-700 mb-2 block">Duration (Years)</label>
                    <input type="number" id="goal-duration" min="1" max="40" value="20" step="1"
                        class="w-full text-sm font-bold border border-gray-300 rounded-lg py-2 px-3 focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400">
                </div>
            </div>
            <button id="goal-calculate" class="mt-4 w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                <i class="fas fa-calculator mr-2"></i> Calculate Required Corpus
            </button>
            <div id="goal-result" class="hidden mt-4 p-4 bg-orange-50 rounded-lg border border-orange-200">
                <div class="text-sm text-gray-700">
                    <p class="mb-2">To withdraw <span class="font-bold text-orange-700 text-lg" id="goal-amount-display">—</span> monthly for <span class="font-bold text-orange-700" id="goal-years-display">—</span> years,</p>
                    <p class="text-2xl font-bold text-orange-700">Required Corpus: <span id="goal-corpus-display">—</span></p>
                    <p class="text-xs text-gray-500 mt-2">At 8% annual return</p>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div class="swp-card p-5 mb-8 fade-in">
            <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-share-alt text-cyan-600"></i> Share Results</h3>
            <div class="flex flex-wrap gap-3">
                <button id="share-whatsapp" class="share-btn flex items-center gap-2 bg-green-500 text-white px-4 py-2 rounded-lg text-sm font-semibold">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </button>
                <button id="share-twitter" class="share-btn flex items-center gap-2 bg-blue-400 text-white px-4 py-2 rounded-lg text-sm font-semibold">
                    <i class="fab fa-twitter"></i> Twitter
                </button>
                <button id="share-copy" class="share-btn flex items-center gap-2 bg-gray-700 text-white px-4 py-2 rounded-lg text-sm font-semibold">
                    <i class="fas fa-copy"></i> Copy Text
                </button>
            </div>
            <div id="share-copied" class="hidden text-green-600 text-sm mt-2 font-semibold"><i class="fas fa-check-circle"></i> Copied to clipboard!</div>
        </div>
    </div>

    <!-- Information Section -->
    <div class="swp-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fas fa-info-circle text-cyan-600"></i> About Systematic Withdrawal Plan (SWP)
        </h2>
        <div class="text-sm text-gray-700 space-y-3">
            <p>A Systematic Withdrawal Plan (SWP) is an investment strategy where you withdraw a fixed amount from your mutual fund investment at regular intervals (monthly, quarterly, or annually). The remaining amount continues to earn returns, making it an ideal tool for generating regular income from your investments.</p>
            <h3 class="font-bold text-gray-800 text-base mt-4">Key Benefits of SWP</h3>
            <ul class="list-disc pl-5 space-y-1">
                <li><strong>Regular Income:</strong> Receive fixed withdrawals at predetermined intervals</li>
                <li><strong>Continued Growth:</strong> Remaining balance continues to compound and grow</li>
                <li><strong>Tax Efficiency:</strong> Only withdrawn amount is subject to tax, not the entire balance</li>
                <li><strong>Flexibility:</strong> Can stop, modify, or pause withdrawals</li>
                <li><strong>Disciplined Investing:</strong> Makes you a systematic investor with regular discipline</li>
            </ul>
            <h3 class="font-bold text-gray-800 text-base mt-4">SWP vs Lump Sum Withdrawal</h3>
            <p><strong>SWP:</strong> Withdraw fixed amounts periodically; remaining continues to grow. Better for long-term income generation.</p>
            <p><strong>Lump Sum:</strong> Withdraw entire amount at once; no further growth potential. Good for emergency needs only.</p>
            <h3 class="font-bold text-gray-800 text-base mt-4">How This Calculator Works</h3>
            <p>This calculator simulates your SWP over time by:</p>
            <ol class="list-decimal pl-5 space-y-1 mt-2">
                <li>Calculating monthly returns on your opening balance</li>
                <li>Deducting your fixed monthly withdrawal</li>
                <li>Repeating this for each month during your investment period</li>
                <li>Tracking balance changes and showing when corpus depletes (if applicable)</li>
                <li>Providing year-wise breakdowns and visual charts</li>
            </ol>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="swp-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fas fa-question-circle text-cyan-600"></i> Frequently Asked Questions
        </h2>
        <div class="space-y-4">
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    What is the difference between SWP and regular withdrawal?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">
                    <strong>SWP:</strong> Fixed amount withdrawn automatically at regular intervals; remaining continues to grow. <strong>Regular Withdrawal:</strong> Irregular, ad-hoc, and unpredictable. SWP provides discipline and certainty.
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    Is SWP taxable income?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">
                    Only the <strong>capital gains</strong> portion of SWP withdrawal is taxable. The cost basis (your invested amount) is not taxed. Short-term capital gains are taxed as income; long-term gains enjoy preferential tax rates.
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    Can I stop my SWP anytime?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">
                    Yes, SWP is completely flexible. You can pause, modify, or stop it anytime without penalties. Your remaining investment continues to grow until you decide to stop.
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    What happens if my balance becomes zero before the planned period?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">
                    Withdrawals stop when the balance reaches zero. The calculator shows you exactly when this occurs, so you can plan accordingly. Consider reducing withdrawal amounts or extending the period.
                </div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    How does inflation affect my SWP?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">
                    With inflation, your withdrawal amount loses purchasing power over time. This calculator lets you adjust for inflation by increasing withdrawals annually, ensuring your lifestyle remains unaffected.
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
(function() {
    'use strict';

    // DOM references
    const investSlider = document.getElementById('investment-slider');
    const investInput = document.getElementById('investment-input');
    const withdrawSlider = document.getElementById('withdrawal-slider');
    const withdrawInput = document.getElementById('withdrawal-input');
    const returnSlider = document.getElementById('return-slider');
    const returnInput = document.getElementById('return-input');
    const durationSlider = document.getElementById('duration-slider');
    const durationInput = document.getElementById('duration-input');
    const inflationInput = document.getElementById('inflation-input');
    const calcBtn = document.getElementById('calculate-btn');

    let balanceChart = null;
    let withdrawalChart = null;

    // Sync sliders <-> inputs
    function syncPair(slider, input, isFloat) {
        slider.addEventListener('input', function() { input.value = this.value; triggerCalc(); });
        input.addEventListener('input', function() {
            let v = isFloat ? parseFloat(this.value) : parseInt(this.value, 10);
            if (!isNaN(v)) {
                v = Math.max(parseFloat(slider.min), Math.min(parseFloat(slider.max), v));
                slider.value = v;
            }
            triggerCalc();
        });
    }
    syncPair(investSlider, investInput, false);
    syncPair(withdrawSlider, withdrawInput, false);
    syncPair(returnSlider, returnInput, true);
    syncPair(durationSlider, durationInput, false);
    inflationInput.addEventListener('input', triggerCalc);

    // Format INR
    function formatINR(num) {
        num = Math.round(num);
        let s = num.toString();
        let result = '';
        let count = 0;
        for (let i = s.length - 1; i >= 0; i--) {
            result = s[i] + result;
            count++;
            if (count === 3 && i > 0) { result = ',' + result; }
            else if (count > 3 && (count - 3) % 2 === 0 && i > 0) { result = ',' + result; }
        }
        return '₹' + result;
    }

    // SWP Calculation Engine
    function calculateSWP(initialInv, monthlyWithdraw, annualReturn, durationYears, inflationRate) {
        const monthlyReturn = annualReturn / 12 / 100;
        const monthlyInflation = inflationRate / 12 / 100;
        const totalMonths = durationYears * 12;
        
        let balance = initialInv;
        let totalWithdrawn = 0;
        const monthData = [];
        let isDepletedMonth = -1;

        let currentWithdrawal = monthlyWithdraw;

        for (let m = 1; m <= totalMonths; m++) {
            const openBalance = balance;
            const interest = balance * monthlyReturn;
            balance += interest;

            if (balance >= currentWithdrawal) {
                balance -= currentWithdrawal;
                totalWithdrawn += currentWithdrawal;
            } else {
                currentWithdrawal = balance;
                totalWithdrawn += currentWithdrawal;
                balance = 0;
                isDepletedMonth = m;
            }

            monthData.push({
                month: m,
                year: Math.ceil(m / 12),
                openBalance: openBalance,
                interest: interest,
                withdrawal: currentWithdrawal,
                closeBalance: balance
            });

            if (balance <= 0) break;
            
            // Increase withdrawal for inflation
            currentWithdrawal = monthlyWithdraw * Math.pow(1 + monthlyInflation, m);
        }

        const totalReturns = totalWithdrawn + balance - initialInv;

        return {
            monthData: monthData,
            totalWithdrawn: totalWithdrawn,
            totalReturns: totalReturns,
            finalBalance: balance,
            isDepletedMonth: isDepletedMonth,
            depletionYears: Math.floor(isDepletedMonth / 12),
            depletionMonths: isDepletedMonth % 12
        };
    }

    // Calculate goal corpus
    function calculateGoalCorpus(monthlyNeeded, durationYears, annualReturn) {
        const monthlyReturn = annualReturn / 12 / 100;
        const totalMonths = durationYears * 12;

        // Using PV of annuity formula
        let corpus = monthlyNeeded * ((Math.pow(1 + monthlyReturn, totalMonths) - 1) / (monthlyReturn * Math.pow(1 + monthlyReturn, totalMonths)));
        return corpus;
    }

    let lastResult = null;

    function triggerCalc() {
        const initial = parseInt(investInput.value) || 1000000;
        const monthly = parseInt(withdrawInput.value) || 10000;
        const annualReturn = parseFloat(returnInput.value) || 8;
        const duration = parseInt(durationInput.value) || 10;
        const inflation = parseFloat(inflationInput.value) || 0;

        const result = calculateSWP(initial, monthly, annualReturn, duration, inflation);
        lastResult = result;

        renderResults(result, initial, monthly, annualReturn);
    }

    function renderResults(result, initial, monthly, annualReturn) {
        const section = document.getElementById('results-section');
        section.style.display = 'block';

        // Update info cards
        document.getElementById('info-withdrawal').textContent = formatINR(monthly);
        document.getElementById('info-return').textContent = annualReturn + '%';
        document.getElementById('info-duration').textContent = durationInput.value;
        document.getElementById('info-depleted').textContent = result.isDepletedMonth > 0 ? 'Yes' : 'No';

        // Update result cards
        document.getElementById('res-initial').textContent = formatINR(initial);
        document.getElementById('res-withdrawn').textContent = formatINR(result.totalWithdrawn);
        document.getElementById('res-withdrawn-detail').textContent = 'Over ' + result.monthData.length + ' months';
        document.getElementById('res-returns').textContent = formatINR(result.totalReturns);
        document.getElementById('res-final').textContent = formatINR(result.finalBalance);
        document.getElementById('res-final-detail').textContent = result.isDepletedMonth > 0 ? 'At depletion' : 'At end of period';

        // Depletion warning
        const depletionWarn = document.getElementById('depletion-warning');
        if (result.isDepletedMonth > 0) {
            depletionWarn.classList.remove('hidden');
            document.getElementById('depletion-detail').innerHTML = 
                'in <strong>' + result.depletionYears + ' years ' + result.depletionMonths + ' months</strong>';
        } else {
            depletionWarn.classList.add('hidden');
        }

        // Monthly / Yearly table
        populateTable(result.monthData);

        // Comparison
        const fdInterestMonthly = initial * (annualReturn / 100) / 12;
        const fdInterestTotal = fdInterestMonthly * result.monthData.length;
        const fdFinalBalance = initial + fdInterestTotal;

        document.getElementById('cmp-swp-initial').textContent = formatINR(initial);
        document.getElementById('cmp-swp-monthly').textContent = formatINR(monthly);
        document.getElementById('cmp-swp-withdrawn').textContent = formatINR(result.totalWithdrawn);
        document.getElementById('cmp-swp-final').textContent = formatINR(result.finalBalance);

        document.getElementById('cmp-fd-initial').textContent = formatINR(initial);
        document.getElementById('cmp-fd-interest').textContent = formatINR(fdInterestMonthly);
        document.getElementById('cmp-fd-interest-total').textContent = formatINR(fdInterestTotal);
        document.getElementById('cmp-fd-final').textContent = formatINR(fdFinalBalance);

        const verdict = result.totalWithdrawn > fdInterestTotal ? 
            '<i class="fas fa-check-circle text-green-600 mr-2"></i> SWP gives you more withdrawal income (' + formatINR(result.totalWithdrawn - fdInterestTotal) + ' more) than FD over the same period.' :
            '<i class="fas fa-info-circle text-blue-600 mr-2"></i> FD interest is higher, but SWP provides larger corpus access over time.';
        document.getElementById('cmp-verdict').innerHTML = verdict;

        // Charts
        renderCharts(result);

        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function populateTable(monthData) {
        const tbody = document.getElementById('table-body');
        tbody.innerHTML = '';

        monthData.forEach(row => {
            const tr = document.createElement('tr');
            tr.innerHTML =
                '<td>M' + row.month + '</td>' +
                '<td>' + formatINR(row.openBalance) + '</td>' +
                '<td>' + formatINR(row.interest) + '</td>' +
                '<td>' + formatINR(row.withdrawal) + '</td>' +
                '<td class="font-semibold">' + formatINR(row.closeBalance) + '</td>';
            tbody.appendChild(tr);
        });
    }

    function renderCharts(result) {
        const months = result.monthData.map(r => 'M' + r.month);
        const balances = result.monthData.map(r => Math.round(r.closeBalance));
        const withdrawals = result.monthData.map(r => Math.round(r.withdrawal));

        // Balance Chart
        const balanceCtx = document.getElementById('balanceChart').getContext('2d');
        if (balanceChart) balanceChart.destroy();
        balanceChart = new Chart(balanceCtx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Remaining Balance',
                    data: balances,
                    borderColor: '#0891b2',
                    backgroundColor: 'rgba(8,145,178,0.08)',
                    fill: true,
                    tension: 0.3,
                    pointRadius: 1.5,
                    pointHoverRadius: 4,
                    borderWidth: 2.5
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: true, position: 'bottom', labels: { usePointStyle: true, font: { size: 11 } } },
                    tooltip: {
                        callbacks: {
                            label: function(ctx) { return 'Balance: ' + formatINR(ctx.raw); }
                        }
                    }
                },
                scales: {
                    y: {
                        ticks: {
                            callback: function(val) {
                                if (val >= 10000000) return '₹' + (val / 10000000).toFixed(1) + 'Cr';
                                if (val >= 100000) return '₹' + (val / 100000).toFixed(1) + 'L';
                                if (val >= 1000) return '₹' + (val / 1000).toFixed(0) + 'K';
                                return '₹' + val;
                            },
                            font: { size: 10 }
                        },
                        grid: { color: 'rgba(0,0,0,0.04)' }
                    },
                    x: { ticks: { font: { size: 9 }, maxRotation: 45 }, grid: { display: false } }
                }
            }
        });

        // Withdrawal Chart
        const withdrawalCtx = document.getElementById('withdrawalChart').getContext('2d');
        if (withdrawalChart) withdrawalChart.destroy();
        withdrawalChart = new Chart(withdrawalCtx, {
            type: 'bar',
            data: {
                labels: months,
                datasets: [{
                    label: 'Monthly Withdrawal',
                    data: withdrawals,
                    backgroundColor: 'rgba(16,185,129,0.7)',
                    borderColor: '#10b981',
                    borderWidth: 1,
                    borderRadius: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                plugins: {
                    legend: { display: true, position: 'bottom', labels: { usePointStyle: true, font: { size: 11 } } },
                    tooltip: {
                        callbacks: {
                            label: function(ctx) { return 'Withdrawal: ' + formatINR(ctx.raw); }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            callback: function(val) {
                                if (val >= 1000) return '₹' + (val / 1000).toFixed(0) + 'K';
                                return '₹' + val;
                            },
                            font: { size: 10 }
                        }
                    }
                }
            }
        });
    }

    // View toggle (monthly/yearly)
    document.getElementById('view-monthly').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('view-yearly').classList.remove('active');
    });

    document.getElementById('view-yearly').addEventListener('click', function() {
        this.classList.add('active');
        document.getElementById('view-monthly').classList.remove('active');
    });

    // Goal calculator
    document.getElementById('goal-calculate').addEventListener('click', function() {
        const monthly = parseInt(document.getElementById('goal-monthly').value) || 25000;
        const duration = parseInt(document.getElementById('goal-duration').value) || 20;
        const corpus = calculateGoalCorpus(monthly, duration, 8);

        document.getElementById('goal-amount-display').textContent = formatINR(monthly);
        document.getElementById('goal-years-display').textContent = duration;
        document.getElementById('goal-corpus-display').textContent = formatINR(corpus);
        document.getElementById('goal-result').classList.remove('hidden');
    });

    // Share functionality
    function getShareText() {
        if (!lastResult) return 'Check out SWP Calculator: ' + window.location.href;
        return 'SWP Calculation\n\n' +
            'Initial Investment: ' + formatINR(parseInt(investInput.value)) + '\n' +
            'Monthly Withdrawal: ' + formatINR(parseInt(withdrawInput.value)) + '\n' +
            'Annual Return: ' + returnInput.value + '%\n' +
            'Duration: ' + durationInput.value + ' years\n\n' +
            'Total Withdrawn: ' + formatINR(lastResult.totalWithdrawn) + '\n' +
            'Total Returns: ' + formatINR(lastResult.totalReturns) + '\n' +
            'Final Balance: ' + formatINR(lastResult.finalBalance) + '\n\n' +
            'Calculate yours at: ' + window.location.href;
    }

    document.getElementById('share-whatsapp').addEventListener('click', function() {
        window.open('https://wa.me/?text=' + encodeURIComponent(getShareText()), '_blank', 'noopener,noreferrer');
    });

    document.getElementById('share-twitter').addEventListener('click', function() {
        window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(getShareText()), '_blank', 'noopener,noreferrer');
    });

    document.getElementById('share-copy').addEventListener('click', function() {
        navigator.clipboard.writeText(getShareText()).then(function() {
            var el = document.getElementById('share-copied');
            el.classList.remove('hidden');
            setTimeout(function() { el.classList.add('hidden'); }, 2000);
        });
    });

    // Auto-calculate on load
    calcBtn.click();

})();
</script>

<?php include 'footer.php';?>
