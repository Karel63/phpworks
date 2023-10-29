<?php

$graph1 = ["A" => ["B" => 2, "C" => 4],
          "B" => ["A" => 2, "C" => 1, "F" => 5],
          "C" => ["A" => 4, "D" => 3],
          "D" => ["C" => 3, "A" => 1],
          "E" => [],
          "F" => ["B" => 5]
];

function dijsktra(string $start, array $graph): array{
    $pole = [];
    $visited = [];
    foreach($graph as $let => $data){
        if($let == $start){
            array_unshift($graph[$let], [0, $start]);
        }else{
            array_unshift($graph[$let], [INF, NULL]);
        }
    }
    for($n = 0; $n <= count($graph); $n++){
        $tmp = INF;
        foreach($graph as $let => $data){
            $num = $graph[$let][0][0];
            if(in_array($let, $visited)){

            }else if($num <= $tmp){
                $tmp = $let;
            }
        }
        if($tmp == INF){
            break;
        }
        $tmp2 = array_shift($graph[$tmp]);
        array_push($visited, $tmp);
        foreach($graph[$tmp] as $let => $num){
            if($tmp2[0] < $graph[$let][0][0]){
                $graph[$let][0][0] = $tmp2[0] + $num;
                $graph[$let][0][1] = key($graph[$tmp]);
            }
        }
        array_unshift($graph[$tmp], $tmp2);
    }
    $fin = [];
    foreach($graph as $let => $num){
        array_push($fin, [$let => $graph[$let][0]]);
    }
    return $fin;
}

var_dump(dijsktra("A", $graph1));
