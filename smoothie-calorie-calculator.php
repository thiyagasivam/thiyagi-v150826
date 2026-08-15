<?php include 'header.php'; ?>

    <title>Smoothie Calorie Calculator 2026 - Calculate Nutrition & Calories | Thiyagi.com</title>
    <meta name="description" content="Smoothie calorie calculator 2026 - calculate calories, protein, carbs, and fats for your custom smoothie recipes. Plan healthy smoothies with nutrition tracking.">
    <meta name="keywords" content="smoothie calorie calculator 2026, smoothie nutrition calculator, protein smoothie calories, healthy smoothie calculator, smoothie macros calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Smoothie Calorie Calculator 2026 - Calculate Nutrition & Calories">
    <meta property="og:description" content="Calculate calories, protein, carbs, and fats for your custom smoothie recipes with detailed nutrition information.">
    <meta property="og:url" content="https://www.thiyagi.com/smoothie-calorie-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Smoothie Calorie Calculator 2026 - Calculate Nutrition & Calories">
    <meta name="twitter:description" content="Calculate calories and nutrition for your custom smoothie recipes.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .smoothie-card {
        transition: all 0.3s ease;
        border-left: 4px solid #10b981;
    }
    .smoothie-card:hover {
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
    .smoothie-pulse {
        animation: smoothiePulse 2s ease-in-out infinite;
    }
    @keyframes smoothiePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .ingredient-item {
        background: linear-gradient(45deg, #f0fdf4, #ecfdf5);
        border: 1px solid #d1fae5;
    }
    .ingredient-item:hover {
        background: linear-gradient(45deg, #ecfdf5, #d1fae5);
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Smoothie Calorie Calculator 2026",
  "description": "Calculate calories, protein, carbs, and fats for your custom smoothie recipes with detailed nutrition tracking.",
  "url": "https://www.thiyagi.com/smoothie-calorie-calculator",
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
                        <i class="fas fa-blender text-2xl text-green-600 smoothie-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Smoothie Calorie Calculator</h1>
                        <p class="text-green-100">Calculate nutrition and calories for your custom smoothies</p>
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
                <li class="text-gray-900 font-medium">Smoothie Calorie Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Ingredient Selection -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Build Your Smoothie</h2>
                <p class="text-green-100">Add ingredients to calculate your smoothie's nutrition</p>
            </div>
            
            <div class="p-6">
                <!-- Selected Ingredients -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Your Smoothie Ingredients</h3>
                    <div id="selectedIngredients" class="space-y-3">
                        <p class="text-gray-500 text-center py-4">No ingredients added yet. Select from below to start building your smoothie.</p>
                    </div>
                </div>

                <!-- Ingredient Categories -->
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Fruits -->
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-apple-alt text-red-500 mr-2"></i>
                            Fruits
                        </h4>
                        <div class="space-y-2" id="fruitsCategory">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>

                    <!-- Liquids -->
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-tint text-blue-500 mr-2"></i>
                            Liquids
                        </h4>
                        <div class="space-y-2" id="liquidsCategory">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>

                    <!-- Proteins & Add-ins -->
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-dumbbell text-orange-500 mr-2"></i>
                            Proteins & Add-ins
                        </h4>
                        <div class="space-y-2" id="proteinsCategory">
                            <!-- Populated by JavaScript -->
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <button onclick="calculateNutrition()" 
                            class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white font-bold py-4 px-6 rounded-lg hover:from-green-600 hover:to-green-700 focus:ring-4 focus:ring-green-300 transition-all duration-300">
                        <i class="fas fa-calculator mr-2"></i>
                        Calculate Smoothie Nutrition
                    </button>
                </div>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Nutrition Summary -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-green-500 mr-3"></i>
                    Nutrition Summary
                </h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="smoothie-card bg-orange-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-orange-600 font-medium">Calories</p>
                                <p id="totalCalories" class="text-2xl font-bold text-orange-800">0</p>
                            </div>
                            <i class="fas fa-fire text-3xl text-orange-500"></i>
                        </div>
                    </div>
                    <div class="smoothie-card bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-blue-600 font-medium">Protein</p>
                                <p id="totalProtein" class="text-2xl font-bold text-blue-800">0g</p>
                            </div>
                            <i class="fas fa-dumbbell text-3xl text-blue-500"></i>
                        </div>
                    </div>
                    <div class="smoothie-card bg-yellow-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-yellow-600 font-medium">Carbs</p>
                                <p id="totalCarbs" class="text-2xl font-bold text-yellow-800">0g</p>
                            </div>
                            <i class="fas fa-bread-slice text-3xl text-yellow-500"></i>
                        </div>
                    </div>
                    <div class="smoothie-card bg-purple-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-purple-600 font-medium">Fat</p>
                                <p id="totalFat" class="text-2xl font-bold text-purple-800">0g</p>
                            </div>
                            <i class="fas fa-cheese text-3xl text-purple-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-table text-green-500 mr-3"></i>
                    Ingredient Breakdown
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-green-50 border-b-2 border-green-200">
                                <th class="text-left p-3 font-semibold text-gray-700">Ingredient</th>
                                <th class="text-center p-3 font-semibold text-gray-700">Amount</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Calories</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Protein</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Carbs</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Fat</th>
                            </tr>
                        </thead>
                        <tbody id="ingredientBreakdown">
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Health Tips -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-heart text-green-500 mr-3"></i>
                    Smoothie Health Tips
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Balance Your Macros</h4>
                                <p class="text-gray-600 text-sm">Include protein, healthy fats, and complex carbs for sustained energy and satiety.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Watch Portion Sizes</h4>
                                <p class="text-gray-600 text-sm">Even healthy smoothies can be calorie-dense. Monitor portions based on your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Add Fiber</h4>
                                <p class="text-gray-600 text-sm">Include vegetables, chia seeds, or flax seeds to boost fiber content and nutrients.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Limit Added Sugars</h4>
                                <p class="text-gray-600 text-sm">Rely on natural fruit sweetness and avoid excess honey, syrups, or sugar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Smoothie Recipe</h3>
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
        class SmoothieCalculator {
            constructor() {
                this.ingredients = {
                    fruits: {
                        'banana': { name: 'Banana', calories: 105, protein: 1.3, carbs: 27, fat: 0.4, unit: 'medium (118g)' },
                        'apple': { name: 'Apple', calories: 95, protein: 0.5, carbs: 25, fat: 0.3, unit: 'medium (182g)' },
                        'strawberries': { name: 'Strawberries', calories: 49, protein: 1, carbs: 12, fat: 0.5, unit: 'cup (152g)' },
                        'blueberries': { name: 'Blueberries', calories: 84, protein: 1.1, carbs: 21, fat: 0.5, unit: 'cup (148g)' },
                        'mango': { name: 'Mango', calories: 107, protein: 1.5, carbs: 28, fat: 0.5, unit: 'cup (165g)' },
                        'pineapple': { name: 'Pineapple', calories: 82, protein: 0.9, carbs: 22, fat: 0.2, unit: 'cup (165g)' },
                        'orange': { name: 'Orange', calories: 62, protein: 1.2, carbs: 15, fat: 0.2, unit: 'medium (154g)' },
                        'avocado': { name: 'Avocado', calories: 160, protein: 2, carbs: 9, fat: 15, unit: 'half (100g)' }
                    },
                    liquids: {
                        'almond_milk': { name: 'Almond Milk', calories: 40, protein: 1, carbs: 2, fat: 3, unit: 'cup (240ml)' },
                        'coconut_milk': { name: 'Coconut Milk', calories: 76, protein: 0.5, carbs: 2, fat: 8, unit: 'cup (240ml)' },
                        'oat_milk': { name: 'Oat Milk', calories: 80, protein: 3, carbs: 14, fat: 1.5, unit: 'cup (240ml)' },
                        'regular_milk': { name: 'Regular Milk (2%)', calories: 122, protein: 8, carbs: 12, fat: 5, unit: 'cup (240ml)' },
                        'greek_yogurt': { name: 'Greek Yogurt', calories: 100, protein: 17, carbs: 6, fat: 0, unit: 'cup (227g)' },
                        'water': { name: 'Water', calories: 0, protein: 0, carbs: 0, fat: 0, unit: 'cup (240ml)' },
                        'coconut_water': { name: 'Coconut Water', calories: 46, protein: 2, carbs: 9, fat: 0.5, unit: 'cup (240ml)' }
                    },
                    proteins: {
                        'protein_powder': { name: 'Protein Powder', calories: 120, protein: 25, carbs: 3, fat: 1, unit: 'scoop (30g)' },
                        'peanut_butter': { name: 'Peanut Butter', calories: 190, protein: 8, carbs: 8, fat: 16, unit: '2 tbsp (32g)' },
                        'almond_butter': { name: 'Almond Butter', calories: 190, protein: 7, carbs: 7, fat: 18, unit: '2 tbsp (32g)' },
                        'chia_seeds': { name: 'Chia Seeds', calories: 138, protein: 5, carbs: 12, fat: 9, unit: 'tbsp (12g)' },
                        'flax_seeds': { name: 'Flax Seeds', calories: 55, protein: 2, carbs: 3, fat: 4, unit: 'tbsp (10g)' },
                        'hemp_seeds': { name: 'Hemp Seeds', calories: 170, protein: 10, carbs: 3, fat: 14, unit: '3 tbsp (30g)' },
                        'spinach': { name: 'Spinach', calories: 7, protein: 0.9, carbs: 1.1, fat: 0.1, unit: 'cup (30g)' },
                        'kale': { name: 'Kale', calories: 8, protein: 0.7, carbs: 1.4, fat: 0.1, unit: 'cup (16g)' }
                    }
                };
                this.selectedIngredients = [];
                this.results = null;
                this.initializeIngredients();
            }

            initializeIngredients() {
                this.populateCategory('fruitsCategory', this.ingredients.fruits);
                this.populateCategory('liquidsCategory', this.ingredients.liquids);
                this.populateCategory('proteinsCategory', this.ingredients.proteins);
            }

            populateCategory(containerId, ingredients) {
                const container = document.getElementById(containerId);
                for (const [key, ingredient] of Object.entries(ingredients)) {
                    const div = document.createElement('div');
                    div.className = 'ingredient-item p-3 rounded-lg cursor-pointer transition-colors';
                    div.innerHTML = `
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-medium text-gray-800">${ingredient.name}</p>
                                <p class="text-xs text-gray-600">${ingredient.calories} cal per ${ingredient.unit}</p>
                            </div>
                            <button onclick="smoothieCalc.addIngredient('${key}')" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">
                                Add
                            </button>
                        </div>
                    `;
                    container.appendChild(div);
                }
            }

            addIngredient(key) {
                // Find ingredient in all categories
                let ingredient = null;
                let category = null;
                
                for (const [cat, items] of Object.entries(this.ingredients)) {
                    if (items[key]) {
                        ingredient = items[key];
                        category = cat;
                        break;
                    }
                }

                if (ingredient) {
                    const existingIndex = this.selectedIngredients.findIndex(item => item.key === key);
                    if (existingIndex >= 0) {
                        this.selectedIngredients[existingIndex].quantity += 1;
                    } else {
                        this.selectedIngredients.push({
                            key: key,
                            category: category,
                            ...ingredient,
                            quantity: 1
                        });
                    }
                    this.updateSelectedIngredients();
                }
            }

            removeIngredient(key) {
                this.selectedIngredients = this.selectedIngredients.filter(item => item.key !== key);
                this.updateSelectedIngredients();
            }

            updateQuantity(key, quantity) {
                const ingredient = this.selectedIngredients.find(item => item.key === key);
                if (ingredient) {
                    ingredient.quantity = Math.max(0, quantity);
                    if (ingredient.quantity === 0) {
                        this.removeIngredient(key);
                    } else {
                        this.updateSelectedIngredients();
                    }
                }
            }

            updateSelectedIngredients() {
                const container = document.getElementById('selectedIngredients');
                if (this.selectedIngredients.length === 0) {
                    container.innerHTML = '<p class="text-gray-500 text-center py-4">No ingredients added yet. Select from below to start building your smoothie.</p>';
                    return;
                }

                container.innerHTML = this.selectedIngredients.map(ingredient => `
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 flex items-center justify-between">
                        <div class="flex-1">
                            <h4 class="font-medium text-gray-800">${ingredient.name}</h4>
                            <p class="text-sm text-gray-600">${ingredient.unit} each</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex items-center space-x-2">
                                <button onclick="smoothieCalc.updateQuantity('${ingredient.key}', ${ingredient.quantity - 1})" 
                                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 w-8 h-8 rounded-full flex items-center justify-center">-</button>
                                <span class="w-8 text-center font-medium">${ingredient.quantity}</span>
                                <button onclick="smoothieCalc.updateQuantity('${ingredient.key}', ${ingredient.quantity + 1})" 
                                        class="bg-gray-200 hover:bg-gray-300 text-gray-700 w-8 h-8 rounded-full flex items-center justify-center">+</button>
                            </div>
                            <button onclick="smoothieCalc.removeIngredient('${ingredient.key}')" 
                                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Remove</button>
                        </div>
                    </div>
                `).join('');
            }

            calculate() {
                if (this.selectedIngredients.length === 0) {
                    alert('Please add some ingredients to your smoothie first!');
                    return;
                }

                let totalCalories = 0;
                let totalProtein = 0;
                let totalCarbs = 0;
                let totalFat = 0;

                const breakdown = this.selectedIngredients.map(ingredient => {
                    const calories = ingredient.calories * ingredient.quantity;
                    const protein = ingredient.protein * ingredient.quantity;
                    const carbs = ingredient.carbs * ingredient.quantity;
                    const fat = ingredient.fat * ingredient.quantity;

                    totalCalories += calories;
                    totalProtein += protein;
                    totalCarbs += carbs;
                    totalFat += fat;

                    return {
                        name: ingredient.name,
                        quantity: ingredient.quantity,
                        unit: ingredient.unit,
                        calories: Math.round(calories),
                        protein: Math.round(protein * 10) / 10,
                        carbs: Math.round(carbs * 10) / 10,
                        fat: Math.round(fat * 10) / 10
                    };
                });

                this.results = {
                    totalCalories: Math.round(totalCalories),
                    totalProtein: Math.round(totalProtein * 10) / 10,
                    totalCarbs: Math.round(totalCarbs * 10) / 10,
                    totalFat: Math.round(totalFat * 10) / 10,
                    breakdown: breakdown
                };

                this.displayResults();
            }

            displayResults() {
                document.getElementById('totalCalories').textContent = this.results.totalCalories;
                document.getElementById('totalProtein').textContent = this.results.totalProtein + 'g';
                document.getElementById('totalCarbs').textContent = this.results.totalCarbs + 'g';
                document.getElementById('totalFat').textContent = this.results.totalFat + 'g';

                const tbody = document.getElementById('ingredientBreakdown');
                tbody.innerHTML = this.results.breakdown.map(item => `
                    <tr class="border-b border-gray-200 hover:bg-green-50">
                        <td class="p-3 font-medium text-gray-800">${item.name}</td>
                        <td class="p-3 text-center text-gray-600">${item.quantity} × ${item.unit}</td>
                        <td class="p-3 text-right text-gray-600">${item.calories}</td>
                        <td class="p-3 text-right text-gray-600">${item.protein}g</td>
                        <td class="p-3 text-right text-gray-600">${item.carbs}g</td>
                        <td class="p-3 text-right text-gray-600">${item.fat}g</td>
                    </tr>
                `).join('');

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            getRecipeText() {
                if (!this.results) return '';
                
                const ingredientsList = this.selectedIngredients.map(ingredient => 
                    `${ingredient.quantity} × ${ingredient.name} (${ingredient.unit})`
                ).join('\n');

                return `My Smoothie Recipe:
${ingredientsList}

Nutrition:
Calories: ${this.results.totalCalories}
Protein: ${this.results.totalProtein}g
Carbs: ${this.results.totalCarbs}g
Fat: ${this.results.totalFat}g`;
            }
        }

        const smoothieCalc = new SmoothieCalculator();

        function calculateNutrition() {
            smoothieCalc.calculate();
        }

        function shareOnFacebook() {
            if (!smoothieCalc.results) return;
            
            const text = `Check out my healthy smoothie recipe! ${smoothieCalc.results.totalCalories} calories, ${smoothieCalc.results.totalProtein}g protein. Create your own at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!smoothieCalc.results) return;
            
            const text = `My healthy smoothie: ${smoothieCalc.results.totalCalories} cal, ${smoothieCalc.results.totalProtein}g protein 🥤 Create yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyRecipe() {
            if (!smoothieCalc.results) return;
            
            const text = smoothieCalc.getRecipeText() + `\n\nCalculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Recipe copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>