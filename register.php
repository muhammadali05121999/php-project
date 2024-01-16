<?php
include 'dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $exists = false;

    // Check if the username already exists in the database
    $check_query = "SELECT * FROM `users` WHERE `username` = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if ($check_result) {
        if (mysqli_num_rows($check_result) > 0) {
            $exists = true;
            echo "Username already exists.";
        }
    } else {
        echo "Error checking username: " . mysqli_error($conn);
    }

    if (!$exists) {
        // If the username doesn't exist, insert the new user data
        $sql = "INSERT INTO `users` (`username`, `email`, `password`) 
                VALUES ('$username', '$email', '$password')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Welcome";
            header("location:login.php");

        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form action="register.php" method="POST"> 
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="username" placeholder="User name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Sign up</button>
            </form>
        </div>

    
    </div>
</body>
</html>

