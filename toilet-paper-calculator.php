<?php include 'header.php';?>

<?php
// Function to calculate toilet paper needs
function calculateToiletPaper($people, $days, $sheetsPerDay) {
    $totalSheets = $people * $days * $sheetsPerDay;
    $standardRolls = ceil($totalSheets / 150); // Standard roll has ~150 sheets
    $megaRolls = ceil($totalSheets / 300);     // Mega roll has ~300 sheets
    $doubleRolls = ceil($totalSheets / 200);   // Double roll has ~200 sheets
    
    return [
        'standard' => $standardRolls,
        'mega' => $megaRolls,
        'double' => $doubleRolls,
        'total_sheets' => $totalSheets
    ];
}

// Handle form submission
$results = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $people = filter_input(INPUT_POST, 'people', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $days = filter_input(INPUT_POST, 'days', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $sheetsPerDay = filter_input(INPUT_POST, 'sheets', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 100]]);
    
    if ($people && $days && $sheetsPerDay) {
        $results = calculateToiletPaper($people, $days, $sheetsPerDay);
    }
}
?>

    <title>Toilet Paper Calculator - Estimate Your Household Needs</title>
    <meta name="description" content="Calculate how much toilet paper your household needs for any period. Estimate standard, mega and double rolls required.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .calculator-box {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .result-card {
            transition: all 0.3s ease;
        }
        .result-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .input-field {
            transition: border-color 0.3s ease;
        }
        .input-field:focus {
            border-color: #4299e1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Toilet Paper Calculator</h1>
            <p class="text-lg text-gray-600">Estimate how many rolls your household needs for any period</p>
        </header>

        <div class="bg-white rounded-xl calculator-box p-6 mb-8">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="people" class="block text-sm font-medium text-gray-700 mb-1">Number of People</label>
                        <input type="number" id="people" name="people" min="1" max="50" 
                               class="w-full input-field px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" 
                               placeholder="e.g. 4" required value="<?= $_POST['people'] ?? '' ?>">
                    </div>
                    <div>
                        <label for="days" class="block text-sm font-medium text-gray-700 mb-1">Number of Days</label>
                        <input type="number" id="days" name="days" min="1" max="3650" 
                               class="w-full input-field px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" 
                               placeholder="e.g. 30" required value="<?= $_POST['days'] ?? '' ?>">
                    </div>
                    <div>
                        <label for="sheets" class="block text-sm font-medium text-gray-700 mb-1">Sheets per Person per Day</label>
                        <input type="number" id="sheets" name="sheets" min="1" max="100" 
                               class="w-full input-field px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" 
                               placeholder="e.g. 20" required value="<?= $_POST['sheets'] ?? '20' ?>">
                        <p class="text-xs text-gray-500 mt-1">Average is 20 sheets per person per day</p>
                    </div>
                </div>
                <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    Calculate Toilet Paper Needs
                </button>
            </form>
        </div>

        <?php if ($results): ?>
        <div class="results-section">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Results</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-blue-50 result-card rounded-lg p-6 border border-blue-100">
                    <h3 class="text-lg font-medium text-blue-800 mb-2">Standard Rolls</h3>
                    <p class="text-3xl font-bold text-blue-600"><?= $results['standard'] ?></p>
                    <p class="text-sm text-gray-600 mt-1">~150 sheets per roll</p>
                </div>
                <div class="bg-green-50 result-card rounded-lg p-6 border border-green-100">
                    <h3 class="text-lg font-medium text-green-800 mb-2">Double Rolls</h3>
                    <p class="text-3xl font-bold text-green-600"><?= $results['double'] ?></p>
                    <p class="text-sm text-gray-600 mt-1">~200 sheets per roll</p>
                </div>
                <div class="bg-purple-50 result-card rounded-lg p-6 border border-purple-100">
                    <h3 class="text-lg font-medium text-purple-800 mb-2">Mega Rolls</h3>
                    <p class="text-3xl font-bold text-purple-600"><?= $results['mega'] ?></p>
                    <p class="text-sm text-gray-600 mt-1">~300 sheets per roll</p>
                </div>
            </div>
            <div class="bg-gray-50 rounded-lg p-4">
                <p class="text-gray-700">
                    <span class="font-semibold">Total sheets needed:</span> 
                    <?= number_format($results['total_sheets']) ?> sheets
                </p>
            </div>
        </div>
        <?php endif; ?>

        <div class="mt-12 bg-white rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-3">How to Use This Calculator</h2>
            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                <li>Enter the number of people in your household</li>
                <li>Enter the number of days you want to plan for</li>
                <li>Adjust sheets per person per day (default is 20)</li>
                <li>Click "Calculate" to see your toilet paper needs</li>
            </ol>
            
            <h2 class="text-xl font-semibold text-gray-800 mt-6 mb-3">Toilet Paper Usage Tips</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>The average person uses about 20 sheets per day</li>
                <li>Children typically use less, while some adults use more</li>
                <li>Consider adding 10-20% extra for guests or emergencies</li>
                <li>Different brands have different sheet counts per roll</li>
            </ul>
        </div>
    </div>

    
</body>
<?php include 'footer.php';?>
</html>
