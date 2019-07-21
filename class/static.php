<?php
// Declare for human class.
class Human
{
    // Declare property.
    var $birthday, $age, $gender, $hobby;

    // Declare static property
    public static $name;

    // Declare static method.
    public static function Greeting()
    {
        return "Hello " . self::$name;
    }

}
// Initial Static variable
Human::$name = "John";
echo Human::Greeting();
?>