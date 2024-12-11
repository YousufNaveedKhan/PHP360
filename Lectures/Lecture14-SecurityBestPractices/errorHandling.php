<?php
// Handle errors securely using try-catch blocks
try {
    // Simulate an error (e.g., wrong database connection details)
    $pdo = new PDO("mysql:host=invalid_host;dbname=invalid_db", "invalid_user", "invalid_pass");
} catch (PDOException $e) {
    // Log the error to a file instead of displaying it
    error_log($e->getMessage(), 3, "error_log.txt");
    echo "An error occurred. Please try again later.";
}
?>
