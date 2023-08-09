<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    strlen() <br>
    str_word_count() <br>
    strrev() <br>
    str_shuffle() <br>
    strpos(str,search) <br>
    substr(str,start point,end point) <br>
    strtoupper() <br>
    strtolower() <br>
    strip_tags() <br>
    str_replace(find,new,string) <br>
    trim() <br>
    str_split() <br>
    explode()

    <hr>

    <?php
        $name = "thae tone programming code lab";
        echo $name . "<br>";
        echo strlen($name). "<br>";
        echo str_word_count($name). "<br>";
        echo strrev($name). "<br>";
        echo str_shuffle($name). "<br>";
        echo strpos($name, "tone"). "<br>";
        var_dump(strpos($name, "eaint")). "<br>";
        echo substr($name, 0 ,6). "<br>";
        echo strtoupper($name). "<br>";
        echo strtolower($name). "<br>";
        echo ucfirst($name). "<br>";
        echo ucwords($name). "<br>";
        echo strip_tags("<h1><i>This is testing paragraph</i></h1>"). "<br>";
        echo str_replace("code", "web" , $name). "<br>";
        $name1 = "                thae tone programming code lab          ";
        var_dump($name1). "<br>";
        var_dump(trim($name1)). "<br>";
        echo "<pre>";
        var_dump(str_split($name));
        var_dump(str_split($name,5));
        $arr = str_split($name);
        echo $arr[8];
        var_dump(explode(" /",$name));
    ?>
</body>

</html>