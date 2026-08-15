<?php include 'header.php';?>


<?php
// Function to calculate simple interest
function calculateSimpleInterest($principal, $rate, $time) {
    return ($principal * $rate * $time) / 100;
}

// Initialize variables
$principal = $rate = $time = $interest = $total = 0;
$error = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = filter_input(INPUT_POST, 'principal', FILTER_VALIDATE_FLOAT);
    $rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_FLOAT);
    $time = filter_input(INPUT_POST, 'time', FILTER_VALIDATE_FLOAT);

    if ($principal === false || $principal <= 0) {
        $error = 'Please enter a valid principal amount';
    } elseif ($rate === false || $rate <= 0) {
        $error = 'Please enter a valid interest rate';
    } elseif ($time === false || $time <= 0) {
        $error = 'Please enter a valid time period';
    } else {
        $interest = calculateSimpleInterest($principal, $rate, $time);
        $total = $principal + $interest;
    }
}
?>

    <title>Simple Interest Calculator (2026) - Free Online Tool | Fast & Accurate</title>
<meta name="description" content="Calculate simple interest on loans or investments instantly. Free online calculator for principal, rate, and time period computations with clear results breakdown.">
    <style>
        :root {
            --primary-color: #00d09c;
            /* --secondary-color: #f5f7fa; - bg-gray-100 */
            /* --text-color: #3c4e6d; - text-gray-800 */
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background-color: var(--secondary-color); - bg-gray-100 */
            /* color: var(--text-color); - text-gray-800 */
        }

        .calculator-container {
            max-width: 600px;
            margin: 2rem auto; /* mx-auto mt-8 mb-8 */
            background: white; /* bg-white */
            border-radius: 12px; /* rounded-xl */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08); /* shadow-xl */
            overflow: hidden; /* Already applied */
        }

        .calculator-header {
            background-color: var(--primary-color); /* bg-[var(--primary-color)] */
            color: white; /* text-white */
            padding: 1.5rem; /* p-6 */
        }

        .calculator-body {
            padding: 1.5rem; /* p-6 */
        }

        /* Custom focus state - Tailwind can do this, but this is simpler */
        .form-control:focus {
            border-color: var(--primary-color); /* border-[var(--primary-color)] */
            box-shadow: 0 0 0 0.25rem rgba(0, 208, 156, 0.25); /* ring-4 ring-blue-200 (approx) */
        }

        /* Gradient Button - Tailwind doesn't easily do arbitrary solid colors */
        .btn-primary {
            background-color: var(--primary-color); /* bg-[var(--primary-color)] */
            border-color: var(--primary-color); /* border-[var(--primary-color)] */
            color: white; /* text-white */
            padding: 0.5rem 1rem; /* py-2 px-4 */
            border-radius: 0.375rem; /* rounded */
            width: 100%; /* w-full */
        }
        .btn-primary:hover {
            background-color: #00b388; /* hover:bg-[#00b388] */
            border-color: #00b388; /* hover:border-[#00b388] */
        }

        .result-card {
            background-color: #f8f9fa; /* bg-gray-100 */
            border-radius: 8px; /* rounded-lg */
            padding: 1.5rem; /* p-6 */
            margin-top: 1.5rem; /* mt-6 */
        }

        .result-value {
            font-size: 1.5rem; /* text-2xl */
            font-weight: bold; /* font-bold */
            color: var(--primary-color); /* text-[var(--primary-color)] */
        }

        .input-group-text {
            background-color: #e9ecef; /* bg-gray-200 */
        }

        @media (max-width: 576px) {
            .calculator-container {
                margin: 1rem; /* m-4 */
                border-radius: 8px; /* rounded-lg */
            }

            .calculator-header h2 {
                font-size: 1.5rem; /* text-2xl */
            }
        }
    </style>

