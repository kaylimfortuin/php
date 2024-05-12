<?php
$host = 'localhost';
$db   = 'resources';
$user = 'root';
$pass = '';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $module = $_POST['Modules'];
    $file = $_FILES['myfile'];

    // Check if file was uploaded without errors
    if ($file['error'] == 0) {
        // Check if file is bigger than 1MB
        if ($file['size'] > 1 * 1024 * 1024) {
            echo "The file is too big.";
            exit;
        }

        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileData = file_get_contents($file['tmp_name']);

        // Check if file is a PDF
        if ($fileType == 'application/pdf') {
            // Insert the file name, type, and data into the database
            $stmt = $pdo->prepare("INSERT INTO files (name, type, data, module) VALUES (?, ?, ?, ?)");
            $stmt->execute([$fileName, $fileType, $fileData, $module]);

            // Redirect back to the form page
            header('Location: home.php#resources');
            exit;
        } else {
            echo "Only PDF files are allowed.";
        } 
    } else {
        echo "An error occurred while uploading the file.";
    }
}