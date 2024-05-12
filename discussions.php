<?php
$db_host = 'localhost'; // Replace with your host
$db_user = 'root'; // Replace with your username
$db_pass = ''; // Replace with your password
$db_name = 'Discussion'; // Replace with your database name

// Create a new mysqli instance and connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $content = $_POST['message'];
    $created_at = date('Y-m-d H:i:s'); // Current date and time

    // Prepare SQL INSERT statement
    $sql = "INSERT INTO messages (name, surname, content, created_at) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $surname, $content, $created_at);
    $stmt->execute();

    // Redirect back to the discussion section in home.php
    header('Location: home.php#discussion');
    exit();
}
?>