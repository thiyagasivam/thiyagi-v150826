<?php include 'header.php'; ?>

    <title>Win Percentage Calculator 2026 - Sports & Gaming Statistics | Thiyagi.com</title>
    <meta name="description" content="Win percentage calculator 2026 - track wins, losses, and ties for sports teams, gaming records, and competitive performance with streak analysis and predictions.">
    <meta name="keywords" content="win percentage calculator 2026, win rate calculator, sports statistics, gaming win rate, team performance, winning percentage">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Win Percentage Calculator 2026 - Sports & Gaming Statistics">
    <meta property="og:description" content="Track wins, losses, and ties for sports teams and gaming with advanced statistics and streak analysis.">
    <meta property="og:url" content="https://www.thiyagi.com/win-percentage-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Win Percentage Calculator 2026 - Sports & Gaming Statistics">
    <meta name="twitter:description" content="Calculate win percentages and track performance for sports and gaming.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }
    .stat-card {
        transition: all 0.3s ease;
        border-left: 4px solid #3b82f6;
    }
    .stat-card:hover {
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
    .win-excellent { border-left-color: #10b981; background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
    .win-good { border-left-color: #3b82f6; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
    .win-average { border-left-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
    .win-poor { border-left-color: #ef4444; background: linear-gradient(135deg, #fef2f2 0%, #fecaca 100%); }
    .trophy-icon {
        animation: bounce 2s ease-in-out infinite;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }
    .game-entry {
        transition: all 0.3s ease;
    }
    .game-entry:hover {
        background-color: #f8fafc;
    }
    .streak-indicator {
        font-weight: bold;
        padding: 2px 8px;
        border-radius: 12px;
        font-size: 0.875rem;
    }
    .win-streak {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
    }
    .loss-streak {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Win Percentage Calculator 2026",
  "description": "Calculate win percentages for sports teams, gaming records, and competitive performance with advanced statistics, streak analysis, and predictive insights.",
  "url": "https://www.thiyagi.com/win-percentage-calculator",
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
                        <i class="fas fa-trophy text-2xl text-blue-600 trophy-icon" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Win Percentage Calculator</h1>
                        <p class="text-blue-100">Track performance and analyze winning statistics</p>
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
                <li class="text-gray-900 font-medium">Win Percentage Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <i class="fas fa-chart-line text-2xl text-blue-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Win Percentage Calculator</h2>
                <p class="text-gray-600">Calculate win rates and track performance for sports, gaming, and competitions</p>
            </div>

            <!-- Input Methods -->
            <div class="mb-8">
                <div class="flex flex-wrap justify-center gap-4 mb-6">
                    <button id="simpleMode" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>Simple Mode
                    </button>
                    <button id="detailedMode" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        <i class="fas fa-list mr-2" aria-hidden="true"></i>Detailed Tracking
                    </button>
                </div>
            </div>

            <!-- Simple Mode -->
            <div id="simpleModePanel" class="space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="totalWins" class="block text-sm font-medium text-gray-700 mb-2">Total Wins</label>
                        <input type="number" id="totalWins" min="0" placeholder="15" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of wins</div>
                    </div>

                    <div>
                        <label for="totalLosses" class="block text-sm font-medium text-gray-700 mb-2">Total Losses</label>
                        <input type="number" id="totalLosses" min="0" placeholder="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of losses</div>
                    </div>

                    <div>
                        <label for="totalTies" class="block text-sm font-medium text-gray-700 mb-2">Total Ties (Optional)</label>
                        <input type="number" id="totalTies" min="0" placeholder="2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of ties/draws</div>
                    </div>
                </div>

                <div class="text-center">
                    <button id="calculateSimple" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Win Percentage
                    </button>
                </div>
            </div>

            <!-- Detailed Mode -->
            <div id="detailedModePanel" class="hidden space-y-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Add Game Results</h3>
                    <div class="grid md:grid-cols-4 gap-4">
                        <div>
                            <label for="gameDate" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" id="gameDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="opponent" class="block text-sm font-medium text-gray-700 mb-2">Opponent/Game</label>
                            <input type="text" id="opponent" placeholder="Team B" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="gameResult" class="block text-sm font-medium text-gray-700 mb-2">Result</label>
                            <select id="gameResult" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="win">Win</option>
                                <option value="loss">Loss</option>
                                <option value="tie">Tie/Draw</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button id="addGame" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg transition-colors">
                                <i class="fas fa-plus mr-2" aria-hidden="true"></i>Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Games List -->
                <div id="gamesList" class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Game History</h4>
                    <div id="gamesContainer" class="space-y-2">
                        <div class="text-gray-500 text-center py-4">No games added yet</div>
                    </div>
                </div>

                <div class="text-center">
                    <button id="calculateDetailed" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                        Analyze Performance
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-bar mr-2 text-blue-600" aria-hidden="true"></i>
                        Performance Statistics
                    </h3>
                    
                    <!-- Main Statistics -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div id="winPercentCard" class="stat-card win-good p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2" id="winPercentage">75%</div>
                            <div class="text-sm text-gray-600">Win Percentage</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-green-600 mb-2" id="totalWinsDisplay">15</div>
                            <div class="text-sm text-gray-600">Total Wins</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-red-600 mb-2" id="totalLossesDisplay">5</div>
                            <div class="text-sm text-gray-600">Total Losses</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-gray-600 mb-2" id="totalGamesDisplay">20</div>
                            <div class="text-sm text-gray-600">Total Games</div>
                        </div>
                    </div>

                    <!-- Additional Statistics -->
                    <div id="additionalStats" class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                        <!-- Will be populated by JavaScript -->
                    </div>

                    <!-- Performance Analysis -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-chart-pie mr-2 text-purple-500" aria-hidden="true"></i>
                                Performance Breakdown
                            </h4>
                            <div id="performanceBreakdown" class="space-y-3">
                                <!-- Breakdown will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Performance Insights
                            </h4>
                            <div id="performanceInsights" class="space-y-3">
                                <!-- Insights will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="exportBtn" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-download mr-2" aria-hidden="true"></i>
                            Export Data
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            Reset Calculator
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Win Percentage Guide -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-graduation-cap mr-3 text-blue-500" aria-hidden="true"></i>
                    Win Percentage Guide
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Excellent (80%+)</h3>
                        <p class="text-gray-600">Exceptional performance indicating dominance in your field or game.</p>
                    </div>
                    
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Good (60-79%)</h3>
                        <p class="text-gray-600">Strong performance showing consistent success and skill development.</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Average (40-59%)</h3>
                        <p class="text-gray-600">Balanced record with room for improvement and strategy refinement.</p>
                    </div>
                    
                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Needs Improvement (Below 40%)</h3>
                        <p class="text-gray-600">Focus on skill development, strategy, and learning from losses.</p>
                    </div>
                </div>
            </section>

            <!-- Applications -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-gamepad mr-3 text-green-500" aria-hidden="true"></i>
                    Common Applications
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-football-ball text-orange-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Sports Teams</h3>
                            <p class="text-gray-600 text-sm">Track team performance across seasons, tournaments, and leagues.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-chess text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Gaming & Esports</h3>
                            <p class="text-gray-600 text-sm">Monitor gaming performance in competitive matches and rankings.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-chart-line text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Trading & Investing</h3>
                            <p class="text-gray-600 text-sm">Calculate success rates for trading strategies and investment decisions.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-briefcase text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Business & Sales</h3>
                            <p class="text-gray-600 text-sm">Track proposal success rates, deal closures, and performance metrics.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-graduation-cap text-indigo-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Academic & Testing</h3>
                            <p class="text-gray-600 text-sm">Monitor test success rates, quiz performance, and learning progress.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- FAQs Section -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How do you calculate win percentage?</h3>
                    <p class="text-gray-600">Win Percentage = (Wins / Total Games) × 100. Ties are typically counted as 0.5 wins in the calculation.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Should ties count as wins or losses?</h3>
                    <p class="text-gray-600">Ties are usually counted as half a win (0.5) in win percentage calculations. This provides a more accurate representation of performance.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What's considered a good win percentage?</h3>
                    <p class="text-gray-600">This varies by context, but generally: 80%+ is excellent, 60-80% is good, 40-60% is average, and below 40% needs improvement.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Can I track multiple teams or players?</h3>
                    <p class="text-gray-600">Use the detailed mode to track individual games and export data. You can maintain separate calculations for different teams or players.</p>
                </div>
            </div>
        </section>

        <!-- Comprehensive SEO Content Section -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Complete Guide to Win Percentage Calculator and Performance Analysis</h2>
            
            <div class="prose max-w-none text-gray-700 space-y-6">
                <p class="text-lg leading-relaxed">The <strong>Win Percentage Calculator</strong> serves as an indispensable analytical tool for coaches, team managers, sports analysts, fantasy sports enthusiasts, and competitive gamers seeking to quantify performance success through precise mathematical measurements of wins, losses, and ties across games, matches, seasons, or competitive periods. We understand that <strong>winning percentage</strong> provides objective performance metrics enabling meaningful comparisons between teams, players, strategies, and timeframes while supporting data-driven decision-making in roster management, strategic planning, playoff qualification assessment, and historical performance evaluation. Our comprehensive <strong>win rate calculation system</strong> delivers instant accuracy while explaining calculation methodologies, interpretation frameworks, practical applications, and performance benchmarking standards essential for competitive success analysis.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Understanding Win Percentage Fundamentals</h3>
                
                <p><strong>Win percentage</strong> expresses the proportion of games won relative to total games played, typically represented as a percentage or decimal value. The basic formula states: <strong>Win Percentage = (Number of Wins ÷ Total Games Played) × 100</strong>. For example, a team winning 15 of 20 games achieves a 75% win percentage (15 ÷ 20 = 0.75 = 75%). This straightforward calculation provides universal performance measurement applicable across virtually all competitive contexts from professional sports leagues to esports tournaments, sales team performance to project success rates.</p>
                
                <p>When competitions include <strong>tie games or draws</strong>, calculation methods vary by sport and context. The most common approach treats ties as half-wins: <strong>Win Percentage = [(Wins + 0.5 × Ties) ÷ Total Games] × 100</strong>. A record of 10 wins, 5 losses, and 3 ties yields: [(10 + 0.5 × 3) ÷ 18] × 100 = (11.5 ÷ 18) × 100 = 63.89%. Alternative methods ignore ties entirely, counting only wins and losses, or treat ties as separate outcomes with distinct weighting depending on sport-specific rules and league conventions.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Win Percentage Calculation Methods</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Standard Win Percentage Formula</h4>
                
                <p>The <strong>standard calculation</strong> divides wins by total games played, producing decimal values between 0 and 1 (or 0% to 100% when expressed as percentages). Professional sports leagues typically report win percentages as three-decimal values (.667, .583, .500) rather than rounded percentages providing precision necessary for playoff seeding, tiebreaker determinations, and statistical record-keeping. Baseball, basketball, and football standings predominantly use this decimal format facilitating quick performance assessment and comparative rankings.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Tie-Adjusted Calculations</h4>
                
                <p><strong>Sports allowing ties</strong>—including soccer, hockey, and American football prior to overtime rule changes—require tie-adjusted calculations. The half-win method represents the most common approach acknowledging ties provide partial success rather than complete victory or defeat. Some leagues employ point systems instead: 3 points for wins, 1 point for ties, 0 for losses, calculating success rates based on points earned versus maximum possible points. Each methodology serves specific competitive contexts with advantages matching particular sport characteristics and strategic considerations.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Advanced Performance Metrics</h4>
                
                <p>Beyond simple win percentages, analysts employ <strong>advanced metrics</strong> including strength-of-schedule adjusted winning percentages accounting for opponent quality, home versus away performance splits revealing venue advantages, recent form calculations emphasizing latest games over season-long averages, and expected win percentages based on underlying performance metrics like point differentials, possession statistics, or advanced analytics models. These sophisticated calculations provide deeper performance insights than raw win percentages alone.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Applications Across Sports and Competition</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Professional Sports Team Performance</h4>
                
                <p><strong>Professional sports leagues</strong> utilize win percentages for standings rankings, playoff seeding, tiebreaker determinations, and historical record comparisons. MLB teams playing 162-game seasons generate extensive win percentage data identifying consistent performers versus volatile teams. NBA and NHL 82-game schedules provide substantial sample sizes for meaningful statistical analysis. NFL's 17-game seasons create scenarios where single games dramatically impact percentages making each contest critically important for playoff qualification.</p>
                
                <p>Historical <strong>win percentage records</strong> establish excellence benchmarks: MLB's 1906 Chicago Cubs achieved .763 (116-36), NBA's 2015-16 Golden State Warriors reached .890 (73-9), and NFL's 1972 Miami Dolphins completed perfect 17-0 seasons including playoffs (.100 regular season, 1.000 overall). These exceptional performances demonstrate sustainable excellence over substantial sample sizes distinguishing truly dominant teams from fortunate short-term success.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Individual Athlete Statistics</h4>
                
                <p>Individual sports and competitions track <strong>personal win percentages</strong> for career performance assessment. Tennis players maintain career win-loss records across singles and doubles matches, with surface-specific breakdowns (clay, grass, hard court) revealing playing style effectiveness. Combat sports fighters' records document wins, losses, and draws establishing competitive credentials and championship contendership. Golfers track tournament wins relative to events entered, while racing drivers calculate podium percentages and win rates across seasons and career spans.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Esports and Competitive Gaming</h4>
                
                <p>The <strong>esports industry</strong> extensively employs win percentage tracking for player and team evaluation across games including League of Legends, Counter-Strike, Dota 2, and competitive first-person shooters. Match win rates, map win percentages, and champion/character-specific success rates inform team composition strategies, player roster decisions, and tournament preparation. High-level competitive gaming generates massive datasets enabling sophisticated statistical analysis rivaling traditional sports in analytical depth and strategic applications.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Fantasy Sports and Betting Analysis</h4>
                
                <p><strong>Fantasy sports participants</strong> calculate win percentages across matchup weeks assessing season performance, playoff qualification likelihood, and head-to-head record against specific opponents. Sports betting analysts employ win percentage calculations evaluating team performance against point spreads, over/under records, and situational splits (home/away, day/night, division games) informing betting strategies and value identification. Historical win percentage data against various betting metrics reveals profitable trends and market inefficiencies exploitable by informed bettors.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Interpreting Win Percentage Results</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Performance Rating Scales</h4>
                
                <p>While context-dependent, <strong>general performance categories</strong> provide interpretation frameworks: 90-100% represents exceptional dominance rarely sustained over substantial samples; 80-89% indicates elite performance characteristic of championship-caliber teams; 70-79% signifies strong competitive performance typical of playoff contenders; 60-69% suggests above-average teams with postseason potential; 50-59% reflects mediocre performance near .500 records; 40-49% indicates struggling teams requiring improvement; below 40% represents poor performance demanding significant changes.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Sample Size Considerations</h4>
                
                <p><strong>Statistical significance</strong> requires adequate sample sizes for meaningful conclusions. Early-season records of 5-1 (.833) or 1-5 (.167) provide limited predictive value due to small samples vulnerable to randomness and variance. As seasons progress and game counts increase, win percentages stabilize toward "true talent" levels more accurately reflecting team quality. Analysts apply confidence intervals and regression-to-mean principles recognizing that extreme early percentages typically moderate toward league averages as sample sizes grow.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Contextual Factors and Adjustments</h4>
                
                <p>Raw win percentages require <strong>contextual interpretation</strong> considering strength of schedule, home/away balance, injury impacts, and competitive environment factors. A .600 win percentage against weak opponents holds less significance than .550 against elite competition. Home-heavy schedules inflate percentages for teams with strong home advantages, while road-intensive stretches challenge even talented teams. Advanced analytics adjust for these factors producing schedule-neutral performance estimates more accurately reflecting true team quality.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Strategic Applications and Decision-Making</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Playoff Qualification and Seeding</h4>
                
                <p><strong>Playoff systems</strong> universally employ win percentage for qualification determination and seeding rankings. Teams must achieve minimum win percentages for postseason participation—NBA and NHL teams typically require .500 or better, MLB wild card races demand high .550+ percentages, NFL's competitive parity creates playoff scenarios around .563 (9-8 records). Understanding necessary win rates for playoff berths enables strategic season planning, roster management, and critical game prioritization during crucial stretch runs.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Trade Deadline and Roster Decisions</h4>
                
                <p>Organizations use <strong>current win percentages and projections</strong> informing trade deadline strategies. Contenders with strong percentages pursue rental acquisitions strengthening playoff pushes despite asset costs, while struggling teams below expectations consider selling valuable pending free agents acquiring future assets. Percentage-based performance relative to preseason expectations triggers "buy or sell" decisions fundamentally affecting franchise trajectories and competitive windows.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Coaching and Strategy Evaluation</h4>
                
                <p><strong>Coaching effectiveness</strong> assessment heavily weighs win percentage performance. While wins don't tell complete stories, persistent winning or losing trends trigger employment decisions for coaches, managers, and front office personnel. Detailed breakdowns including home/away splits, performance against quality opponents, late-game execution, and year-over-year trends provide nuanced coaching evaluations beyond simple win-loss records informing retention, dismissal, or extension decisions.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Historical Records and Milestone Tracking</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Career Win Percentage Records</h4>
                
                <p>Legendary coaches and athletes establish <strong>career win percentage benchmarks</strong> defining excellence: NBA's Phil Jackson (.704 regular season), NFL's Vince Lombardi (.738 regular season), MLB's Joe McCarthy (.615), and college basketball's John Wooden (.804) achieved sustained excellence over substantial sample sizes. Individual athlete records like tennis' Roger Federer, Rafael Nadal, and Novak Djokovic maintaining 80%+ career win rates across decades exemplify exceptional sustained performance at sport's highest levels.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Single-Season Excellence</h4>
                
                <p><strong>Single-season win percentage records</strong> capture peak performance: MLB's best seasons include 1906 Cubs .763, 2001 Mariners .716, and 1998 Yankees .704; NBA records feature 2015-16 Warriors .890, 1995-96 Bulls .878, and 1971-72 Lakers .841; NFL perfection includes 1972 Dolphins' undefeated campaign. These exceptional seasons establish historical benchmarks rarely approached demonstrating the difficulty sustaining dominant performance across complete seasons against elite competition.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Statistical Analysis and Prediction</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Pythagorean Winning Percentage</h4>
                
                <p>The <strong>Pythagorean expectation</strong> estimates expected win percentage based on points scored versus allowed rather than actual game results. Originally developed for baseball, adaptations exist for basketball, football, and other sports. The formula approximates: Win% = (Points Scored)^n / [(Points Scored)^n + (Points Allowed)^n], where exponent n varies by sport (typically 2 for baseball, 13.9 for basketball, 2.37 for football). Differences between actual and Pythagorean percentages identify "lucky" or "unlucky" teams likely regressing toward expected values.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Elo Ratings and Win Probability</h4>
                
                <p><strong>Elo rating systems</strong> assign numerical ratings to competitors updating after each contest based on result and opponent strength. Win probability calculations derive from rating differentials providing pre-game win chances. Post-game rating adjustments reflect performance relative to expectations—upsetting stronger opponents yields larger rating gains than beating weak competition. Elo systems maintain historical consistency enabling cross-era comparisons and providing mathematically rigorous frameworks for competitive ranking beyond simple win percentages.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Regression Analysis and Trend Identification</h4>
                
                <p>Statistical <strong>regression techniques</strong> identify performance trends, inflection points, and predictive factors correlating with win percentage changes. Analysts examine variables including roster changes, injury impacts, schedule difficulty shifts, and strategic adjustments seeking causal relationships explaining performance fluctuations. Time-series analysis reveals momentum patterns, clutch performance capabilities, and situational tendencies informing strategic planning and opponent scouting preparations.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Win Percentage in Business and Sales</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Sales Performance Metrics</h4>
                
                <p>Beyond sports, <strong>win rate calculations</strong> assess sales team effectiveness measuring closed deals versus total opportunities. High win rates indicate efficient lead qualification, effective sales processes, and competitive positioning advantages. Tracking win percentages by product line, customer segment, deal size, and sales representative reveals strengths, weaknesses, and improvement opportunities. Sales managers establish win rate benchmarks, analyze conversion funnels, and implement training addressing performance gaps identified through percentage-based analysis.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Project Success Rates</h4>
                
                <p>Organizations track <strong>project completion success rates</strong> analogous to win percentages evaluating initiative effectiveness, resource allocation efficiency, and strategic execution capabilities. High project success percentages indicate strong planning, execution discipline, and organizational competence, while low rates signal systemic issues requiring process improvements, capability development, or strategic recalibration. Portfolio management applies win percentage concepts assessing overall initiative success rates informing future investment priorities and resource allocation strategies.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Technology Tools and Digital Tracking</h3>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Automated Calculation Systems</h4>
                
                <p>Modern <strong>digital tools</strong> automate win percentage calculations through sports apps, league management platforms, and statistical databases. Real-time updates maintain current standings, historical comparisons, and trend visualizations accessible via websites and mobile applications. Cloud-based systems enable distributed data entry, multi-user access, and comprehensive reporting transforming manual scorekeeping into sophisticated analytical platforms supporting data-driven competitive management.</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Data Visualization and Presentation</h4>
                
                <p><strong>Visual analytics</strong> present win percentage data through charts, graphs, heat maps, and interactive dashboards facilitating pattern recognition and insight communication. Time-series graphs reveal performance trajectories, comparison tables highlight relative standings, and predictive models project future performance based on current percentages and remaining schedules. Professional presentations incorporate these visualizations making complex statistical information accessible to diverse stakeholders from coaches to media to fans.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Common Mistakes and Misconceptions</h3>
                
                <p><strong>Small sample size overreaction</strong> represents the most common analytical error—drawing firm conclusions from limited games. Early-season extremes (5-0 starts, 0-5 slumps) frequently regress as samples grow and randomness averages out. Patient analysis awaits meaningful sample accumulation before making definitive performance assessments or strategic changes based on percentage fluctuations potentially reflecting variance rather than true talent changes.</p>
                
                <p>Ignoring <strong>strength of schedule</strong> creates misleading comparisons. Teams with identical .600 win percentages face vastly different competitive challenges when one plays predominantly weak opponents while another battles elite competition. Schedule-adjusted metrics provide more accurate performance evaluations accounting for opponent quality differences affecting raw percentage interpretations.</p>
                
                <p><strong>Neglecting home/away splits</strong> obscures important performance context. Many teams exhibit substantial home advantages or road struggles creating misleading aggregate percentages when venue balance isn't considered. Detailed breakdowns revealing .700 home and .450 road percentages (overall .575) provide actionable insights about team characteristics, venue dependencies, and playoff implications given neutral-site postseason games eliminating home advantages.</p>
                
                <h3 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Future Trends and Emerging Applications</h3>
                
                <p><strong>Machine learning algorithms</strong> increasingly predict win percentages through complex models incorporating hundreds of variables beyond traditional statistics. Neural networks analyze play-by-play data, player tracking information, biomechanical measurements, and situational factors generating sophisticated win probability estimates updated continuously during games. These AI-driven predictions enhance in-game strategy, betting markets, and fan engagement through real-time win percentage adjustments reflecting game flow dynamics.</p>
                
                <p>Wearable technology and <strong>biometric monitoring</strong> may eventually incorporate physiological data into win percentage predictions. Fatigue indicators, injury risk assessments, and performance readiness metrics could refine expected win rates accounting for physical condition factors currently invisible in traditional statistics. This integration of biological and performance data represents next-generation analytics potentially revolutionizing competitive preparation and strategic planning.</p>
            </div>
        </section>

        <!-- Comprehensive Comparison Table -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Win Percentage Performance Benchmarks by Sport</h2>
            
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gradient-to-r from-green-600 to-blue-600 text-white">
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">Win Percentage</th>
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">Performance Level</th>
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">MLB Example (162 games)</th>
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">NBA Example (82 games)</th>
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">NFL Example (17 games)</th>
                            <th class="border border-green-500 px-4 py-3 text-left font-semibold">Typical Outcome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-green-600">90-100%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Exceptional/Historic</td>
                            <td class="border border-gray-300 px-4 py-3">146-16 (.901)</td>
                            <td class="border border-gray-300 px-4 py-3">74-8 (.902)</td>
                            <td class="border border-gray-300 px-4 py-3">15-2 (.882)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Championship favorite, historic season</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-blue-600">80-89%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Elite/Dominant</td>
                            <td class="border border-gray-300 px-4 py-3">130-32 (.802)</td>
                            <td class="border border-gray-300 px-4 py-3">66-16 (.805)</td>
                            <td class="border border-gray-300 px-4 py-3">14-3 (.824)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Top seed, championship contender</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-indigo-600">70-79%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Strong/Competitive</td>
                            <td class="border border-gray-300 px-4 py-3">114-48 (.704)</td>
                            <td class="border border-gray-300 px-4 py-3">57-25 (.695)</td>
                            <td class="border border-gray-300 px-4 py-3">12-5 (.706)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Playoff team, strong season</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-purple-600">60-69%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Above Average</td>
                            <td class="border border-gray-300 px-4 py-3">97-65 (.599)</td>
                            <td class="border border-gray-300 px-4 py-3">49-33 (.598)</td>
                            <td class="border border-gray-300 px-4 py-3">10-7 (.588)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Likely playoff berth</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-yellow-600">50-59%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Average/Mediocre</td>
                            <td class="border border-gray-300 px-4 py-3">81-81 (.500)</td>
                            <td class="border border-gray-300 px-4 py-3">41-41 (.500)</td>
                            <td class="border border-gray-300 px-4 py-3">9-8 (.529)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Bubble team, inconsistent</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-orange-600">40-49%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Below Average</td>
                            <td class="border border-gray-300 px-4 py-3">65-97 (.401)</td>
                            <td class="border border-gray-300 px-4 py-3">33-49 (.402)</td>
                            <td class="border border-gray-300 px-4 py-3">7-10 (.412)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Losing season, needs improvement</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-300 px-4 py-3 font-bold text-red-600">Below 40%</td>
                            <td class="border border-gray-300 px-4 py-3 font-medium">Poor/Rebuilding</td>
                            <td class="border border-gray-300 px-4 py-3">49-113 (.302)</td>
                            <td class="border border-gray-300 px-4 py-3">25-57 (.305)</td>
                            <td class="border border-gray-300 px-4 py-3">5-12 (.294)</td>
                            <td class="border border-gray-300 px-4 py-3 text-sm">Major changes needed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="text-sm text-gray-600 mt-4">*Performance interpretations vary by sport, league parity, and competitive context. Examples show equivalent record levels across major sports.</p>
        </section>

        <!-- 25 Comprehensive FAQs -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">25 Comprehensive Questions About Win Percentage Calculator</h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">1. How do you calculate win percentage?</h3>
                    <p class="text-gray-700">The basic formula is: <strong>Win Percentage = (Wins ÷ Total Games) × 100</strong>. For example, 12 wins in 20 games = (12 ÷ 20) × 100 = 60%. When ties exist, use: [(Wins + 0.5 × Ties) ÷ Total Games] × 100 for more accurate representation.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">2. Should ties count as wins or losses?</h3>
                    <p class="text-gray-700"><strong>Ties typically count as half-wins (0.5)</strong> in win percentage calculations, acknowledging they represent partial success rather than complete victory or defeat. Some sports use alternative methods, but the half-win approach provides the most balanced performance representation across contexts.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">3. What's considered a good win percentage?</h3>
                    <p class="text-gray-700">Context matters, but generally: <strong>80%+ is exceptional</strong>, 70-79% is strong competitive performance, 60-69% is above average, 50-59% is mediocre, and below 50% indicates losing records. Professional sports typically see .500 (50%) as the break-even point between winning and losing seasons.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">4. How is win percentage different from win-loss record?</h3>
                    <p class="text-gray-700"><strong>Win-loss records</strong> (e.g., 15-5) show absolute wins and losses, while <strong>win percentage</strong> (75%) expresses proportional success enabling meaningful comparisons across different game totals. A 30-10 record and 15-5 record both equal 75% win rates despite different game counts.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">5. Do professional sports use win percentage for standings?</h3>
                    <p class="text-gray-700">Yes, most professional leagues use <strong>win percentage for official standings</strong> and playoff seeding. MLB, NBA, and NHL prominently display win percentages (shown as decimals like .667), while NFL uses win-loss records but applies percentage-based tiebreakers when teams have identical records.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">6. How many games are needed for meaningful win percentage?</h3>
                    <p class="text-gray-700"><strong>Statistical significance requires adequate sample sizes</strong>—generally 20+ games for reasonable confidence. Early-season records of 5-1 provide limited predictive value due to small samples vulnerable to randomness. As game counts increase, percentages stabilize toward true performance levels.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">7. Can win percentage predict future performance?</h3>
                    <p class="text-gray-700"><strong>Current win percentage offers predictive value</strong> but isn't perfectly predictive. Advanced metrics like Pythagorean expectation, strength-adjusted ratings, and recent form analysis provide better predictions. Regression to the mean affects extreme early percentages as they typically moderate toward sustainable levels.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">8. What is Pythagorean winning percentage?</h3>
                    <p class="text-gray-700"><strong>Pythagorean expectation</strong> estimates expected win percentage based on points scored versus allowed rather than actual results. The formula: Win% = (Points Scored)^n / [(Points Scored)^n + (Points Allowed)^n]. Differences between actual and Pythagorean percentages identify over/underperforming teams.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">9. How do playoff series affect win percentage?</h3>
                    <p class="text-gray-700"><strong>Playoff games</strong> typically count separately from regular season percentages. Teams maintain distinct regular season and postseason records, though career and historical analyses often combine both. Playoff performance carries greater weight in legacy evaluations despite representing fewer total games.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">10. What's the highest win percentage ever achieved?</h3>
                    <p class="text-gray-700">Notable single-season records include: <strong>NBA's 2015-16 Warriors (.890, 73-9)</strong>, MLB's 1906 Cubs (.763, 116-36), and NFL's 1972 Dolphins (perfect 17-0 including playoffs). These exceptional performances represent peak team excellence rarely approached in modern competitive sports.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">11. How does home vs. away performance affect percentages?</h3>
                    <p class="text-gray-700"><strong>Home-field advantage</strong> creates significant performance splits. Teams often exhibit .600+ home percentages while struggling to .450 on the road. Aggregate percentages obscure these splits—detailed analysis reveals venue dependencies critical for playoff assessment given neutral-site postseason games.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">12. Can I track multiple teams simultaneously?</h3>
                    <p class="text-gray-700">Yes, modern <strong>win percentage calculators</strong> support multiple team tracking with separate calculations maintained simultaneously. Spreadsheet tools, sports apps, and league management platforms enable comparative analysis across numerous teams, players, or competitive entities with independent percentage calculations.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">13. How do you calculate career win percentage?</h3>
                    <p class="text-gray-700"><strong>Career percentages</strong> sum all wins and total games across all seasons: Total Career Wins ÷ Total Career Games. Coaches, athletes, and teams maintain career statistics spanning decades. Phil Jackson's .704 NBA coaching percentage and Joe McCarthy's .615 MLB managing percentage exemplify sustained excellence.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">14. What win percentage is needed for playoffs?</h3>
                    <p class="text-gray-700">Requirements vary by league and season. <strong>NBA/NHL typically require .500+ (50%)</strong>, MLB playoff races demand .550+ percentages, NFL competitive parity creates playoff scenarios around .563 (9-8). Specific thresholds fluctuate based on league parity and divisional/conference strength each season.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">15. How does strength of schedule affect win percentage?</h3>
                    <p class="text-gray-700"><strong>Schedule difficulty dramatically impacts percentages</strong>. A .600 record against weak opponents holds less significance than .550 against elite competition. Advanced analytics adjust for opponent quality producing schedule-neutral estimates more accurately reflecting true team capability beyond raw percentage values.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">16. Can win percentage be used in business contexts?</h3>
                    <p class="text-gray-700">Absolutely. <strong>Sales teams track "win rates"</strong> measuring closed deals versus opportunities. Project management calculates initiative success percentages. Any competitive or goal-oriented context benefits from percentage-based performance measurement enabling objective assessment and meaningful comparisons.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">17. How do esports use win percentage metrics?</h3>
                    <p class="text-gray-700"><strong>Competitive gaming extensively employs win rates</strong> for player/team evaluation. Match win percentages, map-specific rates, and character/champion success rates inform roster decisions and strategy. Esports analytics rival traditional sports in statistical sophistication and strategic applications.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">18. What's the difference between win rate and win percentage?</h3>
                    <p class="text-gray-700">These terms are essentially synonymous—both express the <strong>proportion of games won</strong>. "Win rate" often appears in gaming/esports contexts, while "win percentage" prevails in traditional sports. Mathematically identical, the terminology preference varies by industry and community convention.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">19. How do overtime/extra inning games affect calculations?</h3>
                    <p class="text-gray-700"><strong>Overtime outcomes count as standard wins/losses</strong> in final records. The method of victory doesn't affect percentage calculations—a win is a win regardless of margin or duration. Some detailed analyses track overtime records separately revealing clutch performance capabilities.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">20. Can weather or external factors explain win percentage variance?</h3>
                    <p class="text-gray-700">Yes, <strong>external factors influence performance</strong>. Weather-dependent sports show venue-specific advantages, travel fatigue affects road performance, injury timing impacts records, and schedule clustering creates challenging stretches. Advanced analysis accounts for these contextual factors beyond simple percentage calculations.</p>
                </div>

                <div class="border-l-4 border-green-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">21. How do leagues handle postponed or canceled games?</h3>
                    <p class="text-gray-700"><strong>Postponed games rescheduled and played</strong> count normally in percentages once completed. Canceled games never made up don't affect calculations—percentages reflect only games actually played. This creates occasional scenarios where teams play different total games affecting direct percentage comparisons.</p>
                </div>

                <div class="border-l-4 border-blue-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">22. What role does win percentage play in betting?</h3>
                    <p class="text-gray-700"><strong>Sports betting extensively analyzes win percentages</strong> against spreads, over/unders, and situational splits. Bettors identify teams consistently over/underperforming expectations creating value opportunities. Historical percentage data against betting metrics reveals profitable trends and market inefficiencies.</p>
                </div>

                <div class="border-l-4 border-indigo-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">23. How do you compare win percentages across different eras?</h3>
                    <p class="text-gray-700"><strong>Era comparisons require contextual adjustments</strong> for rule changes, league expansion, competitive parity, and playing conditions. Statistical techniques normalize percentages across eras enabling meaningful historical comparisons despite dramatically different competitive environments and playing styles.</p>
                </div>

                <div class="border-l-4 border-purple-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24. What's the impact of injuries on win percentage?</h3>
                    <p class="text-gray-700"><strong>Injuries significantly affect performance</strong>, particularly losses of star players. Teams often show dramatic percentage drops during key player absences. Injury-adjusted metrics attempt quantifying expected performance with full health versus actual injury-impacted results revealing true team depth and coaching effectiveness.</p>
                </div>

                <div class="border-l-4 border-pink-600 pl-6 py-2">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">25. How can I improve my team's win percentage?</h3>
                    <p class="text-gray-700"><strong>Improvement requires comprehensive approaches</strong>: talent acquisition through drafts/trades/signings, enhanced training and conditioning, strategic/tactical optimization, mental preparation and team chemistry, opponent scouting, and data-driven decision-making. Sustained percentage improvement reflects organizational excellence across all operational dimensions.</p>
                </div>
            </div>
        </section>

        <!-- Practical Tips Section -->
        <section class="bg-gradient-to-r from-green-50 to-blue-50 rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Practical Tips for Win Percentage Analysis</h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-green-900 mb-4">Key Analysis Factors</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Consider sample size:</strong> Wait for 20+ games before drawing strong conclusions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Analyze schedule strength:</strong> Adjust for opponent quality differences</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Track home/away splits:</strong> Identify venue-dependent performance patterns</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Monitor recent form:</strong> Weight recent games more heavily than distant past</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Account for injuries:</strong> Adjust expectations during key player absences</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-600 mr-3 mt-1 text-xl">✓</span>
                            <span><strong>Use advanced metrics:</strong> Supplement raw percentages with Pythagorean, Elo ratings</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Common Interpretation Mistakes</h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Overreacting to small samples:</strong> Early extremes often regress to mean</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Ignoring schedule context:</strong> Equal percentages don't mean equal performance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Neglecting situational factors:</strong> Venue, weather, rest affect outcomes</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Treating all wins equally:</strong> Close wins vs blowouts reveal team strength</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Comparing across different contexts:</strong> Different sports have different norms</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-600 mr-3 mt-1 text-xl">✗</span>
                            <span><strong>Using single metric exclusively:</strong> Combine multiple performance indicators</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 p-6 bg-white rounded-lg border-2 border-green-300">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Quick Calculation Reference</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-green-50 p-4 rounded-lg">
                        <p class="font-semibold text-green-900 mb-2">Basic Formula</p>
                        <p class="text-gray-700 text-sm font-mono">Win% = (W ÷ G) × 100</p>
                        <p class="text-gray-600 text-xs mt-2">W = Wins, G = Total Games</p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <p class="font-semibold text-blue-900 mb-2">With Ties</p>
                        <p class="text-gray-700 text-sm font-mono">Win% = [(W + 0.5T) ÷ G] × 100</p>
                        <p class="text-gray-600 text-xs mt-2">T = Ties</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <p class="font-semibold text-purple-900 mb-2">Remaining Games</p>
                        <p class="text-gray-700 text-sm font-mono">Target = (Goal - Current W) ÷ Remaining</p>
                        <p class="text-gray-600 text-xs mt-2">Win rate needed for goal</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class WinPercentageCalculator {
            constructor() {
                this.games = [];
                this.currentMode = 'simple';
                this.init();
            }

            init() {
                this.bindEvents();
                this.setToday();
            }

            bindEvents() {
                document.getElementById('simpleMode').addEventListener('click', () => this.switchMode('simple'));
                document.getElementById('detailedMode').addEventListener('click', () => this.switchMode('detailed'));
                document.getElementById('calculateSimple').addEventListener('click', () => this.calculateSimple());
                document.getElementById('calculateDetailed').addEventListener('click', () => this.calculateDetailed());
                document.getElementById('addGame').addEventListener('click', () => this.addGame());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('exportBtn')?.addEventListener('click', () => this.exportData());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            setToday() {
                const today = new Date().toISOString().split('T')[0];
                document.getElementById('gameDate').value = today;
            }

            switchMode(mode) {
                this.currentMode = mode;
                
                // Update button styles
                document.getElementById('simpleMode').className = mode === 'simple' 
                    ? 'px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors'
                    : 'px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors';
                    
                document.getElementById('detailedMode').className = mode === 'detailed'
                    ? 'px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors'
                    : 'px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors';

                // Show/hide panels
                if (mode === 'simple') {
                    document.getElementById('simpleModePanel').classList.remove('hidden');
                    document.getElementById('detailedModePanel').classList.add('hidden');
                } else {
                    document.getElementById('simpleModePanel').classList.add('hidden');
                    document.getElementById('detailedModePanel').classList.remove('hidden');
                }
            }

            calculateSimple() {
                const wins = parseInt(document.getElementById('totalWins').value) || 0;
                const losses = parseInt(document.getElementById('totalLosses').value) || 0;
                const ties = parseInt(document.getElementById('totalTies').value) || 0;

                if (wins + losses + ties === 0) {
                    alert('Please enter at least one game result');
                    return;
                }

                const results = this.calculateStats(wins, losses, ties);
                this.displayResults(results);
            }

            calculateDetailed() {
                if (this.games.length === 0) {
                    alert('Please add some games first');
                    return;
                }

                const wins = this.games.filter(game => game.result === 'win').length;
                const losses = this.games.filter(game => game.result === 'loss').length;
                const ties = this.games.filter(game => game.result === 'tie').length;

                const results = this.calculateStats(wins, losses, ties);
                results.streakData = this.calculateStreaks();
                results.recentForm = this.calculateRecentForm();
                
                this.displayResults(results, true);
            }

            calculateStats(wins, losses, ties) {
                const totalGames = wins + losses + ties;
                const winPercentage = totalGames > 0 ? ((wins + (ties * 0.5)) / totalGames * 100) : 0;
                const lossPercentage = totalGames > 0 ? (losses / totalGames * 100) : 0;
                const tiePercentage = totalGames > 0 ? (ties / totalGames * 100) : 0;

                return {
                    wins,
                    losses,
                    ties,
                    totalGames,
                    winPercentage: Math.round(winPercentage * 100) / 100,
                    lossPercentage: Math.round(lossPercentage * 100) / 100,
                    tiePercentage: Math.round(tiePercentage * 100) / 100
                };
            }

            calculateStreaks() {
                if (this.games.length === 0) return null;

                const sortedGames = [...this.games].sort((a, b) => new Date(b.date) - new Date(a.date));
                
                let currentStreak = 0;
                let currentStreakType = null;
                let longestWinStreak = 0;
                let longestLossStreak = 0;

                // Calculate current streak
                for (let i = 0; i < sortedGames.length; i++) {
                    const game = sortedGames[i];
                    if (i === 0) {
                        currentStreakType = game.result;
                        currentStreak = 1;
                    } else if (game.result === currentStreakType) {
                        currentStreak++;
                    } else {
                        break;
                    }
                }

                // Calculate longest streaks
                let tempStreak = 0;
                let tempType = null;
                
                for (const game of this.games) {
                    if (game.result === tempType) {
                        tempStreak++;
                    } else {
                        if (tempType === 'win' && tempStreak > longestWinStreak) {
                            longestWinStreak = tempStreak;
                        }
                        if (tempType === 'loss' && tempStreak > longestLossStreak) {
                            longestLossStreak = tempStreak;
                        }
                        tempType = game.result;
                        tempStreak = 1;
                    }
                }

                // Check final streak
                if (tempType === 'win' && tempStreak > longestWinStreak) {
                    longestWinStreak = tempStreak;
                }
                if (tempType === 'loss' && tempStreak > longestLossStreak) {
                    longestLossStreak = tempStreak;
                }

                return {
                    currentStreak,
                    currentStreakType,
                    longestWinStreak,
                    longestLossStreak
                };
            }

            calculateRecentForm() {
                if (this.games.length === 0) return null;

                const recent = [...this.games]
                    .sort((a, b) => new Date(b.date) - new Date(a.date))
                    .slice(0, Math.min(10, this.games.length));

                const recentWins = recent.filter(game => game.result === 'win').length;
                const recentPercentage = (recentWins / recent.length * 100).toFixed(1);

                return {
                    games: recent.length,
                    wins: recentWins,
                    percentage: recentPercentage,
                    form: recent.slice(0, 5).map(game => game.result.charAt(0).toUpperCase()).join(' ')
                };
            }

            addGame() {
                const date = document.getElementById('gameDate').value;
                const opponent = document.getElementById('opponent').value.trim();
                const result = document.getElementById('gameResult').value;

                if (!date || !opponent) {
                    alert('Please fill in all fields');
                    return;
                }

                const game = {
                    id: Date.now(),
                    date,
                    opponent,
                    result
                };

                this.games.unshift(game);
                this.updateGamesList();
                
                // Clear form
                document.getElementById('opponent').value = '';
                this.setToday();
            }

            updateGamesList() {
                const container = document.getElementById('gamesContainer');
                
                if (this.games.length === 0) {
                    container.innerHTML = '<div class="text-gray-500 text-center py-4">No games added yet</div>';
                    return;
                }

                const gamesHtml = this.games.map(game => {
                    const resultClass = game.result === 'win' ? 'text-green-600 bg-green-100' :
                                       game.result === 'loss' ? 'text-red-600 bg-red-100' : 
                                       'text-yellow-600 bg-yellow-100';
                    
                    const resultIcon = game.result === 'win' ? 'fas fa-check-circle' :
                                      game.result === 'loss' ? 'fas fa-times-circle' : 
                                      'fas fa-minus-circle';

                    return `
                        <div class="game-entry flex items-center justify-between p-3 bg-white rounded-lg border">
                            <div class="flex items-center space-x-4">
                                <div class="${resultClass} px-3 py-1 rounded-full text-sm font-medium">
                                    <i class="${resultIcon} mr-1" aria-hidden="true"></i>
                                    ${game.result.toUpperCase()}
                                </div>
                                <div>
                                    <div class="font-medium">${game.opponent}</div>
                                    <div class="text-sm text-gray-500">${new Date(game.date).toLocaleDateString()}</div>
                                </div>
                            </div>
                            <button onclick="winCalc.removeGame(${game.id})" class="text-red-500 hover:text-red-700 p-2">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    `;
                }).join('');

                container.innerHTML = gamesHtml;
            }

            removeGame(gameId) {
                this.games = this.games.filter(game => game.id !== gameId);
                this.updateGamesList();
            }

            displayResults(results, detailed = false) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main statistics
                document.getElementById('winPercentage').textContent = results.winPercentage.toFixed(1) + '%';
                document.getElementById('totalWinsDisplay').textContent = results.wins;
                document.getElementById('totalLossesDisplay').textContent = results.losses;
                document.getElementById('totalGamesDisplay').textContent = results.totalGames;

                // Update win percentage card style
                const winPercentCard = document.getElementById('winPercentCard');
                winPercentCard.className = 'stat-card p-6 rounded-lg shadow text-center ' + this.getPerformanceClass(results.winPercentage);

                // Update additional stats
                this.updateAdditionalStats(results, detailed);
                this.updatePerformanceBreakdown(results);
                this.updatePerformanceInsights(results, detailed);

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            getPerformanceClass(percentage) {
                if (percentage >= 80) return 'win-excellent';
                if (percentage >= 60) return 'win-good';
                if (percentage >= 40) return 'win-average';
                return 'win-poor';
            }

            updateAdditionalStats(results, detailed) {
                let statsHtml = `
                    <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                        <div class="text-xl font-bold text-yellow-600 mb-1">${results.ties}</div>
                        <div class="text-xs text-gray-600">Ties</div>
                    </div>
                    <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                        <div class="text-xl font-bold text-red-600 mb-1">${results.lossPercentage.toFixed(1)}%</div>
                        <div class="text-xs text-gray-600">Loss Rate</div>
                    </div>
                `;

                if (detailed && results.streakData) {
                    const streakClass = results.streakData.currentStreakType === 'win' ? 'win-streak' : 
                                       results.streakData.currentStreakType === 'loss' ? 'loss-streak' : '';
                    
                    statsHtml += `
                        <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="streak-indicator ${streakClass}">${results.streakData.currentStreak} ${results.streakData.currentStreakType?.toUpperCase()}</div>
                            <div class="text-xs text-gray-600 mt-1">Current Streak</div>
                        </div>
                    `;
                }

                document.getElementById('additionalStats').innerHTML = statsHtml;
            }

            updatePerformanceBreakdown(results) {
                const breakdownHtml = `
                    <div class="flex justify-between py-2 border-b">
                        <span>Win Rate:</span>
                        <span class="font-medium text-green-600">${results.winPercentage.toFixed(1)}%</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Loss Rate:</span>
                        <span class="font-medium text-red-600">${results.lossPercentage.toFixed(1)}%</span>
                    </div>
                    ${results.ties > 0 ? `
                        <div class="flex justify-between py-2 border-b">
                            <span>Tie Rate:</span>
                            <span class="font-medium text-yellow-600">${results.tiePercentage.toFixed(1)}%</span>
                        </div>
                    ` : ''}
                    <div class="flex justify-between py-2 border-b">
                        <span>Games Played:</span>
                        <span class="font-medium">${results.totalGames}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t-2 border-gray-300 font-semibold">
                        <span>Performance Grade:</span>
                        <span class="text-blue-600">${this.getPerformanceGrade(results.winPercentage)}</span>
                    </div>
                `;

                document.getElementById('performanceBreakdown').innerHTML = breakdownHtml;
            }

            getPerformanceGrade(percentage) {
                if (percentage >= 90) return 'A+';
                if (percentage >= 80) return 'A';
                if (percentage >= 70) return 'B+';
                if (percentage >= 60) return 'B';
                if (percentage >= 50) return 'C+';
                if (percentage >= 40) return 'C';
                if (percentage >= 30) return 'D';
                return 'F';
            }

            updatePerformanceInsights(results, detailed) {
                const insights = [];

                if (results.winPercentage >= 80) {
                    insights.push({
                        type: 'success',
                        icon: 'fas fa-trophy',
                        text: 'Excellent performance! You\'re dominating in this area.'
                    });
                } else if (results.winPercentage >= 60) {
                    insights.push({
                        type: 'info',
                        icon: 'fas fa-thumbs-up',
                        text: 'Good performance with consistent success.'
                    });
                } else if (results.winPercentage >= 40) {
                    insights.push({
                        type: 'warning',
                        icon: 'fas fa-balance-scale',
                        text: 'Average performance with room for improvement.'
                    });
                } else {
                    insights.push({
                        type: 'error',
                        icon: 'fas fa-chart-line',
                        text: 'Focus on improvement strategies and learning from losses.'
                    });
                }

                if (detailed && results.streakData) {
                    if (results.streakData.currentStreakType === 'win' && results.streakData.currentStreak >= 3) {
                        insights.push({
                            type: 'success',
                            icon: 'fas fa-fire',
                            text: `You're on fire! ${results.streakData.currentStreak} wins in a row!`
                        });
                    }
                    
                    if (results.streakData.longestWinStreak >= 5) {
                        insights.push({
                            type: 'info',
                            icon: 'fas fa-medal',
                            text: `Your longest win streak: ${results.streakData.longestWinStreak} games!`
                        });
                    }
                }

                if (results.totalGames >= 10) {
                    insights.push({
                        type: 'info',
                        icon: 'fas fa-chart-bar',
                        text: 'Good sample size for reliable statistics.'
                    });
                } else {
                    insights.push({
                        type: 'warning',
                        icon: 'fas fa-info-circle',
                        text: 'Play more games for more reliable win percentage.'
                    });
                }

                const insightsHtml = insights.map(insight => {
                    const colorClass = insight.type === 'error' ? 'text-red-600' : 
                                     insight.type === 'warning' ? 'text-orange-600' : 
                                     insight.type === 'success' ? 'text-green-600' : 'text-blue-600';
                    
                    return `
                        <div class="flex items-start space-x-3">
                            <i class="${insight.icon} ${colorClass} mt-1" aria-hidden="true"></i>
                            <p class="text-sm text-gray-700">${insight.text}</p>
                        </div>
                    `;
                }).join('');

                document.getElementById('performanceInsights').innerHTML = insightsHtml;
            }

            shareResults() {
                const winPercentage = document.getElementById('winPercentage').textContent;
                const totalGames = document.getElementById('totalGamesDisplay').textContent;
                const shareText = `My win percentage: ${winPercentage} over ${totalGames} games! Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My Win Percentage',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Results copied to clipboard!');
                    });
                }
            }

            exportData() {
                const data = {
                    wins: parseInt(document.getElementById('totalWinsDisplay').textContent),
                    losses: parseInt(document.getElementById('totalLossesDisplay').textContent),
                    winPercentage: document.getElementById('winPercentage').textContent,
                    games: this.games,
                    exportDate: new Date().toISOString()
                };
                
                const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'win_percentage_data.json';
                a.click();
                URL.revokeObjectURL(url);
            }

            resetCalculator() {
                // Reset simple mode inputs
                document.getElementById('totalWins').value = '';
                document.getElementById('totalLosses').value = '';
                document.getElementById('totalTies').value = '';
                
                // Reset detailed mode
                this.games = [];
                this.updateGamesList();
                document.getElementById('opponent').value = '';
                this.setToday();
                
                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');
            }
        }

        // Initialize calculator when page loads
        let winCalc;
        document.addEventListener('DOMContentLoaded', () => {
            winCalc = new WinPercentageCalculator();
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