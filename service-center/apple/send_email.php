<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Basic CAPTCHA check
    if ($_POST['captcha'] !== '6') {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'CAPTCHA failed']);
        exit;
    }

    // Sanitize input
    $issue = htmlspecialchars(trim($_POST['issue'] ?? 'Not specified'));
    $comments = nl2br(htmlspecialchars(trim($_POST['comments'] ?? 'No comments')));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ?: 'Not provided';
    $phone = htmlspecialchars(trim($_POST['phone'] ?? 'Not provided'));

    // Email settings
    $to = 'kannasivamps@gmail.com';
    $subject = 'New Error Report';
    $message = "
    <html><body>
    <h2>Error Report</h2>
    <p><strong>Issue:</strong> {$issue}</p>
    <p><strong>Comments:</strong><br>{$comments}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Phone:</strong> {$phone}</p>
    <p><strong>Submitted At:</strong> " . date("Y-m-d H:i:s") . "</p>
    </body></html>";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: Web Contact <noreply@yourdomain.com>\r\n";
    $headers .= "Reply-To: {$email}\r\n";

    // Send mail
    if (mail($to, $subject, $message, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send email.']);
    }

} else {
    http_response_code(403);
    echo 'Access denied';
}
?>
