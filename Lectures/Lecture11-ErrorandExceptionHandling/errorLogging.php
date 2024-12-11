<?php
// Error Logging Example
ini_set("log_errors", 1);
ini_set("error_log", "errors.log");

// Trigger an error
echo 10 / 0;

// Check errors.log for the logged error
?>
