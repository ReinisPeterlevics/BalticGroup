<?php
class Vehicle {
    protected $brand;
    protected $model;

    function setBrand($brand) {
        $this->brand = $brand;
    }

    function getBrand() {
        return $this->brand;
    }

    function setModel($model) {
        $this->model = $model;
    }

    function getModel() {
        return $this->model;
    }

}

class Car extends Vehicle {
    private $nrOfDoors;
    private $color;

    function setNrOfDoors($nrOfDoors) {
        $this->nrOfDoors = $nrOfDoors;
    }

    function getNrOfDoors() {
        return $this->nrOfDoors;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function getColor() {
        return $this->color;
    }
}

class Motorcycle extends Vehicle {
    private $weigth;
    private $fuelTank;

    function setWeigth($weigth) {
        $this->weigth = $weigth;
    }

    function getWeigth() {
        return $this->weigth;
    }

    function setFuelTank($fuelTank) {
        $this->fuelTank = $fuelTank;
    }

    function getFuelTank() {
        return $this->fuelTank;
    }

}

$car = new Car();
$car->setBrand('BMW');
$car->setModel('M3');
$car->setNrOfDoors(4);
$car->setColor('White');

$motorcycle = new Motorcycle();
$motorcycle->setBrand('Volvo');
$motorcycle->setModel('XC90');
$motorcycle->setWeigth(1000);
$motorcycle->setFuelTank(100);

echo "Car brand: ". $car->getBrand(). '<br>';
echo "Car model: " . $car->getModel(). '<br>';
echo "Number of doors: " . $car->getNrOfDoors(). '<br>';
echo "Color:" . $car->getColor(). '<br>';

echo "Motorcycle brand: " . $motorcycle->getBrand(). '<br>';
echo "Motorcycle model: " . $motorcycle->getModel(). '<br>';
echo "Motorcycle weigth: " . $motorcycle->getWeigth(). '<br>';
echo "Motorcycle fuel tank: " . $motorcycle->getFuelTank(). '<br>';


?>
