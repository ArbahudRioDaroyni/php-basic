<?php
interface SteeringWheel{
    public function turnLeftSteering();
    public function turnRightSteering();
}
  
interface Cooler{
    public function turnOnCooler();
    public function turnOffCooler();
}
  
class Vehicle implements SteeringWheel, Cooler{
    public function turnLeftSteering(){
        return "This is fill in from turnLeftSteering method";
    }

    public function turnRightSteering(){
        return "This is fill in from turnRightSteering method";
    }

    public function turnOnCooler(){
        return "This is fill in from turnOnCooler method";
    }

    public function turnOffCooler(){
        return "This is fill in from turnOffCooler method";
    }
}
  
$car = new Vehicle();
echo $car->turnOffCooler();
?>