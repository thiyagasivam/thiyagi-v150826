<?php
echo "Starting test..." . PHP_EOL;
include 'calculators/bank-two-wheeler-loan-calculator.php';
echo "File included..." . PHP_EOL;
echo isset($bankData['karnataka-bank']) ? 'Karnataka Bank found' : 'Karnataka Bank NOT found';
echo PHP_EOL;
if (isset($bankData['karnataka-bank'])) {
    echo "Bank Name: " . $bankData['karnataka-bank']['name'] . PHP_EOL;
}
echo "Test completed." . PHP_EOL;
?>