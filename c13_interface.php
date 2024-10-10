<?php
// interface Animal{
//     public function makeSound();
// }

// class Dog implements Animal{
//     public function makeSound(){
//         echo "Woof! Woof! Woof!<br>";
//     }
// }
// class Cat implements Animal{
//     public function makeSound(){
//         echo "Meow! Meow!<br>";
//     }
// }

// $dog=new Dog();
// $dog->makeSound();
// $cat=new Cat();
// $cat->makeSound();


interface Movable{
    public function move();
}

interface Swimmable{
    public function swim();
}
interface Flyable{
    public function flyable();
}

class Bird implements Movable, Flyable{
    public function move(){
        echo "The bird is walking.<br>";
    }
    public function fly(){
        echo "The bird is flying.<br>";
    }
}

class Fish implements Movable, Swimmable{
    public function move(){
        echo "The fish is swimming.<br>";
    }
    public function swim(){
        echo "The fish swims swiftly.<br>";
    }
}

class Duck implements Movable, swimmable, flyable{
    public function move(){
        echo "The duck is walking.<br>";
    }
    public function swim(){
        echo "The Duck swims swiftly.<br>";
    }
    public function fly(){
        echo "The Duck is flying.<br>";
    }
}


$bird=new Bird();
$bird->move();
$bird->fly();


$fish=new Fish();
$fish->move();
$fish->fly();

$duck=new Duck();
$duck->move();
$duck->fly();
$duck->swim();
