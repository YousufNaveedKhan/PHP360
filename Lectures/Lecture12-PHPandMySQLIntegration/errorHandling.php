<?php  
$conn = new mysqli("localhost", "root", "", "test_db");  

if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

$sql = "SELECT * FROM nonexistent_table";  
if (!$result = $conn->query($sql)) {  
    error_log("Error: " . $conn->error . "\n", 3, "errors.log");  
    echo "Error occurred. Check log for details.<br>";  
}  

$conn->close();  
?>  
