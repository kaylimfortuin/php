<?php
$host = 'localhost';
$db   = 'contact';
$user = 'root';
$pass = '';

// Create a new PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert the form data into the database
    $stmt = $pdo->prepare("INSERT INTO contact (first_name, last_name, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$firstName, $lastName, $email, $subject, $message]);

    // Send an email
    $to = 'kaylim.fortuin@icloud.com, kyle11jan@gmail.com, mahlakanye18@gmail.com';
    $subject = 'New contact form submission';
    $message = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nSubject: $subject\nMessage: $message";
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    // Redirect back to the form page
    header('Location: home.php#contact');
    exit;
}