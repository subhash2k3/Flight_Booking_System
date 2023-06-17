<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // User not logged in, redirect to login page
    header('Location: account.php');
    exit();
}

// Retrieve user details from the session
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Display user information
echo "User ID: $user_id<br>";
echo "Username: $username<br>";

// Add the rest of your account page content here
?>
