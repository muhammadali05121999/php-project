<?php



$server = "localhost";  // Change this to your database server name
$username = "root";  // Change this to your database username
$password = "";  // Change this to your database password
$database_name = "users";  // Change this to your database name

// Create connection

$conn =  mysqli_connect($server,$username,$password,$database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// echo "Connected successfully";

// Now you can perform database operations using $conn

// Don't forget to close the connection when you're done


?>








