<?php include 'header.php';?>

<?php
// Function to calculate final grade
function calculateGrade($current_grade, $final_weight, $desired_grade) {
    if ($final_weight <= 0 || $final_weight > 100) {
        return false;
    }
    
    $required_grade = ($desired_grade - (1 - $final_weight/100) * $current_grade) / ($final_weight/100);
    return round($required_grade, 2);
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_grade = floatval($_POST['current_grade'] ?? 0);
    $final_weight = floatval($_POST['final_weight'] ?? 0);
    $desired_grade = floatval($_POST['desired_grade'] ?? 0);
    
    $result = calculateGrade($current_grade, $final_weight, $desired_grade);
}
?>

    <title>Free Grade Calculator 2026 - Calculate GPA, Final Scores & Letter Grades</title>
<meta name="description" content="Determine your current grade, required final exam score, and GPA instantly (2026). Perfect for students, teachers, and academic planning - No signup needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .input-group {
            transition: all 0.3s ease;
        }
        .input-group:focus-within {
            transform: translateY(-2px);
        }
        .result-box {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.4s ease;
        }
        .result-box.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Grade Calculator</h1>
            <p class="text-lg text-gray-600">Calculate what you need on your final exam</p>
        </header>

        <main class="bg-white rounded-xl shadow-md overflow-hidden p-6 md:p-8">
            <form method="POST" class="space-y-6">
                <div class="input-group">
                    <label for="current_grade" class="block text-sm font-medium text-gray-700 mb-1">Current Grade (%)</label>
                    <input type="number" step="0.01" min="0" max="100" name="current_grade" id="current_grade" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="e.g. 85" required>
                </div>

                <div class="input-group">
                    <label for="final_weight" class="block text-sm font-medium text-gray-700 mb-1">Final Exam Weight (%)</label>
                    <input type="number" step="0.01" min="1" max="100" name="final_weight" id="final_weight" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="e.g. 30" required>
                </div>

                <div class="input-group">
                    <label for="desired_grade" class="block text-sm font-medium text-gray-700 mb-1">Desired Course Grade (%)</label>
                    <input type="number" step="0.01" min="0" max="100" name="desired_grade" id="desired_grade" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="e.g. 90" required>
                </div>

                <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Calculate Required Final Exam Grade
                </button>
            </form>

            <?php if ($result !== null): ?>
                <div id="result" class="result-box mt-8 p-6 bg-blue-50 rounded-lg border border-blue-200 show">
                    <?php if ($result === false): ?>
                        <p class="text-red-600 font-medium">Invalid input. Final exam weight must be between 1% and 100%.</p>
                    <?php elseif ($result > 100): ?>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Result:</p>
                        <p class="text-lg">To achieve a <span class="font-bold"><?php echo htmlspecialchars($desired_grade); ?>%</span> 
                        overall grade, you would need <span class="font-bold text-red-600"><?php echo htmlspecialchars($result); ?>%</span> 
                        on your final exam, which is impossible (maximum is 100%).</p>
                    <?php elseif ($result < 0): ?>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Result:</p>
                        <p class="text-lg">You can achieve a <span class="font-bold"><?php echo htmlspecialchars($desired_grade); ?>%</span> 
                        overall grade even with a <span class="font-bold text-green-600">0%</span> on your final exam.</p>
                    <?php else: ?>
                        <p class="text-xl font-semibold text-gray-800 mb-2">Result:</p>
                        <p class="text-lg">To achieve a <span class="font-bold"><?php echo htmlspecialchars($desired_grade); ?>%</span> 
                        overall grade, you need at least <span class="font-bold text-blue-600"><?php echo htmlspecialchars($result); ?>%</span> 
                        on your final exam.</p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-12 bg-white rounded-xl shadow-md overflow-hidden p-6 md:p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">How the Grade Calculator Works</h2>
            <div class="prose max-w-none">
                <p>This calculator determines the minimum grade you need on your final exam to achieve your desired course grade.</p>
                <h3 class="text-xl font-semibold mt-4">The Formula</h3>
                <p>The calculation uses the following formula:</p>
                <p class="bg-gray-100 p-3 rounded-lg font-mono">
                    Required Final Exam Grade = (Desired Grade - (100% - Final Weight) × Current Grade) / Final Weight
                </p>
                <h3 class="text-xl font-semibold mt-4">Example Calculation</h3>
                <p>If you have an 85% current grade, want a 90% overall grade, and your final exam is worth 30%:</p>
                <p class="bg-gray-100 p-3 rounded-lg font-mono">
                    (90 - (70% × 85)) / 30% = (90 - 59.5) / 0.3 = 101.67%
                </p>
                <p>In this case, you would need 101.67% on your final, which is impossible (maximum is 100%).</p>
            </div>
        </section>
    </div>

   
    <script>
        // Simple animation for the result box
        document.addEventListener('DOMContentLoaded', function() {
            const resultBox = document.getElementById('result');
            if (resultBox) {
                setTimeout(() => {
                    resultBox.classList.add('show');
                }, 100);
            }
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
