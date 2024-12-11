<?php
require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    $stmt->execute(['title' => $title, 'content' => $content]);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post - TechTalks Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-edit"></i> Create New Post</h1>
            <nav>
                <a href="index.php" class="btn back-btn"><i class="fas fa-home"></i> Back to Home</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="createPost.php" method="POST">
                <input type="text" name="title" placeholder="Post Title" required>
                <textarea name="content" placeholder="Write your post..." required></textarea>
                <button type="submit" class="btn save-btn"><i class="fas fa-save"></i> Save Post</button>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 TechTalksOfficial. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
