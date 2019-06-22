<?php


$phpArray = array("hà nội", "hồ chi mình", "đà nẵng");

class Student {

    public $name;

    public $age;

    public $location;

    public function __construct($name, $age, $location)
    {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$an = new Student("nguyễn văn an", 21, "hà nội");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($an);
echo "</pre>";

$phpJson1 = json_encode($phpArray);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

$phpJson2 = json_encode($an);

echo "<pre>";
print_r($phpJson2);
echo "</pre>";