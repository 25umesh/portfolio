<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Your email
    $to = "pagadojuumesh869@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    // Send Email
    mail($to, $subject, $body);

    // Send WhatsApp (user gets redirected to WhatsApp with message pre-filled)
    $encodedMessage = urlencode($body);
    $whatsappURL = "https://wa.me/919390254712?text=$encodedMessage";

    header("Location: $whatsappURL"); 
    exit;
}
?>
