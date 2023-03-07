<?php
$chance = 3;
$numCards = 52;
$rarity = ["Common", "Uncommon", "Rare", "Very Rare", "Epic", "Legendary", "Mythic"];
$color = ["Gray", "#00ce00", "rgb(0, 76, 255)", "rgb(255, 119, 0)", "rgb(161, 0, 161)", "Yellow", "Red"];

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link rel="stylesheet" href="random.css">
</head>
<body>' . "\n";

for($x = 1; $x <= $numCards; $x++){
    for($l = 0; $l < count($rarity); $l++){
        $number = mt_rand(1, $chance);
        $card = $rarity[$l];
        $col = $color[$l];
        if($number < $chance){
            break;
        }
    }
    $html .= '<div style="margin-top: 2%; margin-bottom: 2%; border-style: solid; font-size: 350%; padding-top: 10%; text-align: center; padding-bottom: 10%; width: 20%; background-color: ' . $col . '">' . $card . '</div>' . "\n";
}

$html .= '</body>
</html>';

file_put_contents("random/random.html", $html);