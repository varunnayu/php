<?php
// contact.php - Handles form submission and sends email

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and validate form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Send email
    $to = "youremail@example.com";  // Change to your email
    $subject = "New Message from Portfolio Website";
    $body = "Name: $name\nEmail: $email\n\nMessage: $message";
    $headers = "From: $email";

    // Send email and redirect to thank you page
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thankyou.php");
        exit;
    } else {
        echo "There was an error sending your message.";
    }
}
?>
