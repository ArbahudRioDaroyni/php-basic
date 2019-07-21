<?php
// Declare for human class.
class Human
{
    // Declare property.
    var $name, $birthday, $age, $gender, $hobby;

    // Declare function.
    function SetName($name)
    {
        $this->name = $name;
    }
    function GetName()
    {
        return $this->name;
    }
}
// Initial class human
$model = new Human();
// Set name class human
$model->SetName('Peter Jack');
// get name class human
// or can bypass access variable with :
// echo $model->name;
echo $model->GetName(); ?>