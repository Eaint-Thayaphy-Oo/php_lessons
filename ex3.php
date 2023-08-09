<?php

$name = 'code lab';

if ($name == 'su su') {
    echo "You right!" . "<br><br>";
} elseif ($name == 'code lab') {
    echo "This is code lab." . "<br><br>";
} else {
    echo "The end!" . "<br><br>";
}


$car = ['BMW', 'Toyota', 'Honda'];
echo count($car) . "<br><br>";

for ($i = 0; $i < count($car); $i++) {
    echo "<pre>";
    echo $car[$i] . "<br><br>";
}

foreach ($car as $item) {
    echo "<pre>";
    echo $item . "<br><br>";
}

$num1 = 1;

while($num1 <= 10) {
    echo $num1 . "<br>";
    $num1++;
}

$num2 = 1;
do {
    echo $num2 . "<br>";
    $num2++ . "<br><br>";
} while ($num2 <= 20);

function outputMessage() {
    echo "This is output status" . "<br><br>";
}
outputMessage();

function outputParameterMessage($x) {
    echo $x . "<br><br>";
}
outputParameterMessage("Hello, I'm web developer.");

function outputMathMessage($x , $y) {
    echo $x + $y . "<br><br>";
}
outputMathMessage(10,20);

function outputDefaultMessage($x = 'empty') {
    echo $x . "<br><br>";
}
outputDefaultMessage();

function outputReturnMessage($x , $y) {
    return $x + $y;
}

$output = outputReturnMessage(120,20);
echo $output;