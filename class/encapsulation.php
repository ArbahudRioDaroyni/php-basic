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
    public function setName($name)
    {
        $this->name = $name;
    }
    protected function setColor($color)
    {
        $this->color = $color;
    }
    private function setLicense($license)
    {
        $this->license = $license;
    }

    // this method is to access private access inner class
    public function forceSetLicense($license)
    {
        return self::setLicense($license);
    }
    public function forceGetLicense()
    {
        return $this->license;
    }
}

// Declare inheritance class for car
// protected can access here as inheritance class
class Ferrari extends Car
{
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
}

//Access public can be access from other code
$publicModel = new Car();
$publicModel->setName('ferrari f12');
echo $publicModel->name;

$publicModel->forceSetLicense('jgvata76a87nay79yas7ays');
echo $publicModel->forceGetLicense();

//initial class ferrari
$protectedModel = new Ferrari();
$protectedModel->setColor('Red');
echo $protectedModel->getColor();

?>