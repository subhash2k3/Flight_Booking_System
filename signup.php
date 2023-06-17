<?php
// Establish database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'flight';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform any additional validation and sanitization here

    // Insert the user into the database
    $sql = "INSERT INTO users (USERNAME, EMAIL, PASSWORD) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully.";
        // You can redirect the user to a different page if needed
        // header('Location: login.html');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
