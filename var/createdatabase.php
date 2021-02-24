<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}


$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->connect_error;
}

$conn->close();
?>

