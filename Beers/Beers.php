<?php
$json = (array) json_decode(file_get_contents("http://random-data-api.com/api/v2/beers?size=10"));
//$json = (array) json_decode(file_get_contents("Beers/Beers.json"));
$data = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beers</title>
    <link rel="stylesheet" href="Beers.css">
</head>
<body>
<table>'; 
$data .= "<tr><th>id</th><th>name</th><th>alcohol</th></tr>";
$data .= "<tr>";
//bubble sort algoritmus
for($y = 0; $y < count($json); $y++){
for($x = 0; $x < count($json) - 1; $x++){
    foreach($json[$x] as $key => $value){  
    foreach($json[$x + 1] as $key2 => $value2){
        if($key && $key2 == "alcohol"){
            $float = (float) $value;
            $float2 = (float) $value2;
            if($float < $float2){
                $temp = $json[$x];
                $json[$x] = $json[$x + 1];
                $json[$x + 1] = $temp;
            }
        }
    }
    }
}
}
for($x = 0; $x < count($json); $x++){
    $data .= "<tr>";
    foreach($json[$x] as $key => $value){
        switch($key){
            case "id":
                $data .= "<td>" .  $value . "</td>";
                break;
            case "name":
                $data .= "<td>" .  $value . "</td>";
                break;
            case "alcohol":
                $data .= "<td>" .  $value . "</td>";
                break;
        }
    }
    $data .= "</tr>";
}
$data .= "</tr>";
$data .= "</table>
</body>
</html>";
file_put_contents("Beers/Beers.html", $data);