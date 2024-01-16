<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login=false;
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "SELECT * FROM `users` WHERE `email` = '$email'AND `password` = '$password'";
    $result = mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result);

    if($num==1){
        $login=true;

    

        session_start();

        $_SESSION['loggedin']= true;
        $_SESSION['email']= $email;

        header('location: welcome.php');

    
    }

    else{

        echo'your acount doest not exists';
    }
}


    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        
<div class="login">
            <form action="login.php" method="post">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>