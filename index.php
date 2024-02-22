<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)),url('imgs/c.jfif') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .hero-content {
            text-align: center;
        }
        .registration-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #8B0000;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="hero-content">
        <h1>Welcome to Our Event</h1>
        <p>Join us by registering now!</p>
        <a href="registration.php" class="registration-button">Register</a>
    </div>
</body>
</html>
