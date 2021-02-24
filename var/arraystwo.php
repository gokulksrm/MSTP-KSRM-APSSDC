<?php
$profile=[
    'user001'=>['name'=>'gokul','age'=>25],
    'user002'=>["name"=>'nithish','age'=>22]
];
foreach($profile as $u=>$n)
{
    echo "keys are ". $u . " values are ".$n['name']; 
}
?>