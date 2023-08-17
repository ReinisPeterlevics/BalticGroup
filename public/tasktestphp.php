<?php
class Vehicle{
    private $brand;
    private $model;
    private $speed;

    function __construct($brand, $model, $speed){
        $this->brand = $brand;
        $this->model = $model;
        $this->speed = $speed;
    }

    function get_model(){
        return $this->model;
    }
    function get_brand(){
        return $this->brand;
    }
    function get_speed(){
        return $this->speed;
    }
    function set_model($model){
        $this->model = $model;
    }
    function set_brand($brand){
        $this->brand = $brand;

    }
    function set_speed($speed){
        $this->speed = $speed;
    }
    function honk(){
        echo "HONK";
    }
    function accelerate(){
        $this->speed = $this->speed + 20;
    }

}

class Car extends Vehicle{
    function honk(){{
        echo "Peeeeeeeeep";
    }}

}
class Motorcycle extends Vehicle{
    function honk(){
        echo "Peep Peep";
    }
}

$car = new Car("Honda", "Accord", 20);

echo $car->honk() . "<br>";
echo $car->get_speed() . "<br>";
$car->accelerate() . "<br>";
echo $car->get_speed() . "<br>";

echo "Hello World!" . "<br>";
?>
