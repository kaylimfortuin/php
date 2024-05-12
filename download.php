<?php
$host = 'localhost';
$db   = 'resources';
$user = 'root';
$pass = '';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the file data
    $stmt = $pdo->prepare("SELECT name, type, data FROM files WHERE id = ?");
    $stmt->execute([$id]);
    $file = $stmt->fetch();

    if ($file) {
        // Send the file to the browser
        header("Content-Type: " . $file['type']);
        header("Content-Disposition: attachment; filename=" . $file['name']);
        echo $file['data'];
    } else {
        echo "File not found.";
    }
} else {
    echo "No file ID.";
}