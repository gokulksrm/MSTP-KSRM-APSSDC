<?php
$servername="localhost";
$username="root";
$password="";
$database="mydb";

$con =new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
    die("connection is failed".$con->connect_error);
}

$sql= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if($con->query($sql)=== TRUE)
{
    $last_id=$con->insert_id;
    echo "New record is inserted last id of the last inserted is ".$last_id;

}
else{
    echo "Record not inserted".$con->connect_error;
}
$con->close();
?>