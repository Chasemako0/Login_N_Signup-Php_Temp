
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="demo_data";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){

    echo ("<p role='alert' id='alertBox' class='alert alert-danger'>Connection failed to establish</p>".$conn->connect_error);
}else{

//        echo("<p  role='alert' id='alertBox' class='alert alert-success'>Connected Successfully</p>");
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
