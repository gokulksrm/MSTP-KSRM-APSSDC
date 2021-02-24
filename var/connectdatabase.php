<?php
$severname="localhost";
$username="root";
$password="";

$con=new mysqli($severname,$username,$password);

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}
echo "connected successfully";
?>