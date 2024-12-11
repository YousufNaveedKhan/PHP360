<?php
// Custom Error Handler Example
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Error [$errno]: $errstr in $errfile on line $errline\n";
    return true; // Prevents PHP's default error handler
}

set_error_handler("customErrorHandler");

// Trigger an error
echo 10 / 0; // Division by zero
?>
