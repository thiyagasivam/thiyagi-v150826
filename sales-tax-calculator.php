<?php include 'header.php';?>


<?php
// Function to calculate sales tax
function calculateSalesTax($amount, $taxRate) {
    $taxAmount = $amount * ($taxRate / 100);
    $totalAmount = $amount + $taxAmount;
    return [
        'amount' => $amount,
        'taxRate' => $taxRate,
        'taxAmount' => $taxAmount,
        'totalAmount' => $totalAmount
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
    $taxRate = filter_input(INPUT_POST, 'tax_rate', FILTER_VALIDATE_FLOAT);
    
    if ($amount !== false && $taxRate !== false && $amount >= 0 && $taxRate >= 0) {
        $result = calculateSalesTax($amount, $taxRate);
    } else {
        $error = "Please enter valid positive numbers for both fields.";
    }
}
?>

    <title>2026 Sales Tax Calculator - Free Rate Lookup & Receipt Generator</title>
<meta name="description" content="Calculate sales tax for any US address in 2026. Instantly find local tax rates, generate itemized receipts, and compute before/after-tax prices for free.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .input-field {
            transition: all 0.3s ease;
        }
        .input-field:focus {
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.3);
        }
        .result-box {
            transition: all 0.5s ease;
        }
    </style>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Sales Tax Calculator</h1>
            <p class="text-gray-600">Calculate the tax amount and total cost for any purchase</p>
        </header>
        
        <!-- Calculator Form -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST" class="space-y-4">
                <div>
                    <label for="amount" class="block text-gray-700 font-medium mb-1">Purchase Amount ($)</label>
                    <input type="number" step="0.01" min="0" name="amount" id="amount" 
                           class="w-full px-4 py-2 border rounded-lg input-field focus:outline-none focus:border-blue-500" 
                           placeholder="0.00" required>
                </div>
                
                <div>
                    <label for="tax_rate" class="block text-gray-700 font-medium mb-1">Sales Tax Rate (%)</label>
                    <input type="number" step="0.01" min="0" name="tax_rate" id="tax_rate" 
                           class="w-full px-4 py-2 border rounded-lg input-field focus:outline-none focus:border-blue-500" 
                           placeholder="7.5" required>
                </div>
                
                <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                    Calculate Tax
                </button>
            </form>
        </div>
        
        <!-- Results -->
        <?php if (isset($result)): ?>
            <div class="bg-white rounded-lg shadow-md p-6 result-box">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Calculation Results</h2>
                
                <div class="space-y-3">
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Original Amount:</span>
                        <span class="font-medium">$<?= number_format($result['amount'], 2) ?></span>
                    </div>
                    
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Tax Rate:</span>
                        <span class="font-medium"><?= number_format($result['taxRate'], 2) ?>%</span>
                    </div>
                    
                    <div class="flex justify-between border-b pb-2">
                        <span class="text-gray-600">Tax Amount:</span>
                        <span class="font-medium text-blue-600">$<?= number_format($result['taxAmount'], 2) ?></span>
                    </div>
                    
                    <div class="flex justify-between pt-2">
                        <span class="text-gray-800 font-bold">Total Amount:</span>
                        <span class="text-green-600 font-bold">$<?= number_format($result['totalAmount'], 2) ?></span>
                    </div>
                </div>
            </div>
        <?php elseif (isset($error)): ?>
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8">
                <p class="text-red-700"><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>
        
        <!-- Information Section -->
        <div class="mt-8 bg-blue-50 rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-3">About Sales Tax</h2>
            <p class="text-gray-600 mb-3">Sales tax is a consumption tax imposed by the government on the sale of goods and services. The tax rate varies by location and type of product.</p>
            <p class="text-gray-600">This calculator helps you determine how much tax you'll pay on a purchase and the total amount due.</p>
        </div>
    </div>
    
   
</body>

<?php include 'footer.php';?>


</html>
