<?php
require_once 'config.php';

// Get post ID from URL parameter
$id = $_GET['id'];

// Fetch the post from the database
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(['id' => $id]);
$post = $stmt->fetch();

// Check if post exists
if (!$post) {
    // Redirect if post is not found
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?> - TechTalks Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
        <h1><i class="fas fa-microphone"></i> TechTalks Blog Application</h1>
        <nav>
                <a href="index.php" class="btn back-btn"><i class="fas fa-home"></i> Back to Home</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="post-card">
                <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                <p class="post-date"><i class="fas fa-clock"></i> Published on <?php echo date('F j, Y', strtotime($post['created_at'])); ?></p>

                <!-- Three Dots for Edit/Delete -->
                <div class="three-dots">
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="dropdown">
                    <a href="editPost.php?id=<?php echo $post['id']; ?>">Edit</a>
                    <a href="deletePost.php?id=<?php echo $post['id']; ?>" class="delete-post">Delete</a>
                </div>

                <div class="post-content">
                    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 TechTalksOfficial. All rights reserved.</p>
        </div>
    </footer>

    <!-- Confirmation for Post Deletion -->
    <script>
        const deleteLinks = document.querySelectorAll('.delete-post');
        deleteLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                if (confirm('Are you sure you want to delete this post?')) {
                    window.location.href = this.href;
                }
            });
        });

        // Show dropdown menu on three dots click
        const threeDots = document.querySelector('.three-dots');
        const dropdown = document.querySelector('.dropdown');
        
        threeDots.addEventListener('click', function() {
            dropdown.classList.toggle('show');
        });
    </script>
</body>
</html>
