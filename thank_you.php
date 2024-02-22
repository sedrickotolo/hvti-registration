<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom styles if needed -->
    <style>
        body {
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px;
        }
        .emoji {
            font-size: 50px;
            animation: dance 2s infinite;
        }
        @keyframes dance {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Thanks for submitting your application!</h1>
        <p>We shall get back to you in time.</p>
        <!-- Dancing emoji -->
        <div class="emoji">&#x1F609;</div>
        <!-- Add a funny thank you sticker or any other content -->
        <!-- <img class="mt-3" src="funny_thank_you_sticker.png" alt="Funny Thank You Sticker" style="max-width: 100%;"> -->
        <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            // Redirect to the index page after 5 seconds
            setTimeout(function () {
                window.location.href = "index.php";
            }, 5000);
        </script>
    </div>
</body>
</html>
