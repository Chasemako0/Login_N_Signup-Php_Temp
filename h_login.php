<?php
session_start();
global $conn;
include ("config/database.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .fade-out{
            opacity:0;
            transition: opacity 0.4s ease-out;
        }
    </style>
</head>
<body>
<script>
    setTimeout(() =>{
        document.getElementById("alertBox").classList.add("fade-out");
        setTimeout(() =>{
            document.getElementById("alertBox").style.display="none";
        },500);
    },1000);
</script>
</body>
</html>
<?php

$l_name=$_POST["l_name"] ;
$l_pword=$_POST["l_pword"];


if(isset($_POST["login"])){
    $sql=$conn->prepare("SELECT * FROM users WHERE username=?");
    $sql->bind_param("s",$l_name);
    $sql->execute();
    $result=$sql->get_result();


    if($row=mysqli_fetch_assoc($result)) {
        if (password_verify($l_pword,$row["password"])) {
            $_SESSION["username"]=$l_name;
            $_SESSION["user_id"]=$row["id"];


            echo ("<p role='alert' id='alertBox' class='alert alert-success'>Login successful</p>");
            echo ("<script> setTimeout(function (){window.location.href='home.php'; },2000)</script>");
            exit();
        }
        echo("<p role='alert' id='alertBox' class='alert alert-danger'>Invalid Username or Password</p>");
        echo ("<script> setTimeout(function (){window.location.href='login.php';},1500)</script>");
        exit();

    }
    $sql->close();
    $conn->close();
}

?>


