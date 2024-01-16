<?php

//    session_start();

  //  if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){

//    header('location:welcome.php');






  //  }

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location: welcome.php');
    exit(); // Add this line to stop script execution after the redirect
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    
<h1> you are sucssfuly login </h1>


<form method="post" action="">
        <input type="submit" name="logout" value="Logout">
    </form>

<?php



if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the welcome page or login page
    header('location: login.php');
    exit();
}
?>





</body>
</html>