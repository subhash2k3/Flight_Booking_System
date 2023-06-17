<!DOCTYPE html>
<html>
<head>
    <title>Add Flight</title>
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

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="date"], input[type="time"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button-container {
            text-align: right;
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Flight</h1>
        <form action="process_add_flight.php" method="POST">
            <label for="flight_number">Flight Number:</label>
            <input type="text" name="flight_number" id="flight_number" required>
            <label for="origin">Origin:</label>
            <input type="text" name="origin" id="origin" required>
            <label for="destination">Destination:</label>
            <input type="text" name="destination" id="destination" required>
            <label for="departure_time">Departure Time:</label>
            <input type="text" name="departure_time" id="departure_time" required>
            <label for="arrival_time">Arrival Time:</label>
            <input type="text" name="arrival_time" id="arrival_time" required>
            <label for="seat_count">Seat Count:</label>
            <input type="number" name="seat_count" id="seat_count" min="1" required>
            <div class="button-container">
                <input type="submit" value="Add Flight" class="button">
            </div>
        </form>
    </div>
</body>
</html>
