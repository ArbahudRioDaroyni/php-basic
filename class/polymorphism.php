<?php
// declare abstract class
abstract class Vehicle{
    // declare abstract method
    abstract public function setType($type);

    // abstract can have a static method
    public static function getLicense(){
        return "BPKB";
    }
}
// declare interface
interface SteeringWheel{
    // declare interface method
    public function turnLeftSteering($rotation);
    public function turnRightSteering($rotation);
}

class Car extends Vehicle implements SteeringWheel
{
    public $type, $rotation, $rotationLeft, $rotationRight;
    public function setType($type)
    {
        $this->type = $type;
    }
    public function turnLeftSteering($rotation)
    {
        $this->rotationLeft = $rotation;
        return 4 * $this->rotationLeft;
    }
    public function turnRightSteering($rotation)
    {
        $this->rotationRight = $rotation;
        return -4 * $this->rotationRight;
    }
}

echo Vehicle::getLicense();
$car = new Car();
$car->setType("Toyota");

echo $car->type;
echo $car->turnLeftSteering(90);
echo $car->turnRightSteering(90);