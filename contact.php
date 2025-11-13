<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to      = "cnajera875@gmail.com";  // 🔹 replace with your real email
    $subject = "New Message from Portfolio Contact Form";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Thank you $name, your message has been sent!";
    } else {
        echo "❌ Sorry, something went wrong. Please try again.";
    }
}
?>
