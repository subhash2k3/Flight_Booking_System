<?php
// Database connection configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'flight';

// Establish database connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flightNumber = $_POST['flight_number'];
    $departureDate = $_POST['departure_date'];
    $departureTime = $_POST['departure_time'];
    $destination = $_POST['destination'];

    // Construct the SQL query to insert the flight data into the database
    $sql = "INSERT INTO flights (flight_number, departure_date, departure_time, destination) 
            VALUES ('$flightNumber', '$departureDate', '$departureTime', '$destination')";

    if (mysqli_query($conn, $sql)) {
        echo "Flight inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
