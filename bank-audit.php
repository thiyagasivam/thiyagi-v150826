<?php
echo "=== COMPREHENSIVE BANK CONFIGURATION AUDIT ===\n\n";

// Get banks from .htaccess private bank section
$htaccess = file_get_contents('.htaccess');
preg_match('/RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/', $htaccess, $matches);

if (isset($matches[1])) {
    $htaccessBanks = explode('|', $matches[1]);
    echo "Banks in .htaccess routing (" . count($htaccessBanks) . " total):\n";
    foreach ($htaccessBanks as $bank) {
        echo "  - $bank\n";
    }
    echo "\n";
    
    // Check which banks are missing from configuration
    $configContent = file_get_contents('calculators/bank-two-wheeler-loan-calculator.php');
    
    $missingBanks = [];
    foreach ($htaccessBanks as $bank) {
        if (strpos($configContent, "'$bank'") === false) {
            $missingBanks[] = $bank;
        }
    }
    
    if (empty($missingBanks)) {
        echo "✅ ALL BANKS FOUND IN CONFIGURATION!\n";
    } else {
        echo "❌ MISSING BANKS IN CONFIGURATION (" . count($missingBanks) . " missing):\n";
        foreach ($missingBanks as $bank) {
            echo "  - $bank\n";
        }
    }
} else {
    echo "Could not parse .htaccess file\n";
}

echo "\nAudit completed on " . date('Y-m-d H:i:s') . "\n";
?>