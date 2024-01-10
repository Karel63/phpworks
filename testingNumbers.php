<?php
$array = [];
$v = 10;
$answer = false;

for($number = 76543209; $number <= 99999999; $number++){
    $test = str_split($number);
    foreach($test as $n){
        if($n < $v){
            $v = $n;
        }else{
            $answer = false;
        }
    }
    if($answer == true){
        array_push($array, $number);
    }
    $v = 10;
    $answer = true;
}

echo count($array);
