<?php include 'header.php';?>


<?php
// Function to generate credit card numbers based on selected type
function generateCreditCard($type, $count = 1) {
    $cards = [];
    
    for ($i = 0; $i < $count; $i++) {
        switch ($type) {
            case 'visa':
                $prefix = '4';
                $length = 16;
                break;
            case 'mastercard':
                $prefix = ['51', '52', '53', '54', '55'][rand(0, 4)];
                $length = 16;
                break;
            case 'amex':
                $prefix = ['34', '37'][rand(0, 1)];
                $length = 15;
                break;
            case 'discover':
                $prefix = '6011';
                $length = 16;
                break;
            default:
                $prefix = '4';
                $length = 16;
        }
        
        $number = $prefix;
        while (strlen($number) < $length - 1) {
            $number .= rand(0, 9);
        }
        
        // Calculate Luhn check digit
        $number = luhnCheckDigit($number);
        $cards[] = formatCreditCard($number, $type);
    }
    
    return $cards;
}

// Function to calculate Luhn check digit
function luhnCheckDigit($number) {
    $sum = 0;
    $alt = false;
    
    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $digit = $number[$i];
        if ($alt) {
            $digit *= 2;
            if ($digit > 9) {
                $digit -= 9;
            }
        }
        $sum += $digit;
        $alt = !$alt;
    }
    
    $checkDigit = (10 - ($sum % 10)) % 10;
    return $number . $checkDigit;
}

// Function to format credit card number
function formatCreditCard($number, $type) {
    $formatted = '';
    $length = strlen($number);
    
    if ($type === 'amex') {
        // Format for Amex: 4-6-5
        $formatted = substr($number, 0, 4) . ' ' . 
                     substr($number, 4, 6) . ' ' . 
                     substr($number, 10, 5);
    } else {
        // Format for others: 4-4-4-4
        for ($i = 0; $i < $length; $i++) {
            if ($i > 0 && $i % 4 === 0) {
                $formatted .= ' ';
            }
            $formatted .= $number[$i];
        }
    }
    
    return [
        'number' => $formatted,
        'type' => $type,
        'expiry' => date('m/y', strtotime('+' . rand(12, 60) . ' months')),
        'cvv' => str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT)
    ];
}

// Handle form submission
$generatedCards = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardType = $_POST['card_type'] ?? 'visa';
    $cardCount = min(50, max(1, intval($_POST['card_count'] ?? 1)));
    $generatedCards = generateCreditCard($cardType, $cardCount);
}
?>

    <title>Free Credit Card Generator 2026 – Valid Test Numbers (Safe & No Fees)</title>
    <meta name="description" content="Generate 100% free & safe dummy credit card numbers for testing (2026). No real money, no scams—use our tool for development, e-commerce trials, and fraud checks.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .card-visa { background: linear-gradient(135deg, #1a1f71 0%, #f79a1e 100%); }
        .card-mastercard { background: linear-gradient(135deg, #f46b45 0%, #eea849 100%); }
        .card-amex { background: linear-gradient(135deg, #0070ba 0%, #154284 100%); }
        .card-discover { background: linear-gradient(135deg, #ff6000 0%, #ff8c00 100%); }
        
        .card-type {
            position: absolute;
            right: 20px;
            bottom: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .card-chip {
            width: 40px;
            height: 30px;
            background: linear-gradient(135deg, #ddb35f 0%, #e6c97e 100%);
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }
        
        .card-chip::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, 
                rgba(255,255,255,0.3) 0%, 
                rgba(255,255,255,0.1) 50%, 
                rgba(255,255,255,0.3) 100%);
        }
    </style>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-2">Credit Card Generator</h1>
            <p class="text-center text-gray-600 mb-8">Generate valid test credit card numbers for development and testing purposes</p>
            
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <form method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="card_type" class="block text-gray-700 font-medium mb-2">Card Type</label>
                            <select id="card_type" name="card_type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="visa">Visa</option>
                                <option value="mastercard">Mastercard</option>
                                <option value="amex">American Express</option>
                                <option value="discover">Discover</option>
                            </select>
                        </div>
                        <div>
                            <label for="card_count" class="block text-gray-700 font-medium mb-2">Number of Cards (1-50)</label>
                            <input type="number" id="card_count" name="card_count" min="1" max="50" value="1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Generate Credit Cards
                    </button>
                </form>
            </div>
            
            <?php if (!empty($generatedCards)): ?>
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Generated Cards</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <?php foreach ($generatedCards as $card): ?>
                            <div class="card-<?php echo $card['type']; ?> text-white rounded-xl p-6 shadow-lg relative h-48">
                                <div class="card-chip mb-6"></div>
                                <div class="text-xl font-mono tracking-wider mb-2"><?php echo $card['number']; ?></div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="text-xs opacity-80">Expires</div>
                                        <div class="font-medium"><?php echo $card['expiry']; ?></div>
                                    </div>
                                    <div>
                                        <div class="text-xs opacity-80">CVV</div>
                                        <div class="font-medium"><?php echo $card['cvv']; ?></div>
                                    </div>
                                </div>
                                <div class="card-type">
                                    <?php 
                                        echo strtoupper($card['type']);
                                        if ($card['type'] === 'amex') echo '®';
                                    ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                These credit card numbers are <strong>for testing purposes only</strong>. They follow proper formatting but will not work for actual transactions. Do not attempt to use them for real purchases.
                            </p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">About This Tool</h2>
                <p class="text-gray-600 mb-4">
                    Our Credit Card Generator creates valid test card numbers that follow the Luhn algorithm and proper formatting for various card types. These numbers are designed for software testing, e-commerce development, and educational purposes.
                </p>
                <p class="text-gray-600">
                    <strong>Important:</strong> These are not real credit card numbers and cannot be used for actual transactions. They are provided solely for testing payment systems in development environments.
                </p>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php';?>

</html>
