<?php
$max_weight = 50;
$batoh_items = 10000;
$items = json_decode(file_get_contents(__DIR__ . "/../batoh/items_" . $batoh_items . ".json"), true);

$batoh = [];
$price = 0;
$weight = 0;
foreach($items as $key => $item){
    if($item["we"] + $weight <= $max_weight){
        array_push($batoh, $item);
        $weight += $item["we"];
        $price += $item["pr"];
    }else if($weight == $max_weight){
        break;
    }
}

echo "váha: " . $weight . "\n";
echo "cena: " . $price;