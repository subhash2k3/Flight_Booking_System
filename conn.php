<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection configuration
    $host = 'localhost';
    $dbname = 'flight_booking';
    $username = 'your_username';
    $password = 'your_password';

    try {
        // Create a new PDO instance
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        // Set PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Perform user authentication logic here (e.g., check credentials against the database)
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If authentication is successful, set the user's session
        if ($user) {
            $_SESSION['username'] = $user['username'];
            // Redirect to the dashboard or desired page
            header('Location: dashboard.php');
            exit();
        } else {
            // Authentication failed
            // Handle error, display error message, etc.
            echo 'Login failed';
        }
    } catch (PDOException $e) {
        // Handle database connection error
        echo 'Database Error: ' . $e->getMessage();
    }
}
?>

<!-- login.html -->
<form method="POST" action="login.php">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
