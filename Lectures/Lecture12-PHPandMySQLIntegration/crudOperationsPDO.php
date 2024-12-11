<?php  
try {  
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");  
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    // Create  
    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");  
    $stmt->execute(['name' => 'TechTalks', 'email' => 'techtalksofficial@example.com']);  
    echo "New record created successfully<br>";  

    // Read  
    $stmt = $pdo->query("SELECT * FROM users");  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";  
    }  

    // Update  
    $stmt = $pdo->prepare("UPDATE users SET email=:email WHERE id=:id");  
    $stmt->execute(['email' => 'updated@example.com', 'id' => 1]);  
    echo "Record updated successfully<br>";  

    // Delete  
    $stmt = $pdo->prepare("DELETE FROM users WHERE id=:id");  
    $stmt->execute(['id' => 1]);  
    echo "Record deleted successfully<br>";  

    $pdo = null;  
} catch (PDOException $e) {  
    echo "Error: " . $e->getMessage();  
}  
?>  
