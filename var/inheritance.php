<?php
class Car{
    protected $model;
    public $color;
    public function __construct($model,$color)
    {
        $this->model=$model;
        $this->color=$color;
    }
    function car_details(){
        echo "the car model is ".$this->model." and the color of the car is ".$this->color."</br>";
    }
}
class Bike extends Car{
    public $wheels;

    public function __construct($model,$color,$wheels)
    {
        $this->model=$model;
        $this->color=$color;
        $this->wheels=$wheels;
    }
    function bike_details()
    {
        echo "the bike model is ".$this->model." and the color of the is bike is ".$this->color." wheels of the is bike is ".$this->wheels."</br>";
    }
}

$tvs=new Bike("apache","red",2);
$tvs->bike_details();
$tvs->car_details();