<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    pow(x,y) <br>
    sqrt(x) <br>
    abs(x) <br>
    ceil(x) <br>
    floor(x) <br>
    round(x) <br>
    rand(start,end) <br>
    max() <br>
    min() 
    <hr>
    
    <?php 
    echo pow(2,3). "<br>";
    echo sqrt(9). "<br>";
    echo abs(-8). "<br>";
    echo ceil(1.1). "<br>";
    echo floor(1.1). "<br>";
    echo round(5.6). "<br>";
    echo rand(1,10). "<br>";

    $array = [12,2,4,6,43,78,846];
    echo max($array). "<br>";
    echo min($array);
    ?>
</body>
</html>