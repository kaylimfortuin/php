<?php
session_start();
include 'db_connection.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL query to select username and password from users table
    $sql = "SELECT username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Check if username exists in the database
    if ($row) {
        $stored_username = $row['username'];
        $stored_hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $stored_hashed_password)) {
            // Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = true;
            // Redirect to index.php
            header("Location: home.php");
            exit;
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "User not found.";
    }

    // Close prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>