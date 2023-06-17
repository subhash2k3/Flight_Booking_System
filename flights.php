<!DOCTYPE html>
<html>
<head>
    <title>Flights</title>
    <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
    <h1>Flights</h1>

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

    // Retrieve the flights from the database
    $query = "SELECT * FROM flights";
    $result = mysqli_query($connection, $query);

    // Check if any flights were found
    if (mysqli_num_rows($result) > 0) {
        echo '<table>';
        echo '<tr><th>Flight ID</th><th>Flight Number</th><th>Origin</th><th>Destination</th><th>Departure Time</th><th>Arrival Time</th><th>Seat Count</th></tr>';

        // Display the flight details in a table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['FLIGHT_ID'] . '</td>';
            echo '<td>' . $row['FLIGHT_NUMBER'] . '</td>';
            echo '<td>' . $row['ORIGIN'] . '</td>';
            echo '<td>' . $row['DESTINATION'] . '</td>';
            echo '<td>' . $row['DEPARTURE_TIME'] . '</td>';
            echo '<td>' . $row['ARRIVAL_TIME'] . '</td>';
            echo '<td>' . $row['SEAT_COUNT'] . '</td>';
            echo '<td><a href="book.php?flight_id=' . $row['FLIGHT_ID'] . '">Book</a></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No flights found.';
    }

    // Close the database connection
    mysqli_close($connection);

    // Function to format the time value
   
    ?>

    <!-- Your remaining HTML code goes here -->

</body>
</html>
