<?php

$name = 'ayeaye';

var_dump($name . '<br />');
print($name . '<br />');
print_r($name . '<br />');
echo($name . '<br />');

$num1 = 10;
$num2 = 30;
$num3 = $num1 + $num2;
echo $num3 . "<br>";

$array = ['one','two', 'three'];
echo "<pre>";
var_dump($array);
echo($array[1]);

$assoArray = [
    'name' => 'mg mg',
    'role' => 'developer'
];

echo "<pre>";
var_dump($assoArray);
echo($assoArray['name']) . "<br>";

$fruits = 'mango';

if($fruits == 'mango') {
    echo "this is mango" . "<br>";
} else {
    echo "this is other fruits" . "<br>";
}

#Conditional operator (or) Ternary operator

$result = $fruits == 'apple' ? "this is mango" : "this is other fruits";
echo $result;