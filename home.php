<?php
include ("session_check.php");
include  ("config/database.php")

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Landing Page</title>
</head>
<body>
<h2 class="mb-3  text-center"> Welcome <?php echo $_SESSION["username"] ?> To Your Home Page</h2>
<p class="text-center mt3">I want to logout
    <a href="logout.php" >Logout</a>
</p>
</body>
</html>
