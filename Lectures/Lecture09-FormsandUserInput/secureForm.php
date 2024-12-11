<?php
// Secure form handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Username and password are required.";
    } else {
        echo "Secure handling successful. Username: $username";
        // Note: Do not echo sensitive data like passwords in production.
    }
}
?>
