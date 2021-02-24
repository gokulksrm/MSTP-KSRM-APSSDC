<?php
class Car{
    private $model;
    private $color;
    function __construct($model,$color)
    {
        $this->model=$model;
        $this->color=$color;
    }
    function get_name()
    {
        return $this->model.$this->color;
    }
}
$audi=new Car("audi","blue");
echo $audi->get_name();
echo "</br>";
$bmw=new Car("bmw","green");
echo $bmw->get_name();
