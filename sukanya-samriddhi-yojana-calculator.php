<?php
$pageTitle = 'Sukanya Samriddhi Yojana Calculator - Calculate SSY Maturity Amount';
$pageDescription = 'Free Sukanya Samriddhi Yojana calculator to estimate maturity value, interest earned, and yearly growth of your SSY investment.';
$pageKeywords = 'SSY calculator, Sukanya Samriddhi Yojana, SSY maturity calculator, SSY interest rate, girl child savings scheme, SSY returns calculator';
include 'header.php';
?>

<style>
    .ssy-gradient { background: linear-gradient(135deg, #ec4899 0%, #8b5cf6 100%); }
    .ssy-card { background: #fff; border-radius: 1rem; box-shadow: 0 4px 24px rgba(0,0,0,0.07); }
    .ssy-input-group { position: relative; }
    .ssy-input-group input[type=range] { -webkit-appearance: none; appearance: none; width: 100%; height: 6px; border-radius: 3px; background: #e5e7eb; outline: none; }
    .ssy-input-group input[type=range]::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 22px; height: 22px; border-radius: 50%; background: #8b5cf6; cursor: pointer; border: 3px solid #fff; box-shadow: 0 2px 6px rgba(139,92,246,0.4); }
    .ssy-input-group input[type=range]::-moz-range-thumb { width: 22px; height: 22px; border-radius: 50%; background: #8b5cf6; cursor: pointer; border: 3px solid #fff; box-shadow: 0 2px 6px rgba(139,92,246,0.4); }
    .result-card { border-left: 4px solid; padding: 1rem 1.25rem; border-radius: 0.5rem; }
    .result-card.purple { border-color: #8b5cf6; background: #f5f3ff; }
    .result-card.pink { border-color: #ec4899; background: #fdf2f8; }
    .result-card.green { border-color: #10b981; background: #ecfdf5; }
    .result-card.blue { border-color: #3b82f6; background: #eff6ff; }
    .ssy-table { width: 100%; border-collapse: separate; border-spacing: 0; }
    .ssy-table thead th { background: #f8fafc; font-weight: 600; padding: 0.75rem 1rem; text-align: left; border-bottom: 2px solid #e2e8f0; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: #64748b; }
    .ssy-table tbody td { padding: 0.65rem 1rem; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; }
    .ssy-table tbody tr:hover { background: #f8fafc; }
    .ssy-table tbody tr.deposit-row td:first-child::before { content: ''; display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #8b5cf6; margin-right: 6px; }
    .ssy-table tbody tr.growth-row td:first-child::before { content: ''; display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #10b981; margin-right: 6px; }
    .tax-badge { display: inline-flex; align-items: center; gap: 0.35rem; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.8rem; font-weight: 600; }
    .tax-badge.exempt { background: #dcfce7; color: #166534; }
    .chart-container { position: relative; height: 280px; }
    @media (max-width: 640px) {
        .chart-container { height: 220px; }
        .ssy-table thead th, .ssy-table tbody td { padding: 0.5rem 0.6rem; font-size: 0.78rem; }
    }
    .share-btn { transition: all 0.2s; }
    .share-btn:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    .goal-card { cursor: pointer; transition: all 0.2s; border: 2px solid transparent; }
    .goal-card:hover, .goal-card.active { border-color: #8b5cf6; background: #f5f3ff; }
    #results-section { display: none; }
    .fade-in { animation: fadeIn 0.4s ease-out; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
</style>

<div class="container mx-auto px-4 py-8 max-w-5xl">

    <!-- Hero Header -->
    <div class="ssy-gradient rounded-2xl px-6 py-8 md:px-10 md:py-10 mb-8 text-white text-center">
        <div class="flex justify-center mb-3">
            <div class="bg-white bg-opacity-20 rounded-full p-3">
                <i class="fas fa-child text-3xl"></i>
            </div>
        </div>
        <h1 class="text-2xl md:text-4xl font-extrabold mb-2">Sukanya Samriddhi Yojana Calculator</h1>
        <p class="text-pink-100 text-sm md:text-base max-w-2xl mx-auto">Calculate your daughter's SSY maturity amount, interest earned, and yearly growth — based on official Government of India rules.</p>
    </div>

    <!-- Quick Info Cards -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-8">
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-purple-600 mb-1"><i class="fas fa-percent text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800" id="info-rate">8.2%</div>
            <div class="text-xs text-gray-500">Interest Rate (p.a.)</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-pink-500 mb-1"><i class="fas fa-piggy-bank text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800">₹250</div>
            <div class="text-xs text-gray-500">Min. Yearly Deposit</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-indigo-500 mb-1"><i class="fas fa-coins text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800">₹1.5L</div>
            <div class="text-xs text-gray-500">Max. Yearly Deposit</div>
        </div>
        <div class="bg-white rounded-xl p-4 text-center shadow-sm">
            <div class="text-green-500 mb-1"><i class="fas fa-shield-alt text-xl"></i></div>
            <div class="text-lg font-bold text-gray-800">EEE</div>
            <div class="text-xs text-gray-500">Tax Benefit</div>
        </div>
    </div>

    <!-- Calculator Section -->
    <div class="ssy-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <i class="fas fa-calculator text-purple-600"></i> SSY Investment Calculator
        </h2>

        <div class="space-y-6">
            <!-- Girl Child Age -->
            <div class="ssy-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-baby text-pink-400 mr-1"></i> Girl Child's Age</label>
                    <div class="flex items-center gap-2">
                        <input type="number" id="age-input" min="0" max="10" value="1"
                            class="w-16 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
                        <span class="text-sm text-gray-500">years</span>
                    </div>
                </div>
                <input type="range" id="age-slider" min="0" max="10" value="1" step="1">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0 yrs</span><span>10 yrs</span></div>
            </div>

            <!-- Annual Investment -->
            <div class="ssy-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-rupee-sign text-purple-500 mr-1"></i> Annual Investment</label>
                    <div class="flex items-center gap-1">
                        <span class="text-sm text-gray-500">₹</span>
                        <input type="number" id="investment-input" min="250" max="150000" value="50000" step="250"
                            class="w-28 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
                    </div>
                </div>
                <input type="range" id="investment-slider" min="250" max="150000" value="50000" step="250">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>₹250</span><span>₹1,50,000</span></div>
            </div>

            <!-- Interest Rate -->
            <div class="ssy-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-percentage text-green-500 mr-1"></i> Interest Rate</label>
                    <div class="flex items-center gap-1">
                        <input type="number" id="rate-input" min="5" max="12" value="8.2" step="0.1"
                            class="w-20 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
                        <span class="text-sm text-gray-500">%</span>
                    </div>
                </div>
                <input type="range" id="rate-slider" min="5" max="12" value="8.2" step="0.1">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>5%</span><span>12%</span></div>
            </div>

            <!-- Start Year -->
            <div class="ssy-input-group">
                <div class="flex justify-between items-center mb-2">
                    <label class="text-sm font-semibold text-gray-700"><i class="fas fa-calendar-alt text-blue-500 mr-1"></i> Investment Start Year</label>
                    <input type="number" id="startyear-input" min="2015" max="2040" value="<?php echo date('Y'); ?>"
                        class="w-24 text-center text-sm font-bold border border-gray-300 rounded-lg py-1 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
                </div>
            </div>

            <!-- Scheme Duration Info -->
            <div class="bg-purple-50 rounded-xl p-4 flex flex-col sm:flex-row gap-4 text-sm">
                <div class="flex-1 flex items-center gap-2">
                    <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-purple-600 text-xs"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700">Deposit Period</div>
                        <div class="text-gray-500">15 years from account opening</div>
                    </div>
                </div>
                <div class="flex-1 flex items-center gap-2">
                    <div class="w-8 h-8 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-hourglass-end text-pink-600 text-xs"></i>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700">Maturity Period</div>
                        <div class="text-gray-500">21 years from account opening</div>
                    </div>
                </div>
            </div>

            <!-- Calculate Button -->
            <button id="calculate-btn" class="w-full ssy-gradient text-white font-bold py-3.5 px-4 rounded-xl transition duration-300 hover:opacity-90 text-lg flex items-center justify-center gap-2">
                <i class="fas fa-calculator"></i> Calculate Maturity Amount
            </button>
        </div>
    </div>

    <!-- Results Section -->
    <div id="results-section">
        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8 fade-in">
            <div class="result-card purple">
                <div class="text-xs font-semibold text-purple-600 uppercase tracking-wide mb-1">Total Investment</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-invested">—</div>
                <div class="text-xs text-gray-500 mt-1"><span id="res-deposit-years">15</span> years of deposits</div>
            </div>
            <div class="result-card pink">
                <div class="text-xs font-semibold text-pink-600 uppercase tracking-wide mb-1">Interest Earned</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-interest">—</div>
                <div class="text-xs text-gray-500 mt-1">Tax-free interest</div>
            </div>
            <div class="result-card green">
                <div class="text-xs font-semibold text-green-600 uppercase tracking-wide mb-1">Maturity Value</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-maturity">—</div>
                <div class="text-xs text-gray-500 mt-1">Year: <span id="res-maturity-year">—</span></div>
            </div>
            <div class="result-card blue">
                <div class="text-xs font-semibold text-blue-600 uppercase tracking-wide mb-1">Daughter's Age</div>
                <div class="text-2xl font-extrabold text-gray-800" id="res-maturity-age">—</div>
                <div class="text-xs text-gray-500 mt-1">At maturity</div>
            </div>
        </div>

        <!-- Duration Bar -->
        <div class="ssy-card p-5 mb-8 fade-in">
            <div class="flex flex-col sm:flex-row justify-between text-sm mb-3">
                <span class="font-semibold text-gray-700"><i class="fas fa-ruler-horizontal text-purple-500 mr-1"></i> Scheme Timeline</span>
            </div>
            <div class="relative h-6 bg-gray-100 rounded-full overflow-hidden">
                <div class="absolute h-full bg-purple-500 rounded-full" style="width:71.4%" id="deposit-bar"></div>
                <div class="absolute h-full bg-green-400 rounded-full" style="left:71.4%;width:28.6%" id="growth-bar"></div>
            </div>
            <div class="flex justify-between text-xs mt-2 text-gray-500">
                <span><span class="inline-block w-2 h-2 rounded-full bg-purple-500 mr-1"></span>Deposit Period (15 yrs)</span>
                <span><span class="inline-block w-2 h-2 rounded-full bg-green-400 mr-1"></span>Growth Only (6 yrs)</span>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="ssy-card p-5 fade-in">
                <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-chart-pie text-pink-500"></i> Investment vs Interest</h3>
                <div class="chart-container"><canvas id="pieChart"></canvas></div>
            </div>
            <div class="ssy-card p-5 fade-in">
                <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-chart-line text-purple-500"></i> Yearly Balance Growth</h3>
                <div class="chart-container"><canvas id="lineChart"></canvas></div>
            </div>
        </div>

        <!-- Year-wise Table -->
        <div class="ssy-card p-5 md:p-6 mb-8 fade-in">
            <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2"><i class="fas fa-table text-purple-600"></i> Year-wise Breakdown</h3>
            <div class="overflow-x-auto">
                <table class="ssy-table" id="yearly-table">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Calendar Year</th>
                            <th>Deposit</th>
                            <th>Interest</th>
                            <th>Cumulative Deposit</th>
                            <th>Balance</th>
                        </tr>
                    </thead>
                    <tbody id="table-body"></tbody>
                </table>
            </div>
        </div>

        <!-- Share Results -->
        <div class="ssy-card p-5 mb-8 fade-in">
            <h3 class="text-sm font-bold text-gray-700 mb-3 flex items-center gap-2"><i class="fas fa-share-alt text-purple-600"></i> Share Results</h3>
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

    <!-- Tax Benefits Section -->
    <div class="ssy-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fas fa-receipt text-green-600"></i> SSY Tax Benefits (EEE Category)
        </h2>
        <p class="text-sm text-gray-600 mb-5">Sukanya Samriddhi Yojana qualifies for the <strong>EEE (Exempt-Exempt-Exempt)</strong> tax benefit — meaning your investment, interest, and maturity amount are all tax-free.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-green-50 rounded-xl p-5 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-hand-holding-usd text-green-600 text-xl"></i>
                </div>
                <div class="font-bold text-gray-800 mb-1">Investment</div>
                <span class="tax-badge exempt"><i class="fas fa-check-circle"></i> Tax Deductible</span>
                <p class="text-xs text-gray-500 mt-2">Under Section 80C up to ₹1.5 lakh</p>
            </div>
            <div class="bg-green-50 rounded-xl p-5 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-coins text-green-600 text-xl"></i>
                </div>
                <div class="font-bold text-gray-800 mb-1">Interest Earned</div>
                <span class="tax-badge exempt"><i class="fas fa-check-circle"></i> Tax Free</span>
                <p class="text-xs text-gray-500 mt-2">Annual interest is not taxable</p>
            </div>
            <div class="bg-green-50 rounded-xl p-5 text-center">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fas fa-gift text-green-600 text-xl"></i>
                </div>
                <div class="font-bold text-gray-800 mb-1">Maturity Amount</div>
                <span class="tax-badge exempt"><i class="fas fa-check-circle"></i> Tax Free</span>
                <p class="text-xs text-gray-500 mt-2">Full amount is exempt from tax</p>
            </div>
        </div>
    </div>

    <!-- Goal Planner -->
    <div class="ssy-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fas fa-bullseye text-pink-500"></i> Goal Planner
        </h2>
        <p class="text-sm text-gray-600 mb-5">Select a goal to see how SSY can help you plan for your daughter's future.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-5">
            <div class="goal-card rounded-xl p-5 bg-white shadow-sm" data-goal="education" data-amount="100000">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-graduation-cap text-blue-600"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-800">Education Fund</div>
                        <div class="text-xs text-gray-500">₹1,00,000/year investment</div>
                    </div>
                </div>
                <div class="mt-3 text-sm text-gray-600">Build a corpus for higher education expenses including college tuition and professional courses.</div>
                <div class="mt-2 text-xs font-semibold text-blue-600">Estimated Maturity: <span class="goal-maturity">—</span></div>
            </div>
            <div class="goal-card rounded-xl p-5 bg-white shadow-sm" data-goal="marriage" data-amount="150000">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-heart text-pink-600"></i>
                    </div>
                    <div>
                        <div class="font-bold text-gray-800">Marriage Fund</div>
                        <div class="text-xs text-gray-500">₹1,50,000/year investment</div>
                    </div>
                </div>
                <div class="mt-3 text-sm text-gray-600">Create a substantial fund for your daughter's wedding and future financial security.</div>
                <div class="mt-2 text-xs font-semibold text-pink-600">Estimated Maturity: <span class="goal-maturity">—</span></div>
            </div>
        </div>
    </div>

    <!-- About SSY Section -->
    <div class="ssy-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
            <i class="fas fa-info-circle text-blue-600"></i> About Sukanya Samriddhi Yojana
        </h2>
        <div class="text-sm text-gray-700 space-y-3">
            <p>Sukanya Samriddhi Yojana (SSY) is a government-backed savings scheme launched under the <strong>Beti Bachao Beti Padhao</strong> campaign. It is designed to encourage parents to build a fund for the future education and marriage expenses of their girl child.</p>
            <h3 class="font-bold text-gray-800 text-base mt-4">Key Features</h3>
            <ul class="list-disc pl-5 space-y-1">
                <li>Account can be opened for a girl child <strong>below 10 years</strong> of age</li>
                <li>Parents/guardians can open account at any post office or authorized bank</li>
                <li>Minimum annual deposit: <strong>₹250</strong>; Maximum: <strong>₹1,50,000</strong></li>
                <li>Deposits are made for the first <strong>15 years</strong> from the date of account opening</li>
                <li>Account matures <strong>21 years</strong> from the date of opening</li>
                <li>Interest is compounded annually at the rate set by the Government each quarter</li>
                <li>Current interest rate: <strong>8.2% per annum</strong> (Q1 FY 2025-26)</li>
                <li>Maximum 2 accounts allowed (one per girl child, max 2 girl children)</li>
            </ul>
            <h3 class="font-bold text-gray-800 text-base mt-4">Partial Withdrawal</h3>
            <p>Up to <strong>50%</strong> of the balance can be withdrawn after the girl child turns 18, for higher education purposes.</p>
            <h3 class="font-bold text-gray-800 text-base mt-4">Premature Closure</h3>
            <p>Premature closure is allowed after the girl child turns 18 for marriage, or in case of medical emergency of the account holder.</p>
            <h3 class="font-bold text-gray-800 text-base mt-4">How Interest is Calculated</h3>
            <p>Interest is compounded annually on the balance. For each year during the deposit period (15 years), the annual deposit is added and interest is applied on the total balance. From year 16 to 21, no deposits are made but interest continues to compound on the existing balance.</p>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="ssy-card p-6 md:p-8 mb-8">
        <h2 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
            <i class="fas fa-question-circle text-purple-600"></i> Frequently Asked Questions
        </h2>
        <div class="space-y-4" id="faq-section">
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    What is the current SSY interest rate?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">The current Sukanya Samriddhi Yojana interest rate is <strong>8.2% per annum</strong> for Q1 FY 2025-26. The rate is revised quarterly by the Government of India.</div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    Who can open a Sukanya Samriddhi account?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">A parent or legal guardian of a girl child below 10 years of age can open the account. A maximum of two SSY accounts can be opened — one for each girl child.</div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    How long is the SSY deposit period?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">Deposits are required for the first <strong>15 years</strong> from the date of opening. After 15 years, no further deposits are needed, but the balance continues to earn interest until the account matures at 21 years.</div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    When does the SSY account mature?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">The SSY account matures <strong>21 years</strong> from the date of opening. At maturity, the entire amount including all accrued interest is paid to the account holder (the girl child).</div>
            </div>
            <div class="border border-gray-200 rounded-lg">
                <button class="faq-toggle w-full text-left px-5 py-4 font-semibold text-gray-800 flex items-center justify-between text-sm" onclick="this.nextElementSibling.classList.toggle('hidden');this.querySelector('i').classList.toggle('fa-chevron-down');this.querySelector('i').classList.toggle('fa-chevron-up');">
                    Is the SSY maturity amount taxable?
                    <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                </button>
                <div class="px-5 pb-4 text-sm text-gray-600 hidden">No. SSY falls under the <strong>EEE (Exempt-Exempt-Exempt)</strong> category. The deposit qualifies for Section 80C deduction, the interest earned is tax-free, and the maturity amount is also completely tax-free.</div>
            </div>
        </div>
    </div>

</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
(function() {
    'use strict';

    // DOM element references
    const ageSlider = document.getElementById('age-slider');
    const ageInput = document.getElementById('age-input');
    const investSlider = document.getElementById('investment-slider');
    const investInput = document.getElementById('investment-input');
    const rateSlider = document.getElementById('rate-slider');
    const rateInput = document.getElementById('rate-input');
    const startYearInput = document.getElementById('startyear-input');
    const calcBtn = document.getElementById('calculate-btn');

    const DEPOSIT_YEARS = 15;
    const MATURITY_YEARS = 21;

    let pieChart = null;
    let lineChart = null;

    // Sync sliders <-> inputs
    function syncPair(slider, input, isFloat) {
        slider.addEventListener('input', function() { input.value = this.value; });
        input.addEventListener('input', function() {
            let v = isFloat ? parseFloat(this.value) : parseInt(this.value, 10);
            if (!isNaN(v)) {
                v = Math.max(parseFloat(slider.min), Math.min(parseFloat(slider.max), v));
                slider.value = v;
            }
        });
    }
    syncPair(ageSlider, ageInput, false);
    syncPair(investSlider, investInput, false);
    syncPair(rateSlider, rateInput, true);

    // Format currency in Indian style
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

    // Core SSY calculation engine
    function calculateSSY(annualDeposit, rate, startYear, childAge) {
        const r = rate / 100;
        let balance = 0;
        let totalDeposit = 0;
        const yearData = [];

        for (let yr = 1; yr <= MATURITY_YEARS; yr++) {
            let deposit = 0;
            if (yr <= DEPOSIT_YEARS) {
                deposit = annualDeposit;
            }
            balance += deposit;
            totalDeposit += deposit;
            const interest = balance * r;
            balance += interest;

            yearData.push({
                year: yr,
                calendarYear: startYear + yr - 1,
                deposit: deposit,
                interest: interest,
                cumulativeDeposit: totalDeposit,
                balance: balance
            });
        }

        return {
            totalInvested: totalDeposit,
            totalInterest: balance - totalDeposit,
            maturityValue: balance,
            maturityYear: startYear + MATURITY_YEARS - 1,
            maturityAge: childAge + MATURITY_YEARS,
            yearData: yearData
        };
    }

    // Render results
    function renderResults(data) {
        const section = document.getElementById('results-section');
        section.style.display = 'block';

        document.getElementById('res-invested').textContent = formatINR(data.totalInvested);
        document.getElementById('res-interest').textContent = formatINR(data.totalInterest);
        document.getElementById('res-maturity').textContent = formatINR(data.maturityValue);
        document.getElementById('res-maturity-year').textContent = data.maturityYear;
        document.getElementById('res-maturity-age').textContent = data.maturityAge + ' years';
        document.getElementById('res-deposit-years').textContent = DEPOSIT_YEARS;

        // Table
        const tbody = document.getElementById('table-body');
        tbody.innerHTML = '';
        data.yearData.forEach(function(row) {
            const tr = document.createElement('tr');
            tr.className = row.year <= DEPOSIT_YEARS ? 'deposit-row' : 'growth-row';
            tr.innerHTML =
                '<td>' + row.year + '</td>' +
                '<td>' + row.calendarYear + '</td>' +
                '<td>' + (row.deposit > 0 ? formatINR(row.deposit) : '—') + '</td>' +
                '<td>' + formatINR(row.interest) + '</td>' +
                '<td>' + formatINR(row.cumulativeDeposit) + '</td>' +
                '<td class="font-semibold">' + formatINR(row.balance) + '</td>';
            tbody.appendChild(tr);
        });

        renderCharts(data);

        // Scroll to results
        section.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Render Charts
    function renderCharts(data) {
        // Pie Chart
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        if (pieChart) pieChart.destroy();
        pieChart = new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: ['Total Invested', 'Interest Earned'],
                datasets: [{
                    data: [Math.round(data.totalInvested), Math.round(data.totalInterest)],
                    backgroundColor: ['#8b5cf6', '#ec4899'],
                    borderWidth: 0,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'bottom', labels: { padding: 16, usePointStyle: true, font: { size: 12 } } },
                    tooltip: {
                        callbacks: {
                            label: function(ctx) {
                                const total = ctx.dataset.data.reduce(function(a, b){ return a + b; }, 0);
                                const pct = ((ctx.raw / total) * 100).toFixed(1);
                                return ctx.label + ': ' + formatINR(ctx.raw) + ' (' + pct + '%)';
                            }
                        }
                    }
                },
                cutout: '62%'
            }
        });

        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        if (lineChart) lineChart.destroy();
        const labels = data.yearData.map(function(r) { return r.calendarYear; });
        const balances = data.yearData.map(function(r) { return Math.round(r.balance); });
        const deposits = data.yearData.map(function(r) { return Math.round(r.cumulativeDeposit); });

        lineChart = new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Total Balance',
                        data: balances,
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139,92,246,0.08)',
                        fill: true,
                        tension: 0.3,
                        pointRadius: 2,
                        pointHoverRadius: 5,
                        borderWidth: 2.5
                    },
                    {
                        label: 'Total Deposited',
                        data: deposits,
                        borderColor: '#ec4899',
                        backgroundColor: 'rgba(236,72,153,0.05)',
                        fill: true,
                        tension: 0.3,
                        pointRadius: 2,
                        pointHoverRadius: 5,
                        borderWidth: 2,
                        borderDash: [5, 3]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: { mode: 'index', intersect: false },
                plugins: {
                    legend: { position: 'bottom', labels: { padding: 16, usePointStyle: true, font: { size: 12 } } },
                    tooltip: {
                        callbacks: {
                            label: function(ctx) { return ctx.dataset.label + ': ' + formatINR(ctx.raw); }
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
                            font: { size: 11 }
                        },
                        grid: { color: 'rgba(0,0,0,0.04)' }
                    },
                    x: {
                        ticks: { font: { size: 10 }, maxRotation: 45 },
                        grid: { display: false }
                    }
                }
            }
        });
    }

    // Calculate button handler
    calcBtn.addEventListener('click', function() {
        const age = parseInt(ageInput.value, 10);
        const investment = parseInt(investInput.value, 10);
        const rate = parseFloat(rateInput.value);
        const startYear = parseInt(startYearInput.value, 10);

        if (isNaN(age) || age < 0 || age > 10) { alert('Girl child age must be between 0 and 10 years.'); return; }
        if (isNaN(investment) || investment < 250 || investment > 150000) { alert('Annual investment must be between ₹250 and ₹1,50,000.'); return; }
        if (isNaN(rate) || rate < 5 || rate > 12) { alert('Interest rate must be between 5% and 12%.'); return; }
        if (isNaN(startYear) || startYear < 2015 || startYear > 2040) { alert('Start year must be between 2015 and 2040.'); return; }

        const result = calculateSSY(investment, rate, startYear, age);
        renderResults(result);
        updateGoalPlanner(rate, startYear, age);

        document.getElementById('info-rate').textContent = rate + '%';
    });

    // Goal planner
    function updateGoalPlanner(rate, startYear, age) {
        document.querySelectorAll('.goal-card').forEach(function(card) {
            const amount = parseInt(card.getAttribute('data-amount'), 10);
            const result = calculateSSY(amount, rate, startYear, age);
            card.querySelector('.goal-maturity').textContent = formatINR(result.maturityValue);
        });
    }

    // Goal card click -> update investment
    document.querySelectorAll('.goal-card').forEach(function(card) {
        card.addEventListener('click', function() {
            document.querySelectorAll('.goal-card').forEach(function(c) { c.classList.remove('active'); });
            this.classList.add('active');
            const amount = parseInt(this.getAttribute('data-amount'), 10);
            investInput.value = amount;
            investSlider.value = amount;
            calcBtn.click();
        });
    });

    // Share functionality
    function getShareText() {
        return 'Sukanya Samriddhi Yojana Calculation\n\n' +
            'Annual Investment: ' + formatINR(parseInt(investInput.value, 10)) + '\n' +
            'Interest Rate: ' + rateInput.value + '%\n' +
            'Girl Child Age: ' + ageInput.value + ' years\n\n' +
            'Total Investment: ' + document.getElementById('res-invested').textContent + '\n' +
            'Interest Earned: ' + document.getElementById('res-interest').textContent + '\n' +
            'Maturity Amount: ' + document.getElementById('res-maturity').textContent + '\n' +
            'Maturity Year: ' + document.getElementById('res-maturity-year').textContent + '\n\n' +
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

    // Auto-calculate on page load with defaults
    calcBtn.click();

})();
</script>

<?php include 'footer.php';?>
