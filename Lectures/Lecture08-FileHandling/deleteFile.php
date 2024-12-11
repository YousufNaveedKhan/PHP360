<?php
$filePath = "example.txt";

// Delete the file if it exists
if (file_exists($filePath)) {
    if (unlink($filePath)) {
        echo "File deleted successfully.";
    } else {
        echo "Failed to delete the file.";
    }
} else {
    echo "File does not exist.";
}
?>
