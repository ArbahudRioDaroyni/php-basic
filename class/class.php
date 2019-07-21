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
// Initial variable for human class.
$jack = new Human();
// Set name variable with SetName function on class Human.
$jack->SetName('Peter Jack');
// get name variable with GetName function on class Human and print it.
$jack->GetName(); ?>