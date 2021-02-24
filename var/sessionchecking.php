<?php
session_start();

if(isset($_SESSION['logged']))
    echo "Welcome".$_SESSION['user'];
else
    header('Location:sessionstart.php');
 ?>   