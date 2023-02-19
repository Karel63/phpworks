<?php

//šířka minového pole
$sizeX = 6;
//výška minového pole
$sizeY = 6;
//šance na minu (v procentech)
$mineChance = 25;

$posX = 0;
$posY = 0;
$data = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>' . "\n";

for($y2 = 0; $y2 < $sizeY; $y2++){
    for($x2 = 0; $x2 < $sizeX; $x2++){
        $color = "white";
        $chance = random_int(1, 100);
        if($chance <= $mineChance){
            $color = "red";
        }
        $data .= '<div style="border-style: solid; position: absolute; background-color:' . $color . '; height: 50px; width: 50px; margin-left: ' . $posX . 'px; margin-top: ' . $posY . 'px"></div>' . "\n";
        /*
        if($color === "red"){
            $charX = $posX - 50;
            $charY = $posY - 50;
            for($y = 0; $y < 3; $y++){
                for($x = 0; $x < 3; $x++){
                    $data .= '<p style="padding: 20px; position: absolute; margin-left: ' . $charX . 'px; margin-top: ' . $charY . 'px">X</p>' . "\n";
                    $charX += 50;
                }
                $charX = -50;
                $charY += 50;
            }
        }*/
        $posX += 50;
    }
    $posX = 0;
    $posY += 50;
}

$data .= '</body>
</html>';

file_put_contents("mine.html", $data);
