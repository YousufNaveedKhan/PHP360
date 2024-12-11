<?php
require_once 'config.php';

// Get post ID from URL parameter
$id = $_GET['id'];

// Prepare SQL to delete the post
$stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
$stmt->execute(['id' => $id]);

// Redirect back to the homepage after deletion
header('Location: index.php');
exit;
?>
