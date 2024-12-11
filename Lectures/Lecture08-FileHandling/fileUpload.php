<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['file']['name']);
    $targetFilePath = $uploadDir . $fileName;

    // Ensure the uploads directory exists
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Check if the file is uploaded
    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
        echo "The file " . htmlspecialchars($fileName) . " has been uploaded successfully.";
    } else {
        echo "There was an error uploading the file.";
    }
} else {
    echo "Invalid request method.";
}
?>
