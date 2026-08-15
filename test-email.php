<?php
// Email Test Script - Check if mail function works
echo "<h2>Email Configuration Test</h2>";

// Test basic mail function
$test_email = "test@example.com";
$subject = "Test Email";
$message = "This is a test email from " . $_SERVER['HTTP_HOST'];
$headers = "From: test@" . $_SERVER['HTTP_HOST'];

echo "<h3>Server Information:</h3>";
echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Unknown') . "<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Operating System: " . php_uname() . "<br>";

echo "<h3>Mail Configuration:</h3>";
echo "SMTP: " . (ini_get('SMTP') ?: 'Not set') . "<br>";
echo "smtp_port: " . (ini_get('smtp_port') ?: 'Not set') . "<br>";
echo "sendmail_path: " . (ini_get('sendmail_path') ?: 'Not set') . "<br>";
echo "mail.add_x_header: " . (ini_get('mail.add_x_header') ? 'Yes' : 'No') . "<br>";

echo "<h3>Testing mail() function:</h3>";

// Clear any previous errors
error_clear_last();

// Test mail function
$result = @mail($test_email, $subject, $message, $headers);

if ($result) {
    echo "<span style='color: green;'>✓ mail() function returned TRUE</span><br>";
} else {
    echo "<span style='color: red;'>✗ mail() function returned FALSE</span><br>";
}

// Check for errors
$error = error_get_last();
if ($error && strpos($error['message'], 'mail') !== false) {
    echo "<span style='color: red;'>Error: " . htmlspecialchars($error['message']) . "</span><br>";
}

echo "<h3>Recommendations for XAMPP:</h3>";
echo "1. Install and configure sendmail for XAMPP<br>";
echo "2. Use PHPMailer with Gmail/Outlook SMTP<br>";
echo "3. Use a mail service like SendGrid, Mailgun, or AWS SES<br>";
echo "4. For testing: Use the log file backup method<br>";

echo "<h3>Log File Test:</h3>";
$log_test = @file_put_contents('test_log.txt', date('Y-m-d H:i:s') . " - Log test\n", FILE_APPEND);
if ($log_test) {
    echo "<span style='color: green;'>✓ Log file writing works</span><br>";
} else {
    echo "<span style='color: red;'>✗ Log file writing failed</span><br>";
}

?>

<style>
body { font-family: Arial, sans-serif; margin: 20px; }
h2 { color: #333; }
h3 { color: #666; margin-top: 20px; }
</style>