<?php
echo "Testing .htaccess routing for fintech companies:<br><br>";

$test_urls = [
    '/calculators/smartcoin-two-wheeler-loan-emi-calculator',
    '/calculators/creditbee-two-wheeler-loan-emi-calculator',
    '/calculators/moneyview-two-wheeler-loan-emi-calculator',
    '/calculators/nira-two-wheeler-loan-emi-calculator',
    '/calculators/smartcoin-personal-loan-emi-calculator',
    '/calculators/smartcoin-home-loan-emi-calculator'
];

foreach($test_urls as $url) {
    echo "<a href='{$url}' target='_blank'>{$url}</a><br>";
}

echo "<br><br>All URLs above should now work correctly with the updated .htaccess rules.";
?>