<?php
abstract class Animal 
{
    public abstract function makeSound();
}
class Dog extends Animal 
{
    public function makeSound() {
        echo "Le chien aboie";
    }
}
class Cat extends Animal 
{
    public function makeSound() {
        echo "Le chat miaule";
    }
}

class Bird extends Animal
{
    public function makeSound() 
    {
        echo "abc";
    }
}


