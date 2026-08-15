<?php include 'header.php'; ?>

    <title>Super Juice Calculator 2026 - Nutrition & Antioxidant Calculator | Thiyagi.com</title>
    <meta name="description" content="Super juice calculator 2026 - calculate nutrition values, antioxidant levels, vitamin content, and health benefits for custom juice recipes and combinations.">
    <meta name="keywords" content="super juice calculator 2026, nutrition calculator, antioxidant calculator, juice recipe calculator, vitamin content calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Super Juice Calculator 2026 - Nutrition & Antioxidant Calculator">
    <meta property="og:description" content="Calculate nutrition values and health benefits for custom super juice recipes.">
    <meta property="og:url" content="https://www.thiyagi.com/super-juice-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Super Juice Calculator 2026 - Nutrition & Antioxidant Calculator">
    <meta name="twitter:description" content="Calculate nutrition and antioxidant values for super juice recipes.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
    }
    .juice-card {
        transition: all 0.3s ease;
        border-left: 4px solid #22c55e;
    }
    .juice-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #16a34a;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .juice-pulse {
        animation: juicePulse 2s ease-in-out infinite;
    }
    @keyframes juicePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
    .ingredient-option {
        background: linear-gradient(45deg, #f0fdf4, #dcfce7);
        border: 1px solid #86efac;
    }
    .ingredient-option:hover {
        background: linear-gradient(45deg, #dcfce7, #bbf7d0);
    }
    .ingredient-option.selected {
        background: linear-gradient(45deg, #bbf7d0, #86efac);
        border-color: #22c55e;
    }
    .nutrition-bar {
        transition: width 1s ease-in-out;
    }
    .antioxidant-glow {
        box-shadow: 0 0 20px rgba(34, 197, 94, 0.3);
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Super Juice Calculator 2026",
  "description": "Nutrition calculator for super juice recipes with antioxidant values, vitamin content, and health benefits calculation.",
  "url": "https://www.thiyagi.com/super-juice-calculator",
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
                        <i class="fas fa-blender text-2xl text-green-600 juice-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Super Juice Calculator</h1>
                        <p class="text-green-100">Calculate nutrition & antioxidant values</p>
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
                <li class="text-gray-900 font-medium">Super Juice Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Super Juice Recipe Calculator</h2>
                <p class="text-green-100">Create custom juice recipes with nutrition analysis</p>
            </div>
            
            <div class="p-6">
                <form id="juiceForm" class="space-y-6">
                    <!-- Recipe Settings -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="servingSize" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-glass-whiskey text-green-500 mr-2"></i>
                                    Serving Size
                                </label>
                                <select id="servingSize" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="8">8 oz (Small)</option>
                                    <option value="12" selected>12 oz (Medium)</option>
                                    <option value="16">16 oz (Large)</option>
                                    <option value="20">20 oz (Extra Large)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="juiceType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-seedling text-green-500 mr-2"></i>
                                    Juice Base Type
                                </label>
                                <select id="juiceType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="fresh">Fresh Pressed</option>
                                    <option value="cold-pressed">Cold Pressed (Higher nutrients)</option>
                                    <option value="blended">Blended/Smoothie</option>
                                    <option value="concentrated">From Concentrate</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="healthGoal" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-target text-green-500 mr-2"></i>
                                    Health Goal
                                </label>
                                <select id="healthGoal" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="general">General Health</option>
                                    <option value="immunity">Immune Support</option>
                                    <option value="energy">Energy Boost</option>
                                    <option value="detox">Detoxification</option>
                                    <option value="anti-aging">Anti-Aging</option>
                                    <option value="weight-loss">Weight Management</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sweetness" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-candy-cane text-green-500 mr-2"></i>
                                    Sweetness Level
                                </label>
                                <select id="sweetness" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                    <option value="none">No Added Sweetener</option>
                                    <option value="natural">Natural Fruits Only</option>
                                    <option value="honey">Add Honey</option>
                                    <option value="dates">Add Dates</option>
                                    <option value="stevia">Add Stevia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Ingredient Selection -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-apple-alt text-green-500 mr-2"></i>
                            Select Ingredients (Choose 3-8 ingredients)
                        </label>
                        
                        <!-- Fruits -->
                        <div class="mb-4">
                            <h4 class="font-medium text-gray-700 mb-2">Fruits & Berries</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="apple" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-apple-alt text-red-500 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Apple</div>
                                        <div class="text-xs text-gray-500">95 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="blueberry" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-blue-600 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Blueberry</div>
                                        <div class="text-xs text-gray-500">4669 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="orange" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-orange-500 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Orange</div>
                                        <div class="text-xs text-gray-500">2103 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="strawberry" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-seedling text-red-400 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Strawberry</div>
                                        <div class="text-xs text-gray-500">4302 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="pomegranate" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-red-700 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Pomegranate</div>
                                        <div class="text-xs text-gray-500">4479 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="acai" data-category="fruit">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-purple-800 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Acai</div>
                                        <div class="text-xs text-gray-500">15405 ORAC</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vegetables -->
                        <div class="mb-4">
                            <h4 class="font-medium text-gray-700 mb-2">Vegetables & Greens</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="spinach" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-leaf text-green-600 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Spinach</div>
                                        <div class="text-xs text-gray-500">1513 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="kale" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-leaf text-green-700 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Kale</div>
                                        <div class="text-xs text-gray-500">1770 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="carrot" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-carrot text-orange-400 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Carrot</div>
                                        <div class="text-xs text-gray-500">666 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="beet" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-red-600 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Beet</div>
                                        <div class="text-xs text-gray-500">1776 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="celery" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-seedling text-green-400 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Celery</div>
                                        <div class="text-xs text-gray-500">552 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="cucumber" data-category="vegetable">
                                    <div class="text-center">
                                        <i class="fas fa-leaf text-green-300 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Cucumber</div>
                                        <div class="text-xs text-gray-500">232 ORAC</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Superfoods -->
                        <div class="mb-4">
                            <h4 class="font-medium text-gray-700 mb-2">Superfoods & Boosters</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-3">
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="ginger" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-leaf text-yellow-600 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Ginger</div>
                                        <div class="text-xs text-gray-500">28811 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="turmeric" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-seedling text-yellow-500 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Turmeric</div>
                                        <div class="text-xs text-gray-500">159277 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="lemon" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-lemon text-yellow-400 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Lemon</div>
                                        <div class="text-xs text-gray-500">1346 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="wheatgrass" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-leaf text-green-500 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Wheatgrass</div>
                                        <div class="text-xs text-gray-500">5570 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="spirulina" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-circle text-green-800 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Spirulina</div>
                                        <div class="text-xs text-gray-500">24515 ORAC</div>
                                    </div>
                                </div>
                                <div class="ingredient-option p-3 rounded-lg cursor-pointer" data-ingredient="chia" data-category="superfood">
                                    <div class="text-center">
                                        <i class="fas fa-seedling text-gray-600 text-lg mb-1"></i>
                                        <div class="text-xs font-medium">Chia Seeds</div>
                                        <div class="text-xs text-gray-500">9800 ORAC</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateSuperJuice()" 
                                class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-lg hover:from-green-600 hover:to-green-700 focus:ring-4 focus:ring-green-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Super Juice Nutrition
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Nutrition Overview -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in antioxidant-glow">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-green-500 mr-3"></i>
                    Nutrition Profile
                </h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="juice-card bg-red-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-red-800 mb-2">Calories</h4>
                        <p id="totalCalories" class="text-4xl font-bold text-red-900">0</p>
                        <p class="text-sm text-red-600 mt-1">kcal per serving</p>
                    </div>
                    <div class="juice-card bg-orange-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-orange-800 mb-2">Vitamin C</h4>
                        <p id="vitaminC" class="text-4xl font-bold text-orange-900">0</p>
                        <p class="text-sm text-orange-600 mt-1">mg (% DV)</p>
                    </div>
                    <div class="juice-card bg-purple-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-purple-800 mb-2">ORAC Score</h4>
                        <p id="oracScore" class="text-4xl font-bold text-purple-900">0</p>
                        <p class="text-sm text-purple-600 mt-1">antioxidant units</p>
                    </div>
                    <div class="juice-card bg-green-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-green-800 mb-2">Health Score</h4>
                        <p id="healthScore" class="text-4xl font-bold text-green-900">0</p>
                        <p class="text-sm text-green-600 mt-1">out of 100</p>
                    </div>
                </div>
            </div>

            <!-- Detailed Nutrition -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-microscope text-green-500 mr-3"></i>
                    Detailed Nutrition Analysis
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-700 mb-3">Macronutrients</h4>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Carbohydrates:</span>
                                <span id="carbs" class="font-medium">0g</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="carbsBar" class="nutrition-bar bg-blue-600 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Protein:</span>
                                <span id="protein" class="font-medium">0g</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="proteinBar" class="nutrition-bar bg-green-600 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-600">Fiber:</span>
                                <span id="fiber" class="font-medium">0g</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div id="fiberBar" class="nutrition-bar bg-yellow-600 h-2 rounded-full" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-700 mb-3">Key Vitamins & Minerals</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Vitamin A:</span>
                                <span id="vitaminA" class="text-sm font-medium">0 IU</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Folate:</span>
                                <span id="folate" class="text-sm font-medium">0 mcg</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Potassium:</span>
                                <span id="potassium" class="text-sm font-medium">0 mg</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Iron:</span>
                                <span id="iron" class="text-sm font-medium">0 mg</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-600">Calcium:</span>
                                <span id="calcium" class="text-sm font-medium">0 mg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health Benefits -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-heart text-green-500 mr-3"></i>
                    Health Benefits & Recommendations
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Primary Health Benefits</h4>
                        <div id="healthBenefits" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3">Recipe Recommendations</h4>
                        <div id="recommendations" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recipe Summary -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-list text-green-500 mr-3"></i>
                    Your Super Juice Recipe
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3">Ingredients</h4>
                        <div id="recipeIngredients" class="space-y-2">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3">Preparation Tips</h4>
                        <div id="preparationTips" class="space-y-2 text-sm text-gray-600">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Super Juice Recipe</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyRecipe()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Recipe
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class SuperJuiceCalculator {
            constructor() {
                this.results = null;
                this.selectedIngredients = new Set();
                this.nutritionData = {
                    // Fruits (per 100g)
                    apple: { calories: 52, carbs: 14, protein: 0.3, fiber: 2.4, vitaminC: 4.6, vitaminA: 54, folate: 3, potassium: 107, iron: 0.12, calcium: 6, orac: 3049 },
                    blueberry: { calories: 57, carbs: 14.5, protein: 0.7, fiber: 2.4, vitaminC: 9.7, vitaminA: 54, folate: 6, potassium: 77, iron: 0.28, calcium: 6, orac: 4669 },
                    orange: { calories: 47, carbs: 12, protein: 0.9, fiber: 2.4, vitaminC: 53.2, vitaminA: 225, folate: 40, potassium: 181, iron: 0.1, calcium: 40, orac: 2103 },
                    strawberry: { calories: 32, carbs: 7.7, protein: 0.7, fiber: 2, vitaminC: 58.8, vitaminA: 12, folate: 24, potassium: 153, iron: 0.41, calcium: 16, orac: 4302 },
                    pomegranate: { calories: 83, carbs: 19, protein: 1.7, fiber: 4, vitaminC: 10.2, vitaminA: 0, folate: 38, potassium: 236, iron: 0.3, calcium: 10, orac: 4479 },
                    acai: { calories: 70, carbs: 4, protein: 2, fiber: 3, vitaminC: 20, vitaminA: 1000, folate: 14, potassium: 105, iron: 0.9, calcium: 40, orac: 15405 },
                    
                    // Vegetables (per 100g)
                    spinach: { calories: 23, carbs: 3.6, protein: 2.9, fiber: 2.2, vitaminC: 28.1, vitaminA: 9377, folate: 194, potassium: 558, iron: 2.71, calcium: 99, orac: 1513 },
                    kale: { calories: 35, carbs: 4.4, protein: 2.9, fiber: 4.1, vitaminC: 93.4, vitaminA: 15376, folate: 141, potassium: 348, iron: 1.6, calcium: 254, orac: 1770 },
                    carrot: { calories: 41, carbs: 10, protein: 0.9, fiber: 2.8, vitaminC: 5.9, vitaminA: 16706, folate: 19, potassium: 320, iron: 0.3, calcium: 33, orac: 666 },
                    beet: { calories: 43, carbs: 10, protein: 1.6, fiber: 2.8, vitaminC: 4.9, vitaminA: 33, folate: 109, potassium: 325, iron: 0.8, calcium: 16, orac: 1776 },
                    celery: { calories: 14, carbs: 3, protein: 0.7, fiber: 1.6, vitaminC: 3.1, vitaminA: 449, folate: 36, potassium: 260, iron: 0.2, calcium: 40, orac: 552 },
                    cucumber: { calories: 15, carbs: 4, protein: 0.7, fiber: 0.5, vitaminC: 2.8, vitaminA: 105, folate: 7, potassium: 147, iron: 0.28, calcium: 16, orac: 232 },
                    
                    // Superfoods (per 10g serving)
                    ginger: { calories: 8, carbs: 1.8, protein: 0.18, fiber: 0.2, vitaminC: 0.5, vitaminA: 0, folate: 1.1, potassium: 41.5, iron: 0.06, calcium: 1.6, orac: 28811 },
                    turmeric: { calories: 35.4, carbs: 6.5, protein: 0.8, fiber: 2.1, vitaminC: 2.6, vitaminA: 0, folate: 0.7, potassium: 26.8, iron: 4.1, calcium: 18.3, orac: 159277 },
                    lemon: { calories: 2.9, carbs: 0.9, protein: 0.01, fiber: 0.05, vitaminC: 5.3, vitaminA: 2.2, folate: 0.9, potassium: 13.8, iron: 0.006, calcium: 2.6, orac: 1346 },
                    wheatgrass: { calories: 23, carbs: 0.6, protein: 2.2, fiber: 3.7, vitaminC: 6, vitaminA: 1180, folate: 3.8, potassium: 14.7, iron: 0.9, calcium: 2.4, orac: 5570 },
                    spirulina: { calories: 29, carbs: 0.2, protein: 5.7, fiber: 0.4, vitaminC: 1, vitaminA: 57, folate: 0.9, potassium: 136, iron: 2.8, calcium: 12, orac: 24515 },
                    chia: { calories: 48.6, carbs: 4.2, protein: 1.7, fiber: 3.4, vitaminC: 0.2, vitaminA: 5.4, folate: 4.9, potassium: 40.7, iron: 0.8, calcium: 63, orac: 9800 }
                };
                this.initializeIngredientSelection();
            }

            initializeIngredientSelection() {
                const ingredientOptions = document.querySelectorAll('.ingredient-option');
                ingredientOptions.forEach(option => {
                    option.addEventListener('click', () => {
                        const ingredient = option.dataset.ingredient;
                        
                        if (this.selectedIngredients.has(ingredient)) {
                            this.selectedIngredients.delete(ingredient);
                            option.classList.remove('selected');
                        } else if (this.selectedIngredients.size < 8) {
                            this.selectedIngredients.add(ingredient);
                            option.classList.add('selected');
                        } else {
                            alert('You can select a maximum of 8 ingredients.');
                        }
                    });
                });
            }

            calculate() {
                if (this.selectedIngredients.size < 3) {
                    alert('Please select at least 3 ingredients for your super juice!');
                    return;
                }

                const servingSize = parseInt(document.getElementById('servingSize').value);
                const juiceType = document.getElementById('juiceType').value;
                const healthGoal = document.getElementById('healthGoal').value;
                const sweetness = document.getElementById('sweetness').value;

                // Calculate nutrition totals
                let totalNutrition = {
                    calories: 0, carbs: 0, protein: 0, fiber: 0,
                    vitaminC: 0, vitaminA: 0, folate: 0,
                    potassium: 0, iron: 0, calcium: 0, orac: 0
                };

                const portionSize = servingSize / this.selectedIngredients.size; // Distribute serving size
                
                this.selectedIngredients.forEach(ingredient => {
                    const nutrition = this.nutritionData[ingredient];
                    const multiplier = portionSize / 100; // Convert to portion
                    
                    Object.keys(totalNutrition).forEach(nutrient => {
                        totalNutrition[nutrient] += nutrition[nutrient] * multiplier;
                    });
                });

                // Apply juice type multipliers
                const juiceMultipliers = {
                    'fresh': 1.0,
                    'cold-pressed': 1.2,
                    'blended': 1.1,
                    'concentrated': 0.8
                };
                const multiplier = juiceMultipliers[juiceType];
                
                Object.keys(totalNutrition).forEach(nutrient => {
                    if (nutrient !== 'calories') {
                        totalNutrition[nutrient] *= multiplier;
                    }
                });

                // Add sweetness calories
                const sweetnessCalories = {
                    'none': 0,
                    'natural': 0,
                    'honey': 25,
                    'dates': 30,
                    'stevia': 0
                };
                totalNutrition.calories += sweetnessCalories[sweetness];

                // Calculate health score
                const healthScore = this.calculateHealthScore(totalNutrition, healthGoal);

                this.results = {
                    servingSize,
                    juiceType,
                    healthGoal,
                    sweetness,
                    selectedIngredients: Array.from(this.selectedIngredients),
                    nutrition: totalNutrition,
                    healthScore
                };

                this.displayResults();
            }

            calculateHealthScore(nutrition, goal) {
                let baseScore = Math.min(100, 
                    (nutrition.vitaminC / 90) * 20 + // Vitamin C (RDA 90mg)
                    (nutrition.orac / 5000) * 30 + // ORAC score
                    (nutrition.fiber / 25) * 15 + // Fiber (RDA 25g)
                    (nutrition.potassium / 3500) * 15 + // Potassium
                    (nutrition.folate / 400) * 10 + // Folate
                    10 // Base score for fresh ingredients
                );

                // Goal-specific bonuses
                const goalBonuses = {
                    'immunity': nutrition.vitaminC > 100 ? 10 : 0,
                    'energy': nutrition.iron > 2 ? 10 : 0,
                    'detox': nutrition.fiber > 8 ? 10 : 0,
                    'anti-aging': nutrition.orac > 10000 ? 15 : 0,
                    'weight-loss': nutrition.calories < 150 ? 10 : 0
                };

                return Math.min(100, Math.round(baseScore + (goalBonuses[goal] || 0)));
            }

            displayResults() {
                const n = this.results.nutrition;

                // Nutrition overview
                document.getElementById('totalCalories').textContent = Math.round(n.calories);
                document.getElementById('vitaminC').textContent = `${Math.round(n.vitaminC)}`;
                document.getElementById('oracScore').textContent = Math.round(n.orac).toLocaleString();
                document.getElementById('healthScore').textContent = this.results.healthScore;

                // Detailed nutrition
                document.getElementById('carbs').textContent = `${Math.round(n.carbs)}g`;
                document.getElementById('protein').textContent = `${Math.round(n.protein)}g`;
                document.getElementById('fiber').textContent = `${Math.round(n.fiber)}g`;
                document.getElementById('vitaminA').textContent = `${Math.round(n.vitaminA)} IU`;
                document.getElementById('folate').textContent = `${Math.round(n.folate)} mcg`;
                document.getElementById('potassium').textContent = `${Math.round(n.potassium)} mg`;
                document.getElementById('iron').textContent = `${n.iron.toFixed(1)} mg`;
                document.getElementById('calcium').textContent = `${Math.round(n.calcium)} mg`;

                // Nutrition bars
                document.getElementById('carbsBar').style.width = `${Math.min(100, (n.carbs / 50) * 100)}%`;
                document.getElementById('proteinBar').style.width = `${Math.min(100, (n.protein / 20) * 100)}%`;
                document.getElementById('fiberBar').style.width = `${Math.min(100, (n.fiber / 25) * 100)}%`;

                // Health benefits
                const benefits = this.generateHealthBenefits();
                const benefitsDiv = document.getElementById('healthBenefits');
                benefitsDiv.innerHTML = benefits.map(benefit => `
                    <div class="flex items-start space-x-2">
                        <i class="fas fa-check-circle text-green-500 mt-1 text-sm"></i>
                        <span class="text-sm text-gray-700">${benefit}</span>
                    </div>
                `).join('');

                // Recommendations
                const recommendations = this.generateRecommendations();
                const recDiv = document.getElementById('recommendations');
                recDiv.innerHTML = recommendations.map(rec => `
                    <div class="flex items-start space-x-2">
                        <i class="fas fa-lightbulb text-yellow-500 mt-1 text-sm"></i>
                        <span class="text-sm text-gray-700">${rec}</span>
                    </div>
                `).join('');

                // Recipe ingredients
                const ingredientsDiv = document.getElementById('recipeIngredients');
                ingredientsDiv.innerHTML = this.results.selectedIngredients.map(ingredient => {
                    const amount = Math.round(this.results.servingSize / this.results.selectedIngredients.length);
                    return `<div class="flex justify-between"><span class="capitalize">${ingredient.replace('-', ' ')}</span><span>${amount}g</span></div>`;
                }).join('');

                // Preparation tips
                const tips = this.generatePreparationTips();
                const tipsDiv = document.getElementById('preparationTips');
                tipsDiv.innerHTML = tips.map(tip => `<div>• ${tip}</div>`).join('');

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            generateHealthBenefits() {
                const benefits = [];
                const n = this.results.nutrition;

                if (n.vitaminC > 50) benefits.push('Immune system support');
                if (n.orac > 8000) benefits.push('High antioxidant protection');
                if (n.fiber > 5) benefits.push('Digestive health support');
                if (n.potassium > 300) benefits.push('Heart health support');
                if (n.vitaminA > 1000) benefits.push('Eye health support');
                if (n.folate > 50) benefits.push('Cell regeneration support');

                return benefits.slice(0, 4);
            }

            generateRecommendations() {
                const recs = [];
                const goal = this.results.healthGoal;

                if (goal === 'immunity') recs.push('Consume within 30 minutes for maximum vitamin C');
                if (goal === 'energy') recs.push('Best consumed in the morning');
                if (goal === 'detox') recs.push('Drink plenty of water throughout the day');

                recs.push('Store in refrigerator for up to 24 hours');
                recs.push('Add ice for better taste and nutrition preservation');

                return recs;
            }

            generatePreparationTips() {
                const tips = [
                    'Wash all ingredients thoroughly before juicing',
                    'Cut harder ingredients into smaller pieces',
                    'Add liquid ingredients first, then solids'
                ];

                if (this.results.juiceType === 'cold-pressed') {
                    tips.push('Use slow juicing speed to preserve nutrients');
                }

                if (this.selectedIngredients.has('ginger')) {
                    tips.push('Start with small amounts of ginger - it\'s potent!');
                }

                return tips;
            }

            getRecipeText() {
                return `Super Juice Recipe: ${this.results.selectedIngredients.length} ingredients, ${Math.round(this.results.nutrition.calories)} calories, Health Score: ${this.results.healthScore}/100`;
            }
        }

        const juiceCalc = new SuperJuiceCalculator();

        function calculateSuperJuice() {
            juiceCalc.calculate();
        }

        function shareOnFacebook() {
            if (!juiceCalc.results) return;
            
            const text = `${juiceCalc.getRecipeText()}. Create your super juice at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!juiceCalc.results) return;
            
            const text = `${juiceCalc.getRecipeText()} 🥤 Create yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyRecipe() {
            if (!juiceCalc.results) return;
            
            const ingredients = juiceCalc.results.selectedIngredients.join(', ');
            const text = `Super Juice Recipe:
Ingredients: ${ingredients}
${juiceCalc.getRecipeText()}
ORAC Score: ${Math.round(juiceCalc.results.nutrition.orac).toLocaleString()}
Vitamin C: ${Math.round(juiceCalc.results.nutrition.vitaminC)}mg

Create at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Recipe copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>