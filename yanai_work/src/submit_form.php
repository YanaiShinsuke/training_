<?php
// submit_form.php

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Retrieve form data
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        // Handle error here
        exit('Please fill in all required fields.');
    }

    // Process the form data
    // ... (Your processing logic here)

    // Redirect to the thank you page
    header('Location: thankyou.php');
    exit;
}
?>