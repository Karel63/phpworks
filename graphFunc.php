<?php

$graph1 = [[0, 1, 1, 1, 1],
          [1, 0, 1, 1, 1],
          [1, 1, 0, 1, 1],
          [1, 1, 1, 0, 1],
          [1, 1, 1, 1, 0]
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
        if($act == $end){
            return true;
        }
        array_push($visited, $act);
        foreach($graph[$act] as $neigh){
            if(!in_array($neigh, $to_visit) or !in_array($neigh, $visited)){
                array_push($to_visit, $neigh);
            }
        }
    }
}

var_dump(path_exists($graph1, 1, 2));
