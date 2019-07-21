<?php
// public access, every code out of class can access it property.
// protected access, only self class or inheritance class can access it property.
// private access, only self class class can access it property.
// Declare for human class.
class Car
{
    // Declare property.
    public $name, $series, $age;
    protected $production, $color;
    private $license;

    // Declare method.
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

    // this method is to access private access inner class
    public function ForceSetLicense($license)
    {
        return self::SetLicense($license);
    }
    public function ForceGetLicense()
    {
        return $this->license;
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

//Access public can be access from other code
$publicModel = new Car();
$publicModel->SetName('ferrari f12');
echo $publicModel->name;

$publicModel->ForceSetLicense('jgvata76a87nay79yas7ays');
echo $publicModel->ForceGetLicense();

//initial class ferrari
$protectedModel = new Ferrari();
$protectedModel->SetColor('Red');
echo $protectedModel->GetColor();

?>