<?php

$graph = [[0, 3, 1, 0],
          [3, 0, 0, 0],
          [1, 0, 0, 2],
          [5, 0, 2, 0]
];

function analyze_graph(array $g){
    echo "Uzlů:\t" . (count($g)) . "\n";
    echo "Sloupců:\t" . (count($g[0])) . "\n";
    foreach($g as $row){
        if(count($g) != count($row)){
            echo "chyba";
            break;
        }
    }
    $rating = false;
    foreach($g as $row){
        foreach($row as $value){
            if($value > 1){
                $rating = true;
                break;
            }
        }
    }
    $oriented = false;
    $n1 = 0;
    $n2 = 0;
    foreach($g as $row){
        foreach($row as $value){
            if($g[$n2][$n1] || $g[$n1][$n2] == 0 && $g[$n2][$n1] || $g[$n1][$n2] >= 1){
                $oriented = true;
                break;
            }
            $n1 += 1;
        }
        $n2 += 1;
    }
    echo "Ohodnocený:\t" . ($rating ? "Ano" : "Ne") . "\n";
    echo "Orientovaný:\t" . ($oriented ? "Ano" : "Ne") . "\n";
}

analyze_graph($graph);
