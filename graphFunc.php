<?php

$graph1 = [[0, 0, 1, 1, 0],
          [0, 0, 0, 0, 1],
          [1, 0, 0, 1, 0],
          [1, 0, 1, 0, 0],
          [0, 1, 0, 1, 0]
];

function path_exists(array $graph, int $start, int $end): bool{
    $to_visit = [];
    $visited = [];
    array_push($to_visit, $start);
    while(true){
        if(empty($to_visit)){
            return false;
        }
        $act = array_pop($to_visit);
        echo $act;
        if($act == $end){
            return true;
        }
        array_push($visited, $act); //hmm
        $n = 0;
        foreach($graph[$act] as $neigh){
            if($neigh > 0){
                if(in_array($n, $to_visit) || in_array($n, $visited)){
                    //poznámka: negace pomocí ! před "in_array" mi nefungovala
                }else{
                    array_push($to_visit, $n);
                }
            }
            $n++;
        }
    }
}

var_dump(path_exists($graph1, 3, 4));
