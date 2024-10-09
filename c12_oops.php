<?php
// class Fruit{
//     public $name;
//     public $color;

// function set_name($name){
//     $this->name=$name;
// }
// function get_name(){
//     return $this->name;
// }
// function set_color($color){
//     $this->color=$color;
// }
// function get_color(){
//     return $this->color;
// }
// }

// $apple=new Fruit();
// $apple->set_name('Apple');
// $apple->set_color('Red');
// echo "Name:  ".$apple->get_name();
// echo "<br>";
// echo "Color: ".$apple->get_color();



// class K22QY{
//     public $name;
//     public $roll;

// function student($name){
//     $this->name=$name;
// }
// function get_name(){
//     return $this->name;
// }
// function roll($roll){
//     $this->roll=$roll;
// }
// function get_roll(){
//     return $this->roll;
// }
// }

// $s1=new K22QY();
// $s1->student('Yash');
// $s1->roll(62);
// echo "Name:  ".$s1->get_name();
// echo "<br>";
// echo "Roll.no: ".$s1->get_roll();


class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayCarInfo() {
        echo "Make: $this->make\n";
        echo "Model: $this->model\n";
        echo "Year: $this->year\n";
    }
}

$myCar1 = new Car("Toyota", "Camry", 2022);
$myCar2 = new Car("Honda", "Civic", 2021);

$myCar1->displayCarInfo();
echo "\n";
$myCar2->displayCarInfo();


?>