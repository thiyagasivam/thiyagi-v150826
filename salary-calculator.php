<?php include 'header.php';?>


<?php
// Salary Calculation Function
function calculateSalary($basicSalary, $bonuses = 0, $deductions = 0) {
    // Calculate components (simplified for demo)
    $hra = $basicSalary * 0.4; // 40% of basic
    $specialAllowance = $basicSalary * 0.3; // 30% of basic
    $pf = min($basicSalary * 0.12, 1800); // 12% of basic (max 1800)

    $grossSalary = $basicSalary + $hra + $specialAllowance + $bonuses;
    $totalDeductions = $pf + $deductions;
    $netSalary = $grossSalary - $totalDeductions;

    return [
        'basic' => $basicSalary,
        'hra' => $hra,
        'special_allowance' => $specialAllowance,
        'bonuses' => $bonuses,
        'pf' => $pf,
        'other_deductions' => $deductions,
        'gross_salary' => $grossSalary,
        'total_deductions' => $totalDeductions,
        'net_salary' => $netSalary
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $basicSalary = (float)($_POST['basic_salary'] ?? 0);
    $bonuses = (float)($_POST['bonuses'] ?? 0);
    $deductions = (float)($_POST['deductions'] ?? 0);

    if ($basicSalary > 0) {
        $result = calculateSalary($basicSalary, $bonuses, $deductions);
    }
}
?>

    <title>2026 Salary Calculator - Free Gross to Net Pay Estimator</title>
<meta name="description" content="Calculate your take-home pay after taxes, deductions & bonuses. Free salary calculator for 2026 with breakdowns for hourly, monthly & annual earnings.">
    <style>
        .calculator-container {
            max-width: 800px;
            margin: 30px auto; /* mx-auto mt-8 mb-8 */
            background: #fff; /* bg-white */
            border-radius: 10px; /* rounded-xl */
            box-shadow: 0 0 20px rgba(0,0,0,0.1); /* shadow-xl */
            overflow: hidden; /* Already applied */
        }
        .calculator-header {
            background: #6c5ce7; /* bg-[#6c5ce7] */
            color: white; /* text-white */
            padding: 20px; /* p-5 */
        }
        .calculator-body {
            padding: 25px; /* p-6 */
        }
        .result-card {
            border-left: 4px solid #6c5ce7; /* border-l-4 border-[#6c5ce7] */
            background: #f8f9fa; /* bg-gray-100 */
        }
        .component-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0; /* py-2 */
            border-bottom: 1px solid #eee; /* border-b border-gray-200 */
        }
        .highlight-result {
            font-size: 1.5rem; /* text-2xl */
            font-weight: bold; /* font-bold */
            color: #6c5ce7; /* text-[#6c5ce7] */
        }
        @media (max-width: 576px) {
            .calculator-container {
                margin: 10px; /* m-2.5 or m-3 */
                border-radius: 0; /* rounded-none */
            }
        }
    </style>

<body class="bg-gray-100">
    <div class="calculator-container">
        <div class="calculator-header">
            <h1 class="text-xl font-semibold mb-0">Salary Calculator</h1> <!-- h1 class="h3 mb-0" -> text-xl font-semibold mb-0 -->
            <p class="mb-0">Calculate your take-home salary after deductions</p> <!-- mb-0 -->
        </div>

        <div class="calculator-body">
            <form method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4"> <!-- row g-3 -> grid grid-cols-1 md:grid-cols-2 gap-4 -->
                    <div>
                        <label for="basic_salary" class="block mb-2 font-medium">Basic Salary (₹)</label> <!-- form-label -> block mb-2 font-medium -->
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="basic_salary" name="basic_salary"
                               placeholder="e.g., 25000" required min="0" step="100"> <!-- form-control -> w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                    </div>
                    <div>
                        <label for="bonuses" class="block mb-2 font-medium">Bonuses/Allowances (₹)</label>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="bonuses" name="bonuses"
                               placeholder="e.g., 2000" min="0" step="100" value="0">
                    </div>
                    <div>
                        <label for="deductions" class="block mb-2 font-medium">Other Deductions (₹)</label>
                        <input type="number" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="deductions" name="deductions"
                               placeholder="e.g., 1500" min="0" step="100" value="0">
                    </div>
                    <div class="md:col-span-2 mt-4"> <!-- col-12 mt-3 -> md:col-span-2 mt-4 -->
                        <button type="submit" class="w-full bg-[#6c5ce7] hover:opacity-90 text-white font-medium py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">Calculate Salary</button> <!-- btn btn-primary w-100 py-2 -> w-full bg-[#6c5ce7] text-white font-medium py-2 px-4 rounded ... -->
                    </div>
                </div>
            </form>

            <?php if ($result): ?>
            <div class="mt-6 p-4 result-card bg-gray-100"> <!-- mt-4 p-4 result-card -> mt-6 p-4 result-card bg-gray-100 -->
                <h2 class="text-lg font-semibold mb-4">Salary Breakdown</h2> <!-- h2 class="h4 mb-3" -> text-lg font-semibold mb-4 -->

                <div class="mb-6"> <!-- mb-4 -> mb-6 -->
                    <div class="component-item flex justify-between py-2 border-b border-gray-200"> <!-- component-item -> component-item flex justify-between py-2 border-b border-gray-200 -->
                        <span>Basic Salary:</span>
                        <span>₹<?= number_format($result['basic'], 2) ?></span>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <span>HRA (40% of Basic):</span>
                        <span>₹<?= number_format($result['hra'], 2) ?></span>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <span>Special Allowance (30% of Basic):</span>
                        <span>₹<?= number_format($result['special_allowance'], 2) ?></span>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <span>Bonuses/Allowances:</span>
                        <span>₹<?= number_format($result['bonuses'], 2) ?></span>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <span>Provident Fund (PF):</span>
                        <span>₹<?= number_format($result['pf'], 2) ?></span>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <span>Other Deductions:</span>
                        <span>₹<?= number_format($result['other_deductions'], 2) ?></span>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-300"> <!-- pt-3 border-top -> pt-4 border-t border-gray-300 -->
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <strong>Gross Salary:</strong>
                        <strong>₹<?= number_format($result['gross_salary'], 2) ?></strong>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <strong>Total Deductions:</strong>
                        <strong>₹<?= number_format($result['total_deductions'], 2) ?></strong>
                    </div>
                    <div class="component-item flex justify-between py-2 border-b border-gray-200">
                        <strong class="highlight-result text-2xl font-bold">Net Take-Home Salary:</strong> <!-- highlight-result -> highlight-result text-2xl font-bold -->
                        <strong class="highlight-result text-2xl font-bold">₹<?= number_format($result['net_salary'], 2) ?></strong>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
</body>

<?php include 'footer.php';?>

</html>
