<?php
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Get the logged-in user's username
$username = $_SESSION['username'];

// Display a welcome message with the username
echo "Welcome, $username! This is your dashboard.";

// You can add your desired content and functionality for the dashboard here

// Provide an option to log out
echo '<a href="logout.php">Logout</a>';
?>
