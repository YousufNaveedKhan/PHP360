<?php
// Start a session
session_start();

// Store session data
$_SESSION['username'] = 'TechTalks';
$_SESSION['role'] = 'Admin';

// Retrieve session data
echo "Welcome, " . $_SESSION['username'] . "!";
echo "Your role is: " . $_SESSION['role'];

// Destroy the session
// Uncomment to destroy session data
// session_destroy();
?>
