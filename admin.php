<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        /* Base styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://images.pexels.com/photos/2026324/pexels-photo-2026324.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .button-container {
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .button-right {
            text-align: right;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="button-container">
            <a href="add_flight.php" class="button">Add Flight</a>
            <a href="remove_flight.php" class="button">Remove Flight</a>
        </div>
        <div class="button-right">
            <a href="index.php" class="button">Logout</a>
        </div>
        <h2>All Booked Flights</h2>
        <table>
            <thead>
                <tr>
                    <th>Flight ID</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Seat Count</th>
                </tr>
            </thead>
            <tbody>
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

                // Retrieve the booked flights from the database
                $query = "SELECT * FROM booked_flights";
                $result = mysqli_query($connection, $query);

                // Check if any flights were found
                if (mysqli_num_rows($result) > 0) {
                    // Display the booked flights dynamically
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['FLIGHT_ID'] . "</td>";
                        echo "<td>" . $row['ORIGIN'] . "</td>";
                        echo "<td>" . $row['DESTINATION'] . "</td>";
                        echo "<td>" . $row['DEPARTURE_TIME'] . "</td>";
                        echo "<td>" . $row['ARRIVAL_TIME'] . "</td>";
                        echo "<td>" . $row['SEAT_COUNT'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No flights booked.</td></tr>";
                }

                // Close the database connection
                mysqli_close($connection);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
