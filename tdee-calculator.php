<?php include 'header.php'; ?>

    <title>TDEE Calculator 2026 - Total Daily Energy Expenditure Calculator | Thiyagi.com</title>
    <meta name="description" content="TDEE calculator 2026 - calculate your Total Daily Energy Expenditure based on age, gender, weight, height, and activity level for weight loss and fitness goals.">
    <meta name="keywords" content="tdee calculator 2026, total daily energy expenditure, bmr calculator, calorie calculator, weight loss calculator, fitness calculator">
    <meta name="author" content="Thiyagi">
        
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="TDEE Calculator 2026 - Total Daily Energy Expenditure Calculator">
    <meta property="og:description" content="Calculate your Total Daily Energy Expenditure and daily calorie needs for weight loss, maintenance, or weight gain.">
    <meta property="og:url" content="https://www.thiyagi.com/tdee-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TDEE Calculator 2026 - Total Daily Energy Expenditure Calculator">
    <meta name="twitter:description" content="Calculate your daily calorie needs based on your metabolism and activity level.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    
    <!-- Tailwind CSS -->

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
    }
    .tdee-card {
        transition: all 0.3s ease;
        border-left: 4px solid #ef4444;
    }
    .tdee-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #dc2626;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .fire-pulse {
        animation: firePulse 2s ease-in-out infinite;
    }
    @keyframes firePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .activity-option {
        background: linear-gradient(45deg, #fef2f2, #fee2e2);
        border: 1px solid #fecaca;
    }
    .activity-option:hover {
        background: linear-gradient(45deg, #fee2e2, #fecaca);
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "TDEE Calculator 2026",
  "description": "Calculate your Total Daily Energy Expenditure based on age, gender, weight, height, and activity level for fitness goals.",
  "url": "https://www.thiyagi.com/tdee-calculator",
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
                        <i class="fas fa-fire text-2xl text-red-600 fire-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">TDEE Calculator</h1>
                        <p class="text-red-100">Calculate your Total Daily Energy Expenditure</p>
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
                <li class="text-gray-900 font-medium">TDEE Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">TDEE & BMR Calculator</h2>
                <p class="text-red-100">Enter your details to calculate daily calorie needs</p>
            </div>
            
            <div class="p-6">
                <form id="tdeeForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="gender" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-venus-mars text-red-500 mr-2"></i>
                                    Gender
                                </label>
                                <select id="gender" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="age" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-birthday-cake text-red-500 mr-2"></i>
                                    Age (years)
                                </label>
                                <input type="number" id="age" min="15" max="100" value="30" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="weight" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-weight text-red-500 mr-2"></i>
                                    Weight (kg)
                                </label>
                                <input type="number" id="weight" min="30" max="300" step="0.1" value="70" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="height" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-ruler-vertical text-red-500 mr-2"></i>
                                    Height (cm)
                                </label>
                                <input type="number" id="height" min="100" max="250" value="170" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="bodyFat" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-percentage text-red-500 mr-2"></i>
                                    Body Fat % (optional)
                                </label>
                                <input type="number" id="bodyFat" min="5" max="50" step="0.1" placeholder="Leave blank if unknown" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label class="block text-sm font-semibold text-gray-700 mb-3">
                                    <i class="fas fa-calculator text-red-500 mr-2"></i>
                                    BMR Formula
                                </label>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="radio" name="bmrFormula" value="mifflin" checked 
                                               class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300">
                                        <span class="ml-2 text-sm text-gray-700">Mifflin-St Jeor (Most Accurate)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="bmrFormula" value="harris" 
                                               class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300">
                                        <span class="ml-2 text-sm text-gray-700">Harris-Benedict (Traditional)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="bmrFormula" value="katch" 
                                               class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300">
                                        <span class="ml-2 text-sm text-gray-700">Katch-McArdle (Body Fat Based)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Activity Level -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-running text-red-500 mr-2"></i>
                            Activity Level
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="activity-option p-4 rounded-lg cursor-pointer" onclick="selectActivity(1.2)">
                                <input type="radio" name="activityLevel" value="1.2" id="sedentary" class="hidden">
                                <div class="text-center">
                                    <i class="fas fa-chair text-2xl text-red-500 mb-2"></i>
                                    <h4 class="font-semibold text-gray-800">Sedentary</h4>
                                    <p class="text-xs text-gray-600">Little/no exercise</p>
                                    <p class="text-sm text-red-600 font-medium">BMR × 1.2</p>
                                </div>
                            </div>
                            <div class="activity-option p-4 rounded-lg cursor-pointer" onclick="selectActivity(1.375)">
                                <input type="radio" name="activityLevel" value="1.375" id="light" class="hidden">
                                <div class="text-center">
                                    <i class="fas fa-walking text-2xl text-red-500 mb-2"></i>
                                    <h4 class="font-semibold text-gray-800">Light Activity</h4>
                                    <p class="text-xs text-gray-600">1-3 days/week</p>
                                    <p class="text-sm text-red-600 font-medium">BMR × 1.375</p>
                                </div>
                            </div>
                            <div class="activity-option p-4 rounded-lg cursor-pointer" onclick="selectActivity(1.55)">
                                <input type="radio" name="activityLevel" value="1.55" id="moderate" class="hidden">
                                <div class="text-center">
                                    <i class="fas fa-bicycle text-2xl text-red-500 mb-2"></i>
                                    <h4 class="font-semibold text-gray-800">Moderate Activity</h4>
                                    <p class="text-xs text-gray-600">3-5 days/week</p>
                                    <p class="text-sm text-red-600 font-medium">BMR × 1.55</p>
                                </div>
                            </div>
                            <div class="activity-option p-4 rounded-lg cursor-pointer" onclick="selectActivity(1.725)">
                                <input type="radio" name="activityLevel" value="1.725" id="active" class="hidden">
                                <div class="text-center">
                                    <i class="fas fa-running text-2xl text-red-500 mb-2"></i>
                                    <h4 class="font-semibold text-gray-800">Very Active</h4>
                                    <p class="text-xs text-gray-600">6-7 days/week</p>
                                    <p class="text-sm text-red-600 font-medium">BMR × 1.725</p>
                                </div>
                            </div>
                            <div class="activity-option p-4 rounded-lg cursor-pointer" onclick="selectActivity(1.9)">
                                <input type="radio" name="activityLevel" value="1.9" id="extreme" class="hidden">
                                <div class="text-center">
                                    <i class="fas fa-dumbbell text-2xl text-red-500 mb-2"></i>
                                    <h4 class="font-semibold text-gray-800">Super Active</h4>
                                    <p class="text-xs text-gray-600">2x/day or intense</p>
                                    <p class="text-sm text-red-600 font-medium">BMR × 1.9</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateTDEE()" 
                                class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white font-bold py-4 px-6 rounded-lg hover:from-red-600 hover:to-red-700 focus:ring-4 focus:ring-red-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate TDEE & BMR
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- BMR and TDEE Results -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-fire text-red-500 mr-3"></i>
                    Your Metabolic Results
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="tdee-card bg-orange-50 p-6 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-orange-800 mb-2">BMR (Basal Metabolic Rate)</h4>
                                <p id="bmrResult" class="text-3xl font-bold text-orange-900">0</p>
                                <p class="text-sm text-orange-700 mt-2">Calories burned at rest</p>
                            </div>
                            <i class="fas fa-bed text-4xl text-orange-500"></i>
                        </div>
                    </div>
                    <div class="tdee-card bg-red-50 p-6 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-red-800 mb-2">TDEE (Total Daily Energy)</h4>
                                <p id="tdeeResult" class="text-3xl font-bold text-red-900">0</p>
                                <p class="text-sm text-red-700 mt-2">Total daily calories needed</p>
                            </div>
                            <i class="fas fa-fire text-4xl text-red-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calorie Goals -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-target text-red-500 mr-3"></i>
                    Calorie Goals for Different Objectives
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="tdee-card bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-blue-800 mb-2">Weight Loss</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Mild (0.25 kg/week):</span>
                                <span id="mildDeficit" class="font-medium text-blue-800">0 cal</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Moderate (0.5 kg/week):</span>
                                <span id="moderateDeficit" class="font-medium text-blue-800">0 cal</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Aggressive (0.75 kg/week):</span>
                                <span id="aggressiveDeficit" class="font-medium text-blue-800">0 cal</span>
                            </div>
                        </div>
                    </div>
                    <div class="tdee-card bg-green-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-green-800 mb-2">Weight Maintenance</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Maintain weight:</span>
                                <span id="maintenance" class="font-medium text-green-800">0 cal</span>
                            </div>
                            <p class="text-xs text-green-600 mt-2">Eat this amount to maintain current weight</p>
                        </div>
                    </div>
                    <div class="tdee-card bg-purple-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-purple-800 mb-2">Weight Gain</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Mild (0.25 kg/week):</span>
                                <span id="mildSurplus" class="font-medium text-purple-800">0 cal</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Moderate (0.5 kg/week):</span>
                                <span id="moderateSurplus" class="font-medium text-purple-800">0 cal</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-purple-600">Fast (0.75 kg/week):</span>
                                <span id="aggressiveSurplus" class="font-medium text-purple-800">0 cal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body Composition -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-user text-red-500 mr-3"></i>
                    Body Composition Analysis
                </h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="tdee-card bg-indigo-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-indigo-800 mb-2">BMI</h4>
                        <p id="bmiResult" class="text-2xl font-bold text-indigo-900">0</p>
                        <p id="bmiCategory" class="text-sm text-indigo-700">-</p>
                    </div>
                    <div class="tdee-card bg-teal-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-teal-800 mb-2">Ideal Weight Range</h4>
                        <p id="idealWeight" class="text-lg font-bold text-teal-900">0 - 0 kg</p>
                    </div>
                    <div class="tdee-card bg-yellow-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-yellow-800 mb-2">Body Fat</h4>
                        <p id="bodyFatResult" class="text-lg font-bold text-yellow-900">-</p>
                        <p id="bodyFatCategory" class="text-sm text-yellow-700">-</p>
                    </div>
                    <div class="tdee-card bg-pink-50 p-4 rounded-lg">
                        <h4 class="font-semibold text-pink-800 mb-2">Lean Body Mass</h4>
                        <p id="leanBodyMass" class="text-lg font-bold text-pink-900">- kg</p>
                    </div>
                </div>
            </div>

            <!-- Health Tips -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-heart text-red-500 mr-3"></i>
                    Health & Fitness Tips
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Track Your Progress</h4>
                                <p class="text-gray-600 text-sm">Monitor weight, measurements, and energy levels to adjust calories as needed.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Quality Over Quantity</h4>
                                <p class="text-gray-600 text-sm">Focus on nutrient-dense foods rather than just calorie counting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Stay Hydrated</h4>
                                <p class="text-gray-600 text-sm">Proper hydration supports metabolism and can reduce appetite.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Regular Exercise</h4>
                                <p class="text-gray-600 text-sm">Combine cardio and strength training for optimal results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your TDEE Results</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyResults()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Results
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class TDEECalculator {
            constructor() {
                this.results = null;
                this.selectedActivity = 1.2;
                this.selectActivity(1.2); // Default to sedentary
            }

            selectActivity(multiplier) {
                this.selectedActivity = multiplier;
                // Update UI to show selected activity
                document.querySelectorAll('.activity-option').forEach(option => {
                    option.classList.remove('ring-2', 'ring-red-500', 'bg-red-100');
                });
                event.currentTarget.classList.add('ring-2', 'ring-red-500', 'bg-red-100');
                document.querySelector(`input[value="${multiplier}"]`).checked = true;
            }

            calculateBMR(weight, height, age, gender, formula, bodyFat = null) {
                let bmr;
                
                switch (formula) {
                    case 'mifflin':
                        if (gender === 'male') {
                            bmr = (10 * weight) + (6.25 * height) - (5 * age) + 5;
                        } else {
                            bmr = (10 * weight) + (6.25 * height) - (5 * age) - 161;
                        }
                        break;
                    
                    case 'harris':
                        if (gender === 'male') {
                            bmr = 88.362 + (13.397 * weight) + (4.799 * height) - (5.677 * age);
                        } else {
                            bmr = 447.593 + (9.247 * weight) + (3.098 * height) - (4.330 * age);
                        }
                        break;
                    
                    case 'katch':
                        if (bodyFat && bodyFat > 0) {
                            const leanBodyMass = weight * (1 - bodyFat / 100);
                            bmr = 370 + (21.6 * leanBodyMass);
                        } else {
                            // Fallback to Mifflin if no body fat provided
                            return this.calculateBMR(weight, height, age, gender, 'mifflin');
                        }
                        break;
                    
                    default:
                        bmr = this.calculateBMR(weight, height, age, gender, 'mifflin');
                }
                
                return Math.round(bmr);
            }

            calculateBMI(weight, height) {
                const heightInMeters = height / 100;
                return weight / (heightInMeters * heightInMeters);
            }

            getBMICategory(bmi) {
                if (bmi < 18.5) return 'Underweight';
                if (bmi < 25) return 'Normal weight';
                if (bmi < 30) return 'Overweight';
                return 'Obese';
            }

            getIdealWeightRange(height, gender) {
                const heightInMeters = height / 100;
                let minWeight, maxWeight;
                
                if (gender === 'male') {
                    minWeight = 22 * heightInMeters * heightInMeters;
                    maxWeight = 25 * heightInMeters * heightInMeters;
                } else {
                    minWeight = 20 * heightInMeters * heightInMeters;
                    maxWeight = 24 * heightInMeters * heightInMeters;
                }
                
                return {
                    min: Math.round(minWeight * 10) / 10,
                    max: Math.round(maxWeight * 10) / 10
                };
            }

            getBodyFatCategory(bodyFat, gender) {
                if (!bodyFat || bodyFat <= 0) return '-';
                
                const ranges = gender === 'male' 
                    ? { essential: 5, athlete: 13, fitness: 17, acceptable: 25 }
                    : { essential: 12, athlete: 20, fitness: 24, acceptable: 32 };
                
                if (bodyFat <= ranges.essential) return 'Essential';
                if (bodyFat <= ranges.athlete) return 'Athlete';
                if (bodyFat <= ranges.fitness) return 'Fitness';
                if (bodyFat <= ranges.acceptable) return 'Acceptable';
                return 'Obese';
            }

            calculate() {
                const gender = document.getElementById('gender').value;
                const age = parseInt(document.getElementById('age').value);
                const weight = parseFloat(document.getElementById('weight').value);
                const height = parseInt(document.getElementById('height').value);
                const bodyFat = parseFloat(document.getElementById('bodyFat').value) || null;
                const formula = document.querySelector('input[name="bmrFormula"]:checked').value;
                const activityLevel = this.selectedActivity;

                if (!age || !weight || !height) {
                    alert('Please fill in all required fields!');
                    return;
                }

                if (age < 15 || age > 100) {
                    alert('Age should be between 15 and 100 years');
                    return;
                }

                const bmr = this.calculateBMR(weight, height, age, gender, formula, bodyFat);
                const tdee = Math.round(bmr * activityLevel);
                const bmi = Math.round(this.calculateBMI(weight, height) * 10) / 10;
                const idealWeight = this.getIdealWeightRange(height, gender);
                const leanBodyMass = bodyFat ? Math.round((weight * (1 - bodyFat / 100)) * 10) / 10 : null;

                this.results = {
                    bmr,
                    tdee,
                    bmi,
                    bmiCategory: this.getBMICategory(bmi),
                    idealWeight,
                    bodyFat,
                    bodyFatCategory: this.getBodyFatCategory(bodyFat, gender),
                    leanBodyMass,
                    calorieGoals: {
                        mildDeficit: tdee - 250,
                        moderateDeficit: tdee - 500,
                        aggressiveDeficit: tdee - 750,
                        maintenance: tdee,
                        mildSurplus: tdee + 250,
                        moderateSurplus: tdee + 500,
                        aggressiveSurplus: tdee + 750
                    }
                };

                this.displayResults();
            }

            displayResults() {
                // BMR and TDEE
                document.getElementById('bmrResult').textContent = this.results.bmr + ' cal/day';
                document.getElementById('tdeeResult').textContent = this.results.tdee + ' cal/day';

                // Calorie goals
                document.getElementById('mildDeficit').textContent = this.results.calorieGoals.mildDeficit + ' cal';
                document.getElementById('moderateDeficit').textContent = this.results.calorieGoals.moderateDeficit + ' cal';
                document.getElementById('aggressiveDeficit').textContent = this.results.calorieGoals.aggressiveDeficit + ' cal';
                document.getElementById('maintenance').textContent = this.results.calorieGoals.maintenance + ' cal';
                document.getElementById('mildSurplus').textContent = this.results.calorieGoals.mildSurplus + ' cal';
                document.getElementById('moderateSurplus').textContent = this.results.calorieGoals.moderateSurplus + ' cal';
                document.getElementById('aggressiveSurplus').textContent = this.results.calorieGoals.aggressiveSurplus + ' cal';

                // Body composition
                document.getElementById('bmiResult').textContent = this.results.bmi;
                document.getElementById('bmiCategory').textContent = this.results.bmiCategory;
                document.getElementById('idealWeight').textContent = `${this.results.idealWeight.min} - ${this.results.idealWeight.max} kg`;
                document.getElementById('bodyFatResult').textContent = this.results.bodyFat ? this.results.bodyFat + '%' : 'Not provided';
                document.getElementById('bodyFatCategory').textContent = this.results.bodyFatCategory;
                document.getElementById('leanBodyMass').textContent = this.results.leanBodyMass ? this.results.leanBodyMass + ' kg' : 'Not calculated';

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            getShareText() {
                return `My TDEE: ${this.results.tdee} cal/day, BMR: ${this.results.bmr} cal/day, BMI: ${this.results.bmi} (${this.results.bmiCategory})`;
            }
        }

        const tdeeCalc = new TDEECalculator();

        function selectActivity(multiplier) {
            tdeeCalc.selectActivity(multiplier);
        }

        function calculateTDEE() {
            tdeeCalc.calculate();
        }

        function shareOnFacebook() {
            if (!tdeeCalc.results) return;
            
            const text = `${tdeeCalc.getShareText()}. Calculate your TDEE at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!tdeeCalc.results) return;
            
            const text = `${tdeeCalc.getShareText()} 🔥 Calculate yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyResults() {
            if (!tdeeCalc.results) return;
            
            const text = `TDEE Calculator Results:
BMR: ${tdeeCalc.results.bmr} cal/day
TDEE: ${tdeeCalc.results.tdee} cal/day
BMI: ${tdeeCalc.results.bmi} (${tdeeCalc.results.bmiCategory})

Weight Loss: ${tdeeCalc.results.calorieGoals.moderateDeficit} cal/day
Maintenance: ${tdeeCalc.results.calorieGoals.maintenance} cal/day
Weight Gain: ${tdeeCalc.results.calorieGoals.moderateSurplus} cal/day

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Results copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>