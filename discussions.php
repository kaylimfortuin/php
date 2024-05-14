<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';
    $db   = 'Discussion';
    $user = 'root';
    $pass = '';

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $content = $_POST['message'];

    // Prepare SQL INSERT statement
    $sql = "INSERT INTO messages (name, surname, content) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $surname, $content]);

    // Redirect back to the discussion section in home.php
    header('Location: home.php#discussion');
    exit();
}
?>
