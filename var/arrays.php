<?php
/*
$cars=array("bmw","maruthi","audi");
for($i=0;$i<count($cars);$i++)
{
echo "$cars[$i] </br> ";
}
$mix=array("gokul",65,5.36);
var_dump($mix);
foreach($mix as $m)
{
    echo "$m </br>";
}
$numbers=[1,2,3,4,5,6];
foreach($numbers as $n)
{
    echo "$n </br>";
}
$txt="this is one of the best";
$ftxt=str_replace(" ","",$txt);
echo "$ftxt";
$stxt=str_split($txt);
print_r($stxt);
foreach($stxt as $d)
{
    echo "$d </br>";
}
$ages=array("harry"=>63,"larry"=>75,"morry"=>25);
print_r($ages);
var_dump($ages);
echo $ages['harry'];
foreach($ages as $name =>$values)
{
    echo " $name $values </br>";
}*/

$cars=array(
    array("bmw",25,65),
    array("audi",56,54),
    array("maruthi",23,56)
);

for($i=0;$i<count($cars);$i++)
{
    for($j=0;$j<count($cars[$i]);$j++)
    {
        echo $cars[$i][$j];
    }
    echo "</br>";
}
$names=array("gokul","nithish","hemanth","naresh","rajesh");
sort($names);
print_r($names);
echo "</br>";
rsort($names);
print_r($names);
echo "</br>";

$ages=array("harry"=>63,"larry"=>75,"morry"=>25);
asort($ages);
print_r($ages);
echo "</br>";
ksort($ages);
print_r($ages);
echo "</br>";

?>