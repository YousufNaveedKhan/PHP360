<?php
// Session example
session_start();
$_SESSION['session_example'] = "This data is stored on the server.";

// Cookie example
setcookie("cookie_example", "This data is stored in the browser.", time() + 3600, "/");

// Display both
echo "Session: " . $_SESSION['session_example'] . "<br>";
echo "Cookie: " . ($_COOKIE['cookie_example'] ?? 'Cookie not set');
?>
