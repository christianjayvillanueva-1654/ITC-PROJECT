<?php
// Run this script once (via browser or CLI) to create a users table
// and add a test user.
// Usage (browser): http://localhost/PanayTales/setup/create_users_table.php
// Usage (CLI): php setup/create_users_table.php

$host = 'localhost';
$user = 'root';
$pass = 'SQLPassword1813';
$db   = 'panaytalesdb';
$port = 3306; // Change to 3307 if your MySQL uses 3307

// If your MySQL uses port 3307 (you used it earlier), set $port = 3307;
// $port = 3307;

$mysqli = new mysqli($host, $user, $pass, $db, $port);
if ($mysqli->connect_error) {
    die('Connect error: ' . $mysqli->connect_error);
}

// Create users table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$mysqli->query($sql)) {
    echo "Error creating table: " . $mysqli->error;
    exit;
}

// Insert a test user if it doesn't exist
$testEmail = 'test@example.com';
$testPasswordPlain = 'password';

$stmt = $mysqli->prepare('SELECT id FROM users WHERE email = ?');
$stmt->bind_param('s', $testEmail);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    $stmt->close();
    $hashed = password_hash($testPasswordPlain, PASSWORD_DEFAULT);
    $ins = $mysqli->prepare('INSERT INTO users (email, password) VALUES (?, ?)');
    $ins->bind_param('ss', $testEmail, $hashed);
    if ($ins->execute()) {
        echo "Inserted test user: $testEmail (password: $testPasswordPlain)\n";
    } else {
        echo "Failed to insert test user: " . $ins->error;
    }
    $ins->close();
} else {
    echo "Test user already exists: $testEmail\n";
    $stmt->close();
}

$mysqli->close();

echo "Done.\n";
?>