<?php
$to = "sourabhsinghbais52@gmail.com";
$subject = "XAMPP Gmail SMTP Test";
$message = "Hello! This is a test email sent using Gmail SMTP with sendmail in XAMPP.";
$headers = "From: sourabhsinghbais52@gmail.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
