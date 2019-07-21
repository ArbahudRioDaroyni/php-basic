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
  
class Car extends Vehicle{
    // class Car
    // initial property for setType method
    public $type;
    // another property
    public $series;
    // initial property for setType method from abstract
    public function setType($type)
    {
        $this->type = $type;
    }
    // this another method
    public function setSeries($series)
    {
        $this->series = $series;
    }
}
  
class Motorcycle extends Vehicle{
    // class motorcycle
    // initial property for setType method
    public $type;
    // another property
    public $series;
    // initial property for setType method from abstract
    public function setType($type)
    {
        $this->type = $type;
    }
    // this another method
    public function setSeries($series)
    {
        $this->series = $series;
    }
}

// Initial class Car
$car = new Car();
$car->setType("Toyota");
$car->setSeries("Avanza");
echo $car->type;
echo $car->series;

// Initial class Motorcycle
$car = new Motorcycle();
$car->setType("Honda");
$car->setSeries("Beat");
echo $car->type;
echo $car->series;
?>