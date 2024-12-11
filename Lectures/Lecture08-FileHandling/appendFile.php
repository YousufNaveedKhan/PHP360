<?php
$filePath = "example.txt";
$appendContent = "This is an appended line.\n";

// Append content to the file
if (file_put_contents($filePath, $appendContent, FILE_APPEND)) {
    echo "Content appended successfully.";
} else {
    echo "Failed to append to the file.";
}
?>
