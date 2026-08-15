<?php include 'header.php';?>


<?php
// Function to calculate BMI
function calculateBMI($weight, $height, $unit) {
    if ($unit == 'imperial') {
        // Convert imperial to metric
        $weight_kg = $weight * 0.453592;
        $height_m = $height * 0.0254;
    } else {
        // Metric units (kg and cm)
        $weight_kg = $weight;
        $height_m = $height / 100;
    }

    if ($height_m <= 0) return 0;
    return round($weight_kg / ($height_m * $height_m), 1);
}

// Function to get BMI category
function getBMICategory($bmi) {
    if ($bmi <= 0) return 'Invalid';
    if ($bmi < 18.5) return 'Underweight';
    if ($bmi < 25) return 'Normal weight';
    if ($bmi < 30) return 'Overweight';
    return 'Obese';
}

// Initialize result variable
$result = null;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['weight']) && isset($_POST['height'])) {
    $weight = floatval($_POST['weight'] ?? 0);
    $height = floatval($_POST['height'] ?? 0);
    $unit = $_POST['unit'] ?? 'metric';
    
    // Validate inputs
    if ($weight > 0 && $height > 0 && $weight <= 1000 && $height <= 300) {
        $bmi = calculateBMI($weight, $height, $unit);
        $category = getBMICategory($bmi);
        
        $result = [
            'bmi' => $bmi,
            'category' => $category,
            'weight' => $weight,
            'height' => $height,
            'unit' => $unit
        ];
    }
}
?>

    <title>Free BMI Calculator 2026 - Accurate Weight Status Tool</title>
    <meta name="description" content="Calculate your Body Mass Index (BMI) for 2026 instantly! Free tool with WHO classification. Checks if you're underweight, normal, or obese. No sign-up needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    .bmi-meter {
        background: linear-gradient(90deg, 
            #3b82f6 0%, 
            #3b82f6 18.5%, 
            #10b981 18.5%, 
            #10b981 25%, 
            #f59e0b 25%, 
            #f59e0b 30%, 
            #ef4444 30%, 
            #ef4444 100%);
    }
    .bmi-pointer {
        transition: left 0.3s ease;
    }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">BMI Calculator</h1>
            <p class="text-gray-600">Calculate your Body Mass Index and understand what it means for your health</p>
        </header>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <form method="POST" class="space-y-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <label for="unit" class="block text-sm font-medium text-gray-700 mb-1">Measurement System</label>
                            <select id="unit" name="unit" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                <option value="metric" <?php echo (!isset($result) || (isset($result) && $result['unit'] === 'metric')) ? 'selected' : ''; ?>>Metric (kg & cm)</option>
                                <option value="imperial" <?php echo (isset($result) && $result['unit'] === 'imperial') ? 'selected' : ''; ?>>Imperial (lbs & inches)</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex-1">
                            <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">
                                <?php echo (isset($result) && $result['unit'] === 'imperial') ? 'Weight (lbs)' : 'Weight (kg)'; ?>
                            </label>
                            <input type="number" step="0.1" id="weight" name="weight" value="<?php echo isset($result) ? htmlspecialchars($result['weight']) : ''; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                        </div>

                        <div class="flex-1">
                            <label for="height" class="block text-sm font-medium text-gray-700 mb-1">
                                <?php echo (isset($result) && $result['unit'] === 'imperial') ? 'Height (inches)' : 'Height (cm)'; ?>
                            </label>
                            <input type="number" step="0.1" id="height" name="height" value="<?php echo isset($result) ? htmlspecialchars($result['height']) : ''; ?>" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                        Calculate BMI
                    </button>
                </form>

                <?php if (isset($result)): ?>
                    <div class="mt-8 space-y-6">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold text-gray-800 mb-2">Your Results</h2>
                            <div class="text-5xl font-bold text-blue-600"><?php echo $result['bmi']; ?></div>
                            <div class="text-lg font-medium mt-2 text-<?php 
                                echo $result['category'] === 'Underweight' ? 'blue' : 
                                    ($result['category'] === 'Normal weight' ? 'green' : 
                                    ($result['category'] === 'Overweight' ? 'yellow' : 'red')); ?>-600">
                                <?php echo $result['category']; ?>
                            </div>
                        </div>

                        <div class="relative h-8 bg-gray-200 rounded-full bmi-meter mt-6">
                            <div class="absolute top-0 -mt-1 bmi-pointer w-4 h-4 border-4 border-gray-800 rounded-full bg-white" 
                                 style="left: calc(<?php echo min(max(($result['bmi'] / 40 * 100), 0), 100); ?>% - 8px);"></div>
                        </div>

                        <div class="flex justify-between text-xs text-gray-600 mt-1">
                            <span>Underweight (18.5)</span>
                            <span>Normal (18.5-24.9)</span>
                            <span>Overweight (25-29.9)</span>
                            <span>Obese (30+)</span>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="font-medium text-gray-800 mb-2">What your BMI means:</h3>
                            <p class="text-gray-600 text-sm">
                                <?php
                                $descriptions = [
                                    'Underweight' => 'Your BMI suggests you may be underweight. Consider consulting with a healthcare provider about healthy weight gain strategies.',
                                    'Normal weight' => 'Your BMI is in the healthy range. Maintain your weight with balanced nutrition and regular physical activity.',
                                    'Overweight' => 'Your BMI suggests you may be overweight. Consider lifestyle changes like improved diet and increased exercise.',
                                    'Obese' => 'Your BMI suggests obesity. Consult with a healthcare provider about weight management strategies for better health.',
                                    'Invalid' => 'Please enter valid weight and height values.'
                                ];
                                echo $descriptions[$result['category']];
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">About BMI</h2>
                <div class="prose text-gray-600">
                    <p>Body Mass Index (BMI) is a numerical value calculated from your weight and height. It provides a simple way to categorize individuals as underweight, normal weight, overweight, or obese.</p>
                    <p class="mt-2">While BMI is a useful screening tool, it doesn't directly measure body fat and may not account for factors like muscle mass. Always consult with a healthcare professional for a comprehensive health assessment.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>

<?php include 'footer.php';?>
</html>
