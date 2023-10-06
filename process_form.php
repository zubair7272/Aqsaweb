<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted email address
    $email = $_POST['business-email'];

    // Validate the email address (you can add more validation)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address");
    }

    // Send an email
    $to = "mdadnans545@gmail.com";
    $subject = "New email submission";
    $message = "Email: " . $email;
    $headers = "From: webmaster@example.com";

    // Use the mail() function to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    // Handle the case where the form was not submitted via POST
    echo "Form was not submitted.";
}
?>
