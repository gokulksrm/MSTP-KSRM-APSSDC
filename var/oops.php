<?php
class Fruit{
    public $name;
    public $color;

    function set_namecolor($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
    function get_namecolor()
    {
        return $this->name.$this->color;
    }

}
$apple= new Fruit();
$apple->set_namecolor("apple","red");
echo ($apple->get_namecolor());
echo "</br>";

$banana=new Fruit();
$banana->set_namecolor("banana","yellow");
echo $banana->get_namecolor();
