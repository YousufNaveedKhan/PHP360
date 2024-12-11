<?php
// Start a secure session
session_start();

// Regenerate session ID to prevent session fixation
session_regenerate_id(true);

// Store data
$_SESSION['secure_data'] = "Sensitive Information";

// Use HTTPS and HttpOnly flags in cookies
ini_set('session.cookie_secure', 1); // Secure flag
ini_set('session.cookie_httponly', 1); // HttpOnly flag

echo "Secure session data: " . $_SESSION['secure_data'];
?>
