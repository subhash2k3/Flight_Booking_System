<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        /* Base styles for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .content {
            text-align: center;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 18px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"] {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        button[type="submit"]:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.3);
            transition: left 0.3s ease;
        }

        button[type="submit"]:hover:before {
            left: 0;
        }

        button[type="submit"]:focus {
            outline: none;
        }

        button[type="submit"]:active {
            transform: translateY(2px);
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Background Animation */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #007bff, #00bfff, #007bff, #00bfff);
            background-size: 400% 400%;
            z-index: -1;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Flight Animation */
        @keyframes flightAnimation {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        .flight {
            position: absolute;
            top: 50%;
            left: -100px;
            transform: translateY(-50%);
            animation: flightAnimation 10s linear infinite;
        }

        .flight img {
            width: 80px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Login</h1>
            <form method="POST" action="welcome.html">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="flight">
            <img src="flight.png" alt="Flight">
        </div>
    </div>
</body>
</html>