<body class="bg-gray-100 text-gray-800">
    <div class="calculator-container">
        <div class="calculator-header text-center">
            <h1 class="text-2xl font-semibold mb-0">Simple Interest Calculator</h1> <!-- mb-0 -->
        </div>

        <div class="calculator-body">
            <form method="POST">
                <div class="mb-4"> <!-- mb-3 -> mb-4 -->
                    <label for="principal" class="block mb-2 font-medium">Principal Amount (₹)</label> <!-- form-label -> block mb-2 font-medium -->
                    <div class="flex"> <!-- input-group -> flex -->
                        <span class="inline-flex items-center px-3 rounded-l border border-r-0 border-gray-300 bg-gray-200 text-gray-700">₹</span> <!-- input-group-text -> inline-flex items-center px-3 rounded-l border border-r-0 border-gray-300 bg-gray-200 text-gray-700 -->
                        <input type="number" class="form-control flex-grow px-4 py-2 border border-gray-300 rounded-r focus:outline-none" id="principal" name="principal"
                               value="<?= htmlspecialchars($principal) ?>" step="0.01" min="1" required> <!-- form-control -> form-control flex-grow px-4 py-2 border border-gray-300 rounded-r focus:outline-none -->
                    </div>
                </div>

                <div class="mb-4">
                    <label for="rate" class="block mb-2 font-medium">Annual Interest Rate (%)</label>
                    <div class="flex">
                        <input type="number" class="form-control flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none" id="rate" name="rate"
                               value="<?= htmlspecialchars($rate) ?>" step="0.01" min="0.01" required> <!-- form-control -> form-control flex-grow px-4 py-2 border border-gray-300 rounded-l focus:outline-none -->
                        <span class="inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-200 text-gray-700">%</span> <!-- input-group-text -> inline-flex items-center px-3 rounded-r border border-l-0 border-gray-300 bg-gray-200 text-gray-700 -->
                    </div>
                </div>

                <div class="mb-4">
                    <label for="time" class="block mb-2 font-medium">Time Period (in years)</label>
                    <input type="number" class="form-control w-full px-4 py-2 border border-gray-300 rounded focus:outline-none" id="time" name="time"
                           value="<?= htmlspecialchars($time) ?>" step="0.1" min="0.1" required> <!-- form-control -> form-control w-full px-4 py-2 border border-gray-300 rounded focus:outline-none -->
                </div>

                <button type="submit" class="btn-primary">Calculate</button> <!-- btn btn-primary w-100 py-2 -> btn-primary -->
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)): ?>
                <div class="result-card bg-gray-100"> <!-- result-card -> result-card bg-gray-100 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4"> <!-- row text-center -> grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4 -->
                        <div class="mb-4 md:mb-0"> <!-- col-md-6 mb-3 -> mb-4 md:mb-0 -->
                            <div>Principal Amount</div>
                            <div class="result-value text-2xl font-bold">₹<?= number_format($principal, 2) ?></div> <!-- result-value -> result-value text-2xl font-bold -->
                        </div>
                        <div class="mb-4 md:mb-0">
                            <div>Interest Rate</div>
                            <div class="result-value text-2xl font-bold"><?= number_format($rate, 2) ?>%</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center mb-4">
                        <div class="mb-4 md:mb-0">
                            <div>Time Period</div>
                            <div class="result-value text-2xl font-bold"><?= number_format($time, 1) ?> years</div>
                        </div>
                        <div class="mb-4 md:mb-0">
                            <div>Interest Amount</div>
                            <div class="result-value text-2xl font-bold">₹<?= number_format($interest, 2) ?></div>
                        </div>
                    </div>
                    <hr class="my-4 border-gray-300"> <!-- hr -> hr my-4 border-gray-300 -->
                    <div class="text-center">
                        <div class="text-lg font-medium">Total Amount</div> <!-- fs-5 -> text-lg font-medium -->
                        <div class="result-value text-3xl font-bold">₹<?= number_format($total, 2) ?></div> <!-- result-value fs-3 -> result-value text-3xl font-bold -->
                    </div>
                </div>
            <?php elseif (!empty($error)): ?>
                <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded"> <!-- alert alert-danger mt-3 -> mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded -->
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
</body>

<?php include 'footer.php';?>

</html>
