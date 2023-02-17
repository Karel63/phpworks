<?php

//šířka minového pole
$sizeX = 12;
//výška minového pole
$sizeY = 10;
//šance na minu (v procentech)
$mineChance = 25;

$posX = 0;
$posY = 0;
$color = "white";
$data = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>' . "\n";

for($y = 0; $y < $sizeY; $y++){
    for($x = 0; $x < $sizeX; $x++){
        $chance = random_int(1, 100);
        if($chance <= $mineChance){
            $color = "red";
        }
        $data .= '<div style="border-style: solid; position: fixed; background-color:' . $color . '; height: 50px; width: 50px; margin-left: ' . $posX . 'px; margin-top: ' . $posY . 'px"></div>' . "\n";
        $posX += 50;
        $color = "white";
    }
    $posX = 0;
    $chance = random_int(1, 100);
    if($chance <= $mineChance){
        $color = "red";
    }
    $data .= '<div style="border-style: solid; position: fixed; background-color:' . $color . '; height: 50px; width: 50px; margin-left: ' . $posX . 'px; margin-top: ' . $posY . 'px"></div>' . "\n";
    $posY += 50;
    $color = "white";
}

$data .= '</body>
</html>';

file_put_contents("mine.html", $data);
