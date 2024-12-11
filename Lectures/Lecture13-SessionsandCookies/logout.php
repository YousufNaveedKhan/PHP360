<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

echo "You have been logged out.";
header("Location: login.php"); // Redirect to login page
exit;
?>
