<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["_u981715026397738430"]["first"];
    $lastName = $_POST["_u981715026397738430"]["last"];
    $email = $_POST["_u320771058451286466"];
    $company = $_POST["_u507831107891293263"];
    $message = $_POST["_u409603068534029829"];
    
    // Set up email parameters
    $to = "natigreat54@gmail.com";  // Change this to your email address
    $subject = "New Form Submission";
    $body = "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Company: $company\n";
    $body .= "Message:\n$message\n";
    
    // Set headers
    $headers = "From: webmaster@example.com";  // Change this to your email or use a valid domain-based email
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Form submission method not allowed.";
}
?>
