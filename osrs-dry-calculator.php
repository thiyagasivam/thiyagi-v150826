<?php include 'header.php'; ?>

    <title>OSRS Dry Calculator 2026 - Old School RuneScape Drop Rate Calculator | Thiyagi.com</title>
    <meta name="description" content="Calculate OSRS drop rates and dry streak probabilities. Free Old School RuneScape dry calculator 2026 with boss drops, rare items, and probability statistics for all OSRS content.">
    <meta name="keywords" content="OSRS dry calculator 2026, Old School RuneScape drop calculator, OSRS drop rates, RuneScape probability calculator, OSRS boss drops, dry streak calculator, OSRS RNG calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="OSRS Dry Calculator 2026 - Old School RuneScape Drop Rate Calculator">
    <meta property="og:description" content="Calculate OSRS drop rates and dry streak probabilities. Free Old School RuneScape dry calculator with boss drops and rare item statistics.">
    <meta property="og:url" content="https://www.thiyagi.com/osrs-dry-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="OSRS Dry Calculator 2026 - Old School RuneScape Drop Rate Calculator">
    <meta name="twitter:description" content="Calculate OSRS drop rates and dry streak probabilities. Free Old School RuneScape dry calculator with boss drops and rare item statistics.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .result-card {
        transition: all 0.3s ease;
    }
    .result-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .progress-bar {
        transition: width 0.5s ease;
    }
    .boss-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .boss-card:hover {
        background: #f8fafc;
        border-color: #6366f1;
        transform: translateY(-2px);
    }
    .boss-card.selected {
        background: #eef2ff;
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
    }
    .probability-good {
        color: #10b981;
        background: #ecfdf5;
    }
    .probability-average {
        color: #f59e0b;
        background: #fffbeb;
    }
    .probability-bad {
        color: #ef4444;
        background: #fef2f2;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "OSRS Dry Calculator 2026",
  "description": "Calculate Old School RuneScape drop rates, dry streak probabilities, and RNG statistics for bosses, raids, and rare items with comprehensive OSRS drop rate data.",
  "url": "https://www.thiyagi.com/osrs-dry-calculator",
  "applicationCategory": "GameApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.thiyagi.com"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "OSRS Dry Calculator",
        "item": "https://www.thiyagi.com/osrs-dry-calculator"
      }
    ]
  }
}
</script>

