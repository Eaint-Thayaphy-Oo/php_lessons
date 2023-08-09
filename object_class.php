<?php

class Car
{
    // public $name = 'BMW';
    // public $price = '1200$';

    private $name;
    public $price;

    public function getCarName($userName = 'default') //type
    {
        $this->name = $userName;
        return $this->name;
    }

    public function setName($name = "default")
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCarPrice($userPrice = 'default') //void
    {
        $this->price = $userPrice;
        echo $this->price;
    }
}

// $result = new Car();
// echo $result->name;
// echo "<br>";
// echo $result->price;

$result = new Car();
$name = $result->getCarName("AAA");
echo $name;
$result->getCarPrice();

$result->setName("BBBB");
// echo $result->name;

$name = $result->getName();
echo $name;
