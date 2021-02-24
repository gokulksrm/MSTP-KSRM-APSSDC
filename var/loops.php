<?php
$x=369;
$y=5689;
if($x>$y)
echo "$x is big number";
else
echo "$y is big number";

//prime number
$p=100;
for($i=0;$i<=$p;$i++)
{
    $count=0;
    for($j=1;$j<=$i;$j++)
    {
        if($i%$j==0)
        {
         $count++;

        }
    }
    if($count==2)
    {
        echo "$i is prime number </br>";
    }
}
?>