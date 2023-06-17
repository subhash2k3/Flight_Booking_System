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

// Retrieve the values from the form
$flightNumber = $_POST['flight_number'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$departureTime = $_POST['departure_time'];
$arrivalTime = $_POST['arrival_time'];
$seatCount = $_POST['seat_count'];

// Prepare the SQL statement to insert the flight into the database
$query = "INSERT INTO flights (FLIGHT_NUMBER, ORIGIN, DESTINATION, DEPARTURE_TIME, ARRIVAL_TIME, SEAT_COUNT) 
          VALUES ('$flightNumber', '$origin', '$destination', '$departureTime', '$arrivalTime', '$seatCount')";

// Execute the query
if (mysqli_query($connection, $query)) {
    echo "Flight added successfully.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>
