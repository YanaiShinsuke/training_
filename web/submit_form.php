<?php
// submit_form.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        // Handle error here
        exit('Please fill in all required fields.');
    }

    // Process the form data
    // ... (Your processing logic here)

    // Redirect to the thank you page
    header('Location: thankyou.html');
    exit;
}
?>