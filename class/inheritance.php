<?php

// Declare Vehicle Class
class Vehicle
{
    public $fuel;

    public function SetFuel($fuel)
    {
        $this->fuel = $fuel;
    }
}

// Declare VehicleType Class
// Inheritance Vehicle Class
class VehicleType extends Vehicle
{
    public $type;

    public function SetType($type)
    {
        $this->type = $type;
    }
}

// Declare VehicleSeries Class
// Inheritance VehicleType Class
class VehicleSeries extends VehicleType
{
    public $series;

    public function SetSeries($series)
    {
        $this->series = $series;
    }
}

// Declare Car Class
// Inheritance VehicleSeries Class
class Car extends VehicleSeries
{
    public $numberPlate;

    public function SetNumberPlate($numberPlate)
    {
        $this->numberPlate = $numberPlate;
    }
    public function GetAllData()
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
$car->SetFuel('Pertalite');
$car->SetType('Kijang');
$car->SetSeries('Innova Reborn');
$car->SetNumberPlate('L 1477 KK');
var_dump($car->GetAllData());
?>