<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Signup</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Signup</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <form action="h_signup.php" method="post" class="p-4 border rounded bg-light shadow">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="u_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="p_word" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_p_word" class="form-control" required>
                </div>
                <button type="submit" name="signup" class="btn btn-primary w-100">Signup</button>
                <p class="text-center mt3">Already have an account?
                <a href="login.php" >Login</a>
                </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>


