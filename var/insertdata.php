<?php
$servername="localhost";
$username="root";
$password="";
$MYDB="mydb";

$con=new mysqli($servername,$username,$password,$MYDB);

if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}

$sql="INSERT INTO MYGuests(firstname,lastname,email)
                    VALUES('Gokul','Reddy','nithishreddy76@gmail.com'),
                           ('Nithish','Reddy','gokulnithish@gmail.com'),
                           ('hemanth','Kumar','Hemanthkumar@gmail.com'),
                           ('Lathish','Kumar','latishkumar@gmail.com'),
                           ('Naresh','Reddy','nareshreddy@gmail.com');";
                           
                           


if($con->query($sql)===TRUE)
{
    echo "records inserted successfully";
} 
else
{
    echo "records are not inserted".$con->connect_error;
}                          

?>