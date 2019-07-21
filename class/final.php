<?php
class Vehicle{
    public $info;
    //this is final method
    final public function getInfo(){
        return $this->info;
    }
}
  
class Car extends Vehicle{
    public $info;
    // this is overridden method from Vehicle Class
    public function getInfo(){
        return "This is Information";
    }
}

// this code will error because method getInfo is final method and cannot overridden
$car = new Car();

?>

<?php
//this is final class
final class Mpv{
    public $info;
    public function getInfo(){
        return $this->info;
    }
}


// this is inheritance class from Mpv Class
class MpvNew extends Vehicle{
    public function getInfo(){
        public $info;
        return "This is Information";
    }
}

// this code will error because Mpv class is final class and cannot inheritance
$mpvNew = new MpvNew();

?>

<?php
class Mpv{
    final $info;
    public function getInfo(){
        return $this->info;
    }
}


// this is inheritance class from Mpv Class
class MpvNew extends Vehicle{
    public $info;
    public function getInfo(){
        return "This is Information";
    }
}

// this code will error because Mpv class is final class and cannot inheritance
$mpvNew = new MpvNew();

?>