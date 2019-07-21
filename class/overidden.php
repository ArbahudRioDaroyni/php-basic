<?php
// Declare class Vehicle
class Vehicle {
   public function __construct() {
     echo "Constructor from class Vehicle <br>";
   }
  
   public function __destruct() {
     echo "Destructor from class Vehicle <br>";
   }
}
  
// Inheritance class Vehicle to Car
class Car extends Vehicle {
   public function __construct() {
     parent::__construct();
     echo "Constructor from class Car <br>";
}
  
   public function __destruct() {
     echo "Destructor from class Car <br>";
     parent::__destruct();
   }
}
  
// Inheritance class Car to Mpv
class Mpv extends Car {
   public function __construct() {
     parent::__construct();
     echo "Constructor from class Mpv <br>";
   }
  
   public function __destruct() {
     echo "Destructor from class Mpv <br>";
     parent::__destruct();
   }
}
 
// Declare and instansiasi object from class Mpv
$gadget_baru = new Mpv();
  
echo "Example for Overridden Constructor and Destructor <br>";
?>