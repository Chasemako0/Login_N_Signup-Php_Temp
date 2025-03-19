<?php

include ("config/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">LOGIN</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <form action="h_login.php" method="post" class="p-4 border rounded bg-light shadow">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="l_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="l_pword" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3">Don't have an account?
                <a href="signup.php">Signup</a>

                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
