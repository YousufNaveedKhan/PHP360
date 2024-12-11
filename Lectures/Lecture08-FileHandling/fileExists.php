<?php
$filePath = "example.txt";

// Check if the file exists
if (file_exists($filePath)) {
    echo "The file exists.";
} else {
    echo "The file does not exist.";
}
?>
