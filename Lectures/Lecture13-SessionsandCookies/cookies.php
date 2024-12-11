<?php
// Set a cookie
setcookie("user", "TechTalks", time() + 3600, "/"); // Expires in 1 hour

// Check if the cookie exists
if (isset($_COOKIE['user'])) {
    echo "Cookie Value: " . $_COOKIE['user'];
} else {
    echo "Cookie not set!";
}

// Delete the cookie
// Uncomment to delete the cookie
// setcookie("user", "", time() - 3600, "/");
?>
