<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "janudakodi@gmail.com";
    $headers = "From: $email"; // corrected the headers
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent";
    } else {
        echo "Email sending failed";
    }
}
?>
