<?php
// Declare class Human
class Human {
  
   // Declare constant
   const SALARY = 3768000;
  
   // Declare method
   public function countSalary($month) {
     return "Salary for {$month} month is : Rp. " . number_format($month * self::SALARY,2,",",".");
   }
}
  
// Initial object from class Human
$jack = new Human();
  
echo $jack->countSalary(5);
// Salary for 5 month is : Rp. 18.840.000,00
?>