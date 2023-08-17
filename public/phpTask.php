<?php

class Vehicle {
    private $brands;
    private $model;

    public function __construct($brands, $model) {
        $this->brands = $brands;
        $this->model = $model;
    }
    public function getBrands() {
        return $this->brands;
    }
    public function getModel() {
        return $this->model;
    }
    public function setBrands($brands) {
        $this->brands = $brands;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function whatAmI() {
        return $this->brands. " ". $this->model;
    }
    public function howManyWheelsIHave() {
        return "I dont know how many wheels I have on this vehicle";
    }
}

class Car extends Vehicle {
    public function whatAmI(){
        return "I'm a car {$this->getModel()} from {$this->getBrands()}";
    }
    public function howManyWheelsIHave() {
        return "I have 4 wheels on this car";
    }
}

class Motorcycle extends Vehicle{
    public function whatAmI(){
        return "I'm a motorcycle {$this->getModel()} from {$this->getBrands()}";
    }
    public function howManyWheelsIHave() {
        return "I have 2 wheels on this motorcycle";
    }
}

$vehicle = new Vehicle("Scania", "Fusca");
$car=new Car("Alfa Romeo", "GT");
$motorcycle=new Motorcycle("Suzuki", "SR5000");

echo $vehicle->whatAmI();
echo "<br>";
echo $car->whatAmI();
echo "<br>";
echo $motorcycle->whatAmI();
echo "<br>";
echo $vehicle->howManyWheelsIHave();
echo "<br>";
echo $car->howManyWheelsIHave();
echo "<br>";
echo $motorcycle->howManyWheelsIHave();

?>
