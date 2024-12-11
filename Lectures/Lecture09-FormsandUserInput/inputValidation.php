<?php
// Validate form input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($name) || empty($email)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } else {
        echo "Validation passed. Name: $name, Email: $email";
    }
}
?>
