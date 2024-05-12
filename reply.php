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
foreach ($messages as $i => $message) {
    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare("SELECT name, surname, content FROM replies WHERE message_id = ? ORDER BY created_at DESC");
    $stmt->execute([$message['id']]);

    // Fetch all of the remaining rows in the result set
    $replies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Add the replies to the message
    $messages[$i]['replies'] = $replies;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message_id = $_POST['message_id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $content = $_POST['content'];
    $created_at = date('Y-m-d H:i:s'); // Current date and time

    // Prepare SQL INSERT statement
    $sql = "INSERT INTO replies (message_id, name, surname, content, created_at) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $message_id, $name, $surname, $content, $created_at);
    $stmt->execute();

    // Redirect back to the discussion section in home.php
    header('Location: home.php#discussion');
    exit();
}
?>