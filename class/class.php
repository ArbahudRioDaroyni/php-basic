<?php
// Declare for human class.
class Human
{
    // Declare property.
    var $name, $birthday, $age, $gender, $hobby;

    // Declare method.
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}
// Initial class human
$model = new Human();
// Set name class human
$model->setName('Peter Jack');
// get name class human
// or can bypass access variable with :
// echo $model->name;
echo $model->getName(); ?>