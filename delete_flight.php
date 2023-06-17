<?php
// Assuming you have already established a database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'flight';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the flight ID is provided in the URL
if (isset($_GET['id'])) {
    $flightId = $_GET['id'];

    // Remove the flight from the database
    $query = "DELETE FROM flights WHERE FLIGHT_ID = $flightId";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Flight removed successfully
        echo "Flight with ID $flightId has been successfully removed.";
    } else {
        // Failed to remove the flight
        echo "Failed to remove the flight with ID $flightId.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    
    <a href="remove_flight.php">Home</a>
</body>
</html>
