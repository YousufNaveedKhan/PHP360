<?php
// Read file using file_get_contents()
$filePath = "example.txt";

if (file_exists($filePath)) {
    $content = file_get_contents($filePath);
    echo "File Content:\n";
    echo nl2br($content); // nl2br to handle new lines in browser
} else {
    echo "File does not exist.";
}
?>
