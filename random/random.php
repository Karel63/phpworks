<?php
$chance = 4;
$off = 1;
$numCards = 100;
$rarity = array(
    array("Common", "Gray", "0px 0px White", "Black"),
    array("Uncommon", "#00ce00", "5px 5px Greenyellow", "Black"),
    array("Rare", "rgb(0, 76, 255)", "10px 10px Yellow", "Black"),
    array("Very Rare", "rgb(255, 119, 0)", "10px 15px Yellow", "Black"),
    array("Epic", "rgb(161, 0, 161)", "15px 20px Orange", "Black"),
    array("Legendary", "Yellow", "15px 25px Orange", "Black"),
    array("Mythical", "Red", "20px 30px Orangered", "Black"),
    array("Exotic", "rgb(253, 182, 194)", "20px 35px Orangered", "Black"),
    array("Ultimate", "Black", "25px 40px Red", "White"),
    array("Godly", "White", "25px 45px Red", "Gold")
);

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
    for($l = 0; $l < (count($rarity)); $l++){
        $number = mt_rand(1, $chance);
        $card = $rarity[$l][0];
        $color = $rarity[$l][1];
        $blur = $rarity[$l][2];
        $text = $rarity[$l][3];
        if($number < ($chance + 1 - $off)){
            break;
        }
    }
    $html .= '<div style="color: ' . $text . '; box-shadow: 0px 0px ' . $blur . '; margin-top: 2%; margin-bottom: 2%; border-style: solid; font-size: 350%; padding-top: 10%; text-align: center; padding-bottom: 10%; width: 20%; background-color: ' . $color . '">' . $card . '</div>' . "\n";
}

$html .= '</body>
</html>';

file_put_contents("random/random.html", $html);
