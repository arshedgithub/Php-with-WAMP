<?php  
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "earth";

// create connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection 
if(!$conn){
    die("connection failed");
}

?>