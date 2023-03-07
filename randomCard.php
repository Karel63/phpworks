<?php
$chance = 3;
$n = 0;
$rarity = ["Common", "Uncommon", "Rare", "Super Rare", "Epic", "Legendary"];
for($l = 0; $l < count($rarity); $l++){
    $number = mt_rand(1, $chance);
    echo $number . "\n";
    $card = $rarity[$l];
    if($number < $chance){
        break;
    }
}
echo $card;
