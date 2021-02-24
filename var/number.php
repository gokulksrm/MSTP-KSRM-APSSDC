<?php
$x=100;
 var_dump(is_int($x));
$y=5.639;
$z=265+"5";
$txt="this is string";
var_dump(is_numeric($x));
var_dump(is_numeric($y));
var_dump(is_numeric($z));
var_dump(is_numeric($txt));
$s1=5639.5689;
$s2=(int)$s1;
echo $s2."<br>";
$s3="56369.2356";
$s4=(int)$s3;
echo $s4,"<br>";
$s5=(string)$s1;
echo $s5;
var_dump($s5);



?>
<?php

function a()
{
echo "hai";
function b()
{
echo "hello";
}
}
function b()
{
echo "tanks";
}
b();
a();
b();
?> 