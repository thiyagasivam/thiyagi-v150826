<?php
// Test Karnataka Bank URL routing
echo "<h2>🔧 Karnataka Bank URL Test</h2>";

// Simulate the URL routing
$bank = 'karnataka-bank';
echo "<p><strong>Testing Bank:</strong> {$bank}</p>";

// Include the bank configuration
include 'calculators/bank-two-wheeler-loan-calculator.php';

// Check if bank exists in configuration
if (isset($bankData[$bank])) {
    echo "<div style='background: #e8f5e8; padding: 15px; border: 1px solid #4caf50; border-radius: 5px; margin: 20px 0;'>";
    echo "<h3>✅ SUCCESS: Karnataka Bank Found in Configuration</h3>";
    echo "<p><strong>Bank Name:</strong> " . $bankData[$bank]['name'] . "</p>";
    echo "<p><strong>Bank Type:</strong> " . $bankData[$bank]['type'] . "</p>";
    echo "<p><strong>Default Rate:</strong> " . $bankData[$bank]['defaultRate'] . "%</p>";
    echo "</div>";
} else {
    echo "<div style='background: #ffe8e8; padding: 15px; border: 1px solid #f44336; border-radius: 5px; margin: 20px 0;'>";
    echo "<h3>❌ ERROR: Karnataka Bank NOT Found</h3>";
    echo "</div>";
}

echo "<h3>📋 Test URLs:</h3>";
$testUrls = [
    'Karnataka Bank Two-Wheeler' => '/calculators/karnataka-bank-two-wheeler-loan-emi-calculator',
    'Karnataka Bank Personal' => '/calculators/karnataka-bank-personal-loan-emi-calculator',
    'Karnataka Bank Home' => '/calculators/karnataka-bank-home-loan-emi-calculator'
];

foreach($testUrls as $title => $url) {
    echo "<div style='margin: 10px 0; padding: 10px; background: #f0f8ff; border-radius: 5px;'>";
    echo "<strong>{$title}:</strong> ";
    echo "<a href='{$url}' target='_blank' style='color: #2196f3;'>{$url}</a>";
    echo "</div>";
}

echo "<p style='margin-top: 30px; color: #666;'><small>Test performed on " . date('Y-m-d H:i:s') . "</small></p>";
?>