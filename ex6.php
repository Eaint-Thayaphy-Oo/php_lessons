<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Array Build in Function
    <hr>
    <?php
        $arr = ['apple', 'mango', 'banana', 'orange',10.40,30,56,78];
        echo count($arr) . '<br>';
        echo $arr[0] . '<br>';
        echo current($arr). '<br>';
        echo end($arr). '<br>';
        echo array_rand($arr). '<br>';
        echo $arr[array_rand($arr)]. '<br>';
        echo array_sum($arr). '<br>';

        $number = range(0,20);
        echo "<pre>";
        var_dump($number);

        echo in_array("apple" , $arr)? "true" : "false". '<br>';

        $person = [
            'name' => 'aye aye',
            'job' => 'developer',
            'address' => 'pyay',
        ];

        echo array_key_exists('', $person)? "true" : "false". '<br>';

        $name = "this is sithu";
        echo "<pre>";
        var_dump(explode("/", $name));

        echo implode("*" , $arr);

        $fruits = ['apple', 'mango', 'banana', 'orange'];

        array_push($fruits, 'sugar');
        echo "<pre>";
        var_dump($fruits);

        array_pop($fruits);
        echo "<pre>";
        var_dump($fruits);

        array_unshift($fruits, 'salt');
        echo "<pre>";
        var_dump($fruits);

        array_shift($fruits);
        echo "<pre>";
        var_dump($fruits);

        sort($fruits);
        for($i =0 ; $i < count($fruits) ; $i++) {
            echo $fruits[$i];
            echo "<br>";
        }

        rsort($fruits);
        for($i =0 ; $i < count($fruits) ; $i++) {
            echo $fruits[$i];
            echo "<br>";
        }

        asort($person);
        echo "<pre>";
        var_dump($person);

        ksort($person);
        echo "<pre>";
        var_dump($person);
    ?>
</body>

</html>