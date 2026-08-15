<?php
echo "Checking Karnataka Bank configuration..." . PHP_EOL;

// Read the bank configuration file directly
$content = file_get_contents('calculators/bank-two-wheeler-loan-calculator.php');

// Check if karnataka-bank exists in the file
if (strpos($content, "'karnataka-bank'") !== false) {
    echo "✅ Karnataka Bank found in configuration file" . PHP_EOL;
} else {
    echo "❌ Karnataka Bank NOT found in configuration file" . PHP_EOL;
}

// Check .htaccess routing
$htaccess = file_get_contents('.htaccess');
if (strpos($htaccess, 'karnataka-bank') !== false) {
    echo "✅ Karnataka Bank found in .htaccess routing" . PHP_EOL;
} else {
    echo "❌ Karnataka Bank NOT found in .htaccess routing" . PHP_EOL;
}

echo "Analysis complete." . PHP_EOL;
?>