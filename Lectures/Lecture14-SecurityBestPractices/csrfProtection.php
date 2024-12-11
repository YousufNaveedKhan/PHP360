<?php
session_start();

// Generate CSRF token if not already present
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32)); // Secure token generation
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the submitted CSRF token matches the stored one
    if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
        echo "Form submitted successfully!";
    } else {
        echo "CSRF token mismatch. Form submission failed.";
    }
}
?>
<form method="post" action="csrfProtection.php">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    <button type="submit">Submit Form</button>
</form>
