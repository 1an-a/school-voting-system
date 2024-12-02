<?php
// dbConnect.php

// Database connection parameters
$dsn = "mysql:host=localhost;dbname=new-voting"; // Modify with your DB details
$user = "root";
$pass = "";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error handling
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch as associative array
];

try {
    // Create PDO instance and store it in $pdo
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
