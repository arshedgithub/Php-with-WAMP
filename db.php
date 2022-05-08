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

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn, $sql);

$employee = mysqli_fetch_assoc($result);
var_dump($employee);

echo($employee['id']);
echo($employee['name']);
echo($employee['age']);
echo($employee['gender']);
?>