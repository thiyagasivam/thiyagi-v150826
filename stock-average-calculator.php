<?php include 'header.php';?>

<?php
// Stock Average Calculator Logic
function calculateAverage($transactions) {
    $totalShares = 0;
    $totalCost = 0;

    foreach ($transactions as $transaction) {
        $totalShares += $transaction['shares'];
        $totalCost += $transaction['shares'] * $transaction['price'];
    }

    if ($totalShares > 0) {
        $averagePrice = $totalCost / $totalShares;
        return [
            'average_price' => round($averagePrice, 2),
            'total_shares' => $totalShares,
            'total_investment' => round($totalCost, 2)
        ];
    }

    return null;
}

// Initialize variables
$results = null;
$transactions = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process each transaction
    for ($i = 1; $i <= 5; $i++) {
        if (!empty($_POST["shares_$i"]) && !empty($_POST["price_$i"])) {
            $transactions[] = [
                'shares' => (float)$_POST["shares_$i"],
                'price' => (float)$_POST["price_$i"]
            ];
        }
    }

    if (!empty($transactions)) {
        $results = calculateAverage($transactions);
    }
}
?>
    <title>Stock Average Calculator</title>
    <meta name="description" content="Calculate your average stock purchase price with our free stock average calculator.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00d09c;
            --secondary-color: #f5f7fa;
        }
        .calculator-container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .calculator-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            border-radius: 10px 10px 0 0;
        }
        .transaction-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: center;
        }
        .result-card {
            background-color: var(--secondary-color);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        .result-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        @media (max-width: 768px) {
            .transaction-row {
                flex-direction: column;
                gap: 8px;
            }
            .transaction-row input {
                width: 100%;
            }
        }
        .add-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .remove-btn {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
    </style>

<body class="bg-gray-100">
    <div class="calculator-container">
        <div class="calculator-header">
            <h1 class="text-2xl font-bold mb-1">Stock Average Calculator</h1>
            <p class="text-sm">Calculate your average purchase price for stocks</p>
        </div>

        <div class="p-6">
            <form method="POST" id="calculator-form">
                <h2 class="text-lg font-medium mb-4">Enter Your Transactions</h2>
                
                <div id="transactions-container">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="transaction-row" id="transaction-<?= $i ?>">
                        <div class="flex-grow">
                            <label for="shares_<?= $i ?>" class="block mb-2 text-sm font-medium">Quantity (Shares)</label>
                            <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="shares_<?= $i ?>" name="shares_<?= $i ?>" placeholder="100" value="<?= isset($_POST["shares_$i"]) ? htmlspecialchars($_POST["shares_$i"]) : '' ?>">
                        </div>
                        <div class="flex-grow">
                            <label for="price_<?= $i ?>" class="block mb-2 text-sm font-medium">Purchase Price (₹)</label>
                            <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="price_<?= $i ?>" name="price_<?= $i ?>" placeholder="150.50" value="<?= isset($_POST["price_$i"]) ? htmlspecialchars($_POST["price_$i"]) : '' ?>">
                        </div>
                        <?php if ($i > 1): ?>
                        <button type="button" class="remove-btn" onclick="removeTransaction(<?= $i ?>)">Remove</button>
                        <?php endif; ?>
                    </div>
                    <?php endfor; ?>
                </div>

                <div class="flex justify-between mt-4">
                    <button type="button" id="add-transaction" class="add-btn">+ Add Transaction</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                        Calculate Average Price
                    </button>
                </div>
            </form>

            <?php if ($results): ?>
            <div class="result-card">
                <h3 class="text-lg font-medium mb-4">Your Average Stock Price</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Average Price</p>
                        <p class="result-value">₹<?= number_format($results['average_price'], 2) ?></p>
                    </div>
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Total Shares</p>
                        <p class="result-value"><?= number_format($results['total_shares']) ?></p>
                    </div>
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Total Investment</p>
                        <p class="result-value">₹<?= number_format($results['total_investment'], 2) ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <h3 class="text-lg font-medium mb-3">How to Use This Calculator</h3>
                <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-700">
                    <li>Enter each stock purchase with quantity and price</li>
                    <li>Click "Calculate Average Price"</li>
                    <li>View your average purchase price and total investment</li>
                </ol>
                
                <h3 class="text-lg font-medium mt-6 mb-3">About Stock Average Calculator</h3>
                <p class="text-sm text-gray-700 mb-2">
                    The stock average calculator helps you determine the average price you've paid for a stock across multiple purchases. 
                    This is useful when you've bought shares of a company at different prices and want to know your overall cost basis.
                </p>
                <p class="text-sm text-gray-700">
                    The formula used is: <strong>Average Price = Total Investment Amount / Total Quantity</strong>
                </p>
            </div>
        </div>
    </div>

    <!-- Comprehensive SEO Content Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Complete Guide to Stock Average Calculator: Essential Tool for Smart Investment Portfolio Management</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg leading-relaxed">The <strong>Stock Average Calculator</strong> serves as an indispensable investment analysis tool for retail investors, stock traders, portfolio managers, financial advisors, day traders, and long-term investors requiring accurate calculation of average purchase prices across multiple stock transactions, cost basis determination, investment performance evaluation, tax planning optimization, and strategic portfolio decision-making. We understand that <strong>precise average price calculation</strong> forms the foundation of effective investment tracking, accurate profit/loss assessment, strategic averaging-down decisions, proper tax reporting, and informed buy/sell determinations ensuring optimal investment outcomes and financial planning accuracy across diverse market conditions and investment strategies.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding Stock Average Price Calculation Fundamentals</h3>
                
                <p><strong>Stock average price represents the weighted average cost</strong> per share across multiple purchase transactions calculated by dividing total investment amount by total shares acquired—providing the effective per-share cost basis essential for performance evaluation, profit calculation, and investment decision-making. When investors purchase stock shares at different times and prices (buying additional shares during price dips, accumulating positions gradually, or reinvesting dividends), the <strong>average purchase price differs from any individual transaction price</strong> requiring mathematical calculation to determine the true cost basis reflecting total investment position accurately rather than focusing on isolated transaction costs potentially misrepresenting overall investment economics.</p>
                
                <p>The <strong>importance of accurate average price calculation</strong> extends beyond simple arithmetic—proper cost basis determination affects capital gains tax calculations, profit/loss assessments informing sell decisions, averaging-down strategy evaluation determining whether additional purchases improve position economics, portfolio performance reporting reflecting true returns, and investment psychology preventing cognitive biases where investors fixate on specific purchase prices rather than overall position cost. Professional investment management demands systematic average price tracking supporting disciplined, data-driven decision-making rather than emotional responses to market volatility or selective memory about purchase timing and pricing.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Mathematical Formula and Calculation Methodology</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Weighted Average Price Formula</h4>
                
                <p>The <strong>fundamental calculation employs weighted averaging</strong> where each purchase transaction contributes proportionally to total investment: <strong>Average Price Per Share = Total Investment Amount ÷ Total Shares Purchased</strong>. Alternatively expressed: <strong>Average Price = (Shares₁ × Price₁ + Shares₂ × Price₂ + ... + Sharesₙ × Priceₙ) ÷ (Shares₁ + Shares₂ + ... + Sharesₙ)</strong>. For example, purchasing 100 shares at ₹150 and 50 shares at ₹120 yields: (100 × ₹150 + 50 × ₹120) ÷ (100 + 50) = (₹15,000 + ₹6,000) ÷ 150 = ₹21,000 ÷ 150 = ₹140 per share average cost representing the true per-share investment basis.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Transaction Cost Inclusion</h4>
                
                <p><strong>Comprehensive cost basis calculation includes transaction costs</strong>—brokerage fees, exchange charges, regulatory fees, Securities Transaction Tax (STT), GST, and stamp duty—increasing true per-share cost beyond quoted purchase prices. Conservative investors include all transaction costs in cost basis calculations: if purchasing 100 shares at ₹150 with ₹50 brokerage fee, total investment equals ₹15,050 yielding ₹150.50 true cost per share. Transaction cost inclusion provides accurate profit calculations, realistic return assessments, and proper tax cost basis preventing underestimation of investment costs and overstatement of gains particularly important for frequent traders where cumulative transaction costs significantly impact net returns.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Dividend Reinvestment Adjustments</h4>
                
                <p><strong>Dividend reinvestment complicates average price calculations</strong> adding new share purchases at prevailing market prices using dividend proceeds. Each dividend reinvestment represents a new purchase transaction requiring inclusion in average price calculations: original shares plus reinvested shares at reinvestment prices determine updated average cost. Systematic dividend reinvestment over time creates numerous small transactions requiring careful tracking; automated calculation tools prevent manual tracking errors ensuring accurate cost basis maintenance across complex dividend reinvestment patterns common in long-term wealth accumulation strategies.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Strategic Applications in Investment Management</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Averaging Down Strategy Evaluation</h4>
                
                <p><strong>Averaging down involves purchasing additional shares</strong> when prices decline below original purchase price, reducing overall average cost per share potentially improving position profitability if prices recover. Average price calculation quantifies averaging-down impact: original 100 shares at ₹200 (₹20,000 investment) averaging down with 100 shares at ₹150 (₹15,000 additional) yields 200 shares at ₹175 average cost (₹35,000 total investment). Position becomes profitable at ₹175+ rather than requiring return to original ₹200 price—reducing recovery requirement by 12.5%. However, averaging down magnifies losses if prices continue declining requiring careful fundamental analysis ensuring additional purchases reflect conviction in long-term value rather than emotional attachment to losing positions.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Profit/Loss Calculation and Exit Planning</h4>
                
                <p><strong>Accurate average price enables precise profit/loss determination</strong> comparing current market price against average cost basis revealing true position performance. Selling 50 shares from 200-share position with ₹175 average cost at ₹190 market price yields ₹15 per share profit or ₹750 total gain (excluding transaction costs). Understanding position-level profitability rather than fixating on individual transaction gains/losses supports rational exit decisions based on overall investment performance, portfolio rebalancing needs, and market outlook rather than arbitrary anchoring to specific purchase prices potentially preventing optimal portfolio management.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Tax Planning and Capital Gains Optimization</h4>
                
                <p><strong>Cost basis determines capital gains tax liability</strong> where selling price minus average purchase price (plus transaction costs) equals taxable gain subject to short-term capital gains tax (STCG) or long-term capital gains tax (LTCG) depending on holding period. Accurate average price calculation ensures proper tax reporting preventing underpayment penalties or overpayment waste. Strategic tax loss harvesting may involve selling positions below average cost recognizing capital losses offsetting gains; understanding true cost basis across multiple purchase transactions enables intelligent tax optimization maximizing after-tax returns through strategic buy/sell timing and loss harvesting opportunities.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Different Averaging Strategies and Methodologies</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Dollar-Cost Averaging (DCA)</h4>
                
                <p><strong>Dollar-cost averaging involves investing fixed amounts</strong> at regular intervals regardless of share price, automatically buying more shares when prices decline and fewer shares when prices rise. This systematic approach creates varying average costs over time: monthly ₹10,000 investment buying 67 shares at ₹150, 83 shares at ₹120, 59 shares at ₹170 accumulates 209 shares at ₹143.54 average cost (₹30,000 ÷ 209 shares). DCA reduces market timing risk, promotes investment discipline, and often results in favorable average prices compared to lump-sum timing attempts particularly during volatile markets where regular purchases capture varying price levels.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Value Averaging Strategy</h4>
                
                <p><strong>Value averaging adjusts investment amounts</strong> targeting specific portfolio value growth rates, buying more shares when prices decline and fewer (or selling) when prices rise aggressively than simple dollar-cost averaging. This active approach requires average price tracking determining how many additional shares achieve target value growth: if portfolio target is ₹50,000 but current value is ₹45,000, additional ₹5,000 investment closes gap. Value averaging potentially delivers superior returns compared to DCA but demands more active management, larger cash reserves for increased purchases during declines, and sophisticated average price calculations tracking complex transaction patterns.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Pyramid Buying Strategy</h4>
                
                <p><strong>Pyramid buying involves increasing position sizes</strong> as prices move favorably, adding shares at higher prices when positions show profits. Opposite to averaging down, pyramid buying adds to winners: initial 50 shares at ₹100, adding 30 shares at ₹120, then 20 shares at ₹140 creates 100 shares at ₹116 average cost. While average cost rises, strategy leverages momentum and conviction in successful positions. Average price calculation remains essential tracking true cost basis despite unconventional purchase pattern prioritizing adding to winners over losers reflecting disciplined trend-following rather than contrarian value approaches.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Practical Portfolio Management Applications</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Position Sizing and Risk Management</h4>
                
                <p><strong>Average price calculations inform position sizing decisions</strong> determining appropriate allocation percentages and risk exposure levels. Understanding total investment amount (shares × average price) relative to portfolio size reveals position concentration: 200 shares at ₹175 average (₹35,000) in ₹200,000 portfolio represents 17.5% allocation. Professional risk management typically limits individual position sizes (often 5-10% maximum) preventing excessive concentration; accurate average price tracking enables monitoring position sizes as prices fluctuate ensuring adherence to risk management policies and triggering rebalancing actions when positions exceed target allocations.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Performance Benchmarking and Analysis</h4>
                
                <p><strong>Investment performance evaluation compares returns against benchmarks</strong> requiring accurate average price as performance baseline. Calculating position return: (Current Value - Total Investment) ÷ Total Investment × 100 = Return Percentage. Position with 200 shares at ₹175 average cost (₹35,000 investment) now worth ₹190 per share (₹38,000 value) shows 8.57% return. Comparing against index returns, sector performance, or alternative investments during holding period reveals relative performance informing strategy effectiveness assessment and future investment allocation decisions.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Rebalancing and Portfolio Optimization</h4>
                
                <p><strong>Portfolio rebalancing restores target allocations</strong> selling appreciated positions and buying underweighted assets. Average price calculations determine which positions show gains suitable for tax-efficient selling, identify positions near cost basis avoiding short-term capital gains taxes, and calculate precise share quantities to sell achieving rebalancing targets while minimizing tax impact and transaction costs. Systematic rebalancing based on accurate position tracking maintains risk-appropriate portfolio composition preventing excessive drift toward winning positions potentially creating concentrated risk despite strong individual performance.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Calculation Errors and Pitfalls</h3>
                
                <p><strong>Transaction cost omission represents a frequent error</strong> calculating average price using only share purchase prices ignoring brokerage fees, taxes, and charges increasing true cost basis. This omission overstates profits and understates losses potentially causing tax underpayment or poor sell decisions based on inaccurate profitability assessments. Professional investors maintain comprehensive transaction records including all costs ensuring accurate cost basis calculations for precise performance evaluation and tax compliance.</p>
                
                <p><strong>Manual calculation errors multiply with transaction complexity</strong>—tracking dozens of purchases across months or years creates arithmetic mistakes, lost transaction records, or forgotten small purchases distorting average price calculations. Digital calculation tools and portfolio tracking software eliminate manual errors through automated calculation, transaction history storage, and systematic cost basis tracking particularly valuable for active traders executing numerous transactions or dividend reinvestment plans creating constant small purchases requiring meticulous record-keeping.</p>
                
                <p><strong>Stock splits and corporate actions complicate tracking</strong> when companies split shares (2-for-1 split doubles shares, halves price) or reverse split (1-for-10 reverse split reduces shares to 10%, multiplies price by 10). These events require cost basis adjustments: 100 shares at ₹200 average cost undergoing 2-for-1 split becomes 200 shares at ₹100 average cost maintaining ₹20,000 total investment. Failing to adjust for splits creates massive calculation errors; quality portfolio tracking tools automatically adjust for corporate actions maintaining accurate cost basis through complex capital structure changes.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Tax Implications and Reporting Requirements</h3>
                
                <p><strong>Accurate cost basis reporting is legally required</strong> for capital gains tax calculations when selling shares. Indian tax law distinguishes short-term capital gains (STCG)—securities held less than 12 months taxed at 15%—and long-term capital gains (LTCG)—securities held 12+ months with ₹1 lakh exemption then 10% tax. Average price determines gain/loss: selling 100 shares at ₹200 with ₹150 average cost yields ₹5,000 gain; if holding exceeds 12 months, entire gain qualifies for LTCG treatment with favorable tax rates.</p>
                
                <p><strong>First-In-First-Out (FIFO) accounting</strong> applies when selling partial positions from multiple purchase lots: earliest purchases are assumed sold first for tax purposes. Alternative lot identification methods may apply in certain contexts but require specific election and documentation. Understanding which shares (purchase lots) are sold affects tax liability through STCG vs LTCG categorization; strategic lot selection can optimize after-tax returns though practical implementation requires careful records and may face regulatory constraints depending on tax jurisdiction and broker capabilities.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Digital Tools and Automation Solutions</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Stock Average Calculator Features</h4>
                
                <p><strong>Specialized calculation tools like this Stock Average Calculator</strong> streamline average price determination through instant computation, multi-transaction support accommodating unlimited purchases, automatic weighted averaging, transaction cost inclusion options, and clear result presentation showing average price, total shares, and total investment. Quality calculators provide result export for record-keeping, historical calculation saving, and integration with portfolio tracking supporting systematic investment monitoring without manual arithmetic burden particularly valuable during market volatility when quick recalculation after new purchases informs investment decisions.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Portfolio Management Software Integration</h4>
                
                <p><strong>Comprehensive portfolio platforms</strong> including Zerodha Console, Groww, ET Money, MoneyControl Portfolio, and Google Finance automatically calculate average prices from linked brokerage accounts, track all transactions including dividends and corporate actions, adjust for splits and bonuses, generate tax reports, and provide real-time position valuations. Automated tracking eliminates manual entry, prevents calculation errors, maintains complete historical records, and enables sophisticated analysis impossible with manual tracking supporting professional-grade portfolio management accessible to retail investors.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Spreadsheet Templates and Custom Solutions</h4>
                
                <p><strong>Excel or Google Sheets templates</strong> enable custom average price tracking with formulas: =SUMPRODUCT(shares_range, price_range)/SUM(shares_range) calculates weighted average automatically. Templates combining transaction logs, automatic calculation, profit/loss tracking, and visualization create powerful personal portfolio management systems. Open-source templates available online provide starting points for customization matching individual tracking preferences, tax jurisdictions, and analysis needs offering middle-ground between simple calculators and full portfolio platforms for investors preferring self-managed tracking with automation benefits.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Advanced Considerations for Sophisticated Investors</h3>
                
                <p><strong>Options trading strategies affect stock position basis</strong> when selling covered calls or cash-secured puts generating premium income effectively reducing stock cost basis. Receiving ₹5 per share in call premium against 100-share position with ₹150 average cost effectively reduces basis to ₹145 per share. Complex strategies involving multiple option legs, rolling positions, or assignment mechanics require sophisticated cost basis tracking incorporating option premiums, exercise prices, and assignment impacts maintaining accurate position economics across integrated stock-option positions.</p>
                
                <p><strong>Margin trading introduces cost basis complexities</strong> through margin interest charges increasing effective cost of holding positions. Borrowing to purchase stocks on margin requires including margin interest in cost basis calculations for accurate profitability assessment: ₹10,000 stock purchase plus ₹500 annual margin interest yields ₹10,500 true cost. While margin magnifies returns during favorable market moves, proper cost tracking including financing costs ensures realistic performance evaluation and informs leveraged position sizing preventing overextension through incomplete cost comprehension.</p>
                
                <p><strong>International investing requires currency conversion consideration</strong> when investing in foreign stocks or ADRs (American Depositary Receipts). Average price calculations must account for exchange rate fluctuations: purchasing US stock at $100 when USD/INR = 75 (₹7,500 basis) and $50 when USD/INR = 80 (₹4,000 basis) yields different INR average cost than USD average cost due to currency movements. Comprehensive tracking maintains both currency-specific and home-currency cost basis supporting accurate return assessment and tax reporting in investor's base currency.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Psychological and Behavioral Considerations</h3>
                
                <p><strong>Anchoring bias causes investors to fixate</strong> on specific purchase prices (especially highest or most recent) rather than overall average cost distorting sell decisions. Investor purchased shares at ₹200, averaged down at ₹150, but refuses to sell at ₹175 because "not back to ₹200 yet" despite position showing profit versus ₹162.50 true average cost. Systematic average price calculation combats anchoring promoting rational decisions based on actual position economics rather than arbitrary psychological references preventing suboptimal holding decisions driven by emotional attachment to specific price levels.</p>
                
                <p><strong>Loss aversion intensifies averaging-down temptations</strong> where investors compulsively purchase declining stocks attempting to "recover losses" through lowered average cost. While strategic averaging down in fundamentally sound companies can improve returns, emotional averaging into deteriorating investments compounds losses. Disciplined average price calculation paired with fundamental analysis prevents destructive averaging into failing positions ensuring additional purchases reflect rational conviction about long-term value rather than emotional refusal to accept losses encouraging disciplined position management over hope-driven capital destruction.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Future Trends in Position Tracking and Analysis</h3>
                
                <p><strong>Artificial intelligence and machine learning</strong> increasingly enhance portfolio analytics through pattern recognition identifying optimal entry points, automated averaging strategies, tax-loss harvesting opportunities, and portfolio rebalancing recommendations. AI-powered platforms analyze position cost basis combined with market data, technical indicators, fundamental metrics, and investor preferences generating personalized investment recommendations optimizing returns while managing risk appropriately. Future portfolio management will seamlessly integrate average cost tracking with predictive analytics and automated execution supporting systematic, data-driven investing.</p>
                
                <p><strong>Blockchain and distributed ledger technology</strong> promises transparent, immutable transaction recording eliminating calculation disputes, ensuring perfect record-keeping, and simplifying tax reporting through verifiable transaction histories. Tokenized securities and decentralized finance (DeFi) platforms leverage blockchain's transparency and automation capabilities creating new investment instruments requiring evolution of cost basis tracking methodologies while potentially simplifying certain administrative burdens through cryptographic proof and smart contract automation reducing manual reconciliation and record-keeping requirements.</p>
            </div>
        </div>
    </section>

    <!-- Comprehensive Comparison Tables -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Stock Averaging Strategy Comparison</h2>
            
            <div class="overflow-x-auto mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Investment Strategy Characteristics</h3>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Strategy</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Approach</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Best For</th>
                            <th class="border border-blue-500 px-4 py-3 text-left font-semibold">Risk Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">Dollar-Cost Averaging</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Fixed amount at regular intervals</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Beginners, long-term investors</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Low to Medium</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-green-600">Averaging Down</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Buy more when price drops</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Value investors, contrarians</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Medium to High</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-purple-600">Pyramid Buying</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Add to winning positions</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Momentum traders, trend followers</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Medium</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-orange-600">Value Averaging</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Adjust investment to target growth</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Active investors, disciplined savers</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Medium</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-pink-600">Lump Sum</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">One-time large investment</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Market timers, windfall investors</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">High</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="overflow-x-auto">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Tax Treatment by Holding Period</h3>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
                            <th class="border border-indigo-500 px-4 py-3 text-left font-semibold">Holding Period</th>
                            <th class="border border-indigo-500 px-4 py-3 text-center font-semibold">Tax Type</th>
                            <th class="border border-indigo-500 px-4 py-3 text-center font-semibold">Tax Rate (Equity)</th>
                            <th class="border border-indigo-500 px-4 py-3 text-left font-semibold">Exemption</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-semibold">Less than 12 months</td>
                            <td class="border border-gray-300 px-4 py-3 text-center">STCG (Short-Term)</td>
                            <td class="border border-gray-300 px-4 py-3 text-center font-bold text-red-600">15%</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">No exemption available</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-semibold">12 months or more</td>
                            <td class="border border-gray-300 px-4 py-3 text-center">LTCG (Long-Term)</td>
                            <td class="border border-gray-300 px-4 py-3 text-center font-bold text-green-600">10%</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">₹1 lakh annual exemption</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-sm text-gray-600 mt-4">*Tax rates applicable for equity shares listed on recognized stock exchanges. Rates may vary for other securities. Consult tax professional for specific situations.</p>
            </div>
        </div>
    </section>

    <!-- 25 Comprehensive FAQs -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">25 Comprehensive Questions About Stock Average Calculator</h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">1. What is a stock average calculator and why do I need it?</h3>
                    <p class="text-gray-700">A <strong>stock average calculator computes your average purchase price</strong> per share across multiple buy transactions by dividing total investment by total shares. You need it to determine accurate cost basis for profit/loss calculation, tax reporting, and investment decision-making when you've bought shares at different prices.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">2. How do you calculate average stock price?</h3>
                    <p class="text-gray-700"><strong>Average stock price formula</strong>: Total Investment Amount ÷ Total Shares = Average Price Per Share. Or: (Shares₁×Price₁ + Shares₂×Price₂ + ... + Sharesₙ×Priceₙ) ÷ Total Shares. This weighted average accounts for different quantities purchased at various prices.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">3. Should I include brokerage fees in average price calculation?</h3>
                    <p class="text-gray-700"><strong>Yes, including transaction costs provides accurate cost basis</strong>. Add brokerage fees, STT, exchange charges, and GST to your investment amount. This shows true per-share cost and ensures accurate profit calculations and proper tax reporting, especially for active traders where fees accumulate significantly.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">4. What is averaging down in stock trading?</h3>
                    <p class="text-gray-700"><strong>Averaging down means buying more shares</strong> when price drops below your original purchase price, reducing overall average cost per share. Example: 100 shares at ₹200, then 100 at ₹150 = 200 shares at ₹175 average. Position becomes profitable at ₹175 instead of needing ₹200 recovery.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">5. Is averaging down a good strategy?</h3>
                    <p class="text-gray-700"><strong>Averaging down can be effective</strong> for fundamentally strong companies temporarily undervalued, but dangerous for declining businesses. Only average down with conviction based on analysis, not emotional attachment to losing positions. Set limits on how much to average down preventing excessive capital commitment to deteriorating investments.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">6. How does dollar-cost averaging work?</h3>
                    <p class="text-gray-700"><strong>Dollar-cost averaging (DCA) invests fixed amounts</strong> at regular intervals regardless of price. Automatically buys more shares when prices are low, fewer when high. This disciplined approach reduces market timing risk and often achieves favorable average prices during volatile markets through systematic accumulation.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">7. How do stock splits affect average price?</h3>
                    <p class="text-gray-700"><strong>Stock splits adjust both share quantity and price</strong> maintaining total investment value. 2-for-1 split: 100 shares at ₹200 becomes 200 shares at ₹100—total investment (₹20,000) unchanged. Your average price halves while shares double. Always adjust historical averages for splits to maintain accurate cost basis.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">8. What's the difference between average price and current price?</h3>
                    <p class="text-gray-700"><strong>Average price is your cost basis</strong> (what you paid); <strong>current price is market value</strong> (what it's worth now). Comparing them shows profit/loss: if average cost is ₹150 and current price is ₹180, you have ₹30 per share profit (20% gain).</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">9. How do I calculate profit percentage using average price?</h3>
                    <p class="text-gray-700"><strong>Profit percentage formula</strong>: ((Current Price - Average Price) ÷ Average Price) × 100. Example: Average cost ₹150, current price ₹180: ((180-150) ÷ 150) × 100 = 20% profit. Negative result indicates loss percentage.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">10. Can I use average price for tax calculations?</h3>
                    <p class="text-gray-700"><strong>Yes, average price determines cost basis</strong> for capital gains tax. Selling price minus average cost (plus transaction costs) equals taxable gain. Hold 12+ months for LTCG (10% tax with ₹1L exemption) vs. under 12 months for STCG (15% tax). Accurate average price ensures proper tax reporting.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">11. What happens to average price when I sell partial position?</h3>
                    <p class="text-gray-700"><strong>Average price stays same for remaining shares</strong>. If you own 200 shares at ₹150 average and sell 50, remaining 150 shares still have ₹150 average cost. Your total investment decreases but per-share average remains unchanged—that's your cost basis for future profit calculations.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">12. How do dividend reinvestments affect average price?</h3>
                    <p class="text-gray-700"><strong>Dividend reinvestments are new purchases</strong> at current market price using dividend income. Each reinvestment changes average: if reinvesting dividends buys shares at prices different from your average, new purchases adjust overall average cost—potentially raising or lowering it depending on reinvestment price versus existing average.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">13. Should I calculate average price differently for day trading?</h3>
                    <p class="text-gray-700"><strong>Day trading average includes all transactions</strong> within trading day. Intraday traders track average entry price for positions opened and closed same day. Include all transaction costs (brokerage, taxes) as they significantly impact day trading profitability where small percentage gains multiply across numerous trades.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">14. Can Excel calculate stock average price automatically?</h3>
                    <p class="text-gray-700"><strong>Yes, Excel uses SUMPRODUCT formula</strong>: =SUMPRODUCT(shares_range, price_range)/SUM(shares_range) calculates weighted average automatically. Create template with transaction log, automatic calculation, and profit/loss tracking for comprehensive portfolio management without manual arithmetic.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">15. What is pyramid buying and how does it affect average price?</h3>
                    <p class="text-gray-700"><strong>Pyramid buying adds to winning positions</strong>: initial buy at ₹100, add at ₹120, more at ₹140. Average cost rises but strategy leverages momentum. Unlike averaging down (adding to losers), pyramid buying increases position size in successful investments, accepting higher average price for momentum capture.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">16. How do I track average price across multiple brokers?</h3>
                    <p class="text-gray-700"><strong>Maintain consolidated transaction log</strong> combining purchases from all brokers. Use portfolio management software that syncs multiple accounts or manual spreadsheet tracking all transactions regardless of broker. Average price calculation requires complete transaction history across all platforms ensuring accurate overall cost basis.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">17. What's the difference between FIFO and weighted average cost?</h3>
                    <p class="text-gray-700"><strong>FIFO (First-In-First-Out) assumes</strong> earliest shares sold first, important for tax lot identification. <strong>Weighted average treats all shares equally</strong> at average cost regardless of purchase order. FIFO affects which specific lots (with specific holding periods) determine tax treatment; average provides overall cost basis.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">18. How accurate should average price calculations be?</h3>
                    <p class="text-gray-700"><strong>Maintain 2 decimal precision</strong> (₹150.50) for standard calculations. More decimals provide false accuracy; fewer create rounding errors especially for large positions. For tax reporting, follow regulations regarding cost basis precision ensuring compliance while avoiding unnecessary decimal complexity.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">19. Can I average up on stocks?</h3>
                    <p class="text-gray-700"><strong>Yes, averaging up means buying more</strong> at higher prices than initial purchase. While counterintuitive (raises average cost), justified when conviction increases after fundamental improvement or momentum acceleration. Increases position size despite higher price reflecting confidence in continued upside.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">20. What tools automatically track stock average prices?</h3>
                    <p class="text-gray-700"><strong>Portfolio platforms like Zerodha Kite</strong>, Groww, ET Money, Upstox, and broker apps automatically calculate average prices from transaction history. These tools sync trades, adjust for corporate actions, include dividends, and provide real-time average cost updates eliminating manual tracking.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">21. How does value averaging differ from dollar-cost averaging?</h3>
                    <p class="text-gray-700"><strong>Value averaging targets portfolio value growth</strong>, investing more when prices drop and less (or selling) when prices rise more aggressively than DCA's fixed amounts. Requires more active management and larger cash reserves but potentially delivers better returns through forced buy-low-sell-high discipline.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">22. Should I average down on falling stocks?</h3>
                    <p class="text-gray-700"><strong>Only average down with strong fundamental conviction</strong>—not emotional attachment. Analyze why price fell: temporary setback in solid company (potential opportunity) or fundamental deterioration (avoid). Set maximum averaging limits preventing excessive capital commitment to single position regardless of decline depth.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">23. How do margin costs affect stock average price?</h3>
                    <p class="text-gray-700"><strong>Margin interest increases true cost basis</strong>. Buying ₹10,000 stock on margin with ₹500 annual interest yields ₹10,500 effective cost. Include financing costs in average price calculation for accurate profitability assessment, especially important for leveraged positions where interest significantly impacts returns.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24. Can average price help with portfolio rebalancing?</h3>
                    <p class="text-gray-700"><strong>Yes, average price identifies</strong> which positions show gains suitable for profitable selling, positions near cost basis avoiding short-term capital gains tax, and optimal share quantities to sell achieving allocation targets while minimizing tax impact. Accurate cost basis enables tax-efficient rebalancing decisions.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">25. Why is average price important for long-term investing?</h3>
                    <p class="text-gray-700"><strong>Average price provides performance baseline</strong> for multi-year returns, enables compound growth tracking, supports disciplined accumulation strategies (DCA, SIP), prevents emotional decision-making based on recent prices, and ensures accurate tax reporting when eventually selling after years of accumulation across varying market conditions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Practical Tips Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mb-12">
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Essential Tips for Stock Average Price Management</h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Best Practices for Tracking</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Record all transactions immediately:</strong> Don't rely on memory for costs and quantities</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Include transaction costs:</strong> Brokerage, STT, and taxes in cost basis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Use automated tools:</strong> Portfolio software eliminates manual calculation errors</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Adjust for corporate actions:</strong> Splits, bonuses, dividends affect average</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Review regularly:</strong> Verify average price calculations quarterly</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Maintain backups:</strong> Keep transaction records for tax and audit purposes</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-indigo-900 mb-4">Common Mistakes to Avoid</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Ignoring transaction costs:</strong> Overstates profits, understates losses</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Emotional averaging down:</strong> Compulsively buying declining stocks without analysis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Forgetting stock splits:</strong> Creates massive calculation errors if unadjusted</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Manual calculation errors:</strong> Complex transactions prone to arithmetic mistakes</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Anchoring to specific prices:</strong> Fixating on highest/recent purchase ignoring average</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Incomplete records:</strong> Missing transactions distort average calculations</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 p-6 bg-white rounded-lg border-2 border-blue-300">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Quick Reference Formulas</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="font-semibold text-blue-900 mb-2">Average Price</p>
                        <p class="text-gray-700 text-sm font-mono">Total Investment ÷ Total Shares</p>
                        <p class="text-gray-600 text-xs mt-2">Your cost basis per share</p>
                    </div>
                    <div class="bg-indigo-50 p-4 rounded-lg">
                        <p class="font-semibold text-indigo-900 mb-2">Profit Percentage</p>
                        <p class="text-gray-700 text-sm font-mono">((Current - Average) ÷ Average) × 100</p>
                        <p class="text-gray-600 text-xs mt-2">Return on investment</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <p class="font-semibold text-purple-900 mb-2">Total Gain/Loss</p>
                        <p class="text-gray-700 text-sm font-mono">(Current Price - Average) × Shares</p>
                        <p class="text-gray-600 text-xs mt-2">Absolute profit/loss amount</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 p-4 bg-yellow-50 border-2 border-yellow-300 rounded-lg">
                <h4 class="font-semibold text-yellow-900 mb-2"><i class="fas fa-lightbulb mr-2"></i>Investment Wisdom</h4>
                <p class="text-gray-700 text-sm"><strong>Focus on average cost, not individual trade prices.</strong> Successful investing requires understanding overall position economics rather than fixating on specific purchase prices. Use average price calculations to make rational, data-driven decisions about averaging down, position sizing, profit-taking, and portfolio rebalancing. Combine accurate cost tracking with fundamental analysis for disciplined, long-term wealth building.</p>
            </div>
        </div>
    </section>

    <script>
        let transactionCount = 5;
        
        document.getElementById('add-transaction').addEventListener('click', function() {
            transactionCount++;
            const container = document.getElementById('transactions-container');
            
            const newTransaction = document.createElement('div');
            newTransaction.className = 'transaction-row';
            newTransaction.id = `transaction-${transactionCount}`;
            
            newTransaction.innerHTML = `
                <div class="flex-grow">
                    <label for="shares_${transactionCount}" class="block mb-2 text-sm font-medium">Quantity (Shares)</label>
                    <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="shares_${transactionCount}" name="shares_${transactionCount}" placeholder="100">
                </div>
                <div class="flex-grow">
                    <label for="price_${transactionCount}" class="block mb-2 text-sm font-medium">Purchase Price (₹)</label>
                    <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="price_${transactionCount}" name="price_${transactionCount}" placeholder="150.50">
                </div>
                <button type="button" class="remove-btn" onclick="removeTransaction(${transactionCount})">Remove</button>
            `;
            
            container.appendChild(newTransaction);
        });
        
        function removeTransaction(id) {
            const element = document.getElementById(`transaction-${id}`);
            if (element) {
                element.remove();
            }
        }
    </script>
    <?php include 'footer.php';?>
</body>
</html>
