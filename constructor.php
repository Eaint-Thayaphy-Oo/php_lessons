<?php

class Animals
{
    public $name;
    public $color;

    public function __construct($animalName = 'default', $animalColor = 'default')
    {
        $this->name = $animalName;
        $this->color = $animalColor;
    }

    public function sleep()
    {
        echo "GOOD NIGHT...";
    }
}

class Dog extends Animals //extends lok pee use lyk dr
{
    public function greeting()
    {
        echo "hello Dog";
    }
}

$dog = new Animals();
echo $dog->name;

$dog = new Dog();
$dog->greeting();
$dog->sleep();
