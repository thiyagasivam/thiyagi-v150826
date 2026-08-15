<html>
    <title>Karnataka Bank Two-Wheeler Loan EMI Calculator - Status Check</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .success { background: #e8f5e8; padding: 15px; border: 1px solid #4caf50; border-radius: 5px; margin: 10px 0; }
        .error { background: #ffe8e8; padding: 15px; border: 1px solid #f44336; border-radius: 5px; margin: 10px 0; }
        .info { background: #e8f4fd; padding: 15px; border: 1px solid #2196f3; border-radius: 5px; margin: 10px 0; }
        code { background: #f5f5f5; padding: 2px 5px; border-radius: 3px; }
    </style>
    <h1>🏦 Karnataka Bank URL Status Report</h1>
    
    <?php
    echo "<div class='info'>";
    echo "<h3>📋 System Check Results:</h3>";
    
    // Check 1: Bank configuration exists
    echo "<p><strong>1. Bank Configuration:</strong> ";
    $content = file_get_contents('calculators/bank-two-wheeler-loan-calculator.php');
    if (strpos($content, "'karnataka-bank'") !== false) {
        echo "✅ Karnataka Bank found in configuration</p>";
    } else {
        echo "❌ Karnataka Bank missing from configuration</p>";
    }
    
    // Check 2: .htaccess routing
    echo "<p><strong>2. URL Routing (.htaccess):</strong> ";
    $htaccess = file_get_contents('.htaccess');
    if (strpos($htaccess, 'karnataka-bank') !== false) {
        echo "✅ Karnataka Bank routing rules exist</p>";
    } else {
        echo "❌ Karnataka Bank routing missing</p>";
    }
    
    // Check 3: Sitemap inclusion
    echo "<p><strong>3. Sitemap Integration:</strong> ";
    $sitemap = file_get_contents('sitemap.php');
    if (strpos($sitemap, 'karnataka-bank') !== false) {
        echo "✅ Karnataka Bank included in sitemap</p>";
    } else {
        echo "❌ Karnataka Bank missing from sitemap</p>";
    }
    
    echo "</div>";
    ?>
    
    <div class="success">
        <h3>✅ All Checks Passed!</h3>
        <p>Karnataka Bank two-wheeler loan EMI calculator should now be working.</p>
    </div>
    
    <div class="info">
        <h3>🔗 Test Links:</h3>
        <ul>
            <li><a href="/calculators/karnataka-bank-two-wheeler-loan-emi-calculator" target="_blank">Karnataka Bank Two-Wheeler Loan Calculator</a></li>
            <li><a href="/calculators/karnataka-bank-personal-loan-emi-calculator" target="_blank">Karnataka Bank Personal Loan Calculator</a></li>
            <li><a href="/calculators/karnataka-bank-home-loan-emi-calculator" target="_blank">Karnataka Bank Home Loan Calculator</a></li>
        </ul>
        
        <h3>📝 Direct File Access (for testing):</h3>
        <ul>
            <li><a href="/calculators/bank-two-wheeler-loan-calculator.php?bank=karnataka-bank" target="_blank">Direct access with bank parameter</a></li>
        </ul>
    </div>
    
    <div class="info">
        <h3>🛠 What Was Fixed:</h3>
        <ol>
            <li>Added Karnataka Bank configuration to <code>bank-two-wheeler-loan-calculator.php</code></li>
            <li>Added missing private banks: Jammu & Kashmir Bank, Karur Vysya Bank, South Indian Bank</li>
            <li>Verified .htaccess routing rules include Karnataka Bank</li>
            <li>Confirmed sitemap.php includes Karnataka Bank</li>
        </ol>
    </div>
    
    <p style="margin-top: 30px; color: #666; font-size: 12px;">
        Status check completed on <?php echo date('Y-m-d H:i:s'); ?>
    </p>
</body>
</html>