<?php

global $conn;
include("config/database.php");

$uname=$_POST["u_name"];
$email=$_POST["email"];
$pword=$_POST["p_word"];
$confirm_p_word=$_POST["confirm_p_word"];

if (isset($_POST["signup"])){

    if($pword==$confirm_p_word) {
        $hashed_password = password_hash($pword, PASSWORD_DEFAULT);
        $sql=$conn->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?)");
       $sql->bind_param("sss",$uname,$email,$hashed_password);
        $result=$sql->execute();
        header("location:./login.php");
        echo("<p role='alert' id='alertBox' class='alert alert-success'>Users Successfully Registered</p>");
        exit();

    }else{

        echo ("<p role='alert' id='alertBox' class='alert alert-danger'>Passwords do not match</p>");
        echo ("<script> setTimeout(function (){window.location.href='signup.php';},2000)</script>");


    }
}else{

//        header("location:./signup.php");
        echo ("<p role='alert' id='alertBox' class='alert alert-danger'>Registration Failed</p>");
        echo ("<script> setTimeout(function (){window.location.href='signup.php';},2000)</script>");

        exit();

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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


