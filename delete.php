<?php
$host = 'localhost';
$db   = 'resources';
$user = 'root';
$pass = '';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Get the file id
$id = $_GET['id'];

// Delete the file from the database
$stmt = $pdo->prepare("DELETE FROM files WHERE id = ?");
$stmt->execute([$id]);

// TODO: Delete the file from the server

header("Location: home.php#resources");
?>