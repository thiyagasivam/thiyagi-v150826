<?php
echo "=== COMPREHENSIVE ALL CATEGORIES BANK AUDIT ===\n\n";

$htaccess = file_get_contents('.htaccess');
$configContent = file_get_contents('calculators/bank-two-wheeler-loan-calculator.php');

// Extract all bank categories from .htaccess
$categories = [
    'Private Banks' => [],
    'Local Area Banks' => [], 
    'Public Sector Banks' => [],
    'Payment Banks' => [],
    'Development Financial Institutions' => [],
    'Regional Rural Banks' => [],
    'Small Finance Banks' => [],
    'NBFCs' => [],
    'Foreign Banks' => [],
    'Fintech Companies' => [],
    'Cooperative Banks' => []
];

// Parse .htaccess for each category
$patterns = [
    'Private Banks' => '/RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator.*Private Banks - Two Wheeler Loan/s',
    'Local Area Banks' => '/# Local Area Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Public Sector Banks' => '/# Public Sector Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Payment Banks' => '/# Payment Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Development Financial Institutions' => '/# Development Financial Institutions - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Regional Rural Banks' => '/# Regional Rural Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Small Finance Banks' => '/# Small Finance Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'NBFCs' => '/# NBFCs & Finance Companies - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Foreign Banks' => '/# Foreign Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Fintech Companies' => '/# Fintech Companies - Two Wheeler Loan.*?RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s',
    'Cooperative Banks' => '/# Cooperative Banks - Two Wheeler Loan\s*RewriteRule \^calculators\/\((.*?)\)-two-wheeler-loan-emi-calculator/s'
];

$totalMissing = 0;
$totalBanks = 0;

foreach ($patterns as $category => $pattern) {
    if (preg_match($pattern, $htaccess, $matches)) {
        if (isset($matches[1])) {
            $banks = explode('|', $matches[1]);
            $categories[$category] = $banks;
            $totalBanks += count($banks);
            
            echo "$category (" . count($banks) . " banks):\n";
            
            $missing = [];
            foreach ($banks as $bank) {
                if (strpos($configContent, "'$bank'") === false) {
                    $missing[] = $bank;
                }
            }
            
            if (empty($missing)) {
                echo "  ✅ All banks configured\n";
            } else {
                echo "  ❌ Missing " . count($missing) . " banks:\n";
                foreach ($missing as $bank) {
                    echo "    - $bank\n";
                }
                $totalMissing += count($missing);
            }
            echo "\n";
        }
    }
}

echo "=== SUMMARY ===\n";
echo "Total banks in routing: $totalBanks\n";
echo "Missing from configuration: $totalMissing\n";

if ($totalMissing == 0) {
    echo "✅ ALL BANK URLS SHOULD NOW WORK!\n";
} else {
    echo "❌ $totalMissing URLs still broken\n";
}

echo "\nAudit completed on " . date('Y-m-d H:i:s') . "\n";
?>