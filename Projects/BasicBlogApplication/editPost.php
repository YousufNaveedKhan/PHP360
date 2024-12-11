<?php
require_once 'config.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $pdo->prepare("UPDATE posts SET title = :title, content = :content WHERE id = :id");
    $stmt->execute(['title' => $title, 'content' => $content, 'id' => $id]);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - TechTalks Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-pencil-alt"></i> Edit Post</h1>
            <nav>
                <a href="index.php" class="btn back-btn"><i class="fas fa-home"></i> Back to Home</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="editPost.php?id=<?php echo $post['id']; ?>" method="POST">
                <input type="text" name="title" value="<?php echo $post['title']; ?>" required>
                <textarea name="content" required><?php echo $post['content']; ?></textarea>
                <button type="submit" class="btn save-btn"><i class="fas fa-save"></i> Update Post</button>
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
