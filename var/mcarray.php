<?php
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue", "h" => "orange");
$a3 = array("i" => "orange");
$a4 = array_merge($a2, $a3);
print_r($a4);
$result = array_diff($a1, $a4);
print_r($result);
?>