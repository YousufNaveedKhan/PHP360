<?php
// Sanitize form input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = trim($_POST['comment']); // Remove whitespace
    $sanitizedComment = htmlspecialchars($comment);

    if (empty($sanitizedComment)) {
        echo "Comment cannot be empty.";
    } else {
        echo "Sanitized comment: $sanitizedComment";
    }
}
?>
