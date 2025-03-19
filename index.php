<?php
include ("config/database.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            text-align: center;
        }
        .button {
            margin-top: 20px;
        }
        .button a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<h2 class="mb-3">Welcome !!!</h2>
<div class="button">
    <a href="signup.php" class="btn btn-primary me-2">Signup</a>
    <a href="login.php" class="btn btn-success">Login</a>
</div>
</body>
</html>
