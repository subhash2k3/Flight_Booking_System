<!DOCTYPE html>
<html>
<head>
    <title>Remove Flight</title>
    <style>
        /* Base styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
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
        <h1>Remove Flight</h1>
        <div class="button-container">
            <a href="admin.php" class="button">Back to Dashboard</a>
        </div>
        <h2>All Flights</h2>
        <table>
            <thead>
                <tr>
                    <th>Flight ID</th>
                    <th>Flight Number</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Seat Count</th>
                    <th>Action</th>
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

                // Retrieve all flights from the database
                $query = "SELECT * FROM flights";
                $result = mysqli_query($connection, $query);

                // Check if any flights were found
                if (mysqli_num_rows($result) > 0) {
                    // Display the flights dynamically
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['FLIGHT_ID'] . "</td>";
                        echo "<td>" . $row['FLIGHT_NUMBER'] . "</td>";
                        echo "<td>" . $row['ORIGIN'] . "</td>";
                        echo "<td>" . $row['DESTINATION'] . "</td>";
                        echo "<td>" . $row['DEPARTURE_TIME'] . "</td>";
                        echo "<td>" . $row['ARRIVAL_TIME'] . "</td>";
                        echo "<td>" . $row['SEAT_COUNT'] . "</td>";
                        echo "<td><a href='delete_flight.php?id=" . $row['FLIGHT_ID'] . "'>Remove</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
