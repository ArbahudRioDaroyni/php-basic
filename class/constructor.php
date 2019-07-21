<?php
// Declare for human class.
class Human
{
    // Declare property.
    var $name, $birthday, $age, $gender, $hobby;
}

class Woman extends Human
{
    // initial gender default on constructor for woman class
    public function __construct()
    {
        $this->gender = "woman";
    }
    public function GetGender()
    {
        return $this->gender;
    }
}

// Initial class woman
$model = new Woman();
echo $model->GetGender();
?>