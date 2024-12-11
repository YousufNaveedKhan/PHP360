<?php
require_once 'config.php';
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechTalks Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-microphone"></i> TechTalks Blog Application</h1>
            <nav>
                <a href="createPost.php" class="btn create-post-btn"><i class="fas fa-plus-circle"></i> Create Post</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <?php if ($posts): ?>
                <ul class="post-list">
                    <?php foreach ($posts as $post): ?>
                        <li>
                            <div class="post-card">
                                <h2><a href="post.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                                <p><?php echo substr($post['content'], 0, 150); ?>...</p>
                                <span><i class="fas fa-clock"></i> <?php echo $post['created_at']; ?></span>
                                <div class="post-actions">
                                    <a href="editPost.php?id=<?php echo $post['id']; ?>" class="edit-btn"><i class="fas fa-pencil-alt"></i> Edit</a>
                                    <a href="deletePost.php?id=<?php echo $post['id']; ?>" class="delete-btn" onclick="return confirmDelete()"><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="no-posts">
                    <div class="card">
                        <p>No blog posts available</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 TechTalksOfficial. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Confirmation for Deleting a Post
        function confirmDelete() {
            return confirm("Are you sure you want to delete this post?");
        }
    </script>
</body>
</html>
