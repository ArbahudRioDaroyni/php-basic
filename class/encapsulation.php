<?php
// Declare for human class.
class Car
{
// public access, every code out of class can access it property.
// protected access, only self class or inheritance class can access it property.
// private access, only self class class can access it property.

    // Declare property.
    public $name, $series, $age;
    protected $production, $color;
    private $license;

    // Declare function.
    public function SetName($name)
    {
        $this->name = $name;
    }
    protected function SetColor($color)
    {
        $this->color = $color;
    }
    private function SetLicense($license)
    {
        $this->license = $license;
    }
}

// Declare inheritance class for car
// protected can access here as inheritance class
class Ferrari extends Car
{
    public function SetColor($color)
    {
        $this->color = $color;
    }
    public function GetColor()
    {
        return $this->color;
    }
}

$publicModel = new Car();

$publicModel->SetName('ferrari f12');
echo $publicModel->name;

$protectedModel = new Ferrari();

$protectedModel->SetColor('Red');
echo $protectedModel->GetColor();

?>