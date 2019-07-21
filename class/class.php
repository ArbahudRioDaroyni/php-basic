<?php
class Human
{
    var $name, $birthday, $age, $gender, $hobby;

    function SetName($name)
    {
        $this->name = $name;
    }
    function GetName()
    {
        return $this->name;
    }
}
$jack = new Human();
$jack->SetName('Peter Jack');
?>
<?= $jack->GetName(); ?>