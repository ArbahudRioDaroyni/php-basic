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
    public function getGender()
    {
        return $this->gender;
    }
    public function __destruct()
    {
        if ($this->gender == !NULL && $this->name == !NULL) {
            echo "{$this->name} is woman";
        }elseif($this->name == NULL){
            echo "name is not defined";
        }else{
            "server internal error";
        }
    }
}

// Initial class woman
$model = new Woman();
?>