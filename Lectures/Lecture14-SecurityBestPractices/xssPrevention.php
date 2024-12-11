<?php
// Sanitize user input to prevent XSS attacks
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['comment']) && !empty($_POST['comment'])) {
        $comment = htmlspecialchars($_POST['comment']); // Prevent XSS by encoding special characters
        echo "User comment: " . $comment;
    } else {
        echo "Comment is required.";
    }
}
?>
<form method="post" action="xssPrevention.php">
    <textarea name="comment" placeholder="Enter your comment"></textarea>
    <button type="submit">Submit</button>
</form>
