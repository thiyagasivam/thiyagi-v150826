<?php

if($_POST) {
  // Sanitize input data
  $to = "support@thiyagi.com";
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $service = filter_var($_POST["service"], FILTER_SANITIZE_STRING);
  $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);

  // Validate required fields
  if (empty($name) || empty($email) || empty($message)) {
    $output = json_encode(array('success' => false, 'message' => 'Please fill in all required fields.'));
    die($output);
  }

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $output = json_encode(array('success' => false, 'message' => 'Please enter a valid email address.'));
    die($output);
  }

  $subject = 'Thiyagi Contact Form Submission';
  $cc = 'kannasivamp@gmail.com';
  $bcc = 'kannasivamps@gmail.com';
  
  $body = "New Contact Form Submission\n\n";
  $body .= "Name: $name\n";
  $body .= "Phone: $phone\n";
  $body .= "Email: $email\n";
  $body .= "Service Interested: $service\n";
  $body .= "Message:\n$message\n";
  $body .= "Date: " . date('Y-m-d H:i:s') . "\n";
  $body .= "IP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
 
  // Set proper headers with validation
  $headers = array();
  $headers[] = "From: Thiyagi Contact <noreply@thiyagi.com>";
  $headers[] = "Reply-To: $name <$email>";
  $headers[] = "Cc: $cc";
  $headers[] = "Bcc: $bcc";
  $headers[] = "X-Mailer: PHP/" . phpversion();
  $headers[] = "MIME-Version: 1.0";
  $headers[] = "Content-Type: text/plain; charset=UTF-8";
  
  $headers_string = implode("\r\n", $headers);

  // Always save to log file first (backup method)
  $log_entry = date('Y-m-d H:i:s') . " - Contact Form Submission\n";
  $log_entry .= "Name: $name\n";
  $log_entry .= "Phone: $phone\n";
  $log_entry .= "Email: $email\n";
  $log_entry .= "Service: $service\n";
  $log_entry .= "Message: $message\n";
  $log_entry .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
  $log_entry .= str_repeat("-", 50) . "\n\n";
  
  $log_saved = @file_put_contents('contact_submissions.log', $log_entry, FILE_APPEND | LOCK_EX);

  // Try to send email
  $mail_sent = @mail($to, $subject, $body, $headers_string);
  
  if ($mail_sent) {
    // Email sent successfully
    header("Location: thank-you.html");
    exit();
  } else {
    // Email failed but we have a backup log
    if ($log_saved) {
      // Redirect to thank you page anyway since we logged the submission
      header("Location: thank-you.html");
      exit();
    } else {
      // Both email and log failed
      $output = json_encode(array(
        'success' => false, 
        'message' => 'Technical issue occurred. Please email us directly at support@thiyagi.com or try again later.'
      ));
      die($output);
    }
  }
}

?>