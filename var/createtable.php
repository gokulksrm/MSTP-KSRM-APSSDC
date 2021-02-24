<?php
$servername="localhost";
$username="root";
$password="";

$con=new mysqli($servername,$username,$password,"mydb");

if($con->connect_error)
{
    die("Connection is failed". $con->connect_error);
}

$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

if($con->query($sql) === TRUE)
{
    echo "Table is created successfully";
}
else{
    echo "Table is not created".$con->connect_error;
}
?>                            