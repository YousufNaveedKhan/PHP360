<?php
// Exception Handling Example
try {
    if (!file_exists("example.txt")) {
        throw new Exception("File not found!");
    }
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "\n";
}
?>
