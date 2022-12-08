<?php

/*
Jak použít kód: http://localhost/index.php/?o=[operátor, např: add]&nA=[první číslo]&nB=[druhé číslo]
validní operátory: add / sum, sub, mul, div
*/

$operation = htmlentities($_GET["o"]);
$number = htmlentities($_GET["nA"]);
$number2 = htmlentities($_GET["nB"]);
if(!$number || !$number2 || !is_numeric($number) || !is_numeric($number2)){
    print_r(["report" => "Not a valid number"]);
    exit;
}
switch($operation){
    default:
        print_r(["report" => "Not a valid operator"]);
        exit;
    case "add" || "sum":
        $number3 = $number + $number2;
        break;
    case "sub":
        $number3 = $number - $number2;
        break;
    case "mul":
        $number3 = $number * $number2;
        break;
    case "div":
        $number3 = $number / $number2;
        break;
}
print_r(["report" => "All good", "result " => $number3]);