<!-- FAQ Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is a dry streak in OSRS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A dry streak in OSRS refers to a period of kills or attempts without receiving a specific rare drop. For example, going 500 kills at a boss without getting the desired rare item when the drop rate is 1/100."
      }
    },
    {
      "@type": "Question",
      "name": "How do OSRS drop rates work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "OSRS drop rates are expressed as fractions (e.g., 1/128 means 1 in 128 chance per kill). Each kill is independent, so previous kills don't affect future drop chances. The dry calculator helps determine the probability of going dry for a certain number of kills."
      }
    },
    {
      "@type": "Question",
      "name": "What is considered unlucky in OSRS?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Generally, going 2-3 times the drop rate without receiving an item is considered unlucky. For a 1/100 drop rate, going 200-300 kills dry would be unlucky, and anything beyond 400+ kills would be extremely unlucky."
      }
    },
    {
      "@type": "Question",
      "name": "How accurate is the OSRS dry calculator?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The dry calculator uses mathematical probability formulas and official OSRS drop rates to provide accurate statistics. It calculates the exact probability of going dry for any number of kills using binomial distribution."
      }
    },
    {
      "@type": "Question",
      "name": "Can the dry calculator predict when I'll get a drop?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, the calculator cannot predict future drops as each kill is independent. It only calculates the probability of certain outcomes based on mathematical statistics and historical drop rates."
      }
    }
  ]
}
</script>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-dice text-2xl text-purple-600" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">OSRS Dry Calculator</h1>
                        <p class="text-purple-100">Calculate Old School RuneScape drop rates & probabilities</p>
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
                <li class="text-gray-900 font-medium">OSRS Dry Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-purple-100 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl text-purple-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">OSRS Drop Rate Calculator</h2>
                <p class="text-gray-600">Calculate your dry streak probability and drop rate statistics</p>
            </div>

            <!-- Input Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Manual Input -->
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                        <i class="fas fa-edit mr-2 text-purple-600" aria-hidden="true"></i>
                        Manual Input
                    </h3>
                    
                    <div>
                        <label for="dropRate" class="block text-sm font-medium text-gray-700 mb-2">Drop Rate (1 in X)</label>
                        <input type="number" id="dropRate" min="1" max="100000" placeholder="e.g., 128 for 1/128" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Enter the denominator (e.g., 128 for 1/128 drop rate)</div>
                    </div>

                    <div>
                        <label for="killCount" class="block text-sm font-medium text-gray-700 mb-2">Number of Kills/Attempts</label>
                        <input type="number" id="killCount" min="1" max="50000" placeholder="e.g., 200" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="itemName" class="block text-sm font-medium text-gray-700 mb-2">Item/Drop Name (Optional)</label>
                        <input type="text" id="itemName" placeholder="e.g., Dragon Warhammer" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-medium text-blue-800 mb-2">
                            <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>
                            Quick Tips
                        </h4>
                        <ul class="text-sm text-blue-700 space-y-1">
                            <li>• Enter only the number after 1/ (e.g., 128 for 1/128)</li>
                            <li>• Each kill/attempt is independent</li>
                            <li>• Probability doesn't change based on previous results</li>
                            <li>• Use preset bosses for accurate rates</li>
                        </ul>
                    </div>
                </div>

                <!-- Preset Bosses -->
                <div class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center">
                        <i class="fas fa-dragon mr-2 text-purple-600" aria-hidden="true"></i>
                        Popular OSRS Bosses & Drops
                    </h3>
                    
                    <div class="space-y-3 max-h-80 overflow-y-auto">
                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="5000" data-name="Theatre of Blood - Scythe of Vitur">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Theatre of Blood</div>
                                    <div class="text-sm text-gray-600">Scythe of Vitur (1/5000)</div>
                                </div>
                                <i class="fas fa-skull text-red-500" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="3000" data-name="Chambers of Xeric - Twisted Bow">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Chambers of Xeric</div>
                                    <div class="text-sm text-gray-600">Twisted Bow (1/3000)</div>
                                </div>
                                <i class="fas fa-bow-arrow text-orange-500" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="5000" data-name="Lizardman Shaman - Dragon Warhammer">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Lizardman Shaman</div>
                                    <div class="text-sm text-gray-600">Dragon Warhammer (1/5000)</div>
                                </div>
                                <i class="fas fa-hammer text-yellow-600" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="512" data-name="Zulrah - Unique Drop">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Zulrah</div>
                                    <div class="text-sm text-gray-600">Any Unique (1/512)</div>
                                </div>
                                <i class="fas fa-snake text-green-500" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="128" data-name="Vorkath - Unique Drop">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Vorkath</div>
                                    <div class="text-sm text-gray-600">Any Unique (1/128)</div>
                                </div>
                                <i class="fas fa-dragon text-blue-500" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="1000" data-name="Corporeal Beast - Elysian Sigil">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Corporeal Beast</div>
                                    <div class="text-sm text-gray-600">Elysian Sigil (1/1000)</div>
                                </div>
                                <i class="fas fa-shield-alt text-purple-500" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="256" data-name="Bandos - Bandos Chestplate">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">General Graardor</div>
                                    <div class="text-sm text-gray-600">Bandos Chestplate (1/256)</div>
                                </div>
                                <i class="fas fa-user-shield text-red-600" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="boss-card border-2 border-gray-200 rounded-lg p-3" data-rate="508" data-name="Armadyl - Armadyl Crossbow">
                            <div class="flex justify-between items-center">
                                <div>
                                    <div class="font-medium text-gray-800">Kree'arra</div>
                                    <div class="text-sm text-gray-600">Armadyl Crossbow (1/508)</div>
                                </div>
                                <i class="fas fa-crosshairs text-cyan-500" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calculate Button -->
            <div class="text-center mb-8">
                <button id="calculateBtn" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                    <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                    Calculate Probabilities
                </button>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in">
                <div class="bg-gradient-to-r from-purple-50 to-blue-50 border-2 border-purple-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-bar mr-2 text-purple-600" aria-hidden="true"></i>
                        <span id="resultsTitle">Drop Probability Results</span>
                    </h3>
                    
                    <!-- Main Stats -->
                    <div class="grid md:grid-cols-3 gap-6 mb-6">
                        <!-- Probability of Getting Drop -->
                        <div class="result-card bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="font-semibold text-gray-800">Chance of Getting Drop</h4>
                                <i class="fas fa-trophy text-yellow-500" aria-hidden="true"></i>
                            </div>
                            <div id="dropChance" class="text-2xl font-bold text-green-600 mb-2">0%</div>
                            <div class="text-sm text-gray-600 mb-3">Probability of at least 1 drop</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="dropProgress" class="progress-bar bg-green-500 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Probability of Going Dry -->
                        <div class="result-card bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="font-semibold text-gray-800">Chance of Going Dry</h4>
                                <i class="fas fa-times-circle text-red-500" aria-hidden="true"></i>
                            </div>
                            <div id="dryChance" class="text-2xl font-bold text-red-600 mb-2">0%</div>
                            <div class="text-sm text-gray-600 mb-3">Probability of 0 drops</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="dryProgress" class="progress-bar bg-red-500 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>

                        <!-- Expected Drops -->
                        <div class="result-card bg-white p-6 rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="font-semibold text-gray-800">Expected Drops</h4>
                                <i class="fas fa-calculator text-blue-500" aria-hidden="true"></i>
                            </div>
                            <div id="expectedDrops" class="text-2xl font-bold text-blue-600 mb-2">0.0</div>
                            <div class="text-sm text-gray-600 mb-3">Average number of drops</div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="expectedProgress" class="progress-bar bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Statistics -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-line mr-2 text-purple-500" aria-hidden="true"></i>
                            Detailed Statistics
                        </h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <h5 class="font-medium text-gray-700 mb-3">Drop Information</h5>
                                <div class="space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Drop Rate:</span>
                                        <span id="displayRate" class="font-medium">1/0</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Kill Count:</span>
                                        <span id="displayKills" class="font-medium">0</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Drop Rate %:</span>
                                        <span id="displayPercent" class="font-medium">0%</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-medium text-gray-700 mb-3">Luck Assessment</h5>
                                <div id="luckAssessment" class="text-sm">
                                    <div id="luckStatus" class="px-3 py-2 rounded-lg font-medium mb-2">Calculate to see assessment</div>
                                    <div id="luckDescription" class="text-gray-600">Enter your drop rate and kill count to get started</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Probability Breakdown -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-list-ul mr-2 text-green-500" aria-hidden="true"></i>
                            Probability Breakdown
                        </h4>
                        <div id="probabilityBreakdown" class="space-y-2 text-sm">
                            <!-- Probability breakdown will be populated by JavaScript -->
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-6 flex flex-wrap gap-3 justify-center">
                        <button id="recalculateBtn" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-redo mr-2" aria-hidden="true"></i>
                            Recalculate
                        </button>
                        <button id="shareResultBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Drop Rate Reference -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-book mr-3 text-blue-500" aria-hidden="true"></i>
                OSRS Drop Rate Reference
            </h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Bosses -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-dragon mr-2 text-red-500" aria-hidden="true"></i>
                        Popular Bosses
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-700">Zulrah (Any Unique):</span>
                            <span class="font-medium">1/512</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Vorkath (Any Unique):</span>
                            <span class="font-medium">1/128</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Bandos (BCP):</span>
                            <span class="font-medium">1/256</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Armadyl (ACB):</span>
                            <span class="font-medium">1/508</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Sara (ACB):</span>
                            <span class="font-medium">1/508</span>
                        </div>
                    </div>
                </div>

                <!-- Raids -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-users mr-2 text-purple-500" aria-hidden="true"></i>
                        Raids & End Game
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-700">CoX (T-Bow):</span>
                            <span class="font-medium">1/3,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">ToB (Scythe):</span>
                            <span class="font-medium">1/5,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Corp (Ely):</span>
                            <span class="font-medium">1/1,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Nightmare (Inq Pieces):</span>
                            <span class="font-medium">1/1,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">ToA (Purple):</span>
                            <span class="font-medium">Variable</span>
                        </div>
                    </div>
                </div>

                <!-- Slayer & Others -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-sword mr-2 text-orange-500" aria-hidden="true"></i>
                        Slayer & Others
                    </h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-700">Lizardman (DWH):</span>
                            <span class="font-medium">1/5,000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Cerberus (Crystal):</span>
                            <span class="font-medium">1/512</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Kraken (Trident):</span>
                            <span class="font-medium">1/512</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Abyssal Demon (Whip):</span>
                            <span class="font-medium">1/512</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Basilisk Knight (Jaw):</span>
                            <span class="font-medium">1/5,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Understanding Probabilities -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-graduation-cap mr-3 text-green-500" aria-hidden="true"></i>
                Understanding OSRS Probabilities
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">How Drop Rates Work</h3>
                    <div class="space-y-3 text-gray-700">
                        <p>• Each kill/attempt is independent - previous results don't affect future drops</p>
                        <p>• A 1/128 drop rate means 1 in 128 chance per kill, not guaranteed in 128 kills</p>
                        <p>• You have a ~63% chance of getting the drop within the drop rate number of kills</p>
                        <p>• Going 2x the drop rate dry has about a 13.5% chance of happening</p>
                        <p>• Extremely rare drops (1/5000+) often require thousands of attempts</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Luck Categories</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-green-500 rounded-full mr-3"></div>
                            <div>
                                <div class="font-medium text-gray-800">Lucky (Under 50% of drop rate)</div>
                                <div class="text-sm text-gray-600">You got the drop faster than average</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mr-3"></div>
                            <div>
                                <div class="font-medium text-gray-800">Average (50% - 200% of drop rate)</div>
                                <div class="text-sm text-gray-600">Normal luck, most players fall here</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 bg-red-500 rounded-full mr-3"></div>
                            <div>
                                <div class="font-medium text-gray-800">Unlucky (200%+ of drop rate)</div>
                                <div class="text-sm text-gray-600">Going dry - happens to about 13.5% of players</div>
                            </div>
                        </div>
                    </div>
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
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What is a dry streak in OSRS?</h3>
                    <p class="text-gray-600">A dry streak in OSRS refers to a period of kills or attempts without receiving a specific rare drop. For example, going 500 kills at a boss without getting the desired rare item when the drop rate is 1/100.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How do OSRS drop rates work?</h3>
                    <p class="text-gray-600">OSRS drop rates are expressed as fractions (e.g., 1/128 means 1 in 128 chance per kill). Each kill is independent, so previous kills don't affect future drop chances. The dry calculator helps determine the probability of going dry for a certain number of kills.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What is considered unlucky in OSRS?</h3>
                    <p class="text-gray-600">Generally, going 2-3 times the drop rate without receiving an item is considered unlucky. For a 1/100 drop rate, going 200-300 kills dry would be unlucky, and anything beyond 400+ kills would be extremely unlucky.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How accurate is the OSRS dry calculator?</h3>
                    <p class="text-gray-600">The dry calculator uses mathematical probability formulas and official OSRS drop rates to provide accurate statistics. It calculates the exact probability of going dry for any number of kills using binomial distribution.</p>
                </div>
                
                <div class="border-l-4 border-red-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Can the dry calculator predict when I'll get a drop?</h3>
                    <p class="text-gray-600">No, the calculator cannot predict future drops as each kill is independent. It only calculates the probability of certain outcomes based on mathematical statistics and historical drop rates.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class OSRSDryCalculator {
            constructor() {
                this.init();
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateProbabilities());
                document.getElementById('recalculateBtn')?.addEventListener('click', () => this.calculateProbabilities());
                document.getElementById('shareResultBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());

                // Boss card selection
                document.querySelectorAll('.boss-card').forEach(card => {
                    card.addEventListener('click', () => this.selectBoss(card));
                });
            }

            selectBoss(card) {
                // Remove previous selections
                document.querySelectorAll('.boss-card').forEach(c => c.classList.remove('selected'));
                
                // Select current card
                card.classList.add('selected');
                
                // Fill in the values
                const rate = card.dataset.rate;
                const name = card.dataset.name;
                
                document.getElementById('dropRate').value = rate;
                document.getElementById('itemName').value = name;
            }

            calculateProbabilities() {
                const dropRate = parseInt(document.getElementById('dropRate').value);
                const killCount = parseInt(document.getElementById('killCount').value);
                const itemName = document.getElementById('itemName').value || 'Item';

                if (!dropRate || !killCount) {
                    alert('Please enter both drop rate and kill count.');
                    return;
                }

                if (dropRate < 1 || killCount < 1) {
                    alert('Please enter valid positive numbers.');
                    return;
                }

                // Calculate probabilities
                const probability = 1 / dropRate;
                const chanceOfDrop = 1 - Math.pow(1 - probability, killCount);
                const chanceOfDry = Math.pow(1 - probability, killCount);
                const expectedDrops = killCount * probability;

                // Display results
                this.displayResults({
                    dropRate,
                    killCount,
                    itemName,
                    chanceOfDrop,
                    chanceOfDry,
                    expectedDrops,
                    probability
                });
            }

            displayResults(data) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update title
                document.getElementById('resultsTitle').textContent = `${data.itemName} - Drop Analysis`;

                // Update main stats
                document.getElementById('dropChance').textContent = `${(data.chanceOfDrop * 100).toFixed(2)}%`;
                document.getElementById('dryChance').textContent = `${(data.chanceOfDry * 100).toFixed(2)}%`;
                document.getElementById('expectedDrops').textContent = data.expectedDrops.toFixed(2);

                // Update progress bars
                document.getElementById('dropProgress').style.width = `${Math.min(100, data.chanceOfDrop * 100)}%`;
                document.getElementById('dryProgress').style.width = `${Math.min(100, data.chanceOfDry * 100)}%`;

                // Update detailed stats
                document.getElementById('displayRate').textContent = `1/${data.dropRate}`;
                document.getElementById('displayKills').textContent = data.killCount.toLocaleString();
                document.getElementById('displayPercent').textContent = `${(data.probability * 100).toFixed(4)}%`;

                // Update luck assessment
                this.updateLuckAssessment(data);

                // Update probability breakdown
                this.updateProbabilityBreakdown(data);

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateLuckAssessment(data) {
                const ratio = data.killCount / data.dropRate;
                let luckStatus, luckDescription, statusClass;

                if (ratio < 0.5) {
                    luckStatus = "Very Lucky! 🍀";
                    luckDescription = "You would be getting the drop much faster than average!";
                    statusClass = "probability-good";
                } else if (ratio < 1.0) {
                    luckStatus = "Lucky 😊";
                    luckDescription = "Better than average luck if you get the drop.";
                    statusClass = "probability-good";
                } else if (ratio < 2.0) {
                    luckStatus = "Average Luck 😐";
                    luckDescription = "Normal range - most players experience this.";
                    statusClass = "probability-average";
                } else if (ratio < 3.0) {
                    luckStatus = "Unlucky 😞";
                    luckDescription = "You're going dry - but this happens to many players.";
                    statusClass = "probability-bad";
                } else {
                    luckStatus = "Very Unlucky 😭";
                    luckDescription = "Extremely dry - you have our sympathy!";
                    statusClass = "probability-bad";
                }

                document.getElementById('luckStatus').textContent = luckStatus;
                document.getElementById('luckStatus').className = `px-3 py-2 rounded-lg font-medium mb-2 ${statusClass}`;
                document.getElementById('luckDescription').textContent = luckDescription;
            }

            updateProbabilityBreakdown(data) {
                const breakdown = document.getElementById('probabilityBreakdown');
                const breakdowns = [];

                // Calculate probabilities for different scenarios
                const scenarios = [
                    { kills: Math.floor(data.dropRate * 0.5), label: "50% of drop rate" },
                    { kills: data.dropRate, label: "Drop rate (1x)" },
                    { kills: Math.floor(data.dropRate * 1.5), label: "1.5x drop rate" },
                    { kills: data.dropRate * 2, label: "2x drop rate" },
                    { kills: data.dropRate * 3, label: "3x drop rate" }
                ];

                scenarios.forEach(scenario => {
                    const prob = 1 - Math.pow(1 - data.probability, scenario.kills);
                    const dryProb = Math.pow(1 - data.probability, scenario.kills);
                    
                    breakdowns.push(`
                        <div class="flex justify-between items-center p-2 bg-gray-50 rounded">
                            <span class="text-gray-700">${scenario.label} (${scenario.kills} kills):</span>
                            <div class="text-right">
                                <div class="text-green-600 font-medium">${(prob * 100).toFixed(1)}% chance of drop</div>
                                <div class="text-red-600 text-sm">${(dryProb * 100).toFixed(1)}% chance of dry</div>
                            </div>
                        </div>
                    `);
                });

                breakdown.innerHTML = breakdowns.join('');
            }

            shareResults() {
                const dropRate = document.getElementById('dropRate').value;
                const killCount = document.getElementById('killCount').value;
                const itemName = document.getElementById('itemName').value || 'Item';
                const dropChance = document.getElementById('dropChance').textContent;
                const dryChance = document.getElementById('dryChance').textContent;

                const shareText = `OSRS Dry Calculator Results:
${itemName} (1/${dropRate})
${killCount} kills: ${dropChance} chance of drop, ${dryChance} chance of going dry
Calculate your OSRS probabilities at: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'OSRS Dry Calculator Results',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Results copied to clipboard!');
                    });
                }
            }

            resetCalculator() {
                document.getElementById('dropRate').value = '';
                document.getElementById('killCount').value = '';
                document.getElementById('itemName').value = '';
                document.getElementById('resultsSection').classList.add('hidden');
                document.querySelectorAll('.boss-card').forEach(c => c.classList.remove('selected'));
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new OSRSDryCalculator();
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