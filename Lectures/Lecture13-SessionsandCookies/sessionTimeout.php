<?php
session_start();

// Set a session timeout limit (e.g., 5 minutes)
$timeout = 300; 

// Check if the timeout variable is set
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout) {
    session_unset(); // Clear session variables
    session_destroy(); // Destroy the session
    echo "Session expired. Please log in again.";
} else {
    $_SESSION['last_activity'] = time(); // Update last activity time
    echo "Session is active.";
}
?>
