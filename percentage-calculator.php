<?php include 'header.php';?>


<?php
// Initialize variables
$result = '';
$error = '';
$calculation_type = '';
$history = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $calculation_type = $_POST['calculation_type'] ?? '';
    $value1 = filter_input(INPUT_POST, 'value1', FILTER_VALIDATE_FLOAT);
    $value2 = filter_input(INPUT_POST, 'value2', FILTER_VALIDATE_FLOAT);
    
    // Validate inputs
    if ($value1 === false || $value2 === false) {
        $error = "Please enter valid numbers";
    } else {
        switch ($calculation_type) {
            case 'what_is_x_percent_of_y':
                $result = ($value1 / 100) * $value2;
                $history[] = "What is $value1% of $value2? = $result";
                break;
            case 'x_is_what_percent_of_y':
                $result = ($value1 / $value2) * 100;
                $history[] = "$value1 is what percent of $value2? = $result%";
                break;
            case 'percentage_increase':
                $result = (($value2 - $value1) / $value1) * 100;
                $history[] = "Percentage increase from $value1 to $value2 = $result%";
                break;
            case 'percentage_decrease':
                $result = (($value1 - $value2) / $value1) * 100;
                $history[] = "Percentage decrease from $value1 to $value2 = $result%";
                break;
            default:
                $error = "Invalid calculation type";
        }
    }
}
?>

    <title>Percentage Calculator 2026 - Free Online Percentage Finder Tool</title>
<meta name="description" content="Free online percentage calculator for 2026. Calculate percentages, increases, decreases, and differences instantly. Solve math problems, discounts, tips, and grade calculations with ease.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .calculator-box {
            transition: all 0.3s ease;
        }
        .calculator-box:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .tab-active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Percentage Calculator</h1>
            <p class="text-gray-600">Calculate percentages easily with our free online tool</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="flex border-b overflow-x-auto">
                <button onclick="switchTab('what_is_x_percent_of_y')" id="tab1" class="px-6 py-3 text-sm font-medium tab-active whitespace-nowrap">
                    What is X% of Y?
                </button>
                <button onclick="switchTab('x_is_what_percent_of_y')" id="tab2" class="px-6 py-3 text-sm font-medium whitespace-nowrap">
                    X is what % of Y?
                </button>
                <button onclick="switchTab('percentage_increase')" id="tab3" class="px-6 py-3 text-sm font-medium whitespace-nowrap">
                    % Increase
                </button>
                <button onclick="switchTab('percentage_decrease')" id="tab4" class="px-6 py-3 text-sm font-medium whitespace-nowrap">
                    % Decrease
                </button>
            </div>

            <form method="POST" class="p-6">
                <input type="hidden" name="calculation_type" id="calculation_type" value="what_is_x_percent_of_y">
                
                <div id="what_is_x_percent_of_y" class="tab-content">
                    <div class="mb-4">
                        <label for="value1_1" class="block text-gray-700 font-medium mb-2">What is</label>
                        <div class="relative">
                            <input type="number" step="any" name="value1" id="value1_1" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 15" required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <span class="text-gray-500">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="value2_1" class="block text-gray-700 font-medium mb-2">of</label>
                        <input type="number" step="any" name="value2" id="value2_1" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 200" required>
                    </div>
                </div>

                <div id="x_is_what_percent_of_y" class="tab-content hidden">
                    <div class="mb-4">
                        <label for="value1_2" class="block text-gray-700 font-medium mb-2">What percentage is</label>
                        <input type="number" step="any" name="value1" id="value1_2" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 30" required>
                    </div>
                    <div class="mb-4">
                        <label for="value2_2" class="block text-gray-700 font-medium mb-2">of</label>
                        <input type="number" step="any" name="value2" id="value2_2" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 150" required>
                    </div>
                </div>

                <div id="percentage_increase" class="tab-content hidden">
                    <div class="mb-4">
                        <label for="value1_3" class="block text-gray-700 font-medium mb-2">Original value</label>
                        <input type="number" step="any" name="value1" id="value1_3" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 100" required>
                    </div>
                    <div class="mb-4">
                        <label for="value2_3" class="block text-gray-700 font-medium mb-2">New value</label>
                        <input type="number" step="any" name="value2" id="value2_3" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 150" required>
                    </div>
                </div>

                <div id="percentage_decrease" class="tab-content hidden">
                    <div class="mb-4">
                        <label for="value1_4" class="block text-gray-700 font-medium mb-2">Original value</label>
                        <input type="number" step="any" name="value1" id="value1_4" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 200" required>
                    </div>
                    <div class="mb-4">
                        <label for="value2_4" class="block text-gray-700 font-medium mb-2">New value</label>
                        <input type="number" step="any" name="value2" id="value2_4" class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., 150" required>
                    </div>
                </div>

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Calculate
                </button>
            </form>

            <?php if (!empty($error)): ?>
                <div class="px-6 pb-6">
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                        <p><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($result !== ''): ?>
                <div class="px-6 pb-6">
                    <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4">
                        <p class="font-bold">Result:</p>
                        <p class="text-2xl font-semibold mt-1">
                            <?php 
                            echo htmlspecialchars($result); 
                            echo ($calculation_type === 'x_is_what_percent_of_y' || 
                                 $calculation_type === 'percentage_increase' || 
                                 $calculation_type === 'percentage_decrease') ? '%' : '';
                            ?>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-bold text-gray-800 mb-4">How to Calculate Percentages</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="calculator-box bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <h3 class="font-semibold text-gray-800 mb-2">What is X% of Y?</h3>
                    <p class="text-gray-600 text-sm">Formula: (X ÷ 100) × Y</p>
                    <p class="text-gray-600 text-sm mt-2">Example: What is 20% of 300?</p>
                    <p class="text-gray-600 text-sm">(20 ÷ 100) × 300 = 60</p>
                </div>
                <div class="calculator-box bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <h3 class="font-semibold text-gray-800 mb-2">X is what % of Y?</h3>
                    <p class="text-gray-600 text-sm">Formula: (X ÷ Y) × 100</p>
                    <p class="text-gray-600 text-sm mt-2">Example: 50 is what % of 200?</p>
                    <p class="text-gray-600 text-sm">(50 ÷ 200) × 100 = 25%</p>
                </div>
                <div class="calculator-box bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <h3 class="font-semibold text-gray-800 mb-2">Percentage Increase</h3>
                    <p class="text-gray-600 text-sm">Formula: ((New - Original) ÷ Original) × 100</p>
                    <p class="text-gray-600 text-sm mt-2">Example: Increase from 80 to 120?</p>
                    <p class="text-gray-600 text-sm">((120-80)÷80)×100 = 50%</p>
                </div>
                <div class="calculator-box bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <h3 class="font-semibold text-gray-800 mb-2">Percentage Decrease</h3>
                    <p class="text-gray-600 text-sm">Formula: ((Original - New) ÷ Original) × 100</p>
                    <p class="text-gray-600 text-sm mt-2">Example: Decrease from 200 to 180?</p>
                    <p class="text-gray-600 text-sm">((200-180)÷200)×100 = 10%</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.remove('hidden');
            
            // Update active tab style
            document.querySelectorAll('[onclick^="switchTab"]').forEach(tab => {
                tab.classList.remove('tab-active');
            });
            document.querySelector(`[onclick="switchTab('${tabName}')"]`).classList.add('tab-active');
            
            // Update hidden input
            document.getElementById('calculation_type').value = tabName;
            
            // Reset result display
            document.getElementById('result-display').classList.add('hidden');
        }
    </script>
</body>
<?php include 'footer.php';?>

</html>
