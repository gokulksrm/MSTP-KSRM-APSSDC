<?php
$servername="localhost";
$username="root";
$password="";
$database="mydb";

$con=new mysqli($servername,$username,$password,$database);

if($con->connect_error)
{
    die("Connection Failed".$con->connect);

}

$sql="SELECT id,concat(firstname,lastname) AS 'name',email FROM MyGuests";

$result=$con->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "ID:".$row["id"]." Name: ".$row["name"]." Email: ".$row["email"];
        echo "</br>";
    }
}
else{
    echo "0 results";
}

$con->close();
?>