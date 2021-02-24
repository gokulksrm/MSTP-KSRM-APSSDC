<?php

$fileopen=fopen("story.txt","r");

//echo fread($fileopen,filesize("story.txt"));
//echo "</br>";
//echo fgets($fileopen);
while(!feof($fileopen))
{
echo fgets($fileopen)."</br>";
}
fclose($fileopen);

?>