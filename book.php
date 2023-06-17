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

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['flight_id'])) {
    $flightId = $_GET['flight_id'];

    // Retrieve the flight details from the database
    $query = "SELECT * FROM flights WHERE FLIGHT_ID = '$flightId'";
    $result = mysqli_query($connection, $query);

    // Check if the flight exists
    if (mysqli_num_rows($result) > 0) {
        $flight = mysqli_fetch_assoc($result);

        // Process the flight booking here
        // Add your booking logic

        // Insert booked flight details into the booked_flights table
        $insertQuery = "INSERT INTO booked_flights (FLIGHT_ID, ORIGIN, DESTINATION, DEPARTURE_TIME, ARRIVAL_TIME, SEAT_COUNT) 
                        VALUES ('{$flight['FLIGHT_ID']}', '{$flight['ORIGIN']}', '{$flight['DESTINATION']}', '{$flight['DEPARTURE_TIME']}', '{$flight['ARRIVAL_TIME']}', '{$flight['SEAT_COUNT']}')";
        $insertResult = mysqli_query($connection, $insertQuery);

        if ($insertResult) {
            // Booking successful
            echo "Flight booked successfully!";
        } else {
            // Booking failed
            echo "Failed to book the flight.";
        }
    } else {
        // Flight not found
        echo "Flight not found.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($connection);
?>

<!-- HTML code for the home button -->
<a href="index.php">Home</a>
