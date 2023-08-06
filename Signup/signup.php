<?php
$servername = "localhost";
$username = "root";
$password = "chirag";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['username'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

// insert data into database
$sql = "INSERT INTO `amici`.`customer` (`customer_name`, `email`, `password`) VALUES ('$name', '$email', '$pass');";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header("Location: ../Login/login.php");
} else {
  // echo "Please go to Login page";
  header("Location: ../Login/login.php");
}


echo "Connected successfully";
$conn->close();

?>