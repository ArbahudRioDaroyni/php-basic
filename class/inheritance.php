<?php

// Declare Vehicle Class
class Vehicle
{
    public $fuel;

    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }
}

// Declare VehicleType Class
// Inheritance Vehicle Class
class VehicleType extends Vehicle
{
    public $type;

    public function setType($type)
    {
        $this->type = $type;
    }
}

// Declare VehicleSeries Class
// Inheritance VehicleType Class
class VehicleSeries extends VehicleType
{
    public $series;

    public function setSeries($series)
    {
        $this->series = $series;
    }
}

// Declare Car Class
// Inheritance VehicleSeries Class
class Car extends VehicleSeries
{
    public $numberPlate;

    public function setNumberPlate($numberPlate)
    {
        $this->numberPlate = $numberPlate;
    }
    public function getAllData()
    {
        return [
            'fuel' => $this->fuel,
            'type' => $this->type,
            'series' => $this->series,
            'numberPlate' => $this->numberPlate,
        ];
    }
}

// initial object
$car =  new car();
// set all data
$car->setFuel('Pertalite');
$car->setType('Kijang');
$car->setSeries('Innova Reborn');
$car->setNumberPlate('L 1477 KK');
var_dump($car->getAllData());
?>