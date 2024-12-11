<?php
$filePath = "example.txt";
$content = "This is the first line written to the file.\n";

// Write content to the file
if (file_put_contents($filePath, $content)) {
    echo "File written successfully.";
} else {
    echo "Failed to write to file.";
}
?>
